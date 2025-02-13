<?php
$con=mysqli_connect("localhost","root","","hospital");
if (isset($_POST['submit'])) {
	$Username=$_POST['Username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="select * from hospital where Username='$Username'AND password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header('Location:admin dashboard.php');
	}

}
?>