-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2026 at 02:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `users1993`
--

CREATE TABLE `users1993` (
  `S_No` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `dt` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1993`
--

INSERT INTO `users1993` (`S_No`, `Email`, `Password`, `dt`) VALUES
(24, 'admin@gmail.com', '$2y$10$hxQHzlRAO.9ddskllXlcgeVvYniiHUEtBSgaHsnoodx/I1YARFA36', '2026-03-05 01:12:18.000000'),
(25, 'abc@gmail.com', '$2y$10$nC28sTvLmM9hIoitWBT09eTE6NChuKeQ/UE.2PseFB7GMY/WpueHu', '2026-03-05 01:12:51.000000'),
(26, 'zahid@gmail.com', '$2y$10$mH3nidX/Y8q3bbDE034vjuhxTuA6PpjecMq92HW3.FQMAFcaDWVFe', '2026-03-05 01:13:20.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users1993`
--
ALTER TABLE `users1993`
  ADD PRIMARY KEY (`S_No`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `dt` (`dt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users1993`
--
ALTER TABLE `users1993`
  MODIFY `S_No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
