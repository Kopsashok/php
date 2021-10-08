<!DOCTYPE html>
<html>
<body>
	<?php
		$hour=date("H");
		if($hour<10){
			echo "Have a good morning!";
		}else if($hour<20){
			echo "Have a good day!";
		}else{
			echo "Have a good night!";
		}
	?>
</body>
</html>