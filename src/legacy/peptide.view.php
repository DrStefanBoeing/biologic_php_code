<?php
include(__DIR__."/layout.php");
$headline = "PeptideView";
print_header();

 echo "
	   <div class='content'> 
          <h1 align='center'>$headline</h1>
	      <br>
		  
<iframe src='$peptide_view_link' onload=`javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+'px';}(this));` style='height:800px;width:100%;border:none;overflow:hidden;'></iframe>
</div>
<br>
<br>

<div class='col-sm-3'></div>
<div class='col-sm-6'>
					   <a href = '$peptide_view_link' target='_blank' title='Click here to view the PeptideViewer in a separate window' class='btn btn-success btn-lg'                        role='button' style='width: 500px'>Click here to view the PeptideViewer in a separate window &raquo;</a>
					</div>
<div class='col-sm-3'></div>
<br>					
<br>
<div align = 'center'>
";

print_footer();
?>