<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		form{
			background-color: lightblue;
			height: 300px;
			width: 100%;
			padding: 20px;
			word-spacing: 20px;
		}
	</style>
</head>
<body>
	<h1 align="center">Welcome to our page..</h1>
	<center>
	<form method="POST" action="check.php">
		<br><br><label>UserName: </label>
		<input type="text" name="UserName" placeholder="Type Username"><br><br>

		<label>Password: </label>
		<input type="password" name="Password" placeholder="Type Password"><br><br>

		<br><br><button name="submit">submit</button>
	</form></center>
</body>
</html>