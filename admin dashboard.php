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
     
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Admin dashboard</title>
    
    </head>
   <body>
     <div class="container-fluid ">
       <div class="row header">
         <div class="col-md-2  headone">
           <h3>HMS</h3>
         </div>
          <div class="col-md-6 headone">
           <h1 style="text-align:center">Hospital Management System</h1>
           </div>
           <div class="col-md-4">
                <span style="color:orange;">Hello! Admin&nbsp&nbsp<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>&nbsp&nbsp&nbsp <button type="button" class="btn btn-light"><a href="index.php">Logout</button>
                </span>
            </div>
         </div>
       </div>
       <div class="row">
         <div class="col-md-2  sidebar" >
            <div class="list-group" id="list-tab" role="tablist" style="background-color:red";>


                 <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#dashboard" role="tab" aria-controls="home"  style="background-color: #02195f;color:white";> <i class="fa fa-home" aria-hidden="true"></i>&nbsp &nbspAdmin Dashboard</a>

                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#Bookappointment" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp &nbspBook Appointment</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#Adddoctor" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-user-md" aria-hidden="true"></i>&nbsp &nbspAdd Doctor</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#managedoctor" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp &nbspManage Doctor</a>
                  
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#managepatient" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp &nbspManage Patient</a>

                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#appointmenthistory" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-history" aria-hidden="true"></i>&nbsp &nbspAppointment History</a>

                   <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#staff" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-user-o" aria-hidden="true"></i>&nbsp &nbspStaff Registration</a>

                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#view" role="tab" aria-controls="profile"  style="background-color: #02195f;color:white";><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp &nbsp Staff Record </a>

          </div>
        </div>
        <!-- Dshboard Panel -->
           <div class="col-md-10"  style="padding-left:0px;padding-right:0px;">
              <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="list-home-list">
            <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">ADMIN&nbsp|&nbspDASHBORD</li>
            </ol>
           </nav>
            <div class="container">
              <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="profile">
                      <div class="caption">
                        <i class="fa fa-user-circle fa-3x" aria-hidden="true"></i><p><h3>Manage Patients</h3></p>
                         <div class="button-grp">
                         <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#managepatient" role="tab" aria-controls="profile"  style="color:black;font-size:18px;background-color:#c2d6d6";>Manage Patients</a>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="col-sm-6 col-md-4">
                    <div class="appointment">
                      <div class="caption">
                        <i class="fa fa-paperclip fa-3x" aria-hidden="true"></i><p><h3 >Manage Doctors</h3></p>
                        <div class="button-grp">
                         <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#managedoctor" role="tab" aria-controls="profile"  style="color:black;font-size:18px;background-color:#c2d6d6";>Manage Doctor</a>
                        </div>
                      </div>
                    </div>
                  </div>
               <div class="col-sm-6 col-md-4">
                  <div class="Bookappointment">
                    <div class="caption">
                      <i class="fa fa-terminal fa-3x" aria-hidden="true"></i><p><h3> Appointment</h3></p>
                    <div class="button-grp">
                          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#appointmenthistory" role="tab" aria-controls="profile"  style="color:black;font-size:18px;background-color:#c2d6d6";>Appointment History</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
          <!-- Dashboard panel -->
            <div class="tab-pane fade" id="Bookappointment" role="tabpanel" aria-labelledby="list-profile-list">
           <nav aria-label="breadcrumb" >
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Book an Appointment</li>
            </ol>
           </nav>

               <div class="container">

                 <div class="appoint">
                
                   <form method="POST" action="book_appointment1.php" onsubmit="return confirm('confirm to submit?')">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Pateintname</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pateint Name" name="pateint_form" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" name="specialization">Doctor specialization</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Specialization" name="specialization" required="required">
                    </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1" name="doctor">Doctors</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Doctorname" name="doctor" required="required">
                    </div>
                     <div class="form-group">
                      <label for="formGroupExampleInput">Consulting Fees</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Consulting Fees" name="consultingfees" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date</label>
              <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Date" name="appdate" required="required">
                    </div>
                    <div class="form-group">
                  <label for="formGroupExampleInput">Time</label>
              <input type="time" class="form-control" id="formGroupExampleInput" placeholder="Time" name="apptime" required="required">
                    </div>

                     <div class="button">
                         <button class="btn btn-primary" type="submit" value="submit" name="submit">Submit form</button>
                     </div>
               </form>
            </div>
          </div>
        </div>
          
          <!-- Add doctor -->
            <div class="tab-pane fade" id="Adddoctor" role="tabpanel" aria-labelledby="list-profile-list">

           <nav aria-label="breadcrumb" >
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Add doctor</li>
            </ol>
           </nav>

               <div class="container">

                 <div class="appoint">
                
                   <form action="add_doctor.php" method="POST" onsubmit="return confirm('confirm to submit?')">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" name="specialization">Doctor specialization</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Specialization" name="specialization" required="required">
                    </div>
                       <div class="form-group">
                      <label for="formGroupExampleInput">Doctor Name</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Doctorname" name="doctorname" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Contact Number</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Contact Number" name="contactno" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Consulting Fees</label>
                      <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Consulting Fees" name="consultingfees" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Doctor Email</label>
                      <input type="email" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="Email" name="email" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Password</label>
                      <input type="password" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="Password" name="password" required="required">
                    </div>
                     <div class="form-group">
                      <label for="formGroupExampleInput"> Confirm Password</label>
                      <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Confirm password" name="confirm_password" required="required">
                    </div>


                     <div class="button">
                      <center>
                         <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit form</button>
                         </center>
                     </div>
               </form>
            </div>
          </div>
        </div>
          <!-- close add doctor -->
          <!-- staff info -->
              <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="list-profile-list">
             <ol class="breadcrumb">

           <nav aria-label="breadcrumb" >
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Staff Registration</li>
            </ol>
           </nav>

               <div class="container">

                 <div class="appoint">
                
                   <form action="img.php" method="POST" onsubmit="return confirm('confirm to submit?')" enctype="multipart/form-data">
                   
                       <div class="form-group">
                      <label for="formGroupExampleInput">Staff Name</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Staff Name" name="staff_name" required="required">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">Age</label>
                      <input type="number"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Age" name="age" required="required">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">Blood Group</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Bood Group" name="bloodgrp" required="required">
                    </div>
                   <div class="form-group">
                <label class="block">
                  Gender
                </label>
                <div class="clip-radio radio-primary">
                  <input type="radio" id="rg-female" name="gender" value="female" >
                  <label for="rg-female">
                    Female
                  </label>
                  <input type="radio" id="rg-male" name="gender" value="male">
                  <label for="rg-male">
                    Male
                  </label>
                </div>
                </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date of Birth</label>
                      <input type="date"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Date of Birth" name="dateofbirth" required="required">
                    </div>
                 
                    <div>
                    <label for="formGroupExampleInput">Address</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Address" name="address" required="required">
                    </div>
                    <div>
                    <label for="formGroupExampleInput">City</label>
                      <input type="text"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="City" name="city" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Date of joining</label>
                      <input type="date"  class="form-control" id="Idname" aria-describedby="NameHelp" placeholder="Date of joining" name="dateofjoin" required="required">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Department</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Designation" name="desig" required="required">
                    </div>
                    
                    <div class="form-group">
                      <label for="formGroupExampleInput">Id proof Submited</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" autocomplete="new-password" placeholder="Id proof" name="idproof">
                    </div>
                    
                     <div class="button">
                      <center>
                         <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit form</button>
                         </center>
                     </div>
               </form>
            </div>
          </div>
        </div>
          <!-- staff info -->
          <!-- Manage Doctor -->
         
               <div class="tab-pane fade" id="managedoctor" role="tabpanel" aria-labelledby="list-profile-list">
            <?php
             include 'managedoc.php'; 
             ?>
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Manage doctor</li>
            </ol>
           </nav>
                <div> 
               <div class="container">
                <div id="">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Specilization</th>
                <th>DoctorName</th>
                <th>ContactNo</th>
                <th>Email</th>
                <th>Password</th>
                <th>consulting fees</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data=$result->fetch_assoc())
             {


             echo "<tr>";
            
             echo "<td>".$data ['specilization']."</td>";
             echo "<td>".$data ['doctorname']."</td>";  
             echo "<td>".$data ['contactno']."</td>";
             echo "<td>".$data ['email']."</td>";
             echo "<td>".$data ['password']."</td>";
              echo "<td>".$data ['consultingfees']."</td>";
             echo "<td>" ?><a href="edit_adddoctor.php?id=<?php echo $data["id"];?>" < button type="button" class="btn btn-success" style="border-radius:30px;">EDIT</button></a><?php echo "</td>";
             echo "<td>" ?><a href="delete.php?id=<?php echo $data["id"];?>"< button type="button" class="btn btn-danger"  style="border-radius:30px;">DELETE</button></a><?php echo "</td>";
             echo "</tr>"; 
              }
             
              ?>
        </tbody>

     </table>
            </div><a href="#" onclick="printInfo(this)"><button type="button" class="btn " style="margin-left:500px;background-color:#ff751a;color:white;border-radius:25px;width:130px;   ">Print</button></a><br><br>
    
    </div>
    <script type="text/javascript">
            function printInfo(ele) {
            var openWindow = window.open("", "title", "attributes");
            openWindow.document.write(ele.previousSibling.innerHTML);
            openWindow.document.close();
            openWindow.focus();
            openWindow.print();
            openWindow.close();
            }
  </script>
          </div>
       </div>


           <!-- Manage dosctor close -->
           <!-- view staff Information -->

             <div class="tab-pane fade" id="view" role="tabpanel" aria-labelledby="list-profile-list">
            <?php
             include 'main_handle.php'; 
             ?>
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Staff Information</li>
            </ol>
           </nav>
                <div> 
               <div class="container">
               <div id="">
                <table id="example6" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Name</th>
                 <th>Age</th>
                  <th>Bloodgrp</th>
                   <th>Gender</th>
                <th>DOB</th>
                 <th>Address</th>
                  <th>city</th>
                <th>Joing date</th>
                <th>Deparment</th>
                
                <th>Idproof</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data=$result->fetch_assoc())
             {


             echo "<tr>";
            
             echo "<td>".$data ['staff_name']."</td>";
             echo "<td>".$data ['age']."</td>";
             echo "<td>".$data ['bloodgrp']."</td>";
             echo "<td>".$data ['gender']."</td>";
             echo "<td>".$data ['dateofbirth']."</td>"; 
             echo "<td>".$data ['address']."</td>";
             echo "<td>".$data ['city']."</td>"; 
             echo "<td>".$data ['dateofjoin']."</td>";
             echo "<td>".$data ['desig']."</td>";
            
              echo "<td>".$data ['idproof']."</td>";
           
             echo "<td>" ?><a href="delete_staff.php?id=<?php echo $data["id"];?>"< button type="button" class="btn btn-danger" style="border-radius:30px;">DELETE</button></a><?php echo "</td>";
              echo "<td>" ?><a href="edit_staff.php?id=<?php echo $data["id"];?>"< button type="button" class="btn btn-success" style="border-radius:30px;">Edit</button></a><?php echo "</td>";
             echo "</tr>"; 
              }
             
              ?>
        </tbody>

     </table>
           </div><a href="#" onclick="printInfo(this)"><button type="button" class="btn" style="margin-left:500px;background-color:#ff751a;color:white;border-radius:25px;width:130px;  ">Print</button></a><br><br>
    
    </div>
    <script type="text/javascript">
            function printInfo(ele) {
            var openWindow = window.open("", "title", "attributes");
            openWindow.document.write(ele.previousSibling.innerHTML);
            openWindow.document.close();
            openWindow.focus();
            openWindow.print();
            openWindow.close();
            }
  </script>
          </div>
       </div>
      <!-- close staff information -->
           <!-- Manage Patient  -->
               <div class="tab-pane fade" id="managepatient" role="tabpanel" aria-labelledby="list-profile-list">
            
             <?php 
                include 'managepateint.php';
               ?>
               

           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Manage Patient</li>
            </ol>
           </nav>
                <div>
               <div class="container">
                <div id="">
               <table id="example2" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>Username</th>
                <th>Address</th>
                <th>City</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

           <?php 
            while($data=$result->fetch_assoc())
             {
             
             echo "<tr>";
             
             echo "<td>".$data ['Username']."</td>";
             echo "<td>".$data ['address']."</td>";  
             echo "<td>".$data ['city']."</td>";
             echo "<td>".$data ['gender']."</td>";
             echo "<td>".$data ['email']."</td>";
             echo "<td>".$data ['password']."</td>";
             echo "<td>" ?><a href="deletpaintpage.php?id=<?php echo $data["id"];?>"  < button type="button" class="btn btn-danger" style="border-radius:30px; ">DELETE</button></a><?php echo "</td>";

              }
             
              ?>
         
        </tbody>
       
    </table>
      </div><a href="#" onclick="printInfo(this)"><button type="button" class="btn " style="margin-left:500px;background-color:#ff751a;color:white;border-radius:25px;width:130px;    ">Print</button></a><br><br>
    
    </div>
    <script type="text/javascript">
            function printInfo(ele) {
            var openWindow = window.open("", "title", "attributes");
            openWindow.document.write(ele.previousSibling.innerHTML);
            openWindow.document.close();
            openWindow.focus();
            openWindow.print();
            openWindow.close();
            }
  </script>
          </div>
       </div>
           <!-- Manage Patient close -->


           <!-- Appointment History -->



               <div class="tab-pane fade" id="appointmenthistory" role="tabpanel" aria-labelledby="list-profile-list">

                 <?php 
                include 'appoit.php';
               ?>
               

           <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Admin&nbsp|&nbsp Appointment History</li>
            </ol>
           </nav>
             
             <div>
               <div class="container">
                 <div id="">
                <table id="example3" class="display" style="width:100%">
        <thead>
            <tr>
                
                <th>PateintName</th>
                <th>Specilization</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Time</th>
                <th>Consulting Fees</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>    
            </tr>
        </thead>
        <tbody>
            
             <?php 
            while($data=$result->fetch_assoc())
                 {


                echo "<tr>";
                echo "<td>".$data ['pateint_form']."</td>";
                echo "<td>".$data ['specialization']."</td>";
                echo "<td>".$data ['doctor']."</td>";  
                echo "<td>".$data ['appdate']."</td>";
                echo "<td>".$data ['apptime']."</td>";
                echo "<td>".$data ['consultingfees']."</td>";
                echo "<td>" ?><a href="delet_appointhis.php?id=<?php echo $data["id"];?>"  < button type="button" class="btn btn-danger" style="border-radius:30px;">DELETE</button></a><?php echo "</td>";
                echo "<td>" ?><a href="bill.php?id=<?php echo $data["id"];?>"  <button type="button" class="btn" style="background-color: #0073e6 ;color:white;border-radius:30px;">Receipt</button></a><?php echo "</td>";
                  echo "<td>" ?><a href="cancel_code.php?id=<?php echo $data["id"];?>"  <button type="button" class="btn" style="background-color:   #e60000 ;color:white;border-radius:30px;">Cancel</button></a><?php echo "</td>";
                echo "</tr>"; 
                  }
             
              ?>
        </tbody>
        <tfoot>
            <tr>
                 <th>PateintName</th>
                  <th>Specilization</th>
                  <th>Doctor</th>
                  <th>Time</th>
                  <th>Date</th>
                  <th>Consulting Fees</th>
                  <th>Action</th>
                  <th>Action</th> 
                  <th>Action</th>  
            </tr>
        </tfoot>
    </table>
    <!-- print coding -->
   
       
    </div><a href="#" onclick="printInfo(this)"><button type="button" class="btn " style="margin-left:500px;background-color:#ff751a;color:white;border-radius:25px;width:120px;  ">Print</button></a><br><br>
    <a href="view.php" ><button type="button" class="btn " style="margin-left:480px;background-color:#ff751a;color:white;border-radius:25px;width:170px; ">Bill Information</button></a>
    </div>
    <script type="text/javascript">
            function printInfo(ele) {
            var openWindow = window.open("", "title", "attributes");
            openWindow.document.write(ele.previousSibling.innerHTML);
            openWindow.document.close();
            openWindow.focus();
            openWindow.print();
            openWindow.close();
            }
  </script>
<!-- closing print -->
   </div>
   
          </div>
       </div>

           <!-- appointment history close -->
       </div>
    </div>
</div>
        



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example2').DataTable({
     
    });
    } );
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example3').DataTable();
    } );
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example5').DataTable();
    } );
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example6').DataTable();
    } );
    </script>
    <script type="text/javascript">
             
        function myFunction() {
          window.print();
        }
       
    </script>
  </body>
</html>