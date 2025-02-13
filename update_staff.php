<?php
   
    $staff_name=$_POST['staff_name'];
	$age=$_POST['age'];
	$bloodgrp=$_POST['bloodgrp'];
	$gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $address=$_POST['address'];
    $city=$_POST['city'];
	$dateofjoin=$_POST['dateofjoin'];
	$desig=$_POST['desig'];
	$salary=$_POST['salary'];
	$idproof=$_POST['idproof'];
    $con=new mysqli("localhost","root","","hospital");
    $query="UPDATE uploading SET staff_name='$staff_name',age='$age',bloodgrp='$bloodgrp',gender='$gender',dateofbirth='$dateofbirth',address='$address',city='$city',dateofjoin='$dateofjoin',desig='$desig',salary='$salary',idproof='$idproof' WHERE staff_name='$staff_name'";
		if ($con->query($query)) 
		{
			header('location:admin dashboard.php');
		}
		else{
			echo"mysqli_error($con)";
		}

      ?>