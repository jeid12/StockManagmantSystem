<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inverntory_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login-submit'])) {
        $username = $_POST['Lusername'];
        $password = $_POST['Lpassword'];

        // Sanitize user input to prevent SQL Injection
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // Query to check user credentials
        $sql = "SELECT * FROM registeraccount WHERE UserName='$username' AND Password1='$password'";
        $result = $conn->query($sql);

        if ($result === false) {
            // Query failed, display error message
            echo "Query failed: " . $conn->error;
        } else {
            // Check if any row was returned
            if ($result->num_rows == 1) {
                // Authentication successful
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: welcome.php"); // Redirect to welcome page
                exit;
            } else {
                echo "Invalid username or password";
            }
        }
    }
}$conn->close();