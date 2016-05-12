<?php
session_start();

if(!isset($_SESSION['user'])) {
	header("location: ../index.php");
} else {
	header("location: ../index.php");
}

$userName = $_POST["userName"];
$userPassword = $_POST["userPassword"];

echo $userName;
echo $userPassword;

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

$sql = "SELECT * FROM users where email='" . $userName . "' and pword='" . $userPassword . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "name: " . $row["name"] . "<br>";
    // }
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $userName;
    $_SESSION['userid'] = $row[id];
    $_SESSION['type'] = $row[type];
    header("location: ../index.php");
    echo "Log in successful";
} else {
	header("location: ../index.php");
	echo "Log in UNsuccessful";
}
$conn->close();


?>