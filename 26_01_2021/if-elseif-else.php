<!DOCTYPE html>
<html>
<body>
<?php 	
	$hours=date("H");
		if($hours<10)
			echo "Have a good morning :)";
		else if($hours<20)
			echo "Have a good day :)";
		else
			echo "Have a good noght :)";
 ?>
</body>
</html>