<!DOCTYPE html>
<html>
<body>
<?php 
	$units=300;
	if ($units<=50) {
		echo "Rs." .$units*3.50;
	}else if ($units>50 && $units<=150) {
		echo "Rs." .(50*3.50+($units-50)*4.00);
	}else if ($units>150 && $units<=250) {
		echo "Rs." .(50*3.50+100*4.00+($units-150)*5.20);
	}else{
		echo "Rs." .(50*3.50+100*4.00+100*5.20+($units-250)*6.50);
	}
 ?>
</body>
</html>