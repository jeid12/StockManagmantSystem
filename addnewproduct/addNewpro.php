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
    $proId= $_POST["proId"];
    $proName = $_POST["proName"];
    $category = $_POST["category"];
    $Location =$_POST["Location"];
    $prices = $_POST["prices"];

    
    
    if (empty($proId) || empty($proName) || empty($category)|| empty( $Location)|| empty($prices)) {
        echo "Error: All fields are required";
    } else {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO products(product_Id,Product_name,category,locations, Prices) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$proId, $proName,$category, $Location,$prices);
        
        if ($stmt->execute()) {
            ?>
<script>
alert("registration done successfully!");
</script>
<?php header("Location: ../dashboard/dashboard index.php"); ?>
<?php }
 else { echo "Access to login table denied!" ; } // Close statement 
 $stmt->close();
    }
    }
    $conn->close();
    ?>