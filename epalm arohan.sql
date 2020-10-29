-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 06:41 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epalm`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `Expiry_Date` date NOT NULL,
  `Name_on_Card` varchar(20) NOT NULL,
  `CVV` int(3) NOT NULL,
  `Registered_ph_no` bigint(10) NOT NULL,
  `Card_Number` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`Expiry_Date`, `Name_on_Card`, `CVV`, `Registered_ph_no`, `Card_Number`) VALUES
('2022-04-30', 'David Beckham', 364, 8989523426, 5445674537565656),
('2023-09-30', 'Ethan Mathew', 595, 8912343453, 6566767456556234),
('2022-09-30', 'Bob Mishra', 655, 9853547568, 8565674536742446),
('2024-08-31', 'Aryan Vats', 977, 8767889008, 8732345678987654),
('2023-10-31', 'Carl Jimmy', 187, 8998988789, 9896787876767665);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` varchar(10) NOT NULL,
  `Coordinator` varchar(20) NOT NULL,
  `Coordinator_Mobile` bigint(10) NOT NULL,
  `Event_Name` varchar(20) NOT NULL,
  `Club_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Coordinator`, `Coordinator_Mobile`, `Event_Name`, `Club_Name`) VALUES
('CD1110310', 'CORDEN', 898897888, 'CodeRunner', 'DSC'),
('SG0311408', 'KOBE', 899656544, 'Learn To Code', 'ACM'),
('SJ2110510', 'JAMES', 867786797, 'Introduction to AI', 'ADG'),
('SJ3010510', 'HARRY', 896677856, 'Action Mania', 'VAC'),
('TT1510201', 'FRANCO', 898789899, 'Meme-O-Mania', 'Spartans');

-- --------------------------------------------------------

--
-- Table structure for table `event_date`
--

CREATE TABLE `event_date` (
  `Event_ID` varchar(10) NOT NULL,
  `Event_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_date`
--

INSERT INTO `event_date` (`Event_ID`, `Event_Date`) VALUES
('CD1110310', '2020-10-11'),
('SG0311408', '2020-11-03'),
('SJ2110510', '2020-10-21'),
('SJ3010510', '2020-10-30'),
('TT1510201', '2020-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `event_desc`
--

CREATE TABLE `event_desc` (
  `Event_ID` varchar(10) NOT NULL,
  `Brief_Description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_desc`
--

INSERT INTO `event_desc` (`Event_ID`, `Brief_Description`) VALUES
('CD1110310', 'A competetive coding workshop with a twist! Code while running'),
('SJ3010510', 'A workshop on 3D modelling using the software Autodesk Maya'),
('SG0311408', 'An introduction to the amazing world of programming using Python'),
('TT1510201', 'Meme - making competetion with prizes upto 6000 rupees'),
('SJ2110510', 'Want to know how Tony Stark made JARVIS? Learn how you can make your own AI');

-- --------------------------------------------------------

--
-- Table structure for table `event_duration`
--

CREATE TABLE `event_duration` (
  `Event_ID` varchar(10) NOT NULL,
  `Duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_duration`
--

INSERT INTO `event_duration` (`Event_ID`, `Duration`) VALUES
('CD1110310', 4),
('SG0311408', 4),
('SJ2110510', 8),
('SJ3010510', 4),
('TT1510201', 3);

-- --------------------------------------------------------

--
-- Table structure for table `event_fees`
--

CREATE TABLE `event_fees` (
  `Event_ID` varchar(10) NOT NULL,
  `Fees` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_fees`
--

INSERT INTO `event_fees` (`Event_ID`, `Fees`) VALUES
('CD1110310', '200'),
('SG0311408', '400'),
('SJ2110510', '300'),
('SJ3010510', '350'),
('TT1510201', '100');

-- --------------------------------------------------------

--
-- Table structure for table `event_seats`
--

CREATE TABLE `event_seats` (
  `Event_ID` varchar(10) NOT NULL,
  `Seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_seats`
--

INSERT INTO `event_seats` (`Event_ID`, `Seats`) VALUES
('CD1110310', 50),
('SG0311408', 66),
('SJ2110510', 70),
('SJ3010510', 70),
('TT1510201', 45);

-- --------------------------------------------------------

--
-- Table structure for table `event_start`
--

CREATE TABLE `event_start` (
  `Event_ID` varchar(10) NOT NULL,
  `Start_time` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_start`
--

INSERT INTO `event_start` (`Event_ID`, `Start_time`) VALUES
('CD1110310', '1600'),
('SG0311408', '1600'),
('SJ2110510', '1500'),
('SJ3010510', '1800'),
('TT1510201', '0600');

-- --------------------------------------------------------

--
-- Table structure for table `p_trans_id`
--

CREATE TABLE `p_trans_id` (
  `Transaction_ID` varchar(10) NOT NULL,
  `reg_num` varchar(10) NOT NULL,
  `Event_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_trans_id`
--

INSERT INTO `p_trans_id` (`Transaction_ID`, `reg_num`, `Event_ID`) VALUES
('1010193493', '19BCE0001', 'SG0311408'),
('1056759678', '19BCE0003', 'SJ3010510'),
('1253865050', '19BCE0004', 'CD1110310'),
('1365466767', '19BCE0519', 'TT1510201'),
('1923443254', '19BCE0002', 'SG0311408');

-- --------------------------------------------------------

--
-- Table structure for table `reg_card`
--

CREATE TABLE `reg_card` (
  `reg_num` varchar(10) NOT NULL,
  `Card_Number` bigint(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_card`
--

INSERT INTO `reg_card` (`reg_num`, `Card_Number`) VALUES
('19BCE0004', 5445674537565656),
('19BCE0519', 6566767456556234),
('19BCE0002', 8565674536742446),
('19BCE0001', 8732345678987654),
('19BCE0003', 9896787876767665);

-- --------------------------------------------------------

--
-- Table structure for table `sp_details`
--

CREATE TABLE `sp_details` (
  `Event_ID` varchar(10) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sp_details`
--

INSERT INTO `sp_details` (`Event_ID`, `Mobile`, `Name`) VALUES
('CD1110310', 878978987, 'Vijay'),
('SG0311408', 894756757, 'Anchit Chopra'),
('SJ2110510', 784596132, 'Aniket'),
('SJ3010510', 985674556, 'Udit Blouria'),
('TT1510201', 90788587, 'Mahesh');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_num` varchar(10) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `middleName` varchar(10) DEFAULT NULL,
  `lastName` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_num`, `firstName`, `middleName`, `lastName`, `mobile`, `Password`, `Email`) VALUES
('19BCE0001', 'Ajay', NULL, 'Vats', 8767889008, 'ajay0001', 'ajayvats@gmail.com'),
('19BCE0002', 'Bob', NULL, 'Mishra', 9853547568, 'bobs', 'bobs925@gmail.com'),
('19BCE0003', 'Carl', 'Kristien', 'Jimmy', 8998988789, 'carl1234', 'carla@rediffmail.com'),
('19BCE0004', 'David', NULL, 'Beckham', 8989523426, 'david123', 'footbal@outlook.com'),
('19BCE0274', 'Arohan', '', 'Mishra', 8511478545, 'root', 'sony1mkm1@rediffmail'),
('19BCE0277', 'Praneel', '', 'Jimmy', 1234567890, 'root', 'abc@gmail.com'),
('19BCE0519', 'Ethan', 'Jacob', 'Mathew', 8912343453, 'missionimpossibl', 'mifra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`Card_Number`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_date`
--
ALTER TABLE `event_date`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_desc`
--
ALTER TABLE `event_desc`
  ADD PRIMARY KEY (`Event_ID`),
  ADD UNIQUE KEY `Brief Description` (`Brief_Description`);

--
-- Indexes for table `event_duration`
--
ALTER TABLE `event_duration`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_fees`
--
ALTER TABLE `event_fees`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_seats`
--
ALTER TABLE `event_seats`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `event_start`
--
ALTER TABLE `event_start`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `p_trans_id`
--
ALTER TABLE `p_trans_id`
  ADD PRIMARY KEY (`reg_num`,`Event_ID`),
  ADD UNIQUE KEY `Transaction ID` (`Transaction_ID`);

--
-- Indexes for table `reg_card`
--
ALTER TABLE `reg_card`
  ADD PRIMARY KEY (`Card_Number`);

--
-- Indexes for table `sp_details`
--
ALTER TABLE `sp_details`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
