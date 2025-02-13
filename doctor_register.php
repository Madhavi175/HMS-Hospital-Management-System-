
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
    <title>Doctor Registration</title>

    <style>
        body {
            background-color: #f7f7f7;
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
            width: 100vw; /* Full width */
            height: 100vh; /* Full height */
            background: white;
            border-radius: 0px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Left side with the circle */
        .circle-side {
            flex: 1;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .circle {
            width: 300px;
            height: 300px;
            border: 5px solid #ff7e5f;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-size: 22px;
            font-weight: bold;
            padding: 30px;
            background: rgba(0, 0, 0, 0.6);
        }

        /* Right side with the form */
        .form-side {
            flex: 1;
            background: #000; /* Black background */
            color: #fff; /* White text color */
            padding: 60px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: left; /* Left align text */
        }

        h2 {
            font-size: 36px;
            margin-bottom: 10px;
            font-weight: bold;
            position: relative;
            margin-bottom: 20px;
        }

        h2::after {
            content: "";
            display: block;
            width: 50%;
            height: 3px;
            background: #ff7e5f; /* Highlight color */
             /* Center the line */
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 12px;
            color: #fff; /* White icons */
        }

        .form-control {
            border: none; /* Remove border */
            border-bottom: 2px solid #fff; /* Underline effect */
            padding: 10px 0; /* Spacing */
            color: #fff; /* White text */
            background-color: transparent; /* Transparent background */
            font-size: 16px; /* Font size */
            transition: background-color 0.3s ease; /* Smooth transition */
            margin-left: 37px;
        }

        .form-control::placeholder {
            color: #ccc; /* Gray placeholder */
        }

        .form-control:focus {
            box-shadow: none; /* Remove shadow */
            border-color: #ff7e5f; /* Change underline color on focus */
            background-color: rgba(255, 255, 255, 0.1); /* Light gray background */
            color: #fff; /* Keep text white */
        }

        .btn-primary {
            background: #ff7e5f;
            border: none;
            padding: 20px 40px;
            border-radius: 30px;
            font-size: 14px;
            color: white;
            transition: background-color 0.3s ease;
            margin-bottom: 20px; /* Space below the button */
        }

        .btn-primary:hover {
            background: #feb47b;
        }

        .sign-in-link {
            color: #ff7e5f; /* Link color */
            text-decoration: none; /* Remove underline */
            font-size: 16px;
        }

        .sign-in-link:hover {
            text-decoration: underline; /* Underline on hover */
        }

        @media (max-width: 768px) {
            .full-container {
                flex-direction: column;
            }

            .circle {
                width: 200px;
                height: 200px;
                font-size: 18px;
            }
        }

        .btn-center {
            display: block;
            margin: 0 auto; /* Center the button */
        }
    </style>
</head>

<body>

    <div class="full-container">
        <!-- Left Side Circle with Information -->
        <div class="circle-side">
            <div class="circle">
                Create your account here and become part of the medical community.
            </div>
        </div>

        <!-- Right Side Form -->
        <div class="form-side">
            <h2>Doctor Registration</h2>
            <p>Create your account</p>
            <form name="doctorregister" method="POST" action="register_action.php">
                <!-- Name -->
                <label for="doctorname" style="color: #fff;"></label>
                <div class="input-group">
                    <i class="fa fa-user"></i>
                    <input type="text" id="doctorname" class="form-control" placeholder="Enter Your Name" name="doctorname" required>
                </div>
                <!-- Email -->
                <label for="email" style="color: #fff;"></label>
                <div class="input-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" id="email" class="form-control" placeholder="Enter Your Email" name="email" required>
                </div>
                <!-- Contact Number -->
                <label for="contact_number" style="color: #fff;"></label>
                <div class="input-group">
                    <i class="fa fa-phone"></i>
                    <input type="text" id="contact_number" class="form-control" placeholder="Enter Your Contact Number" name="contact_number" required>
                </div>
                <!-- Password -->
                <label for="password" style="color: #fff;"></label>
                <div class="input-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" id="password" class="form-control" placeholder="Enter Your Password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-center">Register</button>
            </form>
            <a href="doctorlogin.php" class="sign-in-link">Already have an account? Sign In</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3p/3pq5cQyaoC0i1f5F5L/54BO5zkPe+M93ztYABcpD3K6U+8T5/3Q" crossorigin="anonymous">
    </script>
</body>

</html>
