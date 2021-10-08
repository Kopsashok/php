<!DOCTYPE html>
<html>
<body>
<?php 
	
echo "<h2>recursion function</h2>";
//$num=10;
	function rec($num)
	{
		if($num==1)
		{
			return 1;
		}
		else{
			return $num .", ". rec($num-1);
		}
	}
	echo rec(10);

echo "<h2>prime numbers</h2>";

$num=100;
echo "1";
	for($i=2;$i<=$num;$i++)
	{
		for($j=2;$j<=$i;$j++)
		{
			if($i%$j==0){
				break;
			}
		}
		if($i==$j)
			echo ", $i";
	}

	echo "<h2>pattern</h2>";

	for($i=1;$i<=5;$i++)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo "*";
		}
		echo "<br>";
	}

	for($i=5;$i>0;$i--)
	{
		for($j=0;$j<=$i-1;$j++)
		{
			echo "*";
		}
		echo "<br>";
	}

	echo "<h2>mul_table1</h2>";
	echo "<table cellspacing=0px cellpadding=3px border=1>";
	for($i=1;$i<=5;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=5;$j++)
		{
			echo "<td>$i * $j = ", $i*$j , "</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

	echo "<h2>mul_table2</h2>";
	echo "<table cellspacing=0px cellpadding=3px border=1>";
	for($i=1;$i<=10;$i++)
	{
		echo "<tr>";
		for($j=1;$j<=10;$j++)
		{
			echo "<td>",$i*$j,"</td>";
		}
		echo "</tr>";
	}

	echo "</table>";

	echo "<h2>print pattern E</h2>";

$val=7;
	for($i=1;$i<=$val;$i++)
	{
		for($j=1;$j<=$val-1;$j++)
		{
			if($i==1 || $i==ceil($val/2) ||$i==$val){
				echo "*";
			}else if ($j==1) {
				echo "*";
			}else{
				echo " ";
			}
		}
		echo "<br>";
	}
 ?>
</body>
</html>