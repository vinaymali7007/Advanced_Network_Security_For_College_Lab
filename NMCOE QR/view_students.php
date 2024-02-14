<?php 
include 'header.php';
$conn=mysqli_connect("localhost","root","","qrsystem");
error_reporting(0);
 ?>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

  <script type="text/javascript">

  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
	<div class="container">

		<br>
		<h2>Report Details</h2>
		<br>
		<table class="table table-hover" id="example">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Prn</th>
      <th scope="col">Contact</th>
      <th scope="col">Class/Dept</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$sql=mysqli_query($conn,"select * from student");
    if(mysqli_num_rows($sql)>0)
    {
while($row=mysqli_fetch_assoc($sql))
{
	

    echo '<tr class="table-active">
    <form action="add_student.php" method="post">
      <td>'.$row['id'].'</td>
       <input type="hidden" name="id" value="'.$row['id'].'">
      <td>'.$row['name'].'</td>
      <input type="hidden" name="sname" value="'.$row['name'].'">
       <td>'.$row['address'].'</td>
        <input type="hidden" name="address" value="'.$row['address'].'">
      <td>'.$row['prn'].'</td>
       <input type="hidden" name="prn" value="'.$row['prn'].'">
      <td>'.$row['contact'].'</td>
      <input type="hidden" name="contact" value="'.$row['contact'].'">
      <td>'.$row['class'].'/'.$row['dept'].'</td>
       <input type="hidden" name="class" value="'.$row['class'].'">
         <input type="hidden" name="dept" value="'.$row['dept'].'">
      <td>'.$row['email'].'</td>
       <input type="hidden" name="email" value="'.$row['email'].'">
      
      <td><input type="submit" name="btnedit" value="Edit" class="btn btn-success"></td>
      <td><input type="submit" name="btndelete" value="Delete" class="btn btn-danger"></td>
    </form>
    </tr>';
}
}else
{
  echo "Not found";
}
    ?>
</tbody>
</table>
	</div>
  
</body>
</html>