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
					<th>Medicine</th>
					<th>Qty(Stocked)</th>
					<th>Qty(Remaining)</th>
					<th>Costs Price</th>
					<th>Sales</th>
					<th>Profits</th>
				</tr>
				<?php 
				require'../includes/connect.php';
				if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

	 $pro=0;
   $cost=0;
   $sale=0;

$sql2 = "SELECT *,SUM(soqty) FROM `medicine`  INNER JOIN `sold` ON `sold`.sname=`medicine`.name WHERE date BETWEEN '$from_date' AND '$to_date' GROUP BY sname ";

		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {

             $pro+=$row2['SUM(soqty)']*($row2['sosprice']-$row2['price']);
								$cost+=$row2['SUM(soqty)']*$row2['price'];
								$sale+=$row2['SUM(soqty)']*$row2['sprice'];



			echo "<tr height=30px'>";
			echo "<td>".$row2['date']."</td>";
			echo "<td>".$row2['name']."</td>";
			echo "<td>".number_format($row2['qty'])."</td>";
			echo "<td>".number_format($row2['qty']-$row2['SUM(soqty)'])."</td>";
			echo "<td>".number_format($row2['SUM(soqty)']*$row2['price'])."</td>";
			echo "<td>".number_format($row2['SUM(soqty)']*$row2['sprice'])."</td>";
			echo "<td>".number_format($row2['SUM(soqty)']*($row2['sosprice']-$row2['price']))."</td>";
			echo "</tr>";
		}
	
				 ?>

				
				<?php
			}
			?>
			<tr><td colspan="4">Total</td><td><?php echo number_format($cost); ?></td> <td><?php echo number_format($sale); ?></td><td><?php echo number_format($pro); ?></td></tr>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>


</body>
</html>