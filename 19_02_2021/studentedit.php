<?php 
	include_once 'connect.php';
	$ID=$_GET['ID'];
	$sql="Select * from student where ID=$ID";
	$result=mysqli_query($con,$sql);
	if($result){
		while($row=mysqli_fetch_array($result)){
			$name=$row['Name'];
			$grade=$row['Grade'];
			$mail=$row['Email'];
			$nic=$row['NIC'];
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>studentEdit</title>
 </head>
 <body>
 	<h1 style="color: blue;">Edit Student Details</h1>
 	<center>
 		<form method="post" action="<?php $SERVER['PHP_SELF'] ?>">
 			<div><label>ID</label>
 			<input type="number" name="id" value="<?php echo $ID ?>"></div><br>

 			<div><label>Name</label>
 			<input type="text" name="name" value="<?php echo $name ?>"></div><br>

 			<div><label>Grade</label>
 			<input type="text" name="grade" value="<?php echo $grade ?>"></div><br>

 			<div><label>Email</label>
 			<input type="text" name="mail" value="<?php echo $mail ?>"></div><br>

 			<div><label>NIC</label>
 			<input type="text" name="nic" value="<?php echo $nic ?>"></div><br>

 			<div><button name="upload">Upload</button>
 		</form>
 	</center>
 </body>
 </html>
 <?php 
	if(isset($_POST['upload'])){
		$name=$_POST['name'];
		$grade=$_POST['grade'];
		$mail=$_POST['mail'];
		$nic=$_POST['nic'];

		$sql="update student set Name=$name , Grade=$grade , Email=$mail , NIC=$nic where ID=$id";
		$result=mysqli_query($con,$sql);

		if($result)
		{
			echo "<script>alert('successfully updated')</script>";
			header("refresh:1 url=student.php");
		}
	}
  ?>