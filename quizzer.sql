-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2019 at 07:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_packs`
--

DROP TABLE IF EXISTS `exam_packs`;
CREATE TABLE IF NOT EXISTS `exam_packs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `price` float DEFAULT NULL,
  `thumb_img` text NOT NULL,
  `cover_img` text NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `no_seats` int(11) NOT NULL,
  `required_qualifications` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `tests_id_list` varchar(255) NOT NULL,
  `study_material_id_list` varchar(255) NOT NULL,
  `no_tests_included` int(11) NOT NULL,
  `no_resources_included` int(11) NOT NULL,
  `study_material_amount_hrs` float NOT NULL,
  `provider_id` int(11) NOT NULL,
  `no_sales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pack_reviews`
--

DROP TABLE IF EXISTS `pack_reviews`;
CREATE TABLE IF NOT EXISTS `pack_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_pack_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

DROP TABLE IF EXISTS `question_bank`;
CREATE TABLE IF NOT EXISTS `question_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `answer` varchar(1) NOT NULL,
  `exam_name` varchar(200) NOT NULL,
  `section` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `difficulty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`id`, `question`, `a`, `b`, `c`, `d`, `answer`, `exam_name`, `section`, `subject`, `topic`, `difficulty`) VALUES
(1, 'What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Personal Hypertext Processor', 'Private Home Page', '', 'a', 'PHP Basics', 'A', 'PHP', 'Basics', 1),
(2, 'PHP server scripts are surrounded by delimiters, which?', '&lt;script&gt;...&lt;/script&gt;', '&lt;?php...?&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', 'b', 'PHP Basics', 'A', 'PHP', 'Basics', 1),
(3, 'How do you write \"Hello World\" in PHP?', '\"Hello World\";', 'echo \"Hello World\";', 'Document.Write(\"Hello World\");', '', 'b', 'PHP Basics', 'A', 'PHP', 'Basics', 1),
(4, 'All variables in PHP start with which symbol?', '!', '&', '$', '', 'c', 'PHP Basics', 'A', 'PHP', 'Basics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `is_admin`) VALUES
(1, 'Abhishek', 'abhishek@cc.com', 'f589a6959f3e04037eb2b3eb0ff726ac', '1111111111', 0),
(2, 'Sumit', 'sumit@mail.com', '7225ff71e8821b24fd72b4c8fda95b9a', '1212121212', 0),
(3, 'asdf', 'ad@sd.com', '912ec803b2ce49e4a541068d495ab570', '11111111112', 0),
(4, 'Yo', 'Yo2d@df.com', '6d0007e52f7afb7d5a0650b0ffb8a4d1', '99999', 0),
(5, 'Jojo', 'jojo@juju.com', '7510d498f23f5815d3376ea7bad64e29', '98987678', 0),
(6, 'Susan', 'susan@tri.com', 'ac575e3eecf0fa410518c2d3a2e7209f', '9999', 0),
(7, 'TexMuxAdmin', 'TexMuxAdmin@g.com', '80596496590e0566a59935402341f99f', '878657345', 1),
(8, 'Rahul', 'rahul2@sdf.v', '7815696ecbf1c96e6894b779456d330e', '9865785', 0),
(9, 'Rohit', 'rohit@df.vm', '2d235ace000a3ad85f590e321c89bb99', '823489234', 0),
(10, 'Saurav', 'saurav@sa.com', '8cf674180ea201eb14b12486eaef9f28', '5923952564', 0),
(13, 'Yoho', 'yoho@sd.com', '4bcb8d6f0dc4994bd2130f9fe6fb6863', '8723947235', 0),
(23, 'Aha', 'aha@a.co', '124534a0ae447b0872b3092731a37d8e', '+914235563463', 0),
(24, 'Hello', 'hello@gmail.com', '5d41402abc4b2a76b9719d911017c592', '', 0),
(16, 'Subham', 'subham@su.com', '1a6c42113064a6c2888f5064385bbbef', '+919852356734', 0),
(17, 'qweasd', 'qweasd@asd.cm', '96f0f08c0188ba04898ce8cc465c19c4', '+91', 0),
(19, 'LKJLKJ', 'LKJ@ASD.COM', '91f2c35ca8b4be9f8ef438fcb1791618', '+919845945323', 0),
(20, 'oiuiou', 'iouiou@oiuoi.com', 'f8c86366b919aa57f15042c4328e6422', '+919879878972', 0),
(25, 'osos', 'soos@ad.com', '3f3d2903c7f533d4714d065386a9e6e8', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
