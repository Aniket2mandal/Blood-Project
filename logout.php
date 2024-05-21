<?php
session_start();
// session_destroy();
unset($_SESSION['username']);
$_SESSION['error']="";
header("location:sign_inn.php");

?>