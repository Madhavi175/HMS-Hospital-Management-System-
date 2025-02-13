<?php
ob_start();
include('header.php');

// Database connection
$host = 'localhost';
$db = 'hospital'; 
$user = 'root';
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the medicine_id is passed
if (isset($_GET['medicine_id'])) {
    $medicine_id = $_GET['medicine_id'];

    // Fetch the existing medicine data
    $result = $conn->query("SELECT * FROM medicine WHERE id=$medicine_id");
    $medicine = $result->fetch_assoc();
}

// Check if the form is submitted to update medicine data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $manufacturer = $_POST['manufacturer'];
    $stock_quantity = $_POST['stock_quantity'];
    $expiry_date = $_POST['expiry_date'];
    $price = $_POST['price'];

    // Update the medicine record
    $sql = "UPDATE medicine SET name='$name', manufacturer='$manufacturer', stock_quantity=$stock_quantity, expiry_date='$expiry_date', price=$price WHERE id=$medicine_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect after successful update
        header("Location: medicine.php?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medicine</title>
    <style>
        /* Add your form styling here */
    </style>
</head>
<body>
    <h1>Edit Medicine</h1>

    <!-- Edit Medicine Form -->
    <form action="editmedicine.php?medicine_id=<?= $medicine_id ?>" method="post">
        <label for="name">Medicine Name:</label>
        <input type="text" name="name" value="<?= $medicine['name'] ?>" required>

        <label for="manufacturer">Manufacturer:</label>
        <input type="text" name="manufacturer" value="<?= $medicine['manufacturer'] ?>">

        <label for="stock_quantity">Stock Quantity:</label>
        <input type="number" name="stock_quantity" value="<?= $medicine['stock_quantity'] ?>" required>

        <label for="expiry_date">Expiry Date:</label>
        <input type="date" name="expiry_date" value="<?= $medicine['expiry_date'] ?>" required>

        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" value="<?= $medicine['price'] ?>" required>

        <button type="submit">Update Medicine</button>
    </form>
</body>
</html>

<?php
$conn->close();
ob_end_flush();
?>
