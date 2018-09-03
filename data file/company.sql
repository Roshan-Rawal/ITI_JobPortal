-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 08:16 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iti`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `director` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gst` varchar(20) DEFAULT NULL,
  `aadhar_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `address`, `city`, `director`, `contactno`, `email`, `website`, `password`, `gst`, `aadhar_no`) VALUES
(2, 'sdfcx', 'essdsd', 'male', 'xddc', '9946541462', 'bhg@gmail.com', 'roshan.com', '123', '2346', '389652456985'),
(3, 'sdfcx', 'essdsd', 'male', 'xddc', '9946541462', 'bhg@gmail.com', 'roshan.com', '123', '2346', '389652456985'),
(4, 'sdfcx', 'essdsd', 'male', 'xddc', '9946541462', 'bhg@gmail.com', 'roshan.com', '123', '2346', '389652456978'),
(5, 'inn', '123', 'male', 'rr', '7894563210', 'rr@gmail.com', 'cha.com', '12', '213', '456652456985'),
(6, 'inn', '123', 'male', 'rr', '7894563210', 'rr@gmail.com', 'cha.com', '123', '213', '652398741256'),
(9, 'Innovator', 'ghjh', 'female', 'Roshan', '7894563210', 'bh@gmail.com', 'cha.com', '123', '123', ''),
(10, 'Roshan Electrics', 'GIDC Vatva', 'female', 'Roshan Rawal', '9898989898', 'Roshan@gmail.com', 'relectrics.com', '12345', 'WMX123456', ''),
(11, 'Roshan Electrics', 'GIDC Vatva', 'female', 'Roshan Rawal', '9898989898', 'Roshan@gmail.com', 'relectrics.com', '12345', 'WMX123456', ''),
(12, 'LDCE', 'ahmebdad', 'female', 'sunil chauhan', '8866195707', 'chauhansunil792@gmail.com', 'enginerdsunio.epizy.com', '12345678', NULL, '388999999640'),
(13, 'glecir', 'LDCE Hostel', 'female', 'Mahesh Khanna', '7623075674', 'roshaawaal43@gmail.com', 'gliceir.com', '123', '456sdffffg55', '15623456891');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
