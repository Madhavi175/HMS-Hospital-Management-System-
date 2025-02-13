<?php
$con=new mysqli("localhost","root","","hospital");

if (isset($_POST['submit']))
{   
	$staff_name=$_POST['staff_name'];
	$age=$_POST['age'];
	$bloodgrp=$_POST['bloodgrp'];
	$gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $address=$_POST['address'];
    $city=$_POST['city'];
	$dateofjoin=$_POST['dateofjoin'];
	$desig=$_POST['desig'];
	
	$idproof=$_POST['idproof'];
	
	 $query="INSERT INTO uploading(staff_name,age,bloodgrp,gender,dateofbirth,address,city,dateofjoin,desig,idproof) VALUES('$staff_name','$age','$bloodgrp','$gender','$dateofbirth','$address','$city','$dateofjoin','$desig','$idproof')";
	 if ($con->query($query))
	  {
	 	header('location:admin dashboard.php');
	 }

	 else{

	 	echo mysqli_error($con);
	 }
}

?>