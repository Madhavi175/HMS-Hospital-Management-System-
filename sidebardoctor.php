<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin-left: 260px; /* Space for sidebar */
            overflow-x: hidden;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 260px;
            background-color: #1c1c1c; /* Black theme */
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.3);
            color: white;
        }

        /* Sidebar Menu */
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .sidebar ul li a i {
            margin-right: 12px;
            font-size: 20px;
        }

        /* Hover effect */
        .sidebar ul li:hover {
            background-color: #333;
            transform: translateX(5px); /* Moves item slightly to the right */
        }

        .sidebar ul li:hover a {
            color: #ffba70; /* Accent color */
        }

        /* Line separator styling */
        .line {
            height: 2px;
            background-color: #ffba70; /* Line color */
            margin: 4px 0; /* Space above and below the line */
        }

        /* Dropdown styling for sub-menu */
        .sidebar ul li ul {
            display: none;
            list-style-type: none;
            padding-left: 20px;
            margin-top: 10px;
        }

        .sidebar ul li:hover ul {
            display: block;
        }

        .sidebar ul li ul li {
            padding: 10px 0;
        }

        .sidebar ul li ul li a {
            font-size: 16px;
            color: #ffba70;
        }

        /* Responsive Sidebar for Smaller Screens */
        @media screen and (max-width: 768px) {
            body {
                margin-left: 0;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar ul li a {
                font-size: 16px;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="doctordashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <div class="line"></div> <!-- Line separator -->
            <li><a href="doctor_registration.php"><i class="fas fa-user-md"></i> Doctor Registration</a></li>
            <li><a href="patient_details.php"><i class="fas fa-users"></i> Patient Details</a></li>
            <li><a href="medicine.php"><i class="fas fa-pills"></i> Medicine Details</a></li>
            <li>
                <a href=""><i class="fas fa-prescription"></i> Prescription</a>
                <ul>
                    <li><a href="prescription.php">Add Prescription</a></li>
                    <li><a href="prescription_records.php">Records</a></li>
                </ul>
            </li>
            <li><a href="doctor_logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>

</body>
</html>
