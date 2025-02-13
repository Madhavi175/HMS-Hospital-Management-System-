<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Navbar */
        .navbar {
            background-color: black;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
        }
        .navbar .brand {
            font-size: 20px;
            font-weight: bold;
        }

        /* Sidebar */
        .sidebar {
            background-color: black;
            width: 250px;
            padding: 20px;
            position: fixed;
            top: 60px; /* Adjust for navbar height */
            left: 0;
            height: calc(100vh - 60px);
            transition: transform 0.3s ease-in-out;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin: 20px 0;
        }
        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .sidebar ul li a:hover {
            background-color: #00448c;
            transform: translateX(10px);
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .sidebar ul li a {
                font-size: 16px;
            }
        }

        /* Registration Form */
        .registration-form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            margin: 80px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .registration-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group label {
            color: #333;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-submit {
            background-color: black;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #041244;
        }
        .form-group.required label:after {
            content: "*";
            color: red;
            margin-left: 5px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="brand">OPD MANAGEMENT</div>
        <div class="calendar">
            <p id="current-date"></p>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
        <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="patientregistration1.php"><i class="fas fa-user-plus"></i>Patient Registration</a></li>
                <li><a href="records.php"><i class="fas fa-file"></i> Patient Records</a></li>
                <!-- <li><a href="medical_records.php"><i class="fas fa-file-medical"></i>Medical Records</a></li> -->
                <li><a href="appointment.php"><i class="fas fa-calendar-check"></i> My Appointments</a></li>
                <li><a href="appointmenthistory.php"><i class="fas fa-history"></i> Appointment History</a></li>
                <li><a href="#"><i class="fas fa-file-invoice"></i>Billing</a></li>
                <li><a href="https://web.whatsapp.com/"><i class="fas fa-envelope"></i>SMS & Whatsapp Notifications</a></li>
                <!-- <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li> -->
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul>
    </div>

    <!-- Registration Form -->
    <div class="container">
        <div class="registration-form">
            <h2>Patient Registration</h2>
            <form method="POST" action="register_patient.php">
                <div class="form-group required">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group required">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                </div>
                <div class="form-group required">
                    <label for="bloodgroup">Blood Group</label>
                    <select class="form-control" id="bloodgroup" name="bloodgroup" required>
                        <option value="">Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="form-group required">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
                </div>
                <div class="form-group required">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group required">
                    <label for="contactno">Contact No</label>
                    <input type="number" class="form-control" id="contactno" name="contactno" placeholder="Enter your contact no" required>
                </div>
                <button type="submit" class="btn btn-submit">Register</button>
            </form>
        </div>
    </div>

    <script>
        // Display current date in the navbar
        const currentDate = new Date().toLocaleDateString();
        document.getElementById('current-date').textContent = currentDate;
    </script>

</body>
</html>