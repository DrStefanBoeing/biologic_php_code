<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\DB;

class ScatterplotController
{
    public static function get()
    {
        $return_variables = [];
        ###############################################################################
        ## Set defaults                                                              ##
        if (!isset($plot_selection)){
            $plot_selection = setting('scatterplot.selection');
        }


        ##                                                                           ##
        ###############################################################################

        $default_x_axis = setting('scatterplot.default_x_axis');
        $default_y_axis = setting('scatterplot.default_y_axis');

        if(isset($_GET['x_axis']) && $_GET['x_axis'] != '') {
            $x_axis = $_GET['x_axis'];
        } else if(isset($default_x_axis)) {
            $x_axis = $default_x_axis;
        } else {
            $x_axis = collect($plot_selection)->keys()->first();
        }

        if(isset($_GET['y_axis']) && $_GET['y_axis'] != '') {
            $y_axis = $_GET['y_axis'];
        } else if(isset($default_y_axis)) {
            $y_axis = $default_y_axis;
        } else {
            $y_axis = collect($plot_selection)->keys()->get(2);
        }


        $x_display =   $plot_selection[$x_axis]['name'];
        $y_display =   $plot_selection[$y_axis]['name'];

		## Set defaults
		$highlight_gene = '';
		$cat_id = 'ag_lab_categories__10';
		$cat_name = 'Transcription Factors MC';
		$category_query = TRUE;
        $linkToCatDescription = "";
		
		if (isset($_GET['highlight_gene'])){
            $highlight_gene = esc($_GET['highlight_gene']);
			$cat_id = '';
			$cat_name = '';
			$category_query = FALSE;
        }
		
        if (isset($_GET['cat_id']) && !empty($_GET['cat_id'])){
            $cat_id = esc($_GET['cat_id']);
            if (isset($_GET['cat_name'])) {
                $cat_name = $_GET['cat_name'];
            } 
        } 
		
		

        $ptm_display_column = setting('ptm_display_column');
        $rnaseq_db_table = setting('rnaseq_db_table');
        $primary_gene_symbol = setting('primary_gene_symbol');
        ## Temporary fix ##
        $ptm_pos_column = $ptm_display_column;

        //Create background sql query
        $sql_background = p1_dp_create_sql (
            $ptm_display_column = $ptm_display_column,
            $x_axis = $x_axis,
            $y_axis = $y_axis,
            $primary_gene_symbol = $primary_gene_symbol,
            $include_zero_values = FALSE,
            $primary_data_db_table = $rnaseq_db_table,
            $gene_selection = ""
        );

        $backtround_legend_string = "All genes in screen";

        ## Ensure display even if no gene is selected ##
        if ($highlight_gene == "" & $cat_id == ""){
            $highlight_gene = "No gene or category selected";
        }

        if ($highlight_gene != ""){
            $sql_highlight = p1_dp_create_sql (
                $ptm_display_column,
                $x_axis,
                $y_axis,
                $primary_gene_symbol,
                $include_zero_values = FALSE,
                $primary_data_db_table = $rnaseq_db_table,
                $gene_selection = $primary_gene_symbol." = '".$highlight_gene."' AND "
            );

            $highlight_legend_string = $highlight_gene;
            $highlight = "highlight_gene";
            $headline = "<h2><b>2D Scatterplot</b></h2> <br><font color = 'red'>".$highlight_legend_string."</font>";

        } else if ($cat_id != ""){
            ## Set default to human for category lookup for non-human and non-mouse samples ##
            if ($primary_gene_symbol != "mgi_symbol" & $primary_gene_symbol != "hgnc_symbol"){
                $cat_select_gene_symbol = "hgnc_symbol";
            } else {
                $cat_select_gene_symbol = $primary_gene_symbol;
            }


            ## Step 1: Get genes to highlight ##
            $gene_selection = p1_dp_create_cat_gene_query (
                $cat_id,
                $cat_select_gene_symbol
            );

            $cat_name = $gene_selection['cat_name'];
            $cat_link = $gene_selection['comments_1'];
            $gene_selection = $gene_selection['search_query'];

            if (strpos($gene_selection, 'Error') !== false){
                echo "Error. Category not found.";
            } else {
                if ($ptm_display_column != ""){
                    $extra_columns_array = array("gene_description", $ptm_display_column);
                } else {
                    $extra_columns_array = array("gene_description");
                }


                $sql_highlight = p1_dp_create_sql (
                    $ptm_display_column,
                    $x_axis,
                    $y_axis,
                    $primary_gene_symbol,
                    $include_zero_values = FALSE,
                    $primary_data_db_table = $rnaseq_db_table,
                    $gene_selection = $gene_selection." AND ",
                    $extra_columns_array
                );

                $table_sql = $sql_highlight;

            }

            $highlight_legend_string = str_replace("_", " ", $cat_name);
            $highlight = "cat_id";
            $headline = "Scatterplot <br><font color = 'red'>".$highlight_legend_string."</font>";
            $linkToCatDescription = "<a href = '".$cat_link."' target='_blank'>Link to Category description</a>";

        }


        /*$params = array(':q_gene_name' => $q_gene_name);
        $gene_results = DB::query($sql_background , $params);
        $gene_results = DB::query($sql_highlight, $params);*/

        $bg_query = DB::query($sql_background);

        $display_array = [];
        $counter = count($bg_query);
        for($r = 0; $r < $counter; $r++){
            $row = $bg_query[$r];
            $name = $row[$primary_gene_symbol];
            if ($ptm_display_column != ''){
                $name = $row[$primary_gene_symbol]."-".$row[$ptm_display_column];
            }
            $display_array[] = ['x' => floatval($row[$x_axis]), 'y' => floatval($row[$y_axis]), 'name' => $name];
        };
        $json_bg = json_encode($display_array);

        #Find data to highlight
        #$highlight_query = mysqli_query($cxn, $highlight_sql_query);


        $highlight_query = DB::query($sql_highlight);

        if (count($highlight_query) > 0) {
            $counter = count($highlight_query);
            for ($r = 0; $r < $counter; $r++) {
                $row = $highlight_query[$r];

                $name = $row[$primary_gene_symbol];
                if ($ptm_pos_column != '') {
                    $name = $row[$primary_gene_symbol] . "-" . $row[$ptm_display_column];
                }
                $HLdisplay_array[] = ['x' => floatval($row[$x_axis]), 'y' => floatval($row[$y_axis]), 'name' => $name];
            };
            $json_gene = json_encode($HLdisplay_array);
        } else {
            $json_gene = "{}";
        }



        $return_variables['scatterplotProperties'] = array(
            'background_series' => $json_bg,
            'highlight_series' => $json_gene,
            'x_axis' => $x_axis,
            'y_axis' => $y_axis,
            'x_axis_label' => $x_display,
            'y_axis_label' => $y_display,
            'x_low_line' => setting('scatterplot.x_low_line'),
            'x_high_line' => setting('scatterplot.x_high_line'),
            'y_low_line' => setting('scatterplot.y_low_line'),
            'y_high_line' => setting('scatterplot.y_high_line'),
            'headline' => $headline,
            'linkToCatDescription' => $linkToCatDescription,
            'highlight' => $highlight,
            'headlineStr' => $backtround_legend_string,
            'highlightStr' => $highlight_legend_string
        );

        /* START DATATABLE LOGIC */
        if($cat_id != "") {
            $table_columns = array(
                $primary_gene_symbol => 'Gene name',
                'gene_description' => 'Gene Description',
                $x_axis => $x_display,
                $y_axis => $y_display
            );


            $return_variables['table'] = array(
                'heading' => "Category genes in this study:",
                'columns' => $table_columns,
                'ajax_post_append' => array(
                    'join' => 'AND',
                    'category_id' => $cat_id,
                    'type' => 'scatter'
                )
            );

        }
        /* END DATATABLE LOGIC */
        $return_variables['cat_id'] = $cat_id;
        $return_variables['highlight_gene'] = $highlight_gene;

        return view('pages/scatterplot.twig', $return_variables);
    }
}
