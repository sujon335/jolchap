-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2016 at 06:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jolchap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `email`, `password`, `name`, `role`) VALUES
(1, 'konokhabibullah@gmail.com', '123', 'Habibullah Araphat', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(90, 1454776603, '::1', '94db9');

-- --------------------------------------------------------

--
-- Table structure for table `card_logo`
--

CREATE TABLE `card_logo` (
  `id` int(10) NOT NULL,
  `design_id` int(10) NOT NULL,
  `path` text NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card_text`
--

CREATE TABLE `card_text` (
  `id` int(10) NOT NULL,
  `design_id` int(10) NOT NULL,
  `text` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `font_family` varchar(50) NOT NULL,
  `font_size` varchar(50) NOT NULL,
  `top_pos` varchar(50) NOT NULL,
  `left_pos` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(17, 3, '016754425265', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '300px', '350px', 'front'),
(18, 4, 'hello', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '60px', '120px', 'front'),
(19, 4, 'there', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '80px', '150px', 'front'),
(20, 4, '', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '250px', '350px', 'front'),
(21, 4, '', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '300px', '350px', 'front'),
(22, 5, 'fdfdfdf', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '200px', '200px', 'front'),
(37, 6, '   fdfddfdf', 'rgb(110, 170, 255)', 'Roboto, sans-serif', '34px', '200px', '200px', 'front'),
(38, 6, '   fdfdfdfdfdf', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '200px', '200px', 'front'),
(39, 6, '  gdfgdfg', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '263px', '156.844px', 'front'),
(40, 6, ' abc', 'rgb(255, 231, 48)', 'Roboto, sans-serif', '24px', '129px', '59.844px', 'front'),
(41, 6, 'jhjkhjkhkjh', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '130px', '246.344px', 'front'),
(42, 7, 'retetert', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(43, 7, 'fsdfsdfsf', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '252px', '254.172px', 'front'),
(44, 7, 'sdfs', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(45, 7, 'fssdfs', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '179px', '304.172px', 'front'),
(46, 7, 'sdfsdf', 'rgb(64, 77, 255)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '24px', '114px', '232.672px', 'front'),
(47, 8, 'fdgdfg', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(48, 8, 'dfgdfg', 'rgb(38, 118, 255)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '24px', '229px', '204.672px', 'front'),
(49, 9, 'jhghj', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(50, 9, 'ghjghj', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '230px', '236.172px', 'front'),
(51, 10, 'fdgdfg', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(52, 10, 'dfgdfg', 'rgb(38, 118, 255)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '24px', '229px', '204.672px', 'front'),
(53, 10, 'dsfsfdsf123', 'rgb(255, 150, 229)', 'Roboto, sans-serif', '49px', '200px', '200px', 'front'),
(54, 11, 'fdgdfg', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(55, 11, 'dfgdfg', 'rgb(38, 118, 255)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '24px', '229px', '204.672px', 'front'),
(56, 12, 'fdgdfg', 'rgb(51, 51, 51)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '14px', '200px', '200px', 'front'),
(57, 12, 'dfgdfg', 'rgb(38, 118, 255)', '''Source Sans Pro'', ''Helvetica Neue'', Helvetica, Ar', '24px', '229px', '204.672px', 'front'),
(58, 13, 'Habibullah Araphat', 'rgb(36, 178, 255)', '''Agency FB''', '24px', '124px', '53.344px', 'front'),
(59, 14, 'Habibullah araphat', 'rgb(51, 51, 51)', 'Roboto, sans-serif', '14px', '134px', '89.344px', 'front');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `design_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `paper` varchar(50) NOT NULL,
  `lamination` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`design_id`, `user_id`, `product_id`, `dimension`, `paper`, `lamination`) VALUES
(1, 1, 12, '4x6', 'Paper 1', 'Glossy'),
(2, 3, 11, '3x5', 'Paper 2', 'Matt'),
(3, 1, 14, '4x6', 'Paper 1', 'Matt'),
(4, 2, 14, '3x5', 'Paper 1', 'Matt'),
(5, 2, 12, '3x5', 'Paper 1', 'Matt'),
(6, 2, 12, '3x5', 'Paper 1', 'Matt'),
(7, 2, 12, '3x5', 'Paper 1', 'Matt'),
(8, -1, 12, '3x5', 'Paper 1', 'Matt'),
(10, 2, 12, '3x5', 'Paper 1', 'Matt'),
(11, 0, 12, '3x5', 'Paper 1', 'Matt'),
(12, 0, 12, '3x5', 'Paper 1', 'Matt'),
(13, 0, 13, '4x6', 'Paper 2', 'Glossy'),
(14, 2, 13, '3x5', 'Paper 1', 'Matt');

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
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
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `company_name`, `email`, `title`, `first_name`, `middle_name`, `last_name`, `address1`, `address2`, `postal_code`, `country`, `state`, `phone`, `mobile_phone`, `fax`, `message`, `Total`, `status`, `datetime`) VALUES
(2, 1, 'abc', 'sujon335@yahoo.com', '"Countdown of cultural night" ', 'Saidur ', '', 'Rahman', 'House NO:60 BLOCK :B ROAD NO: 3 ', '0', '0', 'Bangladesh', 'Bangladesh', '', '+8801673941126', '', '', '', 4, '0000-00-00 00:00:00'),
(3, 2, 'test', 'my email', 'test', 'my name', 'my m name', 'my L name', 'a1', '0', '0', 'Bangladesh', '-- State / Province / Region --', '+8801710358518', '123456', '123', '1', '', -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_design`
--

CREATE TABLE `order_design` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_unit` int(11) NOT NULL,
  `featured_image` varchar(250) NOT NULL,
  `front_side` varchar(250) NOT NULL,
  `back_side` varchar(250) NOT NULL,
  `dimension_price_1` varchar(30) NOT NULL,
  `dimension_price_2` varchar(30) NOT NULL,
  `dimension_price_3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_unit`, `featured_image`, `front_side`, `back_side`, `dimension_price_1`, `dimension_price_2`, `dimension_price_3`) VALUES
(-14, 'test ', 'test dest', 100, 'b98788a89d2014338d9abd80fd3eca08.jpg', 'f8b5c7c8fe9472ceb1607f1bf6a262df.jpg', 'c933afc841c9d4f0ece1ed9bad96404f.jpg', '2x2-100', '3x3-200', '3x4-409'),
(-13, 'great product', 'product details', 200, '0c61c67cb1b065744512baeed781ed74.jpg', 'c6691a2779b0817ed7d2bad465537414.jpg', '071f4c4317ba2021d18b5d39e406ca8e.jpg', '5x3-300', '7x3-250', '6x4-300'),
(-12, 'featured product', 'product description.', 500, 'a48b24e9d93d0c25b79cecf9320293c1.jpg', 'bc2d45301c8447dd67b80a7a3ee68345.jpg', '09b4e5cb2b3fb2d66ab792de5bd2eb00.jpg', '5x6-200', '4x5-300', '5x6-250'),
(-11, 'Creative visual product 20', 'product desc 10 200', 500, 'dd6cde2e9ac5c2b5f233400b3fd8bf25.jpg', 'e6b3142aa656d5b045849298245d47ed.jpg', 'd36c82a5b718cbd7ae07af8390e8e2b4.jpg', '3x3-300', '5x5-800', '7x7-1000'),
(-10, 'my product one', 'product description', 500, '5ca3cf7fbce770e3314713bba98688ae.jpg', '35dfddeb196183daa2198e99fb508fc9.jpg', '31df348174ccb4fa32dcb4294b99edb0.jpg', '1-10', '2-20', '3-30'),
(15, 'Business Card', 'Fine quality product.', 500, '6534fde339b9e2099b445be10b2c31c7.jpeg', '88d152646d0b0761dfee2c9097da8163.jpeg', '8baef79fb776c7a2f3cf0104a87094a7.jpeg', '2x3-200', '3x5-300', '4x5-325');

-- --------------------------------------------------------

--
-- Table structure for table `recommended_products`
--

CREATE TABLE `recommended_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `temp_order_design` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `design_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_order_design`
--

INSERT INTO `temp_order_design` (`id`, `user_id`, `design_id`, `quantity`) VALUES
(1, 2, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `fb_id` varchar(250) NOT NULL,
  `gmail_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `card_logo`
--
ALTER TABLE `card_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_text`
--
ALTER TABLE `card_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_design`
--
ALTER TABLE `order_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommended_products`
--
ALTER TABLE `recommended_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_order_design`
--
ALTER TABLE `temp_order_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `card_text`
--
ALTER TABLE `card_text`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `design_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_design`
--
ALTER TABLE `order_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `recommended_products`
--
ALTER TABLE `recommended_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `temp_order_design`
--
ALTER TABLE `temp_order_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
