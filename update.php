<?php

$Username=$_POST['Username'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","hospital");
$query="UPDATE pateintform SET Username='$Username',address='$address',city='$city',gender='$gender',email='$email',password='$password' WHERE Username='$Username'";
if ($con->query($query)) 
{
	header("userdashboard.php");
}
else{
	echo"mysqli_error($con)";
}

?>