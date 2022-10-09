<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\Request;
use Biologic\Core\Models\Custom\Heatmap;
use Illuminate\Database\Capsule\Manager as QB;

class CategoryViewController
{
    public static function browse()
    {
        $cat_table_name = setting('data_db.cat_table_name');

        $cat_db_connection = 'default';
        if($cat_table_name == '') {
            $cat_table_name = 'cat_selection_default';
            $cat_db_connection = 'reference_categories';
        }

        $cat_groups = QB::connection($cat_db_connection)->table($cat_table_name)->distinct()->select('cat_group')
            ->orderBy('cat_group', 'ASC')->get();
        $category_table_headings = $cat_groups->pluck('cat_group')->toArray();

        $category_table_columns = array(
            'cat_name' => 'Category Name and Description',
            'cat_item_size' => 'Category Size',
            'cat_group' => 'Data Source', // data source doesn't seem to exist on this table...
            'comments_1' => 'Link to cat description'
        );

        return view('pages/category-view.twig', [
            'category_types' => $category_table_headings,
            'category_table' => [
                'heading' => $_GET['category_type'] ?? '',
                'columns' => $category_table_columns
            ]
        ]);
    }

    /**
     * @param Request $request
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     * @throws \Exception
     */
    public static function display(Request $request)
    {
        $category_query = $request->route('category_query');

        /* BEGIN CATEGORY QUERY LOGIC */
        ## Determine dbtable ##
        $dbtable = explode("__",$category_query)[0];

        $primary_gene_symbol = setting('primary_gene_symbol');
        $rnaseq_db_table = setting('rnaseq_db_table');
        $experiments = setting('venn.experiments');

        if ($primary_gene_symbol != "mgi_symbol" & $primary_gene_symbol != "hgnc_symbol"){
            $cat_select_gene_symbol = "hgnc_symbol";
        } else {
            $cat_select_gene_symbol = $primary_gene_symbol;
        }

        $cat_q = QB::connection('reference_categories')->table($dbtable)->distinct()
            ->select($cat_select_gene_symbol, 'cat_name')->where('cat_id', $category_query)
            ->orderBy($cat_select_gene_symbol, 'ASC')->first();

        ## A category query by cat_id will always yield one row ##
        ## No Need to loop through result array ##
        ## Build search query for primary database
        $cat_name = str_replace("_", " ", $cat_q->cat_name);
        $cat_gene_ids = explode(";", $cat_q->{$cat_select_gene_symbol});

        $ptm_display_column = setting('ptm_display_column');

        $cat_display_ptm_sites = array();
        $n = count($cat_gene_ids) - 1;
        for ($s=0; $s < $n; $s++) {
            $parts = explode("-", $cat_gene_ids[$s]);

            ## If the reference category is a PTM category it will contain geneName-T123 annotation ##
            if ($ptm_display_column != "") {
                $cat_display_ptm_sites[$s] = $parts[1];
            }

            $cat_gene_ids[$s] =  $parts[0];
        }

        $heatmap = new Heatmap($rnaseq_db_table, $experiments);
        // TODO: verify that this is the correct ptm_display_column implementation
        if($ptm_display_column != '') {
            $count = count($cat_gene_ids);
            for($i = 0; $i < $count; $i++) {
                $heatmap->getQBuilder()
                    ->orWhere(function($query) use($primary_gene_symbol, $cat_gene_ids, $ptm_display_column, $cat_display_ptm_sites, $i) {
                        $query->where($cat_select_gene_symbol, $cat_gene_ids[$i])
                            ->where($ptm_display_column, $cat_display_ptm_sites[$i]);
                });
            }
        } else {
            $heatmap->getQBuilder()->whereIn($primary_gene_symbol, $cat_gene_ids);
        }
        $heatmap->fetchResults();

        $venn_selection = setting('venn.selection');
        /* START DATATABLE LOGIC */
        $columns = array_merge(
            array($cat_select_gene_symbol => 'Gene name', 'gene_description' => 'Gene Description'),
            array_map(function($item) {
                return $item['name'];
            }, $venn_selection)
        );
        /* END DATATABLE LOGIC */

        return view('pages/category-query.twig', [
            'query' => $category_query,
            'heatmap' => array(
                'series' => $heatmap->getSeries(),
                'x_categories' => $heatmap->getXCategories(),
                'y_categories' => $heatmap->getYCategories()
            ),
            'table' => array(
                'columns' => $columns,
                'ajax_post_append' => array(
                    'join' => 'OR',
                    'category_id' => $category_query
                )
            ),
            'all_cat_genes' => implode(', ', array_filter($cat_gene_ids)),
            'cat_name' => $cat_name
        ]);

    }

    /**
     * Generate a heat-map using copy pasted values from either CSV or TSV.
     *
     * @param Request $request
     * @return view
     */
    public static function setCategoryViewPaste(Request $request)
    {
        $genes = NULL;
        $geneIds = NULL;

        if (empty($request->input('category-view-paste'))) {
            redirect_back('error','No values pasted.');
        }
        else {
            $pasted_values = $request->input('category-view-paste');

            if(strpos($pasted_values, ',')) {
                $genes = explode(',', $pasted_values);
            }
            else {
                $genes = preg_split('/\s+/', $pasted_values);
            }
            foreach ($genes as $gene) {
                $geneIds[] = preg_replace('/[^a-zA-Z0-9]/', '', htmlentities($gene));
            }
        }
        if(is_array($geneIds)) {
            $primary_gene_symbol = setting('primary_gene_symbol');
            $rnaseq_db_table = setting('rnaseq_db_table');
            $experiments = setting('venn.experiments');
            $venn_selection = setting('venn.selection');


            if ($primary_gene_symbol != "mgi_symbol" & $primary_gene_symbol != "hgnc_symbol"){
                $cat_select_gene_symbol = "hgnc_symbol";
            }
            else {
                $cat_select_gene_symbol = $primary_gene_symbol;
            }

            $heatmap = new Heatmap($rnaseq_db_table, $experiments);
            // TODO: verify that this is the correct ptm_display_column implementation. Ref: line 90.
            $heatmap->getQBuilder()->whereIn($primary_gene_symbol, $geneIds);
            $heatmap->fetchResults();

            if ($heatmap->getSeries() === '[]') {
                redirect_back('error','No results found for selection.');
            }

            $columns = array_merge(
                array($cat_select_gene_symbol => 'Gene name', 'gene_description' => 'Gene Description'),
                array_map(function($item) {
                    return $item['name'];
                }, $venn_selection)
            );

            return view('pages/category-query.twig', [
                'heatmap' => array(
                    'series' => $heatmap->getSeries(),
                    'x_categories' => $heatmap->getXCategories(),
                    'y_categories' => $heatmap->getYCategories()
                ),
                'table' => array(
                    'columns' => $columns,
                    'ajax_post_append' => array(
                        'join' => 'OR',
                    )
                ),
                'all_cat_genes' => implode(', ', array_filter($genes)),
                'paste_category_view_menu_items' => $request->input('category-view-categories'),
            ]);
        }
    }

    /**
     * Generate a heat-map form for CSV and TSV pasted inputs.
     *
     * @return \Biologic\Core\Classes\Responses\ViewResponse
     */
    public static function getCategoryViewPaste()
    {
        return view('pages/category-query.twig', []);
    }
}
