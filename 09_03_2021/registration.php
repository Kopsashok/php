<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
</head>
<body>
		<?php 
			$nameErr=$emailErr=$genderErr=$websiteErr="";
			$name=$email=$gender=$website=$comment="";

			if($_SERVER["REQUEST_METHOD"]=="POST"){
				if(empty($_POST["name"])){
					$nameErr="Name is required";
				}else{
					$name=test_input($_POST["name"]);
				}

				if(empty($_POST["email"])){
					$emailErr="Email is required";
				}else{
					$email=test_input($_POST["email"]);

					if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
						$emailErr="Invalid Email format";
					}
				}

				if(empty($_POST["time"])){
					$websiteErr="Time is required";
				}else{
					$website=test_input($_POST["time"]);
				}

				if(empty($_POST["comment"])){
					$comment="";
				}else{
					$comment=test_input($_POST["comment"]);
				}

				if(empty($_POST["gender"])){
					$genderErr="Gender is required";
				}else{
					$gender=test_input($_POST["gender"]);
				}
			}

			function test_input($data){
					$data=trim($data);  //remove spaces
					$data=stripcslashes($data);// remove backslashes
					$data=htmlspecialchars($data);//get the extract user input for html tag
					return $data;
			}
		?>
		<h1>Registration Form</h1>
		<p><span class="error">* required field</span></p>
		
		<form method="POST" action="<?php
		 	echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
		<tr>
			<td><label>Name:</label></td>
			<td colspan="2"><input type="text" name="name"><span class="error">*<?php echo $nameErr; ?></span></td>
		</tr>

		<tr>
			<td><label>Email:</label></td>
			<td colspan="2"><input type="email" name="email"><span class="error">*<?php echo $emailErr; ?></span></td>
		</tr>

		<tr>
			<td><label>Time:</label></td>
			<td colspan="2"><input type="time" name="time"><span class="error">*<?php echo $websiteErr; ?></span></td>
		</tr>

		<tr>
			<td><label>Classes:</label></td>
			<td colspan="2"><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>

        <tr>
			<td><label>Gender:</label></td>
			<td><input type="radio" name="gender" value="female">Female</td>
			<td><input type="radio" name="gender" value="male">Male<span class="error">*<?php echo $genderErr; ?></span></td>
        </tr>
        <tr>
			<td><button>Submit</button></td>
		</tr>
		</table>
		</form>
		<?php
			echo "<h1>Your given details are</h1>";
			echo "<br>";

			echo $name;
			echo "<br>";

			echo $email;
			echo "<br>";

			echo $website;
			echo "<br>";

			echo $comment;
			echo "<br>";

			echo $gender;
		?>


		
</body>
</html>