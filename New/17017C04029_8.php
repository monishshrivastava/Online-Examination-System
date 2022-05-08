<?php
include_once 'student_database_connection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$roll = $_POST['roll'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$branch = stripslashes($branch);
$branch = addslashes($branch);
$sem = stripslashes($sem);
$sem = addslashes($sem);
$roll = stripslashes($roll);
$roll = addslashes($roll);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3=$conn->query("INSERT INTO 17017C04029_eight VALUES  ('$name' , '$gender' , '$branch' , '$sem' , '$roll' , '$email' ,'$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:17017C04029_3.php?q=0");
}
else
{
header("location:17017C04029_3.php?q0=Already Registered!!!");
}
ob_end_flush();
?>