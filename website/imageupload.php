<<<<<<< HEAD
﻿<html lang="en">
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
$target_dir = "server/php/files/";!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}



// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Please upload an <b>image</b> file in a <b>.jpg</b>, <b>.jpeg</b>, <b>.png</b>, or <b>.gif</b> format. Click below to close this window and try again.<br>";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    Echo "";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
	
	
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
	
        echo "Your file '". basename( $_FILES["Image"]["name"]). "' has been uploaded. Click below to close this window.";
    } else {
        echo "Sorry, there was an error uploading your file. Click below to close this window and try again.";
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
﻿<!DOCType html>
<html>
<body>

<?php
$target_dir = "server/php/files/";!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["Image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
	
	
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
	
        echo "The file ". basename( $_FILES["Image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 
</body>
</html>
>>>>>>> origin/master
