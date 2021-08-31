<?php
#include(__DIR__."/start.ini.php");
#session_cache_limiter("must-revalidate");
session_start();

function print_header() {
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
    
	<title>bioLOGIC
	</title>
    
	<!-- Bootstrap core CSS -->
    <link href='dist/css/bootstrap.min.css' rel='stylesheet'>
    <!-- Bootstrap theme -->
    <link href='dist/css/bootstrap-theme.min.css' rel='stylesheet'>

    <!-- Custom styles for this template -->
    <link href='theme.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
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
			<a class='navbar-brand' href='index.php'>LAB-DB</a>
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
			<ul class='nav navbar-nav'>
				<li class='active'><a href='startpage.php'>Home</a></li>
				<li class='dropdown'>
					<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Links <span class='caret'></span></a>
					<ul class='dropdown-menu' role='menu'>
					<li><a href='#'>Link to research lab</a></li>
              
					<li><a href='http://www.crick.ac.uk/research/science-technology-platforms/computational-biology/'>Bioinformatics and Biostatistics Service</a></li>
				</ul>
				</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>	
</nav>
	
	
<div class='container theme-showcase' role='main'>
";
}
	
function print_footer() {echo "
<div class='page-header' align = 'center'>
           .
</div>
<div class='well' align = 'center'>
	<p>©Crick Bioinoformatics and Biostatistics Service 2015</p>
</div>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script src='dist/js/bootstrap.min.js'></script>
<script src='assets/js/docs.min.js'></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src='assets/js/ie10-viewport-bug-workaround.js'></script>
</body>
</html>";
}
	
	
	
 
?>