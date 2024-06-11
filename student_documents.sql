-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinzo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_documents`
--

CREATE TABLE `student_documents` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `fees_payment_details` varchar(255) DEFAULT NULL,
  `hall_ticket` varchar(255) DEFAULT NULL,
  `exam_application_form` varchar(255) DEFAULT NULL,
  `available_mark_statement` varchar(255) DEFAULT NULL,
  `consolidated_mark_statement` varchar(255) DEFAULT NULL,
  `course_completion_certificate` varchar(255) DEFAULT NULL,
  `application_fees` varchar(255) DEFAULT NULL,
  `genuine_certificate_fees` varchar(255) DEFAULT NULL,
  `pstm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_documents`
--

INSERT INTO `student_documents` (`id`, `student_id`, `fees_payment_details`, `hall_ticket`, `exam_application_form`, `available_mark_statement`, `consolidated_mark_statement`, `course_completion_certificate`, `application_fees`, `genuine_certificate_fees`, `pstm`) VALUES
(17, 1, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 3, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL),
(20, 4, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 7, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 8, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 9, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 10, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 11, 'uploads/my image.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 12, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL),
(29, 13, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL),
(30, 14, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL),
(31, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 19, 'uploads/Adobe Scan 13 Mar 2024.pdf', NULL, 'uploads/dummy pdf.pdf', NULL, 'uploads/dummy pdf.pdf', 'uploads/dummy pdf.pdf', NULL, NULL, NULL),
(35, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_documents`
--
ALTER TABLE `student_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_documents`
--
ALTER TABLE `student_documents`
  ADD CONSTRAINT `student_documents_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `grievance_` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
