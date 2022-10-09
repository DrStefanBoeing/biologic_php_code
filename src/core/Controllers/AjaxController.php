<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\AjaxTable;
use Biologic\Core\Classes\Request;

use Biologic\Core\Models\Custom\GeneTable;
use Biologic\Core\Models\Custom\ReferenceCategories;
use Illuminate\Database\Capsule\Manager as QB;

class AjaxController
{
    /**
     * Helper method.
     *
     * Retrieve Gene category default db name from experiment settings, else use the default.
     *
     * @return array|mixed|null
     */
    private static function getGeneCatSuggestionDBNameDefault()
    {
        return setting('default_gene_cat_suggestion.dbname');
    }

    /**
     * Helper method.
     *
     * Retrieve custom Gene category db name from experiment settings, else use the default.
     *
     * @return array|mixed|null
     */
    private static function getGeneCatSuggestionDBNameCustom()
    {
        if (!empty(setting('gene_cat_suggestion.dbname'))) {

            return setting('gene_cat_suggestion.dbname');
        }

        return null;
    }

    /**
     * Helper method.
     *
     * Retrieve default Gene category db table name from experiment settings, else use the default.
     *
     * @return array|mixed|null
     */
    private static function getGeneCatSuggestionDBTableDefault()
    {
        return setting('default_gene_cat_suggestion.dbtable');
    }

    /**
     * Helper method.
     *
     * Retrieve custom Gene category db table name from experiment settings, else use the default.
     *
     * @return array|mixed|null
     */
    private static function getGeneCatSuggestionDBTableCustom()
    {
        if (!empty(setting('gene_cat_suggestion.dbtable'))) {

            return setting('gene_cat_suggestion.dbtable');
        }

        return null;
    }

    /**
     * Get list of available genes.
     *
     * @param Request $request
     *
     * @return \Biologic\Core\Classes\Responses\JSONResponse
     */
    public static function getGeneList()
    {
        $primary_gene_symbol = setting('primary_gene_symbol');

        $gene_list = QB::table(setting('rnaseq_db_table'))
            ->distinct()
            ->select($primary_gene_symbol)
            ->get()
            ->pluck($primary_gene_symbol)
            ->flatten();

        return json(array(
            'gene_list' => $gene_list
        ));
    }

    /**
     * Get a list of gene categories.
     *
     * @return \Biologic\Core\Classes\Responses\JSONResponse
     */
    public static function getGeneCategoryList()
    {
        // A default list is provided for all experiments.
        $gene_category_list_default = QB::connection(static::getGeneCatSuggestionDBNameDefault())
            ->table(static::getGeneCatSuggestionDBTableDefault())
            ->distinct()
            ->select('cat_name')
            ->get()
            ->pluck('cat_name')
            ->flatten();

        $gene_category_list = $gene_category_list_default;

        // If provided, retrieve a list of gene categories from a custom database.
        if (!empty(static::getGeneCatSuggestionDBNameCustom())
        && (!empty(static::getGeneCatSuggestionDBTableCustom()))) {

            $gene_category_list_custom = QB::connection(static::getGeneCatSuggestionDBNameCustom())
                ->table(static::getGeneCatSuggestionDBTableCustom())
                ->distinct()
                ->select('cat_name')
                ->get()
                ->pluck('cat_name')
                ->flatten();

            $gene_category_list = $gene_category_list_default->merge($gene_category_list_custom);
        }

        return json(array(
            'gene_category_list' => $gene_category_list
        ));
    }

    /**
     * Get list of genes from the give db and table.
     *
     * @param Request $request
     * @return \Biologic\Core\Classes\Responses\JSONResponse
     */
    public static function getGeneCategory(Request $request)
    {
        $gene_category_id = QB::connection(static::getGeneCatSuggestionDBNameDefault())
            ->table(static::getGeneCatSuggestionDBTableDefault())
            ->distinct()
            ->select('cat_id')
            ->where('cat_name', '=', $request->route('gene_cat_name'))
            ->get()
            ->pluck('cat_id')
            ->flatten();

        return json(array(
            'gene_category_id' => $gene_category_id
        ));
    }

    public static function tableEntries(Request $request)
    {
        $input = $request->json();
        $experiment_code = $request->route('experiment_code');

        $primary_gene_symbol = setting('primary_gene_symbol');
        $rnaseq_db_table = setting('rnaseq_db_table');
        $selection = setting('venn.selection');
        if(isset($input['query_defaults']['type']) && $input['query_defaults']['type'] === 'scatter') {
            $selection = setting('scatterplot.selection');
        }

        $ptm_display_column = setting('ptm_display_column');

        $gene_table = new GeneTable($rnaseq_db_table, array_keys($selection),
            $input['query_defaults']['join'] == 'OR' ? 'OR' : 'AND');
        if($ptm_display_column != '') {
            $gene_table->getQBuilder()->addSelect($ptm_display_column);
        }
        $gene_table->addHighLowClauses($selection, $input['query_defaults']);
        $gene_table->selectedGene($input['query_defaults']['selected_gene'] ?? null,
            $input['query_defaults']['exact'] ?? false);

        if(isset($input['query_defaults']['category_id'])) {
            $gene_table->inCategory($input['query_defaults']['category_id']);
        }

        if(isset($input['search']) && $input['search'] != "") {
            $gene_table->search($search = $input['search']);
        }

        $low_highlight = setting('venn.table.low_highlight');
        $high_highlight = setting('venn.table.high_highlight');

        $ajax_table = new AjaxTable($gene_table->getQBuilder());
        $ajax_table->setTransform(function($key, $value) use ($primary_gene_symbol, $low_highlight, $high_highlight, $experiment_code) {
            if($key === $primary_gene_symbol) {
                return "<a href='".url("/".$experiment_code."/gene-view?query=".$value."&exact=TRUE")."' class='center'>$value</a>";
            } else if($key === 'gene_description') {
                return $value;
            } else if($key === 'ptm_display_column') {
                return "<a href='".url("/gene-view")."'>$value</a>";
            } else if($value > $high_highlight) {
                return "<div class='success'><span>$value</span></div>";
            } else if($value < $low_highlight) {
                return "<div class='danger'><span>$value</span></div>";
            }

            return $value;
        });

        $rows = $ajax_table->getRows($input['limit'] ?? 5000, $input['offset'] ?? 0, $input['sort'] ?? '', $input['order']);
        $total = $ajax_table->getTotal();

        return json(array(
            'rows' => $rows,
            'total' => $total
        ));
    }

    public static function refCategories(Request $request)
    {
        $input = $request->json();
        $experiment_code = $request->route('experiment_code');

        $q_gene_name = $input['query_defaults']['q_gene_name'];
        $cat_table_name = setting('data_db.cat_table_name');

        $ref_category_ids = QB::table($cat_table_name)->distinct()
            ->select('cat_id')->where('cat_group', $input['query_defaults']['cat_heading'])->get();

        $cat_ids = $ref_category_ids->map(function($item) {
            return explode('__', $item->cat_id)[0];
        })->unique();

        $ref_categories = new ReferenceCategories();
        if(isset($input['search']) && $input['search'] != "") {
            $ref_categories->setSearch($input['search']);
        }
        $ref_categories->appendCats($cat_ids, $q_gene_name);

        $ajax_table = new AjaxTable($ref_categories->getQBuilder());
        $ajax_table->setTransform(function($key, $value) use($experiment_code) {
            if($key === 'cat_id') {
                return "<a href='".url("/".$experiment_code."/category-view/".$value)."'>Category members</a>";
            } else if($key === 'cat_name') {
                return str_replace("_", " ", $value);
            } else if($key === 'comments_1') {
                return "<a href='$value' target='_blank'>Cat. description</a>";
            } else if($key === 'data_source') {
                return $value;
            } else if($key === 'cat_item_size') {
                return $value;
            }

            return null;
        });

        $rows = $ajax_table->getRows($input['limit'] ?? 5000, $input['offset'] ?? 0, $input['sort'] ?? '', $input['order']);
        $total = $ajax_table->getTotal();

        return json(array(
            'rows' => $rows,
            'total' => $total
        ));
    }

    public static function localCategories(Request $request)
    {
        $input = $request->json();
        $experiment_code = $request->route('experiment_code');

        $cat_heading = $input['query_defaults']['cat_heading'];
        $cat_table_name = setting('data_db.cat_table_name');

        $q_builder = QB::table($cat_table_name)->distinct()->where('cat_group', $cat_heading);
        if(isset($input['search']) && $input['search'] != '') {
            // replacing spaces with underscore because of the general format for this column
            $q_builder->where('cat_name', 'LIKE', '%'.str_replace(' ', '_', $input['search']).'%');
        }

        $ajax_table = new AjaxTable($q_builder);
        $ajax_table->setTransform(function($key, $value, $row) use ($experiment_code) {
            if($key === 'cat_name') {
                return "<a href='". url("/".$experiment_code."/category-view/".esc($row->cat_id))."'>".str_replace('_', ' ', $value)."</a>";
            } else if($key === 'cat_item_size') {
                return $value;
            } else if($key === 'cat_group') {
                return '';
            } else if($key == 'comments_1') {
                return "<a href ='$value' target='_blank'>Cat. description</a>";
            }

            return null;
        });

        $rows = $ajax_table->getRows($input['limit'] ?? 5000, $input['offset'] ?? 0, $input['sort'] ?? '', $input['order']);
        $total = $ajax_table->getTotal();

        return json(array(
            'rows' => $rows,
            'total' => $total
        ));

    }
}