<?php 
	$host = "localhost";
	$dbUser = "admin";
	$dbPass = "admin"; 
	$dbName = "csesociety";

	$dbCon = mysqli_connect($host, $dbUser, $dbPass, $dbName);	

	if (!$dbCon) {
			echo "<h2>Database Connection Error!</h2>";		
	     }
 ?>