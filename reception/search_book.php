<?php
	$keyword=$_GET["search_text"];
	include "../includes/connect.php";
	if($keyword!="")
	{
		$sql_select = "SELECT * FROM patient WHERE fname  LIKE '%$keyword%'";
		$result = mysqli_query($con,$sql_select);
		if(mysqli_num_rows($result)>0)
		{
			$searched_text="";
			$i=1;
			while($row = mysqli_fetch_assoc($result))
			{
				$searched_text=$searched_text.$i.". <tr><td>".$row['id']."</td><td>".$row['fname']." </td><td>".$row['sname']."</td><td>".$row['phone']."</td><td>".$row['sex']."</td><td><center><a href='viewpatient.php?id=".$row['id']."'>View</a></center></td> <td><center><a href='editpatient.php?id=".$row['id']."'><img src='../assets/img/glyphicons-151-edit.png' height='16px' width='17px'></a></center></td> <td><center><a href='deletepatient.php?id=".$row['id']."'><img src='../assets/img/glyphicons-17-bin.png' height='16px' width='12px'></a></center></td>"."<br/></tr>";
				//$book_number = $row['book_number'];
				$i++;
			}
			echo $searched_text;
		}	  
		else
		{
			echo "No such patient found.";
		}
	 }
	 mysqli_close($con);
?>