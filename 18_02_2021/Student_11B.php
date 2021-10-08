<?php
include_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>viewStudent</title>
</head>
<body>
	<table cellpadding="3px" cellspacing="3px" border="2px solid black">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>NIC</th>
	</tr>



	<?php 
		$sql="select ID,Name,NIC from student where Grade='11B'";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr><td>" .$row['ID']. "</td><td>" .$row['Name']. "</td><td>" .$row['NIC']. "</td></tr>";
			}
		}
	?>
		</table>
</body>
</html>
