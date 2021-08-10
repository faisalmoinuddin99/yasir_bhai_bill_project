-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 10, 2021 at 01:07 PM
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
-- Database: `local_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice1` (
  `id` int(11) NOT NULL,
  `bill_no` int(255) NOT NULL,
  `journey_start_date` date NOT NULL,
  `journey_end_date` date NOT NULL,
  `particulars` text NOT NULL,
  `used_hour` double(10,2) NOT NULL,
  `used_distance` double(10,2) NOT NULL,
  `average` double(10,2) NOT NULL,
  `fule_rate` double(10,2) NOT NULL,
  `total1` double(10,2) NOT NULL,
  `car_rent` int(255) NOT NULL,
  `parking_nighthalt` int(255) NOT NULL,
  `TA` int(255) NOT NULL,
  `CGST` double(10,2) NOT NULL,
  `SGST` double(10,2) NOT NULL,
  `optional_charges` double(10,2) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `grand_total` double(10,2) NOT NULL,
  `party_name` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice1` (`id`, `bill_no`, `journey_start_date`, `journey_end_date`, `particulars`, `used_hour`, `used_distance`, `average`, `fule_rate`, `total1`, `car_rent`, `parking_nighthalt`, `TA`, `CGST`, `SGST`, `optional_charges`, `date`, `grand_total`, `party_name`, `address`) VALUES
(1, 462995612, '2021-08-10', '2021-08-12', 'mumbai to USA', 72.00, 1116.00, 40.00, 190.56, 0.00, 5000, 200, 90, 5.00, 18.00, 0.00, '2021-08-10', 6172.36, 'Amazon ', '440 Terry Avenue North Seattle, WA 98109 USA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bill_no` (`bill_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
