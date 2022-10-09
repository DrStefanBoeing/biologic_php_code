
<?php
###############################################################################
## Search.result.php                                                         ##
###############################################################################

## Functions and parameters to include ##
include(__DIR__."/layout.php");
include(__DIR__."/functions/function.timecourse.php");
include(__DIR__."/functions/function_count_column_chart.php");

## Create header block ##
print_header();

## Set parameters and defaults for search.result.php
$brand = "GeneView";
$q_gene_ptm = "";

###############################################################################
## Process Inputs & setting defaults                                         ##

if (isset($_GET['exact'])) {
	$exact = sanitizeString($_GET['exact']);
} else {
	$exact = FALSE;
}

if ($exact == "TRUE"){
	$exact_search = TRUE; #count($temp);
} else {
	$exact_search = FALSE;
}	


if (!isset($_SESSION["Query"])){
	$_SESSION["Query"] = "";
}

if (!isset($_SESSION["exact"])){
	$_SESSION["exact"] = FALSE;
}


if ( (!isset($_GET["Query"])) & (!isset($_GET['exact'])) ) {
	$_GET["Query"] = sanitizeString($_SESSION["Query"]);
    $_GET["exact"] = sanitizeString($_SESSION["exact"]);
    }

if (empty($_GET["Query"])){
	$selection = FALSE;
} else {
	$selection = TRUE;
	$q_gene_name = sanitizeString($_GET["Query"]);
	
}
	

## Check if $q_gene_name comes in from ptm display ##
if ($display_ptm != ""){
	$check = explode("-", $q_gene_name);
	if (count($check) > 1){
		$gene_name = $check;
		## Remove last element ##
		unset($gene_name[count($gene_name) - 1]);
		$q_gene_name = implode("", $gene_name);
		$q_gene_ptm = $check[(count($check) - 1)];
	}
} else {
	$q_gene_ptm = "";
}


###############################################################################
## Security checks                                                           ##
## Security: Check $q_gene_name and q_gene_ptm against database

function security_check_against_db(
	$string,
	$host = "host",
	$user = "user",
	$pwd = "pwd",
	$db = "database",
	$db_table = "database_table",
	$db_table_column = "database_column",
	$mode = "exact | like"
){
	if ((strlen($string) > 1) & ($string != "")){
		if ($mode == "exact"){
			$sql_check_query = "SELECT DISTINCT ".$db_table_column." FROM ".$db_table." WHERE ".$db_table_column." = :q_gene_name";
		} else {
			$sql_check_query = "SELECT DISTINCT ".$db_table_column." FROM ".$db_table." WHERE ".$db_table_column." LIKE CONCAT(:q_gene_name, '%')";
		}
		$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
		
		$stmt = $conn->prepare($sql_check_query);
		$stmt->bindParam(':q_gene_name', $string);
		
		
		
		
		
		$stmt->execute();
		$check_result = $stmt->fetchAll();
		$conn->connection = null;
		$nrows = count($check_result);
		## Use upper/lower case as in database##
	} else {
		$nrows = 0;
	}
	
	if ($nrows == 0){
		$string = "This entry is not present in the dataset. Please ensure you are using official gene symbols.";
	} else if (($nrows == 1) & ($mode == "exact")){
		extract($check_result[0]);
		$string = ${$db_table_column};
	}
	return($string);
}

###############################################################################
## Security checks                                                           ##


if ($exact_search){
	$mode = "exact";
} else {
	$mode = "like";
}

if (!isset($q_gene_name)){
	$q_gene_name = "";
}

if ($q_gene_name != ""){
	$q_gene_name = security_check_against_db(
		$string = $q_gene_name,
		$host = $host,
		$user = $user,
		$pwd = $pwd,
		$db = $database,
		$db_table = $rnaseq_db_table,
		$db_table_column = $primary_gene_symbol,
		$mode = $mode
	);
}


if ($q_gene_ptm != ""){
	$q_gene_ptm = security_check_against_db(
		$string = $q_gene_ptm,
		$host = $host,
		$user = $user,
		$pwd = $pwd,
		$db = $database,
		$db_table = $rnaseq_db_table,
		$db_table_column = $ptm_display_column,
		$mode = "exact"
	);
		
	if ($q_gene_ptm == "This entry is not present in the dataset. Please ensure you are using official gene symbols."){
		$q_gene_name = $q_gene_ptm; 
	}	
}

## Security check done ##

## Done security checks                                                      ##
############################################################################### 




## Main ##
echo "
<div class='content'>
	<div class='content'>
		<h1 align='center'>$brand</h1>
        <br>
        <div class='ui-widget'>
			<form action='search.result.php' method='GET' style='text-align: center'>
				<input type='text' id='automplete-1' name='Query' placeholder='$primary_gene_symbol'>
				<input type='submit'  value='$brand' title = 'Enter an offical $primary_gene_symbol gene name in order to search the data' /n>
				<input type='checkbox' name='exact' value='TRUE' checked title ='If this box is unchecked, all genes starting with the query will be listed. If the box is 	checked only entries that match the query exactly will be listed'>Exact search<br>
			</form>   
	    </div>
		<br>
	    <div class='page-header' align = 'center'>
           <br>
	    </div> 
     </div>
";


## Display only if a gene is selected ##
if ($selection){
	
	if ($q_gene_ptm == ""){
		$display_query = $q_gene_name;
	} else {
		$display_query = $q_gene_name."-".$q_gene_ptm;
	}
	
	echo "		  
	<div align='center'>
		<h2>
			<b>Query: $display_query</b>
		</h2>
	</div>
	";


	#Query database for protein results
	# To be retried
	#$cxn_gene = mysqli_connect($host, $user, $pwd, $database)
	#	or die("Database couldn't be reached");
	 
	#$cxn_cat = mysqli_connect($host, $user, $pwd, $database)
	#	or die("Database couldn't be reached");

	#$cxn_ref = mysqli_connect($host, $user, $pwd, $cat_database)
	#	or die("Database couldn't be reached"); 


	if ($exact_search){
		$plot_sql_query = "SELECT DISTINCT * ";
		if ($ptm_display_column == ""){
			$query_gene = "SELECT DISTINCT ".$primary_gene_symbol." ,hgnc_symbol, gene_description,";
		} else {
			$query_gene = "SELECT DISTINCT ".$primary_gene_symbol.", ".$ptm_display_column.", gene_description, p_site_env, hgnc_symbol,";
		}
									
		for ($i=0; $i< count($table_display_columns); $i++){
			$column_name = $table_display_columns[$i];
			$query_gene = $query_gene." ".$column_name.", ";
			$display_experiments[$i] = str_replace("_", " ", $column_name);	   	        
			}							 
		$query_gene = substr($query_gene,0,-2);
	
		if ($ptm_display_column != ""){
			if ($q_gene_ptm == ""){
				$query_gene = $query_gene." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = '$q_gene_name' ORDER BY ".$primary_gene_symbol." , position ASC";
				$plot_sql_query = $plot_sql_query." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = '$q_gene_name' ORDER BY ".$primary_gene_symbol." , position ASC";
			} else {
				$query_gene = $query_gene." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." ='$q_gene_name' AND display_ptm = '$q_gene_ptm' ORDER BY ".$primary_gene_symbol." , position ASC";
				$plot_sql_query = $plot_sql_query." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = '$q_gene_name' AND display_ptm = '$q_gene_ptm' ORDER BY ".$primary_gene_symbol." , position ASC";
			}
		} else {
			$query_gene = $query_gene." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = :q_gene_name ORDER BY ".$primary_gene_symbol." ASC";
			$plot_sql_query = $plot_sql_query." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = :q_gene_name ORDER BY ".$primary_gene_symbol." ASC";
		}
	} else {
		if ($ptm_display_column == ""){
			$query_gene = "SELECT DISTINCT ".$primary_gene_symbol.", hgnc_symbol, gene_description,";
			} else {
				$query_gene = "SELECT DISTINCT ".$primary_gene_symbol.", ".$ptm_display_column.", gene_description, p_site_env, hgnc_symbol,";
				}
		for ($i=0; $i< count($table_display_columns); $i++){
			$column_name = $table_display_columns[$i];
			$query_gene = $query_gene." ".$column_name.", ";
			$display_experiments[$i] = str_replace("_", " ", $column_name);	   	        
			}							 
		$query_gene = substr($query_gene,0,-2);
		$query_gene = $query_gene." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." LIKE '$q_gene_name%' ORDER BY ".$primary_gene_symbol." DESC";	
		$plot_sql_query = $plot_sql_query." FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." LIKE '$q_gene_name%' ORDER BY ".$primary_gene_symbol." DESC";	
	   }

# $result_gene = mysqli_query($cxn_gene, $query_gene) or die("Couldn't execute query"); 


$result_gene = query_db(
	$sql_query = $query_gene,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$bindParam_name_array = array(':q_gene_name'),
	$bindParam_value_array = array($q_gene_name)
);


################### 
#Begin barchart   #
###################
#Create count query
if ($exact_search){
	#$sql_query = "SELECT DISTINCT * FROM ".$rnaseq_db_table." WHERE ".$primary_gene_symbol." = '$q_gene_name' ORDER BY ".$primary_gene_symbol." DESC";
	$sql_query = $plot_sql_query;
	echo "
	<br>
	<br>
	";	



	#Begin count table 
	echo "
	<div align = 'center'>
	<b><h2>$count_table_headline</h2></b>
	<br>
	";
	
	# Determine if timecourse array or count column chart is to be presented
	if (is_array($timepoint_array)){
		timecourse(
			$database = $database,
			$host, 
			$user,
			$pwd,
			$sql_query = $sql_query,
			$bindParam_name_array = array(':q_gene_name'),
			$bindParam_value_array = array($q_gene_name),
			$y_axis_label = $count_column_chart_y_axis_label,
			$x_axis_label = $count_column_chart_x_axis_label,
			$vlinecolor = '#D3D3D3',
			$vlinestyle = 'longdashdot',
			$dotlinewidth = 0,
			$dotradius = 3,
			$first_query_row_only = FALSE
		);
	} else {
		#Begin count table 
		count_column_chart(
			$database,
			$host, 
			$user,
			$pwd,
			$sql_query,
			$bindParam_name_array = array(':q_gene_name'),
			$bindParam_value_array = array($q_gene_name),
			$y_axis_label = $count_table_sidelabel
			);
	}		
			   
					   
	echo 
	"</div>
	<br><br>
	";
   }	

   
###############################################################################
## Result table                                                              ##
printDataTable(
	$sql_query = $query_gene,
	$primary_gene_symbol = $primary_gene_symbol,
	$host = $host,
	$user = $user,
	$pwd = $pwd,
	$dbname = $database,
	$ptm_display_column = $ptm_display_column,
	$table_display_columns = $table_display_columns,
	$table_display_columns_names = "",
	$low_highlight = $low_highlight,
	$high_highlight = $high_highlight,
	$table_headline_text = "Results for ".$q_gene_name,
	$bindParam_name_array = array(':q_gene_name'),
	$bindParam_value_array = array($q_gene_name)
);

## End result table                                                          ##
###############################################################################
   
###############################################################################
## Add 2D plot option                                                        ##
dp_create_plot_selection(
	$x_axis = $plot_selection[0],
	$y_axis = $plot_selection[1],
	$col_name_start = 11,
	$plot_selection = $plot_selection,
	$cat_id = "",
	$highlight_gene = $q_gene_name
);   
   
## End add 2D plot option                                                    ##
###############################################################################   

#############################
#Add reference table section#
#############################
#Display selections for background information
#Get relevant reference gene ids for display
$id_sql = "SELECT DISTINCT $ensembl_id, $primary_gene_symbol, hgnc_symbol, uniprot, entrezgene FROM $rnaseq_db_table WHERE ".$primary_gene_symbol." =:q_gene_name";

$ids = query_db(
	$sql_query = $id_sql,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$database,
	$bindParam_name_array = array(':q_gene_name'),
	$bindParam_value_array = array($q_gene_name)
);


$nr = count($ids);
				
if (count($ids) > 0){				
	$row = $ids[0]; #Only want the first raw to avoid id conflicts 
	extract($row);
} else {$uniprot = "";
        $ENSG = "";
		$entrez_gene_id = "";
}
#####################
#End of id retrieval#
#####################

## Storage ##
#<div class='col-sm-3'>
#	<a href='http://www.genomernai.org/v16/geneSearch/$hgnc_symbol' target='_blank' title='Link to the GenomeRNAi database' class='btn btn-success btn-lg' role='button' style='width: 250px'>GenomeRNAi-$hgnc_symbol &raquo;</a>
#</div>
					
#<div class='col-sm-3'>
#	<a href='http://amp.pharm.mssm.edu/Enrichr/#!gene=$hgnc_symbol' target='_blank' title='Link to the Enrichr database' class='btn btn-success btn-lg' role='button' style='width: 250px'>Enrichr-$hgnc_symbol &raquo;</a>
#</div>
										
## End storage area

if ($exact_search){
	
	echo "<div align = 'center'>
            <h2> 
		       Background Information for $q_gene_name
		    </h2>
			<br>
		  </div>
          
		  <div align='center'>
             <div class='container'>
                 <div class='row'>
				    <div class='col-sm-3'>
					   <a href = 'http://www.ncbi.nlm.nih.gov/pubmed/?term=$q_gene_name' target='_blank' title='Link to the Pubmed results for this gene' class='btn btn-success btn-lg'                        role='button' style='width: 250px'>Pubmed-".${$primary_gene_symbol}." &raquo;</a>
					</div>
					
					
					<div class='col-sm-3'>
					   <a href='http://www.genecards.org/cgi-bin/carddisp.pl?gene=$hgnc_symbol' target='_blank'  title='Link to genecards for this gene' class='btn btn-success btn-lg' role='button' style='width: 250px'>Genecards-$hgnc_symbol</a>
					</div>
					
				    
					<div class='col-sm-3'>
					   <a href='https://www.gtexportal.org/home/gene/$hgnc_symbol' target='_blank'  title='Link to the Gene Expression Atlas' class='btn btn-success btn-lg' role='button' style='width: 250px'>GTEx-$hgnc_symbol &raquo;</a>
					</div>
					
					
					<div class='col-sm-3'>
					   <a href='https://depmap.org/portal/gene/$hgnc_symbol?tab=overview' target='_blank'  title='Depmap results for this gene' class='btn btn-success btn-lg' role='button' style='width: 250px'>DepMap-".$hgnc_symbol." &raquo;</a>
					</div>
					
					
				 </div>
			</div>
			 <br>
			 <div class='container'>
				 <div class='row'>
				    <div class='col-sm-3'>
					   <a href='http://www.tumorportal.org/view?geneSymbol=$hgnc_symbol' target='_blank' title ='Link to tumor data at the Broad institute for this gene.' class='btn btn-success btn-lg' role='button' style='width: 250px'>Tumorportal-$hgnc_symbol &raquo;</a>
					</div>
					
					
					<div class='col-sm-3'>
					   <a href='http://www.proteinatlas.org/search/$hgnc_symbol' target='_blank' title ='Link to the human protein atlas for this gene.' class='btn btn-success btn-lg' role='button' style='width: 250px'>ProteinAtlas-$hgnc_symbol &raquo;</a>
					</div>
					
				  
					
					<div class='col-sm-3'>
					   <a href='https://hts.crick.ac.uk/db/view/searchResult.php?geneID=$hgnc_symbol' target='_blank' title='Link to the CRICK Highthroughput screening facility database' class='btn btn-success btn-lg' role='button' style='width: 250px'>CRICK HTS RNAi-$hgnc_symbol &raquo;</a>
					</div>
					
					<div class='col-sm-3'>
					   <a href='https://www.targetvalidation.org/target/$ENSG' target='_blank' title='Link to diseases, pathways and drugs associated with this gene' class='btn btn-success btn-lg' role='button' style='width: 250px'>Drug target-".${$primary_gene_symbol}." &raquo;</a>
					</div>
					
					<div></div>
					
				 </div>
			</div>
	    </div>
		  
		  
	      <br>
		  <br>
		  <br>";
   
#End of background information links

#Comment section   
   
  
         /*Display old comments*/
		 
	
		 
	}








/*Start Domain display*/

#################################
#Start immune signatures display#
#################################

###############################################################################
## Function sr_display_ref                                                   ##
function sr_display_ref_table(
	$table_headline = "Protein-protein Interactions",
	$gene_name = "gene_name",
	$sql_query = "sql_query",
	$bindParam_name_array = array(),
	$bindParam_value_array = array(),
	$host,
	$user,
	$pwd,
	$database){
	
	$query_r = query_db(
		$sql_query =$sql_query,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database,
		$bindParam_name_array = $bindParam_name_array,
		$bindParam_value_array = $bindParam_value_array
	);#,
		#$bindParam_name_array = array('dbname'),
		#$bindParam_value_array = array($database));
	
	$nrows_enriched_cat = count($query_r);
	
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
	} else {$data_page_list = "";
	}
											
	$table_headline = $table_headline." categories featuring ".$gene_name;
	
	echo "
	<div align = 'center'>
		<b><h2>$table_headline</h2></b> 
          										
		<table id='ptm_table' data-toggle='table' $data_height data-cache='false' class='table table-striped table-bordered' width='95%' align='center'
			data-page-size=$nrows_enriched_cat  $data_page_list data-pagination='true' data-search='true' data-show-export = 'true'>	  
			<thead>
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2'>Show screen data for</th>
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-6' ><b>Category Name and Description</b></th>
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2' ><b>Link to cat description</b></th>
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2' ><b>Data Source</b></th>
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center' class='col-md-2' ><b>Category Size</b></th>
			</thead>
			<tbody>";
				for ($r=0; $r< count($query_r); $r++){
					$row = $query_r[$r];
					extract($row);
					$cat_name = str_replace("_", " ", $cat_name);
					echo "
					<tr>
						<td class='text-center'>
							<a href ='category.view.php?category_query=$cat_id'>Category members</a>
						</td>
						 
						<td class='text-center'>
							<a href ='category.view.php?category_query=$cat_id'>$cat_name</a>
						</td>
				
						<td class='text-center'>
							<a href ='$comments_1' target='_blank'>Cat. description</a>
						</td>
				
						<td class='text-center'>
							$data_source
						</td>
						
						<td class='text-center'>
							$cat_item_size
						</td>
					</tr>";
				}
			   			   
			echo "
			</tbody>
		</table>
	</div>
	<br>
	<br>";
			  
			   #End of section that displays default category display without a specific query
	
}


## End Function sr_display_ref                                               ##
###############################################################################	


## Determine which reference data tables to select ##
## Box name > cat_group
## Box content > all cat constituents

## Create selection array "box_name" => array("tables to query")

$cat_selection_array = cv_create_cat_group_array(
	$database = $cat_selection_db,
	$dbtable = $cat_selection_db_table,
	$host=$host,
	$user = $user,
	$pwd = $pwd
);


###############################################################################
## Start reference category display                                          ##

if ($exact_search == TRUE | count($cat_selection_array) > 0){
	for ($i=0; $i< count($cat_selection_array); $i++){
		## Determine number of individual queries to union ##
		$sql_query = "SELECT DISTINCT cat_id 
			FROM ".$cat_selection_db_table." 
			WHERE cat_group = '".$cat_selection_array[$i]."'";
		
		## Get table(s) to use for display ##
		$query_cat_selection = query_db(
			$sql_query =$sql_query,
			$host=$host,
			$user=$user,
			$pwd=$pwd,
			$dbname=$cat_selection_db
		);
		
		$table_array = array();
		for ($r=0; $r< count($query_cat_selection); $r++){
			$row = $query_cat_selection[$r];
			extract($row);
			$cat_id = explode("__", $cat_id)[0];
			$table_array[] = $cat_id;
		}
		
		$table_array = array_unique($table_array);
		
		
		## Turn these into category sql queries for the queried gene ##
		$sql_base_query = "SELECT DISTINCT ".$primary_gene_symbol.", cat_id, cat_name, cat_type, data_source, comments_1, comments_2, cat_item_size 
						FROM ";
		for ($k=0; $k < count($table_array); $k++){
			if ($k ==0){
				$sql_query = $sql_base_query.$table_array[$k]." 
					WHERE (".$primary_gene_symbol." LIKE CONCAT('%;', :q_gene_name,';%') ) OR (".$primary_gene_symbol." LIKE CONCAT('%;',:q_gene_name, '%') )";
			} else {
				$sql_query = $sql_query." UNION ".$sql_base_query.$table_array[$k]." 
					WHERE (".$primary_gene_symbol." LIKE CONCAT('%;', :q_gene_name,';%') ) OR (".$primary_gene_symbol." LIKE CONCAT('%;',:q_gene_name, '%'))";
			}
			
			$sql_query = $sql_query." ORDER BY data_source DESC, cat_name ASC ";
			
			
			sr_display_ref_table(
				$table_headline = $cat_selection_array[$i],
				$gene_name = $q_gene_name,
				$sql_query = $sql_query,
				$bindParam_name_array = array(':q_gene_name'),
				$bindParam_value_array = array($q_gene_name),
				$host = $host,
				$user = $user,
				$pwd = $pwd,
				$database = $ref_database
			);
		}
	
	}
}



## End reference category display                                            ##
###############################################################################
}



   
echo "<link href='dist/css/jquery-ui.css' rel='stylesheet'>
      <script src='dist/js/jquery-1.10.2.js'></script>
      <script src='dist/js/jquery-ui.js'></script>
	 <script>
         $(function() {
            var availableTutorials = $all_genes;
			$( '#automplete-1' ).autocomplete({
               source: availableTutorials,
			   minLength: 2
            });
         });
      </script>";

print_footer();
?>