-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 11:00 AM
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
  `Price_per_unit` double NOT NULL,
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
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` double NOT NULL,
  `Price_per_unit` double NOT NULL,
  `Total_Amount` double NOT NULL,
  `Date_Of_Purchase` date NOT NULL,
  `Supplier_Name` varchar(25) NOT NULL,
  `Location_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_information`
--

CREATE TABLE `sales_information` (
  `Product_ID` varchar(20) NOT NULL,
  `Quantity` double NOT NULL,
  `Price_per_unit` double NOT NULL,
  `Total_Amount` double NOT NULL,
  `Date_Of_Sales` date NOT NULL,
  `Client_Name` varchar(25) NOT NULL,
  `Location_Name` varchar(20) NOT NULL
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
  ADD KEY `	Address Foreign key` (`Location_Name`);

--
-- Indexes for table `sales_information`
--
ALTER TABLE `sales_information`
  ADD KEY `Address Foreign key` (`Location_Name`),
  ADD KEY `Product Foreign key` (`Product_ID`);

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
  ADD CONSTRAINT `	Foreign key` FOREIGN KEY (`Product_ID`) REFERENCES `product_information` (`Product_ID`);

--
-- Constraints for table `sales_information`
--
ALTER TABLE `sales_information`
  ADD CONSTRAINT `Address Foreign key` FOREIGN KEY (`Location_Name`) REFERENCES `product_location` (`Exact_Address`),
  ADD CONSTRAINT `Product Foreign key` FOREIGN KEY (`Product_ID`) REFERENCES `product_information` (`Product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
