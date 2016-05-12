<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    //header("location: login.php");
  }
?>


<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Chat</h1>
        <p style="color:white">Talk to us - we're listening! Send us a message, or call us on <a href="tel:+61435150280">0435 150 280</a>.</p>
      </div>


      <div class="container">
      
	<form target="_blank" name="contactform" method="post" action="email.php">

  	  <b>Name:</b><br>
          <input  type="text" name="name" class="form-control" id="usr" style="width:50%">
	  <br>

  	  <b>Email:</b><br>
  	  <input  type="text" name="email" class="form-control" id="usr" style="width:50%">
	  <br>

  	  <b>Your Message:</b><br>
  	  <textarea name="comments" class="form-control" id="usr" style="height:200px; width:50%; vertical-align: text-top"></textarea>
	  <br>
	  <br>

	  <button type="submit" class="btn btn-primary">Submit</button>

	</form>

      </div>
