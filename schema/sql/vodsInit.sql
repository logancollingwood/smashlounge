-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2015 at 06:19 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thalounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `vods`
--

DROP TABLE IF EXISTS `vods`;
CREATE TABLE `vods` (
`id` int(11) NOT NULL,
  `url` varchar(260) NOT NULL,
  `title` varchar(130) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) NOT NULL,
  `credit` varchar(160) NOT NULL,
  `typeid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL,
  `submitted_by` varchar(130) NOT NULL,
  `description` varchar(260) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vods`
--

INSERT INTO `vods` (`id`, `url`, `title`, `update_date`, `score`, `credit`, `typeid`, `dataid`, `submitted_by`, `description`) VALUES
(1, 'RBH4Z_vz1fk', 'Westballz imprisoned by destiny. . . Again', '2015-04-16 15:25:11', 0, 'GRSmash', 3, 0, '', 'RIP Westballz'),
(2, 'qUiAZltrWwo', '[Falco] Multi-shine Tutorial - feat. Squid (Advanced Level) - SSBM', '2015-04-16 16:04:50', 0, 'SSBM Tutorials', 1, 0, '', 'A quick tutorial on Multi-shine with Falco'),
(3, 'XhujDoRBXeY', 'PewPewUniversity - A tutorial on No Impact Landing', '2015-04-16 16:05:58', 0, 'Kevin Toy', 1, 0, '', 'A sample tutorial on no impact landings'),
(4, 'Kr5y0-W9YVo', 'Cort (Marth) vs PC Chris (Fox) 2', '2015-04-16 16:11:56', 0, 'raserucort', 2, 0, '', 'One of the fastest matches in Melee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vods`
--
ALTER TABLE `vods`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vods`
--
ALTER TABLE `vods`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;