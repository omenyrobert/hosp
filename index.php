<?php
include_once'includes/connect.php';
if (isset($_POST['btn'])) {
	$username = $_POST['username'];

	$sql = "INSERT INTO `attendance` (username,timedate)
 VALUES ('$username',now())";
 
		$con->query($sql);
				echo "<script>alert(' login!')</script>";
		}


session_start();
if (!empty($_SESSION['admin'])&&!empty($_SESSION['type'])) {
	header("Location: admin/");
}
elseif (!empty($_SESSION['laboratory'])&&!empty($_SESSION['type'])) {
	header("Location: laboratory/");
}
elseif (!empty($_SESSION['doctor'])&&!empty($_SESSION['type'])) {
	header("Location: doctor/");
}
elseif (!empty($_SESSION['reception'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
elseif (!empty($_SESSION['bursar'])&&!empty($_SESSION['type'])) {
	header("Location: reception/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>clinify</title>
			
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body style="height: 100vh; background-image: url('banner3.jpg');   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
<div>
	<div style="display: flex; width: 100%; justify-content: center; align-items: center; margin: 150px;">
	<div class="col-md-6" style="width: 30%; background-color: white; margin-right: 50px;">
		<div style="display: flex; justify-content: center; align-items: center;">
		<h1 style="color: green; font-size: 60px;"><b>Clini</b></h1><h1 style="color: gold; font-size: 60px;"><b>fy</b></h1>
	</div>
	</div>
	<div class="col-md-6" style="width: 30%; background-color: green; padding-left: 200px; padding-top: 50px; padding-bottom: 50px; justify-content: center; align-items: center; margin-right: 150px; color: white;">
		<div style="display: flex;">
		<h1>Login</h1><h1 style="color: yellow;"> Here</h1>
	</div>
		<form action="index.php" method="post">
			<input type="text" class="input" name="username" placeholder="Enter Username"><br><br>
			<input type="password" class="input" name="password" placeholder="Enter Password"><br><br>
			<input type="submit" style="background-color: black;" name="btn" class="btnlink" value="Login"><br>
		</form>
<?php
		extract($_POST);
		if (isset($btn) && !empty($username) && !empty($password)) {
			require 'includes/users.php';
		 	login();
		 } 
		 ?>
	</div>
</div>
</div>
</body>
</html>
