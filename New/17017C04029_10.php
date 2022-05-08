<?php
include_once 'student_database_connection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$email = $_POST['email'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$branch = $_POST['branch'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$email = stripslashes($email);
$email = addslashes($email);
$gender = stripslashes($gender);
$gender = addslashes($gender);
$mobile = stripslashes($mobile);
$mobile = addslashes($mobile);
$branch = stripslashes($branch);
$branch = addslashes($branch);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$s= $conn->query("INSERT INTO 17017C04029_nine VALUES  ('$name' , '$email' , '$gender'  , '$mobile' ,'$branch', '$password')");
if($s)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:17017C04029_1.php?q=8");
}
else
{
header("location:17017C04029_1.php?q0=Already Registered!!!");
}
ob_end_flush();
?>