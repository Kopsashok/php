<!DOCTYPE html>
<html>
<head>
	<title>ADD Student</title>
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
	<form action="add_newStudent.php" method="POST" >
		<label>Name:</label>
		<input type="text" name="name"><br><br>
	
		<label>Grade:</label>
		<input type="text" name="grade"><br><br>
	
		<label>Email:</label>
		<input type="text" name="email"><br><br>

		<label>NIC:</label>
		<input type="text" name="NIC"><br><br>

		<button name="add" style="float: left;">Add</button>
	</form>
</body>
</html>