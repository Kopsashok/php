<?php 
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>ViewDoctor</title>
</head>
<body>
	<h1>Doctor details</h1>
	<table cellpadding="3px" cellspacing="3px" border="2px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>NIC</th>
			<th>AppointmentDate</th>
			<th>Gender</th>
			<th>PhoneNo</th>
			<th colspan="2">Actions</th>
		</tr>
		<?php 
			$sql="select * from doctor";
			$result=mysqli_query($con,$sql);
			if($result)
			{
				while($row=mysqli_fetch_array($result))
					echo "<tr><td>" .$row['Id']. "</td><td>" .$row['Name']. "</td><td>" .$row['NIC']. "</td><td>" .$row['AppointmentDate']. "</td><td>" .$row['Gender']. "</td><td>" .$row['PhoneNo']. "</td><td><a href='editdoctor.php?Id=$row[Id]'>Edit</a></td><td><a href='deletedoctor.php?Id=$row[Id]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>