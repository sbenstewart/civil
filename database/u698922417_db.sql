-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2020 at 02:30 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u698922417_db`
--
CREATE DATABASE IF NOT EXISTS `u698922417_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `u698922417_db`;

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--

CREATE TABLE `accomodation` (
  `id` int(11) NOT NULL,
  `entrydate` varchar(100) NOT NULL DEFAULT '1',
  `entrytime` varchar(100) NOT NULL,
  `hours` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `entrydate`, `entrytime`, `hours`) VALUES
(55, '01/03/2020', '19:05', '48');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`cid`, `name`, `emailid`, `password`) VALUES
(1, 'S Ben Stewart', 'sbenstewart@gmail.com', '$2y$10$Q9ABKOjPJCiLnsMIYP0p7OQ.NfNFybksRO7CRwbTWzKRf3e4XRF8K');

-- --------------------------------------------------------

--
-- Table structure for table `ambassador`
--

CREATE TABLE `ambassador` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `code` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ambassador`
--

INSERT INTO `ambassador` (`aid`, `name`, `phoneno`, `emailid`, `code`) VALUES
(1, 'S. Ben Stewart', '9489408090', 'sbenstewart@gmail.com', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `cid` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `Paid` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`cid`, `id`, `Paid`) VALUES
('55', 'EVENTS', NULL),
('55', 'GROUND IMPROVEMENT TECHNIQUES', NULL),
('55', 'SOLID WASTE MANAGEMENT', NULL),
('55', 'TALL STRUCTURES', NULL),
('55', 'SAMPLE WORKSHOP', NULL),
('55', 'LECTURES', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `aid` int(11) DEFAULT NULL,
  `college` varchar(250) NOT NULL,
  `year` varchar(100) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `name`, `phoneno`, `emailid`, `aid`, `college`, `year`, `dept`, `course`, `password`) VALUES
(55, 'Ben Stewart', '9489408090', 'sbenstewart@gmail.com', NULL, 'College of Engineering Guindy', '4', 'Computer Science and Engineering', 'B.E.', '$2y$10$l/XsRc.sU.w7gUsNVkfAeeA0M90xy5.7V1dxIYD5dBwRr7A9PdzKW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `ambassador`
--
ALTER TABLE `ambassador`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ambassador`
--
ALTER TABLE `ambassador`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
