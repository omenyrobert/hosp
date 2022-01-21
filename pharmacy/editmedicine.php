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
	<title>Edit Medicine - clinify</title>
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
				<form action="editmedicine.php?id=<?php echo $id = $_GET['id']; ?>" method="POST">
					<?php
				require "../includes/connect.php";
				$sql = "SELECT * FROM `medicine` WHERE `id`='$id'"; 
				$query = $con->query($sql);
                    while($row = $query->fetch_assoc()) {
					?>
				<input type="text" name="name" class="form" value="<?php echo $row['name']; ?> " required="required"><br><br>
				<input type="text" name="price" class="form" value="<?php echo $row['price']; ?> " required="required"><br><br>
				<input type="text" name="sprice" class="form" value="<?php echo $row['sprice']; ?> " required="required"><br><br>
				<input type="text" name="qty" class="form" value="<?php echo $row['qty']; ?> " required="required"><br><br>
				<?php
				}
				 ?>
				<input type="submit" value="Update" style="background-color: green; width: 250px;" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($name) && !empty($price)) {
				require "../includes/pharmacy.php";
				updatemedicines();
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