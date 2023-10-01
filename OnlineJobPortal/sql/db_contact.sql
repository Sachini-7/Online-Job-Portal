-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `full_time`
--

CREATE TABLE `full_time` (
  `jobID` int(10) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `full_time`
--

INSERT INTO `full_time` (`jobID`, `companyName`, `position`, `description`) VALUES
(1, 'Cargills', 'Outlet Manager', 'Degree in Field'),
(2, 'Cargills', 'Supervisor', 'Advanced Level'),
(3, 'Fonterra', 'Production Executive', '5+ years of experience'),
(4, 'Daraz', 'Delivery Agents', 'Ordinary Level'),
(5, 'Dialog', 'Network Engineer', 'B.Sc degree in Networking');

-- --------------------------------------------------------

--
-- Table structure for table `online_jobs`
--

CREATE TABLE `online_jobs` (
  `jobID` int(10) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_jobs`
--

INSERT INTO `online_jobs` (`jobID`, `companyName`, `position`, `description`) VALUES
(1, 'Virtusa', 'SE', 'Java MySQL'),
(2, 'HCL', 'QA', 'Selenium'),
(3, 'Fortude', 'QE', 'cucumber'),
(4, 'Virtusa', 'QA', 'Postman'),
(5, 'WSO2', 'SE', 'Reactjs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `fldName` varchar(50) NOT NULL,
  `fldEmail` varchar(150) NOT NULL,
  `fldPhone` varchar(15) NOT NULL,
  `fldMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES
(3, 'hdjdcb', 'sjnd', 'mvmfnvmfnn', 'fmdv'),
(4, 'cbh', 'sdhv', '1212sdh', 'dhsbdh'),
(11, 'tgdgv', 'zxb', 'nf', 'fdfm'),
(34, 'tgdgv', 'test', '1111111111', 'm'),
(35, 'tgdgv', 'gdcgdv', '7777777777', 'x'),
(36, 'Ravi', 'ravindu20@gmail.com', '7841212121', 'rrr'),
(37, 'tgdgv', 'test@gmail.com', '7777777777', 'wertr'),
(38, 'rav', 'test@gmail.com', '4121441212', 'cxhh'),
(39, 'dbnb', 'gdcgdv', '4121441212', 'dddddddd'),
(40, 'tgdgv', 'gdcgdv', '7841212121', 'sssssssssss'),
(41, 'dhghd', 'tes@gmail.com', '7894412387', 'tesr'),
(42, 'dhghd', 'tes@gmail.com', '7894412387', '  \r\n				<span class=\"error\">*  </span> ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `full_time`
--
ALTER TABLE `full_time`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `online_jobs`
--
ALTER TABLE `online_jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `full_time`
--
ALTER TABLE `full_time`
  MODIFY `jobID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online_jobs`
--
ALTER TABLE `online_jobs`
  MODIFY `jobID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
