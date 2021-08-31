<?php
include(__DIR__."/layout.php");
print_header();

#var_dump($_POST['editor1']);
#var_dump($_POST['project_id']);

$textarea = $_POST['editor1'];
#$textarea = mysqli_real_escape_string($textarea);
$textarea = htmlentities($textarea);
#var_dump($textarea);


#$project_id = $_POST['project_id'];
#$project_id = mysqli_real_escape_string($project_id);




#$cxn = mysqli_connect($host, $user, $pwd, 'internal_categories') or die('Login failed');
#mysqli_query($cxn, "INSERT INTO experiment_reports (reportText, project_id, entry_date) VALUES ('$textarea', '$project_id', NOW())");
#mysqli_close($cxn);

$internal_categories = 'internal_categories';

$db = new PDO("mysql:host=$host;dbname=$internal_categories", $user, $pwd);
	if ($db->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

$stmt = $db->prepare("INSERT INTO experiment_reports (reportText, project_id, entry_date) VALUES ('$textarea', '$project_id', NOW())");
$stmt->execute();
		  
$db->connection = null;

#header("Location: report.php");
#exit;

echo "<br><br><br><div align = 'center'><b>Document updates saved.</b><br><br><br></div>";

print_footer();


?>