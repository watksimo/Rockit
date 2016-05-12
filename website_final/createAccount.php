<?php
  session_start();
  if(isset($_SESSION['user'])) {
    header("location: index.php");
  }
?>



    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Create Account</h1>
	<p style="color:white">Sign up & join our community!</p>
      </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-offset-5 col-md-4">
          <form action="php/createUser.php" method="post" class="form-login">

            <h4>Your Details</h4>
            <input type="text" name="name" class="form-control input-sm chat-input" placeholder="Name" />
            <select name="type" class="form-control input-sm chat-input">

              <option value="student">Student</option>
              <option value="administrator">Administrator</option>

            </select>
            <input type="text" name="email" class="form-control input-sm chat-input" placeholder="Email" />
            <input type="text" name="phone" class="form-control input-sm chat-input" placeholder="Phone" />
            <input type="password" name="pass" class="form-control input-sm chat-input" placeholder="Password" />
            </br>
            <div class="wrapper">

              <span class="group-btn">     
                  <!--<a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
                  <input type="submit" class="btn btn-primary btn-md" value="Sign Up">
              </span>

            </div>
          </form>
        
        </div>
      </div>
    </div>
