1<?php 
include 'header.php';
error_reporting(0);
$conn=mysqli_connect("localhost","root","","qrsystem");
session_start();
if(isset($_POST['submit'])) 
{
	$sql=mysqli_query($conn,"select * from student where prn='".$_POST['prn']."'");
	if($row=mysqli_fetch_assoc($sql))
	{
		echo "<script>alert('Allredy Student In Database')</script>";
	
    }
    else
    { 
	$sql="insert into student(name,address,contact,email,prn,class,dept,status)values('".$_POST['fname']."','".$_POST['address']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['prn']."','".$_POST['class']."','".$_POST['dept']."','1')";
	if(mysqli_query($conn,$sql))
	{	
       echo "<script>alert('Student Added')</script>";
	}
	else
	{
		   echo "<script>alert('Student Not Added')</script>";
	}
	
}
}

//edit
if(isset($_POST['edit']))
{
	$sql="update student set name='".$_POST['fname']."',address='".$_POST['address']."',contact='".$_POST['contact']."',email='".$_POST['email']."',prn='".$_POST['prn']."',class='".$_POST['class']."',dept='".$_POST['dept']."' where id='".$_POST['id']."'";
	if(mysqli_query($conn,$sql))
	{	
       echo "<script>alert('Student Updated')</script>";
	}
	else
	{
		 echo "<script>alert('Student Not Updated')</script>";
	}
}

//delete

if(isset($_POST['delete']))
{
		$sql="delete from student  where id='".$_POST['id']."'";
	if(mysqli_query($conn,$sql))
	{	
         echo "<script>alert('Student Deleted')</script>";
	}
	else
	{
		 echo "<script>alert('Student Not Added')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>ASM IBMR: Best MBA/MCA/PGDM College in Pune, India | Top B-School</title>
	
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
	<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
	<div class="container">

	<form action="add_student.php" method="post">
		<input type="hidden" name="id" value="<?php echo $_POST['id']?>" >
		<div class="row">
		
			<div class="col-sm-12">
				<h3>Add Student</h3>
				<br>
				<div class="row">
			<div class="col-sm-12">
				<input type="text" name="fname" value="<?php echo $_POST['sname']?>" placeholder="Enter Name" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="address" value="<?php echo $_POST['address']?>" placeholder="Enter Address" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="contact" value="<?php echo $_POST['contact']?>" placeholder="Enter Contact" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="email" name="email" value="<?php echo $_POST['email']?>" placeholder="Enter Email" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="prn" placeholder="Enter Prn" value="<?php echo $_POST['prn']?>" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="class" value="<?php echo $_POST['class']?>" placeholder="Enter Class" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="dept" value="<?php echo $_POST['dept']?>" placeholder="Enter Department" class="form-control" required>
			</div>
		</div>
		
		
		<br>
		<div class="row">
			<div class="col-sm-12">
				<?php 
				if($_POST['btnedit'])
				{
					echo '<input type="submit" value="Edit" name="edit" class="btn btn-primary">';
				}
				elseif($_POST['btndelete'])
				{
                    echo '<input type="submit" value="Delete" name="delete" class="btn btn-danger">';

				}
				else
				{
					echo '<input type="submit" value="Submit" name="submit" class="btn btn-primary">';
				}

				
				
				?>
				<input type="submit" value="Cancel" name="cancel" class="btn btn-info">
			</div>
		</div>
		 </div>  
		 
		 </div> 
		
	</form>
    </div>
        </div>
			<div class="col-sm-3"></div>
		</div> 
<br><br>
</body>
</html>