<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$age=-19;
		if($age<0){
			echo "Your input is incorrect.......!!";
		}
		else if($age<18){
			echo "You are not eligible to vote.";
		}else{
			echo "You are eligible to vote";
		}
	?>
</body>
</html>