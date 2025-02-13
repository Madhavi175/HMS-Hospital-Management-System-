<?php
$id=$_GET['id'];
$con=new mysqli("localhost","root","","hospital");
$query="DELETE FROM  pateintform WHERE id='$id'";
if($con->query($query))
{
	header('location:admin dashboard.php');
}
else
{
	echo mysqli_error($con);
}

?>