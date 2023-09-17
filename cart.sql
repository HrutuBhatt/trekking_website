-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 11:11 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `email_id` varchar(60) NOT NULL,
  `rent_from` date NOT NULL,
  `rent_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `product_name`, `price`, `number`, `email_id`, `rent_from`, `rent_to`) VALUES
(21, 'bag', 35, 2, 'user@0', '2023-05-08', '2023-05-12'),
(22, 'jacket', 40, 5, 'user@0', '2023-05-01', '2023-05-03'),
(24, 'shoes', 40, 1, 'rich@gmail.com', '2023-05-25', '2023-05-31'),
(25, 'bag', 35, 3, 'hrutu@1', '2023-05-14', '2023-05-18'),
(27, 'shoes', 40, 5, 'devanshi@gmail.com', '2023-06-12', '2023-06-17'),
(28, 'bag', 35, 4, 'hrutu@1', '2023-06-29', '2023-06-30'),
(29, 'jacket', 40, 3, 'hema@gmail.com', '2023-06-11', '2023-06-14'),
(30, 'shoes', 40, 2, 'hrutu@1', '2023-06-11', '2023-06-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
