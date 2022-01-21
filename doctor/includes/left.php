<div class="left" style="background-color: #30394e;"><br>
	<center>
	<br>
	<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
		<img src="hicon.png" width="40">
		<a href="index.php" style="color: white; margin-top: 10px;">Home</a></div><br><br>



		<?php if($_SESSION['type'] == 'NormalDoctor'){ ?>
		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="picon.png" width="40">
		<a href="reception.php" style="color: white; margin-top: 10px;">From Reception
        <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From 'medication' WHERE `doctor_type`='$typee' AND `status`='recdoctor'";
			$query = mysqli_query($con, $sql);
			//echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br><br>
        <?php } ?>




		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="settings.php" style="color: white; margin-top: 10px;">Settings</a></div><br><br>


		<?php if($_SESSION['type'] == 'NormalDoctor'){ ?>
		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="laboratory.php" style="color: white; margin-top: 10px;">From the Lab
       <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `doctor_type`='$typee' AND `status`='labdoctor'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br><?php } ?>




<?php if($_SESSION['type'] == 'WomenDoctor'){ ?>
        
        <div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="women.php" style="color: white; margin-top: 10px;">Antinatal
       <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `doctor_type`='$typee' AND `status`='WomenDoctor'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br>
        
<?php } ?>
         
         <?php if($_SESSION['type'] == 'DentalDoctor'){ ?>

        <div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="dental.php" style="color: white; margin-top: 10px;">Dental
       <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `doctor_type`='$typee' AND `status`='DentalDoctor'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br>
		<?php } ?>

        

        <?php if($_SESSION['type'] == 'EyeClinic'){ ?>
        <div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="eye.php" style="color: white; margin-top: 10px;">Eye Clinic
       <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `doctor_type`='$typee' AND `status`='eyeClinic'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br>
		<?php } ?>

        

        <?php if($_SESSION['type'] == 'Admission'){ ?>
        <div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="admission.php" style="color: white; margin-top: 10px;">Admission
       <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE `doctor_type`='$typee' AND `status`='labdoctor'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br>
		<?php } ?>



		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="picon.png" width="40">
		<a href="reports.php" style="color: white; margin-top: 10px;">Reports</a></div><br><br>

	</center>
				
</div>