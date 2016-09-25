-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2016 at 06:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `id` int(30) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`id`, `amount`) VALUES
(2147483647, 5900);

-- --------------------------------------------------------

--
-- Table structure for table `c_form`
--

CREATE TABLE IF NOT EXISTS `c_form` (
  `FN` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ph` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `Ad` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Em` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Me` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_form`
--

INSERT INTO `c_form` (`FN`, `Ph`, `Ad`, `Em`, `Me`) VALUES
('Kaiser Ahmed', '01673710809', 'Mirpur', 'kaiser@gmail.com', 'Check my '),
('à¦¤à§à¦¸à¦¾à¦°', '01673710809', 'à¦®à¦¿à¦°à¦ªà§à¦°', 'kaiser@gmail.com', 'à¦¦à§‡à¦–');

-- --------------------------------------------------------

--
-- Table structure for table `p_form`
--

CREATE TABLE IF NOT EXISTS `p_form` (
  `ch` int(30) NOT NULL AUTO_INCREMENT,
  `am` varchar(50) NOT NULL,
  `na` varchar(50) NOT NULL,
  `id` varchar(30) NOT NULL,
  `inn` varchar(30) NOT NULL,
  `se` varchar(20) NOT NULL,
  `pr` varchar(30) NOT NULL,
  PRIMARY KEY (`ch`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `p_form`
--

INSERT INTO `p_form` (`ch`, `am`, `na`, `id`, `inn`, `se`, `pr`) VALUES
(1, '40000', 'Faisal Ahmed', '11122103014', '20', 'fall', 'b.sc in cse'),
(2, '6000', 'Kaiser Ahmed', '11122103036', '20', 'fall', 'b.sc in cse'),
(3, '15000', 'Arafat Rahman Rajib', '11122103043', '20', 'Fall', 'B.sc in CSE'),
(4, '6036', 'Faisal Ahmed', '11122103014', '20', 'Fall', 'B.sc in CSE'),
(5, '7560', 'Ridoy', '11122103011', '20', 'Fall', 'B.sc in CSE');

-- --------------------------------------------------------

--
-- Table structure for table `s_form`
--

CREATE TABLE IF NOT EXISTS `s_form` (
  `fn` varchar(50) NOT NULL,
  `ln` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `em` varchar(30) NOT NULL,
  `ph` varchar(30) NOT NULL,
  `inn` varchar(20) NOT NULL,
  `de` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_form`
--

INSERT INTO `s_form` (`fn`, `ln`, `id`, `em`, `ph`, `inn`, `de`, `pass`) VALUES
('Faisal', 'Ahmed', '11122103014', 'm.faisal674@gmail.com', '01673497466', '20', 'CSE', '1234'),
('Woishi ', 'Haque', '11122103015', 'woishi@gmail.com', '01672190890', '20', 'B.sc in CSE', '3015'),
('Arafat ', 'Rahman Rajib', '11122103043', 'arafat@gmail.com', '01772190190', '20', 'B.sc in CSE', '3043');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
