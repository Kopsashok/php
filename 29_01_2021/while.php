<!DOCTYPE html>
<html>
<body>
<?php 
$num=0;
echo "Multiplication table:<br><br>";
	while($num<=10)
	{
		echo "The product of 10*$num= " , (10*$num), "<br>";
		$num++;
	}

echo "<br><br>Division table:<br><br>";
$i=1;
echo "<table border=1px width=400px>";
echo "<tr> <th> </th>";
	while ($i<=10)
		{
			echo "<th>$i</th>";
			$i++;
		}
		echo "</tr>";

$i=1;
	while ($i<=10) {
		echo "<tr><th>$i</th>";
		$j=1;
		while ($j<=10) {
			$result=$i/$j;
			printf ("<td> %.3f </td>",$result);
			$j++;
		}
		echo "</tr>";
		$i++;
	}
echo "</table>";
 ?>
</body>
</html>