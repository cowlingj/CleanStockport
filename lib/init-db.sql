
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2017 at 08:03 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u663636442_db01`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `postcode` varchar(8) NOT NULL,
  `description` text,
  `price` decimal(5,2) NOT NULL,
  `datesubmitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` tinyint(1) DEFAULT '0',
  `contactemail` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `postcode`, `description`, `price`, `datesubmitted`, `approved`, `contactemail`, `image`) VALUES
(36, 'cleanup', 'sk6 8rt', '', '9.00', '2017-03-04 19:03:29', 0, '', '001'),
(29, 'Clean my park', 'SK1 5EX', 'Littered park to be cleaned, bottles need picking up.', '9.00', '2017-03-04 18:32:32', 0, '', '005'),
(27, 'Litter Picking at Hall Lane', 'SK6 4XT', 'Contribute to your community by helping us cleanup litter at Hall Lane.', '8.00', '2017-03-04 18:26:24', 0, '', '002'),
(24, 'Backyard needs cleaning', 'SK1 3UR', 'Whole of backyard to be cleaned. Raking and weeding required.', '10.00', '2017-03-04 18:24:27', 0, '', '003'),
(41, 'Litter cleanup at park', 'SK6 2TG', '', '7.00', '2017-03-04 18:36:35', 0, '', '008'),
(49, '', '', '', '0.00', '2017-03-04 19:36:41', 0, '', ''),
(39, 'Clean my park', 'SK1 5EX', 'Park needs cleaning. Litter to be picked up', '8.00', '2017-03-04 19:03:05', 0, '', '004'),
(32, 'Park Cleanup', 'SK6 2PD', '', '7.50', '2017-03-04 18:30:48', 0, '', '003'),
(44, 'litter cleaning session', 'sk5 4YL', '', '7.00', '2017-03-04 18:41:06', 0, '', '009'),
(48, 'clean my yard', 'SK1 3UR', 'yard needs cleaning', '6.00', '2017-03-04 19:26:32', 0, '', ''),
(47, '', '', '', '0.00', '2017-03-04 19:25:56', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
