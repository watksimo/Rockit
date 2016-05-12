
<?php

$target_dir="server/php/files/";
$target_file= $target_dir . basename($_FILES["user_audio"]["name"]);
$uploadOk = 1;
$uploaded_type = pathinfo($target_file,PATHINFO_EXTENSION);



//Sizing Limit
if($uploaded_size >350000)
{
echo "Your file is too large.<br>";
$uploadOk =0;
}

//limits input  file type
if($uploaded_type != "mp3" && $uploaded_type != "wmv")
{
echo "File is not in the correct format.<br>";
$uploadOk =0;
}

//Here we check ok is not sent 0 by an error
if($uploadOk ==0)
{
Echo "Sorry your file was not uploaded";
}

//everything is fine we upload
else
{
if(move_uploaded_file($_FILES["user_audio"]["tmp_name"], $target_file))
{
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
			
			
			$sql = "INSERT INTO files VALUES('','" . $_COOKIE["myCookie"] . "','" . $target_file . "','n');";
			$result = $conn->query($sql);

echo "The file" .basename($_FILES[ 'user_audio']['name'])."has been uploaded";
}
else
{
echo "Sorry, there was a problem uploading your file.";
}
}
?>