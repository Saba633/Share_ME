-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2023 at 10:50 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `share_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `email`, `password`) VALUES
(2, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(125) NOT NULL,
  `email_id` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `role` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `full_name`, `email_id`, `password`, `role`) VALUES
(12, 'user1', 'user1@gmail.com', 'user1', 'user'),
(13, 'user2', 'user2@gmail.com', 'user2', 'user'),
(14, 'user3', 'user3@gmail.com', 'user3', 'user'),
(16, 'saba', 'saba@gmail.com', 'saba', 'user'),
(17, 'user5', 'user5@gmail.com', 'user5', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `image`, `category`) VALUES
(1, 'UploadedByUser/download (4).jpg', 'Food'),
(2, 'UploadedByUser/d536e007ab2344f80f55899865d18d5b--baby-foxes-baby-red-fox.jpg', 'Animal'),
(3, 'UploadedByUser/yin-yang-99824_1280 (1).png', 'Logo'),
(4, 'UploadedByUser/z5.jpg', 'photography'),
(5, 'UploadedByUser/mjmichael-henry-5OyGRn_r9Y4-unsplash.jpg', 'photography'),
(6, 'UploadedByUser/naraa-in-ub-2k_z-YJjE-k-unsplash.jpg', 'photography'),
(7, 'UploadedByUser/joshua-woroniecki-lzh3hPtJz9c-unsplash.jpg', 'Random'),
(8, 'UploadedByUser/download (5).jpg', 'Animal'),
(9, 'UploadedByUser/green nature images.jpg (38).jpeg', 'Nature'),
(10, 'UploadedByUser/shutterstock_376532611-og.jpg', 'Random'),
(11, 'UploadedByUser/download (3).jpg', 'Random'),
(12, 'UploadedByUser/download (4).jpg', 'Random'),
(13, 'UploadedByUser/images (5).jpg', 'Food');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
