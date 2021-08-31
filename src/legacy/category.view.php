<?php
###############################################################################
## Set the stage                                                             ##
###############################################################################
include(__DIR__."/layout.php");
include(__DIR__."/functions/function.heatmap.php");


###############################################################################
## Variables that will move eventually to layout.ini.php                     ##
## cat_selection_db_tables are to be kept in the lab database                
#$cat_selection_db_table = "p85_cat_selection_db_table";

## default default_cat_selection_db_table in js_lab_categories


## format

## information content
# (1) category_sel groups to display
# (2) categories to display for each groups > cat_id = table_name__id
# (3) display category

## end variables that will move eventually to layout.ini.php                 ##
###############################################################################


###############################################################################
## Set default parameters                                                    ##


if (!isset($cat_selection_db_table)){
	$cat_selection_db_table = "cat_selection_default"; 
	$cat_selection_db = "reference_categories_db_new";
} else if ($cat_selection_db_table == ""){
	$cat_selection_db_table = "cat_selection_default";
	$cat_selection_db = "reference_categories_db_new";	
} 


## check cat table default ##
if (!isset($enriched_categories_table)){
	$enriched_categories_table = "";
}

## check for ref_database ##
if (!isset($ref_database)){
	$ref_database = "reference_categories_db_new";
}

if (!isset($low_highlight)){
	$low_highlight = -1;
}

if (!isset($high_highlight)){
	$high_highlight = 1.0001;
}


$headline = "CategoryView";

$explanatory_text = "";
#"
#	<br>
#   <p>This section displays your experimental results in the context of biological categories, such as pathways, disease-associated genes, and CORUM protein complexes</p>
#	<p>Please <b><font color = 'red'>select first a Category type</b></font> and <b><font color = 'red'>then an individual category</font></b> from the selection menu below.</p>
#	<b>".$labname." lab</b> categories are categories assembled by the ".$labname." lab. 
#	<br>";


## Ensure primary gene symbol is set ##
if (!isset($primary_gene_symbol)){
	$primary_gene_symbol = "hgnc_symbol";
}
	
## End set parameters                                                        ##
###############################################################################

###############################################################################
## Print header                                                              ##

print_header();

## Done print header                                                         ##
###############################################################################

###############################################################################
## Function process_catView_inputs                                           ##
function process_catView_inputs(){
	## Set default scenario...##
	$category_type = "none";
	$action = "list_default";
	$category_query = "";
	
	## ...check if category type listing is required... ##
	if (isset($_GET["category_type"])) {
		$category_type = sanitizeString($_GET["category_type"]);
		## To be added: check category type against available cat_types ##
		if (strlen($category_type) < 42){
			$action = "list_cat_selection";
		} else {
			$category_type = "none";
		}
	} 
	
	## Determine if indiviudal category is to be displayed ##
	if (isset($_GET["category_query"])){
		$category_query = sanitizeString($_GET["category_query"]);
		## To be added: Check category_query_against available cat_ids ##
		if (strlen($category_query) < 42){
			$action = "display_category";
		} else {
			$category_query = "";
		}
		}
	$input_array = array(
		"action"=>$action,
		"category_type"=>$category_type,
		"display_category"=>$category_query
	);
	return $input_array;	
}   

## End Function process_catView_inputs                                       ##
###############################################################################

###############################################################################   
## Function display_enriched_categories_table                                ##
function display_enriched_categories_table(
	$enriched_padj_cols,
	$image_link_array,
	$enriched_categories_table,
	$host="host",
	$user="user",
	$pwd="pwd",
	$dbname="database",
	$download_cat_enrichment_table="download_cat_enrichment_table"
){
#Display enriched categories
	#enriched categories will be stored in database enriched categories
	#Table will correspond to the project. One table per project.

	## 20170223 switch to PDO queries
	##$cxn_enriched_categories = mysqli_connect($host, $user, $pwd, 
	##"enriched_categories") or die('Login failed');
	$enriched_cat_sql_query = "SELECT DISTINCT cat_id, cat_name, cat_type, 
	enrichment_type, ";


	if (is_array($enriched_padj_cols)){
		for ($i=0; $i< count($enriched_padj_cols); $i++){
			$enriched_cat_sql_query = $enriched_cat_sql_query.$enriched_padj_cols[$i].", "; 
		}
	} else {
		$enriched_cat_sql_query = $enriched_cat_sql_query.$enriched_padj_cols.", "; 
		}

#Get GSEA image links
for ($i=0; $i< count($image_link_array); $i++){
	$enriched_cat_sql_query = $enriched_cat_sql_query.$image_link_array[$i].", "; 
	}
	
$enriched_cat_sql_query = $enriched_cat_sql_query."data_source, comments_1, comments_2 FROM ".$enriched_categories_table." ORDER BY ".$enriched_padj_cols[0]." ASC";

## Switchted to PDO 20170223												   
#$enriched_cat_result = mysqli_query($cxn_enriched_categories, $enriched_cat_sql_query);		  
# WHERE comments_2 = 'c6_Oncogenic_signatures'
$enriched_cat_result = query_db(
	$sql_query = $enriched_cat_sql_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$dbname
	);

$nrows_enriched_cat = count($enriched_cat_result);


if ($nrows_enriched_cat > 0){
	#Display enriched categories including links
	echo"
	<div align = 'center'>
		<h2>View enriched categories</h2>
		<a href = '$download_cat_enrichment_table' >Download full category enrichment table</a>
		<br>
	</div>";
		  
	if ($nrows_enriched_cat <= 10){
		$data_height = "";
	} else {
		$data_height = "data-height = '600'";
	}


if ($nrows_enriched_cat > 500) {
	$nrows_enriched_cat = 500;
    $data_page_list = "data-page-list='[10, 50, 100, 250, 500, $nrows_enriched_cat]' ";
	} elseif ($nrows_enriched_cat > 250) {
		$data_page_list = "data-page-list='[10, 50, 100, 250, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 100) {
		$data_page_list = "data-page-list='[10, 50, 100, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 50) {
		$data_page_list = "data-page-list='[10, 50, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 10) {
		$data_page_list = "data-page-list='[10, $nrows_enriched_cat]' ";
    } else {
		$data_page_list = "";
	}



# <th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-6' ><b>Category type</b></th>
# 
# <th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2' ><b>Profile</b></th>			 

echo"
<div align = 'center'>	
<table id='ptm_table' data-toggle='table' $data_height data-cache='false' class='table table-striped table-bordered' width='95%' align='center'
	   data-page-size=$nrows_enriched_cat  $data_page_list data-pagination='true' data-search='true' data-show-export = 'true'>	  
	<thead>
		<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'  >Show gene data</th>
		<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'  ><b>Category Name <br>and Description</b></th>
		<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'  ><b>Cat type</b></th>";
		if (is_array($enriched_padj_cols)){
			for ($i=0; $i< count($enriched_padj_cols); $i++){
				$display_string = str_replace("_", " ",$enriched_padj_cols[$i]);
				$display_string = str_replace(" ", "<br>",$display_string);
				echo "<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'  ><b>".$display_string."</b></th>";
				echo "<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'><b>Plot</b></th>";
			}
		} else {
			$display_string = str_replace("_", " ",$enriched_padj_cols);
			$display_string = str_replace(" ", "<br>",$display_string);
			echo "<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'  ><b>".$display_string."</b></th>";
			echo "<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'><b>Plot</b></th>";
		}
			 
		echo "
		</thead>
			<tbody>";
		  
		  ## Switched to PDO 20170223 ##
		  ## while($row = mysqli_fetch_assoc($enriched_cat_result)) {
			for ($r=0; $r< count($enriched_cat_result); $r++){
				$row = $enriched_cat_result[$r];
				extract($row);
				$cat_name = str_replace("_", " ", $cat_name);
				echo "
				<tr>
			    <td class='text-center'>
					<a href ='category.view.php?category_query=$cat_id'>Category members</a>
			    </td>
						 
			    <td class='text-center'>
					<a href ='$comments_1' target='_blank'>$cat_name</a>
			    </td>
				
				<td class='text-center'>
					$cat_type
			    </td>";
				
				if (is_array($enriched_padj_cols)){
					for ($i=0; $i< count($enriched_padj_cols); $i++){
						$FDR = ${$enriched_padj_cols[$i]};
					
						#Determine if an enrichment plot is available
						$display_string = "$FDR";
						
						echo "
						<td class='text-center'>
							$display_string
						</td>";
						## plot button ##
						if (${$image_link_array[$i]} != ""){
							$file_url = ${$image_link_array[$i]};
							#$plot_string = "<a href = 'image.view.php?image=$file_url'>&#8592 P</a>";
							#$plot_string = "<a href = 'image.view.php?image=$file_url'><img src = '$file_url' alt = '' style='width:42px;height:42px;border:0;'></a>";
							$plot_string = "<a href = 'image.view.php?image=$file_url'>[GSEA]</a>";
						} else {
							$plot_string = "";
						}
						echo "
						<td class='text-center'>$plot_string</td>
						";
					}
				} else {
					#Determine if an enrichment plot is available
					$display_string = "$FDR";
					
					echo "
					<td class='text-center'>
						$display_string
					</td>";
					
					## plot button ##
					if (${$image_link_array[$i]} != ""){
						$file_url = ${$image_link_array[$i]};
						$plot_string = "<a href = 'image.view.php?image=$file_url'>&#8592 P</a>";
					} else {
						$plot_string = "";
					}
					echo "
					<td class='text-center'>$plot_string</td>
					";
				}
					
			}
				
				
			#if ($image_link != ""){
			#$text = "<a href = 'image.view.php?image=enrichment_plots/$image_link'>Profile</a>";
			#} else {
			#	$text = "";
			#}
				
				
			#<td class='text-center'>
			#  $text
			#</td>
			echo "
			</tr>";
		}
			   			   
	echo "
	</tbody>
</table>
<br>
<br>";
#End display enriched categories including links	
}
## End functions                                                             ##
###############################################################################



###############################################################################
## Start Function cv_display_cat_selection                                   ##
function cv_display_cat_selection(
	$category_type = "none",
	$database = "cat_selection_db",
	$dbtable = "cat_selection_db_table",
	$host="host",
	$user = "dbuser",
	$pwd = "pwd"){
	
	## Get category_groups from database ##
	
	$cat_group_array = cv_create_cat_group_array(
		$database = $database,
		$dbtable = $dbtable,
		$host=$host,
		$user = $user,
		$pwd = $pwd
	);
	
	
	
	## create table ##
	$cat_sql = "SELECT DISTINCT * FROM ".$dbtable.
		" WHERE cat_group = '".$category_type."' ORDER BY cat_views DESC, cat_count DESC";
	
	$cat_result = query_db(
		$sql_query = $cat_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database
		);  
	//mysqli_close($cxn_category);
	
	$nrows_gene_cat = count($cat_result);
	
		 
	echo"
	<br>
	<div align='center'>
		<font size = '4'>
		Please select the category type to display by <font color = 'red'>selecting</font> one of the <br>
		<b>Category Types:</b> <br>";
		
		## Introduced variable category selection 20172023 ##
		for ($i=0; $i< count($cat_group_array); $i++){
			if ($i < count($cat_group_array) -1){
				$cat_string = "<a href='category.view.php?category_type=".$cat_group_array[$i]."#category_selection' title = ''>".$cat_group_array[$i]."</a> | ";
			}else {
				$cat_string = "<a href='category.view.php?category_type=".$cat_group_array[$i]."#category_selection' title = ''>".$cat_group_array[$i]."</a>";
			}
				echo $cat_string;
		}
		
		
		echo "
		</font>
	</div>";
	$nrows_enriched_cat = count($cat_result);
	if ($nrows_enriched_cat <= 10){
		$data_height = "";
	} else {
		$data_height = "data-height = '600'";
	}		
		  
	if ($nrows_enriched_cat > 500) {
		$nrows_enriched_cat = 500;
		$data_page_list = "data-page-list='[10, 50, 100, 250, 500]' ";
	} elseif ($nrows_enriched_cat > 250) {
		$data_page_list = "data-page-list='[10, 50, 100, 250, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 100) {
		$data_page_list = "data-page-list='[10, 50, 100, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 50) {
		$data_page_list = "data-page-list='[10, 50, $nrows_enriched_cat]' ";
    } elseif ($nrows_enriched_cat > 10) {
		$data_page_list = "data-page-list='[10, $nrows_enriched_cat]' ";
    } else {$data_page_list = "";}

	echo"	
	<table id='ptm_table' data-toggle='table' $data_height data-cache='false' class='table table-striped table-bordered' width='95%' align='center'
		data-page-size=$nrows_enriched_cat  $data_page_list data-pagination='true' data-search='true' data-show-export = 'true'>	  
		<thead>
			<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-6' ><b>Category Name and Description</b></th>
			<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2'><b>Genes in category</b></th>
			<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2'><b>Data Source</b></th>
			<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2' ><b>Link to cat description</b></th>
		</thead>
		<tbody>";
		  
		## Switched to PDO 20170223 ##
		## while($row = mysqli_fetch_assoc($cat_result)) {
		for ($r=0; $r< count($cat_result); $r++){
			$row = $cat_result[$r];
			extract($row);
			$cat_name = str_replace("_", " ", $cat_name);
			echo "
			<tr>
				
				<td class='text-center'>
					<a href ='category.view.php?category_query=$cat_id'>$cat_name</a>
				</td>
				
				<td class='text-center'>
					$cat_item_size
				</td>
				
				<td class='text-center'>
					$data_source
				</td>
				
				<td class='text-center'>
					<a href ='$comments_1' target='_blank'>Cat. description</a>
				</td>
				
			</tr>";
		}
			   			   
		echo "
	</tbody>
</table>
<br>
<br>";
			  
#End of section that displays default category display without a specific query
		
}

## End Function cv_display_cat_selection                                     ##
###############################################################################


###############################################################################
## Function display_category                                                 ##
function cv_display_category (
	$display_cat_id = "cat_id__nummer",
	$ref_database = "cat_selection_db",
	$host = "host",
	$user = "dbuser",
	$pwd = "pwd",
	$primary_gene_symbol = "hgnc_symbol",
	$table_display_columns = "",
	$ptm_display_column = "",
	$primary_data_db = "",
	$primary_data_db_table = "",
	$plot_selection = "plot selection array",
	$experiment_array = "experiment_array",
	$lower_heatmap_limit = -3,
	$upper_heatmap_limit = 3,
	$low_highlight = -1,
	$high_highlight = 1.0001){
	
	## Set default ##
	$emessage = "";
	
	## Determine dbtable ##
	$dbtable = explode("__",$display_cat_id);
	
	if (count($dbtable) != 2){
		$emessage = "Error Category not found on the system.";
		return($emessage);
	}
	
	$dbtable = $dbtable[0];
	## Check if dbtable is present in the database ##
	## TBD: Parametrize ##
	$check_sql = "SHOW TABLES LIKE :dbtable";
	
	$check_q = query_db(
		$sql_query =$check_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$ref_database,
		$bindParam_name_array = array(':dbtable'),
		$bindParam_value_array = array($dbtable)
		);#,
		#$bindParam_name_array = array('dbname'),
		#$bindParam_value_array = array($database));
	

	if (count($check_q) < 1){
		$emessage = "Error Category not found on the system.";
		return($emessage);
	}
	## Done checking table existence ##
	$cat_sql = "SELECT DISTINCT ".$primary_gene_symbol.", cat_name 
		FROM ".$dbtable." 
		WHERE cat_id = :display_cat_id ORDER by ".$primary_gene_symbol." ASC";
	
	## A category query by cat_id will always yield one row ##
	## No Need to loop through result array ##
	
	$cat_q = query_db(
		$sql_query =$cat_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$ref_database,
		$bindParam_name_array = array(':display_cat_id'),
		$bindParam_value_array = array($display_cat_id)
		);#,
		#$bindParam_name_array = array('dbname'),
		#$bindParam_value_array = array($database));
	
	$nrows_gene_cat = count($cat_q);
	## Build search query for primary database
	$row = $cat_q[0];
	extract($row);
	$cat_gene_ids = explode(";", ${$primary_gene_symbol});
	
	## If the reference category is a PTM category it will contain geneName-T123 annotation ##
	$n = count($cat_gene_ids) - 1;
	$cat_display_ptm_sites = array();
	for ($s=0; $s < $n; $s++){
		if ($ptm_display_column != ""){
			$cat_display_ptm_sites[$s] = explode("-", $cat_gene_ids[$s])[1];
		}
		
		$cat_gene_ids[$s] =  explode("-", $cat_gene_ids[$s])[0];
	}
	
	
	
	#Where clause: WHERE gene_name IN (gene_name 1, gene_name 2)   
	$counter = 1;
	$all_cat_genes = "";
	$search_query = "";
	
	$ngenes_in_cat = count($cat_gene_ids)-1;
	
	if ($nrows_gene_cat > 0){
		## switched to pdo 20170223
		##while($row = mysqli_fetch_assoc($gene_cat_result))
		$category_name = $cat_name;
		
		## the last entry in the cat_gene_ids entry is always empty
		
		if ($ptm_display_column != ""){
			for ($r=0; $r < $ngenes_in_cat; $r++){
				if ($cat_gene_ids[$r] != ""){
					$cat_gene_id = explode("(", $cat_gene_ids[$r])[0];
					$all_cat_genes = $all_cat_genes.$cat_gene_id.", ";
					$search_query = $search_query."((".$primary_gene_symbol." = '".$cat_gene_id."') AND (".$ptm_display_column." = '".$cat_display_ptm_sites[$r]."')) OR ";
					$counter++;
				}
			}
		} else {
			for ($r=0; $r < $ngenes_in_cat; $r++){
				if ($cat_gene_ids[$r] != ""){
					$cat_gene_id = explode("(", $cat_gene_ids[$r])[0];
					$all_cat_genes = $all_cat_genes.$cat_gene_id.", ";
					$search_query = $search_query.$primary_gene_symbol." = '".$cat_gene_id."' OR ";
					$counter++;
				}
			}
		}
				 
		$search_query = substr($search_query, 0, -3);
        $search_query = $search_query.')';
				 
		$all_cat_genes = substr($all_cat_genes, 0, -2);
	}
	
	
	$display_cat_name = str_replace("_", " ", $cat_name);
	$all_cat_genes = "<b>All genes in $display_cat_name, including those genes that were not detected in this experiment: </b><br>".$all_cat_genes.".";
	echo "
	<div align='center'>
		<h1>Results for the Category <br> $display_cat_name</h1>
		<br>
	</div>";
			
	if ($ptm_display_column != ""){
		$query_gene = "SELECT DISTINCT ".$primary_gene_symbol.", ".$ptm_display_column.", gene_description, p_site_env, ";
	} else {
		$query_gene = "SELECT DISTINCT ".$primary_gene_symbol.", gene_description, ";
	}
	
	
	## Select columns to display in table ##
	for ($i=0; $i< count($table_display_columns); $i++){
		$column_name = $table_display_columns[$i];
		$query_gene = $query_gene." ".$column_name.", ";
	}
	
	## Select columns to be displayed in heatmap ##
	for ($i=0; $i< count($experiment_array); $i++){
		$column_name = $experiment_array[$i];
		$query_gene = $query_gene." ".$column_name.", ";
	}
	
	## Select columns to be displayed in plots ##
	for ($i=0; $i< count($plot_selection); $i++){
		$column_name = $plot_selection[$i];
		$query_gene = $query_gene." ".$column_name.", ";
	}
	
	
	$text = "";
	
	$query_gene = substr($query_gene,0,-2);
	
	## Set table category display query ##
	$query_sql_cat_table = $query_gene." FROM ".$primary_data_db_table." WHERE (".$search_query." ORDER BY cluster_order DESC";
	
	## Limits for graphical display ##
	if ($ngenes_in_cat <= 1500){
		$query_sql = $query_gene." FROM ".$primary_data_db_table." WHERE (".$search_query." ORDER BY cluster_order DESC";	
	} else {
		$query_sql = $query_gene." FROM ".$primary_data_db_table." WHERE (".$search_query." AND (cluster_order > 0) ORDER BY cluster_order DESC";
		$text = "A very large number of datapoints was selected (".$ngenes_in_cat."). For a better overview, 
		only the most variable genes are shown below.";
	}
	
	## Switched to PDO 20170223 ##
	##$cxn_gene = mysqli_connect($host, $user, $pwd, $database)
    ##or die("Database couldn't be reached");
	##$result_gene = mysqli_query($cxn_gene, $query_gene) or die("Couldn't execute query");   

	$result_gene = query_db(
		$sql_query = $query_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$primary_data_db
	);  
			
	$n_genes_in_cat = count($result_gene);	
	
	echo "
	<div align = 'center'>";
	#$display_experiments = array_values($display_experiments);
	
	
	heatmap(
		$experiment_array = $experiment_array,
		$experiment_name_array = "",
		$database = $primary_data_db,
		$host = $host, 
		$user = $user,
		$pwd = $pwd,
		$sql_query = $query_sql,
		$headline = $hm_headline,
		$colorscale_min = $lower_heatmap_limit,
		$colorscale_max = $upper_heatmap_limit,
		$point_name_column = $primary_gene_symbol,
		$ptm_display_column = $ptm_display_column, 
		$divid = "heatmap1",
		$col_name_start=5
	);
		
	
	##########################
	#Give plot option#########
	##########################
	$x_axis = $plot_selection[0];
	$y_axis = $plot_selection[1];
	$x_axis_display = substr($plot_selection[0], 11, 100);
	$y_axis_display = substr($plot_selection[1], 11, 100);

	echo "
	<div align = 'center'>
		<br>
		<br>
		<h2>Show $display_cat_name in 2D-scatterplot</h2>
		<br>
		<form action = 'display.plot.php' method = GET>
			<div align = 'center'>
				<table border = '0'>
					<tr>
						<td>
							<div align = 'center'>
								Select plot x-axis:
								<select name='x_axis'>
									<option value=$x_axis>$x_axis_display</option>";

									for ($i=0; $i< count($plot_selection); $i++){
										echo "<option value='$plot_selection[$i]'>".substr($plot_selection[$i], 11, 100)."</option>      ";
									}

								echo "
								</select>
							</div>	
						</td>
						
						<td>
							<font color = 'white'>__</font>
						</td>  
	   
						<td>   
							<div align = 'center'>
								Select plot Y-axis:
								<select name='y_axis'>
									<option value=$y_axis>$y_axis_display</option>";

									for ($i=0; $i< count($plot_selection); $i++){
										echo "<option value='$plot_selection[$i]'>".substr($plot_selection[$i], 11, 100)."</option>      ";
									}
								echo "
								</select>
							</div>	
						</td>	  
					</tr>
				</table>
			</div>

			<div align = 'center'>
			<br>
			<input type = 'hidden' name='cat_id' value=$display_cat_id>
			<input type = 'hidden' name='headline' value='2D Scatterplot'>
			<input type='submit'  value='Create Scatterlot'/>
		</form>
	</div>
	<br>
	<br>";	

	##########################
	#End of plot option#######
	##########################

			
		
	


	printDataTable(
		$sql_query = $query_sql_cat_table,
		$primary_gene_symbol = $primary_gene_symbol,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$primary_data_db,
		$ptm_display_column=$ptm_display_column,
		$table_display_columns = $table_display_columns,
		$table_display_columns_names = "",
		$low_highlight = $low_highlight,
		$high_highlight = $high_highlight,
		$table_headline_text = "All category genes present in this study <h6>".$text."</h6>"
	);
	
	echo $all_cat_genes;
}

## End Function display_category                                             ##
###############################################################################
   
###############################################################################   
## Determine if a category query was presented                               ##
###############################################################################
## old start version to be retired 20170324   
#if (!isset($_GET["category_query"])){ #End of section that displays default category display without a specific query
#    if (isset($_GET["category_type"])) {
#		$category_type = sanitizeString($_GET["category_type"]);
#	} else {
#		$category_type = "none";
#	}
			
#$table = $category_type;
## old end version to be retired 20170324  



###############################################################################   
## Start table display                                                       ##
###############################################################################			
echo "
<div class='content'> 
	<h1 align='center'>$headline</h1>
	<br>
</div>	
	";

$input_array = process_catView_inputs();
	
if ($enriched_categories_table != "" && $input_array['action'] == "list_default") {
	display_enriched_categories_table(
		$enriched_padj_cols = $enriched_padj_cols,
		$image_link_array = $image_link_array,
		$enriched_categories_table = $enriched_categories_table,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname="enriched_categories",
		$download_cat_enrichment_table=$download_cat_enrichment_table
);
}


## Switched to PDO 20170223 ##
## mysqli_close($cxn_enriched_categories); 
   	  
echo"
<a name='category_selection'></a>

<div align = 'center'>
	<h2>Browse results by category</h2>
	$explanatory_text
</div>";


## >>


if ($input_array['action'] == "list_default"){
	cv_display_cat_selection(
		$category_type = "none",
		$database = $cat_selection_db,
		$dbtable = $cat_selection_db_table,
		$host=$host,
		$user = $user,
		$pwd = $pwd
	);
} else if ($input_array['action'] == "list_cat_selection"){
	cv_display_cat_selection(
		$category_type = $input_array['category_type'],
		$database = $cat_selection_db,
		$dbtable = $cat_selection_db_table,
		$host=$host,
		$user = $user,
		$pwd = $pwd
	);
} else if ($input_array['action'] == "display_category"){
	cv_display_category (
		$display_cat_id = $input_array['display_category'],
		$ref_database = 'reference_categories_db_new',
		$host = $host,
		$user = $user,
		$pwd = $pwd,
		$primary_gene_symbol = $primary_gene_symbol,
		$table_display_columns = $table_display_columns,
		$ptm_display_column = $ptm_display_column,
		$primary_data_db = $database,
		$primary_data_db_table = $rnaseq_db_table,
		$plot_selection = $plot_selection,
		$experiment_array = $experiment_array,
		$lower_heatmap_limit = $lower_heatmap_limit,
		$upper_heatmap_limit = $upper_heatmap_limit,
		$low_highlight = $low_highlight,
		$high_highlight = $high_highlight
	);	
} else {
	cv_display_cat_selection(
		$category_type = "none",
		$database = $cat_selection_db,
		$dbtable = $cat_selection_db_table,
		$user = $user,
		$pwd = $pwd
	);
}

##

           
$text = 'Category ID';
## Databse Query for category listing
## Switched to basic PDO 20170223 ##
#$cxn_category = mysqli_connect($host, $user, $pwd, $ref_database) or die('Login failed');
 
 
## Print bottom bits ## 
print_footer();
?>