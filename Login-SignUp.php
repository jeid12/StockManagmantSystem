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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login-submit"])) {
    $username = $_POST["Lusername"];
    $password = $_POST["Lpassword"];

    // Prepare SQL statement to retrieve hashed password from the database based on the username
    $stmt = $conn->prepare("SELECT Password1 FROM registeraccount WHERE UserName = ?");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("s", $username);

    // Execute the statement
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch the hashed password from the result set
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set up session and redirect to desired page
            $_SESSION["username"] = $username;
            // Redirect to dashboard or any other page after successful login
            header("Location: dashboard.php");
            echo 'successfully';
            exit();
        } else {
            // Password is incorrect
            $error = "Invalid username or password";
        }
    } else {
        // Username not found
        $error = "Invalid username or password";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>