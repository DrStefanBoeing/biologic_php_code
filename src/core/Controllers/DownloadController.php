<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\AjaxTable;
use Biologic\Core\Classes\Formatter;
use Biologic\Core\Classes\Request;
use Biologic\Core\Models\Custom\GeneTable;

class DownloadController
{
    public static function geneTable(Request $request)
    {
        $rnaseq_db_table = setting('rnaseq_db_table');
        $selection = setting('venn.selection');

        /* TODO for scatterplot version - make sure this is coming up client side
        if(isset($input['query_defaults']['type']) && $input['query_defaults']['type'] === 'scatter') {
            $selection = setting('scatterplot.selection');
        }
        */

        $ptm_display_column = setting('ptm_display_column');

        $gene_table = new GeneTable($rnaseq_db_table, array_keys($selection),
            $request->input('join') == 'OR' ? 'OR' : 'AND');
        if($ptm_display_column != '') {
            $gene_table->getQBuilder()->addSelect($ptm_display_column);
        }
        $gene_table->addHighLowClauses($selection, $request->input());
        $gene_table->selectedGene($request->input('selected_gene') ?? null,
            $request->input('exact') ?? false);

        if($request->input('category_id') !== null) {
            $gene_table->inCategory($request->input('category_id'));
        }

        if(!empty($request->input('search'))) {
            $gene_table->search($search = $request->input('search'));
        }

        $ajax_table = new AjaxTable($gene_table->getQBuilder());

        $rows = $ajax_table->getRows(-1, 0, '', 'ASC');

        $formatter = new Formatter($rows);
        $output = $formatter->convert($request->route('format'));

        // TODO: do we need to retain the sort and the order?

        header("Content-Type: text/".$request->input('format'));
        header("Content-Disposition: attachment; filename='gene-table-export.". $request->route('format') ."'");
        echo $output;
        exit;
    }
}
