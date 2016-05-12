<?php
  session_start();
  if(isset($_SESSION['user'])) {
    header("location: index.php");
  }
?>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
                                $('#create').click(function(){
					$('#bodycontent').load('createAccount.php');
					return false;
				});
				
			});
      </script>


<div id="pagecontent">
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Log In</h1>
        <p style="color:white">Welcome back! It's great to see you again.</p>
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-offset-5 col-md-4">
          <form action="php/checkLogin.php" method="post" class="form-login">

            <h4><i>Don't have an account? Sign up <a href="" id="create">here</a>.</i></h4>

            <input type="text" name="userName" class="form-control input-sm chat-input" placeholder="Username (Email Address)" />
            </br>
            <input type="password" name="userPassword" class="form-control input-sm chat-input" placeholder="Password" />
            </br>

            <div class="wrapper">
              <span class="group-btn">     
                  <!--<a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
                  <input type="submit" class="btn btn-primary btn-md" value="Log In">
              </span>
            </div>
          </form>
        
        </div>
      </div>
    </div>
<<<<<<< HEAD
</div>
=======
<hr>
        <footer>
        <p>&copy; 2016 Blast Bullying for <a href="http://projectrockit.com.au/">Project Rockit</a></p>
      </footer>

    </div> <!-- /container -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="dependancies/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
>>>>>>> origin/master
