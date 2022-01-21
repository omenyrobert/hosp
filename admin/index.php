<?php 
session_start();
if (empty($_SESSION['admin']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clinify Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">

	.total{
		height: 120px;
		width: 170px;
		border: 10px solid #1E90FF;
		margin-top: 30px;
		margin-left: 40px;
		float: left;
		text-align: center;
		padding-top: 20px;
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
			<a href="patients.php">
			<div class="total">
				<b>Receptionist(Patients)</b><hr>
                  

				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM patient";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>
             

             <a href="doc.php">
			<div class="total">
				<b>Doctors(patients)</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM doctor WHERE doctortype='NormalDoctor'";
				
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>
             
             <a href="women.php">
             <div class="total">
				<b>Antenatal</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM doctor WHERE doctortype='WomenDoctor'";
				
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>
               

               <a href="dent.php">
              <div class="total">
				<b>Dental</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM doctor WHERE doctortype='DentalDoctor'";
				
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>


              <a href="eye.php">
              <div class="total">
				<b>Eye Clinic</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM doctor WHERE doctortype='EyeClinic'";
				
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>


             <a href="lab.php">
			<div class="total">
				<b>Laboratory</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM lab ";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>

            <a href="pharm.php">
			<div class="total">
				<b>Pharmacy</b><hr>
				<?php
				require_once "../includes/connect.php";

				$sql = "SELECT * FROM users WHERE `type`='Pharmacy'";
				$query = mysqli_query($con, $sql);
				echo "<br><b style='color:#1E90FF; font-family:Arial; font-size:35px;'>".$row = mysqli_num_rows($query)."</b>"; 
				 ?>
			</div></a>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>



