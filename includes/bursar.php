<?php 



function patients()
{
		require 'connect.php';
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE  `status`='finish'";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		
			

		 $sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>P-".$row2['id']."</td>";
		 	echo "<td>".$row2['fname']."</td>";
		 	echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
	echo "<td>Doctors Costs:". number_format($row['doctor_price'])."&nbsp;&nbsp;&nbsp;&nbsp;Test Costs".number_format($row['test_price'])."&nbsp;&nbsp;&nbsp;&nbsp;Medical Costs ".number_format($row['medical_price'])."</td>";
		 	echo "<td><center><a href='receipt.php?id=".$row['id']."'>Cash In</a></center></td>";
		 	echo "</tr>";
		 }
		
	}
}


function donepatients()
{
		require 'connect.php';
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE  `status`='end'";
	$query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		
			

		 $sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>P-".$row2['id']."</td>";
		 	echo "<td>".$row2['fname']."</td>";
		 	echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
	echo "<td>Doctors Costs:". number_format($row['doctor_price'])."&nbsp;&nbsp;&nbsp;&nbsp;Test Costs".number_format($row['test_price'])."&nbsp;&nbsp;&nbsp;&nbsp;Medical Costs ".number_format($row['medical_price'])."</td>";
		 	echo "</tr>";
		 }
		
	}
}





function settings()
{
	require 'connect.php';
	//$username = trim(htmlspecialchars($_POST['username']));
	$fname = trim(htmlspecialchars($_POST['fname']));
	$sname = trim(htmlspecialchars($_POST['sname']));
	$password2 = trim(htmlspecialchars($_POST['password2']));
	$password = trim(htmlspecialchars($_POST['password']));
	if ($password != $password) {
		echo "<br><b style='color:red;font-size:14px;font-family:Arial;'>Password Must Match</b>";
	}
	else{
		$pass = $password;
		$name = $_SESSION['bursar'];
		$type = $_SESSION['type'];
			
				$sql = "UPDATE users SET `fname`='$fname',`sname`='$sname',`password`='$pass' WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con, $sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Updated</b>";

				}	
		}
	}


?>