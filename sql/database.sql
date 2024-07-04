i-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 07:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `residents`
--
DROP DATABASE IF EXISTS `residents`;
CREATE DATABASE IF NOT EXISTS `residents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `residents`;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE IF NOT EXISTS `genders` (
  `gender` varchar(30) DEFAULT NULL,
  `genderId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`genderId`),
  UNIQUE KEY `gender` (`gender`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`gender`, `genderId`, `datecreated`, `dateupdated`) VALUES
('Male', 1, '2024-06-24 10:33:37', '2024-06-24 10:33:37'),
('Female', 2, '2024-06-24 10:33:37', '2024-06-24 10:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

DROP TABLE IF EXISTS `homes`;
CREATE TABLE IF NOT EXISTS `homes` (
  `hometype` varchar(30) DEFAULT NULL,
  `homeId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`homeId`),
  UNIQUE KEY `hometype` (`hometype`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`hometype`, `homeId`, `datecreated`, `dateupdated`) VALUES
('two-bedroomed house', 1, '2024-06-24 10:38:21', '2024-06-24 10:38:21'),
('three-bedroomed house', 2, '2024-06-24 10:38:21', '2024-06-24 10:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `userId` bigint(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(60) DEFAULT NULL,
  `telephoneNumber` bigint(10) DEFAULT NULL,
  `homeId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `telephoneNumber` (`telephoneNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
