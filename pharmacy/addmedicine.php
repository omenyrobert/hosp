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
	<title>Add Medicine - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<a href="medical.php" style="margin-left:10px;"><button class="btnlink" style="background-color: green;">View Medicine</button></a><br><br>
			<center>
				<form action="addmedicine.php" method="POST">
				<input type="text" name="name" class="form" placeholder="Enter Medicine Name" required="required"><br><br>
				<input type="number" name="price" class="form" placeholder="unit cost Price" required="required"><br><br>
				<input type="number" name="sprice" class="form" placeholder="unit selling Price" required="required"><br><br>
				<input type="number" name="qty" class="form" placeholder="quantity" required="required"><br><br>
				<input type="submit" value="Add" class="btnlink" style="background-color: green; width: 250px; " name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($name) && !empty($price)) {
				require "../includes/pharmacy.php";
				addmedicines();
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