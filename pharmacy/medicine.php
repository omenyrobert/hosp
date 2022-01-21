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
	<title>Pharmacy - clinify</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body style="background-color: white;">
	<?php
		include "includes/header.php";
		include "includes/left.php";
	 ?>
	<div class="wrapper">
		<div class="right">
	
			<br>
			<center>
			<?php 
				require '../includes/connect.php';
				$id = $_GET['id'];
				
				$sql = mysqli_query($con, "SELECT * FROM `medication` WHERE `id`='$id'");
				while ($row=mysqli_fetch_array($sql)) {
					$idd = $row['patient_id'];
					
					$sql1 = mysqli_query($con, "SELECT * FROM `patient` WHERE `id`='$idd'");
					while ($roww = mysqli_fetch_array($sql1)) {
						$pid=$roww['id'];
						echo "<h4 align='center'><u>".$roww['fname']." ".$roww['sname']."</u></h4>";
						echo "<h5 align='center'>Patient's id ".$roww['id']."</h5>";
					}
				}
				 ?><br>
                 <div style="display: flex;">
                 <div>
				 <?php 
				@require '../includes/connect.php';
				$id = $_GET['id'];
				
				$sql = mysqli_query($con, "SELECT * FROM `medication` WHERE `id`='$id'");
				while ($row=mysqli_fetch_array($sql)) {
					echo "Give him/her the following Medicine: <br><textarea  style='width:250px; height: 150px;' readOnly>".$row['medical']."</textarea>";
					
				}
				 ?><br><br>
                 </div>
                 <div>
                 	<table class="table" style="width: 500px;" >
                 		<thead>
                 			<tr>
                 				<th>Medicine</th>
                 				<th>Qty</th>
								 <th>Cost</th>
                 				<th>Total</th>
                 				
                 			</tr></thead>
                 			<tbody>
                 		
                 		
                 	
                 	 <?php 
                    
                    $sql=$con->query("SELECT SUM(sosprice*soqty) AS sum FROM `sold` WHERE pid='$pid' ") or die("Failed to fetch row!");
						while($fetch=$sql->fetch_assoc())
   {
                         	$output = ""." ".$fetch['sum'];
                         }

			$sql3 = "SELECT * FROM sold where pid='$pid'";
	$query = mysqli_query($con,$sql3);
	while ($row = mysqli_fetch_array($query)) {
		?>
		<tr>
		<td><?php echo $row['sname']; ?></td>
		<td><?php echo $row['soqty']; ?></td>
		<td><?php echo number_format($row['sosprice']); ?></td>
		<td><?php echo number_format($row['sosprice']*$row['soqty']); ?></td>
        <td>
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editre<?php echo $row['id']; ?>">Edit</button>
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delre<?php echo $row['id']; ?>">del</button>
		</td>	
		</tr>		 
		
		<div class="modal fade" style="color: black;" id="editre<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Medicine</h4></center>
            </div>
            <div class="modal-body" style="padding: 50px;">	
            	<form method="post" action="edit_from_receipt.php">
            	<input type="hidden" name="status" value="<?php echo  $row['status']; ?>" class="form-control" >
					<input type="hidden" name="itemid" value="<?php echo  $row['itemid']; ?>" class="form-control" >
                    <h4><b><?php echo  $row['sname'];?> </b></h4>
                     <label>Quantity</label><br/>
                     <input type="number" name="qty" class="form-control" >
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="editre" class="btn btn-primary">Edit</button>
            </div>
        </form>

        </div>
    </div>
</div>


<div class="modal fade" style="color: black;" id="delre<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Medicine</h4></center>
            </div>
            <div class="modal-body" style="padding: 50px;">	
            	<form method="post" action="delete_from_receipt.php">
					<input type="hidden" name="itemid" value="<?php echo  $row['itemid']; ?>" class="form-control" >
					<input type="hidden" name="status" value="<?php echo  $row['status']; ?>" class="form-control" >
					<input type="hidden" name="soqty" value="<?php echo  $row['soqty']; ?>" class="form-control" >
					<h4> <?php echo  $row['sname']; ?></h4>
					
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="delmed" class="btn btn-danger">Confirm delete</button>
            </div>
        </form>

        </div>
    </div>
</div>




		<?php
	}
?></tbody>
<tr><td colspan="3">Total</td><td><?php echo number_format($output); ?></td></tr>

<form action="sendf.php" method="POST">
				<input type="hidden" name="price" value="<?php echo $output; ?>">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
	<button type="submit" name="sendbtn"  style="background-color: green; color: white; height: 40px; ">Send to Finance</button>
				

			</form>
</table>
                 </div>
             </div><br/><br/>


				 <form action="savesold.php?<?php echo $mid = $_GET['id']; ?>" method="POST"> 
		

<!-- Search: <input type="text" size="30" onkeyup="live_search(this.value)"> -->
<table id="myTable" style="width: 50%;" class="table table-bordered">
	<thead>
	<tr>
					<th>Madicine Name</th>
					<th>Enter Drug</th>
				</tr>
	</thead>
			
				<!-- <tr id="search"></tr> -->
				<?php 
				// require '../includes/pharmacy.php';
				// savemedicine();
				 ?>   
				 <tbody>
				 <?php
include_once('../includes/connect.php');

   $sql=$con->query("SELECT * FROM  `medicine` ") or die("Failed to row row!");
   while($row=$sql->fetch_assoc()){
	?>
        <tr><td><?php echo  $row['name'];?></td>
	   	
<td>

		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $row['id']; ?>">Enter medicine</button> 
</td>				
	   	</tr>





<div class="modal fade" style="color: black;" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Enter Medicine</h4></center>
            </div>
            <div class="modal-body" style="padding: 50px;">	
            	<form method="post" action="savesold.php">
            		<input type="hidden" name="pid" value="<?php echo  $pid; ?>" class="form-control" >
					<input type="hidden" name="itemid" value="<?php echo  $row['id']; ?>" class="form-control" >
					<input type="hidden" name="dqty" value="<?php echo  $row['dqty']; ?>" class="form-control" >
                    <label><?php echo $row['name']; ?></label>
                     <input type="hidden" name="name" value="<?php echo  $row['name'];?>" class="form-control" ><br/>
                     <label>Quantity</label><br/>
                     <input type="number" name="qty" class="form-control" >
            		<input type="hidden" name="sprice" value="<?php echo  $row['sprice'];?>" class="form-control" >
            		<input type="hidden" name="price" value="<?php echo  $row['price'];?>" class="form-control" >
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="savemed" class="btn btn-primary">Enter</button>
            </div>
        </form>

        </div>
    </div>
</div>



     <?php
   }



?> 
 </tbody>

			</table>
<br><br>
			
			
			</center>
		</div>
		<?php 
		include "includes/footer.php";
		 ?>
	</div>
	<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});



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