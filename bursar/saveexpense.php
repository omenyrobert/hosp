<?php
	require '../includes/connect.php';

	if(isset($_POST['saveexpense'])){

		$ddate = $_POST['ddate'];
		$exptype=$_POST['exptype'];
		$expense = $_POST['expense'];
	    $amount=$_POST['amount'];
	    $comment =$_POST['comment'];

		$sql = "INSERT INTO expense (ddate,exptype,expense, amount,comment) VALUES 
		('$ddate','$exptype','$expense', '$amount', '$comment')";
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



	header('location: expenditure.php');


	if(isset($_POST['expensetype'])){
	    $exptype=$_POST['exptype'];

		$sql = "INSERT INTO expensetype (exptype) VALUES 
		('$exptype')";
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


	header('location: expenditure.php');
?>