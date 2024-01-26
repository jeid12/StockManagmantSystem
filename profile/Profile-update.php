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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $FirstName = $_POST["fname"];
    $LastName = $_POST["lname"];
    $id = $_POST["SSID"];
    $tin =$_POST["TIN"];
    $Phone = $_POST["phone"];

    
    
    if (empty($FirstName) || empty($LastName) || empty($id)|| empty($tin)|| empty($Phone)) {
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