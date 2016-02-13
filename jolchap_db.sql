-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 13, 2016 at 12:46 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jolchap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`, `name`, `role`) VALUES
(1, 'konokhabibullah@gmail.com', '123', 'Habibullah Araphat', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(1, 1454762742, '::1', 'ae74e'),
(2, 1454762789, '::1', '80717'),
(3, 1454762792, '::1', '64024'),
(4, 1454762817, '::1', '47549'),
(5, 1454762849, '::1', '5001f'),
(6, 1454762866, '::1', 'ce9df'),
(7, 1454762881, '::1', '827c0'),
(8, 1454763024, '::1', 'e1491'),
(9, 1454763045, '::1', '195ba'),
(10, 1454763262, '::1', '31342'),
(11, 1454763262, '::1', 'a8b20'),
(12, 1454763276, '::1', '2d122'),
(13, 1454763276, '::1', '3d11c'),
(14, 1454763325, '::1', 'a446c'),
(15, 1454763325, '::1', '9ac83'),
(16, 1454763373, '::1', '81372'),
(17, 1454763373, '::1', '191ed'),
(18, 1454763988, '::1', 'f64eb'),
(19, 1454763988, '::1', '762f2'),
(20, 1454764200, '::1', '2f142'),
(21, 1454764200, '::1', '08f69'),
(22, 1454764235, '::1', '6a016'),
(23, 1454764235, '::1', '30365'),
(24, 1454764258, '::1', '06aad'),
(25, 1454764258, '::1', '2636c'),
(26, 1454764774, '::1', '5379c'),
(27, 1454764774, '::1', '485f7'),
(28, 1454764865, '::1', '17198'),
(29, 1454764865, '::1', '4a6c8'),
(30, 1454764870, '::1', 'a853d'),
(31, 1454764870, '::1', '58ac0'),
(32, 1454764963, '::1', 'e2866'),
(33, 1454764963, '::1', '6da11'),
(34, 1454764965, '::1', 'a4b63'),
(35, 1454764965, '::1', 'e4da0'),
(36, 1454765034, '::1', 'f884e'),
(37, 1454765034, '::1', 'ff5a4'),
(38, 1454765037, '::1', '50489'),
(39, 1454765037, '::1', '6896d'),
(40, 1454765072, '::1', '5788e'),
(41, 1454765072, '::1', '12d3b'),
(42, 1454765074, '::1', '314d2'),
(43, 1454765074, '::1', '24665'),
(44, 1454765177, '::1', '3dacb'),
(45, 1454765177, '::1', 'c5133'),
(46, 1454765203, '::1', 'f06e3'),
(47, 1454765203, '::1', 'c6af3'),
(48, 1454765368, '::1', '379b1'),
(49, 1454765368, '::1', '0cf32'),
(50, 1454765393, '::1', '47e0c'),
(51, 1454765393, '::1', '71081'),
(52, 1454765925, '::1', '8474e'),
(53, 1454765925, '::1', 'dc827'),
(54, 1454766044, '::1', '8ebc4'),
(55, 1454766044, '::1', 'efed5'),
(56, 1454766047, '::1', '119f7'),
(57, 1454766047, '::1', 'a4c84'),
(58, 1454766103, '::1', '87e72'),
(59, 1454766103, '::1', 'e8011'),
(60, 1454766128, '::1', 'c345b'),
(61, 1454766128, '::1', 'ab5db'),
(62, 1454766153, '::1', '08cf5'),
(63, 1454766153, '::1', 'c226f'),
(64, 1454766603, '::1', 'd47b0a1'),
(65, 1454766650, '::1', 'ea0d213'),
(66, 1454766676, '::1', '0bea0f2'),
(67, 1454766708, '::1', 'cfd9ba8'),
(68, 1454766870, '::1', '101d1ee'),
(69, 1454766896, '::1', '2a87c'),
(70, 1454766911, '::1', '422af'),
(71, 1454766945, '::1', '8fa7e'),
(72, 1454766987, '::1', '4b5d3'),
(73, 1454767009, '::1', '9341f'),
(74, 1454767087, '::1', '2770a'),
(75, 1454767104, '::1', '38d2e'),
(76, 1454767156, '::1', '8e8d6'),
(77, 1454767167, '::1', 'c734b'),
(78, 1454767253, '::1', '5c9e0'),
(79, 1454767272, '::1', '00dbe'),
(80, 1454767286, '::1', '8b538'),
(81, 1454767302, '::1', 'a276e'),
(82, 1454767387, '::1', '249d0'),
(83, 1454767387, '::1', '46f98'),
(84, 1454769594, '::1', 'b5daf'),
(85, 1454769594, '::1', 'a197a'),
(86, 1454769662, '::1', '11508'),
(87, 1454769662, '::1', '011b1'),
(88, 1454776268, '::1', '5e9fb'),
(89, 1454776268, '::1', 'b723a'),
(90, 1454776603, '::1', '94db9'),
(91, 1455179617, '::1', '964f7'),
(92, 1455179618, '::1', '9a59f'),
(93, 1455179643, '::1', '24d27'),
(94, 1455179643, '::1', '42f7d'),
(95, 1455180452, '::1', '5808f'),
(96, 1455180840, '::1', 'db4d6'),
(97, 1455180866, '::1', 'dbb16'),
(98, 1455180866, '::1', '1686e'),
(99, 1455180891, '::1', '7b1ca'),
(100, 1455180891, '::1', 'ac0dc'),
(101, 1455180908, '::1', 'fb490'),
(102, 1455180909, '::1', '7e117'),
(103, 1455181873, '::1', '5fa32'),
(104, 1455181873, '::1', '663bc'),
(105, 1455182337, '::1', '49fe4'),
(106, 1455182337, '::1', '31c4f'),
(107, 1455182547, '::1', 'bafff'),
(108, 1455182547, '::1', '072cb'),
(109, 1455182902, '::1', '772b3'),
(110, 1455182902, '::1', 'ba975'),
(111, 1455183074, '::1', '72565'),
(112, 1455183074, '::1', 'a7d53'),
(113, 1455183160, '::1', '1243c'),
(114, 1455183160, '::1', 'b2ec7'),
(115, 1455183239, '::1', '13c89'),
(116, 1455183239, '::1', 'f0762'),
(117, 1455183333, '::1', '8ef82'),
(118, 1455183334, '::1', 'e85de'),
(119, 1455183419, '::1', 'bc9d9'),
(120, 1455183419, '::1', '03946'),
(121, 1455183526, '::1', '1c29b'),
(122, 1455183526, '::1', '7fca0'),
(123, 1455183628, '::1', '3a2cf'),
(124, 1455183628, '::1', '9d3d3'),
(125, 1455183758, '::1', '7d039'),
(126, 1455183758, '::1', 'b589f'),
(127, 1455183943, '::1', 'a3742'),
(128, 1455183943, '::1', '2f694'),
(129, 1455184772, '::1', 'f1eb2'),
(130, 1455184772, '::1', '7dbf8'),
(131, 1455186007, '::1', 'ed2c8'),
(132, 1455186007, '::1', '2d3c8'),
(133, 1455186667, '::1', 'd3cd9'),
(134, 1455186667, '::1', 'b7c9c'),
(135, 1455359341, '::1', '7c414'),
(136, 1455359341, '::1', 'd1e38'),
(137, 1455361253, '::1', 'ff32a'),
(138, 1455361253, '::1', '1e58f'),
(139, 1455362574, '::1', 'cdd02'),
(140, 1455362575, '::1', '65773'),
(141, 1455362747, '::1', '395af'),
(142, 1455362747, '::1', '0420e'),
(143, 1455363051, '::1', '78538'),
(144, 1455363051, '::1', '4753f'),
(145, 1455363235, '::1', '03c6c'),
(146, 1455363235, '::1', '34a57'),
(147, 1455363469, '::1', 'cbd91'),
(148, 1455363469, '::1', '03512'),
(149, 1455363564, '::1', 'ab4ff');

-- --------------------------------------------------------

--
-- Table structure for table `card_logo`
--

CREATE TABLE IF NOT EXISTS `card_logo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `design_id` int(10) NOT NULL,
  `path` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `top` varchar(50) NOT NULL,
  `left` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `card_logo`
--

INSERT INTO `card_logo` (`id`, `design_id`, `path`, `type`, `top`, `left`, `height`, `width`) VALUES
(5, 31, 'http://localhost/jolchapbd/uploads/3d52c0ea81be725b21ef9d6cd65644e1.jpg', 'front', '52.5px', '177.844px', '115px', '115px'),
(6, 31, 'http://localhost/jolchapbd/uploads/81c47e04a3009dd3481996cd6fa0f799.jpg', 'back', '54px', '27.344px', '123px', '123px');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `card_text`
--

INSERT INTO `card_text` (`id`, `design_id`, `text`, `color`, `font_family`, `font_size`, `top_pos`, `left_pos`, `type`) VALUES
(62, 15, 'sydur Rahaman sujon', 'rgb(13, 17, 255)', 'Roboto, sans-serif', '19px', '200px', '200px', 'front'),
(63, 15, ' sujon335@yahoo.com', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '229px', '228.844px', 'front'),
(66, 16, ' Rishad Rizwan', 'rgb(31, 64, 255)', 'Roboto, sans-serif', '19px', '80.5px', '53.844px', 'front'),
(67, 16, 'ME Engineer', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '119px', '119.344px', 'front'),
(72, 27, 'hobe re hobe', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '19px', '200px', '200px', 'front'),
(76, 29, 'Sydur', 'rgb(42, 31, 255)', 'Roboto, sans-serif', '24px', '80px', '108.844px', 'front'),
(77, 29, 'software Engineer', 'rgb(97, 168, 255)', 'Roboto, sans-serif', '19px', '146.5px', '202.844px', 'front'),
(78, 29, 'Rahaman', 'rgb(23, 255, 35)', 'Roboto, sans-serif', '19px', '124.5px', '243.344px', 'back'),
(79, 29, 'sujon', 'rgb(255, 56, 219)', 'Roboto, sans-serif', '14px', '169px', '301.344px', 'back'),
(84, 31, 'okkkkk', 'rgb(31, 79, 255)', 'Roboto, sans-serif', '24px', '200px', '200px', 'front'),
(85, 31, 'jonas', 'rgb(202, 66, 255)', 'Roboto, sans-serif', '24px', '118px', '244.344px', 'back');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`design_id`, `user_id`, `product_id`, `dimension`, `paper`, `lamination`) VALUES
(15, 1, 16, '3x5', 'Paper 1', 'Matt'),
(16, 1, 15, '3x5', 'Paper 1', 'Matt'),
(29, 3, 16, '3x5', 'Paper 1', 'Matt'),
(31, 3, 15, '3x5', 'Paper 1', 'Matt');

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
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
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
  `status` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_unit`, `featured_image`, `front_side`, `back_side`, `dimension_price_1`, `dimension_price_2`, `dimension_price_3`) VALUES
(-14, 'test ', 'test dest', 100, 'b98788a89d2014338d9abd80fd3eca08.jpg', 'f8b5c7c8fe9472ceb1607f1bf6a262df.jpg', 'c933afc841c9d4f0ece1ed9bad96404f.jpg', '2x2-100', '3x3-200', '3x4-409'),
(-13, 'great product', 'product details', 200, '0c61c67cb1b065744512baeed781ed74.jpg', 'c6691a2779b0817ed7d2bad465537414.jpg', '071f4c4317ba2021d18b5d39e406ca8e.jpg', '5x3-300', '7x3-250', '6x4-300'),
(-12, 'featured product', 'product description.', 500, 'a48b24e9d93d0c25b79cecf9320293c1.jpg', 'bc2d45301c8447dd67b80a7a3ee68345.jpg', '09b4e5cb2b3fb2d66ab792de5bd2eb00.jpg', '5x6-200', '4x5-300', '5x6-250'),
(-11, 'Creative visual product 20', 'product desc 10 200', 500, 'dd6cde2e9ac5c2b5f233400b3fd8bf25.jpg', 'e6b3142aa656d5b045849298245d47ed.jpg', 'd36c82a5b718cbd7ae07af8390e8e2b4.jpg', '3x3-300', '5x5-800', '7x7-1000'),
(-10, 'my product one', 'product description', 500, '5ca3cf7fbce770e3314713bba98688ae.jpg', '35dfddeb196183daa2198e99fb508fc9.jpg', '31df348174ccb4fa32dcb4294b99edb0.jpg', '1-10', '2-20', '3-30'),
(15, 'Business Card', 'Fine quality product.', 500, '6534fde339b9e2099b445be10b2c31c7.jpeg', '88d152646d0b0761dfee2c9097da8163.jpeg', '8baef79fb776c7a2f3cf0104a87094a7.jpeg', '2x3-200', '3x5-300', '4x5-325'),
(16, 'sample', 'descript', 500, '8ae12b6d058d6f77034547f3cc381ef0.jpg', '7c5179549ce01b1dede52e92cf39a1fb.jpg', '78c5d26193a73efb03fd2d37300e5dc8.jpg', '2*2-100', '3*3-200', '5*7-300');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `fb_id`, `gmail_id`) VALUES
(1, 'test@test.com', '1234', 'test', '', ''),
(2, 'konokhabibullah@gmail.com', '123456', 'Habibullah Araphat', '', ''),
(3, 'sujon335@yahoo.com', '1234', 'sujon', '', ''),
(4, 'hey@you.com', '123', 'my_id', '', ''),
(5, 'hey@fuck.com', '123', 'Habib Araphat', '', ''),
(6, '', '', 'Konok Habibullah Araphat', '10201272362647010', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
