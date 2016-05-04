<?php
session_start();

$email = $_POST["email"];
$phone = $_POST["phone"];

echo $email . "<br>";
echo $phone . "<br>";

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

if ($email != "") {
	$sql = "UPDATE users SET email='" . $email . "' WHERE id=" . $_SESSION['userid'];
	echo $sql . "<br>";
	$result = $conn->query($sql);
}

if ($phone != "") {
	$sql = "UPDATE users SET phone='" . $phone . "' WHERE id=" . $_SESSION['userid'];
	echo $sql . "<br>";
	$result = $conn->query($sql);
}

$result = $conn->query($sql);

echo '<br>Details updated';
header("location: ../index.php");

$conn->close();


?>