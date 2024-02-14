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
      <th scope="col">Maintenance Name</th>
      <th scope="col">Member Name</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
     
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$sql=mysqli_query($conn,"select * from maintance_tbl");
    if(mysqli_num_rows($sql)>0)
    {
while($row=mysqli_fetch_assoc($sql))
{
	

    echo '<tr class="table-active">
    <form action="add_maintance.php" method="post">
      <td>'.$row['id'].'</td>
       <input type="hidden" name="id" value="'.$row['id'].'">
      <td>'.$row['mname'].'</td>
      <input type="hidden" name="mname" value="'.$row['mname'].'">
       <td>'.$row['mem_name'].'</td>
        <input type="hidden" name="mem_name" value="'.$row['mem_name'].'">
      <td>'.$row['mdate'].'</td>
       <input type="hidden" name="mdate" value="'.$row['mdate'].'">
      <td><img src="'.$row['image'].'" height="50" width="50" style="border-radius: 50px"></td>
      <input type="hidden" name="image" value="'.$row['image'].'">
      <td>'.$row['descr'].'</td>
       <input type="hidden" name="descr" value="'.$row['descr'].'">
         
      
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