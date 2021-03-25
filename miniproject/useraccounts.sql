-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 08:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumers`
--

CREATE TABLE `consumers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumers`
--

INSERT INTO `consumers` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `password`) VALUES
(1, 'sdsd', 'sdsd', 'csfg@gmail.com', 'dgdfd', 'sd'),
(15, 'cons1', 'lcons1', 'cons1@gmail.com', '11111111', 'cons1'),
(16, 'cons1', 'lcons1', 'cons1@gmail.com', '11111111', 'cons1'),
(17, 'cons1', 'lcons1', 'cons1@gmail.com', '11111111', 'f90ee90900504bf9d64bb1b72c30aa4714c453a2');

-- --------------------------------------------------------

--
-- Table structure for table `servicelist`
--

CREATE TABLE `servicelist` (
  `id` int(11) NOT NULL,
  `service` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicelist`
--

INSERT INTO `servicelist` (`id`, `service`) VALUES
(1, 'Electrician'),
(3, 'Plumber'),
(4, 'Teacher'),
(6, 'Maid'),
(8, 'Cook'),
(9, 'Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `spserv`
--

CREATE TABLE `spserv` (
  `spid` int(11) NOT NULL,
  `sid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spserv`
--

INSERT INTO `spserv` (`spid`, `sid`) VALUES
(13, '4'),
(11, '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `cid` int(5) NOT NULL,
  `spid` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `status` varchar(18) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `description` varchar(40) NOT NULL,
  `reqid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`cid`, `spid`, `sid`, `status`, `date`, `time`, `description`, `reqid`) VALUES
(10, 11, 1, 'finished', '2021-03-19', '20:41:00.000000', 'need elec ', 3),
(10, 13, 4, 'finished', '2021-03-26', '18:45:00.000000', 'need teacher', 4),
(10, 11, 1, 'finished', '2021-04-07', '16:58:00.000000', 'need elec2', 5),
(10, 13, 4, 'finished', '2021-04-02', '15:59:00.000000', 'need teacher2', 6),
(10, 11, 1, 'finished', '2021-03-30', '21:19:00.000000', 'need elec3', 7),
(10, 13, 4, 'assigned', '2021-03-31', '18:57:00.000000', 'need teacher3', 8),
(14, 13, 4, 'finished', '2021-03-17', '17:22:00.000000', 'need teacher 4', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `waddress` varchar(200) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `create_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `password`, `address`, `waddress`, `usertype`, `create_datetime`) VALUES
(10, 'cons1', 'cons1@gmail.com', '1234567890', '53b3cb502f328f9bf76806605a4c84e2', '1 2 , cons1 mumbai', '', 'consumer', '2020-12-18 17:29:38'),
(11, 'sp1', 'sp1@gmail.com', '11111112', '7f3fa7aa05f8e1ab0a523d738a97cf04', '1 2 3, sp1 mumbai', '3 2 1, sp1 mumbai', 'sprovider', '2020-12-18 17:31:34'),
(12, 'admin1', 'admin1@gmail.com', '2222222', 'e00cf25ad42683b3df678c61f42c6bda', '1 2 3,admin1 mumbai', '', 'admin', '2020-12-18 17:34:55'),
(13, 'sp2', 'sp2@gmail.com', '2222222', '33cfd1ff8df9b5eb8d2dd008a71d6e15', '1 2 3,sp2, mumbai', '3 2 1,sp2, mumbai', 'sprovider', '2021-01-27 17:40:38'),
(14, 'cons2', 'cons2@gmail.com', '222221111', 'a387f91cb2bf9e3b9138a2bd6010d0e0', '1 2, cons2 mumbai', '', 'consumer', '2021-03-20 08:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumers`
--
ALTER TABLE `consumers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicelist`
--
ALTER TABLE `servicelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumers`
--
ALTER TABLE `consumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `servicelist`
--
ALTER TABLE `servicelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
