<?php
	$keyword=$_GET["search_text"];
	include "../includes/connect.php";
	if($keyword!="")
	{
		$sql_select = "SELECT * FROM expense WHERE expense  LIKE '%$keyword%'";
		$result = mysqli_query($con,$sql_select);
		if(mysqli_num_rows($result)>0)
		{
			$searched_text="";
			$i=1;
			while($row = mysqli_fetch_assoc($result))
			{
				$searched_text=$searched_text.$i.". <tr>
				<td>".$row['ddate']." </td>

				<td>".$row['exptype']."</td>

				<td>".$row['expense']."</td>

				<td>".number_format($row['amount'])."</td>
				<td>".$row['comment']."</td>";
				
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