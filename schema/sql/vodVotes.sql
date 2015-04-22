-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 22, 2015 at 02:01 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thalounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `vodvotes`
--

DROP TABLE IF EXISTS `vodvotes`;
CREATE TABLE `vodvotes` (
`id` int(11) NOT NULL,
  `vodid` int(11) NOT NULL,
  `voterid` int(11) NOT NULL,
  `direction` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vodvotes`
--

INSERT INTO `vodvotes` (`id`, `vodid`, `voterid`, `direction`) VALUES
(1, 27, 2, 1),
(2, 2, 2, 1),
(3, 25, 2, 1),
(4, 28, 2, 1),
(5, 29, 2, 1),
(6, 26, 2, 1),
(7, 4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vodvotes`
--
ALTER TABLE `vodvotes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vodvotes`
--
ALTER TABLE `vodvotes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;