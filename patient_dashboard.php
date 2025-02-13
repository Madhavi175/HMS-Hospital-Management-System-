<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Management Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        .container {
            display: flex;
            flex-direction: column;
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
            font-size: 24px;
            font-weight: bold;
            margin-left: 20px;
        }

        

        /* Sidebar */
        .sidebar {
            background-color: black;
            width: 250px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: fixed;
            top: 60px; /* Adjust for navbar height */
            left: 0;
            height: calc(100vh - 60px);
            animation: slideIn 0.5s ease-in-out;
        }

        .sidebar h2 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 20px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            display: block;
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

        /* Main Content */
        .main-content {
            margin-left: 250px;
            margin-top: 60px; /* Adjust for navbar height */
            width: calc(100% - 250px);
            padding: 40px;
            background-color: #ffffff;
            animation: fadeIn 1s ease;
        }

        .main-content h1 {
            color: black;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            color: black;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .card .btn {
            background-color:black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .card .btn:hover {
            background-color: #00448c;
        }

        .profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .profile img {
            width: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile .info {
            display: flex;
            align-items: center;
        }

        .profile .info p {
            font-size: 16px;
            color: #555;
        }

        .edit-btn {
            background-color: blue;
            font-size:15px;
            font-weight:bold;
            padding: 20px 30px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-btn:hover {
            background-color: black;
        }

        /* Today's Appointments and Events */
        .appointments {
            margin-top: 30px;
        }

        .appointments h2 {
            color: black;
            margin-bottom: 20px;
        }

        .events-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .event {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Adjusting widths and heights */
        .event.checkup {
            width: calc(45% + 250px); /* Increased width for General Checkup */
            height: calc(100px + 200px); /* Increased height for General Checkup */
        }

        .event.blood-test {
            width: 350px; /* Original width for Blood Test */
            height: calc(100px + 200px); /* Same height as General Checkup */
        }

        .event:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .event h3 {
            color: black;
            margin-bottom: 10px;
        }

        .event p {
            font-size: 16px;
            color: #666;
        }

        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
            }

            .main-content {
                margin-left: 0;
                width: 100%;
            }

            .event {
                width: 100%; /* Stack events on small screens */
            }
        }
         /* Calendar Icon */
         .calendar-icon {
            position: relative; /* To position the calendar */
            cursor: pointer; /* Pointer cursor on hover */
            margin-left: auto; /* Push it to the right */
        }

        /* Calendar Dropdown */
        .calendar-dropdown {
            display: none; /* Hidden by default */
            position: absolute;
            top: 60px; /* Position below the navbar */
            right: 20px; /* Adjust the right position */
            background-color: #333; /* Dark background color */
            border: 1px solid #ccc; /* Border for the calendar */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow for depth */
            padding: 5px; /* Padding for the dropdown */
            width: 300px; /* Width of the calendar */
           /* Text color */
        }

        .calendar-header {
            text-align: center; /* Center the calendar header */
            font-weight: bold; /* Bold text for header */
            margin-bottom: 10px; /* Margin for spacing */
            font-size: 14px; /* Smaller font size for header */
        }

        /* Days of the Week */
        .weekdays {
            display: grid; /* Use grid for the weekdays */
            grid-template-columns: repeat(7, 1fr); /* Seven columns */
            gap: 5px; /* Gap between weekdays */
            font-weight: bold; /* Bold text for weekdays */
            margin-bottom: 5px; /* Margin below weekdays */
            font-size: 12px; /* Smaller font size for weekdays */
        }

        .weekday {
            text-align: center; /* Center the weekday name */
        }

        .calendar-days {
            display: grid; /* Use grid for the days */
            grid-template-columns: repeat(7, 1fr); /* Seven columns */
            gap: 5px; /* Gap between days */
        }

        .day {
            padding: 8px; /* Reduced padding for day cells */
            text-align: center; /* Center the day number */
            border: 1px solid #444; /* Border for each day */
            border-radius: 4px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s; /* Smooth transition for hover */
            min-height: 40px; /* Minimum height to ensure space */
            font-size: 12px; /* Smaller font size for day numbers */
            display: flex; /* Use flex to center the content */
            align-items: center; /* Center vertically */
            justify-content: center; /* Center horizontally */
        }

        .day:hover {
            background-color: #555; /* Hover effect for days */
        }

        /* Highlight today's date */
        .today {
            background-color: #ff7e5f; /* Highlight color */
            color: white; /* White text for today's date */
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Navbar -->
        <div class="navbar">
            <div class="brand">
                OPD MANAGEMENT 
            </div>
            <div class="navbar-right calendar-icon">
            <i class="fas fa-calendar-alt fa-lg" onclick="toggleCalendar()"></i>
            <div class="calendar-dropdown" id="calendarDropdown">
                <div class="calendar-header" id="calendarHeader"></div>
                <div class="weekdays">
                    <div class="weekday">Mon</div>
                    <div class="weekday">Tue</div>
                    <div class="weekday">Wed</div>
                    <div class="weekday">Thu</div>
                    <div class="weekday">Fri</div>
                    <div class="weekday">Sat</div>
                    <div class="weekday">Sun</div>
                </div>
                <div class="calendar-days" id="daysContainer"></div>
                <div>
                    <button class="btn btn-sm btn-secondary" onclick="changeMonth(-1)">&#10094;</button>
                    <button class="btn btn-sm btn-secondary" onclick="changeMonth(1)">&#10095;</button>
                </div>
            </div>
        </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="patientregistration.php"><i class="fas fa-user-plus"></i>Patient Registration</a></li>
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

        <!-- Main Content -->
        <div class="main-content">
            <div class="profile">
                <div class="info">
                    <img src="images/patient.jpg" alt="Profile Picture">
                   <b><p>WELCOME TO DASHBOARD !!</p></b> 
                </div>
                
                
                
            </div>

            <div class="card-container">
                <div class="card">
                    <h3>Billing Information</h3>
                    <p>You have 1 unpaid invoice.</p>
                    <a href="#" class="btn">Pay Now</a>
                </div>

                <div class="card">
                    <h3>Medical History</h3>
                    <p>Last consultation: 3 weeks ago.</p>
                    <a href="#" class="btn">View History</a>
                </div>

                <div class="card">
                    <h3>Profile Settings</h3>
                    <p>Update your personal information and preferences.</p>
                    <a href="changepassword.php" class="btn">Change Password</a>
                </div>
            </div>

            <div class="appointments">
                <h2>Today's Events</h2>

                <div class="events-container">
                    <div class="event checkup">
                        <h3>General Checkup</h3>
                        <p>Time: 10:00 AM</p>
                    </div>

                    <div class="event blood-test">
                        <h3>Blood Test</h3>
                        <p>Time: 2:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('current-date').textContent = new Date().toLocaleDateString();
    </script>

<script>
        let currentDate = new Date(); // Get the current date

        function renderCalendar() {
            const daysContainer = document.getElementById('daysContainer');
            const calendarHeader = document.getElementById('calendarHeader');
            
            // Get the current month and year
            const month = currentDate.getMonth();
            const year = currentDate.getFullYear();
            
            // Update calendar header
            calendarHeader.innerText = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });

            // Clear previous days
            daysContainer.innerHTML = '';

            // Calculate the first day of the month and the number of days in the month
            const firstDayOfMonth = new Date(year, month, 1);
            const lastDayOfMonth = new Date(year, month + 1, 0);
            const firstDayIndex = firstDayOfMonth.getDay(); // Sunday = 0, Monday = 1, ..., Saturday = 6
            const totalDays = lastDayOfMonth.getDate();

            // Adjust for the display (Make Monday = 0, ..., Sunday = 6)
            const adjustedFirstDayIndex = (firstDayIndex + 6) % 7;

            // Fill empty slots before the first day
            for (let i = 0; i < adjustedFirstDayIndex; i++) {
                const emptyDay = document.createElement('div');
                emptyDay.classList.add('day');
                daysContainer.appendChild(emptyDay);
            }

            // Fill the calendar with days
            for (let day = 1; day <= totalDays; day++) {
                const dayElement = document.createElement('div');
                dayElement.classList.add('day');
                dayElement.innerText = day;

                // Highlight today's date only in the current month
                if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                    dayElement.classList.add('today');
                }

                daysContainer.appendChild(dayElement);
            }
        }

        function changeMonth(direction) {
            // Update current date based on direction
            currentDate.setMonth(currentDate.getMonth() + direction);
            renderCalendar(); // Re-render the calendar
        }

        // Toggle Calendar Dropdown
        function toggleCalendar() {
            const calendarDropdown = document.getElementById('calendarDropdown');
            calendarDropdown.style.display = calendarDropdown.style.display === 'block' ? 'none' : 'block';
            renderCalendar(); // Render calendar when toggled
        }

        // Close the calendar dropdown if clicked outside
        window.addEventListener('click', function(event) {
            const calendarIcon = document.querySelector('.calendar-icon');
            const calendarDropdown = document.getElementById('calendarDropdown');
            if (!calendarIcon.contains(event.target)) {
                calendarDropdown.style.display = 'none';
            }
        });

        // Initial render of the calendar
        renderCalendar();
    </script>
</body>
</html>