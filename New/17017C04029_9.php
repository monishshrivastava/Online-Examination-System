<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'student_database_connection.php';
$re=@$_GET['s'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$resul = $conn->query("SELECT name FROM 17017C04029_nine WHERE email = '".$email."' and password = '".$password."'");
$count=mysqli_num_rows($resul);
if($count==1){
while($row =$resul->fetch_assoc()) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:17017C04029_3.php?q=0");
}
else
header("location:17017C04029.php?w=Wrong Username or Password");
?>