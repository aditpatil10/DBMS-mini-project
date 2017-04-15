<?php
session_start();
error_reporting(1);
if(!mysql_connect("localhost","root",""))
 {
  echo "<tr><td><font color=red size=4>Connection
Error</font></td></tr>";
  die();
 }
 mysql_connect("localhost","root","");
 mysql_select_db("hospital");
 
 extract($_POST);
 if(isset($signIn))
 {
	//echo $user,$pass;
	//for Admin
	$que=mysql_query("select user,pass from admin where user='$user' and pass='$pass'");
	 $row= mysql_num_rows($que);
	 if($row)
	 {
		$_SESSION['admin']=$user;
		echo "<script>window.location='alist.php'</script>";
		
		//include('alist.php');
	 	
	 }
	 else
	 {
	  $err="<span class='glyphicon glyphicon-exclamation-sign' style='color:red'></span> <font color='red'>Invalid admin Login</font>";
	 }
	
 
 }
if($_SESSION['admin']!="")
{
header('alist.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Employee Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

      <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


    <body>
<?php if(isset($smsg)){ ?>
<div class="alert alert-success">
  <?php echo $smsg; ?>
</div><?php } ?>
<?php if(isset($fmsg)){ ?>
<div class="alert alert-danger">
  <?php echo $fmsg; ?>
</div><?php } ?>
<h1 class="title">adi10's Employee Management Login </h1>
    <div class="wrapper">
    <form form method="post" class="form-signin">       
      <h2 class="form-signin-heading">Can you please enter your info </h2>
      <input type="text" class="form-control" name="user" placeholder="admin@gmail.com" required="" autofocus="" />
      <input type="Password" class="form-control" name="pass" placeholder="admin" required=""/>     
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" name="signIn" type="submit">Login</button>  
      <a href="try.php">Create an Account</a>
    </form>
  </div>
  
  
</body>
</html>
