<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    header("location: login.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
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
	
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$(function(){
					$('#bodycontent').load('home.php');
				});
				$('#home').click(function(){
					$('#homelink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#helplink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('home.php');
					return false;
				});
				$('#mainhome').click(function(){
					$('#homelink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#helplink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('home.php');
					return false;
				});
				$('#record').click(function(){
					$('#recordlink').addClass("active");
					$('#homelink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#helplink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('fileupload.php');
					return false;
				});
				$('#chat').click(function(){
					$('#chatlink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#homelink').removeClass("active");
                                        $('#helplink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('chat.php');
					return false;
				});
				$('#help').click(function(){
					$('#helplink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#homelink').removeClass("active");
                                        $('#accountlink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('help.php');
					return false;
				});
                                $('#account').click(function(){
					$('#accountlink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#homelink').removeClass("active");
                                        $('#helplink').removeClass("active");
					$('#loglink').removeClass("active");
					$('#bodycontent').load('account.php');
					return false;
				});
                                $('#log').click(function(){
					$('#loglink').addClass("active");
					$('#recordlink').removeClass("active");
					$('#chatlink').removeClass("active");
                                        $('#homelink').removeClass("active");
                                        $('#helplink').removeClass("active");
					$('#accountlink').removeClass("active");
          window.location.replace("php/logOut.php");
					
					return false;
				});

				
			});
      </script>
    
    
  </head>
  <body>
    
    <!--Navigation bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="mainhome" style="color:#09BCEF" href="#">Blast Bullying</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
      	    <li id="recordlink"><a style="color:#09BCEF" href="" id="record">Record</a></li>
                  
            <li id="chatlink"><a style="color:#09BCEF" href="" id="chat">Chat</a></li>
            <li id="helplink"><a style="color:#09BCEF" href="" id="help">Help</a></li>
            <li id="accountlink"><a style="color:#09BCEF" href="" id="account">Account</a></li>
        	  <li id="loglink"><a style="color:#09BCEF" href="" id="log">Log Out</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
    <div class="container theme-showcase" role="main">
      <div id="bodycontent">
      

      
    </div> <!-- /container -->
<hr>
        <footer>
        <p>&copy; 2016 Blast Bullying for <a href="http://projectrockit.com.au/">Project Rockit</a></p>
      </footer>

    </div> <!-- /container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


