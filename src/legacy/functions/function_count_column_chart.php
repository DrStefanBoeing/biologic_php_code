<?php

function count_column_chart(
	$database,
	$host, 
	$user,
	$pwd,
	$sql_query,
	$bindParam_name_array = array(),
	$bindParam_value_array = array(),
	$y_axis_label = 'log10 TPM Intensities',
	$x_axis_label = '',
	$first_query_row_only = TRUE
){
###############################################################################
# Section will move to layout ini                                            ##
###############################################################################
define('ABSPATH',dirname(dirname(__FILE__)) . '/');
include(ABSPATH ."layout.ini.php");


###############################################################################
## Set defaults                                                              ##
if (!isset($datasets)){
	$datasets = array('Series1');
	$Series1 = array(); 
	for ($i=0; $i < (count($sample_array)); $i++){
		$Series1[] = $sample_array[$i]."_group";
		${$sample_array[$i]."_group"} = array($sample_array[$i]);
	}
	$display_median = 'calculate_median'; 
}

##  End setting defaults                                                     ##
###############################################################################
$timepoint_array = array();


###############################################################################
## Define column names                                                       ##
if (isset($conditions) & count($conditions) == count(${$datasets[0]}) ){
	$x_categories = "[";
	for ($i=0; $i < (count($conditions)); $i++){
		$x_categories = $x_categories."'".$conditions[$i]."',";
		$timepoint_array[] = $i; 
	}
	$x_categories = $x_categories.substr($series,0,-1)."]";
} else {
	$x_categories = "[";
	for ($i=0; $i < (count(${$datasets[0]})); $i++){
		
		$colName = ${$datasets[0]}[$i];
		$colName = str_replace("norm_counts_", "", $colName);
		$colName = str_replace("_", " ", $colName);
		$colName = str_replace(" group", "", $colName);
		
		#if (strlen($colName) > 15){
		#	$colName =  substr($colName, 0, 14);
		#	$colName =  $colName."...";
		#}
		
		$x_categories = $x_categories."'".$colName."',";
		$timepoint_array[] = $i; 
	}
	$x_categories = $x_categories.substr($series,0,-1)."]";
}

## End define column names                                                   ##
###############################################################################

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
#if ($conn->connect_error) {
#    die("Connection failed: " . $conn->connect_error);
#}
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

$vlinecolor = "black";
$vlinestyle = "Solid";

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
if ($first_query_row_only){
	$start = count($query);
	$start = $start -1;
} else {
	$start = 0;
}

for ($l =$start; $l < count($query); $l++){
	$row = $query[$l];
	extract($row);
	$j = 0;
	foreach ($datasets as $dataset){
		###############################################################################
		# Determine medians for replicates
		foreach (${$dataset} as $timepoint){
			$triplicates = ${$timepoint};
			$value_array = array();
			if ($display_median != "calculate_median"){
				echo "if";
			} else{
				foreach ($triplicates as $sample){
					$value_array[] = ${$sample};
				}
				$name = $dataset."_median_array".$l;
				${$name}[] = calculate_median($value_array);
			}
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
			if ($ptm_display_column != ""){
				$datasetLegend = ${$primary_gene_symbol}."-".${$ptm_display_column};
			} else {
				$datasetLegend = $dataset;
			}
			
			$series = $series."{
				type: 'column',
				name: '$datasetLegend',
				showInLegend: false, 
				data:[";
			$i = 0;	
			foreach ($timepoint_array as $timepoint){
				$name = $dataset."_median_array".$l;
				
				
				if (isset($sample_color_array)){
					$series = $series."{x:".$timepoint .", y:".${$name}[$i].", color: '".$sample_color_array[$i]."'},";
				} else {
					$series = $series."{x:".$timepoint .", y:".${$name}[$i]."},";
				}
				
				$i++;
			}
			$series = substr($series,0,-1);
			$series = $series."],
				
				marker: {
					enabled: true
				},
				states: {
					hover: {
						lineWidth: 0
					}
				},
				enableMouseTracking: true
			},";
		$j++;	
	}
}

# End spline section for single/multiple samples





# Continue with scatterplots for individual timepoint samples > If one sample is selected only.

	#$j = 0;
	#foreach ($datasets as $dataset){
	#	$dataset_color = $dataset_colors[$j];
	#	$i = 0;
	#	foreach (${$dataset} as $timepoint){
	#		$series = $series."{
	#			showInLegend: false,
	#			type: 'scatter',
	#			name: '$timepoint',
	#			data: [";
	#		foreach (${$timepoint} as $sample) {
	#			$series = $series."[".$timepoint_array[$i].",".${$sample}."],";
	#		}
	#		$series = substr($series,0,-1);
	#		$series = $series."],
	#			color: '$dataset_color',
	#			marker: {
	#				radius: $dotradius,
	#				symbol: 'circle',
	#				lineColor: 'black',
	#				lineWidth: $dotlinewidth
	#			},
	#			tooltip: {
	#				headerFormat: 'Sample group: {series.name}<br>',
	#				pointFormat: 'log10 TPM: {point.y}'
	#			}";
	#		$series = $series."},";
	#		$i++;
	#	}
	#	$j++;	
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
			
			categories: $x_categories,
			labels: {
					rotation: -45
				}
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
           
		   
		   
		   
        </div>
		
        <div id='container' style='min-width: 310px; 
		    height: 400px; 
		    max-width: 800px;  
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