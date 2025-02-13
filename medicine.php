<?php
include('header.php');
ob_start(); // Start output buffering



// Database connection
$host = 'localhost';
$db = 'hospital'; // Your database name
$user = 'root';
$pass = ''; // Your database password

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$successMessage = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $manufacturer = $_POST['manufacturer'];
    $stock_quantity = $_POST['stock_quantity'];
    $expiry_date = $_POST['expiry_date'];
    $price = $_POST['price'];

    // Check if the form is in edit mode
    if (!empty($_POST['medicine_id'])) {
        $medicine_id = $_POST['medicine_id'];
        $sql = "UPDATE medicine SET name='$name', manufacturer='$manufacturer', stock_quantity=$stock_quantity, expiry_date='$expiry_date', price=$price WHERE id=$medicine_id";
    } else {
        // Insert new medicine if no medicine_id is set
        $sql = "INSERT INTO medicine (name, manufacturer, stock_quantity, expiry_date, price)
                VALUES ('$name', '$manufacturer', $stock_quantity, '$expiry_date', $price)";
    }

    if ($conn->query($sql) === TRUE) {
        // Redirect to avoid form resubmission
        header("Location: medicine.php?success=1");
        exit(); // Ensure no further code is executed after redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Check for success message in the URL
if (isset($_GET['success'])) {
    $successMessage = "Medicine saved successfully!";
}

// Fetch all medicines
$medicines = $conn->query("SELECT * FROM medicine ORDER BY created_at DESC");
?>
<!-- Your HTML content goes here -->

<?php
ob_end_flush(); // End and flush the output buffer
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Management</title>
    <style>
        /* Basic CSS */
        body {
            font-family: Arial, sans-serif;
            /* margin: 10px; */
            background-color: white;
            
        }
        .medicine-container h1 {
    font-family: Georgia, 'Times New Roman', Times, serif;
    text-align: center;
    font-weight: bold;
}

.medicine-container h2 {
    font-weight: bold;
    margin-bottom: 20px;
}

      
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            
        }
   
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align:center;
        }
        th {
            background-color: #6A5ACD;
            color: white;
        }
       
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease; 
            margin-bottom: 10px;
        }
        input, select {
            padding: 8px;
            width: 100%;
            margin-bottom: 10px;
            
            border: 1px solid #ddd;
            
        }
        button {
            padding: 10px 20px;
            background-color: #6A5ACD;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #574bbd;
        }
        .message {
            color: green;
            margin-bottom: 20px;
        }
        
        .scrollable-container {
       
        overflow-x: auto;
        padding: 10px;
        background: #fff;
        border-radius: 4px;
        border: 1px solid #ddd;
        margin-top: 10px;
    }
    /* Button styles */
/* Button styles */
.btn {
    display: inline-block;
    padding: 8px 12px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    margin: 2px;
    cursor: pointer;
}

/* Edit button */
.btn-edit {
    background-color: #4CAF50; /* Green */
    color: white;
}

.btn-edit:hover {
    background-color: #45a049; /* Darker green on hover */
}

/* Delete button */
.btn-delete {
    background-color: #f44336; /* Red */
    color: white;
}

.btn-delete:hover {
    background-color: #d32f2f; /* Darker red on hover */
}

    </style>
</head>
<body>
<div class="scrollable-container">
<!-- Wrapper for all content -->
<div class="content-wrapper" id="content-wrapper">
<div class="medicine-container">
    <h1>Medicine Management</h1>
    
</div>

    <?php if ($successMessage) : ?>
        <p class="message"><?= $successMessage ?></p>
    <?php endif; ?>

    <!-- Add/Edit Medicine Form -->
    <form action="medicine.php" method="post">
    
    <input type="hidden" name="medicine_id" value="<?= isset($_GET['medicine_id']) ? $_GET['medicine_id'] : '' ?>">
    <label for="name">Medicine Name:</label>
    <input type="text" name="name" value="<?= isset($medicine['name']) ? $medicine['name'] : '' ?>" required>

    <label for="manufacturer">Manufacturer:</label>
    <input type="text" name="manufacturer" value="<?= isset($medicine['manufacturer']) ? $medicine['manufacturer'] : '' ?>">

    <label for="stock_quantity">Stock Quantity:</label>
    <input type="number" name="stock_quantity" value="<?= isset($medicine['stock_quantity']) ? $medicine['stock_quantity'] : '' ?>" required>

    <label for="expiry_date">Expiry Date:</label>
    <input type="date" name="expiry_date" value="<?= isset($medicine['expiry_date']) ? $medicine['expiry_date'] : '' ?>" required>

    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" value="<?= isset($medicine['price']) ? $medicine['price'] : '' ?>" required>

    <button type="submit">Save Medicine</button>
</form>


<div class="medicine-container">
       <h2>Medicine List</h2>
</div>

<table>
    <thead>
        <tr>
            <th>Medicine Name</th>
            <th>Manufacturer</th>
            <th>Stock Quantity</th>
            <th>Expiry Date</th>
            <th>Price</th>
            <th>Actions</th> <!-- New column for Edit and Delete actions -->
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $medicines->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['manufacturer'] ?></td>
            <td><?= $row['stock_quantity'] ?></td>
            <td><?= $row['expiry_date'] ?></td>
            <td><?= $row['price'] ?></td>
            <td>
    <!-- Edit button links to editmedicine.php with medicine_id -->
    <a href="editmedicine.php?medicine_id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>

    <!-- Delete button links to delete_medicine.php with medicine_id -->
    <a href="delete_medicine.php?medicine_id=<?= $row['id'] ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this medicine?');">Delete</a>
</td>

        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</div>

<!-- Include sidebar -->
<?php
include('sidebardoctor.php');
?>



</body>
</html>

<?php $conn->close(); ?>
