<?php 
$con=new mysqli("localhost","root","","hospital");

$query="SELECT * FROM pateintform";
$result=$con->query($query);
?>