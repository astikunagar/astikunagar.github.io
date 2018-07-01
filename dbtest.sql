-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2017 at 05:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `round` int(4) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `round`, `question`, `answer`) VALUES
(1, 1, 'where did India play', 'Lords'),
(2, 1, '9/6/21 | 20/18/21/6/22/15/16/10 | 20/10 | 16/15/21 | 16/21 | 6/3 | 21/21/2/9 | 19/16 | 16/21 | 6/3', 'separate'),
(3, 1, 'whats my surname', 'unagar'),
(4, 2, 'what is php?', 'scripting language'),
(5, 2, 'An eg. of increment operation?', '$count++');

-- --------------------------------------------------------

--
-- Table structure for table `team_limit`
--

DROP TABLE IF EXISTS `team_limit`;
CREATE TABLE IF NOT EXISTS `team_limit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `limit_length` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_limit`
--

INSERT INTO `team_limit` (`id`, `limit_length`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `team_id`, `userName`, `userEmail`, `userPass`, `time`) VALUES
(1, 1, 'Priya', 'priyasin14@gmail.com', '638ccd6d3a2b30416976f3c16875e217b3b689802c023ede51ab58d53bcc8a55', '0000-00-00 00:00:00'),
(2, 2, 'Abc', 'priya15@yahoo.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '0000-00-00 00:00:00'),
(3, 3, 'test', 'priya56@gmailc.om', '8691f4868edd4797bae465d3203775a212731f12fbb29db4db0866d0b87faf01', '0000-00-00 00:00:00'),
(4, 4, 'Shivrangi', 'priya@yahoo.in', '2a4b198e2817bd3b527af822d738fc754cac59ec042dc880437bbdcd19758780', '0000-00-00 00:00:00'),
(5, 1, 'astik unagar', 'astik@techsevin.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2017-08-13 19:05:38'),
(6, 2, 'test test', 'test@test.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2017-08-23 21:41:44'),
(8, 9, 'avni jikadra', 'avnijikadra@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2017-08-23 22:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_score`
--

DROP TABLE IF EXISTS `user_score`;
CREATE TABLE IF NOT EXISTS `user_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `round` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_score`
--

INSERT INTO `user_score` (`id`, `user_id`, `team_id`, `question_id`, `round`, `start_time`, `end_time`) VALUES
(2, 5, 1, 1, 1, '2017-08-15 03:02:52', '2017-08-15 03:40:51'),
(3, 5, 1, 2, 1, '2017-08-15 03:40:51', '2017-08-15 03:41:03'),
(4, 5, 1, 3, 1, '2017-08-15 03:41:03', '2017-08-15 03:41:09'),
(5, 5, 1, 4, 2, '2017-08-15 03:41:09', '2017-08-15 03:41:20'),
(6, 5, 1, 5, 2, '2017-08-15 03:41:20', '2017-08-15 03:41:36'),
(7, 5, 1, 1, 1, '2017-08-23 17:20:11', '2017-08-23 17:23:48'),
(8, 5, 1, 2, 1, '2017-08-23 17:23:48', '2017-08-23 17:24:12'),
(9, 5, 1, 3, 1, '2017-08-23 17:24:12', '2017-08-23 17:24:24'),
(10, 5, 1, 4, 2, '2017-08-23 17:24:24', '2017-08-23 17:36:37'),
(11, 5, 1, 5, 2, '2017-08-23 17:36:38', '2017-08-23 17:37:02'),
(12, 6, 0, 1, 1, '2017-08-23 21:42:14', '2017-08-23 21:42:20'),
(13, 6, 0, 2, 1, '2017-08-23 21:42:20', '2017-08-23 21:42:33'),
(14, 6, 0, 3, 1, '2017-08-23 21:42:33', '2017-08-23 21:42:38'),
(15, 6, 0, 1, 1, '2017-08-23 21:47:52', '2017-08-23 21:48:43'),
(16, 6, 0, 2, 1, '2017-08-23 21:48:43', '2017-08-23 21:49:00'),
(17, 6, 0, 3, 1, '2017-08-23 21:49:00', '2017-08-23 21:49:05'),
(18, 6, 0, 4, 2, '2017-08-23 21:49:05', '2017-08-23 21:50:58'),
(19, 6, 0, 5, 2, '2017-08-23 21:50:58', '2017-08-23 21:51:06'),
(20, 5, 1, 1, 1, '2017-08-23 21:52:21', '2017-08-23 21:52:27'),
(21, 5, 1, 2, 1, '2017-08-23 21:52:28', '2017-08-23 21:52:32'),
(22, 5, 1, 3, 1, '2017-08-23 21:52:33', '2017-08-23 21:52:37'),
(23, 5, 1, 4, 2, '2017-08-23 21:52:37', '2017-08-23 21:52:45'),
(24, 5, 1, 5, 2, '2017-08-23 21:52:45', '2017-08-23 21:52:52'),
(25, 8, 9, 1, 1, '2017-08-23 22:15:23', '2017-08-23 22:15:31'),
(26, 8, 9, 2, 1, '2017-08-23 22:15:31', '2017-08-23 22:15:39'),
(27, 8, 9, 3, 1, '2017-08-23 22:15:39', '2017-08-23 22:15:46'),
(28, 8, 9, 4, 2, '2017-08-23 22:15:47', '2017-08-23 22:16:00'),
(29, 8, 9, 5, 2, '2017-08-23 22:16:00', '2017-08-23 22:16:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
