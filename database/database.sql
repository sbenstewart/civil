-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 31, 2018 at 04:20 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `accomodation`
--
-- Creation: Dec 31, 2018 at 10:10 AM
--

DROP TABLE IF EXISTS `accomodation`;
CREATE TABLE `accomodation` (
  `id` int(11) NOT NULL,
  `entrydate` varchar(100) NOT NULL DEFAULT '1',
  `entrytime` varchar(100) NOT NULL,
  `hours` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `accomodation`
--

TRUNCATE TABLE `accomodation`;
--
-- Dumping data for table `accomodation`
--

INSERT INTO `accomodation` (`id`, `entrydate`, `entrytime`, `hours`) VALUES
(6, '12/28/2018', '15:41', '3');

-- --------------------------------------------------------

--
-- Table structure for table `ambassador`
--
-- Creation: Dec 30, 2018 at 08:50 AM
--

DROP TABLE IF EXISTS `ambassador`;
CREATE TABLE `ambassador` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `count` varchar(10) DEFAULT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `ambassador`
--

TRUNCATE TABLE `ambassador`;
--
-- Dumping data for table `ambassador`
--

INSERT INTO `ambassador` (`aid`, `name`, `count`, `phoneno`, `emailid`) VALUES
(4, 'Ben Stewart', '13', '9489408090', 'sbenstewart@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--
-- Creation: Dec 27, 2018 at 12:57 AM
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `event`
--

TRUNCATE TABLE `event`;
-- --------------------------------------------------------

--
-- Stand-in structure for view `event1`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `event1`;
CREATE TABLE `event1` (
`name` varchar(100)
,`emailid` varchar(100)
,`phoneno` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--
-- Creation: Dec 31, 2018 at 04:35 AM
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE `registrations` (
  `cid` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `registrations`
--

TRUNCATE TABLE `registrations`;
--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`cid`, `id`) VALUES
('4', 'sample');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Dec 29, 2018 at 10:49 AM
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `name`, `phoneno`, `emailid`) VALUES
(4, 'Ben Stewart', '9489408090', 'sbenstewart@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--
-- Creation: Dec 27, 2018 at 12:57 AM
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `workshop`
--

TRUNCATE TABLE `workshop`;
-- --------------------------------------------------------

--
-- Structure for view `event1` exported as a table
--
DROP TABLE IF EXISTS `event1`;
CREATE TABLE`event1`(
    `name` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
    `emailid` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
    `phoneno` varchar(10) COLLATE utf8_general_ci DEFAULT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodation`
--
ALTER TABLE `accomodation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ambassador`
--
ALTER TABLE `ambassador`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `phoneno` (`phoneno`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambassador`
--
ALTER TABLE `ambassador`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
