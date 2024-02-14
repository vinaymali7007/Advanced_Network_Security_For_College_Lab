<?php 
$conn=mysqli_connect("localhost","root","","qrsystem");


if(isset($_POST['btn']))
{
	
	$sql="update student set status='0' where prn='".$_POST['prn']."'";
	if(mysqli_query($conn,$sql))
	{	
		header('location:welcomepage.php');
	}
	else
	{
		 echo "<script>alert('Error Sorry')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Start Here...!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="">
		.container
		{
			background-color: skyblue;
			padding: 20px;
			margin-top: 50px; 
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
       <!--  <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a> -->
        </li>
        
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
	<br><br>
  <center><img src="img/nmcoe2.jpg" height="100" width="100"></center>
  <br>
  <h1 style="text-align: center">Nanasaheb Mahadik College of Engineering, Peth.</h1>
 <h2 style="text-align: center">Advanced Network Security For College Labs</h2>
 <br>
	<div class="row login">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
	<div class="container">
		<br>
    
    <br>
	<form action="startlogin.php" method="post">
		
				
				<h3>Start Login</h3>
				<br>
				<div class="row">
			<div class="col-sm-12">
				<input type="text" name="prn" placeholder="Enter Prn" class="form-control" required>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-12">
				<input type="submit" value="Start Here" name="btn" class="btn btn-primary" required>
			</div>
		</div>
		 </div> 	
		
	</form>
    </div>
        </div>
			<div class="col-sm-1"></div>
		</div>
<br><br>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<center><img src="img/nmcoe.jpg" height="500" width="500"></center>
			</div>
		</div>
		<br>

</body>
</html>