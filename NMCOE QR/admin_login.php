<?php 
$conn=mysqli_connect("localhost","root","","qrsystem");
session_start();
if(isset($_POST['submit']))
{
	if($_POST['user']=="Admin" and $_POST['pass']=="Password")
	{
		header('location:add_student.php');
	}
	else
	{
		echo "<script>alert('Login Failed')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Nanasaheb Mahadik College of Engineering, Peth.</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="">
		.container
		{
			background-color: whitesmoke;
			padding: 20px;
			margin-top: 50px; 
		}
		
	</style>
</head>
<body>
	<br>
	<center><img src="img/nmcoe2.jpg" height="100" width="100"></center>
  <h1 style="text-align: center">Nanasaheb Mahadik College of Engineering, Peth.</h1>
 <h2 style="text-align: center">Advanced Network Security For College Labs</h2>
	<div class="row login">
		<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background-color: white;padding: 30px">
	<div class="container">

	<form action="admin_login.php" method="post">
		
				<h3>Admin Login</h3>
				<br>
				<div class="row">
			<div class="col-sm-12">
				<input type="text" name="user" placeholder="Enter Username" class="form-control" required>
			</div>
		</div>
		<br>
			<div class="row">
			<div class="col-sm-12">
				<input type="password" name="pass" placeholder="Enter Password" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="submit" value="Login" name="submit" class="btn btn-primary">
				<input type="submit" value="Cancel" name="" class="btn btn-danger">
			</div>
		</div>
		 
	</form>
    </div>
        
</div>  
		 <div class="col-sm-3"></div>
		 </div> 
</body>
</html>