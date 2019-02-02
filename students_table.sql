-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 08:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `request_id` int(100) NOT NULL,
  `request_department` varchar(10) DEFAULT 'student',
  `request_title` varchar(100) DEFAULT NULL,
  `request_body` varchar(1000) DEFAULT NULL,
  `request_priority` varchar(50) DEFAULT 'Normal',
  `request_date` timestamp NULL DEFAULT NULL,
  `request_answered` varchar(10) DEFAULT 'No',
  `user_id` int(100) NOT NULL DEFAULT '0',
  `user_name` varchar(100) NOT NULL,
  `reply` varchar(500) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`request_id`, `request_department`, `request_title`, `request_body`, `request_priority`, `request_date`, `request_answered`, `user_id`, `user_name`, `reply`) VALUES
(2, 'student', 'Student Needs', 'Some students have complained about the maltreatment they face at the hands of lecturers, Please look into this', 'Normal', '2018-06-25 10:54:33', 'Yes', 6, 'test', 'Your request has been seen, and will soon be resolved'),
(9, 'ict', 'New Test', 'yvsjvlu', 'Normal', '2018-06-26 11:58:36', 'YES', 6, 'New User', 'TEST\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `students_table`
--

CREATE TABLE `students_table` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(60) NOT NULL,
  `student_dept` varchar(60) NOT NULL DEFAULT 'student',
  `student_matric_no` varchar(20) NOT NULL,
  `student_password` varchar(150) NOT NULL,
  `student_email` varchar(60) NOT NULL,
  `student_phone` int(11) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_table`
--

INSERT INTO `students_table` (`student_id`, `student_name`, `student_dept`, `student_matric_no`, `student_password`, `student_email`, `student_phone`, `admin`) VALUES
(1, 'Dan', 'ict', 'D908', '123', 'ugochukwuaronu4@gmail.co5', 2147483647, 0),
(2, 'Dan', 'ict', 'D908', '123', 'ugochukwuaronu4@gmail.co5', 2147483647, 0),
(3, 'k  k', 'ict', 'k k', '123', 'mail@m.com', 2147483647, 0),
(4, '07039428678', 'ict', 'nkjknk', '123', 'somatic20@yahoo.com', 2147483647, 0),
(5, 'j', 'ict', 'jk', '1234', 'somatic20@yahoo.com', 708226444, 1),
(6, 'New User', 'student', 'Dan007', '123', 'sam@mail.io', 2147483647, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `students_table`
--
ALTER TABLE `students_table`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_table`
--
ALTER TABLE `request_table`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students_table`
--
ALTER TABLE `students_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
