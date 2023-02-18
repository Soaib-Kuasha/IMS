-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 09:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL,
  `month` varchar(8) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `title`, `description`, `start`, `end`, `month`, `year`) VALUES
(30, 'mm', 'mmmmmmmmm', '2022-12-10', '2022-12-30', 'Dec', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `ID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`ID`, `title`, `description`, `start`, `end`) VALUES
(21, 'q', 'qqqqqqqqq', '2022-12-07', '2022-12-28'),
(22, 'v', 'mmmm', '2022-12-10', '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `archive_student`
--

CREATE TABLE `archive_student` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archive_student`
--

INSERT INTO `archive_student` (`ID`, `username`, `email`, `password`) VALUES
(7, 'student', 'soaibahmedkuasha@gmail.com', '$2y$10$7fe0GjeZek5Fxe0ojvvGw.CWVPTsUB2pkaw0gitnxHqWStpfxK1NW');

-- --------------------------------------------------------

--
-- Table structure for table `aregistration`
--

CREATE TABLE `aregistration` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aregistration`
--

INSERT INTO `aregistration` (`ID`, `username`, `email`, `password`, `cpassword`, `token`) VALUES
(6, 'soaib', 'tomtheherohunter@gmail.com', '$2y$10$3ppeaRezZ4PFn/Cdwjy9ruXeYLpX0pm980USGP50YdLsAvvl251ae', '$2y$10$QxNDSLnXhzQ.PHjB0BKq6OJglavogOi701bjY3F6MqtC2qwqZrMX6', 'be6c2079e1a9780abdd53ab9fe4c30'),
(7, 'admin1', 'admin1@gmail.com', '$2y$10$XVwP2WLCWu/3GAuwrjtpT.O5QAg8tmUyJShj6EHxgY6mCCCYiDqjy', '$2y$10$7Gd003UISnDnpeFnqCAYCOxCgd2vD9H9JCNsC3iCxjFMBm2CZtxZq', '953946ee3b60aeeaa4d5e4c18e7fa5');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(5) NOT NULL,
  `expire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'email@gmail.com', '85979', 1671174009),
(2, 'soaibahmedkuasha@gmail.com', '98099', 1671177875),
(3, 'soaibahmedkuasha@gmail.com', '10321', 1671178058),
(4, 'soaibahmedkuasha@gmail.com', '59642', 1671178137),
(5, 'soaibahmedkuasha@gmail.com', '65865', 1671178813),
(6, 'soaibahmedkuasha@gmail.com', '47339', 1671178970),
(7, 'tomtheherohunter@gmail.com', '36941', 1671179680);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `message`, `created_date`, `subject`) VALUES
(9, 'student', 'Hi. I forgot my password! Please Help!', '2022-04-02', 'Password reset!');

-- --------------------------------------------------------

--
-- Table structure for table `fill_details`
--

CREATE TABLE `fill_details` (
  `ID` int(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `why_join` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fill_details`
--

INSERT INTO `fill_details` (`ID`, `company_name`, `Location`, `why_join`, `email`, `gender`) VALUES
(37, ' MarsX', 'Badda,Dhaka', 'No special reason', 'soaibahmedkuasha@gmail.com', 'Male'),
(38, ' TEST', 'Badda,Dhaka', 'No reason!', 'tomtheherohunter@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `ID` int(255) NOT NULL,
  `writter` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `published_date` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`ID`, `writter`, `topic`, `short_description`, `published_date`, `file`) VALUES
(7, 'MR Bean', 'Machine learning', 'A simple random text which has no meaning!', '2022-03-28', '3119-Lab-3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `Company_name`, `student_name`) VALUES
(25, '27629-Lab-4.pdf', 'application/pdf', 654131, 'SpaceX', 'student'),
(26, '55668-', '', 0, 'mm', 'student1'),
(27, '24979-', '', 0, 'mm', 'student1'),
(28, '81247-SBIMU1668011364737.pdf', 'application/pdf', 20517, 'mm', 'student1');

-- --------------------------------------------------------

--
-- Table structure for table `uregistration`
--

CREATE TABLE `uregistration` (
  `ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uregistration`
--

INSERT INTO `uregistration` (`ID`, `username`, `email`, `password`, `cpassword`) VALUES
(7, 'student1', 'soaibahmedkuasha@gmail.com', '$2y$10$S5m436n2bjXpcAgNx0D/xuXMGbgV5VSxa4P6wUdyCLllsiJdIJ/x2', '$2y$10$O4XCUQW0BWCPvEqxiJwD0uY/KJdWSjw2RBXrhKMsmPh/jrq8rUxT.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `archive_student`
--
ALTER TABLE `archive_student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aregistration`
--
ALTER TABLE `aregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expire` (`expire`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fill_details`
--
ALTER TABLE `fill_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uregistration`
--
ALTER TABLE `uregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `archive_student`
--
ALTER TABLE `archive_student`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `aregistration`
--
ALTER TABLE `aregistration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fill_details`
--
ALTER TABLE `fill_details`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `uregistration`
--
ALTER TABLE `uregistration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
