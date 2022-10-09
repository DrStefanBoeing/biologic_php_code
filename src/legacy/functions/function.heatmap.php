<?php
//This function will create a heatmap
function heatmap($experiment_array,
				 $experiment_name_array,
				 $database,
				 $host, 
				 $user,
				 $pwd,
				 $sql_query,
				 $headline,
				 $colorscale_min,
				 $colorscale_max,
				 $point_name_column,
				 $ptm, 
				 $divid = "heatmap1",
				 $col_name_start=8
				 )
{

define('ABSPATH',dirname(dirname(__FILE__)) . '/');
include(ABSPATH ."layout.ini.php");

$result_genes = query_db(
	$sql_query =$sql_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$bindParam_name_array = "",
	$bindParam_value_array = ""
);


#$cxn_gene = mysqli_connect($host, $user, $pwd, $database)
#   or die("Database couldn't be reached");
 
#$result_genes = mysqli_query($cxn_gene, $sql_query)
#      or die("Couldn't execute query");

$nrow = count($result_genes);	

#echo "nrows".$nrow;

if ($nrow > 2){ 
echo "
<div class = 'content'>
<div align = 'center'>
$headline
</div>

<div align='center'>";



#Start heatmap display
$x_categories = "[";
foreach($experiment_array as $value){
	$value = str_ireplace("lg2_avg_", "", $value);
	$value = str_ireplace("contrast_x_", "", $value);
	$value = str_ireplace("norm_counts_", "", $value);
	#$value = substr($value, $col_name_start, 50);
	$x_categories = $x_categories."'".$value."',";
}
$x_categories = substr($x_categories, 0, -1);
$x_categories = $x_categories."]";


$y_categories = "[";
$series = "[";
$counter = 0;



$nrowResGene = count($result_genes);
for($r = 0; $r < $nrowResGene; $r++){	
	$row = $result_genes[$r];
	
	$y_categories = $y_categories."'".$row[$point_name_column]."', ";
	
    if ($ptm != ""){
		$y_categories = $y_categories."'".$row[$point_name_column]."-".$row[$ptm]."', ";
	} 
	
	$i=0;
	
	foreach($experiment_array as $value){
		$series = $series."[".$i.", $counter, ".$row[$value]."], ";
		$i++;
    }
	
	$counter++;
};
	   
    $series = substr($series, 0,-2);
    $y_categories  = substr($y_categories, 0, -2);   
    $series = $series."]";
    $y_categories = $y_categories."]";


//End of data retrival
#Start heatmap making

	   		
echo" 
<script src='dist/js/highcharts.js'></script>
<script src='dist/js/map.js'></script>
<script src='dist/js/data.js'></script>
				  
<script>
   jQuery(document).ready(function() {
    	$('#$divid').highcharts({
        	chart: {
				type: 'heatmap',
                	marginTop: 40,
                    marginBottom: 120,
			        marginLeft: 60,
			        borderWidth: 1,
			  		borderColor: '#009900',
                    plotBackgroundColor: 'rgba(0, 0, 0, 0)',
                    plotBorderWidth: 1,
					zoomType: 'xy'
             },
			 plotOptions: {
            series: {
                events: {
                    click: function (event) {
                        var str = 'search.result.php?Query='+ event.point.series.yAxis.categories[event.point.y] + '&exact=TRUE';
						window.open(str, '_blank');
                    }
                }
            }
        },
            title:{
				text: ''
            },
			credits: {
				enabled: false
			},
			xAxis:{
				categories: $x_categories,
				labels: {
					rotation: -45
				}
		    },
                           yAxis: 
						      {categories: $y_categories,
                               title: null,
			                   showLastLabel: false,
			                   labels: {enabled: false}
			                   },
                           colorAxis: 
						      {stops: [
                                  [0, '#3060cf'],
                                  [0.5, '#fffbbc'],
                                  [0.9, '#c4463a']
                                      ],
			                      min: $colorscale_min,
			                      max: $colorscale_max

                              },

                          legend: 
						     {align: 'right',
                              layout: 'vertical',
                              margin: 0,
                              verticalAlign: 'middle',
                              y: 25,
                              symbolHeight: 280
                             },

                          tooltip: 
						     {formatter: function () 
							    {return 'Experiment  : <b>' + this.series.xAxis.categories[this.point.x] 
								                        + '</b> <br>Gene(MGI symbol): <b>' 
														+  this.series.yAxis.categories[this.point.y] 
														+ '</b><br>lg2(Row-averaged counts): <b>' 
														+ this.point.value + '</b>';
                                 }
                              },
                           series: [{
                              turboThreshold: 100000,
			                   name: '$headline',
                               borderWidth: 0,
                               data: $series,
                                    }]

                });
        });

</script>";

				   

echo "
<div id='$divid' style='height: 800px; max-width: 800px; margin: 0 auto'></div>";
	       #End heatmap display	  
}
}
?>