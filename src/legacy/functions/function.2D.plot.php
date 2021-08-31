<?php

function scatterplot_2d($x_axis,
						$x_axis_label,
						$y_axis,
						$y_axis_label,
						$database,
						$host, 
						$user,
						$pwd,
						$base_sql_query,
						$highlight_sql_query,
						$headline,
						$point_name_column,
						$ptm_pos_column,
						$x_low_line,
						$x_high_line,
						$y_low_line,
						$y_high_line,
						$bg_series_name,
						$highlight_series_name
						)
{
//$x_axis must match a column in the database table
//$x_axis_label = a string giving the x_axis label
//$y_axis must match a column in the database table
//$y_axis_label a string giving the y_axis label
//$database = name of the database to use
//$host, $pwd, $user: database credentials
//Note the following JavaScript libraries must be loaded in the main script of the site
//Note the folowwing CSS scripts must be loaded in the main script of the site

//Connect to the database
#$cxn = mysqli_connect($host, $user, $pwd, $database)
#   or die("Database couldn't be reached");

   
define('ABSPATH',dirname(dirname(__FILE__)) . '/');
include(ABSPATH ."layout.ini.php");

$bg_query = query_db(
	$sql_query =$base_sql_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$bindParam_name_array = "",
	$bindParam_value_array = ""
);   


## Temporary fix ##
$ptm_pos_column = $ptm_display_column;
   
//Query database
#$bg_query = mysqli_query($cxn, $base_sql_query);
//Get data and build JSON for data display
if ($x_axis != 'one_dimensional'){
	$counter = count($bg_query);
	for($r = 0; $r < $counter; $r++){	
		$row = $bg_query[$r];
		$name = $row[$point_name_column];
		if ($ptm_pos_column != ''){
			$name = $row[$point_name_column]."-".$row[$ptm_pos_column]; 
		}  
		$display_array[] = ['x' => floatval($row[$x_axis]), 'y' => floatval($row[$y_axis]), 'name' => $name];
	};
	$json_bg = json_encode($display_array);
	
	#Find data to highlight
    #$highlight_query = mysqli_query($cxn, $highlight_sql_query);
    
	$highlight_query = query_db(
		$sql_query =$highlight_sql_query,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database,
		$bindParam_name_array = "",
		$bindParam_value_array = ""
	); 
	
	
	$counter = count($highlight_query);
	for($r = 0; $r < $counter; $r++){	
		$row = $highlight_query[$r];
		$name = $row[$point_name_column];
		if ($ptm_pos_column != ''){
			$name = $row[$point_name_column]."-".$row[$ptm_pos_column]; 
		}  
		$HLdisplay_array[] = ['x' => floatval($row[$x_axis]), 'y' => floatval($row[$y_axis]), 'name' => $name];
	};
	$json_gene = json_encode($HLdisplay_array);
	
} 


//End of json creation for background and highlight dataset

//plotting script
echo "
<script type='text/javascript' src='dist/js/jquery.min.js'></script>
<script src='https://code.highcharts.com/highcharts.js'></script>


	

<script type='text/javascript'>
   jQuery(document).ready(function() {
      
	  chart = new Highcharts.Chart({
			  
      chart: {renderTo: 'container',
              type: 'scatter',
			  borderWidth: 1,
			  borderColor: '#009900',
              zoomType: 'xy',
			  backgroundColor: {
                 linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                  stops: [[0, 'rgb(255, 255, 255)'],
                          [1, 'rgb(255, 255, 255)']
                         ]
              },
      borderWidth: 2,
      plotBackgroundColor: 'rgba(255, 255, 255, .9)',
      plotShadow: true,
      plotBorderWidth: 1
      },
                
	  title: {text: ''                
              },
							
						   credits: {
							   enabled: false
							   },	  
               subtitle: {text: ''},
               xAxis: {title: 
			              {
						  enabled: true, 
						  text: '$x_axis_label'
						  }, 
						
			              plotLines: [{color: 'red', // Color value
    						           dashStyle: 'longdashdot', // Style of the plot line. Default to solid
    						           value: $x_low_line,  // Value of where the line will appear
                                       width: 1 // Width of the line    
                                       },
	
	                                   {color: 'red', // Color value
                                        dashStyle: 'longdashdot', // Style of the plot line. Default to solid
                                        value: $x_high_line,  // Value of where the line will appear
                                        width: 1 // Width of the line    
                                        },
	
	                                    {color: 'black', // Color value
                                         dashStyle: 'solid', // Style of the plot line. Default to solid
                                         value: 0,  // Value of where the line will appear
                                         width: 1 // Width of the line    
                                       }]
                       },
               yAxis: {title: 
			             {text: '$y_axis_label'
                          },
						  plotLines: [{color: 'red', // Color value
                                       dashStyle: 'longdashdot', // Style of the plot line. Default to solid
                                       value: $y_low_line,  // Value of where the line will appear
                                       width: 1 // Width of the line    
                                       },
	
	                                   {color: 'red', // Color value
                                        dashStyle: 'longdashdot', // Style of the plot line. Default to solid
                                        value: $y_high_line,  // Value of where the line will appear
                                        width: 1 // Width of the line    
                                        },
	
	                                   {color: 'black', // Color value
     									dashStyle: 'solid', // Style of the plot line. Default to solid
    									value: 0,  // Value of where the line will appear
    									width: 1 // Width of the line    
    								   }]
                         },
                         legend: {
                                  backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
                                  borderWidth: 1
                                 },
				
				         plotOptions: {
							 scatter: {marker: {
                    				   radius: 5,
                                       states: {
                                       hover: {enabled: true,
                                               lineColor: 'rgb(100,100,100)'
                                               }
                                               }
                                               },
                             states: {
                             hover: {
                             marker: {enabled: false
                                     }
                                     }
                                     },
                             tooltip: {
								 headerFormat: '<b>{series.name}</b><br>',
                                 pointFormat: 'Site:{point.name}',
                                 },
								 cursor: 'pointer',		 
							events: {
								click: function(event){
								var str = 'search.result.php?Query='+ event.point.name + '&exact=TRUE';	
								window.open(str, '_blank');
								}
								}
                                     }
                                     },
				
		                     series: [{name: '$bg_series_name',
		                     		   data: $json_bg, 
		                               color: 'rgba(0,0,0,0.5)', 
				                       turboThreshold: 25000
		                               }, 
				 					  {data: $json_gene,
				  					   name: '$highlight_series_name', 
				  					   color: '#FF0000', 
				                       turboThreshold: 25000,
				                       marker: {symbol: 'circle'
                                               }
				                      }]
           
            						});        
             				 });
</script>
         
         
        <!-- 3. Add the container -->
         <div align='center'>
          <h3>
		    $headline
		   </h3>
		   <br>
		   
		   To zoom into the plot, select an area with the mouse
		   
        </div>
		
        <div id='container' style='min-width: 310px; 
		    height: 600px; 
		    max-width: 600px;  
			margin: 0 auto'></div>
		<br>
";

//end of plotting java script




//Cleaning up: closing database connection
#mysqli_close($cxn);

//	
}

?>