<?php
	$keyword=$_GET["search_text"];
	include "../includes/connect.php";
	if($keyword!="")
	{
		$sql_select = "SELECT * FROM medicine WHERE name  LIKE '%$keyword%'";
		$result = mysqli_query($con,$sql_select);
		if(mysqli_num_rows($result)>0)
		{
			$searched_text="";
			$i=1;
			while($row = mysqli_fetch_assoc($result))
			{
				$searched_text=$searched_text.$i.". <tr>
				<td>".$row['name']." </td>

				<td>".number_format($row['price'])."</td>

				<td>".number_format($row['sprice'])."</td>

				<td>".number_format($row['qty'])."</td>

				 <td><center><a href='editmedicine.php?id=".$row['id']."'><img src='../assets/img/glyphicons-151-edit.png' height='16px' width='17px'></a></center></td></tr>";
				
				$i++;
			}
			echo $searched_text;
		}	  
		else
		{
			echo "No such medicine found.";
		}
	 }
	 mysqli_close($con);
?>