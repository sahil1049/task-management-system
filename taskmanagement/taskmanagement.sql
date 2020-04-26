-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2020 at 04:34 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailverify`
--

CREATE TABLE `emailverify` (
  `email` varchar(255) NOT NULL,
  `verify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailverify`
--

INSERT INTO `emailverify` (`email`, `verify`) VALUES
('khuranasahil170@gmail.com', '15e8368962b7d1'),
('khuranasahil170@gmail.com', '15e83694beffc6'),
('khuranasahil170@gmail.com', '15e836cf164aab'),
('sahil17csu170@ncuindia.edu', '15e836d7b0a103'),
('sahil17csu170@ncuindia.edu', '15e83b3e394791');

-- --------------------------------------------------------

--
-- Table structure for table `resetpasswords`
--

CREATE TABLE `resetpasswords` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpasswords`
--

INSERT INTO `resetpasswords` (`id`, `code`, `email`) VALUES
(2, '15d10c20be2457', 'sahilbecool.sk@gmail.com'),
(4, '15d10c2da86b9d', 'sahilbecool.sk@gmail.com'),
(5, '15d10c3c0432b5', 'sahilbecool.sk@gmail.com'),
(6, '15d10c6405492b', 'sahilbecool.sk@gmail.com'),
(8, '15d10ceb1f087f', 'sahilbecool.sk@gmail.com'),
(19, '15d10f16f9e21c', 'sahilbecool.sk@gmail.com'),
(21, '15d11b363adc52', 'sahilbecool.sk@gmail.com'),
(26, '15d15044498c97', 'sahilbecool.sk@gmail.com'),
(27, '15d1504d145aa8', 'sahilbecool.sk@gmail.com'),
(28, '15d15054dbc68b', 'sahilbecool.sk@gmail.com'),
(31, '15d19bcde19ecc', 'sahilbecool.sk@gmail.com'),
(33, '15db9e962a8945', 'sahil17csu170@ncuindia.edu'),
(34, '15dcc2c9eeace3', 'sahilbecool.sk@gmail.com'),
(35, '15dcc2cf61c045', 'sahilbecool.sk@gmail.com'),
(39, '15dcc78c4c6d14', 'sahilbecool.sk@gmail.com'),
(40, '15dcc7996bd7f2', 'sahil17csu170@ncuindia.edu'),
(41, '15dcc7acbe79a2', 'sahilbecool.sk@gmail.com'),
(44, '15dcc7c53741b6', 'sahil17csu170@ncuindia.edu'),
(45, '15dcc7c573753e', 'sahilbecool.sk@gmail.com'),
(49, '15de74b2c16e9a', 'sangwan2garv@gmail.com'),
(50, '15df0044f1199a', 'lizzemcguire89@gmail.com'),
(52, '15dfbb11373abc', 'Saksham'),
(53, '15dfbd957b16d9', 'khuranasahil170@gmail.com'),
(54, '15dfbd9625921e', 'khuranasahil170@gmail.com'),
(55, '15dfbd96d0ec3a', 'khuranasahil170@gmail.com'),
(56, '15dfbd99655f23', 'khuranasahil170@gmail.com'),
(57, '15dfbd9a7a0d7b', 'khuranasahil170@gmail.com'),
(62, '15dfc8eb715537', 'sushmakhurana1049@gmail.com'),
(63, '15dfc8f7bd86d5', 'sushmakhurana1049@gmail.com'),
(65, '15e14b3b99295e', 'khuranasahil170@gmail.com'),
(70, '15e1c5839634d1', 'ajaysinghrana3435@gmail'),
(71, '15e1c584658b79', 'ajaysinghrana3435@gmail.com'),
(72, '15e1c58f4b33eb', 'ajaysinghrana3435@gmail.com'),
(74, '15e836c3866fe0', 'sahil17su170@ncuindia.edu');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `task` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `user_id`, `task`, `deadline`) VALUES
(4, 6, 'do homework', '2020-04-23'),
(9, 7, 'do assignment 1', '2020-04-16'),
(10, 8, 'do assignment 2', '2020-04-16'),
(11, 9, 'do assignment 3', '2020-04-16'),
(12, 10, 'do assignment 4', '2020-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`, `status`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'khuranasahil170@gmail.com', '1'),
(6, 'sahil', '827ccb0eea8a706c4c34a16891f84e7b', 'sahil17csu170@ncuindia.edu', '1'),
(7, 'raj', '827ccb0eea8a706c4c34a16891f84e7b', 'sahil17csu170@ncuindia.edu', '1'),
(8, 'soham', '827ccb0eea8a706c4c34a16891f84e7b', 'sahil17csu170@ncuindia.edu', '1'),
(9, 'rohan', '827ccb0eea8a706c4c34a16891f84e7b', 'sahil17csu170@ncuindia.edu', '1'),
(10, 'riya', '827ccb0eea8a706c4c34a16891f84e7b', 'sahil17csu170@ncuindia.edu', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resetpasswords`
--
ALTER TABLE `resetpasswords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
