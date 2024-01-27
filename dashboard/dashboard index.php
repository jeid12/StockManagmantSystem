<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "inverntory_management_system";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo">
        </div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="Available Products.php">
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
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="bcd dashboard.jpg" alt="">
            </div>
        </div>
        <div class="card--container">
            <h3 class="main--title">Warning!!!</h3>
            <div class="card-wrapper ">
                <div class="payment--card light-red">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                Lenovo Thinkpad i7
                            </span>
                            <span class="amount-value">
                                $0.37</span>
                        </div>
                        <i class="fas fa-shopping-cart icon"></i>
                    </div>
                    <span class="card-detail">Almost Empty
                    </span>
                </div>
                <div class="payment--card2">
                    <div class="card--header">
                        <div class="amount">
                            <span class="title">
                                HP i7
                            </span>
                            <span class="amount-value">
                                $10000.00</span>
                        </div>
                        <i class="fas fa-cubes icon-1"></i>
                    </div>
                    <span class="card-detail">Not Moving
                    </span>
                </div>

            </div>

        </div>

        <div class="tabular--wrapper">
            <h3 class="main--title">Current Stock</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>

                            <th>Product Type</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>Price /Unit</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>Lenovo </td>
                            <td>Thinkpad i7</td>
                            <td>A002</td>
                            <td>$340</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>Lenovo </td>
                            <td>i7</td>
                            <td>A003</td>
                            <td>$240</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Laptop
                            </td>
                            <td>HP</td>
                            <td>i7</td>
                            <td>A001</td>
                            <td>$220</td>
                            <td>Decent</td>
                            <td>
                                <button>Edit</button>
                            </td>
                        </tr>
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