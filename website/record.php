<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    header("location: login.php");
  }
?>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Record</h1>
        <p style="color:white">Upload evidence of bullying, report an incident or view your previous uploads</p>
      </div>


      <div class="container">
          <div class="row">
            <div class="span9">
		<h2>Upload Files</h2>
                <p>file upload script here</p>
	    </div>
            <div class="span9">
		<h2>Report an Incident</h2>
                <p>a way to report bulling incidents</p>
	    </div>
            <div class="span9">
		<h2>Your Uploads</h2>
                <p>list of pictures netc of previous uplaods</p>
	    </div>
      </div>