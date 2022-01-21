<?php 
session_start();
if (empty($_SESSION['pharmacy']) OR empty($_SESSION['type'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pharmacy- clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<a href="addmedicine.php" style="margin-left:300px;"><button class="btnlink" style="background-color: green;">Add Medicine</button></a><br><br><br><br><br><br>
			Search: <input type="text" size="30" onkeyup="live_search(this.value)">
			<table class="table">
				<tr>
					<th>Madicine Name</th>
					<th>Unit Cost Price</th>
					<th>Unit Selling Price</th>
					<th>Quantity</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr id="search"></tr>
				<?php 
				require '../includes/pharmacy.php';
				medicine();
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