


<?php
$server="localhost";
$username="root";
$password="";
$db="hospital";

$conn=mysqli_connect($server,$username,$password,$db);
if($conn)
{
  echo "connect";
}
else
{
  echo "not connect";
}

$select="SELECT * FROM adddoctor";
$query=mysqli_query($conn,$select);
$data=mysqli_fetch_assoc($query);

  $oldpassword= $data['password'];

  if (isset($_POST['submit'])) 
  {
    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];

    if ($current == $oldpassword)
     {
       if ($new == $confirm) 
       {
          $update ="update adddoctor set password ='$new' where Username = '$Username";
          $query1 = mysqli_query($conn,$update);

          if ($query1) 
          {
            echo "Your password changed successfully";
          }
          else
          {
            echo "error";
          }
       }

       else
       {
        echo "your both password is not match";
       }
    }
    else
    {
      echo "you entered wrong password";
    }

  }
?>




<?php
session_start();


$doctorname= $_SESSION['doctorname'];

if ($doctorname)

{

//user is logged in

    if ($_POST['submit'])
    {
    //check fields
    
    $current = md5($_POST['current']);
    $new = md5($_POST['new']);
    $confirm= md5($_POST['confirm']);
    
    //check pass against db
    $con=new mysqli("localhost","root","","hospital");

    $query="SELECT password FROM adddoctor WHERE doctorname='".$doctorname."'";
    $recent = mysqli_query($con, $query);
  
    $row = mysqli_fetch_assoc($recent);
    
    $oldpassworddb = $row['password'];
    
    if ($current==$oldpassworddb)
    { 
    if ($new==$confirm)
    {
     if (strlen($new)>25||strlen($new)<6)   
    {
     echo "Password must be betwwen 6 & 25";
    }

    else
    {
    
     $querychange = mysql_query(" UPDATE adddoctor SET password='$new' WHERE doctorname='.$doctorname.'");
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
