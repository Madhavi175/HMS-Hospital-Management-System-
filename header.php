<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden; 
            margin-top: 80px; /* Adjust this margin based on your navbar height */
            background-color: white;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: center; /* Center heading */
            align-items: center;
            padding: 20px; /* Adjusted height */
            background-color: black; /* Navbar background */
            color: white;
            position: fixed; /* Fixed position */
            width: 100%; /* Full width */
            top: 0; /* Stick to top */
            z-index: 1000; /* Above other elements */
            height: 80px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Shadow for depth */
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar-left {
            flex-grow: 1; /* Allow this to take available space */
            text-align: center; /* Center the text */
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
            color: white; /* Text color */
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

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <h2>Doctor Management System</h2>
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
