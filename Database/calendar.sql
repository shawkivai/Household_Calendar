-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 06:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'All Day Event', '#40E0D0', '2016-01-01 00:00:00', '0000-00-00 00:00:00'),
(2, 'Long Event', '#FF0000', '2016-01-07 00:00:00', '2016-01-10 00:00:00'),
(3, 'Repeating Event', '#0071c5', '2016-01-09 16:00:00', '0000-00-00 00:00:00'),
(4, 'Conference', '#40E0D0', '2016-01-19 00:00:00', '2016-01-23 00:00:00'),
(5, 'Meeting', '#000', '2016-01-12 10:30:00', '2016-01-12 12:30:00'),
(6, 'Lunch', '#0071c5', '2016-01-12 12:00:00', '2016-01-12 12:00:00'),
(7, 'Happy Hour', '#0071c5', '2016-01-12 17:30:00', '0000-00-00 00:00:00'),
(8, 'Dinner', '#0071c5', '2016-01-12 20:00:00', '2016-01-12 20:00:00'),
(9, 'Birthday Party', '#FFD700', '2016-01-14 07:00:00', '2016-01-14 07:00:00'),
(15, 'Anniversary', '#008000', '2018-10-28 00:00:00', '2018-10-29 00:00:00'),
(17, 'Anniversary', '#008000', '2016-01-05 00:00:00', '2016-01-06 00:00:00'),
(18, 'sssssss', '#008000', '2016-01-04 00:00:00', '2016-01-05 00:00:00'),
(19, 'Anniversary', '#008000', '2018-10-28 00:00:00', '2018-10-30 00:00:00'),
(20, 'birthday', '#FF8C00', '2018-10-24 00:00:00', '0000-00-00 00:00:00'),
(22, 'shawki offiece', '#000', '2018-10-07 00:00:00', '2018-10-11 00:00:00'),
(23, 'Anniversary', '#008000', '2018-12-13 00:00:00', '2018-12-06 00:00:00'),
(25, 'Anniversary', '#FFD700', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Anniversary', '#40E0D0', '2018-11-30 00:00:00', '0000-00-00 00:00:00'),
(27, 'Anniversary ttt', '#FF8C00', '2018-11-24 00:00:00', '0000-00-00 00:00:00'),
(28, 'Anniversary ttt ssssssssss gg', '#40E0D0', '2018-11-17 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chores`
--

CREATE TABLE `tbl_chores` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chores`
--

INSERT INTO `tbl_chores` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'Anniversary', '#FF0000', '2018-11-17 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mealplan`
--

CREATE TABLE `tbl_mealplan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `serial_no` tinyint(10) NOT NULL,
  `family_name` varchar(100) NOT NULL,
  `family_status` text NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`serial_no`, `family_name`, `family_status`, `phone_number`, `full_name`, `username`, `password`, `user_role`, `email`, `image`) VALUES
(1, 'shawki family', 'happy', '+8801839308129', 'ahmed shawki', 'shawki', '0123456789s', 'parent', 'shawki@gmail.com', ''),
(2, 'admin family', 'happy', '+0012345', 'admin', 'admin', '12345', 'admin', 'admin@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chores`
--
ALTER TABLE `tbl_chores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mealplan`
--
ALTER TABLE `tbl_mealplan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_chores`
--
ALTER TABLE `tbl_chores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mealplan`
--
ALTER TABLE `tbl_mealplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `serial_no` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
