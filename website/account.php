<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    header("location: login.php");
  }
?>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Account</h1>
        <p style="color:white">page for account option, update details other things</p>
      </div>


      <div class="container">
      inset account stuff here, change details etc.
      </div>