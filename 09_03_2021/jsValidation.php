<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function validateForm(){
			var x=document.forms["myForm"]["fname"].value;
			var y=document.forms["myForm"]["age"].value;
			if(x=="" && y==""){
				alert("Name and Age must be filled out.");
				return false;
			}else if(x==""){
				alert("Name must be filled out.");
				return false;
			}else if(y==""){
				alert("Age must be filled out.");
				return false;
			}else{
				return false;
			}
			
		}
	</script>
</head>
<body>
<form name="myForm" action="#" onsubmit="return validateForm()" method="POST">
	<label>Name:</label>
	<input type="text" name="fname"><br><br>

	<label>Age:</label>
	<input type="text" name="age">

	<input type="submit" value="Submit">

</form>
	
</body>
</html>