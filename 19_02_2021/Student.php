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
		<th>Grade</th>
		<th>Email</th>
		<th>NIC</th>
	</tr>



	<?php 
		$sql="select * from student";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr><td>" .$row['ID']. "</td><td>" .$row['Name']. "</td><td>" .$row['Grade']. "</td><td>" .$row['Email']. "</td><td>" .$row['NIC']. "</td><td> <a href='studentedit.php?ID=$row[ID]'>Edit</a></td><td> <a href='Studentdelete.php?ID=$row[ID]'>Delete</a></td></tr>";
			}
		}
	?>
		</table>
</body>
</html>
