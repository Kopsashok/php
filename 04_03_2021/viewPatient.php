<?php 
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>ViewPatient</title>
</head>
<body>
	<h1>Patient details</h1>
	<table cellpadding="5px" cellspacing="5px" border="2px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>NIC</th>
			<th>Age</th>
			<th>AdmissionDate</th>
			<th>Address</th>
			<th>PhoneNo</th>
			<th colspan="2">Actions</th>
		</tr>
		<?php 
			$sql="select * from patient";
			$result=mysqli_query($con,$sql);
			if($result)
			{
				while($row=mysqli_fetch_array($result))
					echo "<tr><td>" .$row['Id']. "</td><td>" .$row['Name']. "</td><td>" .$row['NIC']. "</td><td>" .$row['Age']. "</td><td>" .$row['AdmissionDate']. "</td><td>" .$row['Address']. "</td><td>" .$row['PhoneNo']. "</td><td><a href='editpatient.php?Id=$row[Id]'>Edit</a></td><td><a href='deletepatient.php?Id=$row[Id]'>Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>