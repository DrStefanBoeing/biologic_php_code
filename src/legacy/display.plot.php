<?php
#Creating Display string
#End of creating display string
include(__DIR__."/layout.php");
include(__DIR__."/functions/function.2D.plot.php");
//include(__DIR__."/function.heatmap.php");

print_header();

############
#Variables##
############


###############################################################################
## Set defaults                                                              ##
if (!isset($plot_selection)){
	$plot_selection = $table_display_columns;
}


##                                                                           ##
###############################################################################
$default_x_axis = $plot_selection[0];
$default_y_axis = $plot_selection[1];

if (isset($_GET['x_axis'])){
	$x_axis = sanitizeString($_GET['x_axis']);
} else{
	$x_axis = $default_x_axis;
}

if (isset($_GET['y_axis'])){
	$y_axis = sanitizeString($_GET['y_axis']);
} else{
	$y_axis = $default_y_axis;
}




$x_display = substr($x_axis, $col_name_start, 100);
$y_display = substr($y_axis, $col_name_start, 100);	


if (isset($_GET['cat_id'])){
	$cat_id = sanitizeString($_GET['cat_id']);
	if (isset($_GET['cat_name'])) {
		$cat_name = $_GET['cat_name'];
	} else {
		$cat_name = '';
	}
	$category_query = TRUE;
} else {
	$cat_id = "";
}

if (isset($_GET['highlight_gene'])){
	$highlight_gene = sanitizeString($_GET['highlight_gene']);
} else {
	$highlight_gene = "";
}


###############################################################################
## Create background sql query                                               ##
function dp_create_sql(
    $ptm_display_column = "",
    $x_axis = "",
    $y_axis = "",
    $primary_gene_symbol = "hgnc_symbol",
    $include_zero_values = TRUE,
    $primary_data_db_table = "",
    $gene_selection = "",
    $extra_columns_array = array(),# "columns to select in addition of x_axis and y_axis"
    $query_gene_description = FALSE
){

    if ($query_gene_description){
        $query_string = " gene_description, ";
    } else {
        $query_string = " ";
    }

    if ($ptm_display_column != "") {
        $query_string = $query_string.$primary_gene_symbol.", ".$ptm_display_column.", p_site_env ";
    } else
    {$query_string = $query_string.$primary_gene_symbol." ";
    }

    ## if one of the axis contains an iBAQ value, zeros are to be included by
    #  default
    if ((strpos($x_axis, 'iBAQ') !== false) |
        (strpos($y_axis, 'iBAQ') !== false) |
        (strpos($x_axis, 'peptides') !== false) |
        (strpos($y_axis, 'peptides') !== false) |
        ($include_zero_values)
    ) {
        $link = "OR";
    } else {
        $link = "AND";
    }
    $sql_background = "SELECT DISTINCT ";

    $column_array = array($x_axis, $y_axis);

    for ($i=0; $i < count($column_array); $i++){
        $sql_background = $sql_background." ".$column_array[$i].", ";
    }

    if (count($extra_columns_array) > 0){
        for ($i=0; $i < count($extra_columns_array); $i++){
            $sql_background = $sql_background." ".$extra_columns_array[$i].", ";
        }
    } #else {
    #take off last ,
    #	$sql_background = substr($sql_background, 0,-2);
    #}


    # join without >>,<< !!!#
    $sql_background = $sql_background." ".$query_string." 
		FROM ".$primary_data_db_table." 
		WHERE ".$gene_selection."((NOT ".$x_axis." = 0) ".$link." (NOT ".$y_axis." = 0) AND CoVarOrder < 20000)
	";
    return($sql_background);
}
##  End create background sql query                                          ##
###############################################################################
###############################################################################
## Function dp_create_cat_gene_query                                         ##
function dp_create_cat_gene_query (
    $display_cat_id = "cat_id__nummer",
    $ref_database = "cat_selection_db",
    $host = "host",
    $user = "dbuser",
    $pwd = "pwd",
    $primary_gene_symbol = "hgnc_symbol",
    #$table_display_columns = "",
    #$ptm_display_column = "",
    $primary_data_db = "",
    $primary_data_db_table = ""
    #$plot_selection = "plot selection array",
    #$experiment_array = "experiment_array",
    #$lower_heatmap_limit = -3,
    #$upper_heatmap_limit = 3,
    #$low_highlight = -1,
    #$high_highlight = 1.0001
){

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
    $check_sql = "SHOW TABLES LIKE '".$dbtable."'";

    $check_q = query_db(
        $sql_query =$check_sql,
        $host=$host,
        $user=$user,
        $pwd=$pwd,
        $dbname=$ref_database);#,
    #$bindParam_name_array = array('dbname'),
    #$bindParam_value_array = array($database));

    if (count($check_q) < 1){
        $emessage = "Error Category not found on the system.";
        return($emessage);
    }
    ## Done checking table existence ##
    $cat_sql = "SELECT DISTINCT ".$primary_gene_symbol.", cat_name, comments_1 
		FROM ".$dbtable." 
		WHERE cat_id ='".$display_cat_id."' 
		ORDER by ".$primary_gene_symbol." ASC";

    ## A category query by cat_id will always yield one row ##
    ## No Need to loop through result array ##

    $cat_q = query_db(
        $sql_query =$cat_sql,
        $host=$host,
        $user=$user,
        $pwd=$pwd,
        $dbname=$ref_database);#,
    #$bindParam_name_array = array('dbname'),
    #$bindParam_value_array = array($database));

    $nrows_gene_cat = count($cat_q);

    ## Build search query for primary database
    $row = $cat_q[0];
    extract($row);
    $cat_gene_ids = explode(";", ${$primary_gene_symbol});

    #Where clause: WHERE gene_name IN (gene_name 1, gene_name 2)
    $counter = 1;
    $all_cat_genes = "";
    $search_query = "";

    if ($nrows_gene_cat > 0){
        ## switched to pdo 20170223
        ##while($row = mysqli_fetch_assoc($gene_cat_result))
        $category_name = $cat_name;
        $search_query = "(";
        ## the last entry in the cat_gene_ids entry is always empty
        $ngenes_in_cat = count($cat_gene_ids)-1;
        for ($r=0; $r < $ngenes_in_cat; $r++){
            $cat_gene_id = $cat_gene_ids[$r];
            $cat_gene_id = explode("(", $cat_gene_id)[0];
            if ($cat_gene_id != ""){
                $all_cat_genes = $all_cat_genes.$cat_gene_id.", ";
                $search_query = $search_query.$primary_gene_symbol." = '".$cat_gene_id."' OR ";
                $counter++;
            }
        }

        $search_query = substr($search_query, 0, -3);
        $search_query = $search_query.')';

        $all_cat_genes = substr($all_cat_genes, 0, -2);
    }

    if ($search_query == ""){
        $search_query = "Error:".$emessage;
    }

    $dp_create_cat_gene_query_return_array = array(
        'search_query' => $search_query,
        'cat_name' => $cat_name,
        'comments_1' => $comments_1
    );

    return($dp_create_cat_gene_query_return_array);
}
## End: Function dp_create_cat_gene_query                                    ##
###############################################################################
###############################################################################
###############################################################################


###############################################################################
###############################################################################
## End of functions                                                          ##
###############################################################################
###############################################################################	
//Create background sql query


$sql_background = dp_create_sql (
	$ptm_display_column = $ptm_display_column,
	$x_axis = $x_axis,
	$y_axis = $y_axis,
	$primary_gene_symbol = $primary_gene_symbol,
	$include_zero_values = FALSE,
	$primary_data_db_table = $rnaseq_db_table,
	$gene_selection = ""
	);

$backtround_legend_string = "All genes in screen";

## Ensure display even if no gene is selected ##
if ($highlight_gene == "" & $cat_id == ""){
	$highlight_gene = "No gene or category selected";
}

if ($highlight_gene != ""){
	$sql_highlight = dp_create_sql (
	$ptm_display_column = $ptm_display_column,
	$x_axis = $x_axis,
	$y_axis = $y_axis,
	$primary_gene_symbol = $primary_gene_symbol,
	$include_zero_values = FALSE,
	$primary_data_db_table = $rnaseq_db_table,
	$gene_selection = $primary_gene_symbol." = '".$highlight_gene."' AND "
	);
	
	$highlight_legend_string = $highlight_gene;
	$highlight = "highlight_gene";
	$headline = "<h2><b>2D Scatterplot</b></h2> <br><font color = 'red'>".$highlight_legend_string."</font>";
	
} else if ($cat_id != ""){
	## Step 1: Get genes to highlight ##
	$gene_selection = dp_create_cat_gene_query (
		$display_cat_id = $cat_id,
		$ref_database = $ref_database,
		$host = $host,
		$user = $user,
		$pwd = $pwd,
		$primary_gene_symbol = $primary_gene_symbol,
		$primary_data_db = $database,
		$primary_data_db_table = $rnaseq_db_table
	);
	
	$cat_name = $gene_selection['cat_name'];
	$cat_link = $gene_selection['comments_1'];
	$gene_selection = $gene_selection['search_query'];
	
	if (strpos($gene_selection, 'Error') !== false){
		echo "Error. Category not found.";
	} else {
		if ($ptm_display_column != ""){
			$extra_columns_array = array("gene_description", $ptm_display_column);
		} else {
			$extra_columns_array = array("gene_description");
		}
		
		$sql_highlight = dp_create_sql (
			$ptm_display_column = $ptm_display_column,
			$x_axis = $x_axis,
			$y_axis = $y_axis,
			$primary_gene_symbol = $primary_gene_symbol,
			$include_zero_values = FALSE,
			$primary_data_db_table = $rnaseq_db_table,
			$gene_selection = $gene_selection." AND ",
			$extra_columns_array = $extra_columns_array
		);
		
		$table_sql = $sql_highlight;
		
	}
	
	$highlight_legend_string = str_replace("_", " ", $cat_name);
	$highlight = "cat_id";
	$headline = "Scatterplot <br><font color = 'red'>".$highlight_legend_string."</font>
						 <br><a href = '".$cat_link."' target='_blank'>Link to Category description</a>";
	
} 


scatterplot_2d(
	$x_axis = $x_axis,
	$x_axis_label = $x_display,
	$y_axis = $y_axis,
	$y_axis_label = $y_display,
	$database = $database,
	$host = $host, 
	$user =  $user,
	$pwd = $pwd,
	$base_sql_query = $sql_background,
	$highlight_sql_query = $sql_highlight,
	$headline = $headline,
	$point_name_column = $primary_gene_symbol,
	$ptm_pos_column = $ptm_display_column,
	$x_low_line = -1.5,
	$x_high_line = 1.5,
	$y_low_line = -1.5,
	$y_high_line = 1.5,
	$bg_series_name = $backtround_legend_string,
	$highlight_series_name = $highlight_legend_string
);


###############################################################################
## Create plot selection                                                     ##
dp_create_plot_selection(
	$x_axis = $x_axis,
	$y_axis = $y_axis,
	$col_name_start = $col_name_start,
	$plot_selection = $plot_selection,
	$cat_id = $cat_id,
	$highlight_gene = $highlight_gene
);
## End create plot selection                                                 ##
###############################################################################

###############################################################################
## Display data table                                                        ##
## Display x-axis, y-axis and table selection 
## Build sql query

#dp_create_sql(
#	$ptm_display_column = $ptm_display_column,
#	$x_axis = $x_axis,
#	$y_axis = $y_axis,
#	$primary_gene_symbol = $primary_gene_symbol,
#	$include_zero_values = FALSE,
#	$primary_data_db_table = $rnaseq_db_table,
#	$gene_selection = "",
#	$extra_columns_array = array(), # "columns to select in addition of x_axis and y_axis"
#	$query_gene_description = TRUE
#	);

## check number of rows to display ##
$check_q = query_db(
		$sql_query =$table_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database);#,
		#$bindParam_name_array = array('dbname'),
		#$bindParam_value_array = array($database));	

$text = "";		
$a = count($check_q);
	
if (count($check_q) > 2000){
	$text = "A very large number of datapoints was selected (".count($check_q)."). For a better overview, 
	only the most variable genes are shown in the data table.";
	$table_sql = dp_create_sql(
		$ptm_display_column = $ptm_display_column,
		$x_axis = $x_axis,
		$y_axis = $y_axis,
		$primary_gene_symbol = $primary_gene_symbol,
		$include_zero_values = FALSE,
		$primary_data_db_table = $rnaseq_db_table,
		$gene_selection = " (cluster_order > 0) AND ",
		$extra_columns_array = $table_display_columns, # "columns to select in addition of x_axis and y_axis"
		$query_gene_description = TRUE
	);
	
}

#echo $table_sql;
$column_array = array($x_axis, $y_axis);
#$column_array = array_merge($column_array, $table_display_columns);

#echo $table_sql;

## Display table only when a category is displayed ##
if ($cat_id != ""){
	printDataTable(
		$sql_query = $table_sql,
		$primary_gene_symbol = $primary_gene_symbol,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database,
		$ptm_display_column=$ptm_display_column,
		$table_display_columns = $column_array,
		$table_display_columns_names = "",
		$low_highlight = $low_highlight,
		$high_highlight = $high_highlight,
		$table_headline_text = "<h2><b>All category genes in this study:</h2></b><br>".$text
	);	
}
		
## End display data table                                                    ##
###############################################################################



print_footer();
?>