-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2015 at 09:19 AM
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
-- Table structure for table `vods`
--

DROP TABLE IF EXISTS `vods`;
CREATE TABLE IF NOT EXISTS `vods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(260) NOT NULL,
  `title` varchar(130) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) NOT NULL,
  `credit` varchar(160) NOT NULL,
  `typeid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL,
  `submitted_by` varchar(130) NOT NULL,
  `description` varchar(260) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vods`
--

INSERT INTO `vods` (`id`, `url`, `title`, `update_date`, `score`, `credit`, `typeid`, `dataid`, `submitted_by`, `description`) VALUES
(1, 'RBH4Z_vz1fk', 'Westballz imprisoned by destiny. . . Again', '2015-04-16 15:25:11', 0, 'GRSmash', 3, 0, '', 'RIP Westballz'),
(2, 'qUiAZltrWwo', '[Falco] Multi-shine Tutorial - feat. Squid (Advanced Level) - SSBM', '2015-04-16 16:04:50', 0, 'SSBM Tutorials', 1, 0, '', 'A quick tutorial on Multi-shine with Falco'),
(3, 'XhujDoRBXeY', 'PewPewUniversity - A tutorial on No Impact Landing', '2015-04-16 16:05:58', 0, 'Kevin Toy', 4, 0, '', 'A sample tutorial on no impact landings'),
(4, 'Kr5y0-W9YVo', 'Cort (Marth) vs PC Chris (Fox) 2', '2015-04-16 16:11:56', 0, 'raserucort', 2, 0, '', 'One of the fastest matches in Melee'),
(5, 'OSxVR_QGPoI', 'PewFat', '2015-04-13 07:46:02', 0, 'SFAT', 6, 0, '', 'PewPewU and SFAT demonstrating great teams synergy many years ago'),
(6, '8orJkb0LtaE', 'Shroomed - "IM NOT YELLING" (nsfw)', '2015-04-13 07:50:20', 0, 'ShowDown Smash', 3, 0, '', 'Shroomed going off at a recent "Get Smashed at the Foundry event".'),
(8, 'JLuFpmoKUVQ', 'Melee Impossible - The Combo Video (TAS)', '2015-04-13 07:29:22', 0, 'antdgar2', 3, 0, '', 'Some insane tool assisted combos'),
(9, 'vsr4M6r0B2Q', 'Smash Bros is a Freaking Blast', '2015-04-13 07:35:27', 0, 'The Toasty Knight', 5, 0, '', 'A PewPewU Combo Video'),
(10, 'kKsEobD1pew', 'PewPewUniversity - A lesson on Sheild Stops', '2015-04-13 07:46:52', 0, 'PewPewU', 4, 0, '', 'Shield Stop'),
(11, 'V3hjjNLCcMQ', 'PewPewUniversity - a lesson on Run Cancels', '2015-04-13 07:46:54', 0, 'pewpewu', 1, 0, '', 'Run Canceling');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
