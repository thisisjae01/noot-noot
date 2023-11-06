-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 10:37 AM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_status` varchar(50) NOT NULL DEFAULT 'Active',
  `user_profile` varchar(100) NOT NULL DEFAULT 'System Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `username`,  `password`,  `user_status`, `user_profile`) VALUES
(1, 'jean', 'jean', '123456', 'Active', 'System Admin'),
(2, 'John', 'John', '654321', 'Active', 'System Admin'),
(3, 'Jon', 'Jon', '142536', 'Active', 'System Admin'),
(4, 'greg', 'greg', '123456', 'Active', 'Cafe Owner'),
(5, 'Gelvin', 'Gelvin', '123456', 'Active', 'Cafe Owner'),
(6, 'Gregory', 'Gregory', '123qwer456', 'Active', 'Cafe Owner'),
(7, 'Goodwill', 'Goodwill', '123qwer456', 'Active', 'Cafe Owner'),
(8, 'Kaplan', 'Kaplan', '12345qwe6', 'Active', 'Cafe Manager'),
(9, 'Kaplan1', 'Kaplan2', '123qwe456', 'Active', 'Cafe Manager'),
(10, 'Kelvin', 'Kelvin', '123qwer456', 'Active', 'Cafe Manager'),
(11, 'key', 'key', '123456', 'Active', 'Cafe Manager'),
(12, 'Korea', 'Korea', 'qwer', 'Active', 'Cafe Manager'),
(13, 'Kors', 'Kors', 'qwer', 'Active', 'Cafe Manager'),
(14, 'Kirk', 'Kirk', 'rewq', 'Active', 'Cafe Manager'),
(15, 'Kory', 'Kory', '1234werqwe56', 'Active', 'Cafe Manager'),
(16, 'Kansas', 'Kansas', 'qwerqwer', 'Active', 'Cafe Manager'),
(17, 'cancer', 'cancer', '123456', 'Active', 'Cafe Staff'),
(18, 'Cer', 'Cer', '123456', 'Active', 'Cafe Staff'),
(19, 'Cin', 'Cin', '123456', 'Active', 'Cafe Staff'),
(20, 'Cern', 'Cern', '12qwer3456', 'Active', 'Cafe Staff'),
(21, 'Cs', 'Cs', '12rewq3456', 'Active', 'Cafe Staff'),
(22, 'Cz', 'Cz', '123qwer456', 'Active', 'Cafe Staff'),
(23, 'Cn', 'Cn', '1234rewq56', 'Active', 'Cafe Staff'),
(24, 'Cm', 'Cm', '12rewqr3456', 'Inactive', 'Cafe Staff'),
(25, 'China', 'China', '123456', 'Active', 'Cafe Staff'),
(26, 'Ching', 'Ching', '123456', 'Inactive', 'Cafe Staff'),
(27, 'Chong', 'Chong', '123456', 'Active', 'Cafe Staff'),
(28, 'Ling', 'Ling', '12qwer3456', 'Inactive', 'Cafe Staff'),
(29, 'Long', 'Long', '1746qwer', 'Active', 'Cafe Staff'),
(30, 'Bada', 'Bada', '987qwer12', 'Active', 'Cafe Staff'),
(31, 'Bing', 'Bing', '897qwer', 'Active', 'Cafe Staff'),
(32, 'Bong', 'Bong', '71dqw', 'Active', 'Cafe Staff');



CREATE TABLE `profiles` (
  `userprofile_id` int(11) NOT NULL,
  `profilename` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`userprofile_id`, `profilename`, `status`) VALUES
(1, 'Cafe Owner', 'Active'),
(2, 'Cafe Manager', 'Active'),
(3, 'System Admin', 'Active'),
(4, 'Cafe Staff', 'Active');


-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`userprofile_id`);


-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `userprofile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
