<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
        .sidebar {
            background-color: #02195f; /* Dark Blue */
            height: 100vh; /* Full height sidebar */
            width: 250px; /* Sidebar width */
            position: fixed;
            top: 0;
            left: -250px; /* Hide sidebar off-screen initially */
            transform: rotateY(-90deg); /* Start with the sidebar rotated */
            transform-origin: left center; /* Rotate around the left side */
            transition: transform 0.5s ease-in-out; /* Smooth transition */
            z-index: 1;
            padding-top: 20px;
            margin-bottom: 90px;
        }

        .sidebar.open {
            left: 0;
            transform: rotateY(0deg); /* Rotate to normal when sidebar is open */
        }

        .list-group {
            margin-top: 50px;
        }

        .list-group-item {
            background-color: transparent; /* Set background to transparent */
            color: white; /* Text color */
            font-size: 16px;
            padding: 15px 20px;
            border: none;
            margin-bottom: 5px;
        }

        .list-group-item:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white for hover effect */
            color: #f8f9fa;
        }

        .list-group-item i {
            margin-right: 10px;
        }

        .header {
            background-color: #6A5ACD; /* Adjust header to match the footer */
            color: white;
            padding: 10px 20px;
        }

        .header h1, .header h3 {
            color: white;
        }

        .toggle-sidebar-btn {
            font-size: 24px;
            color: white;
            background-color: #02195f;
            border: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 2;
            cursor: pointer;
        }

        /* Adjust content position based on sidebar state */
        .content {
            transition: margin-left 0.3s ease-in-out;
            margin-left: 0;
        }

        .content.shifted {
            margin-left: 250px; /* Shift content when sidebar is open */
        }
    </style>
    <title>Sidebar Toggle</title>
</head>
<body>
<div class="container-fluid">
    <div class="row header">
        <div class="col-md-2 headone">
            <!-- <h3>HMS</h3> -->
        </div>
        <div class="col-md-6 headone">
            <h1 style="text-align:center">Hospital Management System</h1>
        </div>
        <div class="col-md-4">
            <span style="color:orange;">Hello! Doctor&nbsp&nbsp<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>&nbsp&nbsp&nbsp 
            <button type="button" class="btn btn-light"><a href="index.php">Logout</a></button>
            </span> 
        </div>
    </div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" href="doctordashboard.php" role="tab" aria-controls="home">
            <i class="fa fa-home" aria-hidden="true"></i> Dashboard
        </a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" href="doctordashboard.php" role="tab" aria-controls="profile">
            <i class="fa fa-history" aria-hidden="true"></i> Appointment History
        </a>
        <a class="list-group-item list-group-item-action" id="list-doctor-reg-list" href="doctor_registration.php">
            <i class="fa fa-user-md" aria-hidden="true"></i> Doctor Registration
        </a>
    </div>
</div>

<!-- Sidebar Toggle Button -->
<button class="toggle-sidebar-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var sidebar = document.querySelector(".sidebar");
        var toggleButton = document.querySelector(".toggle-sidebar-btn");
        var content = document.querySelector(".content");

        toggleButton.addEventListener("click", function() {
            sidebar.classList.toggle("open"); // Toggle the 'open' class to show/hide the sidebar
            content.classList.toggle("shifted"); // Shift content to make space for the sidebar
        });
    });
</script>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
