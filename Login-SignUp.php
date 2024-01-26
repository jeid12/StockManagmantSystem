<?php
// Connect to your database (replace these with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    
}?>
<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<?php if (isset($_GET['error'])) { ?>
<div class="alert alert-danger" role="alert">
    <?=$_GET['error']?>
</div>
<?php } ?>




<?php // Get the user input

?>
<?php }?>