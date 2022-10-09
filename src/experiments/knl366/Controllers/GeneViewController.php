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
            if (isset(setting('timecourse_chart'))) {
                $tickPositions = "[0,1,2,3,4,5]";
                $y_axis_label = 'Counts';
                $x_axis_label = 'min';
                $vlinecolor = '#D3D3D3';
                $vlinestyle = 'longdashdot';
                $dotlinewidth = 0;
                $dotradius = 3;
                $xmin = -1;
                $xmax = 6;
                $dataset_color = "red";
                $timepoint = "timepoint1";
                $datasetLegend = "Legend";
                $dashStyle = "longdashdot";

                $plotlines_array = "[{
                    color: '$vlinecolor',
                    dashstyle: '$vlinestyle',
                    value: $xmin,
                    width: 1
                },{
                    color: '$vlinecolor',
                    dashstyle: '$vlinestyle',
                    value: 1,
                    width: 1
                    },{
                    color: '$vlinecolor',
                    dashstyle: '$vlinestyle',
                    value: 2,
                    width: 1
                    },{
                    color: '$vlinecolor',
                    dashstyle: '$vlinestyle',
                    value: $xmax,
                    width: 1
                }]";

                $series = "[{
                    type: 'spline',
                    name: '$datasetLegend',
                    dashStyle: '$dashStyle',
                    data:[[0,1],[1,4],[2,2],[3,1],[4,0], [5,10]],
                    color: '$dataset_color',
                    marker: {
                        enabled: false
                    },
                    states: {
                        hover: {
                            lineWidth: 0
                        }
                    },
                    enableMouseTracking: false
                    }, {
                    showInLegend: false,
                    type: 'scatter',
                    name: '$timepoint',
                    data: [[2,3],[2,4],[2,5]],
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
                    } }]";
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

            if (isset(setting('timecourse_chart'))) {
                $return_variables = [
                    'query' => $q_gene_name,
                    'bar_chart' => array(
                        'categories' => json_encode($bar_chart_categories),
                        'series' => json_encode($bar_chart_series),
                        'x_max' => count($bar_chart_categories)
                    ),
                    'timecourse_chart' => array(
                        'x_axis_label' => 'TTTS_chart x axis label'
                    ),
                    'data_table_1' => array(
                        'heading' => "Results for $q_gene_name",
                        'columns' => $table_1_columns,
                        'ajax_post_append' => array('join' => 'AND', 'selected_gene' => $q_gene_name, 'exact' => $_GET['exact'] ?? false)
                    ),
                    'category_tables' => array(
                        'headings' => $category_table_headings,
                        'columns' => $category_table_columns
                    )
                ];
            } else {

                $return_variables = [
                    'query' => $q_gene_name,
                    'bar_chart' => array(
                        'categories' => json_encode($bar_chart_categories),
                        'series' => json_encode($bar_chart_series),
                        'x_max' => count($bar_chart_categories)
                    ),
                    'data_table_1' => array(
                        'heading' => "Results for $q_gene_name",
                        'columns' => $table_1_columns,
                        'ajax_post_append' => array('join' => 'AND', 'selected_gene' => $q_gene_name, 'exact' => $_GET['exact'] ?? false)
                    ),
                    'category_tables' => array(
                        'headings' => $category_table_headings,
                        'columns' => $category_table_columns
                    )
                ];
            }
        }

        return view('pages/gene-view.twig', $return_variables);
    }
}
