-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 10:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunamar1`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE `apartments` (
  `id` int(11) NOT NULL,
  `noofbeds` int(11) NOT NULL,
  `noofbaths` int(11) NOT NULL,
  `totalsqft` int(11) NOT NULL,
  `gas` varchar(20) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `water` varchar(20) NOT NULL,
  `homeass` int(11) NOT NULL,
  `parkingid` int(11) NOT NULL,
  `bno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`id`, `noofbeds`, `noofbaths`, `totalsqft`, `gas`, `electricity`, `water`, `homeass`, `parkingid`, `bno`) VALUES
(101, 2, 2, 900, 'low', 'high', 'medium', 194, 96, 1),
(102, 2, 2, 910, 'high', 'medium', 'high', 195, 102, 1),
(103, 2, 2, 900, 'low', 'low', 'low', 200, 103, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `bno` int(11) NOT NULL,
  `laundrydate` date NOT NULL,
  `trashdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`bno`, `laundrydate`, `trashdate`) VALUES
(1, '2021-11-30', '2021-11-30'),
(2, '2021-12-02', '2021-12-02'),
(3, '2021-12-02', '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `gardens`
--

CREATE TABLE `gardens` (
  `plantid` int(11) NOT NULL,
  `plantname` varchar(50) NOT NULL,
  `planttype` varchar(50) NOT NULL,
  `lastmdate` date NOT NULL,
  `nextsdate` date NOT NULL,
  `mpersonid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gardens`
--

INSERT INTO `gardens` (`plantid`, `plantname`, `planttype`, `lastmdate`, `nextsdate`, `mpersonid`) VALUES
(1, 'Rose', 'Perennial', '2021-11-27', '2021-11-30', '4002'),
(2, 'Amaranthus', 'Perennial', '2021-11-17', '2021-12-02', '4002'),
(3, 'PearlBush', 'Perennial', '2021-11-29', '2021-12-01', '4001');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `imgName` varchar(200) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imgName`, `type`) VALUES
(1, '16382392871923.jpg', 'Image'),
(2, '16382393172599.jpg', 'Image'),
(3, '16382393368983.jpg', 'Image'),
(4, '16382393479194.jpg', 'Image'),
(5, '16382393606752.jpg', 'Image'),
(6, '16383767717293.mp4', 'Video'),
(7, '16388266251268.png', 'Image'),
(8, '16388268624646.png', 'Image');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `phone`, `email`) VALUES
(1, 'Manager1', '9800010001', 'manager1@gmail.com'),
(2, 'Manager2', '8965400101', 'manager2@gmail.com'),
(4, 'Manager4', '5635689012', 'manager4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  `toid` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `createdon` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pools`
--

CREATE TABLE `pools` (
  `id` int(11) NOT NULL,
  `opentime` varchar(15) NOT NULL,
  `closetime` varchar(15) NOT NULL,
  `lastclean` date NOT NULL,
  `nextclean` date NOT NULL,
  `mpersonid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pools`
--

INSERT INTO `pools` (`id`, `opentime`, `closetime`, `lastclean`, `nextclean`, `mpersonid`) VALUES
(1, '07:48', '19:48', '2021-11-22', '2021-12-04', 4003),
(2, '07:50', '19:50', '2021-11-29', '2021-12-02', 4002);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `apartment` varchar(20) NOT NULL,
  `vehicleno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `name`, `phone`, `email`, `apartment`, `vehicleno`) VALUES
(1, 'Resident1', '9800010901', 'resident1@gmail.com', '101', 'ABC1001'),
(2, 'Resident2', '9564441112', 'resident2@gmail.com', '102', 'ABC1002'),
(3, 'Resident3', '8331109090', 'resident3@gmail.com', '103', 'ABC1003'),
(4, 'Resident4', '9988445566', 'resident4@gmail.com', '104', 'BCD1003');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `apartment` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL,
  `mpersonid` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `descr`, `priority`, `apartment`, `building`, `mpersonid`, `status`, `userid`) VALUES
(1, 'Roof leak', 'high', '101', '1', '4001', 'pending', 2),
(2, 'Problem with Dishwasher', 'medium', '101', '1', '4001', 'pending', 2),
(4, 'AC unit not working', 'high', '102', '1', '4002', 'pending', 1),
(11, 'Water leakage in Kitchen', 'high', '101', '1', '4001', 'pending', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `userid`, `phone`, `pwd`, `role`) VALUES
(1, 'Administrator', 'admin', '0', 'admin', 'Admin'),
(2, 'Manager1', 'manager1@gmail.com', '9800009099', 'manager1', 'Manager'),
(5, 'Resident1', 'resident1@gmail.com', '9001121090', 'resident1', 'Resident'),
(6, 'Visitor1', 'visitor1@gmail.com', '6590012101', 'visitor1', 'Visitor'),
(7, 'vani', 'nvani8892@gmail.com', '9879811111', 'vani', 'Manager'),
(8, 'New user', 'testuser170101@gmail.com', '7114564564', 'testuser', 'Resident');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `apartment` varchar(50) NOT NULL,
  `vehicleno` varchar(20) NOT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `phone`, `apartment`, `vehicleno`, `userid`) VALUES
(1, 'Sandra', '9870000001', '103', 'AAA1001', 2),
(2, 'Jim', '9809111090', '102', 'AAA1002', 2),
(3, 'George', '9865311001', '103', 'AAA1003', 2),
(5, 'visitor22', '4697054949', '104', 'BCD1003', 1),
(11, 'visitor11', '8760966009', '101', 'BCD1001', 5),
(12, 'visitor12', '4341098909', '101', 'BCD1002', 5),
(21, 'visitor21', '9873458791', '102', 'CDE1111', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`bno`);

--
-- Indexes for table `gardens`
--
ALTER TABLE `gardens`
  ADD PRIMARY KEY (`plantid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pools`
--
ALTER TABLE `pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
