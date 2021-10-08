<!DOCTYPE html>
<html>
<body>
	<?php 
	$x=5;
	//globalScope
	echo "<h1>global Scope</h1>";
	function myTest()
	{
		global $x;
		echo "<p> Variable x inside function is:$x</p>";
	}
	myTest();
	echo "<p> Variable x outside function is:$x</p>";
	//localScope
	echo "<h1>local Scope</h1>";
	function myTest1()
	{
		$y=5;
		echo "<p> Variable x inside function is:$y</p>";
	}
	myTest1();
	//echo "<p> Variable x outside function is:$y</p>";

	//staticscope
	echo "<h1>Static Scope</h1>";
	
	function myTest2()
	{
		static $z=0;
		echo "<p> Variable x inside function is:$z</p>";
		$z++;
	}
	myTest2();
	myTest2();
	myTest2();
	//echo "<p> Variable x outside function is:$z</p>";
	?>
</body>
</html>