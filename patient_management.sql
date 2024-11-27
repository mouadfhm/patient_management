-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2024 at 05:01 PM
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
-- Database: `patient_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `mobile`, `date`, `doctor`, `department`, `created_at`) VALUES
(1, 'Patient1', '0694545803', '2024-11-13 00:00:00', 'test', 'dep1', '2024-11-27 11:47:21'),
(5, 'Mouad Fahimi', '0694545803', '2024-01-01 00:00:00', 'doc1', 'dep1', '2024-11-27 12:58:15'),
(8, 'Mouad Fahimi', '0694545803', '2024-01-01 00:00:00', 'doc2', 'dep1', '2024-11-27 14:03:52'),
(9, 'Patient1', '0694545803', '2024-12-31 23:59:00', 'doc1', 'dep1', '2024-11-27 14:14:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
