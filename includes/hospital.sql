-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 11:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `timedate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `username`, `timedate`) VALUES
(1, 'Laboratory', '2021-09-03 07:13:15'),
(2, 'Reception', '2021-09-03 07:14:10'),
(3, 'Reception', '2021-09-03 12:24:32'),
(4, 'Reception', '2021-09-04 07:07:01'),
(5, 'Reception', '2021-09-04 12:39:49'),
(6, 'Pharmacy', '2021-09-04 12:44:15'),
(7, 'Reception', '2021-09-04 12:45:24'),
(8, 'NormalDoctor', '2021-09-04 16:17:16'),
(9, 'Laboratory', '2021-09-04 16:18:21'),
(10, 'NormalDoctor', '2021-09-04 16:19:11'),
(11, 'Laboratory', '2021-09-04 16:19:30'),
(12, 'Pharmacy', '2021-09-04 16:21:53'),
(13, 'Pharmacy', '2021-09-04 16:22:13'),
(14, 'Pharmacy', '2021-09-04 16:22:18'),
(15, 'Pharmacy', '2021-09-04 16:27:27'),
(16, 'Reception', '2021-09-04 16:27:50'),
(17, 'Pharmacy', '2021-09-05 06:49:41'),
(18, 'Pharmacy', '2021-09-06 07:08:34'),
(19, 'Reception', '2021-09-06 08:31:42'),
(20, 'Pharmacy', '2021-09-06 08:51:52'),
(21, 'Bursar', '2021-09-06 11:57:51'),
(22, 'Bursar', '2021-09-06 15:04:36'),
(23, 'Bursar', '2021-09-06 19:18:53'),
(24, 'Bursar', '2021-09-06 19:19:02'),
(25, 'accountant', '2021-09-06 19:19:21'),
(26, 'Bursar', '2021-09-06 19:20:48'),
(27, 'Bursar', '2021-09-06 19:21:01'),
(28, 'Pharmacy', '2021-09-06 19:21:16'),
(29, 'Bursar', '2021-09-06 19:21:46'),
(30, 'Pharmacy', '2021-09-06 19:56:29'),
(31, 'Reception', '2021-09-06 19:57:26'),
(32, 'Bursar', '2021-09-06 19:58:21'),
(33, 'NormalDoctor', '2021-09-07 06:40:18'),
(34, 'Doctor', '2021-09-07 06:40:41'),
(35, 'Reception', '2021-09-07 07:26:45'),
(36, 'Doctor', '2021-09-07 07:34:56'),
(37, 'NormalDoctor', '2021-09-07 07:48:12'),
(38, 'Laboratory', '2021-09-07 08:32:50'),
(39, 'NormalDoctor', '2021-09-07 12:44:17'),
(40, 'Laboratory', '2021-09-07 12:45:20'),
(41, 'Laboratory', '2021-09-07 12:47:04'),
(42, 'NormalDoctor', '2021-09-07 12:52:51'),
(43, 'Laboratory', '2021-09-07 12:53:23'),
(44, 'NormalDoctor', '2021-09-07 13:28:12'),
(45, 'Pharmacy', '2021-09-07 13:35:13'),
(46, 'Bursar', '2021-09-07 13:40:39'),
(47, 'NormalDoctor', '2021-09-07 14:28:55'),
(48, 'WomenDoctor', '2021-09-07 15:20:07'),
(49, 'Reception', '2021-09-08 07:47:20'),
(50, 'WomenDoctor', '2021-09-08 07:48:26'),
(51, 'Laboratory', '2021-09-08 07:53:53'),
(52, 'Reception', '2021-09-08 07:58:42'),
(53, 'Laboratory', '2021-09-08 07:59:13'),
(54, 'Laboratory', '2021-09-08 08:01:21'),
(55, 'Reception', '2021-09-08 08:34:24'),
(56, 'Laboratory', '2021-09-08 08:34:49'),
(57, 'Reception', '2021-09-08 10:15:08'),
(58, 'WomenDoctor', '2021-09-08 10:18:25'),
(59, 'Reception', '2021-09-08 12:36:12'),
(60, 'Reception', '2021-09-08 12:38:13'),
(61, 'WomenDoctor', '2021-09-08 12:39:11'),
(62, 'Reception', '2021-09-08 12:41:12'),
(63, 'WomenDoctor', '2021-09-08 12:42:24'),
(64, 'DentalDoctor', '2021-09-08 13:29:17'),
(65, 'NormalDoctor', '2021-09-08 13:32:48'),
(66, 'DentalDoctor', '2021-09-08 13:33:00'),
(67, 'Reception', '2021-09-08 13:38:26'),
(68, 'DentalDoctor', '2021-09-08 13:38:50'),
(69, 'EyeClinic', '2021-09-08 13:42:34'),
(70, 'Reception', '2021-09-08 13:45:00'),
(71, 'EyeClinic', '2021-09-08 13:45:27'),
(72, 'Bursar', '2021-09-08 13:50:02'),
(73, 'DentalDoctor', '2021-09-08 13:51:28'),
(74, 'Reception', '2021-09-08 13:51:41'),
(75, 'DentalDoctor', '2021-09-08 13:52:03'),
(76, 'Reception', '2021-09-08 14:03:59'),
(77, 'WomenDoctor', '2021-09-08 14:04:32'),
(78, 'EyeClinic', '2021-09-08 14:06:10'),
(79, 'Reception', '2021-09-08 14:07:55'),
(80, 'WomenDoctor', '2021-09-08 14:10:37'),
(81, 'DentalDoctor', '2021-09-08 14:11:33'),
(82, 'EyeClinic', '2021-09-08 14:13:30'),
(83, 'Bursar', '2021-09-08 14:14:07'),
(84, 'Admission', '2021-09-08 14:16:35'),
(85, 'Reception', '2021-09-08 14:19:11'),
(86, 'Admission', '2021-09-08 14:20:15'),
(87, 'Admin', '2021-09-08 14:29:15'),
(88, 'NormalDoctor', '2021-09-08 15:52:33'),
(89, 'Laboratory', '2021-09-08 15:52:46'),
(90, 'Reception', '2021-09-08 15:53:09'),
(91, 'Laboratory', '2021-09-08 15:53:53'),
(92, 'NormalDoctor', '2021-09-08 15:54:44'),
(93, 'Laboratory', '2021-09-08 15:55:13'),
(94, 'Reception', '2021-09-08 15:56:35'),
(95, 'Laboratory', '2021-09-08 15:57:02'),
(96, 'NormalDoctor', '2021-09-08 16:02:14'),
(97, 'Reception', '2021-09-08 16:08:41'),
(98, 'Laboratory', '2021-09-08 16:09:13'),
(99, 'NormalDoctor', '2021-09-08 16:09:56'),
(100, 'WomenDoctor', '2021-09-08 18:53:13'),
(101, 'Reception', '2021-09-08 18:53:27'),
(102, 'WomenDoctor', '2021-09-08 18:53:51'),
(103, 'NormalDoctor', '2021-09-08 19:02:29'),
(104, 'Laboratory', '2021-09-08 19:02:47'),
(105, 'NormalDoctor', '2021-09-08 19:03:36'),
(106, 'Admin', '2021-09-08 19:16:49'),
(107, 'Bursar', '2021-09-08 21:02:01'),
(108, 'Bursar', '2021-09-10 18:29:34'),
(109, 'Laboratory', '2021-09-10 19:19:44'),
(110, 'Reception', '2021-09-10 19:19:59'),
(111, 'Laboratory', '2021-09-10 19:20:21'),
(112, 'Bursar', '2021-09-10 19:21:09'),
(113, 'Reception', '2021-09-10 19:30:35'),
(114, 'NormalDoctor', '2021-09-10 19:31:11'),
(115, 'Laboratory', '2021-09-10 19:32:10'),
(116, 'Pharmacy', '2021-09-10 19:32:33'),
(117, 'Bursar', '2021-09-10 19:33:05'),
(118, 'EyeClinic', '2021-09-10 19:33:39'),
(119, 'Bursar', '2021-09-10 19:36:31'),
(120, 'Laboratory', '2021-09-10 19:37:02'),
(121, 'Bursar', '2021-09-10 19:39:33'),
(122, 'Bursar', '2021-09-10 20:04:56'),
(123, 'Reception', '2021-09-10 20:06:59'),
(124, 'Pharmacy', '2021-09-10 20:07:37'),
(125, 'Bursar', '2021-09-10 20:08:56'),
(126, 'Pharmacy', '2021-09-10 20:13:39'),
(127, 'Bursar', '2021-09-10 20:17:36'),
(128, 'Pharmacy', '2021-09-10 20:29:16'),
(129, 'Bursar', '2021-09-10 20:33:18'),
(130, 'Reception', '2021-09-10 20:36:49'),
(131, 'Laboratory', '2021-09-10 20:37:18'),
(132, 'Bursar', '2021-09-10 20:37:55'),
(133, 'Reception', '2021-09-10 20:38:55'),
(134, 'NormalDoctor', '2021-09-10 20:40:01'),
(135, 'Laboratory', '2021-09-10 20:41:02'),
(136, 'NormalDoctor', '2021-09-10 20:41:36'),
(137, 'Laboratory', '2021-09-10 20:42:21'),
(138, 'DentalDoctor', '2021-09-10 20:42:34'),
(139, 'NormalDoctor', '2021-09-10 20:42:44'),
(140, 'Laboratory', '2021-09-10 20:43:25'),
(141, 'NormalDoctor', '2021-09-10 20:47:29'),
(142, 'Pharmacy', '2021-09-10 20:48:36'),
(143, 'Bursar', '2021-09-10 20:49:18'),
(144, 'Reception', '2021-09-10 20:51:33'),
(145, 'DentalDoctor', '2021-09-10 20:52:12'),
(146, 'Bursar', '2021-09-10 20:57:36'),
(147, 'Reception', '2021-09-10 20:58:01'),
(148, 'WomenDoctor', '2021-09-10 20:58:31'),
(149, 'Bursar', '2021-09-10 20:58:57'),
(150, 'Reception', '2021-09-10 20:59:43'),
(151, 'EyeClinic', '2021-09-10 21:00:26'),
(152, 'Admission', '2021-09-10 21:00:54'),
(153, 'Bursar', '2021-09-10 21:01:30'),
(154, 'Reception', '2021-09-11 09:22:04'),
(155, 'NormalDoctor', '2021-09-11 09:23:08'),
(156, 'Laboratory', '2021-09-11 09:23:56'),
(157, 'NormalDoctor', '2021-09-11 09:24:35'),
(158, 'Pharmacy', '2021-09-11 09:25:47'),
(159, 'Bursar', '2021-09-11 09:26:35'),
(160, 'Reception', '2021-09-11 09:28:22'),
(161, 'Bursar', '2021-09-11 09:29:04'),
(162, 'Admin', '2021-09-11 09:30:23'),
(163, 'Reception', '2021-09-19 10:11:56'),
(164, 'Admin', '2021-09-19 10:12:30'),
(165, 'Bursar', '2021-09-19 10:19:09'),
(166, 'Reception', '2021-09-19 10:29:07'),
(167, 'NormalDoctor', '2021-09-19 10:30:10'),
(168, 'Laboratory', '2021-09-19 10:31:31'),
(169, 'NormalDoctor', '2021-09-19 10:33:06'),
(170, 'Pharmacy', '2021-09-19 10:33:47'),
(171, 'Admin', '2021-09-19 10:35:25'),
(172, 'Pharmacy', '2021-09-19 10:37:40'),
(173, 'Reception', '2021-10-04 18:31:12'),
(174, 'Pharmacy', '2021-10-04 18:32:33'),
(175, 'Admin', '2021-10-04 18:33:30'),
(176, 'Bursar', '2021-10-04 18:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` bigint(20) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `test_results` varchar(200) NOT NULL,
  `medical_price` int(100) NOT NULL,
  `doctortype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `ddate`, `name`, `medicine`, `test_results`, `medical_price`, `doctortype`) VALUES
(3, '2021-09-08', 'Teddy Teddy', 'bed Nursing 200,000\r\nmedicine 70,000', '', 270000, 'WomenDoctor'),
(4, '2021-09-08', 'omeny omeny', 'building a tooth 7,000', '', 70000, 'DentalDoctor'),
(5, '2021-09-08', 'Ezra Ezra', 'Reading Glasses 400,000', '', 400000, 'EyeClinic'),
(6, '2021-09-08', 'Joshua Joshua', 'cleaning teeth 50,000', '', 50000, 'DentalDoctor'),
(7, '2021-09-08', 'Joshua Joshua', 'cleaning teeth 50,000', '', 50000, 'DentalDoctor'),
(8, '2021-09-08', 'Joshua Joshua', 'cleaning teeth 50,000', '', 50000, 'DentalDoctor'),
(9, '2021-09-08', 'Faridah Faridah', 'Baby care 50,000 per day x2 =100,000', '', 100000, 'WomenDoctor'),
(10, '2021-09-08', 'omeny omeny', 'cementing the tooth 50,000', '', 50000, 'DentalDoctor'),
(11, '2021-09-08', 'Tanzi Tanzi', 'Plastic tooth 45,000', '', 45000, 'DentalDoctor'),
(12, '2021-09-08', 'Joshua Omoding', 'eye lash 33,000', '', 33000, 'EyeClinic'),
(13, '2021-09-08', 'Ailel Timothy', 'Nursing fee 50,000 perday for 4 days\r\n=200,000', '', 200000, 'Admission'),
(14, '2021-09-08', 'Faridah Nansamba', 'Nursing Fee 50,000 per day for 3 days\r\n=150,000', '', 150000, 'Admission'),
(18, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'labdoctor'),
(19, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'NormalDoctor'),
(20, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'labdoctor'),
(21, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'NormalDoctor'),
(22, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'labdoctor'),
(23, '2021-09-08', 'Ezra Aupal', 'quatam 4x2', 'malaria 2,500', 0, 'NormalDoctor'),
(24, '2021-09-08', 'Faridah Nansamba', 'gg', '', 0, 'WomenDoctor'),
(25, '2021-09-08', 'Faridah Nansamba', 'consultation', '', 0, 'WomenDoctor'),
(26, '2021-09-08', 'Faridah Nansamba', 'consultation', '', 0, 'WomenDoctor'),
(27, '2021-09-08', 'Faridah Nansamba', 'tests', '', 33000, 'pharmacy'),
(28, '2021-09-08', 'Faridah Nansamba', 'tests', '', 33000, 'pharmacy'),
(29, '2021-09-08', 'Faridah Nansamba', 'tests', '', 33000, 'pharmacy'),
(30, '2021-09-08', 'Teddy Akao', 'Quatam', 'malaria negative', 0, 'NormalDoctor'),
(31, '2021-09-08', 'Teddy Akao', 'Quatam', 'malaria negative', 0, 'labdoctor'),
(32, '2021-09-08', 'Teddy Akao', 'Quatam', 'malaria negative', 0, 'NormalDoctor'),
(33, '2021-09-08', 'Teddy Akao', 'consultation', 'malaria negative', 23000, 'pharmacy'),
(34, '2021-09-08', 'Teddy Akao', 'typoid consultation', 'malaria negative', 15000, 'NormalDoctor'),
(35, '2021-09-10', '', '', '', 10000, 'pharmacy'),
(36, '2021-09-10', '', '', '', 10000, 'pharmacy'),
(37, '2021-09-10', 'Faridah Nansamba', 'pressure cap', 'preasure high', 12300, 'NormalDoctor'),
(38, '2021-09-10', '', '', '', 2500, 'pharmacy'),
(39, '2021-09-10', 'Joshua Omoding', 'cleaning teeath', '', 23200, 'DentalDoctor'),
(40, '2021-09-10', 'Ailel Timothy', 'sick wife', '', 55500, 'WomenDoctor'),
(41, '2021-09-10', 'Joshua Omoding', 'eye drops', '', 22200, 'EyeClinic'),
(42, '2021-09-10', 'Joshua Omoding', 'bed Nursing', '', 77700, 'Admission'),
(43, '2021-09-11', 'Tanzi Derick', 'quatum 4x2', 'malaria positive', 20000, 'NormalDoctor'),
(44, '2021-09-11', '', '', '', 1470000, 'pharmacy'),
(45, '2021-09-19', 'Tanzi Derick', 'quatum 4x2 \r\natrt', 'malaria positve\r\ndiahoria negative', 0, 'NormalDoctor');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` bigint(20) NOT NULL,
  `exptype` varchar(100) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `expense` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `exptype`, `ddate`, `expense`, `amount`, `comment`) VALUES
(3, 'salary', '2021-09-03', 'salary to doctor', 2000000, ''),
(4, 'transport allowance', '2021-09-10', 'tranport', 5000, 'to gate man'),
(5, 'breakfast', '2021-09-08', 'lunch', 150000, 'no comment'),
(6, 'repair and maintenace', '2021-09-02', 'computer repair', 150000, 'mouse repair');

-- --------------------------------------------------------

--
-- Table structure for table `expensetype`
--

CREATE TABLE `expensetype` (
  `id` bigint(20) NOT NULL,
  `exptype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expensetype`
--

INSERT INTO `expensetype` (`id`, `exptype`) VALUES
(1, 'lunch'),
(2, 'breakfast'),
(3, 'salary'),
(4, 'transport allowance'),
(5, 'repair and maintenace'),
(6, 'utility');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id` bigint(20) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `results` varchar(500) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `ddate`, `name`, `results`, `price`) VALUES
(24, '2021-09-08', 'Faridah Nansamba', 'malaria positive 80,000', 80000),
(25, '2021-09-08', 'Faridah Nansamba', 'covid', 80000),
(26, '2021-09-08', 'Faridah Nansamba', 'covid', 80000),
(27, '2021-09-08', 'Faridah Nansamba', 'malaria positive', 2000),
(28, '2021-09-08', 'Ezra Aupal', 'malaria 2,500', 2500),
(29, '2021-09-08', 'Teddy Akao', 'malaria negative', 80000),
(30, '2021-09-10', 'Faridah Nansamba', 'malaria positve', 80000),
(31, '2021-09-10', 'Tanzi Derick', 'stomach test', 11100),
(32, '2021-09-10', 'Ezra Aupal', 'ulcers negative', 22200),
(33, '2021-09-10', 'Faridah Nansamba', 'preasure high', 12300),
(34, '2021-09-11', 'Tanzi Derick', 'malaria positive', 10000),
(35, '2021-09-19', 'Tanzi Derick', 'malaria positve\r\ndiahoria negative', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `id` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `patient_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `symptoms` longtext NOT NULL,
  `tests` longtext NOT NULL,
  `test_results` longtext NOT NULL,
  `medical` longtext NOT NULL,
  `doctor_type` varchar(20) NOT NULL,
  `doctor_price` int(11) NOT NULL,
  `test_price` int(11) NOT NULL,
  `medical_price` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`id`, `ddate`, `patient_id`, `status`, `symptoms`, `tests`, `test_results`, `medical`, `doctor_type`, `doctor_price`, `test_price`, `medical_price`, `date`, `month`, `year`) VALUES
(1, '0000-00-00', 1, 'recdoctor', '', '', '', '', 'NormalDoctor', 20000, 0, 0, 1, 2, 2016),
(2, '0000-00-00', 2, 'recdoctor', '', '', '', '', 'NormalDoctor', 20000, 0, 0, 1, 9, 2021),
(5, '0000-00-00', 2, 'recdoctor', '', '', '', '', 'WomenDoctor', 40000, 0, 0, 2, 9, 2021),
(14, '2021-09-04', 6, 'end', 'h', 'l', 'j', 'flucap', 'NormalDoctor', 20000, 80000, 5000, 4, 9, 2021),
(15, '2021-09-04', 8, 'end', '', '', '', '', 'Pharmacy', 30000, 0, 268000, 4, 9, 2021),
(16, '2021-09-06', 7, 'end', '', '', '', '', 'Pharmacy', 30000, 0, 1470000, 6, 9, 2021),
(17, '2021-09-07', 8, 'end', 'Ulcers', 'ulcers', 'ulcers positive', '', 'NormalDoctor', 20000, 10000, 0, 7, 9, 2021),
(18, '2021-09-07', 6, 'end', 'Muscle Pain\r\nBroken tooth', 'test Covid', 'Covid Positive', 'covilice', 'NormalDoctor', 20000, 120000, 5000, 7, 9, 2021),
(19, '2021-09-07', 10, 'end', 'Stomach\r\nhead pain', 'ulcers\r\nmalaria', 'ulcers Positive\r\nMalaria Positive', 'Quatum 4x2 for 3days\r\npanadol 2x3 for 3days\r\nceptrin 2x2 for 5 days', 'NormalDoctor', 20000, 90000, 19000, 7, 9, 2021),
(20, '2021-09-08', 11, 'end', 'Dandruf\r\ncough', 'malaria\r\ntyphoid', 'typhoid negative 4,000\r\nMalaria negative 3,000', '', 'WomenDoctor', 40000, 7000, 0, 8, 9, 2021),
(21, '2021-09-08', 9, 'end', 'stomach pain', 'ulcers', 'ulcers negative', '', 'NormalDoctor', 20000, 22200, 0, 8, 9, 2021),
(22, '2021-09-08', 10, 'labdoctor', '', '', 'typhoid positive\r\nmalaria positive', '', 'Laboratory', 30000, 10000, 0, 8, 9, 2021),
(23, '2021-09-08', 8, 'end', '', '', 'covid negative 10000\r\nmalaria positive 2000', '', 'Laboratory', 30000, 12000, 0, 8, 9, 2021),
(27, '2021-09-08', 8, 'end', '', '', '', 'bed Nursing 200,000\r\nmedicine 70,000', 'WomenDoctor', 40000, 0, 268000, 8, 9, 2021),
(28, '2021-09-08', 6, 'end', '', '', '', 'building a tooth 7,000', 'DentalDoctor', 30000, 0, 5000, 8, 9, 2021),
(29, '2021-09-08', 9, 'end', '', '', '', 'Reading Glasses 400,000', 'EyeClinic', 30000, 0, 10000, 8, 9, 2021),
(30, '2021-09-08', 11, 'end', '', '', '', 'detoothing 45,000', 'DentalDoctor', 30000, 0, 0, 8, 9, 2021),
(31, '2021-09-08', 8, 'end', '', '', '', 'stomach test 33,000', 'WomenDoctor', 40000, 0, 0, 8, 9, 2021),
(32, '2021-09-08', 10, 'finish', '', '', '', 'eye drops 70,000', 'EyeClinic', 30000, 0, 0, 8, 9, 2021),
(33, '2021-09-08', 6, 'end', '', '', '', 'cementing the tooth 50,000', 'DentalDoctor', 30000, 0, 0, 8, 9, 2021),
(34, '2021-09-08', 7, 'finish', '', '', '', 'Plastic tooth 45,000', 'DentalDoctor', 30000, 0, 0, 8, 9, 2021),
(35, '2021-09-08', 12, 'end', '', '', '', 'Baby care 50,000 per day x2 =100,000', 'WomenDoctor', 40000, 0, 0, 8, 9, 2021),
(36, '2021-09-08', 11, 'end', '', '', '', 'eye lash 33,000', 'EyeClinic', 30000, 0, 0, 8, 9, 2021),
(37, '2021-09-08', 12, 'end', '', '', '', 'Nursing Fee 50,000 per day for 3 days\r\n=150,000', 'Admission', 30000, 0, 0, 8, 9, 2021),
(38, '2021-09-08', 10, 'finish', '', '', '', 'Nursing fee 50,000 perday for 4 days\r\n=200,000', 'Admission', 30000, 0, 0, 8, 9, 2021),
(39, '2021-09-08', 12, 'end', '', '', 'malaria positive 80,000', '', 'Laboratory', 30000, 80000, 0, 8, 9, 2021),
(40, '2021-09-08', 12, 'end', '', '', 'malaria positive', '', 'Laboratory', 30000, 2000, 0, 8, 9, 2021),
(41, '2021-09-08', 8, 'end', '', '', 'malaria negative', 'typoid consultation', 'NormalDoctor', 30000, 80000, 0, 8, 9, 2021),
(42, '2021-09-08', 9, 'end', '', '', 'malaria 2,500', 'quatam 4x2', 'NormalDoctor', 30000, 2500, 10000, 8, 9, 2021),
(43, '2021-09-08', 12, 'end', '', '', '', 'tests', 'WomenDoctor', 40000, 0, 0, 8, 9, 2021),
(44, '2021-09-10', 12, 'end', '', '', 'malaria positve', '', 'NormalDoctor', 30000, 80000, 0, 10, 9, 2021),
(45, '2021-09-10', 6, 'end', '', '', '', '', 'Pharmacy', 30000, 0, 5000, 10, 9, 2021),
(46, '2021-09-10', 7, 'labdoctor', '', '', 'stomach test', '', 'NormalDoctor', 30000, 11100, 0, 10, 9, 2021),
(47, '2021-09-10', 12, 'end', 'muscle pain', 'preassure', 'preasure high', 'pressure cap', 'NormalDoctor', 20000, 12300, 2500, 10, 9, 2021),
(48, '2021-09-10', 11, 'finish', '', '', '', 'cleaning teeath', 'DentalDoctor', 30000, 0, 0, 10, 9, 2021),
(49, '2021-09-10', 10, 'finish', '', '', '', 'sick wife', 'WomenDoctor', 40000, 0, 0, 10, 9, 2021),
(50, '2021-09-10', 11, 'finish', '', '', '', 'eye drops', 'EyeClinic', 30000, 0, 0, 10, 9, 2021),
(51, '2021-09-10', 11, 'finish', '', '', '', 'bed Nursing', 'Admission', 30000, 0, 0, 10, 9, 2021),
(52, '2021-09-11', 7, 'finish', 'fever', 'malaria', 'malaria positive', 'quatum 4x2', 'NormalDoctor', 20000, 10000, 1470000, 11, 9, 2021),
(53, '2021-09-19', 7, 'pharmacy', 'stmoach pain\r\nfever', 'malaria\r\ndiahorioia', 'malaria positve\r\ndiahoria negative', 'quatum 4x2 \r\natrt', 'NormalDoctor', 20000, 20000, 0, 19, 9, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `sprice` int(50) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `price`, `sprice`, `qty`) VALUES
(13, 'flucap', 20, 100, 1000),
(14, 'quatum', 5000, 7000, 250),
(15, 'ceptrin', 200, 500, 3000),
(16, 'panado', 100, 200, 1500),
(17, 'Qunin', 1000, 2000, 1000),
(18, 'cloroquin', 100, 250, 1000),
(19, 'zepto', 200, 500, 10000),
(20, 'headex', 100, 250, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `bloodgroup` varchar(5) NOT NULL,
  `birthyear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `date`, `fname`, `sname`, `email`, `address`, `phone`, `sex`, `bloodgroup`, `birthyear`) VALUES
(6, '2021-09-04', 'omeny', 'robert', 'macrobert000@gmail.com', 'iuea', '+256757227257', 'Male', 'B', 1997),
(7, '2021-09-04', 'Tanzi', 'Derick', 'tanzi@gmail.com', 'Kigoowa', '+256757227257', 'Male', 'B', 1999),
(8, '2021-09-04', 'Teddy', 'Akao', 'teddy@gmail.com', 'Kireka', '07876667788', 'Female', 'AB', 1996),
(9, '2021-09-07', 'Ezra', 'Aupal', 'Ezra@gmail.com', 'Munyonyo', '+256 77995533', 'Male', 'o', 2003),
(10, '2021-09-07', 'Ailel', 'Timothy', 'aileltimothy@gmail.com', 'Kiira', '+256 7455664644', 'Male', 'B', 2009),
(11, '2021-09-07', 'Joshua', 'Omoding', 'Josh@gmail.com', 'iuea', '+256757227257', 'Male', 'B', 1999),
(12, '2021-09-08', 'Faridah', 'Nansamba', 'frida@gmai.com', 'jogo', '0786664435', 'Female', 'AB', 1996);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` bigint(20) NOT NULL,
  `date` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `doctor_price` varchar(100) NOT NULL,
  `test_price` varchar(100) NOT NULL,
  `medical_price` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `date`, `fname`, `sname`, `sex`, `email`, `phone`, `doctor_price`, `test_price`, `medical_price`, `total`) VALUES
(1, '2021-09-06', '1500000', 'Derick', 'Male', 'tanzi@gmail.com', '+256757227257', '30000', '0', '1470000', ''),
(2, '2021-09-06', 'Tanzi', 'Derick', 'Male', 'tanzi@gmail.com', '+256757227257', '30000', '0', '1470000', '1500000'),
(3, '2021-09-06', 'Tanzi', 'Derick', 'Male', 'tanzi@gmail.com', '+256757227257', '30000', '0', '1470000', '1500000'),
(4, '2021-09-07', 'Ailel', 'Timothy', 'Male', 'aileltimothy@gmail.com', '+256 7455664644', '20000', '90000', '19000', '129000'),
(5, '2021-09-07', 'Teddy', 'Akao', 'Female', 'teddy@gmail.com', '07876667788', '30000', '0', '268000', '298000'),
(6, '2021-09-07', 'Teddy', 'Akao', 'Female', 'teddy@gmail.com', '07876667788', '30000', '0', '268000', '298000'),
(7, '2021-09-07', 'Teddy', 'Akao', 'Female', 'teddy@gmail.com', '07876667788', '30000', '0', '268000', '298000'),
(8, '2021-09-07', 'Ailel', 'Timothy', 'Male', 'aileltimothy@gmail.com', '+256 7455664644', '20000', '90000', '19000', '129000'),
(9, '2021-09-07', 'Tanzi', 'Derick', 'Male', 'tanzi@gmail.com', '+256757227257', '30000', '0', '1470000', '1500000'),
(10, '2021-09-08', 'Joshua', 'Omoding', 'Male', 'Josh@gmail.com', '+256757227257', '30000', '0', '0', '30000'),
(11, '2021-09-08', 'Faridah', 'Nansamba', 'Female', 'frida@gmai.com', '0786664435', '40000', '0', '0', '40000'),
(12, '2021-09-10', 'omeny', 'robert', 'Male', 'macrobert000@gmail.com', '+256757227257', '20000', '80000', '5000', '105000'),
(13, '2021-09-10', 'Teddy', 'Akao', 'Female', 'teddy@gmail.com', '07876667788', '30000', '12000', '0', '42000'),
(14, '2021-09-10', 'Faridah', 'Nansamba', 'Female', 'frida@gmai.com', '0786664435', '20000', '12300', '2500', '34800'),
(15, '2021-09-10', 'Ezra', 'Aupal', 'Male', 'Ezra@gmail.com', '+256 77995533', '30000', '2500', '10000', '42500');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `patientsinroom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `room_name`, `patientsinroom`) VALUES
(1, 'hms001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` bigint(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `soprice` int(100) NOT NULL,
  `sosprice` int(100) NOT NULL,
  `soqty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `date`, `pid`, `sname`, `soprice`, `sosprice`, `soqty`) VALUES
(18, '2021-09-06', 8, 'quatum ', 5000, 7000, 20),
(19, '2021-09-06', 8, 'quatum ', 5000, 7000, 12),
(20, '2021-09-06', 8, 'Qunin ', 1000, 2000, 22),
(21, '2021-09-06', 7, 'quatum ', 5000, 7000, 210),
(22, '2021-09-07', 10, 'quatum ', 5000, 7000, 1),
(23, '2021-09-07', 10, 'panado ', 100, 200, 10),
(24, '2021-09-07', 10, 'ceptrin ', 200, 500, 20),
(25, '2021-09-10', 6, 'ceptrin ', 200, 500, 10),
(26, '2021-09-10', 9, 'ceptrin ', 200, 500, 20),
(27, '2021-09-10', 12, 'zepto ', 200, 500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fname`, `sname`, `type`) VALUES
('Admin', '1234', 'mr. Admin', 'Asllanaj', 'Admin'),
('Admission', '1234', 'Joana', 'Pellumbi', 'Admission'),
('Bursar', '1234', 'Accountant', 'Kaziu', 'Bursar'),
('DentalDoctor', '1234', 'Andi', 'Rama', 'DentalDoctor'),
('Doctor', '1234', 'Alba', 'Shkurti', 'Doctor'),
('EyeClinic', '1234', 'eyes', 'Pellumbi', 'EyeClinic'),
('Laboratory', '1234', 'Akim lab', 'Gjata', 'Laboratory'),
('NormalDoctor', '1234', 'Doctor Julis', 'Wang', 'NormalDoctor'),
('Pharmacy', '1234', 'Pharmacist', 'Robert', 'Pharmacy'),
('Reception', '1234', 'Diana', 'attend', 'Reception'),
('WomenDoctor', '1234', 'Joana', 'Pellumbi', 'WomenDoctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expensetype`
--
ALTER TABLE `expensetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expensetype`
--
ALTER TABLE `expensetype`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
