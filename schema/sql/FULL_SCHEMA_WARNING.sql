-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 17, 2015 at 07:27 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thalounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `attacks`
--

CREATE TABLE `attacks` (
`id` int(11) NOT NULL,
  `charid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `description` varchar(450) NOT NULL,
  `inputs` varchar(450) NOT NULL,
  `links_to` int(11) NOT NULL,
  `links_from` int(11) NOT NULL,
  `movetype` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=644 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attacks`
--

INSERT INTO `attacks` (`id`, `charid`, `gameid`, `description`, `inputs`, `links_to`, `links_from`, `movetype`) VALUES
(1, 1, 0, 'Down B (Air)', '', 0, 0, 0),
(2, 1, 0, 'Up B (Air)', '', 0, 0, 0),
(3, 1, 0, 'Up B (Ground)', '', 0, 0, 0),
(4, 1, 0, 'Down B (Ground)', '', 0, 0, 0),
(5, 1, 0, 'Forward B', '', 0, 0, 0),
(6, 1, 0, 'Jab 1', '', 0, 0, 1),
(7, 1, 0, 'Jab 2', '', 0, 0, 1),
(8, 1, 0, 'Forward Tilt Low', '', 0, 0, 2),
(9, 1, 0, 'Forward Tilt High', '', 0, 0, 2),
(10, 1, 0, 'Forward Tilt', '', 0, 0, 2),
(11, 1, 0, 'Up Tilt', '', 0, 0, 2),
(12, 1, 0, 'Down Tilt', '', 0, 0, 2),
(13, 1, 0, 'Up Smash', '', 0, 0, 3),
(14, 1, 0, 'Forward Smash', '', 0, 0, 3),
(15, 1, 0, 'Down Smash', '', 0, 0, 3),
(16, 1, 0, 'Up Air', '', 0, 0, 4),
(17, 1, 0, 'Neutral Air', '', 0, 0, 4),
(18, 1, 0, 'Down Air', '', 0, 0, 4),
(19, 1, 0, 'Back Air', '', 0, 0, 4),
(20, 1, 0, 'Forward Air', '', 0, 0, 4),
(21, 1, 0, 'Dash Attack', '', 0, 0, 5),
(22, 1, 0, 'Running Grab', '', 0, 0, 5),
(23, 1, 0, 'Standing Grab', '', 0, 0, 5),
(24, 1, 0, 'Dodge', '', 0, 0, 6),
(25, 1, 0, 'Air Dodge', '', 0, 0, 6),
(26, 1, 0, 'Forward Roll', '', 0, 0, 6),
(27, 2, 0, 'Jab 3', '', 0, 0, 1),
(28, 2, 0, 'Jab 2', '', 0, 0, 1),
(29, 2, 0, 'Forward Tilt High', '', 0, 0, 2),
(30, 2, 0, 'Forward Tilt Low', '', 0, 0, 2),
(31, 2, 0, 'Up Tilt', '', 0, 0, 2),
(32, 2, 0, 'Forward Air', '', 0, 0, 4),
(33, 2, 0, 'Air Dodge', '', 0, 0, 6),
(34, 2, 0, 'Up Smash', '', 0, 0, 3),
(35, 2, 0, 'Up Air', '', 0, 0, 4),
(36, 2, 0, 'Back Air', '', 0, 0, 4),
(37, 2, 0, 'Neutral B', '', 0, 0, 0),
(38, 3, 0, 'Neutral B (Charged)', '', 0, 0, 0),
(39, 3, 0, 'Up B (Air)', '', 0, 0, 0),
(40, 3, 0, 'Up B (Ground)', '', 0, 0, 0),
(41, 3, 0, 'Jab 1', '', 0, 0, 1),
(42, 3, 0, 'Jab 2', '', 0, 0, 1),
(43, 3, 0, 'Forward Tilt', '', 0, 0, 2),
(44, 3, 0, 'Up Smash', '', 0, 0, 3),
(45, 3, 0, 'Back Air', '', 0, 0, 4),
(46, 3, 0, 'Up Air', '', 0, 0, 4),
(47, 3, 0, 'Down Air', '', 0, 0, 4),
(48, 3, 0, 'Running Grab', '', 0, 0, 5),
(49, 3, 0, 'Air Dodge', '', 0, 0, 4),
(50, 3, 0, 'Down B', '', 0, 0, 0),
(51, 3, 0, 'Dodge', '', 0, 0, 6),
(52, 3, 0, 'Forward B', '', 0, 0, 0),
(53, 3, 0, 'Forward Roll', '', 0, 0, 6),
(54, 3, 0, 'Neutral Air', '', 0, 0, 4),
(55, 3, 0, 'Dash Attack', '', 0, 0, 5),
(56, 3, 0, 'Standing Grab', '', 0, 0, 5),
(57, 3, 0, 'Up Tilt', '', 0, 0, 2),
(58, 3, 0, 'Backwards Roll', '', 0, 0, 6),
(59, 3, 0, 'Forward Tilt High', '', 0, 0, 2),
(60, 3, 0, 'Forward Smash', '', 0, 0, 3),
(61, 3, 0, 'Neutral B', '', 0, 0, 0),
(62, 3, 0, 'Down Tilt', '', 0, 0, 2),
(63, 3, 0, 'Forward Air', '', 0, 0, 4),
(64, 3, 0, 'Down Smash', '', 0, 0, 3),
(65, 3, 0, 'Forward Tilt Low', '', 0, 0, 2),
(66, 3, 0, 'Neutral B (Charging)', '', 0, 0, 0),
(67, 4, 0, 'Jab 1', '', 0, 0, 1),
(68, 4, 0, 'Jab 2', '', 0, 0, 1),
(69, 4, 0, 'Jab 3', '', 0, 0, 1),
(70, 4, 0, 'Forward Tilt', '', 0, 0, 2),
(71, 4, 0, 'Forward Tilt Low', '', 0, 0, 2),
(72, 4, 0, 'Forward Tilt High', '', 0, 0, 2),
(73, 4, 0, 'Down Tilt', '', 0, 0, 2),
(74, 4, 0, 'Forward Air', '', 0, 0, 4),
(75, 4, 0, 'Up Air', '', 0, 0, 4),
(76, 4, 0, 'Dash Attack', '', 0, 0, 5),
(77, 4, 0, 'Forward Smash Low', '', 0, 0, 3),
(78, 4, 0, 'Down Smash', '', 0, 0, 3),
(79, 4, 0, 'Forward Smash High', '', 0, 0, 3),
(80, 4, 0, 'Up Smash', '', 0, 0, 3),
(81, 4, 0, 'Neutral Air', '', 0, 0, 4),
(82, 4, 0, 'Back Air', '', 0, 0, 4),
(83, 4, 0, 'Down Air', '', 0, 0, 4),
(84, 4, 0, 'Standing Grab', '', 0, 0, 5),
(85, 4, 0, 'Running Grab', '', 0, 0, 5),
(86, 4, 0, 'Down B', '', 0, 0, 0),
(87, 4, 0, 'Up B', '', 0, 0, 0),
(88, 4, 0, 'Forward B', '', 0, 0, 0),
(89, 4, 0, 'Air Dodge', '', 0, 0, 4),
(90, 4, 0, 'Forward Roll', '', 0, 0, 6),
(91, 4, 0, 'Dodge', '', 0, 0, 6),
(92, 5, 0, 'Neutral B', '', 0, 0, 0),
(93, 5, 0, 'Jab 1', '', 0, 0, 1),
(94, 5, 0, 'Jab 2', '', 0, 0, 1),
(95, 5, 0, 'Jab 3', '', 0, 0, 1),
(96, 5, 0, 'Forward Tilt', '', 0, 0, 2),
(97, 5, 0, 'Forward Tilt High', '', 0, 0, 2),
(98, 5, 0, 'Up Tilt', '', 0, 0, 2),
(99, 5, 0, 'Up Air', '', 0, 0, 4),
(100, 5, 0, 'Down Air', '', 0, 0, 4),
(101, 5, 0, 'Dash Attack', '', 0, 0, 5),
(102, 5, 0, 'Forward Tilt Low', '', 0, 0, 2),
(103, 5, 0, 'Back Air', '', 0, 0, 4),
(104, 5, 0, 'Neutral Air', '', 0, 0, 4),
(105, 5, 0, 'Down Tilt', '', 0, 0, 2),
(106, 5, 0, 'Forward Smash', '', 0, 0, 3),
(107, 5, 0, 'Neutral B (air)', '', 0, 0, 4),
(108, 5, 0, 'Forward Air', '', 0, 0, 4),
(109, 5, 0, 'Down Smash', '', 0, 0, 3),
(110, 5, 0, 'Up Smash', '', 0, 0, 3),
(111, 5, 0, 'Running Grab', '', 0, 0, 5),
(112, 5, 0, 'Down B', '', 0, 0, 0),
(113, 5, 0, 'Forward B', '', 0, 0, 4),
(114, 5, 0, 'Air Dodge', '', 0, 0, 4),
(115, 5, 0, 'Up B', '', 0, 0, 0),
(116, 5, 0, 'Backwards Roll', '', 0, 0, 6),
(117, 5, 0, 'Forward Roll', '', 0, 0, 6),
(118, 5, 0, 'Dodge', '', 0, 0, 6),
(119, 6, 0, 'Neutral B', '', 0, 0, 0),
(120, 6, 0, 'Neutral B (air)', '', 0, 0, 0),
(121, 6, 0, 'Forward B (air)', '', 0, 0, 0),
(122, 6, 0, 'Down B', '', 0, 0, 0),
(123, 6, 0, 'Up B', '', 0, 0, 0),
(124, 6, 0, 'Jab 1', '', 0, 0, 1),
(125, 6, 0, 'Jab 2', '', 0, 0, 1),
(126, 6, 0, 'Jab 3', '', 0, 0, 1),
(127, 6, 0, 'Forward Tilt High', '', 0, 0, 2),
(128, 6, 0, 'Forward Tilt Low', '', 0, 0, 2),
(129, 6, 0, 'Forward Tilt', '', 0, 0, 2),
(130, 6, 0, 'Down Tilt', '', 0, 0, 2),
(131, 6, 0, 'Up Tilt', '', 0, 0, 2),
(132, 6, 0, 'Forward Smash', '', 0, 0, 3),
(133, 6, 0, 'Up Smash', '', 0, 0, 3),
(134, 6, 0, 'Down Smash', '', 0, 0, 3),
(135, 6, 0, 'Neutral Air', '', 0, 0, 4),
(136, 6, 0, 'Up Air', '', 0, 0, 4),
(137, 6, 0, 'Down Air', '', 0, 0, 4),
(138, 6, 0, 'Forward Air', '', 0, 0, 4),
(139, 6, 0, 'Back Air', '', 0, 0, 4),
(140, 6, 0, 'Backwards Roll', '', 0, 0, 5),
(141, 6, 0, 'Dash Attack', '', 0, 0, 5),
(142, 6, 0, 'Running Grab', '', 0, 0, 5),
(143, 6, 0, 'Standing Grab', '', 0, 0, 5),
(144, 6, 0, 'Air Dodge', '', 0, 0, 6),
(145, 6, 0, 'Dodge', '', 0, 0, 6),
(146, 6, 0, 'Forward Roll', '', 0, 0, 6),
(147, 7, 0, 'Neutral B', '', 0, 0, 0),
(148, 7, 0, 'Jab 1', '', 0, 0, 1),
(149, 7, 0, 'Forward Tilt High', '', 0, 0, 2),
(150, 7, 0, 'Forward Tilt', '', 0, 0, 2),
(151, 7, 0, 'Forward Tilt Low', '', 0, 0, 2),
(152, 7, 0, 'Up Tilt', '', 0, 0, 2),
(153, 7, 0, 'Down Tilt', '', 0, 0, 2),
(154, 7, 0, 'Forward Smash (High)', '', 0, 0, 3),
(155, 7, 0, 'Down Smash', '', 0, 0, 3),
(156, 7, 0, 'Back Air', '', 0, 0, 4),
(157, 7, 0, 'Down Air', '', 0, 0, 4),
(158, 7, 0, 'Forward Smash (Low)', '', 0, 0, 3),
(159, 7, 0, 'Down B (Ground)', '', 0, 0, 0),
(160, 7, 0, 'Up Smash', '', 0, 0, 3),
(161, 7, 0, 'Forward B (Ground)', '', 0, 0, 0),
(162, 7, 0, 'Forward B (Air)', '', 0, 0, 0),
(163, 7, 0, 'Neutral Air', '', 0, 0, 4),
(164, 7, 0, 'Down B (Air)', '', 0, 0, 0),
(165, 7, 0, 'Up B', '', 0, 0, 0),
(166, 7, 0, 'Forward B (Air)', '', 0, 0, 0),
(167, 8, 0, 'Down B', '', 0, 0, 0),
(168, 8, 0, 'Back Air', '', 0, 0, 0),
(169, 8, 0, 'Neutral B', '', 0, 0, 0),
(170, 8, 0, 'Forward B', '', 0, 0, 0),
(171, 8, 0, 'Up B', '', 0, 0, 0),
(172, 8, 0, 'Jab 1', '', 0, 0, 1),
(173, 8, 0, 'Jab 2', '', 0, 0, 1),
(174, 8, 0, 'Down Tilt', '', 0, 0, 2),
(175, 8, 0, 'Up Tilt', '', 0, 0, 2),
(176, 8, 0, 'Forward Tilt Low', '', 0, 0, 2),
(177, 8, 0, 'Forward Tilt High', '', 0, 0, 2),
(178, 8, 0, 'Forward Smash', '', 0, 0, 3),
(179, 8, 0, 'Down Smash', '', 0, 0, 3),
(180, 8, 0, 'Up Smash', '', 0, 0, 3),
(181, 8, 0, 'Neutral Air', '', 0, 0, 4),
(182, 8, 0, 'Forward Air', '', 0, 0, 4),
(183, 8, 0, 'Down Air', '', 0, 0, 4),
(184, 8, 0, 'Up Air', '', 0, 0, 4),
(185, 8, 0, 'Running Grab', '', 0, 0, 5),
(186, 8, 0, 'Dash Attack', '', 0, 0, 5),
(187, 8, 0, 'Backwards Roll', '', 0, 0, 6),
(188, 8, 0, 'Forward Roll', '', 0, 0, 6),
(189, 8, 0, 'Dodge', '', 0, 0, 6),
(190, 8, 0, 'Air Dodge', '', 0, 0, 6),
(191, 8, 0, 'Standing Grab', '', 0, 0, 5),
(192, 9, 0, 'Down B', '', 0, 0, 0),
(193, 9, 0, 'Jab 1', '', 0, 0, 1),
(194, 9, 0, 'Jab 2', '', 0, 0, 1),
(195, 9, 0, 'Forward Tilt', '', 0, 0, 2),
(196, 9, 0, 'Forward Tilt High', '', 0, 0, 2),
(197, 9, 0, 'Forward Tilt Low', '', 0, 0, 2),
(198, 9, 0, 'Down Tilt', '', 0, 0, 2),
(199, 9, 0, 'Up Tilt', '', 0, 0, 2),
(200, 9, 0, 'Back Air', '', 0, 0, 4),
(201, 9, 0, 'Air Dodge', '', 0, 0, 6),
(202, 9, 0, 'Forward Roll', '', 0, 0, 6),
(203, 9, 0, 'Forward Smash', '', 0, 0, 3),
(204, 9, 0, 'Up Air', '', 0, 0, 4),
(205, 9, 0, 'Neutral B', '', 0, 0, 0),
(206, 9, 0, 'Neutral Air', '', 0, 0, 4),
(207, 9, 0, 'Down Air', '', 0, 0, 4),
(208, 9, 0, 'Forward Air', '', 0, 0, 4),
(209, 9, 0, 'Running Grab', '', 0, 0, 5),
(210, 9, 0, 'Forward B', '', 0, 0, 0),
(211, 9, 0, 'Up B', '', 0, 0, 0),
(212, 9, 0, 'Dash Attack', '', 0, 0, 5),
(213, 9, 0, 'Standing Grab', '', 0, 0, 5),
(214, 9, 0, 'Backwards Roll', '', 0, 0, 6),
(215, 10, 0, 'Forward B (air)', '', 0, 0, 0),
(216, 10, 0, 'Jab 1', '', 0, 0, 1),
(217, 10, 0, 'Jab 2', '', 0, 0, 1),
(218, 10, 0, 'Jab 3', '', 0, 0, 1),
(219, 10, 0, 'Down Tilt', '', 0, 0, 2),
(220, 10, 0, 'Standing Grab', '', 0, 0, 5),
(221, 10, 0, 'Forward Tilt High', '', 0, 0, 2),
(222, 10, 0, 'Running Grab', '', 0, 0, 5),
(223, 10, 0, 'Up B', '', 0, 0, 0),
(224, 10, 0, 'Forward Smash', '', 0, 0, 3),
(225, 10, 0, 'Forward Tilt Low', '', 0, 0, 2),
(226, 10, 0, 'Up Tilt', '', 0, 0, 2),
(227, 10, 0, 'Up Smash', '', 0, 0, 3),
(228, 10, 0, 'Down Smash', '', 0, 0, 3),
(229, 10, 0, 'Dash Attack', '', 0, 0, 5),
(230, 10, 0, 'Back Air', '', 0, 0, 4),
(231, 10, 0, 'Neutral Air', '', 0, 0, 4),
(232, 10, 0, 'Down Air', '', 0, 0, 4),
(233, 10, 0, 'Forward Air', '', 0, 0, 4),
(234, 10, 0, 'Neutral B', '', 0, 0, 0),
(235, 10, 0, 'Down B', '', 0, 0, 0),
(236, 10, 0, 'Up Air', '', 0, 0, 4),
(237, 11, 0, 'Up Smash', '', 0, 0, 0),
(238, 11, 0, 'Jab 1', '', 0, 0, 1),
(239, 11, 0, 'Forward Tilt', '', 0, 0, 2),
(240, 11, 0, 'Down Tilt', '', 0, 0, 2),
(241, 11, 0, 'Forward Smash', '', 0, 0, 3),
(242, 11, 0, 'Neutral Air', '', 0, 0, 4),
(243, 11, 0, 'Back Air', '', 0, 0, 4),
(244, 11, 0, 'Up Air', '', 0, 0, 4),
(245, 11, 0, 'Down Air', '', 0, 0, 4),
(246, 11, 0, 'Forward Air', '', 0, 0, 4),
(247, 11, 0, 'Z Air', '', 0, 0, 4),
(248, 11, 0, 'Dash Attack', '', 0, 0, 5),
(249, 11, 0, 'Up B (Ground)', '', 0, 0, 0),
(250, 11, 0, 'Running Grab', '', 0, 0, 5),
(251, 11, 0, 'Up B (Air)', '', 0, 0, 0),
(252, 11, 0, 'Neutral B', '', 0, 0, 0),
(253, 11, 0, 'Standing Grab', '', 0, 0, 5),
(254, 11, 0, 'Up B', '', 0, 0, 0),
(255, 11, 0, 'Jab 2', '', 0, 0, 1),
(256, 11, 0, 'Jab 3', '', 0, 0, 1),
(257, 11, 0, 'Down Smash', '', 0, 0, 3),
(258, 11, 0, 'Up Tilt', '', 0, 0, 2),
(259, 11, 0, 'Jab (Rapid)', '', 0, 0, 1),
(260, 12, 0, 'Jab 1', '', 0, 0, 1),
(261, 12, 0, 'Jab 2', '', 0, 0, 1),
(262, 12, 0, 'Jab 3', '', 0, 0, 1),
(263, 12, 0, 'Forward Tilt High', '', 0, 0, 2),
(264, 12, 0, 'Forward Tilt', '', 0, 0, 2),
(265, 12, 0, 'Forward Tilt Low', '', 0, 0, 2),
(266, 12, 0, 'Neutral Air', '', 0, 0, 4),
(267, 12, 0, 'Down Tilt', '', 0, 0, 2),
(268, 12, 0, 'Neutral B', '', 0, 0, 0),
(269, 12, 0, 'Up B', '', 0, 0, 0),
(270, 12, 0, 'Down B (Air)', '', 0, 0, 0),
(271, 12, 0, 'Forward B', '', 0, 0, 0),
(272, 12, 0, 'Taunt', '', 0, 0, 5),
(273, 12, 0, 'Up Tilt', '', 0, 0, 2),
(274, 12, 0, 'Forward Smash High', '', 0, 0, 3),
(275, 12, 0, 'Up Smash', '', 0, 0, 3),
(276, 12, 0, 'Forward Smash Low', '', 0, 0, 3),
(277, 12, 0, 'Up Air', '', 0, 0, 4),
(278, 12, 0, 'Down Smash', '', 0, 0, 3),
(279, 12, 0, 'Forward Air', '', 0, 0, 4),
(280, 12, 0, 'Get Up Attack', '', 0, 0, 6),
(281, 12, 0, 'Down Air', '', 0, 0, 4),
(282, 12, 0, 'Back Air', '', 0, 0, 4),
(283, 12, 0, 'Down B (Ground)', '', 0, 0, 0),
(284, 12, 0, 'Standing Grab', '', 0, 0, 5),
(285, 12, 0, 'Running Grab', '', 0, 0, 5),
(286, 13, 0, 'Forward B', '', 0, 0, 0),
(287, 13, 0, 'Jab 1', '', 0, 0, 1),
(288, 13, 0, 'Jab 2', '', 0, 0, 1),
(289, 13, 0, 'Jab 3', '', 0, 0, 1),
(290, 13, 0, 'Forward Tilt High', '', 0, 0, 2),
(291, 13, 0, 'Forward Tilt', '', 0, 0, 2),
(292, 13, 0, 'Forward Tilt Low', '', 0, 0, 2),
(293, 13, 0, 'Down Tilt', '', 0, 0, 2),
(294, 13, 0, 'Up Tilt', '', 0, 0, 2),
(295, 13, 0, 'Forward Smash High', '', 0, 0, 3),
(296, 13, 0, 'Up Smash', '', 0, 0, 3),
(297, 13, 0, 'Dash Attack', '', 0, 0, 5),
(298, 13, 0, 'Back Air', '', 0, 0, 4),
(299, 13, 0, 'Forward Air', '', 0, 0, 4),
(300, 13, 0, 'Down B', '', 0, 0, 0),
(301, 13, 0, 'Standing Grab', '', 0, 0, 5),
(302, 13, 0, 'Up B', '', 0, 0, 0),
(303, 13, 0, 'Forward Smash Low', '', 0, 0, 3),
(304, 13, 0, 'Running Grab', '', 0, 0, 5),
(305, 13, 0, 'Down Smash', '', 0, 0, 3),
(306, 13, 0, 'Neutral Air', '', 0, 0, 4),
(307, 13, 0, 'Up Air', '', 0, 0, 4),
(308, 14, 0, 'Down B', '', 0, 0, 0),
(309, 14, 0, 'Forward B 3 Down', '', 0, 0, 0),
(310, 14, 0, 'Neutral B', '', 0, 0, 0),
(311, 14, 0, 'Jab 1', '', 0, 0, 1),
(312, 14, 0, 'Jab 2', '', 0, 0, 1),
(313, 14, 0, 'Forward Tilt', '', 0, 0, 2),
(314, 14, 0, 'Down Tilt', '', 0, 0, 2),
(315, 14, 0, 'Up Tilt', '', 0, 0, 2),
(316, 14, 0, 'Forward Smash', '', 0, 0, 3),
(317, 14, 0, 'Up Smash', '', 0, 0, 3),
(318, 14, 0, 'Down Smash', '', 0, 0, 3),
(319, 14, 0, 'Neutral Air', '', 0, 0, 4),
(320, 14, 0, 'Forward Air', '', 0, 0, 4),
(321, 14, 0, 'Dash Attack', '', 0, 0, 5),
(322, 14, 0, 'Back Air', '', 0, 0, 4),
(323, 14, 0, 'Running Grab', '', 0, 0, 5),
(324, 14, 0, 'Up Air', '', 0, 0, 4),
(325, 14, 0, 'Down Air', '', 0, 0, 4),
(326, 14, 0, 'Forward B 3 Neutral', '', 0, 0, 0),
(327, 14, 0, 'Forward B 3 Up', '', 0, 0, 0),
(328, 14, 0, 'Forward B 4 Neutral', '', 0, 0, 0),
(329, 14, 0, 'Forward B 4 Down', '', 0, 0, 0),
(330, 14, 0, 'Backwards Roll', '', 0, 0, 6),
(331, 14, 0, 'Forward Roll', '', 0, 0, 6),
(332, 14, 0, 'Forward B 4 Up', '', 0, 0, 0),
(333, 14, 0, 'Forward B 2 (Low)', '', 0, 0, 0),
(334, 14, 0, 'Up B', '', 0, 0, 0),
(335, 14, 0, 'Air Dodge', '', 0, 0, 6),
(336, 14, 0, 'Dodge', '', 0, 0, 6),
(337, 14, 0, 'Standing Grab', '', 0, 0, 5),
(338, 14, 0, 'Forward B 1', '', 0, 0, 0),
(339, 14, 0, 'Forward B 2 (High)', '', 0, 0, 0),
(340, 15, 0, 'Jab 1', '', 0, 0, 1),
(341, 15, 0, 'Jab 2', '', 0, 0, 1),
(342, 15, 0, 'Forward Tilt', '', 0, 0, 2),
(343, 15, 0, 'Down Tilt', '', 0, 0, 2),
(344, 15, 0, 'Down Smash', '', 0, 0, 3),
(345, 15, 0, 'Up Smash', '', 0, 0, 3),
(346, 15, 0, 'Forward Smash', '', 0, 0, 3),
(347, 15, 0, 'Back Air', '', 0, 0, 4),
(348, 15, 0, 'Neutral Air', '', 0, 0, 4),
(349, 15, 0, 'Forward Air', '', 0, 0, 4),
(350, 15, 0, 'Dash Attack', '', 0, 0, 5),
(351, 15, 0, 'Backwards Throw', '', 0, 0, 5),
(352, 15, 0, 'Forward Tilt High', '', 0, 0, 2),
(353, 15, 0, 'Air Dodge', '', 0, 0, 6),
(354, 15, 0, 'Down B', '', 0, 0, 0),
(355, 15, 0, 'Standing Grab', '', 0, 0, 5),
(356, 15, 0, 'Up Tilt', '', 0, 0, 2),
(357, 15, 0, 'Forward Tilt Low', '', 0, 0, 2),
(358, 15, 0, 'Up Air', '', 0, 0, 4),
(359, 15, 0, 'Down Air', '', 0, 0, 4),
(360, 15, 0, 'Running Grab', '', 0, 0, 5),
(361, 15, 0, 'Forward B', '', 0, 0, 0),
(362, 15, 0, 'Forward Roll', '', 0, 0, 6),
(363, 15, 0, 'Backwards Roll', '', 0, 0, 6),
(364, 15, 0, 'Dodge', '', 0, 0, 6),
(365, 15, 0, 'Forward Throw', '', 0, 0, 5),
(366, 16, 0, 'Down B', '', 0, 0, 0),
(367, 16, 0, 'Down B (Charged)', '', 0, 0, 0),
(368, 16, 0, 'Up B', '', 0, 0, 0),
(369, 16, 0, 'Neutral Air', '', 0, 0, 4),
(370, 16, 0, 'Forward Air', '', 0, 0, 4),
(371, 16, 0, 'Down Air', '', 0, 0, 4),
(372, 16, 0, 'Running Grab', '', 0, 0, 5),
(373, 16, 0, 'Jab (Rapid)', '', 0, 0, 1),
(374, 16, 0, 'Up Tilt', '', 0, 0, 2),
(375, 16, 0, 'Up Smash', '', 0, 0, 3),
(376, 16, 0, 'Forward Smash', '', 0, 0, 3),
(377, 16, 0, 'Up Air', '', 0, 0, 4),
(378, 16, 0, 'Dash Attack', '', 0, 0, 5),
(379, 16, 0, 'Neutral B', '', 0, 0, 0),
(380, 16, 0, 'Down Smash', '', 0, 0, 3),
(381, 16, 0, 'Forward B (Weak)', '', 0, 0, 0),
(382, 16, 0, 'Forward Tilt', '', 0, 0, 2),
(383, 16, 0, 'Down Tilt', '', 0, 0, 2),
(384, 16, 0, 'Standing Grab', '', 0, 0, 5),
(385, 16, 0, 'Jab', '', 0, 0, 1),
(386, 16, 0, 'Forward B (Strong)', '', 0, 0, 0),
(387, 17, 0, 'Jab 1', '', 0, 0, 1),
(388, 17, 0, 'Jab 3', '', 0, 0, 1),
(389, 17, 0, 'Jab 2', '', 0, 0, 1),
(390, 17, 0, 'Forward Tilt High', '', 0, 0, 2),
(391, 17, 0, 'Forward Tilt Low', '', 0, 0, 2),
(392, 17, 0, 'Up Tilt', '', 0, 0, 2),
(393, 17, 0, 'Forward Smash', '', 0, 0, 3),
(394, 17, 0, 'Forward B (Air)', '', 0, 0, 0),
(395, 17, 0, 'Up B 1', '', 0, 0, 0),
(396, 17, 0, 'Running Grab', '', 0, 0, 5),
(397, 17, 0, 'Down B', '', 0, 0, 0),
(398, 17, 0, 'Up B 2', '', 0, 0, 0),
(399, 17, 0, 'Forward B (Ground)', '', 0, 0, 0),
(400, 17, 0, 'Neutral B', '', 0, 0, 0),
(401, 17, 0, 'Dash Attack', '', 0, 0, 5),
(402, 17, 0, 'Standing Grab', '', 0, 0, 5),
(403, 17, 0, 'Up Air', '', 0, 0, 4),
(404, 17, 0, 'Forward Air', '', 0, 0, 4),
(405, 17, 0, 'Back Air', '', 0, 0, 4),
(406, 17, 0, 'Down Air', '', 0, 0, 4),
(407, 17, 0, 'Neutral Air', '', 0, 0, 4),
(408, 17, 0, 'Down Smash', '', 0, 0, 3),
(409, 17, 0, 'Down Tilt', '', 0, 0, 2),
(410, 18, 0, 'Forward Tilt', '', 0, 0, 2),
(411, 18, 0, 'Up Tilt', '', 0, 0, 2),
(412, 18, 0, 'Down Smash', '', 0, 0, 3),
(413, 18, 0, 'Forward Smash (Golf Club)', '', 0, 0, 3),
(414, 18, 0, 'Forward Smash (Racket)', '', 0, 0, 3),
(415, 18, 0, 'Forward Smash (Frying Pan)', '', 0, 0, 3),
(416, 18, 0, 'Up Smash', '', 0, 0, 3),
(417, 18, 0, 'Down Air', '', 0, 0, 4),
(418, 18, 0, 'Back Air', '', 0, 0, 4),
(419, 18, 0, 'Forward Air', '', 0, 0, 4),
(420, 18, 0, 'Running Grab', '', 0, 0, 5),
(421, 18, 0, 'Dash Attack', '', 0, 0, 5),
(422, 18, 0, 'Throw', '', 0, 0, 6),
(423, 18, 0, 'Down Tilt', '', 0, 0, 2),
(424, 18, 0, 'Forward B', '', 0, 0, 0),
(425, 18, 0, 'Forward B (air)', '', 0, 0, 0),
(426, 18, 0, 'Up B', '', 0, 0, 0),
(427, 18, 0, 'Forward Roll', '', 0, 0, 6),
(428, 18, 0, 'Dodge', '', 0, 0, 6),
(429, 18, 0, 'Air Dodge', '', 0, 0, 6),
(430, 18, 0, 'Jab 2', '', 0, 0, 1),
(431, 18, 0, 'Up Air', '', 0, 0, 4),
(432, 18, 0, 'Neutral Air', '', 0, 0, 4),
(433, 18, 0, 'Jab 1', '', 0, 0, 1),
(434, 18, 0, 'Down B', '', 0, 0, 0),
(435, 18, 0, 'Standing Grab', '', 0, 0, 5),
(436, 19, 0, 'Up Tilt', '', 0, 0, 2),
(437, 19, 0, 'Dodge', '', 0, 0, 6),
(438, 19, 0, 'Neutral B (air)', '', 0, 0, 0),
(439, 19, 0, 'Down Tilt', '', 0, 0, 2),
(440, 19, 0, 'Jab 1', '', 0, 0, 1),
(441, 19, 0, 'Forward Tilt Low', '', 0, 0, 2),
(442, 19, 0, 'Down Air', '', 0, 0, 4),
(443, 19, 0, 'Forward Tilt High', '', 0, 0, 2),
(444, 19, 0, 'Up Smash', '', 0, 0, 3),
(445, 19, 0, 'Down Smash', '', 0, 0, 3),
(446, 19, 0, 'Back Air', '', 0, 0, 4),
(447, 19, 0, 'Forward B', '', 0, 0, 0),
(448, 19, 0, 'Running Grab', '', 0, 0, 5),
(449, 19, 0, 'Forward Air', '', 0, 0, 4),
(450, 19, 0, 'Up Air', '', 0, 0, 4),
(451, 19, 0, 'Forward Roll', '', 0, 0, 6),
(452, 19, 0, 'Dash Attack', '', 0, 0, 5),
(453, 19, 0, 'Forward Smash', '', 0, 0, 3),
(454, 19, 0, 'Standing Grab', '', 0, 0, 5),
(455, 19, 0, 'Air Dodge', '', 0, 0, 6),
(456, 19, 0, 'Forward B (air)', '', 0, 0, 4),
(457, 20, 0, 'Down B', '', 0, 0, 0),
(458, 20, 0, 'Jab 1', '', 0, 0, 1),
(459, 20, 0, 'Forward Tilt High', '', 0, 0, 2),
(460, 20, 0, 'Forward Tilt Low', '', 0, 0, 2),
(461, 20, 0, 'Up Tilt', '', 0, 0, 2),
(462, 20, 0, 'Down Tilt', '', 0, 0, 2),
(463, 20, 0, 'Down Smash', '', 0, 0, 3),
(464, 20, 0, 'Forward Smash', '', 0, 0, 3),
(465, 20, 0, 'Up Air', '', 0, 0, 4),
(466, 20, 0, 'Standing Grab', '', 0, 0, 5),
(467, 20, 0, 'Neutral B (air)', '', 0, 0, 0),
(468, 20, 0, 'Forward Roll', '', 0, 0, 6),
(469, 20, 0, 'Dash Attack', '', 0, 0, 5),
(470, 20, 0, 'Up Smash', '', 0, 0, 3),
(471, 20, 0, 'Neutral Air', '', 0, 0, 4),
(472, 20, 0, 'Air Dodge', '', 0, 0, 6),
(473, 20, 0, 'Running Grab', '', 0, 0, 5),
(474, 20, 0, 'Dodge', '', 0, 0, 6),
(475, 20, 0, 'Up B', '', 0, 0, 0),
(476, 20, 0, 'Forward B', '', 0, 0, 0),
(477, 20, 0, 'Backwards Roll', '', 0, 0, 6),
(478, 20, 0, 'Back Air', '', 0, 0, 4),
(479, 20, 0, 'Down Air', '', 0, 0, 4),
(480, 20, 0, 'Forward Air', '', 0, 0, 4),
(481, 21, 0, 'Down B', '', 0, 0, 0),
(482, 21, 0, 'Neutral B', '', 0, 0, 0),
(483, 21, 0, 'Up B', '', 0, 0, 0),
(484, 21, 0, 'Jab 1', '', 0, 0, 1),
(485, 21, 0, 'Neutral Air', '', 0, 0, 2),
(486, 21, 0, 'Down Tilt', '', 0, 0, 2),
(487, 21, 0, 'Up Tilt', '', 0, 0, 2),
(488, 21, 0, 'Forward Tilt', '', 0, 0, 2),
(489, 21, 0, 'Up Smash', '', 0, 0, 3),
(490, 21, 0, 'Down Smash', '', 0, 0, 3),
(491, 21, 0, 'Forward Smash', '', 0, 0, 3),
(492, 21, 0, 'Forward Air', '', 0, 0, 4),
(493, 21, 0, 'Down Air', '', 0, 0, 4),
(494, 21, 0, 'Back Air', '', 0, 0, 4),
(495, 21, 0, 'Up Air', '', 0, 0, 4),
(496, 21, 0, 'Dash Attack', '', 0, 0, 5),
(497, 21, 0, 'Dodge', '', 0, 0, 6),
(498, 21, 0, 'Forward B 4 Neutral', '', 0, 0, 0),
(499, 21, 0, 'Forward B 4 Up', '', 0, 0, 0),
(500, 21, 0, 'Forward B 2 (High)', '', 0, 0, 0),
(501, 21, 0, 'Air Dodge', '', 0, 0, 6),
(502, 21, 0, 'Forward B 3 Up', '', 0, 0, 0),
(503, 21, 0, 'Forward B 2 (Low)', '', 0, 0, 0),
(504, 21, 0, 'Forward B 3 Neutral', '', 0, 0, 0),
(505, 21, 0, 'Neutral B (air)', '', 0, 0, 0),
(506, 21, 0, 'Forward B 3 Down', '', 0, 0, 0),
(507, 21, 0, 'Forward B 4 Down', '', 0, 0, 0),
(508, 21, 0, 'Forward B 1', '', 0, 0, 0),
(509, 21, 0, 'Standing Grab', '', 0, 0, 5),
(510, 21, 0, 'Backwards Roll', '', 0, 0, 6),
(511, 21, 0, 'Forward B 4 Up', '', 0, 0, 6),
(512, 21, 0, 'Running Grab', '', 0, 0, 5),
(513, 22, 0, 'Up B (Air)', '', 0, 0, 0),
(514, 22, 0, 'Jab 1', '', 0, 0, 1),
(515, 22, 0, 'Back Air', '', 0, 0, 4),
(516, 22, 0, 'Down Air', '', 0, 0, 4),
(517, 22, 0, 'Forward Tilt High', '', 0, 0, 2),
(518, 22, 0, 'Forward B (Air) (Strong)', '', 0, 0, 0),
(519, 22, 0, 'Down Smash', '', 0, 0, 3),
(520, 22, 0, 'Up Smash', '', 0, 0, 3),
(521, 22, 0, 'Jab 2', '', 0, 0, 1),
(522, 22, 0, 'Down B', '', 0, 0, 0),
(523, 22, 0, 'Forward B (Ground) (Weak)', '', 0, 0, 0),
(524, 22, 0, 'Neutral B (charged)', '', 0, 0, 0),
(525, 22, 0, 'Forward B (Air) (Weak)', '', 0, 0, 0),
(526, 22, 0, 'Forward B (Ground) (Strong)', '', 0, 0, 0),
(527, 22, 0, 'Neutral B', '', 0, 0, 0),
(528, 22, 0, 'Up B (Ground)', '', 0, 0, 0),
(529, 22, 0, 'Air Dodge', '', 0, 0, 6),
(530, 22, 0, 'Backwards Roll', '', 0, 0, 6),
(531, 22, 0, 'Dash Attack', '', 0, 0, 5),
(532, 22, 0, 'Dodge', '', 0, 0, 6),
(533, 22, 0, 'Down Tilt', '', 0, 0, 2),
(534, 22, 0, 'Running Grab', '', 0, 0, 5),
(535, 22, 0, 'Standing Grab', '', 0, 0, 5),
(536, 22, 0, 'Forward Air', '', 0, 0, 4),
(537, 22, 0, 'Forward Smash', '', 0, 0, 3),
(538, 22, 0, 'Forward Tilt Low', '', 0, 0, 2),
(539, 22, 0, 'Neutral Air', '', 0, 0, 4),
(540, 22, 0, 'Forward Roll', '', 0, 0, 6),
(541, 22, 0, 'Up Tilt', '', 0, 0, 2),
(542, 22, 0, 'Up Air', '', 0, 0, 4),
(543, 23, 0, 'Up B', '', 0, 0, 0),
(544, 23, 0, 'Jab 1', '', 0, 0, 1),
(545, 23, 0, 'Jab 3', '', 0, 0, 1),
(546, 23, 0, 'Jab 2', '', 0, 0, 1),
(547, 23, 0, 'Down Tilt', '', 0, 0, 2),
(548, 23, 0, 'Forward Tilt', '', 0, 0, 2),
(549, 23, 0, 'Neutral Air', '', 0, 0, 4),
(550, 23, 0, 'Forward Air', '', 0, 0, 4),
(551, 23, 0, 'Dash Attack', '', 0, 0, 5),
(552, 23, 0, 'Standing Grab', '', 0, 0, 5),
(553, 23, 0, 'Up Air', '', 0, 0, 2),
(554, 23, 0, 'Backwards Roll', '', 0, 0, 6),
(555, 23, 0, 'Running Grab', '', 0, 0, 5),
(556, 23, 0, 'Dodge', '', 0, 0, 6),
(557, 23, 0, 'Forward Roll', '', 0, 0, 6),
(558, 23, 0, 'Forward Smash', '', 0, 0, 3),
(559, 23, 0, 'Forward B', '', 0, 0, 0),
(560, 23, 0, 'Back Air', '', 0, 0, 4),
(561, 23, 0, 'Down Air', '', 0, 0, 4),
(562, 23, 0, 'Neutral B (charged)', '', 0, 0, 0),
(563, 23, 0, 'Air Dodge', '', 0, 0, 6),
(564, 23, 0, 'Down B', '', 0, 0, 0),
(565, 23, 0, 'Down Smash', '', 0, 0, 3),
(566, 23, 0, 'Neutral B (air)', '', 0, 0, 0),
(567, 23, 0, 'Up Air', '', 0, 0, 4),
(568, 23, 0, 'Up Smash', '', 0, 0, 3),
(569, 24, 0, 'Jab 1', '', 0, 0, 1),
(570, 24, 0, 'Up Tilt', '', 0, 0, 2),
(571, 24, 0, 'Forward Tilt', '', 0, 0, 2),
(572, 24, 0, 'Down Tilt', '', 0, 0, 2),
(573, 24, 0, 'Up Smash', '', 0, 0, 3),
(574, 24, 0, 'Backwards Roll', '', 0, 0, 6),
(575, 24, 0, 'Up Air', '', 0, 0, 4),
(576, 24, 0, 'Jab 2', '', 0, 0, 1),
(577, 24, 0, 'Dash Attack', '', 0, 0, 5),
(578, 24, 0, 'Forward Smash', '', 0, 0, 3),
(579, 24, 0, 'Down Smash', '', 0, 0, 3),
(580, 24, 0, 'Standing Grab', '', 0, 0, 5),
(581, 24, 0, 'Down B', '', 0, 0, 0),
(582, 24, 0, 'Air Dodge', '', 0, 0, 6),
(583, 24, 0, 'Down Air', '', 0, 0, 4),
(584, 24, 0, 'Back Air', '', 0, 0, 4),
(585, 24, 0, 'Running Grab', '', 0, 0, 5),
(586, 24, 0, 'Neutral B', '', 0, 0, 0),
(587, 24, 0, 'Up B', '', 0, 0, 0),
(588, 24, 0, 'Forward Air', '', 0, 0, 4),
(589, 24, 0, 'Dodge', '', 0, 0, 6),
(590, 24, 0, 'Neutral Air', '', 0, 0, 4),
(591, 24, 0, 'Forward Roll', '', 0, 0, 6),
(592, 25, 0, 'Up B (Ground)', '', 0, 0, 0),
(593, 25, 0, 'Jab 2', '', 0, 0, 1),
(594, 25, 0, 'Up Air', '', 0, 0, 4),
(595, 25, 0, 'Back Air', '', 0, 0, 4),
(596, 25, 0, 'Down Tilt', '', 0, 0, 2),
(597, 25, 0, 'Forward Roll', '', 0, 0, 6),
(598, 25, 0, 'Backwards Roll', '', 0, 0, 6),
(599, 25, 0, 'Air Dodge', '', 0, 0, 6),
(600, 25, 0, 'Z Air', '', 0, 0, 4),
(601, 25, 0, 'Forward Air', '', 0, 0, 4),
(602, 25, 0, 'Neutral B', '', 0, 0, 0),
(603, 25, 0, 'Up B (Air)', '', 0, 0, 0),
(604, 25, 0, 'Neutral Air', '', 0, 0, 4),
(605, 25, 0, 'Forward Tilt', '', 0, 0, 2),
(606, 25, 0, 'Jab 1', '', 0, 0, 1),
(607, 25, 0, 'Neutral B (Charging)', '', 0, 0, 0),
(608, 25, 0, 'Down B', '', 0, 0, 0),
(609, 25, 0, 'Forward B (Start)', '', 0, 0, 0),
(610, 25, 0, 'Forward B (End)', '', 0, 0, 0),
(611, 25, 0, 'Dash Attack', '', 0, 0, 5),
(612, 25, 0, 'Running Grab', '', 0, 0, 5),
(613, 25, 0, 'Down Air', '', 0, 0, 4),
(614, 25, 0, 'Down Smash', '', 0, 0, 3),
(615, 25, 0, 'Forward Smash', '', 0, 0, 3),
(616, 25, 0, 'Standing Grab', '', 0, 0, 5),
(617, 25, 0, 'Jab 3', '', 0, 0, 1),
(618, 25, 0, 'Dodge', '', 0, 0, 6),
(619, 25, 0, 'Up Smash', '', 0, 0, 3),
(620, 25, 0, 'Up Tilt', '', 0, 0, 2),
(621, 26, 0, 'Up Tilt', '', 0, 0, 3),
(622, 26, 0, 'Down Smash', '', 0, 0, 3),
(623, 26, 0, 'Forward B', '', 0, 0, 0),
(624, 26, 0, 'Backwards Roll', '', 0, 0, 6),
(625, 26, 0, 'Neutral Air', '', 0, 0, 4),
(626, 26, 0, 'Down B', '', 0, 0, 0),
(627, 26, 0, 'Air Dodge', '', 0, 0, 6),
(628, 26, 0, 'Forward Roll', '', 0, 0, 6),
(629, 26, 0, 'Standing Grab', '', 0, 0, 5),
(630, 26, 0, 'Back Air', '', 0, 0, 4),
(631, 26, 0, 'Forward Air', '', 0, 0, 4),
(632, 26, 0, 'Running Grab', '', 0, 0, 5),
(633, 26, 0, 'Down Air', '', 0, 0, 4),
(634, 26, 0, 'Neutral B', '', 0, 0, 0),
(635, 26, 0, 'Up Air', '', 0, 0, 4),
(636, 26, 0, 'Down Tilt', '', 0, 0, 4),
(637, 26, 0, 'Dash Attack', '', 0, 0, 5),
(638, 26, 0, 'Forward Smash', '', 0, 0, 3),
(639, 26, 0, 'Forward Tilt', '', 0, 0, 2),
(640, 26, 0, 'Dodge', '', 0, 0, 6),
(641, 26, 0, 'Jab 1', '', 0, 0, 6),
(642, 26, 0, 'Up B', '', 0, 0, 0),
(643, 26, 0, 'Up Smash', '', 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `charinfo`
--

CREATE TABLE `charinfo` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `tierdata` int(11) DEFAULT NULL,
  `weight` varchar(11) NOT NULL,
  `fallspeed` varchar(11) NOT NULL,
  `guide` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charinfo`
--

INSERT INTO `charinfo` (`id`, `name`, `tierdata`, `weight`, `fallspeed`, `guide`) VALUES
(1, 'Bowser', 24, '1st', '12th-14th', 'Bowser is the heaviest character in the game, making him very tanky and hard to kill at low percents. His body is enormous though, making him prone to extended combos that usually would not work on any other character. Bowser has trouble dealing with any character with more range than him, or characters that can out-maneuver him.\n'),
(2, 'Captain Falcon', 7, '6th-7th', '2nd', 'Falcon is the fastest character in the game in terms of run speed. His speed allows him to be many places at once, and though most of his moves are slow on startup, he makes up for it with his unmatched speed. Falcon''s main combo finisher is the infamous knee (forward air) as it combos from many of his moves and kills at low percents.\n'),
(3, 'Donkey Kong', 17, '2nd', '4th-5th', 'Donkey Kong is a character that lacks reliable attacks with hit boxes in front of him. Instead his back air, which hits very far behind him, is his greatest asset in the spacing game. DK''s best strategy is to abuse his grab combos, as he can set up for multi-hit juggles against the majority of the cast. Additionally he has a very good horizontal recovery, but not a good vertical.\n'),
(4, 'Dr. Mario', 9, '8th-10th', '16th-18th', 'Dr. Mario is a compact powerhouse, packed with quick aerials and a solid ground game. Overall his range and recovery are weak, but they are made up with his powerful kill moves and ability to get quick kills using his back air and forward b (the cape).'),
(5, 'Falco', 2, '20th-21st', '1st', 'Falco is an aggressive character whose primary strategy is to pressure the opponent. Falco''s vertical mobility is possibly the best in the game. Additionally by using his ''short hop laser'', he can control space horizontally, opening up his opponents for high pressure combos.'),
(6, 'Fox', 1, '22nd', '3rd', 'Fox is easily the most agile character in the game. His speed and combo setups are optimized when paired with SHFFLing and proper use of the shine (down B). Fox is ranked #1 for a good reason, having one of the strongest up-smashes, unmatched speed and close range fighting, as well as the infamous shine. \n'),
(7, 'Ganondorf', 12, '4th', '10th', 'Ganondorf is a bulky and heavy powerhouse. Ganon often gets dominated because of his slow moves and giant body-- but his moves pack a punch. Ganondorf''s attacks kill most characters at low percents and is one of the hardest punishing mid-tiers in the game. Although he spends much of his time simply working for his openings, when he gets them they count.\n'),
(8, 'Ice Climbers', 8, '15th', '19th-21st', 'The Ice Climbers is a character in which the player controls Popo (blue IC depending on costume color), while Nana follows and mimics Popo''s inputs with a slight delay. The main strategy with Ice Climbers is abusing their grab combos, as they can kill off of most grabs. Strategies change constantly with IC''s based on if your Nana is present or not. \n'),
(9, 'Jigglypuff', 5, '24th-25th', '26th', 'Being the 2nd lightest character in the game, Jigglypuff is prone to dying at low percents. Although this is a disadvantage, her elusiveness in the air paired with some of the best aerial attacks in the game makes her a powerful character. Jigglypuff has 5 jumps and is able to float back on to the stage with ease, making recovery very simple. \n'),
(10, 'Kirby', 26, '23rd', '19th-21st', 'A shell of its former self in Smash 64, Kirby has almost no good qualities as a character. Besides the fact that Kirby has 5 jumps, his ground and aerial mobility are terrible.\n'),
(11, 'Link', 16, '6th-7th', '7th-9th', 'Link is a slower but more powerful version of Young Link. He does not have the speed, maneuverability, or projectile game that Young Link offers, but he makes up for it with his strong sword. Additionally, Link has one of the farthest reaching grapple recoveries, making him a unique character to edge-guard.\n'),
(12, 'Luigi', 13, '8th-10th', '19th-21st', 'Luigi has the longest wavedash range in the game because of his low traction. Luigi''s slow run and aerial speeds are made up for with his obscenely long wavedash. Luigi has one of the most unique recoveries in the game, as his up b only sends him vertically, and his forward b sends him horizontally. When using the two in combination, he has a very adequate recovery. \n'),
(13, 'Mario', 14, '8th-10th', '16th-18th', 'Mario is one of the most basic characters in the game. His strengths are similar to Dr. Mario''s in that he has a powerful ground game and is able to set up for edge-guard situations with most of his attacks. Mario''s recovery and range are also weak, but he makes up for it with his powerful ground game.\n'),
(14, 'Marth', 4, '16th', '6th', 'Marth has the most range of anyone in the game. Being one of the few characters that wields a sword, his hitboxes extend very far out, making his defense game great. Marth is a unique character in that his attacks have different hitboxes based on where you hit with the sword (hilt = weak hit, middle = regular hit, tip = strong hit). \n'),
(15, 'Mewtwo', 21, '17th-19th', '22nd-23rd', 'Mewtwo is a poorly designed character, having almost no kill moves and no neutral game. Mewtwo only has a few redeeming qualities, such as his amazing recovery and powerful grabs. It is very hard to combo with/against Mewtwo because of his lack of speed and floatiness.\n'),
(16, 'Mr. Game And Watch', 22, '24th-25th', '16th-18th', 'Although GaW is the last character to unlock, he lacks many of the core qualities that make a character good. A few of GaW''s aerials are non-L-cancellable, making him a pretty slow character. GaW''s ground game is generally bad, and has trouble killing when the opponent is not in combo percentage.'),
(17, 'Ness', 23, '11th', '15th', 'Ness is a character that has a few good pokes, but no reliable kill moves. Ness is a very limiting character on-stage and off-stage, as his ground game has short range and his combos often lack a finisher. As well as his bad on-stage, his recovery takes the longest to start up out of any character, and he is vulnerable for all of it. \n'),
(18, 'Peach', 6, '12th-14th', '22nd-23rd', 'Peach is one of the most unique floaty characters in the game because of her float mechanics. By using a technique called ''float cancelling'' Peach is able to suspend herself in mid air and move horizontally, using any aerial attack. Landing lag after float cancelling is reduced, making her have one of the fastest recovery times on attacks\n'),
(19, 'Pichu', 25, '26th', '12th-14th', 'Obviously Nintendo''s joke character in the cast. All electric attacks used by Pichu deal 1-3% to himself. Pichu is also the lightest character in the game, making him prone to dying at extremely low percents, sometimes even earlier than Jigglypuff. \n'),
(20, 'Pikachu', 10, '20th-21st', '12th-14th', 'Pikachu is pretty much the mid-tier Fox. They share many qualities such as quick combo game, ability to run around on the stage, powerful up smash, and linear recovery. Also like Fox, Pikachu is capable of getting kills at high percent with up smash, as well as low percent kills with up-air. Pikachu is a character that thrives in using quick and weak moves to rack up percent or set up for edge guard situations. \n'),
(21, 'Roy', 20, '17th-19th', '4th-5th', 'Roy is the weak version of Marth. Like Marth, his sword contains different hitboxes depending on where your opponent is hit (hilt = strong hit, middle = regular hit, tip = weak hit). Roy is EXTREMELY hard to hit during his up-b animation, but because of his fast falling speed and bad aerial mobility, his recovery is generally very bad.\n'),
(22, 'Samus', 11, '3rd', '24th-25th', 'Samus is a very linear character, as many of her hitboxes only extend out in straight lines. Although Samus is one of the slowest characters in the game, her defense and control of the pace in the match allow her to be a viable defensive character. Samus can control wide ranges of space by using missile cancelling-- and can control close range with her up-b and tilts.\n'),
(23, 'Sheik', 3, '12th-14th', '7th-9th', 'Sheik is one of the deadliest characters in the game. Although she does not have a ton of offensive options, she makes up for it with her defense and simple, yet highly effective combo game. Sheik''s main assets are her tilts, grab combos, and infamous forward-air\n'),
(24, 'Yoshi', 18, '5th', '11th', ' The most unique quality of Yoshi is his shield, which holds many properties that are unique to Yoshi-- such as its hitstun reduction, inability to jump out of shield, and parrying. Additionally, Yoshi does not have an up-b that helps his recovery. Instead this is balanced by his double jump reaching very high, as well as containing ''super armor'', which means that attacks will damage Yoshi, but the hitstun and knockback are lessened VERY greatly depending on percentage.'),
(25, 'Young Link', 15, '17th-19th', '7th-9th', 'Young Link is a fast character with three different projectiles. Typically his playstyle is very hit-and-run as his run and aerial speeds are both very fast. Young Link generally has weak attacks, but the fact that he can maintain such a high speed while throwing projectiles at your opponent makes him an interesting defensive character.\n'),
(26, 'Zelda', 19, '12th-14th', '24th-25th', 'Zelda is a very floaty character who generally does not have many reliable attacks, besides her back-air and forward-air. Both aerials require precision, as only the tip of the hitbox sends opponents flying far. Zelda has the farthest reaching up-b in the game easily, making it relatively difficult to edge guard her.\n');

-- --------------------------------------------------------

--
-- Table structure for table `chartech`
--

CREATE TABLE `chartech` (
`id` int(11) NOT NULL,
  `charid` int(11) NOT NULL,
  `techid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chartech`
--

INSERT INTO `chartech` (`id`, `charid`, `techid`) VALUES
(1, 2, 1),
(4, 6, 2),
(5, 4, 1),
(6, 4, 21),
(7, 5, 22),
(8, 6, 22),
(10, 14, 1),
(11, 18, 24),
(12, 6, 25),
(13, 5, 25),
(15, 2, 26),
(17, 5, 27),
(18, 6, 27);

-- --------------------------------------------------------

--
-- Table structure for table `framedatajson`
--

CREATE TABLE `framedatajson` (
`id` int(11) NOT NULL,
  `gifid` int(11) NOT NULL,
  `json_text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `framedatajson`
--

INSERT INTO `framedatajson` (`id`, `gifid`, `json_text`) VALUES
(1, 512, '[{"frame":11,"buttons":[""],"ctrlStick":["270","100"]},{"frame":12,"buttons":[""],"ctrlStick":["270","100"]},{"frame":13,"buttons":[""],"ctrlStick":["270","100"]},{"frame":14,"buttons":[""],"ctrlStick":["270","100"]},{"frame":15,"buttons":["y"],"ctrlStick":[]},{"frame":16,"buttons":["l"],"ctrlStick":[]},{"frame":17,"buttons":[""],"ctrlStick":["315","100"]},{"frame":18,"buttons":[""],"ctrlStick":["315","100"]},{"frame":19,"buttons":[""],"ctrlStick":["315","100"]},{"frame":20,"buttons":[""],"ctrlStick":["315","100"]},{"frame":21,"buttons":[""],"ctrlStick":["315","100"]}]'),
(2, 513, '[{"frame":2,"buttons":[""],"ctrlStick":["270","100"]},{"frame":4,"buttons":["y"],"ctrlStick":[]},{"frame":5,"buttons":["l"],"ctrlStick":["225","100"]},{"frame":6,"buttons":[""],"ctrlStick":["225","100"]},{"frame":7,"buttons":[""],"ctrlStick":["225","100"]},{"frame":8,"buttons":[""],"ctrlStick":["225","100"]},{"frame":22,"buttons":[""],"ctrlStick":["270","100"]},{"frame":23,"buttons":["y"],"ctrlStick":[]},{"frame":24,"buttons":["l"],"ctrlStick":[]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":25,"buttons":[""],"ctrlStick":["225","100"]},{"frame":26,"buttons":[""],"ctrlStick":[]},{"frame":44,"buttons":[""],"ctrlStick":["270","100"]},{"frame":45,"buttons":["y"],"ctrlStick":[]},{"frame":46,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":47,"buttons":[""],"ctrlStick":["315","100"]},{"frame":48,"buttons":[""],"ctrlStick":["315","100"]},{"frame":49,"buttons":[""],"ctrlStick":["315","100"]},{"frame":64,"buttons":[""],"ctrlStick":["270","100"]},{"frame":65,"buttons":["y"],"ctrlStick":[]},{"frame":66,"buttons":["l"],"ctrlStick":["315","100"]},{"frame":67,"buttons":[""],"ctrlStick":["315","100"]},{"frame":68,"buttons":[""],"ctrlStick":["315","100"]},{"frame":69,"buttons":[""],"ctrlStick":["315","100"]}]');

-- --------------------------------------------------------

--
-- Table structure for table `framedatamoves`
--

CREATE TABLE `framedatamoves` (
`id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `description` varchar(130) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
`id` int(50) NOT NULL,
  `myid` int(50) NOT NULL,
  `friendid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gifs`
--

CREATE TABLE `gifs` (
`id` int(11) NOT NULL,
  `typeid` int(11) NOT NULL DEFAULT '1',
  `dataid` int(11) NOT NULL DEFAULT '0',
  `source` varchar(260) NOT NULL,
  `submittedby` int(11) NOT NULL,
  `url` varchar(300) NOT NULL,
  `description` varchar(400) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1905 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gifs`
--

INSERT INTO `gifs` (`id`, `typeid`, `dataid`, `source`, `submittedby`, `url`, `description`, `update_date`, `score`) VALUES
(1, 0, 24, '', 0, 'MarvelousMedicalFlee', 'aMSa going hard', '2015-01-24 22:46:46', 0),
(2, 0, 4, '', 0, 'ValidEdibleIndochinesetiger', 'MMG | Shroomed demonstrating the importance of wavelanding with Dr. Mario', '2015-01-24 22:46:46', 0),
(3, 0, 2, '', 0, 'HarmlessShamefulHalicore', 'Lord vs S2J with an amazing finisher at TNE. LONG LIVE THE HYPE.', '2015-01-24 22:46:46', 0),
(4, 0, 14, '', 0, 'BlankWickedAmmonite', 'Mew2King demonstrating the importance of juggling and keeping your opponent above you', '2015-01-24 22:46:46', 0),
(5, 0, 6, '', 0, 'EuphoricCookedHornshark', 'Westballz demonstrating technical edge guarding with Fox', '2015-01-24 22:46:46', 0),
(6, 0, 18, '', 0, 'FamiliarEthicalHomalocephale', 'The Armada double-Stitchface shield break combo\r\n', '2015-01-24 22:46:46', 0),
(7, 0, 5, '', 0, 'SnappyBlissfulChickadee', 'Short hop lasers are a crucial part of Falco''s movement.', '2015-01-24 22:46:46', 0),
(8, 0, 5, '', 0, 'RingedIdolizedAidi', 'A typical Falco combo, where shines are followed by down-airs. Notice how Zhu uses a laser reset to initiate the combo', '2015-01-24 22:46:46', 0),
(9, 0, 6, '', 0, 'NewCaringFurseal', 'Hax demonstrating ridiculously fast multishines to pressure an enemy in shield', '2015-01-24 22:46:46', 0),
(10, 0, 6, '', 0, 'EarlyOptimalCondor', 'Leffen demonstrating how to pressure your opponent as Fox', '2015-01-24 22:46:46', 0),
(11, 0, 14, '', 0, 'OrganicAnimatedBream', 'Azen demonstrating a clean Marth combo', '2015-01-24 22:46:46', 0),
(12, 0, 20, '', 0, 'ClumsyCompetentAidi', 'Axe demonstrating a clean Pikachu combo by patiently waiting for Tai to stand up', '2015-01-24 22:46:46', 0),
(13, 0, 23, '', 0, 'SeriousOptimalCougar', 'One of Shiek''s most powerful combos is down throw -> forward air', '2015-01-24 22:46:46', 0),
(14, 0, 12, '', 0, 'GrippingVariableGnu', 'Luigi''s great movement allow you to quickly surprise your opponent with unexpected plays', '2015-01-24 22:46:46', 0),
(15, 0, 9, '', 0, 'UncommonIckyBangeltiger', 'Jigglypuff can be very offensive offstage, since 5 jumps allow for many recovery options', '2015-01-24 22:46:46', 0),
(16, 0, 22, '', 0, 'ColorfulDistinctAustralianshelduck', 'Darrel showing how to combo with Samus', '2015-01-24 22:46:46', 0),
(17, 0, 24, '', 0, 'UnpleasantRepulsiveAlbacoretuna', 'aMSa taking Westballz stock in 11 seconds with a disgusting combo', '2015-01-24 22:46:46', 0),
(18, 0, 18, '', 0, 'BelatedParallelAnnashummingbird', 'Armada demonstrating how to use a turnip to reduce PPMD''s recovery options', '2015-01-24 22:46:46', 0),
(19, 0, 5, '', 0, 'AlarmingConcreteHagfish', 'Bam demonstrating how to keep constant pressure on your opponent', '2015-01-24 22:46:46', 0),
(20, 0, 2, '', 0, 'RemorsefulYellowLangur', 'Hax demonstrating an efficient 0 to death', '2015-01-24 22:46:46', 0),
(21, 0, 26, 'Jahan Sandhu', 0, 'DeterminedBogusFerret', 'Cosmo demonstrates Zelda''s power', '2015-01-24 22:46:46', 0),
(22, 0, 20, 'https://www.', 0, 'WindyAnotherAmericanpainthorse', 'If you cling the second dash of Pikachu''s Quick Attack (Up-B) with a move of equal priority, Pikachu performs a "Super W', '2015-01-24 22:46:46', 0),
(23, 0, 16, 'Jahan Sandhu', 0, 'JovialDemandingBluebottle', 'M2K shows off G&W''s difficult to DI throws and followup', '2015-01-24 22:46:46', 0),
(24, 0, 11, 'Jahan Sandhu', 0, 'ArtisticAdorableAlaskanhusky', 'Link''s recovery is pretty good ', '2015-01-24 22:46:46', 0),
(25, 0, 17, 'David Alligo', 0, 'SlimyMedicalBoto', 'Mofo using the yoyo glitch on Hax', '2015-01-24 22:46:46', 0),
(26, 0, 8, 'Smashwiki', 0, 'ChillyAptJaeger', 'Wobbles demonstrating the infinite grab technique known as "Wobbling" ', '2015-01-24 22:46:46', 0),
(27, 0, 6, 'Mayday', 0, 'SomberCarelessAppaloosa', 'Mango demonstrating the use of a Shine Grab', '2015-01-24 22:46:46', 0),
(28, 0, 23, 'mkolpnji', 0, 'AgreeableFlawedBlackmamba', 'Mew2King tech chasing a Fox with grabs and down throw + dash attack.', '2015-01-24 22:46:46', 0),
(29, 0, 25, '', 0, 'FondPlayfulCarp', 'How to edgeguard as Young Link', '2015-01-24 22:46:46', 0),
(30, 0, 20, 'Kings of Cal', 0, 'SpanishPastelCock', 'Axe using the multiple hitboxes of Pikachu''s Uair to gimp Westballz', '2015-01-24 22:46:46', 0),
(31, 0, 2, 'Nicholas M. ', 0, 'unluckyhardgnu', 'NMW showing the effectiveness of instant uair ', '2015-01-24 22:46:46', 0),
(32, 0, 7, '', 0, 'TalkativeJovialGalah', 'Great example of how to use Ganon''s Dair by Bizzarroflame', '2015-01-24 22:46:46', 0),
(33, 0, 4, '', 0, 'FamiliarAdvancedAcaciarat', 'MMG | Shroomed demonstrates Dr. Mario''s gimping abilities with back air and cape', '2015-01-24 22:46:46', 0),
(34, 0, 19, 'Dazwa', 0, 'SaltyEnergeticBadger', 'KoreanDJ showing how Pichu can secure quick kills near ledges', '2015-01-24 22:46:46', 0),
(35, 0, 17, 'Shuffle V (H', 0, 'FoolishSlushyFawn', 'Ness''s double jump cancel allows him to perform extremely low aerials ', '2015-01-24 22:46:46', 0),
(36, 0, 13, 'Mayday', 0, 'LeanDifferentDorado', 'Mango''s (Scorpion Master) 0% to death combo with Mario', '2015-01-24 22:46:46', 0),
(37, 0, 3, 'Beanwolf, MO', 0, 'CluelessWastefulIaerismetalmark', 'Green Ranger shows us how brutal DK''s combo game can be. ', '2015-01-24 22:46:46', 0),
(38, 0, 22, 'Mayday', 0, 'WelcomeAgileBluetickcoonhound', 'Power Missile Edge Guarding with Samus ', '2015-01-24 22:46:46', 0),
(39, 0, 25, '', 0, 'MealyHatefulArmadillo', 'Axe tethers to the pillar underneath Pokemon Stadium and successfully recovers ', '2015-01-24 22:46:46', 0),
(40, 0, 21, 'CEO 2014', 0, 'ConcreteFamiliarGlowworm', 'An interesting combo by Mew2King', '2015-01-24 22:46:46', 0),
(41, 0, 23, '', 0, 'TightBarrenGnu', 'Mew2King demonstrating an insane Sheik combo on EG | PPMD at EVO2k14', '2015-01-24 22:46:46', 0),
(42, 0, 12, '', 0, 'SameOffbeatBushbaby', 'With Luigi''s wavedash distances and his powerful Up B he can get very hard punishes upon reading techrolls ', '2015-01-24 22:46:46', 0),
(512, 2, 1, 'http://www.reddit.com/r/smashbros/comments/1mlr3n/best_wavedashluigi_vs_worst_wavedashpeach/', 0, 'SkinnyCorruptHake', 'The longest wavedash (Luigi) and the shortest (Peach).', '2015-01-24 22:51:05', 0),
(513, 2, 1, '', 0, 'ForkedGloomyHairstreakbutterfly', 'Continuous Wavedashes with Marth.', '2015-01-24 22:51:05', 0),
(514, 2, 7, '', 0, 'EcstaticHorribleDragon', 'A pivot contains a few frames of dashing, followed by a single frame where your character is standing up straight. On this frame, you can use any move as if your character is standing still.', '2015-01-24 22:51:05', 0),
(515, 2, 2, '', 0, 'SeveralCompassionateBlackwidowspider', 'A series of frame-perfect multi shines at 1/4 speed.', '2015-01-24 22:51:05', 0),
(516, 2, 16, '', 0, 'SpottedWhiteBordercollie', 'Hit (L or R) and (Up) within 20 frames of hitting the wall while in hitstun', '2015-01-24 22:51:05', 0),
(517, 2, 5, '', 0, 'SeveralUnlinedEsok', 'Comparing the heights from a full jump and a short hop.', '2015-01-24 22:51:05', 0),
(518, 2, 4, 'http://www.reddit.com/r/smashbros/comments/1mzq7e/the_importance_of_lcancelling/', 0, 'FirmImmediateCivet', 'Two Links performing a down aerial. The red Link L-cancels, and can input his shield in half the time of the green Link.', '2015-01-24 22:51:05', 0),
(519, 2, 13, 'Kadano', 0, 'DimIckyAztecant', 'Falco''s firestall, 1x speed, latest possible inputs', '2015-01-24 22:51:05', 0),
(520, 2, 11, 'http://www.reddit.com/r/smashbros/comments/1nuxc2/dash_dance/', 0, 'FrightenedBruisedAstrangiacoral', 'Fox performing a frame-perfect dash-dance in Melee.', '2015-01-24 22:51:05', 0),
(521, 2, 13, 'Kadano', 0, 'TatteredTediousDormouse', 'Sheik demonstrating a Shino-Stall. The blue represents invulnerability', '2015-01-24 22:51:05', 0),
(523, 2, 12, '', 0, 'SilverDimwittedDouglasfirbarkbeetle', 'A meteor cancel used in a recovery off-stage.', '2015-01-24 22:51:05', 0),
(524, 2, 8, '', 0, 'LeanWhimsicalBubblefish', 'A wall jump can be used to mix up your opponent, and change up engages.', '2015-01-24 22:51:05', 0),
(525, 2, 6, '', 0, 'SoulfulPreciousIslandcanary', 'A demonstration of a ledge hop.', '2015-01-24 22:51:05', 0),
(526, 2, 10, '', 0, 'UnfitAnotherFlea', 'An example of what happens when you don''t crouch cancel.', '2015-01-24 22:51:05', 0),
(527, 2, 10, '', 0, 'EnlightenedIncompleteAnteater', 'An example of what happens when crouch canceling is used.', '2015-01-24 22:51:05', 0),
(528, 2, 7, '', 0, 'DelayedSmoggyGrison', 'An example of a pivot Foward Smash', '2015-01-24 22:51:05', 0),
(529, 2, 17, '', 0, 'SleepyGoodBoutu', 'A non jump canceled grab (dash-grab)', '2015-01-24 22:51:05', 0),
(530, 2, 17, '', 0, 'TheseFondIndiancow', 'A jump canceled grab (stand-grab)', '2015-01-24 22:51:05', 0),
(531, 2, 19, '', 0, 'UnsteadySoggyFrigatebird', 'A neutral tech allows you to quickly stand up where you land', '2015-01-24 22:51:05', 0),
(532, 2, 19, '', 0, 'PaltryParallelAmericancrow', 'A right tech will make your character roll right before landing', '2015-01-24 22:51:05', 0),
(533, 2, 19, '', 0, 'PortlyAdvancedDamselfly', 'A left tech will make your character roll left before landing', '2015-01-24 22:51:05', 0),
(534, 2, 18, '', 0, 'SnarlingHideousGreatwhiteshark', 'Canceling run with a jump canceled up smash', '2015-01-24 22:51:05', 0),
(535, 2, 16, '', 0, 'FatherlyAnimatedAmericanwarmblood', 'Hit (L or R) to wall tech within 20 frames of hitting the wall while in hitstun', '2015-01-24 22:51:05', 0),
(536, 2, 11, '', 0, 'AngryDearBassethound', 'Dash dancing can be used to properly space your character as well as playing mind games with your opponent', '2015-01-24 22:51:05', 0),
(537, 2, 20, 'http://www.reddit.com/r/smashbros/comments/1pgo1x/the_importance_of_di/', 0, 'DeadCoarseFlamingo', 'Demonstrating the different direction choices for DI', '2015-01-24 22:51:05', 0),
(538, 2, 21, 'kv016', 0, 'EnormousFewGnat', 'Wave Lands demonstrated on BattleField platforms', '2015-01-24 22:51:05', 0),
(539, 2, 22, 'kv016', 0, 'SnappyBlissfulChickadee', 'The added mobility of short hop lasering', '2015-01-24 22:51:05', 0),
(540, 2, 23, '', 0, 'HelplessUnfortunateFlickertailsquirrel', 'PewPewU powershielding a Falco laser to get a laser reset', '2015-01-24 22:51:05', 0),
(541, 2, 24, '', 0, 'IdenticalThirstyDog', 'The Peach on the right uses L canceling, while the Peach on the left uses Float Canceling. Notice how the amount of landing lag is the same!', '2015-01-24 22:51:05', 0),
(542, 2, 25, '', 0, 'WideBlushingDiamondbackrattlesnake', 'MewTwo performing a Jab Reset in order to push Fox into a neutral position to continue a combo', '2015-01-24 22:51:05', 0),
(543, 2, 26, '', 0, 'DeepColorfulAfricanwilddog', 'S2J demonstrating tech chasing by predicting where his opponent is going to tech and adjusting accordingly', '2015-01-24 22:51:05', 0),
(544, 2, 27, '', 0, 'LegalInnocentEastrussiancoursinghounds', 'A frame perfect Fox Wave Shine', '2015-01-24 22:51:05', 0),
(606, 3, 3, '', 0, 'GenerousThriftyArieltoucan', '', '2015-01-24 22:56:42', 0),
(607, 3, 3, '', 0, 'InsistentSilverArawana', '', '2015-01-24 22:56:42', 0),
(608, 3, 74, '', 0, 'HelpfulDependentAmbushbug', '', '2015-01-24 22:56:42', 0),
(609, 3, 151, '', 0, 'TenderNeighboringCentipede', '', '2015-01-24 22:56:42', 0),
(610, 3, 155, '', 0, 'SeriousConsciousHeron', '', '2015-01-24 22:56:42', 0),
(611, 3, 82, '', 0, 'ActiveKeenHornedviper', '', '2015-01-24 22:56:42', 0),
(612, 3, 160, '', 0, 'ReadyAshamedBluewhale', '', '2015-01-24 22:56:42', 0),
(613, 3, 160, '', 0, 'RipeUniformClumber', '', '2015-01-24 22:56:42', 0),
(614, 3, 167, '', 0, 'TidyScaryAzurevase', '', '2015-01-24 22:56:42', 0),
(615, 3, 167, '', 0, 'SmugOilyAmericanquarterhorse', '', '2015-01-24 22:56:42', 0),
(616, 3, 167, '', 0, 'FittingBouncyAfricanpiedkingfisher', '', '2015-01-24 22:56:42', 0),
(620, 3, 172, '', 0, 'WearyGranularCockatoo', '', '2015-01-24 22:56:42', 0),
(621, 3, 172, '', 0, 'DiligentBronzeFalcon', '', '2015-01-24 22:56:42', 0),
(622, 3, 172, '', 0, 'ApprehensiveIncompatibleBluet', '', '2015-01-24 22:56:42', 0),
(623, 3, 185, '', 0, 'SpotlessDefiniteDoe', '', '2015-01-24 22:56:42', 0),
(624, 3, 185, '', 0, 'RealisticRespectfulBear', '', '2015-01-24 22:56:42', 0),
(625, 3, 185, '', 0, 'DefensiveConfusedBlackmamba', '', '2015-01-24 22:56:42', 0),
(629, 3, 188, '', 0, 'GrossUnhealthyEyra', '', '2015-01-24 22:56:42', 0),
(638, 1, 5, 'Seikend', 0, 'ValidHatefulIraniangroundjay', 'Forward B', '2015-01-25 01:16:14', 0),
(639, 1, 6, 'Seikend', 0, 'WelldocumentedShoddyBufeo', 'Jab 1', '2015-01-25 01:16:14', 0),
(640, 1, 7, 'Seikend', 0, 'HardThreadbareHarpseal', 'Jab 2', '2015-01-25 01:16:14', 0),
(641, 1, 12, 'Seikend', 0, 'HairyGiganticFrigatebird', 'D Tilt', '2015-01-25 01:16:14', 0),
(642, 1, 10, 'Seikend', 0, 'ElasticMedicalAmazonparrot', 'F Tilt', '2015-01-25 01:16:14', 0),
(643, 1, 9, 'Seikend', 0, 'JitteryHeavenlyAmericanriverotter', 'High F Tilt', '2015-01-25 01:16:14', 0),
(644, 1, 8, 'Seikend', 0, 'WildCheapAntarcticgiantpetrel', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(645, 1, 11, 'Seikend', 0, 'HardCrazyIndianjackal', 'U Tilt', '2015-01-25 01:16:14', 0),
(646, 1, 15, 'Seikend', 0, 'WarlikeBowedHerald', 'D Smash', '2015-01-25 01:16:14', 0),
(647, 1, 14, 'Seikend', 0, 'EverlastingGenerousAustrianpinscher', 'F Smash', '2015-01-25 01:16:14', 0),
(648, 1, 13, 'Seikend', 0, 'VagueDamagedHomalocephale', 'U Smash', '2015-01-25 01:16:14', 0),
(649, 1, 19, 'Seikend', 0, 'UnderstatedTenseHare', 'B Air', '2015-01-25 01:16:14', 0),
(650, 1, 18, 'Seikend', 0, 'DistantShadyCopperhead', 'D Air', '2015-01-25 01:16:14', 0),
(651, 1, 20, 'Seikend', 0, 'OddTiredIvorybackedwoodswallow', 'F Air', '2015-01-25 01:16:14', 0),
(652, 1, 17, 'Seikend', 0, 'LinearNervousApatosaur', 'N Air', '2015-01-25 01:16:14', 0),
(653, 1, 16, 'Seikend', 0, 'YearlyHonorableArchaeocete', 'U Air', '2015-01-25 01:16:14', 0),
(654, 1, 21, 'Seikend', 0, 'OilyWelloffAmericancrow', 'Dash Attack', '2015-01-25 01:16:14', 0),
(655, 1, 22, 'Seikend', 0, 'CluelessNastyBeardeddragon', 'Running Grab', '2015-01-25 01:16:14', 0),
(656, 1, 23, 'Seikend', 0, 'IlliterateMadDassierat', 'Standing Grab', '2015-01-25 01:16:14', 0),
(657, 1, 25, 'Seikend', 0, 'FarflungDeliriousChipmunk', 'Air Dodge', '2015-01-25 01:16:14', 0),
(658, 1, 24, 'Seikend', 0, 'KindheartedUnderstatedAtlasmoth', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(659, 1, 26, 'Seikend', 0, 'DamagedFlippantHanumanmonkey', 'Roll Forward', '2015-01-25 01:16:14', 0),
(660, 1, 37, 'Stratocaster', 0, 'SlimyNervousEyelashpitviper', 'Neutral B', '2015-01-25 01:16:14', 0),
(661, 1, 28, 'Stratocaster', 0, 'FastPalatableChanticleer', 'Jab 2', '2015-01-25 01:16:14', 0),
(662, 1, 27, 'Stratocaster', 0, 'WarlikeImperfectAsiaticgreaterfreshwaterclam', 'Jab 3', '2015-01-25 01:16:14', 0),
(663, 1, 29, 'Stratocaster', 0, 'ThinSparklingAmazontreeboa', 'High F Tilt', '2015-01-25 01:16:14', 0),
(664, 1, 30, 'Stratocaster', 0, 'MediumPoliticalHarrier', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(665, 1, 31, 'Stratocaster', 0, 'EmbellishedLightheartedDormouse', 'U Tilt', '2015-01-25 01:16:14', 0),
(666, 1, 34, 'Stratocaster', 0, 'PleasedImpracticalAlbertosaurus', 'U Smash', '2015-01-25 01:16:14', 0),
(667, 1, 36, 'Stratocaster', 0, 'AmusedReasonableCaimanlizard', 'B Air', '2015-01-25 01:16:14', 0),
(668, 1, 32, 'Stratocaster', 0, 'SingleOddHare', 'F Air', '2015-01-25 01:16:14', 0),
(669, 1, 35, 'Stratocaster', 0, 'SardonicFlakyAustraliansilkyterrier', 'U Air', '2015-01-25 01:16:14', 0),
(670, 1, 33, 'Stratocaster', 0, 'WeightyLastingDarwinsfox', 'Air Dodge', '2015-01-25 01:16:14', 0),
(671, 1, 50, 'Strong Bad', 0, 'ElegantUncomfortableAuklet', 'Down B', '2015-01-25 01:16:14', 0),
(672, 1, 52, 'Strong Bad', 0, 'OfficialForsakenJackrabbit', 'Forward B', '2015-01-25 01:16:14', 0),
(673, 1, 38, 'Strong Bad', 0, 'AnguishedInfatuatedBrontosaurus', 'Neutral B (charge)', '2015-01-25 01:16:14', 0),
(674, 1, 41, 'Strong Bad', 0, 'ShorttermAppropriateBlackrussianterrier', 'Jab 1', '2015-01-25 01:16:14', 0),
(675, 1, 42, 'Strong Bad', 0, 'BaggyNearDragonfly', 'Jab 2', '2015-01-25 01:16:14', 0),
(676, 1, 62, 'Strong Bad', 0, 'AmusedSlushyAchillestang', 'D Tilt', '2015-01-25 01:16:14', 0),
(677, 1, 43, 'Strong Bad', 0, 'ClumsyTatteredBee', 'F Tilt', '2015-01-25 01:16:14', 0),
(678, 1, 59, 'Strong Bad', 0, 'NecessaryEnviousCockatoo', 'High F Tilt', '2015-01-25 01:16:14', 0),
(679, 1, 65, 'Strong Bad', 0, 'EveryImpracticalBackswimmer', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(680, 1, 57, 'Strong Bad', 0, 'GranularNiceCottontail', 'U Tilt', '2015-01-25 01:16:14', 0),
(681, 1, 64, 'Strong Bad', 0, 'SingleEdibleChicken', 'D Smash', '2015-01-25 01:16:14', 0),
(682, 1, 60, 'Strong Bad', 0, 'AdorableReliableBlacklemur', 'F Smash', '2015-01-25 01:16:14', 0),
(683, 1, 44, 'Strong Bad', 0, 'SpotlessRewardingJapanesebeetle', 'U Smash', '2015-01-25 01:16:14', 0),
(684, 1, 49, 'Strong Bad', 0, 'MetallicNewHarrierhawk', 'Air Dodge', '2015-01-25 01:16:14', 0),
(685, 1, 45, 'Strong Bad', 0, 'AptBetterDalmatian', 'B Air', '2015-01-25 01:16:14', 0),
(686, 1, 47, 'Strong Bad', 0, 'DimwittedCautiousEgg', 'D Air', '2015-01-25 01:16:14', 0),
(687, 1, 63, 'Strong Bad', 0, 'UnimportantVengefulDunlin', 'F Air', '2015-01-25 01:16:14', 0),
(688, 1, 54, 'Strong Bad', 0, 'ClosedAdventurousAlbacoretuna', 'N Air', '2015-01-25 01:16:14', 0),
(689, 1, 46, 'Strong Bad', 0, 'DearestBowedArawana', 'U Air', '2015-01-25 01:16:14', 0),
(690, 1, 55, 'Strong Bad', 0, 'ObedientScratchyGelding', 'Dash Attack', '2015-01-25 01:16:14', 0),
(691, 1, 48, 'Strong Bad', 0, 'UnfitTepidBudgie', 'Running Grab', '2015-01-25 01:16:14', 0),
(692, 1, 56, 'Strong Bad', 0, 'EqualClosedHaddock', 'Standing Grab', '2015-01-25 01:16:14', 0),
(693, 1, 58, 'Strong Bad', 0, 'MilkyDisguisedIbis', 'Roll Backward', '2015-01-25 01:16:14', 0),
(694, 1, 51, 'Strong Bad', 0, 'BabyishShallowFallowdeer', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(695, 1, 53, 'Strong Bad', 0, 'GrotesqueMiniatureFulmar', 'Roll Forward', '2015-01-25 01:16:14', 0),
(696, 1, 86, 'standardtoaster', 0, 'WebbedWarlikeHarborporpoise', 'Down B', '2015-01-25 01:16:14', 0),
(697, 1, 88, 'standardtoaster', 0, 'TidyGracefulAnole', 'Forward B', '2015-01-25 01:16:14', 0),
(698, 1, 87, 'standardtoaster', 0, 'JoyfulPlayfulAtlanticsharpnosepuffer', 'Up B', '2015-01-25 01:16:14', 0),
(699, 1, 67, 'standardtoaster', 0, 'ClassicRealAfricanclawedfrog', 'Jab 1', '2015-01-25 01:16:14', 0),
(700, 1, 68, 'standardtoaster', 0, 'BetterLiquidAfricanaugurbuzzard', 'Jab 2', '2015-01-25 01:16:14', 0),
(701, 1, 69, 'standardtoaster', 0, 'RigidExcellentAdamsstaghornedbeetle', 'Jab 3', '2015-01-25 01:16:14', 0),
(702, 1, 73, 'standardtoaster', 0, 'ComplexFrequentArcticseal', 'D Tilt', '2015-01-25 01:16:14', 0),
(703, 1, 70, 'standardtoaster', 0, 'CreativeAshamedHoiho', 'F Tilt', '2015-01-25 01:16:14', 0),
(704, 1, 72, 'standardtoaster', 0, 'ThirdBiodegradableIvorybackedwoodswallow', 'High F Tilt', '2015-01-25 01:16:14', 0),
(705, 1, 71, 'standardtoaster', 0, 'RepentantCriminalGardensnake', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(706, 1, 78, 'standardtoaster', 0, 'FragrantNastyBluegill', 'D Smash', '2015-01-25 01:16:14', 0),
(707, 1, 79, 'standardtoaster', 0, 'UntidyAjarJuliabutterfly', 'High F Smash', '2015-01-25 01:16:14', 0),
(708, 1, 77, 'standardtoaster', 0, 'WarpedShrillCottonmouth', 'F Smash Down', '2015-01-25 01:16:14', 0),
(709, 1, 80, 'standardtoaster', 0, 'FarawayGenerousIndigowingedparrot', 'U Smash', '2015-01-25 01:16:14', 0),
(710, 1, 89, 'standardtoaster', 0, 'RaggedWarmBedbug', 'Air Dodge', '2015-01-25 01:16:14', 0),
(711, 1, 82, 'standardtoaster', 0, 'ZestyBrightAfricanhornbill', 'B Air', '2015-01-25 01:16:14', 0),
(712, 1, 83, 'standardtoaster', 0, 'KindheartedDisfiguredGenet', 'D Air', '2015-01-25 01:16:14', 0),
(713, 1, 74, 'standardtoaster', 0, 'LightImpureHoneycreeper', 'F Air', '2015-01-25 01:16:14', 0),
(714, 1, 81, 'standardtoaster', 0, 'DistantSociableAmericankestrel', 'N Air', '2015-01-25 01:16:14', 0),
(715, 1, 75, 'standardtoaster', 0, 'WelllitWellmadeCowbird', 'U Air', '2015-01-25 01:16:14', 0),
(716, 1, 76, 'standardtoaster', 0, 'LightDishonestCat', 'Dash attack', '2015-01-25 01:16:14', 0),
(717, 1, 85, 'standardtoaster', 0, 'GoodnaturedDarkFerret', 'Running grab', '2015-01-25 01:16:14', 0),
(718, 1, 84, 'standardtoaster', 0, 'ScornfulRevolvingArabianwildcat', 'Standing Grab', '2015-01-25 01:16:14', 0),
(719, 1, 91, 'standardtoaster', 0, 'ZestySolidCaudata', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(720, 1, 90, 'standardtoaster', 0, 'InfantileShyHorsechestnutleafminer', 'Forward Roll', '2015-01-25 01:16:14', 0),
(721, 1, 112, 'Seikend', 0, 'CostlyGratefulHydatidtapeworm', 'Down B', '2015-01-25 01:16:14', 0),
(722, 1, 92, 'Seikend', 0, 'NaturalEsteemedIndianhare', 'Neutral B', '2015-01-25 01:16:14', 0),
(723, 1, 115, 'Seikend', 0, 'FlamboyantMiniatureFlea', 'Up B', '2015-01-25 01:16:14', 0),
(724, 1, 93, 'Seikend', 0, 'WastefulEducatedKilldeer', 'Jab 1', '2015-01-25 01:16:14', 0),
(725, 1, 94, 'Seikend', 0, 'DeliriousSleepyDamselfly', 'Jab 2', '2015-01-25 01:16:14', 0),
(726, 1, 95, 'Seikend', 0, 'RealSeveralCommabutterfly', 'Jab 3', '2015-01-25 01:16:14', 0),
(727, 1, 105, 'Seikend', 0, 'RawBossyIrrawaddydolphin', 'D Tilt', '2015-01-25 01:16:14', 0),
(728, 1, 96, 'Seikend', 0, 'UnluckyPhysicalAruanas', 'F Tilt', '2015-01-25 01:16:14', 0),
(729, 1, 97, 'Seikend', 0, 'CompetentGenuineKitty', 'High F Tilt', '2015-01-25 01:16:14', 0),
(730, 1, 102, 'Seikend', 0, 'LeanBeneficialAssassinbug', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(731, 1, 98, 'Seikend', 0, 'FabulousGracefulInexpectatumpleco', 'U Tilt', '2015-01-25 01:16:14', 0),
(732, 1, 109, 'Seikend', 0, 'SparseOptimisticAstarte', 'D Smash', '2015-01-25 01:16:14', 0),
(733, 1, 106, 'Seikend', 0, 'ForsakenPreciousBlacknorwegianelkhound', 'F Smash', '2015-01-25 01:16:14', 0),
(734, 1, 110, 'Seikend', 0, 'GlamorousDismalBadger', 'U Smash', '2015-01-25 01:16:14', 0),
(735, 1, 114, 'Seikend', 0, 'OptimisticSplendidEyelashpitviper', 'Air Dodge', '2015-01-25 01:16:14', 0),
(736, 1, 103, 'Seikend', 0, 'GiantContentIceblueredtopzebra', 'B Air', '2015-01-25 01:16:14', 0),
(737, 1, 100, 'Seikend', 0, 'OrderlyNecessaryHorsemouse', 'D Air', '2015-01-25 01:16:14', 0),
(738, 1, 108, 'Seikend', 0, 'WarlikeCostlyHippopotamus', 'F Air', '2015-01-25 01:16:14', 0),
(739, 1, 113, 'Seikend', 0, 'TangibleSelfreliantBellsnake', 'Forward B in air', '2015-01-25 01:16:14', 0),
(740, 1, 104, 'Seikend', 0, 'OldShyBobcat', 'N Air', '2015-01-25 01:16:14', 0),
(741, 1, 107, 'Seikend', 0, 'EvergreenWearyAuklet', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(742, 1, 99, 'Seikend', 0, 'SardonicUnevenIndigowingedparrot', 'U Air', '2015-01-25 01:16:14', 0),
(743, 1, 101, 'Seikend', 0, 'MasculineJollyGlobefish', 'Dash Attack', '2015-01-25 01:16:14', 0),
(744, 1, 111, 'Seikend', 0, 'PoisedWhisperedDoe', 'Running Grab', '2015-01-25 01:16:14', 0),
(745, 1, 116, 'Seikend', 0, 'BrownAgileInexpectatumpleco', 'Roll Backward', '2015-01-25 01:16:14', 0),
(746, 1, 118, 'Seikend', 0, 'FemaleSafeGallinule', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(747, 1, 117, 'Seikend', 0, 'LegalMajorHogget', 'Roll Forward', '2015-01-25 01:16:14', 0),
(748, 1, 122, 'Stratocaster', 0, 'DampSeparateDamselfly', 'Down B', '2015-01-25 01:16:14', 0),
(749, 1, 121, 'Stratocaster', 0, 'HalfFlamboyantElver', 'Forward B in air', '2015-01-25 01:16:14', 0),
(750, 1, 119, 'Stratocaster', 0, 'EasygoingGraciousHorse', 'Neutral B on ground', '2015-01-25 01:16:14', 0),
(751, 1, 120, 'Stratocaster', 0, 'EntireMajorAtlasmoth', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(752, 1, 123, 'Stratocaster', 0, 'JaggedCreepyHuia', 'Up B', '2015-01-25 01:16:14', 0),
(753, 1, 124, 'Stratocaster', 0, 'YearlyEdibleHarpseal', 'Jab', '2015-01-25 01:16:14', 0),
(754, 1, 125, 'Stratocaster', 0, 'FirmForsakenAngwantibo', 'Jab 2', '2015-01-25 01:16:14', 0),
(755, 1, 126, 'Stratocaster', 0, 'SpotlessSameArmadillo', 'Jab 3', '2015-01-25 01:16:14', 0),
(756, 1, 130, 'Stratocaster', 0, 'AllTeemingBarnowl', 'D Tilt', '2015-01-25 01:16:14', 0),
(757, 1, 129, 'Stratocaster', 0, 'ZigzagSlipperyKoodoo', 'F Tilt', '2015-01-25 01:16:14', 0),
(758, 1, 127, 'Stratocaster', 0, 'SkinnyGrimyDeviltasmanian', 'High F Tilt', '2015-01-25 01:16:14', 0),
(759, 1, 128, 'Stratocaster', 0, 'PaltryCoarseFowl', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(760, 1, 131, 'Stratocaster', 0, 'MenacingEquatorialHydra', 'U Tilt', '2015-01-25 01:16:14', 0),
(761, 1, 134, 'Stratocaster', 0, 'FlatAdorableHorsechestnutleafminer', 'D Smash', '2015-01-25 01:16:14', 0),
(762, 1, 132, 'Stratocaster', 0, 'BackDistortedAoudad', 'F Smash', '2015-01-25 01:16:14', 0),
(763, 1, 133, 'Stratocaster', 0, 'PleasantAdventurousKissingbug', 'U Smash', '2015-01-25 01:16:14', 0),
(764, 1, 139, 'Stratocaster', 0, 'ZealousLiquidDuck', 'B Air', '2015-01-25 01:16:14', 0),
(765, 1, 137, 'Stratocaster', 0, 'UnequaledHappygoluckyAsianporcupine', 'D Air', '2015-01-25 01:16:14', 0),
(766, 1, 138, 'Stratocaster', 0, 'KaleidoscopicShabbyDalmatian', 'F Air', '2015-01-25 01:16:14', 0),
(767, 1, 135, 'Stratocaster', 0, 'AggressiveUnluckyDinosaur', 'N Air', '2015-01-25 01:16:14', 0),
(768, 1, 136, 'Stratocaster', 0, 'QualifiedCostlyIaerismetalmark', 'U Air', '2015-01-25 01:16:14', 0),
(769, 1, 140, 'Stratocaster', 0, 'LoathsomeBeneficialAmericanbittern', 'Roll Backward', '2015-01-25 01:16:14', 0),
(770, 1, 141, 'Stratocaster', 0, 'RemorsefulGreatGallowaycow', 'Dash Attack', '2015-01-25 01:16:14', 0),
(771, 1, 142, 'Stratocaster', 0, 'DeepBlondAngelfish', 'Running Grab', '2015-01-25 01:16:14', 0),
(772, 1, 143, 'Stratocaster', 0, 'VibrantSevereKarakul', 'Standing Grab', '2015-01-25 01:16:14', 0),
(773, 1, 144, 'Stratocaster', 0, 'FamiliarBoilingDarklingbeetle', 'Air Dodge', '2015-01-25 01:16:14', 0),
(774, 1, 145, 'Stratocaster', 0, 'GrayHarmfulGallowaycow', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(775, 1, 146, 'Stratocaster', 0, 'PrestigiousNextGuineapig', 'Roll Forward', '2015-01-25 01:16:14', 0),
(776, 1, 162, 'standardtoaster', 0, 'OptimisticEarlyHornshark', 'Forward B in air', '2015-01-25 01:16:14', 0),
(777, 1, 147, 'standardtoaster', 0, 'EnviousBogusDodo', 'Neutral B', '2015-01-25 01:16:14', 0),
(778, 1, 165, 'standardtoaster', 0, 'CriminalInexperiencedIndochinahogdeer', 'Up B', '2015-01-25 01:16:14', 0),
(779, 1, 148, 'standardtoaster', 0, 'AthleticCapitalChuckwalla', 'Jab', '2015-01-25 01:16:14', 0),
(780, 1, 153, 'standardtoaster', 0, 'AgitatedCrazyCub', 'D Tilt', '2015-01-25 01:16:14', 0),
(781, 1, 150, 'standardtoaster', 0, 'HiddenBigGangesdolphin', 'F Tilt', '2015-01-25 01:16:14', 0),
(782, 1, 149, 'standardtoaster', 0, 'DapperDeliriousCleanerwrasse', 'High F Tilt', '2015-01-25 01:16:14', 0),
(783, 1, 151, 'standardtoaster', 0, 'DisguisedPointedHamster', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(784, 1, 152, 'standardtoaster', 0, 'VastWarlikeAdmiralbutterfly', 'U Tilt', '2015-01-25 01:16:14', 0),
(785, 1, 155, 'standardtoaster', 0, 'TintedWelcomeBlueshark', 'D Smash', '2015-01-25 01:16:14', 0),
(786, 1, 160, 'standardtoaster', 0, 'PhysicalDarkAplomadofalcon', 'U Smash', '2015-01-25 01:16:14', 0),
(787, 1, 156, 'standardtoaster', 0, 'LazyIllAsianlion', 'B Air', '2015-01-25 01:16:14', 0),
(788, 1, 157, 'standardtoaster', 0, 'DismalDrearyBobwhite', 'D Air', '2015-01-25 01:16:14', 0),
(789, 1, 163, 'standardtoaster', 0, 'IllinformedTanEsok', 'N Air', '2015-01-25 01:16:14', 0),
(790, 1, 168, 'Stratocaster', 0, 'EsteemedFatIndusriverdolphin', 'B Air', '2015-01-25 01:16:14', 0),
(791, 1, 167, 'Stratocaster', 0, 'WellmadeDifferentFluke', 'Down B', '2015-01-25 01:16:14', 0),
(792, 1, 170, 'Stratocaster', 0, 'HatefulHomelyDolphin', 'Forward B', '2015-01-25 01:16:14', 0),
(793, 1, 169, 'Stratocaster', 0, 'VerifiableShrillAustralianshelduck', 'Neutral B', '2015-01-25 01:16:14', 0),
(794, 1, 171, 'Stratocaster', 0, 'TautLoneGrayfox', 'Up B', '2015-01-25 01:16:14', 0),
(795, 1, 172, 'Stratocaster', 0, 'PoshLameHogget', 'Jab 1', '2015-01-25 01:16:14', 0),
(796, 1, 173, 'Stratocaster', 0, 'KindFailingCockatiel', 'Jab 2', '2015-01-25 01:16:14', 0),
(797, 1, 174, 'Stratocaster', 0, 'CalculatingSlightBallpython', 'D Tilt', '2015-01-25 01:16:14', 0),
(798, 1, 177, 'Stratocaster', 0, 'LightheartedAbsoluteAnemone', 'High F Tilt', '2015-01-25 01:16:14', 0),
(799, 1, 176, 'Stratocaster', 0, 'WholeShockingDolphin', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(800, 1, 175, 'Stratocaster', 0, 'ChiefPlainBrontosaurus', 'U Tilt', '2015-01-25 01:16:14', 0),
(801, 1, 179, 'Stratocaster', 0, 'EagerUnsteadyGoral', 'D Smash', '2015-01-25 01:16:14', 0),
(802, 1, 178, 'Stratocaster', 0, 'SpeedyTenseGodwit', 'F Smash', '2015-01-25 01:16:14', 0),
(803, 1, 180, 'Stratocaster', 0, 'BadBossyBass', 'U Smash', '2015-01-25 01:16:14', 0),
(804, 1, 183, 'Stratocaster', 0, 'DisloyalDistortedEasternglasslizard', 'D Air', '2015-01-25 01:16:14', 0),
(805, 1, 182, 'Stratocaster', 0, 'TallShortGalapagoshawk', 'F Air', '2015-01-25 01:16:14', 0),
(806, 1, 181, 'Stratocaster', 0, 'AridQuestionableCaecilian', 'N Air', '2015-01-25 01:16:14', 0),
(807, 1, 184, 'Stratocaster', 0, 'FalseMemorableGrackle', 'U Air', '2015-01-25 01:16:14', 0),
(808, 1, 186, 'Stratocaster', 0, 'YellowFavoriteBlacknorwegianelkhound', 'Dash Attack', '2015-01-25 01:16:14', 0),
(809, 1, 185, 'Stratocaster', 0, 'FrankHeartyGrunion', 'Running Grab', '2015-01-25 01:16:14', 0),
(810, 1, 191, 'Stratocaster', 0, 'UncommonImpressionableAmericancrayfish', 'Standing Grab', '2015-01-25 01:16:14', 0),
(811, 1, 190, 'Stratocaster', 0, 'IdioticIdolizedErin', 'Air Dodge', '2015-01-25 01:16:14', 0),
(812, 1, 187, 'Stratocaster', 0, 'BlandVastIndianabat', 'Roll Backward', '2015-01-25 01:16:14', 0),
(813, 1, 189, 'Stratocaster', 0, 'DesertedAcidicFattaileddunnart', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(814, 1, 188, 'Stratocaster', 0, 'WatchfulAntiqueIchneumonfly', 'Roll Forward', '2015-01-25 01:16:14', 0),
(815, 1, 192, 'Massive', 0, 'WideeyedAgonizingGemsbuck', 'Down B', '2015-01-25 01:16:14', 0),
(816, 1, 210, 'Massive', 0, 'ZanyOffensiveCowrie', 'Forward B', '2015-01-25 01:16:14', 0),
(817, 1, 205, 'Massive', 0, 'BothSparseBandicoot', 'Neutral B', '2015-01-25 01:16:14', 0),
(818, 1, 211, 'Massive', 0, 'HastyUnequaledGemsbuck', 'Up B', '2015-01-25 01:16:14', 0),
(819, 1, 193, 'Massive', 0, 'FineUnknownAffenpinscher', 'Jab 1', '2015-01-25 01:16:14', 0),
(820, 1, 194, 'Massive', 0, 'SandyMeekEuropeanfiresalamander', 'Jab 2', '2015-01-25 01:16:14', 0),
(821, 1, 198, 'Massive', 0, 'SelfreliantFakeCero', 'D Tilt', '2015-01-25 01:16:14', 0),
(822, 1, 195, 'Massive', 0, 'ImpossibleDarkAntelope', 'F Tilt', '2015-01-25 01:16:14', 0),
(823, 1, 196, 'Massive', 0, 'GenuineWaterloggedIridescentshark', 'High F Tilt', '2015-01-25 01:16:14', 0),
(824, 1, 197, 'Massive', 0, 'RewardingDisguisedAztecant', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(825, 1, 199, 'Massive', 0, 'PaleWarmArmyant', 'U Tilt', '2015-01-25 01:16:14', 0),
(826, 1, 203, 'Massive', 0, 'ImmaterialFirstKakarikis', 'F Smash', '2015-01-25 01:16:14', 0),
(827, 1, 207, 'Massive', 0, 'ParallelWarmheartedIchthyostega', 'D Air', '2015-01-25 01:16:14', 0),
(828, 1, 208, 'Massive', 0, 'PoliteLongCooter', 'F Air', '2015-01-25 01:16:14', 0),
(829, 1, 204, 'Massive', 0, 'SaltySlimyBustard', 'U Air', '2015-01-25 01:16:14', 0),
(830, 1, 212, 'Massive', 0, 'PositiveHoarseDaddylonglegs', 'Dash Attack', '2015-01-25 01:16:14', 0),
(831, 1, 209, 'Massive', 0, 'FeistyTheseAtlanticridleyturtle', 'Running Grab', '2015-01-25 01:16:14', 0),
(832, 1, 213, 'Massive', 0, 'PoliticalShortHorseshoecrab', 'Standing Grab', '2015-01-25 01:16:14', 0),
(833, 1, 201, 'Massive', 0, 'WhiteFailingAmericansaddlebred', 'Air Dodge', '2015-01-25 01:16:14', 0),
(834, 1, 214, 'Massive', 0, 'SinfulTenderBushbaby', 'Roll Back', '2015-01-25 01:16:14', 0),
(835, 1, 202, 'Massive', 0, 'SinfulUltimateFanworms', 'Roll Forward', '2015-01-25 01:16:14', 0),
(836, 1, 235, 'Shoopman', 0, 'DecimalExaltedIndianringneckparakeet', 'Down B', '2015-01-25 01:16:14', 0),
(837, 1, 215, 'Shoopman', 0, 'FalseWigglyElephant', 'Forward B in air', '2015-01-25 01:16:14', 0),
(838, 1, 234, 'Shoopman', 0, 'FirmActualAfricanhornbill', 'Neutral B', '2015-01-25 01:16:14', 0),
(839, 1, 223, 'Shoopman', 0, 'NeglectedBriefAiredaleterrier', 'Up B', '2015-01-25 01:16:14', 0),
(840, 1, 216, 'Shoopman', 0, 'QuarrelsomeOffbeatDormouse', 'Jab 1', '2015-01-25 01:16:14', 0),
(841, 1, 217, 'Shoopman', 0, 'DenseLightheartedHypacrosaurus', 'Jab 2', '2015-01-25 01:16:14', 0),
(842, 1, 218, 'Shoopman', 0, 'FreshKaleidoscopicAnole', 'Jab 3', '2015-01-25 01:16:14', 0),
(843, 1, 219, 'Shoopman', 0, 'MajesticFavoriteCooter', 'D Tilt', '2015-01-25 01:16:14', 0),
(844, 1, 221, 'Shoopman', 0, 'YawningWelldocumentedFirefly', 'High F Tilt', '2015-01-25 01:16:14', 0),
(845, 1, 225, 'Shoopman', 0, 'BetterAmbitiousCornsnake', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(846, 1, 226, 'Shoopman', 0, 'DearGiantChanticleer', 'U Tilt', '2015-01-25 01:16:14', 0),
(847, 1, 228, 'Shoopman', 0, 'AridLimpingCassowary', 'D Smash', '2015-01-25 01:16:14', 0),
(848, 1, 224, 'Shoopman', 0, 'InferiorPettyBeauceron', 'F Smash', '2015-01-25 01:16:14', 0),
(849, 1, 227, 'Shoopman', 0, 'KeyForcefulLark', 'U Smash', '2015-01-25 01:16:14', 0),
(850, 1, 230, 'Shoopman', 0, 'RepulsiveConcernedDaddylonglegs', 'B Air', '2015-01-25 01:16:14', 0),
(851, 1, 232, 'Shoopman', 0, 'TerrificEllipticalIrishredandwhitesetter', 'D Air', '2015-01-25 01:16:14', 0),
(852, 1, 233, 'Shoopman', 0, 'RegularBlissfulArmadillo', 'F Air', '2015-01-25 01:16:14', 0),
(853, 1, 231, 'Shoopman', 0, 'SnappyGreatFairybluebird', 'N Air', '2015-01-25 01:16:14', 0),
(854, 1, 236, 'Shoopman', 0, 'AcrobaticCharmingAxolotl', 'U Air', '2015-01-25 01:16:14', 0),
(855, 1, 229, 'Shoopman', 0, 'ElectricGrandioseGoldeneye', 'Dash Attack', '2015-01-25 01:16:14', 0),
(856, 1, 222, 'Shoopman', 0, 'HollowUnrealisticBuzzard', 'Running Grab', '2015-01-25 01:16:14', 0),
(857, 1, 220, 'Shoopman', 0, 'GoodScholarlyCooter', 'Standing Grab', '2015-01-25 01:16:14', 0),
(858, 1, 252, 'standardtoaster', 0, 'EnlightenedAridDunnart', 'Neutral B', '2015-01-25 01:16:14', 0),
(859, 1, 237, 'standardtoaster', 0, 'SparseForcefulDromedary', 'U Smash', '2015-01-25 01:16:14', 0),
(860, 1, 238, 'standardtoaster', 0, 'NeglectedWiltedAzurevasesponge', 'Jab 1', '2015-01-25 01:16:14', 0),
(861, 1, 255, 'standardtoaster', 0, 'FortunateAnguishedHoki', 'Jab 2', '2015-01-25 01:16:14', 0),
(862, 1, 240, 'standardtoaster', 0, 'CavernousTornFlamingo', 'D Tilt', '2015-01-25 01:16:14', 0),
(863, 1, 239, 'standardtoaster', 0, 'ChubbyMassiveBug', 'F Tilt', '2015-01-25 01:16:14', 0),
(864, 1, 258, 'standardtoaster', 0, 'SpicyFirsthandFallowdeer', 'U Tilt', '2015-01-25 01:16:14', 0),
(865, 1, 257, 'standardtoaster', 0, 'EveryUnawareIvorybilledwoodpecker', 'D Smash', '2015-01-25 01:16:14', 0),
(866, 1, 241, 'standardtoaster', 0, 'UnselfishBeautifulHuman', 'F Smash 2', '2015-01-25 01:16:14', 0),
(867, 1, 243, 'standardtoaster', 0, 'FineCrispCoot', 'B Air', '2015-01-25 01:16:14', 0),
(868, 1, 245, 'standardtoaster', 0, 'AptWarlikeCockerspaniel', 'D Air', '2015-01-25 01:16:14', 0),
(869, 1, 246, 'standardtoaster', 0, 'OrneryBleakBongo', 'F Air', '2015-01-25 01:16:14', 0),
(870, 1, 242, 'standardtoaster', 0, 'NaturalColossalAntipodesgreenparakeet', 'N Air', '2015-01-25 01:16:14', 0),
(871, 1, 244, 'standardtoaster', 0, 'AmplePeskyBluebottlejellyfish', 'U Air', '2015-01-25 01:16:14', 0),
(872, 1, 247, 'standardtoaster', 0, 'UncommonWhirlwindChimpanzee', 'Z Air', '2015-01-25 01:16:14', 0),
(873, 1, 248, 'standardtoaster', 0, 'TangibleAccurateCur', 'Dash Attack', '2015-01-25 01:16:14', 0),
(874, 1, 250, 'standardtoaster', 0, 'UglyBlankGuppy', 'Running Grab', '2015-01-25 01:16:14', 0),
(875, 1, 253, 'standardtoaster', 0, 'JoyfulGloriousFlea', 'Standing Grab', '2015-01-25 01:16:14', 0),
(876, 1, 271, 'standardtoaster', 0, 'DazzlingVigorousGilamonster', 'Forward B (misfire)', '2015-01-25 01:16:14', 0),
(877, 1, 268, 'standardtoaster', 0, 'AdorableInfiniteEstuarinecrocodile', 'Neutral B', '2015-01-25 01:16:14', 0),
(878, 1, 269, 'standardtoaster', 0, 'CleanSecondhandGibbon', 'Up B', '2015-01-25 01:16:14', 0),
(879, 1, 260, 'standardtoaster', 0, 'EnragedBasicJaguarundi', 'Jab 1', '2015-01-25 01:16:14', 0),
(880, 1, 261, 'standardtoaster', 0, 'IllustriousReliableAmbushbug', 'Jab 2', '2015-01-25 01:16:14', 0),
(881, 1, 262, 'standardtoaster', 0, 'HatefulTestyHog', 'Jab 3', '2015-01-25 01:16:14', 0),
(882, 1, 267, 'standardtoaster', 0, 'MeatyElatedHalcyon', 'D Tilt', '2015-01-25 01:16:14', 0),
(883, 1, 264, 'standardtoaster', 0, 'EvergreenFragrantCorydorascatfish', 'F Tilt', '2015-01-25 01:16:14', 0),
(884, 1, 263, 'standardtoaster', 0, 'AmbitiousPitifulCockerspaniel', 'High F Tilt', '2015-01-25 01:16:14', 0),
(885, 1, 265, 'standardtoaster', 0, 'AnotherDesertedJabiru', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(886, 1, 273, 'standardtoaster', 0, 'BruisedFlakyCaimanlizard', 'U Tilt', '2015-01-25 01:16:14', 0),
(887, 1, 278, 'standardtoaster', 0, 'OptimalHardtofindIguanodon', 'D Smash', '2015-01-25 01:16:14', 0),
(888, 1, 274, 'standardtoaster', 0, 'InfamousBlindInvisiblerail', 'High F Smash', '2015-01-25 01:16:14', 0),
(889, 1, 276, 'standardtoaster', 0, 'WeirdShockingChimneyswift', 'Low F Smash', '2015-01-25 01:16:14', 0),
(890, 1, 275, 'standardtoaster', 0, 'DenseBriefBarnacle', 'U Smash', '2015-01-25 01:16:14', 0),
(891, 1, 282, 'standardtoaster', 0, 'BruisedSerpentineBudgie', 'B Air', '2015-01-25 01:16:14', 0),
(892, 1, 281, 'standardtoaster', 0, 'GlitteringEmbellishedArieltoucan', 'D Air', '2015-01-25 01:16:14', 0),
(893, 1, 279, 'standardtoaster', 0, 'WideDiscreteAcornbarnacle', 'F Air', '2015-01-25 01:16:14', 0),
(894, 1, 266, 'standardtoaster', 0, 'SerpentineSecondHochstettersfrog', 'N Air', '2015-01-25 01:16:14', 0),
(895, 1, 277, 'standardtoaster', 0, 'DefensiveGroundedBarb', 'U Air', '2015-01-25 01:16:14', 0),
(896, 1, 272, 'standardtoaster', 0, 'ShinyEarlyHammerkop', 'Taunt', '2015-01-25 01:16:14', 0),
(897, 1, 280, 'standardtoaster', 0, 'ImpartialUnfoldedBarb', 'Face Up Get-Up Attack', '2015-01-25 01:16:14', 0),
(898, 1, 285, 'standardtoaster', 0, 'ShowySpectacularAngora', 'Running grab', '2015-01-25 01:16:14', 0),
(899, 1, 284, 'standardtoaster', 0, 'DearCoarseIndianringneckparakeet', 'Standing Grab', '2015-01-25 01:16:14', 0),
(900, 1, 300, 'Stratocaster', 0, 'AdolescentPleasingBlueandgoldmackaw', 'Down B', '2015-01-25 01:16:14', 0),
(901, 1, 286, 'Stratocaster', 0, 'UnconsciousElectricBlacklemur', 'Forward B', '2015-01-25 01:16:14', 0),
(902, 1, 302, 'Stratocaster', 0, 'HilariousJubilantDeermouse', 'Up B', '2015-01-25 01:16:14', 0),
(903, 1, 287, 'Stratocaster', 0, 'MistyHilariousArrowana', 'Jab 1', '2015-01-25 01:16:14', 0),
(904, 1, 288, 'Stratocaster', 0, 'MenacingClumsyCockerspaniel', 'Jab 2', '2015-01-25 01:16:14', 0),
(905, 1, 289, 'Stratocaster', 0, 'SecretEssentialHanumanmonkey', 'Jab 3', '2015-01-25 01:16:14', 0),
(906, 1, 293, 'Stratocaster', 0, 'DependentInsecureBug', 'D Tilt', '2015-01-25 01:16:14', 0),
(907, 1, 291, 'Stratocaster', 0, 'PeriodicTanChafer', 'F Tilt', '2015-01-25 01:16:14', 0),
(908, 1, 290, 'Stratocaster', 0, 'UnconsciousTediousHagfish', 'High F Tilt', '2015-01-25 01:16:14', 0),
(909, 1, 292, 'Stratocaster', 0, 'FaithfulMeatyCrustacean', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(910, 1, 294, 'Stratocaster', 0, 'RepentantPerfumedBobwhite', 'U Tilt', '2015-01-25 01:16:14', 0),
(911, 1, 305, 'Stratocaster', 0, 'ThirstyCreepyCoral', 'D Smash', '2015-01-25 01:16:14', 0),
(912, 1, 295, 'Stratocaster', 0, 'ShallowNecessaryChinesecrocodilelizard', 'High F Smash', '2015-01-25 01:16:14', 0),
(913, 1, 303, 'Stratocaster', 0, 'DefiniteSizzlingHind', 'Low F Smash', '2015-01-25 01:16:14', 0),
(914, 1, 296, 'Stratocaster', 0, 'BoringGoldenGrosbeak', 'U Smash', '2015-01-25 01:16:14', 0),
(915, 1, 298, 'Stratocaster', 0, 'ForcefulTidyAlligator', 'B Air', '2015-01-25 01:16:14', 0),
(916, 1, 299, 'Stratocaster', 0, 'HarmlessPolishedJay', 'F Air', '2015-01-25 01:16:14', 0),
(917, 1, 306, 'Stratocaster', 0, 'CreativeNastyDodobird', 'N Air', '2015-01-25 01:16:14', 0),
(918, 1, 307, 'Stratocaster', 0, 'ForsakenDisloyalFantail', 'U Air', '2015-01-25 01:16:14', 0),
(919, 1, 297, 'Stratocaster', 0, 'NextDimAmberpenshell', 'Dash Attack', '2015-01-25 01:16:14', 0),
(920, 1, 304, 'Stratocaster', 0, 'WigglyClosedAustraliancattledog', 'Running Grab', '2015-01-25 01:16:14', 0),
(921, 1, 301, 'Stratocaster', 0, 'LankyGraciousBufflehead', 'Standing Grab', '2015-01-25 01:16:14', 0),
(922, 1, 308, 'Stratocaster', 0, 'BarrenShrillFalcon', 'Down B', '2015-01-25 01:16:14', 0),
(923, 1, 338, 'Stratocaster', 0, 'WelcomeBlindAsp', 'Forward B 1', '2015-01-25 01:16:14', 0),
(924, 1, 309, 'Stratocaster', 0, 'ImportantTintedApatosaur', 'Forward B 3 (Down)', '2015-01-25 01:16:14', 0),
(925, 1, 326, 'Stratocaster', 0, 'PessimisticIllinformedBlackcrappie', 'Forward B 3 (neutral)', '2015-01-25 01:16:14', 0),
(926, 1, 327, 'Stratocaster', 0, 'JubilantDentalAmericancrocodile', 'Forward B 3 (up)', '2015-01-25 01:16:14', 0),
(927, 1, 329, 'Stratocaster', 0, 'MindlessLikableJumpingbean', 'Forward B 4 (down)', '2015-01-25 01:16:14', 0),
(928, 1, 328, 'Stratocaster', 0, 'WindyIdleDikdik', 'Forward B 4 (neutral)', '2015-01-25 01:16:14', 0),
(929, 1, 332, 'Stratocaster', 0, 'AlarmedHappyDobermanpinscher', 'Forward B 4 (up)', '2015-01-25 01:16:14', 0),
(930, 1, 310, 'Stratocaster', 0, 'HeartyFlamboyantGuillemot', 'Neutral B', '2015-01-25 01:16:14', 0),
(931, 1, 334, 'Stratocaster', 0, 'PaltryOrnateDouglasfirbarkbeetle', 'Up B', '2015-01-25 01:16:14', 0),
(932, 1, 311, 'Stratocaster', 0, 'ValuableBlackChuckwalla', 'Jab 1', '2015-01-25 01:16:14', 0),
(933, 1, 312, 'Stratocaster', 0, 'DamagedBlondFirecrest', 'Jab 2', '2015-01-25 01:16:14', 0),
(934, 1, 314, 'Stratocaster', 0, 'LikablePlayfulEft', 'D Tilt', '2015-01-25 01:16:14', 0),
(935, 1, 313, 'Stratocaster', 0, 'BowedAmbitiousGuineapig', 'F Tilt', '2015-01-25 01:16:14', 0),
(936, 1, 315, 'Stratocaster', 0, 'CapitalIncompatibleAlaskankleekai', 'U Tilt', '2015-01-25 01:16:14', 0),
(937, 1, 318, 'Stratocaster', 0, 'FearfulCorruptHoki', 'D Smash', '2015-01-25 01:16:14', 0),
(938, 1, 316, 'Stratocaster', 0, 'WelcomeTatteredBarasingha', 'F Smash', '2015-01-25 01:16:14', 0),
(939, 1, 317, 'Stratocaster', 0, 'TepidAjarBaiji', 'U Smash', '2015-01-25 01:16:14', 0),
(940, 1, 322, 'Stratocaster', 0, 'GoodHandyJaguarundi', 'B Air', '2015-01-25 01:16:14', 0),
(941, 1, 325, 'Stratocaster', 0, 'DearestEthicalIndianrhinoceros', 'D Air', '2015-01-25 01:16:14', 0),
(942, 1, 320, 'Stratocaster', 0, 'FreshThinAntbear', 'F Air', '2015-01-25 01:16:14', 0),
(943, 1, 319, 'Stratocaster', 0, 'SpitefulLivelyIntermediateegret', 'N Air', '2015-01-25 01:16:14', 0),
(944, 1, 324, 'Stratocaster', 0, 'PertinentWildAsiansmallclawedotter', 'U Air', '2015-01-25 01:16:14', 0),
(945, 1, 321, 'Stratocaster', 0, 'GrizzledChillyFlyinglemur', 'Dash Attack', '2015-01-25 01:16:14', 0),
(946, 1, 323, 'Stratocaster', 0, 'SeparatePassionateJunco', 'Running Grab', '2015-01-25 01:16:14', 0),
(947, 1, 337, 'Stratocaster', 0, 'BabyishMellowIndianabat', 'Standing Grab', '2015-01-25 01:16:14', 0),
(948, 1, 335, 'Stratocaster', 0, 'NippyIlliterateAchillestang', 'Air Dodge', '2015-01-25 01:16:14', 0),
(949, 1, 330, 'Stratocaster', 0, 'TotalQuickInchworm', 'Roll Backward', '2015-01-25 01:16:14', 0),
(950, 1, 336, 'Stratocaster', 0, 'ImmediateCharmingChipmunk', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(951, 1, 331, 'Stratocaster', 0, 'WellmadeSnappyAfricanharrierhawk', 'Roll Forward', '2015-01-25 01:16:14', 0),
(952, 1, 354, 'standardtoaster', 0, 'FavoriteHarmoniousAngelfish', 'Down B', '2015-01-25 01:16:14', 0),
(953, 1, 361, 'standardtoaster', 0, 'OilyDismalCuscus', 'Forward B', '2015-01-25 01:16:14', 0),
(954, 1, 340, 'standardtoaster', 0, 'FaithfulDisfiguredFanworms', 'Jab 1', '2015-01-25 01:16:14', 0),
(955, 1, 341, 'standardtoaster', 0, 'PopularAliveGypsymoth', 'Jab 2', '2015-01-25 01:16:14', 0),
(956, 1, 343, 'standardtoaster', 0, 'GranularTeemingAnteater', 'D Tilt', '2015-01-25 01:16:14', 0),
(957, 1, 342, 'standardtoaster', 0, 'BlondLightheartedFugu', 'F Tilt', '2015-01-25 01:16:14', 0),
(958, 1, 352, 'standardtoaster', 0, 'FreeColdCanine', 'High F Tilt', '2015-01-25 01:16:14', 0),
(959, 1, 357, 'standardtoaster', 0, 'ImmenseFaithfulEyra', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(960, 1, 356, 'standardtoaster', 0, 'DampDistinctIcterinewarbler', 'U Tilt', '2015-01-25 01:16:14', 0),
(961, 1, 344, 'standardtoaster', 0, 'DifficultWindingIrishterrier', 'D Smash', '2015-01-25 01:16:14', 0),
(962, 1, 346, 'standardtoaster', 0, 'ShadowyFavorableDogwoodtwigborer', 'F Smash', '2015-01-25 01:16:14', 0),
(963, 1, 345, 'standardtoaster', 0, 'NeatOrganicBichonfrise', 'U Smash', '2015-01-25 01:16:14', 0),
(964, 1, 347, 'standardtoaster', 0, 'SatisfiedDismalGallinule', 'B Air', '2015-01-25 01:16:14', 0),
(965, 1, 359, 'standardtoaster', 0, 'PerfectBestAmericanratsnake', 'D Air', '2015-01-25 01:16:14', 0),
(966, 1, 349, 'standardtoaster', 0, 'ImpartialCooperativeBudgie', 'F Air', '2015-01-25 01:16:14', 0),
(967, 1, 348, 'standardtoaster', 0, 'GlossySilkyFattaileddunnart', 'N Air', '2015-01-25 01:16:14', 0),
(968, 1, 358, 'standardtoaster', 0, 'OblongOldfashionedAsiantrumpetfish', 'U Air', '2015-01-25 01:16:14', 0),
(969, 1, 351, 'standardtoaster', 0, 'FirstUltimateEthiopianwolf', 'Back Throw', '2015-01-25 01:16:14', 0),
(970, 1, 350, 'standardtoaster', 0, 'GoodBlushingFrigatebird', 'Dash Attack', '2015-01-25 01:16:14', 0),
(971, 1, 365, 'standardtoaster', 0, 'PortlyGoodBug', 'Forward Throw', '2015-01-25 01:16:14', 0),
(972, 1, 360, 'standardtoaster', 0, 'TidyUncommonArmyant', 'Running Grab', '2015-01-25 01:16:14', 0),
(973, 1, 355, 'standardtoaster', 0, 'JaggedSinfulDiplodocus', 'Standing Grab', '2015-01-25 01:16:14', 0),
(974, 1, 353, 'standardtoaster', 0, 'RelievedColdHamadryas', 'Air Dodge', '2015-01-25 01:16:14', 0),
(975, 1, 363, 'standardtoaster', 0, 'HorribleLankyFantail', 'Roll Backward', '2015-01-25 01:16:14', 0),
(976, 1, 364, 'standardtoaster', 0, 'RedConstantAssassinbug', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(977, 1, 362, 'standardtoaster', 0, 'RecentOnlyHornet', 'Roll Forward', '2015-01-25 01:16:14', 0),
(978, 1, 368, 'standardtoaster', 0, 'CraftySmoothClingfish', 'Up B', '2015-01-25 01:16:14', 0),
(979, 1, 383, 'standardtoaster', 0, 'TanWarpedAntipodesgreenparakeet', 'Down Tilt', '2015-01-25 01:16:14', 0),
(980, 1, 382, 'standardtoaster', 0, 'EarlyGleamingGardensnake', 'F Tilt', '2015-01-25 01:16:14', 0),
(981, 1, 374, 'standardtoaster', 0, 'ScratchyScalyArmyworm', 'U Tilt', '2015-01-25 01:16:14', 0),
(982, 1, 380, 'standardtoaster', 0, 'AgitatedNeatBluemorphobutterfly', 'D Smash', '2015-01-25 01:16:14', 0),
(983, 1, 376, 'standardtoaster', 0, 'CraftyGregariousBird', 'F Smash', '2015-01-25 01:16:14', 0),
(984, 1, 375, 'standardtoaster', 0, 'GrippingWindingHatchetfish', 'U Smash', '2015-01-25 01:16:14', 0),
(985, 1, 371, 'standardtoaster', 0, 'FrankFairAmurstarfish', 'Down Air', '2015-01-25 01:16:14', 0),
(986, 1, 370, 'standardtoaster', 0, 'JaggedAliveJavalina', 'F Air', '2015-01-25 01:16:14', 0),
(987, 1, 369, 'standardtoaster', 0, 'AngelicFlashyAfricanparadiseflycatcher', 'N Air', '2015-01-25 01:16:14', 0),
(988, 1, 377, 'standardtoaster', 0, 'HonestValuableGlassfrog', 'U Air', '2015-01-25 01:16:14', 0),
(989, 1, 378, 'standardtoaster', 0, 'FrighteningWideeyedAmethystsunbird', 'Dash Attack', '2015-01-25 01:16:14', 0),
(990, 1, 372, 'standardtoaster', 0, 'KeyOptimisticGrassspider', 'Running Grab', '2015-01-25 01:16:14', 0),
(991, 1, 384, 'standardtoaster', 0, 'ReadyGrouchyGiraffe', 'Grab', '2015-01-25 01:16:14', 0),
(992, 1, 397, 'standardtoaster', 0, 'SpecificFittingHousefly', 'Down B', '2015-01-25 01:16:14', 0),
(993, 1, 400, 'standardtoaster', 0, 'GreenOblongErne', 'Neutral B', '2015-01-25 01:16:14', 0),
(994, 1, 387, 'standardtoaster', 0, 'SharpCarelessAfricanpiedkingfisher', 'Jab 1', '2015-01-25 01:16:14', 0),
(995, 1, 389, 'standardtoaster', 0, 'AssuredAmazingAlpinegoat', 'Jab 2', '2015-01-25 01:16:14', 0),
(996, 1, 388, 'standardtoaster', 0, 'MeaslySecretEyra', 'Jab 3', '2015-01-25 01:16:14', 0),
(997, 1, 409, 'standardtoaster', 0, 'FrequentUnawareElkhound', 'Down Tilt', '2015-01-25 01:16:14', 0),
(998, 1, 390, 'standardtoaster', 0, 'PortlySlightAmericanavocet', 'High F Tilt', '2015-01-25 01:16:14', 0),
(999, 1, 391, 'standardtoaster', 0, 'RawAggressiveCuscus', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(1000, 1, 392, 'standardtoaster', 0, 'VigorousVioletCub', 'U Tilt', '2015-01-25 01:16:14', 0),
(1001, 1, 408, 'standardtoaster', 0, 'SpotlessQuarrelsomeHatchetfish', 'Down Smash', '2015-01-25 01:16:14', 0),
(1002, 1, 393, 'standardtoaster', 0, 'SlimySaneGartersnake', 'F Smash', '2015-01-25 01:16:14', 0),
(1003, 1, 405, 'standardtoaster', 0, 'DearHeavyBluefintuna', 'B Air', '2015-01-25 01:16:14', 0),
(1004, 1, 406, 'standardtoaster', 0, 'FickleQueasyCockroach', 'D Air', '2015-01-25 01:16:14', 0),
(1005, 1, 404, 'standardtoaster', 0, 'TatteredBareArmyant', 'F Air', '2015-01-25 01:16:14', 0),
(1006, 1, 407, 'standardtoaster', 0, 'HighlevelSparklingBrahmancow', 'N Air', '2015-01-25 01:16:14', 0),
(1007, 1, 403, 'standardtoaster', 0, 'GentleFirsthandGnat', 'U Air', '2015-01-25 01:16:14', 0),
(1008, 1, 401, 'standardtoaster', 0, 'UntriedSaltyGallinule', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1009, 1, 396, 'standardtoaster', 0, 'DentalPettyChickadee', 'Running Grab', '2015-01-25 01:16:14', 0),
(1010, 1, 402, 'standardtoaster', 0, 'CornyAcademicHermitcrab', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1011, 1, 434, 'Emma Watson''s Boyfriend', 0, 'YearlyPaltryGalapagosalbatross', 'Down B', '2015-01-25 01:16:14', 0),
(1012, 1, 424, 'Emma Watson''s Boyfriend', 0, 'SociableOptimalAvians', 'Forward B on ground', '2015-01-25 01:16:14', 0),
(1013, 1, 425, 'Emma Watson''s Boyfriend', 0, 'CarelessPastelAmericanblackvulture', 'Forward B in air', '2015-01-25 01:16:14', 0),
(1014, 1, 426, 'Emma Watson''s Boyfriend', 0, 'TemptingTanAmphiuma', 'Up B', '2015-01-25 01:16:14', 0),
(1015, 1, 433, 'Emma Watson''s Boyfriend', 0, 'FamousTornAddax', 'Jab 1', '2015-01-25 01:16:14', 0),
(1016, 1, 430, 'Emma Watson''s Boyfriend', 0, 'SlushyDefiniteAsiansmallclawedotter', 'Jab 2', '2015-01-25 01:16:14', 0),
(1017, 1, 423, 'Emma Watson''s Boyfriend', 0, 'WholePowerlessCranefly', 'D Tilt', '2015-01-25 01:16:14', 0),
(1018, 1, 410, 'Emma Watson''s Boyfriend', 0, 'BoldUntriedBlackwidowspider', 'F Tilt', '2015-01-25 01:16:14', 0),
(1019, 1, 411, 'Emma Watson''s Boyfriend', 0, 'MilkyCautiousElectriceel', 'U Tilt', '2015-01-25 01:16:14', 0),
(1020, 1, 412, 'Emma Watson''s Boyfriend', 0, 'FarawayMammothCockerspaniel', 'D smash', '2015-01-25 01:16:14', 0),
(1021, 1, 416, 'Emma Watson''s Boyfriend', 0, 'VictoriousHideousFlyingfish', 'U smash', '2015-01-25 01:16:14', 0);
INSERT INTO `gifs` (`id`, `typeid`, `dataid`, `source`, `submittedby`, `url`, `description`, `update_date`, `score`) VALUES
(1022, 1, 418, 'Emma Watson''s Boyfriend', 0, 'GrizzledCooperativeGemsbok', 'B Air', '2015-01-25 01:16:14', 0),
(1023, 1, 417, 'Emma Watson''s Boyfriend', 0, 'InformalBrightBantamrooster', 'D Air', '2015-01-25 01:16:14', 0),
(1024, 1, 419, 'Emma Watson''s Boyfriend', 0, 'DishonestGranularAlpinegoat', 'F Air', '2015-01-25 01:16:14', 0),
(1025, 1, 432, 'Emma Watson''s Boyfriend', 0, 'SpectacularIcyAlbertosaurus', 'N Air', '2015-01-25 01:16:14', 0),
(1026, 1, 431, 'Emma Watson''s Boyfriend', 0, 'KeyWelloffAmericankestrel', 'U Air', '2015-01-25 01:16:14', 0),
(1027, 1, 421, 'Emma Watson''s Boyfriend', 0, 'LittlePinkEmperorshrimp', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1028, 1, 420, 'Emma Watson''s Boyfriend', 0, 'GentleImpartialFoal', 'Running Grab', '2015-01-25 01:16:14', 0),
(1029, 1, 435, 'Emma Watson''s Boyfriend', 0, 'SlowShyAfricanjacana', 'Grab', '2015-01-25 01:16:14', 0),
(1030, 1, 429, 'Emma Watson''s Boyfriend', 0, 'AdolescentDecimalClingfish', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1031, 1, 428, 'Emma Watson''s Boyfriend', 0, 'ValidDarkHoopoe', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1032, 1, 427, 'Emma Watson''s Boyfriend', 0, 'GrizzledPresentCommongonolek', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1033, 1, 422, 'Emma Watson''s Boyfriend', 0, 'DapperOrdinaryBlackbear', 'Veggie Throw Ground', '2015-01-25 01:16:14', 0),
(1034, 1, 447, 'Seikend', 0, 'VapidInsistentIchthyosaurs', 'Forward B', '2015-01-25 01:16:14', 0),
(1035, 1, 438, 'Seikend', 0, 'EvenFaithfulCuttlefish', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(1036, 1, 440, 'Seikend', 0, 'SpicySlipperyArchaeocete', 'Jab', '2015-01-25 01:16:14', 0),
(1037, 1, 439, 'Seikend', 0, 'NaturalBlankClumber', 'D Tilt', '2015-01-25 01:16:14', 0),
(1038, 1, 443, 'Seikend', 0, 'HatefulPitifulCirriped', 'High F Tilt', '2015-01-25 01:16:14', 0),
(1039, 1, 441, 'Seikend', 0, 'ThreadbareDazzlingGrunion', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(1040, 1, 436, 'Seikend', 0, 'ZestyOrangeFattaileddunnart', 'U Tilt', '2015-01-25 01:16:14', 0),
(1041, 1, 445, 'Seikend', 0, 'ExcellentLiquidAsianporcupine', 'D Smash', '2015-01-25 01:16:14', 0),
(1042, 1, 453, 'Seikend', 0, 'MeaslyPassionateButterfly', 'F Smash', '2015-01-25 01:16:14', 0),
(1043, 1, 444, 'Seikend', 0, 'DeficientAncientArthropods', 'U Smash', '2015-01-25 01:16:14', 0),
(1044, 1, 446, 'Seikend', 0, 'VictoriousInstructiveFairyfly', 'B Air', '2015-01-25 01:16:14', 0),
(1045, 1, 442, 'Seikend', 0, 'OrderlyImpoliteAfricanwildcat', 'D Air', '2015-01-25 01:16:14', 0),
(1046, 1, 449, 'Seikend', 0, 'RingedParallelGrasshopper', 'F Air', '2015-01-25 01:16:14', 0),
(1047, 1, 456, 'Seikend', 0, 'SleepyFarAmurminnow', 'Forward B in air', '2015-01-25 01:16:14', 0),
(1048, 1, 450, 'Seikend', 0, 'LastNaiveAmericanrobin', 'U Air', '2015-01-25 01:16:14', 0),
(1049, 1, 452, 'Seikend', 0, 'IckyVillainousHoatzin', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1050, 1, 448, 'Seikend', 0, 'BlaringWarmheartedArthropods', 'Running Grab', '2015-01-25 01:16:14', 0),
(1051, 1, 454, 'Seikend', 0, 'VeneratedPresentKittiwake', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1052, 1, 455, 'Seikend', 0, 'VariableScholarlyCooter', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1053, 1, 437, 'Seikend', 0, 'ExemplaryDecimalFawn', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1054, 1, 451, 'Seikend', 0, 'OfficialFloweryKoi', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1055, 1, 457, 'Stratocaster', 0, 'MemorableFrayedDunlin', 'Down B', '2015-01-25 01:16:14', 0),
(1056, 1, 476, 'Stratocaster', 0, 'BraveCelebratedEchidna', 'Forward B', '2015-01-25 01:16:14', 0),
(1057, 1, 467, 'Stratocaster', 0, 'BeneficialMistyAmurratsnake', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(1058, 1, 475, 'Stratocaster', 0, 'OldYoungKiwi', 'Up B', '2015-01-25 01:16:14', 0),
(1059, 1, 458, 'Stratocaster', 0, 'BriefWearyBaleenwhale', 'Jab', '2015-01-25 01:16:14', 0),
(1060, 1, 462, 'Stratocaster', 0, 'IlliterateWhiteHogget', 'D Tilt', '2015-01-25 01:16:14', 0),
(1061, 1, 459, 'Stratocaster', 0, 'SatisfiedLameEmeraldtreeskink', 'High F Tilt', '2015-01-25 01:16:14', 0),
(1062, 1, 460, 'Stratocaster', 0, 'ExemplaryGiantDesertpupfish', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(1063, 1, 461, 'Stratocaster', 0, 'SoulfulBarrenGonolek', 'U Tilt', '2015-01-25 01:16:14', 0),
(1064, 1, 463, 'Stratocaster', 0, 'EntireVictoriousHyrax', 'D Smash', '2015-01-25 01:16:14', 0),
(1065, 1, 464, 'Stratocaster', 0, 'GoldenBouncyConure', 'F Smash', '2015-01-25 01:16:14', 0),
(1066, 1, 470, 'Stratocaster', 0, 'PeriodicFlippantBlueandgoldmackaw', 'U Smash', '2015-01-25 01:16:14', 0),
(1067, 1, 478, 'Stratocaster', 0, 'HelplessOpulentErin', 'B Air', '2015-01-25 01:16:14', 0),
(1068, 1, 479, 'Stratocaster', 0, 'FamiliarVeneratedHorse', 'D Air', '2015-01-25 01:16:14', 0),
(1069, 1, 480, 'Stratocaster', 0, 'FrayedPopularBrontosaurus', 'F Air', '2015-01-25 01:16:14', 0),
(1070, 1, 471, 'Stratocaster', 0, 'CorruptWhisperedCommabutterfly', 'N Air', '2015-01-25 01:16:14', 0),
(1071, 1, 465, 'Stratocaster', 0, 'DirtyWeeklyGoa', 'U Air', '2015-01-25 01:16:14', 0),
(1072, 1, 469, 'Stratocaster', 0, 'KindheartedConcreteDowitcher', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1073, 1, 473, 'Stratocaster', 0, 'VerifiablePerfumedEyelashpitviper', 'Running Grab', '2015-01-25 01:16:14', 0),
(1074, 1, 466, 'Stratocaster', 0, 'PointedFrigidAcouchi', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1075, 1, 472, 'Stratocaster', 0, 'AliveSarcasticEel', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1076, 1, 477, 'Stratocaster', 0, 'MeaslyEdibleGemsbuck', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1077, 1, 474, 'Stratocaster', 0, 'NiftyDismalGoldfish', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1078, 1, 468, 'Stratocaster', 0, 'JitteryVastBighorn', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1079, 1, 481, 'Aizen', 0, 'VioletClosedKid', 'Down B', '2015-01-25 01:16:14', 0),
(1080, 1, 508, 'Aizen', 0, 'ClutteredUnnaturalCutworm', 'Forward B 1', '2015-01-25 01:16:14', 0),
(1081, 1, 506, 'Aizen', 0, 'YellowishFortunateEmu', 'Forward B 3 (down)', '2015-01-25 01:16:14', 0),
(1082, 1, 504, 'Aizen', 0, 'VelvetyZestyAzurevasesponge', 'Forward B 3 (neutral)', '2015-01-25 01:16:14', 0),
(1083, 1, 502, 'Aizen', 0, 'MeatyBeautifulIndochinesetiger', 'Forward B 3 (up)', '2015-01-25 01:16:14', 0),
(1084, 1, 507, 'Aizen', 0, 'HastyGreatAmericankestrel', 'Forward B 4 (down)', '2015-01-25 01:16:14', 0),
(1085, 1, 498, 'Aizen', 0, 'TartGiantClumber', 'Forward B 4 (neutral)', '2015-01-25 01:16:14', 0),
(1086, 1, 499, 'Aizen', 0, 'RedThatHuemul', 'Forward B 4 (up)', '2015-01-25 01:16:14', 0),
(1087, 1, 482, 'Aizen', 0, 'YoungLinearAmazondolphin', 'Neutral B', '2015-01-25 01:16:14', 0),
(1088, 1, 505, 'Aizen', 0, 'AncientKaleidoscopicFlyingfish', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(1089, 1, 483, 'Aizen', 0, 'AffectionateSeparateEarthworm', 'Up B', '2015-01-25 01:16:14', 0),
(1090, 1, 484, 'Aizen', 0, 'PertinentPinkIndianabat', 'Jab 1', '2015-01-25 01:16:14', 0),
(1091, 1, 486, 'Aizen', 0, 'OffensiveViciousCob', 'D Tilt', '2015-01-25 01:16:14', 0),
(1092, 1, 488, 'Aizen', 0, 'ScratchyGratefulEagle', 'F Tilt', '2015-01-25 01:16:14', 0),
(1093, 1, 485, 'Aizen', 0, 'GargantuanGleamingHairstreakbutterfly', 'N Air', '2015-01-25 01:16:14', 0),
(1094, 1, 487, 'Aizen', 0, 'GleamingTightGuppy', 'U Tilt', '2015-01-25 01:16:14', 0),
(1095, 1, 490, 'Aizen', 0, 'ScarceRichKingfisher', 'D Smash', '2015-01-25 01:16:14', 0),
(1096, 1, 491, 'Aizen', 0, 'GlitteringGaseousIbadanmalimbe', 'F Smash', '2015-01-25 01:16:14', 0),
(1097, 1, 489, 'Aizen', 0, 'ImperturbablePlushGhostshrimp', 'U Smash', '2015-01-25 01:16:14', 0),
(1098, 1, 494, 'Aizen', 0, 'LivelyGrimyIndri', 'B Air', '2015-01-25 01:16:14', 0),
(1099, 1, 493, 'Aizen', 0, 'SpiffyEnlightenedIchneumonfly', 'D Air', '2015-01-25 01:16:14', 0),
(1100, 1, 492, 'Aizen', 0, 'HarmoniousWildBoutu', 'F Air', '2015-01-25 01:16:14', 0),
(1101, 1, 495, 'Aizen', 0, 'GlamorousBetterJenny', 'U Air', '2015-01-25 01:16:14', 0),
(1102, 1, 496, 'Aizen', 0, 'ClassicMagnificentKakapo', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1103, 1, 512, 'Aizen', 0, 'PettyCheapBlacklab', 'Running Grab', '2015-01-25 01:16:14', 0),
(1104, 1, 509, 'Aizen', 0, 'RevolvingAbsoluteGiraffe', 'Grab', '2015-01-25 01:16:14', 0),
(1105, 1, 501, 'Aizen', 0, 'HeavyDishonestHairstreakbutterfly', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1106, 1, 510, 'Aizen', 0, 'ColossalGentleBustard', 'Roll Back', '2015-01-25 01:16:14', 0),
(1107, 1, 497, 'Aizen', 0, 'AngryLavishFlyingfish', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1108, 1, 511, 'Aizen', 0, 'ConstantWanBream', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1109, 1, 522, 'knihT', 0, 'GleefulAnxiousHammerkop', 'Down B', '2015-01-25 01:16:14', 0),
(1110, 1, 527, 'knihT', 0, 'CarelessSpicyLadybug', 'Neutral B', '2015-01-25 01:16:14', 0),
(1111, 1, 524, 'knihT', 0, 'TotalComposedJackal', 'Neutral B (full charge)', '2015-01-25 01:16:14', 0),
(1112, 1, 514, 'knihT', 0, 'DaringVacantBluetonguelizard', 'Jab 1', '2015-01-25 01:16:14', 0),
(1113, 1, 521, 'knihT', 0, 'BeautifulMasculineHind', 'Jab 2', '2015-01-25 01:16:14', 0),
(1114, 1, 533, 'knihT', 0, 'OldElaborateAlligatorsnappingturtle', 'D Tilt', '2015-01-25 01:16:14', 0),
(1115, 1, 517, 'knihT', 0, 'MealyGrandAmericansaddlebred', 'High F Tilt', '2015-01-25 01:16:14', 0),
(1116, 1, 538, 'knihT', 0, 'UnsteadyDizzyComet', 'Low F Tilt', '2015-01-25 01:16:14', 0),
(1117, 1, 541, 'knihT', 0, 'ParchedWebbedAmazonparrot', 'U Tilt', '2015-01-25 01:16:14', 0),
(1118, 1, 519, 'knihT', 0, 'PepperyMediocreAardwolf', 'D Smash', '2015-01-25 01:16:14', 0),
(1119, 1, 537, 'knihT', 0, 'PlumpAngryDugong', 'F Smash', '2015-01-25 01:16:14', 0),
(1120, 1, 520, 'knihT', 0, 'UnpleasantCommonAfricanhornbill', 'U Smash', '2015-01-25 01:16:14', 0),
(1121, 1, 515, 'knihT', 0, 'WealthyDistantArgentineruddyduck', 'B Air', '2015-01-25 01:16:14', 0),
(1122, 1, 516, 'knihT', 0, 'RashFantasticGecko', 'D Air', '2015-01-25 01:16:14', 0),
(1123, 1, 536, 'knihT', 0, 'IgnorantDisguisedBinturong', 'F Air', '2015-01-25 01:16:14', 0),
(1124, 1, 539, 'knihT', 0, 'ReflectingInsignificantAnt', 'N Air', '2015-01-25 01:16:14', 0),
(1125, 1, 542, 'knihT', 0, 'RightInfiniteAlbino', 'U Air', '2015-01-25 01:16:14', 0),
(1126, 1, 531, 'knihT', 0, 'QuaintJovialHectorsdolphin', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1127, 1, 534, 'knihT', 0, 'ArtisticGloomyBullmastiff', 'Running Grab', '2015-01-25 01:16:14', 0),
(1128, 1, 535, 'knihT', 0, 'SlushyInsignificantAltiplanochinchillamouse', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1129, 1, 529, 'knihT', 0, 'WarmheartedSelfishCoati', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1130, 1, 530, 'knihT', 0, 'ShadyFoolhardyBasil', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1131, 1, 532, 'knihT', 0, 'HauntingOccasionalCapybara', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1132, 1, 540, 'knihT', 0, 'HandyOrneryAstrangiacoral', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1133, 1, 564, 'Stratocaster', 0, 'JauntyGreenJunco', 'Down B', '2015-01-25 01:16:14', 0),
(1134, 1, 559, 'Stratocaster', 0, 'WatchfulNauticalAidi', 'Forward B', '2015-01-25 01:16:14', 0),
(1135, 1, 562, 'Stratocaster', 0, 'ThriftyMetallicHornedtoad', 'Neutral B (charged)', '2015-01-25 01:16:14', 0),
(1136, 1, 543, 'Stratocaster', 0, 'SameFlippantAbyssiniangroundhornbill', 'Up B', '2015-01-25 01:16:14', 0),
(1137, 1, 544, 'Stratocaster', 0, 'ElegantVelvetyGreatargus', 'Jab 1', '2015-01-25 01:16:14', 0),
(1138, 1, 546, 'Stratocaster', 0, 'ImpureHealthyCod', 'Jab 2', '2015-01-25 01:16:14', 0),
(1139, 1, 545, 'Stratocaster', 0, 'LameGlaringAmericanrobin', 'Jab 3', '2015-01-25 01:16:14', 0),
(1140, 1, 547, 'Stratocaster', 0, 'DeliciousCoordinatedGodwit', 'D Tilt', '2015-01-25 01:16:14', 0),
(1141, 1, 548, 'Stratocaster', 0, 'LavishTanDotterel', 'F Tilt', '2015-01-25 01:16:14', 0),
(1142, 1, 553, 'Stratocaster', 0, 'PersonalGiddyIcterinewarbler', 'U Tilt', '2015-01-25 01:16:14', 0),
(1143, 1, 558, 'Stratocaster', 0, 'CoarseShadowyHypsilophodon', 'F Smash', '2015-01-25 01:16:14', 0),
(1144, 1, 560, 'Stratocaster', 0, 'OldfashionedWatchfulDromedary', 'B Air', '2015-01-25 01:16:14', 0),
(1145, 1, 561, 'Stratocaster', 0, 'PoorRaggedAlligatorgar', 'D Air', '2015-01-25 01:16:14', 0),
(1146, 1, 550, 'Stratocaster', 0, 'SecondBigheartedCrocodile', 'F Air', '2015-01-25 01:16:14', 0),
(1147, 1, 549, 'Stratocaster', 0, 'FlippantRequiredAfricanpiedkingfisher', 'N Air', '2015-01-25 01:16:14', 0),
(1148, 1, 551, 'Stratocaster', 0, 'HappyOrneryHanumanmonkey', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1149, 1, 555, 'Stratocaster', 0, 'ShoddyAppropriateAegeancat', 'Running Grab', '2015-01-25 01:16:14', 0),
(1150, 1, 552, 'Stratocaster', 0, 'HiddenFittingGrebe', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1151, 1, 563, 'Stratocaster', 0, 'TightLameLamb', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1152, 1, 554, 'Stratocaster', 0, 'SomberLargeAss', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1153, 1, 556, 'Stratocaster', 0, 'DevotedQuerulousArgentineruddyduck', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1154, 1, 557, 'Stratocaster', 0, 'IgnorantFearlessElephantbeetle', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1155, 1, 566, 'Stratocaster', 0, 'InbornDamagedIndianpalmsquirrel', 'Neutral B in air', '2015-01-25 01:16:14', 0),
(1156, 1, 565, 'Stratocaster', 0, 'AnxiousOblongBobwhite', 'Down Smash', '2015-01-25 01:16:14', 0),
(1157, 1, 568, 'Stratocaster', 0, 'TatteredWarpedBushsqueaker', 'Up Smash', '2015-01-25 01:16:14', 0),
(1158, 1, 567, 'Stratocaster', 0, 'AccomplishedInsidiousJohndory', 'U Air', '2015-01-25 01:16:14', 0),
(1159, 1, 581, 'mastermoo420', 0, 'MindlessMajesticCockatiel', 'Down B from ground', '2015-01-25 01:16:14', 0),
(1160, 1, 586, 'mastermoo420', 0, 'OrneryCalmChinesecrocodilelizard', 'Neutral B', '2015-01-25 01:16:14', 0),
(1161, 1, 587, 'mastermoo420', 0, 'OpenUnrulyKangaroo', 'Up B', '2015-01-25 01:16:14', 0),
(1162, 1, 569, 'mastermoo420', 0, 'ShamefulNecessaryDobermanpinscher', 'Jab 1', '2015-01-25 01:16:14', 0),
(1163, 1, 576, 'mastermoo420', 0, 'RevolvingIncredibleDalmatian', 'Jab 2', '2015-01-25 01:16:14', 0),
(1164, 1, 572, 'mastermoo420', 0, 'AngelicGrimyAfricanaugurbuzzard', 'D Tilt', '2015-01-25 01:16:14', 0),
(1165, 1, 571, 'mastermoo420', 0, 'CorruptAmbitiousAiredaleterrier', 'F Tilt', '2015-01-25 01:16:14', 0),
(1166, 1, 570, 'mastermoo420', 0, 'SolidShowyCoqui', 'U Tilt', '2015-01-25 01:16:14', 0),
(1167, 1, 579, 'mastermoo420', 0, 'HatefulIdenticalHen', 'D Smash', '2015-01-25 01:16:14', 0),
(1168, 1, 578, 'mastermoo420', 0, 'CoordinatedGiganticJay', 'F Smash', '2015-01-25 01:16:14', 0),
(1169, 1, 573, 'mastermoo420', 0, 'SnarlingAdmirableDragonfly', 'U Smash', '2015-01-25 01:16:14', 0),
(1170, 1, 584, 'mastermoo420', 0, 'IcyHollowAlaskajingle', 'B Air', '2015-01-25 01:16:14', 0),
(1171, 1, 583, 'mastermoo420', 0, 'TenseMajorCatfish', 'D Air', '2015-01-25 01:16:14', 0),
(1172, 1, 588, 'mastermoo420', 0, 'SpitefulDeterminedBuckeyebutterfly', 'F Air', '2015-01-25 01:16:14', 0),
(1173, 1, 590, 'mastermoo420', 0, 'AshamedAnnualGoldfinch', 'N Air', '2015-01-25 01:16:14', 0),
(1174, 1, 575, 'mastermoo420', 0, 'DismalGorgeousEstuarinecrocodile', 'U Air', '2015-01-25 01:16:14', 0),
(1175, 1, 577, 'mastermoo420', 0, 'TintedGlassGarpike', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1176, 1, 585, 'mastermoo420', 0, 'NastyBasicAsp', 'Running Grab', '2015-01-25 01:16:14', 0),
(1177, 1, 580, 'mastermoo420', 0, 'ValuableAlarmedHammerkop', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1178, 1, 582, 'mastermoo420', 0, 'HiddenPlasticCrossbill', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1179, 1, 574, 'mastermoo420', 0, 'SparklingQuestionableAmericantoad', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1180, 1, 589, 'mastermoo420', 0, 'ZanyNextHermitcrab', 'Ground Dodge', '2015-01-25 01:16:14', 0),
(1181, 1, 591, 'mastermoo420', 0, 'EqualGenuineIberianchiffchaff', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1182, 1, 608, 'standardtoaster', 0, 'HardBlaringBrownbear', 'Down B', '2015-01-25 01:16:14', 0),
(1183, 1, 606, 'standardtoaster', 0, 'TornWideAndeancondor', 'Jab 1', '2015-01-25 01:16:14', 0),
(1184, 1, 593, 'standardtoaster', 0, 'FittingZanyHagfish', 'Jab 2', '2015-01-25 01:16:14', 0),
(1185, 1, 617, 'standardtoaster', 0, 'SociableChiefIbisbill', 'Jab 3', '2015-01-25 01:16:14', 0),
(1186, 1, 596, 'standardtoaster', 0, 'GlossyYearlyDassie', 'Down Tilt', '2015-01-25 01:16:14', 0),
(1187, 1, 605, 'standardtoaster', 0, 'MajorDefensiveDungenesscrab', 'F Tilt', '2015-01-25 01:16:14', 0),
(1188, 1, 620, 'standardtoaster', 0, 'GrimCluelessDorking', 'U Tilt', '2015-01-25 01:16:14', 0),
(1189, 1, 614, 'standardtoaster', 0, 'HandyMetallicLabradorretriever', 'Down Smash', '2015-01-25 01:16:14', 0),
(1190, 1, 615, 'standardtoaster', 0, 'LankyDependentGlassfrog', 'F Smash 2', '2015-01-25 01:16:14', 0),
(1191, 1, 619, 'standardtoaster', 0, 'MixedPoliticalHarlequinbug', 'Up Smash', '2015-01-25 01:16:14', 0),
(1192, 1, 595, 'standardtoaster', 0, 'PreciousGenerousGoldfish', 'B Air', '2015-01-25 01:16:14', 0),
(1193, 1, 613, 'standardtoaster', 0, 'ImmenseRepentantGourami', 'Down Air', '2015-01-25 01:16:14', 0),
(1194, 1, 601, 'standardtoaster', 0, 'VengefulPerfumedAddax', 'F Air', '2015-01-25 01:16:14', 0),
(1195, 1, 604, 'standardtoaster', 0, 'ImprobableVapidGermanspitz', 'N Air', '2015-01-25 01:16:14', 0),
(1196, 1, 594, 'standardtoaster', 0, 'DishonestVapidCicada', 'U Air', '2015-01-25 01:16:14', 0),
(1197, 1, 600, 'standardtoaster', 0, 'AgreeableEssentialGrouper', 'Z Air', '2015-01-25 01:16:14', 0),
(1198, 1, 611, 'standardtoaster', 0, 'UniqueFondChrysalis', 'Dash Attack', '2015-01-25 01:16:14', 0),
(1199, 1, 612, 'standardtoaster', 0, 'BiodegradableBewitchedChupacabra', 'Running Grab', '2015-01-25 01:16:14', 0),
(1200, 1, 616, 'standardtoaster', 0, 'UnfitOccasionalIceblueredtopzebra', 'Grab', '2015-01-25 01:16:14', 0),
(1201, 1, 599, 'standardtoaster', 0, 'IndelibleFlippantCutworm', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1202, 1, 598, 'standardtoaster', 0, 'RemoteSentimentalAngwantibo', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1203, 1, 618, 'standardtoaster', 0, 'SentimentalConcernedBedlingtonterrier', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1204, 1, 597, 'standardtoaster', 0, 'SpeedyHarmoniousGalapagossealion', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1205, 1, 626, 'mastermoo420', 0, 'BasicPettyAmericanlobster', 'Down B', '2015-01-25 01:16:14', 0),
(1206, 1, 623, 'mastermoo420', 0, 'WeightySkinnyAfricanrockpython', 'Forward B', '2015-01-25 01:16:14', 0),
(1207, 1, 634, 'mastermoo420', 0, 'ElaborateAccurateIberianmidwifetoad', 'Neutral B', '2015-01-25 01:16:14', 0),
(1208, 1, 642, 'mastermoo420', 0, 'HarshForcefulArabianwildcat', 'Up B', '2015-01-25 01:16:14', 0),
(1209, 1, 639, 'mastermoo420', 0, 'InfiniteInnocentAcornbarnacle', 'F Tilt', '2015-01-25 01:16:14', 0),
(1210, 1, 622, 'mastermoo420', 0, 'PinkIllfatedIraniangroundjay', 'D Smash', '2015-01-25 01:16:14', 0),
(1211, 1, 638, 'mastermoo420', 0, 'ImpressionableRecklessKouprey', 'F Smash', '2015-01-25 01:16:14', 0),
(1212, 1, 643, 'mastermoo420', 0, 'TatteredAffectionateAfricanelephant', 'U Smash', '2015-01-25 01:16:14', 0),
(1213, 1, 621, 'mastermoo420', 0, 'DismalUntimelyGoral', 'U Tilt', '2015-01-25 01:16:14', 0),
(1214, 1, 630, 'mastermoo420', 0, 'FluidIcyGalah', 'B Air', '2015-01-25 01:16:14', 0),
(1215, 1, 633, 'mastermoo420', 0, 'ShinyUntriedBrontosaurus', 'D Air', '2015-01-25 01:16:14', 0),
(1216, 1, 636, 'mastermoo420', 0, 'UnderstatedCheapBellfrog', 'D Tilt', '2015-01-25 01:16:14', 0),
(1217, 1, 631, 'mastermoo420', 0, 'SaneMajesticIchneumonfly', 'F Air', '2015-01-25 01:16:14', 0),
(1218, 1, 625, 'mastermoo420', 0, 'SoreColorfulJavalina', 'N Air', '2015-01-25 01:16:14', 0),
(1219, 1, 635, 'mastermoo420', 0, 'NeighboringPositiveAlligator', 'U Air', '2015-01-25 01:16:14', 0),
(1220, 1, 637, 'mastermoo420', 0, 'BrokenCostlyGrison', 'Dash attack', '2015-01-25 01:16:14', 0),
(1221, 1, 632, 'mastermoo420', 0, 'HighlevelRegalLark', 'Running Grab', '2015-01-25 01:16:14', 0),
(1222, 1, 629, 'mastermoo420', 0, 'SomberTenderAvocet', 'Standing Grab', '2015-01-25 01:16:14', 0),
(1223, 1, 627, 'mastermoo420', 0, 'CircularFrenchChrysomelid', 'Air Dodge', '2015-01-25 01:16:14', 0),
(1224, 1, 624, 'mastermoo420', 0, 'OddInexperiencedDesertpupfish', 'Roll Backward', '2015-01-25 01:16:14', 0),
(1225, 1, 640, 'mastermoo420', 0, 'DismalClosedAmericanpainthorse', 'Spot Dodge', '2015-01-25 01:16:14', 0),
(1226, 1, 628, 'mastermoo420', 0, 'ColossalEasygoingCrayfish', 'Roll Forward', '2015-01-25 01:16:14', 0),
(1227, 1, 641, 'mastermoo420', 0, 'ShamelessExhaustedAmericanindianhorse', 'Jab', '2015-01-25 01:16:14', 0),
(1787, 1, 4, 'Seikend', 0, 'ElaborateMaleAustraliankestrel', 'Down B on ground', '2015-01-25 02:18:37', 0),
(1788, 1, 2, 'Seikend', 0, 'SmoggyBriefHyracotherium', 'Up B in air', '2015-01-25 02:18:37', 0),
(1789, 1, 3, 'Seikend', 0, 'DangerousPessimisticAmericanredsquirrel', 'Up B on ground', '2015-01-25 02:18:37', 0),
(1790, 1, 1, 'Seikend', 0, 'CourteousWarmFairybluebird', 'Down B in air', '2015-01-25 02:18:37', 0),
(1791, 1, 61, 'Strong Bad', 0, 'ThinIckyGrackle', 'Neutral B', '2015-01-25 02:18:37', 0),
(1792, 1, 40, 'Strong Bad', 0, 'ComplexRevolvingBantamrooster', 'Up B on ground', '2015-01-25 02:18:37', 0),
(1793, 1, 39, 'Strong Bad', 0, 'ObedientAnimatedGuillemot', 'Up B in air', '2015-01-25 02:18:37', 0),
(1794, 1, 66, 'Strong Bad', 0, 'HopefulNauticalArrowana', 'Neutral B', '2015-01-25 02:18:37', 0),
(1795, 1, 154, 'standardtoaster', 0, 'AppropriateCleanJellyfish', 'High F Smash', '2015-01-25 02:18:37', 0),
(1796, 1, 158, 'standardtoaster', 0, 'DependentTidyGalapagospenguin', 'Low F Smash', '2015-01-25 02:18:37', 0),
(1797, 1, 159, 'standardtoaster', 0, 'InbornOrdinaryAffenpinscher', 'Down B', '2015-01-25 02:18:37', 0),
(1798, 1, 161, 'standardtoaster', 0, 'MadeupNiftyFerret', 'Forward B on ground', '2015-01-25 02:18:37', 0),
(1799, 1, 164, 'standardtoaster', 0, 'EdibleSilverFirebelliedtoad', 'Down B in air', '2015-01-25 02:18:37', 0),
(1800, 1, 166, 'standardtoaster', 0, 'LastEducatedFurseal', 'Forward B in air (hit)', '2015-01-25 02:18:37', 0),
(1801, 1, 200, 'Massive', 0, 'ShortLazyHammerheadshark', 'B Air', '2015-01-25 02:18:37', 0),
(1802, 1, 206, 'Massive', 0, 'HiddenSpryFerret', 'N Air', '2015-01-25 02:18:37', 0),
(1803, 1, 254, 'standardtoaster', 0, 'SpanishWealthyAsianconstablebutterfly', 'Up B', '2015-01-25 02:18:37', 0),
(1804, 1, 249, 'standardtoaster', 0, 'BogusSandyIrishterrier', 'Up B', '2015-01-25 02:18:37', 0),
(1805, 1, 251, 'standardtoaster', 0, 'VagueUglyDartfrog', 'Up B in air', '2015-01-25 02:18:37', 0),
(1806, 1, 256, 'standardtoaster', 0, 'RecentElaborateBellsnake', 'Jab 3 (non-rapid)', '2015-01-25 02:18:37', 0),
(1807, 1, 259, 'standardtoaster', 0, 'QuarrelsomeCanineAmericanindianhorse', 'Jab 3 (rapid)', '2015-01-25 02:18:37', 0),
(1808, 1, 270, 'standardtoaster', 0, 'ComplicatedEquatorialInsect', 'Down B', '2015-01-25 02:18:37', 0),
(1809, 1, 283, 'standardtoaster', 0, 'IllJovialDotterel', 'Down B on ground', '2015-01-25 02:18:37', 0),
(1810, 1, 339, 'Stratocaster', 0, 'RareFrigidBasenji', 'Forward B 2 (up)', '2015-01-25 02:18:37', 0),
(1811, 1, 333, 'Stratocaster', 0, 'WellmadeUnripeCopepod', 'Forward B 2 (neutral & down)', '2015-01-25 02:18:37', 0),
(1812, 1, 366, 'standardtoaster', 0, 'FeminineThoseDragonfly', 'Down B', '2015-01-25 02:18:37', 0),
(1813, 1, 367, 'standardtoaster', 0, 'ExcitableShimmeringCoelacanth', 'Down B (after 3 charges)', '2015-01-25 02:18:37', 0),
(1814, 1, 385, 'standardtoaster', 0, 'MelodicDisfiguredBedlingtonterrier', 'Jab', '2015-01-25 02:18:37', 0),
(1815, 1, 379, 'standardtoaster', 0, 'LimpDecimalEarthworm', 'Neutral B', '2015-01-25 02:18:37', 0),
(1816, 1, 373, 'standardtoaster', 0, 'SillyWiltedKakarikis', 'Jab', '2015-01-25 02:18:37', 0),
(1817, 1, 381, 'standardtoaster', 0, 'PleasedClearDikdik', 'Neutral B (1-8)', '2015-01-25 02:18:37', 0),
(1818, 1, 394, 'standardtoaster', 0, 'WelltodoFluidFrigatebird', 'Forward B', '2015-01-25 02:18:37', 0),
(1819, 1, 395, 'standardtoaster', 0, 'ImpracticalSleepyAtlanticspadefish', 'Up B 1', '2015-01-25 02:18:37', 0),
(1820, 1, 398, 'standardtoaster', 0, 'SlushyPeriodicEstuarinecrocodile', 'Up B 2', '2015-01-25 02:18:37', 0),
(1821, 1, 399, 'standardtoaster', 0, 'SpiffyJoyousAustralianfurseal', 'Forward B', '2015-01-25 02:18:37', 0),
(1822, 1, 413, 'Emma Watson''s Boyfriend', 0, 'QuarrelsomeAggressiveIslandcanary', 'F Smash Golf Club', '2015-01-25 02:18:37', 0),
(1823, 1, 414, 'Emma Watson''s Boyfriend', 0, 'SpecificShorttermBurro', 'F Smash Racket', '2015-01-25 02:18:37', 0),
(1824, 1, 415, 'Emma Watson''s Boyfriend', 0, 'ResponsibleImaginaryGoa', 'F Smash Frying Pan', '2015-01-25 02:18:37', 0),
(1825, 1, 500, 'Aizen', 0, 'NaiveHeavyBallpython', 'Forward B 2 (up)', '2015-01-25 02:18:37', 0),
(1826, 1, 503, 'Aizen', 0, 'ConstantLastAmericanblackvulture', 'Forward B 2 (neutral & down)', '2015-01-25 02:18:37', 0),
(1827, 1, 528, 'knihT', 0, 'FlamboyantGiganticHuia', 'Up B', '2015-01-25 02:18:37', 0),
(1828, 1, 518, 'knihT', 0, 'PoshOblongBlackpanther', 'Forward B in air (smash b)', '2015-01-25 02:18:37', 0),
(1829, 1, 526, 'knihT', 0, 'OblongDesertedAnophelesmosquito', 'Forward B on ground (smash b)', '2015-01-25 02:18:37', 0),
(1830, 1, 525, 'knihT', 0, 'SandyNauticalEel', 'Forward B in air (tilt b)', '2015-01-25 02:18:37', 0),
(1831, 1, 523, 'knihT', 0, 'BlandAngelicAnaconda', 'Forward B on ground (tilt b)', '2015-01-25 02:18:37', 0),
(1832, 1, 513, 'knihT', 0, 'DisastrousFreshFerret', 'Up B in air', '2015-01-25 02:18:37', 0),
(1833, 1, 592, 'standardtoaster', 0, 'SingleImmediateGermanshepherd', 'Up B', '2015-01-25 02:18:37', 0),
(1834, 1, 607, 'standardtoaster', 0, 'ParallelIdealisticAnhinga', 'Neutral B (startup)', '2015-01-25 02:18:37', 0),
(1835, 1, 603, 'standardtoaster', 0, 'PassionateFreshHogget', 'Up B in air', '2015-01-25 02:18:37', 0),
(1836, 1, 602, 'standardtoaster', 0, 'UnacceptableBigheartedElectriceel', 'Neutral B', '2015-01-25 02:18:37', 0),
(1837, 1, 610, 'standardtoaster', 0, 'TiredGracefulIndigobunting', 'Forward B (end)', '2015-01-25 02:18:37', 0),
(1838, 1, 609, 'standardtoaster', 0, 'ConsciousVacantFlea', 'Forward B (start)', '2015-01-25 02:18:37', 0),
(1850, 1, 381, 'standardtoaster', 0, 'FelineBouncyClam', 'Forward B', '2015-01-25 02:35:25', 0),
(1851, 0, 25, 'Stratocaster', 0, 'GrandInferiorHammerheadshark', 'Jab 3 ', '2015-01-25 02:39:00', 0),
(1852, 2, 28, '', 0, 'PaleHollowLamb', 'Captain Falcon moonwalks across the stage', '2015-02-03 20:43:18', 0),
(1853, 0, 23, 'SmashLounge Invitational #1', 0, 'PreciousHiddenBighornedsheep', 'Laudandus demonstrating how to relentlessly edgeguard as Sheik', '2015-02-03 20:48:18', 0),
(1854, 0, 8, 'S@DZ25', 0, 'OilyMinorAcaciarat', 'Irish covering all recovery options', '2015-02-03 20:48:19', 0),
(1855, 0, 26, 'S@DZ 25', 0, 'EmbellishedFalseInvisiblerail', 'Zelda using a nair to break out of a Falcon down-throw knee combo', '2015-02-03 20:48:21', 0),
(1856, 0, 26, 'S@DZ 21', 0, 'AggravatingOddImperialeagle', 'Zelda 0 - death on Peach', '2015-02-03 20:48:22', 0),
(1857, 0, 1, 'http://www.reddit.com/r/smashbros', 0, 'ScratchyAcademicAmericanavocet', 'DJ Nintendo counter-picks Bowser!', '2015-02-03 20:48:25', 0),
(1858, 0, 5, '', 0, 'JollyUnawareGrasshopper', 'Westballz demonstrating how to apply pressure as Falco', '2015-02-03 20:48:26', 0),
(1859, 2, 23, 'Kansas City/Lawerence Smashers (Kadano)', 0, 'SecondHiddenJoey', 'Light Powershielding(20XX)', '2015-02-05 02:26:10', 0),
(1860, 2, 23, '', 0, 'CalmPoliticalConch', 'Another example of light powershielding(Credit to Kadano) ', '2015-02-09 01:50:38', 0),
(1868, 2, 31, 'http://www.reddit.com/r/smashbros', 0, 'OddEmbellishedAmazontreeboa', 'A shield drop demonstrated alongside the controller inputs', '2015-02-12 00:14:59', 0),
(1869, 0, 14, 'WHOBO MLG Edition', 0, 'AmusedAngryAlbacoretuna', 'ARC showing off Marth''s throw DI mixups vs Jigglypuff', '2015-02-13 18:29:10', 0),
(1870, 2, 7, 'Forte 2', 0, 'SatisfiedParallelIchthyostega', 'ARC dashdance baits a grab and punishes with a pivot tipper', '2015-02-13 19:56:08', 0),
(1871, 2, 13, 'Kadano', 0, 'EvilRecklessComet', 'Falco performs a completely intangible ledgedashstall (aka haxdash) on Yoshiâ€™s Storyâ€™s side platform', '2015-02-13 19:56:12', 0),
(1872, 2, 7, 'WHOBO MLG Edition', 0, 'QuarrelsomeFragrantAndeancondor', 'the difference between f-trhow wavedash f-smash and f-throw pivot tipper', '2015-02-13 19:56:21', 0),
(1873, 2, 23, 'smashboards.com/posts/18512581', 0, 'LeadingHandsomeBernesemountaindog', 'Marth uses Z-Powershielding to increase the frame window for the powershield-projectile (reflect)', '2015-02-13 21:25:38', 0),
(1874, 2, 23, 'smashboards.com/posts/18512581', 0, 'WelldocumentedHoarseDuiker', 'Marth uses Z-Powershielding to reflect a low laser from crouch (not possible with normal PS)', '2015-02-13 21:25:40', 0),
(1875, 2, 33, 'smashboards.com/posts/16761069', 0, 'FancyRadiantHog', 'Sheik performs an aerial interrupt with her up aerial and retains 8 frames of grounded intangibility', '2015-02-13 21:27:48', 0),
(1876, 2, 7, 'Apex 2015', 0, 'CorruptWideeyedCommabutterfly', 'A collection of PewPewU pivot-tippers', '2015-02-19 21:23:02', 0),
(1877, 2, 1, 'Kadano', 0, 'OldDistantAmericanwigeon', 'Sheik punishes Falcoâ€™s shield pressure with a wavedash out of shield followed by a dash attack', '2015-02-19 21:23:05', 0),
(1878, 0, 14, 'Kadano', 0, 'HealthyCarefreeCowbird', 'Marthâ€™s counter (activated)', '2015-02-19 21:23:08', 0),
(1879, 2, 13, 'Kadano', 0, 'CloudyScaredBernesemountaindog', 'Foxâ€™s completely intangible firestall (up-B ledgestall) with body state & environment visibility on', '2015-02-19 21:23:10', 0),
(1880, 0, 14, 'Kadano', 0, 'SophisticatedPleasingCarpenterant', 'Marth comboes Captain Falcon with his Dancing Blade and converts into a kill', '2015-02-19 21:23:13', 0),
(1881, 2, 34, 'Kadano', 0, 'HonorableGratefulBuck', 'PC edge hogâ€”turning around during a walk and sliding off into fast fall ledgegrab', '2015-02-19 22:21:45', 0),
(1882, 2, 34, 'Kadano', 0, 'ThriftyClearIndusriverdolphin', 'Sheik performs a wavedash smash turn fast fall edge hog', '2015-02-19 22:21:48', 0),
(1883, 2, 34, 'Kadano', 0, 'NimblePleasantIndianpangolin', 'Sheik performs a wavedash smash turn wavedash fast fall edge hog', '2015-02-19 22:21:51', 0),
(1884, 0, 23, 'Kadano', 0, 'PlumpBonyFlamingo', 'Sheik angles her up-B against the wall to delay her fall (but lose continuous intangibility)', '2015-02-19 22:21:54', 0),
(1885, 0, 23, 'Kadano', 0, 'UnfortunateTanCrossbill', 'Sheik angles her up-B against the wall, making her land earlier than without the wall collision', '2015-02-19 22:21:56', 0),
(1886, 2, 20, 'Kadano', 0, 'AccomplishedLegitimateGopher', 'DI away prevents Captain Falcon from getting uthrow follow-ups on Falco until very high percent', '2015-02-19 22:21:59', 0),
(1888, 2, 27, 'Kadano', 0, 'IllinformedIndolentGaur', 'Fox frame-perfectly waveshines Marth from zero to death, near inescapable', '2015-02-19 22:34:44', 0),
(1889, 0, 14, 'Kadano', 0, 'DistantWhiteGrosbeak', 'Short hop double fair input window (left: instant aerial and gravity, right: one frame delay)', '2015-02-19 22:34:48', 0),
(1890, 0, 14, 'Kadano', 0, 'GrippingEverlastingArthropods', 'Marthâ€™s ledgedashstall (also known as â€œhaxdashâ€), completely intangible if executed perfectly', '2015-02-19 22:34:50', 0),
(1891, 2, 13, 'Kadano', 0, 'GrippingEverlastingArthropods', 'Marth doing the ledgedashstall (aka haxdash), completely intangible for every character except Peach', '2015-02-19 22:34:54', 0),
(1892, 2, 28, 'Kadano', 0, 'WiltedDazzlingGlassfrog', 'Marth wavedashes, moonwalks and stickywalks in that order (moonwalk part is Dash 1-26)', '2015-02-19 22:45:02', 0),
(1893, 2, 1, 'Kadano', 0, 'SmugOilyAmericanquarterhorse', 'Captain Falcon does a frame-perfect ledgedash (wavedash from the ledge) and pivot edgehogs', '2015-02-19 22:45:06', 0),
(1894, 2, 11, 'Apex 2014', 0, 'ForthrightActiveKillifish', 'PPMD dash dances through Mew2kingâ€™s needles, taking them as if they were nothing', '2015-02-19 22:45:18', 0),
(1895, 2, 35, 'Kadano', 0, 'FrigidShadowyCheetah', 'Running speed depends on control stick position. Useful for spacing and faking out.', '2015-02-19 22:59:20', 0),
(1896, 0, 23, 'Kadano', 0, 'SeparateUnhealthyIncatern', 'Sheikâ€™s different dash dance lengths', '2015-02-19 22:59:29', 0),
(1897, 2, 11, 'Kadano', 0, 'SeparateUnhealthyIncatern', 'Sheikâ€™s different dash dance lengths', '2015-02-19 22:59:31', 0),
(1898, 2, 33, 'Kadano', 0, 'TidyScaryAzurevase', 'Captain Falconâ€™s aerial interrupt, using his back aerial, alternating between normal and hitbox vis.', '2015-02-19 22:59:37', 0),
(1899, 2, 13, 'Kadano', 0, 'EvilRecklessComet', 'Falcoâ€™s ledgedashstall on Yoshiâ€™s Storyâ€™s side platform (completely intangible)', '2015-02-19 22:59:41', 0),
(1900, 2, 13, 'Kadano', 0, 'HonorableHilariousBobwhite', 'Falcoâ€™s ledgedashstall (completely intangible), use gfycat options at the bottom right to slow down', '2015-02-19 22:59:45', 0),
(1901, 3, 263, '', 0, 'NastyLightAnt', '', '2015-02-21 20:56:43', 0),
(1902, 3, 162, '', 0, 'IllTidyChamois', '', '2015-03-09 20:22:38', 0),
(1903, 3, 162, '', 0, 'CookedFemaleAfricanaugurbuzzard', '', '2015-03-09 20:22:38', 0),
(1904, 3, 162, '', 0, 'EasyAdorableKite', '', '2015-03-09 20:22:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Moderator', '{"admin":1}', '2014-12-22 19:17:36', '2014-12-22 19:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `locals`
--

CREATE TABLE `locals` (
`id` int(1) NOT NULL,
  `region` int(1) DEFAULT NULL,
  `profileid` varchar(130) DEFAULT NULL,
  `name` varchar(44) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(11,7) DEFAULT NULL,
  `game` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locals`
--

INSERT INTO `locals` (`id`, `region`, `profileid`, `name`, `latitude`, `longitude`, `game`) VALUES
(2, 1, 'https://www.facebook.com/groups/269052529786948', 'East Coast', 37.9500000, -84.0000000, 2),
(3, 1, 'https://www.facebook.com/groups/134497873392355', 'East Coast', 37.9470848, -83.7225060, 1),
(4, 1, 'https://www.facebook.com/groups/430811007000487', 'Delaware', 39.1564159, -75.5134199, 0),
(5, 1, 'https://www.facebook.com/groups/DMVSSBM', 'Maryland / Virginia / DC', 37.0000000, -79.0145760, 2),
(6, 1, 'https://www.facebook.com/groups/mdvasmash', 'Maryland / Virginia / DC', 37.5000000, -77.0000000, 3),
(7, 1, 'https://www.facebook.com/groups/projectmdva', 'Maryland / Virginia / DC', 38.0000000, -76.5000000, 4),
(8, 1, 'https://www.facebook.com/groups/395469233833958', 'Maryland - College Park', 38.9875571, -76.9361836, 0),
(9, 1, 'https://www.facebook.com/groups/489536424485533', 'Massachusetts - Fall River', 41.6855955, -71.1019620, 4),
(10, 1, 'https://www.facebook.com/groups/167824956563375', 'New England', 42.2499739, -71.2378280, 2),
(11, 1, 'https://www.facebook.com/groups/356948471051413', 'New England', 42.2499739, -71.0000000, 3),
(12, 1, 'https://www.facebook.com/groups/262747973827544', 'New Jersey - Rutgers University', 40.4786710, -74.4317890, 2),
(13, 1, 'https://www.facebook.com/groups/156948507708078', 'New Jersey - South', 40.0583240, -74.4056610, 0),
(14, 1, 'https://www.facebook.com/groups/408295942538051', 'New Jersey - Central', 39.8297280, -74.9789590, 0),
(15, 1, 'https://www.facebook.com/groups/211900915585963', 'New Jersey / New York', 40.4636660, -74.4406130, 3),
(16, 1, 'https://www.facebook.com/groups/350071671730817', 'New Jersey / New York', 40.5305020, -74.3389890, 4),
(17, 1, 'https://www.facebook.com/groups/1386041018274455', 'New Jersey / New York', 40.6056120, -74.2236330, 5),
(18, 1, 'https://www.facebook.com/groups/2200028280', 'New York - Ithaca / Cornell', 42.4534490, -76.4735030, 0),
(19, 1, 'https://www.facebook.com/groups/224824577625283', 'New York - Long Island', 40.7891420, -73.1349600, 2),
(20, 1, 'https://www.facebook.com/groups/364349146941224', 'New York - Long Island', 40.7763820, -73.2843020, 3),
(21, 1, 'https://www.facebook.com/groups/smashingatempire', 'New York - Long Island', 40.7139560, -73.6358640, 0),
(22, 1, 'https://www.facebook.com/groups/279511975480441', 'New York - NYC', 40.7127840, -74.0059410, 2),
(23, 1, 'https://www.facebook.com/groups/310533642332998', 'New York - NYU', 40.7272480, -73.9954510, 0),
(24, 1, 'https://www.facebook.com/groups/385718644870094', 'New York - Schenectady', 42.8142430, -73.9395690, 0),
(25, 1, 'https://www.facebook.com/groups/639367622752544', 'New York - Syracuse', 43.0481220, -76.1474240, 0),
(26, 1, 'https://www.facebook.com/groups/46230006858', 'New York - Upstate / RIT', 40.7127840, -74.0059410, 0),
(27, 1, 'https://www.facebook.com/groups/centralPennSSB', 'Pennsylvania - Central', 41.2967480, -76.3729960, 0),
(28, 1, 'https://www.facebook.com/groups/108078502591099', 'Pennsylvania - Philadelphia', 39.9523350, -75.1637890, 2),
(29, 1, 'https://www.facebook.com/groups/NEOHBURGH', 'Pennsylvania - Pittsburgh / Northeast Ohio', 40.3565090, -79.9192700, 2),
(30, 1, 'https://www.facebook.com/groups/182267851790715', 'Southern Virginia', 37.0592750, -81.5377010, 2),
(31, 1, 'https://www.facebook.com/groups/452275474823750', 'Charlottesville, Virginia', 38.0293060, -78.4766780, 2),
(32, 1, 'https://www.facebook.com/groups/596361677123724', 'Charlottesville, Virginia', 38.0283520, -78.4880450, 4),
(33, 1, 'https://www.facebook.com/groups/182267851790715', 'Norfolk/Virginia Beach', 36.8823350, -76.2999060, 0),
(34, 1, 'https://www.facebook.com/groups/1386540904893386', 'Southwest Virginia', 37.4315730, -78.6568940, 0),
(35, 1, 'https://www.facebook.com/groups/204825246197520', 'Virginia - VCU', 37.5446450, -77.4479900, 0),
(36, 1, 'https://www.facebook.com/groups/408805205918060', 'West Virginia', 38.5976260, -80.4549030, 0),
(37, 2, 'https://www.facebook.com/groups/269052529786948/', 'East Coast', 36.0313320, -72.6855470, 2),
(38, 2, 'https://www.facebook.com/groups/134497873392355/', 'East Coast', 34.4522180, -73.0371090, 1),
(39, 2, 'https://www.facebook.com/groups/336726723087447/', 'Atlantic South General', 41.4016300, -94.9908060, 4),
(40, 2, 'https://www.facebook.com/AlabamaSmashLeague', 'Alabama', 32.3182310, -86.9022980, 0),
(41, 2, 'https://www.facebook.com/groups/285926091523241/', 'Arkansas', 35.2010500, -91.8318330, 0),
(42, 2, 'https://www.facebook.com/groups/304489126305123/', 'Florida', 27.6648270, -81.5157540, 0),
(43, 2, 'https://www.facebook.com/groups/138478079554384/', 'Florida - Central Florida', 27.7127100, -81.5405270, 2),
(44, 2, 'https://www.facebook.com/groups/456656917699611/', 'Florida - Gainesville', 29.6516340, -82.3248260, 3),
(45, 2, 'https://www.facebook.com/groups/247383341960804/', 'Florida - Jacksonville', 30.3321840, -81.6556510, 0),
(46, 2, 'https://www.facebook.com/groups/134182206752487/', 'Florida - Pensacola', 30.4213090, -87.2169150, 0),
(47, 2, 'https://www.facebook.com/groups/1440737036160195/', 'Florida - South Florida 1', 27.4602270, -82.6676730, 0),
(48, 2, 'https://www.facebook.com/pages/Smash-In-Progress/706760066011314', 'Florida - South Florida 2', 27.4504470, -82.5773760, 0),
(49, 2, 'https://www.facebook.com/VersusGamingCenter', 'Florida - South Florida 3', 27.9064690, -81.5740650, 0),
(50, 2, 'https://www.facebook.com/groups/159234920826366/', 'Florida - South Florida', 27.6648270, -81.5157540, 2),
(51, 2, 'https://www.facebook.com/groups/193697467326040/', 'Florida - South West Florida', 27.6656460, -81.5116450, 0),
(52, 2, 'https://www.facebook.com/groups/357576900984630/', 'Florida - Tallahassee', 30.4382560, -84.2807330, 0),
(53, 2, 'https://www.facebook.com/groups/483669795064224/', 'Florida - Tampa Bay', 27.7028710, -82.5834950, 2),
(54, 2, 'https://www.facebook.com/groups/TampaSmash/', 'Florida - Tampa Bay', 27.8366470, -82.5032040, 3),
(55, 2, 'https://www.facebook.com/groups/125733910821001/', 'Florida - University of Florida 2', 25.7885490, -80.3796260, 0),
(56, 2, 'https://www.facebook.com/groups/209198555783942/', 'Georgia', 32.1656220, -82.9000750, 2),
(57, 2, 'https://www.facebook.com/groups/179381782079932/', 'Georgia', 30.3229140, -93.1854220, 3),
(58, 2, 'https://www.facebook.com/groups/1392554534335836/', 'Georgia', 33.1947030, -84.2845670, 4),
(59, 2, 'https://www.facebook.com/groups/133034603414177/', 'Louisiana', 30.9842980, -91.9623330, 0),
(60, 2, 'https://www.facebook.com/groups/352469348160468/', 'Louisiana', 30.0827880, -92.6747630, 2),
(61, 2, 'https://www.facebook.com/LSUSmash', 'Louisiana - LSU', 30.4132580, -91.1800020, 0),
(62, 2, 'https://www.facebook.com/groups/512742878766152/', 'Louisiana - New Orleans', 29.9510660, -90.0715320, 2),
(63, 2, 'https://www.facebook.com/groups/276445842390059/', 'North Carolina', 35.7595730, -79.0193000, 2),
(64, 2, 'https://www.facebook.com/groups/164944006930835/', 'North Carolina', 35.1934210, -77.0334180, 3),
(65, 2, 'https://www.facebook.com/groups/290202017736245/', 'South Carolina', 33.8360810, -81.1637250, 2),
(66, 2, 'https://www.facebook.com/groups/MiddleTNProjectM/', 'Tennessee', 35.5174910, -86.5804470, 2),
(67, 3, 'https://www.facebook.com/groups/mwsmash/', 'Midwest General 1', 39.9097360, -93.5156250, 0),
(68, 3, 'https://www.facebook.com/groups/257285400975347/', 'Midwest General 2', 39.9013090, -92.5872800, 0),
(69, 3, 'https://www.facebook.com/groups/380188912048431/', 'Illinois - Champaign', 40.1164200, -88.2433830, 0),
(70, 3, 'https://www.facebook.com/groups/126804630735563/', 'Illinois - Chicago', 41.8781140, -87.6297980, 2),
(71, 3, 'https://www.facebook.com/groups/1399023747004983/', 'Illinois- Springfield', 39.7817210, -89.6501480, 0),
(72, 3, 'https://www.facebook.com/groups/129015017194089/', 'Illinois South, Kentucky West, Missouri East', 37.5097260, -88.7695310, 0),
(73, 3, 'https://www.facebook.com/groups/171453176258373/', 'Indiana - Carmel', 39.9783710, -86.1180430, 2),
(74, 3, 'https://www.facebook.com/groups/611364705589048/', 'Indiana - Indianapolis', 39.7684030, -86.1580680, 0),
(75, 3, 'https://www.facebook.com/groups/247658661961971/', 'Indiana - Fort Wayne', 41.0792730, -85.1393510, 0),
(76, 3, 'https://www.facebook.com/groups/PurdueSSBO/', 'Indiana - Purdue', 40.4237050, -86.9211950, 0),
(77, 3, 'https://www.facebook.com/groups/382901415171283', 'Indiana - IU Bloomington', 39.1691360, -86.5149050, 0),
(78, 3, 'https://www.facebook.com/groups/1421302704757453/', 'Iowa', 41.8780030, -93.0977020, 0),
(79, 3, 'https://www.facebook.com/groups/ksssb', 'Kansas', 39.0119020, -98.4842460, 0),
(80, 3, 'https://www.facebook.com/groups/734815379867767/', 'Kansas City', 39.0997270, -94.5785670, 4),
(81, 3, 'https://www.facebook.com/groups/271575972914386/', 'Kentucky/Ohio/Indiana', 38.7883450, -84.5507810, 0),
(82, 3, 'https://www.facebook.com/groups/umsmash/', 'Michigan', 42.2808260, -83.7430380, 2),
(83, 3, 'https://www.facebook.com/groups/406757282795167/', 'Michigan', 42.3443350, -83.8201900, 3),
(84, 3, 'https://www.facebook.com/groups/WestMISmash/', 'Michigan - West', 43.8028190, -86.0449220, 0),
(85, 3, 'https://www.facebook.com/groups/258765404305007/', 'Michigan', 42.3849230, -83.5702510, 4),
(86, 3, 'https://www.facebook.com/groups/540421182680998/', 'Minnesota', 46.7295530, -94.6859000, 0),
(87, 3, 'https://www.facebook.com/groups/176623759034371/', 'Minnesota - UMM', 45.5892070, -95.9033780, 0),
(88, 3, 'https://www.facebook.com/groups/323513011041633/', 'Missouri - St. Louis', 38.6270030, -90.1994040, 2),
(89, 3, 'https://www.facebook.com/groups/414566191955018/', 'Missouri - St. Louis', 38.6218030, -90.2365320, 3),
(90, 3, 'https://www.facebook.com/groups/338517279512871/', 'Missouri - Springfield', 37.2089570, -93.2922990, NULL),
(91, 3, 'https://www.facebook.com/groups/199063406858260/', 'Nebraska', 41.4925370, -99.9018130, 2),
(92, 3, 'https://www.facebook.com/groups/105843859488387/', 'Ohio', 40.4172870, -82.9071230, 0),
(93, 3, 'https://www.facebook.com/groups/677137102305269/', 'Ohio - Cincinnati', 39.1031180, -84.5120200, 0),
(94, 3, 'https://www.facebook.com/groups/133757653398073/', 'Ohio - Columbus', 39.9611760, -82.9987940, 2),
(95, 3, 'https://www.facebook.com/groups/302630169803625/', 'Ohio - Columbus', 39.9596880, -83.0074600, 3),
(96, 3, 'https://www.facebook.com/groups/1396649643918505/', 'Ohio - Northwest', 40.8138090, -83.8256840, 2),
(97, 3, 'https://www.facebook.com/groups/470817746279509/', 'Western PA / Northeast OH', 41.2447720, -80.4858400, 0),
(98, 3, 'https://www.facebook.com/groups/466886533331712/', 'South Dakota', 43.9695150, -99.9018130, 0),
(99, 3, 'https://www.facebook.com/groups/411431608918302/', 'Wisconsin', 43.0327610, -87.9071040, 0),
(100, 4, 'https://www.facebook.com/groups/190510254334113/', 'Arizona', 33.4406090, -112.0935060, 2),
(101, 4, 'https://www.facebook.com/groups/252928971439205/', 'Arizona', 32.1384090, -110.9179690, 3),
(102, 4, 'https://www.facebook.com/groups/248367238515394/', 'Colorado', 39.7325380, -104.9688720, 0),
(103, 4, 'https://www.facebook.com/groups/541859482565869/', 'Oklahoma', 35.4675600, -97.5164280, 0),
(104, 4, 'https://www.facebook.com/groups/326887317543/', 'Texas - Amarillo', 35.2219970, -101.8312970, 0),
(105, 4, 'https://www.facebook.com/groups/476448669077840/', 'Texas - Austin', 30.2671530, -97.7430610, 1),
(106, 4, 'https://www.facebook.com/groups/Austin.Melee/', 'Texas - Austin', 30.2680370, -97.7365640, 2),
(107, 4, 'https://www.facebook.com/groups/426773497467785/', 'Texas - Austin', 30.2604020, -97.7520560, 4),
(108, 4, 'http://www.facebook.com/groups/bcsmelee', 'Texas - Bryan-College Station', 30.6275730, -96.3348200, 0),
(109, 4, 'https://www.facebook.com/groups/205428649667016/', 'Texas - College Station', 30.6224020, -96.3410000, 0),
(110, 4, 'https://www.facebook.com/groups/350398944989752/', 'Texas - Dallas-Fort Worth', 32.7554880, -97.3307660, 2),
(111, 4, 'https://www.facebook.com/groups/673233716043745/', 'Texas - El Paso', 31.7699560, -106.4968050, 0),
(112, 4, 'https://www.facebook.com/groups/554204308010763/', 'Texas - Fort Worth', 32.7554880, -97.3307660, 0),
(113, 4, 'https://www.facebook.com/groups/223986011009934/', 'Texas - Houston', 29.7601930, -95.3693900, 2),
(114, 4, 'https://www.facebook.com/groups/197481713674782', 'Texas - San Antonio', 29.4241220, -98.4936280, 2),
(115, 4, 'https://www.facebook.com/groups/122102801187160/', 'Texas - Rio Grande Valley', 26.1502960, -97.9767720, 0),
(116, 4, 'https://www.facebook.com/UtahSmash', 'Utah', 40.7472570, -111.8627930, 0),
(117, 4, 'https://www.facebook.com/groups/35208405538/', 'Utah - Provo/Orem', 40.2617130, -111.6773990, 0),
(118, 4, 'https://www.facebook.com/groups/507726149334644/', 'New Mexico', 35.0659730, -106.6223140, 0),
(119, 5, 'https://www.facebook.com/groups/CentralCaliSmash/', 'CA - Central Cali', 36.6331620, -119.7290040, 0),
(120, 5, 'http://www.facebook.com/groups/276813632366412/', 'CA - NorCal', 37.7446570, -122.4371340, 2),
(121, 5, 'https://www.facebook.com/groups/NorcalBrawl/', 'CA - NorCal', 37.3133830, -121.8988040, 3),
(122, 5, 'https://www.facebook.com/groups/700200659991734/', 'CA - NorCal', 37.3308570, -121.8905640, 4),
(123, 5, 'https://www.facebook.com/groups/SantaCruzMelee/', 'CA - Santa Cruz', 36.9696440, -122.0224000, 2),
(124, 5, 'https://www.facebook.com/groups/124711994367202/', 'CA - Berkeley', 37.8715930, -122.2727470, 2),
(125, 5, 'https://www.facebook.com/groups/251905601637936/', 'CA - Humboldt', 40.7450050, -123.8695090, 0),
(126, 5, 'https://www.facebook.com/groups/479162355483578', 'CA - Orange County', 33.7174710, -117.8311430, 2),
(127, 5, 'https://www.facebook.com/groups/78151322382/', 'CA - San Diego', 32.7157380, -117.1610840, 2),
(128, 5, 'http://www.facebook.com/groups/358902214188040/', 'CA - Santa Barbara', 34.4208310, -119.6981900, 2),
(129, 5, 'https://www.facebook.com/groups/593635670694883/', 'CA - SoCal', 34.0344530, -118.4710690, 1),
(130, 5, 'http://www.facebook.com/groups/368704663144095/', 'CA - SoCal', 34.0299000, -118.2568360, 2),
(131, 5, 'https://www.facebook.com/groups/SSBBsocal/', 'CA - SoCal', 34.2027160, -118.5699460, 3),
(132, 5, 'https://www.facebook.com/groups/SSBPMsocal/', 'CA - SoCal', 33.9205720, -117.4108890, 4),
(133, 5, 'https://www.facebook.com/groups/611100575632206/', 'CA - South Bay', 37.3395920, -121.9235230, 2),
(134, 5, 'https://www.facebook.com/groups/480597648717885/', 'CA - Thousand Oaks', 34.1705610, -118.8375940, 0),
(135, 5, 'https://www.facebook.com/groups/MELEE702/', 'Nevada - Las Vegas', 36.1699410, -115.1398300, 2),
(136, 5, 'https://www.facebook.com/groups/BRAWL702/', 'Nevada - Las Vegas', 36.1728030, -115.2095030, 3),
(137, 5, 'https://www.facebook.com/groups/702PROJECTM/', 'Nevada - Las Vegas', 36.1683680, -115.0968930, 4),
(138, 5, 'https://www.facebook.com/groups/619057094778540/', 'Nevada - Reno', 39.5296330, -119.8138030, 0),
(139, 5, 'https://www.facebook.com/groups/641344915919224/', 'Sacramento Smash', 38.5815720, -121.4944000, 0),
(140, 5, 'https://www.facebook.com/groups/245900615456533/', 'Official Washington Melee', 47.6000000, -122.3320000, 0),
(141, 5, 'https://www.facebook.com/groups/642114992487346/', 'Irvine', 33.6839470, -117.7946940, 0),
(142, 5, 'https://www.facebook.com/groups/340535089298820/', 'Portland', 45.5234520, -122.6762070, 0),
(143, 5, 'https://www.facebook.com/groups/283358348346303/', 'Eugene', 44.0520690, -123.0867540, 0),
(144, 5, 'https://www.facebook.com/groups/224872027544762/', 'Corvallis', 44.5645660, -123.2620440, 0),
(145, 5, 'https://www.facebook.com/groups/SCVSSBM/ ', 'Santa Clarita Valley', 34.3796510, -118.5305980, 2),
(146, 1, 'https://www.facebook.com/groups/WorcesterSmashBros/', 'Worcester', 42.2625930, -71.8022930, 0),
(147, 4, 'https://www.facebook.com/groups/350398944989752/', 'DFW', 32.7554880, -97.0000000, 0),
(148, 2, 'https://www.facebook.com/groups/731966200177831/', 'Asheville', 35.5950580, -82.5514870, 0),
(149, 1, 'https://www.facebook.com/groups/46230006858/', 'Rochester ', 43.1610300, -77.6109220, 0),
(150, 5, 'https://www.facebook.com/groups/790683467608502/', 'Fremont', 37.5482700, -121.9885720, 2),
(151, 5, 'https://www.facebook.com/groups/251629451659962/', 'San Luis Obispo', 35.2827520, -120.6596160, 0),
(152, 3, 'https://www.facebook.com/groups/124366774346574/', 'Wichita', 37.6888890, -97.3361110, 2),
(153, 5, 'https://www.facebook.com/groups/everythingsmash/', 'CA - VENTURA COUNTY', 34.2685660, -119.2284390, 0),
(154, 4, 'https://www.facebook.com/groups/GAMelee/', 'Atlanta', 33.7489950, -84.3879820, 2),
(155, 5, 'https://www.facebook.com/groups/1419390711611336/', 'High Desert', 35.1440470, -106.4869710, 2),
(156, 5, 'https://www.facebook.com/groups/619057094778540/', 'Reno', 39.5296330, -119.8138030, 0),
(157, 5, 'https://www.facebook.com/groups/707melee/', '707', 38.2918590, -122.4580360, 2),
(158, 3, 'https://www.facebook.com/groups/KyOhWVa.Smash/', 'Ironton, Ohio', 38.5367470, -82.6829410, 2),
(159, 2, 'https://www.facebook.com/groups/235912859946393', 'Buford', 34.1206560, -84.0043510, 2),
(160, 3, 'https://www.facebook.com/groups/230511403809562/', 'Third Lake', 42.3739110, -88.0109120, 0),
(161, 5, 'https://www.facebook.com/groups/279945308796732/', 'Long Beach', 33.7700500, -118.1937390, 0),
(162, 1, 'https://www.facebook.com/groups/417873421648323/', 'Bedford, MA', 42.4906230, -71.2760090, 2),
(163, 2, 'https://www.facebook.com/groups/159610307409216/', 'Dothan', 31.2232310, -85.3904890, 4),
(164, 5, 'https://www.facebook.com/groups/EWASmashBros/', 'Eastern Washington', 47.6520000, -117.4330000, 0),
(165, 6, 'https://www.facebook.com/groups/calgarysmash/', 'Calgary Smash Brothers Community', 51.0780000, -114.1340000, 0),
(166, 6, 'https://www.facebook.com/groups/edmontonsmash/', 'Edmonton Smash Bros Community', 53.5320000, -113.4900000, 0),
(167, 1, 'https://www.facebook.com/groups/212152128989881/', 'Smash Bros. at William & Mary', 37.2730000, -76.7140000, 0),
(168, 6, 'https://www.facebook.com/groups/SmashUK/', 'Smash UK', 51.4540000, -0.0680000, 0),
(169, 6, 'https://www.facebook.com/groups/614361821964340/', 'Solent Smash', 50.9030000, -1.3980000, 0),
(170, 6, 'https://www.facebook.com/groups/674542725954277/', 'Asker/BÃ¦rum Smash', 59.8630000, 10.4860000, 0),
(171, 5, 'http://smashboards.com/threads/osc-oregon-players-events-all-the-info-you-need.66978/', 'Oregon Smash Community', 44.0390000, -123.0760000, 0),
(172, 6, 'https://www.facebook.com/groups/194535274054492/?fref=ts', 'Smash Scotland', 55.8740000, -4.2340000, 0),
(173, 6, 'https://www.facebook.com/groups/SmashMeleeOntario/', 'GTA (Greater Toronto Area) Smash', 43.6450000, -79.3940000, 2),
(174, 1, 'https://www.facebook.com/groups/TheBCSmashCommunity/', 'Vancouver Smash Group', 49.2700000, -123.1170000, 0),
(175, 5, 'https:/www.facebook.com/groups/TemeculaSSBM/', 'Temecula Melee', 33.5460000, -117.1390000, 2),
(176, 1, 'https:/www.facebook.com/groups/630453227015754/', 'Midlands Smash', 52.6270000, -1.1220000, 0),
(177, 6, 'https:/www.facebook.com/groups/ssbmtl/', 'Montreal Melee', 45.4990000, -73.5660000, 2),
(178, 5, 'https:/www.facebook.com/groups/160709990614463/', 'Melee players in Davis who actually still pl', 38.5430000, -121.7540000, 2),
(179, 3, 'www.facebook.com/groups/310359889094549/', 'Montana Smash', 46.5840000, -112.8500000, 2),
(180, 1, 'www.facebook.com/groups/1480028002218278/', 'Cortland Smash Bros', 42.6020000, -76.1860000, 2),
(181, 1, 'www.facebook.com/groups/CornellSmash/', 'Cornell Smash [the old Facebook listing for ', 42.4470000, -76.4900000, 0),
(182, 6, 'www.facebook.com/groups/108829072557656/', 'Smash BR', -15.8150000, -47.8560000, 0),
(183, 1, 'www.facebook.com/groups/VermontMelee', 'Vermont Melee', 44.4750000, -73.2060000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE `moves` (
`id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moves`
--

INSERT INTO `moves` (`id`, `name`, `description`) VALUES
(0, 'B Moves', ''),
(1, 'Jab', ''),
(2, 'Tilt', ''),
(3, 'Smash', ''),
(4, 'Aerials', ''),
(5, 'Ground Options', ''),
(6, 'Defensive Options', '');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
`id` int(11) NOT NULL,
  `url` varchar(90) NOT NULL,
  `source` varchar(260) NOT NULL,
  `description` varchar(300) NOT NULL,
  `pageid` int(11) NOT NULL,
  `dataid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionsgroup`
--

CREATE TABLE `submissionsgroup` (
`id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `fb` varchar(290) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `region` int(11) NOT NULL DEFAULT '0',
  `game` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionstech`
--

CREATE TABLE `submissionstech` (
`id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `description` varchar(650) NOT NULL,
  `ssbwiki` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissionstournament`
--

CREATE TABLE `submissionstournament` (
`id` int(11) NOT NULL,
  `title` varchar(90) NOT NULL,
  `fb_id` int(60) NOT NULL,
  `bracket` varchar(150) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `first` varchar(90) NOT NULL,
  `second` varchar(90) NOT NULL,
  `third` varchar(90) NOT NULL,
  `stream` varchar(45) NOT NULL,
  `attending` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `host` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `techs`
--

CREATE TABLE `techs` (
`id` int(11) NOT NULL,
  `tech` varchar(32) NOT NULL,
  `description` varchar(400) NOT NULL,
  `smashwiki` varchar(260) NOT NULL,
  `inputs` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `techs`
--

INSERT INTO `techs` (`id`, `tech`, `description`, `smashwiki`, `inputs`) VALUES
(1, 'Wave Dash', 'A wavedash is a technique in Super Smash Bros. Melee that is performed by air dodging diagonally into the ground, causing the character to slide a short distance.', 'http://www.ssbwiki.com/wavedash', '(Jump)->immediate (Diagonal Air Dodge)'),
(2, 'Multi Shine', 'A double shine (or multi shine, triple shine, etc.) is the repeated use of Reflector as an attack by either Fox or Falco. It is performed by jump-cancelling a Reflector and using a second Reflector just after leaving the ground, timed so that Fox or Falco will quickly land and allow the pattern to be repeated.', 'http://www.ssbwiki.com/Double_shine', '(Down + B) , (Jump) , (Down + B)'),
(20, 'Directional Influence', 'Changing the angle of trajectory with the analog stick while being hit.', 'http://www.ssbwiki.com/Directional_influence', '(Direction)[hold] after being hit'),
(4, 'L Cancel', 'A technique that allows characters to act faster than usual when landing in the middle of an aerial attack.', 'http://www.ssbwiki.com/L-canceling', '(L or R or Z) within 7 frames of landing '),
(5, 'Short hop', 'The act of pressing the jump button and letting go before the character leaves the ground. This will result in a jump that is lower than a normal jump.', 'http://www.ssbwiki.com/Short_hop', '(QUICK Jump)'),
(6, 'Ledge Hop', 'Edge hopping is a technique used to return on-stage from the ledge. It entails dropping from the ledge (by pressing either "back" or "down" on the control stick) and immediately double-jumping.', 'http://www.ssbwiki.com/Edge_hopping', '(Down or Back) , (Jump)'),
(7, 'Pivot', 'Using the frame at which a character turns during a dash-dance, in which any normal ground options are available as if the character were standing still.', 'http://www.ssbwiki.com/Pivoting', '(Left) , (Right) or vice versa.'),
(8, 'Wall Jump', 'A technique some characters can use to jump away from walls. Captain Falcon, Falco, Fox, Mario, Pichu, Samus, Young Link, and Sheik can all wall jump.', 'http://www.ssbwiki.com/Wall_jump', '(Away from wall) upon touching.'),
(19, 'Tech', 'Used to quickly recover from a falling animation before landing. You can choose to tech neutral, right roll, or left roll.', 'http://www.ssbwiki.com/tech', '(L or R or Z) upon landing'),
(10, 'Crouch Cancel', 'By crouching before getting hit by an attack, some aspect of the attack will be weakened. Both knockback and hitstun will be lessened.', 'http://www.ssbwiki.com/Crouch_cancel', '(CROUCH) before impending attack.'),
(11, 'Dash Dance', 'Dash-dancing is performed by tapping the analog stick left and right rapidly while on the ground, effectively dashing to the left and to the right alternately.', 'http://www.ssbwiki.com/Dash-dancing', '(Left), (Right)'),
(12, 'Meteor Cancel', 'Meteor cancelling is the act of instantly negating the downwards knockback of a meteor smash by jumping or using an up b after being hit.', 'http://www.ssbwiki.com/Meteor_smash#Meteor_cancelling', '(Jump or Up B) after being hit'),
(13, 'Ledge Stall', 'A technique that allows your character to re-grab the ledge with slight invulnerability.', 'http://www.ssbwiki.com/Ledgestall', '(Character Dependent)'),
(16, 'Wall Tech', 'The act of teching off of a wall during hitstun', 'http://www.ssbwiki.com/tech#Wall_tech', '(L or R) before landing in falling animation'),
(17, 'Jump Canceled Grab', 'Cancelling a jump before grabbing allows your character to perform a standing grab. This is a vital technique when running in for a grab because it replaces the slow dash-grab with a quicker standing grab.', 'http://www.ssbwiki.com/Jump-canceled_grab', '(Jump) followed immediately by (Z)'),
(18, 'Jump Canceled Up Smash', 'A jump-canceled up smash (JC up-smash) is a technique where a character interrupts a dash or run with a jump, which itself is then jump-canceled with an up-smash.', '', '(Jump) followed immediately by (Up Smash)'),
(21, 'Wave Land', 'Wavelands are wavedashes performed when jumping onto platforms to increase mobility across the stage. It can also be used when falling from an empty hop to fake out or bait opponents.', 'http://www.ssbwiki.com/wavedash#Wavelanding', '(wavedash before landing)'),
(22, 'Short Hop Laser', 'Shorthop lasers take advantage of canceling the ending lag of Falco''s lasers by landing. By short hopping, firing a laser, and fast falling, Falco can fire lasers at a much faster rate than when standing. Combining this added mobility while firing lasers will help lock down and stop an opponents approach. ', 'http://supersmashbros.wikia.com/wiki/Short_hop_laser', '(Jump), (Fast Fall), (Laser)'),
(23, 'Power Shielding', ' Using your shield against projectiles right when an attack''s hitbox is about to connect will reflect the projectile in the opposite direction, dealing 50% damage and knockback', 'http://www.ssbwiki.com/Powershield', '(L or R) right before an attack'),
(24, 'Float Canceling', 'Float canceling is a bug relating to floating. If Peach uses an aerial attack while floating, landing during the attack (whether still floating or not) will skip landing lag entirely and result in a normal landing instead.', 'http://www.ssbwiki.com/Floating#Float_canceling', ''),
(25, 'Jab Reset', 'Jab resets is a technique that is performed by jabbing an opponent while they are knocked down. The jab will force the opponent to stand up, where the opponent can then hit them with almost any move they desire', 'http://www.ssbwiki.com/jab_reset', '(a)'),
(26, 'Tech Chasing', 'tech chasing is the act of following your opponent after a knockdown. There are three options of techs, left roll, right roll, and neutral. Tech chasing is the act of punishing either of the three options with an attack', 'http://www.ssbwiki.com/Tech-chasing', ''),
(27, 'Wave Shine', 'A wave shine is a wavedash done immediately out of a shine. It can be done by Fox and Falco.', 'http://www.ssbwiki.com/Waveshine', '(Down + B) followed by (Wave Dash)'),
(28, 'Moonwalk', 'A technique that allows for the character to move in the opposite direction while dashing. This move can be done by all characters, and is often used to gain backwards momentum for a jump. If done correctly, it can be crucial for edgeguarding and ledge grabbing.\r\n', 'http://www.ssbwiki.com/Moonwalk', ''),
(31, 'Shield Drop', 'A technique that allows for your character to smoothly fall through a soft platform while shielding', 'http://www.ssbwiki.com/Shield_platform_dropping', ''),
(33, 'Aerial Interrupt', 'Use an aerial attack in a way that causes you to land on a platform which would not have happened without the aerial attack. The reason is a downward shift of your characterâ€™s environment collision box (ECB) bound to the attack or, more specifically, your characterâ€™s bone alignment on a given frame.', 'www.ssbwiki.com/Aerial_interrupt', ''),
(34, 'Edge Hog', 'Grabbing the ledge so other characters canâ€™t grab it.', 'www.ssbwiki.com/Edge-hogging', ''),
(35, 'Run Cancel', 'During a characterâ€™s running animation, holding down will cancel the run into a crouch.', 'www.ssbwiki.com/Dash-canceling#Crouching_.28Melee_only.29', '');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 2, NULL, 0, 0, 0, NULL, NULL, NULL),
(2, 3, NULL, 0, 0, 0, NULL, NULL, NULL),
(3, 4, NULL, 0, 0, 0, NULL, NULL, NULL),
(4, 6, NULL, 0, 0, 0, NULL, NULL, NULL),
(5, 7, NULL, 0, 0, 0, NULL, NULL, NULL),
(6, 8, NULL, 0, 0, 0, NULL, NULL, NULL),
(7, 9, NULL, 0, 0, 0, NULL, NULL, NULL),
(8, 10, NULL, 0, 0, 0, NULL, NULL, NULL),
(9, 11, NULL, 0, 0, 0, NULL, NULL, NULL),
(10, 5, NULL, 0, 0, 0, NULL, NULL, NULL),
(11, 65, NULL, 0, 0, 0, NULL, NULL, NULL),
(12, 66, NULL, 0, 0, 0, NULL, NULL, NULL),
(13, 67, NULL, 0, 0, 0, NULL, NULL, NULL),
(14, 69, NULL, 0, 0, 0, NULL, NULL, NULL),
(15, 68, NULL, 0, 0, 0, NULL, NULL, NULL),
(16, 70, NULL, 0, 0, 0, NULL, NULL, NULL),
(17, 71, NULL, 0, 0, 0, NULL, NULL, NULL),
(18, 72, NULL, 0, 0, 0, NULL, NULL, NULL),
(19, 73, NULL, 0, 0, 0, NULL, NULL, NULL),
(20, 74, NULL, 0, 0, 0, NULL, NULL, NULL),
(21, 29, NULL, 0, 0, 0, NULL, NULL, NULL),
(22, 75, NULL, 0, 0, 0, NULL, NULL, NULL),
(23, 76, NULL, 0, 0, 0, NULL, NULL, NULL),
(24, 77, NULL, 0, 0, 0, NULL, NULL, NULL),
(25, 78, NULL, 0, 0, 0, NULL, NULL, NULL),
(26, 79, NULL, 0, 0, 0, NULL, NULL, NULL),
(27, 80, NULL, 0, 0, 0, NULL, NULL, NULL),
(28, 81, NULL, 0, 0, 0, NULL, NULL, NULL),
(29, 82, NULL, 0, 0, 0, NULL, NULL, NULL),
(30, 83, NULL, 0, 0, 0, NULL, NULL, NULL),
(31, 84, NULL, 0, 0, 0, NULL, NULL, NULL),
(32, 85, NULL, 0, 0, 0, NULL, NULL, NULL),
(33, 86, NULL, 0, 0, 0, NULL, NULL, NULL),
(34, 87, NULL, 0, 0, 0, NULL, NULL, NULL),
(35, 88, NULL, 0, 0, 0, NULL, NULL, NULL),
(36, 89, NULL, 0, 0, 0, NULL, NULL, NULL),
(37, 90, NULL, 0, 0, 0, NULL, NULL, NULL),
(38, 91, NULL, 0, 0, 0, NULL, NULL, NULL),
(39, 92, NULL, 0, 0, 0, NULL, NULL, NULL),
(40, 93, NULL, 0, 0, 0, NULL, NULL, NULL),
(41, 94, NULL, 0, 0, 0, NULL, NULL, NULL),
(42, 95, NULL, 0, 0, 0, NULL, NULL, NULL),
(43, 96, NULL, 0, 0, 0, NULL, NULL, NULL),
(44, 97, NULL, 0, 0, 0, NULL, NULL, NULL),
(45, 35, NULL, 0, 0, 0, NULL, NULL, NULL),
(46, 98, NULL, 0, 0, 0, NULL, NULL, NULL),
(47, 99, NULL, 0, 0, 0, NULL, NULL, NULL),
(48, 100, NULL, 0, 0, 0, NULL, NULL, NULL),
(49, 101, NULL, 0, 0, 0, NULL, NULL, NULL),
(50, 102, NULL, 0, 0, 0, NULL, NULL, NULL),
(51, 103, NULL, 0, 0, 0, NULL, NULL, NULL),
(52, 104, NULL, 0, 0, 0, NULL, NULL, NULL),
(53, 106, NULL, 0, 0, 0, NULL, NULL, NULL),
(54, 107, NULL, 0, 0, 0, NULL, NULL, NULL),
(55, 108, NULL, 0, 0, 0, NULL, NULL, NULL),
(56, 109, NULL, 0, 0, 0, NULL, NULL, NULL),
(57, 110, NULL, 0, 0, 0, NULL, NULL, NULL),
(58, 111, NULL, 0, 0, 0, NULL, NULL, NULL),
(59, 112, NULL, 0, 0, 0, NULL, NULL, NULL),
(60, 113, NULL, 0, 0, 0, NULL, NULL, NULL),
(61, 114, NULL, 0, 0, 0, NULL, NULL, NULL),
(62, 115, NULL, 0, 0, 0, NULL, NULL, NULL),
(63, 116, NULL, 0, 0, 0, NULL, NULL, NULL),
(64, 117, NULL, 0, 0, 0, NULL, NULL, NULL),
(65, 118, NULL, 0, 0, 0, NULL, NULL, NULL),
(66, 119, NULL, 0, 0, 0, NULL, NULL, NULL),
(67, 120, NULL, 0, 0, 0, NULL, NULL, NULL),
(68, 121, NULL, 0, 0, 0, NULL, NULL, NULL),
(69, 122, NULL, 0, 0, 0, NULL, NULL, NULL),
(70, 123, NULL, 0, 0, 0, NULL, NULL, NULL),
(71, 125, NULL, 0, 0, 0, NULL, NULL, NULL),
(72, 126, NULL, 0, 0, 0, NULL, NULL, NULL),
(73, 127, NULL, 0, 0, 0, NULL, NULL, NULL),
(74, 124, NULL, 0, 0, 0, NULL, NULL, NULL),
(75, 128, NULL, 0, 0, 0, NULL, NULL, NULL),
(76, 129, NULL, 0, 0, 0, NULL, NULL, NULL),
(77, 130, NULL, 0, 0, 0, NULL, NULL, NULL),
(78, 131, NULL, 0, 0, 0, NULL, NULL, NULL),
(79, 132, NULL, 0, 0, 0, NULL, NULL, NULL),
(80, 133, NULL, 0, 0, 0, NULL, NULL, NULL),
(81, 134, NULL, 0, 0, 0, NULL, NULL, NULL),
(82, 135, NULL, 0, 0, 0, NULL, NULL, NULL),
(83, 136, NULL, 0, 0, 0, NULL, NULL, NULL),
(84, 137, NULL, 0, 0, 0, NULL, NULL, NULL),
(85, 138, NULL, 0, 0, 0, NULL, NULL, NULL),
(86, 139, NULL, 0, 0, 0, NULL, NULL, NULL),
(87, 140, NULL, 0, 0, 0, NULL, NULL, NULL),
(88, 141, NULL, 0, 0, 0, NULL, NULL, NULL),
(89, 142, NULL, 0, 0, 0, NULL, NULL, NULL),
(90, 143, NULL, 0, 0, 0, NULL, NULL, NULL),
(91, 144, NULL, 0, 0, 0, NULL, NULL, NULL),
(92, 145, NULL, 0, 0, 0, NULL, NULL, NULL),
(93, 146, NULL, 0, 0, 0, NULL, NULL, NULL),
(94, 147, NULL, 0, 0, 0, NULL, NULL, NULL),
(95, 148, NULL, 0, 0, 0, NULL, NULL, NULL),
(96, 149, NULL, 0, 0, 0, NULL, NULL, NULL),
(97, 150, NULL, 0, 0, 0, NULL, NULL, NULL),
(98, 151, NULL, 0, 0, 0, NULL, NULL, NULL),
(99, 152, NULL, 0, 0, 0, NULL, NULL, NULL),
(100, 153, NULL, 0, 0, 0, NULL, NULL, NULL),
(101, 154, NULL, 0, 0, 0, NULL, NULL, NULL),
(102, 155, NULL, 0, 0, 0, NULL, NULL, NULL),
(103, 156, NULL, 0, 0, 0, NULL, NULL, NULL),
(104, 157, NULL, 0, 0, 0, NULL, NULL, NULL),
(105, 158, NULL, 0, 0, 0, NULL, NULL, NULL),
(106, 159, NULL, 0, 0, 0, NULL, NULL, NULL),
(107, 160, NULL, 0, 0, 0, NULL, NULL, NULL),
(108, 161, NULL, 0, 0, 0, NULL, NULL, NULL),
(109, 162, NULL, 0, 0, 0, NULL, NULL, NULL),
(110, 163, NULL, 0, 0, 0, NULL, NULL, NULL),
(111, 164, NULL, 0, 0, 0, NULL, NULL, NULL),
(112, 165, NULL, 0, 0, 0, NULL, NULL, NULL),
(113, 166, NULL, 0, 0, 0, NULL, NULL, NULL),
(114, 167, NULL, 0, 0, 0, NULL, NULL, NULL),
(115, 168, NULL, 0, 0, 0, NULL, NULL, NULL),
(116, 169, NULL, 0, 0, 0, NULL, NULL, NULL),
(117, 170, NULL, 0, 0, 0, NULL, NULL, NULL),
(118, 171, NULL, 0, 0, 0, NULL, NULL, NULL),
(119, 172, NULL, 0, 0, 0, NULL, NULL, NULL),
(120, 58, NULL, 0, 0, 0, NULL, NULL, NULL),
(121, 173, NULL, 0, 0, 0, NULL, NULL, NULL),
(122, 174, NULL, 0, 0, 0, NULL, NULL, NULL),
(123, 175, NULL, 0, 0, 0, NULL, NULL, NULL),
(124, 176, NULL, 0, 0, 0, NULL, NULL, NULL),
(125, 14, NULL, 0, 0, 0, NULL, NULL, NULL),
(126, 177, NULL, 0, 0, 0, NULL, NULL, NULL),
(127, 178, NULL, 0, 0, 0, NULL, NULL, NULL),
(128, 179, NULL, 0, 0, 0, NULL, NULL, NULL),
(129, 180, NULL, 0, 0, 0, NULL, NULL, NULL),
(130, 181, NULL, 0, 0, 0, NULL, NULL, NULL),
(131, 184, NULL, 0, 0, 0, NULL, NULL, NULL),
(132, 186, NULL, 0, 0, 0, NULL, NULL, NULL),
(133, 185, NULL, 0, 0, 0, NULL, NULL, NULL),
(134, 187, NULL, 0, 0, 0, NULL, NULL, NULL),
(135, 188, NULL, 0, 0, 0, NULL, NULL, NULL),
(136, 191, NULL, 0, 0, 0, NULL, NULL, NULL),
(137, 192, NULL, 0, 0, 0, NULL, NULL, NULL),
(138, 193, NULL, 0, 0, 0, NULL, NULL, NULL),
(139, 194, NULL, 0, 0, 0, NULL, NULL, NULL),
(140, 195, NULL, 0, 0, 0, NULL, NULL, NULL),
(141, 196, NULL, 0, 0, 0, NULL, NULL, NULL),
(142, 197, NULL, 0, 0, 0, NULL, NULL, NULL),
(143, 198, NULL, 0, 0, 0, NULL, NULL, NULL),
(144, 199, NULL, 0, 0, 0, NULL, NULL, NULL),
(145, 200, NULL, 0, 0, 0, NULL, NULL, NULL),
(146, 201, NULL, 0, 0, 0, NULL, NULL, NULL),
(147, 202, NULL, 0, 0, 0, NULL, NULL, NULL),
(148, 203, NULL, 0, 0, 0, NULL, NULL, NULL),
(149, 17, NULL, 0, 0, 0, NULL, NULL, NULL),
(150, 204, NULL, 0, 0, 0, NULL, NULL, NULL),
(151, 205, NULL, 0, 0, 0, NULL, NULL, NULL),
(152, 247, NULL, 0, 0, 0, NULL, NULL, NULL),
(153, 248, NULL, 0, 0, 0, NULL, NULL, NULL),
(154, 249, NULL, 0, 0, 0, NULL, NULL, NULL),
(155, 245, NULL, 0, 0, 0, NULL, NULL, NULL),
(156, 227, NULL, 0, 0, 0, NULL, NULL, NULL),
(157, 250, NULL, 0, 0, 0, NULL, NULL, NULL),
(158, 251, NULL, 0, 0, 0, NULL, NULL, NULL),
(159, 252, NULL, 0, 0, 0, NULL, NULL, NULL),
(160, 253, NULL, 0, 0, 0, NULL, NULL, NULL),
(161, 233, NULL, 0, 0, 0, NULL, NULL, NULL),
(162, 254, NULL, 0, 0, 0, NULL, NULL, NULL),
(163, 234, NULL, 0, 0, 0, NULL, NULL, NULL),
(164, 64, NULL, 0, 0, 0, NULL, NULL, NULL),
(165, 47, NULL, 0, 0, 0, NULL, NULL, NULL),
(166, 255, NULL, 0, 0, 0, NULL, NULL, NULL),
(167, 256, NULL, 0, 0, 0, NULL, NULL, NULL),
(168, 257, NULL, 0, 0, 0, NULL, NULL, NULL),
(169, 232, NULL, 0, 0, 0, NULL, NULL, NULL),
(170, 258, NULL, 0, 0, 0, NULL, NULL, NULL),
(171, 239, NULL, 0, 0, 0, NULL, NULL, NULL),
(172, 260, NULL, 0, 0, 0, NULL, NULL, NULL),
(173, 229, NULL, 0, 0, 0, NULL, NULL, NULL),
(174, 261, NULL, 0, 0, 0, NULL, NULL, NULL),
(175, 263, NULL, 0, 0, 0, NULL, NULL, NULL),
(176, 264, NULL, 0, 0, 0, NULL, NULL, NULL),
(177, 265, NULL, 0, 0, 0, NULL, NULL, NULL),
(178, 216, NULL, 0, 0, 0, NULL, NULL, NULL),
(179, 231, NULL, 0, 0, 0, NULL, NULL, NULL),
(180, 266, NULL, 0, 0, 0, NULL, NULL, NULL),
(181, 267, NULL, 0, 0, 0, NULL, NULL, NULL),
(182, 268, NULL, 0, 0, 0, NULL, NULL, NULL),
(183, 269, NULL, 0, 0, 0, NULL, NULL, NULL),
(184, 241, NULL, 0, 0, 0, NULL, NULL, NULL),
(185, 60, NULL, 0, 0, 0, NULL, NULL, NULL),
(186, 270, NULL, 0, 0, 0, NULL, NULL, NULL),
(187, 271, NULL, 0, 0, 0, NULL, NULL, NULL),
(188, 272, NULL, 0, 0, 0, NULL, NULL, NULL),
(189, 273, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
`id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `fb_id` varchar(130) NOT NULL,
  `bracket` varchar(250) NOT NULL,
  `class` varchar(35) NOT NULL DEFAULT 'event-info',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `first` varchar(90) NOT NULL,
  `second` varchar(90) NOT NULL,
  `third` varchar(90) NOT NULL,
  `stream` varchar(90) NOT NULL,
  `attending` int(11) NOT NULL,
  `location` varchar(90) NOT NULL,
  `host` varchar(90) NOT NULL,
  `vods` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `title`, `fb_id`, `bracket`, `class`, `start`, `end`, `first`, `second`, `third`, `stream`, `attending`, `location`, `host`, `vods`) VALUES
(1, 'Do You Fox Wit it', '722984804448159', '//dyfwi.challonge.com/dyftop32', 'event-success', '2014-11-15', '2014-11-16', 'Hax', 'Silentwolf', 'SFAT', 'showdownsmash', 250, 'Oakland', 'NorCal', '3048'),
(9, 'TMG Columbia vs UMass Boston', '//www.facebook.com/TheMeleeGames', '//themeleegames.challonge.com/TS', 'event-info', '2015-01-31', '2015-02-02', '', '', '', '', 0, 'Secaucus, NJ', 'Apex 2015', ''),
(10, 'Paragon', '1502519116670412', '//paragon.challonge.com', 'event-info', '2015-01-17', '2015-01-18', '', '', '', 'vgbootcamp', 150, 'Orlando, FL', 'Versus Gaming Center / Gaming Knights', ''),
(11, 'APEX 2015', '301539433342834', '', 'event-info', '2015-01-30', '2015-02-01', '', '', '', 'vgbootcamp', 1025, 'Secaucus, NJ', 'APEX', ''),
(12, 'Smashlounge Invitational', '', '//challonge.com/SLInvitational1', 'event-info', '2014-01-23', '2014-01-23', '', '', '', 'pewpewu', 6, 'Santa Cruz, CA', 'smashlounge', ''),
(13, 'Cusetown Beatdown', '', '-', 'event-info', '2015-02-28', '2015-02-28', '', '', '', 'cnysmashbros', 0, '', 'Mana', ''),
(14, 'Cornell Monthly 5', '', '//cornellssbm.challonge.com/', 'event-info', '2015-03-07', '2015-03-07', '', '', '', 'cnysmashbros', 0, '', 'Cornell Smash', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
`id` int(11) NOT NULL,
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
  `friendcode` varchar(12) NOT NULL,
  `garpr` varchar(90) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `image`, `facebook`, `location`, `twitch`, `userid`, `vod`, `twitter`, `main`, `sponsor`, `latitude`, `longitude`, `friendcode`, `garpr`) VALUES
(9, '', 'logan6694', 'Santa Cruz', 'xuaqua', 2, 'ZKsyg8iw5sk', 'logan6694', 6, 'Smash Lounge', 36.985, -122, '123456789124', ''),
(10, '', 'MIOMPewPewU', 'Bay Area', 'pewpewu', 3, 'BMlxvpOhK7o', 'miom_pewpewu', 14, 'Melee it On Me', 0, 0, '123456789123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, 'logan6694@gmail.com', 'drft', '$2y$10$2Hnv3/rjsmXXirsm32WHueroCj4xx3cdxd5Sw0dLXvpfAnEZlfnKW', NULL, 1, NULL, NULL, '2015-03-10 19:06:07', '$2y$10$ADdBfwcDDqM5Qjr6u.TV6eaM0wsie53ae.GXDByViNgOgZiT18Uz6', NULL, NULL, NULL, '2014-09-07 06:29:24', '2015-03-11 02:06:07'),
(3, 'pewpewu@smashlounge.com', 'pewpewu', '$2y$10$i.c0NvJYHicX9C6BjbPH1u5YF2b6p6K0S.g/9vcaeurN9cnwJrzLG', NULL, 1, NULL, NULL, '2014-09-07 18:08:05', '$2y$10$hxU/bA.sdGiDm01bsheNM.HG5hWtqItDVPr4KgTb1jjFs0qzY1rFm', NULL, NULL, NULL, '2014-09-08 01:07:57', '2014-09-08 01:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attacks`
--
ALTER TABLE `attacks`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charinfo`
--
ALTER TABLE `charinfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chartech`
--
ALTER TABLE `chartech`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `framedatajson`
--
ALTER TABLE `framedatajson`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `framedatamoves`
--
ALTER TABLE `framedatamoves`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gifs`
--
ALTER TABLE `gifs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `locals`
--
ALTER TABLE `locals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissionsgroup`
--
ALTER TABLE `submissionsgroup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissionstech`
--
ALTER TABLE `submissionstech`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submissionstournament`
--
ALTER TABLE `submissionstournament`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techs`
--
ALTER TABLE `techs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attacks`
--
ALTER TABLE `attacks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=644;
--
-- AUTO_INCREMENT for table `charinfo`
--
ALTER TABLE `charinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `chartech`
--
ALTER TABLE `chartech`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `framedatajson`
--
ALTER TABLE `framedatajson`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `framedatamoves`
--
ALTER TABLE `framedatamoves`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gifs`
--
ALTER TABLE `gifs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1905;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `locals`
--
ALTER TABLE `locals`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submissionsgroup`
--
ALTER TABLE `submissionsgroup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submissionstech`
--
ALTER TABLE `submissionstech`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `submissionstournament`
--
ALTER TABLE `submissionstournament`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `techs`
--
ALTER TABLE `techs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=190;
--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;