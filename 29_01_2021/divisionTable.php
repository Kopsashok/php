<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
	<?php
		$num=10;
		$i=1;
		
		echo "<tr>";
		echo "<th></th>";
		while($i<=10){
			echo "<th>$i</th>";
			$i++;
		}
		echo "</tr>";

		$j=1;
		$l=1;
		//echo "<tr>";
		while($j<=10){
			echo "<tr><th>$j</th>";
			
			while($l<=10){
				$result=$j/$l;
				 printf("<td>%.3f</td>",$result);
				$l++;
			}
			echo "</tr>";
			$j++;
		}
		
	?>
</table>
</body>
</html>