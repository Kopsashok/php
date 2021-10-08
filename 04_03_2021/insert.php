<?php 
include_once 'connection.php';

$name=$_POST['name'];
$nic=$_POST['nic'];
$age=$_POST['age'];
$AddDate=$_POST['Addate'];
$add=$_POST['address'];
$phNo=$_POST['phone'];

$sql="insert into patient(Name,NIC,Age,AdmissionDate,Address,PhoneNo) values ('$name','$nic','$age','$AddDate','$add','$phNo')";
$result=mysqli_query($con,$sql);

if($result){
	echo "Successfuly Inserted!!";
}else{
	echo "Not Inserted!!";
}
?>