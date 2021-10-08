<!DOCTYPE html>
<html>
<body>
<?php 
	echo "<h3>For each</h3>";
	$number = array(3,5,7,9,11);
	foreach ($number as $val) {
		echo "$val<br>";
	}

	echo "<br><h3>Continue</h3>";
	
	for($i=1;$i<=10;$i++)
	{
		if($i==6)
			continue;
		echo "$i<br>";
		
	}
 ?>
</body>
</html>