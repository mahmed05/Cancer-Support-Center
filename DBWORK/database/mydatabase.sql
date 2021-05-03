-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 10:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregistration`
--

CREATE TABLE `adminregistration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `JobTitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminregistration`
--

INSERT INTO `adminregistration` (`ID`, `Name`, `Email`, `Password`, `JobTitle`) VALUES
(15, 'Admin', 'admin@gmail.com', 'admin@123', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `classesregistration`
--

CREATE TABLE `classesregistration` (
  `ID` int(11) NOT NULL,
  `classcode` varchar(40) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `classselection` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classesregistration`
--

INSERT INTO `classesregistration` (`ID`, `classcode`, `Email`, `classselection`) VALUES
(7, '00335', 'student@gmail.com', 'Class A'),
(8, '02258', 'test@gmail.com', 'Class B');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `human` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `human`) VALUES
('BEN', 'M.Fahad.Sajjad@outlook.com', 'Request', 'Please aapprove my request', '4'),
('FAHAD', 'm.fahad.cust.pk@gmail.com', 'Request', 'Hy', '4'),
('ABC', 'abc@gmail.com', 'Request', 'Please approve my request', '4'),
('Deep Jhon', 'deep@gmail.com', 'My Donation', 'Please conform my donation', '4'),
('THE KING', 'abz@gmail.com', 'Request', 'Update your service', '4'),
('Cust', 'cust@gmail.com', 'THANKS GIVING', 'thanks for your support', '4'),
('Cust', 'cust@gmail.com', 'THANKS GIVING', 'thanks for your support', '4'),
('Cust', 'cust@gmail.com', 'THANKS GIVING', 'thanks for your support', '4'),
('Cust', 'cust@gmail.com', 'THANKS GIVING', 'thanks for your support', '4'),
('hyedra', 'fg@outlook.com', 'Request', 'hello there', '4'),
('hyedra', 'fg@outlook.com', 'Request', 'hello there', '4'),
('hyedra', 'fg@outlook.com', 'Request', 'hello there', '4'),
('hyedra', 'fg@outlook.com', 'Request', 'hello there', '4'),
('UET', 'abc@gmail.com', '121', 's', '4'),
('UET', 'abc@gmail.com', '121', 's', '4'),
('dfs', 'dfs@gmail.com', 'sw', 'sw', '4'),
('dfs', 'dfs@gmail.com', 'sw', 'sw', '4'),
('Federal Urdu University', 'abc@gmail.com', 'dsd', 'sdsd', '4'),
('ADivillers', 'ad@gmail.com', 'Feedback', 'Everything Good', '4'),
('as', 'as@gmail.com', 'xcs', 'dcd', '4'),
('THE KING', 'king@gmail.com', 'Hy', 'Yoyr', '4');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `cardno` varchar(255) NOT NULL,
  `nameoncard` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `email`, `address`, `comment`, `cardno`, `nameoncard`, `country`, `region`, `city`, `state`, `zip`, `amount`) VALUES
('Test', 'test@gmail.com', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `eventsregistration`
--

CREATE TABLE `eventsregistration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `eventname` varchar(255) DEFAULT NULL,
  `upcomingevent` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventsregistration`
--

INSERT INTO `eventsregistration` (`ID`, `Name`, `Contact`, `Email`, `eventname`, `upcomingevent`) VALUES
(17, 'student', '123-456-7890', 'student@gmail.com', 'Event A', 'Donate'),
(18, 'test2', '789-456-1230', 'test@gmail.com', 'Event D', 'Cancer');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `human` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`name`, `email`, `subject`, `message`, `human`) VALUES
('Mike', 'mike@gmail.com', 'Thank you note', 'Thank you for your service', '4');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `participant` varchar(255) NOT NULL,
  `cancertype` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `Checkboxvalue` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`name`, `email`, `phone`, `program`, `address`, `participant`, `cancertype`, `hospital`, `Checkboxvalue`) VALUES
('Cust', 'm.fahad.cust.pk@gmail.com', '0123222', 'yes', 'Street 2, House 247, Phase 1 Margalla Town Islamabad', '', '2', '3', ''),
('Cust', 'm.fahad.cust.pk@gmail.com', '0123222', 'yes', 'Street 2, House 247, Phase 1 Margalla Town Islamabad', '', '2', '3', ''),
('Ali', 'abc@gmail.com', '786868', 'IT', 'ABC STREET Z', '', 'Savare', 'ABC', ''),
('', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', '', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', '', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', '', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', '', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', 'Bereaved', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', 'Bereaved', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', 'Bereaved', 'B', 'NYH', ''),
('Jhon', 'jhon@gmail.com', '+1234577', 'yes', 'Newyork', 'Bereaved', 'B', 'NYH', ''),
('Arand', 'arand@hotmail.com', '+139080383930', 'yes', 'Michigan', 'Survivor', 'A', 'MHS', 'Use of Services,Wellness Classes,Medical Assistance/Advice,Nutrition Pop-Up Station,'),
('Queen', 'queen@gmail.com', '+34526', 'yes', 'New jersy', 'Caregiver', 'B', 'NJH', 'Use of Services,Wellness Classes,Medical Assistance/Advice,Nutrition Pop-Up Station,'),
('aa', 'aa@gmail.com', '3211221321', 'No', 'ds', 'Survivor', 'B', 'dsh', 'Use of Services,Wellness Classes,Medical Assistance/Advice,Nutrition Pop-Up Station,'),
('Fderek', 'fedrek@gmail.com', '121', 'yes', 'abc', 'Survior', 'B', 'MHS', 'Use of Services,Wellness Classes,Medical Assistance/Advice,Nutrition Pop-Up Station,'),
('Gray', 'gray@gmail.com', '372687', 'yes', 'gh', 'Survior', 'B', 'hjg', 'Use of Services,Wellness Classes,Medical Assistance/Advice,Nutrition Pop-Up Station,');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL,
  `DateofBirth` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Email`, `Password`, `DateofBirth`) VALUES
(14, 'Student', 'student@gmail.com', '12345', '10/22/2001'),
(15, 'test2', 'test@gmail.com', 'test2', '02/25/2021');

-- --------------------------------------------------------

--
-- Table structure for table `specialevents`
--

CREATE TABLE `specialevents` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `human` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialevents`
--

INSERT INTO `specialevents` (`name`, `email`, `subject`, `message`, `human`) VALUES
('', '', '', 'sdds', ''),
('', '', '', 'sdssd', ''),
('sd', 'sd@gmail.com', 'No query', 'hello there', '4'),
('zz', 'zz@gmail.com', 'hello', 'hy', '4'),
('saaas', 'm.fahad.cust.pk@gmail.com', 'Request', '1121', '4'),
('Cust', 'sd@gmail.com', 'dd', 'dd', '4'),
('222', 'abc@gmail.com', 'Request', 'ee', '4'),
('sds', 'sds@gmail.com', '123', 'thanks', '4'),
('asad', 'asad@gmail.com', 'no subject', 'hy there', '4'),
('vvf', 'vfg@gmail.com', 'Request', 'hy ', '3'),
('rafig', 'rafig@gmail.com', 'New concerm', 'message', '4'),
('gg', 'gg@gmail.com', 'no subject', 'hy there', '4'),
('Cust', 'cust@gmail.com', 'THANKS GIVING', 'thanks', '4'),
('Katherine', 'katherine@gmail.com', 'THANKS GIVING', 'Thanks for your service', '4'),
('abc', 'abc@gmail.com', 'hy', 'ghy', '4'),
('Ahmed', 'ahmad@gmail.com', 'Request', 'hy thete', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_number` varchar(11) NOT NULL,
  `eventname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_number`, `eventname`) VALUES
('ak3578673##', 'Event C');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `areaofIntrest` varchar(500) NOT NULL,
  `availability` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `zip` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `preference` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `convicted` varchar(500) NOT NULL,
  `jobTitle` varchar(500) NOT NULL,
  `employeer` varchar(500) NOT NULL,
  `eaddress` varchar(500) NOT NULL,
  `ecity` varchar(500) NOT NULL,
  `estate` varchar(500) NOT NULL,
  `ezip` varchar(500) NOT NULL,
  `eretired` varchar(500) NOT NULL,
  `highestEducation` varchar(500) NOT NULL,
  `schoolname` varchar(500) NOT NULL,
  `certifications` varchar(500) NOT NULL,
  `hear` varchar(500) NOT NULL,
  `participated` varchar(500) NOT NULL,
  `want` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `osignature` varchar(500) NOT NULL,
  `psignature` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`areaofIntrest`, `availability`, `name`, `address`, `city`, `state`, `zip`, `email`, `phone`, `preference`, `location`, `convicted`, `jobTitle`, `employeer`, `eaddress`, `ecity`, `estate`, `ezip`, `eretired`, `highestEducation`, `schoolname`, `certifications`, `hear`, `participated`, `want`, `experience`, `osignature`, `psignature`) VALUES
('Program Assistant,', 'Program AssistantSunday Morning,Saturday Morning,', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test'),
('Walk-of-Hope,', 'Walk-of-HopeWednesday Afternoon,Thursday Afternoon,', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2', 'Test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregistration`
--
ALTER TABLE `adminregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `classesregistration`
--
ALTER TABLE `classesregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `eventsregistration`
--
ALTER TABLE `eventsregistration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregistration`
--
ALTER TABLE `adminregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `classesregistration`
--
ALTER TABLE `classesregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eventsregistration`
--
ALTER TABLE `eventsregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
