-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2020 at 03:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vitonlib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `b_id` int(4) NOT NULL AUTO_INCREMENT,
  `b_nm` varchar(60) NOT NULL,
  `b_subcat` varchar(25) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_pdf` longtext NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_subcat`, `b_img`, `b_pdf`) VALUES
(1, 'Fundamentals of Database Systems', '1', 'upload_image/dbms1.jpg', 'upload_ebook/dbms1.pdf'),
(2, 'BookName2', '1', 'upload_image/book_cover.jpg', 'upload_ebook/dbms2.pdf'),
(3, 'BookName1', '2', 'upload_image/book_cover.jpg', 'upload_ebook/book3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_nm` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`) VALUES
(1, 'SCOPE'),
(2, 'SITE'),
(3, 'SMEC'),
(4, 'SELECT');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` int(4) NOT NULL AUTO_INCREMENT,
  `con_nm` varchar(25) NOT NULL,
  `con_email` varchar(35) NOT NULL,
  `con_query` longtext NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `con_nm`, `con_email`, `con_query`) VALUES
(8, 'Fardeen Khan', 'ffardeenis@gmail.com', 'akjdlkd'),
(9, 'Fardeen Khan', 'ffardeenis@gmail.com', 'i need se book');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

DROP TABLE IF EXISTS `subcat`;
CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` int(4) NOT NULL AUTO_INCREMENT,
  `parent_id` int(4) NOT NULL,
  `subcat_nm` varchar(50) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
(1, 1, 'Database Management Systems CSE2004'),
(2, 1, 'Data Structures and Algorithms CSE2003'),
(3, 1, 'Network and Communication CSE1004'),
(4, 1, 'Digital Logic and Design CSE1003'),
(5, 1, 'Operating Systems CSE2005'),
(6, 2, 'Web Technologies ITE1002'),
(7, 1, 'Computer Architecture CSE2001'),
(36, 2, 'Open Source programming ITE1008'),
(37, 2, 'Digital Image Processing ITE1010'),
(38, 2, 'Human Computer Interaction ITE1014'),
(39, 3, 'Facilities and Process Planning MEE1018'),
(40, 3, 'Operations Research MEE1024'),
(41, 2, 'Mobile Application Development ITE1016'),
(42, 2, 'Operating Systems ITE2002'),
(43, 1, 'Software Engineering CSE3001'),
(44, 1, 'Internet and Web Programming CSE3002'),
(45, 2, 'Object Oriented Analysis and Design ITE1007'),
(47, 4, 'Electronics and Electrical Engineering EEE1004');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_fnm` varchar(35) NOT NULL,
  `u_unm` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_contact` varchar(12) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fnm`, `u_unm`, `u_pwd`, `u_gender`, `u_email`, `u_contact`) VALUES
(7, 'Saakshi Mittal', 'user1', '123456', 'Male', 'saakshi@gmail.com', '7895021606'),
(8, 'Anukriti', 'user2', '123456', 'Female', 'reeteewal@gmail.com', '7895021606'),
(9, 'Name3', 'user3', '12345666', 'Female', 'reeteewal@gmail.com', '7895021606'),
(10, 'Name4', 'user4', '123456', 'Male', 'name4@gmail.com', '7895021606'),
(11, 'Anusha peri', 'user5', '123456', 'FeMale', 'perianusha@gmail.com', '7895021606'),
(12, 'Namya', 'user6', '123456', 'Female', 'namya@gmail.com', '7895021606'),
(13, 'Namya sehgal', 'user7', '123456', 'Female', 'sehgalnamya@gmail.com', '7895021606'),
(14, 'Fardeen Khan', 'user7', '123456', 'Female', 'ffardeenis@gmail.com', '7895021606'),
(15, 'Anukriti', 'user9', '123456', 'Female', 'baijalanukriti@gmail.com', '7895021606'),
(16, 'saakshi', 'user1293i8', '1234#VIT', 'Male', 'guhiljo;', '1234567890'),
(17, 'ADMIN', 'admin', 'admin123#', 'Male', 'admin@vitonlib.com', '7895021606');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
