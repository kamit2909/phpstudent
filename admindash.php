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

<div class="admintitle">


	<a href="addstudent.php">Insert student</a>
	<a href="deletestudent.php">Delete Student</a>
	<a href="UpdateStudent.php">Update Student</a>
	<br>
	<a href="logout.php">LOGOUT</a>
</div>
</body>
</html>