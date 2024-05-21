<?php
$blood=$_POST['blood'];
$bloodbank=$_POST['bank'];
$quantity=$_POST['quantity'];
// echo $blood .$bloodbank;
include "database.php";
$sql=mysqli_query($conn,"INSERT INTO `bhaktpur`(`bloods`,`bloodbank`,`quantity`)VALUES('$blood','$bloodbank',$quantity)");
header("location:addblood.php");
?>