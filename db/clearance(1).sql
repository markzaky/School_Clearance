-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2023 at 08:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(25) DEFAULT NULL,
  `admin_password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(15) NOT NULL,
  `course_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_code`, `course_description`) VALUES
(1, 'BCS', 'Bachelors In Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deliverable`
--

CREATE TABLE `tbl_deliverable` (
  `deliverable_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `category` int(1) NOT NULL,
  `requirement_name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_deliverable`
--

INSERT INTO `tbl_deliverable` (`deliverable_id`, `department_id`, `category`, `requirement_name`, `description`) VALUES
(1, 1, 0, 'Cleared School Tution Fees', 'You need to have cleared all the student fee balance, from 1st year to 4th Year.'),
(2, 2, 0, 'Returned all books', 'You need to have returned all library borrowed books and any school owned reading maerial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'Finance Office'),
(2, 'Library'),
(3, 'Registrar'),
(4, 'Chairperson of Department'),
(5, 'Alumni Office'),
(6, 'Hostels'),
(7, 'Cafeteria'),
(8, 'Workshop'),
(9, 'Sports'),
(10, 'Dean of Students'),
(11, 'Senate Affairs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department_user`
--

CREATE TABLE `tbl_department_user` (
  `department_user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `assigned_personnel` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `account_status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_department_user`
--

INSERT INTO `tbl_department_user` (`department_user_id`, `department_id`, `assigned_personnel`, `username`, `password`, `account_status`, `user_id`) VALUES
(1, 1, 'John Doe', 'ianDoe', '1234', 0, 1),
(2, 2, 'Jane Doe', 'janeDoe', '1234', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty`
--

CREATE TABLE `tbl_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_id_number` varchar(15) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `account_status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_faculty`
--

INSERT INTO `tbl_faculty` (`faculty_id`, `faculty_id_number`, `last_name`, `first_name`, `middle_name`, `contact`, `email_address`, `username`, `password`, `account_status`, `user_id`) VALUES
(1, '202', 'Doe', 'Ian', '', '0', 'iandoe@gamil.com', 'ianDoe', '1234', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fees_balance`
--

CREATE TABLE `tbl_fees_balance` (
  `account_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `first_year` float DEFAULT NULL,
  `second_year` float DEFAULT NULL,
  `third_year` float DEFAULT NULL,
  `fourth_year` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_fees_balance`
--

INSERT INTO `tbl_fees_balance` (`account_id`, `student_id`, `first_year`, `second_year`, `third_year`, `fourth_year`) VALUES
(1, 1, 0, 1000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_deliverable`
--

CREATE TABLE `tbl_list_deliverable` (
  `list_id` int(11) NOT NULL,
  `deliverable_id` int(11) NOT NULL,
  `uploaded_file` longblob DEFAULT NULL,
  `date_uploaded` date NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `department_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_list_deliverable`
--

INSERT INTO `tbl_list_deliverable` (`list_id`, `deliverable_id`, `uploaded_file`, `date_uploaded`, `faculty_id`, `student_id`, `remarks`, `status`, `department_user_id`) VALUES
(1, 1, NULL, '2023-01-30', 1, 1, 'Please Pay Outstanding Fee balance', 2, 1),
(2, 2, NULL, '2023-02-01', 1, 1, 'You Have cleared all books', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_id_number` varchar(15) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year_level` int(1) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `account_status` int(1) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_id_number`, `last_name`, `first_name`, `middle_name`, `course_id`, `year_level`, `contact`, `email_address`, `username`, `password`, `account_status`, `user_id`) VALUES
(1, '1234', 'Mark', 'Zakyy', '', 1, 4, '1', 'mark@gmail.com', 'markzaky', '1234', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `complete_name` varchar(100) NOT NULL,
  `avatar` longblob DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `complete_name`, `avatar`, `username`, `password`, `contact`, `email`, `status`) VALUES
(1, 'Ian Doe', NULL, 'ianDoe', '1234', '0', 'iandoe@gamil.com', 0),
(2, 'Jane Doe', NULL, 'janeDoe', '1234', '07142548589', 'janedoe@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_deliverable`
--
ALTER TABLE `tbl_deliverable`
  ADD PRIMARY KEY (`deliverable_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_department_user`
--
ALTER TABLE `tbl_department_user`
  ADD PRIMARY KEY (`department_user_id`),
  ADD UNIQUE KEY `department_id` (`department_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `faculty_id_number` (`faculty_id_number`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_fees_balance`
--
ALTER TABLE `tbl_fees_balance`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `tbl_list_deliverable`
--
ALTER TABLE `tbl_list_deliverable`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `deliverable_id` (`deliverable_id`,`faculty_id`,`student_id`,`department_user_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `department_user_id` (`department_user_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `course_id` (`course_id`,`user_id`),
  ADD KEY `course_id_2` (`course_id`,`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_department_user`
--
ALTER TABLE `tbl_department_user`
  MODIFY `department_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fees_balance`
--
ALTER TABLE `tbl_fees_balance`
  MODIFY `account_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_list_deliverable`
--
ALTER TABLE `tbl_list_deliverable`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_deliverable`
--
ALTER TABLE `tbl_deliverable`
  ADD CONSTRAINT `tbl_deliverable_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_department_user`
--
ALTER TABLE `tbl_department_user`
  ADD CONSTRAINT `tbl_department_user_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `tbl_department` (`department_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_faculty`
--
ALTER TABLE `tbl_faculty`
  ADD CONSTRAINT `tbl_faculty_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_fees_balance`
--
ALTER TABLE `tbl_fees_balance`
  ADD CONSTRAINT `tbl_fees_balance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_list_deliverable`
--
ALTER TABLE `tbl_list_deliverable`
  ADD CONSTRAINT `tbl_list_deliverable_ibfk_1` FOREIGN KEY (`deliverable_id`) REFERENCES `tbl_deliverable` (`deliverable_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_list_deliverable_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `tbl_faculty` (`faculty_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_list_deliverable_ibfk_3` FOREIGN KEY (`department_user_id`) REFERENCES `tbl_department_user` (`department_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_list_deliverable_ibfk_4` FOREIGN KEY (`student_id`) REFERENCES `tbl_student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD CONSTRAINT `tbl_student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
