<<<<<<< HEAD
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blast Bullying Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
    
    
  </head>

<div style="background:#09BCEF" class="jumbotron">
<h3 style="color:white">
<center>

<?php

$target_dir="server/php/files/";
$target_file= $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$uploaded_type = pathinfo($target_file,PATHINFO_EXTENSION);


//limits input  file type
if($uploaded_type != "avi" && $uploaded_type != "mov" && $uploaded_type != "flv" && $uploaded_type != "mpg" && $uploaded_type != "mp4" && $uploaded_type != "mmv")
{
echo "Please upload a <b>video</b> file in an <b>.avi</b>, <b>.mov</b>, <b>.flv</b>, <b>.mpg</b>, <b>.mp4</b> or <b>.mmv</b> format. Click below to close this window and try again.<br>";
$uploadOk =0;
}

//Here we check ok is not sent 0 by an error
if($uploadOk ==0)
{
Echo "";
}

//everything is fine we upload
else
{
if(move_uploaded_file($_FILES["video"]["tmp_name"], $target_file))
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




echo "Your file '" .basename($_FILES[ 'video']['name'])."' has been uploaded. Click below to close this window.";
}
else
{
echo "Sorry, there was a problem uploading your file. Click below to close this window and try again.";
}
}
?>



<br>
<br>
<button onclick="self.close();" class="btn btn-primary">Close</button>
</center>
</h3>
</div>

=======
<?php

$target_dir="server/php/files/";
$target_file= $target_dir . basename($_FILES["video"]["name"]);
$uploadOk = 1;
$uploaded_type = pathinfo($target_file,PATHINFO_EXTENSION);



//Sizing Limit
if($uploaded_size >350000)
{
echo "Your file is too large.<br>";
$uploadOk =0;
}

//limits input  file type
if($uploaded_type != "avi" && $uploaded_type != "mov" && $uploaded_type != "flv" && $uploaded_type != "mpg" && $uploaded_type != "mp4" && $uploaded_type != "mmv")
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
if(move_uploaded_file($_FILES["video"]["tmp_name"], $target_file))
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




echo "The file" .basename($_FILES[ 'video']['name'])."has been uploaded";
}
else
{
echo "Sorry, there was a problem uploading your file.";
}
}
?>
>>>>>>> origin/master
