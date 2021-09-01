-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2021 at 04:03 PM
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
-- Database: `doctor_pres`
--

-- --------------------------------------------------------

--
-- Table structure for table `prescription_form`
--

CREATE TABLE `prescription_form` (
  `reg_id` int(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription_form`
--

INSERT INTO `prescription_form` (`reg_id`, `d_name`, `p_name`, `sex`, `age`, `date`) VALUES
(100, 'Rohit', 'rahul', 'male', '35', '2021-09-02'),
(1167132494, 'Goku', 'Naruto', 'Male', '19', '2021-09-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription_form`
--
ALTER TABLE `prescription_form`
  ADD PRIMARY KEY (`reg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
