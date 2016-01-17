-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2016 at 09:38 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jolchapbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_logo`
--

CREATE TABLE IF NOT EXISTS `card_logo` (
  `id` int(10) NOT NULL,
  `design_id` int(10) NOT NULL,
  `path` text NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card_text`
--

CREATE TABLE IF NOT EXISTS `card_text` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `design_id` int(10) NOT NULL,
  `text` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `font_family` varchar(50) NOT NULL,
  `font_size` varchar(50) NOT NULL,
  `top_pos` varchar(50) NOT NULL,
  `left_pos` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `card_text`
--

INSERT INTO `card_text` (`id`, `design_id`, `text`, `color`, `font_family`, `font_size`, `top_pos`, `left_pos`, `type`) VALUES
(6, 1, 'Sydur Rahaman', 'rgb(251, 255, 25)', 'Roboto, sans-serif', '19px', '60px', '120px', 'front'),
(7, 1, 'Software Engineer', 'rgb(82, 148, 255)', 'Roboto, sans-serif', '14px', '93px', '176.344px', 'front'),
(8, 1, 'sujon335@yahoo.com', 'rgb(184, 255, 31)', 'Roboto, sans-serif', '14px', '250px', '350px', 'front'),
(9, 1, '+8801673941126', 'rgb(25, 255, 236)', 'Roboto, sans-serif', '14px', '274px', '373.344px', 'front'),
(10, 2, 'bahar', 'rgb(255, 230, 41)', 'Roboto, sans-serif', '19px', '60px', '120px', 'front'),
(11, 2, 'engineer', 'rgb(31, 117, 255)', 'Algerian', '19px', '35.5px', '116.844px', 'front'),
(12, 2, 'bahar@yahoo.com', 'rgb(126, 255, 46)', 'Roboto, sans-serif', '14px', '301px', '53.844px', 'front'),
(13, 2, '016474599555', 'rgb(128, 249, 255)', 'Roboto, sans-serif', '14px', '324px', '91.344px', 'front'),
(14, 3, 'Rishad Rizwan', 'rgb(51, 143, 255)', 'Roboto, sans-serif', '14px', '30px', '73.8438px', 'front'),
(15, 3, 'ME', 'rgb(193, 255, 36)', 'Roboto, sans-serif', '14px', '52px', '75.844px', 'front'),
(16, 3, 'rrr@gmail.com', 'rgb(56, 126, 255)', 'Roboto, sans-serif', '19px', '270px', '305.344px', 'front'),
(17, 3, '016754425265', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '300px', '350px', 'front');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE IF NOT EXISTS `design` (
  `design_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `paper` varchar(50) NOT NULL,
  `lamination` varchar(50) NOT NULL,
  PRIMARY KEY (`design_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`design_id`, `user_id`, `product_id`, `dimension`, `paper`, `lamination`) VALUES
(1, 1, 12, '4x6', 'Paper 1', 'Glossy'),
(2, 3, 11, '3x5', 'Paper 2', 'Matt'),
(3, 1, 14, '4x6', 'Paper 1', 'Matt');

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE IF NOT EXISTS `featured_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `product_id`) VALUES
(1, 13),
(2, 12),
(4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mobile_phone` varchar(50) NOT NULL,
  `fax` text NOT NULL,
  `message` text NOT NULL,
  `Total` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `company_name`, `email`, `title`, `first_name`, `middle_name`, `last_name`, `address1`, `address2`, `postal_code`, `country`, `state`, `phone`, `mobile_phone`, `fax`, `message`, `Total`) VALUES
(2, 1, 'abc', 'sujon335@yahoo.com', '"Countdown of cultural night" ', 'Saidur ', '', 'Rahman', 'House NO:60 BLOCK :B ROAD NO: 3 ', '0', '0', 'Bangladesh', 'Bangladesh', '', '+8801673941126', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_design`
--

CREATE TABLE IF NOT EXISTS `order_design` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_design`
--

INSERT INTO `order_design` (`id`, `order_id`, `design_id`, `quantity`) VALUES
(1, 3, 1, 2),
(2, 3, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_unit` int(11) NOT NULL,
  `featured_image` varchar(250) NOT NULL,
  `front_side` varchar(250) NOT NULL,
  `back_side` varchar(250) NOT NULL,
  `dimension_price_1` varchar(30) NOT NULL,
  `dimension_price_2` varchar(30) NOT NULL,
  `dimension_price_3` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_unit`, `featured_image`, `front_side`, `back_side`, `dimension_price_1`, `dimension_price_2`, `dimension_price_3`) VALUES
(10, 'my product one', 'product description', 500, '5ca3cf7fbce770e3314713bba98688ae.jpg', '35dfddeb196183daa2198e99fb508fc9.jpg', '31df348174ccb4fa32dcb4294b99edb0.jpg', '1-10', '2-20', '3-30'),
(11, 'Creative visual product 20', 'product desc 10 200', 500, 'dd6cde2e9ac5c2b5f233400b3fd8bf25.jpg', 'e6b3142aa656d5b045849298245d47ed.jpg', 'd36c82a5b718cbd7ae07af8390e8e2b4.jpg', '3x3-300', '5x5-800', '7x7-1000'),
(12, 'featured product', 'product description.', 500, 'a48b24e9d93d0c25b79cecf9320293c1.jpg', 'bc2d45301c8447dd67b80a7a3ee68345.jpg', '09b4e5cb2b3fb2d66ab792de5bd2eb00.jpg', '5x6-200', '4x5-300', '5x6-250'),
(13, 'great product', 'product details', 200, '0c61c67cb1b065744512baeed781ed74.jpg', 'c6691a2779b0817ed7d2bad465537414.jpg', '071f4c4317ba2021d18b5d39e406ca8e.jpg', '5x3-300', '7x3-250', '6x4-300'),
(14, 'test ', 'test dest', 100, 'b98788a89d2014338d9abd80fd3eca08.jpg', 'f8b5c7c8fe9472ceb1607f1bf6a262df.jpg', 'c933afc841c9d4f0ece1ed9bad96404f.jpg', '2x2-100', '3x3-200', '3x4-409');

-- --------------------------------------------------------

--
-- Table structure for table `recommended_products`
--

CREATE TABLE IF NOT EXISTS `recommended_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recommended_products`
--

INSERT INTO `recommended_products` (`id`, `product_id`) VALUES
(2, 11),
(3, 11),
(4, 11),
(5, 12),
(6, 14);

-- --------------------------------------------------------

--
-- Table structure for table `temp_order_design`
--

CREATE TABLE IF NOT EXISTS `temp_order_design` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fb_id` varchar(250) NOT NULL,
  `gmail_id` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `fb_id`, `gmail_id`) VALUES
(1, 'test@test.com', '1234', 'test', '', ''),
(2, 'konokhabibullah@gmail.com', '123456', 'Habibullah Araphat', '', ''),
(3, 'sujon335@yahoo.com', '1234', 'sujon', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
