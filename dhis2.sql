-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 09:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dhis2`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `medication` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_status` enum('Yes','No','','') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`doc_id`),
  KEY `FK_doctor` (`medication`),
  KEY `FK_doctor1` (`test_id`),
  KEY `FK_doctor2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23423423 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `test_id`, `user_id`, `medication`, `description`, `date`, `service_status`) VALUES
(22234, 3242342, 12333222, 2554342, 'affected by malaria', '2018-02-04 02:50:04', 'No'),
(122112, 55434345, 12333222, 434323, 'affected by malaria', '2018-02-04 02:50:04', 'No'),
(324423, 99000078, 12333222, 88284823, 'affected by flu', '2018-02-04 02:48:19', 'No'),
(1231232, 999293923, 12333222, 1234222, 'affected by malaria', '2018-02-04 02:47:06', 'No'),
(12313123, 889342423, 12333222, 1234222, 'affected by malaria', '2018-02-04 02:47:06', 'No'),
(23423422, 24234433, 12333222, 88284823, 'affected by flu', '2018-02-04 02:48:19', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `drug_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit_price` float NOT NULL,
  `unitof_issue` varchar(50) NOT NULL,
  PRIMARY KEY (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88284824 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `category`, `name`, `unit_price`, `unitof_issue`) VALUES
(323424, 'malaria', 'Artem ether- Lumef antrine 20/120 Tabs', 400, '12s'),
(434323, 'malaria', 'Artem ether- Lumef antrine 20/120 Tabs', 500, '18s'),
(1234222, 'malaria', 'Artem ether- Lumef antrine 20/120 Tabs', 200, '6s'),
(2554342, 'malaria', 'Artem ether- Lumef antrine 20/120 Tabs', 300, '8s'),
(3234342, 'Flu', 'Flu Killer', 200, 'Tabs'),
(88284823, 'Flu', 'Flu Killer', 100, 'Syrup');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `inventory_id` int(11) NOT NULL AUTO_INCREMENT,
  `received_order_id` int(11) NOT NULL,
  PRIMARY KEY (`inventory_id`),
  KEY `FK_inventory` (`received_order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23123112 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `received_order_id`) VALUES
(46675, 12311),
(131313, 12311),
(423222, 12311),
(423432, 12311),
(442222, 12311),
(5765, 23244),
(565675, 23244),
(565775, 23244),
(567555, 23244),
(5675675, 23244),
(8908, 123123),
(78977, 123123),
(88778, 123123),
(89898, 123123),
(789777, 123123),
(231231, 1223332),
(1231231, 1223332),
(2323222, 1223332),
(12123123, 1223332),
(23123111, 1223332),
(1644, 3123123),
(17686, 3123123),
(166565, 3123123),
(167866, 3123123),
(168654, 3123123),
(5655, 8786687),
(43224, 8786687),
(4532342, 8786687),
(4564444, 8786687),
(5656544, 8786687);

-- --------------------------------------------------------

--
-- Table structure for table `losses`
--

CREATE TABLE IF NOT EXISTS `losses` (
  `loss_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL,
  PRIMARY KEY (`loss_id`),
  KEY `FK_losses` (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23422235 ;

--
-- Dumping data for table `losses`
--

INSERT INTO `losses` (`loss_id`, `drug_id`, `quantity`, `Day`, `Month`, `Year`) VALUES
(32342, 2554342, 5, 'Day 3', 'February', 2018),
(45353, 434323, 8, 'Day 4', 'February', 2018),
(234234, 2554342, 20, 'Day 2', 'February', 2018),
(422322, 3234342, 11, 'Day 2', 'February', 2018),
(452234, 3234342, 22, 'Day 3', 'February', 2018),
(8778887, 323424, 10, 'Day 3', 'February', 2018),
(23422234, 88284823, 4, 'Day 3', 'February', 2018);

-- --------------------------------------------------------

--
-- Stand-in structure for view `losses_view`
--
CREATE TABLE IF NOT EXISTS `losses_view` (
`name` varchar(50)
,`unitof_issue` varchar(50)
,`quantity` int(11)
,`day` varchar(10)
,`month` varchar(20)
,`year` year(4)
);
-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `FK_order` (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1231213 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `drug_id`, `quantity`, `order_date`) VALUES
(11231, 1234222, 100, '2018-02-04 03:01:42'),
(23422, 434323, 100, '2018-02-04 03:02:20'),
(234222, 2554342, 100, '2018-02-04 03:01:42'),
(234234, 3234342, 100, '2018-02-04 03:01:42'),
(441123, 88284823, 100, '2018-02-04 03:01:42'),
(1231212, 323424, 100, '2018-02-04 03:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `registered_day` varchar(10) DEFAULT NULL,
  `Time` time NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=742823424 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `fname`, `lname`, `age`, `gender`, `registered_day`, `Time`, `Month`, `Year`) VALUES
(2423423, 'Stephen', 'Onyango', 45, 'Male', 'Day 3', '06:32:08', 'February', 2018),
(7488492, 'Reagan ', 'Otieno', 23, 'Male', 'Day 1', '10:09:43', 'February', 2018),
(23232343, 'Daniel', 'Mwangi', 34, 'Male', 'Day 4', '08:11:31', 'February', 2018),
(24230093, 'Catherine', 'Wanjiru', 50, 'Female', 'Day 3', '20:22:51', 'February', 2018),
(24234234, 'Peter', 'Mutembei', 74, 'Male', 'Day 4', '13:51:18', 'February', 2018),
(742823423, 'Everlyn', 'Asiko', 88, 'Female', 'Day 2', '22:28:42', 'February', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `pointof_sales`
--

CREATE TABLE IF NOT EXISTS `pointof_sales` (
  `pointof_sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_of_sale` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Month` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL,
  PRIMARY KEY (`pointof_sale_id`),
  KEY `FK_pointof_sales1` (`user_id`),
  KEY `FK_pointof_sales` (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `received_order`
--

CREATE TABLE IF NOT EXISTS `received_order` (
  `received_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `received_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`received_order_id`),
  KEY `FK_received_order` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8786688 ;

--
-- Dumping data for table `received_order`
--

INSERT INTO `received_order` (`received_order_id`, `order_id`, `quantity`, `expiry_date`, `received_date`) VALUES
(12311, 234234, 80, '2018-08-27', '2018-02-04 03:05:46'),
(23244, 1231212, 80, '2019-02-22', '2018-02-04 03:06:10'),
(123123, 23422, 80, '2018-10-23', '2018-02-04 03:05:46'),
(1223332, 11231, 80, '2018-07-28', '2018-02-04 03:05:46'),
(3123123, 441123, 80, '2018-12-09', '2018-02-04 03:05:46'),
(8786687, 234222, 80, '2018-09-16', '2018-02-04 03:05:46');

-- --------------------------------------------------------

--
-- Stand-in structure for view `served_patients`
--
CREATE TABLE IF NOT EXISTS `served_patients` (
`patient_id` int(11)
,`patient_fname` varchar(50)
,`patient_lname` varchar(50)
,`age` int(11)
,`gender` varchar(50)
,`results` varchar(50)
,`name` varchar(50)
,`doc_fname` varchar(50)
,`doc_lname` varchar(50)
,`registered_day` varchar(10)
,`month` varchar(20)
,`year` year(4)
);
-- --------------------------------------------------------

--
-- Table structure for table `stock_level`
--

CREATE TABLE IF NOT EXISTS `stock_level` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `minimum_level` int(11) NOT NULL,
  `maximum_level` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`),
  KEY `FK_stock_level` (`drug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1231234443 ;

--
-- Dumping data for table `stock_level`
--

INSERT INTO `stock_level` (`stock_id`, `drug_id`, `minimum_level`, `maximum_level`) VALUES
(232111, 434323, 15, 150),
(344234, 88284823, 10, 120),
(1214432, 2554342, 15, 150),
(1313111, 1234222, 15, 150),
(12313331, 323424, 15, 150),
(1231234442, 3234342, 10, 120);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `results` varchar(50) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `Time` time NOT NULL,
  `Month` varchar(20) NOT NULL,
  `Year` year(4) NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `FK_test` (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=999293924 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `patient_id`, `results`, `Day`, `Time`, `Month`, `Year`) VALUES
(3242342, 2423423, 'Malaria Positive', 'Day 3', '07:14:46', 'February', 2018),
(24234433, 24234234, 'Flu Positive', 'Day 4', '14:22:05', 'February', 2018),
(55434345, 7488492, 'Malaria Positive', 'Day 1', '11:00:51', 'February', 2018),
(99000078, 742823423, 'Flu Positive', 'Day 2', '22:48:34', 'February', 2018),
(889342423, 23232343, 'Malaria Positive', 'Day 4', '09:16:34', 'February', 2018),
(999293923, 24230093, 'Malaria Positive', 'Day 3', '20:50:46', 'February', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'pharmacy',
  `position` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12333223 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `phone`, `password`, `position`, `date`) VALUES
(2323321, 'Kelvin', 'Omieno', 'komieno@gmail.com', '+254712345678', 'pharmacy', 'Pharmacist', '2018-02-04 02:43:29'),
(12333222, 'Jasper', 'Ondulu', 'jondulu@gmail.com', '+254712121212', 'pharmacy', 'Doctor', '2018-02-04 02:43:29');

-- --------------------------------------------------------

--
-- Structure for view `losses_view`
--
DROP TABLE IF EXISTS `losses_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `losses_view` AS select `drugs`.`name` AS `name`,`drugs`.`unitof_issue` AS `unitof_issue`,`losses`.`quantity` AS `quantity`,`losses`.`Day` AS `day`,`losses`.`Month` AS `month`,`losses`.`Year` AS `year` from (`drugs` join `losses`) where (`losses`.`drug_id` = `drugs`.`drug_id`);

-- --------------------------------------------------------

--
-- Structure for view `served_patients`
--
DROP TABLE IF EXISTS `served_patients`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `served_patients` AS select `test`.`patient_id` AS `patient_id`,`patient`.`fname` AS `patient_fname`,`patient`.`lname` AS `patient_lname`,`patient`.`age` AS `age`,`patient`.`gender` AS `gender`,`test`.`results` AS `results`,`drugs`.`name` AS `name`,`users`.`fname` AS `doc_fname`,`users`.`lname` AS `doc_lname`,`patient`.`registered_day` AS `registered_day`,`patient`.`Month` AS `month`,`patient`.`Year` AS `year` from ((((`users` join `drugs`) join `patient`) join `test`) join `doctor`) where ((`test`.`patient_id` = `patient`.`patient_id`) and (`doctor`.`user_id` = `users`.`user_id`) and (`doctor`.`test_id` = `test`.`test_id`) and (`drugs`.`drug_id` = `doctor`.`medication`));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `FK_doctor` FOREIGN KEY (`medication`) REFERENCES `drugs` (`drug_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_doctor1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_doctor2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `FK_inventory` FOREIGN KEY (`received_order_id`) REFERENCES `received_order` (`received_order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `losses`
--
ALTER TABLE `losses`
  ADD CONSTRAINT `FK_losses` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pointof_sales`
--
ALTER TABLE `pointof_sales`
  ADD CONSTRAINT `FK_pointof_sales` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`doc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pointof_sales1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `received_order`
--
ALTER TABLE `received_order`
  ADD CONSTRAINT `FK_received_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock_level`
--
ALTER TABLE `stock_level`
  ADD CONSTRAINT `FK_stock_level` FOREIGN KEY (`drug_id`) REFERENCES `drugs` (`drug_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `FK_test` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
