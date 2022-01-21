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
	<title>clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php require "../headd.php"; ?>
	<div class="wrapper">
		<div class="right"><br>
			<br><br>
			<center>
				<form action="savepay.php" method="POST">
					<?php
				require "../includes/connect.php";
				
                  if(isset($_GET['id'])){

		$id = $_GET['id'];
     
				$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE  `status`='finish' AND id='$id' ";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		
			

		 $sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<table style='width: 50%;'>";
		 	echo "<tr><td>First Name:</td><td>".$row2['fname']."</td></tr>";
		 	echo "<tr><td>Last Name:</td><td>".$row2['sname']."</td></tr>";
			echo "<tr><td>Male:</td><td>".$row2['sex']."</td></tr>";
			echo "<tr><td>Email:</td><td>".$row2['email']."</td></tr>";
			echo "<tr><td>Address:</td><td>".$row2['address']."</td></tr>";
			echo "<tr><td>Phone:</td><td>".$row2['phone']."</td></tr>";


	echo "<tr><td>Doctors Costs:</td><td>". number_format($row['doctor_price'])."</td></tr>

	<tr><td>Test Costs</td><td>".number_format($row['test_price'])."</td></tr>

	<tr><td>Medical Costs</td><td> ".number_format($row['medical_price'])."</td></tr>";

		 	echo "<tr><td><center> <h4>Total</h4></td><td><h4>". number_format($row['doctor_price']+$row['test_price']+$row['medical_price'])."</h4></center></td></tr>";
		 	echo "</table>";
		 	?>
		 	<input type="hidden" value="<?php echo $ido;?>" name="ido">
		 	<input type="hidden" value="<?php echo $row2['fname'];?>" name="fname">
		 	<input type="hidden" value="<?php echo $row2['sname'];?>" name="sname">
		 	<input type="hidden" value="<?php echo $row2['sex'];?>" name="sex">
		 	<input type="hidden" value="<?php echo $row2['email'];?>" name="email">
		 	<input type="hidden" value="<?php echo $row2['phone'];?>" name="phone">
		 	<input type="hidden" value="<?php echo $row['doctor_price'];?>" name="doctor_price">
		 	<input type="hidden" value="<?php echo $row['test_price'];?>" name="test_price">
		 	<input type="hidden" value="<?php echo $row['medical_price'];?>" name="medical_price">
		 	<input type="hidden" value="<?php echo $row['doctor_price']+$row['test_price']+$row['medical_price'];?>" name="total">
		 	<?php
		 }
		}
	}
	?>

				 <button  type="submit" style="background-color: green; width: 250px;" class="btnlink" name="savepay" >Add</button>
				
			</form>
			</center>
			
		</div>
		<a href="patients.php">back</a>
		<p onclick="window.print();" >Print</p>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>