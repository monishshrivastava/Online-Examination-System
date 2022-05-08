<?php
include_once 'student_database_connection.php';
$ref=@$_GET['q'];
$email = $_POST['uname'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$result =  $conn->query("SELECT email FROM 17017C04029 WHERE email = '".$email."' and password = '".$password."'");
$count=mysqli_num_rows($result);
if($count==1){
session_start();
if(isset($_SESSION['email'])){
session_unset();}
$_SESSION["name"] = 'Admin';
$_SESSION["key"] ='monty123';
$_SESSION["email"] = $email;
header("location:17017C04029_1.php?q=0");
}
else header("location:$ref?w=Warning : Enter Valid Username or Password");
?>