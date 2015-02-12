-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2015 at 05:21 PM
-- Server version: 5.5.41-cll-lve
-- PHP Version: 5.4.23

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
-- Table structure for table `techs`
--

DROP TABLE IF EXISTS `techs`;
CREATE TABLE IF NOT EXISTS `techs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tech` varchar(32) NOT NULL,
  `description` varchar(400) NOT NULL,
  `smashwiki` varchar(260) NOT NULL,
  `inputs` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
(31, 'Shield Drop', 'A technique that allows for your character to smoothly fall through a soft platform while shielding', 'http://www.ssbwiki.com/Shield_platform_dropping', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
