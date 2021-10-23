-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 04:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stdsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(11) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `aadr` text NOT NULL,
  `about` text NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `ct` varchar(20) NOT NULL,
  `zip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `nm`, `email`, `phoneno`, `aadr`, `about`, `date`, `ct`, `zip`) VALUES
(1, 'sagar', 'sagar@sa.com', '565', 'jsaj', '', '2021-10-23 13:23:08', 'jsaj', ''),
(3, 'rahul', 'rahul12@gmail.com', '56781', 'junagadhh', '', '2021-10-23 14:05:36', 'junagadhh', 'kay nay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
