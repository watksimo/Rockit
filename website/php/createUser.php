<?php
session_start();

$name = $_POST["name"];
$type = $_POST["type"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pass = $_POST["pass"];

echo $name . "<br>";
echo $type . "<br>";
echo $email . "<br>";
echo $phone . "<br>";
echo $pass . "<br>";

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

$sql = "INSERT INTO users VALUES('','" . $name . "','" . $type . "','" . $email . "','" . $phone . "','" . $pass . "')";
echo $sql;
$result = $conn->query($sql);

echo 'user created';
header("location: ../index.php");

$conn->close();


?>