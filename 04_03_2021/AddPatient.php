<?php 
include_once 'connection.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>AddPatient</title>
 	<style>
 		label{
 			float: left;
 			display: inline-block;
 			padding-right: 10px;
 			line-height: 10%;
 			width: 200px;
 		}
 	</style>
 </head>
 <body>
 	<h1>Add New Patients</h1>
 	<form action="insert.php" method="POST">
 		<label>Name</label>
 		<input type="text" name="name"><br><br>
 		<label>NIC</label>
 		<input type="text" name="nic"><br><br>
 		<label>Age</label>
 		<input type="number" name="age"><br><br>
 		<label>AddDate</label>
 		<input type="date" name="Addate"><br><br>
 		<label>Address</label>
 		<input type="text" name="address"><br><br>
 		<label>PhoneNo</label>
 		<input type="number" name="phone"><br><br>
 		<button name="submit">Submit</button>
 	</form>
 </body>
 </html>