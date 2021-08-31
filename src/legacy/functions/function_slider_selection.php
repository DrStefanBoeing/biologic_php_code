<?php
function slider_selection ($screen_array,
						   $php_file_to_call,
						   $default_low,
						   $default_high,
						   $slider_min_array, 
						   $slider_max_array, 
						   $parameter = "",
						   $all_zero = FALSE
						   )
{




if (!empty($_POST['get_values']))
   {foreach ($screen_array as $screen)
      {$var_low = $screen."_low";
	   ${$var_low} = $_POST[$var_low];
	   $var_high = $screen."_high";
	   ${$var_high} = $_POST[$var_high];
	   }
   } else 
      {$counter = 0;
	   foreach ($screen_array as $screen)
          {$var_low = $screen."_low";
	       ${$var_low} = $default_low[$counter];
	       $var_high = $screen."_high";
	       ${$var_high} = $default_high[$counter];
		   $counter++;
	      }
	  }

echo "
<link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
<script src='//code.jquery.com/jquery-1.10.2.js'></script>
<script src='//code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<link rel='stylesheet' href='/resources/demos/style.css'>
";


echo "
  <div align = 'center'>
  <p class='ui-state-default ui-corner-all' style='padding:4px;margin-top:4em;'>
  <span class='ui-icon ui-icon-signal' style='float:left; margin:-2px 5px 0 0;'></span>

  <b>Value range selection</b>
  </p>
  </div>

  <form action = '$php_file_to_call' method='POST'>
     <table border='0' style = 'width:95%'>
	 
	 <tr style = 'height:60px;'>
      <td align = 'center'>
         <b>Screen/Experiment</b>
      </td>
  
      <td align = 'center'>
        <b>$parameter (min)</b>
      </td>
      <td align = 'center'>
         <b>Selection (low)</b>
      </td>
      
	  <td  align = 'center' style = 'width:40%'>
        <b>Value range selection</b>
      </td>
   
      <td align = 'center'>
         <b>Selection (high)</b>
      </td>
   
      <td align = 'center'>
         <b>$parameter (max)</b>
      </td>
   </tr> 
   ";


$counter = 1;
$limit_counter = 0;

foreach ($screen_array as $screen)
  {$slider_id = "slider_".$screen;
   $low_id = $screen."_low";
   $high_id = $screen."_high";
   $var_low = $screen."_low";
   $var_high = $screen."_high";
	
	
   if ($all_zero){	
		$var_low = $screen."_low";
		$var_high = $screen."_low";
		} else {
			$var_low = $screen."_low";
			$var_high = $screen."_high";
			}
			
	$slider_min = $slider_min_array[$limit_counter];
	$slider_max = $slider_max_array[$limit_counter];		
    $limit_counter++;
   
   
   echo " 
   <script>
      //Slider range experiment_1
      $(function() {
         $( '#'+'{$slider_id}').slider({
      range: true,
      min: $slider_min,
      max: $slider_max,
	  step: 0.01,
      values: [ ${$var_low}, ${$var_high} ],
	  orientation: 'horizontal',
      slide: function( event, ui ) {
		$( '#'+'{$low_id}').val(ui.values[ 0 ]);
		$( '#'+'{$high_id}').val(ui.values[ 1 ]);
      }
    });
  
	  
	$( '#'+'{$low_id}' ).val($( '#'+'{$slider_id}' ).slider( 'values', 0 ));
    $( '#'+'{$high_id}' ).val($( '#'+'{$slider_id}' ).slider( 'values', 1 ));  
  });
  
  </script>";
  
  
  
  
   $display_screen = substr($screen, 11);
   $display_screen = str_replace("_", " ", $display_screen);
   echo "
   <tr style = 'height:42px;'>
      <td align = 'center'>
         <b>".$display_screen."</b>
      </td>
  
      <td align = 'center'>
        $slider_min
      </td>
      <td align = 'center'>
         <input type='text' id= '$low_id' name = '$low_id' style='border:0; color:#f6931f; font-weight:bold;' size='3'>
      </td>
      
	  <td  align = 'center' style = 'width:40%'>
         <div id= '$slider_id' align = 'center'></div>
      </td>
   
      <td align = 'center'>
         <input type='text' id='$high_id' name = '$high_id' style='border:0; color:#f6931f; font-weight:bold;' size='3'>
      </td>
   
      <td align = 'center'>
         $slider_max
      </td>
   </tr>

   ";
   
   
  }



echo "
</table> 
<br>
<br>
<div align = 'center'>
<input type = 'hidden' name = 'get_values' value = 'get_values'>

 <select name = 'join'>
  <option value='AND'>Individual sample queries joint by 'AND'</option>
  <option value='OR '>Individual sample queries joint by 'OR'</option>
  </select><br><br> 

<input type='Submit' value= 'Show results meeting the above criteria'>
</form>
</div>
<br>
<br>
<br>

<div align = 'center'>
<form action = '$php_file_to_call' method='POST'>
<input type = 'hidden' name = 'all_zero' value = 'all_zero'>
<input type='Submit' value= 'Set all sliders to lowest value'>
</form>
</div>



 

 <br>

";
}
?>