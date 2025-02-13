<?php
$con = new mysqli("localhost", "root", "", "hospital");
if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO hospital (Username, email, password) VALUES ('$Username', '$email', '$password')";
    if ($con->query($query)) {
        header('location: adminlog.php');
    } else {
        header('location:index.php');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Admin Registration</title>

    <script type="text/javascript">
        function myfunction() {
            alert("Confirm to login");
        }
    </script>

    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #333; /* Dark gray background */
            padding: 30px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: snake-border 4s linear infinite;
            width: 400px; /* Increased width */
        }

        h2, h5 {
            text-align: center;
            color: #fff; /* White text for headings */
        }

        .form-text {
            color: #ccc; /* Light gray for form text */
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            background-color: #444; /* Darker background for inputs */
            color: #e0e0e0; /* Light gray text for inputs */
            border: 1px solid #555; /* Dark gray border */
        }

        .form-control:focus {
            border-color: #0066ff; /* Focus border color */
            background-color: #555; /* Slightly lighter gray on focus */
            box-shadow: none;
        }

        .form-control::placeholder {
            color: #bbb; /* Lighter gray for placeholder text */
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background-color: #0066ff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056d6;
        }

        small a {
            color: #0066ff;
            text-decoration: none;
        }

        small a:hover {
            text-decoration: underline;
        }

        /* Snake border animation */
        @keyframes snake-border {
            0% {
                border: 2px solid transparent;
                box-shadow: 0 0 10px 2px rgba(0, 102, 255, 0.5);
            }
            25% {
                border-top: 2px solid #0066ff;
                border-right: 2px solid transparent;
                border-bottom: 2px solid transparent;
                border-left: 2px solid transparent;
            }
            50% {
                border-top: 2px solid #0066ff;
                border-right: 2px solid #0066ff;
                border-bottom: 2px solid transparent;
                border-left: 2px solid transparent;
            }
            75% {
                border-top: 2px solid #0066ff;
                border-right: 2px solid #0066ff;
                border-bottom: 2px solid #0066ff;
                border-left: 2px solid transparent;
            }
            100% {
                border: 2px solid #0066ff;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2> Admin Registration</h2>
        <h5 style="color:#0066ff;">Register the Account</h5>

        <form method="POST" onsubmit="myfunction()">
            <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">Please fill in the information.</small>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <small id="emailHelp" class="form-text text-muted mt-3">
                Already have an account? <a href="adminlog.php">Login</a>
            </small>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
