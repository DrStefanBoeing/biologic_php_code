<?php
include(__DIR__."/layout.php");

print_header();

#Variable
$headline = "Internal category description";

echo "
<div class='content'> 
	<h1 align='center'>$headline</h1>
	<br>
</div>";

if (isset($_GET["cat_id"])) #End of section that displays default category display without a specific query
    {$cat_id = $_GET['cat_id'];
	 } else {
		 $cat_id = '';
		}
			
$cxn_cat_description = mysqli_connect($host, $user, $pwd, "internal_categories") or die('Login failed');
$cat_description_query =  "SELECT DISTINCT * FROM category_description WHERE cat_id = '$cat_id'";
$cat_description_result = mysqli_query($cxn_cat_description, $cat_description_query);				

$nrows_cat_description = mysqli_num_rows($cat_description_result);


if ($nrows_cat_description > 0){
	$row = mysqli_fetch_assoc($cat_description_result);
	extract($row);
	echo "<b>Category Name: </b>$cat_name<br>
		  <b>Lab: </b>$lab<br>
		  <b>Created by: </b>$created_by<br>
		  <b>Creation date: </b>$creation_date<br>
		  <b>Category Description: </b><br>
		  $cat_description";
	} else {
		echo "No category descripton available.";
	}

			
	  

print_footer();
?>