<?php
	require '../includes/connect.php';

	if(isset($_POST['savemed'])){
		$itemid=$_POST['itemid'];
		$pid = $_POST['pid'];
		$name = $_POST['name'];
	    $soprice=$_POST['price'];
	    $sosprice=$_POST['sprice'];
	    $soqty=$_POST['qty'];
		$dqty=$_POST['dqty'];
	  $ddate=date('Y-m-d');
	  $ddqty=$dqty-$soqty;

	  $sql3 = "UPDATE  medicine SET dqty='$ddqty' WHERE id='$itemid'";
		$con->query($sql3);

	   
	  $sql2 = "INSERT INTO receipt (date, pid, sname, soprice, sosprice, soqty,itemid) VALUES ('$ddate', '$pid', '$name', '$soprice', '$sosprice', '$soqty','$itemid')";
     
	  $con->query($sql2);
		


		$sql = "INSERT INTO sold (date, pid, sname, soprice, sosprice, soqty,itemid,status) VALUES ('$ddate', '$pid', '$name', '$soprice', '$sosprice', '$soqty','$itemid','1')";
		if($con->query($sql)){
			
		}

		else{
			$_SESSION['error'] = $con->error;
		}

}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

echo "<script>alert('Medicine added well '); 
 window.history.go(-1);
</script>";
?>