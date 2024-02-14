<?php 
include 'header.php';
error_reporting(0);
$conn=mysqli_connect("localhost","root","","qrsystem");
session_start();
if(isset($_POST['submit']))
{

   $imgname=$_FILES['Image']['name'];
echo '<br>'; 
$extension = pathinfo($imgname, PATHINFO_EXTENSION);

$randomno=rand (0,100000); 
$rename='img'.date('Ymd').$randomno;

$newname=$rename.'.'.$extension;

$filename=$_FILES['Image']['tmp_name']; 
if(move_uploaded_file($filename, 'images/'.$newname))
{
//echo "uploaded";
}
else
{
echo "not uploaded";
}


$filename1='images/'.$newname;

	$sql="insert into maintance_tbl(mname,mem_name,mdate,image,descr)values('".$_POST['mname']."','".$_POST['mem_name']."','".$_POST['mdate']."','".$filename1."','".$_POST['descr']."')";
	if(mysqli_query($conn,$sql))
	{	
       echo "<script>alert('Maintance Added')</script>";
	}
	else
	{
		   echo "<script>alert('Maintance Not Added')</script>";
	}
	

}

//edit
if(isset($_POST['edit']))
{

 $imgname=$_FILES['Image']['name'];
echo '<br>'; 
$extension = pathinfo($imgname, PATHINFO_EXTENSION);

$randomno=rand (0,100000); 
$rename='img'.date('Ymd').$randomno;

$newname=$rename.'.'.$extension;

$filename=$_FILES['Image']['tmp_name']; 
if(move_uploaded_file($filename, 'images/'.$newname))
{
//echo "uploaded";
}
else
{
echo "not uploaded";
}

$filename1='images/'.$newname;
	$sql="update maintance_tbl set mname='".$_POST['mname']."',mem_name='".$_POST['mem_name']."',mdate='".$_POST['mdate']."',image='".$filename1."',descr='".$_POST['descr']."' where id='".$_POST['id']."'";
	if(mysqli_query($conn,$sql))
	{	
       echo "<script>alert('Maintance Updated')</script>";
	}
	else
	{
		 echo "<script>alert('Maintance Not Updated')</script>";
	}
}

//delete

if(isset($_POST['delete']))
{
		$sql="delete from maintance_tbl  where id='".$_POST['id']."'";
	if(mysqli_query($conn,$sql))
	{	
         echo "<script>alert('Maintance Deleted')</script>";
	}
	else
	{
		 echo "<script>alert('Maintance Not Added')</script>";
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

	<form action="add_maintance.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $_POST['id']?>" >
		<div class="row">
		
			<div class="col-sm-12">
				<h3>Add Maintance</h3>
				<br>
				<div class="row">
			<div class="col-sm-12">
				<input type="text" name="mname" value="<?php echo $_POST['mname']?>" placeholder="Enter Maintance Name" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="mem_name" value="<?php echo $_POST['mem_name']?>" placeholder="Enter Member Name" class="form-control" required>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="date" name="mdate" value="<?php echo $_POST['mdate']?>"  class="form-control" required>
			</div>
		</div>
		
		<br>
		<div class="row">
			<div class="col-sm-12">
				<input type="file" name="Image"  value="<?php echo $_POST['image']?>" class="form-control" required>
			</div>
		</div>
		<br>
		
		<div class="row">
			<div class="col-sm-12">
				<input type="text" name="descr" value="<?php echo $_POST['descr']?>" placeholder="Enter Description" class="form-control" required>
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