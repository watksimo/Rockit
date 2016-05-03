<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    //header("location: login.php");
  }
?>

<!-- Main jumbotron for a primary marketing message or call to action -->
      <div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white"><a style="text-decoration:none;" href="http://projectrockit.com.au/">Project Rockit</a></h1>
        <p style="color:white">insert nice opeing here...</p>
      </div>


      <div class="container">
      
this in the home landing page
<br>
<br>
when not,logging in this will simply have a log in username and password entry boxes, and the only links on the navigation bar will be chat and help (record, log out and account will not be shown)
<br>
<br>
after logging in it will redirect you to the record page, this home page will then update to say you are logged in and give a log out option
      </div>