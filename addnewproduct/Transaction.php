<?php
// Connect to your database (replace these with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inverntory_management_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $transactionId=$_POST["transactionId"];
    $tinNumber=$_POST["transactionId"];
    $category = $_POST["category"];
    $quantity = $_POST["quantity"];
    $price =$_POST["price"];
    $names = $_POST["names"];
    

    
    
    if (empty($category) || empty($quantity) || empty($price)|| empty($names)|| empty($Phone)) {
        echo "Error: All fields are required";
    } else {
        // Prepare and bind SQL statement
        
        $stmt = $conn->prepare("INSERT INTO `transaction_information`(`Transaction_ID`, `TIN_number`, `Product_ID`, `Price_per_unit`, `	Quantity`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$tin, $id,$FirstName, $LastName,$Phone);
        
        if ($stmt->execute()) {
            ?>
<script>
alert("registration done successfully!");
</script>
<?php header("Location: ./welcome.php"); ?>
<?php }
 else { echo "Access to login table denied!" ; } // Close statement 
 $stmt->close();
    }
    }
    $conn->close();
    ?>
