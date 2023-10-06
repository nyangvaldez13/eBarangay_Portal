-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 11:19 AM
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
  `activity` varchar(25) NOT NULL,
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
