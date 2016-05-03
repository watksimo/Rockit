<?php
session_start();

echo'bbb';
unset($_SESSION['user']);
echo 'aaa';
header("location: ../login.php");


?>