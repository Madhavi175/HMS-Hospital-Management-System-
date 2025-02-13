<?php
session_start();


$Username=$_SESSION["Username"];
echo "$Username:Welcome!";
$conn = mysqli_connect("localhost", "root", "", "hospital") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from pateintform WHERE Username='" . $_SESSION["Username"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["password"] == $row["password"]) {
        mysqli_query($conn, "UPDATE pateintform set password='" . $_POST["newPassword"] . "' WHERE Username='" . $_SESSION["Username"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hello, world!</title>
    </head>
    <style>
body {
 /* background-image: url('images/banner4.jpg');*/
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  background-color:  #4d79ff;
}
</style>
   <body>
      <div class="container" >
       <h2 style="text-align:center;margin-top:40px;">HMS|Change Password</h2>
         
         <div class="Pateintregistration" >
        <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
          <div>
          <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
          <table border="0" cellpadding="10" cellspacing="0" width="400"  align="center" class="tblSaveForm" style="padding:10px;">
          <tr class="tableheader">
          <td colspan="2" style="text-align: center;font-style:bold">Change Password</td>
          </tr>
          <tr>
          <td ><label>Current Password</label></td>
          <td ><input type="password" name="password" class="txtField" required="required" /><span id="currentPassword"  class="required"></span></td>
          </tr>
          <tr>
          <td><label>New Password</label></td>
          <td><input type="password" name="newPassword" class="txtField"  required="required" /><span id="newPassword" class="required"></span></td>
          </tr>
          <tr>
          <td><label>Confirm Password</label></td>
          <td><input type="password" name="confirmPassword" class="txtField"  required="required" /><span id="confirmPassword" class="required"></span></td>
          </tr>
          <tr>
          <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit" style="background-color:skyblue;margin-left:160px;"></td>
          </tr>
          </table>
          </div>
</form>
       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
function validatePassword() {

  alert("password changed successfully");
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("password").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}   
return output;
}
</script>
  </body>
</html>