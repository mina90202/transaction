-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 11:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfraud`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facility_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_form` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_b_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maturity_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drawdown_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_b_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cr_s_b` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_sb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_trs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avgtime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `officer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rule_hitted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `justification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disbursement_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
