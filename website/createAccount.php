<?php
  session_start();

  if(isset($_SESSION['user'])) {
    header("location: index.php");
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
        
      });
      </script>
    
    
  </head>
  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
      <a href="login.php"><div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Create Account</h1>
      </div></a>
    
    <div class="container">
      <div class="row">
        <div class="col-md-offset-5 col-md-3">
          <form action="php/createUser.php" method="post" class="form-login">
            <h4>Enter Details</h4>
            <input type="text" name="name" class="form-control input-sm chat-input" placeholder="Name" />
            <select name="type" class="form-control input-sm chat-input">
              <option value="student">Student</option>
              <option value="administrator">Administrator</option>
            </select>
            <input type="text" name="email" class="form-control input-sm chat-input" placeholder="Email" />
            <input type="text" name="phone" class="form-control input-sm chat-input" placeholder="Phone" />
            <input type="text" name="pass" class="form-control input-sm chat-input" placeholder="Password" />
            </br>
            <div class="wrapper">
              <span class="group-btn">     
                  <!--<a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
                  <input type="submit" class="btn btn-primary btn-md">
              </span>
            </div>
          </form>
        
        </div>
      </div>
    </div>
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