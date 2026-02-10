-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2026 at 06:05 PM
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int NOT NULL,
  `student_id` int NOT NULL,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL,
  `recovery_email` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `student_id`, `account_username`, `account_password`, `recovery_email`, `role`) VALUES
(40, 51, 'mofu', '$2y$10$10uYyZTOrdzEwPZrHt4rc.cTr1t7erSm8SdsphCPHrH1k9zZm.vn6', 'gamain2424@gmail.com', 'student'),
(42, 53, 'guranya', '$2y$10$UqFLTU/fMaT2rWZsnAFkDuYBwP.mNmxQ6UJL8Qx8NsMSCjuRMf7Xm', 'gamain2424@gmail.coms', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_information`
--

CREATE TABLE `alumni_information` (
  `alumni_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int NOT NULL,
  `student_id` int NOT NULL,
  `log_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `student_id`, `log_description`, `status`, `log_date`) VALUES
(4, 51, 'New Student Registration', 'rejected', '2026-02-09 23:38:13'),
(5, 52, 'New Student Registration', 'pending', '2026-02-09 23:42:25'),
(6, 53, 'New Student Registration', 'pending', '2026-02-10 13:46:51'),
(7, 1, 'Student account created', 'approved', '2026-02-10 15:49:28'),
(8, 2, 'Student account created', 'approved', '2026-02-10 15:49:28'),
(9, 3, 'Student account created', 'approved', '2026-02-10 15:49:28'),
(10, 4, 'Student account created', 'approved', '2026-02-10 15:49:28'),
(11, 5, 'Student account created', 'approved', '2026-02-10 15:49:28'),
(12, 6, 'Profile information updated', 'approved', '2026-02-10 15:49:28'),
(13, 7, 'Profile information updated', 'rejected', '2026-02-10 15:49:28'),
(14, 8, 'Profile information updated', 'approved', '2026-02-10 15:49:28'),
(15, 9, 'Profile information updated', 'approved', '2026-02-10 15:49:28'),
(16, 10, 'Profile information updated', 'approved', '2026-02-10 15:49:28'),
(17, 11, 'Student enrolled for the semester', 'approved', '2026-02-10 15:49:28'),
(18, 12, 'Student enrolled for the semester', 'approved', '2026-02-10 15:49:28'),
(19, 13, 'Student enrolled for the semester', 'approved', '2026-02-10 15:49:28'),
(20, 14, 'Student enrolled for the semester', 'rejected', '2026-02-10 15:49:28'),
(21, 15, 'Student enrolled for the semester', 'approved', '2026-02-10 15:49:28'),
(22, 16, 'Login attempt recorded', 'approved', '2026-02-10 15:49:28'),
(23, 17, 'Login attempt recorded', 'approved', '2026-02-10 15:49:28'),
(24, 18, 'Login attempt recorded', 'pending', '2026-02-10 15:49:28'),
(25, 19, 'Login attempt recorded', 'approved', '2026-02-10 15:49:28'),
(26, 20, 'Login attempt recorded', 'pending', '2026-02-10 15:49:28'),
(27, 21, 'Password change request', 'approved', '2026-02-10 15:49:28'),
(28, 22, 'Password change request', 'approved', '2026-02-10 15:49:28'),
(29, 23, 'Password change request', 'approved', '2026-02-10 15:49:28'),
(30, 24, 'Password change request', 'approved', '2026-02-10 15:49:28'),
(31, 25, 'Password change request', 'approved', '2026-02-10 15:49:28'),
(32, 26, 'Email update request', 'approved', '2026-02-10 15:49:28'),
(33, 27, 'Email update request', 'approved', '2026-02-10 15:49:28'),
(34, 28, 'Email update request', 'approved', '2026-02-10 15:49:28'),
(35, 29, 'Email update request', 'approved', '2026-02-10 15:49:28'),
(36, 30, 'Email update request', 'approved', '2026-02-10 15:49:28'),
(37, 31, 'Student logout recorded', 'approved', '2026-02-10 15:49:28'),
(38, 32, 'Student logout recorded', 'approved', '2026-02-10 15:49:28'),
(39, 33, 'Student logout recorded', 'approved', '2026-02-10 15:49:28'),
(40, 34, 'Student logout recorded', 'approved', '2026-02-10 15:49:28'),
(41, 35, 'Student logout recorded', 'approved', '2026-02-10 15:49:28'),
(42, 36, 'Account verification request', 'pending', '2026-02-10 15:49:28'),
(43, 37, 'Account verification request', 'approved', '2026-02-10 15:49:28'),
(44, 38, 'Account verification request', 'approved', '2026-02-10 15:49:28'),
(45, 39, 'Account verification request', 'pending', '2026-02-10 15:49:28'),
(46, 40, 'Account verification request', 'approved', '2026-02-10 15:49:28'),
(47, 41, 'Profile photo upload request', 'approved', '2026-02-10 15:49:28'),
(48, 42, 'Profile photo upload request', 'approved', '2026-02-10 15:49:28'),
(49, 43, 'Profile photo upload request', 'approved', '2026-02-10 15:49:28'),
(50, 44, 'Profile photo upload request', 'approved', '2026-02-10 15:49:28'),
(51, 45, 'Profile photo upload request', 'approved', '2026-02-10 15:49:28'),
(52, 46, 'Student record archival request', 'pending', '2026-02-10 15:49:28'),
(53, 47, 'Student record archival request', 'pending', '2026-02-10 15:49:28'),
(54, 48, 'Student record archival request', 'pending', '2026-02-10 15:49:28'),
(55, 49, 'Student record archival request', 'pending', '2026-02-10 15:49:28'),
(56, 50, 'Student record archival request', 'pending', '2026-02-10 15:49:28');

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
(159, 'test@gmail.com', '2026-02-04 13:41:37');

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
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `student_id` int NOT NULL,
  `state` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'registered',
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'pending',
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `Ext_Name` varchar(255) NOT NULL,
  `BirthDate` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `ZipCode` varchar(255) NOT NULL,
  `Program` varchar(255) NOT NULL,
  `YearLevel` varchar(255) NOT NULL,
  `StudentType` varchar(255) NOT NULL,
  `EnrollmentType` varchar(255) NOT NULL,
  `GuardianName` varchar(255) NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `GuardianPhone` varchar(255) NOT NULL,
  `GuardianEmail` varchar(255) NOT NULL,
  `RegistrationDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`student_id`, `state`, `status`, `FirstName`, `LastName`, `MiddleName`, `Ext_Name`, `BirthDate`, `Age`, `Nationality`, `CivilStatus`, `Gender`, `Email`, `PhoneNumber`, `Address`, `Barangay`, `City`, `Province`, `ZipCode`, `Program`, `YearLevel`, `StudentType`, `EnrollmentType`, `GuardianName`, `Relationship`, `GuardianPhone`, `GuardianEmail`, `RegistrationDate`) VALUES
(51, 'registered', 'pending', 'Ernest Angelo', 'Del Rosario', 'Flores', 'N/A', '2004-02-24', '21', 'Filipino', 'single', '0', 'geloadrian24@gmail.com', '09199540926', '110', 'Culis', 'Hermosa', 'Bataan', '2111', 'computer_science', '4thYear', 'returnee', 'regular', 'Eloisa Del Rosario', 'Mother', '09772454795', 'eloisadelrosario80@gmail.com', '2026-02-09 15:38:13.400933'),
(53, 'registered', 'pending', 'Main', 'Gam', '2424', 'N/A', '2026-02-12', '-1', 'Filo', 'separated', '0', 'gamain2424@gmail.com', '234234234', '112', 'Lucis', 'Samoher', 'gamain2424@gmail.com', '2111', 'education', '1stYear', 'newStudent', 'irregular', 'gamain2424@gmail.com', 'Mother', '234243234', 'gamain2424@gmail.com', '2026-02-10 05:46:51.990385'),
(54, 'registered', 'pending', 'Juan', 'Dela Cruz', 'M', '', '2003-01-15', '21', 'Filipino', 'Single', 'Male', 'juan1@email.com', '09170000001', 'Purok 1', 'Barangay 1', 'Quezon City', 'Metro Manila', '1101', 'BSIT', '2', 'Regular', 'Full-time', 'Maria Dela Cruz', 'Mother', '09180000001', 'maria1@email.com', '2026-02-10 07:43:29.942426'),
(55, 'registered', 'pending', 'Ana', 'Santos', 'L', '', '2002-02-20', '22', 'Filipino', 'Single', 'Female', 'ana2@email.com', '09170000002', 'Purok 2', 'Barangay 2', 'Manila', 'Metro Manila', '1000', 'BSIT', '3', 'Regular', 'Full-time', 'Jose Santos', 'Father', '09180000002', 'jose2@email.com', '2026-02-10 07:43:29.942426'),
(56, 'registered', 'pending', 'Mark', 'Reyes', 'A', '', '2004-03-10', '20', 'Filipino', 'Single', 'Male', 'mark3@email.com', '09170000003', 'Purok 3', 'Barangay 3', 'Cebu City', 'Cebu', '6000', 'BSCS', '1', 'Regular', 'Full-time', 'Liza Reyes', 'Mother', '09180000003', 'liza3@email.com', '2026-02-10 07:43:29.942426'),
(57, 'registered', 'pending', 'Liza', 'Garcia', 'B', '', '2001-04-05', '23', 'Filipino', 'Single', 'Female', 'liza4@email.com', '09170000004', 'Purok 4', 'Barangay 4', 'Davao City', 'Davao del Sur', '8000', 'BSBA', '4', 'Regular', 'Full-time', 'Ramon Garcia', 'Father', '09180000004', 'ramon4@email.com', '2026-02-10 07:43:29.942426'),
(58, 'registered', 'pending', 'Paul', 'Mendoza', 'C', '', '2003-05-12', '21', 'Filipino', 'Single', 'Male', 'paul5@email.com', '09170000005', 'Purok 5', 'Barangay 5', 'Baguio', 'Benguet', '2600', 'BSIT', '2', 'Regular', 'Full-time', 'Nena Mendoza', 'Mother', '09180000005', 'nena5@email.com', '2026-02-10 07:43:29.942426'),
(59, 'registered', 'pending', 'Karen', 'Flores', 'D', '', '2002-06-18', '22', 'Filipino', 'Single', 'Female', 'karen6@email.com', '09170000006', 'Purok 6', 'Barangay 6', 'Iloilo City', 'Iloilo', '5000', 'BSHM', '3', 'Regular', 'Full-time', 'Pedro Flores', 'Father', '09180000006', 'pedro6@email.com', '2026-02-10 07:43:29.942426'),
(60, 'registered', 'pending', 'John', 'Torres', 'E', '', '2004-07-22', '20', 'Filipino', 'Single', 'Male', 'john7@email.com', '09170000007', 'Purok 7', 'Barangay 7', 'Bacolod', 'Negros Occidental', '6100', 'BSIT', '1', 'Regular', 'Full-time', 'Grace Torres', 'Mother', '09180000007', 'grace7@email.com', '2026-02-10 07:43:29.942426'),
(61, 'registered', 'pending', 'Michelle', 'Ramos', 'F', '', '2001-08-30', '23', 'Filipino', 'Single', 'Female', 'michelle8@email.com', '09170000008', 'Purok 8', 'Barangay 8', 'Cavite City', 'Cavite', '4100', 'BSN', '4', 'Regular', 'Full-time', 'Luis Ramos', 'Father', '09180000008', 'luis8@email.com', '2026-02-10 07:43:29.942426'),
(62, 'registered', 'pending', 'Kevin', 'Lopez', 'G', '', '2003-09-14', '21', 'Filipino', 'Single', 'Male', 'kevin9@email.com', '09170000009', 'Purok 9', 'Barangay 9', 'Taguig', 'Metro Manila', '1630', 'BSIT', '2', 'Regular', 'Full-time', 'Alma Lopez', 'Mother', '09180000009', 'alma9@email.com', '2026-02-10 07:43:29.942426'),
(63, 'registered', 'pending', 'Sophia', 'Castro', 'H', '', '2002-10-25', '22', 'Filipino', 'Single', 'Female', 'sophia10@email.com', '09170000010', 'Purok 10', 'Barangay 10', 'Pasig', 'Metro Manila', '1600', 'BSBA', '3', 'Regular', 'Full-time', 'Mario Castro', 'Father', '09180000010', 'mario10@email.com', '2026-02-10 07:43:29.942426'),
(64, 'enrolled', 'pending', 'Student11', 'Lastname11', 'M', '', '2003-01-01', '21', 'Filipino', 'Single', 'Male', 'student11@email.com', '09170000011', 'Purok 11', 'Barangay 11', 'City 11', 'Province 11', '1111', 'BSIT', '2', 'Regular', 'Full-time', 'Guardian 11', 'Parent', '09180000011', 'guardian11@email.com', '2026-02-10 07:43:29.942426'),
(65, 'enrolled', 'pending', 'Student12', 'Lastname12', 'M', '', '2003-01-01', '21', 'Filipino', 'Single', 'Female', 'student12@email.com', '09170000012', 'Purok 12', 'Barangay 12', 'City 12', 'Province 12', '1112', 'BSIT', '2', 'Regular', 'Full-time', 'Guardian 12', 'Parent', '09180000012', 'guardian12@email.com', '2026-02-10 07:43:29.942426'),
(66, 'registered', 'pending', 'Student13', 'Lastname13', 'M', '', '2003-01-01', '21', 'Filipino', 'Single', 'Male', 'student13@email.com', '09170000013', 'Purok 13', 'Barangay 13', 'City 13', 'Province 13', '1113', 'BSIT', '2', 'Regular', 'Full-time', 'Guardian 13', 'Parent', '09180000013', 'guardian13@email.com', '2026-02-10 07:43:29.942426'),
(67, 'registered', 'pending', 'Student14', 'Lastname14', 'M', '', '2003-01-01', '21', 'Filipino', 'Single', 'Female', 'student14@email.com', '09170000014', 'Purok 14', 'Barangay 14', 'City 14', 'Province 14', '1114', 'BSIT', '2', 'Regular', 'Full-time', 'Guardian 14', 'Parent', '09180000014', 'guardian14@email.com', '2026-02-10 07:43:29.942426'),
(68, 'registered', 'pending', 'Student15', 'Lastname15', 'M', '', '2003-01-01', '21', 'Filipino', 'Single', 'Male', 'student15@email.com', '09170000015', 'Purok 15', 'Barangay 15', 'City 15', 'Province 15', '1115', 'BSIT', '2', 'Regular', 'Full-time', 'Guardian 15', 'Parent', '09180000015', 'guardian15@email.com', '2026-02-10 07:43:29.942426');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_information`
--

CREATE TABLE `teacher_information` (
  `teacher_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `alumni_information`
--
ALTER TABLE `alumni_information`
  ADD PRIMARY KEY (`alumni_id`);

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
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_information`
--
ALTER TABLE `teacher_information`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `alumni_information`
--
ALTER TABLE `alumni_information`
  MODIFY `alumni_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `subscriberID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  MODIFY `registration_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `teacher_information`
--
ALTER TABLE `teacher_information`
  MODIFY `teacher_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
