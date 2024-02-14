<?php  
session_start();
$conn=mysqli_connect("localhost","root","","qrsystem");

date_default_timezone_set("Asia/Kolkata");   
  
if(isset($_POST['btn']))
{

$cdate=date("Y-m-d");  
$ctime=date("H:i:s");
  $ctime1=time();
//echo $ctime;

	$sql="insert into caltime(name,contact,prn,email,class,dept,date1,time1,time11)values('".$_SESSION['name']."','".$_SESSION['contact']."','".$_SESSION['prn']."','".$_SESSION['email']."','".$_SESSION['class']."','".$_SESSION['dept']."','".$cdate."','".$ctime."','".$ctime1."')";
	if(mysqli_query($conn,$sql))
	{
       header("location:logout.php");
	}
	else
	{
        echo "Error".mysqli_error($conn);
	}
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome To Our System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<style type="text/css">
		.container
		{
			padding: 50px;
			background-color: whitesmoke;
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
	<div class="container">
	
<form action="startpage.php" method="post">
<div class="row login">
	<div class="col-sm-2"></div>
	<div class="col-sm-8" style="background-color: white;padding: 30px;">
		<h1>Welcome to System Plz click submit button to start your practical system </h1>
<input type="submit" name="btn" class="btn btn-success">

</div>
<div class="col-sm-2"></div>
</div>
</form>
</div>
</body>
</html>