<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    //header("location: login.php");
  }
?>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Chat</h1>
        <p style="color:white">Email a member of Project Rockit</p>
      </div>


      <div class="container">
      
	insert simple email webform thing here
      </div>