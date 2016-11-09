-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2016 at 10:43 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `path`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `medical_test`
--

CREATE TABLE IF NOT EXISTS `medical_test` (
  `test_id` tinyint(4) NOT NULL,
  `test_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` tinyint(4) NOT NULL,
  `patient_username` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `patient_passcode` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `patient_firstname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `patient_lastname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `patient_fullname` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_username`, `patient_passcode`, `patient_firstname`, `patient_lastname`, `patient_fullname`, `email`, `phone`, `date_added`) VALUES
(35, 'dfsdf', 'f', '', '', 'sdfs', 'fff@gmail.com', 'asdasd', '2016-10-28 11:38:42'),
(36, 'sdfsdf', 'sdfsdf', '', '', 'fsdf', 'sfsd@gmail.com', 'werew', '2016-10-28 12:58:39'),
(37, 'ffff', 'er', '', '', 'fgfsdfsd', 'ffff@gmail.com', 'ee', '2016-10-28 13:31:29'),
(38, 'test', '1234', '', '', 'dongido med', 'dongidomed@gmail.com', '08059794251', '2016-10-30 18:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `patient_report`
--

CREATE TABLE IF NOT EXISTS `patient_report` (
  `id` bigint(4) NOT NULL,
  `report_id` tinyint(4) NOT NULL,
  `test_id` tinyint(4) NOT NULL,
  `test_name` varchar(225) NOT NULL,
  `test_result` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_report`
--

INSERT INTO `patient_report` (`id`, `report_id`, `test_id`, `test_name`, `test_result`) VALUES
(182, 29, 0, 'esd', 'esd'),
(183, 29, 0, '3', '3'),
(184, 29, 0, '2', '2'),
(185, 29, 0, 'r', 'r'),
(186, 29, 0, 'd', 'd'),
(187, 30, 0, 'fffff343434343', 'fff3434343430'),
(188, 30, 0, 'ddd', 'ddd'),
(189, 30, 0, '33300000000000000', '33300'),
(190, 30, 0, 'gg', 'gg'),
(191, 31, 0, 'Test Name', '77734534534'),
(192, 31, 0, 'Nyyuqw', 'NNNND'),
(193, 31, 0, 'mmwefjisdjfsd', 'fsbdjfbsdjfbsjdfbsjdfbs'),
(194, 32, 0, 'eee', 'eee'),
(195, 32, 0, 'ff', 'ff'),
(196, 32, 0, 'wqw', 'qwqw'),
(197, 32, 0, 'fdsd', 'sdsdsd'),
(198, 33, 0, 'sdfsdf', 'sdfsdf'),
(199, 33, 0, 'sdfsdf', 'sdfsdfsd'),
(200, 33, 0, 'fdsfsdf', 'sdfsdfs'),
(201, 33, 0, 'sdfsdfsd', 'dfsdfsdfs'),
(202, 33, 0, 'fsdfsdf', 'sdfsdfsd'),
(204, 28, 0, 'sdfsdfsdf', 'sdfsdfsdfsdfsdfsdf'),
(208, 34, 0, 'ssdsdfsdfsdf', 'sdfsdfsd'),
(209, 34, 0, 'fsdfsdfsdf', 'fsdfsd'),
(210, 34, 0, 'sdfsdfsd', 'fsdfsdfsdfsdfsd'),
(211, 34, 0, 'sdfsdfsdfsdf', 'sdfsdfsd'),
(212, 35, 0, 'asdasd', 'asdasd'),
(213, 35, 0, 'asdasd', 'asdasdasd'),
(214, 35, 0, 'asdasda', 'sdasdasdasd'),
(215, 35, 0, 'asdasda', 'sdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `report_id` tinyint(4) NOT NULL,
  `report_name` varchar(100) NOT NULL,
  `patient_id` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `report_name`, `patient_id`) VALUES
(27, '1st Report', 36),
(28, 'DOngido', 35),
(29, 'eeeeeeeeeee', 35),
(30, '324234234', 35),
(31, 'Report 234', 36),
(32, 'NUKKDKDKDKDKDKDKDK', 36),
(34, 'Test', 38),
(35, 'asdasdasd', 38),
(38, 'sdfsdfsdfsd', 38);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_test`
--
ALTER TABLE `medical_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_report`
--
ALTER TABLE `patient_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medical_test`
--
ALTER TABLE `medical_test`
  MODIFY `test_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `patient_report`
--
ALTER TABLE `patient_report`
  MODIFY `id` bigint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
