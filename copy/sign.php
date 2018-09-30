<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{   
$fullname=$_POST['fullname'];
$registerno=$_POST['registerno']; 
$password=$_POST['password']; 
$status=1;
$sql="INSERT INTO  tblstudent(fullName,registerno,Password,status) VALUES (:fullname,:registerno,:password,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':fullname',$fullname,PDO::PARAM_STR);
$query->bindParam(':registerno',$registerno,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo '<script>alert("Your Registration successfull")</script>';
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="icon.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<i class="material-icons" style="font-size:100px;color:#cc0099;">computer<h3 style="margin:1px 30px;">ILS</h3></i>
  </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="admin.php"> Admin Login</a></li>
      <li class="active"><a href="sign.php"> UserSign Up</a></li>
      <li><a href="index.php">User Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">USER SIGNUP FORM</h4>
</div>
</div>
             <hr>
<!--LOGIN PANEL START-->           
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
 SIGNUP FORM
</div>
<div class="panel-body">
<form name="signup" method="post" onSubmit="return valid();">
<div class="form-group">
<label>Enter Full Name</label>
<input class="form-control" type="text" name="fullname" autocomplete="off" required />
</div>
                                        
<div class="form-group">
<label>Enter Register Number</label>
<input class="form-control" type="text" name="registerno" maxlength="10"   autocomplete="off" required  />
   <span id="user-availability-status" style="font-size:12px;"></span> 
</div>

<div class="form-group">
<label>Enter Password</label>
<input class="form-control" type="password" name="password" autocomplete="off" required  />
</div>

<div class="form-group">
<label>Confirm Password </label>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
</div>
 <div class="form-group">                                
<button type="submit" name="signup" class="btn btn-danger" id="submit">Register Now </button>

</form>
 </div>
</div>
</div>
</div>  
</div>
</div>
</div>
<?php include('includes/footer.php'); ?>
</body>
</html>
