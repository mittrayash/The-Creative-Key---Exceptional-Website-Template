-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2017 at 04:44 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urjentupccodes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `barcodes`
--

CREATE TABLE IF NOT EXISTS `barcodes` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`srno`),
  UNIQUE KEY `barcode` (`barcode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `barcodes`
--

INSERT INTO `barcodes` (`srno`, `barcode`, `status`) VALUES
(26, '9880766014\r\n', 1),
(27, '9813838373\r\n', 1),
(28, '7069688676\r\n', 1),
(29, '7760319876\r\n', 1),
(30, '2265758111\r\n', 1),
(31, '9201122000\r\n', 1),
(32, '9030800877\r\n', 1),
(33, '9873469643\r\n', 1),
(34, '8194812657\r\n', 1),
(35, '9246766660\r\n', 1),
(36, '9323195965\r\n', 1),
(37, '9987002023\r\n', 1),
(38, '9952122293\r\n', 1),
(39, '7022475597\r\n', 1),
(40, '7028956826\r\n', 1),
(41, '7045211995\r\n', 1),
(42, '7060862610\r\n', 1),
(43, '7122549929\r\n', 1),
(44, '7208081313\r\n', 1),
(45, '7249155887\r\n', 1),
(46, '7249430043\r\n', 1),
(47, '7278375826\r\n', 1),
(48, '7304961486\r\n', 1),
(49, '7309034343\r\n', 1),
(50, '7357643003\r\n', 1),
(51, '7385337007\r\n', 1),
(52, '7387536713\r\n', 1),
(53, '7404777774\r\n', 1),
(54, '7406220430\r\n', 1),
(55, '7411033662\r\n', 1),
(56, '7414971427\r\n', 1),
(57, '7483123051\r\n', 1),
(58, '7498992615\r\n', 1),
(59, '7503216163\r\n', 1),
(60, '7506243455\r\n', 1),
(61, '7507998515\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `postitle` varchar(225) NOT NULL,
  `postdesc` varchar(225) NOT NULL,
  `postcontent` varchar(225) NOT NULL,
  `postdate` date NOT NULL,
  `postimage` varchar(255) NOT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`postID`, `postitle`, `postdesc`, `postcontent`, `postdate`, `postimage`) VALUES
(25, 'Intern Story| What It Is Like To Work at TCK.', 'To be very honest, this blog is harder to write than my pending Theatre and Communication assignment (and mind you, the Theatre and Communication assignment requires I read Twelfth Night twice).\r\n \r\nThe problem is that I neve', 'http://www.thecreativekey.com/wordpressblog/intern-story-what-it-is-like-to-work-at-tck/', '0000-00-00', 'images/WhatsApp_Image_2017-02-17_at_4.31.09_PM.jpeg'),
(72, 'How To Engage Your Followers On Social Media Platforms?', '<p>Having difficulty reaching out to your followers? Do you have 10k+ following but hardly anybody reacting to your posts?Â Learn how to engage with your social media followers with Examples!</p>', 'http://www.thecreativekey.com/wordpressblog/how-to-engage-your-followers-on-social-media-platforms-learn-with-examples/', '2017-06-19', 'images/ENGAGE YOUR SOCIAL MEDIA FOLLOWERS LIKE A PRO.png'),
(71, 'Tweets From The Ind-Pak Final To Sum Up That Roller Coaster', '<p>Watching the Final was not easy. We still haven''t recovered. Maybe if we try to laugh about it we''ll all feel better?</p>', 'http://www.thecreativekey.com/wordpressblog/15-funny-tweets-from-the-india-pakistan-final-to-sum-up-that-emotional-roller-coaster/', '2017-06-19', 'images/india-vs-pakistan-timings-759.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `intro` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `intro`, `image`, `image2`, `image3`) VALUES
(87, '', '', '', ''),
(86, '', '', '', ''),
(85, '', '', '', ''),
(84, '', '', '', ''),
(83, '', '', '', ''),
(82, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE IF NOT EXISTS `case_types` (
  `type_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `case_types`
--

INSERT INTO `case_types` (`type_id`, `name`) VALUES
(1, 'History & Pre Operation'),
(2, 'Treatment Done'),
(3, 'Post Operation & Remark');

-- --------------------------------------------------------

--
-- Table structure for table `flash`
--

CREATE TABLE IF NOT EXISTS `flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flash` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `flash`
--

INSERT INTO `flash` (`id`, `flash`) VALUES
(1, 'Hello'),
(2, 'Hello This Flash message is working!!'),
(3, 'hey'),
(4, 'It is all about health.'),
(5, '1st International TMJ Live Surgery Video conference & workskop on 3D Model 30-31st Jan 2017'),
(6, 'hey'),
(8, 'This is last flash message'),
(9, 'hey'),
(10, ''),
(11, 'hi'),
(12, 'tjr conference'),
(13, 'hello'),
(14, 'Welcome You!'),
(15, 'TJR CONFERENCE');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desci` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `desci`, `image`, `date`) VALUES
(10, 'dd', 'dd', '12.png', '2017-01-19 09:02:44'),
(1, 'dd', 'dd', '12.png', '2017-01-19 09:02:44'),
(11, '', '', 'mall1024x500-8469877913.jpg', '2017-01-27 18:08:47'),
(12, 'pic', 'pic', '6-6772201522.png', '2017-01-27 18:16:37'),
(13, 'visual model', 'Le Fort III osteotomy', 'l3-front-5818793848.jpg', '2017-02-01 17:32:49'),
(14, 'Le Fort III osteotomy', '', '12mm-5mm-dis-8791729495.jpg', '2017-02-01 17:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE IF NOT EXISTS `inquiry` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `contact`, `file`, `type`) VALUES
(1, 'ss', 'sssssss@gmail.com', 'sss', '10731162_846843672026506_3491720374406319041_n.jpg', 'Mangagement');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`login_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `full_name`, `resetToken`, `resetComplete`) VALUES
(1, 'admin', '$2y$10$mUNpgRXrHtQDQ7NeOyxub.XizRQ1ziywxk1qo25AU4tSJlQ9isNTO', 'witty@witty.com', 'Yes', 'admin', NULL, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registered_mail`
--

CREATE TABLE IF NOT EXISTS `registered_mail` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `confirm_status` int(11) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=242 ;

--
-- Dumping data for table `registered_mail`
--

INSERT INTO `registered_mail` (`srno`, `email`, `otp`, `confirm_status`) VALUES
(1, 'vcvc', '909090', 1),
(2, 'vc', '3EuO7U1HzT', 1),
(3, 'vc1', 'gjCXOBjB4t', 0),
(5, 'vishalbhatia1717@gmail.com', 'DPKqkvpTYE', 1),
(6, 'kunwaraabid@gmail.com', 'jpRSJQaZhx', 1),
(7, 'contact@confirmdeal.com', 'woY3MD2RRI', 1),
(8, 'shahbazakhtarmg@gmail.com ', 'HR37xWcLnc', 0),
(9, 'tabishakhtarsr@gmail.com ', '0BsW3sRaUm', 1),
(10, 'shahbaz40.akhtar@gmail.com', 'TEyK1otoxI', 0),
(11, 'tabish', 'eZ0yZFQ4sq', 0),
(12, '', 'c2SkyOUWzb', 0),
(13, 'Abhishekraj.raj@gmail.com', 'YRdrXqrfE0', 0),
(14, 'Royalabhishekraj@gmail.com', '2oX1N4y2Yf', 1),
(15, 'dhruv.10000@gmail.com', 'lE8uiiT28j', 1),
(16, 'swapnilsudhir47@rediffmail.com', 'kKzGnbRLmP', 1),
(17, 'swapnilitsme47@gmail.com', 'GgsG6FFLm2', 1),
(18, 'narendrj@gmail.com', 'rNIEtT7uqg', 1),
(19, 'usaselling275@gmail.com', 'q1c33rt2VS', 1),
(20, 'mukulmishra112@gmail.com', 'NT8eo4h1aU', 1),
(21, 'smart0384@yahoo.co.in', 'zX2JUnxyox', 0),
(22, 'novalid@mailinator.com', 'CUrnkKYtNW', 1),
(23, 'novalid@rhyta.com', 'ljLwMyZ7xi', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, '', '', 0),
(28, '', '', 0),
(29, 'swapnilsudhir47@rediffmail.com', '', 0),
(30, '', '', 0),
(31, '', '', 0),
(32, '', '', 0),
(33, 'a@gmail.com', '', 0),
(34, '', '', 0),
(35, '', '', 0),
(36, '', '', 0),
(37, '', '', 0),
(38, '', '', 0),
(39, '', '', 0),
(40, '', '', 0),
(41, '', '', 0),
(42, '', '', 0),
(43, '', '', 0),
(44, '', '', 0),
(45, '', '', 0),
(46, '', '', 0),
(47, '', '', 0),
(48, '', '', 0),
(49, '', '', 0),
(50, '', '', 0),
(51, 'swapnilsudhir47@rediffmail.com', '', 0),
(52, 'swapnilsudhir47@rediffmail.com', '', 0),
(53, 'swapnilsudhir47@rediffmail.com', '', 0),
(54, 'swapnilsudhir47@rediffmail.com', '', 0),
(55, 'swapnilsudhir47@rediffmail.com', '', 0),
(56, 'swapnilsudhir47@rediffmail.com', '', 0),
(57, '', '', 0),
(58, 'alkakul20@gmail.com', '', 0),
(59, 'kunwaraabid@gmail.com', '', 0),
(60, '', '', 0),
(61, '', '', 0),
(62, '', '', 0),
(63, 'jfgj,', '', 0),
(64, 'swapnilitsme47@gmail.com', '', 0),
(65, '', '', 0),
(66, '', '', 0),
(67, '', '', 0),
(68, 'swapnilsudhir47@rediffmail.com', '', 0),
(69, '', '', 0),
(70, '', '', 0),
(71, 'swapnilsudhir47@rediffmail.com', '', 0),
(72, '', '', 0),
(73, 'swapnilsudhir47@rediffmail.com', '', 0),
(74, '', '', 0),
(75, '', '', 0),
(76, 'wassan.anmol@gmail.com', '', 0),
(77, '', '', 0),
(78, '', '', 0),
(79, 'r2f ', '', 0),
(80, '', '', 0),
(81, 'd', '', 0),
(82, '', '', 0),
(83, 'swapnilsudhir47@rediffmail.com', '', 0),
(84, '', '', 0),
(85, '', '', 0),
(86, 'wassan.anmol@gmail.com', '', 0),
(87, '', '', 0),
(88, 'kunwaraabid@gmail.com', '', 0),
(89, '', '', 0),
(90, 'wassan.anmol@gmail.com', '', 0),
(91, '', '', 0),
(92, 'swapnilsudhir47@rediffmail.com', '', 0),
(93, '', '', 0),
(94, 'kunwaraabid@gmail.com', '', 0),
(95, '', '', 0),
(96, 'swapnilsudhir47@rediffmail.com', '', 0),
(97, '', '', 0),
(98, '', '', 0),
(99, 'wassan.anmol@gmail.com', '', 0),
(100, 'wassan.anmol@gmail.com', '', 0),
(101, 'wassan.anmol@gmail.com', '', 0),
(102, 'wassan.anmol@gmail.com', '', 0),
(103, 'wassan.anmol@gmail.com', '', 0),
(104, 'wassan.anmol@gmail.com', '', 0),
(105, 'swapnilsudhir47@rediffmail.com', '', 0),
(106, 'wassan.anmol@gmail.com', '', 0),
(107, 'Swapnilitsme47@gmail.com', '', 0),
(108, 'kunwaraabid@gmail.com', '', 0),
(109, 'wassan.anmol@gmail.com', '', 0),
(110, 'wassan.anmol@gmail.com', '', 0),
(111, 'wassan.anmol@gmail.com', '', 0),
(112, 'wassan.anmol@gmail.com', '', 0),
(113, '', '', 0),
(114, '', '', 0),
(115, '', '', 0),
(116, 'wassan.anmol@gmail.com', '', 0),
(117, 'wassan.anmol@gmail.com', '', 0),
(118, 'wassan.anmol@gmail.com', '', 0),
(119, '', '', 0),
(120, 'wassan.anmol@gmail.com', '', 0),
(121, 'wassan.anmol@gmail.com', '', 0),
(122, 'wassan.anmol@gmail.com', '', 0),
(123, 'wassan.anmol@gmail.com', '', 0),
(124, 'wassan.anmol@gmail.com', '', 0),
(125, 'wassan.anmol@gmail.com', '', 0),
(126, 'Swapnilitsme47@gmail.com', '', 0),
(127, 'swapnilsudhir47@rediffmail.com', '', 0),
(128, 'Swapnilitsme47@gmail.com', '', 0),
(129, 'swapnilsudhir47@rediffmail.com', '', 0),
(130, 'Swapnilitsme47@gmail.com', '', 0),
(131, 'Swapnilitsme47@gmail.com', '', 0),
(132, 'kunwaraabid@gmail.com', '', 0),
(133, 'Swapnilitsme47@gmail.com', '', 0),
(134, 'wassan.anmol@gmail.com', '', 0),
(135, 'wassan.anmol@gmail.com', '', 0),
(136, 'wassan.anmol@gmail.com', '', 0),
(137, 'wassan.anmol@gmail.com', '', 0),
(138, 'wassan.anmol@gmail.com', '', 0),
(139, 'wassan.anmol@gmail.com', '', 0),
(140, 'wassan.anmol@gmail.com', '', 0),
(141, 'wassan.anmol@gmail.com', '', 0),
(142, 'wassan.anmol@gmail.com', '', 0),
(143, 'wassan.anmol@gmail.com', '', 0),
(144, 'wassan.anmol@gmail.com', '', 0),
(145, 'wassan.anmol@gmail.com', '', 0),
(146, 'ankitjain@gmail.com', '', 0),
(147, 'ankitjain@gmail.com', '', 0),
(148, 'Swapnilitsme47@gmail.com', '', 0),
(149, 'Swapnilitsme47@gmail.com', '', 0),
(150, 'ankitjain@gmail.com', '', 0),
(151, 'Swapnilitsme47@gmail.com', '', 0),
(152, 'Swapnilitsme47@gmail.com', '', 0),
(153, 'Swapnilitsme47@gmail.com', '', 0),
(154, 'wassan.anmol@gmail.com', '', 0),
(155, 'wassan.anmol@gmail.com', '', 0),
(156, 'swapnil@gmail.com', '', 0),
(157, 'swapnil@gmail.com', '', 0),
(158, 'usaselling275@gmail.com', '', 0),
(159, 'wassan.anmol@gmail.com', '', 0),
(160, 'wassan.anmol@gmail.com', '', 0),
(161, 'wassan.anmol@gmail.com', '', 0),
(162, 'wassan.anmol@gmail.com', '', 0),
(163, 'wassan.anmol@gmail.com', '', 0),
(164, 'wassan.anmol@gmail.com', '', 0),
(165, 'wassan.anmol@gmail.com', '', 0),
(166, 'wassan.anmol@gmail.com', '', 0),
(167, 'swapnilsudhir47@rediffmail.com', '', 0),
(168, 'swapnilsudhir47@rediffmail.com', '', 0),
(169, 'wassan.anmol@gmail.com', '', 0),
(170, '', '', 0),
(171, '', '', 0),
(172, '', '', 0),
(173, 'archna.rathore09@gmail.com', '', 0),
(174, 'archna.rathore09@gmail.com', '', 0),
(175, 'archna.rathore09@gmail.com', '', 0),
(176, 'archna.rathore09@gmail.com', '', 0),
(177, 'k', '', 0),
(178, 'kunwaraabid@gmail.com', '', 0),
(179, 'kunwaraabid@gmail.com', '', 0),
(180, 'j', '', 0),
(181, 'wassan.anmol@gmail.com', '', 0),
(182, '', '', 0),
(183, 'Swapnilitsme47@gmail.com', '', 0),
(184, 'Swapnilitsme47@gmail.com', '', 0),
(185, 'ankitjain@gmail.com', '', 0),
(186, 'swapnilsudhir47@rediffmail.com', '', 0),
(187, 'ankitjain@gmail.com', '', 0),
(188, 'Swapnilitsme47@gmail.com', '', 0),
(189, 'Swapnilitsme47@gmail.com', '', 0),
(190, 'Swapnilitsme47@gmail.com', '', 0),
(191, 'ankitjain@gmail.com', '', 0),
(192, 'ankitjain@gmail.com', '', 0),
(193, 'ankitjain@gmail.com', '', 0),
(194, 'ankitjain@gmail.com', '', 0),
(195, '', '', 0),
(196, '', '', 0),
(197, '', '', 0),
(198, '', '', 0),
(199, '', '', 0),
(200, '', '', 0),
(201, '', '', 0),
(202, '', '', 0),
(203, '', '', 0),
(204, '', '', 0),
(205, '', '', 0),
(206, 'harshkuntal@yahoo.com', '', 0),
(207, 'harshkuntal@yahoo.com', '', 0),
(208, 'harshkuntal@yahoo.com', '', 0),
(209, 'harshkuntal@yahoo.com', '', 0),
(210, '', '', 0),
(211, '', '', 0),
(212, '', '', 0),
(213, 'wassan.anmol@gmail.com', '', 0),
(214, '', '', 0),
(215, '', '', 0),
(216, '', '', 0),
(217, '', '', 0),
(218, '', '', 0),
(219, '', '', 0),
(220, '', '', 0),
(221, '', '', 0),
(222, 'Swapnilitsme47@gmail.com', '', 0),
(223, 'Swapnilitsme47@gmail.com', '', 0),
(224, 'Swapnilitsme47@gmail.com', '', 0),
(225, 'Swapnilitsme47@gmail.com', '', 0),
(226, 'Swapnilitsme47@gmail.com', '', 0),
(227, 'Swapnilitsme47@gmail.com', '', 0),
(228, '', '', 0),
(229, 'Swapnilitsme47@gmail.com', '', 0),
(230, '', '', 0),
(231, '', '', 0),
(232, '', '', 0),
(233, '', '', 0),
(234, '', '', 0),
(235, '', '', 0),
(236, '', '', 0),
(237, '', '', 0),
(238, '', '', 0),
(239, '', '', 0),
(240, '', '', 0),
(241, 'kunwaraabid@gmail.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `scroll`
--

CREATE TABLE IF NOT EXISTS `scroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `update` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `scroll`
--

INSERT INTO `scroll` (`id`, `update`) VALUES
(1, 'Helllo Everyone'),
(2, 'Helllo Everyone2'),
(3, 'Hello Wrold 3'),
(4, 'by bye'),
(5, 'This IS DONE'),
(7, 'this one\r\n'),
(8, 'Hello'),
(9, 'latest news 1'),
(10, 'latest news'),
(11, 'yola'),
(12, 'hello\r\n'),
(13, 'hello\r\n'),
(14, 'tjr conference'),
(15, 'I welcomes you all my friends!!!'),
(16, 'TJR CONFERENCE 2017');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE IF NOT EXISTS `tables` (
  `membershiptype` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `college` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `pincode` int(6) NOT NULL,
  `country` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `resi` varchar(15) NOT NULL,
  `pin` int(6) NOT NULL,
  `country1` varchar(20) NOT NULL,
  `state1` varchar(20) NOT NULL,
  `resicontact` int(10) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `sdc` varchar(15) NOT NULL,
  `paymentmode` varchar(10) NOT NULL,
  `membership` varchar(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `transno` int(15) NOT NULL,
  `accountholder` varchar(15) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`membershiptype`, `name`, `college`, `gender`, `address`, `pincode`, `country`, `state`, `phone`, `fax`, `email`, `resi`, `pin`, `country1`, `state1`, `resicontact`, `regno`, `sdc`, `paymentmode`, `membership`, `amt`, `date`, `transno`, `accountholder`, `bank`, `branch`) VALUES
('Life Member', 'swapnil', 'dsaf', 'male', '283203', 0, 'India', 'Andhra Pradesh ', 684919651, 9549884, 'swapnilsudhir47', '', 0, 'India', 'Andhra Pradesh ', 0, '', '', '', 'DD', 75686, '', 6785353, 'dfg', 'sbi', 'fghj'),
('Life Member', 'sakldja', 'jlfskdjf', 'male', '', 0, 'India', 'Andhra Pradesh ', 67576567, 0, 'ftf@hkkhk.com', '', 0, 'India', 'Andhra Pradesh ', 0, '', '', '', 'DD', 45656, '', 0, 'ghgf', 'hv', 'gghhg'),
('Life Member', 'jhkjh', 'tugjg', 'male', '', 0, 'India', 'Andhra Pradesh ', 1122334455, 0, 'huhh@tfff.com', '', 0, 'India', 'Andhra Pradesh ', 0, '', '', '', 'DD', 555555556, '86', 0, 'tftft', 'rd', 'drd'),
('Life Member', 'GeorgyDS', '', 'male', '92870', 0, 'Bahrain', 'Tripura ', 123456, 123456, 'royspoly@gmail.', 'Kalamaria', 0, 'Maldives', 'Manipur', 0, '527', 'Greece', '', 'DD', 0, 'SECRETCODE', 0, 'royspoly@gmail.', '', ''),
('Life Member', 'StephenEmeks', '', 'male', '92543', 0, 'Georgia', 'Assam ', 123456, 123456, 'fav@fagomago.pl', 'sexogloszenia.c', 99654, 'East Timor', 'Sikkim ', 0, '446', 'sexogloszenia.c', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'GeorgySO', '', 'male', '75034', 0, 'Turkmenistan', 'Maharashtra ', 5331826, 5331826, 'royspoly@gmail.', 'Kalamaria', 0, 'Turkmenistan', 'Himachal Pradesh ', 0, '385', 'Greece', '', 'DD', 0, 'SECRETCODE', 0, 'royspoly@gmail.', '', ''),
('Life Member', 'VictorTUB', '', 'male', '55318', 0, 'Saudi Arabia', 'Gujarat ', 2147483647, 2147483647, 'mfullpost@gmail', 'Istanbul', 0, 'Taiwan', 'Sikkim ', 0, '266', 'Turkey', '', 'DD', 0, 'SECRETCODE', 0, 'mfullpost@gmail', '', ''),
('Life Member', 'AgamarilRib', '', 'male', '08028', 0, 'Kuwait', 'Tamil Nadu ', 2147483647, 2147483647, 'svonuchka@gmail', '', 0, 'Hong Kong', 'West Bengal ', 0, '466', '', '', 'DD', 0, 'SECRETCODE', 0, 'svonuchka@gmail', '', ''),
('Life Member', 'VictorTUB', '', 'male', '75228', 0, 'China', 'Dadra and Nagar', 2147483647, 2147483647, 'mfullpost@gmail', 'Istanbul', 0, 'Yemen', 'Bihar ', 0, '689', 'Turkey', '', 'DD', 0, 'SECRETCODE', 0, 'mfullpost@gmail', '', ''),
('Life Member', 'VictorBit', '', 'male', '13493', 0, 'Brunei', 'Karnataka ', 2147483647, 2147483647, 'mfullpost@gmail', 'Istanbul', 0, 'Papua New Guinea', 'Jharkhand ', 0, '591', 'Turkey', '', 'DD', 0, 'SECRETCODE', 0, 'mfullpost@gmail', '', ''),
('Life Member', 'dddd', 'ddddd', 'male', 'ssssssss', 0, 'Sri Lanka', 'Sikkim ', 0, 0, 'fff@hotmail.com', 'dddddddd', 5555, 'India', 'Andhra Pradesh ', 2147483647, '444444', '44444444', 'ddddddd', 'DD', 555555, '2017-01-01', 0, 'ddddddddddddd', 'dddddddddd', 'dddddddd'),
('Life Member', '', '', 'male', '', 0, 'India', 'Andhra Pradesh ', 0, 0, '', '', 0, 'India', 'Andhra Pradesh ', 0, '', '', '', 'DD', 40000, '', 0, 'JNBBKB', 'HBB', 'B JN N J'),
('Life Member', 'aoquiroraixe', '', 'female', '12144', 0, 'Kazakhstan', 'Daman and Diu ', 2147483647, 2147483647, 'epigailum@m.eam', 'Aqtobe', 44212, 'Kazakhstan', 'Himachal Pradesh ', 2147483647, '648', 'Kazakhstan', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'isirobiqfoqoj', '', 'female', '94110', 0, 'Saudi Arabia', 'Tamil Nadu ', 2147483647, 2147483647, 'aezanez@email.e', 'Majuro', 76234, 'Kuwait', 'Chandigarh ', 2147483647, '4114', 'Marshall Island', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ijecenija', '', 'female', '64118', 0, 'Hong Kong', 'Dadra and Nagar', 2147483647, 2147483647, 'eayekibs@m.eama', 'Somerset', 15001, 'Lebanon', 'Kerala ', 2147483647, '60', 'Bermuda', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ezezoco', '', 'male', '18091', 0, 'Uzbekistan', 'Madhya Pradesh ', 2147483647, 2147483647, 'jepocd@email.ea', 'Axum', 97007, 'Taiwan', 'Madhya Pradesh ', 2147483647, '1868', 'Ethiopia', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'agagijojageit', '', 'male', '75115', 0, 'Cambodia', 'Arunachal Prade', 2147483647, 2147483647, 'afapol@emailer.', 'San Antonio Los', 91104, 'Laos', 'Assam ', 2147483647, '3613', 'El Salvador', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'duwonommoir', '', 'male', '98233', 0, 'Maldives', 'Delhi ', 2147483647, 2147483647, 'kiboriko@mailer', 'Asaba', 55318, 'Laos', 'Karnataka ', 2147483647, '8052', 'Nigeria', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'odaraci', '', 'male', '78726', 0, 'Israel', 'Rajasthan ', 2147483647, 2147483647, 'uumnaler@mailer', 'Renan', 62249, 'Armenia', 'Meghalaya ', 2147483647, '1959', 'Switzerland', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'iheqiwuwuw', '', 'male', '85705', 0, 'Iran', 'Nagaland ', 2147483647, 2147483647, 'omavayap@m.eama', 'Sari', 70506, 'Iran', 'Maharashtra ', 2147483647, '4075', 'Iran', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'adugomodo', '', 'female', '75228', 0, 'Armenia', 'Sikkim ', 2147483647, 2147483647, 'itosuavuw@m.eam', 'Kocaeli', 12345, 'Taiwan', 'Bihar ', 2147483647, '4553', 'Turkey', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'eivavdarivucp', '', 'male', '76039', 0, 'Oman', 'West Bengal ', 2147483647, 2147483647, 'ixepoxol@w.eama', 'Colmar', 75042, 'Jordan', 'Bihar ', 2147483647, '2030', 'France', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ogamele', '', 'female', '07044', 0, 'Qatar', 'Arunachal Prade', 2147483647, 2147483647, 'akoliteso@w.eam', 'Havana', 94506, 'Burma', 'Orissa ', 2147483647, '5212', 'Cuba', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'bocanut', '', 'male', '12183', 0, 'Georgia', 'Karnataka ', 2147483647, 2147483647, 'adlogaza@w.eama', 'Waitara', 19522, 'Brunei', 'Assam ', 2147483647, '3295', 'New Zealand', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'eohehedxjeya', '', 'female', '55355', 0, 'Vietnam', 'Delhi ', 2147483647, 2147483647, 'itejatap@w.eama', 'Novara', 98166, 'Nepal', 'West Bengal ', 2147483647, '5932', 'Italy', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'afulalatdukq', '', 'female', '54303', 0, 'Hong Kong', 'Chhattisgarh ', 2147483647, 2147483647, 'sawodozo@mail.e', 'Alpignano', 74115, 'Jordan', 'Kerala ', 2147483647, '9219', 'Italy', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'uuyipacamce', '', 'male', '08046', 0, 'Indonesia', 'Dadra and Nagar', 2147483647, 2147483647, 'usirpodi@mail.e', 'Biak', 75044, 'Indonesia', 'Mizoram ', 2147483647, '5941', 'Indonesia', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'isnuoexem', '', 'male', '01752', 0, 'Maldives', 'Maharashtra ', 2147483647, 2147483647, 'ufamiy@m.eamale', 'Bamako', 99654, 'Thailand', 'Arunachal Pradesh ', 2147483647, '4072', 'Mali', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'atijadesisijo', '', 'male', '92543', 0, 'Macau', 'Himachal Prades', 2147483647, 2147483647, 'adejuwbat@m.eam', 'Christiansted', 75042, 'Bhutan', 'Tripura ', 2147483647, '5353', 'Virgin Islands', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ufojuwed', '', 'male', '98166', 0, 'Iran', 'Goa ', 2147483647, 2147483647, 'nazirado@g.eama', 'Invercargill', 76135, 'Indonesia', 'Tripura ', 2147483647, '9580', 'New Zealand', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'asuopoj', '', 'male', '75010', 0, 'Bhutan', 'Rajasthan ', 2147483647, 2147483647, 'uowaregc@g.eama', 'Casablanca', 68601, 'Indonesia', 'Nagaland ', 2147483647, '9457', 'Morocco', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'umoeamavi', '', 'female', '56583', 0, 'Jordan', 'Jammu and Kashm', 2147483647, 2147483647, 'ijacoxeh@email.', 'Maldegem', 75075, 'Indonesia', 'Orissa ', 2147483647, '3164', 'Belgium', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ovosegcay', '', 'male', '75068', 0, 'Lebanon', 'Meghalaya ', 2147483647, 2147483647, 'etiivase@email.', 'Lilongwe', 8046, 'Thailand', 'Uttar Pradesh ', 2147483647, '4917', 'Malawi', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'aneyagege', '', 'male', '98205', 0, 'Sri Lanka', 'Bihar ', 2147483647, 2147483647, 'awutuxum@email.', 'Melsungen', 84414, 'Cambodia', 'Tripura ', 2147483647, '5290', 'Germany', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'udaknutetezc', '', 'male', '75219', 0, 'Hong Kong', 'Delhi ', 2147483647, 2147483647, 'muihenuy@email.', 'El Callao', 98006, 'Burma', 'Tamil Nadu ', 2147483647, '3333', 'Venezuela', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'wojipxugesawu', '', 'male', 'L0K1R0', 0, 'Taiwan', 'Himachal Prades', 2147483647, 2147483647, 'udorefaz@pop3.p', 'Allison', 83318, 'Iraq', 'Goa ', 2147483647, '1079', 'United States', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'ehzejik', '', 'male', '96001', 0, 'Japan', 'Jharkhand ', 2147483647, 2147483647, 'iomilusot@pop3.', 'Jinja', 74115, 'Yemen', 'Uttar Pradesh ', 2147483647, '7784', 'Uganda', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'iivowuq', '', 'male', '75251', 0, 'Azerbaijan', 'Manipur', 2147483647, 2147483647, 'moyoduw@popp.ea', 'Chojnice', 90004, 'Georgia', 'Chhattisgarh ', 2147483647, '119', 'Poland', '', 'DD', 0, '', 0, '', '', ''),
('Life Member', 'abevive', '', 'male', '89014', 0, 'Israel', 'Uttarakhand ', 2147483647, 2147483647, 'etosho@popp.eam', 'Seda', 62249, 'Kyrgyzstan', 'Assam ', 2147483647, '3332', 'Lithuania', '', 'DD', 0, '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `member_id` int(255) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(100) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `ld_link` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`member_id`, `member_name`, `fb_link`, `ld_link`, `image`) VALUES
(62, 'ANSHUL MISHRA', 'https://www.facebook.com/anshul.mishra.585', 'https://in.linkedin.com/in/anshul-mishra-a2500456', 'Anshul-Mishra.JPG'),
(63, 'PRACHI ARYA', 'https://www.facebook.com/Creativeginni', 'https://www.linkedin.com/in/prachi-arya-330b6b87?trk=nav_responsive_tab_profile_pic', 'prachi_2.jpg'),
(64, 'ROHITH RAMESH', 'https://www.facebook.com/FrostyMetal', 'https://www.linkedin.com/in/rohit-ramesh-5b2739136/', 'rohit_2.jpg'),
(65, 'RIDHIMA JAIN', 'https://www.facebook.com/ridhima.jain.393', 'https://www.linkedin.com/in/ridhima-jain-5a9934101', 'ridhima_2.jpg'),
(61, 'DIKSHA SINGHI', 'https://www.facebook.com/diksha1411', 'https://www.linkedin.com/in/diksha-singhi-bbb16020?trk=nav_responsive_tab_profile', 'diksha.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimol_post`
--

CREATE TABLE IF NOT EXISTS `testimol_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `postcontent` varchar(10000) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `testimol_post`
--

INSERT INTO `testimol_post` (`id`, `name`, `company`, `postcontent`, `image_path`) VALUES
(29, 'Vaibhav Bansal', 'Roder', 'Provocative, dynamic & enterprising! TCK words literally talk with the audience by striking the right chord. The team is always in the research mode delivering the best, modern and original.', 'images/vaibhav.jpg'),
(17, 'Tabrez Alam', 'Co-Founder, PetSutra', 'We have been using The Creative Key for a while now for articles for our Blog Pet Sutra. I must confess that I am highly impressed by them in each aspect. Overall a very good experience till now and I am sure we shall have them engaged with us for a very long time to come.\r\nGreat work and keep it up!', 'images/tabrez.jpg  '),
(35, 'Ayush Chaudhary', 'Founder, DForDelhi.', 'The Creative Key has been an immense help and support to our team when it came to content ideation and content generation. The team has come up with some of the most vibrant ideas thereby also helping us generate them in time. We have thoroughly enjoyed working with them and they have an integral part of our journey.', 'images/ayush.jpg  '),
(33, 'Ferzad Hazarika', 'Founder, SIIOP', 'Working with the team of The Creative Key allowed me to focus the Siiop team&#39;s energies on other tasks as the output they provided not only exceeded the quality our team originally had in mind, but also provided key parameters on which our businesses and ideas developed into more concrete solutions. We commissioned TCK for the web and app content &amp; graphic development and I must add that the job was and is brilliant. We are now working together on other aspects of business and I am lucky to have worked with the TCK team.', 'images/ferjad.jpg ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `register` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
