<?php
session_cache_limiter("must-revalidate");

session_start();
if ($_SESSION['auth'] != "yes")
  {header("Location: index.php");
  }

  
#######################
#Parameters############
#######################
include(__DIR__."/layout.ini.php");


echo isset($display_plate_view) ? $display_plate_view : FALSE;

if (!isset($peptide_view_link)){
	$peptide_view_link = "";
}	

$username = $_SESSION['username'];
if (isset($_SESSION['userArray'])){
	$user_id_array = $_SESSION['userArray'];
} else {
	$user_id_array = array($_SESSION['username']);
}
if (!in_array($username, $user_id_array)) {
	$_SESSION['auth'] = "";
	header('Location: index.php?');
    exit;
	}



						  
						  
function print_header(
	$print_buttons = TRUE
){
	include(__DIR__."/layout.ini.php");
	echo "
	<!DOCTYPE html>
    <html lang='en'>
        <head>
			<meta charset='utf-8'>
			<meta http-equiv='X-UA-Compatible' content='IE=edge'>
			<meta name='viewport' content='width=device-width, initial-scale=1'>
			<meta name='description' content=''>
			<meta name='author' content=''>
			<link rel='icon' href='logo.ico'>
			<title>$labname Lab DB</title>
			<!-- Bootstrap core CSS -->
			<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
			<!-- Bootstrap tables -->
			<link href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css' rel='stylesheet'>
			<!-- Bootstrap slider -->
			<link rel='stylesheet' type='text/css' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/css/bootstrap-slider.css' media='all'>

			<!-- Custom styles for this template -->
			<link href='theme.css' rel='stylesheet'>
			<link href=' sortable-theme-bootstrap.css' rel='stylesheet'>
			<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			<script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js'></script>
			<script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
	        
			<!-- adding highcharts -->
			<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
           
			<![endif]-->
		</head>

		<body role='document'>
		<!-- Fixed navbar -->
		<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='search.result.php'>$labname Lab DB</a>
				</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav'>
						<li class='active'><a href='search.result.php'>Home</a></li>
						<li class='active'><a href='about.php'>Slideshow</a></li>
						<li><a href='logout.php'>Logout</a></li>
						<li class='dropdown'>
						<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Links <span class='caret'></span></a>
					<ul class='dropdown-menu' role='menu'>
						<li><a href='search.result.php'>GeneView</a></li>
						<li><a href='category.view.php'>CategoryView</a></li>
						<li><a href='venn.view.php'>VennView</a></li>";
				
					#if ($ptm_display_column != ''){
					#	echo "
					#	<li><a href='display.plot.motif.search.php'>PTM-motifView</a></li>";
					#	}
				
					if ($display_pca){
						echo "
						<li><a href='display.pca.php'>PCA</a></li>";
						}
				
					if ($display_qc){
						echo "
						<li><a href='qc.php'>QC</a></li>";
						}
					
					
					if ($create_2d_scatterplot_button){
						$plot_query = "display.plot.php?x_axis=".$plot_selection[0]."&y_axis=".$plot_selection[1]."&headline=2D+Scatterplot";
						echo "
						<li><a href='$plot_query'>2D Scatterplot</a></li>";
						}
						
					if ($display_report){
						echo "
						<li><a href='report.php'>Report</a></li>";
						}
						
					if ($display_plate_view){
						echo "
						<li><a href='display.plate.php'>PlateView</a></li>";
						}	
					
					if ($peptide_view_link != ''){
						echo "
						<li><a href='peptide.view.php'>PeptideView</a></li>";
						}
					
					
						echo "
						<li class='divider'></li>
						<li class='dropdown-header'>More general information</li>
						<li><a href='#'>Linkd to research lab</a></li>
						<li><a href='#'>Bioinformatics & Biostatistics Core</a></li>
					</ul>
				</li>
			</ul>
			</div><!--/.nav-collapse -->
		</div>
		</nav>
		<br>
		<br>
		<br>";
	
	
#<a href='heatmap.php' class='btn btn-success btn-lg' role='button'>Heatmaps &raquo;</a>
			
	echo "
	  <div class='container theme-showcase' role='main'>";
	  
	if ($print_buttons){
		echo "
      <div align = 'center'>
        <a href='search.result.php' class='btn btn-success btn-lg' role='button'>GeneView &raquo;</a>
  		<a href='category.view.php' class='btn btn-success btn-lg' role='button'>CategoryView &raquo;</a>
		<a href='venn.view.php' class='btn btn-success btn-lg' role='button'>VennView &raquo;</a>";
		
		#if ($ptm_display_column != ''){
		#	echo "
		#	<a href='display.plot.motif.search.php' class='btn btn-success btn-lg' role='button'>PTM-motifView &raquo;</a>";
		#	}
		
		if ($display_pca){
			echo "
			<a href='display.pca.php' class='btn btn-success btn-lg' role='button'>PCA &raquo;</a>";
			}
				
		if ($display_qc){
			echo "
			<a href='qc.php' class='btn btn-success btn-lg' role='button'>QC &raquo;</a>";
			}
		
		if ($create_2d_scatterplot_button){
			$plot_query = "display.plot.php?x_axis=".$plot_selection[0]."&y_axis=".$plot_selection[1]."&headline=2D+Scatterplot";
				echo "
				<a href='$plot_query' class='btn btn-success btn-lg' role='button'>2D Scatterplot &raquo;</a>";
				}
		
		if ($display_report){
			echo "
			<a href='report.php' class='btn btn-success btn-lg' role='button'>Report &raquo;</a>";
			}
		
		if ($display_plate_view){
				echo "
				<a href='display.plate.php' class='btn btn-success btn-lg' role='button'>PlateView &raquo;</a>";
		}	
		
		if ($peptide_view_link != ''){
			echo "
			<a href='peptide.view.php' class='btn btn-success btn-lg' role='button'>PeptideView &raquo;</a>";
			}			
		
	  echo "
	  </div>
	";
	}
	echo "
	  <div class='page-header' align = 'center'>
		<br>
	  </div>   
	  ";
   }
	
function print_footer()
  {echo "<div class='page-header' align = 'center'>
           .
         </div>
         <div class='well' align = 'center'>
           <p>© Stefan Boeing Crick Bioinformatics and Biostatistics Service 2016</p>
         </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- Latest compiled and minified JavaScript -->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js'></script>		 
	
    <script src='https://cdnjs.cloudflare.com/ajax/libs/sortable/0.8.0/js/sortable.js'></script>
	
	
  </body>
</html>";


 
	  
  }
  
function add_statistics($record,
						$dbname = 'db_data_table',
						$host,
						$user,
						$pwd
						){
	#Prepare
###############################################################################
# Get server name
###############################################################################
if (isset($_SERVER['REMOTE_ADDR'])){
	$server_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	} else{
		$server_name = "Not given";
		}
$server_name = strip_tags($server_name);
		
###############################################################################
# Get server_address
###############################################################################
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $server_address = $_SERVER['HTTP_USER_AGENT'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$server_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
		$server_address = $_SERVER['REMOTE_ADDR'];
    } else {
		$server_address = "Not given";
	        }	
$server_address = strip_tags($server_address);

###############################################################################
# Get username
###############################################################################
if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	} else {
	$username = "website";
	}
$username = strip_tags($username);	
$user_id = $username;
#$host = "localhost";
#$user = "biologic_website";
#$database = "GGTP_beta";

###############################################################################
# Get session id
###############################################################################
$sesion_id = session_id();
$sesion_id = strip_tags($sesion_id);

###############################################################################
# Get record
###############################################################################
$record = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$record = strip_tags($record);
if (!isset($record)){
	$record = "";
}

###############################################################################
# Get previous
###############################################################################
$previous_url = "";
if (!isset($previous_url)){
	$previous_url = "";
}

###############################################################################
# Database entry
###############################################################################
	
	$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
	#if ($db->connect_error) {
	#	die("Connection failed: " . $conn->connect_error);
	#}

$stmt = $db->prepare("INSERT INTO query_history (user, query, q_time, server_name, server_address, previous_url, sesion_id) VALUES (:username, :record, NOW(), :server_name, :server_address, :previous_url, :sesion_id)");
$stmt->execute(
	array('username' 		=> $username, 
		  'record' => $record,
		  'server_name' 	=> $server_name,
		  'server_address' 	=> $server_address ,
		  'previous_url' 	=> $previous_url ,
		  'sesion_id' 		=> $sesion_id)
		  );
		  
$db->connection = null;

}


## Do stats ## Switched 201702 
add_statistics(
	$record = "",
	$dbname = 'db_data_table',
	$host,
	$user,
	$pwd
	);	
  



	
  

	
## Do stats ## Switched 201702 
#add_statistics(
#	$record = "",
#	$dbname = 'db_data_table',
#	$host,
#	$user,
#	$pwd
#	);
#$user_id = $_SESSION['username'];
#$record = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
#$cxn_statistics = mysqli_connect($host, $user, $pwd, 'db_data_table') or die('Login failed');
#mysqli_query($cxn_statistics, "INSERT INTO query_history (user, query, time, server_name, server_address) VALUES ('$user_id', '$record', NOW(), '$server_name', '$server_address')");
#mysqli_close($cxn_statistics);
  
## utility function to query db
function query_db(
	$sql_query ="",
	$host="",
	$user="",
	$pwd="",
	$dbname="",
	$bindParam_name_array = "",
	$bindParam_value_array = ""){
		
		
	#echo "SQL:".$sql_query."<br>";
	
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
		#if ($conn->connect_error) {
		#	die("Connection failed: " . $conn->connect_error);
		#}

	$stmt = $conn->prepare($sql_query);
	
	## Bind parameters ##
	if (is_array($bindParam_name_array) & is_array($bindParam_value_array)){
		for ($i=0; $i< count($bindParam_name_array); $i++){
			
			$param_name = $bindParam_name_array[$i];
			$param_value = $bindParam_value_array[$i];

			$stmt->bindParam($param_name, $param_value);
		}
	}
	
	$stmt->execute();
	$query_result = $stmt->fetchAll();
	$conn->connection = null;
	return $query_result;
	}  

## Utility function: Check presence in database column

###############################################################################
## Utility function: sanitizeString                                          ##
function sanitizeString($str){
	$str = strip_tags($str);
	$str = htmlentities($str);
	$str = stripslashes($str);
	if (!preg_match('/[-A-Za-z0-9_#&?:]/', $str)) {
		if ($str != ""){
			$str = 'attention_preg_match';
		}
	}
	#$str = mysql_real_escape_string($str);
	return $str;
}
##                                                                           ##
###############################################################################



###############################################################################
## Function validate URL                                                     ##
#$website = test_input($_POST["website"]);
#if (!preg_match(
#	"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
#	$website)) {
# $websiteErr = "Invalid URL";
#}

##                                                                           ##
###############################################################################

###############################################################################
## Utility Function Display result table w/ and w/o PTM column               ##

function printDataTable(
	$sql_query,
	$primary_gene_symbol = "hgnc_symbol",
	$host,
	$user,
	$pwd,
	$dbname,
	$ptm_display_column="",
	$table_display_columns = "table_display_columns",
	$table_display_columns_names = "",
	$low_highlight = -1,
	$high_highlight = 1.000001,
	$table_headline_text = "Category results in a table",
	$bindParam_name_array = array(),
	$bindParam_value_array = array()
){

if ($table_display_columns_names == "" | (!isset($table_display_columns_names))){
	$table_display_columns_names = str_replace("contrast_X_", "", $table_display_columns);
	$table_display_columns_names = str_replace("contrast_x_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_1_", "", $table_display_columns_names);	
	$table_display_columns_names = str_replace("contrast_2_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_3_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_4_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_5_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_6_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_7_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_8_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_9_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_10_", "", $table_display_columns_names);	
	$table_display_columns_names = str_replace("contrast_11_", "", $table_display_columns_names);	
	$table_display_columns_names = str_replace("contrast_12_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_13_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_14_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_15_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_16_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_17_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_18_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("contrast_19_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("norm_counts_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("norm_counts_X_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("norm_counts_x_", "", $table_display_columns_names);
	$table_display_columns_names = str_replace("_", "<br>", $table_display_columns_names);
}


$result_gene = query_db(
	$sql_query = $sql_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$dbname,
	$bindParam_name_array = $bindParam_name_array,
	$bindParam_value_array = $bindParam_value_array
);  

echo "
<div align = 'center'>
<br>
<h2>$table_headline_text</h2>
<br>
";


$nrows = count($result_gene);

if ($nrows == 0){
	echo "
	<div align = 'center'>
	<font color = 'red'>No gene fits your selection criteria. Please select a wider data range. </font>
	</div>";
}

if ($nrows > 4999){
	echo "
	<br>
	<div align = 'center'>
	<font color = 'red'><b>
	You have selected more than 5000 entries for display. Please limit your selection or download the full result table.<br>
	</b></font>
	</div>
	<br>
	";
}
   
if ($nrows <= 10)
   {$data_height = "";
   } else 
    {$data_height = "data-height = '600'";
	}


if ($nrows > 500) {
	$nrows = 500;
   $data_page_list = "data-page-list='[10, 50, 100, 250, $nrows]' ";
   } elseif ($nrows > 250) {
	   $data_page_list = "data-page-list='[10, 50, 100, 250, $nrows]' ";
       } elseif ($nrows > 100) {
	      $data_page_list = "data-page-list='[10, 50, 100, $nrows]' ";
          } elseif ($nrows > 50) {
	           $data_page_list = "data-page-list='[10, 50, $nrows]' ";
               } elseif ($nrows > 10) {
	           $data_page_list = "data-page-list='[10, $nrows]' ";
               } else {$data_page_list = "";}
		
		echo "
		<table id='venn_table' data-toggle='table' $data_height data-cache='false' class='table table-striped table-bordered' width='95%' align='center'
	     data-page-size=$nrows  $data_page_list data-pagination='true' data-search='true' data-show-export = 'true'>
			<thead>
			  <th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'><b>Nearest<br> Gene name</b></th>";
			  
			  if ($ptm_display_column != ""){
				  echo "
				  <th th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'><b>Distance to <br>Nearest TSS</b></th>";
			  }
			  
			  
			  echo "
			   <th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'><b>ATAC Peak Description</b></th>";
			  for ($i=0; $i< count($table_display_columns); $i++){
				$column_name = $table_display_columns_names[$i];
				$hover_colname = str_replace("<br>", " ", $column_name);
				#$column_name = str_replace("_", "\n", $column_name); 
				echo "
				<th data-sortable = 'TRUE' data-halign='center' data-valign='middle' data-align='center'>
					<span title='$hover_colname'>
					<b>$column_name</b>
					</span>
				</th>";
				}
			  
			  
			  echo "
              </thead>
              <tbody>";
              #while($row_1 = mysqli_fetch_assoc($result_gene)){
			  for ($r=0; $r< count($result_gene); $r++){
				$row_1 = $result_gene[$r];
				extract($row_1);
				#${$primary_gene_symbol} = substr(${$primary_gene_symbol}, 0, 10);	 
				echo "
				<tr>
				<td class='text-center'>
				<a href='search.result.php?Query=".${$primary_gene_symbol}."&exact=TRUE'>".${$primary_gene_symbol}."</a>
				</td>";
		
				if ($ptm_display_column != ""){
					echo "
					<td class='text-center'>
						<a href='search.result.php?Query=".${$primary_gene_symbol}."-".${$ptm_display_column}."&exact=TRUE'>".${$ptm_display_column}."</a>
					</td>";
					}
		
		
		if ($ptm_display_column != ''){
			echo "
			<td class='text-center'>
				$gene_description 
			</td>";
			} else {
				echo "
				<td class='text-center'>
					$gene_description
				</td>";
				}


#Comment this out for the time being due to problems with the table sorter
		
		for ($i=0; $i< count($table_display_columns); $i++){
			$column_name = $table_display_columns[$i];
			if (${$column_name} < $low_highlight){
				$td_string = "<td class='danger'>";
				} elseif (${$column_name} > $high_highlight){
					$td_string = "<td class='success'>";
					} else {
						$td_string = "<td>";
						}
		
			$value = ${$column_name};
			echo "
			$td_string
				$value
			</td>
		";	   	        
		}

		echo "			
        </tr>
		";
  
  
              }

            echo "
			</tbody>
            </table>
	 
	        <br>";


					 
			
			
			
			
		
	

#End table display
}	


## End function Display result table w/ and w/o PTM column                   ##
###############################################################################

###############################################################################
## Function dp_reate_plot_selection                                          ##
function dp_create_plot_selection(
	$x_axis = "",
	$y_axis = "",
	$col_name_start = 0,
	$plot_selection = "plot_col_selection_array",
	$cat_id = "",
	$highlight_gene = ""
){
	echo "
	<div align = 'center'>
    <br>
	<br>
	<h2> Show category results in 2D scatterplot </h2>
	<br>
		<form action = 'display.plot.php' method = GET>
			<div align = 'center'>
				<table border = '0'>
					<tr>
						<td>
							<div align = 'center'>
								Select plot x-axis:
									<select name='x_axis'>
										<option value=$x_axis>".substr($x_axis, $col_name_start, 100)."</option>";
										for ($i=0; $i< count($plot_selection); $i++){
											echo "<option value='$plot_selection[$i]'>".substr($plot_selection[$i], $col_name_start, 100)."</option>      ";
										}
									echo "
									</select>
							</div>		
						</td>
						<td>
							<font color = 'white'>
								__
							</font>
						</td>  
	   
						<td>   
							<div align = 'center'>
								Select plot Y-axis:
								<select name='y_axis'>
									<option value=$y_axis>".substr($y_axis, 11, 100)."</option>";
									for ($i=0; $i< count($plot_selection); $i++){
										echo "<option value='$plot_selection[$i]'>".substr($plot_selection[$i], 11, 100)."</option>      ";
									}
								echo "
								</select>
							<div align = 'center'>
						</td>	  
					</tr>
				</table>
			</div>
			<br>";
			if ($highlight_gene != ''){
				echo"<input type = 'hidden' name='highlight_gene' value=$highlight_gene>";
			}
   
			if ($cat_id != ''){
				echo "<input type = 'hidden' name='cat_id' value=$cat_id>";
			}
   
			echo"
			<input type='submit'  value='Create Scatterlot'/>
		</form>
	</div>";	
		
}

## End: function dp_crete plot_selection                                     ##
###############################################################################

###############################################################################
## Function get reference categories                                         ##
function cv_create_cat_group_array(
	$database = "cat_selection_db",
	$dbtable = "cat_selection_db_table",
	$host = "localhost",
	$user = "dbuser",
	$pwd = "pwd"
){

	$cat_group_sql = "SELECT DISTINCT cat_group FROM ".$dbtable.
			" ORDER BY cat_group ASC";
	
	$cat_group_result = query_db(
		$sql_query = $cat_group_sql,
		$host=$host,
		$user=$user,
		$pwd=$pwd,
		$dbname=$database
	); 
	
	$cat_group_array = array();
		for ($r=0; $r< count($cat_group_result); $r++){
			$row = $cat_group_result[$r];
			extract($row);
			$cat_group_array[] = $cat_group;
		}
	return $cat_group_array;
}
## End function get reference categories                                     ##
###############################################################################

###############################################################################
## function remove tags from array/string                                    ##
function removeTags($string_or_array){
	$string_or_array = str_replace("contrast_x_", "", $string_or_array);
	$string_or_array = str_replace("contrast_1_", "", $string_or_array);
	$string_or_array = str_replace("contrast_2_", "", $string_or_array);
	$string_or_array = str_replace("contrast_3_", "", $string_or_array);
	$string_or_array = str_replace("contrast_4_", "", $string_or_array);
	$string_or_array = str_replace("contrast_5_", "", $string_or_array);
	$string_or_array = str_replace("contrast_6_", "", $string_or_array);
	$string_or_array = str_replace("contrast_7_", "", $string_or_array);
	$string_or_array = str_replace("contrast_8_", "", $string_or_array);
	$string_or_array = str_replace("contrast_9_", "", $string_or_array);
	$string_or_array = str_replace("contrast_", "", $string_or_array);
	$string_or_array = str_replace("norm_counts_", "", $string_or_array);
	$string_or_array = str_replace("_", " ", $string_or_array);
	return($string_or_array);
}

## End function remove tags from array/string                                ##
###############################################################################

