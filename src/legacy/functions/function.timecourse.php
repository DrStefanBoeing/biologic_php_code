<?php

function timecourse(#$x_axis,
					#	$x_axis_label,
					#	$y_axis,
					#	$y_axis_label,
						$database,
						$host, 
						$user,
						$pwd,
						$sql_query,
						$bindParam_name_array = array(),
						$bindParam_value_array = array(),
						$y_axis_label = 'Counts',
						$x_axis_label = 'min',
						$vlinecolor = '#D3D3D3',
						$vlinestyle = 'longdashdot',
						$dotlinewidth = 0,
						$dotradius = 3,
						$first_query_row_only = FALSE
						#$ptm_pos_column = ""
						#,
					#	$base_sql_query,
					#	$highlight_sql_query,
					#	$headline,
					#	$point_name_column,
					#	,
					#	$x_low_line,
					#	$x_high_line,
					#	$y_low_line,
					#	$y_high_line,
					#	$bg_series_name,
					#	$highlight_series_name
						)
{


#################################################################
# Section will move to layout ini
#################################################################
define('ABSPATH',dirname(dirname(__FILE__)) . '/');
include(ABSPATH ."layout.ini.php");

$dashStyle_array = array(
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
    'LongDashDotDot');
#$datasets = array('Medium','BAFF');
#$dataset_colors = array('green', 'red');

#$Medium = array('M1h', 'M3h', 'M6h', 'M12h', 'M24h');
#$BAFF   = array('B1h', 'B3h', 'B6h', 'B12h', 'B24h');
#$timepoint_array = array(1,3,6,12,24);

#$M1h = array('norm_counts_M1h_1','norm_counts_M1h_2','norm_counts_M1h_3');
#$M3h = array('norm_counts_M3h_1','norm_counts_M3h_2','norm_counts_M3h_3');
#$M6h = array('norm_counts_M6h_1','norm_counts_M6h_2','norm_counts_M6h_3');
#$M12h = array('norm_counts_M12h_1','norm_counts_M12h_2','norm_counts_M12h_3');
#$M24h = array('norm_counts_M24h_1','norm_counts_M24h_2','norm_counts_M24h_3');

#$B1h = array('norm_counts_B1h_1','norm_counts_B1h_2','norm_counts_B1h_3');
#$B3h = array('norm_counts_B3h_1','norm_counts_B3h_2','norm_counts_B3h_3');
#$B6h = array('norm_counts_B6h_1','norm_counts_B6h_2','norm_counts_B6h_3');
#$B12h = array('norm_counts_B12h_1','norm_counts_B12h_2','norm_counts_B12h_3');
#$B24h = array('norm_counts_B24h_1','norm_counts_B24h_2','norm_counts_B24h_3');

# End ini section

# Create tick position array
$tickPositions = "[";  
foreach ($timepoint_array as $timepoint) {
	$tickPositions = $tickPositions.$timepoint.",";
}
$tickPositions = substr($tickPositions,0,-1);
$tickPositions = $tickPositions."]";  
# Done tick position array 

# Determine xmin and xmax
$xmin = $timepoint_array[0] - 1;
$xmax = $timepoint_array[(count($timepoint_array)-1)] +1;
# Done Determining xmin and xmax


# Connect to database via PDO
$query = query_db(
	$sql_query = $sql_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$bindParam_name_array = $bindParam_name_array,
	$bindParam_value_array = $bindParam_value_array
);


#$conn = new PDO("mysql:host=$host;dbname=$database", $user, $pwd);

#$stmt = $conn->prepare($sql_query);
#$stmt->execute();
#$query = $stmt->fetchAll();
#$query = $query[0];
$nrows = count($query);




//Connect to the database (old method)
#$cxn = mysqli_connect($host, $user, $pwd, $database)
#   or die("Database couldn't be reached");
#$query = mysqli_query($cxn, $sql_query);

# For the time being, display first entry only in the plot. 
#$row = mysqli_fetch_array($query);
#extract($row);

###############################################################################
# Create plotlines_array
$plotlines_array = "[";

$plotlines_array = $plotlines_array."{
				color: '$vlinecolor',
				dashstyle: '$vlinestyle',
				value: $xmin,
				width: 1
			},";

for ($i=0; $i< (count($timepoint_array)-1); $i++){
	$plotlines_array = $plotlines_array."{
				color: '$vlinecolor',
				dashstyle: '$vlinestyle',
				value: $timepoint_array[$i],
				width: 1
			},";
}			

$plotlines_array = $plotlines_array."{
				color: '$vlinecolor',
				dashstyle: '$vlinestyle',
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





################################################################################
# Create series array
################################################################################

$series = "[";
################################################################################
# Start with the spline section for single/multiple samples
################################################################################

###############################################################################
## Reduce $query to the first row, e.g. when multiple ids interfere          ##
#echo "NR:".$nrows;
if (($first_query_row_only = TRUE) & ($nrows > 0)){
	$counter_max = 1;
	#$counter_max = count($query);
#	$query = $query[0];
} else {
	$counter_max = count($query);
}

## End reduce $query to one row                                              ##
###############################################################################

for ($l =0; $l < $counter_max; $l++){
	$row = $query[$l];
	extract($row);
	$j = 0;
	foreach ($datasets as $dataset){
		###############################################################################
		# Determine medians for replicates
		foreach (${$dataset} as $timepoint){
			$triplicates = ${$timepoint};
			$value_array = array();
			## 20170602 Always use calculate median
			#if ($display_median != "calculate_median"){
			#	foreach ($triplicates as $sample){
			#		$value_array[] = ${$sample};
			#	}
			#	$name = $dataset."_median_array".$l;
			#	${$name}[] = $value_array[0];
			#} else{
				foreach ($triplicates as $sample){
					$value_array[] = ${$sample};
				}
				$name = $dataset."_median_array".$l;
				${$name}[] = calculate_median($value_array);
			#}
			
		}
		# Done calculate medians for replicates
		###############################################################################
		$dataset_color = $dataset_colors[$j];
			# Select lineStyple
			if ($l <= 10){
				$pos = $l;
			} else {
				$pos = 0;
			}
			$dashStyle = $dashStyle_array[$l];
			
			# Create legend label for series
			if (isset($ptm_display_column) & $ptm_display_column != ""){
				$datasetLegend = $dataset." ".${$ptm_display_column};
			} else {
				$datasetLegend = $dataset;
			}
			
			$series = $series."{
				type: 'spline',
				name: '$datasetLegend',
				dashStyle: '$dashStyle',
				data:[";
			$i = 0;	
			foreach ($timepoint_array as $timepoint){
				$name = $dataset."_median_array".$l;
				if (isset(${$name}[$i])){
					$series = $series."[".$timepoint .",".${$name}[$i] ."],";
				}
				$i++;
			}
			$series = substr($series,0,-1);
			$series = $series."],
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
			},";
		$j++;	
	}
}

# End spline section for single/multiple samples





# Continue with scatterplots for individual timepoint samples > If one sample is selected only.
#if ($nrows == 1){
	$j = 0;
	foreach ($datasets as $dataset){
		$dataset_color = $dataset_colors[$j];
		$i = 0;
		foreach (${$dataset} as $timepoint){
			$series = $series."{
				showInLegend: false,
				type: 'scatter',
				name: '$timepoint',
				data: [";
			foreach (${$timepoint} as $sample) {
				$series = $series."[".$timepoint_array[$i].",".${$sample}."],";
			}
			$series = substr($series,0,-1);
			$series = $series."],
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
				}";
			$series = $series."},";
			$i++;
		}
		$j++;	
	}
#}
$series = substr($series,0,-1);
$series = $series."]";


# Create series array
###############################################################################


#################################################################
#
#################################################################


		
echo "
<script src='https://code.highcharts.com/highcharts.js'></script>
<script src='https://code.highcharts.com/modules/exporting.js'></script>

<script>	
$(function () {
    Highcharts.chart('container', {
		chart:{
			borderWidth: 1,
			borderColor: '#009900',
			zoomType: 'xy'
		},
		legend: {
			enabled: true
		},
		title: {
			text: ''                
        },
		subtitle: {
			text: ''
		},
		credits: {
			enabled: false
		},
        xAxis: {
			title: {
				enabled: true,
				text: '$x_axis_label'
			},
            min: $xmin,
			max: $xmax,
			tickPositions: $tickPositions,
			plotLines: $plotlines_array
        },
        yAxis: {
			title: {
				text: '$y_axis_label'
			}
            
        },
        
        series: $series
    });
});

</script>
         
         
        <!-- 3. Add the container -->
         <div align='center'>
           
		   
		   Trendline connects the median values for each sample
		   
        </div>
		
        <div id='container' style='min-width: 310px; 
		    height: 400px; 
		    max-width: 600px;  
			margin: 0 auto'></div>
		</div>
";

# end of plotting java script

################################################################################
# Cleaning up: closing database connection
################################################################################
$conn->connection = null;	
}

?>