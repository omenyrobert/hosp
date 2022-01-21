<?php 
session_start();
if (empty($_SESSION['laboratory']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Labaratorist Dashboard - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php require"../headd.php"; ?>

	<div class="wrapper">
		<div class="right">
			<center><a href="results.php">Back</a>
		<p onclick="window.print();" >Print</p>
				  <form action="" method="GET" >
            	<div style="display: flex;">
            		
            			<input type="date" name="from_date" class="form-control" >
            	
            			<input type="date" name="to_date" class="form-control" >

            			<button style="background-color: green;" class="btnlink" type="submit" >Generate</button>
            		
            	</div>

            </form>
			<br><b><center><u>Results</u></center> </b><br>
<br/>
			Search: <input type="text" size="30" onkeyup="live_search(this.value)">
			<br/><br/>
			<table class="table" style="width:98% !important;">
				<tr>
					<th>Date</th>
					<th>Name</th>
					<th>Results</th>
					<th>Price</th>
				</tr>
				<tr id="search"></tr>
				<?php 
				require'../includes/connect.php';
				if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];


              $sql=$con->query("SELECT SUM(price) AS sum FROM `lab` WHERE ddate BETWEEN '$from_date' AND '$to_date'") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }



				$sql2 = "SELECT * From lab WHERE ddate BETWEEN '$from_date' AND '$to_date'";
		$query2 = mysqli_query($con,$sql2);
		while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
			echo "<td>".$row2['ddate']."</td>";
			echo "<td>".$row2['name']."</td>";
			echo "<td>".$row2['results']."</td>";
			echo "<td>".number_format($row2['price'])."</td>";
			echo "</tr>";
		}
	
				 ?>

				 <tr><td colspan="3"><h4>Total</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
				
				<?php
			}
			?>
			</table>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>

<script>
function live_search(val_in_textbox) {
  if (val_in_textbox.length==0) {
    document.getElementById("search").innerHTML="";
    return;
  }
  
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("search").innerHTML=this.responseText;
      
    }
  }
  xmlhttp.open("GET","search_book.php?search_text="+val_in_textbox,true);
  xmlhttp.send();
}
</script>


</body>
</html>