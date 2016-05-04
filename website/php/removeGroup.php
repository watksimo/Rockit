<?php

	session_start();

	$groupid = $_POST["groupid"];

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

	$sql = "DELETE FROM groupmembers WHERE groupid=" . $groupid . " and userid=" . $_SESSION['userid'];
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