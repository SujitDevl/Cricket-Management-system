-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 03:06 PM
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
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `feeid` int(50) NOT NULL,
  `payid` int(200) NOT NULL,
  `kitfee` int(200) NOT NULL,
  `uniformfee` int(200) NOT NULL,
  `academyfee` int(200) NOT NULL,
  `total` int(200) NOT NULL,
  `paid` int(200) NOT NULL,
  `dop` date NOT NULL,
  `dps` varchar(200) NOT NULL,
  `balance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`feeid`, `payid`, `kitfee`, `uniformfee`, `academyfee`, `total`, `paid`, `dop`, `dps`, `balance`) VALUES
(1, 1, 1, 200, 1000, 1201, 500, '2022-03-15', 'paid in nest month', 701),
(2, 2, 0, 0, 0, 600, 500, '2022-03-14', '', 100),
(6, 3, 200, 200, 1000, 1400, 500, '2022-03-14', 'paid in nest month', 900);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `grno` int(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`grno`, `firstname`, `gender`, `dob`, `doj`, `address`, `contact`, `email`, `school`) VALUES
(1, 'Avadhut varvatkar', 'Male', '2022-03-11', '2022-03-10', 'kalyan', '1234567890', '5@gmail.com', 'HOLY'),
(2, 'sujit', 'Female', '2022-03-01', '2022-03-01', 'kalyan', '1234567890', '5@gmail.com', 'HOLY'),
(4, 'Ayushee kalkande', 'Male', '2022-03-08', '2022-03-16', '1234567890', 'kalyan', 'htk@gamil.com', 'raju'),
(5, 'Ayushee kalkande', 'Male', '2022-03-12', '2022-03-04', 'kalyan', '1234567890', '5@gmail.com', 'HOLY'),
(6, 'Aayush singh', 'Female', '2007-06-21', '2022-03-14', 'vangani', '9658473114', '5@gmail.com', 'dolpin school ');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tourid` int(200) NOT NULL,
  `tname` varchar(200) NOT NULL,
  `dot` date NOT NULL,
  `tplace` varchar(200) NOT NULL,
  `taddress` text NOT NULL,
  `tdsp` text NOT NULL,
  `tfee` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tourid`, `tname`, `dot`, `tplace`, `taddress`, `tdsp`, `tfee`) VALUES
(1, 'kalyan', '2022-03-15', 'kalyan station', 'kalyan east', 'AC train in mumbai', 500),
(2, 'vangani', '0005-05-05', 'kalyan station', 'kalyan east', 'AC train in mumbai', 700),
(3, 'kalyan', '0005-04-05', 'kalyan station', 'kalyan east', 'AC train in mumbai', 700),
(4, 'kalyan', '2022-03-12', 'kalyan station', 'kalyan east', 'AC train in mumbai', 5),
(5, 'USA', '2022-03-02', 'USA', 'USA', 'USA', 5000),
(7, 'UKRAIN', '2022-03-26', 'BORDER', 'NEAR MILLTARY CAMP', 'TOWATCH UKRAIN RUSSAIA WAR', 50000),
(8, 'kalyan', '2022-03-14', 'kalyan station', 'kalyan east', 'TOWATCH UKRAIN RUSSAIA WAR', 500),
(9, 'kalyan', '2022-03-14', 'kalyan station', 'kalyan east', 'TOWATCH UKRAIN RUSSAIA WAR', 500),
(10, 'kalyan', '2022-03-14', 'kalyan station', 'kalyan east', 'TOWATCH UKRAIN RUSSAIA WAR', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`grno`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tourid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `payid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `grno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tourid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
