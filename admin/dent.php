<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
    require"../headd.php";
	?>
	
	<div class="wrapper">
		<div class="right">
			<center><a href="index.php">Back</a>
		<p onclick="window.print();" >Print</p>
				  <form action="" method="GET" >
            	<div style="display: flex;">
            		
            			<input type="date" name="from_date" class="form-control" >
            	
            			<input type="date" name="to_date" class="form-control" >

            			<button style="background-color: green;" class="btnlink" type="submit" >Generate</button>
            		
            	</div>

            </form>
			<br><b><center><u>Results</u></center> </b><br>
<br/>
			<br/><br/>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Date</th>
					<th>Name</th>
					<th>Medicine</th>
					<th>Test Results</th>
					<th>Price</th>
				</tr>
				<?php 
				require'../includes/connect.php';
				if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

				$sql2 = "SELECT * From doctor WHERE doctortype='DentalDoctor' AND ddate BETWEEN '$from_date' AND '$to_date'";
		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>".$row2['ddate']."</td>";
			echo "<td>".$row2['name']."</td>";
			echo "<td>".$row2['medicine']."</td>";
			echo "<td>".$row2['test_results']."</td>";
			echo "<td>".$row2['medical_price']."</td>";
			echo "</tr>";
		}
	
				 ?>

				
				<?php
			}
			?>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>


</body>
</html>