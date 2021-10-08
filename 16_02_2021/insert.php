<?php
	include 'db.php';
	
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$phonenumber=$_POST['phonenumber'];
	$sql="insert into teacher(name,subject,phoneno) values ('$name','$subject','$phonenumber')";
	$result=mysqli_query($con,$sql);

	if($result){
		echo "Successfully Inserted";
	}else{
		echo "Not Inserted";
	}
?>