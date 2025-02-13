<?php
$id=$_POST['id'];
$doctorname=$_POST['doctorname'];
$specilization=$_POST['specilization'];
$contactno=$_POST['contactno'];
$consultingfees=$_POST['consultingfees'];
$email=$_POST['email'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","hospital");
$query="UPDATE adddoctor SET specilization='$specilization',doctorname='$doctorname',contactno='$contactno',consultingfees='$consultingfees',email='$email',password='$password' WHERE id='$id'";
if ($con->query($query)) 
{
	header('location:admin dashboard.php');
}
else{
	echo"mysqli_error($con)";
}

?>