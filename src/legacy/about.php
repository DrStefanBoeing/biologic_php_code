<?php
include(__DIR__."/layout.php");
print_header();

$image_width = '600';
$image_height = '600';


	
echo "
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<style>
  	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
     width: 70%;
     margin: auto;
	 }
</style>";

echo "
<style>
.carousel-control {
  top:50%;
  width:auto;
  height:1em;
  background:transparent;
}
.carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right  {
  position:relative;
  background:white;
  display:block;
  width:auto;
  color:black;
  z-index: 5;
}
</style>";
	  
echo "
<script>
  $('.carousel').carousel({
   interval: false
  });
 </script>  
      ";  	  
	  
	  
echo "
<div class='container'>
  <br>
  <div id='myCarousel' class='carousel slide' data-ride='carousel' data-interval='false'>
    <!-- Indicators -->
    <ol class='carousel-indicators'>
      <li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
      for ($x = 2; $x <= $number_of_slides; $x++) 
		    {echo "<li data-target='#myCarousel' data-slide-to=$x></li>";
			}
	  
	echo "
	</ol>";
	
	echo "
	<!-- Wrapper for slides -->
    <div class='carousel-inner' role='listbox'>
      <div class='item active'>
        <img src='slides/Slide1.JPG' alt='Chania' width='460' height='345'>
      </div>";
    
	
	  for ($x = 2; $x <= $number_of_slides; $x++)
		    {if ($x < 10){
			$slide_id = "Slide".$x.".JPG";
			} else {
				$slide_id = "Slide".$x.".JPG";
			}
			 echo "  
		  <div class='item'>
            <img src='slides/$slide_id' width=$image_width height=$image_height alt=''>
          </div>";
			}
	  echo "	  
		  
 	  <!-- Left and right controls -->
    	<a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
      	<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
      	<span class='sr-only'>Previous</span>
    	</a>
    	<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
      	<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
      	<span class='sr-only'>Next</span>
    	</a>
  </div>
</div>
<br>
<br>";
if ($download_presentation != ""){
	echo "
	<div align = 'center'>
	<a href='$download_presentation'>Download powerpoint presentation</a>
	</div>
	";
}

echo "

	";
	  
	
print_footer();	  

?>
