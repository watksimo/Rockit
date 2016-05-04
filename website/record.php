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

  $sql = "SELECT * FROM files where id='" . $_SESSION['userid'] . "'";
  $result = $conn->query($sql);
?>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Record</h1>
        <p style="color:white">Upload evidence of bullying, report an incident or view your previous uploads</p>
      </div>


      <div class="container">
          <div class="row">
            <div class="span9">
		<h2>Upload Files</h2>
                <p>File upload script here</p>
	    </div>
            <div class="span9">
		<h2>Report an Incident</h2>
                <p>A way to report bulling incidents</p>
	    </div>
            <div class="span9">
		<h2>Your Uploads</h2>
                <p>List of previous uploads</p>
      <?php
      while($data = $result->fetch_assoc()) {
        echo '<p>#' . $data["id"] . ': <a href="' . $data["url"] . '">Link to File...</a></p>' ;
      }
      ?>
	    </div>
      </div>