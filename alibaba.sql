-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 04:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alibaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `testing` varchar(50) NOT NULL,
  `datetesting` date NOT NULL,
  `timetesting` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `testing`, `datetesting`, `timetesting`, `venue`) VALUES
(1, 'GOOD TESTING', '2019-04-11', '01:00:00', 'DK1'),
(2, 'GOOD TESTING', '2019-04-11', '01:00:00', 'DK1'),
(3, 'PA SYSTEM SOUND CHECK', '2019-04-18', '14:00PM - 16:00PM', 'CHEF KITCHEN K01'),
(4, 'FOOD TESTING', '2019-01-31', '10:00 AM - 12:00PM', 'CHEF KITCHEN KK3'),
(5, 'PA SYSTEM SOUND CHECK', '2019-04-18', '10:00 AM - 12:00PM', 'CHEF KITCHEN KK3'),
(6, 'PA SYSTEM SOUND CHECK', '2019-10-05', '14:00PM - 16:00PM', 'CHEF KITCHEN K01');

-- --------------------------------------------------------

--
-- Table structure for table `eqbook`
--

CREATE TABLE `eqbook` (
  `eqID` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eqbook`
--

INSERT INTO `eqbook` (`eqID`, `startdate`, `enddate`, `starttime`, `endtime`, `quantity`, `price`) VALUES
(1, '2019-04-12', '2019-04-19', '00:00:00', '01:00:00', 3, 0),
(54, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 9, 555),
(55, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 9, 555),
(56, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 0, 0),
(57, '2019-12-18', '2019-12-17', '03:12:00', '04:07:00', 5, 451),
(58, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 89, 13208),
(59, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 5, 602),
(60, '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 3, 451);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eqid` int(11) NOT NULL,
  `EqName` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL,
  `EqPrice` double NOT NULL,
  `EqDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eqid`, `EqName`, `Qty`, `EqPrice`, `EqDate`) VALUES
(2, 'CHAIR', 500, 1, '2019-07-17'),
(12122, 'SPEAKER', 5, 150, '2019-04-30'),
(12123, 'book', 55, 300, '2019-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `eventbook`
--

CREATE TABLE `eventbook` (
  `bookingid` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `packagename` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  `venue` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventbook`
--

INSERT INTO `eventbook` (`bookingid`, `Username`, `eventname`, `packagename`, `startdate`, `enddate`, `starttime`, `endtime`, `venue`, `price`) VALUES
(5, '', 'anuual dinner', 'Marvelous Package', '2019-04-06', '2019-04-08', '13:00:00', '16:00:00', 'dewan', 33),
(12, '', 'birthday party', 'Western Package 2', '2019-04-19', '2019-01-01', '13:59:00', '14:00:00', 'hall', 57),
(13, 'wahidah', 'dinner', 'Western Package 2', '2019-01-01', '2019-02-01', '01:00:00', '02:00:00', 'ksu', 150),
(15, 'ashikin', 'kenduri', 'Western Package 1', '2019-01-04', '2019-01-06', '13:00:00', '14:00:00', 'DEWAN KSU', 150);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `Rate` varchar(100) NOT NULL,
  `Comments` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `Rate`, `Comments`, `date`) VALUES
(1, 'satisfied', 'good', '2019-04-10'),
(2, 'Satisfied', 'ohhh', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkgid` int(11) NOT NULL,
  `PkgName` varchar(50) NOT NULL,
  `PkgDesc` varchar(200) NOT NULL,
  `PkgPrice` int(11) NOT NULL,
  `PkgDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkgid`, `PkgName`, `PkgDesc`, `PkgPrice`, `PkgDate`) VALUES
(1, 'AWESTERN PACKAGE 1', 'GRILLED CHICKEN BREAST, CHICKEN CORN SOUP, COCKTAIL', 200, '0000-00-00'),
(2, 'HWESTERN PACKAGE 2', 'NASI LEMAK', 50, '2019-04-10'),
(3, 'Bwestern package 3', 'nasi kuning', 10, '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int(6) NOT NULL,
  `txnid` varchar(20) NOT NULL,
  `ICno` int(12) NOT NULL,
  `payment_amount` decimal(7,2) NOT NULL,
  `itemid` varchar(25) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `createdtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `idQues` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`idQues`, `email`, `question`) VALUES
(1, 'EE@GMAIL.COM', 'FF'),
(2, 'WAHIDA@GMAIL.COM', 'ONE QUESTION'),
(3, 'mrshriqo7@gmail.com', 'ldfhvgdhj'),
(4, 'oo@jhgf.com', 'hello ');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `recordID` int(10) NOT NULL,
  `recordDate` date NOT NULL,
  `recordType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`recordID`, `recordDate`, `recordType`) VALUES
(3, '2019-04-27', '2019-04-27'),
(4, '2019-04-27', '2019-04-27'),
(5, '2019-04-27', '2019-04-27'),
(6, '2019-04-27', '2019-04-27'),
(7, '2019-04-27', '2019-04-27'),
(8, '2019-04-27', '2019-04-27'),
(9, '2019-04-27', '2019-04-27'),
(10, '2019-04-27', '2019-04-27'),
(13, '2019-04-27', '2019-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ICno` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Approval_Status` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Approval_Date` date NOT NULL,
  `Account_Type` varchar(100) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ICno`, `Username`, `Password`, `Name`, `Address`, `ContactNo`, `Approval_Status`, `Email`, `Approval_Date`, `Account_Type`, `Company`, `Gender`) VALUES
('123', 'ammar', '123', 'Ammar', 'kk4', '0183160469', 'APPROVE', 'ammar@gmail.com', '2019-12-13', 'Customer', '', 'male'),
('5421', 'ashikin', '123', 'pop', 'Malaysia, Pahang', '0183137141', 'BLOCK', 'drgdrg8@gmail.com', '2019-04-27', 'Customer', '', 'female'),
('5421', 'izzati', '123', 'ming', 'Malaysia, Pahang', '0183137141', 'APPROVE', 'min@gmail.com', '2019-04-26', 'Supplier', 'UMP', 'female'),
('123', 'malek', '123', 'malek', 'kk5', '123', 'APPROVE', 'malek@gmail.com', '2019-12-13', 'Supplier', '123', 'male'),
('0', 'mingsui', '123', 'fff', 'dd, dddd', '784512', 'BLOCK', 'mrshriqo7@gmail.com', '2019-04-27', 'EventOrganizer', 'ddddd', 'male'),
('123', 'naif', '123', 'naif', 'fajjaya', '123', 'APPROVE', 'naid@gmaicom', '2019-12-13', 'EventOrganizer', 'Universiti Malaysia Pahang', 'male'),
('1', 'saleh', '123', 'saleh', 'qq', '123', 'Approve', 'aaa@ss', '0000-00-00', 'Admin', 'ump', 'male'),
('0', 'sh98', '33', 'shikin', 'Malaysia, Pahang', '0183137141', 'BLOCK', 'drgdrg8@gmail.com', '2019-04-27', 'Customer', '', 'female'),
('0', 'ss66', '33', 'Saleh Sharqan', 'Malaysia, Pahang', '0183137141', 'APPROVE', 'kkk8@gmail.com', '2019-04-27', 'Customer', '', 'male'),
('0', 'wahidah', '123', 'olla', 'dd, dddd', '784512', 'BLOCK', 'mrshriqo7@gmail.com', '2019-04-27', 'EventOrganizer', 'ddddd', 'female'),
('845254578', 'wahidah11', '33', 'wahidah', 'pahang', '85421', 'APPROVE', 'wa@gma.com', '2019-08-16', 'EventOrganizer', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eqbook`
--
ALTER TABLE `eqbook`
  ADD PRIMARY KEY (`eqID`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eqid`);

--
-- Indexes for table `eventbook`
--
ALTER TABLE `eventbook`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`idQues`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`recordID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eqbook`
--
ALTER TABLE `eqbook`
  MODIFY `eqID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `eqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12124;

--
-- AUTO_INCREMENT for table `eventbook`
--
ALTER TABLE `eventbook`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `idQues` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `recordID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
