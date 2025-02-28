-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 08:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `region` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `additional` varchar(100) NOT NULL,
  `hear_about_us` varchar(50) NOT NULL,
  `membership_type` varchar(50) NOT NULL,
  `contact_type` varchar(50) NOT NULL,
  `accept_membership_rule` varchar(20) NOT NULL,
  `accept_privacy_policy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `birth_date`, `gender`, `region`, `city`, `barangay`, `additional`, `hear_about_us`, `membership_type`, `contact_type`, `accept_membership_rule`, `accept_privacy_policy`) VALUES
(1, 'abc', 'sadsa', 'abc@sample.com', 2147483647, '2023-07-01', 'on', 'NCR', 'Manila', 'Binondo', '123', 'friend-colleague', 'standard', 'phone', 'yes', 'yes'),
(7, 'evi', 'pags', 'evi@sample.com', 2147483647, '2023-07-01', 'female', 'NCR', 'Manila', 'Binondo', '12324', 'google', 'standard', 'phone', 'yes', 'yes'),
(8, 'john', 'cena', 'john@sample.com', 2147483647, '2023-07-01', 'male', 'NCR', 'Manila', 'Ermita', '1212', 'google', 'premium', 'email', 'yes', 'yes'),
(9, 'ddsfd', 'sdfdfs', 'abc@sample.com', 564664, '2023-07-01', 'male', 'NCR', 'Manila', 'Intramuros', '23243', 'news-article', 'ultimate', 'phone', 'no', 'no'),
(10, 'sad', 'sadas', 'abc@sample.com', 43435435, '2023-07-03', 'male', 'NCR', 'Manila', 'Quiapo', '5465464', 'blog-post', 'premium', 'email', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(1, 'abc', 'abc@sample.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'eviii', 'evi@sample.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'johncena', 'john@sample.com', '527bd5b5d689e2c32ae974c6229ff785');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
