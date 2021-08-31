<?php
#Creating Display string
#End of creating display string
include(__DIR__."/layout.php");
include(__DIR__."/functions/function.pca.plot.php");
//include(__DIR__."/function.heatmap.php");

print_header();

############
#Variables##
############

$default_x_axis = "PC1";
$default_y_axis = "PC2";
#$pca_db_table = "temp1_AGL_AG_PCA";
$headline = "PCA Plot";

if (isset($_GET['x_axis']))
   {$x_axis = $_GET['x_axis'];
    } else
	   {$x_axis = $default_x_axis;
	   }

if (isset($_GET['y_axis']))
   {$y_axis = $_GET['y_axis'];
    } else
	   {$y_axis = $default_y_axis;
	   }


$x_display = substr($x_axis, $col_name_start, 100);
$y_display = substr($y_axis, $col_name_start, 100);	
	
//Create pca sql query
$sql_pca = "SELECT DISTINCT * FROM ".$pca_db_table;

//end pca sql query
pca_plot_2d($x_axis,
  			$x_display,
			$y_axis,
			$y_display,
			$database,
			$host, 
			$user,
			$pwd,
			$sql_pca,
			$headline
			);
	   


#End table display

##########################
#End create table#########
##########################	

print_footer();
?>