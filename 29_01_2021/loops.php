<!DOCTYPE html>
<html>
<body>
<table>
<?php 
	$f=1;
	for($i=1;$i<=5;$i++)
	{
		$f=$f*$i;
	}
		echo "factorial is: $f <br><br>";

	echo "chess borad<br><br>";

echo "<tr>";
	for($j=0;$j<8;$j++)
	{
		for($k=0;$k<8;$k++)
		{
			if(($i+$k)%2==0)
				echo "<td style=background-color:white;></td>";
		}
	}
	echo "</tr>";
 ?>
 </table>
</body>
</html>