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
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br><br>
			<?php

			$name = $_SESSION['bursar'];
			$type = $_SESSION['type'];

			?>
			<center>
				<form action="saveexpense.php" style="display: flex; justify-content: space-around;" method="POST">
					<input type="text" name="exptype" placeholder="enter type of expense">
					<button type="submit" name="expensetype" class="btnlink" style="background-color: green; color: white; width: 250px;">Create Expense Type</button>
				</form><br/><br/>


				<form action="saveexpense.php" style="display: flex; justify-content: space-around;" method="POST">
					<input type="date" name="ddate">
					<select name="exptype" style="width: 200px;" >
						
						<?php 

            		 $sql2 = "SELECT * FROM expensetype";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			
		 	?><option>
		<?php echo $row2['exptype']; ?>
	</option>
	<?php
		
	}

?>
						
					</select>
					<input type="text" name="expense" placeholder="enter expense">
					<input type="number" name="amount" placeholder="enter amount">
					<input type="text" name="comment" placeholder="comment" >
					<button type="submit" name="saveexpense" class="btnlink" style="background-color: green; color: white; width: 100px;">save</button>
			</form>

            
            <br/>
Search: <input type="text" size="30" onkeyup="live_search(this.value)">
            <br/><table class="table">
            	<thead>
            		<tr>
            			<th>Date</th><th>Expense Type</th><th>Expense</th><th>Amount</th><th>Comment</th><th>Action</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr id="search"></tr>
            		<?php 

                    $sql=$con->query("SELECT SUM(amount) AS sum FROM `expense` ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

            		 $sql2 = "SELECT * FROM expense ";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			echo "<tr height=30px'>";
		 	echo "<td>".$row2['ddate']."</td>";
		 	echo "<td>".$row2['exptype']."</td>";
		 	echo "<td>".$row2['expense']."</td>";
			echo "<td>".number_format($row2['amount'])."</td>";
			echo "<td>".$row2['comment']."</td>";
		 	?>
		<td><center><a href="deleteexpense.php?id=<?php echo $row2['id'] ?>" onclick="return confirm('Are you sure to delete this record?')" ><img src='../assets/img/glyphicons-17-bin.png' height='16px' width='12px'></a></center></td>
	
		</tr><?php
		
	}

?>
            		
            	</tbody>
            	<tr><td colspan="3"><h4>Total:</h4></td><td><h4><?php echo number_format($output); ?></h4></td></tr>
            	
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
  xmlhttp.open("GET","search_book.php?search_text="+val_in_textbox,true);
  xmlhttp.send();
}
</script>
</body>
</html>