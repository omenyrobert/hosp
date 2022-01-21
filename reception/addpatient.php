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
	<title> Add Patient - HMS</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<a href="patients.php" style="margin-left:10px;"><button class="btnlink" style="background-color: 
			green;" >View Patients</button></a><br>
			
			<center>
				<form action="addpatient.php" method="POST">
				<input type="text" name="fname" class="form" placeholder="Enter Firstname" required="required"><br><br>
				<input type="text" name="sname" class="form" placeholder="Enter Surname" required="required"><br><br>
				<input type="email" name="email" class="form" placeholder="Enter Email" required="required"><br><br>
				<input type="text" name="phone" class="form" placeholder="Enter Phone number" required="required"><br><br>
				<input type="text" name="address" class="form" placeholder="Enter Address" required="required"><br><br>
				<select name="gender" class="form" required="required">
					<option value="">Choose Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select><br><br>
                <label>Date of Birth</label><br/>
				<input type="date" name="birthyear" class="form" ><br/><br/>
				<input type="submit" value="Add" class="btnlink"  style="background-color: 
			green;" name="btn"><br><br>
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($fname) && !empty($sname) &&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($gender)&&!empty($birthyear)) {
				require "../includes/reception.php";
				addpatient();
			}
			 ?>
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>