<?php
$defaultID=7;
$id=isset($_GET['id'])?$_GET['id'] : $defaultID;
$con=new mysqli("localhost","root","","hospital");
echo "connected";
$query="SELECT * FROM uploading where id='".$id."'";
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
    <style>
body {
  background-image: url('images/edit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
     </head>
   <body>
      <div class="container" >
       <h2 style="text-align:center;margin-top:40px;">HMS|Edit Profile</h2>
                 <input name="id" type="hidden"  value="<?php echo $data['id'];?>">
         <div class="appoint">
         
                   <form action="update_staff.php" method="POST" onsubmit="return confirm('confirm to submit?')" enctype="multipart/form-data">
                   
                       <div class="form-group">
                      <label for="formGroupExampleInput">Staff Name</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Staff Name" name="staff_name"  value="<?php echo $data['staff_name']?>">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">Age</label>
                      <input type="number"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Age" name="age" value="<?php echo $data['age']?>">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">Blood Group</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Bood Group" name="bloodgrp" value="<?php echo $data['bloodgrp']?>">
                    </div>
                   <div class="form-group">
                <label class="block">
                  Gender
                </label>
                <div class="clip-radio radio-primary">
                  <input type="radio" id="rg-female" name="gender" value="female" value="<?php echo $data['gender']?>" >
                  <label for="rg-female">
                    Female
                  </label>
                  <input type="radio" id="rg-male" name="gender" value="male" value="<?php echo $data['gender']?>">
                  <label for="rg-male">
                    Male
                  </label>
                </div>
                </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date of Birth</label>
                      <input type="date"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Date of Birth" name="dateofbirth" value="<?php echo $data['dateofbirth']?>">
                    </div>
                 
                    <div>
                    <label for="formGroupExampleInput">Address</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Address" name="address" value="<?php echo $data['address']?>">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">City</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="City" name="city" value="<?php echo $data['city']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date of joining</label>
                      <input type="date"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Date of joining" name="dateofjoin" value="<?php echo $data['dateofjoin']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Department</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Designation" name="desig" value="<?php echo $data['desig']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Salary</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Salary" name="salary" value="<?php echo $data['salary']?>">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Id proof Submited</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="Id proof" name="idproof" value="<?php echo $data['idproof']?>">
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