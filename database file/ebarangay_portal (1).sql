-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 05:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebarangay_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(5) NOT NULL,
  `activity` enum('Event','Announcement') NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `place` varchar(250) NOT NULL,
  `image` varchar(50) NOT NULL,
  `heading` text NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity`, `title`, `date`, `time`, `place`, `image`, `heading`, `description`) VALUES
(1, 'Event', 'Barangay Clean-Up Day', '2023-09-28', '2:00 PM - 4:00 PM', 'Tanghalang Onofre Pagsanghan', '', 'Join us for a day of community pride and environmental stewardship! ', 'The Barangay Clean-Up Day is a wonderful opportunity for residents to come together and make a positive impact on our environment.\r\n\r\nEvent Highlights:\r\nClean-up Activities: We\'ll provide gloves, bags, and other materials. Let\'s work together to clean up our streets, parks, and public areas.\r\nEnvironmental Awareness: Learn about sustainable practices and how we can reduce our ecological footprint.\r\nCommunity Bonding: Connect with your neighbors, build new friendships, and strengthen the sense of community in our barangay.\r\nPrizes and Giveaways: Participate in our friendly clean-up competition for a chance to win prizes and enjoy refreshments.\r\n\r\nHow to Participate:\r\nRegister: Sign up on the eBarangay Portal to confirm your participation.\r\nDress Accordingly: Wear comfortable clothing, closed-toe shoes, and don\'t forget your hat and sunscreen.\r\nArrive Early: Be at the meeting point on time to receive your clean-up supplies and instructions.\r\nHave Fun: Enjoy a rewarding day of making a positive impact on our barangay!');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_cert_submission`
--

CREATE TABLE `brgy_cert_submission` (
  `ID` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` set('Male','Female') NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `purpose` set('Purpose 1','Purpose 2') NOT NULL,
  `status` enum('Pending','Approved','Denied','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brgy_cert_submission`
--

INSERT INTO `brgy_cert_submission` (`ID`, `firstname`, `lastname`, `age`, `sex`, `phone_no`, `address`, `purpose`, `status`) VALUES
(1, 'Nina', 'Juntarciego', 21, 'Female', 2147483647, 'South Trinidad st.', '', 'Pending'),
(2, 'Nina', 'Juntarciego', 21, 'Female', 2147483647, 'South Trinidad st.', '', 'Pending'),
(3, 'Maricris', 'Valdez', 50, 'Female', 444222, '2130 int.7', '', 'Pending'),
(5, 'Maricris', 'Valdez', 50, 'Female', 444222, '2130 int.7', '', 'Pending'),
(6, 'Maricris', 'Valdez', 50, 'Female', 444222, '2130 int.7', '', 'Pending'),
(7, 'Nina', 'Juntarciego', 21, 'Female', 2147483647, 'South Trinidad st.', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_officials`
--

CREATE TABLE `brgy_officials` (
  `ID` int(25) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `committee` enum('1','2') NOT NULL,
  `position` enum('a','b') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_projects`
--

CREATE TABLE `brgy_projects` (
  `ID` int(25) NOT NULL,
  `proj_title` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brgy_residents`
--

CREATE TABLE `brgy_residents` (
  `ID` int(25) NOT NULL,
  `resident_name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `burial_assistance_submission`
--

CREATE TABLE `burial_assistance_submission` (
  `ID` int(25) NOT NULL,
  `deceased` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `address` varchar(50) NOT NULL,
  `cause_of_death` tinytext NOT NULL,
  `date_of_death` date NOT NULL,
  `beneficiary` varchar(50) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_permit_submission`
--

CREATE TABLE `business_permit_submission` (
  `ID` int(10) NOT NULL,
  `business` varchar(70) NOT NULL,
  `type` set('type1','type2') NOT NULL,
  `business_address` varchar(70) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `owner_address` varchar(70) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `status` enum('Pending','Approved','Denied','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_permit_submission`
--

INSERT INTO `business_permit_submission` (`ID`, `business`, `type`, `business_address`, `owner`, `owner_address`, `phone_no`, `email`, `status`) VALUES
(1, 'Bapbap\'s Bakery', 'type1', '0', 'Bapbap', '2130 int.7', 444222, 'bapbap@gmail.com', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `financial_assistance_submission`
--

CREATE TABLE `financial_assistance_submission` (
  `ID` int(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_assistance_submission`
--

CREATE TABLE `medical_assistance_submission` (
  `ID` int(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `senior_citizen_application`
--

CREATE TABLE `senior_citizen_application` (
  `ID` int(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `brgy_cert` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `user_password`) VALUES
(1, 'Nina Juntarciego', '09516387226', 'vzedlav@yahoo.com', 'Ninamae122301'),
(3, 'Rem Mark', '0922444777', 'remmark@gmail.com', 'remMark00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgy_cert_submission`
--
ALTER TABLE `brgy_cert_submission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgy_projects`
--
ALTER TABLE `brgy_projects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgy_residents`
--
ALTER TABLE `brgy_residents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `burial_assistance_submission`
--
ALTER TABLE `burial_assistance_submission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `business_permit_submission`
--
ALTER TABLE `business_permit_submission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `financial_assistance_submission`
--
ALTER TABLE `financial_assistance_submission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medical_assistance_submission`
--
ALTER TABLE `medical_assistance_submission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `senior_citizen_application`
--
ALTER TABLE `senior_citizen_application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgy_cert_submission`
--
ALTER TABLE `brgy_cert_submission`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brgy_officials`
--
ALTER TABLE `brgy_officials`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgy_projects`
--
ALTER TABLE `brgy_projects`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgy_residents`
--
ALTER TABLE `brgy_residents`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burial_assistance_submission`
--
ALTER TABLE `burial_assistance_submission`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_permit_submission`
--
ALTER TABLE `business_permit_submission`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial_assistance_submission`
--
ALTER TABLE `financial_assistance_submission`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_assistance_submission`
--
ALTER TABLE `medical_assistance_submission`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `senior_citizen_application`
--
ALTER TABLE `senior_citizen_application`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
