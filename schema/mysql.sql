-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2014 at 11:56 PM
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
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(130) NOT NULL,
  `facebook` varchar(90) NOT NULL,
  `location` varchar(130) NOT NULL,
  `twitch` varchar(90) NOT NULL,
  `userid` int(11) NOT NULL,
  `vod` varchar(130) NOT NULL,
  `twitter` varchar(90) NOT NULL,
  `main` int(11) NOT NULL,
  `sponsor` varchar(90) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` int(11) NOT NULL,
  `friendcode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `image`, `facebook`, `location`, `twitch`, `userid`, `vod`, `twitter`, `main`, `sponsor`, `latitude`, `longitude`, `friendcode`) VALUES
(9, 'LoganCollingwood.jpg', 'logan6694', 'Santa Cruz', '', 2, '', '', 5, 'Smash Lounge', 36.96, -122, 0),
(10, '', 'MIOMPewPewU', 'Bay Area', 'pewpewu', 3, '', 'miom_pewpewu', 14, 'Melee it On Me', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
