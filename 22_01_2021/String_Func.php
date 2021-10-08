<!DOCTYPE html>
<html>
<body>
<?php 
	echo strlen("hello World!");//String length
	echo "<br>";
	echo str_word_count("Hello World");//String Word Count
	echo "<br>";
	if (str_word_count("Hello World")>1)
		echo "Hi";

	echo "<br>";
	echo strrev("Hello World");//String Reverse
	echo "<br>";
	echo strpos("Hello World","World");//string Position
 ?>
</body>
</html>