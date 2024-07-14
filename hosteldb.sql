-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 04:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosteldb`
--
CREATE DATABASE IF NOT EXISTS `hosteldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hosteldb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(20) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `userid`, `password`, `phno`, `email`) VALUES
('Admin', 'admin', '123456', 7345268976, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `app_no` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `mname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `Hostel` varchar(40) NOT NULL,
  `hostelcode` varchar(3) NOT NULL,
  `satus` varchar(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`app_no`),
  KEY `userid` (`userid`),
  KEY `hostel code` (`hostelcode`)
) ENGINE=InnoDB AUTO_INCREMENT=101053 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_no`, `fname`, `mname`, `lname`, `dob`, `address`, `Hostel`, `hostelcode`, `satus`, `userid`, `datetime`) VALUES
(101044, 'Prajwal', '', 'M', '2001-09-19', 'kengeri bangalore', 'BGS GIMS BOYS HOSTEL', '3BG', 'Approved', 'prajwal', '2022-01-19 04:17:39'),
(101045, 'Prajwal', '', 'M', '2001-09-19', 'vijayanagar Bangalore ', 'Jagajothi Basaveshwara Boys Hostel', 'JBH', 'Approved', 'prajwal', '2022-01-19 04:21:55'),
(101046, 'Prajwal', '', 'M', '2001-09-19', 'KENGERI,BANGLORE', 'Sjbit Hostel (boys)', 'JH1', 'Approved', 'prajwal', '2022-01-19 04:25:14'),
(101047, 'Ganga', '', '', '2002-03-21', 'kengeri,bangalore', 'bgs gims girls hostel', '1BG', 'NA', 'ganga', '2022-01-19 05:08:41'),
(101048, 'ganga', '', '', '2002-03-21', 'kengeri,bangalore', 'sjbit hostel(girls)', '2JH', 'NA', 'ganga', '2022-01-19 05:11:36'),
(101049, 'ganga', '', '', '2002-03-21', 'channasandra,bangalore', 'Jss girls hostel', '3JH', 'NA', 'ganga', '2022-01-19 05:14:26'),
(101050, 'varshith', '', '', '2001-02-03', 'chintamani,chikkaballapur', 'BGS GIMS BOYS HOSTEL', '3BG', 'Rejected', 'varshith', '2022-01-19 05:19:24'),
(101051, 'varshith', '', '', '2001-02-03', 'chintamani,chikkaballapur', 'Jagajothi Basaveshwara Boys Hostel', 'JBH', 'NA', 'varshith', '2022-01-19 05:22:29'),
(101052, 'varshith', '', '', '2001-02-03', 'chintamani,chikkaballapur', 'Sjbit Hostel (boys)', 'JH1', 'Approved', 'varshith', '2022-01-19 05:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `gaurdian_details`
--

CREATE TABLE IF NOT EXISTS `gaurdian_details` (
  `app_no` int(11) NOT NULL,
  `father` varchar(20) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `gaurdian` varchar(20) NOT NULL,
  `f_phno` bigint(10) NOT NULL,
  `alt_phno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`app_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaurdian_details`
--

INSERT INTO `gaurdian_details` (`app_no`, `father`, `mother`, `gaurdian`, `f_phno`, `alt_phno`, `email`, `address`) VALUES
(101044, 'Manjunath N', 'Komala', '', 8495887148, 0, 'prajwal@gmail.com', 'Appegowdanahalli,shidlaghatta tq,chikkaballapura dist'),
(101045, 'Manjunath N', 'Komala', '', 8495887148, 0, 'prajwal@gmail.com', 'Appegowdanahalli shidlaghatta tq chikkaballapur dist'),
(101046, 'Manjunath N', 'Komala', '', 8495887148, 0, 'prajwal@gmail.com', 'KENGERI,BANGLORE'),
(101047, 'nataraj', 'savitha', '', 9632107548, 0, 'nataraj@gmail.com', 'indranagar ,bangalore'),
(101048, 'nataraj', 'savitha', '', 9657803215, 0, 'natara', 'indranagar,bangalore'),
(101049, 'nataraj', 'savitha', '', 9851345290, 0, 'nataraj@gmail.com', 'indranagar,bangalore'),
(101050, 'satish', 'kavya', '', 8976543201, 0, 'satish@gmail.com', 'chintamani,chikkaballapur'),
(101051, 'satish', 'kavya', '', 8976543210, 0, 'satish@gmail.com', 'chintamani,chikkaballapur'),
(101052, 'satish', 'kavya', '', 8976543210, 0, 'satish@gmail.com', 'chintamani,chikkaballapur');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `name` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `location` text NOT NULL,
  `capacity` int(5) NOT NULL,
  `vacancy` int(5) NOT NULL,
  `warden` varchar(20) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`name`, `code`, `location`, `capacity`, `vacancy`, `warden`, `phno`, `email`, `type`, `image`) VALUES
('BGS GIMS girls hostel', '1BG', ' Dr.Vishnuvardhan Rd, Kengeri, Bengaluru, Karnataka 560060', 350, 124, 'Sowmya', 8026984802, 'bgsgimshstl@gmail.com', 'The hostel is located near the hospital and college.The hostelites can make use of this according to their duty hours ', './hostelimg/bgsmedgirlshstl.jpg'),
('Sjbit hostel (girls)', '2JH', 'Sjbit girls hostel,No.67, BGS Health & Education City, Dr.Vishnuvardhan Rd, Kengeri, Bengaluru, Karnataka 560060', 170, 87, 'Spandana', 7896786540, 'sjbitgirlshstl@gmail.com', '2/3 sharings per room ', './hostelimg/sjbitgirls.jpg'),
('BGS GIMS BOYS HOSTEL', '3BG', '67, BGS Health & Education City, Uttarahalli Road Kengeri. Bangalore - 560060 Karnataka, India', 234, 67, 'Rajsheker', 8026984802, 'bgsgimsboyshstl@gmail.com', 'All the students of BGS GIMS college can use this hostel. \r\nFees :90K', './hostelimg/bgsboys.jpg'),
('Jss girls hostel', '3JH', 'JSSATE-B Campus, Dr.Vishnuvardhan Rd Uttarahalli-Kengeri Main Road, JSS Campus Rd, Srinivaspura, Bengaluru, Karnataka 560060', 260, 154, 'Rekha', 9876543210, 'jssgirlshstl@gmail.com', 'A decent hostel with good facilities', './hostelimg/jssgirlshstl.jpg'),
('Jagajothi Basaveshwara Boys Hostel', 'JBH', ' 54, Service Rd, Govindaraja Nagar Ward, Stage 1, Vijayanagar, Bengaluru, Karnataka 560040', 300, 134, 'Raju', 9856345221, 'jaghstl@gmail.com', 'With all the good facilities , hostelites can feel the environment almost like their home.', './hostelimg/jagbas.jpg'),
('Sjbit Hostel (boys)', 'JH1', 'Sjbit Boys Hostel, \r\nNo.67, BGS Health & Education City,\r\nDr.Vishnuvardhan Rd,\r\nKengeri,\r\nBengaluru,\r\nKarnataka 560060', 200, 123, 'Santosh', 9876678907, 'sjbitboyshstl@gmail.com', 'SJBIT boys hostel\r\n2/3 sharings per room', './hostelimg/sjbit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supervisior`
--

CREATE TABLE IF NOT EXISTS `supervisior` (
  `name` varchar(20) NOT NULL,
  `worksin` varchar(30) NOT NULL,
  `hostelcode` varchar(5) NOT NULL,
  `position` varchar(15) NOT NULL,
  `salary` float NOT NULL,
  `address` varchar(80) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `code` (`hostelcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisior`
--

INSERT INTO `supervisior` (`name`, `worksin`, `hostelcode`, `position`, `salary`, `address`, `phno`, `email`, `userid`, `password`) VALUES
('demo', 'sjbit hostel(girls)', '2JH', 'demo', 100, 'qert', 0, '', 'abc', 'abc'),
('Rajsheker', 'bgs gims boys hostel', '3BG', 'wardeen', 12000, 'kengeri bangalore', 8967435970, 'rajsheker@gmail.com', 'rajsheker', '123456'),
('Raju', 'jagajothi basaveshwara boys ho', 'JBH', 'warden', 18000, 'vijaynagar ,bangalore', 9242765634, 'raju@gmail.com', 'raju', '123456'),
('Rekha', 'Jss girls hostel', '3JH', 'warden', 14000, 'channasandra ,bangalore', 9591742850, 'rekha@gmail.com', 'rekha', '123456'),
('Santosh', 'sjbit boys hostel', 'JH1', 'warden', 15000, 'kengeri,bangalore', 8597360869, 'santosh@gmail.com', 'santosh', '123456'),
('Sowmya', 'bgs gims girls hostel', '1BG', 'warden', 15000, 'kengeri,bangalore', 8749064360, 'sowmya@gmail.com', 'sowmya', '123456'),
('spandana', 'sjbit hostel(girls)', '2JH', 'warden', 18000, 'kengeri ,bangalore', 8754589680, 'spandana@gmail.com', 'spandana', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phno`, `email`, `userid`, `password`, `gender`) VALUES
('abc', 2345, 'abc@gmail.com', 'abc', 'abc', 'male'),
('ganga', 7689462740, 'ganga@gmail.com', 'ganga', 'ganga', 'female'),
('Prajwal', 98426786786, 'prajwal@gmail.com', 'prajwal', 'prajwal', 'male'),
('varshith', 9876543210, 'varshith@gmail.com', 'varshith', 'varshith', 'male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `hostel code` FOREIGN KEY (`hostelcode`) REFERENCES `hostel` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `gaurdian_details`
--
ALTER TABLE `gaurdian_details`
  ADD CONSTRAINT `appln` FOREIGN KEY (`app_no`) REFERENCES `application` (`app_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supervisior`
--
ALTER TABLE `supervisior`
  ADD CONSTRAINT `code` FOREIGN KEY (`hostelcode`) REFERENCES `hostel` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
