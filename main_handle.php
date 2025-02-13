<?php 
$con=new mysqli("localhost","root","","hospital");

$query= "SELECT * FROM uploading";
$result=$con->query($query);
?>