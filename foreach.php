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
	$i=1;
	while($i<=10)
	{
		
		if($i==6)
			continue;
		echo "$i<br>";
		$i++;
	}
 ?>
</body>
</html>