<!DOCTYPE html>
<html>
<head>
	<title>ADD Teacher</title>
	<style type="text/css">
		label{
			float: left;
			padding-right: 10px;
			line-height: 10%;
			display: inline-block;
			width: 200px;
		}
	</style>
</head>
<body style="background-color: lightblue">
	<h1 align="center">Add New Teacher</h1>
	<form action="insert.php" method="POST" >
			<label>Name:</label>
		<input type="text" name="name"><br><br>
	
		<label>Subject:</label>
		<input type="text" name="subject"><br><br>
	
		<label>Phone Number:</label>
		<input type="text" name="phonenumber"><br><br>

		<button name="add" style="float: left;">Add</button>
	</form>
</body>
</html>