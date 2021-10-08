<!DOCTYPE html>
<html>
<body>
<?php 
$x=1;
	do{
		echo $x ,", ";
		$x++;
	}
	while($x<=5);

	echo "<br><h3>Factorial</h3>";
	$fact=1;$f=1;
	do{
		$fact=$fact*$f;;
		$f++;
	}
	while($f<=5);
	echo "factorial of 5 is: $fact";
 ?>
</body>
</html>