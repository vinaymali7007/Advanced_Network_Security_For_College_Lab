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
        .appendTo('#example_wrapper .col-md-6:eq(0)' );
} );
</script>
	<div class="container">
    <br>
    <h2>Serach Reports(Daily-Weekly-Monthly):</h2>
    <br>
    <form action="report.php" method="post">
    <div class="row">
      <div class="col-sm-4">
        <label>Start Date</label>
   <input type="date" name="sdate" class="form-control">
 </div>
 <div class="col-sm-4">
  <label>End Date</label>
   <input type="date" name="edate" class="form-control">
 </div>
 <div class="col-sm-4">
  <label style="color:white">.</label>
   <input type="submit" name="btn" class="form-control btn btn-primary" value="Search">
 </div>
   </div>
   </form>
		<br>
		<h2>Report Details</h2>
		<br>
		<table class="table table-hover" id="example">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Prn</th>
      <th scope="col">Contact</th>
      <th scope="col">Class/Dept</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Login Time</th>
      <th scope="col">Logout Time</th>
      <th scope="col">Calculate time</th>
    </tr>
    </thead>
    <tbody>
  	<?php 

    $sql="";

    if(isset($_POST['btn']))
    {
      $sql=mysqli_query($conn,"select * from caltime where date1 between '".$_POST['sdate']."' and '".$_POST['edate']."'");
    }
    else
    {
      $sql=mysqli_query($conn,"select * from caltime");
    }

    if(mysqli_num_rows($sql)>0)
    {
    while($row=mysqli_fetch_assoc($sql))
    {
    	$cal=($row['time22']-$row['time11'])/60;
        echo '<tr class="table-active">
          <td>'.$row['id'].'</td>
          <td>'.$row['name'].'</td>
          <td>'.$row['prn'].'</td>
          <td>'.$row['contact'].'</td>
          <td>'.$row['class'].'/'.$row['dept'].'</td>
          <td>'.$row['email'].'</td>
          <td>'.$row['date1'].'</td>
          <td>'.$row['time1'].'</td>
          <td>'.$row['time2'].'</td>
          <td>'.round($cal).' Min</td>
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