-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 07:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data123`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL,
  `authentication_key` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `level`, `authentication_key`) VALUES
(3, 'Admininstrator', 'admin@admin.com', 'admin', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('nujra', 'syncmaster');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `semid` int(3) NOT NULL,
  `dates` varchar(30) NOT NULL,
  `ass_no` int(5) NOT NULL,
  `subid` int(30) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `time` varchar(20) NOT NULL DEFAULT '09:10am'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`semid`, `dates`, `ass_no`, `subid`, `topic`, `descr`, `time`) VALUES
(5, '43645-04-05', 2, 505, 'gfdgfdfgd', 'fgdfgddfgssd', '09:10am'),
(1, '2018-04-29', 1, 105, 'Vowels and consonants', 'write 100 pages', '09:10am'),
(1, '2018-05-18', 2, 104, 'Summary', 'Write summary of chapter 5', '09:10am'),
(1, '2018-05-17', 1, 106, 'Variables', 'Mention all variable types', '09:10am'),
(1, '2018-05-21', 1, 104, 'dgh', 'dfh', '09:10am'),
(1, '2018-05-21', 1, 104, 'dgh', 'dfh', '09:10am');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `subid` int(11) NOT NULL,
  `hr` varchar(11) NOT NULL,
  `dateofa` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `tid`, `subid`, `hr`, `dateofa`, `status`) VALUES
(101, 601, 101, 'hr_1', '2018-03-31', 'Ab'),
(102, 601, 101, 'hr_1', '2018-03-31', 'Ab'),
(101, 601, 101, 'hr_2', '2018-04-03', 'Ab'),
(102, 601, 101, 'hr_2', '2018-04-03', 'Ab'),
(104, 601, 101, 'hr_2', '2018-04-03', 'Ab'),
(105, 601, 101, 'hr_2', '2018-04-03', 'Pr'),
(106, 601, 101, 'hr_2', '2018-04-03', 'Pr'),
(101, 601, 101, 'hr_4', '2018-04-03', 'Ab'),
(102, 601, 101, 'hr_4', '2018-04-03', 'Ab'),
(104, 601, 101, 'hr_4', '2018-04-03', 'Ab'),
(105, 601, 101, 'hr_4', '2018-04-03', 'Pr'),
(106, 601, 101, 'hr_4', '2018-04-03', 'Pr'),
(101, 601, 104, 'hr_5', '2018-04-04', 'Ab'),
(102, 601, 104, 'hr_5', '2018-04-04', 'Ab'),
(104, 601, 104, 'hr_5', '2018-04-04', 'Ab'),
(105, 601, 104, 'hr_5', '2018-04-04', 'Pr'),
(106, 601, 104, 'hr_5', '2018-04-04', 'Pr'),
(103, 600, 207, 'hr_4', '2018-04-04', ''),
(107, 600, 207, 'hr_4', '2018-04-04', ''),
(108, 600, 207, 'hr_4', '2018-04-04', ''),
(109, 600, 207, 'hr_4', '2018-04-04', ''),
(110, 600, 207, 'hr_4', '2018-04-04', ''),
(101, 601, 104, 'hr_4', '2018-04-04', 'Ab'),
(102, 601, 104, 'hr_4', '2018-04-04', 'Ab'),
(104, 601, 104, 'hr_4', '2018-04-04', 'Ab'),
(105, 601, 104, 'hr_4', '2018-04-04', 'Pr'),
(106, 601, 104, 'hr_4', '2018-04-04', 'Pr'),
(101, 601, 104, 'hr_1', '2018-04-06', 'Pr'),
(102, 601, 104, 'hr_1', '2018-04-06', 'Ab'),
(104, 601, 104, 'hr_1', '2018-04-06', 'Pr'),
(105, 601, 104, 'hr_1', '2018-04-06', 'Pr'),
(106, 601, 104, 'hr_1', '2018-04-06', 'Pr'),
(101, 601, 106, 'hr_3', '2018-04-06', 'Ab'),
(102, 601, 106, 'hr_3', '2018-04-06', 'Ab'),
(104, 601, 106, 'hr_3', '2018-04-06', 'Ab'),
(105, 601, 106, 'hr_3', '2018-04-06', 'Pr'),
(106, 601, 106, 'hr_3', '2018-04-06', 'Pr'),
(101, 601, 106, 'hr_2', '2018-04-06', 'Pr'),
(102, 601, 106, 'hr_2', '2018-04-06', 'Pr'),
(104, 601, 106, 'hr_2', '2018-04-06', 'Pr'),
(105, 601, 106, 'hr_2', '2018-04-06', 'Pr'),
(106, 601, 106, 'hr_2', '2018-04-06', 'Pr'),
(101, 606, 103, 'hr_1', '2018-04-10', 'Pr'),
(102, 606, 103, 'hr_1', '2018-04-10', 'Pr'),
(104, 606, 103, 'hr_1', '2018-04-10', 'Pr'),
(105, 606, 103, 'hr_1', '2018-04-10', 'Pr'),
(106, 606, 103, 'hr_1', '2018-04-10', 'Pr'),
(101, 601, 103, 'hr_1', '2018-04-10', 'Ab'),
(102, 601, 103, 'hr_1', '2018-04-10', 'Ab'),
(104, 601, 103, 'hr_1', '2018-04-10', 'Ab'),
(105, 601, 103, 'hr_1', '2018-04-10', 'Pr'),
(106, 601, 103, 'hr_1', '2018-04-10', 'Pr'),
(101, 601, 104, '$s', '2018-04-13', 'Ab'),
(102, 601, 104, '$s', '2018-04-13', 'Ab'),
(104, 601, 104, '$s', '2018-04-13', 'Ab'),
(105, 601, 104, '$s', '2018-04-13', 'Pr'),
(106, 601, 104, '$s', '2018-04-13', 'Pr'),
(101, 603, 101, 'hr_1', '2018-04-30', 'Ab'),
(102, 603, 101, 'hr_1', '2018-04-30', 'Ab'),
(104, 603, 101, 'hr_1', '2018-04-30', 'Ab'),
(105, 603, 101, 'hr_1', '2018-04-30', 'Pr'),
(106, 603, 101, 'hr_1', '2018-04-30', 'Pr'),
(101, 601, 104, 'hr_2', '2018-05-05', 'Ab'),
(102, 601, 104, 'hr_2', '2018-05-05', 'Ab'),
(104, 601, 104, 'hr_2', '2018-05-05', 'Ab'),
(105, 601, 104, 'hr_2', '2018-05-05', 'Pr'),
(106, 601, 104, 'hr_2', '2018-05-05', 'Pr'),
(101, 601, 104, 'hr_3', '2018-05-05', ''),
(102, 601, 104, 'hr_3', '2018-05-05', ''),
(104, 601, 104, 'hr_3', '2018-05-05', ''),
(105, 601, 104, 'hr_3', '2018-05-05', ''),
(106, 601, 104, 'hr_3', '2018-05-05', ''),
(101, 601, 104, '', '2018-05-05', 'Pr'),
(102, 601, 104, '', '2018-05-05', 'Ab'),
(104, 601, 104, '', '2018-05-05', 'Pr'),
(105, 601, 104, '', '2018-05-05', 'Ab'),
(106, 601, 104, '', '2018-05-05', 'Pr'),
(111, 605, 303, 'hr_1', '2018-05-05', 'Pr'),
(112, 605, 303, 'hr_1', '2018-05-05', 'Ab'),
(113, 605, 303, 'hr_1', '2018-05-05', 'Ab'),
(114, 605, 303, 'hr_1', '2018-05-05', 'Pr'),
(115, 605, 303, 'hr_1', '2018-05-05', 'Ab'),
(101, 608, 105, 'hr_5', '2018-05-11', 'Pr'),
(102, 608, 105, 'hr_5', '2018-05-11', 'Pr'),
(104, 608, 105, 'hr_5', '2018-05-11', 'Pr'),
(105, 608, 105, 'hr_5', '2018-05-11', 'Pr'),
(106, 608, 105, 'hr_5', '2018-05-11', 'Pr'),
(101, 608, 105, 'hr_2', '2018-05-15', 'Pr'),
(102, 608, 105, 'hr_2', '2018-05-15', 'Pr'),
(104, 608, 105, 'hr_2', '2018-05-15', 'Pr'),
(105, 608, 105, 'hr_2', '2018-05-15', 'Pr'),
(106, 608, 105, 'hr_2', '2018-05-15', 'Pr'),
(101, 601, 106, 'hr_1', '2018-05-17', 'Pr'),
(102, 601, 106, 'hr_1', '2018-05-17', 'Pr'),
(104, 601, 106, 'hr_1', '2018-05-17', 'Pr'),
(105, 601, 106, 'hr_1', '2018-05-17', 'Pr'),
(106, 601, 106, 'hr_1', '2018-05-17', 'Ab');

-- --------------------------------------------------------

--
-- Table structure for table `day1`
--

CREATE TABLE `day1` (
  `id` varchar(6) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `rollno` varchar(10) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `dat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day1`
--

INSERT INTO `day1` (`id`, `username`, `rollno`, `status`, `dat`) VALUES
('1', 'Bruce', 'Imca-007', 'Present', '2018-03-15'),
('2', 'Anand', 'imca-57', 'Absent', '2018-03-15'),
('3', 'Noel', 'imca-49', 'Not Verified', '2018-03-15'),
('4', 'arjun', 'IMCA-19', 'Not Verified', '2018-03-15'),
('5', 'gopi', 'IMCA-29', 'Absent', '2018-03-15'),
('6', 'spikee', 'imca-42', 'Present', '2018-03-15'),
('1', 'Bruce', 'Imca-007', 'Present', '2018-03-21'),
('2', 'Anand', 'imca-57', 'Absent', '2018-03-21'),
('3', 'Noel', 'imca-49', 'Absent', '2018-03-21'),
('4', 'arjun', 'IMCA-19', 'Present', '2018-03-21'),
('5', 'gopi', 'IMCA-29', 'Not Verified', '2018-03-21'),
('6', 'spikee', 'imca-42', 'Not Verified', '2018-03-21'),
('1', 'Bruce', 'Imca-007', 'Absent', '2018-03-21'),
('2', 'Anand', 'imca-57', 'Absent', '2018-03-21'),
('3', 'Noel', 'imca-49', 'Absent', '2018-03-21'),
('4', 'arjun', 'IMCA-19', 'Absent', '2018-03-21'),
('5', 'gopi', 'IMCA-29', 'Absent', '2018-03-21'),
('6', 'spikee', 'imca-42', 'Absent', '2018-03-21'),
('1', 'Bruce', 'Imca-007', 'Not Verified', '2018-03-26'),
('2', 'Anand', 'imca-57', 'Not Verified', '2018-03-26'),
('3', 'Noel', 'imca-49', 'Present', '2018-03-26'),
('4', 'arjun', 'IMCA-19', 'Absent', '2018-03-26'),
('5', 'gopi', 'IMCA-29', 'Absent', '2018-03-26'),
('6', 'spikee', 'imca-42', 'Present', '2018-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `eactivity`
--

CREATE TABLE `eactivity` (
  `library` varchar(10) NOT NULL,
  `billing` varchar(10) NOT NULL,
  `mentor` varchar(10) NOT NULL,
  `office` varchar(10) NOT NULL,
  `office_admin` varchar(50) DEFAULT NULL,
  `HOD` varchar(50) DEFAULT NULL,
  `Director` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eactivity`
--

INSERT INTO `eactivity` (`library`, `billing`, `mentor`, `office`, `office_admin`, `HOD`, `Director`) VALUES
('b', 'a', 'a', 'q', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `facultylogin`
--

CREATE TABLE `facultylogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultylogin`
--

INSERT INTO `facultylogin` (`username`, `password`) VALUES
('teacher', 'teach');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_table`
--

CREATE TABLE `faculty_table` (
  `tid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_table`
--

INSERT INTO `faculty_table` (`tid`, `password`, `fname`, `lname`, `phone`, `email`) VALUES
(600, 'syncmaster1', 'biju', 'KV', '9562577276', 'kjdfs@gmail.com'),
(601, 'syncmaster5', 'Anupama ', 'Usha', '976453210', 'dfjkdfnjfd@gmail.com'),
(602, 'syncmaster4', 'Ray ', 'Mol', '765432108', 'ajsjs@gmail.com'),
(603, 'syncmaster3', 'Sherin', 'Mariam Alex', '876594231', 'asqjd@gmail.com'),
(604, 'syncmaster2', 'Shobhy', 'Sunny', '765483219', 'hjyt@gmail.com'),
(605, 'syncmaster_5', 'Ronnie', 'Mariadas', '8745214587', 'mariadas@gmail.com'),
(606, 'syncmaster_6', 'Anjana', 'Sunil', '9685475896', 'Anjana@gmail.com'),
(607, 'syncmaster_7', 'Jismy ', 'Joseph', '9856458754', 'jismy@scmsgroup.org'),
(608, 'syncmaster_8', 'Bindu', 'John', '9865412563', 'Bindu@scmsgroup.org'),
(609, 'syncmaster_9', 'Praveen', 'Kammath', '9856321457', 'praven@scmsgroup.org'),
(610, 'syncamster_10', 'Anitha ', 'S', '985632475', 'anitha@scmsgroup.org'),
(611, 'syncmaster_11', 'Sudha', 'S', '9874587896', 'suda@scmsgroup.org'),
(612, 'syncmaster_12', 'Lakshmi', 'Mahesh', '9856231452', 'Lak@scmsgroup.org'),
(613, 'syncmaster_13', 'Sindu', 'CK', '9875897584', 'sinud@gmail.com'),
(614, 'syncmaster_14', 'injduja', 'Nair', '8975874569', 'induja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hour_table`
--

CREATE TABLE `hour_table` (
  `semid` int(11) NOT NULL,
  `subid` int(2) NOT NULL,
  `day` varchar(10) NOT NULL,
  `hr_1` int(2) NOT NULL,
  `hr_2` int(2) NOT NULL,
  `hr_3` int(2) NOT NULL,
  `hr_4` int(2) NOT NULL,
  `hr_5` int(2) NOT NULL,
  `hr_6` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hour_table`
--

INSERT INTO `hour_table` (`semid`, `subid`, `day`, `hr_1`, `hr_2`, `hr_3`, `hr_4`, `hr_5`, `hr_6`) VALUES
(1, 103, 'Wednesday', 0, 0, 1, 0, 0, 0),
(1, 104, 'Wednesday', 0, 0, 0, 1, 1, 0),
(1, 105, 'Wednesday', 0, 0, 0, 0, 0, 1),
(2, 201, 'Wednesday', 1, 0, 0, 0, 0, 0),
(2, 207, 'Wednesday', 0, 0, 1, 1, 0, 0),
(1, 104, 'Friday', 1, 0, 0, 0, 0, 0),
(1, 106, 'Friday', 0, 1, 1, 0, 0, 0),
(1, 101, 'Monday', 1, 1, 0, 0, 0, 0),
(1, 102, 'Monday', 0, 0, 1, 0, 0, 0),
(1, 103, 'Tuesday', 1, 0, 0, 0, 0, 0),
(3, 105, 'Thursday', 0, 0, 0, 0, 1, 0),
(3, 105, 'Wednesday', 0, 0, 0, 1, 0, 0),
(1, 104, 'Saturday', 0, 1, 1, 0, 0, 0),
(3, 303, 'Saturday', 1, 0, 0, 0, 0, 0),
(1, 105, 'Monday', 0, 0, 0, 1, 1, 0),
(1, 105, 'Friday', 0, 0, 0, 0, 1, 0),
(1, 105, 'Tuesday', 0, 1, 0, 0, 0, 0),
(1, 104, 'Monday', 1, 1, 0, 0, 0, 0),
(1, 103, 'Monday', 0, 0, 0, 0, 1, 0),
(1, 107, 'Monday', 0, 0, 0, 0, 0, 1),
(1, 106, 'Tuesday', 0, 0, 1, 1, 0, 0),
(1, 101, 'Tuesday', 0, 0, 0, 0, 1, 0),
(1, 102, 'Tuesday', 0, 0, 0, 0, 0, 1),
(1, 107, 'Wednesday', 1, 1, 0, 0, 0, 0),
(1, 106, 'Thursday', 1, 1, 0, 0, 0, 0),
(1, 101, 'Thursday', 0, 0, 1, 1, 0, 0),
(1, 105, 'Thursday', 0, 0, 1, 0, 0, 0),
(1, 103, 'Thursday', 0, 0, 0, 0, 1, 0),
(1, 102, 'Thursday', 0, 0, 0, 0, 0, 1),
(1, 101, 'Friday', 0, 0, 0, 1, 0, 0),
(1, 102, 'Friday', 0, 0, 0, 0, 0, 1),
(1, 107, 'Saturday', 0, 0, 0, 0, 1, 1),
(1, 102, 'Saturday', 1, 0, 0, 0, 0, 0),
(1, 105, 'Saturday', 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `rollno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`username`, `password`, `rollno`) VALUES
('Bruce', 'Allen', 'Imca-007'),
('Anand', 'Nandu', 'imca-57'),
('Noel', 'Joby', 'imca-49'),
('arjun', '123', 'IMCA-19'),
('gopi', 'oscar', 'IMCA-29'),
('spikee', 'oscar', 'imca-42');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `sid` int(10) NOT NULL,
  `subid` int(10) NOT NULL,
  `test1` varchar(10) DEFAULT NULL,
  `test2` varchar(10) DEFAULT NULL,
  `assign1` varchar(10) DEFAULT NULL,
  `assign2` varchar(10) DEFAULT NULL,
  `model` varchar(10) DEFAULT NULL,
  `attend` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`sid`, `subid`, `test1`, `test2`, `assign1`, `assign2`, `model`, `attend`) VALUES
(101, 104, '25', '25', '9', '9', '65', '71'),
(102, 104, '25', '26', '8', '8', '63', '71'),
(104, 104, '24', '24', '8', '9', '68', '71'),
(105, 104, '21', '26', '9', '9', '63', '71'),
(106, 104, '29', '28', '7', '7', '61', '71'),
(101, 105, '21', '21', '9', '9', '71', '71'),
(102, 105, '21', '21', '9', '7', '72', '71'),
(104, 105, '20', '20', '7', '6', '70', '71'),
(105, 105, '19', '19', '8', '8', '65', '71'),
(106, 105, '18', '18', '9', '9', '60', '71'),
(101, 103, '23', '23', '8', '8', '70', '73'),
(102, 103, '23', '23', '7', '8', '75', '73'),
(104, 103, '12', '20', '8', '8', '70', '73'),
(105, 103, '19', '19', '9', '9', '75', '73'),
(106, 103, '25', '25', '7', '7', '70', '73'),
(101, 106, '21', '21', '8', '9', '66', '65'),
(102, 106, '21', '21', '8', '9', '66', '65'),
(104, 106, '23', '23', '8', '7', '62', '65'),
(105, 106, '24', '24', '7', '7', '66', '65'),
(106, 106, '21', '22', '9', '9', '68', '65'),
(120, 505, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(121, 505, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(101, 101, '24', '24', '9', '9', '69', '66'),
(102, 101, '23', '23', '8', '8', '66', '66'),
(104, 101, '21', '21', '8', '8', '61', '66'),
(105, 101, '22', '22', '9', '9', '70', '66'),
(106, 101, '23', '30', '8', '8', '60', '66'),
(101, 102, '25', '25', '9', '9', '65', '70'),
(102, 102, '24', '24', '8', '7', '60', '70'),
(104, 102, '23', '23', '7', '8', '59', '70'),
(105, 102, '23', '16', '8', '9', '65', '70'),
(106, 102, '15', '15', '9', '9', '60', '70'),
(101, 107, '29', '29', '9', '9', '75', '69'),
(102, 107, '28', '28', '8', '8', '72', '69'),
(104, 107, '24', '24', '8', '8', '75', '69'),
(105, 107, '21', '21', '7', '7', '72', '69'),
(106, 107, '16', '16', '12', '8', '70', '69');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `sid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `semid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`sid`, `password`, `fname`, `lname`, `gender`, `address`, `phone`, `email`, `semid`) VALUES
(101, '101', 'Arjun', 'S', 'M', 'hbkhbkhb hbhjbjhb', '8086697587', 'spikee@gmail.com', 1),
(102, '102', 'Bruce', 'Allen', 'M', 'Beverly Hills, California', '0151345678', 'bruceallen@gmail.com', 1),
(103, '103', 'Anand', 'Shanmughan', 'M', 'erwidfsjkdfs  pdlkdskldfs', '984532108', 'ghty@gmail.com', 2),
(104, '104', 'Rahul', 'Shaji', 'M', 'jnjknj jnknmklmkl', '6516545165', 'rahul@gmail.com', 1),
(105, '105', 'Noel', 'Joby', 'M', 'jnlkdmn jnjnljn', '4785691230', 'noel@gmail.com', 1),
(106, '106', 'sree', 'lakshmi', 'F', 'jmklsmlk jsnkjn', '7854124587', 'sree@gmail.com', 1),
(107, '107', 'gokul', 'jay', 'M', 'dnfihnwd hbgfihewnjignje', '9874587569', 'gokul@gmail.com', 2),
(108, '108', 'anfas', 'kabir', 'M', 'fjngjsdn gejfgnwjkfn', '1515665184', 'anfas@gmail.com', 2),
(109, '109', 'Parvathy', 'prAKASH', 'F', 'jfon;gnj;er ufnqjnfjunwlifu', '5412563254', 'parvathy@gmail.com', 2),
(110, '110', 'rasha', 'suha', 'F', 'odfimbowkmf ewfvnin', '874569857', 'rasha@gmail.com', 2),
(111, '111', 'nandu', 'rock', 'M', 'hdsnlvan khsvbhas', '7845652145', 'nandu@gmail.com', 3),
(112, '112', 'Babitha', 'soniya', 'F', 'jfn;gjlnfd nfgjndf', '4578548587', 'babitha@gmail.com', 3),
(113, '113', 'akshay', 'babu', 'M', 'dhbvkhcsbd hbsavuhb', '78894222', 'dfayih@gmail.com', 3),
(114, '114', 'Jude', 'sjfk', 'M', 'sadfngwn jqgnjlrnl', '7854215648', 'jude@gmail.com', 3),
(115, '115', 'Aparna', 'ina', 'F', 'jdnfjand flangsljn', '7856321458', 'aparna@gmail.com', 3),
(116, '116', 'Ajay', 'bhu', 'M', 'uadnfasd abshfdbhasdb', '874521458', 'Ajay@gmail.com', 4),
(117, '117', 'Ann', 'Mary', 'F', 'jndfjnsdblkf fdshi', '785214587', 'aann@gmail.com', 4),
(120, '120', 'Jose', 'Mandapathil', 'M', 'Vennalavedu PO thripunithura', '7854785698', 'jose@gmail.com', 5),
(121, '121', 'Kevin', 'Owens', 'M', 'Vaniyam WrestlingPO', '7845213658', 'kevino@gmail.com', 5);

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE `subject_table` (
  `semid` int(2) NOT NULL,
  `subid` int(11) NOT NULL,
  `subject_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`semid`, `subid`, `subject_name`) VALUES
(1, 101, 'MFCS'),
(1, 102, 'Statistics 2'),
(1, 103, 'Hardware'),
(1, 104, 'C'),
(1, 105, 'English'),
(1, 106, 'Clab'),
(1, 107, 'Hardware_lab'),
(2, 201, 'Data Structure'),
(2, 202, 'Digital '),
(2, 203, 'C++'),
(2, 204, 'English2'),
(2, 205, 'Statistics'),
(2, 206, 'DS_lab'),
(2, 207, 'C++_lab'),
(3, 301, 'Accountancy'),
(3, 302, 'COA'),
(3, 303, 'VB.NET'),
(3, 304, 'DBMS'),
(3, 305, 'OS'),
(3, 306, 'VB_Lab'),
(3, 307, 'DBMS_Lab'),
(4, 401, 'Multimedia'),
(4, 402, 'Micropossesor'),
(4, 403, 'Data_communication'),
(4, 404, 'Java'),
(4, 405, 'MIS'),
(4, 406, 'Java_Lab'),
(4, 407, 'Micro_Lab'),
(5, 501, 'Operation_Research'),
(5, 502, 'PHP'),
(5, 503, 'Linux'),
(5, 504, 'Software engineering'),
(5, 505, 'Computer Networks'),
(5, 506, 'PHP_Lab'),
(5, 507, 'Linux_Lab');

-- --------------------------------------------------------

--
-- Table structure for table `teach_sub`
--

CREATE TABLE `teach_sub` (
  `tid` int(4) NOT NULL,
  `subid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_sub`
--

INSERT INTO `teach_sub` (`tid`, `subid`) VALUES
(600, 203),
(601, 104),
(601, 505),
(601, 106),
(602, 503),
(602, 507),
(603, 101),
(604, 305),
(604, 404),
(604, 406),
(605, 303),
(605, 306),
(605, 502),
(605, 506),
(606, 103),
(606, 107),
(607, 202),
(608, 105),
(608, 204),
(609, 304),
(609, 306),
(609, 403),
(611, 102),
(611, 205),
(611, 501),
(612, 201),
(612, 206),
(612, 301),
(612, 405),
(612, 504),
(600, 207);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `faculty_table`
--
ALTER TABLE `faculty_table`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subject_table`
--
ALTER TABLE `subject_table`
  ADD PRIMARY KEY (`subid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `faculty_table`
--
ALTER TABLE `faculty_table`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=615;
--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
