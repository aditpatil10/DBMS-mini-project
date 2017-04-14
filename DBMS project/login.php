<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
$username = $_POST['username'];
$password = $_POST['password'];

$sql ="SELECT * FROM `login` WHERE username='$username' AND password= '$password'";
$result = mysqli_query($connection,$sql);
echo $count = mysqli_num_rows($result);
if ($count==1) {
$_SESSION['username'] = $username;
} else {
  $fmsg ="Invaid Username/Password";
}

}
if (isset($_SESSION['username'])) {
  header("location: home.php");


}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Employee Login Form</title>
  
  
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

      <link rel="stylesheet" href="css/style.css">

  
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
    <form class="form-signin" method="post">       
      <h2 class="form-signin-heading">Can you please enter your info </h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="Password" class="form-control" name="password" placeholder="Password" required=""/>     
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>  
      <a href="try.php">Create an Account</a>
    </form>
  </div>
  
  
</body>
</html>
