<?php
include('header.php');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Doctor Registration</title>
    <style>
        body {
            background-color: white; /* Light background */
        }
     
        .registration-form {
            margin: 50px auto;
                        max-width: 600px;
            padding: 20px;
          margin-top: 80px;
            background-color: white;
            border-radius: 5px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
          
            height: 550px;
        }
        .form-header {
            text-align: center; 
            margin-bottom: 20px; /* Space below the form header */
        }
        .form-header h2 {
            margin: 0; /* Remove default margin */
            margin-top: 20px;
        }
        .form-header hr {
            margin: 10px 0; /* Space around the line */
            border: 0;
            height: 1px; /* Thickness of the line */
            background-color: #007bff; /* Color of the line */
        }
        .form-group {
            position: relative; /* For positioning icons */
            margin-bottom: 20px; /* Space between groups */
        }
        .form-group input {
            border: 1px solid #ced4da; /* Normal border */
            padding: 10px 40px; /* Padding inside input */
            border-radius: 4px; /* Rounded corners */
            width: 100%; /* Full width */
        }
        .form-group input:focus {
            border-color: #007bff; /* Border color on focus */
            outline: none; /* Remove default outline */
        }
        .form-group .fa {
            position: absolute;
            left: 10px; /* Position the icon */
            top: 10px; /* Center icon vertically */
            color: #007bff; /* Icon color */
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="registration-form">
            <div class="form-header">
                <h2>Registration</h2>
                <hr>
            </div>
            <form action="register_doctor.php" method="POST">
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-stethoscope"></i>
                    <input type="text" class="form-control" id="specialty" name="specialty" placeholder="Specialty" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-phone"></i>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include('sidebardoctor.php');
?>
