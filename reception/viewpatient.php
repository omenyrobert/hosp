<?php 
session_start();
if (empty($_SESSION['reception']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patients -Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<br>
			<table class="table" style="width:80% !important;">
			<?php 
				require '../includes/reception.php';
				viewpatient();
				 ?>
			</table><br><br>
			<center>
				<form action="viewpatient.php?id=<?php echo $id = $_GET['id']; ?>" method="post">
				<select name="doctor" class="form" required="required">
					<option value="">Choose Doctor</option>
					<option>Pharmacy</option>
					<option>Laboratory</option>
					<option>NormalDoctor</option>
					<option>DentalDoctor</option>
					<option>WomenDoctor</option>
					<option>EyeClinic</option>
					<option>Admission</option>
				</select><br><br>
				<input type="submit" name="btn" style="background-color: green; width: 200px;" value="Assign To Doctor" class="btnlink">
			</form><br>
			<?php
			extract($_POST);
			if (isset($btn)&&!empty($doctor)) {
			 	assigntodoctor();
			 } 
			 ?>
			 <br><br>
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>