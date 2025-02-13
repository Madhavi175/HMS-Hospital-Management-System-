<?php
session_start(); // Start the session

// Database connection
$db = mysqli_connect("localhost", "root", "", "hospital"); // Update with your database credentials

if (isset($_POST['submit'])) {
    $Username = $_POST['patientname'];
    $Password = $_POST['password'];

    if (empty($Username) || empty($Password)) {
        header("location:../patient_login.php?msg=Username and Password are required");
        exit;
    } else {
        $sql = mysqli_query($db, "SELECT * FROM admin_patient WHERE Email='$Username' AND Password='$Password' AND id=1");

        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            session_destroy(); // Destroy previous sessions
            session_start(); // Start a new session
            $_SESSION['User'] = $row;
            header('location:patient_dashboard.php');
            exit;
        } else {
            header("location:patient_login.php?msg=Username and Password are Wrong!");
            
            exit;
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Patient Login</title>

    <style>
        /* Your existing CSS styles go here */
        body {
            background-color: #000;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .full-container {
            display: flex;
            width: 100vw;
            height: 100vh;
            background: white;
        }

        .image-side {
            flex: 1;
            background: url('images/WhatsApp Image 2024-11-15 at 11.40.48_8c8b4585.jpg') no-repeat center center/cover;
        }

        .form-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            background: #000;
            color: white;
            text-align: center;
        }

        h2 {
            font-size: 36px;
            color: white;
            margin-bottom: 10px;
            font-weight: bold;
            position: relative;
            text-align: center;
        }

        h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background: #ff7e5f;
            margin: 0.5rem auto;
            border-radius: 2px;
        }

        p {
            font-size: 18px;
            color: #ccc;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .input-group {
            position: relative;
            width: 80%;
            margin-bottom: 30px;
        }

        .input-group .form-control {
            border: none;
            border-bottom: 2px solid #ffffff;
            padding: 15px 0;
            font-size: 16px;
            background-color: transparent;
            color: white;
            width: 100%;
        }

        .input-group .input-group-prepend span {
            background: transparent;
            border: none;
            color: white;
            padding-right: 10px;
        }

        .btn-primary {
            background: #000;
            border: 2px solid #ff7e5f;
            padding: 10px 30px;
            border-radius: 30px;
            font-size: 14px;
            color: white;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background: #ff7e5f;
        }

        .signup-link {
            margin-top: 20px;
            color: #ff7e5f;
            text-decoration: none;
        }

        .signup-link:hover {
            color: #feb47b;
        }

        .signup-message {
            color: white;
            margin-top: 10px;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .full-container {
                flex-direction: column;
            }

            .image-side {
                height: 300px;
                flex: none;
            }

            .form-side {
                padding: 40px;
            }

            h2 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <div class="full-container">
        <!-- Left Side Image -->
        <div class="image-side"></div>

        <!-- Right Side Form -->
        <div class="form-side">
            <h2>Patient Login</h2>
            <p>Sign in to your account</p>
            <form name="doctorlogin" method="POST">
                <!-- Username with icon -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter Your username" name="patientname" required>
                </div>
                <!-- Password with icon -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Enter Your Password" name="password"
                        required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>