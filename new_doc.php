<?php
session_start();


$doctorname= $_SESSION['doctorname'];

if ($doctorname)

{

//user is logged in

    if ($_POST['submit'])
    {
    //check fields
    $doctorname=md5($_POST['doctorname']);
    $current = md5($_POST['current']);
    $new = md5($_POST['new']);
    $confirm= md5($_POST['confirm']);
    
    //check pass against db
    $con=new mysqli("localhost","root","","hospital");

    $query="SELECT password FROM adddoctor WHERE doctorname='$doctorname'";
    $recent = mysqli_query($con, $query);
  
    $row = mysqli_fetch_assoc($recent);
    
    $oldpass = $row['password'];

    if ($current==$oldpass)
    { 
    if ($new==$confirm)
    {
     if (strlen($new)>25||strlen($new)<6)   
    {
     echo "Password must be betwwen 6 & 25";
    }

    else
    {
    
     $querychange = mysql_query(" UPDATE adddoctor SET password='$new' WHERE doctorname=".$doctorname."");
      session_destroy();
        die("Your pass has benn changed.<a href='index.php'>Return</a> to the main page");
    }
    }
    else
        die("New Pass don't match");
    }
    else
      die("Old Pass doesn't match");
    }
    
    else
    {
    echo "error";
   
    }   

}

    else
       die("You must be logged in to change your password");



?>
