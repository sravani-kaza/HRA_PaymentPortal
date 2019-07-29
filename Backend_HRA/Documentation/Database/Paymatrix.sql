-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2018 at 05:47 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paymatrix2`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS `Paymatrix`;
CREATE SCHEMA `Paymatrix`;
USE `Paymatrix`;


--
-- Table structure for table `landlord`
--
DROP TABLE IF EXISTS `landlord`;
CREATE TABLE `landlord` (
  `landlord_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `account_holder_name` varchar(256) NOT NULL,
  -- `email` varchar(256) NOT NULL,
  -- `phone_number` varchar(11) NOT NULL,
  -- `pin` varchar(6) NOT NULL,
  `bank_name` varchar(256) NOT NULL,
  `ifsc` varchar(32) NOT NULL,
  `account_number` varchar(32) NOT NULL,
  `maintainer_name` varchar(256) NOT NULL,
  `maintainer_bank_name` varchar(256) NOT NULL,
  `maintainer_ifsc` varchar(32) NOT NULL,
  `maintainer_account_no` varchar(32) NOT NULL,
  `landlord_city` varchar(256) NOT NULL,
  `landlord_state` varchar(128) NOT NULL,
  `pan_number` varchar(10) DEFAULT NULL,
  `pan_doc` varchar(256) DEFAULT NULL COMMENT 'filename',
  -- `account_type` int(11) NOT NULL COMMENT '1 = Rent, 2 = Maintenance',
  `plus_code` varchar(10) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--
DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `rent_deposit` double NOT NULL,
  `rent_amount` double NOT NULL,
  `rent_maintenance` double NOT NULL,
  `rent_due_date` int(11) NOT NULL COMMENT 'The date when rent is payed each month.',
  `maintenance_due_date` int(11) NOT NULL COMMENT 'Maintenance due date.',
  `staying_since` date NOT NULL COMMENT 'The date of starting of the rent agreement',
  `paid_secuirty_deposit` varchar(256) DEFAULT NULL, 
  `property_image` varchar(256) DEFAULT NULL,
  `door_number` varchar(256) NOT NULL,
  `society` varchar(256) NOT NULL,
  `area` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(128) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `plus_code` varchar(10) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Audit Column',
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Audit Column'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_documents`
--
DROP TABLE IF EXISTS `property_documents`;
CREATE TABLE `property_documents` (
  `property_id` int(11) NOT NULL,
  `landlord_id` int(11) NOT NULL,
  -- `pan_number` varchar(10) NOT NULL,
  -- `pan_doc` varchar(256) NOT NULL COMMENT 'filename',
  `agreement_start` date NOT NULL,
  `agreement_end` date NOT NULL,
  `rent_agreement` varchar(256) DEFAULT NULL COMMENT 'filename',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `transactions`
--
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `landlord_id` int(11) NOT NULL,
  `tenant_name` varchar(256) NOT NULL,
  `tenant_address` varchar(256) NOT NULL, 
  `tenant_phone` varchar(256) NOT NULL, 
  `landlord_name` varchar(256) NOT NULL,
  `landlord_address` varchar(256) NOT NULL,
  -- `landlord_phone` varchar(256) NOT NULL,
  `acc_holder_name` varchar(256) NOT NULL,
  `acc_number` varchar(256) NOT NULL,
  `bank_name` varchar(256) NOT NULL,
  `bank_ifsc` varchar(256) NOT NULL,
  `mode_of_payment` varchar(256) NOT NULL,
  `date` date NOT NULL COMMENT 'Date of Transaction.',
  `rent_month` varchar(256) NOT NULL COMMENT 'Month and Year of Rent Paid', 
  `rent_amount` double NOT NULL,
  `remarks` varchar(256) DEFAULT NULL,
  `receipt` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL,
  `rent_receipt` varchar(256) DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `landlord_id` (`landlord_id`);
--
-- Indexes for table `landlord`
--

ALTER TABLE `landlord`
  ADD PRIMARY KEY (`landlord_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_documents`
--
ALTER TABLE `property_documents`
  ADD PRIMARY KEY (`property_id`,`landlord_id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `landlord_id` (`landlord_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `landlord`
--
ALTER TABLE `landlord`
  MODIFY `landlord_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for table `landlord`
--
ALTER TABLE `landlord`
  ADD CONSTRAINT `landlord_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_documents`
--
ALTER TABLE `property_documents`
  ADD CONSTRAINT `property_documents_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `property_documents_ibfk_2` FOREIGN KEY (`landlord_id`) REFERENCES `landlord` (`landlord_id`) ON DELETE CASCADE ON UPDATE CASCADE;


--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`landlord_id`) REFERENCES `landlord` (`landlord_id`) ON DELETE CASCADE ON UPDATE CASCADE;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
