-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 03:37 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `ID` int(50) NOT NULL,
  `admin_no` int(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`ID`, `admin_no`, `admin_name`, `admin_id`, `password`) VALUES
(1, 1, 'Shaikh Abbas', 'abby101', 'abby@123');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_info`
--

CREATE TABLE `candidate_info` (
  `ID` int(50) NOT NULL,
  `candidate_no` int(50) NOT NULL,
  `candidate_name` varchar(50) NOT NULL,
  `candidate_email` varchar(50) NOT NULL,
  `candidate_sign` varchar(50) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `aadhar_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_info`
--

INSERT INTO `candidate_info` (`ID`, `candidate_no`, `candidate_name`, `candidate_email`, `candidate_sign`, `mobile_no`, `aadhar_no`) VALUES
(1, 1001, 'SODHI', 'hehe@gmail.com', '📺', 5456456, 656465),
(4, 1002, 'BHIDE', 'bhide@gmail.com', '👍', 4156456, 22156454);

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `ID` int(50) NOT NULL,
  `emp_no` int(50) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_city` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `DOB` date DEFAULT NULL,
  `mobile_no` int(50) NOT NULL,
  `aadhar_no` int(50) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`ID`, `emp_no`, `emp_name`, `emp_city`, `gender`, `DOB`, `mobile_no`, `aadhar_no`, `emp_id`, `password`) VALUES
(30, 201, 'Awesh Shaikh', 'Surat', 'Male', '2024-10-09', 123456, 1234567, 'awesh201', 'awesh@123'),
(32, 202, 'Zahid Shaikh', 'Mumbai', 'Male', '2024-10-12', 1231564, 1221545, 'zahid202', 'zahid@123'),
(33, 203, 'Afhaam Puthawala', 'Kerala', 'Male', '2024-10-03', 23345445, 23264545, 'afhaam203 ', 'afhaam@123'),
(34, 204, 'Mahesh', 'Rajasthan', 'Male', '2024-10-18', 897654, 4563214, 'mahesh204', 'mahesh@123'),
(35, 205, 'Suresh', 'Vadodara', 'Male', '2024-10-02', 218546, 1545632, 'suresh205', 'sursh@123'),
(36, 206, 'Kelash', 'Patna', 'Male', '2024-10-10', 326456, 564897, 'kelash206', 'kelash@12');

-- --------------------------------------------------------

--
-- Table structure for table `voting_done`
--

CREATE TABLE `voting_done` (
  `voter_id` int(50) NOT NULL,
  `voter_aadhar` int(50) NOT NULL,
  `voter_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `voter_mobile_no` int(50) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `state` enum('Gujarat','Maharashtra','Uttar Pradesh','Rajasthan') NOT NULL,
  `gave_vote_to` enum('SODHI','BHIDE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voting_done`
--

INSERT INTO `voting_done` (`voter_id`, `voter_aadhar`, `voter_name`, `address`, `voter_mobile_no`, `DOB`, `gender`, `state`, `gave_vote_to`) VALUES
(23001, 32356, 'Abbas Shaikh', 'Ahmedabad', 23654521, '2024-10-09', 'Male', 'Gujarat', 'SODHI'),
(23002, 54315, 'Zahid Shaikh', 'Mumbai', 456541, '2024-10-09', 'Male', 'Maharashtra', 'SODHI'),
(23003, 864645, '656798', 'Juhapura', 879145, '2024-10-07', 'Male', 'Maharashtra', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `candidate_info`
--
ALTER TABLE `candidate_info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `candidate_no` (`candidate_no`),
  ADD UNIQUE KEY `candidate_email` (`candidate_email`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `emp_no` (`emp_no`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `voting_done`
--
ALTER TABLE `voting_done`
  ADD UNIQUE KEY `voter_id` (`voter_id`),
  ADD UNIQUE KEY `voter_aadhar` (`voter_aadhar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_info`
--
ALTER TABLE `candidate_info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
