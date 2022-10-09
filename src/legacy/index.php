<?php
include(__DIR__."/layout.login.php");
print_header();

if (isset($_GET["feedback"])){
	$feedback = $_GET["feedback"];
	} else {
		$feedback = "";
		}

echo "
<br>
<br>
<br>
<div align = 'center'>
	<h1> Login </h1>
	<br>
	<br>
	<form action='login.check.php' method='POST' style='text-align: center'>
		<div align='center'>
		<table border='0' align='center' width='40%'>
			<tr>
				<td align='left'>Username:</td>
				<td align='left'><input type='text' name='username'></td>
			</tr>
			<tr>
			<td align='left'>Password:</td>
			<td align='left'><input type='password' name='login'></td>	  
			</tr>
		</table>
		
		<br>
		<button type='submit' class='btn btn btn-success'>Login</button>
	</form>
</div>
<br>
<div align = 'center'>
	<b><font color = 'red'>$feedback</b><br>
	</font>
</div>
<br>

<div align = 'center' width = '90%'>
	<br>
	<br>
	<br>
	<br>
	<br>
	The site is viewed best with the Firefox browser. 
	<br>
	<br>
	<img src='firefox_logo-wordmark-horiz_RGB.png' width='220' height='94' style='border: 1.5px
         #009900 solid;border-radius: 4px;moz-border-radius: 4px;webkit-border-radius: 4px;'>
			
</div>
<br>
<br>
<br>";

print_footer();
?>