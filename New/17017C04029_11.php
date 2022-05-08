<?php
include_once 'student_database_connection.php';
session_start();
$email=$_SESSION['email'];

if(isset($_SESSION['key'])){
if(@$_GET['fdid'] && $_SESSION['key']=='monty123') {
$id=@$_GET['fdid'];
$result = $conn->query("DELETE FROM 17017C04029_two WHERE id='".$id."' ");
header("location:17017C04029_1.php?q=3");
}
}

if(isset($_SESSION['key'])){
if(@$_GET['demail'] && $_SESSION['key']=='monty123') {
$demail=@$_GET['demail'];
$r1 = $conn->query("DELETE FROM 17017C04029_seven WHERE email='".$demail."' ");
$r2 = $conn->query("DELETE FROM 17017C04029_three WHERE email='".$demail."' ") ;
$result = $conn->query("DELETE FROM 17017C04029_eight WHERE email='".$demail."' ");
header("location:17017C04029_1.php?q=1");
}
}
if(isset($_SESSION['key'])){
if(@$_GET['email'] && $_SESSION['key']=='monty123') {
$email=@$_GET['email'];
$resul = $conn->query("DELETE FROM 17017C04029_nine WHERE email='".$email."' ") ;
header("location:17017C04029_1.php?q=8");
}
}

if(isset($_SESSION['key'])){
if(@$_GET['q']== 'rmquiz' && $_SESSION['key']=='monty123') {
$eid=@$_GET['eid'];
$result = $conn->query("SELECT * FROM 17017C04029_five WHERE eid='".$eid."' ");
while($row = $result->fetch_assoc()) {
	$qid = $row['qid'];
$r1 = $conn->query("DELETE FROM 17017C04029_four WHERE qid='".$qid."'");
$r2 = $conn->query("DELETE FROM 17017C04029_one WHERE qid='".$qid."' ") ;
}
$r3 = $conn->query("DELETE FROM 17017C04029_five WHERE eid='".$eid."' ");
$r4 = $conn->query("DELETE FROM 17017C04029_six WHERE eid='".$eid."' ");
$r4 = $conn->query("DELETE FROM 17017C04029_three WHERE eid='".$eid."' ");

header("location:17017C04029_1.php?q=5");
}
}

if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addquiz' && $_SESSION['key']=='monty123') {
	$sdate = $_POST['sdate'];
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$total = $_POST['total'];
$sahi = $_POST['right'];
$wrong = $_POST['wrong'];
$time = $_POST['time'];
$branch = $_POST['branch'];
$sem = $_POST['sem'];
$desc = $_POST['desc'];
$id=uniqid();
$q3=$conn->query("INSERT INTO 17017C04029_six VALUES  ('$sdate', '$id','$name' , '$sahi' , '$wrong','$total','$time' , '$desc' , '$branch' , '$sem',NOW())");

header("location:17017C04029_1.php?q=4&step=2&eid=$id&n=$total");
}
}

if(isset($_SESSION['key'])){
if(@$_GET['q']== 'addqns' && $_SESSION['key']=='monty123') {
$n=@$_GET['n'];
$eid=@$_GET['eid'];
$ch=@$_GET['ch'];

for($i=1;$i<=$n;$i++)
 {
 $qid=uniqid();
 $qns=$_POST['qns'.$i];
$q3=$conn->query("INSERT INTO 17017C04029_five VALUES  ('$eid','$qid','$qns' , '$ch' , '$i')");
  $oaid=uniqid();
  $obid=uniqid();
$ocid=uniqid();
$odid=uniqid();
$a=$_POST[$i.'1'];
$b=$_POST[$i.'2'];
$c=$_POST[$i.'3'];
$d=$_POST[$i.'4'];
$qa=$conn->query("INSERT INTO 17017C04029_four VALUES  ('$qid','$a','$oaid')");
$qb=$conn->query("INSERT INTO 17017C04029_four VALUES  ('$qid','$b','$obid')");
$qc=$conn->query("INSERT INTO 17017C04029_four VALUES  ('$qid','$c','$ocid')");
$qd=$conn->query("INSERT INTO 17017C04029_four VALUES  ('$qid','$d','$odid')");
$e=$_POST['ans'.$i];
switch($e)
{
case 'a':
$ansid=$oaid;
break;
case 'b':
$ansid=$obid;
break;
case 'c':
$ansid=$ocid;
break;
case 'd':
$ansid=$odid;
break;
default:
$ansid=$oaid;
}


$qans=$conn->query("INSERT INTO 17017C04029_one VALUES  ('$qid','$ansid')");

 }
header("location:17017C04029_1.php?q=0");
}
}

if(@$_GET['q']== '17017C04029_six' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$ans=$_POST['ans'];
$qid=@$_GET['qid'];
$q=$conn->query("SELECT * FROM 17017C04029_one WHERE qid='".$qid."' " );
while($row=$q->fetch_assoc() )
{
$ansid=$row['ansid'];
}
if($ans == $ansid)
{
$q=$conn->query("SELECT * FROM 17017C04029_six WHERE eid='".$eid."' " );
while($row=$q->fetch_assoc() )
{
$sahi=$row['sahi'];
}
if($sn == 1)
{
$q=$conn->query("INSERT INTO 17017C04029_three VALUES('$email','$eid' ,'0','0','0','0',NOW())");
}
$q=$conn->query("SELECT * FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."' ");

while($row=$q->fetch_assoc() )
{
$s=$row['score'];
$r=$row['sahi'];
}
$r++;
$s=$s+$sahi;
$q=$conn->query("UPDATE `17017C04029_three` SET `score`=$s,`level`=$sn,`sahi`=$r, date= NOW()  WHERE  email = '".$email."' AND eid = '".$eid."'")or die('Error124');

} 
else
{
$q=$conn->query("SELECT * FROM 17017C04029_six WHERE eid='".$eid."' " );

while($row=$q->fetch_assoc() )
{
$wrong=$row['wrong'];
}
if($sn == 1)
{
$q=$conn->query("INSERT INTO 17017C04029_three VALUES('$email','$eid' ,'0','0','0','0',NOW() )");
}
$q=$conn->query("SELECT * FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."' " );
while($row=$q->fetch_assoc() )
{
$s=$row['score'];
$w=$row['wrong'];
}
$w++;
$s=$s-$wrong;
$q=$conn->query("UPDATE `17017C04029_three` SET `score`=$s,`level`=$sn,`wrong`=$w, date=NOW() WHERE  email = '".$email."' AND eid = '".$eid."'");
}
if($sn != $total)
{
$sn++;
header("location:17017C04029_2.php?q=quiz&step=2&eid=$eid&n=$sn&t=$total");
}
else if( $_SESSION['key']!='monty123')
{
$q=$conn->query("SELECT score FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."'" );
while($row=$q->fetch_assoc() )
{
$s=$row['score'];
}
$q=$conn->query("SELECT * FROM 17017C04029_seven WHERE email='".$email."'" );
$rowcount=mysqli_num_rows($q);
if($rowcount == 0)
{
$q2=$conn->query("INSERT INTO 17017C04029_seven VALUES('$email','$s',NOW())");
}
else
{
while($row=$q->fetch_assoc() )
{
$sun=$row['score'];
}
$sun=$s+$sun;
$q=$conn->query("UPDATE `17017C04029_seven` SET `score`=$sun ,time=NOW() WHERE email= '".$email."'");
}
header("location:17017C04029_2.php?q=result&eid=$eid");
}
else
{
header("location:17017C04029_2.php?q=result&eid=$eid");
}
}

if(@$_GET['q']== 'quizre' && @$_GET['step']== 25 ) {
$eid=@$_GET['eid'];
$n=@$_GET['n'];
$t=@$_GET['t'];
$q=$conn->query("SELECT score FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."'" );
while($row=$q->fetch_assoc() )
{
$s=$row['score'];
}
$q=$conn->query("DELETE FROM `17017C04029_three` WHERE eid='".$eid."' AND email='".$email."' " );
$q=$conn->query("SELECT * FROM 17017C04029_seven WHERE email='".$email."'" );
while($row=$q->fetch_assoc() )
{
$sun=$row['score'];
}
$sun=$sun-$s;
$q=$conn->query("UPDATE `17017C04029_seven` SET `score`=$sun ,time=NOW() WHERE email= '".$email."'");
header("location:17017C04029_2.php?q=quiz&step=2&eid=$eid&n=1&t=$t");
}

?>



