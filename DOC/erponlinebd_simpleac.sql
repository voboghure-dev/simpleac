-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2011 at 01:40 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erponlinebd_simpleac`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart_acc`
--

CREATE TABLE IF NOT EXISTS `chart_acc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` text NOT NULL,
  `memo` text NOT NULL,
  `type` enum('debit','credit') NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `chart_acc`
--

INSERT INTO `chart_acc` (`id`, `company_id`, `user_id`, `parent_id`, `name`, `memo`, `type`, `edate`) VALUES
(1, 22, 23, 0, 'Asset Accounts', '', 'debit', '2011-03-19 01:35:29'),
(2, 22, 23, 0, 'Liability Accounts', '', 'credit', '2011-03-19 01:35:44'),
(3, 22, 23, 1, 'Current Assets', '', 'debit', '2011-03-19 01:35:56'),
(4, 22, 23, 3, 'Cash in Bank ', '', 'debit', '2011-03-19 01:36:08'),
(5, 22, 23, 3, 'Petty Cash Account ', '', 'debit', '2011-03-19 02:07:50'),
(6, 22, 23, 1, 'Long Term Assets', '', 'debit', '2011-03-19 02:09:34'),
(7, 22, 23, 0, 'Purchase Account', '', 'credit', '2011-05-10 14:32:04'),
(8, 22, 23, 0, 'Sales', '', 'debit', '2011-05-14 13:53:43'),
(9, 22, 23, 0, 'Service', '', 'debit', '2011-05-14 13:53:53'),
(10, 22, 23, 0, 'Convaience', '', 'credit', '2011-05-14 13:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `ref_person` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=23 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `ref_person`, `email`, `status`, `edate`) VALUES
(22, 'InnovativeBD', 'Mr. Tapan', 'tapan29bd@yahoo.com', 'active', '2011-02-04 19:55:20'),
(21, 'KMart', 'Mr. Evan', 'evan@kmark.com', 'active', '2010-12-08 19:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `cell_no` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `company_id`, `user_id`, `name`, `address`, `cell_no`, `doj`, `dob`, `edate`) VALUES
(1, 17, 21, 'Moinuddin Didar', 'Sajahanpur', '01675688291', '2000-12-01', '1982-10-10', '2010-12-20 08:04:52'),
(2, 17, 21, 'Tapan Kumer Das', 'Address to check', '01973238664', '2009-10-05', '1982-10-10', '2010-12-20 08:05:02'),
(3, 22, 23, 'Tapan Kumer Das', '5/B, Zigatola\nDhanmondi\nDhaka', '01973238664', '0000-00-00', '1982-10-10', '2011-02-04 19:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `latest_update`
--

CREATE TABLE IF NOT EXISTS `latest_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `details` longblob NOT NULL,
  `update` date NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `latest_update`
--

INSERT INTO `latest_update` (`id`, `user_id`, `title`, `details`, `update`, `status`, `edate`) VALUES
(1, 15, 'Check', 0x30, '2011-01-27', 'active', '2011-01-27 07:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `type` varchar(8) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `code` varchar(32) NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company_id`, `user_id`, `email`, `password`, `fname`, `type`, `status`, `code`, `edate`) VALUES
(21, 17, 15, 'evan@kmark.com', 'd033e22ae348aeb5', 'Evan', 'user', 'active', '', '2010-12-08 19:20:16'),
(15, 17, 15, 'tapan29bd@gmail.com', 'd033e22ae348aeb5', 'Tapan', 'sa', 'active', '', '2010-12-08 04:26:10'),
(23, 22, 15, 'tapan29bd@yahoo.com', 'd033e22ae348aeb5', 'Tapan Kumer Das', 'user', 'active', '', '2011-02-04 19:55:37'),
(24, 22, 15, 'test@yahoo.com', 'd033e22ae348aeb5', 'tapan', 'user', 'active', '', '2011-05-10 17:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `voucher_no` int(11) NOT NULL,
  `voucher_date` date NOT NULL,
  `chart_acc_id` int(11) NOT NULL,
  `memo` text NOT NULL,
  `amount` double NOT NULL,
  `type` enum('debit','credit') NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `company_id`, `user_id`, `voucher_no`, `voucher_date`, `chart_acc_id`, `memo`, `amount`, `type`, `edate`) VALUES
(2, 22, 23, 345, '0000-00-00', 4, 'dsfadsf', 1000, 'debit', '2011-05-08 15:50:36'),
(3, 22, 23, 432, '0000-00-00', 1, 'dsaf', 500, 'debit', '2011-05-08 15:51:28'),
(4, 22, 23, 456, '0000-00-00', 2, 'dsaf', 800, 'credit', '2011-05-08 15:52:01'),
(5, 22, 23, 4556, '0000-00-00', 7, 'dfadsfadsf', 5000, 'credit', '2011-05-10 14:32:38'),
(6, 22, 23, 1234321, '0000-00-00', 8, '', 1000, 'debit', '2011-05-14 13:56:30');
