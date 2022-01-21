<?php 
session_start();
if (empty($_SESSION['bursar']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bursar Dashboard - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
	
		</style>
</head>
<body style="background-color: white;">
	<?php require"../headd.php"; ?>
	<div class="wrapper">
		<div class="right">
		<div class="statistics">
			<center><a href="expenditure.php">Back</a>
		<p onclick="window.print();" >Print</p>
				  <form action="" method="GET" >
            	<div style="display: flex;">
            		
            			<input type="date" name="from_date" class="form-control" >
            	
            			<input type="date" name="to_date" class="form-control" >

            			<button style="background-color: green;" class="btnlink" type="submit" >Generate</button>
            		
            	</div>

            </form>

            <div style="display: flex;">
            	<div>
            		<table id="myTable" style="width: 100%;  color: black; background-color: white;" class="table table-bordered">

					<thead>
						<th>Date</th>
                   <th>Type Of Expense</th>
						<th>Expense</th>

						<th>Amount</th>
						<th>Comment</th>
					</tr>
					</thead>
					<tbody>


						<?php
include_once('../includes/connect.php');


if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];


 $sql=$con->query("SELECT SUM(amount) AS sum FROM `expense` WHERE ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }


   $query=$con->query("SELECT * FROM `expense` WHERE ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$query->fetch_assoc())
   {
      ?>
     <tr><td><?php echo  $fetch['ddate'];?></td>
	   		<td><?php echo  $fetch['exptype'];?></td>
	   		<td><?php echo $fetch['expense'];?></td>
	   		<td><?php echo $fetch['amount'];?></td>
	   		<td><?php echo $fetch['comment'];?></td>			
	   	</tr>

 
     <?php
   }

  ?>
      <tr><td colspan="2" ><h4>The Total</h4></td>   <td><h4><?php echo $output;?></h4></td></tr>


     <?php
 }

?>
</tbody>
</table>

            	</div>
            	
            </div>
            <div>
            		<table id="myTable" style="width: 100%;  color: black; background-color: white;" class="table table-bordered">

					<thead>
						<th>Date</th>
                   <th>Name</th>
						<th>Gender</th>
                        <th>Phone</th>
						<th>income from Doctor</th>
						<th>Income from Laboratory</th>
                        <th>Income from the Pharmacy</th>
						<th>Total</th>
					</tr>
					</thead>
					<tbody>


						<?php
include_once('../includes/connect.php');


if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];


 $sql=$con->query("SELECT SUM(doctor_price) AS sum FROM `pay` WHERE date BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }



$sql=$con->query("SELECT SUM(test_price) AS sum FROM `pay` WHERE date BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output2 = ""." ".$fetch['sum'];
                         }


$sql=$con->query("SELECT SUM(medical_price) AS sum FROM `pay` WHERE date BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output3 = ""." ".$fetch['sum'];
                         }


$sql=$con->query("SELECT SUM(doctor_price+test_price+medical_price) AS sum FROM `pay` WHERE date BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output4 = ""." ".$fetch['sum'];
                         }





   $query=$con->query("SELECT * FROM `pay` WHERE date BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$query->fetch_assoc())
   {
      ?>
        <tr><td><?php echo  $fetch['date'];?></td>
	   		<td><?php echo  $fetch['fname'];?>&nbsp;&nbsp;<?php echo  $fetch['fname'];?></td>
	   		<td><?php echo $fetch['sex'];?></td>
	   		<td><?php echo $fetch['phone'];?></td>
	   		<td><?php echo $fetch['doctor_price'];?></td>
	   		<td><?php echo $fetch['test_price'];?></td>
	   		<td><?php echo $fetch['medical_price'];?></td>	
	   		<td><?php echo $fetch['doctor_price']+$fetch['test_price']+$fetch['medical_price'];?></td>		
	   	</tr>


     <?php
   }

  ?>
      <tr><td colspan="2" ><h4>The Total</h4></td>   <td><h4><?php echo $output;?></h4></td> <td><h4><?php echo $output2;?></h4></td>
      	<td><h4><?php echo $output3;?></h4></td> <td><h4><?php echo $output4;?></h4></td></tr>


     <?php
 }

?>
</tbody>
</table>

            	</div>
		</center>
		
			
		</div>

		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>