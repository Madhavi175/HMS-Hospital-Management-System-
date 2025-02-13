<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Sidebar Menu</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            background-color: #f4f4f4;
            overflow-x: hidden;
            perspective: 1000px;
        }

        /* Sidebar Styles */
        #sidebar {
            position: fixed;
            top: 0;
            left: -250px; /* Hidden to the left initially */
            width: 250px;
            height: 100%;
            background-color: #333;
            padding-top: 60px;
            transition: left 0.5s ease; /* Smooth transition when toggling */
            z-index: 2; /* On top of main content */
        }

        #sidebar nav ul {
            list-style: none;
            padding: 0;
        }

        #sidebar nav ul li {
            margin: 20px 0;
        }

        #sidebar nav ul li a {
            display: block;
            padding: 15px 25px;
            color: white;
            text-decoration: none;
            transition: background 0.3s ease; /* Smooth hover effect */
        }

        #sidebar nav ul li a:hover {
            background-color: white; /* Highlight with white on hover */
            color: #333; /* Change text color */
            border-radius: 5px;
        }

        /* Main Content Styles */
        #main-content {
            height: 100%;
            position: relative;
            background-color: #fff;
            transform-origin: left center; /* Main content will rotate from this point */
            transition: transform 0.5s ease; /* Smooth 3D rotation effect */
            z-index: 1;
            padding: 20px;
        }

        #menu-toggle {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 30px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 3; /* On top of both content and sidebar */
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
        }

        p {
            font-size: 1.2rem;
            color: #666;
        }

        /* Active Class: When the menu is open */
        .active #sidebar {
            left: 0; /* Show sidebar by sliding it to the left */
        }

        .active #main-content {
            transform: rotateY(15deg) translateX(250px); /* Add 3D rotation and move to the right */
            box-shadow: -5px 5px 15px rgba(0, 0, 0, 0.3); /* Shadow effect */
        }
    </style>
</head>
<body>

    <!-- Sidebar Menu -->
    <div id="sidebar">
        <nav>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Registration</a></li>
                <li><a href="#">Patients Details</a></li>
                <li><a href="#">Medicine Details</a></li>
                <li><a href="#">Appointment Timing/Shedule</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div id="main-content">
        <button id="menu-toggle">☰ </button>
       
    </div>
    

    <!-- JavaScript -->
    <script>
        // JavaScript to toggle the sidebar and 3D effect
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.body.classList.toggle('active'); // Toggle active class
        });
    </script>

</body>
</html>
