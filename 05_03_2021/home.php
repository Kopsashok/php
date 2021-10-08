<?php 
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<table cellspacing="3px" cellpadding="3px" border="2px">
		<tr>
			<th>Name</th>
			<th>More</th>
		</tr>

		<?php 
			$sql="select Id,Name from taxi group by brand";
			$result=mysqli_query($con,$sql);

			if($result){
				while($row=mysqli_fetch_array($result)){
					echo "<tr><td>" .$row['Name']. "</td><td><a href='Moredetails.php?Id=$row[Id]'>More Details</a></td></tr>";
				}
			}
		?>
	</table>
</body>
</html>