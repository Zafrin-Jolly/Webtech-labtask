-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 06:39 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_username` varchar(40) NOT NULL,
  `a_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_username`, `a_password`) VALUES
(10101, 'admin', 'admin123'),
(20202, 'admin2', 'admin1234'),
(30303, 'admin3', 'admin456'),
(40404, 'admin4', 'admin789');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_ID` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `course_credit` int(11) NOT NULL,
  `dept_name` varchar(10) NOT NULL,
  `faculty_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `course_name`, `course_credit`, `dept_name`, `faculty_ID`) VALUES
(101, 'Introduction to prog', 3, 'CSE', 111000),
(102, 'Digital logic and ci', 3, 'CSE', 222000),
(103, 'Principle of account', 3, 'BBA', 333000),
(123, 'English learning and', 3, 'English', 444000);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_name` varchar(10) NOT NULL,
  `dept_info` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_name`, `dept_info`) VALUES
('BBA', '137 credit'),
('CSE', '138 credit'),
('EEE', '156 credit'),
('English', '129 credit');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculty_ID` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `faculty_name` varchar(40) NOT NULL,
  `DOB` datetime(6) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_ID`, `username`, `password`, `faculty_name`, `DOB`, `gender`, `contact_no`, `address`) VALUES
(111000, 'Tazul', 'tazul123', 'Tazul islam kayanat', '1995-02-14 00:32:57.000000', 'Male', 1923435463, '4/3-ko,mirpur,Dhaka'),
(222000, 'Irina', 'irina123', 'Irina islam', '1993-05-29 00:12:57.000000', 'Female', 134656663, '2-ko,baridhara,Dhaka'),
(333000, 'Zafrin', 'jolly123', 'Zafrin sultana jolly', '1995-07-29 00:20:57.000000', 'Female', 192434200, '5/1-ko,kuril,Dhaka'),
(444000, 'Afrin', 'afrin123', 'Afrin sultana', '1999-02-12 00:32:57.000000', 'Female', 192446567, '4/3-a,ararapara,savar,Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course`
--

CREATE TABLE `faculty_course` (
  `fcourse_ID` int(11) NOT NULL,
  `faculty_ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_course`
--

INSERT INTO `faculty_course` (`fcourse_ID`, `faculty_ID`, `course_ID`) VALUES
(1221, 111000, 101),
(2112, 333000, 103),
(2332, 222000, 102),
(3113, 222000, 123);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_department`
--

CREATE TABLE `faculty_department` (
  `fd_ID` int(11) NOT NULL,
  `faculty_ID` int(11) NOT NULL,
  `dept_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_department`
--

INSERT INTO `faculty_department` (`fd_ID`, `faculty_ID`, `dept_name`) VALUES
(3213, 333000, 'BBA'),
(3456, 111000, 'CSE'),
(5789, 222000, 'EEE'),
(9980, 444000, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_section`
--

CREATE TABLE `faculty_section` (
  `fsection_ID` int(11) NOT NULL,
  `faculty_ID` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `admitcard_number` int(11) NOT NULL,
  `obtained_mark` float NOT NULL,
  `student_ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`admitcard_number`, `obtained_mark`, `student_ID`, `course_ID`) VALUES
(678799, 89.9, 1110383, 102),
(8706890, 90, 1110393, 103);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_name` varchar(10) NOT NULL,
  `course_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_name`, `course_ID`) VALUES
('J', 101),
('S', 101),
('A', 102),
('C', 103),
('F', 103),
('B', 123),
('D', 123);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_ID` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `fathers_name` varchar(40) NOT NULL,
  `mothers_name` varchar(40) NOT NULL,
  `DOB` datetime(6) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `cgpa` float NOT NULL,
  `Batch` int(11) NOT NULL,
  `section_name` varchar(10) NOT NULL,
  `dept_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_ID`, `username`, `password`, `student_name`, `fathers_name`, `mothers_name`, `DOB`, `gender`, `contact_no`, `address`, `cgpa`, `Batch`, `section_name`, `dept_name`) VALUES
(1110383, 'shoumik', 'shoumik123', 'Shoumik saha', 'Raj saha', 'Proma saha', '2000-02-14 00:32:57.000000', 'Male', 169870054, '3/4,badda,savar,Dhaka', 3.57, 2019, 'A', 'EEE'),
(1110393, 'tisha', 'tisha123', 'Tisha khandokar', 'Tutul khandokar', 'Fairoz Khandokar', '1999-09-12 00:32:57.000000', 'Female', 198566675, '4-kha,kuril,Dhaka', 3.8, 2019, 'J', 'English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculty_ID`);

--
-- Indexes for table `faculty_course`
--
ALTER TABLE `faculty_course`
  ADD PRIMARY KEY (`fcourse_ID`),
  ADD KEY `faculty_ID` (`faculty_ID`),
  ADD KEY `faculty_course_ibfk_1` (`course_ID`);

--
-- Indexes for table `faculty_department`
--
ALTER TABLE `faculty_department`
  ADD PRIMARY KEY (`fd_ID`),
  ADD KEY `faculty_ID` (`faculty_ID`),
  ADD KEY `faculty_department_ibfk_1` (`dept_name`);

--
-- Indexes for table `faculty_section`
--
ALTER TABLE `faculty_section`
  ADD PRIMARY KEY (`fsection_ID`),
  ADD KEY `faculty_ID` (`faculty_ID`),
  ADD KEY `section_name` (`section_name`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`admitcard_number`),
  ADD KEY `course_ID` (`course_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_name`),
  ADD KEY `course_ID` (`course_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `section_name` (`section_name`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculty_course`
--
ALTER TABLE `faculty_course`
  ADD CONSTRAINT `faculty_course_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`course_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `faculty_department`
--
ALTER TABLE `faculty_department`
  ADD CONSTRAINT `faculty_department_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`) ON UPDATE CASCADE;

--
-- Constraints for table `faculty_section`
--
ALTER TABLE `faculty_section`
  ADD CONSTRAINT `faculty_section_ibfk_1` FOREIGN KEY (`faculty_ID`) REFERENCES `faculties` (`faculty_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_section_ibfk_2` FOREIGN KEY (`section_name`) REFERENCES `section` (`section_name`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`course_ID`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`student_ID`) REFERENCES `students` (`student_ID`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `course` (`course_ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`section_name`) REFERENCES `section` (`section_name`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`dept_name`) REFERENCES `department` (`dept_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
