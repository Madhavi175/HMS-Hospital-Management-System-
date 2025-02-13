<?php
$Username=$_POST['Username'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","hospital");
$query="SELECT * FROM pateintform WHERE Username='$Username' AND password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
	session_start();
	$_SESSION['Username']="$Username";
	header('location:userdashboard.php');
	echo "WELCOME!";
	
}
else
{
	header('location:Pateintregistration.php');
}


?>





 