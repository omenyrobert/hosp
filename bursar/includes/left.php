
<div class="left" style="background-color: #30394e;"><br>
	<center>
	<br>
	<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
		<img src="hicon.png" width="40">
		<a href="index.php" style="color: white; margin-top: 10px;">Home</a></div><br><br>
		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="picon.png" width="40">
		<a href="patients.php" style="color: white; margin-top: 10px;">Patients
         <?php 
			@require "./../includes/connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * From `medication` WHERE  `status`='finish'";
			$query = mysqli_query($con, $sql);
			echo "(".mysqli_num_rows($query).")";
		?>
		</a></div><br><br><br>
		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="settings.php" style="color: white; margin-top: 10px;">Settings</a></div><br><br>
		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="sicon.png" width="40">
		<a href="expenditure.php" style="color: white; margin-top: 10px;">Expenditures</a></div><br><br>

		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="picon.png" width="40">
		<a href="reports.php" style="color: white; margin-top: 10px;">Reports</a></div><br><br>

		<div style="background-color: #192339; display: flex; justify-content: space-around; color: white; height: 50px; width: 250px;">
			<img src="picon.png" width="40">
		<a href="income.php" style="color: white; margin-top: 10px;">Income</a></div><br><br>

	</center>
				
</div>
