<?php 
session_start();
if (empty($_SESSION['doctor']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Suggest Medicine - Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
		$id = $_GET['id'];
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<br>
			<br>
			<center>
				<form action="medicine.php?id=<?php echo $id = $_GET['id']; ?>" method="POST">
			<?php 
				require '../includes/connect.php';
				
				$sql = mysqli_query($con, "SELECT * FROM `medication` WHERE `id`='$id'");
				while ($row=mysqli_fetch_array($sql)) {
					$idd = $row['patient_id'];
					
					$sql1 = mysqli_query($con, "SELECT * FROM `patient` WHERE `id`='$idd'");
					while ($roww = mysqli_fetch_array($sql1)) {
						echo "<h4 align='center'><u>".$roww['fname']." ".$roww['sname']."</u></h4>";
						?>
						
			<input type="number" name="medical_price" placeholder="enter medication price">

						<input type="hidden" name="name" value="<?php echo $roww['fname'] ?> <?php echo $roww['sname'] ?>">
						<input type="hidden" name="doctortype" value="<?php echo $row['status'] ?>" >
						<?php
					}
				}
				 ?><br>
				 <h5><u>The Following are Results</u></h5>
				 <?php 
				require '../includes/connect.php';
				$id = $_GET['id'];
				$sql = mysqli_query($con, "SELECT * FROM `medication` WHERE `id`='$id'");
				while ($row=mysqli_fetch_array($sql)) {
					echo "<b>".$idd = $row['test_results']."</b><br><br><br>";
					
				 ?>
				<input type="hidden" name="test_results" value="<?php echo $row['test_results'] ?>">
						<?php
				}
				 ?>
				
				 <center><label for="medicine">Enter Medicine</label></center><br>

				<textarea required="required" name="medicine" id="medicine" class="form" style="height:200px; padding-left:20px;padding-top:20px;font-family:Arial;" placeholder=""></textarea>
				<br><br>
				
				<input type="submit" value="Send To Pharmacy" style="background-color: green; width: 250px;" class="btnlink" name="btn"><br><br>
			</form>
			<?php 
			extract($_POST);
			if (isset($btn) && !empty($medicine)) {
				require "../includes/doctor.php";
				addmedicine();
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