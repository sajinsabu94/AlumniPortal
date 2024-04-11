-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2017 at 04:29 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alumninew`
--
CREATE DATABASE IF NOT EXISTS `alumninew` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `alumninew`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumniacad`
--

CREATE TABLE IF NOT EXISTS `tbl_alumniacad` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `dprt` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `fyear` int(11) NOT NULL,
  `tyear` int(11) NOT NULL,
  `activity` varchar(30) NOT NULL,
  `addinfo` varchar(100) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_alumniacad`
--

INSERT INTO `tbl_alumniacad` (`aid`, `id`, `register_no`, `dprt`, `course`, `fyear`, `tyear`, `activity`, `addinfo`) VALUES
(9, 2001, '320-12952001', '', '', 0, 0, '', ''),
(12, 2004, '320-12952100', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumnicareer`
--

CREATE TABLE IF NOT EXISTS `tbl_alumnicareer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `jobtype` varchar(20) NOT NULL,
  `compname` varchar(30) NOT NULL,
  `desgination` varchar(30) NOT NULL,
  `addinfo` varchar(100) NOT NULL,
  `photo` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_alumnicareer`
--

INSERT INTO `tbl_alumnicareer` (`aid`, `id`, `register_no`, `jobtype`, `compname`, `desgination`, `addinfo`, `photo`) VALUES
(12, 2001, '320-12952001', '', '', '', '', ''),
(15, 2004, '320-12952100', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumnipost`
--

CREATE TABLE IF NOT EXISTS `tbl_alumnipost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `register_no` varchar(30) NOT NULL,
  `postby` varchar(30) NOT NULL,
  `posttitle` varchar(30) NOT NULL,
  `postname` varchar(30) NOT NULL,
  `poston` varchar(20) NOT NULL,
  `postdescrp` varchar(100) NOT NULL,
  `postphoto` varchar(100) CHARACTER SET utf8 NOT NULL,
  `postdate` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobpost`
--

CREATE TABLE IF NOT EXISTS `tbl_jobpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `postby` varchar(30) NOT NULL,
  `jobcode` varchar(20) NOT NULL,
  `jobtitle` varchar(20) NOT NULL,
  `jobtype` varchar(30) NOT NULL,
  `compname` varchar(30) NOT NULL,
  `compaddress` varchar(100) NOT NULL,
  `compsite` varchar(40) NOT NULL,
  `opendate` varchar(20) NOT NULL,
  `closedate` varchar(20) NOT NULL,
  `vacancy` varchar(20) NOT NULL,
  `salaray` varchar(10) NOT NULL,
  `qualif` varchar(30) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `post_date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_jobpost`
--

INSERT INTO `tbl_jobpost` (`id`, `post_id`, `register_no`, `postby`, `jobcode`, `jobtitle`, `jobtype`, `compname`, `compaddress`, `compsite`, `opendate`, `closedate`, `vacancy`, `salaray`, `qualif`, `skill`, `descrip`, `post_date`) VALUES
(6, 5001, '320-12952001', 'Abhijith', 'P-101', 'PHP Programmer', 'Programmer', 'No Tech IT solution', ' TVM,\r\n', 'http://notechit.com', '08/06/2017', '18/06/2017', '50', '15,000', 'B.Sc or BCA', 'PHP, My SQL', 'Should be aware of dreamweaver', '07/Jun/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`aid`, `id`, `register_no`, `username`, `password`, `type`) VALUES
(1, 1001, '123456', 'admin123', 'admin123', 'Admin'),
(13, 2001, '320-12952001', 'abhijithr1994', 'abhijithr123', 'Alumni'),
(10, 3001, '320-15952023', 'sharathmohan123', 'sharathmohan123', 'Student'),
(16, 2004, '320-12952100', 'remesh123', 'remesh123', 'Alumni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` varchar(10) NOT NULL,
  `ques_to` varchar(30) NOT NULL,
  `ques_survey` varchar(200) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`qid`, `ques_id`, `ques_to`, `ques_survey`) VALUES
(1, '1', 'Computer Science', 'an ability to apply knowledge of mathematics, science, and engineering'),
(2, '2', 'Computer Science', 'an ability to identify, formulate and solve engineering problems.'),
(3, '3', 'Computer Science', 'an ability to visualize and work on laboratory and multidisciplinary tasks'),
(4, '4', 'Computer Science', 'demonstrate skills to use modern engineering tools, software and equipments to analyze the problems'),
(5, '5', 'Computer Science', 'an ability to communicate effectively in both verbal and written form.'),
(6, '6', 'Computer Science', 'demonstrate knowledge of professional and ethical responsibilities'),
(7, '7', 'Computer Science', 'show the understanding of impact of engineering solutions on the society'),
(8, '8', 'Computer Science', 'an ability to participate and succeed in competitive examinations like gate and GRE'),
(9, '9', 'Computer Science', 'an ability to design a system, component and conduct experiments, analyze and interpret data and generate ideas leading to research'),
(10, '10', 'Computer Science', 'an ability to understand the architecture of system, develop programming skills in machine language and high level language programming'),
(11, '11', 'Computer Science', 'develop confidence for self education and ability for life long learning'),
(12, '12', 'Computer Science', 'a knowledge of contemporary issues'),
(13, '13', 'Computer Science', 'an ability to function on multidisciplinary teams');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referals`
--

CREATE TABLE IF NOT EXISTS `tbl_referals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_id` varchar(20) NOT NULL,
  `job_code` varchar(20) NOT NULL,
  `student_reg` varchar(20) NOT NULL,
  `student_name` varchar(20) NOT NULL,
  `student_mail` varchar(50) NOT NULL,
  `student_phone` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_referals`
--

INSERT INTO `tbl_referals` (`id`, `alumni_id`, `job_code`, `student_reg`, `student_name`, `student_mail`, `student_phone`) VALUES
(1, '320-12952001', 'P-101', '320-15952023', 'Sharath', 'sharathmohan@gmail.com', '9495551007'),
(2, '320-12952001', 'P-101', '320-15952023', 'Sharath', 'sharathmohan@gmail.com', '9495551007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signstudnt`
--

CREATE TABLE IF NOT EXISTS `tbl_signstudnt` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_signstudnt`
--

INSERT INTO `tbl_signstudnt` (`aid`, `id`, `register_no`, `fname`, `sname`, `mail`, `phone`, `gender`) VALUES
(3, 3001, '320-15952023', 'Sharath', 'Mohan', 'sharathmohan@gmail.com', '9495551007', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE IF NOT EXISTS `tbl_signup` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`aid`, `id`, `register_no`, `fname`, `sname`, `mail`, `phone`, `gender`, `dob`, `address`) VALUES
(8, 2001, '320-12952001', 'Abhijith', 'R', 'abhijith.r2012@gmail.com', '9633606870', 'Male', '', ''),
(9, 2002, '320-12952100', 'adsa', '', '', '', 'Male', '', ''),
(10, 2003, '320-12952100', '', '', '', '', 'Male', '', ''),
(11, 2004, '320-12952100', 'Remesh', '', '', '', 'Male', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studntacad`
--

CREATE TABLE IF NOT EXISTS `tbl_studntacad` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `admn_no` varchar(20) NOT NULL,
  `dprt` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `admn_date` varchar(20) NOT NULL,
  `add_info` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_studntacad`
--

INSERT INTO `tbl_studntacad` (`sid`, `id`, `register_no`, `admn_no`, `dprt`, `course`, `admn_date`, `add_info`) VALUES
(2, 3001, '320-15952023', '21/15', 'Computer Science', 'Master of Sciencce', '06/07/2015', 'studied BSC physics with computer application in SN college, Kollam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studntreg`
--

CREATE TABLE IF NOT EXISTS `tbl_studntreg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `mothername` varchar(20) NOT NULL,
  `guardian` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gmail` varchar(40) NOT NULL,
  `photo` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_studntreg`
--

INSERT INTO `tbl_studntreg` (`sid`, `id`, `register_no`, `fathername`, `mothername`, `guardian`, `dob`, `address`, `phone`, `gmail`, `photo`) VALUES
(2, 3001, '320-15952023', 'Mohan', 'Mother', 'Mohan', '09/10/1993', ' Sreeyas,\r\nTVM', '9876543210', 'mohan@gmail.com', 'uploads/hhhasdhs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surveyimp`
--

CREATE TABLE IF NOT EXISTS `tbl_surveyimp` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(30) NOT NULL,
  `imp1` varchar(11) DEFAULT NULL,
  `imp2` varchar(11) DEFAULT NULL,
  `imp3` varchar(11) DEFAULT NULL,
  `imp4` varchar(11) DEFAULT NULL,
  `imp5` varchar(11) DEFAULT NULL,
  `imp6` varchar(11) DEFAULT NULL,
  `imp7` varchar(11) DEFAULT NULL,
  `imp8` varchar(11) DEFAULT NULL,
  `imp9` varchar(11) DEFAULT NULL,
  `imp10` varchar(11) DEFAULT NULL,
  `imp11` varchar(11) DEFAULT NULL,
  `imp12` varchar(11) DEFAULT NULL,
  `imp13` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_surveyimp`
--

INSERT INTO `tbl_surveyimp` (`sid`, `id`, `register_no`, `imp1`, `imp2`, `imp3`, `imp4`, `imp5`, `imp6`, `imp7`, `imp8`, `imp9`, `imp10`, `imp11`, `imp12`, `imp13`) VALUES
(1, 2001, '320-12952001', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 2004, '320-12952100', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surveypo`
--

CREATE TABLE IF NOT EXISTS `tbl_surveypo` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `register_no` varchar(30) NOT NULL,
  `po1` varchar(10) DEFAULT NULL,
  `po2` varchar(11) DEFAULT NULL,
  `po3` varchar(11) DEFAULT NULL,
  `po4` varchar(11) DEFAULT NULL,
  `po5` varchar(11) DEFAULT NULL,
  `po6` varchar(11) DEFAULT NULL,
  `po7` varchar(11) DEFAULT NULL,
  `po8` varchar(11) DEFAULT NULL,
  `po9` varchar(11) DEFAULT NULL,
  `po10` varchar(11) DEFAULT NULL,
  `po11` varchar(11) DEFAULT NULL,
  `po12` varchar(11) DEFAULT NULL,
  `po13` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_surveypo`
--

INSERT INTO `tbl_surveypo` (`sid`, `id`, `register_no`, `po1`, `po2`, `po3`, `po4`, `po5`, `po6`, `po7`, `po8`, `po9`, `po10`, `po11`, `po12`, `po13`) VALUES
(1, 2001, '320-12952001', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 2004, '320-12952100', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
