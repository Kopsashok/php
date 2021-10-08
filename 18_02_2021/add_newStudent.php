<?php
include_once 'connect.php';

	$Name=$_POST['name'];
	$Grade=$_POST['grade'];
	$Email=$_POST['email'];
	$NIC=$_POST['NIC'];

	$sql="insert into student (Name,Grade,Email,NIC) values ('$Name','$Grade','$Email','$NIC')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
		echo "Successfully inserted!!";
	}else{
		echo "Check the code!!";
	}
?>
