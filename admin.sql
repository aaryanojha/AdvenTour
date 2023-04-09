-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2023 at 02:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adults` varchar(255) DEFAULT NULL,
  `children` varchar(255) DEFAULT NULL,
  `Price` int(11) NOT NULL DEFAULT 10000,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `adults`, `children`, `Price`) VALUES
(9, '3', '6', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

DROP TABLE IF EXISTS `destination`;
CREATE TABLE IF NOT EXISTS `destination` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Adult` varchar(191) NOT NULL,
  `Children` varchar(191) NOT NULL,
  `Price` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
('Aaryan', 'Ojha', 'hello1@gmail.com', 'Hello Admin');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(20) NOT NULL,
  `Destination` varchar(23) NOT NULL,
  `price` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Zip` int(11) NOT NULL,
  `Card_Name` varchar(35) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Expmonth` int(11) NOT NULL,
  `Expyear` int(11) NOT NULL,
  `Cvv` int(11) NOT NULL
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
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `question1` varchar(66) NOT NULL,
  `question2` varchar(66) NOT NULL,
  `IsAdmin` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`,`UserName`,`Password`,`Email`,`IsAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UserName`, `Email`, `Password`, `question1`, `question2`, `IsAdmin`) VALUES
(1, 'pranav', 'pranav@gmail.com', 'asdf', '', '', 0),
(2, 'swapnil', 'swapnil@gmail.com', 'hi', '', '', 0),
(3, 'bb', 'pranav5@gmail.com', 'bb', '', '', 1),
(19, 'aa', 'aa@gmail.com', 'aa', 'aa', 'aa', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
