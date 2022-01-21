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
	<title>Edit Medicine - clinify</title>
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right"><br>
			<a href="medical.php" style="margin-left:10px;"><button class="btnlink" style="background-color: green;">View Medicine</button></a><br><br>
			<center>
				<form action="savesold.php" method="POST">
					<?php
				require "../includes/connect.php";
				
                  if(isset($_GET['id'])){

		$id = $_GET['id'];
     
				$sql = "SELECT * FROM `medicine` WHERE `id`='$id'"; 
				$query = $con->query($sql);
                    while($row = $query->fetch_assoc()) {
					?>
					<input type="hidden" name="soprice" class="form" value="<?php echo $row['price']; ?> " required="required"><br><br>
				<input type="hidden" name="sosprice" class="form" value="<?php echo $row['sprice']; ?> " required="required"><br><br>
				<input type="text" name="name" class="form" value="<?php echo $row['name']; ?> " readOnly><br><br>
				<input type="number" name="pid" placeholder="enter patient's id" class="form" required="required"><br><br>
				<input type="number" name="soqty" placeholder="enter number of Medicine" class="form" required="required"><br><br>
				
				<?php
				}
			}
				 ?>
				 <button  type="submit" style="background-color: green; width: 250px;" class="btnlink" name="savemed" >Add</button>
				
			</form>
			</center>
			
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
</body>
</html>