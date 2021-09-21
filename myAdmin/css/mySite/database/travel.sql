-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 27, 2018 at 06:22 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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

DROP TABLE IF EXISTS `tbl_buses`;
CREATE TABLE IF NOT EXISTS `tbl_buses` (
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

DROP TABLE IF EXISTS `tbl_bus_sch`;
CREATE TABLE IF NOT EXISTS `tbl_bus_sch` (
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
(1, 'Jamnagar', 'Rajkot', '01:00:00', '02:30:00', '130'),
(2, 'Jamnagar', 'Rajkot', '02:00:00', '03:00:00', '130'),
(3, 'Jamnagar', 'Rajkot', '03:30:00', '05:30:00', '130'),
(4, 'Jamnagar', 'Rajkot', '05:30:00', '07:30:00', '130'),
(5, 'Jamnagar', 'Rajkot', '07:30:00', '09:30:00', '130'),
(11, 'Jamnagar', 'Ahmedabad', '06:00:00', '11:00:00', '600'),
(12, 'Jamnagar', 'Ahmedabad', '07:00:00', '00:00:00', '600'),
(13, 'Jamnagar', 'Khambhadia', '07:00:00', '08:00:00', '80'),
(14, 'Jamnagar', 'Dwaraka', '07:00:00', '04:00:00', '320'),
(15, 'Rajkot', 'Jamnagar', '10:00:00', '11:00:00', '100'),
(16, 'Rajkot', 'Surat', '01:00:00', '10:00:00', '950'),
(17, 'Rajkot', 'Jamnagar', '03:00:00', '04:30:00', '120'),
(18, 'Rajkot', 'Jamnagar', '01:00:00', '02:30:00', '120'),
(19, 'Rajkot', 'Surat', '22:05:00', '05:15:00', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user`, `pass`) VALUES
('admin', 'admin'),
('atulvaghela', 'atul');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_passenger`
--

DROP TABLE IF EXISTS `tbl_passenger`;
CREATE TABLE IF NOT EXISTS `tbl_passenger` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
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
  `remark` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_passenger`
--

INSERT INTO `tbl_passenger` (`id`, `passId`, `seatNo`, `tickDate`, `fromCity`, `toCity`, `depTime`, `arrTime`, `passName`, `mobileNo`, `email`, `paymentOpt`, `farePaid`, `remark`) VALUES
(244, 4, 3, '2018-09-12', 'Jamnagar', 'Rajkot', '01:00:00', '02:30:00', 'Akil Morvadiya', 9879743225, 'akki.morvadiya0920@gmail.com', 'Payment Via Debit Card', 360, 'eiio'),
(243, 4, 2, '2018-09-12', 'Jamnagar', 'Rajkot', '01:00:00', '02:30:00', 'Akil Morvadiya', 9879743225, 'akki.morvadiya0920@gmail.com', 'Payment Via Debit Card', 360, 'eiio'),
(240, 4, 2, '2018-09-12', 'Jamnagar', 'Rajkot', '01:00:00', '02:30:00', 'Akil Morvadiya', 9879743225, 'akki.morvadiya0920@gmail.com', 'Payment Via Debit Card', 360, 'eiio'),
(241, 4, 3, '2018-09-12', 'Jamnagar', 'Rajkot', '01:00:00', '02:30:00', 'Akil Morvadiya', 9879743225, 'akki.morvadiya0920@gmail.com', 'Payment Via Debit Card', 360, 'eiio');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

DROP TABLE IF EXISTS `tbl_register`;
CREATE TABLE IF NOT EXISTS `tbl_register` (
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
('Atul', 'Vaghela', 'admin', 'abc@abc.com', 9913936390, 'atul123', 'atul123'),
('Atul', 'Vaghela', 'atulvaghela', 'jass@gmail.com', 9913936390, 'atul123', 'atul123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
