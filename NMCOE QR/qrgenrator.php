<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","qrsystem");
header("Refresh:10;");
$f = "visit.php";
if(!file_exists($f))
{
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
 
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($email) {
	$find = '@';
	$pos = strpos($email, $find);
	$username = substr($email, 0, $pos);
	return $username;
}

	$tempDir = 'temp/'; 
	$url = $_SESSION['url'];
	$subject =  $_POST['subject'];
	$filename = getUsernameFromEmail($email);
	$body =  $_POST['msg'];
	$codeContents = 'url:'.$url; 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);


$sql=mysqli_query($conn,"select * from student where prn='".$_SESSION['prn']."'");
$sql1=mysqli_fetch_assoc($sql);
$st=$sql1['status'];
if($st=='0')
{   
	$_SESSION['name']=$sql1['name'];
	$_SESSION['contact']=$sql1['contact'];
	$_SESSION['email']=$sql1['email'];
    $_SESSION['class']=$sql1['class'];
    $_SESSION['dept']=$sql1['dept'];
    header("Refresh:5; url=startpage.php");
}
else
{
   
}
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
	<title>Genrate QR</title>
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script> -->
	</head>
	<body style="background-color: skyblue">
		
		<br>
  <center><img src="img/nmcoe2.jpg" height="100" width="100"></center>
  <h1 style="text-align: center">Nanasaheb Mahadik College of Engineering, Peth.</h1>
 <h2 style="text-align: center">Advanced Network Security For College Labs</h2>
		<div class="myoutput">
			
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field" style="margin-top: 30px">
				<h2 style="text-align:center">QR Code </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:300px; height:300px;padding: 20px">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:250px; height:250px;"><br>'; ?>
					</div>
					<!-- <a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a> -->
				</center>
			</div>
			
		</div>
	</body>
	
</html>