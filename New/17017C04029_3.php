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
<link rel="icon" type="image/png" href="images/17017C04029_clg.png">
<title>||Online Exam||</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="17017C04029.css">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>.overlay{height:100%;width:0;position:fixed;z-index:1;top:0;left:0;background-color:#000;background-color:rgba(166,171,172,.9);overflow-x:hidden;transition:.5s}.overlay-content{position:relative;top:20%;width:100%;text-align:center;margin-top:20px}.overlay a{padding:8px;text-decoration:none;font-size:36px;color:#818181;display:block;transition:.3s}.overlay a:hover,.overlay a:focus{color:#eee}.overlay .closebtn{position:absolute;top:20px;right:45px;font-size:60px}</style>
<script>function openNav(){document.getElementById("myNav").style.width="100%";}function closeNav(){document.getElementById("myNav").style.width="0%";}</script>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script type="text/javascript">function validateForm(){var y=document.forms["form"]["name"].value;var letters=/^[A-Za-z]+$/;if(y==null||y==""){alert("Name Is Empty.");return false;}var z=document.forms["form"]["branch"].value;if(z==null||z==""){alert("Branch is Empty.");return false;}var x=document.forms["form"]["email"].value;var atpos=x.indexOf("@");var dotpos=x.lastIndexOf(".");if(atpos<1||dotpos<atpos+2||dotpos+2>=x.length){alert("Not a valid e-mail address.");return false;}var a=document.forms["form"]["password"].value;if(a==null||a==""){alert("Password Is Empty");return false;}if(a.length<5||a.length>25){alert("Week Password.");return false;}var b=document.forms["form"]["cpassword"].value;if(a!=b){alert("Password Not Matched.");return false;}}</script>
</head>

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
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>    Hello,</span><span style="cursor: pointer" onclick="openNav()" class="log log1"><b>'.$name.'</b></span> | <a href="17017C04029_12.php?q=17017C04029_3.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</button></a></span>';
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
      <a class="navbar-brand" href="17017C04029_3.php?q=0"><b>Dashboard</b></a>
    </div>
  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active" '; ?>><a href="17017C04029_3.php?q=0">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if(@$_GET['q']==1) echo'class="active" '; ?>><a href="17017C04029_3.php?q=1">Students</a></li>
        <li <?php if(@$_GET['q']==2) echo'class="active" '; ?>><a href="17017C04029_3.php?q=2">Add Students</a></li>
    <li <?php if(@$_GET['q']==3) echo'class="active" '; ?>><a href="17017C04029_3.php?q=3">Ranking</a></li>
 
     
          </div>
  </div>
</nav>


<div class="container">
<div class="row">
<div class="col-md-12">



<?php if(@$_GET['q']==0) {

$res = $conn->query("SELECT * FROM 17017C04029_nine WHERE email='".$email."'") ;
while($row = $res->fetch_assoc()) {
  $branch = $row['branch'];}
$result = $conn->query("SELECT * FROM 17017C04029_eight WHERE branch='".$branch."'");
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td><b>Branch</b></td><td><b>Semester</b><td></td><td></td></td></tr>';
$c=1;
while($row = $result->fetch_assoc()) {
  $title = $row['title'];
  $total = $row['total'];
  $sahi = $row['sahi'];
    $time = $row['time'];
  $eid = $row['eid'];
  $branch = $row['branch'];
  $sem = $row['sem'];
$q12=$conn->query("SELECT score FROM 17017C04029_three WHERE eid='".$eid."' AND email='".$email."'" );
$rowcount=mysql_num_rows($q12);  
if($rowcount == 0){
  echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.' min</td><td>'.$branch.'</td><td>'.$sem.'</td>
  <td><b><a href="17017C04029_3.php?q=17017C04029_six&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#d9d9d9"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <span class="title1"><b>View</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table></div></div>';
}

 if(@$_GET['q']== '17017C04029_six' && @$_GET['step']== 2){ 
$eid=@$_GET['eid'];
$que=$conn->query("SELECT * FROM 17017C04029_five WHERE eid='".$eid."'" );
echo '<div class="panel" style="margin:3.5%">';
$s=1;
while($row=$que->fetch_assoc())
{ 
$qns=$row['qns'];
$qid=$row['qid'];
echo '</span><br>
<b>Questions:"'.$s++.'"   <br/>'.$qns.'</b><br/><br/>';

$op=$conn->query("SELECT * FROM 17017C04029_four WHERE qid='".$qid."' " );
while($row=$op->fetch_assoc()){
$option=$row['option'];
echo'<name="ans">'.$option.'<br/><br/>';}
}
}
?>

<?php {
$res = $conn->query("SELECT * FROM 17017C04029_nine WHERE email='".$email."'") ;
while($row = $res->fetch_assoc()) {
  $branch = $row['branch'];
  $gender = $row['gender'];
    $name = $row['name'];
  $mobile = $row['mobile'];
}
echo'
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <div class="overlay-content">
  <img src="images/17017C04029_user.png" alt="Avatar" style="width:15%">
    <h4><b>'.$name.'</b></h4>
     <p><b>Email | </b>'.$email.'</p>
       <p><b>Gender | </b>'.$gender.'</p>
    <p><b>Branch | </b>'.$branch.'</p>
    <p><b>Mobile No. | </b>'.$mobile.' </p>
  </div>
</div>';
}?>
<?php if(@$_GET['q']== 3) 
{
$q=$conn->query("SELECT * FROM 17017C04029_seven ORDER BY score DESC " );
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1">
<tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Branch</b></td><td><b>Semester</b></td><td><b>Roll Number</b></td><td><b>Score</b></td></tr>';
$c=0;
while($row=$q->fetch_assoc() )
{
$e=$row['email'];
$s=$row['score'];
$q12=$conn->query("SELECT * FROM 17017C04029_eight WHERE email='".$e."' " );
while($row=$q12->fetch_assoc() )
{
$name=$row['name'];
$gender=$row['gender'];
$branch=$row['branch'];
$sem=$row['sem'];
$roll=$row['roll'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$branch.'</td><td>'.$sem.'</td><td>'.$roll.'</td><td>'.$s.'</td><td>';
}
echo '</table></div></div>';}

?>

<?php if(@$_GET['q']==1) {

$result = $conn->query("SELECT * FROM 17017C04029_eight");
echo  '
<form action="" method="POST">  
<input type="text" name="search" placeholder="Name Or Roll Number"/>
<input type="submit" value="Submit"/>  
</form>  
<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Branch</b></td><td><b>Semester</b></td><td><b>Roll Number</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';
$c=1;
while($row = $result->fetch_assoc()) {
  $name = $row['name'];
  $mob = $row['mob'];
  $gender = $row['gender'];
    $email = $row['email'];
  $branch = $row['branch'];
  $sem = $row['sem'];
  $roll = $row['roll'];
  echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$branch.'</td><td>'.$sem.'</td><td>'.$roll.'</td><td>'.$email.'</td><td>'.$mob.'</td>
  <td></td></tr>';
}
$c=0;
echo '</table></div></div>';
$c=1;
echo '</table></div></div>';
if (!empty($_REQUEST['search'])) {
$search= ($_REQUEST['search']);
$sql = $conn->query("SELECT * FROM 17017C04029_eight WHERE roll LIKE '%".$search."%' OR name LIKE '%".$search."%'");  
echo'
<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Branch</b></td><td><b>Semester</b></td><td><b>Roll Number</b></td><td><b>Email</b></td><td><b>Mobile</b></td><td></td></tr>';

while($row = $sql->fetch_assoc()) {
  $name = $row['name'];
  $mob = $row['mob'];
  $gender = $row['gender'];
    $email = $row['email'];
  $branch = $row['branch'];
  $sem = $row['sem'];
  $roll = $row['roll'];
  echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$branch.'</td><td>'.$sem.'</td><td>'.$roll.'</td><td>'.$email.'</td><td>'.$mob.'</td>
  <td></td></tr>';
}

}
}?>


<?php if(@$_GET['q']==2) {
echo '
<div class="col-md-7"></div>
<div class="col-md-4 panel">  
  <form class="form-horizontal" name="form" action="17017C04029_8.php?q=17017C04029_3.php?q=1" onSubmit="return validateForm()" method="POST">
<fieldset>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter Name" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select Gender" class="form-control input-md">
   <option value="Male">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option> </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>  
  <div class="col-md-12">
  <select id="branch" name="branch" placeholder="Select Branch" class="form-control input-md">
   <option value="">Select Branch</option>
  <option value="cse">Computer Science</option>
  <option value="mech">Mechanical</option>
  <option value="elec">Electrical</option>
  <option value="hmct">Hotel Management</option>
  <option value="civil">Civil</option>
  <option value="information technology">I.T</option>
   </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="sem"></label>  
  <div class="col-md-12">
 <select id="sem" name="sem" placeholder="Select Semester" class="form-control input-md">
   <option value="1">First</option>
  <option value="2">Second</option>
  <option value="3">Third</option>
  <option value="4">Fourth</option>
  <option value="5">Fifth</option>
  <option value="6">Sixth</option>
   </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-12 control-label" for="roll"></label>  
  <div class="col-md-12">
  <input id="roll" name="roll" placeholder="Enter Roll Number" class="form-control input-md" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter Email" class="form-control input-md" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter Contact Number" class="form-control input-md" type="number">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter Password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Re-Enter Password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 

    <input type="submit" class="sub" value="Submit Information" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div>';

}?>




</body>
</html>
