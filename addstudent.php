<?php

session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location: ../login.php');
}


?>

<?php
include('header.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
	<table>
		
		<tr>
			<td>Roll NO</td> <td><input type="text" name="rollno" placeholder="Enter Roll No" required></td>
		</tr>


		<tr>
			<td>Full Name</td> <td><input type="text" name="name" placeholder="Enter Name" required></td>
		</tr>


		<tr>
			<td>City</td> <td><input type="text" name="city" placeholder="Enter City" required></td>
		</tr>


		<tr>
			<td>PArents Contact No</td> <td><input type="text" name="pcont" placeholder="Enter parents contact no" required></td>
		</tr>


		<tr>
			<td>standard</td> <td><input type="number" name="standard" placeholder="Enter standard" required></td>
		</tr>

		

		<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>




	</table>
	

</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcont = $_POST['pcont'];
	$standard = $_POST['standard'];


$qry = " INSERT INTO student( rollno, name, city, pcont,standard) VALUES ('$rollno','$name','$city','$pcont','$standard') ";

$run = mysqli_query($con,$qry);

if($run == true){
	?>

	<script>
				alert('Data Inserted Successfuly');
	</script>

	<?php
}
}
?>
