-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 26, 2018 at 02:39 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywezvus_rich`
--

-- --------------------------------------------------------

--
-- Table structure for table `emailmessage`
--

CREATE TABLE `emailmessage` (
  `msg_id` int(11) NOT NULL,
  `subject20` text NOT NULL,
  `message20` text NOT NULL,
  `subject21` text NOT NULL,
  `message21` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailmessage`
--

INSERT INTO `emailmessage` (`msg_id`, `subject20`, `message20`, `subject21`, `message21`) VALUES
(1, 'thank you for ordering', 'hello we will send you a link soon', 'thank you for ordering', 'hello we will send you a link');

-- --------------------------------------------------------

--
-- Table structure for table `frequency`
--

CREATE TABLE `frequency` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequency`
--

INSERT INTO `frequency` (`id`, `number`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `frequency100`
--

CREATE TABLE `frequency100` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequency100`
--

INSERT INTO `frequency100` (`id`, `number`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `frequency300`
--

CREATE TABLE `frequency300` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frequency300`
--

INSERT INTO `frequency300` (`id`, `number`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user100`
--

CREATE TABLE `user100` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user100`
--

INSERT INTO `user100` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user300`
--

CREATE TABLE `user300` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user300`
--

INSERT INTO `user300` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `value_form`
--

CREATE TABLE `value_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_code` int(11) NOT NULL,
  `u_ip` varchar(30) NOT NULL,
  `u_status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `value_form`
--

INSERT INTO `value_form` (`id`, `first_name`, `last_name`, `u_email`, `u_code`, `u_ip`, `u_status`) VALUES
(1, 'george', 'mish', 'george23@msn.com', 120902, '65.27.0.11', 'Y'),
(2, 'george', 'mish', 'george23@msn.com', 333001, '65.27.0.11', 'Y'),
(20, 'PHP', 'Developer', 'harhukamtechnobitz@gmail.com', 317647, '103.55.165.61', 'Y'),
(21, '', '', '', 208178, '103.55.165.61', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `value_form100`
--

CREATE TABLE `value_form100` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `u_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `value_form300`
--

CREATE TABLE `value_form300` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `u_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `value_form300`
--

INSERT INTO `value_form300` (`id`, `first_name`, `last_name`, `u_email`) VALUES
(1, 'staffy', 'mass', 'staffybagha@gmail.com'),
(2, 'affvan', 'mass', 'affvanbagha@gmail.com'),
(3, 'aman', 'deep', 'amandeep@gmail.com'),
(4, 'ashu', 'bhatti', 'ashubhatti@gmail.com'),
(5, 'amrit', 'aujla', 'amritaujla@gmail.com'),
(6, 'jasvir', 'kaur', 'jasvirkaur@gmail.com'),
(7, 'amarjit', 'kaur', 'amarjitkaur@gmail.com'),
(8, 'rohit', 'bhatia', 'rohit@gmail.com'),
(9, 'rohit', 'mania', 'rohitmania@gmail.com'),
(10, 'inder', 'preet', 'inderpreet@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emailmessage`
--
ALTER TABLE `emailmessage`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `frequency`
--
ALTER TABLE `frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequency100`
--
ALTER TABLE `frequency100`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequency300`
--
ALTER TABLE `frequency300`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user100`
--
ALTER TABLE `user100`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user300`
--
ALTER TABLE `user300`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_form`
--
ALTER TABLE `value_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_form100`
--
ALTER TABLE `value_form100`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_form300`
--
ALTER TABLE `value_form300`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emailmessage`
--
ALTER TABLE `emailmessage`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frequency`
--
ALTER TABLE `frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frequency100`
--
ALTER TABLE `frequency100`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frequency300`
--
ALTER TABLE `frequency300`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user100`
--
ALTER TABLE `user100`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user300`
--
ALTER TABLE `user300`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `value_form`
--
ALTER TABLE `value_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `value_form100`
--
ALTER TABLE `value_form100`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `value_form300`
--
ALTER TABLE `value_form300`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
