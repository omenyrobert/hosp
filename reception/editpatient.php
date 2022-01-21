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
	<title>Edit Patient - Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<br><br>
			<?php $id = $_GET['id']; ?>
			<center>
				<form action="editpatient.php?id=<?php echo $id; ?>" method="POST">
				<?php
				require "../includes/connect.php";
				$sql = "SELECT * FROM `patient` WHERE `id`='$id'"; 
				$query = $con->query($sql);
                    while($row = $query->fetch_assoc()) {
					?>
				<input type="text" name="fname" class="form" value="<?php echo $row['fname']; ?>" required="required"><br><br>
				<input type="text" name="sname" class="form" value="<?php echo $row['sname']; ?>" required="required"><br><br>
				<input type="email" name="email" class="form" value="<?php echo $row['email']; ?>" required="required"><br><br>
				<input type="text" name="phone" class="form" value="<?php echo $row['phone']; ?>" required="required"><br><br>
				<input type="text" name="address" class="form" value="<?php echo $row['address']; ?>" required="required"><br><br>
					<?php
				}
				 ?>
				
				<select name="gender" class="form" value="<?php echo $row['gender']; ?>" required="required">
					<option value="">Choose Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select><br><br>

				<select name="bloodgroup" class="form" value="<?php echo $row['bloodgroup']; ?>" required="required">
					<option value="">Choose Blood Group</option>
					<option>A</option>
					<option>B</option>
					<option>AB</option>
					<option>o</option>
				</select><br><br>

				<label>date of Birth</label><br/>
				<input type="date" name="birthyear" value="<?php echo $row['birthyear']; ?>" ><br><br>
				<input type="submit" value="Update" style="background-color: green; width: 200px;" class="btnlink" name="btn">
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($fname) && !empty($sname) &&!empty($email)&&!empty($phone)&&!empty($address)&&!empty($gender)&&!empty($birthyear) && !empty($bloodgroup)) {
				require "../includes/reception.php";
				updatepatient();
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