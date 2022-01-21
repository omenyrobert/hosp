<?php 
session_start();
if (empty($_SESSION['doctor']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Doctor Dashboard - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php require"../headd.php"; ?>

	<div class="wrapper">
		<div class="right">
		<div class="statistics">
			<center><br/>
				Search: <input type="text" size="30" onkeyup="live_search(this.value)">
				<br/><br/>

				<a href="index.php">Back</a>
		<p onclick="window.print();" >Print</p>
				  <form action="" method="GET" >
            	<div style="display: flex;">
            		
            			<input type="date" name="from_date" class="form-control" >
            	
            			<input type="date" name="to_date" class="form-control" >

            			<button style="background-color: green;" class="btnlink" type="submit" >Generate</button>
            		
            	</div>

            </form>

<br/>
				<table class="table">
					<thead>
						<tr>
							<th>Date</th><th>Name</th><th>Medicine</th><th>Test Results</th>
						</tr>
					</thead>
					<tbody>
						<tr id="search"></tr>
				
				<?php
              require"../includes/connect.php";
              if(isset($_GET['from_date'])&&isset($_GET['to_date']))
{
	$from_date=$_GET['from_date'];
	$to_date=$_GET['to_date'];
    $type=$_SESSION['type'];
           $sql2 = "SELECT * FROM doctor  WHERE doctortype='$type' AND ddate BETWEEN '$from_date' AND '$to_date'";
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
				?></tbody>
				</table>
			</center>
			
			
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
  xmlhttp.open("GET","search_book2.php?search_text="+val_in_textbox,true);
  xmlhttp.send();
}
</script>


</body>
</html>