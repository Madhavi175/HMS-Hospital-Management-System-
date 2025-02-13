<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <style>
      body{
        background-color: black;
      }
      
        /* Container for full-screen background image */
        .img {
            top: 5%;
            position: relative;
            width: 100%;
            height: 100vh; /* Full height of the viewport */
            overflow: hidden;
        }

        /* Ensures the image covers the container with proper aspect ratio */
        .img img {
            width: 900px;
            height: 400px;
            margin-top: 100px;
            margin-left: 280px;
        }

        /* Zen-inspired text reveal animation */
        @keyframes revealText {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Overlay content */
        .overlay-content {
            position: absolute;
            top: 20%;
            text-align: left;
            /* margin-left: 300px; */
            left: 23%;
            font-size: 35px;
            font-weight: bold;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            line-height: 1.2;
            letter-spacing: 1px;
            cursor: pointer;
            opacity: 0;
            animation: revealText 2s ease forwards;
            animation-delay: 1s;
        }

        /* Paragraph within overlay content */
        .overlay-content p {
            font-size: 20px;
            font-weight: normal;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-top: 20px;
            opacity: 0;
            animation: revealText 2s ease forwards;
            animation-delay: 2s;
        }

        /* Animated buttons */
        .login-buttons {
            position: absolute;
            top: 60%;
            right: 35%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: row; /* Changed from column to row */
            gap: 20px; /* Keeps the gap between buttons */
        }

        .login-buttons a {
            display: inline-block;
            padding: 15px 20px;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            background: linear-gradient(90deg, #ff7e5f, #feb47b);
            border-radius: 10px;
            transition: all 0.4s ease-in-out;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            width: 180px;
            text-align: center;
        }

        .login-buttons a:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.4);
        }

        .login-buttons a.admin {
            background: linear-gradient(37deg, #2193b0, Black);
        }

        .login-buttons a.opd {
            background: linear-gradient(100deg, #0066ff, #8A2BE2);        }

        .login-buttons a.doctor {
            background: linear-gradient(90deg, #43cea2, #185a9d);
        }

        .service-info {
            position: absolute;
            top: 40%;
            left: 23%;
            font-size: 30px;
            font-weight: bold;
            color: darkgreen;
            /* margin-left: 90px; */
            z-index: 1;
            opacity: 0;
            animation: revealText 2s ease forwards;
            animation-delay: 3s;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; */
        }
        /* Container for full-screen background video */
        .video-container {
            position: relative;
            width: 100%;
            height: 100vh; /* Full height of the viewport */
            overflow: hidden;
        }

        /* Video background */
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensures the video covers the entire background */
            z-index: -1; /* Send the video to the background */
        }
    </style>
</head>

<body>
<div class="video-container">
        <!-- Background video -->
        <video autoplay muted loop>
            <source src="images/3191572-uhd_3840_2160_25fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    <!-- Full-width image section with overlay -->
    <div class="img">
        <img src="images/d8.png" alt="Hospital Image"/>

        <!-- Overlay content -->
        <div class="overlay-content" style="color: black; font-weight: bold;">
            <div id="animatedText"><B>Welcome to</B> <br> <b>HOSPITAL MANAGEMENT SYSTEM!</b></div>
            <p>Providing Excellence in Healthcare</p>
        </div>

        <!-- Animated Login Buttons -->
        <div class="login-buttons">
            <a href="adminlog.php" class="admin">Admin Login</a>
            <a href="patient_login.php" class="opd">OPD Login</a>
            <a href="doctorlogin.php" class="doctor">Doctor Login</a>
        </div>

        <div class="service-info"><b> 24/7 HOURS FOR SUPPORT</b></div>
    </div>
</div>
    <!-- Bootstrap and jQuery scripts -->
    <script>
        $(document).ready(function () {
            // Additional JS if needed
        });
    </script>
</body>

</html>
