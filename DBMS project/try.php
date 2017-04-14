<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
$username = mysqli_real_escape_string($connection,$_POST['username']);
$email = mysqli_real_escape_string($connection,$_POST['email']);
$password = $_POST['password'];

echo $sql = "INSERT INTO `login` (username,email,password) VALUES ('$username','$email','$password')";
$result = mysqli_query($connection, $sql);
if ($result) {
  echo "Reg Done";
} else {
  echo "Not done";
}

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
<h1 class="title">adi10's Employee Management Registration </h1>
    <div class="wrapper">
    <form class="form-signin" method="post">       
      <h2 class="form-signin-heading">Can you please enter your info </h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="text" class="form-control" name="email" placeholder="Email" required=""/> 
      <input type="Password" class="form-control" name="password" placeholder="Password" required=""/>     
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <a href="login.php">Already have an account?</a>
    </form>
  </div>
  
  
</body>
</html>
