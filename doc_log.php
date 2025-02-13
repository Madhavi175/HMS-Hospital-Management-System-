<?php
$doctorname=$_POST['doctorname'];
$password=$_POST['password'];
$con=new mysqli("localhost","root","","hospital");
$query="SELECT * FROM adddoctor WHERE doctorname='$doctorname' AND password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0)
{
  session_start();
  $_SESSION['doctorname']=$doctorname;
  header('location:doctordashboard.php');
  
}
else
{
  header('location:doctordashboard.php');
}


?>