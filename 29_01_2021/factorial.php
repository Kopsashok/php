<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$num=5;
		$fact=1;
		for($i=1;$i<=$num;$i++){
			$fact=$fact*$i;
		}

		echo "Factorial : ",$fact;
	?>
</body>
</html>