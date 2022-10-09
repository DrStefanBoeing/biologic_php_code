<?php
include(__DIR__."/layout.php");
print_header();


$metacore_table = "outputs/".substr($rnaseq_db_table,0,4).".metacore.input.file.txt"; 


echo "
	   <div class='content'> 
          <h1 align='center'>Report</h1>
	      <br>
	   </div>";
	   

## Retrieve report text from database ##
$report_sql = "SELECT DISTINCT * FROM ".$reportTable." WHERE project_id = '".$project_id."' ORDER BY row_names DESC";

$report_query = query_db(
	$sql_query = $report_sql,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$reportDB
);


$nr = count($report_query);

if ($nr > 0){
	$Rindex = $nr-1;
	$row = $report_query[0]; #Only want the first raw to avoid id conflicts 
	extract($row);
} else {
	$reportText =  ""; 
}

## Done with DBQuery ##	   
## Store in DB using  htmlspecialchars()
$reportText =  htmlspecialchars_decode($reportText, ENT_QUOTES);
		  
		  
## Initiate CKeditor ##
echo "
	<script src='https://cdn.ckeditor.com/ckeditor5/10.0.0/decoupled-document/ckeditor.js'></script>";
	
echo "
<!-- The toolbar will be rendered in this container. -->
<div id='toolbar-container'>
</div>

<!-- This container will become the editable. -->
<div id='editor'>
	<p>$reportText</p>
</div>

    <script>
        DecoupledEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                const toolbarContainer = document.querySelector( '#toolbar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
	</body>

</html>";



print_footer();
?>