<?php
$con=new mysqli("localhost","root","","hospital");
echo "connection successful";
if (isset($_POST['submit']))
{
  $specilization=$_POST['specilization'];
  $doctorname=$_POST['doctorname'];
  $contactno=$_POST['contactno'];
  $consultingfees=$_POST['consultingfees'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query="INSERT INTO adddoctor(specilization,doctorname,contactno,consultingfees,email,password) VALUES('$specilization','$doctorname','$contactno','$consultingfees','$email','$password')";
  if($con->query($query))
  {
    echo "<script>alert('Doctor info added Successfully');</script>";
   header('location:admin dashboard.php');

  }
  else{
    header('location:index.php');
  }
}
?>