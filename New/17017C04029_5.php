<?php
include_once 'student_database_connection.php';
$ref=@$_GET['q'];
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$id=uniqid();
$date=date("Y-m-d");
$time= $_POST['time'];
$feedback = $_POST['feedback'];
$q=$conn->query("INSERT INTO 17017C04029_two VALUES  ('$id' , '$name', '$email' , '$subject', '$feedback' , '$date' , NOW())")or die ("Error");
header("location:$ref?q=ThankYou For Your Feedback");
?>