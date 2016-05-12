<?php

	session_start();

	$contactid = $_POST["contactid"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rockit";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO contacts (user1, user2) VALUES (" . $_SESSION['userid'] . ", " . $contactid . ")";
	$result = $conn->query($sql);

	if($result) {
		echo '<br> success';
		echo '<br> ' . $sql;
	} else {
		echo '<br> fail';
		echo '<br> ' . $sql;
	}

	$conn->close();
?>