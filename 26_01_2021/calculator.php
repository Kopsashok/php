<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$num1=5;
		$num2=4;
		$operator="*";

		switch($operator){
			case "+":
				$ans=$num1+$num2;
				break;
			case "-":
				$ans=$num1-$num2;
				break;
			case "*":
				$ans=$num1*$num2;
				break;
			case "/":
				$ans=$num1/$num2;
				break;
			default:
				echo "Your operator is neither +,-,* nor /";
		}
		echo "Your result is ".$ans;
	?>
</body>
</html>