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
      
	<form action="MAILTO:someone@example.com" method="post" enctype="text/plain">
Name:<br>
<input  type="text" class="form-control" id="usr" style="width:50%"><br>
E-mail:<br>
<input type="text" class="form-control" id="usr" style="width:50%"><br>
Comment:<br>
<input  type="text" class="form-control" id="usr" style="height:200px; width:50%"><br><br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>