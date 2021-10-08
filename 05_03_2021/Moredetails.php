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
			<th>Brand</th>
			<th>Price</th>
			<th>Color</th>
		</tr>

		<?php 
			$Id=$_GET['Id'];
			$sql="select Name,Brand,Price,Color from taxi where Id=$Id";
			$result=mysqli_query($con,$sql);

			if($result){
				while($row=mysqli_fetch_array($result)){
					echo "<tr><td>" .$row['Name']. "</td><td>" .$row['Brand']. "</td><td>" .$row['Price']. "</td><td>" .$row['Color']. "</td></tr>";
				}
			}
		?>
	</table>
</body>
</html>