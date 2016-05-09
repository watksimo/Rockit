
<?php 

session_start();

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

if(!empty($_GET['act']))
{

$stringdelete= substr($_GET['act'], strpos($_GET['act'], 'website'));
$todelete = "/var/www/html/" . $stringdelete;
echo $todelete;
$sql = "DELETE FROM files where url='" . $_GET['act'] . "';";
echo $sql;
 $result = $conn->query($sql);
unlink($todelete);
//echo $stringdelete;
}


  //$sql = "SELECT * FROM files where id='" . $_SESSION['userid'] . "'";
  $result = $conn->query($sql);


  header("location:javascript://history.go(-1)");
?>
