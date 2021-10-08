<!DOCTYPE html>
<html>
<body>
<?php 
	$x=5;
	$y=10;
	$z='+';

	switch ($z) {
		case '+':
			echo $x+$y;
			break;
		case '-':
			echo $y+$x;
			break;
		case '*':
			echo $x*$y;
			break;
		case '/':
			echo $y/$x;
			break;
		default:
		echo "Invalid";
	}
echo "<br><br>";
	//voting Ex
	$age=24;
	if ($age>=18) {
		echo "Eligible";
	}else if($age<18){
		echo "Not eligible";
	}else{
		echo "Invalid";
	}
 ?>
</body>
</html>