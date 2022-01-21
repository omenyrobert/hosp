<?php 
session_start();
if (empty($_SESSION['laboratory']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laboratory Dashboard - Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right">
			<div style="display: flex; justify-content: space-around;">
			<a href="patients.php">
				<div style="background-color: yellow; width: 150px; height: 150px;">
					<center>
						<img src="picon.png" width="70" >
						<?php
                          require'../includes/connect.php';
                           $sql=$con->query("SELECT COUNT(*) AS sum FROM `patient` ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         	echo "<h1>".$output."</h1>";
                         }
                         
						?>
					</center>
					
					
				</div>
				
			</a>


<a href="results.php">
				<div style="background-color: green; width: 150px; height: 150px; color: white;">
					<center>
						<img src="picon.png" width="70" >
						<?php
                          require'../includes/connect.php';
                           $sql=$con->query("SELECT COUNT(*) AS sum FROM `lab` ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         	echo "<h1>".$output."</h1>";
                         }
                         
						?>
					</center>
					
					
				</div>
				
			</a>


<a href="reports.php">
				<div style="background-color: #0a91e7; width: 150px; height: 150px; color: white;">
					<center>
						<img src="sicon.png" width="70" >
						<?php
                          require'../includes/connect.php';
                           $sql=$con->query("SELECT COUNT(*) AS sum FROM `lab` ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         	echo "<h1>".$output."</h1>";
                         }
                         
						?>
					</center>
					
					
				</div>
				
			</a>



		</div>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>