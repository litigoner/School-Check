-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2014 at 10:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3838f8041be43718e77c0a07a1355619', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:26.0) Gecko/20100101 Firefox/26.0', 1418895067, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:13:"Manish Pandey";s:5:"email";s:22:"manpandey321@gmail.com";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}'),
('58a7934f2646580977e79adbb0f3ced9', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5', 1418891762, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:13:"Manish Pandey";s:5:"email";s:22:"manpandey321@gmail.com";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}'),
('8de86012a42c094039d5bfc7f4966dca', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5', 1418891193, 'a:6:{s:9:"user_data";s:0:"";s:4:"name";s:13:"Manish Pandey";s:5:"email";s:22:"manpandey321@gmail.com";s:2:"id";s:1:"2";s:8:"loggedin";b:1;s:15:"flash:old:error";s:46:"That email/password combination does not exist";}'),
('e1bf1a15b4a4de736c252f6803d1cc7c', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5', 1418895469, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:13:"Manish Pandey";s:5:"email";s:22:"manpandey321@gmail.com";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(30) NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  `pic` varchar(150) NOT NULL,
  `report_id` int(30) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(30) NOT NULL AUTO_INCREMENT,
  `pic` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `school_id` int(30) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `name`, `address`) VALUES
(1, 'St Xaviers''s ', 'Kathmandu'),
(2, 'HSM', 'hetauda'),
(3, 'GVT', 'BUTWAL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `name`) VALUES
(2, 'manish', 'manpandey321@gmail.com', '77f170beb7fb7ea6bd50ea6f8f9fd0dbb21df5a39cac717ff53bf69154ab6104c0753ec8f3748e960f20ad09abb2f22e4194534f6a067dc2cbd9819976147869', 'Manish Pandey');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
