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
    
    if (empty( empty($username) ||  empty($password)) || empty($email)) {
         echo  "Error: All fields are required?";
        }else{
        $query1="INSERT INTO `registeraccount`(`UserName`, `Email`, `password`) VALUES ($username,$email,$hashedPassword)";
        if ($conn->query($query1) === TRUE){
            echo "added also to login table successful!";
         }else{
            echo "Acess to login table dinied!";
         }
       }
    
   

    // Close statement
    $conn->close();
        }
?>