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
	
    
    
  </head>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "mailto@example.com";
 
    $email_subject = "Blast Bullying - Email Submission";
 
    function died($error) {
        // your error code can go here
 
        echo '<div style="background:#09BCEF" class="jumbotron"><h3 style="color:white"><center></br>Oops! We have encountered some problems with your submission:';
        echo "<br /><br />";
        echo $error."<br />";
        echo "Please close this window and try again.<br /><br />";
        echo '<button onclick="self.close();" class="btn btn-primary">Close</button></center></h3></div>';
        die();
    }
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('Oops! A problem has occurred with your submission, please close this window and try again.');       
    }
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comments']; // required
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Please enter a valid email address.<br/>';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Please enter your full name.<br/>';
  }
 
 
  if(strlen($comments) < 2) {
    $error_message .= 'Please send a longer message.<br/>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form from \n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<div style="background:#09BCEF" class="jumbotron">
<h3 style="color:white">
<center>
</br>
Thanks for your email. We will be in touch with you very soon.
</br>
</br>
<button onclick="self.close();" class="btn btn-primary">Close</button>
</center>
</h3>
</div>

<?php
}
?>
