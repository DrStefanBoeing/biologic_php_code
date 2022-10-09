<?php

namespace Biologic\Core\Controllers;

use Illuminate\Database\Capsule\Manager as QB;


class GeneViewController
{
    public static function get()
    {
        $return_variables = [];

        if(isset($_GET['query'])) {
            $q_gene_name = $_GET['query'];
            $primary_gene_symbol = setting('primary_gene_symbol');
            $rnaseq_db_table = setting('rnaseq_db_table');
            $selection = setting('venn.selection');

            $plot_query = QB::table($rnaseq_db_table)->distinct();
            if(isset($_GET['exact'])) {
                $plot_query->where($primary_gene_symbol, '=', $q_gene_name);
            } else {
                $plot_query->where($primary_gene_symbol, 'LIKE', "%$q_gene_name%");
            }
            $plot_results = $plot_query->orderBy($primary_gene_symbol, 'ASC')->get();



            /* START TIMECOURSE LOGIC */
            /* Add timecourse parameters, if they exists */
            $h = setting('timecourse_chart');

            $return_variables = [];

            if (isset($h)){
                $dashStyle_array = array(
                    'Solid',
                    'Solid',
                    'ShortDash',
                    'ShortDot',
                    'ShortDashDot',
                    'ShortDashDotDot',
                    'Dot',
                    'Dash',
                    'LongDash',
                    'DashDot',
                    'LongDashDot',
                    'LongDashDotDot'
                );

                /* Create tick position array */
                $timepoint_array = setting('timecourse_chart.timepoint_array');
                $tickPositions = "[";
                foreach ($timepoint_array as $timepoint) {
                    $tickPositions = $tickPositions.$timepoint.",";
                }
                $tickPositions = substr($tickPositions,0,-1);
                $tickPositions = $tickPositions."]";

                /* Determine xmin and xmax */
                $xmin = $timepoint_array[0] - 1;
                $xmax = $timepoint_array[(count($timepoint_array)-1)] +1;
                

                ###############################################################################
                # Create plotlines_array
                $vlinecolor = '#D3D3D3';
				$vlinestyle = 'longdashdot';

                $plotlines_array = "[";

                $plotlines_array = $plotlines_array."{
				    color: '$vlinecolor',
				    dashstyle: 'Solid',
				    value: $xmin,
				    width: 1
			    },";
                $timepoint_array_count = count($timepoint_array);
                for ($i=0; $i< $timepoint_array_count; $i++){
                    $plotlines_array = $plotlines_array."{
				    color: '$vlinecolor',
				    dashstyle: '$vlinestyle',
				    value: $timepoint_array[$i],
				    width: 1
			    },";
                }

                $plotlines_array = $plotlines_array."{
				    color: '$vlinecolor',
				    dashstyle: 'Solid',
				    value: $xmax,
				    width: 1
			    }]";


                # End create plotlines_array
                ###############################################################################


                ################################################################################
                # Function: Calculate median arrays for replicates of all datasets
                ################################################################################
                function calculate_median($arr) {
                    sort($arr);
                    $count = count($arr); //total numbers in array
                    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
                    if($count % 2) { // odd number, middle is the median
                        $median = $arr[$middleval];
                    } else { // even number, calculate avg of 2 medians
                        $low = $arr[$middleval];
                        $high = $arr[$middleval+1];
                        $median = (($low+$high)/2);
                    }
                    return $median;
                }

                ################################################################################
                # End: Function
                ################################################################################

                ###############################################################################
                ## Reduce $query to the first row, e.g. when multiple ids interfere          ##
                #echo "NR:".$nrows;
                $first_query_row_only = TRUE;

                if (($first_query_row_only) & ($nrows > 0)){
                    $counter_max = 1;
                    #$counter_max = count($query);
                    #	$query = $query[0];
                } else {
                    $counter_max = count($plot_results);
                }
                
                ## End reduce $query to one row                                              ##
                ###############################################################################

                ################
                ## Query processing

                ## Calculate spline ##

                ## Add individual data points ##
                $tsVarArray = setting('timecourse_chart.datasets');
                $plot_results_dc = json_decode(json_encode($plot_results),true);

                for ($l =0; $l < $counter_max; $l++){

                    # Select lineStyple

                    if ($l <= 10){
                        $pos = $l;
                    } else {
                        $pos = 0;
                    }

                    
                    $dashStyle = $dashStyle_array[$pos];

                    $row = $plot_results_dc[$l];
                    extract($row);
                    $j = 0;

                    /* datasets are lines */
                    $datasets = array_keys($tsVarArray);


                    $TempDataString = "";

                    foreach( $tsVarArray as $key => $ts ){
                        $dataset_color = $ts['color'];
                        $TempDataString = $TempDataString."{
                            type: 'spline', 
                            name: '$key', 
                            dashStyle: '$dashStyle', 
                            color: '$dataset_color', 
                            marker: {
					            enabled: false
				            },
				            states: {
					            hover: {
						            lineWidth: 0
					            }
				            },
				            enableMouseTracking: false,
                            data:[";

                       
                        $sampleKeys = array_keys($ts['sample_group']);

                        /* Start sample per timepoint handling */
                        foreach ($sampleKeys as $sampleID){
                            $xtime = $ts['sample_group'][$sampleID]['timepoint'];
                            $valCol = $ts['sample_group'][$sampleID]['sampleDbCols'];
                            
                            $value_array = array();
                            foreach ($valCol as $valSample){
                                $value_array[] = floatval(${$valSample});
                            }

                            
                            $name = $sampleID."_median_array".$l;
                            ${$name}[] = calculate_median($value_array);
                            

                            $TempDataString = $TempDataString."[".$xtime.",".${$name}[0]."],";

                        }
                        $TempDataString = substr($TempDataString,0,-1);
                        $TempDataString = $TempDataString."]},";

                         
                        # Done calculate medians for replicates
                        ###############################################################################

                    }

                    ####################
                    ## Now the dots 
                    $dotlinewidth = 0;
                    $dotradius = 3;

                    foreach( $tsVarArray as $key => $ts ){
                        $dataset_color = $ts['color'];
                        $TempDataString = $TempDataString."{
                            type: 'scatter',
                            showInLegend: false,
                            name: '$key', 
                            color: '$dataset_color',
                            marker: {
                                radius: $dotradius,
                                symbol: 'circle',
                                lineColor: 'black',
                                lineWidth: $dotlinewidth
                            },
                            tooltip: {
                                headerFormat: 'Sample: {series.name}<br>',
                                pointFormat: 'Timepoint:{point.x} days, TPM: {point.y}'
                            },
                            data:[";

                       
                        $sampleKeys = array_keys($ts['sample_group']);

                        /* Start sample per timepoint handling */
                        foreach ($sampleKeys as $sampleID){
                            $xtime = $ts['sample_group'][$sampleID]['timepoint'];
                            $valCol = $ts['sample_group'][$sampleID]['sampleDbCols'];

                            foreach ($valCol as $valSample){
                                $NewValue = floatval(${$valSample});
                                $TempDataString = $TempDataString."[".$xtime.",".$NewValue."],";
                            }

                        }
                        $TempDataString = substr($TempDataString,0,-1);
                        $TempDataString = $TempDataString."]},";
                    }
                    ## Done with dots
                    ####################
                    ## End processing individual samples for one l
                }

                $TempDataString = substr($TempDataString,0,-1);

                ## Done query processing
                ####################
                $series = "[".$TempDataString."]";
                

                $return_variables['timecourse_chart'] = array(
                    'tickPositions' => $tickPositions,
                    'xmin' => $xmin,
                    'xmax' => $xmax,
                    'plotlines_array' => $plotlines_array,
                    'series' => $series
                );

            }
            /* END TIMECOURSE LOGIC */


            /* START BAR CHART LOGIC */
            $samples = setting('samples');
            $bar_chart_data = [];
            $bar_chart_categories = [];
            $i = 0;
            if(count($plot_results) > 0) { // this could later be replaced by a loop over returned rows if needed
                foreach ($samples as $sample_key => $sample) {
                    array_push($bar_chart_data, [
                        'x' => $i,
						'y' => floatval($plot_results[0]->{$sample_key}),
                        'color' => $sample['color']
                    ]);
                    array_push($bar_chart_categories, $sample['name']);
                    $i++;
                }
            }

            $bar_chart_series = array(
                array(
                    'type' => 'column',
                    'name' => 'Series1',
                    'showInLegend' => false,
                    'data' => $bar_chart_data,
                    'marker' => array( 'enabled' => true ),
                    'states' => array( 'hover' => array( 'lineWidth' => 0 ) ),
                    'enableMouseTracking' => true
                )
            );
            /* END BAR CHART LOGIC */

            /* DATA TABLE 1 LOGIC */
            $table_1_columns = array($primary_gene_symbol => 'Nearest Gene name', 'gene_description' => 'Gene Description');
            if(setting('ptm_display_column') != '') {
                $table_1_columns['ptm_display_column'] = 'PTM position';
            }
            $table_1_columns = array_merge(
                $table_1_columns,
                array_map(function($item) {
                    return $item['name'];
                }, $selection)
            );
            /* END DATA TABLE 1 LOGIC */


            /* START CATEGORY TABLES LOGIC */
            $cat_table_name = setting('data_db.cat_table_name');
            $cat_db_connection = 'default';
            if($cat_table_name == '') {
                $cat_table_name = 'cat_selection_default';
                $cat_db_connection = 'reference_categories';
            }
            $category_table_headings = QB::connection($cat_db_connection)->table($cat_table_name)->distinct()->select('cat_group')
                ->orderBy('cat_group', 'ASC')->get()->pluck('cat_group')->toArray();

            $category_table_columns = array(
                'cat_id' => 'Show screen data for',
                'cat_name' => 'Category Name and Description',
                'comments_1' => 'Link to cat description',
                'data_source' => 'Data Source',
                'cat_item_size' => 'Category Size'
            );
            /* END CATEGORY TABLES LOGIC */


            $return_variables['query'] = $q_gene_name;
            $return_variables['bar_chart'] = array(
                'categories' => json_encode($bar_chart_categories),
                'series' => json_encode($bar_chart_series),
                'x_max' => count($bar_chart_categories)
            );
            $return_variables['data_table_1'] =  array(
                'heading' => "Results for $q_gene_name",
                'columns' => $table_1_columns,
                'ajax_post_append' => array('join' => 'AND', 'selected_gene' => $q_gene_name, 'exact' => $_GET['exact'] ?? false)
            );

            $return_variables['category_tables'] = array(
                'headings' => $category_table_headings,
                'columns' => $category_table_columns
            );
            }
        return view('pages/gene-view.twig', $return_variables);
    }
}
