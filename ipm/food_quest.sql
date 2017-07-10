-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 05:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE IF NOT EXISTS `consumer` (
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `User_Id` int(20) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(20) NOT NULL,
  `User_Type` int(1) NOT NULL,
  `Email` varchar(11) NOT NULL,
  `Password` varchar(101) NOT NULL,
  `Phone_Number` int(15) NOT NULL,
  `Hotel_Address` varchar(50) NOT NULL,
  `Hotel_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`First_Name`, `Last_Name`, `User_Id`, `User_Name`, `User_Type`, `Email`, `Password`, `Phone_Number`, `Hotel_Address`, `Hotel_Name`) VALUES
('Slice', 'Rio', 1, 'slicyRio', 0, 'RIo@slicy.c', '123', 0, '', ''),
('Suraj', 'Adhikari', 2, 'Sur99', 0, 'sur@bhauju.', '123', 0, '', ''),
('Mohit', 'Dhungana', 6, 'Mohit07', 1, 'Mohit99@yah', '123', 0, '', ''),
('master', 'mind', 7, 'Mmaster', 0, 'masteria@bu', '123', 0, '', ''),
('Sajita', 'Adhikari', 11, 'Sajj89', 1, 'sajju@gmail', '123', 0, '', ''),
('surya ', 'Bhushal', 32, 'surr99', 0, 'Surya@gmail', '123', 2147483647, '', ''),
('Suraj', 'Adhikari', 33, 'Surazad99', 2, 'suraz.ad99@', '321', 2147483647, '', ''),
('Pratik', 'Mishra', 39, 'Chicken', 1, 'chicken72@p', '123', 999999999, '', ''),
('Subin', 'Panth', 40, 'Soldai', 1, 'soldai@yoho', '123', 2147483647, '', ''),
('sdf', 'dsfds', 41, 'sdfds', 1, 'sdfsdf@', '123', 123, '', ''),
('jhkjhjj', 'kjhkh', 42, 'kjhkjh', 0, 'jahdkjh@', '123', 0, '', ''),
('jhkh', 'jkhkjh', 43, 'kjhkjh', 0, 'kjh@', '123', 0, '', ''),
('jhkh', 'jkhkjh', 44, 'kjhkjh', 0, 'kjh@', '123', 0, '', ''),
('Subin', 'panta', 45, 'rar', 1, 'usubdsudb@g', '123', 2147483647, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `Food_Id` int(10) NOT NULL AUTO_INCREMENT,
  `Food_Name` varchar(100) NOT NULL,
  `Food_Price` float NOT NULL,
  `Food_Image` varchar(200) NOT NULL,
  `Food_Description` varchar(400) NOT NULL,
  `Food_Rating` float NOT NULL,
  `Uploaded_By` int(20) NOT NULL,
  `Uploaded_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Food_Id`),
  UNIQUE KEY `Food_Id` (`Food_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Food_Id`, `Food_Name`, `Food_Price`, `Food_Image`, `Food_Description`, `Food_Rating`, `Uploaded_By`, `Uploaded_Time`) VALUES
(1, 'Mochachino Cofee', 230, 'images/Mochachino Cofee.jpg', 'Just good enough to make you here back once again', 4, 39, '0000-00-00 00:00:00'),
(2, 'Sekuwa', 100, 'images/Sekuwa.jpg', 'asdfasdfgasdfasdfasdag', 3.5, 39, '0000-00-00 00:00:00'),
(3, 'Veg Pakauda', 25, 'images/Veg Pakauda.jpg', 'World Famous pakauda in Kathford canteen', 5, 39, '0000-00-00 00:00:00'),
(4, 'Paneer Chilly', 123, 'images/Paneer Chilly.jpg', 'The chilly you have never eaten', 2.8, 39, '0000-00-00 00:00:00'),
(5, 'French Fries', 234, 'images/French Fries.jpg', 'The best item from the Tashi Delek Restaurant and Bar', 3.7, 39, '0000-00-00 00:00:00'),
(6, 'Tuborg Beer', 300, 'images/Tuborg Beer.jpg', 'Chilled beer ', 4.3, 39, '0000-00-00 00:00:00'),
(9, 'Idli', 123, 'images/asfdsdf.jpg', 'kera ko paat ko special', 1.9, 39, '0000-00-00 00:00:00'),
(10, 'Real Mango juice', 30, 'images/Real Mango juice.jpg', 'Fat free and low in cholestrol so best for Soldais Health', 4.2, 40, '0000-00-00 00:00:00'),
(11, 'Boiled Chicken', 333, 'images/Boiled Chicken.jpg', 'Best for Soldai ', 3.7, 40, '0000-00-00 00:00:00'),
(12, 'Samosa', 45, 'images/Samosa.jpg', 'less fat high energy', 4.6, 39, '0000-00-00 00:00:00'),
(14, 'boiled egg', 20, 'images/boiled egg.jpg', 'mitho ra healthy', 0, 40, '0000-00-00 00:00:00'),
(15, 'subin special', 999999, 'images/subin special.jpg', 'best in argentina', 4.125, 45, '0000-00-00 00:00:00'),
(16, 'Kakani Trout', 453, 'images/Kakani Trout.jpg', 'Taja taja pokhari baata nikalera banaeeko...', 0, 40, '0000-00-00 00:00:00'),
(17, 'Dahi Puri', 50, 'images/Dahi Puri.jpg', 'best in kusunti', 0, 39, '0000-00-00 00:00:00'),
(18, 'Tuborg Beer', 332, 'images/Tuborg Beer.jpg', 'Tuborg is the best in valley', 0, 40, '0000-00-00 00:00:00'),
(19, 'dfsd', 232, '', 'kjhjhkjhkj', 0, 45, '0000-00-00 00:00:00'),
(20, 'jhghjgjh', 23, '', 'jhgjhg', 0, 45, '0000-00-00 00:00:00'),
(22, 'rarCake', 12, '', 'sddsfs', 0, 45, '2017-07-10 09:16:56'),
(24, 'haha My Boy', 123, '', 'sfsdfs', 0, 45, '2017-07-10 09:18:28'),
(26, 'Chautari Mya', 4, '', 'dasdasdasd', 0, 45, '2017-07-10 09:21:23'),
(27, 'testing the image', 123, '', 'sdfgsdfssd', 0, 45, '2017-07-10 09:27:02'),
(28, 'testing the image', 123, '', 'sdfgsdfssd', 0, 45, '2017-07-10 09:27:27'),
(29, 'testing the image', 123, 'images/testing the image1499692374.jpg', 'sdfgsdfssd', 0, 45, '2017-07-10 09:27:54'),
(30, 'lolImage', 542, 'images/lolImage1499692759.jpg', 'slodai says Unhealthy stuff', 0, 45, '2017-07-10 09:34:19'),
(31, 'Jagadamba', 452, 'images/Jagadamba1499692953.jpg', 'dfsfdffd', 0, 45, '2017-07-10 09:37:33'),
(32, 'Khaja Set', 342, 'images/Khaja Set1499693027.jpg', 'sdfsdf', 0, 45, '2017-07-10 09:38:47'),
(33, 'Khaja Set', 653, 'images/Khaja Set1499693078.jpg', 'sfsdfs', 0, 45, '2017-07-10 09:39:38'),
(34, 'Khaja Set', 421, 'images/Khaja Set1499693775.jpg', 'Just good enough to make you here back once again', 0, 39, '2017-07-10 09:51:15'),
(35, 'Khaja Set', 439, 'images/Khaja Set1499693865.jpg', 'hihi haha ', 0, 40, '2017-07-10 09:52:45'),
(36, 'choila', 124, 'images/choila1499694231.jpg', 'aaded by subin soldai', 0, 40, '2017-07-10 09:58:51'),
(37, 'choila', 0, 'images/choila1499694277.jpg', 'pok choila by chicken', 0, 39, '2017-07-10 09:59:37'),
(38, 'choila', 54, 'images/choila1499694316.jpg', 'by rar', 0, 45, '2017-07-10 10:00:16'),
(39, 'Tuborg Beer', 435, 'images/Tuborg Beer1499710797.jpg', 'chilled beer uploaded by rar ', 0, 45, '2017-07-10 14:34:57'),
(40, 'Tuborg Beer', 221, 'images/Tuborg Beer1499710948.jpg', 'chicken flavour', 0, 39, '2017-07-10 14:37:28'),
(41, 'Tuborg Beer', 435, 'images/Tuborg Beer1499711147.jpg', 'soldai ko health, Global Warming vanda pani importaant isuue ho', 0, 40, '2017-07-10 14:40:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
