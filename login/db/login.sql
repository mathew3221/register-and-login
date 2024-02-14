-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2024 at 12:24 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `status`) VALUES
(9, 'mathew', 'john', 'mathew.mediatrixs@gmail.com', '$2y$10$kxCRSN8X2BqVpO.kG1HREeAgRTUIsu5S2kfa5gvcmFfgsuy0Oempi', 1),
(10, 'mathew', 'john', 'mathew@gmail.com', '$2y$10$oIPXTPiu793/5uSkpZkMU.HLHcLFSTvDtdYn3ZxjjswoNTi2ybLx.', 1),
(11, 'mathew', 'john', 'mathew@gmail.com', '$2y$10$G2DY8NbOXNtGTGqmAbeUhOy7Oj.yU8FENEZrX6C6CcoVkooBuCkJu', 1),
(12, 'mathew', 'john', 'mathew@gmail.com', '$2y$10$q8tiqUdVR7ZhQM4BlI3JtOAd1Oo2xS7imkPrTmCDNAzdZx7z3L4WK', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
