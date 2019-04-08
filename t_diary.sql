-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 12:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_class`
--

CREATE TABLE `add_class` (
  `s_no` int(11) NOT NULL,
  `faculty_id` varchar(25) NOT NULL,
  `session_id` varchar(25) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `section_id` varchar(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_class`
--

INSERT INTO `add_class` (`s_no`, `faculty_id`, `session_id`, `course_id`, `semester_id`, `subject_id`, `section_id`, `username`, `status`) VALUES
(20, 'ravi', '2018', 'bca', '8', 'software', 'A', 'ra', 1),
(21, 'ravi', '2015', 'BBA', '5', 'ECO', 'A', 'ra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `session_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `semester_id` varchar(15) NOT NULL,
  `facutly_id` varchar(15) NOT NULL,
  `std_id` varchar(15) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `assignment_no` int(3) NOT NULL,
  `assignment_question` text NOT NULL,
  `assign_date` date NOT NULL,
  `last_date` date NOT NULL,
  `update_date` date NOT NULL,
  `description_if_any` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `add_class_id` int(5) NOT NULL,
  `attendance_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(3) NOT NULL,
  `roll_no` int(4) NOT NULL,
  `attendance_status` varchar(9) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `description_if_any` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`add_class_id`, `attendance_id`, `date`, `time`, `roll_no`, `attendance_status`, `username`, `status`, `student_id`, `faculty_id`, `description_if_any`) VALUES
(0, 1, '0000-00-00', '02:00:00.000', 39, 'PR', 'ra', 1, '121', '2', ''),
(0, 2, '0000-00-00', '02:00:00.000', 4, 'PR', 'ra', 1, '121', '2', ''),
(0, 3, '0000-00-00', '02:00:00.000', 40, 'PR', 'ra', 1, '121', '2', ''),
(0, 4, '0000-00-00', '02:00:00.000', 41, 'PR', 'ra', 1, '121', '2', ''),
(0, 5, '0000-00-00', '02:00:00.000', 42, 'PR', 'ra', 1, '121', '2', ''),
(0, 6, '0000-00-00', '02:00:00.000', 43, 'PR', 'ra', 1, '121', '2', ''),
(0, 7, '0000-00-00', '02:00:00.000', 44, 'PR', 'ra', 1, '121', '2', ''),
(0, 8, '0000-00-00', '02:00:00.000', 45, 'PR', 'ra', 1, '121', '2', ''),
(0, 9, '0000-00-00', '02:00:00.000', 46, 'PR', 'ra', 1, '121', '2', ''),
(0, 10, '0000-00-00', '02:00:00.000', 47, 'PR', 'ra', 1, '121', '2', ''),
(0, 11, '0000-00-00', '02:00:00.000', 10, 'PR', 'ra', 1, '121', '2', ''),
(0, 12, '0000-00-00', '02:00:00.000', 11, 'PR', 'ra', 1, '121', '2', ''),
(0, 13, '0000-00-00', '02:00:00.000', 118, 'PR', 'ra', 1, '121', '2', ''),
(0, 14, '0000-00-00', '02:00:00.000', 119, 'PR', 'ra', 1, '121', '2', ''),
(0, 15, '0000-00-00', '02:00:00.000', 12, 'PR', 'ra', 1, '121', '2', ''),
(0, 16, '0000-00-00', '02:00:00.000', 120, 'PR', 'ra', 1, '121', '2', ''),
(0, 17, '0000-00-00', '02:00:00.000', 121, 'PR', 'ra', 1, '121', '2', ''),
(0, 18, '0000-00-00', '02:00:00.000', 122, 'PR', 'ra', 1, '121', '2', ''),
(0, 19, '0000-00-00', '02:00:00.000', 13, 'PR', 'ra', 1, '121', '2', ''),
(0, 20, '0000-00-00', '02:00:00.000', 135, 'PR', 'ra', 1, '121', '2', ''),
(0, 21, '0000-00-00', '02:00:00.000', 10, ' ABSENT', 'ra', 1, '121', '2', ''),
(0, 22, '0000-00-00', '02:00:00.000', 11, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 23, '0000-00-00', '02:00:00.000', 118, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 24, '0000-00-00', '02:00:00.000', 119, ' ABSENT', 'ra', 1, '121', '2', ''),
(0, 25, '0000-00-00', '02:00:00.000', 12, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 26, '0000-00-00', '02:00:00.000', 120, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 27, '0000-00-00', '02:00:00.000', 121, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 28, '0000-00-00', '02:00:00.000', 122, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 29, '0000-00-00', '02:00:00.000', 13, 'PRESENT', 'ra', 1, '121', '2', ''),
(0, 30, '0000-00-00', '02:00:00.000', 135, 'PRESENT', 'ra', 1, '121', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_update`
--

CREATE TABLE `attendance_update` (
  `attendance_update_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `take_attendance_id` int(11) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `university_id` varchar(50) NOT NULL,
  `s_no` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `name_of_courses` varchar(150) NOT NULL,
  `no_of_years` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`university_id`, `s_no`, `course_id`, `name_of_courses`, `no_of_years`, `status`, `username`) VALUES
('	 ku', 1, 'BCA', 'Bachelor of Computer Application', 3, 1, 'ra'),
('uou', 2, 'MCA', 'Master of Computer Application', 2, 1, 'ra'),
('	 ku', 3, 'BBA', 'Bachelor of Business Administration', 3, 1, 'ra'),
('uou', 4, 'MBA', 'Master of Business Administration', 2, 1, 'ra'),
('	 ku', 5, 'B.COM', 'Bachelor of Commerce', 3, 1, 'ra'),
('	 ku', 6, 'B.SC', 'Bachelor of Science', 3, 1, 'ra'),
('	 ku', 7, 'BHM', 'Bachelor of Hotel Management', 3, 1, 'ra'),
('uou', 8, 'DHM', 'Diploma Of Hotel Management', 1, 1, 'ra'),
('uou', 9, 'B.TECH', 'Bachelor Of Technology ', 4, 1, 'ra'),
('uou', 10, 'M.TECH', 'Master Of Technology', 2, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_address`
--

CREATE TABLE `faculty_address` (
  `address` varchar(150) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `address_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_of_commencement` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_contact`
--

CREATE TABLE `faculty_contact` (
  `faculty_email` varchar(100) NOT NULL,
  `email_status` tinyint(1) NOT NULL,
  `faculty_contact` varchar(15) NOT NULL,
  `faculty_status` tinyint(1) NOT NULL,
  `contact_status` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_personal`
--

CREATE TABLE `faculty_personal` (
  `s_no` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` text NOT NULL,
  `marital_status` varchar(15) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `husband_name` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `session` year(4) NOT NULL,
  `faculty_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE `faculty_profile` (
  `qualification_id` varchar(15) NOT NULL,
  `teacher_experience` int(3) NOT NULL,
  `date_of_joining` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `teacher_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `session_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `unit` int(3) NOT NULL,
  `topic` text NOT NULL,
  `lecture_id` int(3) NOT NULL,
  `total_lecture` int(3) NOT NULL,
  `syllabus_pdf` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `update_date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `session_id` varchar(50) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
  `section_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `lecture_id` varchar(50) NOT NULL,
  `lesson_id` int(20) NOT NULL,
  `topic` text NOT NULL,
  `date` date NOT NULL,
  `time_id` int(3) NOT NULL,
  `time_update` time(3) NOT NULL,
  `date_update` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `session_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `std_id` varchar(15) NOT NULL,
  `faculty_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `semester_id` varchar(15) NOT NULL,
  `section_id` varchar(15) NOT NULL,
  `marks_id` int(11) NOT NULL,
  `marks` int(4) NOT NULL,
  `marks_status` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `q_id` int(2) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`q_id`, `qualification`, `username`, `date_`) VALUES
(1, '10th', 'ra', '2019-03-22'),
(2, '12th', 'ra', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` varchar(15) NOT NULL,
  `room_no` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `session_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`, `status`, `username`) VALUES
(1, 'A', 1, 'ra'),
(2, 'B', 1, 'ra'),
(3, 'C', 1, 'ra'),
(4, 'D', 1, 'ra'),
(5, 'E', 1, 'ra'),
(6, 'F', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `no_of_semester` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `no_of_semester`, `status`, `username`) VALUES
(1, 1, 1, 'ra'),
(2, 2, 1, 'ra'),
(3, 3, 1, 'ra'),
(4, 4, 1, 'ra'),
(5, 5, 1, 'ra'),
(6, 6, 1, 'ra'),
(7, 7, 1, 'ra'),
(8, 8, 1, 'ra'),
(9, 9, 1, 'ra'),
(10, 10, 1, 'ra'),
(11, 11, 1, 'ra'),
(12, 12, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `s_id` int(11) NOT NULL,
  `session` int(8) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`s_id`, `session`, `status`, `username`) VALUES
(2014, 2014, 1, 'ra'),
(2015, 2015, 1, 'ra'),
(2016, 2016, 1, 'ra'),
(2017, 2017, 1, 'ra'),
(2018, 2018, 1, 'ra'),
(2019, 2019, 1, 'ra'),
(2020, 2020, 1, 'ra'),
(2021, 2021, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `s_no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `question` longtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `category` varchar(15) NOT NULL,
  `staus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`s_no`, `username`, `first_name`, `last_name`, `email`, `password`, `phone_no`, `date_of_birth`, `question`, `answer`, `category`, `staus`) VALUES
(1, 'ra', 'umesh chandra pandey', 'pa', 'ravip8527@gmail.com', '12', '9917604820', '2005-02-25', 'question 1', '1', 'Student', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_academic`
--

CREATE TABLE `std_academic` (
  `s_no` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `qualification_status` varchar(6) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `school` varchar(120) NOT NULL,
  `board` varchar(15) NOT NULL,
  `percentage` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_address`
--

CREATE TABLE `std_address` (
  `student_id` varchar(50) NOT NULL,
  `address` int(150) NOT NULL,
  `state` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `address_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_of_commencement` date NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_contact`
--

CREATE TABLE `std_contact` (
  `std_email` varchar(60) DEFAULT NULL,
  `std_contact` varchar(15) NOT NULL,
  `alternate_contact` int(15) NOT NULL,
  `contact_status` tinyint(1) NOT NULL,
  `email_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `alternate_email` varchar(50) NOT NULL,
  `std_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_group`
--

CREATE TABLE `std_group` (
  `session_id` varchar(15) NOT NULL,
  `course_id` text NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `group_id` varchar(15) NOT NULL,
  `semester_id` varchar(15) NOT NULL,
  `section_id` varchar(15) NOT NULL,
  `starting_roll` int(4) NOT NULL,
  `ending_roll` int(4) NOT NULL,
  `std_id` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `std_personal`
--

CREATE TABLE `std_personal` (
  `s_no` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL,
  `father_name` varchar(120) NOT NULL,
  `mother_name` varchar(120) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `category` varchar(10) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `session_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_personal`
--

INSERT INTO `std_personal` (`s_no`, `first_name`, `last_name`, `date_of_birth`, `father_name`, `mother_name`, `gender`, `nationality`, `category`, `blood_group`, `status`, `username`, `student_id`, `session_id`) VALUES
(1, 'Aman', 'jangi', '0000-00-00', 'Pramod  kumar jangi', 'Janki   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '1', '2017'),
(2, 'Bhavesh', 'bajetha', '0000-00-00', 'Ramesh c. bajetha', 'Manju bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '2', '2017'),
(3, 'Dev', 'mandal', '0000-00-00', 'Ajay   mandal', 'Purnima   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '3', '2017'),
(4, 'Divisha', 'sharma', '0000-00-00', 'Vivek   sharma', 'Upma   sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '4', '2018'),
(5, 'Gourav', 'farswan', '0000-00-00', 'Surender s. farswan', 'Renu   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '5', '2018'),
(6, 'Jeevika', 'chausali', '0000-00-00', 'Trilochan chausali', 'Lata   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '6', '2018'),
(7, 'Kapil', 'ruwali', '0000-00-00', 'Bhuvan   chand', 'Pushpa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '7', '2018'),
(8, 'Khushi', 'chausali', '0000-00-00', 'Deepanshu   ', 'Meena   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '8', '2018'),
(11, 'Sarthak', 'dosad', '0000-00-00', 'Mahendra s. dosad', 'Lata   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '9', '2018'),
(12, 'Shivansh', 'belwal', '0000-00-00', 'Ramesh c. belwal', 'Beena   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '10', '2018'),
(13, 'Yamini', 'kavidayal', '0000-00-00', 'Pramod chand Kavidayal', 'Hema Kavidayal', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '11', '2018'),
(14, 'Vaishnavi', 'pant', '0000-00-00', 'Vinay kumar pant', 'Deepa   pant', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '12', '2018'),
(15, 'Hariom', 'sharma', '0000-00-00', 'Chandra praksh sharma', 'Prema   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '13', '2018'),
(16, 'Naitik', 'dangwal', '0000-00-00', 'Dinesh c. dangwal', 'Geeta   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '14', '2018'),
(17, 'Narender', 'singh', '0000-00-00', 'Inderjeet   singh', 'Prema   ', 'M', 'hindu', 'OBC', 'A+', 1, 'gopal', '15', '2015'),
(18, 'Vinay', 'ruwali', '0000-00-00', 'Hem chandra ruwali', 'Khasti   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '16', '2015'),
(19, 'Aarti', 'arya', '0000-00-00', 'Khasti   ram', 'Asha   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '17', '2018'),
(20, 'Anushka', 'bhandari', '0000-00-00', 'D. s. bhandari', 'Khasti   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '18', '2019'),
(21, 'Jatin', 'tamta', '0000-00-00', 'Vinod   kumar', 'Sunita   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '19', '2019'),
(22, 'Ayush', 'bohra', '0000-00-00', 'Rajeev   kumar', 'Pushpa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '20', '2019'),
(23, 'Khushi', 'milkani', '0000-00-00', 'Chandra s. milkani', 'Suman   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '21', '2019'),
(24, 'Gourav', 'jangi', '0000-00-00', 'Manoj   jangi', 'Munni   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '22', '2019'),
(25, 'Preeti', 'patni', '0000-00-00', 'Lalit   singh', 'Neelu   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '23', '2019'),
(26, 'Paramjoat', 'singh', '0000-00-00', 'Jaswinder   singh', 'Kamlajeet   kaur', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '24', '2019'),
(27, 'Jagdish', 'bora', '0000-00-00', 'Anand singh bohra', 'Diksha   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '25', '2019'),
(28, 'Raja', 'chousali', '0000-00-00', 'Sanjay   kumar', 'Deepa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '26', '2019'),
(29, 'Tanishka', 'sharma', '0000-00-00', 'Sushil   kumar', 'Pooja   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '27', '2019'),
(30, 'Harjas', 'singh', '0000-00-00', 'Amandeep   singh', 'Rajwinder   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '28', '2019'),
(31, 'Diksha', 'chousali', '0000-00-00', 'Heera ballabh bhatt', 'Hema   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '29', '2019'),
(32, 'Sourabh', 'bahuguna', '0000-00-00', 'Vipin   bahuguna', 'Hema   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '30', '2018'),
(33, 'Ojaswani', 'tamta', '0000-00-00', 'Surender   tamta', 'Shobha   ', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '31', '2018'),
(34, 'Surajpreet', 'singh', '0000-00-00', 'Malkeet   singh', 'Mukhtiyar   kaur', 'M', 'hindu', 'OBC', 'A+', 1, 'gopal', '32', '2018'),
(35, 'Kartick', 'Chauhan', '0000-00-00', 'Shyam  singh Chauhan', 'Saraswati', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '33', '2018'),
(36, 'Charulata', 'arya', '0000-00-00', 'Lalit  arya', 'Sapna   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '34', '2019'),
(37, 'Deepanshi', 'rana', '0000-00-00', 'Prakash   rana', 'Pushpa   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '35', '2019'),
(38, 'Ishita', 'kulera', '0000-00-00', 'Diwan singh kulera', 'Neeru   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '36', '2019'),
(39, 'Aksh', 'chilwal', '0000-00-00', 'Manoj   chilwal', 'Saroj   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '37', '2018'),
(40, 'Bhupender', 'gounia', '0000-00-00', 'Yash pal singh', 'Kamla   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '38', '2018'),
(41, 'Niharika', 'sharma', '0000-00-00', 'Pradeep   shrma', 'Sunita Sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '39', '2018'),
(42, 'Jiya', 'chousali', '0000-00-00', 'Tara dutt chousali', 'Mamta   chausali', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '40', '2018'),
(43, 'Sagun', 'tamta', '0000-00-00', 'Gajender  tamta', 'Ka   lpna', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '41', '2018'),
(44, 'Kushal', 'paneru', '0000-00-00', 'Lalit   paneru', 'Bhawna   paneru', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '42', '2018'),
(45, 'Shubham', 'chousali', '0000-00-00', 'Ramesh c. chausali', 'Saroj   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '43', '2018'),
(46, 'Hardik', 'mehra', '0000-00-00', 'Balwant  singh mehra', 'Hansi   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '44', '2018'),
(47, 'Prateek', 'raj', '0000-00-00', 'Daya kishan raj', 'Geeta   ', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '45', '2018'),
(48, 'Sourabh', 'mehra', '0000-00-00', 'Mohan s. mehra', 'Meena   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '46', '2018'),
(49, 'Deepanshu', 'joshi', '0000-00-00', 'Deepak chandra joshi', 'Asha   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '47', '2018'),
(50, 'Rohit', 'pargain', '0000-00-00', 'Chander shekar pargain', 'Khasti   pargain', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '48', '2018'),
(51, 'Vanshika', 'arya', '0000-00-00', 'Rakesh   kumar', 'Rekha   ', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '49', '2017'),
(52, 'Deepak', 'bisht', '0000-00-00', 'Laxman singh bisht', 'Uma   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '50', '2017'),
(53, 'Kartick', 'ghangola', '0000-00-00', 'Heera ballabh ghangola', 'Mamta devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '51', '2017'),
(54, 'Manish', 'thuwal', '0000-00-00', 'Bipin c. thuwal', 'Pooja   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '52', '2017'),
(55, 'Devansh', 'pargain', '0000-00-00', 'Mukesh   pargain', 'Pooja   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '53', '2017'),
(56, 'Parth', 'tamta', '0000-00-00', 'Amit   kumar', 'Mamta   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '54', '2017'),
(57, 'Kajal', 'joshi', '0000-00-00', 'Mohan c. joshi', 'Kamla joshi  ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '55', '2018'),
(58, 'Kumkum', 'upreti', '0000-00-00', 'Yogesh   upreti', 'Pooja   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '56', '2018'),
(59, 'Somya', 'chufal', '0000-00-00', 'Deepak s. chufal', 'Pushpa   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '57', '2018'),
(60, 'Rakshita', 'belwal', '0000-00-00', 'Chattarpati   belwal', 'Durga   belwal', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '58', '2018'),
(61, 'Gourav', 'pantola', '0000-00-00', 'Bishan datt pantola', 'Kamla   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '59', '2019'),
(62, 'Himani', 'bisht', '0000-00-00', 'Prakash   singh', 'Prema   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '60', '2017'),
(63, 'Tanuja', 'bughani', '0000-00-00', 'Bipin  bughani', 'Sunita   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '61', '2016'),
(66, 'Aarav', 'jangi', '0000-00-00', 'Pramod kumar jangi', 'Janki   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '62', '2015'),
(67, 'Asha', 'pargain', '0000-00-00', 'Lalit mohan pargain', 'Geeta   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '63', '2016'),
(69, 'Bhawna', 'matiyali', '0000-00-00', 'Bahadur   singh', 'Nirmala   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '64', '2015'),
(70, 'Bharat', 'matiyali', '0000-00-00', 'Harish s. matiyali', 'Nirmala   matiyali', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '65', '2015'),
(71, 'Arpit', 'matiyali', '0000-00-00', 'Nirmal   singh', 'Kamla   matiyali', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '66', '2016'),
(72, 'Niharika', 'tamta', '0000-00-00', 'Govind   ram', 'Maheswari   devi', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '67', '2017'),
(74, 'Harshita', 'pant', '0000-00-00', 'Mr. lalit mohan pant  ', 'Mrs. tanuja pant  ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '68', '2018'),
(75, 'Lokesh', 'joshi', '0000-00-00', 'Girish chandra joshi  ', 'Beena joshi  ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '69', '2015'),
(76, 'Vansh', 'singh', '0000-00-00', 'Mangal singh   ', 'Mamta dhami  ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '70', '2019'),
(77, 'Gurpreet', 'singh', '0000-00-00', 'Malkeet   singh', 'Mukhtiyar   kaur', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '71', '2018'),
(78, 'Aman', 'arya', '0000-00-00', 'Ramesh c. arya', 'Sunita   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '72', '2014'),
(79, 'Rashi', 'pantola', '0000-00-00', 'Manoj   pantola', 'Babita   pantola', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '73', '2022'),
(80, 'Mayank', 'goldar', '0000-00-00', 'Deelip   goldar', 'Renu   goldar', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '74', '2019'),
(81, 'Yogesh', 'bajetha', '0000-00-00', 'Kheem singh bajetha', 'Kavita   bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '75', '2019'),
(82, 'Sourav', 'kumar', '0000-00-00', 'Prakash   chandra', 'Hansa   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '76', '2019'),
(83, 'Garima', 'deopa', '0000-00-00', 'Bishan s. deopa', 'Pushpa   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '77', '2021'),
(84, 'Karan', 'kumar', '0000-00-00', 'Dinesh   prasad', 'Mamta   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '78', '2019'),
(85, 'Nisha', 'bhatt', '0000-00-00', 'Deepak   chandra', 'Keshvi   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '79', '2019'),
(86, 'Ishita', 'rajwar', '0000-00-00', 'Pratap   rajwar', 'Kavita   chand', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '80', '2021'),
(87, 'Deepak', 'bhatt', '0000-00-00', 'Ramesh   bhatt', 'Renu   bhatt', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '81', '2018'),
(88, 'Upasna', 'jangi', '0000-00-00', 'Neeraj   kumar', 'Janki   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '82', '2017'),
(89, 'Mamta', 'rajput', '0000-00-00', 'Jhamman singh ', 'Pushpa   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '83', '2020'),
(90, 'Naman', 'joshi', '0000-00-00', 'Mukesh c. joshi', 'Mamta   joshi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '84', '2019'),
(91, 'Prince', 'bajetha', '0000-00-00', 'Naveen c. bajetha', 'Rekha   bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '85', '2016'),
(92, 'Dev', 'mehra', '0000-00-00', 'Jagat s. mehra', 'Radha   mehra', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '86', '2019'),
(93, 'Mamta', 'ruwali', '0000-00-00', 'Chandra prakash ruwali', 'Renu   ruwali', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '87', '2021'),
(94, 'Rajat', 'bora', '0000-00-00', 'Nandan s. bora', 'Saroj   bora', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '88', '2015'),
(95, 'Mannya', 'rautela', '0000-00-00', 'Narendra s. rautela', 'Asha   rautela', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '89', '2030'),
(96, 'Aruniya', 'kohli', '0000-00-00', 'Prem   kohli', 'Veena   kohli', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '90', '2016'),
(97, 'Prachi', 'chand', '0000-00-00', 'Gopal   chand', 'Sunita   chand', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '91', '2016'),
(98, 'Piyush', 'sharma', '0000-00-00', 'Lalit   sharma', 'Sona   sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '92', '2016'),
(99, 'Deepanshu', 'gaira', '0000-00-00', 'Dinesh lal', 'Chandra arya', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '93', '2016'),
(100, 'Harsh', 'bajetha', '0000-00-00', 'Kailash c. bajetha', 'Tulsi   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '94', '2016'),
(101, 'Priyanshi', 'gunwant', '0000-00-00', 'Lalit   gunwant', 'Asha   gunwant', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '95', '2016'),
(102, 'Pritiyush', 'tamta', '0000-00-00', 'Surendera   lal', 'Shobha   tamta', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '96', '2016'),
(103, 'Ritika', 'rawat', '0000-00-00', 'Sanjay   rawat', 'Reetu   rawat', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '97', '2016'),
(104, 'Aniket', 'kumar', '0000-00-00', 'Rakesh   kumar', 'Rekha   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '98', '2016'),
(105, 'Sapna', 'arya', '0000-00-00', 'Suresh   chandra', 'Sunita   arya', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '99', '2016'),
(106, 'Manish', 'singh', '0000-00-00', 'S. s. barthyal', 'Hansi   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '100', '2019'),
(107, 'Aadarsh', 'kumar', '0000-00-00', 'Madan   ram', 'Vimla   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '101', '2019'),
(108, 'Pooja', 'joshi', '0000-00-00', 'K. d. joshi', 'Seema   joshi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '102', '2019'),
(109, 'Sabina', 'khatoon', '0000-00-00', 'Guddu   khan', 'Sharina   khatoon', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '103', '2019'),
(111, 'Manvi', 'tamta', '0000-00-00', 'Mahipal   tamta', 'Champta   tamta', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '104', '2019'),
(112, 'Aayush', 'arya', '0000-00-00', 'Laxman   kumar', 'Chandrakala   ', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '105', '2019'),
(114, 'Bhumika', 'bajetha', '0000-00-00', 'Jagdish c. bajetha', 'Kanchan   bajetha', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '106', '2019'),
(115, 'Divyam', 'tamta', '0000-00-00', 'Sanjay   tamta', 'Ganga   devi', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '107', '2019'),
(116, 'Gourav', 'arya', '0000-00-00', 'Pooran c. arya', 'Shobha   arya', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '108', '2019'),
(117, 'Harshit', 'bughani', '0000-00-00', 'Tara dutt chousali', 'Durga   bughani', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '109', '2019'),
(118, 'Kashish', 'joshi', '0000-00-00', 'Madhawanand   joshi', 'Seeta   joshi', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '110', '2019'),
(119, 'Mukul', 'bughani', '0000-00-00', 'Naveen c. bughani', 'Vimla   bughani', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '111', '2019'),
(120, 'Nikhil', 'mehra', '0000-00-00', 'Bhagat s. mehra', 'Neha   mehra', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '112', '2019'),
(121, 'Piyush', 'pokhriyal', '0000-00-00', 'Dheerendra   pokhriyal', 'Rupa   ', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '113', '2019'),
(122, 'Purva', 'bajetha', '0000-00-00', 'Ramesh c. bajetha', 'Mamta   bajetha', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '114', '2019'),
(123, 'Priyanshu', 'belwal', '0000-00-00', 'Vinod   belwal', 'Asha   belwal', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '115', '2019'),
(124, 'Twinkle', 'khanwal', '0000-00-00', 'Gopal   singh', 'Uma   khanwal', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '116', '2019'),
(125, 'Tanmay', 'kumar', '0000-00-00', 'Arjun   kumar', '   ', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '117', '2019'),
(126, 'Yogita', 'kohli', '0000-00-00', 'Ram   lal', 'Sarita   devi', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '118', '2015'),
(127, 'Himanshi', 'bhatt', '0000-00-00', 'Bhuwan c. bhatt', 'Pushpa   bhatt', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '119', '2015'),
(128, 'Kamini', 'bisht', '0000-00-00', 'Ganesh   bisht', 'Radha   devi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '120', '2015'),
(129, 'Jyoti', 'paliwal', '0000-00-00', 'Keshav   paliwal', 'Mamta   ruwali', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '121', '2015'),
(130, 'Ananya', 'kohli', '0000-00-00', 'Chandan   lal', 'Rekha   devi', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '122', '2015'),
(131, 'Bhawna', 'bisht', '0000-00-00', 'Bishan s. bisht', 'Champa devi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'gopal', '123', '2017'),
(132, 'Kushankit', 'parki', '0000-00-00', 'Manoj kumar', 'Champa parki', 'F', 'hindu', 'GENERAL', 'B+', 1, 'gopal', '124', '2016'),
(133, 'Neha', 'sanwal', '0000-00-00', 'Surech c. sanwal', 'Lt. pushpa sanwal', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '125', '2014'),
(134, 'Prateek', 'kanyal', '0000-00-00', 'Dinesh s. kanyal', 'Asha   kanyal', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '126', '2017'),
(135, 'Garima', 'rawat', '0000-00-00', 'Gopal s. rawat', 'Manju   rawat', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '127', '2016'),
(136, 'Bhumika', 'chilwal', '0000-00-00', 'Manoj   chilwal', 'Saroj   chilwal', 'F', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '128', '2016'),
(138, 'Anshuman', 'summal', '0000-00-00', 'Laxman s. summal', 'Bhawna   summal', 'M', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '129', '2017'),
(139, 'Mayank', 'tamta', '0000-00-00', 'Govind   ram', 'Maheswari   devi', 'F', 'hindu', 'SC', 'O+', 1, 'gopal', '130', '2017'),
(141, 'Ayush', 'rautela', '0000-00-00', 'Devender   rautela', 'Kamla   rautela', 'M', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '131', '2017'),
(142, 'Vikash', 'pokhriya', '0000-00-00', 'Govind   ballabh', 'Geeta   devi', 'M', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '132', '2017'),
(143, 'Diksha', 'mewari', '0000-00-00', 'Rajendar   mewari', 'Bhagwati   devi', 'F', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '133', '2017'),
(144, 'Deepanshu', 'sanwal', '0000-00-00', 'Rajendra Kumar sanwal', 'Pinky   sanwal', 'M', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '134', '2017'),
(145, 'Priyanshi', 'bisht', '0000-00-00', 'Narayan   bisht', 'Diksha   bisht', 'F', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '135', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `std_reg`
--

CREATE TABLE `std_reg` (
  `session` varchar(10) DEFAULT NULL,
  `course_of_admission` varchar(15) NOT NULL,
  `date_of_admission` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `std_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `course_id` varchar(15) NOT NULL,
  `semester_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `subject_name` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` varchar(15) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester_id` varchar(15) NOT NULL,
  `section_id` varchar(15) NOT NULL,
  `room_id` varchar(15) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `faculty_id` varchar(15) NOT NULL,
  `time` time(3) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `university_id` varchar(11) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_name`, `status`, `username`) VALUES
('ku', 'kumaun university', 1, 'ra'),
('uou', 'uttarakhand open university', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `session_id` varchar(10) NOT NULL,
  `subject_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `semester_id` varchar(10) NOT NULL,
  `lecture_id` varchar(10) NOT NULL,
  `lesson_id` varchar(10) NOT NULL,
  `week_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_lecture_schedule` int(3) NOT NULL,
  `no_of_lost_due_to_holiday` int(3) NOT NULL,
  `no_of_lost_due_to_cl` int(3) NOT NULL,
  `no_extra_taken` int(3) NOT NULL,
  `no_of_lecture_actual_taken` int(3) NOT NULL,
  `description_of_topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_class`
--
ALTER TABLE `add_class`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `session_id` (`session_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attendance_update`
--
ALTER TABLE `attendance_update`
  ADD PRIMARY KEY (`attendance_update_id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `faculty_personal`
--
ALTER TABLE `faculty_personal`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lecture_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD UNIQUE KEY `room_no` (`room_no`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `std_academic`
--
ALTER TABLE `std_academic`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `std_group`
--
ALTER TABLE `std_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `std_personal`
--
ALTER TABLE `std_personal`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `weekly`
--
ALTER TABLE `weekly`
  ADD PRIMARY KEY (`week_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_class`
--
ALTER TABLE `add_class`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `attendance_update`
--
ALTER TABLE `attendance_update`
  MODIFY `attendance_update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty_personal`
--
ALTER TABLE `faculty_personal`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `q_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `std_academic`
--
ALTER TABLE `std_academic`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_personal`
--
ALTER TABLE `std_personal`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `week_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
