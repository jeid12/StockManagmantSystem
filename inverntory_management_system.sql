-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 03:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inverntory_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_information`
--

CREATE TABLE `product_information` (
  `Product_ID` varchar(20) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_location`
--

CREATE TABLE `product_location` (
  `Exact_Address` varchar(20) NOT NULL,
  `Location_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_information`
--

CREATE TABLE `purchase_information` (
  `Transaction_ID` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` double NOT NULL,
  `Price_per_unit` double NOT NULL,
  `Total_Amount` double NOT NULL,
  `Date_Of_Purchase` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Supplier_Name` varchar(25) NOT NULL,
  `Location_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registeraccount`
--

CREATE TABLE `registeraccount` (
  `UserName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeraccount`
--

INSERT INTO `registeraccount` (`UserName`, `Email`, `Password1`) VALUES
('Niyo', 'niyokwizerajd123@gmail.com', '$2y$10$2ckKup4rteyGNqMG43LaE.riG/43j.7ZPXOrrsoQkbIxukPfL021.'),
('Niyo', 'niyokwizerajd123@gmail.com', '$2y$10$04XuMXg6VRaKMOOkXeL7uumlYWPqdFsxuDsuUuScZa.6sESGh3We.'),
('Niyob', 'niyo@gmail.com', '$2y$10$rKD4MH7JJtl.oSmWrIiL/e7oLkkGVW4iQ7njkwzOLFApSrtyUfywG'),
('Niyob', 'niyo@gmail.com', '$2y$10$n2eyR33Vu6Sfo0yiZu4aXOqsuJqCxOXmwRVSRO0oFqG.G4Swzl.Ua'),
('Niyo', 'niyo@gmail.com', '$2y$10$jnFGvrq/iDeH1lMvUpdpq.tg.F2yrkbGpgYcVMu76MYHbX8Y4BbHS');

-- --------------------------------------------------------

--
-- Table structure for table `sales_information`
--

CREATE TABLE `sales_information` (
  `Transaction_ID` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` double NOT NULL,
  `Price_per_unit` double NOT NULL,
  `Total_Amount` double NOT NULL,
  `Date_Of_Sales` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Client_Name` varchar(25) NOT NULL,
  `Location_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_information`
--

CREATE TABLE `transaction_information` (
  `Transaction_ID` varchar(20) NOT NULL,
  `TIN_number` varchar(20) NOT NULL,
  `Product_ID` varchar(20) NOT NULL,
  `Price_per_unit` double NOT NULL,
  `Quantity` double NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Type` enum('purchase','sales') NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Supplier/Client` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `TIN_number` varchar(20) NOT NULL,
  `User_SSID` varchar(16) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Passwords` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_information`
--
ALTER TABLE `product_information`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Address` (`Address`);

--
-- Indexes for table `product_location`
--
ALTER TABLE `product_location`
  ADD PRIMARY KEY (`Exact_Address`);

--
-- Indexes for table `purchase_information`
--
ALTER TABLE `purchase_information`
  ADD KEY `	Foreign key` (`Product_ID`),
  ADD KEY `	Address Foreign key` (`Location_Name`),
  ADD KEY `transaction_id foreign key` (`Transaction_ID`);

--
-- Indexes for table `sales_information`
--
ALTER TABLE `sales_information`
  ADD KEY `Address Foreign key` (`Location_Name`),
  ADD KEY `Product Foreign key` (`Product_ID`),
  ADD KEY `transaction_id1 foreign key` (`Transaction_ID`);

--
-- Indexes for table `transaction_information`
--
ALTER TABLE `transaction_information`
  ADD PRIMARY KEY (`Transaction_ID`),
  ADD KEY `Product_name foreign key` (`Product_ID`),
  ADD KEY `Location_address foreign key` (`Address`),
  ADD KEY `Tin_number foreign key` (`TIN_number`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`TIN_number`),
  ADD UNIQUE KEY `unique_user_id` (`User_SSID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_information`
--
ALTER TABLE `product_information`
  ADD CONSTRAINT `product_information_ibfk_1` FOREIGN KEY (`Address`) REFERENCES `product_location` (`Exact_Address`);

--
-- Constraints for table `purchase_information`
--
ALTER TABLE `purchase_information`
  ADD CONSTRAINT `	Address Foreign key` FOREIGN KEY (`Location_Name`) REFERENCES `product_location` (`Exact_Address`),
  ADD CONSTRAINT `	Foreign key` FOREIGN KEY (`Product_ID`) REFERENCES `product_information` (`Product_ID`),
  ADD CONSTRAINT `transaction_id foreign key` FOREIGN KEY (`Transaction_ID`) REFERENCES `transaction_information` (`Transaction_ID`);

--
-- Constraints for table `sales_information`
--
ALTER TABLE `sales_information`
  ADD CONSTRAINT `Address Foreign key` FOREIGN KEY (`Location_Name`) REFERENCES `product_location` (`Exact_Address`),
  ADD CONSTRAINT `Product Foreign key` FOREIGN KEY (`Product_ID`) REFERENCES `product_information` (`Product_ID`),
  ADD CONSTRAINT `transaction_id1 foreign key` FOREIGN KEY (`Transaction_ID`) REFERENCES `transaction_information` (`Transaction_ID`);

--
-- Constraints for table `transaction_information`
--
ALTER TABLE `transaction_information`
  ADD CONSTRAINT `Location_address foreign key` FOREIGN KEY (`Address`) REFERENCES `product_location` (`Exact_Address`),
  ADD CONSTRAINT `Product_name foreign key` FOREIGN KEY (`Product_ID`) REFERENCES `product_information` (`Product_ID`),
  ADD CONSTRAINT `Tin_number foreign key` FOREIGN KEY (`TIN_number`) REFERENCES `useraccount` (`TIN_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
