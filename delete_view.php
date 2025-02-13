<?php
$id=$_GET['id'];
$con=new mysqli("localhost","root","","hospital");
$query="DELETE FROM  bill WHERE id='$id'";
if($con->query($query))
{
	header('location:view.php');
}
else
{
	echo mysqli_error($con);
}

?>