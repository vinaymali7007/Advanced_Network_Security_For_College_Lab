<?php 
$conn=mysqli_connect("localhost","root","","qrsystem");
session_start();
if(isset($_POST['submit']))
{
	$sql=mysqli_query($conn,"select * from student where prn='".$_POST['prn']."'");
	if($row=mysqli_fetch_assoc($sql))
	{	
        $_SESSION['prn']=$_POST['prn'];
        $_SESSION['url']='http://192.168.133.172/NMCOE%20QR/startlogin.php';
		header('location:qrgenrator.php');
	}
	else
	{
		echo "<script>alert('Prn not registerd')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Prn Here...!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="">
		.container
		{
			background-color: whitesmoke;
			padding: 20px;
		}
		


	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">QR SYSTEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <!-- <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li> -->
        
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li> -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	<br>
	<center><img src="img/nmcoe2.jpg" height="100" width="100"></center>
	<h1 style="text-align: center">Nanasaheb Mahadik College of Engineering, Peth.</h1>
 <h2 style="text-align: center">Advanced Network Security For College Labs</h2>
	<div class="row login">
		<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background-color: white;padding: 25px">
	<div class="container">
		<br>
		
 <br>
	<form action="prnpage.php" method="post">
		
				<h3>Start Login</h3>
				<br>
				<div class="row">
			<div class="col-sm-12">
				<input type="text" name="prn" placeholder="Prn" class="form-control" required>
			</div>
		</div>
		<br>
		
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="submit" value="Submit" name="submit" class="btn btn-primary">
			</div>
		</div>
		 
	</form>
    </div>
        </div>  
		 	<div class="col-sm-3"></div>
		 </div> 

</body>
</html>