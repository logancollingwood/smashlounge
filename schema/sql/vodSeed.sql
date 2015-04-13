-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2015 at 09:49 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `vods`
--

INSERT INTO `vods` (`id`, `url`, `title`, `update_date`, `score`, `credit`, `typeid`, `dataid`, `submitted_by`, `description`) VALUES
(1, 'RBH4Z_vz1fk', 'Westballz imprisoned by destiny. . . Again', '2015-04-16 15:25:11', 0, 'GRSmash', 3, 0, '', 'RIP Westballz'),
(2, 'qUiAZltrWwo', '[Falco] Multi-shine Tutorial - feat. Squid (Advanced Level) - SSBM', '2015-04-16 16:04:50', 0, 'SSBM Tutorials', 1, 0, '', 'A quick tutorial on Multi-shine with Falco'),
(4, 'Kr5y0-W9YVo', 'Cort (Marth) vs PC Chris (Fox) 2', '2015-04-16 16:11:56', 0, 'raserucort', 2, 0, '', 'One of the fastest matches in Melee'),
(5, 'OSxVR_QGPoI', 'PewFat', '2015-04-13 07:46:02', 0, 'SFAT', 6, 0, '', 'PewPewU and SFAT demonstrating great teams synergy many years ago'),
(6, '8orJkb0LtaE', 'Shroomed - "IM NOT YELLING" (nsfw)', '2015-04-13 07:50:20', 0, 'ShowDown Smash', 3, 0, '', 'Shroomed going off at a recent "Get Smashed at the Foundry event".'),
(8, 'JLuFpmoKUVQ', 'Melee Impossible - The Combo Video (TAS)', '2015-04-13 07:29:22', 0, 'antdgar2', 3, 0, '', 'Some insane tool assisted combos'),
(9, 'vsr4M6r0B2Q', 'Smash Bros is a Freaking Blast', '2015-04-13 07:35:27', 0, 'The Toasty Knight', 5, 0, '', 'A PewPewU Combo Video'),
(10, 'kKsEobD1pew', 'PewPewUniversity - A lesson on Sheild Stops', '2015-04-13 07:46:52', 0, 'PewPewU', 4, 0, '', 'Shield Stop'),
(11, 'V3hjjNLCcMQ', 'PewPewUniversity - a lesson on Run Cancels', '2015-04-13 07:46:54', 0, 'pewpewu', 4, 0, '', 'Run Canceling'),
(12, 'J_aqH9sJnbU', 'PewPewUniversity - a lesson on pivoting', '2015-04-13 07:05:54', 0, 'PewPewU', 4, 0, '', 'A quick lesson on pivoting by PewPewU'),
(13, 'XhujDoRBXeY', 'PewPewUniversity - a lesson on No Impact Landing (NIL)', '2015-04-13 07:06:34', 0, 'PewPewU', 4, 0, '', 'No Impact Landing'),
(14, 'ffUQu-lYanE', 'PewPewUniversity - a lesson on Jump Cancels (JC)', '2015-04-13 07:07:25', 0, 'PewPewU', 4, 0, '', 'Use Jump Cancels to speed up your grabs and smash attacks'),
(15, 'mMlKbBGPalw', 'PewPewUniversity: a lesson on Applying Jump Cancels', '2015-04-13 07:07:58', 0, 'pewpewu', 4, 0, '', 'A quick tutorial on how to implement Jump Cancels'),
(16, 'lFKymA7cOlY', 'PewPewUniversity - a lesson on Ledge Mechanics', '2015-04-13 07:08:49', 0, 'PewPewU', 4, 0, '', 'Learn how to use the ledge to your advantage!'),
(17, 'cHdGq9n7euM', 'PewPewUniversity - a lesson on Fox Trot', '2015-04-13 07:09:38', 0, 'PewPewU', 4, 0, '', 'Learn the benefits of using a Fox Trot to properly space your character'),
(18, '6NraGXDMuVw', 'PewPewUniversity - a lesson on Cactuar Dash', '2015-04-13 07:12:56', 0, 'PewPewUniversity', 4, 0, '', 'PewPewU demonstrating how to use run canceling to dash efficiently'),
(19, 'GyaBMhRquZA', 'PewPewUniversity - a lesson on Edge Cancel', '2015-04-13 07:13:34', 0, 'PewPewU', 4, 0, '', 'Learn how to optimize your aerial attacks with Edge Canceling'),
(20, 'aHcobQHiyYU', 'PewPewUniversity: a lesson on Shine Turnaround', '2015-04-13 07:14:12', 0, 'PewPewU', 4, 0, '', 'Learn how to use use Shine to gain advantages as Fox and Falco'),
(21, 'FIGE-68RTDo', 'PewPewUniversity - Auto Cancel Aerial', '2015-04-13 07:15:04', 0, 'PewPewU', 4, 0, '', 'Use Auto Canceling to speed up your aerial approach game!'),
(22, 'hjHTHYa_x1c', 'PewPewUniversity - Weight Class vs Fall Speed', '2015-04-13 07:15:50', 0, 'PewPewU', 4, 0, '', 'PewPewU describes some game mechanics in great detail! Great for new players.'),
(23, 'DNXPMf2UOck', 'PewPewUniversity - Wall Tech', '2015-04-13 07:16:41', 0, 'PewPewU', 4, 0, '', 'Watch and learn how to effectively use a wall to do some stylish things'),
(24, '-LdZxzGjywE', 'Hax combo video', '2015-04-13 07:32:48', 0, 'GRsmash', 5, 0, '', 'The top 10 Hax Falcon combos. Enjoy the super fast, technical gameplay.'),
(25, 'HfuVQN5cwy0', '[Marth] Neutral Game Tutorial - SSBM', '2015-04-13 07:38:06', 0, 'SSBM Tutorials', 1, 0, '', 'SSBM Tutorials video guide introducing the neutral game.'),
(26, '4n4s5yB7ZkE', 'Advanced How To Play (SSBM) Part 1', '2015-04-13 07:39:56', 0, 'Wak017', 1, 0, '', 'A great introduction into Technical SSBM.'),
(27, 'xiZLs2doK8E', 'Advanced How To Play (SSBM) Part 2', '2015-04-13 07:40:57', 0, 'Wak017', 1, 0, '', 'Part 2 of the introductory series'),
(28, 'PFmGIOcWdsM', 'Advanced How To Play (SSBM) Part 3', '2015-04-13 07:41:35', 0, 'Wak017', 1, 0, '', 'The final installment of this intro series'),
(29, 'vXgpGBbh5r8', 'How Fast Is Melee?', '2015-04-13 07:43:15', 0, 'Acryte', 1, 0, '', 'A technique video demonstrating the speed at which Melee can be played'),
(30, 's63pPeyWasw', '739 Mew2King Edgeguards (With Marth)', '2015-04-13 07:45:28', 0, 'Ben Burdett', 3, 0, '', 'Enjoy this endless video of edgeguards with Marth, and just maybe you''ll be able to pull them off when needed'),
(31, 'n6vqWxTku8I', 'The Legend of FalcoMaster3000', '2015-04-13 07:48:08', 0, 'Super Smash Bros University', 3, 0, '', 'A masked vigilante showed up at a smash bros meetup with a ski mask and sunglasses. He didn''t say a word for 9 entire hours, beat everyone there and won the bracket, gave a thumbs up and left without saying a word.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
