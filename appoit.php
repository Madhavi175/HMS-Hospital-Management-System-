<?php 



$con=new mysqli("localhost","root","","hospital");

$query="SELECT * FROM appointment";
$result=$con->query($query);
?>