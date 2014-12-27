-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2014 at 05:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `add_date` date NOT NULL,
  `title` text NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `add_date`, `title`, `author_id`) VALUES
(2, '2014-02-09', 'Title2', 2),
(3, '2015-01-01', 'New Year!', 9),
(4, '2014-02-09', 'Activity', 8),
(5, '2013-04-09', 'Tamojnaya Sayutz', 7),
(6, '2012-10-01', 'Obama vs Putin', 6),
(7, '2013-01-12', 'PHP Developer', 5),
(8, '2014-08-09', 'Hello World', 4),
(9, '2013-08-09', 'HTML', 2),
(10, '2010-08-09', 'Manas University', 3),
(11, '2011-08-09', 'Rezume', 3),
(12, '2013-08-09', 'YouTube', 10),
(13, '2011-08-09', 'Facebook', 4),
(14, '2014-08-09', 'Title', 9),
(15, '2014-08-09', 'Insert into', 9),
(16, '2015-08-09', 'PHP', 1),
(17, '2016-08-09', 'SQL', 1),
(18, '2018-12-04', '1as', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
