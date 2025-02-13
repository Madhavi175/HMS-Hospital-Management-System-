<?php
include('header.php');
?>
<?php
// Include database connection file
include('db_connection.php'); // Make sure to have a file for database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get patient info
    $patientName = $_POST['patientName'];
    $patientAddress = $_POST['patientAddress'];
    $contactNumber = $_POST['contactNumber'];

    // Get selected medicines
    $medicineList = $_POST['medicineList'];
    $otherMedicine = isset($_POST['otherMedicine']) && !empty($_POST['otherMedicine']) ? $_POST['otherMedicine'] : '';

    // Get timings and tablet counts
    $timings = [];
    $timingOptions = ['Morning', 'Before Meal', 'After Meal', 'Afternoon', 'Evening'];

    foreach ($timingOptions as $timing) {
        if (isset($_POST['timing']) && in_array($timing, $_POST['timing'])) {
            $timingKey = strtolower(str_replace(' ', '', $timing)) . 'Tablets';
            $tabletCount = isset($_POST[$timingKey]) ? $_POST[$timingKey] : '';
            $timings[] = $timing . ': ' . $tabletCount;
        }
    }

    // Prepare medicine data
    $selectedMedicine = $medicineList == 'Other' ? $otherMedicine : $medicineList;
    $timingsSerialized = implode(', ', $timings);

    // SQL query to insert data into the database
    $sql = "INSERT INTO prescriptions (patient_name, patient_address, contact_number, medicines, timings) 
            VALUES ('$patientName', '$patientAddress', '$contactNumber', '$selectedMedicine', '$timingsSerialized')";

    if (mysqli_query($conn, $sql)) {
        echo "Prescription saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>
<style>
.prescription-form {
  width: 50%;
   margin: auto;
   top: 30%; 
  padding: 20px;
  border: 1px solid #ddd;
  background-color: #f9f9f9;

}
h1{
  font-family: Georgia, 'Times New Roman', Times, serif;
  text-align: center;
  font-weight: bold;

}
.patient-info, .medicine-selection, .medicine-timing {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
}

input[type="text"], select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
}

button {
  padding: 10px 20px;
  margin-right: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

.medicine-selection {
  display: flex;
  flex-direction: column;
}

.medicine-dropdown {
  display: flex;
  justify-content: space-between;
}

.medicine-dropdown select {
  width: 70%;
}

.medicine-dropdown input {
  width: 25%;
}

/* Additional CSS for small dropdown */
.small-dropdown {
  width: 40%; /* Adjust the width as needed */
  font-size: 0.9em; /* Smaller font size */
  margin-left: 10px; /* Space between checkbox label and dropdown */
}
</style>

<div class="prescription-form">
  <h1>Prescription Form</h1>
  <form  method="POST">
  <!-- Patient Information -->
  <div class="patient-info">
    <label for="patientName">Patient's Name:</label>
    <input type="text" id="patientName" name="patientName">

    <label for="patientAddress">Patient's Address:</label>
    <input type="text" id="patientAddress" name="patientAddress">

    <label for="contactNumber">Contact Number:</label>
    <input type="text" id="contactNumber" name="contactNumber">
  </div>

  <!-- Medicine Selection -->
  <div class="medicine-selection">
    <h3>Select Medicines:</h3>

    <!-- Medicine Dropdown with Search and 'Other' option -->
    <div class="medicine-dropdown">
      <select id="medicineList" name="medicineList">
        <option value="" disabled selected>Select Medicine</option>
        <option value="Paracetamol">Paracetamol</option>
        <option value="Ibuprofen">Ibuprofen</option>
        <option value="Amoxicillin">Amoxicillin</option>
        <option value="Cetirizine">Cetirizine</option>
        <option value="Metformin">Metformin</option>
        <option value="Aspirin">Aspirin</option>
        <option value="Ciprofloxacin">Ciprofloxacin</option>
        <option value="Levothyroxine">Levothyroxine</option>
        <option value="Other">Other</option>
      </select>

      <!-- Input box for 'Other' medicine -->
      <input type="text" id="otherMedicine" name="otherMedicine" placeholder="Other medicine" disabled>
    </div>
  </div>

  <!-- Timing Selection -->
  <div class="medicine-timing">
    <h3>Timing:</h3>
    <label>
  <input type="checkbox" name="timing[]" value="Morning"> Morning
  <select name="morningTablets" class="small-dropdown">
    <option value="" disabled selected>Select Tablets</option>
    <option value="1">1 Tablet</option>
    <option value="2">2 Tablets</option>
    <option value="1/2">1/2 Tablets</option>
  </select>
</label>
<label>
  <input type="checkbox" name="timing[]" value="Before Meal"> Before Meal
  <select name="beforeMealTablets" class="small-dropdown">
    <option value="" disabled selected>Select Tablets</option>
    <option value="1">1 Tablet</option>
    <option value="2">2 Tablets</option>
    <option value="1/2">1/2 Tablets</option>
  </select>
</label>
<label>
  <input type="checkbox" name="timing[]" value="After Meal"> After Meal
  <select name="afterMealTablets" class="small-dropdown">
    <option value="" disabled selected>Select Tablets</option>
    <option value="1">1 Tablet</option>
    <option value="2">2 Tablets</option>
    <option value="1/2">1/2 Tablets</option>
  </select>
</label>
<label>
  <input type="checkbox" name="timing[]" value="Afternoon"> Afternoon
  <select name="afternoonTablets" class="small-dropdown">
    <option value="" disabled selected>Select Tablets</option>
    <option value="1">1 Tablet</option>
    <option value="2">2 Tablets</option>
    <option value="1/2">1/2 Tablets</option>
  </select>
</label>
<label>
  <input type="checkbox" name="timing[]" value="Evening"> Evening
  <select name="eveningTablets" class="small-dropdown">
    <option value="" disabled selected>Select Tablets</option>
    <option value="1">1 Tablet</option>
    <option value="2">2 Tablets</option>
    <option value="1/2">1/2 Tablets</option>
  </select>
</label>

  </div>

  <!-- Action Buttons -->
  <div class="action-buttons">
    <button type="submit">Save</button>
    <button type="button">Delete</button>
    <button type="button" onclick="window.print()">Print</button>
  </div>
</div>
</form>
<script>
  // Disable/enable 'Other' input field based on dropdown selection
  document.getElementById('medicineList').addEventListener('change', function () {
    const otherMedicineInput = document.getElementById('otherMedicine');
    if (this.value === 'Other') {
      otherMedicineInput.disabled = false;
    } else {
      otherMedicineInput.disabled = true;
      otherMedicineInput.value = ''; // Clear the input field when not in use
    }
  });
</script>
<?php
include('sidebardoctor.php');
?>
