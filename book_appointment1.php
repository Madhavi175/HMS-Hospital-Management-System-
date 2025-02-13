<?php
$Username=$_SESSION["Username"];
echo "$Username:Welcome!";
$con=new mysqli("localhost","root","","hospital");
echo "connected";
if(isset($_POST['submit']))
{
$pateint_form=$_POST['pateint_form'];
$specialization=$_POST['specialization'];
$doctor=$_POST['doctor'];
$consultingfees=$_POST['consultingfees'];
$appdate=$_POST['appdate'];
$apptime=$_POST['apptime'];
$query="INSERT INTO appointment(pateint_form,specialization,doctor,consultingfees,appdate,apptime ) VALUES ('$pateint_form','$specialization','$doctor','$consultingfees','$appdate','$apptime')";
if($con->query($query))
{
    echo "<script>alert('Doctor info added Successfully');</script>";
    header('location: admin dashboard.php');
 }
else{
    header('location:index.php');
   }
}
 ?>