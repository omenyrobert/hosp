<?php
	require '../includes/connect.php';

	if(isset($_POST['savepay'])){
		$ido=$_POST['ido'];
		$fname = $_POST['fname'];
		$sname = $_POST['sname'];
	    $sex=$_POST['sex'];
	    $email=$_POST['email'];
	    $phone=$_POST['phone'];

	    $doctor_price = $_POST['doctor_price'];
	    $test_price=$_POST['test_price'];
	    $medical_price=$_POST['medical_price'];
	    $total=$_POST['total'];
	  $ddate=date('Y-m-d');
	   

	   $sqll = "UPDATE medication SET `status`='end'  WHERE `patient_id`='$ido'";
				$query = mysqli_query($con,$sqll); 

		$sql = "INSERT INTO pay (date,fname, sname, sex, email, phone, doctor_price, test_price, medical_price,total) VALUES 
		('$ddate','$fname', '$sname', '$sex', '$email', '$phone', '$doctor_price', '$test_price', '$medical_price','$total')";
		if($con->query($sql)){
			echo "<br><b style='color:#008080;font-size:14px;font-family:Arial;'>Medicine is Succesifully Added</b><br><br>";
		}
		else{
			$_SESSION['error'] = $con->error;
		}

}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: receipt.php');
?>