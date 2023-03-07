-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 07:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-card`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(10) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_message`) VALUES
(1, 'Ganesh Gai', 'ganesh@gmail.com', 'Message to the school\r\n'),
(2, 'Shubham ', 'Shubham@gmail.com', 'Message for the school');

-- --------------------------------------------------------

--
-- Table structure for table `job-card`
--

CREATE TABLE `job-card` (
  `c_id` int(11) NOT NULL,
  `c_firstname` varchar(15) NOT NULL,
  `c_lastname` varchar(15) NOT NULL,
  `work_order` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `vehicle_no` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `completed_action` varchar(200) NOT NULL,
  `total_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job-card`
--

INSERT INTO `job-card` (`c_id`, `c_firstname`, `c_lastname`, `work_order`, `date`, `vehicle_no`, `mileage`, `completed_action`, `total_cost`) VALUES
(1, 'Vaishanavi', 'Dake', 'Work Order Data', '2023-03-16', 203434, 90, 'Completed Action Data', 10000),
(2, 'Parmeshwar ', 'Gaikwad', 'Work Order Data', '2023-03-22', 9009, 90, 'Complete Action Data', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('vaishanavi@gmail.com', 'vaishu'),
('parmeshwar@gmail.com', 'pamu123'),
('swapy@gmail.com', 'swapy');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'parmeshwar', 'gaikwad', 'pamu@gmail', '12345'),
(3, 'a', 'b', 'email@gmai', '12345'),
(6, 'swapy', 'shelke', 'swapy@gmai', '12345'),
(26, 'sachin', 'shelke', 'sachin@gma', 'sachin123'),
(27, 'Ganga', 'Sable', 'ganga@gmai', 'ganga123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `job-card`
--
ALTER TABLE `job-card`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job-card`
--
ALTER TABLE `job-card`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
