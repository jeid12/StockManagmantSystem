-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
