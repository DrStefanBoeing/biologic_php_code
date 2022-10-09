<?php
###############################################################################
## Create background sql query                                               ##
use Biologic\Core\Classes\DB;

function p1_dp_create_sql(
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
        (strpos($x_axis, 'lg10p') !== false) |
        (strpos($y_axis, 'lg10p') !== false) |
        (strpos($x_axis, 'norm_counts') !== false) |
        (strpos($y_axis, 'norm_counts') !== false) |
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
		WHERE ".$gene_selection."((NOT ".$x_axis." = 0) ".$link." (NOT ".$y_axis." = 0) )
	";
    return($sql_background);
}

##  End create background sql query                                          ##
###############################################################################

###############################################################################
## Function dp_create_cat_gene_query                                         ##
function p1_dp_create_cat_gene_query (
    $display_cat_id = "cat_id__nummer",
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

    $check_q = DB::query($check_sql, [], 'reference_categories_db_new');
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

    $cat_q = DB::query($cat_sql, [], 'reference_categories_db_new');
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
