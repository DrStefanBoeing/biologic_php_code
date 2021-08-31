<?php

namespace Biologic\Core\Controllers;

use Biologic\Core\Classes\DB;

class PCAController
{
    public static function get()
    {
        $return_variables = [];

        $x_axis = 'PC1';
        $y_axis = 'PC2';

        if(isset($_GET['x_axis']) && $_GET['x_axis'] != '') {
            $x_axis = $_GET['x_axis'];
        }

        if(isset($_GET['y_axis']) && $_GET['y_axis'] != '') {
            $y_axis = $_GET['y_axis'];
        }

		if(isset($_GET['color_column']) && $_GET['color_column'] != '') {
            $color_column = $_GET['color_column'];
        } else {
			$color_column = "sample_group_colors";
		}

        $x_display = $x_axis; //$plot_selection[$x_axis]['name'];
        $y_display = $y_axis; //$plot_selection[$y_axis]['name'];

        //Create background sql query
        $pca_db_table = setting('pca');
        $bg_query = DB::query("SELECT DISTINCT * FROM $pca_db_table");

        $display_array = [];
        $counter = count($bg_query);
        for($r = 0; $r < $counter; $r++){
            $row = $bg_query[$r];
            $name = $row['sample_id'];
            $color = $row[$color_column];
            $display_array[] = [
                'x' => floatval($row[$x_axis]),
                'y' => floatval($row[$y_axis]),
                'name' => $name,
                'color' => $color
            ];
        };
        $json_bg = json_encode($display_array);

        $pca_column_names = [];
        $column_name_results = DB::query("SHOW columns FROM $pca_db_table");
        $count = 0;
        foreach($column_name_results as $column_name_result) {
            if(substr($column_name_result['Field'], 0, 2) == 'PC' ) {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }

            if($count >= 30) {
                break;
            }
        }
		
		## UMAP/tSNE ##
		$count = 0;
		foreach($column_name_results as $column_name_result) {
            if(substr($column_name_result['Field'], 0, 4) == 'UMAP' | substr($column_name_result['Field'], 0, 4) == 'tSNE') {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }
		}
		
		## percent mt ##
		$count = 0;
		foreach($column_name_results as $column_name_result) {
            if($column_name_result['Field'] == 'percent_mt' | $column_name_result['Field'] == 'nFeature_RNA') {
                array_push($pca_column_names, $column_name_result['Field']);
                $count += 1;
            }
		}

        $return_variables['scatterplotProperties'] = array(
            'background_series' => $json_bg,
            'x_axis' => $x_axis,
            'y_axis' => $y_axis,
            'x_axis_label' => $x_display,
            'y_axis_label' => $y_display,
            'pca_column_names' => $pca_column_names
        );

        return view('pages/pca.twig', $return_variables);
    }
}
