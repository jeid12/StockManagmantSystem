<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inverntory_management_system";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Products</title>
    <link rel="stylesheet" href="Available products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo">
        </div>
        <ul class="menu">
            <li class="active">
                <a href="dashboard index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cubes"></i>
                    <span>Available Products</span>
                </a>
            </li>
            <li>
                <a href="Purchases.php">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Purchases</span>
                </a>
            </li>
            <li>
                <a href="Sales.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Sales</span>
                </a>
            </li>
            <li>
                <a href="Statement.php">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statement</span>
                </a>
            </li>

            <li class="logout">
                <a href="../Login.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--tittle">
                <span>Campany Name</span>
                <h2>Available Products</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="bcd dashboard.jpg" alt="">
            </div>
        </div>


        <div class="tabular--wrapper">
            <h3 class="main--title">Current Stock</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>

                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Price per unit</th>
                            <th>Category</th>
                            <th>Address</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //remember to change data base
                        $sql = "SELECT * FROM product_information"; // Replace 'your_table' with your actual table name
                        $result = $conn->query($sql);
                        
                        // Step 3: Fetch the data from the query result
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$row["Product_ID"]."</td>";
                                echo "<td>".$row["Product_Name"]."</td>";
                                echo "<td>".$row["Price_per_unit"]."</td>";
                                echo "<td>".$row["Category"]."</td>";
                                echo "<td>".$row["Address"]."</td>";
                                echo "<td>"."Delivered"."</td>";
                                echo "<td><button>Edit</button>
                                <button>Delete</button> </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        
                     ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">Decent Stock</td>

                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>

</html>