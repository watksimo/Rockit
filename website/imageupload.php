<!DOCType html>
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