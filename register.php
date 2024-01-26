<?php
// Connect to your database (replace these with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inverntory_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sign-submit"])) {
    $username = $_POST["Rusername"];
    $email = $_POST["Remail"];
    $password = $_POST["Rpassword"];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    if (empty($username) || empty($password) || empty($email)) {
        echo "Error: All fields are required";
    } else {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO registeraccount (UserName, Email, Password1) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email,  $hashedPassword);
        
        if ($stmt->execute()) {
            ?>
<script>
alert("registration done successfully!");
</script>
<?php header("Location: ./login.php"); ?>
<?php }
 else { echo "Access to login table denied!" ; } // Close statement $stmt->close();
    }
    }
    $conn->close();
    ?>