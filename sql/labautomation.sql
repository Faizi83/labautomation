-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 05:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labautomation`
--

-- --------------------------------------------------------

--
-- Table structure for table `capacitors`
--

CREATE TABLE `capacitors` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `testing_type` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `capacitors`
--

INSERT INTO `capacitors` (`id`, `username`, `date`, `rating`, `testing_type`, `description`) VALUES
(8, 'New ', '2023-10-26', 2, 'Insulation Test', 'this is for capactiors'),
(9, 'capaciter', '2023-10-20', 1, 'Capacitance Test', 'capaciter');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(11, 'mobile', 'Yes'),
(12, 'fues', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `fuses`
--

CREATE TABLE `fuses` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `testing_type` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuses`
--

INSERT INTO `fuses` (`id`, `username`, `date`, `rating`, `testing_type`, `description`) VALUES
(7, 'Faizan', '2023-10-13', 2, 'Time-Current Test', 'this is for fuses'),
(8, 'Faizan', '2023-10-06', 2, 'Time-Current Test', 'pkl;lkl'),
(9, 'fues', '2222-09-21', 4, 'Insulation Test', 'fues'),
(10, 'mobile', '2005-09-21', 4, 'Time-Current Test', 'skdlfjlskdj\r\n'),
(11, 'mobile', '2023-10-19', 2, 'Capacity Test', 'qwee');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeat_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `first_name`, `last_name`, `email`, `password`, `repeat_password`) VALUES
(9, 'faizan', 'amir', 'faizan@gamil.com', '123', '123'),
(10, 'amir', 'namza', 'amir@gmail.com', '$2y$10$A8kXklNeGEmV0V6TkrDNR.MJbqRyC96vXL/AXHEKHSwz0IN1A3uN.', '123'),
(11, 'adil', 'sheikh', 'adilnawa@gmail.com', '$2y$10$1spLUPzhOHcg7wkIzoLP8eEOEnodEngZbRMmb7Lkjjpx7oSUhQXNO', '123'),
(12, 'ali', 'khan', 'ali@gmail.com', '$2y$10$49WlijAOLznhqKrElDxNsuqYS3GshhxQueaWJ3chZZyFNrgjFanni', '123'),
(13, 'ubaid', 'raza', 'ubaid@gmail.com', '$2y$10$RvKfjbzU8VHUMpoP3cC1ROwE/akTUib/DD0yzy5/cxKHmuKBLdR8q', '123'),
(14, 'ubaid', 'raza', 'ubaid@gmail.com', '$2y$10$lcWFEPffwdf3qGNFEBscfen7fmERRUujmH8r8IBu8ecjiSgyiQ/zi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `resistors`
--

CREATE TABLE `resistors` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `testing_type` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resistors`
--

INSERT INTO `resistors` (`id`, `username`, `date`, `rating`, `testing_type`, `description`) VALUES
(8, 'shahid', '2023-10-06', 1, 'Noise Test', 'this is for resistors');

-- --------------------------------------------------------

--
-- Table structure for table `switchgears`
--

CREATE TABLE `switchgears` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `testing_type` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `switchgears`
--

INSERT INTO `switchgears` (`id`, `username`, `date`, `rating`, `testing_type`, `description`) VALUES
(8, 'Allo', '2023-10-18', 1, 'Protection Test', 'this is for  switchgears');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capacitors`
--
ALTER TABLE `capacitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `fuses`
--
ALTER TABLE `fuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resistors`
--
ALTER TABLE `resistors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `switchgears`
--
ALTER TABLE `switchgears`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacitors`
--
ALTER TABLE `capacitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fuses`
--
ALTER TABLE `fuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `resistors`
--
ALTER TABLE `resistors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `switchgears`
--
ALTER TABLE `switchgears`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
