<?php
include('header.php'); // Include the header file if you have it

// Include database connection
include('db_connection.php');

// Fetch prescription data from the database
$sql = "SELECT * FROM prescriptions";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription Details</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General styling for layout */
        body {
            display: flex;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

       

 

        /* Ensure table is within the block and scrollable if needed */
        .table-container {
            overflow-x: auto; /* Allows horizontal scrolling */
            margin: 50px 0;
        }

        /* Styles for the table */
        table {
            width: 100%; /* Use 100% of the available content width */
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            font-family: Arial, sans-serif;
        }

        /* Button styles */
        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons button {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: white;
            border-radius: 5px;
        }

        .view-btn {
            background-color: #4CAF50;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: white;
            border-radius: 5px;
        }

        .edit-btn {
            background-color: #2196F3;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: white;
            border-radius: 5px;

        }

        .delete-btn {
            background-color: #f44336;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: white;
            border-radius: 5px;

        }

        /* Ensure action buttons look nice */
        .action-buttons button:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>


    <!-- Main Content -->
    <div class="content">
        <h1>Prescription Details</h1>

        <div class="table-container">
            <?php
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr><th>Prescription ID</th><th>Patient Name</th><th>Address</th><th>Contact Number</th><th>Medicines</th><th>Timings</th><th>Actions</th></tr>";
                
                // Output each row of the data
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['patient_name'] . "</td>";
                    echo "<td>" . $row['patient_address'] . "</td>";
                    echo "<td>" . $row['contact_number'] . "</td>";
                    echo "<td>" . $row['medicines'] . "</td>";
                    echo "<td>" . $row['timings'] . "</td>";
                    echo "<td>
                    <div class='action-buttons'>
                        <a href='view_prescription.php?id=" . $row['id'] . "' class='view-btn'>View</a>
                        <button class='edit-btn'>Edit</button>
                        <button class='delete-btn'>Delete</button>
                    </div>
                  </td>";
            
                    echo "</tr>";
                }
                
                echo "</table>";
            } else {
                echo "<p style='text-align:center;'>No prescriptions found.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <?php include('sidebardoctor.php'); ?>

</body>
</html>
