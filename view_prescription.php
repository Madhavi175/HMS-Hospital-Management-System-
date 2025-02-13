<?php
include('db_connection.php');

// Fetch the prescription ID from the URL
$prescription_id = $_GET['id'];

// Fetch the prescription data from the database
$sql = "SELECT * FROM prescriptions WHERE id = '$prescription_id'";
$result = mysqli_query($conn, $sql);

// Check if a prescription was found
if ($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            /* Add some padding to the body */
            background-color: white; /* Background color for the body */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes full height */
        }

        .header {
            background-color: #4CAF50; /* Header background color */
            color: white; /* Header text color */
            padding: 10px 20px;
           /* margin-left: 0px; */
            height: 70px;
            text-align: center; /* Center the header text */
            margin-bottom: 20px; /* Space below the header */
        }

        h1 {
            margin: 0; /* Remove default margin */
        }

        h2 {
            text-align: center; /* Center the subtitle */
            margin-bottom: 20px; /* Space below the subtitle */
        }

        .prescription-detail {
            margin-bottom: 15px;
            padding: 10px;
        }

        .prescription-detail label {
            font-weight: bold;
            display: block; /* Display as block for full width */
            margin-bottom: 5px; /* Space below the label */
        }

        .prescription-detail p {
            margin: 0;
        }

        /* Print button styling */
        .print-btn {
            padding: 10px 15px;
            border: none;
            background-color: #4CAF50; /* Button color */
            color: white; /* Button text color */
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Center the button below details */
            margin: 20px auto; /* Center the button */
            width: 150px; /* Fixed width for button */
        }

        .footer {
            background-color: #4CAF50; /* Footer background color */
            color: white; /* Footer text color */
            text-align: center; /* Center footer text */
            padding: 10px; /* Padding for footer */
            margin-top: auto; /* Push footer to the bottom */
        }

        /* Print styles */
        @media print {
            .print-btn {
                display: none; /* Hide the print button on print */
            }

            /* Ensure header and footer colors are printed */
            .header,
            .footer {
                -webkit-print-color-adjust: exact; /* For WebKit browsers */
                color-adjust: exact; /* For other browsers */
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>XYZ Hospital</h1>
</div>

<h2>Prescription Details</h2>

<div class="prescription-detail">
    <label>Patient Name:</label>
    <p><?php echo htmlspecialchars($row['patient_name']); ?></p>
</div>

<div class="prescription-detail">
    <label>Address:</label>
    <p><?php echo nl2br(htmlspecialchars($row['patient_address'])); ?></p>
</div>

<div class="prescription-detail">
    <label>Contact Number:</label>
    <p><?php echo htmlspecialchars($row['contact_number']); ?></p>
</div>

<div class="prescription-detail">
    <label>Medicines:</label>
    <p><?php echo nl2br(htmlspecialchars($row['medicines'])); ?></p>
</div>

<div class="prescription-detail">
    <label>Timings:</label>
    <p><?php echo htmlspecialchars($row['timings']); ?></p>
</div>

<!-- Print button -->
<button onclick="window.print()" class="print-btn">Print</button>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 XYZ Hospital | All rights reserved</p>
</div>

</body>
</html>

<?php
} else {
    echo "<p>Prescription not found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>
