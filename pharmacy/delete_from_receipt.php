<?php
	require '../includes/connect.php';

	if(isset($_POST['delmed'])){
		$itemid=$_POST['itemid'];
        $status = $_POST['status'];
	   
        $sql2 = "DELETE FROM receipt WHERE itemid='$itemid'";
		$con->query($sql2);

		$sql = "DELETE FROM sold WHERE itemid='$itemid' AND status='1'";
		if($con->query($sql)){
			
		}

		else{
			$_SESSION['error'] = $con->error;
		}

}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

echo "<script>alert('Medicine deleted '); 
 window.history.go(-1);
</script>";
?>