-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2026 at 05:40 AM
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
-- Table structure for table `broadcasts`
--

CREATE TABLE `broadcasts` (
  `broadcast_id` int NOT NULL,
  `title` varchar(150) NOT NULL,
  `announcement_message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `theme_color` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'bg-success',
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `expires_at` date DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `broadcasts`
--

INSERT INTO `broadcasts` (`broadcast_id`, `title`, `announcement_message`, `theme_color`, `status`, `expires_at`, `created_by`, `created_at`) VALUES
(8, 'Test Broadcast', 'this is a sample announcement', 'bg-danger', 'archived', '2026-12-18', 'Admin', '2026-03-01'),
(9, 'Sample Urgent Announcement', 'red', 'bg-danger', 'published', '2026-10-01', 'Admin', '2026-03-01'),
(13, 'Broadcast with Log - TRC', 'i just edited this one lmao', 'bg-warning', 'archived', '2026-05-07', 'Admin', '2026-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `log_owner` varchar(25) NOT NULL,
  `log_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `log_type` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `student_id`, `log_owner`, `log_description`, `log_type`, `log_date`) VALUES
(59, 71, 'Ernest Angelo Del Rosario', 'New Student Registration', 'Registration', '2026-02-12 20:04:10'),
(60, 72, 'Giorno Giovanna', 'New Student Registration', 'Registration', '2026-02-12 20:06:53'),
(61, NULL, 'Subscription', 'New newsletter subscription', 'Subscription', '2026-02-12 20:21:46'),
(62, 73, 'GAMAKEN Another Day', 'New Student Registration', 'Registration', '2026-02-13 16:17:35'),
(63, 94, 'Alfreda Stark', 'New Student Registration', 'Registration', '2026-02-17 23:40:49'),
(64, 104, 'Ernest Angelo Del Rosario', 'New Student Registration', 'Registration', '2026-02-18 02:11:11'),
(65, 105, 'Urielle Mcclain', 'New Student Registration', 'Registration', '2026-02-18 12:45:57'),
(66, 106, 'Kyle Giles', 'New Student Registration', 'Registration', '2026-02-18 12:47:16'),
(67, 107, 'Maxwell Lynn', 'New Student Registration', 'Registration', '2026-02-18 12:49:02'),
(68, 108, 'Gemma Head', 'New Student Registration', 'Registration', '2026-02-18 18:44:46'),
(69, NULL, 'Rigel Warner', 'NewAlumniRegistration', 'Registration', '2026-02-18 20:14:04'),
(70, NULL, 'Haley Crosby', 'New Alumni Registration', 'Registration', '2026-02-18 20:24:04'),
(71, 109, 'Kelsie Wallace', 'New student Registration', 'Registration', '2026-02-18 20:33:01'),
(72, 110, 'Beverly Porter', 'New Alumni Registration', 'Registration', '2026-02-18 21:32:04'),
(73, 111, 'Ernest Angelo Del Rosario', 'New Alumni Registration', 'Registration', '2026-02-18 21:57:20'),
(74, 112, 'Petra Brewer', 'New Student Registration', 'Registration', '2026-02-18 22:23:34'),
(75, 113, 'Kylee Frazier', 'New Student Registration', 'Registration', '2026-02-18 23:10:36'),
(76, 114, 'Jemima Cummings', 'New Alumni Registration', 'Registration', '2026-02-18 23:33:26'),
(77, 115, 'Adrian Reyes', 'New Alumni Registration', 'Registration', '2026-02-19 18:25:00'),
(78, 116, 'Shereece Claire Degula', 'New Student Registration', 'Registration', '2026-02-19 18:39:28'),
(79, 117, 'Yano John Rey', 'New Student Registration', 'Registration', '2026-02-19 18:45:52'),
(80, NULL, 'Subscription', 'New Newsletter Subscription', 'Subscription', '2026-02-19 23:18:18'),
(81, 117, 'Yano John Rey', 'Verified by Admin', 'Verified', '2026-02-20 23:28:48'),
(82, 116, 'Shereece Claire Degula', 'Verified by Admin', 'Verified', '2026-02-20 23:30:26'),
(83, 115, 'Adrian Reyes', 'Verified by Admin', 'Verified', '2026-02-20 23:32:49'),
(84, 113, 'Kylee Frazier', 'Rejected by Admin', 'Verified', '2026-02-20 23:51:33'),
(85, 113, 'Kylee Frazier', 'Rejected by Admin', 'Rejected', '2026-02-20 23:54:17'),
(86, 114, 'Jemima Cummings', 'Rejected by Admin', 'Rejected', '2026-02-21 00:28:28'),
(87, 112, 'Petra Brewer', 'Rejected by Admin', 'Rejected', '2026-02-21 00:28:30'),
(88, 111, 'Ernest Angelo Del Rosario', 'Rejected by Admin', 'Rejected', '2026-02-21 00:28:32'),
(89, 117, 'Yano John Rey', 'Verified by Admin', 'Verified', '2026-02-21 23:56:47'),
(90, 115, 'Adrian Reyes', 'Verified by Admin', 'Verified', '2026-02-21 23:56:50'),
(91, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 00:59:22'),
(92, 113, 'Kylee Frazier', 'Rejected by Admin', 'Rejected', '2026-02-22 15:01:14'),
(93, 112, 'Petra Brewer', 'Rejected by Admin', 'Rejected', '2026-02-22 15:01:23'),
(94, 116, 'Shereece Claire Degula', 'Verified by Admin', 'Verified', '2026-02-22 15:01:28'),
(95, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 15:05:48'),
(96, 117, 'Yano John Rey', 'Rejected by Admin', 'Rejected', '2026-02-22 15:09:01'),
(97, 116, 'Shereece Claire Degula', 'Verified by Admin', 'Verified', '2026-02-22 15:10:59'),
(98, 115, 'Adrian Reyes', 'Verified by Admin', 'Verified', '2026-02-22 15:11:08'),
(99, 113, 'Kylee Frazier', 'Verified by Admin', 'Verified', '2026-02-22 15:11:10'),
(100, 114, 'Jemima Cummings', 'Verified by Admin', 'Verified', '2026-02-22 15:11:14'),
(101, 112, 'Petra Brewer', 'Rejected by Admin', 'Rejected', '2026-02-22 15:11:16'),
(102, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 15:21:36'),
(103, 117, 'Yano John Rey', 'Verified by Admin', 'Verified', '2026-02-22 15:21:41'),
(104, 116, 'Shereece Claire Degula', 'Verified by Admin', 'Verified', '2026-02-22 15:21:53'),
(105, 115, 'Adrian Reyes', 'Verified by Admin', 'Verified', '2026-02-22 15:21:56'),
(107, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 20:04:27'),
(108, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 20:09:14'),
(109, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-22 20:10:10'),
(110, 116, 'Shereece Claire Degula', 'Verified by Admin', 'Verified', '2026-02-22 20:10:35'),
(111, 117, 'Yano John Rey', 'Verified by Admin', 'Verified', '2026-02-22 20:10:37'),
(112, 115, 'Adrian Reyes', 'Verified by Admin', 'Verified', '2026-02-22 20:10:40'),
(121, 111, 'Ernest Angelo Del Rosario', 'Verified by Admin', 'Verified', '2026-02-23 21:38:50'),
(122, 112, 'Petra Brewer', 'Rejected by Admin', 'Rejected', '2026-02-24 22:28:59'),
(123, 118, 'Macey Lawrence', 'New Student Registration', 'Registration', '2026-02-24 22:39:20'),
(124, 117, 'Yano John Rey', 'Verified by Admin', 'Verified', '2026-02-25 13:10:39'),
(125, 117, 'Yano John Rey', 'Edited by Admin', 'Information Edit', '2026-02-26 21:46:11'),
(126, 116, 'Shereece Claire Degula', 'Edited by Admin', 'Information Edit', '2026-02-27 14:35:38'),
(127, NULL, 'Admin', 'Admin posted an Announcement', 'Announcement', '2026-03-02 14:10:00'),
(128, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:00:11'),
(129, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:21:17'),
(130, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:22:03'),
(131, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:22:20'),
(132, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:22:49'),
(133, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:22:59'),
(134, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:23:19'),
(135, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:25:56'),
(136, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:26:02'),
(137, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:36:43'),
(138, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 18:59:47'),
(139, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 19:55:43'),
(140, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 19:56:05'),
(141, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 19:56:12'),
(142, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-02 19:56:21'),
(143, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-03 11:13:33'),
(144, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-03 11:18:25'),
(145, NULL, 'Broadcast Posted', 'Admin posted an Announcement', 'Announcement', '2026-03-03 11:18:51'),
(146, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-03 11:20:57'),
(147, NULL, 'Broadcast Edited', 'Admin edited an Announcement', 'Announcement Edit', '2026-03-03 11:38:02');

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
(1, 'geloadrian24@gmail.com', '2026-01-17 23:31:22'),
(163, 'ggio64290@gmail.com', '2026-02-12 20:21:46'),
(164, 'student@gmail.com', '2026-02-19 23:18:18');

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
(187, 'gugy@mailinator.com', '1972974', '$2y$10$0C.klZLbUvWceZGPT0Z6AO.DeVrBg9bx5lnZusP2E4hTXOsBvawqu', 1771937868, '2026-02-24 20:47:48', '2026-02-24 20:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_caption` varchar(500) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int NOT NULL,
  `program_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`program_id`, `program_name`) VALUES
(1, 'BEED'),
(2, 'BSA'),
(3, 'BSCS'),
(4, 'BSBA'),
(5, 'BSN');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_information`
--

CREATE TABLE `teacher_information` (
  `teacher_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `student_id` int NOT NULL,
  `account_email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL,
  `recovery_email` varchar(255) NOT NULL,
  `account_role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `activationStatus` varchar(20) DEFAULT 'active',
  `stricted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `student_id`, `account_email`, `account_username`, `account_password`, `recovery_email`, `account_role`, `activationStatus`, `stricted`) VALUES
(57, 111, 'geloadrian24@gmail.com', 'mofu', '$2y$10$pMPMxpFzfFogZYFwfTBi1OPksnC4FamXiSNNqXiIxobmu4UZXmKne', 'gamain2424@gmail.com', 'Student', 'active', 0),
(58, 112, 'gamain2424@gmail.com', 'mimaqe', '$2y$10$uPEU.GaDL/qktq00uc5ObuGyTuufxSldnEQos7hqPs4d/G7SAmzES', 'cohe@mailinator.com', 'Student', 'disabled', 0),
(59, 113, 'ggio64290@gmail.com', 'kesorus', '$2y$10$eSUClPnQVf.wqh2vhLJtdesgjFUrWTKcOaLM3X22ZJCATw9JW8Swy', 'taxifafi@mailinator.com', 'Student', 'disabled', 0),
(60, 114, 'dfsquidart@gmail.com', 'xakiwili', '$2y$10$o2qnPfhOZbg8D/0gVJXJn.HrWz3MNqYUnPEXCYBDkyiFNkY8sbUOC', 'qezudefic@mailinator.com', 'Alumni', 'disabled', 0),
(61, 115, 'radrian4461@gmail.com', 'adrian', '$2y$10$YdY.TwY78krWPYQXBXZ.YOEl/X9tv.JPV5CUz3C/JFU6zTHYHuL.6', 'bautistareyes200100@gmail.com', 'Alumni', 'active', 0),
(62, 116, 'shereecedegula@gmail.com', 'kklaree', '$2y$10$97.V30pl4dvAMdZzfAXmvuPq0fB./w05IWjmLjrdXNo5YNvtiFjOa', 'shereecedegula@gmail.com', 'Student', 'active', 0),
(63, 117, 'johnreyano05@gmail.com', 'CocaDew', '$2y$10$tiaYk6u6ciMkX/BoSORRTuZL1YqvGckp0i7EFwnQ.M8lC24G.8zke', 'johnyano@gmail.com', 'Student', 'active', 0),
(64, 118, 'gamain2424@gmail.com', 'busukutoda', '$2y$10$fmitfGFzJ40WzpwAXm9ro.OuR0oekVsA6My6CS.I75xNgC8qI4SXq', 'fygofubeka@mailinator.com', 'Student', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `student_id` int NOT NULL,
  `current_status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `role` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `MiddleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Ext_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `BirthDate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Age` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CivilStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PhoneNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `City` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ZipCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `YearLevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Unplaced',
  `ApplicationType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `GuardianName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N/A',
  `Relationship` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N/A',
  `GuardianPhone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N/A',
  `GuardianEmail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'N/A',
  `GraduationYear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Honors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `EmploymentStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CompanyName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `JobTitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `WorkLocation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `RegistrationDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`student_id`, `current_status`, `role`, `FirstName`, `LastName`, `MiddleName`, `Ext_Name`, `BirthDate`, `Age`, `Nationality`, `CivilStatus`, `Gender`, `Email`, `PhoneNumber`, `Address`, `Barangay`, `City`, `Province`, `ZipCode`, `Program`, `YearLevel`, `ApplicationType`, `GuardianName`, `Relationship`, `GuardianPhone`, `GuardianEmail`, `GraduationYear`, `Honors`, `EmploymentStatus`, `CompanyName`, `JobTitle`, `WorkLocation`, `RegistrationDate`) VALUES
(111, 'verified', 'Alumni', 'Ernest Angelo', 'Del Rosario', 'Flores', 'N/A', '2004-02-24', '22', 'Filipino', 'single', 'Male', 'geloadrian24@gmail.com', '09199540926', '110', 'Culis', 'Hermosa', 'Bataan', '2111', 'BSCS', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2026', 'N/A', 'Employed', 'NSPIRE', 'Web Developer', 'Balanga, Bataan', '2026-02-18 13:57:20.026194'),
(112, 'pending', 'Student', 'Petra', 'Brewer', 'Jade Huffman', 'Paula Alford', '2022-09-28', '3', 'Placeat reprehender', 'widow', 'Male', 'gamain2425@gmail.com', '12384316749', '452', 'Excepteur aut corpor', 'Obcaecati culpa volu', 'Voluptatibus illum', '77820', 'BEED', 'N/A', 'irregular', 'bydinuv', 'Father', '11227373926', 'sagiqosaca@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 14:23:34.344020'),
(113, 'pending', 'Student', 'Kylee', 'Frazier', 'Stuart Britt', 'Lacota Hickman', '2004-08-14', '21', 'Vero explicabo Non', 'married', 'Male', 'ggio64290@gmail.com', '17547531823', '108', 'Eius molestiae aliqu', 'Voluptatem Ut quo c', 'Minim irure aut quae', '12512', 'BSCS', 'N/A', 'regular', 'rewajodil', 'AuntUncle', '13395784753', 'wipyceg@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 15:10:36.722845'),
(114, 'pending', 'Alumni', 'Jemima', 'Cummings', 'Rooney Howard', 'Philip Walter', '2003-01-16', '23', 'Amet dolor irure de', 'separated', 'Male', 'dfsquidart@gmail.com', '18718636335', '763', 'Cum qui voluptate ip', 'Qui incidunt placea', 'Temporibus Nam commo', '91918', 'BSBA', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '1978', 'Nemo id rerum et fug', 'Self-employed', 'Nichols and Sampson Plc', 'Nulla exercitationem', 'Error voluptate exce', '2026-02-18 15:33:26.257112'),
(115, 'verified', 'Alumni', 'Adrian', 'Reyes', 'Bautista', 'n/a', '2001-06-30', '24', 'Filipino', 'single', 'Male', 'radrian4461@gmail.com', '098985634', '09562', 'Manila', 'Kaparangan', 'America', '2112', 'BSCS', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '0', 'Cum Laude', 'Self-employed', 'Google', 'CEO', 'Bataan', '2026-02-19 10:25:00.146491'),
(116, 'verified', 'Student', 'Shereece Claire', 'Degula', 'Casipit', '', '2003-10-10', '22', 'Filipino', 'single', 'Female', 'shereecedegula@gmail.com', '09674351235', '145 A. Dizon St.', 'Pto. Rivas Lote', 'Balanga City', 'Bataan', '2100', 'BSCS', 'N/A', 'regular', 'Clareece Zamora', 'Other', '09674351235', 'shereecedegula@gmail.com', '0', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-19 10:39:28.625846'),
(117, 'verified', 'Student', 'Yano', 'John Rey', 'Tamayo', 'N?A', '1987-02-26', '39', 'Filipino', 'widow', 'Male', 'johnreyano05@gmail.com', '12301293', 'no.5', 'WOW', 'Balanga', 'Bataan', '2100', 'BSCS', 'N/A', 'irregular', 'Balanon', 'StepFather', '2100', 'jl@gmail.com', '0', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-19 10:45:52.534997'),
(118, 'pending', 'Student', 'Macey', 'Lawrence', 'Abigail Oneal', 'Duncan Salazar', '2010-04-18', '15', 'Nostrum voluptatem v', 'married', 'Others', 'gamain2424@gmail.com', '18427171587', '793', 'Architecto voluptatu', 'Elit error et sit', 'Eligendi a error eni', '24018', 'BSN', 'Unplaced', 'returnee', 'hulimad', 'Other', '11352142713', 'peliqeze@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-24 14:39:20.118036');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broadcasts`
--
ALTER TABLE `broadcasts`
  ADD PRIMARY KEY (`broadcast_id`),
  ADD KEY `status` (`status`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `teacher_information`
--
ALTER TABLE `teacher_information`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broadcasts`
--
ALTER TABLE `broadcasts`
  MODIFY `broadcast_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `subscriberID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  MODIFY `registration_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_information`
--
ALTER TABLE `teacher_information`
  MODIFY `teacher_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
