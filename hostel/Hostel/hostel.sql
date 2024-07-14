-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 08:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--
CREATE DATABASE IF NOT EXISTS `hostel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `hostel1`
--

DROP TABLE IF EXISTS `hostel1`;
CREATE TABLE IF NOT EXISTS `hostel1` (
  `hostelid` varchar(50) NOT NULL,
  `hostelname` varchar(50) NOT NULL,
  PRIMARY KEY (`hostelid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `hostel1`:
--

--
-- Dumping data for table `hostel1`
--

INSERT INTO `hostel1` (`hostelid`, `hostelname`) VALUES('1b', 'boys hostel');
INSERT INTO `hostel1` (`hostelid`, `hostelname`) VALUES('1g', 'girls hostel');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `login`:
--

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `roomid` varchar(50) NOT NULL,
  `roomtype` varchar(100) NOT NULL,
  `no.of.beds` varchar(100) NOT NULL DEFAULT '2',
  `hostelid` varchar(50) NOT NULL,
  `nos` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`roomid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `room`:
--   `hostelid`
--       `hostel1` -> `hostelid`
--

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('101b', 'cw', '2', '1b', 1);
INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('101g', 'cw', '2', '1g', 1);
INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('102b', 'cw', '2', '1b', 0);
INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('103b', 'cw', '2', '1b', 0);
INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('105b', 'cw', '2', '1b', 0);
INSERT INTO `room` (`roomid`, `roomtype`, `no.of.beds`, `hostelid`, `nos`) VALUES('106b', 'cw', '2', '1b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `ssn` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `salary` int(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `workfor` varchar(50) NOT NULL,
  PRIMARY KEY (`ssn`),
  KEY `workfor` (`workfor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `staff`:
--   `workfor`
--       `hostel1` -> `hostelid`
--

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ssn`, `fname`, `lname`, `salary`, `phone`, `dob`, `address`, `workfor`) VALUES('1001', 'sai', 'd', 8000, 2147483647, '1998-06-18', 'banglore', '1B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `yearofstudy` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `artroom` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`usn`),
  KEY `roomid` (`artroom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `student`:
--   `artroom`
--       `room` -> `roomid`
--

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `fname`, `lname`, `department`, `yearofstudy`, `gender`, `phone`, `dob`, `address`, `artroom`, `email`) VALUES('1JB19CS001', 'chethan', 'yl', 'CSE', 2020, 'MALE', 2147483647, '2001-12-25', 'banglore', '101b', 'bhanug.naidu@gmail.com');
INSERT INTO `student` (`usn`, `fname`, `lname`, `department`, `yearofstudy`, `gender`, `phone`, `dob`, `address`, `artroom`, `email`) VALUES('1JB19CS052', 'deepika', 'd', 'CSE', 2, 'FEMALE', 2147483647, '2001-02-18', 'banglore', '101g', 'satyag.naidu@gmail.com');

--
-- Triggers `student`
--
DROP TRIGGER IF EXISTS `studentrem`;
DELIMITER $$
CREATE TRIGGER `studentrem` BEFORE DELETE ON `student` FOR EACH ROW UPDATE room set nos=nos-1 WHERE room.roomid=old.artroom
$$
DELIMITER ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `hostelid` FOREIGN KEY (`hostelid`) REFERENCES `hostel1` (`hostelid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `workfor` FOREIGN KEY (`workfor`) REFERENCES `hostel1` (`hostelid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `roomid` FOREIGN KEY (`artroom`) REFERENCES `room` (`roomid`) ON DELETE SET NULL ON UPDATE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table hostel1
--

--
-- Metadata for table login
--

--
-- Metadata for table room
--

--
-- Metadata for table staff
--

--
-- Metadata for table student
--

--
-- Metadata for database hostel
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
