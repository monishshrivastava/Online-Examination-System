<?php
 include_once 'student_database_connection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:17017C04029.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/17017C04029_clg.png">
<title>||Online Exam||</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="17017C04029.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>.overlay{height:100%;width:0;position:fixed;z-index:1;top:0;left:0;background-color:#000;background-color:rgba(166,171,172,.9);overflow-x:hidden;transition:.5s}.overlay-content{position:relative;top:20%;width:100%;text-align:center;margin-top:20px}.overlay a{padding:8px;text-decoration:none;font-size:36px;color:#818181;display:block;transition:.3s}.overlay a:hover,.overlay a:focus{color:#eee}.overlay .closebtn{position:absolute;top:20px;right:45px;font-size:60px}</style>
<script>function openNav(){document.getElementById("myNav").style.width="100%";}function closeNav(){document.getElementById("myNav").style.width="0%";}</script>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>
<?php
include_once 'student_database_connection.php';
?>
<body style="background:#acbfca;">

<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Online Exam</span></div>
<div class="col-md-4 col-md-offset-2">

<?php
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'student_database_connection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>    Hello,</span> <span style="cursor: pointer" onclick="openNav()" class="log log1"><b>'.$name.'</b></span> | <a href="17017C04029_12.php?q=17017C04029_2.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</button></a></span>';
?>
</div>
</div></div>

<nav class="navbar navbar-default title1">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b></b></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active" '; ?> ><a href="17017C04029_2.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==4) echo'class="active" '; ?> ><a href="17017C04029_2.php?q=4"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Quiz & Exams<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active" '; ?>><a href="17017C04029_2.php?q=2"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> History</a></li>
   
    </ul>
            
      </div>
  </div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-12">

<?php if(@$_GET['q']==1) {
echo'Welcome To Your Profile <b>'.$name.'</b><br><br><br><br><br>';
$res = $conn->query("SELECT * FROM 17017C04029_eight WHERE email='".$email."'") ;
while($row = $res->fetch_assoc()) {
  $branch = $row['branch'];
  $sem = $row['sem'];}
  $cdate= $conn->query("SELECT * FROM 17017C04029_six WHERE branch='".$branch."' AND sem='".$sem."'") ;
while($row = $cdate->fetch_assoc()){
 $eid = $row['eid'];
 $sdate = $row['sdate'];
echo'<b>Your Quiz Will Start On '.$sdate.'</b><br><br>';}
}
?>

<?php {
$res = $conn->query("SELECT * FROM 17017C04029_eight WHERE email='".$email."'");
while($row = $res->fetch_assoc()) {
  $branch = $row['branch'];
  $sem = $row['sem'];
    $name = $row['name'];
  $sem = $row['sem'];
    $roll = $row['roll'];
  $mob = $row['mob'];
}
echo'
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
  <img src="images/17017C04029_user.png" alt="Avatar" style="width:15%">
    <h4><b>'.$name.'</b></h4>
    <p><b>Roll No. |</b> '.$roll.'</p>
    <p><b>Branch | </b>'.$branch.'</p>
    <p><b>Semester | </b>'.$sem.' </p>
    <p><b>Email | </b>'.$email.'</p>
    <p><b>Mobile No. | </b>'.$mob.' </p>
  </div>
</div>';
}?>


<?php if(@$_GET['q']==4) {

$res = $conn->query("SELECT * FROM 17017C04029_eight WHERE email='."$email."'") ;
while($row = $res->fetch_assoc()) {
  $branch = $row['branch'];
  $sem = $row['sem'];}

  $cdate= $conn->query("SELECT * FROM 17017C04029_six WHERE branch='".$branch."' AND sem='".$sem."'") ;
while($row = $cdate->fetch_assoc()){
 $eid = $row['eid'];
 $sdate = $row['sdate'];}
$time_now=mktime(date('h')+4,date('i')+30,date('s'));
$date = date('Y-m-d H:i:s', $time_now);

$result = $conn->query("SELECT * FROM 17017C04029_six WHERE eid='".$eid."'") ;
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td><b>Start Time</b></td><td></td></tr>';
$c=1;
while($row = $result->fetch_assoc()) {
  $sdate = $row['sdate'];
  $title = $row['title'];
  $total = $row['total'];
  $sahi = $row['sahi'];
    $time = $row['time'];
  $eid = $row['eid'];
  $branch = $row['branch'];
  $sem = $row['sem'];
$q12=$conn->query("SELECT score FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."'" );
$rowcount=mysqli_num_rows($q12);  
if($rowcount == 0) {
  if($sdate< $date){
  echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.' min</td><td>'.$sdate.'</td>
  <td><b><a href="17017C04029_2.php?q=17017C04029_six&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> <span class="title1"><b>Start</b></span></a></b></td></tr>';
}}
}

$c=0;
echo '</table></div></div>';}

?>


<script>var seconds=60;function secondPassed(){var minutes=Math.round((seconds-30)/60);var remainingSeconds=seconds%60;if(remainingSeconds<10){remainingSeconds="0"+remainingSeconds;}document.getElementById('countdown').innerHTML=minutes+":"+remainingSeconds;if(seconds==0){clearInterval(countdownTimer);document.getElementById('countdown').innerHTML="Times Up!!";}else{seconds--;}}var countdownTimer=setInterval('secondPassed()',1000);</script>
<?php
if(@$_GET['q']== '17017C04029_six' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=$conn->query("SELECT * FROM 17017C04029_five WHERE eid='".$eid."' AND sn='".$sn."' " );
echo '<div class="panel" style="margin:5%">';
while($row=$q->fetch_assoc() )
{
$qns=$row['qns'];
$qid=$row['qid'];
echo '<span id="countdown" class="timer"></span><br>
<b>Question  '.$sn.' ::<br/>'.$qns.'</b><br/><br/>';
}
$q=$conn->query("SELECT * FROM 17017C04029_four WHERE qid='".$qid."' " );
echo '<form action="17017C04029_11.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST" class="form-horizontal">
<br/>';

while($row=$q->fetch_assoc() )
{
$option=$row['option'];
$optionid=$row['optionid'];
echo'<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br/><br/>';
}
echo'<br/><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Submit</button></form></div>';
}
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=$conn->query("SELECT * FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."' " );
echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br/><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

while($row=$q->fetch_assoc() )
{
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
      <tr style="color:#99cc32"><td>right Answer <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
    <tr style="color:red"><td>Wrong Answer <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
    <tr style="color:#66CCFF"><td>Score <span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
$q=$conn->query("SELECT * FROM 17017C04029_seven WHERE  email='".$email."' " );
while($row=$q->fetch_assoc() )
{
$s=$row['score'];
echo '<tr style="color:#990000"><td>Overall Score <span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
}
echo '</table></div>';

}
?>

<?php if(@$_GET['q']== 2) 
{
$q=$conn->query("SELECT * FROM 17017C04029_three WHERE email='."$email."' ORDER BY date DESC " );
echo  '<div class="panel title">
<table class="table table-striped title1">
<tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
$c=0;
while($row=$q->fetch_assoc() )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=$conn->query("SELECT title FROM 17017C04029_six WHERE  eid='".$eid."' " );
while($row=$q23->fetch_assoc() )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}
?>

</div></div></div></div>

   
</body>
</html>
