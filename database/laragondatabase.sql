-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2026 at 03:37 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laragondatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `subscriberID` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `subscription_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`subscriberID`, `email`, `subscription_date`) VALUES
(1, 'geloadrian24@gmail.com', '2026-01-17 23:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `pending_registrations`
--

CREATE TABLE `pending_registrations` (
  `registration_id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `otp_hash` varchar(255) NOT NULL,
  `otp_expires_at` int NOT NULL,
  `eula_accepted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pending_registrations`
--

INSERT INTO `pending_registrations` (`registration_id`, `email`, `phone`, `otp_hash`, `otp_expires_at`, `eula_accepted_at`, `created_at`) VALUES
(1, 'geloadrian24@gmail.com', '0', '$2y$10$N4uaMG5Xat5kVdVmtrwxOu1vnUlIP7jGy9fwJdnl5IYf8288z98g6', 1769328521, '2026-01-25 15:58:41', '2026-01-25 15:58:41'),
(19, 'geloadrian24@gmail.com', '0', '$2y$10$M/Uv.sifIJr.Me3dVPbznuWEBP.//4ZZ498A6Uf/H/QDo0GKGD.WO', 1769450451, '2026-01-27 01:50:51', '2026-01-27 01:50:51'),
(20, 'geloadrian24@gmail.com', '0', '$2y$10$MFUCh3SaKH/QpOmTuXsywuXfRIK.M9AlwKzBEVTyv3f/uIoSK.096', 1769450691, '2026-01-27 01:54:51', '2026-01-27 01:54:51'),
(21, 'geloadrian24@gmail.com', '0', '$2y$10$ch11XefRas8gdF8bF9/PSuWVGJd6Hf6jtwOP6Jbi7PhJNJgyRzHBq', 1769450756, '2026-01-27 01:55:56', '2026-01-27 01:55:56'),
(22, 'geloadrian24@gmail.com', '0', '$2y$10$qSpE7wDUB2EmI1npEYKMiuR.zqtSyOCVSPjWSOEuPa1saYSwoHvUS', 1769450933, '2026-01-27 01:58:53', '2026-01-27 01:58:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`subscriberID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `subscriberID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  MODIFY `registration_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
