<?php
namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\DB;

class FeatureController
{
    public static function get() {
        $return_variables = [];
        $default_x_axis = setting('featureViewParams.default_x_axis') ??null;
        $default_y_axis = setting('featureViewParams.default_y_axis') ??null;
        $default_gene = setting('featureViewParams.defaultGene') ??null;
        $db_name = setting('data_db_name');


        if (!empty(setting('splitByColumn'))) {
            $splitOptions = setting('splitByColumn') ??null;
        }
        else {
            $splitOptions = "None";
        }

        if (empty($_GET['gene'])) {
            $_GET['gene'] = $default_gene;
        }

        if (empty($_GET['view'])) {
            $_GET['view'] = "feature_view";
        }

        if (empty($_GET['x_axis'])) {
            $_GET['x_axis'] = $default_x_axis;
        }

        if (empty($_GET['y_axis'])) {
            $_GET['y_axis'] = $default_y_axis;
        }

        if (empty($_GET['dotsize'])) {
            $_GET['dotsize'] = 2;
        }

        ## Handle dotsize parameter
        $dotsize = $_GET['dotsize'];

        if (isset($_GET['x_axis']) && $_GET['x_axis'] != '') {
            $x_axis = $_GET['x_axis'];
        }

        if (isset($_GET['y_axis']) && $_GET['y_axis'] != '') {
            $y_axis = $_GET['y_axis'];
        }

        if (isset($_GET['color_column']) && $_GET['color_column'] != '') {
            $color_column = $_GET['color_column'];
        }
        else {
            $color_column = "lg10Expr";
        }

        $x_display = $x_axis;
        $y_display = $y_axis;
        //Create background sql query
        $pca_db_table = setting('pca');
        $bg_query = DB::query("SELECT DISTINCT * FROM $pca_db_table");

        $display_array = [];
        $counter = count($bg_query);

        for ($r = 0;$r < $counter;$r++) {
            $row = $bg_query[$r];
            $name = $row['sample_id'];
//            $color = $row[$color_column];
            $display_array[] = [
                'x' => floatval($row[$x_axis]) ,
                'y' => floatval($row[$y_axis]) ,
                'name' => $name,
//                'color' => $color
            ];
        };
        $json_bg = json_encode($display_array);

        $pca_column_names = [];
        $column_name_results = DB::query("SHOW columns FROM $pca_db_table");

        ## UMAP/tSNE ##
        $count = 0;
        foreach ($column_name_results as $column_name_result) {
            if (substr($column_name_result['Field'], 0, 4) == 'UMAP' | substr($column_name_result['Field'], 0, 4) == 'tSNE') {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }
        }

        $count = 0;
        foreach ($column_name_results as $column_name_result) {
            if (substr($column_name_result['Field'], 0, 2) == 'PC') {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }

            if ($count >= 30) {
                break;
            }
        }

        ## percent mt ##
        $count = 0;
        foreach ($column_name_results as $column_name_result) {
            if ($column_name_result['Field'] == 'percent_mt' | $column_name_result['Field'] == 'nFeature_RNA' | $column_name_result['Field'] == 'nFeature_SCT' | $column_name_result['Field'] == 'nCount_RNA' | $column_name_result['Field'] == 'nCount_SCT') {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }
        }

        $featureViewGeneResults = null;
        $plots = [];

        // Get results for  Feature view.
        $query = "SELECT DISTINCT `gene` FROM " . setting('featureViewParams.geneExprTb') . " WHERE `gene`=:gene";
        $target_gene = $_GET['gene'];
        $highlight_gene_arr = DB::query($query, ['gene' => $target_gene], $db_name);
        $highlight_gene = call_user_func_array('array_merge', $highlight_gene_arr)['gene'];

        // Overwrite existing x and y axis.
        $x_axis = null;
        $y_axis = null;

        foreach ($pca_column_names as $pca_column_name) {

            if ($pca_column_name === $_GET['x_axis']) {
                $x_axis = $pca_column_name;
            }
            if ($pca_column_name === $_GET['y_axis']) {
                $y_axis = $pca_column_name;
            }
        }

        if ($x_axis != 'lg10Expr') {
//            $qX = 'tb2.' . $x_axis;
            $qX = $x_axis;
            $q1 = $x_axis . ', ';
        }
        else {
            $qX = '';
            $q1 = '';
        }

        if ($y_axis != 'lg10Expr') {
//            $qY = 'tb2.' . $y_axis;
            $qY = $y_axis;
            $q2 = $y_axis . ', ';
        }
        else {
            $qY = '';
            $q2 = '';
        }

        $coordSelect = $q1 . $q2 . 'cellID, sampleID ';
        $query_results = NULL;
        $splitPlots = false;
        $exprCounterArray = [];
        $nCellsInPlotArray = [];
        // Split plots by column.
        if (!is_null($x_axis) && !is_null($y_axis)) {
            $subsetClause = ' WHERE 1 = 1 ';
            if (!empty($_GET['splitPlotBy'])) {
                $splitPlots = true;
                if ($_GET['splitPlotBy'] === 'sampleID') {
                    $sampleIDsQuery = 'SELECT DISTINCT `sampleID` FROM ' . setting("featureViewParams.coordTb");
                    $sampleIDsQueryResults = DB::query($sampleIDsQuery, [], setting('data_db_name'));
                    $sampleIDs = [];
                    foreach ($sampleIDsQueryResults as $sampleIDsQueryResultK => &$sampleIDsQueryResultV) {
                        foreach ($sampleIDsQueryResultV as $k => &$v) {
                            $exprCounterArray[$v] = 0;
                            $nCellsInPlotArray[$v] = 0;
                            $sampleIDs[] = "'$v'";
                        }
                    }
                    $subsetClause = " WHERE `sampleID` in  (" . implode(',', $sampleIDs) . ") ";
                }
            }

            $query = 'SELECT tb1.gene, tb1.lg10Expr, tb2.sampleID, tb2.cellID,  ' . $qX . ', ' . $qY . ' FROM (
        SELECT * FROM ' . setting('featureViewParams.geneExprTb') . ' WHERE gene = :gene)  AS tb1
            INNER JOIN (
        SELECT ' . $qX . ', ' . $qY . ', cellID, sampleID  FROM ' . setting("featureViewParams.coordTb") . $subsetClause . ') AS tb2
        ON tb1.cellID = tb2.cellID';

            $query_results_not_lg10Expr = DB::query($query, [
                'gene' => $highlight_gene
            ], $db_name);

            $query = 'SELECT :gene gene, null lg10Expr, ' . $qX . ', ' . $qY . ', cellID, sampleID FROM ' . setting("featureViewParams.coordTb");

            $query_results = DB::query($query, [
                'gene' => $highlight_gene
            ], $db_name);

            $result = [];
            $nCellsInPlotArray = [];
            foreach($query_results as &$query_result){
                $result[$query_result['cellID']] = $query_result;
                $nCellsInPlotArray[$query_result['sampleID']]++;
                $nCellsInPlotArray['total']++;
            }

            foreach($query_results_not_lg10Expr as &$query_result){
                $result[$query_result['cellID']]['lg10Expr'] = $query_result['lg10Expr'];
                $exprCounterArray['total']++;
            }

            $query_results = $result;
            foreach ($query_results as &$query_result) {

                $query_result[$x_axis] = (float)$query_result[$x_axis];
                $query_result[$y_axis] = (float)$query_result[$y_axis];

                if (empty($query_result['lg10Expr'])) {
                    $query_result['lg10Expr'] = (float)0;
                }
                else {
                    $query_result['lg10Expr'] = (float)$query_result['lg10Expr'];
                    $exprCounterArray[$query_result['sampleID']]++;
                }
                if($splitPlots) {
                    if ($x_axis == "lg10Expr" | $y_axis == "lg10Expr") {

                        $plots[$query_result['sampleID']][] = ['x' => $query_result[$x_axis], 'y' => $query_result[$y_axis], 'name' => $query_result['cellID'], 'sampleID' => $query_result['sampleID']
                            //'color' => $color,
                            //'log10Expr' => $query_result['lg10Expr'],
                        ];
                    } else {
                        $plots[$query_result['sampleID']][] = ['x' => $query_result[$x_axis], 'y' => $query_result[$y_axis], 'name' => $query_result['cellID'], 'sampleID' => $query_result['sampleID'],
                            //'color' => $color,
                            'log10Expr' => $query_result['lg10Expr'],];
                    }
                }else{
                    if ($x_axis == "lg10Expr" | $y_axis == "lg10Expr") {
                        $plots[] = ['x' => $query_result[$x_axis], 'y' => $query_result[$y_axis], 'name' => $query_result['cellID'], 'sampleID' => $query_result['sampleID'],
                            //'color' => $color,
                            'log10Expr' => $query_result['lg10Expr']];


                    }
                    else {
                        $plots[] = ['x' => $query_result[$x_axis], 'y' => $query_result[$y_axis], 'name' => $query_result['cellID'], 'sampleID' => $query_result['sampleID'],
                            //'color' => $color,
                            'log10Expr' => $query_result['lg10Expr'], ];
                    }

                }
                $featureViewGeneResults[] = $query_result;
            }
        }

        if($splitPlots) {


        }


        $plotContainer = [];
        if ($splitPlots) {
            foreach ($plots as $plotK => $plot) {
                $plotContainer[$plotK] = json_encode($plot);
            }
            $plots = $plotContainer;
        }
        else {
            $plots = json_encode($plots);
        }

        $x_display = $x_axis;
        $y_display = $y_axis;

        $return_variables['scatterplotProperties'] = [
            'highlight_gene' => $highlight_gene,
            'splitPlots' => $splitPlots,
            'plots' => $plots,
            'featureViewGeneResults' => $featureViewGeneResults,
            'background_series' => $json_bg,
            'x_axis' => $x_axis,
            'y_axis' => $y_axis,
            'default_x_axis' => $default_x_axis,
            'default_y_axis' => $default_y_axis,
            'x_axis_label' => $x_display,
            'y_axis_label' => $y_display,
            'pca_column_names' => $pca_column_names,
            'dotsize' => $dotsize,
            'splitOptions' => $splitOptions,
            'nCellsInPlot' => $nCellsInPlotArray,
            'nCellsExpressing' => $exprCounterArray
        ];

        return view('pages/feature.twig', $return_variables);
    }
}

