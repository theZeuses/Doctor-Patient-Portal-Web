-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2020 at 03:23 AM
-- Server version: 5.7.26-0ubuntu0.18.10.1
-- PHP Version: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `assistants`
--

CREATE TABLE `assistants` (
  `Name` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Age` int(3) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Salary` int(6) NOT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assistants`
--

INSERT INTO `assistants` (`Name`, `Id`, `Email`, `Gender`, `Age`, `PhoneNo`, `Salary`, `Photo`) VALUES
('Mr Z', 15000, 'mrz@gmail.com', 'Male', 22, '1776510115', 12000, '../storage/images/users/66662330_1243095992529972_7570913219741483008_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `Name` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Age` int(3) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Spetiality` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`Name`, `Id`, `Email`, `Gender`, `Age`, `PhoneNo`, `Spetiality`, `Photo`) VALUES
('Mr Y', 10000, 'mry@gmail.com', 'Male', 45, '1920685256', 'MBBS', '../storage/images/users/93323702_252622052807333_6580812937483517952_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `pid` int(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `date`, `pid`, `photo`) VALUES
(1000000, '2020-05-15', 100000, '../storage/images/users/160px-AIUB_whole_logo.png'),
(1000001, '2020-05-17', 100000, '../storage/images/users/160px-AIUB_whole_logo.png'),
(1000002, '2020-05-17', 100000, '../storage/images/histories/96119424_3188287861190931_6952685559751901184_n.jpg'),
(1000003, '2020-05-19', 100000, '../storage/images/histories/93418487_829643017445784_3069941695744311296_n.jpg'),
(1000004, '2020-05-19', 100000, '../storage/images/histories/94883678_131692875131241_4236883206260916224_n.jpg'),
(1000005, '2020-05-23', 100004, '../storage/images/histories/91447000_10215680858964509_9210085199042314240_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `Name` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Age` int(3) NOT NULL,
  `Credit` int(15) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`Name`, `Id`, `Email`, `Gender`, `Age`, `Credit`, `PhoneNo`, `Address`, `Photo`) VALUES
('Mr Xe', 100000, 'mrxe@gmail.com', 'Male', 30, 500, '1718827347', 'Jessore, Khulna', '../storage/images/users/160px-AIUB_whole_logo.png'),
('Mr Zeb', 100003, 'zeb@gmail.com', 'Male', 45, 0, '1718827347', 'Kuratoli', ''),
('Mr johir', 100004, 'johir@gmail.com', 'Male', 40, 500, '1776510115', 'Jessore', '../storage/images/users/93149838_573081983313491_2694279748384718848_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `availability` varchar(12) NOT NULL DEFAULT 'Available',
  `did` int(10) NOT NULL DEFAULT '10000',
  `pid` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `time`, `date`, `price`, `availability`, `did`, `pid`) VALUES
(10000000, '9:00am-9:20am', '2020-05-15', 500, 'Available', 10000, 0),
(10000001, '9:20am-9:40am', '2020-05-15', 500, 'Available', 10000, 0),
(10000002, '9:40am-10:00am', '2020-05-15', 500, 'Available', 10000, 0),
(10000003, '10:00am-10:20am', '2020-05-15', 500, 'Available', 10000, 0),
(10000004, '10:20am-10:40am', '2020-05-15', 500, 'Unavailable', 10000, 100000),
(10000005, '10:40am-11:00am', '2020-05-15', 500, 'Available', 10000, 0),
(10000006, '11:00am-11:20am', '2020-05-15', 500, 'Available', 10000, 0),
(10000007, '11:20am-11:40am', '2020-05-15', 500, 'Available', 10000, 0),
(10000008, '11:40am-12:00pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000009, '12:00pm-12:20pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000010, '12:20pm-12:40pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000011, '12:40pm-1:00pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000012, '6:00pm-6:20pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000013, '6:20pm-6:40pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000014, '6:40pm-7:00pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000015, '7:00pm-7:20pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000016, '7:20pm-7:40pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000017, '7:40pm-8:00pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000018, '8:00pm-8:20pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000019, '8:20pm-8:40pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000020, '8:40pm-9:00pm', '2020-05-15', 500, 'Available', 10000, 0),
(10000021, '9:00am-9:20am', '2020-05-19', 500, 'Available', 10000, 0),
(10000022, '9:20am-9:40am', '2020-05-19', 500, 'Available', 10000, 0),
(10000023, '9:40am-10:00am', '2020-05-19', 500, 'Available', 10000, 0),
(10000024, '10:00am-10:20am', '2020-05-19', 500, 'Available', 10000, 0),
(10000025, '10:20am-10:40am', '2020-05-19', 500, 'Available', 10000, 0),
(10000026, '10:40am-11:00am', '2020-05-19', 500, 'Available', 10000, 0),
(10000027, '11:00am-11:20am', '2020-05-19', 500, 'Available', 10000, 0),
(10000028, '11:20am-11:40am', '2020-05-19', 500, 'Available', 10000, 0),
(10000029, '11:40am-12:00pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000030, '12:00pm-12:20pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000031, '12:20pm-12:40pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000032, '12:40pm-1:00pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000033, '6:00pm-6:20pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000034, '6:20pm-6:40pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000035, '6:40pm-7:00pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000036, '7:00pm-7:20pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000037, '7:20pm-7:40pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000038, '7:40pm-8:00pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000039, '8:00pm-8:20pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000040, '8:20pm-8:40pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000041, '8:40pm-9:00pm', '2020-05-19', 500, 'Available', 10000, 0),
(10000042, '9:00am-9:20am', '2020-05-23', 500, 'Available', 10000, 0),
(10000043, '9:20am-9:40am', '2020-05-23', 500, 'Available', 10000, 0),
(10000044, '9:40am-10:00am', '2020-05-23', 500, 'Unavailable', 10000, 100004),
(10000045, '10:20am-10:40am', '2020-05-23', 500, 'Available', 10000, 0),
(10000046, '11:00am-11:20am', '2020-05-23', 500, 'Available', 10000, 0),
(10000047, '11:20am-11:40am', '2020-05-23', 500, 'Available', 10000, 0),
(10000048, '11:40am-12:00pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000049, '12:00pm-12:20pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000050, '12:20pm-12:40pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000051, '12:40pm-1:00pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000052, '6:00pm-6:20pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000053, '6:20pm-6:40pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000054, '6:40pm-7:00pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000055, '7:20pm-7:40pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000056, '7:40pm-8:00pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000057, '8:00pm-8:20pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000058, '8:20pm-8:40pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000059, '8:40pm-9:00pm', '2020-05-23', 500, 'Available', 10000, 0),
(10000060, '9:00am-9:20am', '2020-05-24', 500, 'Available', 10000, 0),
(10000061, '9:20am-9:40am', '2020-05-24', 500, 'Available', 10000, 0),
(10000062, '10:00am-10:20am', '2020-05-24', 500, 'Unavailable', 10000, 0),
(10000063, '6:40pm-7:00pm', '2020-05-24', 500, 'Available', 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `type`) VALUES
(10000, '1234', 2),
(15000, '1234', 3),
(100000, '1234', 1),
(100003, '1234', 1),
(100004, '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assistants`
--
ALTER TABLE `assistants`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assistants`
--
ALTER TABLE `assistants`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15001;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000006;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100005;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000064;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
