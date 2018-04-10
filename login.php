<?php //Start the Session
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE username='$username' and
password='$password'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['username'] = $username;
}else{
$fmsg = "Invalid Login Credentials.";
}
}
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
header("location:welcome.php");
}else{}
?>
<html>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-
theme.min.css" >
<link rel="stylesheet" href="styles.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<form class="form-signin" method="POST">
<h2 class="form-signin-heading" align="center">LOGIN</h2>
<br><br>
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">@</span>
<input type="text" name="username" class="form-control" placeholder="Username"
required>
</div>
<label for="inputPassword" class="sr-only">Password</label>
<br><br>
<input type="password" name="password" id="inputPassword" class="form-control"
placeholder="Password" required><br><br>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button><br>
<a class="btn btn-lg btn-primary btn-block" href="index.php">Register</a>
</form>
</div>
</div>
</div>
</body>
</html>

