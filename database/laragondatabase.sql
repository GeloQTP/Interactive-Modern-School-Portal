-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2026 at 03:43 PM
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
-- Table structure for table `alumni_information`
--

CREATE TABLE `alumni_information` (
  `alumni_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `enrollment_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `log_owner` varchar(25) NOT NULL,
  `log_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `current_status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `student_id`, `log_owner`, `log_description`, `current_status`, `log_date`) VALUES
(59, 71, 'Ernest Angelo Del Rosario', 'New Student Registration', 'pending', '2026-02-12 20:04:10'),
(60, 72, 'Giorno Giovanna', 'New Student Registration', 'pending', '2026-02-12 20:06:53'),
(61, NULL, 'Subscription', 'New newsletter subscription', 'subscription', '2026-02-12 20:21:46'),
(62, 73, 'GAMAKEN Another Day', 'New Student Registration', 'pending', '2026-02-13 16:17:35'),
(63, 94, 'Alfreda Stark', 'New Student Registration', 'pending', '2026-02-17 23:40:49'),
(64, 104, 'Ernest Angelo Del Rosario', 'New Student Registration', 'pending', '2026-02-18 02:11:11'),
(65, 105, 'Urielle Mcclain', 'New Student Registration', 'pending', '2026-02-18 12:45:57'),
(66, 106, 'Kyle Giles', 'New Student Registration', 'pending', '2026-02-18 12:47:16'),
(67, 107, 'Maxwell Lynn', 'New Student Registration', 'pending', '2026-02-18 12:49:02'),
(68, 108, 'Gemma Head', 'New Student Registration', 'pending', '2026-02-18 18:44:46'),
(69, NULL, 'Rigel Warner', 'NewAlumniRegistration', 'pending', '2026-02-18 20:14:04'),
(70, NULL, 'Haley Crosby', 'New Alumni Registration', 'pending', '2026-02-18 20:24:04'),
(71, 109, 'Kelsie Wallace', 'New student Registration', 'pending', '2026-02-18 20:33:01'),
(72, 110, 'Beverly Porter', 'New Alumni Registration', 'pending', '2026-02-18 21:32:04'),
(73, 111, 'Ernest Angelo Del Rosario', 'New Alumni Registration', 'pending', '2026-02-18 21:57:20'),
(74, 112, 'Petra Brewer', 'New Student Registration', 'pending', '2026-02-18 22:23:34'),
(75, 113, 'Kylee Frazier', 'New Student Registration', 'pending', '2026-02-18 23:10:36'),
(76, 114, 'Jemima Cummings', 'New Alumni Registration', 'pending', '2026-02-18 23:33:26');

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
(163, 'ggio64290@gmail.com', '2026-02-12 20:21:46');

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

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int NOT NULL,
  `program_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `Email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL,
  `recovery_email` varchar(255) NOT NULL,
  `account_role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `student_id`, `Email`, `account_username`, `account_password`, `recovery_email`, `account_role`) VALUES
(57, 111, 'geloadrian24@gmail.com', 'mofu', '$2y$10$pMPMxpFzfFogZYFwfTBi1OPksnC4FamXiSNNqXiIxobmu4UZXmKne', 'gamain2424@gmail.com', 'Alumni'),
(58, 112, 'gamain2424@gmail.com', 'mimaqe', '$2y$10$uPEU.GaDL/qktq00uc5ObuGyTuufxSldnEQos7hqPs4d/G7SAmzES', 'cohe@mailinator.com', 'Student'),
(59, 113, 'ggio64290@gmail.com', 'kesorus', '$2y$10$eSUClPnQVf.wqh2vhLJtdesgjFUrWTKcOaLM3X22ZJCATw9JW8Swy', 'taxifafi@mailinator.com', 'Student'),
(60, 114, 'dfsquidart@gmail.com', 'xakiwili', '$2y$10$o2qnPfhOZbg8D/0gVJXJn.HrWz3MNqYUnPEXCYBDkyiFNkY8sbUOC', 'qezudefic@mailinator.com', 'Alumni');

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
  `YearLevel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `StudentType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `EnrollmentType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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

INSERT INTO `user_information` (`student_id`, `current_status`, `role`, `FirstName`, `LastName`, `MiddleName`, `Ext_Name`, `BirthDate`, `Age`, `Nationality`, `CivilStatus`, `Gender`, `Email`, `PhoneNumber`, `Address`, `Barangay`, `City`, `Province`, `ZipCode`, `Program`, `YearLevel`, `StudentType`, `EnrollmentType`, `GuardianName`, `Relationship`, `GuardianPhone`, `GuardianEmail`, `GraduationYear`, `Honors`, `EmploymentStatus`, `CompanyName`, `JobTitle`, `WorkLocation`, `RegistrationDate`) VALUES
(111, 'pending', 'Alumni', 'Ernest Angelo', 'Del Rosario', 'Flores', 'N/A', '2004-02-24', '21', 'Filipino', 'single', 'Male', 'geloadrian24@gmail.com', '09199540926', '110', 'Culis', 'Hermosa', 'Bataan', '2111', 'BSCS', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2026', 'N/A', 'Employed', 'NSPIRE', 'Web Developer', 'Balanga, Bataan', '2026-02-18 13:57:20.026194'),
(112, 'pending', 'Student', 'Petra', 'Brewer', 'Jade Huffman', 'Paula Alford', '2022-09-28', '3', 'Placeat reprehender', 'widow', 'Male', 'gamain2424@gmail.com', '12384316749', '452', 'Excepteur aut corpor', 'Obcaecati culpa volu', 'Voluptatibus illum', '77820', 'BEED', '3rdYear', 'alumni', 'irregular', 'bydinuv', 'Father', '11227373926', 'sagiqosaca@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 14:23:34.344020'),
(113, 'pending', 'Student', 'Kylee', 'Frazier', 'Stuart Britt', 'Lacota Hickman', '2004-08-14', '21', 'Vero explicabo Non', 'married', 'Male', 'ggio64290@gmail.com', '17547531823', '108', 'Eius molestiae aliqu', 'Voluptatem Ut quo c', 'Minim irure aut quae', '12512', 'BSCS', '2ndYear', 'alumni', 'regular', 'rewajodil', 'AuntUncle', '13395784753', 'wipyceg@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 15:10:36.722845'),
(114, 'pending', 'Alumni', 'Jemima', 'Cummings', 'Rooney Howard', 'Philip Walter', '2003-01-16', '23', 'Amet dolor irure de', 'separated', 'Male', 'dfsquidart@gmail.com', '18718636335', '763', 'Cum qui voluptate ip', 'Qui incidunt placea', 'Temporibus Nam commo', '91918', 'BSBM', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '1978', 'Nemo id rerum et fug', 'Self-employed', 'Nichols and Sampson Plc', 'Nulla exercitationem', 'Error voluptate exce', '2026-02-18 15:33:26.257112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_information`
--
ALTER TABLE `alumni_information`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`);

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
-- AUTO_INCREMENT for table `alumni_information`
--
ALTER TABLE `alumni_information`
  MODIFY `alumni_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `subscriberID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  MODIFY `registration_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_information`
--
ALTER TABLE `teacher_information`
  MODIFY `teacher_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
