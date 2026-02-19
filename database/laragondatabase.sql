-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2026 at 11:15 AM
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
(111, 'verified', 'Alumni', 'Ernest Angelo', 'Del Rosario', 'Flores', 'N/A', '2004-02-24', '21', 'Filipino', 'single', 'Male', 'geloadrian24@gmail.com', '09199540926', '110', 'Culis', 'Hermosa', 'Bataan', '2111', 'BSCS', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2026', 'N/A', 'Employed', 'NSPIRE', 'Web Developer', 'Balanga, Bataan', '2026-02-18 13:57:20.026194'),
(112, 'verified', 'Student', 'Petra', 'Brewer', 'Jade Huffman', 'Paula Alford', '2022-09-28', '3', 'Placeat reprehender', 'widow', 'Male', 'gamain2424@gmail.com', '12384316749', '452', 'Excepteur aut corpor', 'Obcaecati culpa volu', 'Voluptatibus illum', '77820', 'BEED', '3rdYear', 'alumni', 'irregular', 'bydinuv', 'Father', '11227373926', 'sagiqosaca@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 14:23:34.344020'),
(113, 'pending', 'Student', 'Kylee', 'Frazier', 'Stuart Britt', 'Lacota Hickman', '2004-08-14', '21', 'Vero explicabo Non', 'married', 'Male', 'ggio64290@gmail.com', '17547531823', '108', 'Eius molestiae aliqu', 'Voluptatem Ut quo c', 'Minim irure aut quae', '12512', 'BSCS', '2ndYear', 'alumni', 'regular', 'rewajodil', 'AuntUncle', '13395784753', 'wipyceg@mailinator.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-18 15:10:36.722845'),
(114, 'pending', 'Alumni', 'Jemima', 'Cummings', 'Rooney Howard', 'Philip Walter', '2003-01-16', '23', 'Amet dolor irure de', 'separated', 'Male', 'dfsquidart@gmail.com', '18718636335', '763', 'Cum qui voluptate ip', 'Qui incidunt placea', 'Temporibus Nam commo', '91918', 'BSBA', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '1978', 'Nemo id rerum et fug', 'Self-employed', 'Nichols and Sampson Plc', 'Nulla exercitationem', 'Error voluptate exce', '2026-02-18 15:33:26.257112'),
(115, 'pending', 'Alumni', 'Adrian', 'Reyes', 'Bautista', 'n/a', '2001-06-30', '24', 'Filipino', 'single', 'Male', 'radrian4461@gmail.com', '098985634', '09562', 'Manila', 'Kaparangan', 'America', '2112', 'BSCS', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '', 'N/A', '2008', 'Cum Laude', 'Self-employed', 'Google', 'CEO', 'Bataan', '2026-02-19 10:25:00.146491'),
(116, 'pending', 'Student', 'Shereece Claire', 'Degula', 'Casipit', '', '2003-10-10', '22', 'Filipino', 'single', 'Female', 'shereecedegula@gmail.com', '09674351235', '145 A. Dizon St.', 'Pto. Rivas Lote', 'Balanga City', 'Bataan', '2100', 'BSCS', '4thYear', 'returnee', 'regular', 'Shereece Degula', 'Other', '09674351235', 'shereecedegula@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-19 10:39:28.625846'),
(117, 'pending', 'Student', 'Yano', 'John Rey', 'Tamayo', 'N?A', '1999-06-16', '26', 'Filipino', 'widow', 'Male', 'johnreyano05@gmail.com', '12301293', 'no.5', 'WOW', 'Balanga', 'Bataan', '2100', 'BSCS', '4thYear', 'alumni', 'irregular', 'Balanon', 'StepFather', '2100', 'jl@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '2026-02-19 10:45:52.534997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
