-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `sfb`
--

CREATE TABLE `sfb` (
  `S_no` int(10) NOT NULL,
  `acd_year` year(4) NOT NULL,
  `course` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `F_name` varchar(40) NOT NULL,
  `semester` int(2) NOT NULL,
  `date` date NOT NULL,
  `q1` int(2) NOT NULL,
  `q2` int(2) NOT NULL,
  `q3` int(2) NOT NULL,
  `q4` int(2) NOT NULL,
  `q5` int(2) NOT NULL,
  `q6` int(2) NOT NULL,
  `q7` int(2) NOT NULL,
  `q8` int(2) NOT NULL,
  `q9` int(2) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sfb`
--
ALTER TABLE `sfb`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sfb`
--
ALTER TABLE `sfb`
  MODIFY `S_no` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
