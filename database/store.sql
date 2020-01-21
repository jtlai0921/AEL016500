-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2014 at 03:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE IF NOT EXISTS `product_list` (
  `book_no` varchar(20) NOT NULL DEFAULT '',
  `book_name` varchar(30) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`book_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`book_no`, `book_name`, `price`) VALUES
('EE0018', '最新計算機概論', 560),
('EE0069', '電腦網路概論與實務', 580),
('EL0063', 'ASP.NET 4.5 網頁程式設計', 580),
('EN0010', '網路概論', 580),
('P766', 'PHP & MySQL', 580),
('P816', 'Visual Basic 2013 程式設計', 560),
('P818', 'Visual C# 2013 程式設計', 580);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
