-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 12:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

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
  `session_id` varchar(25) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `semester_id` varchar(50) NOT NULL,
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

INSERT INTO `add_class` (`add_class_id`, `session_id`, `course_id`, `semester_id`, `section_id`, `date_of_commencement`, `date_of_completion`, `syllabus_pdf`, `username`, `status`) VALUES
(1, '2018', 'BCA', '2', 'A', '2018-02-01', '2018-05-31', '1.pdf', 'ra', 1),
(2, '2018', 'BCA', '2', 'B', '2018-02-01', '2018-05-31', '2.pdf', 'ra', 1),
(3, '2019', 'BCA', '4', 'A', '2018-02-01', '2018-05-31', '3.pdf', 'ra', 1),
(4, '2019', 'BCA', '4', 'B', '2018-02-01', '2018-05-31', '4.pdf', 'ra', 1),
(5, '2019', 'BBA', '3', 'A', '2019-02-01', '2019-05-31', '5.pdf', 'ra', 1),
(6, '2019', 'BBA', '3', 'B', '2019-02-01', '2019-05-31', '6.pdf', 'ra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_father_name` varchar(150) NOT NULL,
  `admin_mother_name` varchar(150) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_births` date NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`admin_id`, `admin_name`, `admin_father_name`, `admin_mother_name`, `contact_no`, `date_of_births`, `email_id`, `status`, `username`) VALUES
(1, 'Ravi Pandey', 'Umesh chandra Pandey', 'Radha pandey', '9917604820', '1998-05-11', 'ravip8527@gmail.com', 1, 'ra');

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
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Assignment_id`, `add_class_id`, `Assignment_no`, `Given_date`, `Submission_date`, `Unit`, `Topic`, `subject_id`, `faculty_id`, `status`, `username`) VALUES
(19, 1, 1, '2019-05-27', '2019-05-29', 1, 'What is ds?', 'BCA203', '2019058', 1, 'ankush12');

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
  `subject_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment_checker`
--

INSERT INTO `assignment_checker` (`assignment_checker_id`, `add_class_id`, `assignment_id`, `roll_no`, `assignment_status`, `checker_date`, `Grade`, `subject_id`, `status`, `username`) VALUES
(18, 1, 1, 2019051, 1, '2019-05-27', 'A', 'BCA203', 1, 'ankush12'),
(19, 1, 1, 20190512, 1, '2019-05-27', 'A', 'BCA203', 1, 'ankush12'),
(20, 1, 1, 2019053, 1, '2019-05-27', 'A', 'BCA203', 1, 'ankush12'),
(21, 1, 1, 2019056, 1, '2019-05-27', 'A', 'BCA203', 1, 'ankush12');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `assign_subject_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_subject`
--

INSERT INTO `assign_subject` (`assign_subject_id`, `subject_id`, `faculty_id`, `session_id`, `add_class_id`, `status`, `username`) VALUES
(1, 'BCA203', 2019058, 2018, 1, 1, 'ra'),
(2, 'BCA206', 2019058, 2018, 2, 1, 'ra'),
(3, 'BCA401', 2019055, 2018, 3, 1, 'ra'),
(4, 'BCA403', 2019057, 2018, 4, 1, 'ra'),
(5, 'BBA 303 ', 2019056, 2019, 5, 1, 'ra'),
(6, 'BBA 303 ', 2019055, 2019, 6, 1, 'ra'),
(7, 'BCA202', 2019056, 2018, 1, 1, 'ra');

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
  `subject_id` varchar(15) NOT NULL,
  `description_if_any` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`add_class_id`, `attendance_id`, `date`, `time`, `roll_no`, `attendance_status`, `username`, `status`, `student_id`, `faculty_id`, `subject_id`, `description_if_any`) VALUES
(1, 13, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 14, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 15, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 16, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 17, '2019-05-19', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 18, '2019-05-19', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 19, '2019-05-19', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 20, '2019-05-19', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 21, '2019-05-20', '02:00:00.000', 121, '1', 'nitin12', 1, '2019051', '2019056', 'BCA202', ''),
(1, 22, '2019-05-20', '02:00:00.000', 121, '1', 'nitin12', 1, '20190512', '2019056', 'BCA202', ''),
(1, 23, '2019-05-20', '02:00:00.000', 121, '1', 'nitin12', 1, '2019053', '2019056', 'BCA202', ''),
(1, 24, '2019-05-20', '02:00:00.000', 121, '1', 'nitin12', 1, '2019056', '2019056', 'BCA202', ''),
(1, 25, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 26, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 27, '2019-05-18', '02:00:00.000', 121, '0', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 28, '2019-05-18', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 29, '2019-05-27', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 30, '2019-05-27', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 31, '2019-05-27', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 32, '2019-05-27', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 33, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 34, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 35, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 36, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(2, 37, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '20190511', '2019058', 'BCA206', ''),
(2, 38, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019052', '2019058', 'BCA206', ''),
(2, 39, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019054', '2019058', 'BCA206', ''),
(2, 40, '2019-05-28', '02:00:00.000', 121, '1', 'ankush12', 1, '2019055', '2019058', 'BCA206', ''),
(1, 42, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 43, '2019-05-30', '02:00:00.000', 121, '0', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 44, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 45, '2019-05-29', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 46, '2019-05-29', '02:00:00.000', 121, '0', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 47, '2019-05-29', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 48, '2019-05-29', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 49, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 50, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 51, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 52, '2019-05-30', '02:00:00.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 57, '2019-06-01', '11:50:38.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 58, '2019-06-01', '11:50:38.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 59, '2019-06-01', '11:50:38.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 60, '2019-06-01', '11:50:38.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', ''),
(1, 61, '2019-06-01', '12:17:21.000', 121, '1', 'ankush12', 1, '2019051', '2019058', 'BCA203', ''),
(1, 62, '2019-06-01', '12:17:21.000', 121, '1', 'ankush12', 1, '20190512', '2019058', 'BCA203', ''),
(1, 63, '2019-06-01', '12:17:21.000', 121, '1', 'ankush12', 1, '2019053', '2019058', 'BCA203', ''),
(1, 64, '2019-06-01', '12:17:21.000', 121, '1', 'ankush12', 1, '2019056', '2019058', 'BCA203', '');

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
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `s_no` int(11) NOT NULL,
  `board_id` varchar(150) NOT NULL,
  `board_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`s_no`, `board_id`, `board_name`) VALUES
(1, 'Andhra Pradesh Board of Secondary Education', 'Andhra Pradesh Board of Secondary Education'),
(2, 'Andhra Pradesh Board of Intermediate Education', 'Andhra Pradesh Board of Intermediate Education'),
(3, 'Andhra Pradesh Open School Society', 'Andhra Pradesh Open School Society'),
(4, 'Board of Higher Secondary Education Delhi', 'Board of Higher Secondary Education Delhi'),
(5, 'Assam Higher Secondary Education Council', 'Assam Higher Secondary Education Council'),
(6, 'Assam sanskrit board', 'Assam sanskrit board'),
(7, 'Assam State Open School', 'Assam State Open School'),
(8, 'Bihar Board of Open Schooling and Examination', 'Bihar Board of Open Schooling and Examination'),
(9, 'Bihar Sanskrit Shiksha Board', 'Bihar Sanskrit Shiksha Board'),
(10, 'Bihar School Examination Board', 'Bihar School Examination Board'),
(11, 'Central Board of Secondary Education, CBSE', 'Central Board of Secondary Education, CBSE'),
(12, 'Uchchatar Madhyamik Shiksha Parishad Under MSMED Act 2006 Koshambi', 'Uchchatar Madhyamik Shiksha Parishad Under MSMED Act 2006 Koshambi'),
(13, 'Chhattisgarh Board of Secondary Education', 'Chhattisgarh Board of Secondary Education'),
(14, 'Council for the Indian School Certificate Examinations, ICSE / ISC', 'Council for the Indian School Certificate Examinations, ICSE / ISC'),
(15, 'Goa Board of Secondary & Higher Secondary Education', 'Goa Board of Secondary & Higher Secondary Education'),
(16, 'Grameen Mukt vidhyalayi shiksha sansthan(GMVSS)[1]', 'Grameen Mukt vidhyalayi shiksha sansthan(GMVSS)[1]'),
(17, 'Gujarat Secondary Education Board', 'Gujarat Secondary Education Board'),
(18, 'Haryana Board of School Education', 'Haryana Board of School Education'),
(19, 'Himachal Pradesh Board of School Education', 'Himachal Pradesh Board of School Education'),
(20, 'Himachal Pradesh State Open School[2]', 'Himachal Pradesh State Open School[2]'),
(21, 'Jammu and Kashmir State Board of School Education', 'Jammu and Kashmir State Board of School Education'),
(22, 'Jammu and Kashmir State Open School[3]', 'Jammu and Kashmir State Open School[3]'),
(23, 'Jharkhand Academic Council[4]', 'Jharkhand Academic Council[4]'),
(24, 'Karnataka Secondary Education Examination Board', 'Karnataka Secondary Education Examination Board'),
(25, 'Kerala Higher Secondary Examination Board', 'Kerala Higher Secondary Examination Board'),
(26, 'Kerala State Open School[5]', 'Kerala State Open School[5]'),
(27, 'Board of Secondary Education, Madhya Pradesh', 'Board of Secondary Education, Madhya Pradesh'),
(28, 'Madhya Pradesh State Open School[6]', 'Madhya Pradesh State Open School[6]'),
(29, 'Maharashtra State Board of Secondary and Higher Secondary Education', 'Maharashtra State Board of Secondary and Higher Secondary Education'),
(30, 'Meghalaya Board of School Education', 'Meghalaya Board of School Education'),
(31, 'Mizoram Board of School Education', 'Mizoram Board of School Education'),
(32, 'Nagaland Board of School Education', 'Nagaland Board of School Education'),
(33, 'National Institute of Open Schooling', 'National Institute of Open Schooling'),
(34, 'Odisha Board of Secondary Education', 'Odisha Board of Secondary Education'),
(35, 'Odisha Council of Higher Secondary Education', 'Odisha Council of Higher Secondary Education'),
(36, 'Punjab School Education Board', 'Punjab School Education Board'),
(37, 'Board of Secondary Education, Rajasthan', 'Board of Secondary Education, Rajasthan'),
(38, 'Rajasthan State Open School[7]', 'Rajasthan State Open School[7]'),
(39, 'Tamil Nadu Board of Secondary Education', 'Tamil Nadu Board of Secondary Education'),
(40, 'Telangana Board of Intermediate Education', 'Telangana Board of Intermediate Education'),
(41, 'Telangana Board of Secondary Education', 'Telangana Board of Secondary Education'),
(42, 'Tripura Board of Secondary Education', 'Tripura Board of Secondary Education'),
(43, 'Board of High School and Intermediate Education Uttar Pradesh', 'Board of High School and Intermediate Education Uttar Pradesh'),
(44, 'Uttarakhand Board of School Education', 'Uttarakhand Board of School Education'),
(45, 'West Bengal Board of Madrasah Education', 'West Bengal Board of Madrasah Education'),
(46, 'West Bengal Board of Primary Education', 'West Bengal Board of Primary Education'),
(47, 'West Bengal Board of Secondary Education', 'West Bengal Board of Secondary Education'),
(48, 'West Bengal Council of Higher Secondary Education', 'West Bengal Council of Higher Secondary Education'),
(49, 'West Bengal Council of Rabindra Open Schooling', 'West Bengal Council of Rabindra Open Schooling'),
(50, 'Madhyamik Shiksha Parishad, Delhi', 'Madhyamik Shiksha Parishad, Delhi');

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
  `address_sign` int(4) NOT NULL,
  `date_of_commencement` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `fusername` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_address`
--

INSERT INTO `faculty_address` (`faculty_address_id`, `address`, `state`, `city`, `pincode`, `address_status`, `status`, `address_sign`, `date_of_commencement`, `username`, `fusername`, `faculty_id`) VALUES
(9, 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, '0000-00-00', 'ra', '', '2019055'),
(10, 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, '0000-00-00', 'ra', '', '2019055'),
(11, 'BK PURAM , BITHORIA NO.1 , LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, '0000-00-00', 'ra', '', '2019056'),
(12, 'BK PURAM , BITHORIA NO.1 , LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, '0000-00-00', 'ra', '', '2019056'),
(13, 'BK PURAM , uchapul', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, '0000-00-00', 'ra', '', '2019057'),
(14, 'BK PURAM , uchapul', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, '0000-00-00', 'ra', '', '2019057'),
(15, 'BK PURAM , ramnager', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, '0000-00-00', 'ra', '', '2019058'),
(16, 'BK PURAM , ramnager', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, '0000-00-00', 'ra', '', '2019058');

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
  `fusername` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `alternate_email` varchar(152) NOT NULL,
  `alternate_contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_contact`
--

INSERT INTO `faculty_contact` (`faculty_contact_id`, `faculty_email`, `email_status`, `faculty_contact`, `faculty_status`, `contact_status`, `status`, `username`, `fusername`, `faculty_id`, `alternate_email`, `alternate_contact`) VALUES
(5, 'naveen@gmail.com', 1, '9294839436', 1, 1, 1, 'ra', 'naveen12', '2019055', 'naveen@gmail.com', '9294839456'),
(6, 'nitin@gmail.com', 1, '9294839436', 1, 1, 1, 'ra', 'nitin12', '2019056', 'nitin@gmail.com', '9294839456'),
(7, 'neetu@gmail.com', 1, '9294839436', 1, 1, 1, 'ra', 'neetu12', '2019057', 'neetu@gmail.com', '9294839456'),
(8, 'ankush@gmail.com', 1, '9294839436', 1, 1, 1, 'ra', 'ankush12', '2019058', 'ankush@gmail.com', '9294839456');

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
  `username` varchar(100) NOT NULL,
  `fusername` varchar(50) NOT NULL,
  `session` year(4) NOT NULL,
  `faculty_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_personal`
--

INSERT INTO `faculty_personal` (`faculty_personal_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `marital_status`, `father_name`, `husband_name`, `nationality`, `category`, `blood_group`, `status`, `username`, `fusername`, `session`, `faculty_id`) VALUES
(5, 'naveen', 'tiwari', '1980-01-02', 'Male', 'Married', 'rajesh tiwari', '', 'Indian', 'GEN', 'A+', 0, 'naveeen12', '', 0000, '2019055'),
(6, 'nitin', 'deepak', '1980-01-11', 'Male', 'Married', 'deepak pant', '', 'Indian', 'GEN', 'A+', 0, 'nitin12', '', 0000, '2019056'),
(7, 'neetu', 'pant', '1980-02-01', 'Male', 'Married', 'harish pant', '', 'Indian', 'GEN', 'O+', 0, 'neetu12', '', 0000, '2019057'),
(8, 'ankush', 'joshi', '1985-03-02', 'Male', 'Married', 'naveen joshi', '', 'Indian', 'GEN', 'B+', 0, 'ankush12', '', 0000, '2019058');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE `faculty_profile` (
  `faculty_profile_id` int(11) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `teacher_experience` int(3) NOT NULL,
  `date_of_joining` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fusername` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `faculty_photo` varchar(150) NOT NULL,
  `faculty_sig` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_profile`
--

INSERT INTO `faculty_profile` (`faculty_profile_id`, `resume`, `teacher_experience`, `date_of_joining`, `status`, `username`, `fusername`, `faculty_id`, `faculty_photo`, `faculty_sig`) VALUES
(5, 'x', 8, '2009-02-02', 1, 'ra', '', '2019055', 'x', 'x'),
(6, 'x', 10, '2005-02-02', 1, 'ra', '', '2019056', 'x', 'x'),
(7, 'x', 10, '2005-02-02', 1, 'ra', '', '2019057', 'x', 'x'),
(8, 'x', 5, '2012-02-04', 1, 'ra', '', '2019058', 'x', 'x');

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
  `subject_id` varchar(50) NOT NULL,
  `unit` int(3) NOT NULL,
  `topic` text NOT NULL,
  `no_of_lecture` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `faculty_id`, `add_class_id`, `subject_id`, `unit`, `topic`, `no_of_lecture`, `status`, `username`) VALUES
(1, '121', 1, 'BCA202', 1, '			ujjdvoclvdc							', 4, 1, 'ra'),
(2, '121', 1, 'BCA203', 1, '			k							', 1, 1, 'ra'),
(3, '2019058', 1, 'BCA203', 4, '				m						', 1, 1, 'ra'),
(4, '2019058', 1, 'BCA203', 1, '				rytugyh						', 2, 1, 'ra'),
(5, '2019058', 1, 'BCA203', 4, '					h					', 2, 1, 'ra'),
(6, '2019058', 1, 'BCA203', 5, '		hgyjkl								', 5, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` int(20) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
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

INSERT INTO `lesson` (`lesson_id`, `add_class_id`, `subject_id`, `faculty_id`, `lecture_id`, `start_time`, `end_time`, `unit`, `no_of_lecture`, `lecture_type`, `topic`, `date`, `status`, `username`) VALUES
(1, 26, '', '', '3', '00:00:00.00', '00:00:00.00', '3', '5', '', 'wqyadh', '2019-04-11', 1, 'ra'),
(2, 26, '', '', '1', '13:00:00.00', '16:12:00.00', '5', '54', '', 'fsexd', '2019-04-11', 1, 'ra'),
(4, 26, '', '', '3', '02:05:00.00', '10:05:00.00', '322', '4', '', 'gddbf ', '2019-04-11', 1, 'ra'),
(5, 26, '', '', '5', '00:00:00.00', '00:00:00.00', '33', '32', '', 'sad', '2019-04-11', 1, 'ra'),
(6, 25, '', '', '3', '00:00:00.00', '00:00:00.00', '4', '55565', '', 'dcCjCk,cc', '2019-04-11', 1, 'ra'),
(7, 25, '', '', '', '00:00:00.00', '00:00:00.00', '', '', 'Arrangement', '', '2019-04-27', 1, 'ra'),
(8, 25, '', '', '', '00:05:00.00', '02:01:00.00', '1', '', 'Arrangement', 'hagfsyuchczhjcbjsxnaugcfzbauefgbzwuns', '2019-05-08', 1, 'ra'),
(9, 35, '', '', '', '01:00:00.00', '01:50:00.00', '1', '', 'Letcure Schedule', 'what is software engineering?and software characterstic', '2019-05-18', 1, 'ra'),
(10, 1, 'BCA203', '2019058', '', '00:05:00.00', '04:05:00.00', '1', '', 'Letcure Schedule', 'iuolkjhyuhikjuhiokhjoj', '2019-05-20', 1, 'ra'),
(13, 1, 'BCA203', '2019058', '', '00:04:00.00', '04:05:00.00', '1', '', 'Extra Lecture Taken', 'fchgyjukj', '2019-05-23', 1, 'ra');

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
  `student_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`s_no`, `session_id`, `session_class_id`, `student_id`, `status`, `username`) VALUES
(49, '2018', '1', '2019051', 1, 'ra'),
(50, '2018', '1', '2019056', 1, 'ra'),
(51, '2018', '1', '2019053', 1, 'ra'),
(52, '2018', '1', '20190512', 1, 'ra'),
(53, '2018', '2', '2019054', 1, 'ra'),
(54, '2018', '2', '2019055', 1, 'ra'),
(55, '2018', '2', '2019052', 1, 'ra'),
(56, '2018', '2', '20190511', 1, 'ra'),
(57, '2019', '3', '2019057', 1, 'ra'),
(58, '2019', '3', '20190510', 1, 'ra'),
(59, '2019', '4', '2019058', 1, 'ra'),
(60, '2019', '4', '2019059', 1, 'ra');

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
(8, 8, 1, 'ra');

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
(2, 'Dashboard', 'Main/indexs', 2, 'ra'),
(3, 'Dashboard', 'Main/indext', 2, 'ra'),
(9, 'Teacher-Online-Attendance', '#', 1, 'ra'),
(10, 'Student-Attendace-Report', '#', 1, 'ra'),
(11, 'Proposed-Lecture-Plan', '#', 1, 'ra'),
(12, 'Actual-Lecture-Plan', '#', 1, 'ra'),
(13, 'Teacher-Weekly-Report', '#', 1, 'ra'),
(14, 'Marks', '#', 1, 'ra'),
(15, 'Assignment', '#', 1, 'ra'),
(16, 'Student-Marks', '#', 1, 'ra'),
(17, 'Student-Assignment', '#', 1, 'ra'),
(19, 'Teacher-Timetable', '#', 1, 'ra'),
(20, 'Student-Timetable', '#', 1, 'ra'),
(21, 'More-Pages', '#', 3, 'ra'),
(23, 'Master Entity', 'Main/form_controller', 2, 'ra'),
(25, ' Add Class Student ', 'Main/Promoted_Class_controller', 2, 'ra'),
(26, 'Upload Notes', 'Main/Upload_controller', 2, 'ra'),
(27, 'Download Notes', 'Main/Download_controller', 2, 'ra'),
(28, 'Student-Attendace-Report', '#', 1, 'ra'),
(30, 'Student-Marks', '#', 1, 'ra'),
(31, 'Admin-Timetable', '#', 1, 'ra'),
(32, 'Logout', 'Main/logout', 3, 'ra'),
(33, 'Registration', '#', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `s_no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `question` longtext NOT NULL,
  `answer` mediumtext NOT NULL,
  `student_id` int(50) NOT NULL,
  `category` varchar(15) NOT NULL,
  `staus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`s_no`, `username`, `password`, `question`, `answer`, `student_id`, `category`, `staus`) VALUES
(1, 'ra', '12', 'question 1', '1', 1, '1', '1'),
(2, 'preeti12', '12', 'question 1', 'gchvchb', 2019053, '3', '1'),
(3, 'ankush12', '12', 'question 1', '2.', 2019058, '2', '1'),
(4, 'nitin12', '12', 'question 1', '1', 2019056, '2', '');

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
  `totalmarks` int(11) NOT NULL,
  `obtainedmarks` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_academic`
--

INSERT INTO `std_academic` (`std_academic_id`, `student_id`, `qualification_status`, `passing_year`, `school`, `board`, `percentage`, `totalmarks`, `obtainedmarks`, `status`, `username`, `fusername`) VALUES
(1, '2019051', '1', 2017, 'Doon public school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(2, '2019051', '2', 2019, 'Doon public school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(3, '2019051', '3', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(4, '2019051', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(5, '2019052', '1', 2017, 'Evergreen school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(6, '2019052', '2', 2019, 'Evergreen school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(7, '2019052', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(8, '2019052', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(9, '2019053', '1', 2017, 'Goverment school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(10, '2019053', '2', 2019, 'Goverment school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(11, '2019053', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(12, '2019053', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(13, '2019054', '1', 2017, 'Goverment school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(14, '2019054', '2', 2019, 'Goverment school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(15, '2019054', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(16, '2019054', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(17, '2019055', '1', 2017, 'Goverment school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(18, '2019055', '2', 2019, 'Goverment school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(19, '2019055', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(20, '2019055', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(21, '2019056', '1', 2017, 'Goverment school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(22, '2019056', '2', 2019, 'Goverment school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(23, '2019056', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(24, '2019056', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(25, '2019057', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(26, '2019057', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(27, '2019057', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(28, '2019057', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(29, '2019058', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(30, '2019058', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(31, '2019058', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(32, '2019058', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(33, '2019059', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(34, '2019059', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(35, '2019059', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(36, '2019059', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(37, '20190510', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(38, '20190510', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(39, '20190510', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(40, '20190510', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(41, '20190511', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(42, '20190511', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(43, '20190511', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(44, '20190511', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(45, '20190512', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(46, '20190512', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(47, '20190512', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(48, '20190512', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(49, '20190513', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(50, '20190513', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(51, '20190513', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(52, '20190513', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(53, '20190514', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(54, '20190514', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(55, '20190514', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(56, '20190514', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(57, '20190515', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(58, '20190515', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(59, '20190515', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(60, '20190515', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(61, '20190516', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(62, '20190516', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(63, '20190516', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(64, '20190516', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(65, '20190517', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(66, '20190517', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(67, '20190517', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(68, '20190517', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', ''),
(69, '20190518', '1', 2017, 'Covent school', 'Central Board o', 82, 500, 406, 1, 'ra', ''),
(70, '20190518', '2', 2019, 'Convent school', 'Central Board o', 100, 500, 500, 1, 'ra', ''),
(71, '20190518', '3', 2019, 'mumbai', 'Amrapali', 100, 500, 500, 1, 'ra', ''),
(72, '20190518', '4', 2019, 'mumbai', 'IIT', 100, 500, 500, 1, 'ra', '');

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
  `address_sign` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `fusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_address`
--

INSERT INTO `std_address` (`std_address_id`, `student_id`, `address`, `state`, `city`, `pincode`, `address_status`, `status`, `address_sign`, `username`, `fusername`) VALUES
(1, '2019051', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(2, '2019051', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(3, '2019052', 'VILL-DUMKA BANGAR BACCHI DHARMA SINGHAL FARM HALDUCHAUR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(4, '2019052', 'VILL-DUMKA BANGAR BACCHI DHARMA SINGHAL FARM HALDUCHAUR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(5, '2019053', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(6, '2019053', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(7, '2019054', 'NEAR TARA TENT HOUSE, RAMNAGAR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(8, '2019054', 'NEAR TARA TENT HOUSE, RAMNAGAR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(9, '2019055', 'NEAR TARA TENT HOUSE, RAMNAGAR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(10, '2019055', 'NEAR TARA TENT HOUSE, RAMNAGAR', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(11, '2019056', 'NEAR TARA TENT HOUSE, pantnagar', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(12, '2019056', 'NEAR TARA TENT HOUSE, pantnagar', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(13, '2019057', 'NEAR TARA TENT HOUSE, LALKUWA', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(14, '2019057', 'NEAR TARA TENT HOUSE, LALKUWA', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(15, '2019058', 'NEAR TARA TENT HOUSE, Haldwani', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(16, '2019058', 'NEAR TARA TENT HOUSE, Haldwani', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(17, '2019059', 'NEAR TARA TENT HOUSE, Haldwani', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(18, '2019059', 'NEAR TARA TENT HOUSE, Haldwani', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(19, '20190510', 'near shiv mandir , nawabi road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(20, '20190510', 'near shiv mandir , nawabi road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(21, '20190511', 'near shiv mandir , uchapul', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(22, '20190511', 'near shiv mandir , uchapul', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(23, '20190512', 'near shiv mandir , pilikoti', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(24, '20190512', 'near shiv mandir , pilikoti', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(25, '20190513', 'near shiv mandir , ramnagar', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(26, '20190513', 'lamachor', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(27, '20190514', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(28, '20190514', 'BK PURAM , BITHORIA NO.1 ,NEAR TARA TENT HOUSE, LALDATH ROAD', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(29, '20190515', 'mukhani road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(30, '20190515', 'mukhani road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(31, '20190516', 'uchapul ', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(32, '20190516', 'uchapul ', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(33, '20190517', 'laldath road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(34, '20190517', 'laldath road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', ''),
(35, '20190518', 'laldath road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 1, 'ra', ''),
(36, '20190518', 'laldath road', 'Uttarakhand', 'HALDWANI', 263139, 1, 0, 2, 'ra', '');

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
  `username` varchar(50) NOT NULL,
  `fusername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_contact`
--

INSERT INTO `std_contact` (`std_contact_id`, `std_email`, `std_contact`, `alternate_contact`, `contact_status`, `email_status`, `status`, `alternate_email`, `student_id`, `username`, `fusername`) VALUES
(1, 'ashu@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'ashu@gmail.com', '2019051', 'ra', ''),
(2, 'ravi@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'ravi@gmail.com', '2019052', 'ra', ''),
(3, 'preeti@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'preeti@gmail.com', '2019053', 'ra', ''),
(4, 'raju@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'raju@gmail.com', '2019054', 'ra', ''),
(5, 'ramesh@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'ramesh@gmail.com', '2019055', 'ra', ''),
(6, 'pooja@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'pooja@gmail.com', '2019056', 'ra', ''),
(7, 'mansi@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'mansi@gmail.com', '2019057', 'ra', ''),
(8, 'rohit@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'rohit@gmail.com', '2019058', 'ra', ''),
(9, 'suraj@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'suraj@gmail.com', '2019059', 'ra', ''),
(10, 'purnima@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'purnima@gmail.com', '20190510', 'ra', ''),
(11, 'sapna@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'sapna@gmail.com', '20190511', 'ra', ''),
(12, 'raj@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'raj@gmail.com', '20190512', 'ra', ''),
(13, 'satyam@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'satyam@gmail.com', '20190513', 'ra', ''),
(14, 'kiran@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'kiran@gmail.com', '20190514', 'ra', ''),
(15, 'poonam@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'poonam@gmail.com', '20190515', 'ra', ''),
(16, 'nikita@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'nikita@gmail.com', '20190516', 'ra', ''),
(17, 'nidhi@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'nidhi@gmail.com', '20190517', 'ra', ''),
(18, 'sakshi@gmail.com', '1234567891', 1234567777, 0, 0, 1, 'sakhshi@gmail.com', '20190518', 'ra', '');

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
  `fusername` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `session_id` varchar(50) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `active_status` int(11) NOT NULL,
  `batch_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_personal`
--

INSERT INTO `std_personal` (`s_no`, `first_name`, `last_name`, `date_of_birth`, `father_name`, `mother_name`, `gender`, `nationality`, `category`, `blood_group`, `status`, `username`, `fusername`, `student_id`, `session_id`, `course_id`, `active_status`, `batch_id`) VALUES
(1, 'Ashu', 'Kushwaha', '2002-05-15', 'surendra prasad', 'binda devi', 'Male', 'Indian', 'OBC', 'O+', 0, 'ashu12', '', '2019051', '2018', 'BCA', 0, 2018),
(2, 'Ravi', 'Pandey', '1998-05-11', 'Dr. pandey', 'Deepa pandey', 'Male', 'Indian', 'GEN', 'A+', 0, 'ravi12', '', '2019052', '2018', 'BCA', 0, 2018),
(3, 'Preeti', 'Kushwaha', '1997-11-04', 'surendra prasad', 'binda devi', 'Female', 'Indian', 'GEN', 'O+', 0, 'preeti12', '', '2019053', '2018', 'BCA', 1, 2018),
(4, 'Raju', 'kumar', '1997-12-13', 'Rajeev   kumar', 'Pushpa ', 'Male', 'Indian', 'GEN', 'O-', 0, 'raju12', '', '2019054', '2018', 'BCA', 0, 2018),
(5, 'Ramesh', 'bajetha', '1997-12-13', 'Ramesh c. bajetha', 'Manju bajetha', 'Male', 'Indian', 'GEN', 'AB+', 0, 'ramesh12', '', '2019055', '2018', 'BCA', 0, 2018),
(6, 'Pooja', 'bohra', '1997-01-12', 'Anand singh bohra', 'Diksha', 'Female', 'Indian', 'GEN', 'AB+', 0, 'pooja12', '', '2019056', '2018', 'BCA', 1, 2018),
(7, 'Mansi', 'singh', '1998-01-12', 'Anand singh ', 'Disha singh', 'Female', 'Indian', 'GEN', 'AB+', 0, 'mansi12', '', '2019057', '2019', 'BCA', 0, 2018),
(8, 'Rohit', 'singh', '1997-01-12', 'Rajesh singh ', 'pooja singh', 'Male', 'Indian', 'GEN', 'O+', 0, 'rohit12', '', '2019058', '2019', 'BCA', 0, 2018),
(9, 'Suraj', 'matiyali', '1997-01-12', 'Harish s. matiyali', 'Nirmala   matiyali', 'Male', 'Indian', 'GEN', 'O+', 0, 'suraj12', '', '2019059', '2019', 'BCA', 0, 2018),
(10, 'Purnima', 'parmar', '1997-11-14', 'rajesh parmar', 'asha parmar', 'Female', 'Indian', 'GEN', 'O+', 0, 'purnima12', '', '20190510', '2019', 'BCA', 0, 2018),
(11, 'Sapna', 'bhatt', '1997-06-03', 'Mahendra bhatt', 'disha bhatt', 'Female', 'Indian', 'GEN', 'B+', 0, 'sapna12', '', '20190511', '2018', 'BCA', 0, 2018),
(12, 'Raj', 'kumar', '1997-06-03', 'Vinod kumar', 'sunita', 'Male', 'Indian', 'GEN', 'B+', 0, 'raj12', '', '20190512', '2018', 'BCA', 1, 2018),
(13, 'Satyam', 'kumar', '1997-06-03', 'Vijay kumar', 'meena', 'Male', 'Indian', 'GEN', 'B+', 0, 'satyam12', '', '20190513', '2019', 'BBA', 0, 2019),
(14, 'kiran', 'Kushwaha', '1996-11-01', 'surendra prasad', 'binda devi', 'Female', 'Indian', 'GEN', 'O+', 0, 'kiran12', '', '20190514', '2019', 'BBA', 0, 2019),
(15, 'poonan', 'pathak', '1997-03-01', 'Nirmal pathak', 'Janki pathak ', 'Female', 'Indian', 'GEN', 'A+', 0, 'poonam12', '', '20190515', '2019', 'BBA', 0, 2019),
(16, 'nikita', 'pant', '1997-03-01', 'harsh pant', 'Janvi pant', 'Female', 'Indian', 'GEN', 'A+', 0, 'nikita12', '', '20190516', '2019', 'BBA', 0, 2019),
(17, 'nidhi', 'dhami', '1997-03-01', 'Mangal dhami ', 'Mamta dhami ', 'Female', 'Indian', 'GEN', 'A+', 0, 'nidhi12', '', '20190517', '2019', 'BBA', 0, 2019),
(18, 'sakshi', 'dhami', '1997-03-01', 'naveen dhami ', 'nirmala dhami ', 'Female', 'Indian', 'GEN', 'A+', 0, 'sakshi12', '', '20190518', '2019', 'BBA', 0, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `add_marks_id` int(11) NOT NULL,
  `add_class_id` int(11) NOT NULL,
  `roll_no` int(10) NOT NULL,
  `marks_type_id` int(12) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `marks` int(4) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`add_marks_id`, `add_class_id`, `roll_no`, `marks_type_id`, `totalmarks`, `marks`, `subject_id`, `faculty_id`, `percentage`, `status`, `username`) VALUES
(171, 1, 2019051, 1, 30, 14, 'BCA203', '2019058', '46.667', 1, 'ankush12'),
(172, 1, 20190512, 1, 30, 15, 'BCA203', '2019058', '50.000', 1, 'ankush12'),
(173, 1, 2019053, 1, 30, 16, 'BCA203', '2019058', '53.333', 1, 'ankush12'),
(174, 1, 2019056, 1, 30, 17, 'BCA203', '2019058', '56.667', 1, 'ankush12'),
(175, 2, 20190511, 1, 30, 28, 'BCA206', '2019058', '93.333', 1, 'ankush12'),
(176, 2, 2019052, 1, 30, 26, 'BCA206', '2019058', '86.667', 1, 'ankush12'),
(177, 2, 2019054, 1, 30, 27, 'BCA206', '2019058', '90.000', 1, 'ankush12'),
(178, 2, 2019055, 1, 30, 28, 'BCA206', '2019058', '93.333', 1, 'ankush12'),
(179, 1, 2019051, 1, 30, 14, 'BCA202', '2019056', '46.667', 1, 'nitin12'),
(180, 1, 20190512, 1, 30, 14, 'BCA202', '2019056', '46.667', 1, 'nitin12'),
(181, 1, 2019053, 1, 30, 14, 'BCA202', '2019056', '46.667', 1, 'nitin12'),
(182, 1, 2019056, 1, 30, 14, 'BCA202', '2019056', '46.667', 1, 'nitin12');

-- --------------------------------------------------------

--
-- Table structure for table `student_photo`
--

CREATE TABLE `student_photo` (
  `student_photo_id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `student_photo` varchar(40) NOT NULL,
  `student_sig` varchar(54) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_photo`
--

INSERT INTO `student_photo` (`student_photo_id`, `student_id`, `student_photo`, `student_sig`, `status`, `username`) VALUES
(1, '2019051', 'x', 'x', 1, 'ra'),
(2, '2019052', 'x', 'x', 1, 'ra'),
(3, '2019053', '3.JPG', '3.jpg', 1, 'ra'),
(4, '2019054', '4.png', '4.png', 1, 'ra'),
(5, '2019055', '5.png', '5.png', 1, 'ra'),
(6, '2019056', '6.png', '6.png', 1, 'ra'),
(7, '2019057', '7.png', '7.png', 1, 'ra'),
(8, '2019058', '8.png', '8.png', 1, 'ra'),
(9, '2019059', '9.png', '9.png', 1, 'ra'),
(10, '20190510', '10.png', '10.png', 1, 'ra'),
(11, '20190511', '11.png', '11.png', 1, 'ra'),
(12, '20190512', '12.png', '12.png', 1, 'ra'),
(13, '20190513', '13.png', '13.png', 1, 'ra'),
(14, '20190514', '14.png', '14.png', 1, 'ra'),
(15, '20190515', '15.png', '15.png', 1, 'ra'),
(16, '20190516', '16.png', '16.png', 1, 'ra'),
(17, '20190517', '17.png', '17.png', 1, 'ra'),
(18, '20190518', '18.png', '18.png', 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `student_time_table`
--

CREATE TABLE `student_time_table` (
  `fid` int(11) NOT NULL,
  `Course_id` varchar(15) NOT NULL,
  `semester_id` int(5) NOT NULL,
  `session_id` varchar(25) NOT NULL,
  `section_id` varchar(5) NOT NULL,
  `Choose_File` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_time_table`
--

INSERT INTO `student_time_table` (`fid`, `Course_id`, `semester_id`, `session_id`, `section_id`, `Choose_File`) VALUES
(1, '', 0, '', '', ''),
(2, 'BCA', 1, ' 2011-2012', '', ''),
(9, 'BCA', 2, '2018', 'A', 0x392e504e47),
(10, 'BCA', 2, '2016', 'A', 0x31302e4a5047);

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
(2, 9, 'View-Consolidate', 'Main/attendance_report_View_Consolidate', 1, 'ra'),
(3, 9, 'View-Daywise', 'Main/attendance_view_controller', 1, 'ra'),
(4, 9, 'View-Total', 'Main/attendance_report_student_controller', 1, 'ra'),
(5, 10, 'View-Consolidate', 'Main/attendance_report_student_controller_student', 1, 'ra'),
(6, 10, 'View-Daywise', 'Main/attendance_report_student_controller_daywise', 1, 'ra'),
(7, 10, 'View-Total', 'Main/attendance_report_student_controller_student2', 1, 'ra'),
(8, 14, 'Edit', 'test/index', 1, 'ra'),
(9, 14, 'View', 'Test/viewmarks', 1, 'ra'),
(10, 15, 'Given-Assignment', 'assignmentcontroller/index', 1, 'ra'),
(11, 15, 'View-Assignment', 'givenassignmentcontroller/index', 1, 'ra'),
(12, 15, 'Check-Assignment', 'check_assignment_controller/index', 1, 'ra'),
(13, 15, 'View-Check-Assignment', 'update_assignment_controller/index', 1, 'ra'),
(14, 16, 'View', 'Check_assign_report_controller/marks1', 1, 'ra'),
(15, 17, 'View-Assignment', 'assign_report_controller/index', 1, 'ra'),
(16, 17, 'View-Checked-Assignment', 'check_assign_report_controller/index', 1, 'ra'),
(17, 31, 'Edit-Timetable', 'Studenttimetableeditcontroller/index', 1, 'ra'),
(18, 31, 'View-Timetable', 'studenttimetableviewcontroller/index', 1, 'ra'),
(19, 19, 'Edit-Timetable', 'Edittimetablecontroller/index', 1, 'ra'),
(20, 19, 'View-Timetable', 'viewtimetablecontroller/index', 1, 'ra'),
(21, 20, 'View-Timetable', 'studenttimetableviewcontroller/index', 1, 'ra'),
(22, 11, 'Edit', 'Edit_controller/index', 1, 'ra'),
(23, 11, 'View', 'Edit_controller/view_lecture_div', 1, 'ra'),
(24, 12, 'Edit', 'Lessonedit_controller/index', 1, 'ra'),
(25, 12, 'View', 'Lessonview_controller/index', 1, 'ra'),
(26, 13, 'Edit', 'Weeklyedit_controller/index', 1, 'ra'),
(27, 13, 'View', 'Weeklyview_controller/index', 1, 'ra'),
(28, 28, 'View-Consolidate', 'Main/attendance_report_student_controller_admin', 1, 'ra'),
(29, 28, 'View-Daywise', 'Main/attendance_report_student_controller1', 1, 'ra'),
(30, 28, 'View-Total', 'Main/attendance_report_student_controller2', 1, 'ra'),
(31, 29, 'View', 'Check_assign_report_controller/marks1', 1, 'ra'),
(32, 30, 'View', 'Check_assign_report_controller/marks1', 1, 'ra'),
(33, 21, 'Logout', 'Main/logout', 1, 'ra'),
(34, 33, 'Student Registration', 'Registrationform_controller/index', 1, 'ra'),
(35, 33, 'Faculty Registration', 'F_registrationform_controller/index1', 1, 'ra');

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
  `Course_id` varchar(50) NOT NULL,
  `Semester` int(3) NOT NULL,
  `Section` varchar(3) NOT NULL,
  `Subject_id` varchar(15) NOT NULL,
  `Room` int(8) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `session_id` varchar(15) NOT NULL,
  `Faculty_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table_edit`
--

INSERT INTO `time_table_edit` (`tid`, `Day`, `Course_id`, `Semester`, `Section`, `Subject_id`, `Room`, `Time`, `session_id`, `Faculty_id`, `username`) VALUES
(7, 'Tuesday', 'BCA', 2, 'A', 'BCA203', 12, '09_00_09_50', '2019', '2019058', 'ankush12'),
(8, 'Monday', 'BCA', 1, 'A', 'BCA102', 12, '10_40_11_30', '2019', '2019058', 'ankush12'),
(9, 'Monday', 'BCA', 3, 'B', 'BCA301', 12, '10_40_11_30', '2019', '2019058', 'ankush12'),
(10, 'Monday', 'BCA', 1, 'A', 'BCA103', 12, '10_40_11_30', '2018', '2019058', 'ankush12'),
(11, 'Monday', 'BCA', 1, 'A', 'BCA102', 12, '09_00_09_50', '2014', '2019058', 'ankush12'),
(12, 'Wednesday', 'BCA', 4, 'B', 'BCA403', 12, '10_40_11_30', '2015', '2019058', 'ankush12'),
(13, 'Tuesday', 'BCA', 2, 'B', 'BCA202', 12, '12_40_01_30', '2015', '2019058', 'ankush12'),
(14, 'Monday', 'BCA', 1, 'A', 'BCA102', 12, '09_50_10_40', '2019', '2019058', 'ankush12'),
(15, 'Tuesday', 'BCA', 2, 'A', 'BCA203', 12, '09_50_10_40', '2015', '2019058', 'ankush12'),
(16, 'Tuesday', 'BCA', 1, 'A', 'BCA102', 55, '10_40_11_30', '2017', '2019058', 'ankush12'),
(17, 'Monday', 'BCA', 1, 'A', 'BCA103', 55, '09_00_09_50', '2015', '2019058', 'ankush12'),
(18, 'Tuesday', 'BCA', 2, 'B', 'BCA201', 12, '09_50_10_40', '2014', '', ''),
(19, 'Monday', 'BCA', 1, 'B', 'BCA201', 12, '09_50_10_40', '2015', '', ''),
(20, 'Tuesday', 'B.SC', 2, 'A', 'AV', 12, '09_00_09_50', '2014', '', ''),
(21, 'Wednesday', 'B.COM', 2, 'A', 'BCA201', 12, '09_00_09_50', '2014', '', ''),
(22, 'Monday', 'BCA', 1, 'A', 'BCA201', 12, '09_00_09_50', '2014', '', '');

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
-- Table structure for table `upload_notes`
--

CREATE TABLE `upload_notes` (
  `notes_id` int(11) NOT NULL,
  `upload_notes` longblob NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `date_notes` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_notes`
--

INSERT INTO `upload_notes` (`notes_id`, `upload_notes`, `subject_id`, `faculty_id`, `date_notes`, `status`, `username`) VALUES
(7, 0x372e706466, 'BCA101', 'ravi', '0000-00-00', 1, ''),
(8, 0x78, 'BCA101', 'ravi', '0000-00-00', 1, ''),
(9, 0x78, 'BCA101', 'ravi', '2019-05-20', 1, ''),
(10, 0x31302e646f6378, 'BCA101', '2019058', '2019-05-24', 1, 'ankush12'),
(11, 0x31312e646f6378, 'BCA203', '2019058', '2019-05-24', 1, 'ankush12');

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
(5, 1, 8, 1, 'ra'),
(15, 1, 18, 1, 'ra'),
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
(38, 3, 21, 1, 'ra'),
(41, 1, 25, 1, 'ra'),
(42, 2, 26, 1, 'ra'),
(43, 3, 27, 1, 'ra'),
(44, 1, 28, 1, 'ra'),
(45, 1, 30, 1, 'ra'),
(46, 1, 31, 1, 'ra'),
(47, 1, 32, 1, 'ra'),
(48, 2, 32, 1, 'ra'),
(49, 3, 32, 1, 'ra'),
(50, 1, 33, 1, 'ra'),
(51, 1, 34, 1, 'ra');

-- --------------------------------------------------------

--
-- Table structure for table `weekly`
--

CREATE TABLE `weekly` (
  `add_class_id` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `lectureid` varchar(10) NOT NULL,
  `lesson_id` varchar(10) NOT NULL,
  `week_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `no_of_lecture_schedule` int(3) NOT NULL,
  `no_of_lost_due_to_holiday` int(3) NOT NULL,
  `arrangement` int(11) NOT NULL,
  `no_of_lost_due_to_cl` int(3) NOT NULL,
  `no_extra_taken` int(3) NOT NULL,
  `no_of_lecture_actual_taken` int(3) NOT NULL,
  `description_of_topic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weekly`
--

INSERT INTO `weekly` (`add_class_id`, `faculty_id`, `subject_id`, `lectureid`, `lesson_id`, `week_id`, `start_date`, `end_date`, `no_of_lecture_schedule`, `no_of_lost_due_to_holiday`, `arrangement`, `no_of_lost_due_to_cl`, `no_extra_taken`, `no_of_lecture_actual_taken`, `description_of_topic`) VALUES
(1, '2019058', 'BCA203', '', '', 5, '2019-05-20', '2019-05-20', 1, 3, 0, 1, 1, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_class`
--
ALTER TABLE `add_class`
  ADD PRIMARY KEY (`add_class_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`s_no`);

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
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`s_no`);

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
-- Indexes for table `std_personal`
--
ALTER TABLE `std_personal`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `studentmarks`
--
ALTER TABLE `studentmarks`
  ADD PRIMARY KEY (`add_marks_id`);

--
-- Indexes for table `student_photo`
--
ALTER TABLE `student_photo`
  ADD PRIMARY KEY (`student_photo_id`);

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
-- Indexes for table `upload_notes`
--
ALTER TABLE `upload_notes`
  ADD PRIMARY KEY (`notes_id`);

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
  MODIFY `add_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `Assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `assignment_checker`
--
ALTER TABLE `assignment_checker`
  MODIFY `assignment_checker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `assign_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `faculty_address`
--
ALTER TABLE `faculty_address`
  MODIFY `faculty_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculty_contact`
--
ALTER TABLE `faculty_contact`
  MODIFY `faculty_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty_personal`
--
ALTER TABLE `faculty_personal`
  MODIFY `faculty_personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty_profile`
--
ALTER TABLE `faculty_profile`
  MODIFY `faculty_profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `form_type`
--
ALTER TABLE `form_type`
  MODIFY `form_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lecture_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lesson_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `s_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `sidebar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_academic`
--
ALTER TABLE `std_academic`
  MODIFY `std_academic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `std_address`
--
ALTER TABLE `std_address`
  MODIFY `std_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `std_contact`
--
ALTER TABLE `std_contact`
  MODIFY `std_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `std_personal`
--
ALTER TABLE `std_personal`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `studentmarks`
--
ALTER TABLE `studentmarks`
  MODIFY `add_marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `student_photo`
--
ALTER TABLE `student_photo`
  MODIFY `student_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student_time_table`
--
ALTER TABLE `student_time_table`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sub_sidebar`
--
ALTER TABLE `sub_sidebar`
  MODIFY `sub_sidebar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `time_table_edit`
--
ALTER TABLE `time_table_edit`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `upload_notes`
--
ALTER TABLE `upload_notes`
  MODIFY `notes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_menu`
--
ALTER TABLE `users_menu`
  MODIFY `users_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `weekly`
--
ALTER TABLE `weekly`
  MODIFY `week_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
