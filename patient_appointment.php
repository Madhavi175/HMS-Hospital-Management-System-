<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: black;
            height: 80px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            padding: 0 20px;
        }

        .navbar .brand {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .calendar {
            font-size: 16px;
        }

        /* Sidebar */
        .sidebar {
            background-color: black;
            width: 250px;
            padding: 0;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 80px;
            left: 0;
            height: calc(100vh - 80px);
            animation: slideIn 0.5s ease-in-out;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin: 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 15px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #333;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #00448c;
            transform: translateX(10px);
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .records-table {
                margin-left: 0;
                width: 100%;
            }

            .sidebar {
                width: 200px;
            }

            .navbar {
                flex-direction: column;
                height: auto;
            }
        }

        @media (max-width: 576px) {
            .sidebar ul li a {
                font-size: 16px;
            }

            .sidebar ul li {
                margin: 0;
            }

            .navbar {
                padding: 0;
            }
        }

        /* Form Styles */
        .appointment-form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            margin: 100px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .appointment-form h2 {
            margin-bottom: 20px;
            color: #02195f;
        }

        .form-group label {
            color: #02195f;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #02195f;
        }

        .btn-submit {
            background-color: #02195f;
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
                <li><a href="patient_appointment.php"><i class="fas fa-calendar-check"></i> My Appointments</a></li>
                <li><a href="appointmenthistory.php"><i class="fas fa-history"></i> Appointment History</a></li>
                <li><a href="#"><i class="fas fa-file-invoice"></i>Billing</a></li>
                <li><a href="https://web.whatsapp.com/"><i class="fas fa-envelope"></i>SMS & Whatsapp Notifications</a></li>
                <!-- <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li> -->
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
</div>

<!-- Appointment Form -->
<div class="container" style="margin-left: 270px;"> <!-- Adjusted margin for the sidebar -->
    <div class="appointment-form">
        <h2>Book an Appointment</h2>
        <form method="POST" action="book_appointmentL.php">
            <div class="form-group required">
                <label for="patient_name">Patient Name</label>
                <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter patient's name" required>
            </div>
            <div class="form-group required">
                <label for="contact_no">Contact Number</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Enter contact number" required>
            </div>
            <div class="form-group required">
                <label for="doctor_name">Doctor's Name</label>
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" placeholder="Enter doctor's name" required>
            </div>
            <div class="form-group required">
                <label for="specialization">Specialization</label>
                <input type="text" class="form-control" id="specialization" name="specialization" placeholder="Enter specialization" required>
            </div>
            <div class="form-group required">
                <label for="consulting_fees">Consulting Fees</label>
                <input type="number" class="form-control" id="consulting_fees" name="consulting_fees" placeholder="Enter consulting fees" required>
            </div>
            <div class="form-group required">
                <label for="appointment_date">Appointment Date</label>
                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
            </div>
            <div class="form-group required">
                <label for="appointment_time">Appointment Time</label>
                <input type="time" class="form-control" id="appointment_time" name="appointment_time" required>
            </div>
            <button type="submit" class="btn btn-submit">Book Appointment</button>
        </form>
    </div>
</div>

</body>
</html>