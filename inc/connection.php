<?php
function openDbConnection(){
	global $conn;
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "freelancer";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
	}

	// Check punction
	mysqli_set_charset($conn, 'utf8');	
}
?>