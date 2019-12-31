-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 03:36 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barta`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(5) NOT NULL,
  `base_item` int(5) DEFAULT NULL,
  `offerring_item` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `base_item`, `offerring_item`) VALUES
(1, 12, 13),
(2, 15, 14),
(3, 14, 15),
(4, 14, 13),
(5, 14, 11),
(6, 11, 14),
(7, 25, 16),
(8, 14, 1),
(9, 14, 1),
(10, 14, 1),
(11, 22, 26),
(12, 26, 16),
(13, 16, 1),
(14, 16, 13),
(15, 1, 27),
(16, 1, 28),
(17, 28, 11),
(18, 22, 1),
(19, 1, 14),
(20, 1, 20),
(21, 28, 29),
(22, 29, 27),
(23, 27, 29),
(24, 22, 29);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Electronics'),
(2, 'Cloths'),
(3, 'Phones');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_location` varchar(200) NOT NULL,
  `image_thumbnail_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `image_location`, `image_thumbnail_location`) VALUES
(0, './public/photo_folder/hafiz/314IMG-20180820-WA0000.jpg', './public/photo_folder/hafiz/thumbnail/314IMG-20180820-WA0000.jpg'),
(1, './public/photo_folder/hafiz/658d4ecc61297d1724c4a749e3014883709.jpg', './public/photo_folder/hafiz/thumbnail/658d4ecc61297d1724c4a749e3014883709.jpg'),
(2, './public/photo_folder/hafiz/736IMG-20151017-WA0005.jpg', './public/photo_folder/hafiz/thumbnail/736IMG-20151017-WA0005.jpg'),
(3, './public/photo_folder/hafiz/706IMG-20151017-WA0005.jpg', './public/photo_folder/hafiz/thumbnail/706IMG-20151017-WA0005.jpg'),
(4, './public/photo_folder/hafiz/20IMG-20150921-WA0003.jpg', './public/photo_folder/hafiz/thumbnail/20IMG-20150921-WA0003.jpg'),
(5, './public/photo_folder/hafiz/34IMG-20161123-WA0013.jpg', './public/photo_folder/hafiz/thumbnail/34IMG-20161123-WA0013.jpg'),
(6, './public/photo_folder/hafiz/314IMG-20180820-WA0000.jpg', './public/photo_folder/hafiz/thumbnail/314IMG-20180820-WA0000.jpg'),
(8, './public/photo_folder/i_boy/53815776466378012465577997931336892.jpg', './public/photo_folder/i_boy/thumbnail/53815776466378012465577997931336892.jpg'),
(9, './public/photo_folder/i_boy/52615776507635578687053929912442029.jpg', './public/photo_folder/i_boy/thumbnail/52615776507635578687053929912442029.jpg'),
(10, './public/photo_folder/tmp_hafiz/978IMG-20161029-WA0008.jpg', './public/photo_folder/tmp_hafiz/thumbnail/978IMG-20161029-WA0008.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` int(20) DEFAULT NULL,
  `state_number` int(2) DEFAULT NULL,
  `image_location` varchar(100) DEFAULT NULL,
  `cat_number` int(2) DEFAULT NULL,
  `user_number` int(11) DEFAULT NULL,
  `item_desc` varchar(255) DEFAULT NULL,
  `image_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `state_number`, `image_location`, `cat_number`, `user_number`, `item_desc`, `image_no`) VALUES
(1, 'pen', 2000, NULL, NULL, 1, 2, 'This is a pen', 1),
(11, 'Hote 3', 3000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 1, 2, 'fairly Used, Broken Screen and Mouth piece', 0),
(12, 'Hote 3', 3000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 3, 2, 'fairly Used, Broken Screen and Mouth piece', 0),
(13, 'Hote X', 12000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 3, 2, 'Fairly Spoilt', 0),
(14, 'Sweet Sweat Wears', 10000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 2, 1, 'from aba', 0),
(15, 'Sony x', 12000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 1, 2, 'Sony is Probably cool', 0),
(16, 'lady_x coll row', 200000, NULL, './photo_folder/lady_x/43904c05a04079a978b0ffa50a1ae42f5a6.jpg', 2, 3, 'lady_x lastest coll row', 0),
(17, 'Beat Box', 2000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 1, 3, 'This is a beat box', 0),
(18, 'Beat Box 2', 2000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 1, 3, 'what is this', 0),
(19, 'Beat Box 3', 2000, NULL, './photo_folder/lady_x/45704c05a04079a978b0ffa50a1ae42f5a6.jpg', 1, 3, 'This is a beat box', 0),
(20, 'Beat box 5', 40000, NULL, './photo_folder/dephizee/1723d-pencil-drawings-8.jpg', 1, 1, 'a newer version', 0),
(21, 'CL line', 250000, NULL, './photo_folder/lady_x/484bug.jpg', 2, 3, 'Cl is a iproduct', 0),
(22, 'phony c', 90000, NULL, './photo_folder/jeams/75Jos-20141015-00146.jpg', 3, 6, 'ice cold scam', 0),
(23, 'VEST', 20000, NULL, NULL, 2, 2, 'This is a vest', 3),
(24, 'pencil', 3000, NULL, NULL, 1, 2, 'this is pencil', 4),
(25, 'Trouser', 2000, NULL, NULL, 2, 2, '19000', 5),
(26, 'Singlet', 2000, NULL, NULL, 2, 2, '19000', 6),
(27, 'Monitor', 20000, NULL, NULL, 1, 4, 'This is plasma monitor in working condition', 8),
(28, 'Glasses', 20, NULL, NULL, 1, 4, 'This is a glasses frame', 9),
(29, 'Blackberry', 70000, NULL, NULL, 1, 7, 'fairly used Blackberry', 10);

-- --------------------------------------------------------

--
-- Table structure for table `m_users`
--

CREATE TABLE `m_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `state_number` int(11) DEFAULT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_users`
--

INSERT INTO `m_users` (`user_id`, `username`, `phone_number`, `email`, `state_number`, `password`) VALUES
(1, 'dephizee', '09034567987', 'hafiz227@gmail.com', 37, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(2, 'hafiz', '09012345678', 'hafiz227@gmail.comm', 15, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(3, 'lady_x', '08198833766', 'lady_x@gmal.com', 31, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(4, 'i_boy', '09067326455', 'i_boy@gmail.com', 16, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(5, 'x_Serial', '08012345612', 'davetony44@gmail.com', 12, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(6, 'jeams', '09033993399', 'jeams@ymail.com', 5, '$2y$10$Cm5kHQC2Izl7sMUH0jQ/q.7b7T.UPxnOXkBaDmzUEg9z9yYykoCZy'),
(7, 'tmp_hafiz', '08101159748', 'hafiz227@gmail.com', NULL, '$2y$10$ZoRdjOecvJHVSx1jhIeLnOqtX/i08PsVOFzMGwuTCXEyeb25lgvee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `image_no` (`image_no`);

--
-- Indexes for table `m_users`
--
ALTER TABLE `m_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `m_users`
--
ALTER TABLE `m_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
