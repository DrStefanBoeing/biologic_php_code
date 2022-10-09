<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\Request;
use Biologic\Core\Models\Custom\Heatmap;

class VennController
{
    public static function get(Request $request)
    {
        if($request->input('join') === null) {
            return view('pages/venn.twig', [
                'venn_selection' => setting('venn.selection')
            ]);
        }

        $experiments = setting('venn.experiments');
        $primary_gene_symbol = setting('primary_gene_symbol');
        $rnaseq_db_table = setting('rnaseq_db_table');
        $venn_selection = setting('venn.selection');

        $heatmap = new Heatmap($rnaseq_db_table, $experiments);
        $heatmap->getQBuilder()->addSelect('cluster_order');
        $heatmap->getQBuilder()->where('cluster_order', '>', 0);
        $heatmap->addMinMaxConditions($request);
        $heatmap->fetchResults();

        /* START DATA TABLE LOGIC */
        $ajax_post_append = [];
        foreach($venn_selection as $column_key => $selection){
            $high = $column_key."_high";
            $low = $column_key."_low";
            $ajax_post_append[$high] = $request->input($high) ?? $selection['slider_max'];
            $ajax_post_append[$low] = $request->input($low) ?? $selection['slider_min'];
        }
        $ajax_post_append['join'] = strtoupper($request->input('join')) == 'OR' ? 'OR' : 'AND';

        $columns = array($primary_gene_symbol => 'Gene name', 'gene_description' => 'Gene Description');
        if(setting('ptm_display_column') != '') {
            $columns[setting('ptm_display_column')] = 'PTM position';
        }
        $columns = array_merge(
            $columns,
            array_map(function($item) {
                return $item['name'];
            }, $venn_selection)
        );
        /* END DATA TABLE LOGIC */

        return view('pages/venn.twig', [
            'venn_selection' => $venn_selection,
            'heatmap' => array(
                'series' => $heatmap->getSeries(),
                'x_categories' => $heatmap->getXCategories(),
                'y_categories' => $heatmap->getYCategories()
            ),
            'table' => array(
                'columns' => $columns,
                'ajax_post_append' => $ajax_post_append
            )
        ]);
    }
}
