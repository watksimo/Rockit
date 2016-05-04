<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rockit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$groupResult = NULL;
$contactResult = NULL;
$notesResult = NULL;

if($_SESSION['type'] == 'student') {
  $sql = "SELECT * FROM groups WHERE id IN (SELECT groupid FROM groupmembers WHERE userid=" . $_SESSION['userid'] . ")";
  $groupResult = $conn->query($sql);
  //$groupResult = $result->fetch_assoc();

  $sql = "SELECT * FROM users WHERE id IN (SELECT user2 FROM contacts WHERE user1=" . $_SESSION['userid'] . ")";
  $contactResult = $conn->query($sql);
  //$groupResult = $result->fetch_assoc();
} else {
  $sql = "SELECT users.name, notes.* FROM notes, users WHERE notes.subjectid IN (SELECT user1 FROM contacts WHERE user2=" . $_SESSION['userid'] . ") AND notes.subjectid=users.id";
  $noteResult = $conn->query($sql);

  $sql = "SELECT users.name, files.* FROM files, users WHERE files.uploaderid IN (SELECT user1 FROM contacts WHERE user2=" . $_SESSION['userid'] . ") AND files.uploaderid=users.id";
  $fileResult = $conn->query($sql);
}

?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div style="background:#09BCEF" class="jumbotron">
  <h1 style="color:white"><a style="text-decoration:none;" href="http://projectrockit.com.au/">Project Rockit</a></h1>
  <p style="color:white">insert nice opening here...</p>
</div>


<div class="container">
  <?php
  if($_SESSION['type'] == 'student') {
    echo '

    <div class="row">
    <div class="panel panel-default col-md-5">
      <div class="panel-heading">
        <h3>Groups</h3>
      </div>

      <div class="panel-body">';
        
          while($groupData = $groupResult->fetch_assoc()) {
              echo '
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h3 class="panel-title"> ' . $groupData['name'] . ' - ' . $groupData['type'] . '</h3>
                  </div>
              ';

              echo '
                  <div class="panel-body">
                    <p>Address: ' . $groupData['address'] . '</p>
                  </div>
                </div>
              ';
          }
      echo '

      </div>

    </div>


    <div class="panel panel-default col-md-5 col-md-offset-1">
      <div class="panel-heading">
        <h3>Contacts</h3>
      </div>

      <div class="panel-body">
      ';
          while($contactData = $contactResult->fetch_assoc()) {
              echo '
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h3 class="panel-title"> ' . $contactData['name'] . '</h3>
                  </div>
              ';

              echo '
                  <div class="panel-body">
                    <p>Email: ' . $contactData['email'] . '</p>
                    <p>Phone: ' . $contactData['phone'] . '</p>
                  </div>
                </div>
              ';
          }
      echo '

      </div>

    </div>
  </div>

    ';
  } else {
    echo '

    <div class="row">
    <div class="panel panel-default col-md-5">
      <div class="panel-heading">
        <h3>Notes</h3>
      </div>

      <div class="panel-body">';
        
          while($noteData = $noteResult->fetch_assoc()) {
              echo '
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h3 class="panel-title">#' . $noteData['id'] . '</h3>
                  </div>
              ';

              echo '
                  <div class="panel-body">
                    <p>Subject name: ' . $noteData['name'] . '</p>
                    <p>Reporter id: ' . $noteData['reporterid'] . '</p>
                    <p>Note: ' . $noteData['notes'] . '</p>
                  </div>
                </div>
              ';
          }
      echo '

      </div>

    </div>


    <div class="panel panel-default col-md-5 col-md-offset-1">
      <div class="panel-heading">
        <h3>Files</h3>
      </div>

      <div class="panel-body">
      ';
          while($fileData = $fileResult->fetch_assoc()) {
              echo '
                <div class="panel panel-default" >
                  <div class="panel-heading">
                    <h3 class="panel-title">#' . $fileData['id'] . '</h3>
                  </div>
              ';

              echo '
                  <div class="panel-body">
                    <p>Uploader id: ' . $fileData['uploaderid'] . '</p>
                    <p>URL: <a href="' . $fileData['url'] . '">Go to file...</a></p>
                    <p>Notes: ' . $fileData['notes'] . '</p>
                  </div>
                </div>
              ';
          }
      echo '

      </div>

    </div>
  </div>

    ';


  }
  ?>
  
  
  <div class="row">  
    This in the home landing page
    <br>
    <br>
    When not logged in, this will simply have a log in username and password entry boxes, and the only links on the navigation bar will be chat and help (record, log out and account will not be shown)
    <br>
    <br>
    After logging in, it will redirect you to the record page. This home page will then update to say you are logged in and give a log out option
  </div>
</div>