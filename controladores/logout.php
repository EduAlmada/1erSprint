<?php
//session_start();
session_destroy();
//setcookie('useremail', null, time() -1);
//setcookie('userpass', null, time() -1);
header("Location:../index.php");
die();
?>