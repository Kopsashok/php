<!DOCTYPE html>
<html>
<body>
<?php 
	function writemessage()
	{
		echo "You are really a nice person, Have a nice day:)";
	}
	writemessage();

	echo "<br><h3>Add function</h3>";
	function addFunction($a,$b)
	{
		echo  $a+$b;
	}
	addFunction(4,6);

	echo "<br><h3>Area</h3>";
	function area($length=2,$width=4)
	{
		echo  $length*$width;
	}
	area();

	echo "<br><h3>Factorial-recursive function</h3>";
	function factorial($a)
	{
		if($a<2){
			return 1;
		}else{
			return($a*(factorial($a-1)));
		}
	}
	echo factorial(5);

	echo "<br><h3>Eligible for vote or not</h3>";
	function vote($age,$name)
	{
		echo $name ,": ";
		if($age>=18){
			echo "Eligible";
		}else{
			echo "Not eligible";
		}
	}
	vote(24,"Kopiny");

	echo "<br><h3>Reverse String</h3>";
	function reverse($msg)
	{
		if(strlen($msg)==1)
			return $msg;
		else
			$n=(strlen($msg));
		$n--;
			return reverse(substr($msg,1,$n)) . subStr($msg,0,1);
	}
	print_r(reverse("goodgirl"));
 ?>
</body>
</html>