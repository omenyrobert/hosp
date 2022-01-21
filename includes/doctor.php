<?php

function recdoctor()
{   
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='recdoctor'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='addsymptoms.php?id=".$row['id']."'>Add</a></center></td>";
			echo "</tr>";
		}
		
	}
}


function labdoctor()
{
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='labdoctor'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}



function women()
{
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='WomenDoctor'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}





function dental()
{
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='DentalDoctor'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}


function eye()
{
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='EyeClinic'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}

  

function admission()
{
	global $con;
	@require_once "connect.php";
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='Admission'";
	$query = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($query)) {
		$ido = $row['patient_id'];
		$sql2 = "SELECT * FROM patient WHERE `id`='$ido'";
		$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>view</a></center></td>";
			echo "</tr>";
		}
		
	}
}



function searchpatients()
{
			require 'connect.php';
			$fname = $_GET['s'];
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='recdoctor'";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
				$ido = $row['patient_id'];
				$sql2 = "SELECT * FROM patient WHERE `id`='$ido' AND `id` LIKE '%$fname%'";
				$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='addsymptoms.php?id=".$row['id']."'>Add</a></center></td>";
			echo "</tr>";
		}
		
	}
}

function searchnewpatients()
{
			@require 'connect.php';
			$fname = $_GET['s'];
			$typee = $_SESSION['type'];
			$sql = "SELECT * FROM medication WHERE `doctor_type`='$typee' AND `status`='labdoctor'";
			$query = mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($query)) {
				$ido = $row['patient_id'];
				$sql2 = "SELECT * FROM patient WHERE `id`='$ido' AND `id` LIKE '%$fname%'";
				$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>P-".$row2['id']."</td>";
			echo "<td>".$row2['fname']."</td>";
			echo "<td>".$row2['sname']."</td>";
			echo "<td>".$row2['sex']."</td>";
			echo "<td><center><a href='medicine.php?id=".$row['id']."'>View</a></center></td>";
			echo "</tr>";
		}
		
	}
}



function doctorreport()
{
			@require 'connect.php';
				$sql2 = "SELECT * FROM doctor";
				$query2 = mysqli_query($con, $sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>".$row2['ddate']."</td>";
			echo "<td>".$row2['name']."</td>";
			echo "<td>".$row2['medicine']."</td>";
			echo "<td>".$row2['test_results']."</td>";
			echo "</tr>";
		
		
	}
}







function addsymptoms()
{	global $con;
	$symptoms = trim(htmlspecialchars($_POST['symptoms']));
	$test = trim(htmlspecialchars($_POST['test']));
	if (!empty($symptoms)) {
		$id = $_GET['id'];
		@require_once "connect.php";

		$sql = "UPDATE medication SET `status`='laboratory',`symptoms`='$symptoms',`tests`='$test' WHERE `id`='$id'";
		$query = mysqli_query($con, $sql);
		if (!empty($query)) {
			$day = date('d');
			$month = date('m');
			$year = date('Y');
			$doctor = $_SESSION['doctor'];
			$report = mysqli_query($con, "INSERT INTO `doctorreport` VALUES ('','$doctor','$id','$day','$month','$year')");
			echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Sent</b>";
		}
	}
}

function addmedicine()
{	global $con;
	$medical_price = trim(htmlspecialchars($_POST['medical_price']));
	$doctortype = trim(htmlspecialchars($_POST['doctortype']));
	$medicine = trim(htmlspecialchars($_POST['medicine']));
	$name = trim(htmlspecialchars($_POST['name']));
	$test_results = trim(htmlspecialchars($_POST['test_results']));
	$ddate=date('Y-m-d');
	if ($_SESSION['type']=='NormalDoctor') {
		$id = $_GET['id'];

		@require_once "connect.php";

		$sqlw="INSERT INTO doctor(ddate,name,medicine,test_results,medical_price,doctortype)VALUES('$ddate','$name','$medicine','$test_results','$medical_price','NormalDoctor')";
		$query = mysqli_query($con, $sqlw);

		$sql = "UPDATE medication SET `status`='pharmacy',`medical`='$medicine' WHERE `id`='$id'";
		$query = mysqli_query($con, $sql);
			echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Sent</b>";
		}
		else{
			$id = $_GET['id'];
			$sql1 = "UPDATE medication SET `status`='finish',`medical`='$medicine' WHERE `id`='$id'";
		$query = mysqli_query($con, $sql1);
		echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Save</b>";

		$sqlw="INSERT INTO doctor(ddate,name,medicine,test_results,medical_price,doctortype)VALUES('$ddate','$name','$medicine','$test_results','$medical_price','$doctortype')";
		$query = mysqli_query($con, $sqlw);
		}
	}



function settings()
{	global $con;
	@require_once "connect.php";
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
		$name = $_SESSION['doctor'];
		$type = $_SESSION['type'];
			
				$sql = "UPDATE users SET `fname`='$fname',`sname`='$sname',`password`='$pass' WHERE `username`='$name' AND `type`='$type'";
				$query = mysqli_query($con, $sql);
				if (!empty($query)) {
					echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Succesifully Updated</b>";

				}	
		}
	}