-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 12:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
  `add_class_id` int(11) NOT NULL,
  `faculty_id` varchar(25) NOT NULL,
  `session_id` varchar(25) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
  `subject_id` varchar(15) NOT NULL,
  `section_id` varchar(3) NOT NULL,
  `date_of_commencement` date NOT NULL,
  `date_of_completion` date NOT NULL,
  `syllabus_pdf` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_class`
--

INSERT INTO `add_class` (`add_class_id`, `faculty_id`, `session_id`, `course_id`, `semester_id`, `subject_id`, `section_id`, `date_of_commencement`, `date_of_completion`, `syllabus_pdf`, `username`, `status`) VALUES
(24, 'ravi', '2014', 'BCA', '5', 'software', 'A', '0000-00-00', '0000-00-00', '', 'ra', 1),
(25, 'ravi', '2015', 'BBA', '5', 'AC', 'A', '0000-00-00', '0000-00-00', '', 'ra', 1),
(26, 'ravi', '2015', 'BBA', '5', 'AC', 'B', '0000-00-00', '0000-00-00', '', 'ra', 1),
(28, 'ravi', '2018', 'BCA', '5', 'software', 'A', '0000-00-00', '0000-00-00', '', 'ra', 1),
(29, 'ravi', '2018', 'BCA', '5', 'software', 'B', '0000-00-00', '0000-00-00', '', 'ra', 1),
(30, 'ravi', '2016', 'bca', '5', 'software', 'A', '0000-00-00', '0000-00-00', '', 'ra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Assignment_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `Assignment_no` int(11) NOT NULL,
  `Given_date` date NOT NULL,
  `Submission_date` date NOT NULL,
  `Unit` int(3) NOT NULL,
  `Topic` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Assignment_id`, `add_class_id`, `Assignment_no`, `Given_date`, `Submission_date`, `Unit`, `Topic`, `status`, `username`) VALUES
(1, 25, 1, '2019-04-11', '2019-04-12', 1, 'tgjjkhgyuk', 1, 'ra'),
(2, 25, 1, '2019-04-11', '2019-04-12', 1, 'tgjjkhgyuk', 1, 'ra'),
(3, 25, 1, '2019-04-15', '2019-04-15', 1, 'FFGDZGV XZDVXVXVDXXXDZVSXGX', 1, 'ra'),
(4, 25, 0, '0000-00-00', '0000-00-00', 0, '', 1, 'ra'),
(5, 26, 0, '0000-00-00', '0000-00-00', 14, 'SGSSDIFHKZ,', 1, 'ra'),
(8, 25, 2, '2019-04-26', '2019-04-26', 2, 'r5wd6yuoifpfdisgxtaycgvfiokgbp;lsxazuyt5rdxgfcvkbl;h\'/v,xlknzftgcfx', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_checker`
--

CREATE TABLE `assignment_checker` (
  `assignment_checker_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `assignment_status` tinyint(1) NOT NULL,
  `checker_date` date NOT NULL,
  `Grade` varchar(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment_checker`
--

INSERT INTO `assignment_checker` (`assignment_checker_id`, `add_class_id`, `assignment_id`, `roll_no`, `assignment_status`, `checker_date`, `Grade`, `status`, `username`) VALUES
(1, 25, 2, 118, 1, '2019-04-11', 'A', 1, 'ra'),
(2, 25, 2, 119, 1, '2019-04-11', 'A', 1, 'ra'),
(3, 25, 2, 120, 1, '2019-04-11', 'A', 1, 'ra'),
(4, 26, 55, 121, 1, '2019-04-11', 'A', 1, 'ra'),
(5, 26, 5646, 122, 1, '2019-04-11', 'B', 1, 'ra'),
(6, 26, 944, 403, 1, '2019-04-11', 'D', 1, 'ra'),
(7, 25, 2, 118, 1, '2019-04-26', 'A', 1, 'ra'),
(8, 25, 2, 119, 1, '2019-04-26', 'A', 1, 'ra'),
(9, 25, 2, 120, 1, '2019-04-26', 'A', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `assign_subject_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
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
(28, 69, '2019-04-09', '02:00:00.000', 4, 'LEAVE', 'ra', 1, '121', '2', ''),
(28, 70, '2019-04-09', '02:00:00.000', 5, ' ABSENT', 'ra', 1, '121', '2', ''),
(28, 71, '2019-04-09', '02:00:00.000', 6, 'PRESENT', 'ra', 1, '121', '2', ''),
(28, 72, '2019-04-09', '02:00:00.000', 7, 'LEAVE', 'ra', 1, '121', '2', ''),
(28, 73, '2019-04-09', '02:00:00.000', 8, ' ABSENT', 'ra', 1, '121', '2', ''),
(28, 74, '2019-04-09', '02:00:00.000', 9, ' ABSENT', 'ra', 1, '121', '2', ''),
(26, 75, '2019-04-11', '02:00:00.000', 121, ' ABSENT', 'ra', 1, '121', '2', ''),
(26, 76, '2019-04-11', '02:00:00.000', 122, ' ABSENT', 'ra', 1, '121', '2', ''),
(26, 77, '2019-04-11', '02:00:00.000', 403, 'PRESENT', 'ra', 1, '121', '2', ''),
(25, 78, '2019-04-12', '02:00:00.000', 118, ' ABSENT', 'ra', 1, '121', '2', ''),
(25, 79, '2019-04-12', '02:00:00.000', 119, ' ABSENT', 'ra', 1, '121', '2', ''),
(25, 80, '2019-04-12', '02:00:00.000', 120, ' ABSENT', 'ra', 1, '121', '2', ''),
(25, 81, '2019-04-27', '02:00:00.000', 118, ' ABSENT', 'ra', 1, '121', '2', ''),
(25, 82, '2019-04-27', '02:00:00.000', 119, 'PRESENT', 'ra', 1, '121', '2', ''),
(25, 83, '2019-04-27', '02:00:00.000', 120, ' ABSENT', 'ra', 1, '121', '2', '');

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
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `batch_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `university_id` varchar(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `name_of_courses` varchar(150) NOT NULL,
  `no_of_years` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`university_id`, `course_id`, `name_of_courses`, `no_of_years`, `status`, `username`) VALUES
('	 ku', 'B.COM', 'Bachelor of Commerce', 3, 1, 'ra'),
('	 ku', 'B.SC', 'Bachelor of Science', 3, 1, 'ra'),
('uou', 'B.TECH', 'Bachelor Of Technology ', 4, 1, 'ra'),
('	 ku', 'BBA', 'Bachelor of Business Administration', 3, 1, 'ra'),
('	 ku', 'BCA', 'Bachelor of Computer Application', 3, 1, 'ra'),
('	 ku', 'BHM', 'Bachelor of Hotel Management', 3, 1, 'ra'),
('uou', 'DHM', 'Diploma Of Hotel Management', 1, 1, 'ra'),
('uou', 'M.TECH', 'Master Of Technology', 2, 1, 'ra'),
('uou', 'MBA', 'Master of Business Administration', 2, 1, 'ra'),
('uou', 'MCA', 'Master of Computer Application', 2, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_address`
--

CREATE TABLE `faculty_address` (
  `faculty_address_id` int(11) NOT NULL,
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
  `faculty_contact_id` int(11) NOT NULL,
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
  `faculty_personal_id` int(11) NOT NULL,
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
  `faculty_profile_id` int(11) NOT NULL,
  `qualification_id` varchar(15) NOT NULL,
  `teacher_experience` int(3) NOT NULL,
  `date_of_joining` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_type`
--

CREATE TABLE `form_type` (
  `form_type_id` int(11) NOT NULL,
  `form_type_name` varchar(150) NOT NULL,
  `icon` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_type`
--

INSERT INTO `form_type` (`form_type_id`, `form_type_name`, `icon`, `status`, `username`) VALUES
(1, 'Add  Card Teacher ID', '', 1, 'ra'),
(2, 'Add  card Student ID', '', 1, 'ra'),
(3, 'Add Course', '', 1, 'ra'),
(4, 'Add Room', '', 1, 'ra'),
(5, 'Add Department', '', 1, 'ra'),
(6, 'Promoted Class', '', 1, 'ra'),
(7, 'Add Admin', '', 1, 'ra'),
(8, 'Add Subject', '', 1, 'ra'),
(9, 'Add Session', '', 1, 'ra'),
(10, 'Add Batch', '', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lecture_id` int(3) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `unit` int(3) NOT NULL,
  `topic` text NOT NULL,
  `no_of_lecture` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `faculty_id`, `add_class_id`, `unit`, `topic`, `no_of_lecture`, `status`, `username`) VALUES
(1, '', 24, 0, '						', 0, 1, 'ra'),
(4, '121', 25, 1, '					aijdciiccocvbfvvbj 	', 1, 1, 'ra'),
(5, '121', 26, 1, '					aijdciiccocvbfvvbj 	', 1, 1, 'ra'),
(6, '121', 25, 1, 'iugaxhuihiclhghcygzbgcefkcfjnkjggnkgngfxnyuh', 1, 1, 'ra'),
(7, '121', 26, 1, '		fdzcz				', 1, 1, 'ra'),
(8, '121', 25, 1, '			iioiuuuiuyg			', 1, 1, 'ra'),
(9, '121', 26, 1, '			iioiuuuiuyg			', 1, 1, 'ra'),
(10, '121', 26, 5, '				sa		', 5, 1, 'ra'),
(11, '121', 26, 0, '			fdvfz			', 0, 1, 'ra'),
(12, '121', 26, 1, '			zsfC			', 1, 1, 'ra'),
(13, '121', 25, 55, '					dbifzvhrvivf	', 55, 1, 'ra'),
(14, '121', 24, 1, '				GUDYUIAUYFEUGCY		', 1, 1, 'ra'),
(15, '121', 25, 1, '						rtyuiopdf[\'l;likhgjhg', 4, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(20) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `lecture_id` varchar(50) NOT NULL,
  `start_time` time(2) NOT NULL,
  `end_time` time(2) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `no_of_lecture` varchar(50) NOT NULL,
  `lecture_type` varchar(50) NOT NULL,
  `topic` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `add_class_id`, `lecture_id`, `start_time`, `end_time`, `unit`, `no_of_lecture`, `lecture_type`, `topic`, `date`, `status`, `username`) VALUES
(1, 26, '3', '00:00:00.00', '00:00:00.00', '3', '5', '', 'wqyadh', '2019-04-11', 1, 'ra'),
(2, 26, '1', '13:00:00.00', '16:12:00.00', '5', '54', '', 'fsexd', '2019-04-11', 1, 'ra'),
(4, 26, '3', '02:05:00.00', '10:05:00.00', '322', '4', '', 'gddbf ', '2019-04-11', 1, 'ra'),
(5, 26, '5', '00:00:00.00', '00:00:00.00', '33', '32', '', 'sad', '2019-04-11', 1, 'ra'),
(6, 25, '3', '00:00:00.00', '00:00:00.00', '4', '55565', '', 'dcCjCk,cc', '2019-04-11', 1, 'ra'),
(7, 25, '', '00:00:00.00', '00:00:00.00', '', '', 'Arrangement', '', '2019-04-27', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `marks_type`
--

CREATE TABLE `marks_type` (
  `marks_type_id` int(11) NOT NULL,
  `marks_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_type`
--

INSERT INTO `marks_type` (`marks_type_id`, `marks_name`, `status`, `username`) VALUES
(1, 'Internal-Marks-1', 1, 'ra'),
(2, 'Internal-Marks-2', 1, 'ra'),
(3, 'Assignment-Marks', 1, 'ra'),
(4, 'Practical-Marks', 1, 'ra'),
(5, 'Class Marks', 1, 'ra'),
(6, 'Other Activity Marks', 1, 'ra');

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
  `s_no` int(4) NOT NULL,
  `session_id` varchar(20) NOT NULL,
  `session_class_id` varchar(20) NOT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`s_no`, `session_id`, `session_class_id`, `student_id`) VALUES
(1, '2015', '25', '118'),
(2, '2015', '25', '119'),
(3, '2015', '25', '120'),
(4, '2015', '26', '121'),
(5, '2015', '26', '122'),
(6, '2015', '26', '403'),
(7, '2018', '28', '4'),
(8, '2018', '28', '5'),
(9, '2018', '28', '6'),
(10, '2018', '28', '7'),
(11, '2018', '28', '8'),
(12, '2018', '28', '9'),
(13, '2018', '29', '10'),
(14, '2018', '29', '11'),
(15, '2018', '29', '12'),
(16, '2018', '29', '13'),
(17, '2018', '29', '14'),
(18, '2018', '29', '17');

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
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `sidebar_id` int(11) NOT NULL,
  `sidebar_name` varchar(65) NOT NULL,
  `path` text NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1-ActiveNormalMenu, 2-ActiveDashboards, 0-De-activateAllMenus',
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`sidebar_id`, `sidebar_name`, `path`, `status`, `username`) VALUES
(1, 'Dashboard', 'Main/index', 2, 'ra'),
(2, 'Dashboard', 'Main/index', 2, 'ra'),
(3, 'TDashboard', 'Main/index', 2, 'ra'),
(7, 'SNotification', 'Main/index', 2, 'ra'),
(8, 'Notification', 'Main/index', 2, 'ra'),
(9, 'Teacher-Online-Attendance', '#', 1, 'ra'),
(10, 'Student-Attendace-Report', '#', 1, 'ra'),
(11, 'Teacher-Lecture-Plan', '#', 1, 'ra'),
(12, 'Teacher-Lesson-Plan', '#', 1, 'ra'),
(13, 'Teacher-Weekly-Report', '#', 1, 'ra'),
(14, 'Marks', '#', 1, 'ra'),
(15, 'Assignment', '#', 1, 'ra'),
(16, 'Student-Marks', '#', 1, 'ra'),
(17, 'Student-Assignment', '#', 1, 'ra'),
(18, 'Admin-Timetable', '#', 1, 'ra'),
(19, 'Teacher-Timetable', '#', 1, 'ra'),
(20, 'Student-Timetable', '#', 1, 'ra'),
(21, 'More-Pages', '#', 3, 'ra'),
(22, 'Logout', 'Main/logout', 3, 'ra'),
(23, 'Forms', 'Main/form_controller', 2, 'ra');

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
(1, 'ra', 'ed', 'pa', 'ravip8527@gmail.com', '12', '9917604820', '2005-02-25', 'question 1', '1', '1', ''),
(2, 'new1', 'raj', 'joshi', 'ravip@gmail.com', '123', '9917604820', '2019-04-22', 'question 1', '1', '3', ''),
(4, '', '', '', '', '12', '', '0000-00-00', '', '', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `std_academic`
--

CREATE TABLE `std_academic` (
  `std_academic_id` int(11) NOT NULL,
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
  `std_address_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
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
  `std_contact_id` int(11) NOT NULL,
  `std_email` varchar(60) DEFAULT NULL,
  `std_contact` varchar(20) NOT NULL,
  `alternate_contact` int(20) NOT NULL,
  `contact_status` tinyint(1) NOT NULL,
  `email_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `alternate_email` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
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
  `session_id` varchar(50) NOT NULL,
  `course_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_personal`
--

INSERT INTO `std_personal` (`s_no`, `first_name`, `last_name`, `date_of_birth`, `father_name`, `mother_name`, `gender`, `nationality`, `category`, `blood_group`, `status`, `username`, `student_id`, `session_id`, `course_id`) VALUES
(1, 'Aman', 'jangi', '0000-00-00', 'Pramod  kumar jangi', 'Janki   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '1', '2017', 'BCA'),
(2, 'Bhavesh', 'bajetha', '0000-00-00', 'Ramesh c. bajetha', 'Manju bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '2', '2017', 'BCA'),
(3, 'Dev', 'mandal', '0000-00-00', 'Ajay   mandal', 'Purnima   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '3', '2017', 'BCA'),
(4, 'Divisha', 'sharma', '0000-00-00', 'Vivek   sharma', 'Upma   sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '4', '2018', 'BCA'),
(5, 'Gourav', 'farswan', '0000-00-00', 'Surender s. farswan', 'Renu   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '5', '2018', 'BCA'),
(6, 'Jeevika', 'chausali', '0000-00-00', 'Trilochan chausali', 'Lata   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '6', '2018', 'BCA'),
(7, 'Kapil', 'ruwali', '0000-00-00', 'Bhuvan   chand', 'Pushpa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '7', '2018', 'BCA'),
(8, 'Khushi', 'chausali', '0000-00-00', 'Deepanshu   ', 'Meena   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '8', '2018', 'BCA'),
(11, 'Sarthak', 'dosad', '0000-00-00', 'Mahendra s. dosad', 'Lata   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '9', '2018', 'BCA'),
(12, 'Shivansh', 'belwal', '0000-00-00', 'Ramesh c. belwal', 'Beena   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '10', '2018', 'BCA'),
(13, 'Yamini', 'kavidayal', '0000-00-00', 'Pramod chand Kavidayal', 'Hema Kavidayal', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '11', '2018', 'BCA'),
(14, 'Vaishnavi', 'pant', '0000-00-00', 'Vinay kumar pant', 'Deepa   pant', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '12', '2018', 'BCA'),
(15, 'Hariom', 'sharma', '0000-00-00', 'Chandra praksh sharma', 'Prema   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '13', '2018', 'BCA'),
(16, 'Naitik', 'dangwal', '0000-00-00', 'Dinesh c. dangwal', 'Geeta   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '14', '2018', 'BCA'),
(17, 'Narender', 'singh', '0000-00-00', 'Inderjeet   singh', 'Prema   ', 'M', 'hindu', 'OBC', 'A+', 1, 'gopal', '15', '2015', 'BCA'),
(18, 'Vinay', 'ruwali', '0000-00-00', 'Hem chandra ruwali', 'Khasti   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '16', '2015', 'BCA'),
(19, 'Aarti', 'arya', '0000-00-00', 'Khasti   ram', 'Asha   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '17', '2018', 'BCA'),
(20, 'Anushka', 'bhandari', '0000-00-00', 'D. s. bhandari', 'Khasti   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '18', '2019', 'BCA'),
(21, 'Jatin', 'tamta', '0000-00-00', 'Vinod   kumar', 'Sunita   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '19', '2019', 'BCA'),
(22, 'Ayush', 'bohra', '0000-00-00', 'Rajeev   kumar', 'Pushpa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '20', '2019', 'BCA'),
(23, 'Khushi', 'milkani', '0000-00-00', 'Chandra s. milkani', 'Suman   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '21', '2019', 'BCA'),
(24, 'Gourav', 'jangi', '0000-00-00', 'Manoj   jangi', 'Munni   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '22', '2019', 'BCA'),
(25, 'Preeti', 'patni', '0000-00-00', 'Lalit   singh', 'Neelu   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '23', '2019', 'BCA'),
(26, 'Paramjoat', 'singh', '0000-00-00', 'Jaswinder   singh', 'Kamlajeet   kaur', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '24', '2019', 'BCA'),
(27, 'Jagdish', 'bora', '0000-00-00', 'Anand singh bohra', 'Diksha   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '25', '2019', 'BCA'),
(28, 'Raja', 'chousali', '0000-00-00', 'Sanjay   kumar', 'Deepa   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '26', '2019', 'BBA'),
(29, 'Tanishka', 'sharma', '0000-00-00', 'Sushil   kumar', 'Pooja   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '27', '2019', 'BBA'),
(30, 'Harjas', 'singh', '0000-00-00', 'Amandeep   singh', 'Rajwinder   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '28', '2019', 'BBA'),
(31, 'Diksha', 'chousali', '0000-00-00', 'Heera ballabh bhatt', 'Hema   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '29', '2019', 'BBA'),
(32, 'Sourabh', 'bahuguna', '0000-00-00', 'Vipin   bahuguna', 'Hema   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '30', '2018', 'BBA'),
(33, 'Ojaswani', 'tamta', '0000-00-00', 'Surender   tamta', 'Shobha   ', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '31', '2018', 'BBA'),
(34, 'Surajpreet', 'singh', '0000-00-00', 'Malkeet   singh', 'Mukhtiyar   kaur', 'M', 'hindu', 'OBC', 'A+', 1, 'gopal', '32', '2018', 'BBA'),
(35, 'Kartick', 'Chauhan', '0000-00-00', 'Shyam  singh Chauhan', 'Saraswati', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '33', '2018', 'BBA'),
(36, 'Charulata', 'arya', '0000-00-00', 'Lalit  arya', 'Sapna   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '34', '2019', 'BBA'),
(37, 'Deepanshi', 'rana', '0000-00-00', 'Prakash   rana', 'Pushpa   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '35', '2019', 'BBA'),
(38, 'Ishita', 'kulera', '0000-00-00', 'Diwan singh kulera', 'Neeru   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '36', '2019', 'BBA'),
(39, 'Aksh', 'chilwal', '0000-00-00', 'Manoj   chilwal', 'Saroj   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '37', '2018', 'BBA'),
(40, 'Bhupender', 'gounia', '0000-00-00', 'Yash pal singh', 'Kamla   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '38', '2018', 'BBA'),
(41, 'Niharika', 'sharma', '0000-00-00', 'Pradeep   shrma', 'Sunita Sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '39', '2018', 'BBA'),
(42, 'Jiya', 'chousali', '0000-00-00', 'Tara dutt chousali', 'Mamta   chausali', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '40', '2018', 'BBA'),
(43, 'Sagun', 'tamta', '0000-00-00', 'Gajender  tamta', 'Ka   lpna', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '41', '2018', 'BBA'),
(44, 'Kushal', 'paneru', '0000-00-00', 'Lalit   paneru', 'Bhawna   paneru', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '42', '2018', 'BBA'),
(45, 'Shubham', 'chousali', '0000-00-00', 'Ramesh c. chausali', 'Saroj   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '43', '2018', 'BBA'),
(46, 'Hardik', 'mehra', '0000-00-00', 'Balwant  singh mehra', 'Hansi   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '44', '2018', 'BBA'),
(47, 'Prateek', 'raj', '0000-00-00', 'Daya kishan raj', 'Geeta   ', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '45', '2018', 'BBA'),
(48, 'Sourabh', 'mehra', '0000-00-00', 'Mohan s. mehra', 'Meena   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '46', '2018', 'BBA'),
(49, 'Deepanshu', 'joshi', '0000-00-00', 'Deepak chandra joshi', 'Asha   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '47', '2018', 'BBA'),
(50, 'Rohit', 'pargain', '0000-00-00', 'Chander shekar pargain', 'Khasti   pargain', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '48', '2018', 'BBA'),
(51, 'Vanshika', 'arya', '0000-00-00', 'Rakesh   kumar', 'Rekha   ', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '49', '2017', 'BBA'),
(52, 'Deepak', 'bisht', '0000-00-00', 'Laxman singh bisht', 'Uma   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '50', '2017', 'BBA'),
(53, 'Kartick', 'ghangola', '0000-00-00', 'Heera ballabh ghangola', 'Mamta devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '51', '2017', 'BBA'),
(54, 'Manish', 'thuwal', '0000-00-00', 'Bipin c. thuwal', 'Pooja   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '52', '2017', 'BBA'),
(55, 'Devansh', 'pargain', '0000-00-00', 'Mukesh   pargain', 'Pooja   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '53', '2017', 'BBA'),
(56, 'Parth', 'tamta', '0000-00-00', 'Amit   kumar', 'Mamta   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '54', '2017', 'BBA'),
(57, 'Kajal', 'joshi', '0000-00-00', 'Mohan c. joshi', 'Kamla joshi  ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '55', '2018', 'BBA'),
(58, 'Kumkum', 'upreti', '0000-00-00', 'Yogesh   upreti', 'Pooja   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '56', '2018', 'BBA'),
(59, 'Somya', 'chufal', '0000-00-00', 'Deepak s. chufal', 'Pushpa   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '57', '2018', 'MCA'),
(60, 'Rakshita', 'belwal', '0000-00-00', 'Chattarpati   belwal', 'Durga   belwal', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '58', '2018', 'MCA'),
(61, 'Gourav', 'pantola', '0000-00-00', 'Bishan datt pantola', 'Kamla   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '59', '2019', 'MCA'),
(62, 'Himani', 'bisht', '0000-00-00', 'Prakash   singh', 'Prema   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '60', '2017', 'MCA'),
(63, 'Tanuja', 'bughani', '0000-00-00', 'Bipin  bughani', 'Sunita   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '61', '2016', 'MCA'),
(66, 'Aarav', 'jangi', '0000-00-00', 'Pramod kumar jangi', 'Janki   ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '62', '2015', 'MCA'),
(67, 'Asha', 'pargain', '0000-00-00', 'Lalit mohan pargain', 'Geeta   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '63', '2016', 'MCA'),
(69, 'Bhawna', 'matiyali', '0000-00-00', 'Bahadur   singh', 'Nirmala   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '64', '2015', 'MCA'),
(70, 'Bharat', 'matiyali', '0000-00-00', 'Harish s. matiyali', 'Nirmala   matiyali', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '65', '2015', 'MCA'),
(71, 'Arpit', 'matiyali', '0000-00-00', 'Nirmal   singh', 'Kamla   matiyali', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '66', '2016', 'MCA'),
(72, 'Niharika', 'tamta', '0000-00-00', 'Govind   ram', 'Maheswari   devi', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '67', '2017', 'MCA'),
(74, 'Harshita', 'pant', '0000-00-00', 'Mr. lalit mohan pant  ', 'Mrs. tanuja pant  ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '68', '2018', 'MCA'),
(75, 'Lokesh', 'joshi', '0000-00-00', 'Girish chandra joshi  ', 'Beena joshi  ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'gopal', '69', '2015', 'MCA'),
(76, 'Vansh', 'singh', '0000-00-00', 'Mangal singh   ', 'Mamta dhami  ', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '70', '2019', 'MCA'),
(77, 'Gurpreet', 'singh', '0000-00-00', 'Malkeet   singh', 'Mukhtiyar   kaur', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '71', '2018', 'MCA'),
(78, 'Aman', 'arya', '0000-00-00', 'Ramesh c. arya', 'Sunita   ', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '72', '2014', 'MCA'),
(79, 'Rashi', 'pantola', '0000-00-00', 'Manoj   pantola', 'Babita   pantola', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '73', '2022', 'MCA'),
(80, 'Mayank', 'goldar', '0000-00-00', 'Deelip   goldar', 'Renu   goldar', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '74', '2019', 'MCA'),
(81, 'Yogesh', 'bajetha', '0000-00-00', 'Kheem singh bajetha', 'Kavita   bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '75', '2019', 'MCA'),
(82, 'Sourav', 'kumar', '0000-00-00', 'Prakash   chandra', 'Hansa   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '76', '2019', 'MBA'),
(83, 'Garima', 'deopa', '0000-00-00', 'Bishan s. deopa', 'Pushpa   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '77', '2021', 'MBA'),
(84, 'Karan', 'kumar', '0000-00-00', 'Dinesh   prasad', 'Mamta   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '78', '2019', 'MBA'),
(85, 'Nisha', 'bhatt', '0000-00-00', 'Deepak   chandra', 'Keshvi   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '79', '2019', 'MBA'),
(86, 'Ishita', 'rajwar', '0000-00-00', 'Pratap   rajwar', 'Kavita   chand', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '80', '2021', 'MBA'),
(87, 'Deepak', 'bhatt', '0000-00-00', 'Ramesh   bhatt', 'Renu   bhatt', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '81', '2018', 'MBA'),
(88, 'Upasna', 'jangi', '0000-00-00', 'Neeraj   kumar', 'Janki   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '82', '2017', 'MBA'),
(89, 'Mamta', 'rajput', '0000-00-00', 'Jhamman singh ', 'Pushpa   devi', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '83', '2020', 'MBA'),
(90, 'Naman', 'joshi', '0000-00-00', 'Mukesh c. joshi', 'Mamta   joshi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '84', '2019', 'MBA'),
(91, 'Prince', 'bajetha', '0000-00-00', 'Naveen c. bajetha', 'Rekha   bajetha', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '85', '2016', 'MBA'),
(92, 'Dev', 'mehra', '0000-00-00', 'Jagat s. mehra', 'Radha   mehra', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '86', '2019', 'MBA'),
(93, 'Mamta', 'ruwali', '0000-00-00', 'Chandra prakash ruwali', 'Renu   ruwali', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '87', '2021', 'MBA'),
(94, 'Rajat', 'bora', '0000-00-00', 'Nandan s. bora', 'Saroj   bora', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '88', '2015', 'MBA'),
(95, 'Mannya', 'rautela', '0000-00-00', 'Narendra s. rautela', 'Asha   rautela', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '89', '2030', 'MBA'),
(96, 'Aruniya', 'kohli', '0000-00-00', 'Prem   kohli', 'Veena   kohli', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '90', '2016', 'MBA'),
(97, 'Prachi', 'chand', '0000-00-00', 'Gopal   chand', 'Sunita   chand', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '91', '2016', 'MBA'),
(98, 'Piyush', 'sharma', '0000-00-00', 'Lalit   sharma', 'Sona   sharma', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '92', '2016', 'MBA'),
(99, 'Deepanshu', 'gaira', '0000-00-00', 'Dinesh lal', 'Chandra arya', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '93', '2016', 'MBA'),
(100, 'Harsh', 'bajetha', '0000-00-00', 'Kailash c. bajetha', 'Tulsi   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '94', '2016', 'MBA'),
(101, 'Priyanshi', 'gunwant', '0000-00-00', 'Lalit   gunwant', 'Asha   gunwant', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '95', '2016', 'BCA'),
(102, 'Pritiyush', 'tamta', '0000-00-00', 'Surendera   lal', 'Shobha   tamta', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '96', '2016', 'BCA'),
(103, 'Ritika', 'rawat', '0000-00-00', 'Sanjay   rawat', 'Reetu   rawat', 'F', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '97', '2016', 'BCA'),
(104, 'Aniket', 'kumar', '0000-00-00', 'Rakesh   kumar', 'Rekha   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '98', '2016', 'BCA'),
(105, 'Sapna', 'arya', '0000-00-00', 'Suresh   chandra', 'Sunita   arya', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '99', '2016', 'BCA'),
(106, 'Manish', 'singh', '0000-00-00', 'S. s. barthyal', 'Hansi   devi', 'M', 'hindu', 'GENERAL', 'A+', 1, 'nitin', '100', '2019', 'BCA'),
(107, 'Aadarsh', 'kumar', '0000-00-00', 'Madan   ram', 'Vimla   devi', 'M', 'hindu', 'SC', 'A+', 1, 'gopal', '101', '2019', 'BCA'),
(108, 'Pooja', 'joshi', '0000-00-00', 'K. d. joshi', 'Seema   joshi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '102', '2019', 'BCA'),
(109, 'Sabina', 'khatoon', '0000-00-00', 'Guddu   khan', 'Sharina   khatoon', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '103', '2019', 'BCA'),
(111, 'Manvi', 'tamta', '0000-00-00', 'Mahipal   tamta', 'Champta   tamta', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '104', '2019', 'BCA'),
(112, 'Aayush', 'arya', '0000-00-00', 'Laxman   kumar', 'Chandrakala   ', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '105', '2019', 'BCA'),
(114, 'Bhumika', 'bajetha', '0000-00-00', 'Jagdish c. bajetha', 'Kanchan   bajetha', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '106', '2019', 'BCA'),
(115, 'Divyam', 'tamta', '0000-00-00', 'Sanjay   tamta', 'Ganga   devi', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '107', '2019', 'BCA'),
(116, 'Gourav', 'arya', '0000-00-00', 'Pooran c. arya', 'Shobha   arya', 'M', 'hindu', 'SC', 'B+', 1, 'gopal', '108', '2019', 'BBA'),
(117, 'Harshit', 'bughani', '0000-00-00', 'Tara dutt chousali', 'Durga   bughani', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '109', '2019', 'BBA'),
(118, 'Kashish', 'joshi', '0000-00-00', 'Madhawanand   joshi', 'Seeta   joshi', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '110', '2019', 'BBA'),
(119, 'Mukul', 'bughani', '0000-00-00', 'Naveen c. bughani', 'Vimla   bughani', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '111', '2019', 'BBA'),
(120, 'Nikhil', 'mehra', '0000-00-00', 'Bhagat s. mehra', 'Neha   mehra', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '112', '2019', 'BBA'),
(121, 'Piyush', 'pokhriyal', '0000-00-00', 'Dheerendra   pokhriyal', 'Rupa   ', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '113', '2019', 'BBA'),
(122, 'Purva', 'bajetha', '0000-00-00', 'Ramesh c. bajetha', 'Mamta   bajetha', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '114', '2019', 'BBA'),
(123, 'Priyanshu', 'belwal', '0000-00-00', 'Vinod   belwal', 'Asha   belwal', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '115', '2019', 'BBA'),
(124, 'Twinkle', 'khanwal', '0000-00-00', 'Gopal   singh', 'Uma   khanwal', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '116', '2019', 'BBA'),
(125, 'Tanmay', 'kumar', '0000-00-00', 'Arjun   kumar', '   ', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '117', '2019', 'BBA'),
(126, 'Yogita', 'kohli', '0000-00-00', 'Ram   lal', 'Sarita   devi', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '118', '2015', 'BBA'),
(127, 'Himanshi', 'bhatt', '0000-00-00', 'Bhuwan c. bhatt', 'Pushpa   bhatt', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '119', '2015', 'BBA'),
(128, 'Kamini', 'bisht', '0000-00-00', 'Ganesh   bisht', 'Radha   devi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '120', '2015', 'BBA'),
(129, 'Jyoti', 'paliwal', '0000-00-00', 'Keshav   paliwal', 'Mamta   ruwali', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '121', '2015', 'BBA'),
(130, 'Ananya', 'kohli', '0000-00-00', 'Chandan   lal', 'Rekha   devi', 'F', 'hindu', 'SC', 'B+', 1, 'gopal', '122', '2015', 'BBA'),
(131, 'Bhawna', 'bisht', '0000-00-00', 'Bishan s. bisht', 'Champa devi', 'F', 'hindu', 'GENERAL', 'B+', 1, 'gopal', '123', '2017', 'BBA'),
(132, 'Kushankit', 'parki', '0000-00-00', 'Manoj kumar', 'Champa parki', 'F', 'hindu', 'GENERAL', 'B+', 1, 'gopal', '124', '2016', 'BBA'),
(133, 'Neha', 'sanwal', '0000-00-00', 'Surech c. sanwal', 'Lt. pushpa sanwal', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '125', '2014', 'BBA'),
(134, 'Prateek', 'kanyal', '0000-00-00', 'Dinesh s. kanyal', 'Asha   kanyal', 'M', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '126', '2017', 'BBA'),
(135, 'Garima', 'rawat', '0000-00-00', 'Gopal s. rawat', 'Manju   rawat', 'F', 'hindu', 'GENERAL', 'B+', 1, 'nitin', '127', '2016', 'BBA'),
(136, 'Bhumika', 'chilwal', '0000-00-00', 'Manoj   chilwal', 'Saroj   chilwal', 'F', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '128', '2016', 'BBA'),
(138, 'Anshuman', 'summal', '0000-00-00', 'Laxman s. summal', 'Bhawna   summal', 'M', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '129', '2017', 'BBA'),
(139, 'Mayank', 'tamta', '0000-00-00', 'Govind   ram', 'Maheswari   devi', 'F', 'hindu', 'SC', 'O+', 1, 'gopal', '130', '2017', 'BCA'),
(141, 'Ayush', 'rautela', '0000-00-00', 'Devender   rautela', 'Kamla   rautela', 'M', 'hindu', 'GENERAL', 'O+', 1, 'nitin', '131', '2017', 'MCA'),
(142, 'Vikash', 'pokhriya', '0000-00-00', 'Govind   ballabh', 'Geeta   devi', 'M', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '132', '2017', 'MCA'),
(143, 'Diksha', 'mewari', '0000-00-00', 'Rajendar   mewari', 'Bhagwati   devi', 'F', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '133', '2017', 'BBA'),
(144, 'Deepanshu', 'sanwal', '0000-00-00', 'Rajendra Kumar sanwal', 'Pinky   sanwal', 'M', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '134', '2017', 'MBA'),
(145, 'Priyanshi', 'bisht', '0000-00-00', 'Narayan   bisht', 'Diksha   bisht', 'F', 'hindu', 'GENERAL', 'O+', 1, 'gopal', '135', '2018', 'BBA'),
(148, 'NEW', 'arya', '0000-00-00', 'Suresh   chandra', 'Sunita   arya', 'F', 'hindu', 'SC', 'A+', 1, 'gopal', '403', '2015', 'BBA');

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
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `add_marks_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `marks_type_id` int(12) NOT NULL,
  `marks` int(4) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`add_marks_id`, `add_class_id`, `roll_no`, `marks_type_id`, `marks`, `totalmarks`, `status`, `username`) VALUES
(1, 25, 118, 0, 7, 30, 1, 'ra'),
(2, 25, 119, 0, 5, 30, 1, 'ra'),
(3, 25, 120, 0, 6, 30, 1, 'ra'),
(4, 29, 10, 0, 14, 30, 1, 'ra'),
(5, 29, 11, 0, 14, 30, 1, 'ra'),
(6, 29, 12, 0, 14, 30, 1, 'ra'),
(7, 29, 13, 0, 14, 30, 1, 'ra'),
(8, 29, 14, 0, 14, 30, 1, 'ra'),
(9, 29, 17, 0, 14, 30, 1, 'ra'),
(10, 26, 121, 0, 14, 30, 1, 'ra'),
(11, 26, 122, 0, 0, 30, 1, 'ra'),
(12, 26, 403, 0, 0, 30, 1, 'ra'),
(13, 26, 121, 0, 14, 30, 1, 'ra'),
(14, 26, 122, 0, 12, 30, 1, 'ra'),
(15, 26, 403, 0, 15, 30, 1, 'ra'),
(16, 26, 121, 0, 14, 30, 1, 'ra'),
(17, 26, 122, 0, 15, 30, 1, 'ra'),
(18, 26, 403, 0, 4, 30, 1, 'ra'),
(19, 29, 10, 0, 14, 30, 1, 'ra'),
(20, 29, 11, 0, 14, 30, 1, 'ra'),
(21, 29, 12, 0, 9, 30, 1, 'ra'),
(22, 29, 13, 0, 9, 30, 1, 'ra'),
(23, 29, 14, 0, 18, 30, 1, 'ra'),
(24, 29, 17, 0, 7, 30, 1, 'ra'),
(25, 25, 118, 0, 14, 30, 1, 'ra'),
(26, 25, 119, 0, 14, 30, 1, 'ra'),
(27, 25, 120, 0, 14, 30, 1, 'ra'),
(28, 26, 121, 0, 14, 30, 1, 'ra'),
(29, 26, 122, 0, 14, 30, 1, 'ra'),
(30, 26, 403, 0, 14, 30, 1, 'ra'),
(31, 26, 121, 0, 14, 30, 1, 'ra'),
(32, 26, 122, 0, 14, 30, 1, 'ra'),
(33, 26, 403, 0, 14, 30, 1, 'ra'),
(34, 25, 118, 1, 14, 30, 1, 'ra'),
(35, 25, 119, 1, 14, 30, 1, 'ra'),
(36, 25, 120, 1, 14, 30, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `student_time_table`
--

CREATE TABLE `student_time_table` (
  `fid` int(11) NOT NULL,
  `Course_id` varchar(15) NOT NULL,
  `Semester` int(5) NOT NULL,
  `Session` varchar(25) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Choose_File` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_time_table`
--

INSERT INTO `student_time_table` (`fid`, `Course_id`, `Semester`, `Session`, `Section`, `Choose_File`) VALUES
(1, '', 0, '', '', ''),
(2, 'BCA', 1, ' 2011-2012', '', '');

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

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`course_id`, `semester_id`, `subject_id`, `subject_name`, `status`, `username`) VALUES
('M.Tech', '1', '3CS1103', 'Data Structure and Algorithms', 1, 'ra'),
('M.Tech', '1', '3CS1104', 'Computer Architecture', 1, 'ra'),
('M.Tech', '1', '3CS1105', 'Comprehensive Assessment - I', 1, 'ra'),
('M.Tech', '1', '3CS1106', 'Software Engineering', 1, 'ra'),
('M.Tech', '1', '3CS1107', 'Database Systems', 1, 'ra'),
('M.Tech', '1', '3CS1108', 'Advance Computer Networks', 1, 'ra'),
('M.Tech', '2', '3CS1201', 'Research Seminar', 1, 'ra'),
('M.Tech', '2', '3CS1202', 'Real Time Systems', 1, 'ra'),
('M.Tech', '2', '3CS1203', 'Compiler Design', 1, 'ra'),
('M.Tech', '2', '3CS1204', 'Distributed and Parallel Systems', 1, 'ra'),
('M.Tech', '2', '3CS1205', 'Comprehensive Assessment - II', 1, 'ra'),
('M.Tech', '3', '3CS1301', 'Project Part- I', 1, 'ra'),
('M.Tech', '4', '3CS1401', 'Project Part- II', 1, 'ra'),
('M.Tech', '2', '3CS1E01', 'Advance Compiler Design(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E02', 'Simulation and Mathematical Modeling (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E03', 'Optimization Techniques (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E04', 'Software Testing and Quality Assurance (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E05', 'Formal Specification and Verification of Programs(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E06', 'Data Compression (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E07', 'Modern Databases (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E08', 'Mobile Data Management(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E09', 'Distributed Algorithms(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E10', 'Multicore Computing(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E11', 'Service Oriented Architecture(Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E13', 'Cloud Computing (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E14', 'High Performance Architecture (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E15', 'Information Theory and Coding (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E16', 'Wireless Ad Hoc Networks (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E17', 'Wireless Sensor Networks (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E23', 'Data Warehousing and Mining (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E24', 'Web Search and Mining (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E28', 'Artificial Intelligence (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E32', 'Computer Security (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS1E35', 'Machine Learning (Elective)', 1, 'ra'),
('M.Tech', '2', '3CS3105', 'Information and Network Security', 1, 'ra'),
('M.Tech', '2', '3CS3202', 'Information and Retrieval Systems', 1, 'ra'),
('M.Tech', '1', '3SP1104', 'ICT Tools', 1, 'ra'),
('M.Tech', '1', '3SP1123', 'Communication Skills for Engineers', 1, 'ra'),
('M.Tech', '2', '3SP1126', 'Cyber Security', 1, 'ra'),
('M.Tech', '2', '3SP1204', 'Research Methodology', 1, 'ra'),
('M.Tech', '3', '3SP1301', 'Practical Training', 1, 'ra'),
('BBA  ', '1', 'BBA 101 ', 'Business Organization & Management', 1, 'ra'),
('BBA  ', '1', 'BBA 102 ', 'English Language & Communication English', 1, 'ra'),
('BBA  ', '1', 'BBA 103 ', 'Micro Economics', 1, 'ra'),
('BBA  ', '1', 'BBA 104 ', 'Statistics for Business Decisions', 1, 'ra'),
('BBA  ', '1', 'BBA 105 ', 'Basic Accounting', 1, 'ra'),
('BBA  ', '1', 'BBA 106 ', 'Computer Fundamental-Practical', 1, 'ra'),
('BBA  ', '2', 'BBA 201 ', 'Organizational Behavior', 1, 'ra'),
('BBA  ', '2', 'BBA 202 ', 'Business Communication', 1, 'ra'),
('BBA  ', '2', 'BBA 203 ', 'Business Environment', 1, 'ra'),
('BBA  ', '2', 'BBA 204 ', 'Macro Economics', 1, 'ra'),
('BBA  ', '2', 'BBA 205 ', 'Financial Accounting', 1, 'ra'),
('BBA  ', '2', 'BBA 206 ', 'Business Mathematics', 1, 'ra'),
('BBA  ', '2', 'BBA 207 ', 'Comprehensive viva-voce', 1, 'ra'),
('BBA  ', '3', 'BBA 301 ', 'Human Resource Management', 1, 'ra'),
('BBA  ', '3', 'BBA 302 ', 'Business Laws', 1, 'ra'),
('BBA  ', '3', 'BBA 303 ', 'Management Accounting', 1, 'ra'),
('BBA  ', '3', 'BBA 304 ', 'Marketing Management', 1, 'ra'),
('BBA  ', '3', 'BBA 305 ', 'International Business', 1, 'ra'),
('BBA  ', '3', 'BBA 306 ', 'Financial Management', 1, 'ra'),
('BBA  ', '4', 'BBA 401 ', 'Production Management', 1, 'ra'),
('BBA  ', '4', 'BBA 402 ', 'Environmental Science', 1, 'ra'),
('BBA  ', '4', 'BBA 403 ', 'Income Tax Law & Practice', 1, 'ra'),
('BBA  ', '4', 'BBA 404 ', 'Research Methodology', 1, 'ra'),
('BBA  ', '4', 'BBA 405 ', 'Indian Economics', 1, 'ra'),
('BBA  ', '4', 'BBA 406 ', 'e-Commerce', 1, 'ra'),
('BBA  ', '4', 'BBA 407 ', 'Comprehensive viva-voce', 1, 'ra'),
('BBA  ', '5', 'BBA 501 ', 'Business Policy & Strategic Management', 1, 'ra'),
('BBA  ', '5', 'BBA 502', 'International Marketing', 1, 'ra'),
('BBA  ', '5', 'BBA 503 ', 'Industrial Relations & Labour Laws', 1, 'ra'),
('BBA  ', '5', 'BBA 504 ', 'Financial Markets & Institutions', 1, 'ra'),
('BBA  ', '5', 'BBA 505 ', 'Advertising & Sales Management', 1, 'ra'),
('BBA  ', '5', 'BBA 506 ', 'Consumer Behavior', 1, 'ra'),
('BBA  ', '5', 'BBA 507 ', 'Summer Training Project Report', 1, 'ra'),
('BBA  ', '6', 'BBA 601', 'Management Information System', 1, 'ra'),
('BBA  ', '6', 'BBA 602 ', 'Entrepreneurship & Small Business Management', 1, 'ra'),
('BBA  ', '6', 'BBA 603', 'Project Management', 1, 'ra'),
('BBA  ', '6', 'BBA 604 ', 'Rural Marketing', 1, 'ra'),
('BBA  ', '6', 'BBA 605', 'Marketing of Services', 1, 'ra'),
('BBA  ', '6', 'BBA 606 ', 'Project Report', 1, 'ra'),
('BBA  ', '6', 'BBA 607 ', 'Project Viva-Voce', 1, 'ra'),
('BCA', '1', 'BCA101', 'Communicative English ', 1, ''),
('BCA', '1', 'BCA102', 'Basic Mathematics ', 1, ''),
('BCA', '1', 'BCA103', 'Introduction to Computers ', 1, ''),
('BCA', '1', 'BCA104', 'Procedure Oriented Programming ', 1, ''),
('BCA', '1', 'BCA105', 'Financial Accounting ', 1, ''),
('BCA', '1', 'BCA106', 'Lab C Programming ', 1, ''),
('BCA', '2', 'BCA201', 'Discrete Mathematics ', 1, 'ra'),
('BCA', '2', 'BCA202', 'Database Management Systems ', 1, 'ra'),
('BCA', '2', 'BCA203', 'Data Structures  ', 1, 'ra'),
('BCA', '2', 'BCA204', 'Digital Electronics ', 1, 'ra'),
('BCA', '2', 'BCA205', 'Operating System ', 1, 'ra'),
('BCA', '2', 'BCA206', 'Lab Data Structures/DBMS ', 1, 'ra'),
('BCA', '3', 'BCA301', 'Organizational Behaviour  ', 1, 'ra'),
('BCA', '3', 'BCA302', 'Optimization Techniques ', 1, 'ra'),
('BCA', '3', 'BCA303', 'Computer Graphics ', 1, 'ra'),
('BCA', '3', 'BCA304', 'Computer System Architecture ', 1, 'ra'),
('BCA', '3', 'BCA305', 'Object Oriented Programming with C++ ', 1, 'ra'),
('BCA', '3', 'BCA306', 'Lab Computer Graphics in C++/ Optimization Techniques ', 1, 'ra'),
('BCA', '4', 'BCA401', 'Digital Communication and Networks ', 1, 'ra'),
('BCA', '4', 'BCA402', 'Numerical Analysis and Statistical Techniques ', 1, 'ra'),
('BCA', '4', 'BCA403', 'Unix and Shell Programming ', 1, 'ra'),
('BCA', '4', 'BCA404', 'Environmental  Science ', 1, 'ra'),
('BCA', '4', 'BCA405', 'Java Programming ', 1, 'ra'),
('BCA', '4', 'BCA406', 'Lab Java Programming/Unix Programming ', 1, 'ra'),
('BCA', '5', 'BCA501', 'Software Engineering ', 1, 'ra'),
('BCA', '5', 'BCA502', 'Artificial Intelligence ', 1, 'ra'),
('BCA', '5', 'BCA503', '(a)Python (b)C# with .NET Frame work ', 1, 'ra'),
('BCA', '5', 'BCA504', 'Theory of Computation ', 1, 'ra'),
('BCA', '5', 'BCA505', 'Web Technology ', 1, 'ra'),
('BCA', '5', 'BCA506', 'Lab Python/ C#', 1, 'ra'),
('BCA', '6', 'BCA601', 'Project Work ', 1, 'ra'),
('BCH ', '1', 'BCH 101 ', 'English Language & BusinessCommunication', 1, 'ra'),
('BCH ', '1', 'BCH 102 ', 'Business Organization & Management', 1, 'ra'),
('BCH ', '1', 'BCH 103 ', 'Micro Economics', 1, 'ra'),
('BCH ', '1', 'BCH 104 ', 'Financial Accounting', 1, 'ra'),
('BCH ', '1', 'BCH 105 ', 'Comprehensive Viva- Voce', 1, 'ra'),
('BCH ', '2', 'BCH 201 ', 'Business Environment', 1, 'ra'),
('BCH ', '2', 'BCH 202 ', 'Business Regulatory Framework', 1, 'ra'),
('BCH ', '2', 'BCH 203 ', 'Business Mathematics', 1, 'ra'),
('BCH ', '2', 'BCH 204 ', 'Cost Accounting', 1, 'ra'),
('BCH ', '2', 'BCH 205 ', 'Comprehensive Viva- Voce', 1, 'ra'),
('BCH ', '3', 'BCH 301 ', 'Management Accounting', 1, 'ra'),
('BCH ', '3', 'BCH 302 ', 'Corporate Legal Framework', 1, 'ra'),
('BCH ', '3', 'BCH 303', 'Business Policy and Strategic Management', 1, 'ra'),
('BCH ', '3', 'BCH 304 ', 'Business Research Methods', 1, 'ra'),
('BCH ', '3', 'BCH 305 ', 'Comprehensive Viva- Voce', 1, 'ra'),
('BCH ', '4', 'BCH 401 ', 'Production Management', 1, 'ra'),
('BCH ', '4', 'BCH 402 ', 'Financial Management', 1, 'ra'),
('BCH ', '4', 'BCH 403 ', 'Marketing Management', 1, 'ra'),
('BCH ', '4', 'BCH 404 ', 'Computer Applications in Business', 1, 'ra'),
('BCH ', '4', 'BCH 405 ', 'Comprehensive Viva- Voce', 1, 'ra'),
('BCH ', '5', 'BCH 501 ', 'Income Tax Law & Accounts', 1, 'ra'),
('BCH ', '5', 'BCH 502 ', 'International Business', 1, 'ra'),
('BCH ', '5', 'BCH 503 ', 'Corporate Accounting', 1, 'ra'),
('BCH ', '5', 'BCH 504 ', 'Auditing', 1, 'ra'),
('BCH ', '5', 'BCH 505 ', 'Comprehensive Viva- Voce', 1, 'ra'),
('BCH ', '6', 'BCH 601', 'Business Ethics & Social Responsibility', 1, 'ra'),
('BCH ', '6', 'BCH 602 ', 'Entrepreneurship & Small Business Management', 1, 'ra'),
('BCH ', '6', 'BCH 603', 'Project Report & Viva-Voce', 1, 'ra'),
('BHM ', '4', 'BEGE-103', 'Communication Skill in English', 1, 'ra'),
('BHM ', '1', 'BHM 105', 'Application of Computers', 1, 'ra'),
('BHM ', '1', 'BHM 106', 'Hotel Engineering', 1, 'ra'),
('BHM ', '2', 'BHM 108', 'Accountancy', 1, 'ra'),
('BHM ', '2', 'BHM 109', 'Communication', 1, 'ra'),
('BHM ', '1', 'BHM 111', 'Foundation Course in Food Production - I', 1, 'ra'),
('BHM ', '1', 'BHM 112', 'Foundation Course in Food & Beverage Service - I', 1, 'ra'),
('BHM ', '1', 'BHM 113', 'Foundation Course in Front Office - I', 1, 'ra'),
('BHM ', '1', 'BHM 114', 'Foundation Course in Accommodation Operations-I', 1, 'ra'),
('BHM ', '1', 'BHM 116', 'Nutrition', 1, 'ra'),
('BHM ', '2', 'BHM 117', 'Principal of Food Science', 1, 'ra'),
('BHM ', '2', 'bHM 151', 'Foundation Course in Food Production - II', 1, 'ra'),
('BHM ', '2', 'BHM 152', 'Foundation Course in F & B Service - II', 1, 'ra'),
('BHM ', '2', 'BHM 153', 'Foundation Course in Front Office - II', 1, 'ra'),
('BHM ', '2', 'BHM 154', 'Foundation Course in Accommodation Operation-II', 1, 'ra'),
('BHM ', '4', 'BHM 201', 'Food Production Operations', 1, 'ra'),
('BHM ', '4', 'BHM 202', 'Food & Beverage Service Operations', 1, 'ra'),
('BHM ', '4', 'BHM 203', 'Front Office Operations', 1, 'ra'),
('BHM ', '4', 'BHM 204', 'Accommodation Operations', 1, 'ra'),
('BHM ', '4', 'BHM 205', 'Food & Beverage Controls', 1, 'ra'),
('BHM ', '4', 'BHM 206', 'Hotel Accountancy', 1, 'ra'),
('BHM ', '4', 'BHM 207', 'Food Safety & Quality', 1, 'ra'),
('BHM ', '3', 'BHM 208', 'Industrial Training', 1, 'ra'),
('BHM ', '6', 'BHM 305', 'Food & Beverage Management', 1, 'ra'),
('BHM ', '6', 'BHM 306', 'Facility Planning', 1, 'ra'),
('BHM ', '5', 'BHM 307', 'Financial Management', 1, 'ra'),
('BHM ', '5', 'BHM 308', 'Strategic Management', 1, 'ra'),
('BHM ', '5', 'BHM 309', 'Research Project', 1, 'ra'),
('BHM ', '5', 'BHM 310', 'Special topics / Guest speakers', 1, 'ra'),
('BHM ', '5', 'BHM 311', 'Advance Food Production Operation-I', 1, 'ra'),
('BHM ', '5', 'BHM 312', 'Advance Food & Beverage Operation-I', 1, 'ra'),
('BHM ', '5', 'BHM 313', 'Front Office ?Management-I', 1, 'ra'),
('BHM ', '5', 'BHM 314', 'Accommodation Management-I', 1, 'ra'),
('BHM ', '6', 'BHM 351', 'Advance Food Production Operation-II', 1, 'ra'),
('BHM ', '6', 'BHM 352', 'Advance Food & Beverage Operation-II', 1, 'ra'),
('BHM ', '6', 'BHM 353', 'Front Office ?Management-II', 1, 'ra'),
('BHM ', '6', 'BHM 354', 'Accommodation Management-II', 1, 'ra'),
('B.Tech', '1', 'CE104', 'Computer Programming', 1, 'ra'),
('B.Tech', '2', 'CE105', 'Introduction to Computer Science and Engineering', 1, 'ra'),
('B.Tech', '3', 'CE301', 'Digital Systems', 1, 'ra'),
('B.Tech', '3', 'CE302', 'Object Oriented Programming', 1, 'ra'),
('B.Tech', '3', 'CE303', 'Mathematical foundation of Computer Science', 1, 'ra'),
('B.Tech', '4', 'CE401', 'Data Communication', 1, 'ra'),
('B.Tech', '4', 'CE402', 'Computer Organization', 1, 'ra'),
('B.Tech', '4', 'CE403', 'Data Structures', 1, 'ra'),
('B.Tech', '4', 'CE404', 'Seminar', 1, 'ra'),
('B.Tech', '4', 'CE405', 'Mini Project - I', 1, 'ra'),
('B.Tech', '4', 'CE406', 'Computer Peripherals Workshop', 1, 'ra'),
('B.Tech', '5', 'CE501', 'Theory of Computation', 1, 'ra'),
('B.Tech', '5', 'CE502', 'Database Management Systems', 1, 'ra'),
('B.Tech', '5', 'CE503', 'Computer Networks', 1, 'ra'),
('B.Tech', '5', 'CE504', 'Operating Systems', 1, 'ra'),
('B.Tech', '5', 'CE505', 'Mini Project- II', 1, 'ra'),
('B.Tech', '6', 'CE601', 'Design and Analysis of Algorithms', 1, 'ra'),
('B.Tech', '6', 'CE602', 'Mini Project- III', 1, 'ra'),
('B.Tech', '6', 'CE611', '.net Technologies (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE613', 'IT Industry Management (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE621', 'Java Technologies (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE623', 'Machine Learning (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE631', 'Objective C Programming (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE633', 'Data Mining (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE64', 'University Elective', 1, 'ra'),
('B.Tech', '6', 'CE641', 'Embedded C Programming (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE643', 'Parallel and Distributed computing (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE651', 'LAMP Technologies (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE653', 'Advanced Data Structures (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE661', 'Mobile Applications Development Technologies (Elective I)', 1, 'ra'),
('B.Tech', '6', 'CE663', 'Natural Language Processing (Elective III)', 1, 'ra'),
('B.Tech', '6', 'CE671', 'Internet of Things(Elective 1)', 1, 'ra'),
('B.Tech', '7', 'CE701', 'Interfacing with Microprocessor', 1, 'ra'),
('B.Tech', '7', 'CE702', 'Minor Project', 1, 'ra'),
('B.Tech', '7', 'CE703', 'Open source development lab', 1, 'ra'),
('B.Tech', '8', 'CE801', 'Major Project', 1, 'ra'),
('B.Tech', '1', 'CL103', 'Environmental Studies', 1, 'ra'),
('B.Tech', '1', 'CY102', 'Chemistry', 1, 'ra'),
('B.Tech', '3', 'EC321', 'Basic Electronics', 1, 'ra'),
('B.Tech', '2', 'EE103', 'Elements of Electrical and Electronics Engineering.', 1, 'ra'),
('B.Tech', '2', 'EE104', 'Electrical Workshop', 1, 'ra'),
('B.Tech', '1', 'HS101B', 'English Communication', 1, 'ra'),
('B.Tech', '5', 'IT502', 'Web designing', 1, 'ra'),
('B.Tech', '6', 'IT601', 'Software Engineering', 1, 'ra'),
('B.Tech', '6', 'IT612', 'Advanced Computer Networks (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT622', 'Machine Human Interface (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT632', 'Computer Graphics and Visualization (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT642', 'Main Frame Systems (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT652', 'Network Security and Encryption (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT662', 'Cloud Computing (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT682', 'Business Analysis and Optimization (Elective II)', 1, 'ra'),
('B.Tech', '6', 'IT692', 'Software Testing (Elective II)', 1, 'ra'),
('B.Tech', '7', 'IT702', 'Information Retrieval System (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT714', 'Database Administration(Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT724', 'Artificial Intelligence', 1, 'ra'),
('B.Tech', '7', 'IT734', 'System administration(Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT744', 'Digital Image Processing(Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT754', 'Wireless Networks (Elective IV)', 1, 'ra'),
('B.Tech', '6', 'IT764', 'System Software (Elective I)', 1, 'ra'),
('B.Tech', '7', 'IT784', 'Data Compression(ElectiveIV)', 1, 'ra'),
('B.Tech', '7', 'IT794', 'Compiler Construction', 1, 'ra'),
('B.Tech', '7', 'IT7A4', 'Network programming (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT7B4', 'Web security (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT7C4', 'Big data analytics (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT7D4', 'Agile Software Development (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT7E4', 'Secure software engineering (Elective IV)', 1, 'ra'),
('B.Tech', '7', 'IT7F4', 'Deep Learning (Elective-IV)', 1, 'ra'),
('B.Tech', '1', 'MA102', 'Calculus and Differential Equations', 1, 'ra'),
('B.Tech', '2', 'MA202', 'Linear Algebra', 1, 'ra'),
('B.Tech', '3', 'MA306', 'Applied Mathematics.', 1, 'ra'),
('B.Tech', '4', 'MA403', 'Probability Statistics and Numerical Analysis', 1, 'ra'),
('MBA', '1', 'MBA 101', 'Management Concepts', 1, 'ra'),
('MBA', '1', 'MBA 102', 'Business Environment', 1, 'ra'),
('MBA', '1', 'MBA 103', 'Computer Applications in Management', 1, 'ra'),
('MBA', '1', 'MBA 104', 'Accounting for Managers', 1, 'ra'),
('MBA', '1', 'MBA 105', 'Business Communications', 1, 'ra'),
('MBA', '2', 'MBA 201', 'Managerial Economics', 1, 'ra'),
('MBA', '2', 'MBA 202', 'Business Statistics', 1, 'ra'),
('MBA', '2', 'MBA 203', 'Indian Ethos and Management', 1, 'ra'),
('MBA', '2', 'MBA 204', 'Business Laws', 1, 'ra'),
('MBA', '2', 'MBA 205', 'Organization Behaviour', 1, 'ra'),
('MBA', '3', 'MBA 301', 'Management Information Systems', 1, 'ra'),
('MBA', '3', 'MBA 302', 'Financial Management', 1, 'ra'),
('MBA', '3', 'MBA 303', 'Marketing Management', 1, 'ra'),
('MBA', '3', 'MBA 304', 'Human Resource Management', 1, 'ra'),
('MBA', '3', 'MBA 305', 'Production Management', 1, 'ra'),
('MBA', '4', 'MBA 401', 'Operation Research', 1, 'ra'),
('MBA', '4', 'MBA 402', 'Business Research Methodology', 1, 'ra'),
('MBA', '4', 'MBA 403', 'Project Management', 1, 'ra'),
('MBA', '4', 'MBA 404', 'Strategic Management', 1, 'ra'),
('MBA', '4', 'MBA 405', 'Consumer Behaviour', 1, 'ra'),
('MBA', '5', 'MBA 501', 'Summer Internship', 1, 'ra'),
('MBA', '5', 'MBA 502', 'International Trade and Business', 1, 'ra'),
('MBA', '5', 'MBA 503', 'Cross-cultural and Global Management', 1, 'ra'),
('MBA', '5', 'MBA 504', 'Total Quality Management', 1, 'ra'),
('MBA', '5', 'MBA 505', 'Project and Project based viva-voce', 1, 'ra'),
('MBA', '6', 'MBA 601', 'Entrepreneurship', 1, 'ra'),
('MBA', '6', 'MBA 602', 'Training and Development', 1, 'ra'),
('MBA', '6', 'MBA 603', 'Management of Financial Services', 1, 'ra'),
('MBA', '6', 'MBA 604', 'Planning and Managing Retail Business', 1, 'ra'),
('MBA', '6', 'MBA 605', 'Comprehensive Viva-voce', 1, 'ra'),
('B.Tech', '1', 'ME103', 'Engineering Graphics', 1, 'ra'),
('B.Tech', '2', 'ME104', 'Mechanical Workshop', 1, 'ra'),
('B.Tech', '2', 'PY103', 'Physics', 1, 'ra'),
('B.Tech', '2', 'SP103', 'Design Thinking', 1, 'ra'),
('B.Tech', '1', 'SP104', 'Law and Engineering', 1, 'ra'),
('B.Tech', '1', 'SP105', 'ICT Tools and Cyber Security', 1, 'ra'),
('B.Tech', '4', 'SP341', 'Ethics & Values', 1, 'ra'),
('B.Tech', '3', 'SP343', 'Entrepreneurship', 1, 'ra'),
('B.Tech', '3', 'SP344', 'Community Services', 1, 'ra'),
('B.Tech', '5', 'SP501', 'Fractional Course', 1, 'ra'),
('B.Tech', '6', 'SP601', 'Capstone Course ( Computer Engineering)', 1, 'ra'),
('B.Tech', '7', 'SP701', 'Practical Training', 1, 'ra'),
('B.Tech', '4', 'SS341', 'Economics For Engineers', 1, 'ra'),
('B.Tech', '3', 'SS342', 'ICT Tools and Security', 1, 'ra'),
('B.Tech', '6', 'SS561.', 'Creativity and Innovation.', 1, 'ra'),
('B.Tech', '5', 'SS562', 'Law for Engineers', 1, 'ra'),
('B.Tech', '7', 'SS701', 'Organizational Behaviour', 1, 'ra'),
('BHM ', '2', 'TS-01', 'Foundation Course in Tourism', 1, 'ra'),
('BHM ', '4', 'TS-03', 'Management in Tourism', 1, 'ra'),
('BHM ', '5', 'TS-06', 'Tourism Marketing', 1, 'ra'),
('BHM ', '4', 'TS-07', 'Human Resource Management', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sidebar`
--

CREATE TABLE `sub_sidebar` (
  `sub_sidebar_id` int(11) NOT NULL,
  `sidebar_id` int(11) NOT NULL,
  `sub_sidebar_name` varchar(150) NOT NULL,
  `path` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_sidebar`
--

INSERT INTO `sub_sidebar` (`sub_sidebar_id`, `sidebar_id`, `sub_sidebar_name`, `path`, `status`, `usename`) VALUES
(1, 9, 'Take-Attendance', 'Main/attendance_class_controller', 1, 'ra'),
(2, 9, 'View-Consolidate', 'Main/attendance_report_student_controller', 1, 'ra'),
(3, 9, 'View-Daywise', 'Main/attendance_view_controller', 1, 'ra'),
(4, 9, 'View-Total', 'Main/attendance_report_student_controller', 1, 'ra'),
(5, 10, 'View-Consolidate', 'Main/attendance_report_student_controller', 1, 'ra'),
(6, 10, 'View-Daywise', 'Main/attendance_report_student_controller', 1, 'ra'),
(7, 10, 'View-Total', 'Main/attendance_report_student_controller', 1, 'ra'),
(8, 14, 'Edit', 'test/index', 1, 'ra'),
(9, 14, 'View', 'Test/viewmarks', 1, 'ra'),
(10, 15, 'Given-Assignment', 'assignmentcontroller/index', 1, 'ra'),
(11, 15, 'View-Assignment', 'givenassignmentcontroller/index', 1, 'ra'),
(12, 15, 'Check-Assignment', 'check_assignment_controller/index', 1, 'ra'),
(13, 15, 'View-Check-Assignment', 'update_assignment_controller/index', 1, 'ra'),
(14, 16, 'View', 'Check_assign_report_controller/marks1', 1, 'ra'),
(15, 17, 'View-Assignment', 'assign_report_controller/index', 1, 'ra'),
(16, 17, 'View-Checked-Assignment', 'check_assign_report_controller/index', 1, 'ra'),
(17, 18, 'Edit-Timetable', 'nitin/index', 1, 'ra'),
(18, 18, 'View-Timetable', 'viewtimetablecontroller/index', 1, 'ra'),
(19, 19, 'Edit-Timetable', 'studenttimetableeditcontroller/index', 1, 'ra'),
(20, 19, 'View-Timetable', 'studenttimetableviewcontroller/index', 1, 'ra'),
(21, 20, 'View-Timetable', 'studenttimetableviewcontroller/index', 1, 'ra'),
(22, 11, 'Edit', 'Edit_controller/index', 1, 'ra'),
(23, 11, 'View', 'Edit_controller/view_lecture_div', 1, 'ra'),
(24, 12, 'Edit', 'Lessonedit_controller/index', 1, 'ra'),
(25, 12, 'View', 'Lessonview_controller/index', 1, 'ra'),
(26, 13, 'Edit', 'Weeklyedit_controller/index', 1, 'ra'),
(27, 13, 'View', 'Weeklyview_controller/index', 1, 'ra');

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
-- Table structure for table `time_table_edit`
--

CREATE TABLE `time_table_edit` (
  `tid` int(11) NOT NULL,
  `Day` varchar(15) NOT NULL,
  `Course_id` int(50) NOT NULL,
  `Semester` int(3) NOT NULL,
  `Section` varchar(3) NOT NULL,
  `Subject_id` varchar(15) NOT NULL,
  `Room` int(8) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Session` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table_edit`
--

INSERT INTO `time_table_edit` (`tid`, `Day`, `Course_id`, `Semester`, `Section`, `Subject_id`, `Room`, `Time`, `Session`) VALUES
(2, 'Monday', 0, 1, 'A', 'nm', 45, '09_00_09_50', ' 2010-2011');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `status`, `username`) VALUES
(1, 'Admin', 1, 'ra'),
(2, 'Teacher', 1, 'ra'),
(3, 'Student', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `users_menu`
--

CREATE TABLE `users_menu` (
  `users_menu_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `sidebar_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_menu`
--

INSERT INTO `users_menu` (`users_menu_id`, `users_id`, `sidebar_id`, `status`, `username`) VALUES
(1, 1, 1, 1, 'ra'),
(2, 1, 2, 1, 'ra'),
(3, 1, 3, 1, 'ra'),
(4, 1, 7, 1, 'ra'),
(5, 1, 8, 1, 'ra'),
(6, 1, 9, 1, 'ra'),
(7, 1, 10, 1, 'ra'),
(8, 1, 11, 1, 'ra'),
(9, 1, 12, 1, 'ra'),
(10, 1, 13, 1, 'ra'),
(11, 1, 14, 1, 'ra'),
(12, 1, 15, 1, 'ra'),
(13, 1, 16, 1, 'ra'),
(14, 1, 17, 1, 'ra'),
(15, 1, 18, 1, 'ra'),
(16, 1, 19, 1, 'ra'),
(17, 1, 20, 1, 'ra'),
(18, 2, 3, 1, 'ra'),
(19, 2, 8, 1, 'ra'),
(20, 2, 9, 1, 'ra'),
(21, 2, 11, 1, 'ra'),
(22, 2, 12, 1, 'ra'),
(23, 2, 13, 1, 'ra'),
(24, 2, 14, 1, 'ra'),
(25, 2, 15, 1, 'ra'),
(26, 2, 19, 1, 'ra'),
(27, 3, 2, 1, 'ra'),
(28, 3, 7, 1, 'ra'),
(29, 3, 10, 1, 'ra'),
(30, 3, 16, 1, 'ra'),
(31, 3, 17, 1, 'ra'),
(32, 3, 20, 1, 'ra'),
(33, 1, 23, 1, 'ra'),
(34, 1, 21, 1, 'ra'),
(35, 1, 22, 1, 'ra'),
(36, 2, 21, 1, 'ra'),
(37, 2, 22, 1, 'ra'),
(38, 3, 21, 1, 'ra'),
(39, 3, 22, 1, 'ra'),
(40, 1, 22, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `add_class_id` int(11) NOT NULL,
  `lectureid` varchar(10) NOT NULL,
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
  ADD PRIMARY KEY (`add_class_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`Assignment_id`);

--
-- Indexes for table `assignment_checker`
--
ALTER TABLE `assignment_checker`
  ADD PRIMARY KEY (`assignment_checker_id`);

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`assign_subject_id`);

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
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty_address`
--
ALTER TABLE `faculty_address`
  ADD PRIMARY KEY (`faculty_address_id`);

--
-- Indexes for table `faculty_contact`
--
ALTER TABLE `faculty_contact`
  ADD PRIMARY KEY (`faculty_contact_id`);

--
-- Indexes for table `faculty_personal`
--
ALTER TABLE `faculty_personal`
  ADD PRIMARY KEY (`faculty_personal_id`),
  ADD UNIQUE KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  ADD PRIMARY KEY (`faculty_profile_id`);

--
-- Indexes for table `form_type`
--
ALTER TABLE `form_type`
  ADD PRIMARY KEY (`form_type_id`);

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
-- Indexes for table `marks_type`
--
ALTER TABLE `marks_type`
  ADD PRIMARY KEY (`marks_type_id`);

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
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`sidebar_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `std_academic`
--
ALTER TABLE `std_academic`
  ADD PRIMARY KEY (`std_academic_id`);

--
-- Indexes for table `std_address`
--
ALTER TABLE `std_address`
  ADD PRIMARY KEY (`std_address_id`);

--
-- Indexes for table `std_contact`
--
ALTER TABLE `std_contact`
  ADD PRIMARY KEY (`std_contact_id`);

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
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`add_marks_id`);

--
-- Indexes for table `student_time_table`
--
ALTER TABLE `student_time_table`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sub_sidebar`
--
ALTER TABLE `sub_sidebar`
  ADD PRIMARY KEY (`sub_sidebar_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- Indexes for table `time_table_edit`
--
ALTER TABLE `time_table_edit`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users_menu`
--
ALTER TABLE `users_menu`
  ADD PRIMARY KEY (`users_menu_id`);

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
  MODIFY `add_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `assignment_checker`
--
ALTER TABLE `assignment_checker`
  MODIFY `assignment_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `assign_subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `attendance_update`
--
ALTER TABLE `attendance_update`
  MODIFY `attendance_update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_address`
--
ALTER TABLE `faculty_address`
  MODIFY `faculty_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_contact`
--
ALTER TABLE `faculty_contact`
  MODIFY `faculty_contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_personal`
--
ALTER TABLE `faculty_personal`
  MODIFY `faculty_personal_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  MODIFY `faculty_profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_type`
--
ALTER TABLE `form_type`
  MODIFY `form_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marks_type`
--
ALTER TABLE `marks_type`
  MODIFY `marks_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `q_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `sidebar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_academic`
--
ALTER TABLE `std_academic`
  MODIFY `std_academic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_address`
--
ALTER TABLE `std_address`
  MODIFY `std_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_contact`
--
ALTER TABLE `std_contact`
  MODIFY `std_contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `std_personal`
--
ALTER TABLE `std_personal`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `studentmarks`
--
ALTER TABLE `studentmarks`
  MODIFY `add_marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `student_time_table`
--
ALTER TABLE `student_time_table`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_sidebar`
--
ALTER TABLE `sub_sidebar`
  MODIFY `sub_sidebar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `time_table_edit`
--
ALTER TABLE `time_table_edit`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_menu`
--
ALTER TABLE `users_menu`
  MODIFY `users_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `week_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
