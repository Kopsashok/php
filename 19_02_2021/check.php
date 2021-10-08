<?php 
include_once 'connection.php';
	$un=$_POST['user'];
	$pw=$_POST['pw'];

	$sql="select * from admin";
	//$sql=

	$result=mysqli_query($con,$sql);

	if($result)
	{
		while ($row=mysqli_fetch_array($result)) {
			if($un==$row['UserName'] && $pw==$row['Password'])
			{
				header("refresh:1; url=student.php");
				
				echo '<script>alert("You are successfully logged in..:")</script>';
				break;
			}
			else{
				echo '<script>alert("Retry...:(")</script>';
				header("refresh:1; url=login.php");
			}
		}
	}
 ?>