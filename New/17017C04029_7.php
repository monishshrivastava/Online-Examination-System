<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'student_database_connection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = $conn->query("SELECT name FROM 17017C04029_eight WHERE email = '" .$email."' and password = '".$password."'");
$count=mysqli_num_rows($result);
if($count==1){
while($row = $result->fetch_assoc()) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:17017C04029_2.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");
?>