-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 11:13 AM
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
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `state` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `trek` varchar(60) NOT NULL,
  `month` varchar(60) NOT NULL,
  `date` varchar(60) NOT NULL,
  `number` varchar(60) NOT NULL,
  `fitness` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `name`, `gender`, `state`, `address`, `birthdate`, `mobile`, `email`, `trek`, `month`, `date`, `number`, `fitness`) VALUES
(3, 'user234', 'female', 'Gujarat', 'Address', '2023-05-31', '1111111111', 'hrutubhatt@gmail.com', 'Rishikesh', 'April', '2023-05-31', '1', ''),
(4, 'user1234', 'female', 'Gujarat', 'Address', '2023-05-25', '8866163506', 'user1234@gmail.com', 'Kasol-Manali', 'May', '2023-05-25', '1', ''),
(153, 'user1', 'female', 'Gujarat', 'Address', '2023-05-11', '8866163506', 'hrutubhatt@gmail.com', 'Rishikesh', 'May', '2023-05-11', '1', ''),
(155, 'hrutu bhatt', 'female', 'gujarat', 'Address', '2023-05-14', '9427220092', 'hrutubhatt04@gmail.com', 'Kedarkantha', 'November', '2023-05-14', '7', ''),
(156, 'ABCD', 'male', 'Gujarat', 'AddressMNABCSAUE ', '2028-01-17', '1234567890', '1@GMAIL.COM', 'Hampta-pass', 'January', '2028-01-17', '14', ''),
(157, 'Vaibhav', 'male', 'Gujarat', 'Address', '2023-05-30', '1234567890', 'v@gmail.com', 'Himalayas-Basecamp', 'November', '2023-05-30', '8', ''),
(158, 'aswd', 'female', 'Gujarat', 'Addresss', '2023-05-30', '8866163506', 'hirenbhattt@gmail.com', 'Kasol-Manali', 'May', '2023-05-30', '1', ''),
(159, 'Rich ', 'male', 'Gujarat', 'Gujarat', '2005-04-25', '6353249404', 'r@gmail.com', 'Hampta-pass', 'January', '2005-04-25', '7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
