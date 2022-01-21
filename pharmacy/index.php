<?php 
session_start();
if (empty($_SESSION['pharmacy']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pharmacy Dashboard - Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
		.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 1000px;
    height: 300px;
    background-color: lightgrey;
}

.flex-item {
    background-color: green;
    border-radius: 15%;
    border: 5px gold solid;
    width: 90px;
    height: 90px;
    margin: 5px;
    text-align: center;
}
	</style>
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right">
			<div class="flex-container">
 <?php 
                    require'../includes/connect.php';
// "SELECT *, SUM(sqty) FROM  `stockIn`  INNER JOIN `stockOut` ON `stockOut`.sitem = `stockIn`.item GROUP BY sitem"
			$sql3 = "SELECT *,SUM(soqty) FROM `medicine` INNER JOIN `sold` ON `sold`.sname=`medicine`.name GROUP BY sname";
	$query = mysqli_query($con,$sql3);
	while ($row = mysqli_fetch_array($query)) {
		?>
		
	<div class="flex-item">
		<?php $channge=$row['qty']-$row['SUM(soqty)'];
                          if ($channge<10) {
                          echo "<div style='background-color: red; color:white; font-size: 10px;' >Order needed</div>";
                          }
        				 ?>
		<p><b> <?php echo $row['sname']; ?></b></p>
		<div style="margin-top: -30px; justify-content: center; font-size: 12px; align-items: center;">
		<br/>
			<p><?php echo number_format($row['qty']-$row['SUM(soqty)']); ?></p><p style="margin-top: -1vw;"><?php echo number_format($row['qty']); ?></p></div>		
				</div>
		</tr><?php
	}
?>
				
			
		</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>