-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2024 at 06:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uni_spot_reservation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE IF NOT EXISTS `admindetails` (
  `adminID` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`adminID`, `uname`, `password`, `faculty`) VALUES
(1, 'admin', 'GE123', 'Geomatics'),
(9, 'admin', 'AP123', 'Applied Sciences'),
(10, 'admin', 'SO123', 'Social Sciences and Languages'),
(11, 'admin', 'MA123', 'Management Studies'),
(12, 'admin', 'CO123', 'Computing'),
(13, 'admin', 'TE123', 'Technology'),
(14, 'admin', 'AG123', 'Agricultural Science'),
(15, 'admin', 'ME123', 'Medicine');

-- --------------------------------------------------------

--
-- Table structure for table `bookingspot`
--

CREATE TABLE IF NOT EXISTS `bookingspot` (
  `bookingID` int(11) NOT NULL AUTO_INCREMENT,
  `eventName` varchar(50) DEFAULT NULL,
  `DescriptionOfEvents` varchar(1000) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `spotAdminApproving` varchar(50) DEFAULT NULL,
  `mainAdminApproving` varchar(50) DEFAULT NULL,
  `useName` varchar(50) DEFAULT NULL,
  `spotName` varchar(50) DEFAULT NULL,
  `states` varchar(50) NOT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `useName` (`useName`),
  KEY `spotName` (`spotName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bookingspot`
--

INSERT INTO `bookingspot` (`bookingID`, `eventName`, `DescriptionOfEvents`, `date`, `time`, `spotAdminApproving`, `mainAdminApproving`, `useName`, `spotName`, `states`) VALUES
(1, 'Criket match', 'test 01', '2024-08-31', 'Whole Day', 'Approved', 'pending', 'Shiran', 'Matta Ground', 'Not complete'),
(3, 'test 01', 'description test 01', '2024-08-31', 'Evening (1.00 p.m - 6.00 p.m)', 'Approved', 'pending', 'Shiran', 'Social Auditorium', 'Not complete'),
(4, 'test p 03', '03 testing prabhath', '2024-08-29', 'Evening (1.00 p.m - 6.00 p.m)', 'Approved', 'pending', 'prabhath', 'Matta Ground', 'completedNot complete');

-- --------------------------------------------------------

--
-- Table structure for table `spot`
--

CREATE TABLE IF NOT EXISTS `spot` (
  `spotName` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `password1` varchar(50) NOT NULL,
  PRIMARY KEY (`spotName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spot`
--

INSERT INTO `spot` (`spotName`, `image`, `description`, `password1`) VALUES
('Matta Ground', '66c82792751a9.jpg', 'The Matta Ground at Sabaragamuwa University of Sri Lanka is a stunning sports arena nestled in a picturesque setting surrounded by lush, green mountains. This scenic location enhances the beauty of the ground, making it an ideal spot for various sports and athletic activities. The ground is well-equipped for cricket, athletics, and other sports, providing students and athletes with excellent facilities to train and compete in a serene environment. The combination of natural beauty and modern amenities makes Matta Ground a standout feature of the university, offering a perfect blend of sportsÂ andÂ nature.', '123'),
('Social Auditorium', '66c4e2fa5429c.jpg', 'The Social Auditorium at Sabaragamuwa University of Sri Lanka is a central hub for various social, cultural, and academic activities on campus. This spacious and well-designed auditorium serves as the venue for a wide range of events, including seminars, workshops, cultural performances, and student gatherings. Equipped with modern audio-visual facilities, comfortable seating, and excellent acoustics, the auditorium provides an ideal environment for both formal and informal events. It is a vibrant space where the university community comes together to engage in meaningful discussions, celebrate achievements, and enjoy artistic performances, making it a key focal pointÂ ofÂ campusÂ life.', '111');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `fullName` varchar(100) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `teleNumber` int(10) NOT NULL,
  `NICNumber` varchar(15) NOT NULL,
  `registerNumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullName`, `userName`, `teleNumber`, `NICNumber`, `registerNumber`, `email`, `password1`, `faculty`) VALUES
('prabhath madushanka', 'prabhath', 776698556, '997776845V', 'HDSE245568', 'prabhath@gmailcom', '123', 'Computing'),
('Shiran Malitha', 'Shiran', 777587369, '999155876V', '20G5864a', 'shiran@gmail.com', '123', 'Applied Sciences');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookingspot`
--
ALTER TABLE `bookingspot`
  ADD CONSTRAINT `bookingspot_ibfk_1` FOREIGN KEY (`useName`) REFERENCES `users` (`userName`),
  ADD CONSTRAINT `bookingspot_ibfk_2` FOREIGN KEY (`spotName`) REFERENCES `spot` (`spotName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
