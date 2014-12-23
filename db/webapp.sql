-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2014 at 12:12 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) NOT NULL,
  `project_detials` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_detials`) VALUES
(1, 'Learn Yii framework', 'In this project, we will learn about Yii framework that help you to create powerful dynamic web pages '),
(2, 'Learn PHP', 'In this project we will learn how to use PHP language to create dynamice websites.');

-- --------------------------------------------------------

--
-- Table structure for table `project_users`
--

CREATE TABLE IF NOT EXISTS `project_users` (
  `p_id` int(11) NOT NULL DEFAULT '0',
  `u_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`),
  KEY `p_id` (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project_users`
--

INSERT INTO `project_users` (`p_id`, `u_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(100) NOT NULL,
  `task_start` varchar(20) DEFAULT NULL,
  `task_end` varchar(20) DEFAULT NULL,
  `task_period` varchar(10) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_color` varchar(50) NOT NULL,
  PRIMARY KEY (`task_id`),
  KEY `project_id` (`project_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_name`, `task_start`, `task_end`, `task_period`, `project_id`, `user_id`, `task_color`) VALUES
(1, 'Create a model', '2014-12-01', '2014-12-02', '13:40', 1, 2, '#E81038'),
(2, 'Create a controller', '2014-12-04', '2014-12-05', '11:00', 1, 2, '#F52FF1'),
(3, 'Create an action', '2014-12-08', '2014-12-09', '10:00', 1, 2, '#8521FF'),
(5, 'Create an interface', '2014-12-10', '2014-12-12', '12:00', 1, 1, '#208CF7'),
(7, 'Fixing the DatePicker problem', '2014-12-15', '2014-12-16', '12:00', 1, 1, '#3BEBFF'),
(9, 'Setting up Access control for users', '2014-12-17', '2014-12-18', '12:00', 1, 2, '#22F082'),
(10, 'Watch a movie', '2014-12-23', '2014-12-24', '09:00', 2, 2, '#F02290'),
(11, 'Download the timepicker widget', '2014-12-25', '2014-12-26', '12:48', 1, 2, '#F0DF22'),
(12, 'Eat Suchi', '2014-12-01', '2014-12-10', '14:40', 1, 1, '#F08222'),
(13, 'Hello', '2014-12-01', '2014-12-01', '17:42', 1, 1, '#018F5D');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'Swifty', '12345'),
(2, 'Thrall', '12345');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project_users`
--
ALTER TABLE `project_users`
  ADD CONSTRAINT `project_users_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `project_users_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
