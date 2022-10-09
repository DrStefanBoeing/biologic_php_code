<?php

include(__DIR__."/layout.php");
include(__DIR__."/functions/function.heatmap.php");
include(__DIR__."/functions/function_slider_selection.php");

print_header();

$string_display = FALSE;
if (isset($_POST['get_values'])){
	$make_heatmap = TRUE;
} else {
	$make_heatmap = FALSE;
}


if (isset($_POST['join'])){
	$join = $_POST['join'];
} else {
	$join = "AND";
}

if (isset($_POST['all_zero'])){
	$all_zero = TRUE;
} else {
	$all_zero = FALSE;
}

#$user_id = $_SESSION['username'];
#$cxn_statistics = mysqli_connect($host, $user, $pwd, 'db_data_table') or die('Login failed');
#mysqli_query($cxn_statistics, "INSERT INTO query_history (user, query, time) VALUES ('$user_id', 'MOT.venn.php', NOW())");
#mysqli_close($cxn_statistics);


echo "		        
<div class='content'>
    <div class='content'>
    <h2 align='center'>VennView</h2>
	<br>
	<div align = 'center'>";


if ($download_result_table != ""){
	echo "
	<a href='$download_result_table'>Download full result table</a>
	<br><br>";
	}	
	
	if ($make_heatmap){
	echo "
	<b><font color = 'red'>Results are shown below the slider selection - please scroll down</font></b>
	<br><br>
	";}
	
	echo"
	Please be patient if a large number of data points need to be rendered for the heatmap
	
	<br><br>
	Select a datarange of interest for each screen using the sliders below. 
	<br>
	</div>
</div>
</div>	
	";


	
/* Writing all the posted variables into result_array_values/field*/
//Value range selection block
	slider_selection($venn_selection,
					 "venn.view.php",
				     $default_venn_low_array,
				     $default_venn_high_array,
				     $venn_slider_min_array,
				     $venn_slider_max_array,
					 $slider_selection_name,
					 $all_zero
				     );





	
	
	
#####################################	
#End of value range selection block##
#####################################
#Create sql query based on selection#
#####################################

if ($make_heatmap){



$hm_value_columns = $experiment_array;

if ($ptm_display_column == ""){	
	$sql_query = "SELECT DISTINCT $primary_gene_symbol, cluster_order, gene_description, ";
	} else {
		$sql_query = "SELECT DISTINCT $primary_gene_symbol, $ptm_display_column ,cluster_order, gene_description, ";
	}

for ($i=0; $i< count($hm_value_columns); $i++){
			$sql_query = $sql_query.$hm_value_columns[$i].", ";
			}
			
		$sql_query = substr($sql_query,0,-2);
		$sql_query = $sql_query." FROM ".$rnaseq_db_table." WHERE (";

for ($i=0; $i< count($venn_selection); $i++){
	$column_name = $venn_selection[$i];
	$high = $column_name."_high";
	$low = $column_name."_low";
    $sql_query = $sql_query."(".$column_name." <= ".$_POST[$high].") AND (".$column_name." >= ".$_POST[$low].") ".$join;
	
	   
    }							 
   
$sql_query = substr($sql_query,0,-4);
$sql_query = $sql_query.") AND cluster_order > 0 ORDER BY cluster_order DESC";
##########################
#Create heatmap###########
##########################
	
heatmap($hm_value_columns,
		"",
		$database,
		$host, 
		$user,
		$pwd,
		$sql_query,
		$hm_headline,
		$lower_heatmap_limit,
		$upper_heatmap_limit,
		$primary_gene_symbol,
		$ptm_display_column,
		$divid = "heatmap1"
		);		
echo "
<br>
";				
##########################				
#End create heatmap#######
##########################				

##########################
#Create data table########
##########################
#$cxn_gene = mysqli_connect($host, $user, $pwd, $database)
#     or die("Database couldn't be reached");

if ($ptm_display_column != ""){
	$sql_query = "SELECT DISTINCT $primary_gene_symbol, $ptm_display_column, cluster_order, gene_description, p_site_env, ";
	} else {
		$sql_query = "SELECT DISTINCT $primary_gene_symbol, cluster_order, gene_description, ";
		}


for ($i=0; $i< count($venn_selection); $i++){
			$sql_query = $sql_query.$venn_selection[$i].", ";
			}
			
		$sql_query = substr($sql_query,0,-2);
		$sql_query = $sql_query." FROM ".$rnaseq_db_table." WHERE (";

for ($i=0; $i< count($venn_selection); $i++){
	$column_name = $venn_selection[$i];
	$high = $column_name."_high";
	$low = $column_name."_low";
    $sql_query = $sql_query."((".$column_name." <= ".$_POST[$high].") AND (".$column_name." >= ".$_POST[$low].")) ".$join;
	
	;
	   
    }							 
   
$sql_query = substr($sql_query,0,-4);
$sql_query = $sql_query.") ORDER BY cluster_order DESC LIMIT 0, 5000";
	 
#$result_gene = mysqli_query($cxn_gene, $sql_query)
#   or die("Couldn't execute query");   

   
## Display data table ##
printDataTable(
	$sql_query = $sql_query,
	$primary_gene_symbol = $primary_gene_symbol,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$ptm_display_column=$ptm_display_column,
	$table_display_columns = $table_display_columns,
	$table_display_columns_names = "",
	$low_highlight = $low_highlight,
	$high_highlight = $high_highlight,
	$table_headline_text = "Table: Venn data selection"
);	
## End display data table ## 
   
   



##########################
#End create table#########
##########################



   
  
	
	
	 


		  	  
	  
#end of if-else loop for data plot display	  

	  
	  echo "
	  </div>

	  </div>
      <br>
	  <br>";



}
print_footer();

?>