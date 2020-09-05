-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2020 at 03:41 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmanagermc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `FullName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `jobOrPosition` varchar(20) NOT NULL,
  `officeLocation` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`FullName`, `email`, `userName`, `phoneNumber`, `jobOrPosition`, `officeLocation`, `password`) VALUES
('Tarek swaidane', 'tarekswaidane99@gmail.com', 'tarek.swaidane', '00000000', '٤', 'Tyre', 'nIeNBJ4GKjzFg'),
('Elias Afara', 'elias@mohmal.co', 'elias.afara', '00000000', '١', 'Tyre', 'nIeNBJ4GKjzFg');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `body` varchar(255) CHARACTER SET utf8 NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file` longtext CHARACTER SET utf8 NOT NULL,
  `fileName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `addedBy` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `body`, `upload_date`, `file`, `fileName`, `addedBy`) VALUES
(115, '  Announcement 3', '  This is announcement Number 3', '2020-02-03 09:53:24', '/Applications/MAMP/tmp/php/phpQrnLR3', 'Lab_8.pdf', 'tarek.swaidane');

-- --------------------------------------------------------

--
-- Table structure for table `discussioncomments`
--

DROP TABLE IF EXISTS `discussioncomments`;
CREATE TABLE IF NOT EXISTS `discussioncomments` (
  `comment_Id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `post_Id` int(11) NOT NULL,
  `commentedBy` varchar(30) CHARACTER SET utf8 NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussioncomments`
--

INSERT INTO `discussioncomments` (`comment_Id`, `comment`, `post_Id`, `commentedBy`, `datetime`) VALUES
(58, 'Hello World How are you', 17, 'tarek.swaidane', '2020-02-03 09:50:25'),
(52, 'This is me', 17, 'elias.afara', '2020-01-21 23:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

DROP TABLE IF EXISTS `discussions`;
CREATE TABLE IF NOT EXISTS `discussions` (
  `post_Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `createdBy` varchar(30) CHARACTER SET utf8 NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`post_Id`, `title`, `content`, `createdBy`, `datetime`) VALUES
(28, 'CMPS 272 Class', 'Hello Software Engineering Class', 'tarek.swaidane', '2020-02-04 21:09:53'),
(17, 'Discussion 1', 'Hello world', 'ali.nehmee', '2020-01-15 12:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `taskassigned`
--

DROP TABLE IF EXISTS `taskassigned`;
CREATE TABLE IF NOT EXISTS `taskassigned` (
  `assignedID` int(11) NOT NULL AUTO_INCREMENT,
  `isDone` tinyint(1) NOT NULL DEFAULT '0',
  `taskID` int(11) NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 NOT NULL,
  `taskDeadline` varchar(30) CHARACTER SET utf8 NOT NULL,
  `addedBy` varchar(30) CHARACTER SET utf8 NOT NULL,
  `assignedTo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fileName` varchar(40) CHARACTER SET utf8 NOT NULL,
  `newTaskFile` longtext CHARACTER SET utf8 NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`assignedID`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskassigned`
--

INSERT INTO `taskassigned` (`assignedID`, `isDone`, `taskID`, `description`, `taskDeadline`, `addedBy`, `assignedTo`, `fileName`, `newTaskFile`, `datetime`) VALUES
(56, 1, 63, 'Inside New Task Assigned 6', '2020-02-13', 'tarek.swaidane', 'ali.nehme', 'n7.pdf', '/Applications/MAMP/tmp/php/phpdoy4WW', '2020-02-04 19:26:40'),
(54, 1, 63, 'Inside New Task Assigned 5', '2020-02-05', 'tarek.swaidane', 'elias.afara', 'n2.pdf', '/Applications/MAMP/tmp/php/phpqeNJnK', '2020-02-03 09:33:04'),
(55, 1, 63, 'Inside New Task Assigned 5', '2020-02-12', 'elias.afara', 'tarek.swaidane', 'n5.pdf', '/Applications/MAMP/tmp/php/phpSjCRqF', '2020-02-04 19:25:57'),
(53, 1, 63, 'Inside New Task Assigned 4', '2020-02-06', 'elias.afara', 'tarek.swaidane', 'n1.pdf', '/Applications/MAMP/tmp/php/phpBXudiM', '2020-02-03 09:29:37'),
(52, 1, 63, 'This is the task Number 3', '2020-02-12', 'tarek.swaidane', 'elias.afara', 'AI_Dummies.pdf', '/Applications/MAMP/tmp/php/phpQWmP8l', '2020-02-03 09:26:29'),
(50, 1, 62, 'Inside New Task Assigned 2', '2020-02-13', 'tarek.swaidane', 'ali.nehme', 'Google Software Eng.pdf', '/Applications/MAMP/tmp/php/php0nZSct', '2020-02-03 09:22:39'),
(51, 0, 62, 'Inside New Task Assigned 3', '2020-02-02', 'ali.nehme', 'tarek.swaidane', 'git-cheat-sheet-education.pdf', '/Applications/MAMP/tmp/php/phpqM0Yqh', '2020-02-03 09:23:39'),
(49, 1, 62, 'Inside New Task Assigned 1', '2020-02-12', 'elias.afara', 'tarek.swaidane', 'Computer Science Degree Plan.pdf', '/Applications/MAMP/tmp/php/phpEvKj9t', '2020-02-03 09:21:30'),
(48, 1, 62, 'Test Task Number 2', '2020-02-19', 'tarek.swaidane', 'elias.afara', 'Netflix_Slides.pdf', '/Applications/MAMP/tmp/php/phpdNEY93', '2020-02-03 09:14:03'),
(57, 1, 63, 'Inside New Task Assigned 6', '2020-02-13', 'ali.nehme', 'tarek.swaidane', 'n8.pdf', '/Applications/MAMP/tmp/php/phptKvv4L', '2020-02-04 19:27:44'),
(58, 1, 63, 'Inside New Task Assigned 7', '2020-02-15', 'elias.afara', 'elias.afara', 'SU18-CS188 Lecture 1 -- introduction.pdf', '/Applications/MAMP/tmp/php/phpzZNK0i', '2020-02-04 19:30:31'),
(59, 1, 64, 'This is related to financial work', '2020-02-10', 'tarek.swaidane', 'elias.afara', 'n10.pdf', '/Applications/MAMP/tmp/php/phpMJGpZc', '2020-02-04 19:33:40'),
(60, 1, 64, 'I Finished the financial papers', '2020-02-13', 'elias.afara', 'ali.nehme', 'SU18-CS188 Lecture 13 -- Bayes Nets.pdf', '/Applications/MAMP/tmp/php/phpfFayqO', '2020-02-04 19:39:44'),
(61, 1, 64, 'I Finsished the assistant thing', '2020-02-13', 'ali.nehme', 'batoul.mostafa', 'n6.pdf', '/Applications/MAMP/tmp/php/phptb49Du', '2020-02-04 19:41:29'),
(62, 1, 64, 'Deadline of bookstore not met', '2020-02-13', 'batoul.mostafa', 'batoul.mostafa', 'n7.pdf', '/Applications/MAMP/tmp/php/phpwxCUeq', '2020-02-04 19:44:33'),
(63, 1, 64, 'bookStore ressponded', '2020-02-14', 'batoul.mostafa', 'tarek.swaidane', 'n10.pdf', '/Applications/MAMP/tmp/php/phpyeABdX', '2020-02-04 19:45:13'),
(64, 1, 64, 'not Done need more time', '2020-02-14', 'tarek.swaidane', 'tarek.swaidane', 'n1.pdf', '/Applications/MAMP/tmp/php/phpgMd6Yb', '2020-02-04 19:45:58'),
(65, 1, 64, 'testing', '2020-01-17', 'tarek.swaidane', 'elias.afara', 'n2.pdf', '/Applications/MAMP/tmp/php/phpyYM8ja', '2020-02-04 19:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `taskID` int(11) NOT NULL AUTO_INCREMENT,
  `taskName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(300) CHARACTER SET utf8 NOT NULL,
  `taskAssigned` varchar(40) CHARACTER SET utf8 NOT NULL,
  `taskAddedBy` varchar(40) CHARACTER SET utf8 NOT NULL,
  `taskDeadline` varchar(30) CHARACTER SET utf8 NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isDone` tinyint(1) DEFAULT '0',
  `fileName` varchar(40) CHARACTER SET utf8 NOT NULL,
  `taskFile` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`taskID`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `taskName`, `description`, `taskAssigned`, `taskAddedBy`, `taskDeadline`, `addedAt`, `isDone`, `fileName`, `taskFile`) VALUES
(62, 'Test Task Number 2', 'Test Task Number 2', 'elias.afara', 'tarek.swaidane', '2020-02-19', '2020-02-03 09:14:03', 1, 'Netflix_Slides.pdf', '/Applications/MAMP/tmp/php/phpdNEY93'),
(63, 'Test Task Number 3', 'This is the task Number 3', 'elias.afara', 'tarek.swaidane', '2020-02-12', '2020-02-03 09:26:29', 1, 'AI_Dummies.pdf', '/Applications/MAMP/tmp/php/phpQWmP8l'),
(64, ' Financial Papers', ' This is related to financial work in the ministry', 'elias.afara', 'tarek.swaidane', '2020-02-10', '2020-02-04 19:34:26', 1, 'n10.pdf', '/Applications/MAMP/tmp/php/phpMJGpZc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `FullName` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `officeLocation` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jobPosition` varchar(40) NOT NULL,
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FullName`, `email`, `userName`, `phoneNumber`, `officeLocation`, `password`, `jobPosition`) VALUES
('Ali Nehme', '', 'ali.nehme', '00000000', 'Habbouch Floor 1', 'nIeNBJ4GKjzFg', '٢'),
('Tarek swaidane', 'tarekswaidane99@gmail.com', 'tarek.swaidane', '00000000', 'Nabatieh', 'nIlV6nVsl98kc', '١');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
