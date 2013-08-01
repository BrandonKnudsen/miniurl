-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- miniurl
-- version 1.0
-- @derekbtw
-- https://github.com/derekbtw/miniurl
-- july 31, 2013
--
-- Host: localhost
-- Generation Time: Jul 31, 2013 at 07:57 PM
-- Server version: 5.5.32
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `host_miniurl`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_shortener`
--

DROP TABLE IF EXISTS `mini_shortener`;
CREATE TABLE IF NOT EXISTS `mini_shortener` (
  `url_id` int(6) NOT NULL AUTO_INCREMENT,
  `url` varchar(2000) NOT NULL,
  `code` varchar(6) NOT NULL,
  PRIMARY KEY (`url_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=817 ;

--
-- Dumping data for table `mini_shortener`
--

INSERT INTO `mini_shortener` (`url_id`, `url`, `code`) VALUES


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
