<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    //header("location: login.php");
  }
?>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Help</h1>
        <p style="color:white">Place to look for help with bulling issues and this website</p>
      </div>


      <div class="container">
          <div class="row">
            <div class="span9">
		<h2>Bullying Support</h2>
                <p>insert links to bulling support hotlines websites etc</p>
	    </div>
            <div class="span9">
		<h2>Group Support</h2>
                <p>insert infor on the contact details of the group you are in</p>
	    </div>
            <div class="span9">
		<h2>FAQ</h2>
                <p>website FAQ stuff</p>
	    </div>
          </div>
      </div>