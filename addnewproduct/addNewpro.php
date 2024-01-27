<?php
// Database connection parameters
$servername = "localhost"; // Replace 'localhost' with your MySQL host
$username = "root"; // Replace 'username' with your MySQL username
$password = ""; // Replace 'password' with your MySQL password
$dbname = "inverntory_management_system"; // Replace 'your_database' with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Extract data from POST request
$proId = $_POST['proId'];
$proName = $_POST['proName'];
$category = $_POST['category'];
$Location = $_POST['Location'];
$prices = $_POST['prices'];

// SQL query to insert data into a table
$sql = "INSERT INTO product_information (Product_ID , Product_Name, Price_per_unit, Category) 
        VALUES ('$proId', '$proName', '$prices'', $category )";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>