<?php
$con=new mysqli("localhost","root","","hospital");
if(isset($_POST['submit']))
{
$date1=$_POST['date1'];
$Receiptno=$_POST['Receiptno'];
$pateint_name=$_POST['pateint_name'];
$address=$_POST['address'];
$contno=$_POST['contno'];
$admit_dt=$_POST['admit_dt'];
$discharge_dt=$_POST['discharge_dt'];
$bedno=$_POST['bedno'];
$paymod=$_POST['paymod'];
$discrip=$_POST['discrip'];
$amt=$_POST['amt'];

$sql="INSERT INTO bill (date1,Receiptno,pateint_name,address,contno,admit_dt,discharge_dt,bedno,paymod,discrip,amt) VALUES('$date1','$Receiptno','$pateint_name','$address','$contno','$admit_dt','$discharge_dt','$bedno','$paymod','$discrip','$amt')";

if($con->query($sql))
{
    echo "<script>alert('Doctor info added Successfully');</script>";
    header('location: view.php');
 }
else{
    header('location:admin dashboard.php');
   }
}

?>