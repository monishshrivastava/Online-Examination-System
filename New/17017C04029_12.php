<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:17017C04029.php");
?>