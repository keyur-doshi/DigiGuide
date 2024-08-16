-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 09:49 AM
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
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `course_code` varchar(10) NOT NULL,
  `due_date` date NOT NULL,
  `assignment_name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `gform` text NOT NULL,
  `prof` varchar(10) NOT NULL,
  `stream` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`course_code`, `due_date`, `assignment_name`, `description`, `gform`, `prof`, `stream`) VALUES
('cs01', '2023-11-29', 'dbms', 'dfcghdg', 'httoe', 'PK', 'cse'),
('cs05', '2023-11-30', 'dhcfgghd', 'nbcjdbc', 'cvdcd', 'PK', 'cse'),
('ec01', '2023-11-15', 'test', 'sdds', 'wdwd', 'SKJ', 'ece'),
('ec01', '2023-11-19', 'twts', 'scnbsc', 'ncbndbc', 'SKJ', 'ece'),
('ec01', '2023-11-28', 'cbsb', 'cjbjs', 'nbxnbxnj', 'SKJ', 'ece'),
('ec01', '2023-11-29', 'Test', 'test', 'keybfjd', 'SKJ', 'ece'),
('ec04', '2023-12-10', 'test2', 'fbef  vf', 'Ketegfd f', 'SKJ', 'ece');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cname` varchar(50) NOT NULL,
  `prof` varchar(10) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cname`, `prof`, `venue`, `time`, `day`, `stream`, `code`) VALUES
('Data Science', 'KKB', 'L104', '2:00PM-3:00PM', 'Friday', 'cse', 'cs03'),
('Data Science', 'KKB', 'L104', '2:00PM-3:00PM', 'Thursday', 'cse', 'cs03'),
('Data Science', 'KKB', 'L104', '2:00PM-3:00PM', 'Wednesday', 'cse', 'cs03'),
('Robotics', 'NKJ', 'L105', '11:00AM-12:00PM', 'Thursday', 'ece', 'es03'),
('Robotics', 'NKJ', 'L105', '11:00AM-12:00PM', 'Tuesday', 'ece', 'es03'),
('Robotics', 'NKJ', 'L105', '11:00AM-12:00PM', 'Wednesday', 'ece', 'es03'),
('COA', 'NKJ', 'L105', '9:00AM-10:00AM', 'Friday', 'ece', 'ec01'),
('COA', 'NKJ', 'L105', '9:00AM-10:00AM', 'Monday', 'ece', 'ec01'),
('COA', 'NKJ', 'L105', '9:00AM-10:00AM', 'Wednesday', 'ece', 'ec01'),
('AI', 'PK', 'L104', '3:00PM-4:00PM', 'Friday', 'cse', 'cs05'),
('AI', 'PK', 'L104', '3:00PM-4:00PM', 'Thursday', 'cse', 'cs05'),
('AI', 'PK', 'L104', '3:00PM-4:00PM', 'Tuesday', 'cse', 'cs05'),
('DBMS', 'PK', 'L104', '9:00AM-10:00AM', 'Friday', 'cse', 'cs01'),
('DBMS', 'PK', 'L104', '9:00AM-10:00AM', 'Monday', 'cse', 'cs01'),
('DBMS', 'PK', 'L104', '9:00AM-10:00AM', 'Wednesday', 'cse', 'cs01'),
('Basic Electronics', 'SKJ', 'L105', '10:00AM-11:00AM', 'Monday', 'ece', 'ec02'),
('Basic Electronics', 'SKJ', 'L105', '10:00AM-11:00AM', 'Tuesday', 'ece', 'ec02'),
('Basic Electronics', 'SKJ', 'L105', '10:00AM-11:00AM', 'Wednesday', 'ece', 'ec02'),
('Circuits', 'SKJ', 'L105', '2:00PM-3:00PM', 'Friday', 'ece', 'ece04'),
('Circuits', 'SKJ', 'L105', '2:00PM-3:00PM', 'Thursday', 'ece', 'ece04'),
('Circuits', 'SKJ', 'L105', '2:00PM-3:00PM', 'Wednesday', 'ece', 'ece04'),
('Semiconductors', 'SKJ', 'L105', '3:00PM-4:00PM', 'Friday', 'ece', 'ec05'),
('Semiconductors', 'SKJ', 'L105', '3:00PM-4:00PM', 'Thursday', 'ece', 'ec05'),
('Semiconductors', 'SKJ', 'L105', '3:00PM-4:00PM', 'Tuesday', 'ece', 'ec05'),
('IT', 'SKM', 'L104', '10:00AM-11:00AM', 'Monday', 'cse', 'cs02'),
('IT', 'SKM', 'L104', '10:00AM-11:00AM', 'Tuesday', 'cse', 'cs02'),
('IT', 'SKM', 'L104', '10:00AM-11:00AM', 'Wednesday', 'cse', 'cs02'),
('Data Structures', 'SKM', 'L104', '11:00AM-12:00PM', 'Thursday', 'cse', 'cs04'),
('Data Structures', 'SKM', 'L104', '11:00AM-12:00PM', 'Tuesday', 'cse', 'cs04'),
('Data Structures', 'SKM', 'L104', '11:00AM-12:00PM', 'Wednesday', 'cse', 'cs04');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `code` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `prof` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`code`, `subject`, `stream`, `prof`) VALUES
('cs01', 'DBMS', 'cse', 'PK'),
('cs02', 'IT', 'cse', 'SKM'),
('cs03', 'Data Science', 'cse', 'KKB'),
('cs04', 'Data Structures', 'cse', 'SKM'),
('cs05', 'AI', 'cse', 'PK'),
('ec01', 'COA', 'ece', 'NKJ'),
('ec01', 'Basic Electronics', 'ece', 'SKJ'),
('ec03', 'Robotics', 'ece', 'NKJ'),
('ec04', 'Circuits', 'ece', 'SKJ'),
('ec05', 'Semiconductors', 'ece', 'SKJ');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `cname` varchar(50) NOT NULL,
  `prof` varchar(10) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `day` date NOT NULL,
  `stream` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`cname`, `prof`, `venue`, `time`, `day`, `stream`, `code`) VALUES
('Circuits', 'SKJ', 'L103', '9AM to 10PM', '2023-11-29', 'ece', 'ec04'),
('AI', 'PK', 'L106', '6PM', '2023-11-28', 'cse', 'cs05'),
('DBMS', 'PK', 'L103', '9AM to 10PM', '2023-11-30', 'cse', 'cs01');

-- --------------------------------------------------------

--
-- Table structure for table `slog`
--

CREATE TABLE `slog` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slog`
--

INSERT INTO `slog` (`user`, `pwd`, `stream`) VALUES
('22BCS138', 'khooshal', 'cse'),
('22BEC122', 'sunand', 'ece');

-- --------------------------------------------------------

--
-- Table structure for table `tlog`
--

CREATE TABLE `tlog` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `prof` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlog`
--

INSERT INTO `tlog` (`user`, `pwd`, `prof`) VALUES
('SKJ', 'idk', 'SKJ'),
('NKJ', 'idk2', 'NKJ'),
('PK', 'idk3', 'PK'),
('SKM', 'idk5', 'SKM'),
('KKB', 'godknowshuh', 'KKB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`course_code`,`due_date`,`assignment_name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`prof`,`time`,`day`,`stream`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`code`,`stream`,`prof`);

--
-- Indexes for table `slog`
--
ALTER TABLE `slog`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
