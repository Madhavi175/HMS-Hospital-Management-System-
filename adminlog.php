<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Admin Login</title>
  <script type="text/javascript">
    function myfunction() {
      alert("Confirm to login");
    }
  </script>

  <style>
    body {
      background-color: black;
      background-size: 200% 200%;
      animation: gradientAnimation 15s ease infinite;
      color: white;
      font-family: 'Arial', sans-serif;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .login-container {
      margin-top: 80px;
      background-color: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
      border: 2px solid #0066ff; /* Added border */
    }

    h2 {
      border-bottom: 2px solid #0066ff; /* Added bottom border */
      padding-bottom: 10px; /* Space between text and border */
      margin-bottom: 20px; /* Space below the heading */
      font-weight: bold;
    }

    .form-control {
      background: rgba(255, 255, 255, 0.1);
      border: none;
      color: white;
      border-radius: 25px;
      padding-left: 20px;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.3);
      border-color: #0066ff;
      box-shadow: none;
    }

    .btn-primary {
      border-radius: 25px;
      background-color: #0066ff;
      border: none;
      padding: 10px 20px;
      transition: 0.3s ease;
      
    }

    .btn-primary:hover {
      background-color: #004bbf;
      transform: translateY(-3px);
      box-shadow: 0px 8px 15px rgba(0, 102, 255, 0.3);
    }

    h2, h5 {
      animation: slideDown 1s ease-out;
    }

    @keyframes slideDown {
      0% {
        transform: translateY(-50px);
        opacity: 0;
      }

      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    a {
      color: #66a3ff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="login-container text-center">
          <h2>Admin Login</h2>
          <h5>Sign in to your account</h5>
          <form method="POST" action="admin dashboard.php" onsubmit="myfunction()">
            <div class="form-group">
              <small id="emailHelp" class="form-text text-muted"><b>Please enter your name and password to log in.</b></small>
              <input type="text" class="form-control mt-3" id="exampleInputName" aria-describedby="NameHelp" placeholder="Enter Username" name="Username" autocomplete="off" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password" autocomplete="new-password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <small class="form-text mt-3">Don't have an account? <a href="adminregistration.php">Register here</a></small>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
