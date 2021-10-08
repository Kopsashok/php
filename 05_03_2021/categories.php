<?php 
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
	<style>
		.drop_dwn{
			padding: 5px;
			font-size: 16px;
			background-color: blue;
			color: white;
		}
		.cont{
			display: none;
			position: absolute;
			background-color: grey;
			min-width: 100px;
			z-index: -1;
		}
		.drop{
			position: relative;
			display: inline-block;
		}
		.drop:hover .cont{
			display: block;
		}
		a{
			text-decoration: none;
			padding: 10px 16px;
			color: white;
			display: block;
		}
	</style>
</head>
<body>
	<h1>Filter Categories</h1>
	<div class="drop">
	<button class="drop_dwn">Categories</button>
	<div class="cont">
		<?php 
			$sql="select Id,Brand from taxi group by Brand";
			$result=mysqli_query($con,$sql);

			if($result){
				while($row=mysqli_fetch_array($result)){
					echo "<a href='filter.php?Id=$row[Id]'>" .$row['Brand']. "</a><br>";
				}
			}
		?>
	</div>
	</div>
</body>
</html>