<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table width="400px" border="1px" cellspacing="0px" cellpadding="0px">
	<?php
		for($i=1;$i<=8;$i++){
			echo "<tr>";
			for($j=1;$j<=8;$j++){
				$total=$i+$j;
				if($total%2==0){
					echo "<td height=35px width=35px bgcolor=#FFFFFF></td>";
				}else{
					echo "<td height=35px width=35px bgcolor=#000000></td>";
				}
			}

		}
		echo "</tr>";
	?>
	</table>
</body>
</html>