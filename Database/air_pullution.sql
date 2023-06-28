-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 11:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_pullution`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_ID` varchar(100) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `PollutionRate` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_ID`, `CityName`, `PollutionRate`, `Description`) VALUES
('C-1', 'Ygn', '50%', 'Medium'),
('C-2', 'Mdy', '45%', 'Medium'),
('C-3', 'Taung Gyi', '30%', 'Good'),
('C-4', 'Ka Law', '35%', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `UserI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tbl`
--

CREATE TABLE `contact_us_tbl` (
  `ContactUsID` int(11) NOT NULL,
  `Questions` varchar(200) NOT NULL,
  `Answer` varchar(200) NOT NULL,
  `UserID` int(11) NOT NULL,
  `QuestionDate` date NOT NULL,
  `QuestionTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_tbl`
--

INSERT INTO `contact_us_tbl` (`ContactUsID`, `Questions`, `Answer`, `UserID`, `QuestionDate`, `QuestionTime`) VALUES
(8, 'Do you think there are lessons to learn from nature?', 'Yes, we do.', 1, '2020-10-14', '01:29:57'),
(9, 'WHY IS AIR POLLUTION A PRIORITY ISSUE?', 'NULL', 1, '2020-10-14', '01:49:59'),
(10, 'IS AIR POLLUTION A NEW PROBLEM?', 'NULL', 1, '2020-10-14', '01:50:15'),
(11, 'How bad is air pollution?', 'Air pollution is a major environmental health problem affecting everyone.\r\nWhether in Manila, Sao Paolo or London, air pollution is a problem from exhaust fumes from\r\ncars, domestic combustion or fact', 1, '2020-10-14', '03:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistoryID` int(11) NOT NULL,
  `PageName` varchar(100) NOT NULL,
  `AccessTime` time NOT NULL,
  `AccessDate` date NOT NULL,
  `UserID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`HistoryID`, `PageName`, `AccessTime`, `AccessDate`, `UserID`) VALUES
(1, '', '05:33:53', '2020-09-19', '12'),
(2, 'ContactUs.php', '05:34:59', '2020-09-19', '12'),
(3, 'ContactUs.php', '05:35:09', '2020-09-19', '12'),
(4, 'ContactUs.php', '05:35:16', '2020-09-19', '12'),
(5, 'user_update.php', '05:37:53', '2020-09-19', '12'),
(6, 'FAQ.php', '05:39:58', '2020-09-19', '12'),
(7, 'FAQ.php', '05:40:25', '2020-09-19', '12'),
(8, 'FAQ.php', '05:41:08', '2020-09-19', '12'),
(9, 'FAQ.php', '05:41:09', '2020-09-19', '12'),
(10, 'FAQ.php', '05:41:09', '2020-09-19', '12'),
(11, 'FAQ.php', '05:41:09', '2020-09-19', '12'),
(12, 'FAQ.php', '05:41:09', '2020-09-19', '12'),
(13, 'FAQ.php', '05:41:19', '2020-09-19', '12'),
(14, 'FAQ.php', '05:41:20', '2020-09-19', '12'),
(15, 'FAQ.php', '05:41:20', '2020-09-19', '12'),
(16, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(17, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(18, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(19, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(20, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(21, 'FAQ.php', '05:41:21', '2020-09-19', '12'),
(22, 'Login.php', '03:13:55', '2020-10-08', '5'),
(23, 'Login.php', '03:14:05', '2020-10-08', '5'),
(24, 'Login.php', '03:14:43', '2020-10-08', '5'),
(25, 'Login.php', '03:16:03', '2020-10-08', '5'),
(26, 'Login.php', '03:18:02', '2020-10-08', '1233'),
(27, 'Login.php', '03:22:15', '2020-10-08', '1233'),
(28, 'Login.php', '03:22:55', '2020-10-08', '5'),
(29, 'Login.php', '03:46:10', '2020-10-08', '1233'),
(30, 'Login.php', '03:48:55', '2020-10-08', '1233'),
(31, 'ContactUs.php', '03:49:10', '2020-10-08', '1233'),
(32, 'Login.php', '04:52:57', '2020-10-08', '1233'),
(33, 'FAQ.php', '05:08:37', '2020-10-08', '1233'),
(34, 'ContactUs.php', '05:08:43', '2020-10-08', '1233'),
(35, 'Login.php', '10:31:18', '2020-10-08', '1235'),
(36, 'Login.php', '10:31:29', '2020-10-08', '1235'),
(37, 'Login.php', '10:32:47', '2020-10-08', '1235'),
(38, 'Login.php', '10:37:47', '2020-10-08', '1235'),
(39, 'Login.php', '10:38:09', '2020-10-08', '1235'),
(40, 'Login.php', '10:38:10', '2020-10-08', '1235'),
(41, 'Login.php', '10:38:26', '2020-10-08', '1235'),
(42, 'Login.php', '10:38:26', '2020-10-08', '1235'),
(43, 'Login.php', '10:38:44', '2020-10-08', '1235'),
(44, 'Login.php', '10:39:58', '2020-10-08', '1235'),
(45, 'Login.php', '10:39:58', '2020-10-08', '1235'),
(46, 'Login.php', '10:40:18', '2020-10-08', '1235'),
(47, 'Login.php', '10:40:18', '2020-10-08', '1235'),
(48, 'Login.php', '10:40:18', '2020-10-08', '1235'),
(49, 'Login.php', '10:40:18', '2020-10-08', '1235'),
(50, 'Login.php', '10:41:00', '2020-10-08', '1235'),
(51, 'Login.php', '10:41:00', '2020-10-08', '1235'),
(52, 'Login.php', '10:41:41', '2020-10-08', '1235'),
(53, 'Login.php', '10:41:42', '2020-10-08', '1235'),
(54, 'Login.php', '10:41:42', '2020-10-08', '1235'),
(55, 'Login.php', '10:43:27', '2020-10-08', '1235'),
(56, 'Login.php', '10:46:26', '2020-10-08', '1235'),
(57, 'Login.php', '10:47:29', '2020-10-08', '1235'),
(58, 'Login.php', '10:47:49', '2020-10-08', '1235'),
(59, 'Login.php', '10:48:03', '2020-10-08', '1235'),
(60, 'Login.php', '10:48:53', '2020-10-08', '1235'),
(61, 'Login.php', '10:48:53', '2020-10-08', '1235'),
(62, 'Login.php', '10:53:09', '2020-10-08', '1235'),
(63, 'Login.php', '10:53:45', '2020-10-08', '1235'),
(64, 'Login.php', '10:54:43', '2020-10-08', '1235'),
(65, 'Login.php', '10:54:53', '2020-10-08', '1235'),
(66, 'Login.php', '10:55:08', '2020-10-08', '1235'),
(67, 'Login.php', '10:55:22', '2020-10-08', '1235'),
(68, 'Login.php', '10:56:50', '2020-10-08', '1235'),
(69, 'Login.php', '10:57:00', '2020-10-08', '1235'),
(70, 'Login.php', '10:57:02', '2020-10-08', '1235'),
(71, 'Login.php', '10:57:02', '2020-10-08', '1235'),
(72, 'Login.php', '10:57:06', '2020-10-08', '1235'),
(73, 'Login.php', '10:57:06', '2020-10-08', '1235'),
(74, 'Login.php', '10:57:13', '2020-10-08', '1235'),
(75, 'Login.php', '10:57:40', '2020-10-08', '1235'),
(76, 'Login.php', '10:57:46', '2020-10-08', '1235'),
(77, 'Login.php', '10:57:53', '2020-10-08', '1235'),
(78, 'Login.php', '10:59:07', '2020-10-08', '1235'),
(79, 'Login.php', '10:59:07', '2020-10-08', '1235'),
(80, 'Login.php', '11:02:36', '2020-10-08', '1235'),
(81, 'Login.php', '11:06:35', '2020-10-08', '1235'),
(82, 'Login.php', '11:06:47', '2020-10-08', '1235'),
(83, 'Login.php', '11:07:32', '2020-10-08', '1235'),
(84, 'Login.php', '11:07:32', '2020-10-08', '1235'),
(85, 'Login.php', '11:08:30', '2020-10-08', '1235'),
(86, 'Login.php', '11:08:30', '2020-10-08', '1235'),
(87, 'Login.php', '11:08:30', '2020-10-08', '1235'),
(88, 'Login.php', '11:14:10', '2020-10-08', '1235'),
(89, 'ContactUs.php', '11:15:00', '2020-10-08', '1235'),
(90, 'Login.php', '11:15:14', '2020-10-08', '1235'),
(91, 'Login.php', '11:38:07', '2020-10-08', '1235'),
(92, 'Login.php', '11:38:17', '2020-10-08', '6'),
(93, 'Login.php', '11:39:49', '2020-10-08', '6'),
(94, 'Login.php', '11:39:58', '2020-10-08', '10'),
(95, 'Login.php', '11:43:44', '2020-10-08', '10'),
(96, 'Login.php', '11:43:54', '2020-10-08', '8');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `ProductID` int(11) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`ProductID`, `ProductImage`, `ProductName`, `Type`, `Price`, `Quantity`) VALUES
(1, '../Pages/images/demo/tool5.jpg', 'Formadlehydrade Decter', 'LABSOLUTIONS', 1340, 8),
(2, '../Pages/images/demo/tool.jpg', 'EG', 'Temtop Monitor', 122, 10),
(3, '../Pages/images/demo/tool2.jpg', 'Measuring Tool Kit', 'IQAir', 780, 20),
(5, '../Pages/images/demo/tool6.jpg', 'BTPM-HS10 Multi-Filter Membrane PM2.5 and PM10 Standard Sampler', 'SMILEDRIVE', 2500, 6);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(60) NOT NULL,
  `Address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Email`, `Password`, `DOB`, `Phone`, `Address`) VALUES
(1, 'Tun Tun', 'tuntun@gmail.com', '12345678', '2003-06-23', '0123456789', 'wesdgrwhi'),
(2, 'Moe Moe', 'moemoe@gmail.com', '01234567', '1996-06-09', '09739038424', 'Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PostCode` varchar(15) NOT NULL,
  `FreeKit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FullName`, `Email`, `Password`, `DOB`, `Address`, `PostCode`, `FreeKit`) VALUES
(1, 'Mg Mg', 'maungmaung@gmail.com', 'daa4bf1b4d0978fa034ada89161a23c4', '1997-03-10', 'Yangon', '002', 'Not Claim'),
(2, 'Kyaw Kyaw', 'kk2000@gmail.com', 'be4d776706910b61f231b141c4ae8272', '2000-06-12', 'Yangon', '002', 'Not Claim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_ID`);

--
-- Indexes for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  ADD PRIMARY KEY (`ContactUsID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistoryID`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  MODIFY `ContactUsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1241;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
