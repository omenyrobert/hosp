<?php
	require '../includes/connect.php';

	if(isset($_POST['editre'])){
		$itemid=$_POST['itemid'];
        $status = $_POST['status'];
        $qty = $_POST['qty'];
        
        $sql2 = "UPDATE  receipt SET soqty='$qty' WHERE itemid='$itemid'";
		$con->query($sql2);

		$sql = "UPDATE  sold SET soqty='$qty' WHERE itemid='$itemid' AND status='1'";
		if($con->query($sql)){
			
		}

		else{
			$_SESSION['error'] = $con->error;
		}

}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

echo "<script>alert('Medicine updated '); 
 window.history.go(-1);
</script>";
?>