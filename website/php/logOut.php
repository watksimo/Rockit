<?php
session_start();

echo'bbb';
unset($_SESSION['user']);
unset($_SESSION['userid']);
unset($_SESSION['type']);
echo 'aaa';
header("location: ../index.php");


?>