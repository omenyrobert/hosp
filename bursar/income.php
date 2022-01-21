<?php 
session_start();
if (empty($_SESSION['bursar']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php require"../headd.php";
   require"../includes/connect.php";
	 ?>
	 <a href="expenditure.php">back</a>
	 <p onclick="window.print();">Print</p>
	   <form action="" method="GET" >
            	<div style="display: flex;">
            		
            			<input type="date" name="from_date" value="<?php $ddate=date('Y-m-d'); echo $ddate;?>" class="form-control" >
            	
            			<input type="date" name="to_date" value="<?php $ddate=date('Y-m-d'); echo $ddate;?>" class="date('Y-m-d')" >

            			<button style="background-color: green;" class="btnlink" type="submit" >Generate</button>
            		
            	</div>

            </form>
	<div class="wrapper">
		<div class="right"><br><br>
			<?php

			$name = $_SESSION['bursar'];
			$type = $_SESSION['type'];

			?>
			<center>            
            <br/>
            <br/><table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Admission</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor` WHERE doctortype='Admission' AND ddate BETWEEN '$from_date' AND '$to_date'") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor WHERE doctortype='Admission' AND ddate BETWEEN '$from_date' AND '$to_date'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
		
	}
}
?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>
              
              <br/><br/>

           <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Dental Clinic</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor` WHERE doctortype='DentalDoctor' AND ddate BETWEEN '$from_date' AND '$to_date'") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor WHERE doctortype='DentalDoctor' AND ddate BETWEEN '$from_date' AND '$to_date'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
		}
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>
             


           <br/><br/>  

            <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Eye Clinic</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor` WHERE doctortype='EyeClinic' AND ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor WHERE doctortype='EyeClinic' AND ddate BETWEEN '$from_date' AND '$to_date'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
	}
		
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>
                          


<br/><br/>


              <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Doctor</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor` WHERE doctortype='NormalDoctor' AND ddate BETWEEN '$from_date' AND '$to_date'") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor WHERE doctortype='NormalDoctor' AND ddate BETWEEN '$from_date' AND '$to_date' ";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
		}
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>
                  
<br/><br/>
                  <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Antenatal</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr id="search"></tr>
            		<?php 
            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor` WHERE doctortype='WomenDoctor' AND ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor WHERE doctortype='WomenDoctor'  AND ddate BETWEEN '$from_date' AND '$to_date' ";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
	}
		
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>


<br/><br/>
               <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Lab</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr id="search"></tr>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(price) AS sum FROM `lab`  WHERE ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM lab  WHERE ddate BETWEEN '$from_date' AND '$to_date'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['price'])."</td>";
		 	?>	
		</tr><?php
	}
		
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>


<br/><br/>

             <table class="table">
            	<thead style="background-color: green; color: white; text-align: center;">
            		<tr><th colspan="2">Income Pharmacy</th></tr>
            		<tr>
            			<th>Date</th><th>Costs</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr id="search"></tr>
            		<?php 

            		if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor`  WHERE doctortype='pharmacy' AND ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM doctor  WHERE doctortype='pharmacy' AND ddate BETWEEN '$from_date' AND '$to_date'";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
			echo "<td>".number_format($row2['medical_price'])."</td>";
		 	?>	
		</tr><?php
	}
		
	}

?>
            		
            	</tbody>
            	<tr><td><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
            </table>

<br/><br/>



           <?php 
           if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];

                    $sql=$con->query("SELECT SUM(medical_price) AS sum FROM `doctor`  WHERE ddate BETWEEN '$from_date' AND '$to_date' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output1 = ""." ".$fetch['sum'];
                         }


                      $sql=$con->query("SELECT SUM(price) AS sum FROM `lab`  WHERE ddate BETWEEN '$from_date' AND '$to_date'") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output2 = ""." ".$fetch['sum'];
                         }
}
                         ?>
                         <div style="display: flex;">
                         <h1>Grand Total</h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1><?php echo number_format($output1+$output2); ?></h1>
                     </div>
			</center>
			</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>