-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 06:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emuna1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` varchar(11) NOT NULL,
  `account_username` varchar(20) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  `applicant_ic` varchar(12) NOT NULL,
  `staff_id` varchar(11) NOT NULL,
  `invoice_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_ic` varchar(12) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `applicant_gender` varchar(10) NOT NULL,
  `applicant_age` int(2) NOT NULL,
  `applicant_salary` float NOT NULL,
  `partner_ic` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(5) NOT NULL,
  `advisor_name` varchar(255) NOT NULL,
  `appointment_location` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `staff_id` varchar(11) NOT NULL,
  `consultation_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `card_id` varchar(11) NOT NULL,
  `card_picture` longblob NOT NULL,
  `card_name` varchar(255) NOT NULL,
  `staff_id` varchar(11) NOT NULL,
  `marriage_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(5) NOT NULL,
  `consultation_purpose` varchar(255) NOT NULL,
  `applicant_ic` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE `incentive` (
  `incentive_id` varchar(11) NOT NULL,
  `incentive_receipt` longblob NOT NULL,
  `applicant_ic` varchar(12) NOT NULL,
  `staff_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(11) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_description` varchar(255) NOT NULL,
  `staff_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jaip_staff`
--

CREATE TABLE `jaip_staff` (
  `staff_id` varchar(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `staff_department` varchar(255) NOT NULL,
  `staff_ic` varchar(12) NOT NULL,
  `staff_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `marriage_id` varchar(11) NOT NULL,
  `marriage_date` date NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `marriage_proof_of_payment` longblob NOT NULL,
  `applicant_ic` varchar(12) NOT NULL,
  `staff_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marriage_course`
--

CREATE TABLE `marriage_course` (
  `course_id` varchar(11) NOT NULL,
  `course_participance` varchar(255) NOT NULL,
  `course_location` varchar(255) NOT NULL,
  `course_proof_of_payment` longblob NOT NULL,
  `applicant_ic` varchar(12) NOT NULL,
  `staff_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_ic` varchar(12) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_gender` varchar(10) NOT NULL,
  `partner_age` int(2) NOT NULL,
  `partner_salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `applicant_ic` (`applicant_ic`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_ic`),
  ADD KEY `partner_ic` (`partner_ic`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `staff_id` (`staff_id`,`consultation_id`),
  ADD KEY `consultation_id` (`consultation_id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `staff_id` (`staff_id`,`marriage_id`),
  ADD KEY `marriage_id` (`marriage_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`),
  ADD KEY `applicant_ic` (`applicant_ic`);

--
-- Indexes for table `incentive`
--
ALTER TABLE `incentive`
  ADD PRIMARY KEY (`incentive_id`),
  ADD KEY `applicant_ic` (`applicant_ic`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `jaip_staff`
--
ALTER TABLE `jaip_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`marriage_id`),
  ADD KEY `applicant_ic` (`applicant_ic`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `marriage_course`
--
ALTER TABLE `marriage_course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `applicant_ic` (`applicant_ic`,`staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_ic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`applicant_ic`) REFERENCES `applicant` (`applicant_ic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`partner_ic`) REFERENCES `partner` (`partner_ic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`consultation_id`) REFERENCES `consultation` (`consultation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `card_ibfk_2` FOREIGN KEY (`marriage_id`) REFERENCES `marriage` (`marriage_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`applicant_ic`) REFERENCES `applicant` (`applicant_ic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `incentive`
--
ALTER TABLE `incentive`
  ADD CONSTRAINT `incentive_ibfk_1` FOREIGN KEY (`applicant_ic`) REFERENCES `applicant` (`applicant_ic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `incentive_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marriage`
--
ALTER TABLE `marriage`
  ADD CONSTRAINT `marriage_ibfk_1` FOREIGN KEY (`applicant_ic`) REFERENCES `applicant` (`applicant_ic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marriage_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marriage_course`
--
ALTER TABLE `marriage_course`
  ADD CONSTRAINT `marriage_course_ibfk_1` FOREIGN KEY (`applicant_ic`) REFERENCES `applicant` (`applicant_ic`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marriage_course_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `jaip_staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
