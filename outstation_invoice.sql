-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2021 at 06:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outstation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `outstation_invoice`
--

CREATE TABLE `outstation_invoice` (
  `id` int(255) NOT NULL,
  `party_name` text NOT NULL,
  `address` text NOT NULL,
  `bill_no` int(255) NOT NULL,
  `journey_start` date NOT NULL,
  `journey_end` date NOT NULL,
  `particulars` text NOT NULL,
  `used_hour` double(10,2) NOT NULL,
  `used_km` double(10,2) NOT NULL,
  `fuel` double(10,2) NOT NULL,
  `rate` double(10,2) NOT NULL,
  `total1` double(10,2) NOT NULL,
  `nigh_halt` int(255) NOT NULL,
  `TA` int(255) NOT NULL,
  `CGST` double(10,2) NOT NULL,
  `SCGST` double(10,2) NOT NULL,
  `toll_tax` double(10,2) NOT NULL,
  `any_other` double(10,2) DEFAULT NULL,
  `grand_total` double(10,2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outstation_invoice`
--

INSERT INTO `outstation_invoice` (`id`, `party_name`, `address`, `bill_no`, `journey_start`, `journey_end`, `particulars`, `used_hour`, `used_km`, `fuel`, `rate`, `total1`, `nigh_halt`, `TA`, `CGST`, `SCGST`, `toll_tax`, `any_other`, `grand_total`, `date`) VALUES
(1, 'samsung', 'south korea', 1812999582, '2021-08-10', '2021-08-12', 'car', 48.00, 500.00, 40.00, 500.00, 250000.00, 200, 1000, 9.00, 7.00, 40.00, 500.00, 286457.24, '2021-08-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `outstation_invoice`
--
ALTER TABLE `outstation_invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bill_no` (`bill_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `outstation_invoice`
--
ALTER TABLE `outstation_invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
