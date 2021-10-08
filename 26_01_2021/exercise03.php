<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$unit =300;

		if($unit<=50){
			$price=3.50*$unit;
		}else if($unit<=150){
			$price=(3.50*50)+4*($unit-50);
		}else if($unit<=250){
			$price=(3.50*50)+4*100+5.20*($unit-150);
		}else{
			$price=(3.50*50)+4*100+5.20*100+6.50*($unit-250);
		}
		echo "Your bill amount is Rs.".$price;
	?>
</body>
</html>