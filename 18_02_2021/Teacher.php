<?php 
	include_once 'connect.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Teacher</title>
 </head>
 <body>

 	<table cellpadding="3px" cellspacing="3px" border="2px solid black">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Subject</th>
		<th>Phone No</th>
	</tr>

 	<?php 
 		$qury="Select * from teacher";
 		$result=mysqli_query($con,$qury);
 		if($result)
 		{
 			while($row=mysqli_fetch_array($result))
 			{
 				echo "<tr><td>" .$row['ID']. "</td><td>" .$row['Name']. "</td><td>" .$row['Subject']. "</td><td>" .$row['PhoneNo']. "</td></tr>";
 			}
 		}
  	?>
  	</table>
 </body>
 </html>