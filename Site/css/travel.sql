-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 10:56 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buses`
--

CREATE TABLE `tbl_buses` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `bus_type` varchar(20) NOT NULL,
  `bus_no` varchar(10) NOT NULL,
  `seat_capacity` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buses`
--

INSERT INTO `tbl_buses` (`id`, `bus_name`, `bus_type`, `bus_no`, `seat_capacity`) VALUES
(1, 'VOLVO', 'AC', 'GJ10AV7612', 45);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bus_sch`
--

CREATE TABLE `tbl_bus_sch` (
  `bus_id` int(5) NOT NULL,
  `bus_frmCt` varchar(25) NOT NULL,
  `bus_toCt` varchar(25) NOT NULL,
  `bus_depTime` time NOT NULL,
  `bus_arrTime` time NOT NULL,
  `bus_fare` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bus_sch`
--

INSERT INTO `tbl_bus_sch` (`bus_id`, `bus_frmCt`, `bus_toCt`, `bus_depTime`, `bus_arrTime`, `bus_fare`) VALUES
(5, 'Jamnagar', 'Rajkot', '07:30:00', '09:30:00', '130'),
(11, 'Jamnagar', 'Ahmedabad', '01:00:00', '07:00:00', '600'),
(12, 'Jamnagar', 'Ahmedabad', '07:15:00', '12:45:00', '600'),
(15, 'Rajkot', 'Jamnagar', '10:00:00', '12:00:00', '130'),
(16, 'Rajkot', 'Surat', '01:00:00', '10:00:00', '950'),
(17, 'Rajkot', 'Jamnagar', '03:00:00', '04:30:00', '120'),
(18, 'Rajkot', 'Jamnagar', '01:00:00', '02:30:00', '120'),
(19, 'Rajkot', 'Surat', '10:20:00', '05:15:00', '580'),
(24, 'Jamnagar', 'Ahmedabad', '12:35:00', '07:30:00', '600'),
(25, 'Jamnagar', 'Baroda', '10:00:00', '06:00:00', '450'),
(26, 'Jamnagar', 'Baroda', '10:30:00', '06:30:00', '450'),
(27, 'Jamnagar', 'Baroda', '08:00:00', '04:00:00', '450'),
(28, 'Jamnagar', 'Surat', '08:00:00', '06:30:00', '680'),
(29, 'Jamnagar', 'Surat', '12:00:00', '09:00:00', '680'),
(30, 'Jamnagar', 'Bhuj', '11:30:00', '05:30:00', '360'),
(31, 'Jamnagar', 'Bhuj', '11:57:00', '07:00:00', '360'),
(32, 'Jamnagar', 'Bhuj', '10:15:00', '05:00:00', '360'),
(33, 'Jamnagar', 'Vapi', '08:00:00', '07:00:00', '730'),
(35, 'Rajkot', 'Ahmedabad', '09:25:00', '12:45:00', '380'),
(36, 'Rajkot', 'Ahmedabad', '02:45:00', '07:30:00', '380'),
(37, 'Rajkot', 'Ahmedabad', '02:45:00', '07:30:00', '380'),
(38, 'Rajkot', 'Baroda', '12:10:00', '06:00:00', '400'),
(39, 'Rajkot', 'Baroda', '12:40:00', '06:30:00', '400'),
(40, 'Rajkot', 'Baroda', '10:10:00', '04:00:00', '400'),
(41, 'Rajkot', 'Jamnagar', '03:00:00', '05:10:00', '130');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user`, `pass`) VALUES
('vishal', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passenger`
--

CREATE TABLE `tbl_passenger` (
  `id` int(5) NOT NULL,
  `passId` int(5) NOT NULL,
  `seatNo` int(2) NOT NULL,
  `tickDate` date NOT NULL,
  `fromCity` varchar(30) NOT NULL,
  `toCity` varchar(30) NOT NULL,
  `depTime` time NOT NULL,
  `arrTime` time NOT NULL,
  `passName` varchar(50) NOT NULL,
  `mobileNo` bigint(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `paymentOpt` varchar(30) NOT NULL,
  `farePaid` int(5) NOT NULL,
  `remark` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_passenger`
--

INSERT INTO `tbl_passenger` (`id`, `passId`, `seatNo`, `tickDate`, `fromCity`, `toCity`, `depTime`, `arrTime`, `passName`, `mobileNo`, `email`, `paymentOpt`, `farePaid`, `remark`) VALUES
(246, 5, 3, '2019-08-10', 'Jamnagar ', 'Rajkot ', '07:30:00', '09:30:00', 'vishal', 9913394506, 'vishal@gmail.com', 'Payment Via Debit Card', 130, 'good'),
(247, 6, 35, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 122122121, 'v@gmail.com', 'Payment Via credit Card', 600, 'hghjj'),
(248, 7, 12, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via Debit Card', 600, 'hghjj'),
(249, 8, 20, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via credit Card', 600, 'hghjj'),
(250, 8, 4, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via credit Card', 600, 'hghjj'),
(251, 9, 35, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via Debit Card', 600, 'hghjj'),
(252, 10, 18, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via Debit Card', 600, 'hghjj'),
(253, 11, 21, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via Debit Card', 600, 'hghjj'),
(254, 12, 32, '2019-08-31', 'Jamnagar ', 'Ahmedabad ', '06:00:00', '11:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via credit Card', 600, 'hghjj'),
(255, 13, 20, '2019-08-31', 'Jamnagar ', 'Surat ', '21:15:00', '09:00:00', 'vishal', 1212121212121, 'v@gmail.com', 'Payment Via Debit Card', 680, 'hghjj'),
(256, 14, 4, '2019-08-31', 'Jamnagar ', 'Surat ', '21:15:00', '09:00:00', 'gabru', 1234567891, 'gabru@gmail.com', 'Payment Via Debit Card', 680, 'aaaaa'),
(257, 15, 4, '2019-09-20', 'Jamnagar ', 'Bhuj ', '11:30:00', '05:30:00', 'vishal', 9913394506, 'v@gmail.com', 'Payment Via Debit Card', 360, 'a'),
(258, 16, 3, '2019-09-25', 'Jamnagar ', 'Ahmedabad ', '12:35:00', '07:30:00', 'vishal', 991339406, 'v@gmail.com', 'Payment Via Debit Card', 600, 'ac');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `f_name` varchar(15) NOT NULL,
  `s_name` varchar(15) NOT NULL,
  `us_nam` varchar(30) NOT NULL,
  `eml` varchar(50) NOT NULL,
  `Con_no` bigint(10) NOT NULL,
  `pass_no` varchar(8) NOT NULL,
  `Cm_pass` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`f_name`, `s_name`, `us_nam`, `eml`, `Con_no`, `pass_no`, `Cm_pass`) VALUES
('Vishal', 'Thakker', 'vishal', 'vishalthakker99@gmail.com', 9913394506, 'vishal', 'vishal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bus_sch`
--
ALTER TABLE `tbl_bus_sch`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `tbl_passenger`
--
ALTER TABLE `tbl_passenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`us_nam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_passenger`
--
ALTER TABLE `tbl_passenger`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
