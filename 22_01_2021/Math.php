<!DOCTYPE html>
<html>
<body>
<?php 
	echo (pi());//pi value
	echo "<br>";

	echo "min is:" . (min(2,6,1.78,-45,34));
	echo "<br>max is:" .max(2,6,1.78,-45,34);

	echo "<br><br>";
	echo "absolute (+)ve No: " .abs(-4.1);

	echo "<br><br>";
	echo "Sqrt of 144: " .sqrt(144);

	echo "<br><br>";
	echo "round value of 2.4: " .round(2.4);

	echo "<br><br>";
	echo "Random number: " .rand(0,100);

	//constant
	echo "<br><br>";
	define("GREETING", "Welcome to vavuniya campus!!");//case-sensitive
	echo GREETING;

	echo "<br><br>";
	define("GREET", "Welcome to W3School!!",true);//case-insensitive
	echo Greet;

	//array_constatnt
	echo "<br><br>";
	define("cars", array["Alfa Romeo","BMW","Lombohini","Toyato"]);
	echo cars[2];//work in PHP7
 ?>
</body>
</html>