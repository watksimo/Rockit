<?php
  session_start();

  if(!isset($_SESSION['user'])) {
    header("location: login.php");
  }

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

  $sql = "SELECT * FROM users where id=" . $_SESSION['userid'];
  $result = $conn->query($sql);
  $userData = $result->fetch_assoc();

  $sql = "SELECT * FROM users WHERE id IN (SELECT user2 FROM contacts WHERE user1=" . $_SESSION['userid'] . ") AND type='administrator'";
  $contactResult = $conn->query($sql);
  //$contactData = $result->fetch_assoc();

  $sql = "SELECT * FROM users WHERE id NOT IN (SELECT user2 FROM contacts WHERE user1=" . $_SESSION['userid'] . ") AND type='administrator'";
  $notContactResult = $conn->query($sql);
  //$contactData = $result->fetch_assoc();

  $sql = "SELECT * FROM groups where id in (SELECT groupid FROM groupmembers WHERE userid=" . $_SESSION['userid'] . ")";
  $groupResult = $conn->query($sql);
  //$groupData = $result->fetch_assoc();

  $sql = "SELECT * FROM groups where id not in (SELECT groupid FROM groupmembers WHERE userid=" . $_SESSION['userid'] . ")";
  $notGroupResult = $conn->query($sql);
  //$notGroupData = $result->fetch_assoc();

  $conn->close();
?>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $('#rmvGroupBtn').click(function() {
      var groupid = $("#groupsList").val();
      var ajaxurl = 'php/removeGroup.php',
      data =  {'groupid': groupid};
      $.post(ajaxurl, data, function (response) {
          // Response div goes here.
          // alert(response);
          location.reload();
      });
    });

    $('#addGroupBtn').click(function() {
      var groupid = $("#notGroupsList").val();
      var ajaxurl = 'php/addGroup.php',
      data =  {'groupid': groupid};
      $.post(ajaxurl, data, function (response) {
          // Response div goes here.
          // alert(response);
          location.reload();
      });
    });


    $('#rmvContactBtn').click(function() {
      var contactid = $("#contactsList").val();
      var ajaxurl = 'php/removeContact.php',
      data =  {'contactid': contactid};
      $.post(ajaxurl, data, function (response) {
          // Response div goes here.
          //alert(response);
          location.reload();
      });
    });

    $('#addContactBtn').click(function() {
      var contactid = $("#notContactsList").val();
      var ajaxurl = 'php/addContact.php',
      data =  {'contactid': contactid};
      $.post(ajaxurl, data, function (response) {
          // Response div goes here.
          //alert(response);
          location.reload();
      });
    });

  });
</script>

<div style="background:#09BCEF" class="jumbotron">
        <h1 style="color:white">Account</h1>
        <p style="color:white">page for account option, update details other things</p>
      </div>


      <div class="container">
      <h1>
        Welcome, <?php echo $userData['name']; ?>
      </h1>

      <form action="php/updateUserDetails.php" method="post" class="form-login">
        <p>Email:</p>
        <input type="text" name="email" class="form-control input-sm chat-input" placeholder=<?php echo "'" . $userData['email'] . "'"; ?> />
        <br>
        <p>Phone:</p>
        <input type="text" name="phone" class="form-control input-sm chat-input" placeholder=<?php echo "'" . $userData['phone'] . "'"; ?> />
        </br>
        <div class="wrapper">
          <span class="group-btn">     
              <!--<a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a> -->
              <input type="submit" class="btn btn-primary btn-md" value="Update Details">
          </span>
        </div>
      </form>
      <br>

      <div class="panel panel-default" id="groupsForm">
        <div class="panel-heading">
          <h3 class="panel-title">Groups</h3>
        </div>
        <div class="panel-body">
          <h4>Current Groups</h4>
            <select name="groupsList" class="form-control input-sm chat-input" id="groupsList">
              <?php
              while($groupData = $groupResult->fetch_assoc()) {
                  echo "<option value=" . $groupData['id'] . ">" . $groupData['name'] . "</option>";
              }
              ?>
            </select>
          <button class="btn btn-primary btn-sm" id="rmvGroupBtn">Remove Group</button>

        <br><br>

          <h4>Other Groups</h4>
          <select name="notGroupsList" class="form-control input-sm chat-input" id="notGroupsList">
            <?php
            while($notGroupData = $notGroupResult->fetch_assoc()) {
                echo "<option value=" . $notGroupData['id'] . ">" . $notGroupData['name'] . "</option>";
            }
            ?>
          </select>
          <button class="btn btn-primary btn-sm" id="addGroupBtn">Add Group</button>
        </div>
      </div>


      <div class="panel panel-default" id="contactsForm">
        <div class="panel-heading">
          <h3 class="panel-title">Contacts</h3>
        </div>
        <div class="panel-body">
          <h4>Current Contacts</h4>
            <select name="contactsList" class="form-control input-sm chat-input" id="contactsList">
              <?php
              while($contactData = $contactResult->fetch_assoc()) {
                  echo "<option value=" . $contactData['id'] . ">" . $contactData['name'] . "</option>";
              }
              ?>
            </select>
          <button class="btn btn-primary btn-sm" id="rmvContactBtn">Remove Contact</button>

        <br><br>

          <h4>Other Contacts</h4>
          <select name="notContactsList" class="form-control input-sm chat-input" id="notContactsList">
            <?php
            while($notContactData = $notContactResult->fetch_assoc()) {
                echo "<option value=" . $notContactData['id'] . ">" . $notContactData['name'] . "</option>";
            }
            ?>
          </select>
          <button class="btn btn-primary btn-sm" id="addContactBtn">Add Contact</button>
        </div>
      </div>