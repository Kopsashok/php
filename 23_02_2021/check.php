<?php 
include_once 'connection.php';
if(isset($_POST['submit'])){
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];

	$sql="select * from login where UserName='$UserName' and Password='$Password'";

	$result=mysqli_query($con,$sql);

	if($result){
		while($row=mysqli_fetch_array($result)){
			if($row['Type']=="admin"){
				header("Location:admin.php");
			}
			else if($row['Type']=="user"){
				header("Location:user.php");
			}
			else{
				echo "Invalid ";
			}
		}
	}
}
 ?>