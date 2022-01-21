<?php 
			if (isset($_POST['sendbtn'])) {
			   $price = $_POST['price'];
				$sid = $_POST['id'];
				$ddate=date('Y-m-d');
				require_once "../includes/connect.php";

				$sqll = "UPDATE medication SET `status`='finish',`medical_price`='$price'  WHERE `id`='$sid'";
				$queryy = mysqli_query($con,$sqll);

				$ssql="INSERT INTO doctor (ddate,name,medicine, test_results, medical_price, doctortype) VALUES('$ddate', '','','', '$price','pharmacy')";
                $query=mysqli_query($con,$ssql);

				if (!empty($queryy)) {
				echo "<script>alert('sent to finance  successfully')</script>";
			echo "<script>window.location='patients.php'</script>";

				}
			}
			 ?>