<?php
// Database connection
$host = 'localhost';
$db = 'hospital'; 
$user = 'root';
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the medicine_id is passed via URL
if (isset($_GET['medicine_id'])) {
    $medicine_id = $_GET['medicine_id'];

    // Delete the medicine record from the database
    $sql = "DELETE FROM medicine WHERE id=$medicine_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the medicine list after successful deletion
        header("Location: medicine.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Redirect if no medicine_id is found
    header("Location: medicine.php");
    exit();
}

$conn->close();
?>
