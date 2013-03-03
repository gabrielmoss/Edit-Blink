-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2013 at 01:15 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edit_blink`
--

-- --------------------------------------------------------

--
-- Table structure for table `edit_blink_table`
--

CREATE TABLE IF NOT EXISTS `edit_blink_table` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `text` longtext NOT NULL,
  `words` bigint(20) NOT NULL,
  `cost` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `edit_blink_table`
--

INSERT INTO `edit_blink_table` (`id`, `email`, `text`, `words`, `cost`) VALUES
(37, 'patboy1088@yahoo.com', 'So besides validation, Verimail.js also gives you suggestions. So if you type an email with the wrong TLD or domain that is very similar to a common email domain (hotmail.com, gmail.com, etc), it can detect this and suggest a correction.', 43, 1.29);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
