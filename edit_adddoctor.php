<?php
$defaultID=0;
$id=isset($_GET['id'])?$_GET['id'] : $defaultID;
$con=new mysqli("localhost","root","","hospital");

$query="SELECT * FROM adddoctor where id='".$id."'";
$result=$con->query($query);
$data=$result->fetch_assoc();

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
    <script type="text/javascript">
  function validation()                                    
    {   
    var name = document.forms["myprofile"]["name"]; 
    var city=document.forms["myprofile"]["city"];              
    var email = document.forms["myprofile"]["email"];      
    var address = document.forms["myprofile"]["address"];
    var gender=document.forms["myprofile"]["gender"] 
    
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
        return false; 
    } 
      if (city.value == "")                                   
    { 
        window.alert("Please enter city"); 
        city.focus(); 
        return false; 
    }
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }
  

    if ( ( form.gender[0].checked == false ) && ( form.gender[1].checked == false ) )
    {
      window.alert("please enter your gender:Male or female");
      return false();
    }
   
    return true; 
}
    </script>
   <style>
body {
  background-image: url('images/banner5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    </head>
   <body>
      <div class="container" >
       <h2 style="text-align:center;margin-top:40px;color:white;">HMS|Edit Profile</h2>
         
         <div class="Pateintregistration" >
         <form action="updatedoctor.php" method="POST">
          <div class="form-group">
            <input name="id" type="hidden"  value="<?php echo $data['id'];?>">
              </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" name="doc_special" >Doctor specialization</label>
                      
                        <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Username" name="specilization" value="<?php echo $data['specilization']?>">
                    </div>
                       <div class="form-group">
                      <label for="formGroupExampleInput">Doctor Name</label>
                    
                     
                        <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Username" name="doctorname" value="<?php echo $data['doctorname']?>">
                       
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Contact Number</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Contact Number" name="contactno" value="<?php echo $data['contactno']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Consulting Fees</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Consulting Fees" name="consultingfees" value="<?php echo $data['consultingfees']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Doctor Email</label>
                      <input type="email" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="email" name="email" value="<?php echo $data['email']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Password</label>
                      <input type="password" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="password" name="password" value="<?php echo $data['password']?>">
                    </div>
                     <div class="form-group">
                      <label for="formGroupExampleInput"> Confirm Password</label>
                      <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Confirm password" name="confirm_password">
                    </div>


                     <div class="button">
                      <center>
                         <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit form</button>
                         </center>
                     </div>
               </form>
       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>