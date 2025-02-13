<?php 
$con=new mysqli("localhost","root","","hospital");

$query= "SELECT * FROM adddoctor";
$result=$con->query($query);
?>