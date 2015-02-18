-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 12:51 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thalounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `framedatamoves`
--

CREATE TABLE IF NOT EXISTS `framedatamoves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `description` varchar(130) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `framedatamoves`
--

INSERT INTO `framedatamoves` (`id`, `name`, `description`) VALUES
(1, 'Up Air', ''),
(2, 'Down Air', ''),
(3, 'Forward Air', ''),
(4, 'Back Air', ''),
(5, 'Neutral Air', ''),
(6, 'Neutral B in Air', ''),
(7, 'Jab 1', ''),
(8, 'Jab 2', ''),
(9, 'Jab 3', ''),
(10, 'Jab Extended', ''),
(11, 'Up B', 'Up Special'),
(12, 'Neutral B', 'Special'),
(13, 'Neutral B (charged)', 'Special'),
(14, 'Neutral B (air)', 'Special'),
(15, 'Down B', 'Down Special'),
(16, 'Side B', 'Side Special'),
(17, 'Forward B', ''),
(18, 'Forward B 1', ''),
(19, 'Forward B 2', ''),
(20, 'Forward B 3 Down', ''),
(21, 'Forward B 3 Neutral', ''),
(22, 'Forward B 3 Up', ''),
(23, 'Forward B 4', ''),
(24, 'Forward B 4 Down', ''),
(25, 'Forward B 4 Neutral', ''),
(26, 'Forward B 4 Up', ''),
(27, 'Up Tilt', ''),
(28, 'Down Tilt', ''),
(29, 'Forward Tilt', ''),
(30, 'Forward Tilt Low', ''),
(31, 'Forward Tilt High', ''),
(32, 'Up Smash', ''),
(33, 'Down Smash', ''),
(34, 'Forward Smash', ''),
(35, 'Air Dodge', ''),
(36, 'Forward Roll', ''),
(37, 'Backwards Roll', ''),
(38, 'Dodge', ''),
(39, 'Dash Attack', ''),
(40, 'Running Grab', ''),
(41, 'Standing Grab', ''),
(42, 'Forward Smash High', ''),
(43, 'Forward Smash Low', ''),
(44, 'Forward B (air)', ''),
(45, 'Z Air', ''),
(46, 'Taunt', ''),
(47, 'Get Up Attack', ''),
(48, 'Forward Throw', ''),
(49, 'Backwards Throw', ''),
(50, 'Throw', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
