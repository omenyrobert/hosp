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
	<title>Bursar Dashboard - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<style type="text/css">
		.flex-container {
    display: -webkit-flex;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    width: 1000px;
    height: 300px;
    background-color: lightgrey;
}

.flex-item {
    background-color: #192339;
    color: white;
    border-radius: 15%;
    border: 5px gold solid;
    width: 200px;
    height: 50px;
    margin: 5px;
    text-align: center;
}
	</style>
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right">
			<div class="flex-container">
			<?php 

            		 $sql2 = "SELECT * FROM expensetype";
		 $query2 = mysqli_query($con,$sql2);
		 while ($row2 = mysqli_fetch_array($query2)) {
			
		 	?><a href="expenditure.php">
		 	<div class="flex-item" >
		<?php echo $row2['exptype']; ?>
	</div></a>
	<?php
		
	}

?></div>
		</div>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>