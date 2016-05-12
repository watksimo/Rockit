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

	$sql = "DELETE FROM contacts WHERE user1=" . $_SESSION['userid'] . " and user2=" . $contactid;
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