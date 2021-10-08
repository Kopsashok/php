<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		form{
			background-color: powderblue;
			height: 400px;
			width: 500px;
			align-items: center;
		}
		div{
			padding: 30px;
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<h1 style="color: blue; text-align: center;">Login to Enter our Web Page</h1>
	<center>
	<form action="check.php" method="POST">
		<div>
		<label>User Name</label>
		<input type="text" name="user" required><br><br>
		</div>

		<div>
		<label>Password</label>
		<input type="Password" name="pw" required><br><br>
		</div>

		<div>
		<button name="add" style="float: center;">login</button>
		</div>
	</form>
	</center>
</body>
</html>