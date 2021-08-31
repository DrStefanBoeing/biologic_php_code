<?php
#include(__DIR__."/start.php");
#include(__DIR__."/layout.php");
session_cache_limiter("must-revalidate");
session_start();


$pwd = "O2ktmuTHqx7V";

if (file_exists(__DIR__."/distii/dist.txt")){
    $pwd = "O2ktmuTHqx7V";
	$host ="localhost";
	$user = "logincheck";
} else if (file_exists(__DIR__."/util/babs_db.php")){
    require_once(__DIR__.'/util/babs_db.php');
    $host ="clvd0-db-u-t-08.thecrick.test";
	$user = "biologic_website";
} else {
    echo "Error: Database password could not be established.";
}

$location = "search.result.php";
#$location = "./project.selector.php";

###############################################################################
## Functions                                                                 ##
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


## Next ##
function query_db(
	$sql_query ="",
	$host="",
	$user="",
	$pwd="",
	$dbname="",
	$bindParam_name_array = "",
	$bindParam_value_array = ""){
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
		

	$stmt = $conn->prepare($sql_query);
	
	## Bind parameters ##
	if (is_array($bindParam_name_array) & is_array($bindParam_value_array)){
		for ($i=0; $i< count($bindParam_name_array); $i++){
			
			#$param_name = $bindParam_name_array[$i];
			#var_dump($param_name);
			$stmt->bindParam($bindParam_name_array[$i], $bindParam_value_array[$i]);
		}
	}
	
	$stmt->execute();
	$query_result = $stmt->fetchAll();
	$conn->connection = null;
	return $query_result;
	}  

## Utility function: Check presence in database column

## End functions                                                             ##
###############################################################################


if (isset($_SERVER['REMOTE_ADDR'])) {
	$server_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    } else {
		$server_name = "NA";
		}


if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $server_address = $_SERVER['HTTP_USER_AGENT'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
		{$server_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($_SERVER['REMOTE_ADDR'])) 
			{$server_address = $_SERVER['REMOTE_ADDR'];
			} else 
			{$server_address = "NA";
	        }	

$login_name = strip_tags($_POST['username']);
if (!preg_match('/[A-Za-z0-9_]/', $login_name)) {$login_name = 'access_denied';}

$login_pwd  = strip_tags($_POST['login']);
if (!preg_match('/[A-Za-z0-9_]/', $login_pwd)) {$login_pwd = 'access_denied';}

$user_query = strip_tags("SELECT DISTINCT * FROM data_table WHERE (login_name = '$login_name' AND login_pass = '$login_pwd')");

$qDB = "db_data_table";

$user_check = query_db(
	$sql_query =$user_query,
	$host=$host,
	$user=$user,
	$pwd=$pwd,
	$dbname=$qDB,
	$bindParam_name_array = "",
	$bindParam_value_array = "");


//$cxn = mysqli_connect($host, $user, $pwd, "db_data_table") or die("Login failed");
//$user_query = strip_tags("SELECT DISTINCT * FROM data_table WHERE (login_name = '$login_name' AND login_pass = '$login_pwd')");

//$user_check = mysqli_query($cxn, $user_query)
//   or die("Couldn't execute query"); 
//mysqli_close($cxn);

$counter = count($user_check);
//while($row = mysqli_fetch_assoc($user_check))
//     {$counter++;
//     }

if ($counter > 0)
  {$_SESSION['auth'] = "yes";
   $_SESSION['username'] = $login_name;
   #if (!in_array($login_name, $user_id_array)) {
   #   $login_name = "abcd";
   #	   }
   
   add_statistics(
		$record = 'LOGIN',
		$dbname = 'db_data_table',
		$host = $host,
		$user = $user,
		$pwd = $pwd
	);
   
   header("Location: ".$location);
   exit;
   
   // $user_id = $_SESSION['username'];
   // $cxn_statistics = mysqli_connect($host, $user, $pwd, 'db_data_table') or die('Login failed');
   // mysqli_query($cxn_statistics, "INSERT INTO query_history (user, query, server_name, server_address, q_time) VALUES ('$user_id', 'LOGIN', '$server_name', '$server_address', NOW())");
   // mysqli_close($cxn_statistics);
   
   
  } else { 
	$user_id = $_SESSION['username'];
	add_statistics(
		$record = 'LOGIN-failed',
		$dbname = 'db_data_table',
		$host = $host,
		$user = $user,
		$pwd = $pwd
	);
			//$cxn_statistics = mysqli_connect($host, $user, $pwd, 'db_data_table') or die('Login failed');
			//mysqli_query($cxn_statistics, "INSERT INTO query_history (user, query, server_name, server_address, q_time) VALUES ('$login_name', 'LOGIN-failed', '$server_name', '$server_address', NOW())");
			//mysqli_close($cxn_statistics);
	header('Location: index.php?feedback=Invalid username or password. Please try again.');
    exit; 
    }
 
?>

