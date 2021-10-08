<!DOCTYPE html>
<html>
<body>
<table width="50%" border="1" height="500">
<?php 
echo "chess borad<br><br>";

	for($j=0;$j<8;$j++)
	{
		echo "<tr>";
		for($k=0;$k<8;$k++)
		{
			if(($j+$k)%2==0){
				echo "<td style=background-color:white;></td>";
			}
			else{
				echo "<td style=background-color:black;></td>";
			}
		}
		echo "</tr>";
	}
 ?>
 </table>
</body>
</html>