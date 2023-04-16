-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2023 at 04:14 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

DROP TABLE IF EXISTS `bookdetails`;
CREATE TABLE IF NOT EXISTS `bookdetails` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `destination` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `adults` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `Total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `email`, `destination`, `adults`, `children`, `price`, `Total`) VALUES
(21, 'aa@gmail.com', 'Shaniwarwada', '1', '2', 1000, 0),
(31, 'aa@gmail.com', 'lal Mahal', '2', '3', 1000, 0),
(32, 'aa@gmail.com', 'Shaniwarwada', '1', '1', 1000, 0),
(33, 'aa@gmail.com', 'Shaniwarwada', '4', '3', 1000, 0),
(34, 'aa@gmail.com', 'Shaniwarwada', '1', '1', 250, 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `Frist_name` varchar(35) NOT NULL,
  `Last_Name` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Message` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`Frist_name`, `Last_Name`, `Email`, `Message`) VALUES
('asdf', 'asdf', 'ddd@gmail.com', 'sdf'),
('asdf', 'asdf', 'sdfg@gmail.com', 'hgtf'),
('asdf', 'asdf', 'sdfg@gmail.com', 'hgtf'),
('d', 'dd', 'aa@gmail.com', 'dsfg'),
('pranav', 'malwatkar', 'pranav@gmail.com', 'hey,This is pranav'),
('aa', 'aa', 'aa@gmail.com', 'asdf'),
('aa', 'aa', 'aa@gmail.com', 'sadf'),
('aa', 'aa', 'aa@gmail.com', 'asdf'),
('aa', 'aa', 'aa@gmail.com', 'ad'),
('aa', 'aa', 'aa@gmail.com', 'asdfgh'),
('aa', 'aa', 'aa@gmail.com', 'we'),
('aa', 'aa', 'aa@gmail.com', 'j'),
('aa', 'aa', 'aa@gmail.com', 'ff'),
('Aaryan', 'Ojha', 'hello1@gmail.com', 'Hello Admin'),
('adsf', '', 's@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Full_Name` varchar(35) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `City` varchar(35) NOT NULL,
  `State` varchar(35) NOT NULL,
  `Zip` int NOT NULL,
  `Card_Name` varchar(35) NOT NULL,
  `Card_Number` int NOT NULL,
  `Expmonth` int NOT NULL,
  `Expyear` int NOT NULL,
  `Cvv` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Card_Name`, `Card_Number`, `Expmonth`, `Expyear`, `Cvv`) VALUES
('aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 123, 'aa', 121, 1, 1, 1),
('pranav', 'p@gmailcom', 'hi', 'nanded', 'maharstra', 431602, 'pranav', 1112, 0, 5, 602),
('sadfds', 'sdafd', 'safd', 'dsaf', 'sdafd', 0, 'sdaf', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `question1` varchar(66) NOT NULL,
  `question2` varchar(66) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`,`UserName`,`Password`,`Email`,`IsAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Email`, `Password`, `question1`, `question2`, `IsAdmin`) VALUES
(1, 'pranav', 'pranav@gmail.com', 'asdf', '', '', 0),
(2, 'swapnil', 'swapnil@gmail.com', 'hi', '', '', 0),
(3, 'bb', 'pranav5@gmail.com', 'bb', '', '', 1),
(19, 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 0),
(20, 'pranav', 'p@gmail.com', 'pp', 'pp', 'pp', 0),
(21, 'aas', 's1@gmail.com', 'd', 'd', 'd', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
