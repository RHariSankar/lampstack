<?php
session_start();
?>
<html>
<head>
<!-- Latest compiled and minified CSS -->
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
<h1 align="center">Welcome <?php echo $_SESSION['username']; ?></h1>
<br>
<h3 align="center">Login Successful</h3>
<br>
<br>
<a class="btn btn-lg btn-primary btn-block" href="logout.php">Logout</a>
</div>
</div>
</div>
</body>
</html>

