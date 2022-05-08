<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon"  type="image/png"  href="images/17017C04029_clg.png">
<title>||Online Exam||</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>   
<link  rel="stylesheet" href="font-awesome.min.css"/> 
 <link rel="stylesheet" href="17017C04029.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <style type="text/css">
#footer {
  position: fixed;

  z-index: 1;
  height: 60px;
  background: rgba(255, 255, 255, 0.9);
  bottom: 0px;
  left: 0px;
  padding: 5px 5px 5px 5px;
  right: 0px;
  margin-bottom: 0px;
  -webkit-box-shadow: -1px -9px 20px -15px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: -1px -9px 20px -15px rgba(0, 0, 0, 0.75);
  box-shadow: -1px -9px 20px -15px rgb(0, 0, 0);
}
</style>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Online Exam</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#login"><span class aria-hidden="true"></span> <span class="title1"><b>Admin</b></span></a></div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title title1"><span style="color:#3fb6f0">STUDENT LOGIN</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="17017C04029_7.php?q=17017C04029.php" method="POST">
<fieldset>

<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your Email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<div class="modal fade" id="Modal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        <h4 class="modal-title title1"><span style="color:#3fb6f0">STAFF LOGIN</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="17017C04029_9.php?q=17017C04029.php" method="POST">
<fieldset>

<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your Email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </fieldset>
</form>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#Modal">Staff Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#myModal">Student Login</a></div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="17017C04029_4.php">Feedback</a></div></div>

<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="images/17017C04029_CAM00121.jpg" width=100 height=100 alt="Monish Shrivastava" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Monish Shrivastava</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9074775130</h4>
    <h4 style="font-family:'typo' ">monishshrivastava99@gmail.com</h4>
    <h4 style="font-family:'typo' ">DR. Bhim Rao Ambedkar polytechnic college gwalior</h4></div></div>
    </p>
      </div>
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="images/17017C04029_Ashu.jpg" width=100 height=100 alt="Ashutosh Soni" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="#" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Ashutosh Soni</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9111057961</h4>
    <h4 style="font-family:'typo' ">iamashuarya786@gmail.com</h4>
    <h4 style="font-family:'typo' ">Dr. Bhim Rao Ambedkar Polytechnic, Gwalior</h4></div></div>
    </p>
      </div>
    
    </div>
  </div>
</div>

   <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#3fb6f0;font-family:'typo' ">ADMIN LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="17017C04029_6.php?q=17017C04029.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin Login-id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary"/>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      
    </div>
  </div>
</div>

 
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><font size="20px">Online Exam</h2></font>
    <p class="w3-opacity"><i>_________________</i></p><br>
    <p class="w3-justify"><font size="4px">An online examination is conducted digitally to evaluate students academic knowledge and understanding of the curriculum, along with their ability to use creativity to devise new ideas and solutions. Evaluations typically continue to be based on the pen-and-paper approach, wherein students are gathered and handed the paper to be completed within the allotted time. Students then submit their answer sheets, and after the evaluation, examiners disclose students’ scores..</font>
    </p>
  </div>
  <br><br><br>
       <br><br><br><br><br><br><br><br><br><br>
 
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">About Us!</h2>
      <p class="w3-opacity w3-center"><i>--------------------</i></p><br>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="images/17017C04029_Ashu.jpg" alt="Ashutosh Soni" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Ashutosh Soni</b></p>
            <p class="w3-opacity">Student Of Dr.BRAPC Gwalior</p>
            <p>Roll No.:17017C04014
              <br>Year/Sem:3rd Year/6th Sem
              <br>Branch : Computer Science</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/17017C04029_CAM00121.jpg" alt="Monish Shrivastava" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Monish Shrivastava</b></p>
            <p class="w3-opacity">Student Of Dr.BRAPC Gwalior</p>
            <p>Roll No.:17017C04029
              <br>Year/Sem:3rd Year/6th Sem
              <br>Branch : Computer Science</p>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="images/17017C04029_clg.png" alt="Dr.BRAPC Gwalior" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Dr.BRAPC Gwalior</b></p>
            <p class="w3-opacity">-----------</p>
            <p>Dr. BhimRao Ambedkar Govt. Polytechnic College,Gwalior (M.P.)474001</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">||Project By||<br>||Ashutosh Soni||<br>||Monish Shrivastava||</p>
</footer>
<div id="footer">
  <div class="row">

    <div class="form-group" style="text-align: center;">
      <header role="banner">
       
        <div class="logo-main">

          <img src="images\17017C04029_clg.png" width="50" height="50"  style="margin-top: -4px">
         <h>DR. Bhim Rao Ambedkar Polytechnic College, Gwalior(M.P)
         </h>
        </div>

      </header>
    </div>

  </div>
</div>

</body>
</html>
