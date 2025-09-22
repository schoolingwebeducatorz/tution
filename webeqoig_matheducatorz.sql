-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 07, 2024 at 08:11 AM
-- Server version: 10.5.20-MariaDB-cll-lve-log
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webeqoig_matheducatorz`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignmentfacilities`
--

CREATE TABLE `assignmentfacilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `facility_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` text DEFAULT NULL,
  `country_id` int(255) NOT NULL,
  `whatsapp` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `location_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `photo`, `country_id`, `whatsapp`, `email`, `location_id`, `created_at`, `updated_at`) VALUES
(13, 'au.png', 6, '+61489946245', 'au@matheducatorz.com', '6', '2023-12-04 02:42:23', '2023-12-04 02:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `cpackages`
--

CREATE TABLE `cpackages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cpackages`
--

INSERT INTO `cpackages` (`id`, `title`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Year 1 - Year 4', 13, '2024-01-01 07:22:38', '2024-01-01 07:22:38'),
(2, ' Year 5 - Year 8', 13, '2024-01-01 07:22:49', '2024-01-01 07:22:49'),
(3, ' Year 9 - Year 10', 13, '2024-01-01 07:23:28', '2024-01-01 07:23:28'),
(4, ' Year 11 - Year 12', 13, '2024-01-01 07:23:40', '2024-01-01 07:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`, `created_at`, `updated_at`) VALUES
(8, ' Monday', '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(9, ' Tuesday', '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(10, ' Wednesday', '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(11, ' Thrusday', '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(12, ' Friday', '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(13, ' Saturday', '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(14, ' Sunday', '2023-12-25 08:44:16', '2023-12-25 08:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `country_id` int(111) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `admissiondate` date DEFAULT NULL,
  `feeproccess` varchar(110) DEFAULT NULL,
  `ciaw` int(199) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `student_id`, `subject_id`, `grade_id`, `trainer_id`, `country_id`, `amount`, `admissiondate`, `feeproccess`, `ciaw`, `status`, `created_at`, `updated_at`) VALUES
(39, 42, 1, 1, 3, 13, '20', '2023-12-02', '2023-12-30', 3, 1, '2023-12-30 07:11:08', '2023-12-30 07:11:39'),
(40, 43, 1, 1, 4, 13, '40', '2023-12-08', '2023-12-28', 3, 1, '2023-12-31 05:00:24', '2023-12-31 05:01:34'),
(41, 44, 1, 1, 3, 13, '30', '2024-01-10', '2024-03-28 11:19:53', 3, 1, '2024-01-01 02:51:11', '2024-01-01 06:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `enrollschedules`
--

CREATE TABLE `enrollschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_id` int(11) DEFAULT NULL,
  `timeschedule_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollschedules`
--

INSERT INTO `enrollschedules` (`id`, `enrollment_id`, `timeschedule_id`, `created_at`, `updated_at`) VALUES
(51, 39, 162, '2023-12-30 07:11:31', '2023-12-30 07:11:31'),
(52, 39, 186, '2023-12-30 07:11:35', '2023-12-30 07:11:35'),
(53, 40, 162, '2023-12-31 05:00:54', '2023-12-31 05:00:54'),
(55, 40, 186, '2023-12-31 05:01:25', '2023-12-31 05:01:25'),
(58, 41, 210, '2024-01-01 02:52:31', '2024-01-01 02:52:31'),
(59, 41, 234, '2024-01-01 02:52:37', '2024-01-01 02:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` int(100) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `enrollment_id` int(11) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `last_date` date DEFAULT NULL,
  `method` varchar(191) DEFAULT NULL,
  `feeproccessdate` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'unpaid',
  `country_id` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `no`, `student_id`, `enrollment_id`, `amount`, `last_date`, `method`, `feeproccessdate`, `status`, `country_id`, `created_at`, `updated_at`) VALUES
(66, 1, 42, 39, '19', '2023-12-02', 'Paypal', '2023-12-30', 'paid', 13, '2023-12-30 07:11:09', '2023-12-30 07:11:22'),
(67, 2, 42, 39, '20', '2023-12-30', NULL, NULL, 'unpaid', 13, '2023-12-30 07:11:22', '2023-12-30 07:11:22'),
(68, 1, 43, 40, '27', '2023-12-08', 'Payapal', '2023-12-28', 'paid', 13, '2023-12-31 05:00:24', '2023-12-31 05:00:40'),
(69, 2, 43, 40, '40', '2023-12-28', NULL, NULL, 'unpaid', 13, '2023-12-31 05:00:40', '2023-12-31 05:00:40'),
(70, 1, 44, 41, '18', '2024-01-10', 'Payoneer', '2024-01-28', 'paid', 13, '2024-01-01 02:51:11', '2024-01-01 02:51:43'),
(71, 2, 44, 41, '30', '2024-01-28', 'paypal', NULL, 'paid', 13, '2024-01-01 02:51:43', '2024-01-01 02:55:16'),
(72, 3, 44, 41, '30', '2024-02-02', 'sk', NULL, 'paid', 13, '2024-01-01 02:55:16', '2024-01-01 06:19:53'),
(73, 4, 44, 41, '30', '2024-03-28', NULL, NULL, 'unpaid', 13, '2024-01-01 06:19:53', '2024-01-01 06:19:53');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `title`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 'Year 1', 1, '2023-12-18 08:20:51', '2023-12-18 08:20:51'),
(2, 'Year 2', 1, '2023-12-18 08:20:54', '2023-12-18 08:20:54'),
(3, 'Year 3', 1, '2023-12-18 08:20:56', '2023-12-18 08:20:56'),
(4, 'Year 4', 1, '2023-12-18 08:21:05', '2023-12-18 08:21:05'),
(5, 'Year 1', 2, '2023-12-20 04:03:37', '2023-12-20 04:03:37'),
(6, 'Year 2', 2, '2023-12-20 04:03:40', '2023-12-20 04:03:40'),
(7, 'Grade 1', 3, '2023-12-29 05:03:47', '2023-12-29 05:03:47'),
(8, 'Grade 2', 3, '2023-12-29 05:03:51', '2023-12-29 05:03:51'),
(9, 'Grade 3', 3, '2023-12-29 05:03:54', '2023-12-29 05:03:54'),
(10, 'Grade 1', 4, '2024-01-01 09:54:42', '2024-01-01 09:54:42'),
(11, 'Grade 2', 4, '2024-01-01 09:54:45', '2024-01-01 09:54:45'),
(24, 'Year 1', 7, '2024-01-03 17:40:40', '2024-01-03 17:40:40'),
(25, 'Year 2', 7, '2024-01-03 17:40:44', '2024-01-03 17:40:44'),
(26, 'Year 1', 8, '2024-01-03 19:37:39', '2024-01-03 19:37:39'),
(27, 'Year 2', 8, '2024-01-03 19:37:43', '2024-01-03 19:37:43'),
(28, 'Year 3', 8, '2024-01-03 19:37:47', '2024-01-03 19:37:47'),
(29, 'Year 3', 7, '2024-01-09 12:41:25', '2024-01-09 12:41:25'),
(30, 'Year 4', 7, '2024-01-09 12:41:33', '2024-01-09 12:41:33'),
(31, 'Year 5', 7, '2024-01-09 12:41:39', '2024-01-09 12:41:39'),
(32, 'Year 6', 7, '2024-01-09 12:41:46', '2024-01-09 12:41:46'),
(33, 'Year 7', 7, '2024-01-09 12:41:51', '2024-01-09 12:41:51'),
(34, 'Year 8', 7, '2024-01-09 12:42:01', '2024-01-09 12:42:01'),
(35, 'Year 9', 7, '2024-01-09 12:42:06', '2024-01-09 12:42:06'),
(36, 'Year 10', 7, '2024-01-09 12:42:12', '2024-01-09 12:42:12'),
(37, 'Year 11', 7, '2024-01-09 12:42:17', '2024-01-09 12:42:17'),
(38, 'Year 12', 7, '2024-01-09 12:42:22', '2024-01-09 12:42:22'),
(39, 'Year 4', 8, '2024-01-09 14:46:18', '2024-01-09 14:46:18'),
(40, 'Year 5', 8, '2024-01-09 14:46:24', '2024-01-09 14:46:24'),
(41, 'Year 6', 8, '2024-01-09 14:46:29', '2024-01-09 14:46:29'),
(42, 'Year 7', 8, '2024-01-09 14:46:49', '2024-01-09 14:46:49'),
(43, 'Year 8', 8, '2024-01-09 14:47:03', '2024-01-09 14:47:03'),
(44, 'Year 9', 8, '2024-01-09 14:47:09', '2024-01-09 14:47:09'),
(45, 'Year 10', 8, '2024-01-09 14:47:14', '2024-01-09 14:47:14'),
(46, 'Year 11', 8, '2024-01-09 14:47:19', '2024-01-09 14:47:19'),
(47, 'Year 12', 8, '2024-01-09 14:47:46', '2024-01-09 14:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `material` varchar(1911) DEFAULT NULL,
  `board` varchar(1911) DEFAULT NULL,
  `enrollment_id` int(11) DEFAULT NULL,
  `lecturedate` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessions`
--

CREATE TABLE `lessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `grade_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 'Lesson 1', 10, 4, '2024-01-01 09:54:51', '2024-01-01 09:54:51'),
(2, 'Lesson 1', 12, 6, '2024-01-02 04:11:38', '2024-01-02 04:11:38'),
(3, ' Lesson 2', 12, 6, '2024-01-02 04:11:42', '2024-01-02 04:11:42'),
(4, ' Lesson 1', 12, 6, '2024-01-02 04:11:49', '2024-01-02 04:11:49'),
(5, 'Lesson 1', 7, 3, '2024-01-03 17:37:42', '2024-01-03 17:37:42'),
(9, 'Counting and number patterns', 24, 7, '2024-01-09 12:45:34', '2024-01-09 12:45:34'),
(10, 'Addition strategies', 24, 7, '2024-01-09 12:46:19', '2024-01-09 12:46:19'),
(11, 'Three-dimensional shapes', 24, 7, '2024-01-09 12:46:50', '2024-01-09 12:46:50'),
(12, 'Understand subtraction', 24, 7, '2024-01-09 12:47:23', '2024-01-09 12:47:23'),
(13, 'Spatial sense', 24, 7, '2024-01-09 12:48:30', '2024-01-09 12:48:30'),
(14, ' Subtraction skill builders', 24, 7, '2024-01-09 12:49:29', '2024-01-09 12:49:29'),
(15, ' Data and graphs', 24, 7, '2024-01-09 12:49:54', '2024-01-09 12:49:54'),
(16, ' Place values', 24, 7, '2024-01-09 12:50:19', '2024-01-09 12:50:19'),
(17, ' Measurement', 24, 7, '2024-01-09 12:50:42', '2024-01-09 12:50:42'),
(18, ' Understand addition', 24, 7, '2024-01-09 12:51:02', '2024-01-09 12:51:02'),
(19, ' Subtraction', 24, 7, '2024-01-09 12:51:23', '2024-01-09 12:51:23'),
(20, ' Money', 24, 7, '2024-01-09 12:51:45', '2024-01-09 12:51:45'),
(21, ' Addition skill builders', 24, 7, '2024-01-09 12:52:14', '2024-01-09 12:52:14'),
(22, ' Patterns', 24, 7, '2024-01-09 12:52:35', '2024-01-09 12:52:35'),
(23, ' Probability', 24, 7, '2024-01-09 12:53:29', '2024-01-09 12:53:29'),
(24, ' Addition', 24, 7, '2024-01-09 12:53:49', '2024-01-09 12:53:49'),
(25, ' Sorting, ordering and classifying', 24, 7, '2024-01-09 12:54:22', '2024-01-09 12:54:22'),
(26, ' Subtraction strategies', 24, 7, '2024-01-09 12:54:42', '2024-01-09 12:54:42'),
(27, ' Time', 24, 7, '2024-01-09 12:54:58', '2024-01-09 12:54:58'),
(28, ' Comparing', 24, 7, '2024-01-09 12:55:19', '2024-01-09 12:55:19'),
(29, ' Mixed operations', 24, 7, '2024-01-09 12:55:47', '2024-01-09 12:55:47'),
(30, ' Estimation', 24, 7, '2024-01-09 12:56:08', '2024-01-09 12:56:08'),
(31, ' Two-dimensional shapes', 24, 7, '2024-01-09 12:56:33', '2024-01-09 12:56:33'),
(32, 'Counting and number patterns', 25, 7, '2024-01-09 12:59:23', '2024-01-09 12:59:23'),
(33, ' Addition - two digits', 25, 7, '2024-01-09 12:59:46', '2024-01-09 12:59:46'),
(34, 'Money', 25, 7, '2024-01-09 13:00:10', '2024-01-09 13:00:10'),
(35, 'Comparing and ordering', 25, 7, '2024-01-09 13:00:41', '2024-01-09 13:00:41'),
(36, 'Time', 25, 7, '2024-01-09 13:01:04', '2024-01-09 13:01:04'),
(37, 'Subtraction - two digits', 25, 7, '2024-01-09 13:01:33', '2024-01-09 13:01:33'),
(38, 'Names of numbers', 25, 7, '2024-01-09 13:02:09', '2024-01-09 13:02:09'),
(39, 'Patterns', 25, 7, '2024-01-09 13:02:36', '2024-01-09 13:02:36'),
(40, ' Data and graphs', 25, 7, '2024-01-09 13:02:54', '2024-01-09 13:02:54'),
(41, 'Geometry', 25, 7, '2024-01-09 13:03:17', '2024-01-09 13:03:17'),
(42, ' Addition - one digit', 25, 7, '2024-01-09 13:03:32', '2024-01-09 13:03:32'),
(43, ' Properties', 25, 7, '2024-01-09 13:03:45', '2024-01-09 13:03:45'),
(44, ' Measurement', 25, 7, '2024-01-09 13:03:57', '2024-01-09 13:03:57'),
(45, ' Place values', 25, 7, '2024-01-09 13:04:10', '2024-01-09 13:04:10'),
(46, ' Logical reasoning', 25, 7, '2024-01-09 13:04:30', '2024-01-09 13:04:30'),
(47, ' Estimation and rounding', 25, 7, '2024-01-09 13:04:44', '2024-01-09 13:04:44'),
(48, ' Probability', 25, 7, '2024-01-09 13:04:57', '2024-01-09 13:04:57'),
(49, ' Subtraction - one digit', 25, 7, '2024-01-09 13:05:14', '2024-01-09 13:05:14'),
(50, ' Mixed operations', 25, 7, '2024-01-09 13:05:26', '2024-01-09 13:05:26'),
(51, 'Numbers and comparing', 29, 7, '2024-01-09 13:06:27', '2024-01-09 13:06:27'),
(52, ' Multiplication', 29, 7, '2024-01-09 13:06:40', '2024-01-09 13:06:40'),
(53, 'Measurement', 29, 7, '2024-01-09 13:07:06', '2024-01-09 13:07:06'),
(54, ' Place values', 29, 7, '2024-01-09 13:07:25', '2024-01-09 13:07:25'),
(55, ' Geometry', 29, 7, '2024-01-09 13:07:37', '2024-01-09 13:07:37'),
(56, ' Understand division', 29, 7, '2024-01-09 13:07:52', '2024-01-09 13:07:52'),
(57, ' Addition', 29, 7, '2024-01-09 13:08:02', '2024-01-09 13:08:02'),
(58, ' Division skill builders', 29, 7, '2024-01-09 13:08:13', '2024-01-09 13:08:13'),
(59, ' Properties', 29, 7, '2024-01-09 13:08:24', '2024-01-09 13:08:24'),
(60, ' Division fluency', 29, 7, '2024-01-09 13:08:42', '2024-01-09 13:08:42'),
(61, ' Subtraction', 29, 7, '2024-01-09 13:08:53', '2024-01-09 13:08:53'),
(62, ' Mixed operations', 29, 7, '2024-01-09 13:09:11', '2024-01-09 13:09:11'),
(63, 'Understand multiplication', 29, 7, '2024-01-09 13:09:38', '2024-01-09 13:09:38'),
(64, ' Division', 29, 7, '2024-01-09 13:09:48', '2024-01-09 13:09:48'),
(65, ' Estimation and rounding', 29, 7, '2024-01-09 13:10:09', '2024-01-09 13:10:09'),
(66, ' Data and graphs', 29, 7, '2024-01-09 13:10:20', '2024-01-09 13:10:20'),
(67, ' Multiplication skill builders', 29, 7, '2024-01-09 13:10:37', '2024-01-09 13:10:37'),
(68, ' Money', 29, 7, '2024-01-09 13:10:48', '2024-01-09 13:10:48'),
(69, ' Logical reasoning', 29, 7, '2024-01-09 13:11:04', '2024-01-09 13:11:04'),
(70, ' Multiplication fluency', 29, 7, '2024-01-09 13:11:18', '2024-01-09 13:11:18'),
(71, ' Time', 29, 7, '2024-01-09 13:11:27', '2024-01-09 13:11:27'),
(72, ' Patterns', 29, 7, '2024-01-09 13:11:36', '2024-01-09 13:11:36'),
(73, ' Probability', 29, 7, '2024-01-09 13:11:48', '2024-01-09 13:11:48'),
(74, 'Number sense', 30, 7, '2024-01-09 13:12:44', '2024-01-09 13:12:44'),
(75, ' Division', 30, 7, '2024-01-09 13:12:54', '2024-01-09 13:12:54'),
(76, ' Units of measurement', 30, 7, '2024-01-09 13:13:07', '2024-01-09 13:13:07'),
(77, ' Time', 30, 7, '2024-01-09 13:13:29', '2024-01-09 13:13:29'),
(78, 'Addition', 30, 7, '2024-01-09 13:13:56', '2024-01-09 13:13:56'),
(79, ' Mixed operations', 30, 7, '2024-01-09 13:14:13', '2024-01-09 13:14:13'),
(80, ' Geometry', 30, 7, '2024-01-09 13:14:30', '2024-01-09 13:14:30'),
(81, ' Subtraction', 30, 7, '2024-01-09 13:14:44', '2024-01-09 13:14:44'),
(82, ' Logical reasoning', 30, 7, '2024-01-09 13:14:58', '2024-01-09 13:14:58'),
(83, ' Geometric measurement', 30, 7, '2024-01-09 13:15:12', '2024-01-09 13:15:12'),
(84, 'Multiplication', 30, 7, '2024-01-09 13:15:29', '2024-01-09 13:15:29'),
(85, ' Data and graphs', 30, 7, '2024-01-09 13:15:39', '2024-01-09 13:15:39'),
(86, ' Fractions', 30, 7, '2024-01-09 13:15:56', '2024-01-09 13:15:56'),
(87, ' Patterns and sequences', 30, 7, '2024-01-09 13:16:08', '2024-01-09 13:16:08'),
(88, ' Money', 30, 7, '2024-01-09 13:16:21', '2024-01-09 13:16:21'),
(89, ' Probability', 30, 7, '2024-01-09 13:16:32', '2024-01-09 13:16:32'),
(90, 'Place values and number sense', 31, 7, '2024-01-09 13:17:22', '2024-01-09 13:17:22'),
(91, ' Decimals', 31, 7, '2024-01-09 13:17:32', '2024-01-09 13:17:32'),
(92, ' Data and graphs', 31, 7, '2024-01-09 13:17:46', '2024-01-09 13:17:46'),
(93, 'Addition and subtraction', 31, 7, '2024-01-09 13:18:03', '2024-01-09 13:18:03'),
(94, ' Fractions', 31, 7, '2024-01-09 13:18:13', '2024-01-09 13:18:13'),
(95, ' Probability', 31, 7, '2024-01-09 13:18:25', '2024-01-09 13:18:25'),
(96, ' Multiplication', 31, 7, '2024-01-09 13:18:38', '2024-01-09 13:18:38'),
(97, ' Time', 31, 7, '2024-01-09 13:18:49', '2024-01-09 13:18:49'),
(98, ' Mixed operations', 31, 7, '2024-01-09 13:19:05', '2024-01-09 13:19:05'),
(99, 'Units of measurement', 31, 7, '2024-01-09 13:19:31', '2024-01-09 13:19:31'),
(100, ' Problem solving', 31, 7, '2024-01-09 13:19:50', '2024-01-09 13:19:50'),
(101, ' Geometry', 31, 7, '2024-01-09 13:20:01', '2024-01-09 13:20:01'),
(102, ' Division', 31, 7, '2024-01-09 13:20:12', '2024-01-09 13:20:12'),
(103, ' Money', 31, 7, '2024-01-09 13:20:23', '2024-01-09 13:20:23'),
(104, ' Number sequences', 31, 7, '2024-01-09 13:20:36', '2024-01-09 13:20:36'),
(105, ' Geometric measurement', 31, 7, '2024-01-09 13:20:54', '2024-01-09 13:20:54'),
(106, 'Whole numbers', 32, 7, '2024-01-09 13:21:51', '2024-01-09 13:21:51'),
(107, 'Integers', 32, 7, '2024-01-09 13:41:05', '2024-01-09 13:41:05'),
(108, ' Expressions and properties', 32, 7, '2024-01-09 13:41:19', '2024-01-09 13:41:19'),
(109, ' Operations with integers', 32, 7, '2024-01-09 13:41:35', '2024-01-09 13:41:35'),
(110, ' Multiplication', 32, 7, '2024-01-09 13:41:58', '2024-01-09 13:41:58'),
(111, 'One-variable equations', 32, 7, '2024-01-09 13:42:28', '2024-01-09 13:42:28'),
(112, ' Mixed operations', 32, 7, '2024-01-09 13:42:49', '2024-01-09 13:42:49'),
(113, ' Two-dimensional figures', 32, 7, '2024-01-09 13:43:02', '2024-01-09 13:43:02'),
(114, ' Division', 32, 7, '2024-01-09 13:43:12', '2024-01-09 13:43:12'),
(115, ' Number theory', 32, 7, '2024-01-09 13:43:27', '2024-01-09 13:43:27'),
(116, ' Problem solving and estimation', 32, 7, '2024-01-09 13:43:40', '2024-01-09 13:43:40'),
(117, ' Symmetry and transformations', 32, 7, '2024-01-09 13:43:53', '2024-01-09 13:43:53'),
(118, ' Ratios and rates', 32, 7, '2024-01-09 13:44:10', '2024-01-09 13:44:10'),
(119, ' Decimals', 32, 7, '2024-01-09 13:44:20', '2024-01-09 13:44:20'),
(120, ' Constructions', 32, 7, '2024-01-09 13:44:40', '2024-01-09 13:44:40'),
(121, ' Three-dimensional figures', 32, 7, '2024-01-09 13:45:06', '2024-01-09 13:45:06'),
(122, ' Units of measurement', 32, 7, '2024-01-09 13:45:32', '2024-01-09 13:45:32'),
(123, ' Add and subtract decimals', 32, 7, '2024-01-09 13:45:45', '2024-01-09 13:45:45'),
(124, ' Fractions and mixed numbers', 32, 7, '2024-01-09 13:46:00', '2024-01-09 13:46:00'),
(125, ' Geometric measurement', 32, 7, '2024-01-09 13:46:13', '2024-01-09 13:46:13'),
(126, ' Money', 32, 7, '2024-01-09 13:46:22', '2024-01-09 13:46:22'),
(127, ' Time', 32, 7, '2024-01-09 13:46:39', '2024-01-09 13:46:39'),
(128, ' Data and graphs', 32, 7, '2024-01-09 13:46:49', '2024-01-09 13:46:49'),
(129, ' Add and subtract fractions', 32, 7, '2024-01-09 13:47:05', '2024-01-09 13:47:05'),
(130, ' Probability', 32, 7, '2024-01-09 13:47:21', '2024-01-09 13:47:21'),
(142, 'Number theory', 33, 7, '2024-01-09 14:00:00', '2024-01-09 14:00:00'),
(143, ' Exponents', 33, 7, '2024-01-09 14:00:16', '2024-01-09 14:00:16'),
(144, 'One-variable equations', 33, 7, '2024-01-09 14:00:45', '2024-01-09 14:00:45'),
(145, ' Ratios, rates and proportions', 33, 7, '2024-01-09 14:01:04', '2024-01-09 14:01:04'),
(146, 'Two-dimensional figures', 33, 7, '2024-01-09 14:01:26', '2024-01-09 14:01:26'),
(147, ' Integers', 33, 7, '2024-01-09 14:01:40', '2024-01-09 14:01:40'),
(148, 'Operations with integers', 33, 7, '2024-01-09 14:02:22', '2024-01-09 14:02:22'),
(149, ' Percents', 33, 7, '2024-01-09 14:02:33', '2024-01-09 14:02:33'),
(150, ' Decimals', 33, 7, '2024-01-09 14:02:52', '2024-01-09 14:02:52'),
(151, ' Congruence and similarity', 33, 7, '2024-01-09 14:03:16', '2024-01-09 14:03:16'),
(152, ' Consumer maths', 33, 7, '2024-01-09 14:03:29', '2024-01-09 14:03:29'),
(153, ' Operations with decimals', 33, 7, '2024-01-09 14:03:43', '2024-01-09 14:03:43'),
(154, 'Constructions', 33, 7, '2024-01-09 14:04:04', '2024-01-09 14:04:04'),
(155, ' Problem solving and estimation', 33, 7, '2024-01-09 14:04:14', '2024-01-09 14:04:14'),
(156, ' Pythagoras\' theorem', 33, 7, '2024-01-09 14:04:29', '2024-01-09 14:04:29'),
(157, ' Fractions and mixed numbers', 33, 7, '2024-01-09 14:04:41', '2024-01-09 14:04:41'),
(158, ' Units of measurement', 33, 7, '2024-01-09 14:04:55', '2024-01-09 14:04:55'),
(159, ' Three-dimensional figures', 33, 7, '2024-01-09 14:05:09', '2024-01-09 14:05:09'),
(160, ' Number sequences', 33, 7, '2024-01-09 14:05:21', '2024-01-09 14:05:21'),
(161, ' Geometric measurement', 33, 7, '2024-01-09 14:05:32', '2024-01-09 14:05:32'),
(162, ' Operations with fractions', 33, 7, '2024-01-09 14:05:56', '2024-01-09 14:05:56'),
(163, ' Expressions and properties', 33, 7, '2024-01-09 14:06:10', '2024-01-09 14:06:10'),
(164, ' Data and graphs', 33, 7, '2024-01-09 14:06:23', '2024-01-09 14:06:23'),
(165, ' Rational numbers', 33, 7, '2024-01-09 14:06:42', '2024-01-09 14:06:42'),
(166, ' Statistics', 33, 7, '2024-01-09 14:06:55', '2024-01-09 14:06:55'),
(167, ' Probability', 33, 7, '2024-01-09 14:07:09', '2024-01-09 14:07:09'),
(168, 'Number theory', 34, 7, '2024-01-09 14:07:43', '2024-01-09 14:07:43'),
(169, ' Percents', 34, 7, '2024-01-09 14:07:51', '2024-01-09 14:07:51'),
(170, ' Number sequences', 34, 7, '2024-01-09 14:08:01', '2024-01-09 14:08:01'),
(171, ' Integers', 34, 7, '2024-01-09 14:08:15', '2024-01-09 14:08:15'),
(172, ' Expressions and properties', 34, 7, '2024-01-09 14:08:26', '2024-01-09 14:08:26'),
(173, ' Consumer maths', 34, 7, '2024-01-09 14:08:44', '2024-01-09 14:08:44'),
(174, ' Operations with integers', 34, 7, '2024-01-09 14:08:55', '2024-01-09 14:08:55'),
(175, ' Units of measurement', 34, 7, '2024-01-09 14:09:11', '2024-01-09 14:09:11'),
(176, ' Rational numbers', 34, 7, '2024-01-09 14:09:22', '2024-01-09 14:09:22'),
(177, ' One-variable equations', 34, 7, '2024-01-09 14:09:35', '2024-01-09 14:09:35'),
(178, ' Problem solving', 34, 7, '2024-01-09 14:09:46', '2024-01-09 14:09:46'),
(179, ' Operations with rational numbers', 34, 7, '2024-01-09 14:10:02', '2024-01-09 14:10:02'),
(180, 'Coordinate plane', 34, 7, '2024-01-09 14:10:39', '2024-01-09 14:10:39'),
(181, ' Monomials and polynomials', 34, 7, '2024-01-09 14:10:51', '2024-01-09 14:10:51'),
(182, ' Two-dimensional figures', 34, 7, '2024-01-09 14:11:02', '2024-01-09 14:11:02'),
(183, ' Exponents and roots', 34, 7, '2024-01-09 14:11:17', '2024-01-09 14:11:17'),
(184, ' Factorising', 34, 7, '2024-01-09 14:11:29', '2024-01-09 14:11:29'),
(185, ' Congruence and similarity', 34, 7, '2024-01-09 14:11:41', '2024-01-09 14:11:41'),
(186, ' Data and graphs', 34, 7, '2024-01-09 14:11:52', '2024-01-09 14:11:52'),
(187, ' Scientific notation', 34, 7, '2024-01-09 14:12:04', '2024-01-09 14:12:04'),
(188, ' Constructions', 34, 7, '2024-01-09 14:12:13', '2024-01-09 14:12:13'),
(189, ' Ratios, rates and proportions', 34, 7, '2024-01-09 14:12:25', '2024-01-09 14:12:25'),
(190, ' Statistics', 34, 7, '2024-01-09 14:12:36', '2024-01-09 14:12:36'),
(191, ' Pythagoras\' theorem', 34, 7, '2024-01-09 14:12:46', '2024-01-09 14:12:46'),
(192, ' Probability', 34, 7, '2024-01-09 14:12:59', '2024-01-09 14:12:59'),
(193, ' Three-dimensional figures', 34, 7, '2024-01-09 14:13:10', '2024-01-09 14:13:10'),
(194, ' Proportional relationships', 34, 7, '2024-01-09 14:13:20', '2024-01-09 14:13:20'),
(195, ' Geometric measurement', 34, 7, '2024-01-09 14:13:37', '2024-01-09 14:13:37'),
(196, 'Numbers', 35, 7, '2024-01-09 14:14:18', '2024-01-09 14:14:18'),
(197, ' Circles', 35, 7, '2024-01-09 14:14:29', '2024-01-09 14:14:29'),
(198, ' Rational exponents', 35, 7, '2024-01-09 14:14:40', '2024-01-09 14:14:40'),
(199, ' Operations', 35, 7, '2024-01-09 14:14:54', '2024-01-09 14:14:54'),
(200, ' Logarithms', 35, 7, '2024-01-09 14:15:04', '2024-01-09 14:15:04'),
(201, ' Constructions', 35, 7, '2024-01-09 14:15:14', '2024-01-09 14:15:14'),
(202, 'Ratios, rates and proportions', 35, 7, '2024-01-09 14:15:32', '2024-01-09 14:15:32'),
(203, ' Solve equations', 35, 7, '2024-01-09 14:15:42', '2024-01-09 14:15:42'),
(204, ' Scientific notation', 35, 7, '2024-01-09 14:15:51', '2024-01-09 14:15:51'),
(205, ' Monomials', 35, 7, '2024-01-09 14:16:06', '2024-01-09 14:16:06'),
(206, ' Percents', 35, 7, '2024-01-09 14:16:16', '2024-01-09 14:16:16'),
(207, ' Data and graphs', 35, 7, '2024-01-09 14:16:28', '2024-01-09 14:16:28'),
(208, ' Polynomials', 35, 7, '2024-01-09 14:16:38', '2024-01-09 14:16:38'),
(209, ' Measurement', 35, 7, '2024-01-09 14:16:52', '2024-01-09 14:16:52'),
(210, ' Problem solving', 35, 7, '2024-01-09 14:17:02', '2024-01-09 14:17:02'),
(211, ' Lines and angles', 35, 7, '2024-01-09 14:17:14', '2024-01-09 14:17:14'),
(212, ' Logic', 35, 7, '2024-01-09 14:17:25', '2024-01-09 14:17:25'),
(213, ' Factorising', 35, 7, '2024-01-09 14:17:39', '2024-01-09 14:17:39'),
(214, 'Coordinate plane', 35, 7, '2024-01-09 14:18:04', '2024-01-09 14:18:04'),
(215, ' Triangles', 35, 7, '2024-01-09 14:18:20', '2024-01-09 14:18:20'),
(216, ' Direct variation', 35, 7, '2024-01-09 14:18:30', '2024-01-09 14:18:30'),
(217, ' Quadratic equations', 35, 7, '2024-01-09 14:18:40', '2024-01-09 14:18:40'),
(218, ' Linear equations', 35, 7, '2024-01-09 14:19:03', '2024-01-09 14:19:03'),
(219, ' Quadrilaterals', 35, 7, '2024-01-09 14:19:13', '2024-01-09 14:19:13'),
(220, ' Radical expressions', 35, 7, '2024-01-09 14:19:22', '2024-01-09 14:19:22'),
(221, ' Polygons', 35, 7, '2024-01-09 14:19:38', '2024-01-09 14:19:38'),
(222, ' Rational expressions', 35, 7, '2024-01-09 14:19:48', '2024-01-09 14:19:48'),
(223, ' Area and perimeter', 35, 7, '2024-01-09 14:20:02', '2024-01-09 14:20:02'),
(224, ' Exponents', 35, 7, '2024-01-09 14:20:21', '2024-01-09 14:20:21'),
(225, ' Probability', 35, 7, '2024-01-09 14:20:31', '2024-01-09 14:20:31'),
(226, ' Surface area and volume', 35, 7, '2024-01-09 14:20:44', '2024-01-09 14:20:44'),
(227, ' Statistics', 35, 7, '2024-01-09 14:20:54', '2024-01-09 14:20:54'),
(228, 'Numbers', 36, 7, '2024-01-09 14:21:48', '2024-01-09 14:21:48'),
(229, ' Factorising', 36, 7, '2024-01-09 14:21:58', '2024-01-09 14:21:58'),
(230, ' Right triangles', 36, 7, '2024-01-09 14:22:11', '2024-01-09 14:22:11'),
(231, ' Circles', 36, 7, '2024-01-09 14:22:20', '2024-01-09 14:22:20'),
(232, ' Operations', 36, 7, '2024-01-09 14:22:34', '2024-01-09 14:22:34'),
(233, ' Quadratic equations', 36, 7, '2024-01-09 14:22:48', '2024-01-09 14:22:48'),
(234, ' Trigonometry', 36, 7, '2024-01-09 14:23:03', '2024-01-09 14:23:03'),
(235, ' Consumer maths', 36, 7, '2024-01-09 14:23:21', '2024-01-09 14:23:21'),
(236, 'Rational expressions', 36, 7, '2024-01-09 14:23:39', '2024-01-09 14:23:39'),
(237, ' Linear equations', 36, 7, '2024-01-09 14:23:58', '2024-01-09 14:23:58'),
(238, ' Surface area and volume', 36, 7, '2024-01-09 14:24:08', '2024-01-09 14:24:08'),
(239, ' Points, lines and segments', 36, 7, '2024-01-09 14:24:17', '2024-01-09 14:24:17'),
(240, ' Measurement', 36, 7, '2024-01-09 14:24:28', '2024-01-09 14:24:28'),
(241, ' Two-dimensional figures', 36, 7, '2024-01-09 14:24:38', '2024-01-09 14:24:38'),
(242, ' Problem solving', 36, 7, '2024-01-09 14:24:49', '2024-01-09 14:24:49'),
(243, ' Pairs of linear equations', 36, 7, '2024-01-09 14:25:04', '2024-01-09 14:25:04'),
(244, ' Transformations', 36, 7, '2024-01-09 14:25:15', '2024-01-09 14:25:15'),
(245, ' Logic', 36, 7, '2024-01-09 14:25:24', '2024-01-09 14:25:24'),
(246, ' Probability', 36, 7, '2024-01-09 14:25:38', '2024-01-09 14:25:38'),
(247, ' Triangles', 36, 7, '2024-01-09 14:25:59', '2024-01-09 14:25:59'),
(248, ' Matrices', 36, 7, '2024-01-09 14:26:06', '2024-01-09 14:26:06'),
(249, ' Arithmetic sequences', 36, 7, '2024-01-09 14:26:23', '2024-01-09 14:26:23'),
(250, ' Statistics', 36, 7, '2024-01-09 14:26:31', '2024-01-09 14:26:31'),
(251, ' Similarity', 36, 7, '2024-01-09 14:26:40', '2024-01-09 14:26:40'),
(252, ' Data and graphs', 36, 7, '2024-01-09 14:26:54', '2024-01-09 14:26:54'),
(253, ' Polynomials', 36, 7, '2024-01-09 14:27:03', '2024-01-09 14:27:03'),
(254, ' Constructions', 36, 7, '2024-01-09 14:27:19', '2024-01-09 14:27:19'),
(255, 'Consumer maths', 37, 7, '2024-01-09 14:28:03', '2024-01-09 14:28:03'),
(256, ' Polynomials', 37, 7, '2024-01-09 14:28:11', '2024-01-09 14:28:11'),
(257, ' Problem solving', 37, 7, '2024-01-09 14:28:19', '2024-01-09 14:28:19'),
(258, ' Logic', 37, 7, '2024-01-09 14:28:36', '2024-01-09 14:28:36'),
(259, ' Single-variable inequalities', 37, 7, '2024-01-09 14:28:48', '2024-01-09 14:28:48'),
(260, ' Sequences and series', 37, 7, '2024-01-09 14:29:01', '2024-01-09 14:29:01'),
(261, ' Parabolas', 37, 7, '2024-01-09 14:29:10', '2024-01-09 14:29:10'),
(262, ' Relations and functions', 37, 7, '2024-01-09 14:29:22', '2024-01-09 14:29:22'),
(263, ' Circles', 37, 7, '2024-01-09 14:29:31', '2024-01-09 14:29:31'),
(264, ' Introduction to limits', 37, 7, '2024-01-09 14:29:42', '2024-01-09 14:29:42'),
(265, ' Linear functions', 37, 7, '2024-01-09 14:29:59', '2024-01-09 14:29:59'),
(266, ' Calculate limits', 37, 7, '2024-01-09 14:30:10', '2024-01-09 14:30:10'),
(267, ' Ellipses', 37, 7, '2024-01-09 14:30:24', '2024-01-09 14:30:24'),
(268, ' Limits involving infinity', 37, 7, '2024-01-09 14:30:37', '2024-01-09 14:30:37'),
(269, ' Hyperbolas', 37, 7, '2024-01-09 14:30:47', '2024-01-09 14:30:47'),
(270, ' Limits and rational functions', 37, 7, '2024-01-09 14:31:07', '2024-01-09 14:31:07'),
(271, ' Continuity', 37, 7, '2024-01-09 14:31:16', '2024-01-09 14:31:16'),
(272, ' Linear inequalities', 37, 7, '2024-01-09 14:31:27', '2024-01-09 14:31:27'),
(273, ' Rational functions and expressions', 37, 7, '2024-01-09 14:31:39', '2024-01-09 14:31:39'),
(274, ' Introduction to derivatives', 37, 7, '2024-01-09 14:31:58', '2024-01-09 14:31:58'),
(275, ' Complex numbers', 37, 7, '2024-01-09 14:32:06', '2024-01-09 14:32:06'),
(276, ' Function operations', 37, 7, '2024-01-09 14:32:17', '2024-01-09 14:32:17'),
(277, ' Calculate derivatives', 37, 7, '2024-01-09 14:32:35', '2024-01-09 14:32:35'),
(278, ' Argand plane', 37, 7, '2024-01-09 14:32:45', '2024-01-09 14:32:45'),
(279, ' Angle measures', 37, 7, '2024-01-09 14:32:58', '2024-01-09 14:32:58'),
(280, ' Factorising', 37, 7, '2024-01-09 14:33:09', '2024-01-09 14:33:09'),
(281, ' Trigonometry', 37, 7, '2024-01-09 14:33:18', '2024-01-09 14:33:18'),
(282, ' Probability', 37, 7, '2024-01-09 14:33:31', '2024-01-09 14:33:31'),
(283, ' Quadratic functions', 37, 7, '2024-01-09 14:33:43', '2024-01-09 14:33:43'),
(284, ' Trigonometric functions', 37, 7, '2024-01-09 14:33:58', '2024-01-09 14:33:58'),
(285, ' Statistics', 37, 7, '2024-01-09 14:34:08', '2024-01-09 14:34:08'),
(286, ' Trigonometric identities', 37, 7, '2024-01-09 14:34:23', '2024-01-09 14:34:23'),
(287, 'Functions', 38, 7, '2024-01-09 14:36:13', '2024-01-09 14:36:13'),
(288, ' Trigonometric identities', 38, 7, '2024-01-09 14:36:26', '2024-01-09 14:36:26'),
(289, ' Introduction to derivatives', 38, 7, '2024-01-09 14:36:34', '2024-01-09 14:36:34'),
(290, ' Conic sections', 38, 7, '2024-01-09 14:36:43', '2024-01-09 14:36:43'),
(291, ' Derivative rules', 38, 7, '2024-01-09 14:36:52', '2024-01-09 14:36:52'),
(292, ' Families of functions', 38, 7, '2024-01-09 14:37:04', '2024-01-09 14:37:04'),
(293, ' Calculate derivatives', 38, 7, '2024-01-09 14:37:13', '2024-01-09 14:37:13'),
(294, ' Polynomials', 38, 7, '2024-01-09 14:37:23', '2024-01-09 14:37:23'),
(295, ' Complex numbers', 38, 7, '2024-01-09 14:37:31', '2024-01-09 14:37:31'),
(296, ' Argand plane', 38, 7, '2024-01-09 14:37:41', '2024-01-09 14:37:41'),
(297, ' Derivative strategies', 38, 7, '2024-01-09 14:37:50', '2024-01-09 14:37:50'),
(298, ' Calculate higher derivatives', 38, 7, '2024-01-09 14:38:00', '2024-01-09 14:38:00'),
(299, ' Polar form', 38, 7, '2024-01-09 14:38:10', '2024-01-09 14:38:10'),
(300, ' Systems of inequalities', 38, 7, '2024-01-09 14:38:21', '2024-01-09 14:38:21'),
(301, ' Probability', 38, 7, '2024-01-09 14:38:32', '2024-01-09 14:38:32'),
(302, ' Two-dimensional vectors', 38, 7, '2024-01-09 14:38:43', '2024-01-09 14:38:43'),
(303, ' Nonlinear inequalities', 38, 7, '2024-01-09 14:38:52', '2024-01-09 14:38:52'),
(304, ' Matrices', 38, 7, '2024-01-09 14:39:00', '2024-01-09 14:39:00'),
(305, ' Probability distributions', 38, 7, '2024-01-09 14:39:09', '2024-01-09 14:39:09'),
(306, ' Three-dimensional vectors', 38, 7, '2024-01-09 14:39:23', '2024-01-09 14:39:23'),
(307, ' Trigonometry', 38, 7, '2024-01-09 14:39:32', '2024-01-09 14:39:32'),
(308, ' Sequences and series', 38, 7, '2024-01-09 14:39:41', '2024-01-09 14:39:41'),
(309, ' Statistics', 38, 7, '2024-01-09 14:39:55', '2024-01-09 14:39:55'),
(310, ' Trigonometric functions', 38, 7, '2024-01-09 14:40:06', '2024-01-09 14:40:06'),
(311, ' Continuity', 38, 7, '2024-01-09 14:40:27', '2024-01-09 14:40:27'),
(342, 'Consonants and vowels - Reading foundations', 26, 8, '2024-01-09 15:06:53', '2024-01-09 15:06:53'),
(343, ' Short e - Reading foundations', 26, 8, '2024-01-09 15:07:20', '2024-01-09 15:07:20'),
(344, 'Short and long vowel patterns - Reading foundations', 26, 8, '2024-01-09 15:07:43', '2024-01-09 15:07:43'),
(345, 'Syllables - Reading foundations', 26, 8, '2024-01-09 15:08:25', '2024-01-09 15:08:25'),
(346, 'Short i - Reading foundations', 26, 8, '2024-01-09 15:08:47', '2024-01-09 15:08:47'),
(347, ' Diphthongs: oi, oy, ou, ow - Reading foundations', 26, 8, '2024-01-09 15:09:09', '2024-01-09 15:09:09'),
(348, 'Short o - Reading foundations', 26, 8, '2024-01-09 15:09:37', '2024-01-09 15:09:37'),
(349, ' Blending and segmenting - Reading foundations', 26, 8, '2024-01-09 15:09:56', '2024-01-09 15:09:56'),
(350, ' Two-syllable words - Reading foundations', 26, 8, '2024-01-09 15:10:32', '2024-01-09 15:10:32'),
(351, 'Consonant sounds and letters - Reading foundations', 26, 8, '2024-01-09 15:11:05', '2024-01-09 15:11:05'),
(352, 'Short u - Reading foundations', 26, 8, '2024-01-09 15:11:28', '2024-01-09 15:11:28'),
(353, ' Sight words - Reading foundations', 26, 8, '2024-01-09 15:11:49', '2024-01-09 15:11:49'),
(354, 'Consonant blends and digraphs - Reading foundations', 26, 8, '2024-01-09 15:12:20', '2024-01-09 15:12:20'),
(355, ' Short vowels - Reading foundations', 26, 8, '2024-01-09 15:12:36', '2024-01-09 15:12:36'),
(356, 'Short and long vowel sounds - Reading foundations', 26, 8, '2024-01-09 15:13:17', '2024-01-09 15:13:17'),
(357, ' Silent e - Reading foundations', 26, 8, '2024-01-09 15:13:42', '2024-01-09 15:13:42'),
(358, ' Short a - Reading foundations', 26, 8, '2024-01-09 15:14:02', '2024-01-09 15:14:02'),
(359, ' Vowel digraphs - Reading foundations', 26, 8, '2024-01-09 15:14:32', '2024-01-09 15:14:32'),
(360, ' Reality vs fiction - Reading strategies', 26, 8, '2024-01-09 15:15:39', '2024-01-09 15:15:39'),
(361, 'Main idea - Reading strategies', 26, 8, '2024-01-09 15:16:12', '2024-01-09 15:16:12'),
(362, ' Inference and analysis - Reading strategies', 26, 8, '2024-01-09 15:16:36', '2024-01-09 15:16:36'),
(363, ' Nouns and adjectives - Vocabulary', 26, 8, '2024-01-09 15:17:02', '2024-01-09 15:17:02'),
(364, 'Multiple-meaning words - Vocabulary', 26, 8, '2024-01-09 15:17:28', '2024-01-09 15:17:28'),
(365, ' Prefixes and suffixes - Vocabulary', 26, 8, '2024-01-09 15:17:55', '2024-01-09 15:17:55'),
(366, 'Shades of meaning - Vocabulary', 26, 8, '2024-01-09 15:18:59', '2024-01-09 15:18:59'),
(367, ' Context clues - Vocabulary', 26, 8, '2024-01-09 15:19:29', '2024-01-09 15:19:29'),
(368, ' Categories - Vocabulary', 26, 8, '2024-01-09 15:19:51', '2024-01-09 15:19:51'),
(369, ' Reference skills - Vocabulary', 26, 8, '2024-01-09 15:20:33', '2024-01-09 15:20:33'),
(370, ' Synonyms and antonyms - Vocabulary', 26, 8, '2024-01-09 15:20:58', '2024-01-09 15:20:58'),
(371, ' Sentences - Grammar and mechanics', 26, 8, '2024-01-09 15:21:39', '2024-01-09 15:21:39'),
(372, ' Verbs - Grammar and mechanics', 26, 8, '2024-01-09 15:21:56', '2024-01-09 15:21:56'),
(373, ' Articles - Grammar and mechanics', 26, 8, '2024-01-09 15:22:12', '2024-01-09 15:22:12'),
(374, ' Adjectives - Grammar and mechanics', 26, 8, '2024-01-09 15:22:40', '2024-01-09 15:22:40'),
(375, ' Subject-verb agreement - Grammar and mechanics', 26, 8, '2024-01-09 15:22:59', '2024-01-09 15:22:59'),
(376, ' Verb tense - Grammar and mechanics', 26, 8, '2024-01-09 15:23:22', '2024-01-09 15:23:22'),
(377, ' Nouns - Grammar and mechanics', 26, 8, '2024-01-09 15:23:44', '2024-01-09 15:23:44'),
(378, ' Prepositions - Grammar and mechanics', 26, 8, '2024-01-09 15:24:15', '2024-01-09 15:24:15'),
(379, ' Linking words - Grammar and mechanics', 26, 8, '2024-01-09 15:24:37', '2024-01-09 15:24:37'),
(380, ' Contractions - Grammar and mechanics', 26, 8, '2024-01-09 15:25:02', '2024-01-09 15:25:02'),
(381, ' Pronouns - Grammar and mechanics', 26, 8, '2024-01-09 15:25:21', '2024-01-09 15:25:21'),
(382, ' Capitalisation - Grammar and mechanics', 26, 8, '2024-01-09 15:25:46', '2024-01-09 15:25:46'),
(383, 'Syllables - Reading foundations', 27, 8, '2024-01-09 15:31:52', '2024-01-09 15:31:52'),
(384, ' Silent e - Reading foundations', 27, 8, '2024-01-09 15:32:14', '2024-01-09 15:32:14'),
(385, 'Diphthongs: oi, oy, ou, ow - Reading foundations', 27, 8, '2024-01-09 15:32:53', '2024-01-09 15:32:53'),
(386, ' Rhyming - Reading foundations', 27, 8, '2024-01-09 15:33:14', '2024-01-09 15:33:14'),
(387, ' Vowel digraphs - Reading foundations', 27, 8, '2024-01-09 15:33:31', '2024-01-09 15:33:31'),
(388, ' Variant vowels - Reading foundations', 27, 8, '2024-01-09 15:33:50', '2024-01-09 15:33:50'),
(389, 'Consonant blends and digraphs - Reading foundations', 27, 8, '2024-01-09 15:34:47', '2024-01-09 15:34:47'),
(390, ' Soft g and c - Reading foundations', 27, 8, '2024-01-09 15:35:10', '2024-01-09 15:35:10'),
(391, ' Short and long vowel patterns - Reading foundations', 27, 8, '2024-01-09 15:35:34', '2024-01-09 15:35:34'),
(392, ' Two-syllable words - Reading foundations', 27, 8, '2024-01-09 15:35:56', '2024-01-09 15:35:56'),
(393, ' Consonant-l-e - Reading foundations', 27, 8, '2024-01-09 15:36:18', '2024-01-09 15:36:18'),
(394, ' Short vowels - Reading foundations', 27, 8, '2024-01-09 15:36:37', '2024-01-09 15:36:37'),
(395, ' Long vowel patterns - Reading foundations', 27, 8, '2024-01-09 15:36:59', '2024-01-09 15:36:59'),
(396, ' Sight words - Reading foundations', 27, 8, '2024-01-09 15:37:20', '2024-01-09 15:37:20'),
(397, 'Sequence - Reading strategies', 27, 8, '2024-01-09 15:38:31', '2024-01-09 15:38:31'),
(398, ' Theme - Reading strategies', 27, 8, '2024-01-09 15:38:51', '2024-01-09 15:38:51'),
(399, 'Compare and contrast - Reading strategies', 27, 8, '2024-01-09 15:39:13', '2024-01-09 15:39:13'),
(400, ' Inference and analysis - Reading strategies', 27, 8, '2024-01-09 15:39:31', '2024-01-09 15:39:31'),
(401, ' Topic and purpose - Reading strategies', 27, 8, '2024-01-09 15:39:49', '2024-01-09 15:39:49'),
(402, ' Informational texts - Reading strategies', 27, 8, '2024-01-09 15:40:06', '2024-01-09 15:40:06'),
(403, ' Cause and effect - Reading strategies', 27, 8, '2024-01-09 15:40:23', '2024-01-09 15:40:23'),
(404, ' Organising writing - Writing strategies', 27, 8, '2024-01-09 15:40:47', '2024-01-09 15:40:47'),
(405, ' Author\'s purpose - Writing strategies', 27, 8, '2024-01-09 15:41:11', '2024-01-09 15:41:11'),
(406, 'Descriptive details - Writing strategies', 27, 8, '2024-01-09 15:41:43', '2024-01-09 15:41:43'),
(407, ' Topic sentences - Writing strategies', 27, 8, '2024-01-09 15:42:00', '2024-01-09 15:42:00'),
(408, ' Opinion writing - Writing strategies', 27, 8, '2024-01-09 15:42:17', '2024-01-09 15:42:17'),
(409, ' Linking words - Writing strategies', 27, 8, '2024-01-09 15:42:34', '2024-01-09 15:42:34'),
(410, ' Prefixes and suffixes - Vocabulary', 27, 8, '2024-01-09 15:43:02', '2024-01-09 15:43:02'),
(411, ' Synonyms and antonyms - Vocabulary', 27, 8, '2024-01-09 15:43:21', '2024-01-09 15:43:21'),
(412, ' Idioms - Vocabulary', 27, 8, '2024-01-09 15:43:39', '2024-01-09 15:43:39'),
(413, ' Context clues - Vocabulary', 27, 8, '2024-01-09 15:43:58', '2024-01-09 15:43:58'),
(414, ' Reference skills - Vocabulary', 27, 8, '2024-01-09 15:44:15', '2024-01-09 15:44:15'),
(415, ' Homophones - Vocabulary', 27, 8, '2024-01-09 15:44:31', '2024-01-09 15:44:31'),
(416, ' Compound words - Vocabulary', 27, 8, '2024-01-09 15:44:49', '2024-01-09 15:44:49'),
(417, ' Multiple-meaning words - Vocabulary', 27, 8, '2024-01-09 15:45:11', '2024-01-09 15:45:11'),
(418, ' Categories - Vocabulary', 27, 8, '2024-01-09 15:45:28', '2024-01-09 15:45:28'),
(419, ' Shades of meaning - Vocabulary', 27, 8, '2024-01-09 15:45:51', '2024-01-09 15:45:51'),
(420, ' Sentences, fragments and run-ons - Grammar and mechanics', 27, 8, '2024-01-09 15:46:20', '2024-01-09 15:46:20'),
(421, ' Verb types - Grammar and mechanics', 27, 8, '2024-01-09 15:46:41', '2024-01-09 15:46:41'),
(422, ' Articles - Grammar and mechanics', 27, 8, '2024-01-09 15:46:55', '2024-01-09 15:46:55'),
(423, ' Adjectives and adverbs - Grammar and mechanics', 27, 8, '2024-01-09 15:47:13', '2024-01-09 15:47:13'),
(424, ' Subject-verb agreement - Grammar and mechanics', 27, 8, '2024-01-09 15:47:33', '2024-01-09 15:47:33'),
(425, ' Verb tense - Grammar and mechanics', 27, 8, '2024-01-09 15:47:52', '2024-01-09 15:47:52'),
(426, ' Nouns - Grammar and mechanics', 27, 8, '2024-01-09 15:48:08', '2024-01-09 15:48:08'),
(427, ' Prepositions - Grammar and mechanics', 27, 8, '2024-01-09 15:48:27', '2024-01-09 15:48:27'),
(428, ' Contractions - Grammar and mechanics', 27, 8, '2024-01-09 15:48:48', '2024-01-09 15:48:48'),
(429, ' Pronouns - Grammar and mechanics', 27, 8, '2024-01-09 15:49:12', '2024-01-09 15:49:12'),
(430, ' Capitalisation - Grammar and mechanics', 27, 8, '2024-01-09 15:49:34', '2024-01-09 15:49:34'),
(431, 'Short and long vowels - Reading foundations', 28, 8, '2024-01-09 16:47:11', '2024-01-09 16:47:11'),
(432, ' Blends - Reading foundations', 28, 8, '2024-01-09 16:47:29', '2024-01-09 16:47:29'),
(433, 'Diphthongs and r vowel patterns - Reading foundations', 28, 8, '2024-01-09 16:47:56', '2024-01-09 16:47:56'),
(434, 'Multisyllabic words - Reading foundations', 28, 8, '2024-01-09 16:48:15', '2024-01-09 16:48:15'),
(435, ' Irregular words - Reading foundations', 28, 8, '2024-01-09 16:48:50', '2024-01-09 16:48:50'),
(436, 'Main idea - Reading strategies', 28, 8, '2024-01-09 16:52:57', '2024-01-09 16:52:57'),
(437, ' Sensory details - Reading strategies', 28, 8, '2024-01-09 16:53:17', '2024-01-09 16:53:17'),
(438, ' Literary texts: level 1 - Reading strategies', 28, 8, '2024-01-09 16:53:39', '2024-01-09 16:53:39'),
(439, ' Literary devices - Reading strategies', 28, 8, '2024-01-09 16:54:01', '2024-01-09 16:54:01'),
(440, ' Theme - Reading strategies', 28, 8, '2024-01-09 16:54:24', '2024-01-09 16:54:24'),
(441, ' Point of view - Reading strategies', 28, 8, '2024-01-09 16:54:50', '2024-01-09 16:54:50'),
(442, 'Literary texts: level 2 - Reading strategies', 28, 8, '2024-01-09 16:55:19', '2024-01-09 16:55:19'),
(443, ' Author\'s purpose - Reading strategies', 28, 8, '2024-01-09 16:55:48', '2024-01-09 16:55:48'),
(444, ' Inference - Reading strategies', 28, 8, '2024-01-09 16:56:12', '2024-01-09 16:56:12'),
(445, ' Informational texts: level 1 - Reading strategies', 28, 8, '2024-01-09 16:56:33', '2024-01-09 16:56:33'),
(446, ' Text structure - Reading strategies', 28, 8, '2024-01-09 16:57:14', '2024-01-09 16:57:14'),
(447, ' Story elements - Reading strategies', 28, 8, '2024-01-09 16:57:33', '2024-01-09 16:57:33'),
(448, ' Informational texts: level 2 - Reading strategies', 28, 8, '2024-01-09 16:57:54', '2024-01-09 16:57:54'),
(449, ' Visual elements - Reading strategies', 28, 8, '2024-01-09 16:58:16', '2024-01-09 16:58:16'),
(450, ' Organising writing - Writing strategies', 28, 8, '2024-01-09 16:58:44', '2024-01-09 16:58:44'),
(451, ' Writer\'s purpose - Writing strategies', 28, 8, '2024-01-09 16:59:01', '2024-01-09 16:59:01'),
(452, 'Opinion writing - Writing strategies', 28, 8, '2024-01-09 16:59:26', '2024-01-09 16:59:26'),
(453, ' Linking words - Writing strategies', 28, 8, '2024-01-09 16:59:41', '2024-01-09 16:59:41'),
(454, ' Topic sentences - Writing strategies', 28, 8, '2024-01-09 16:59:57', '2024-01-09 16:59:57'),
(455, ' Descriptive details - Writing strategies', 28, 8, '2024-01-09 17:00:14', '2024-01-09 17:00:14'),
(456, ' Prefixes and suffixes - Vocabulary', 28, 8, '2024-01-09 17:00:39', '2024-01-09 17:00:39'),
(457, ' Categories - Vocabulary', 28, 8, '2024-01-09 17:00:57', '2024-01-09 17:00:57'),
(458, ' Shades of meaning - Vocabulary', 28, 8, '2024-01-09 17:01:17', '2024-01-09 17:01:17'),
(459, ' Synonyms and antonyms - Vocabulary', 28, 8, '2024-01-09 17:01:35', '2024-01-09 17:01:35'),
(460, ' Idioms - Vocabulary', 28, 8, '2024-01-09 17:01:56', '2024-01-09 17:01:56'),
(461, ' Context clues - Vocabulary', 28, 8, '2024-01-09 17:02:12', '2024-01-09 17:02:12'),
(462, ' Homophones - Vocabulary', 28, 8, '2024-01-09 17:02:30', '2024-01-09 17:02:30'),
(463, ' Reference skills - Vocabulary', 28, 8, '2024-01-09 17:02:48', '2024-01-09 17:02:48'),
(464, ' Greek and Latin roots - Vocabulary', 28, 8, '2024-01-09 17:03:01', '2024-01-09 17:03:01'),
(465, ' Multiple-meaning words - Vocabulary', 28, 8, '2024-01-09 17:03:24', '2024-01-09 17:03:24'),
(466, ' Compound words - Vocabulary', 28, 8, '2024-01-09 17:03:49', '2024-01-09 17:03:49'),
(467, ' Sentences, fragments and run-ons - Grammar and mechanics', 28, 8, '2024-01-09 17:04:19', '2024-01-09 17:04:19'),
(468, ' Verb types - Grammar and mechanics', 28, 8, '2024-01-09 17:04:34', '2024-01-09 17:04:34'),
(469, ' Adjectives and adverbs - Grammar and mechanics', 28, 8, '2024-01-09 17:04:50', '2024-01-09 17:04:50'),
(470, ' Subject-verb agreement - Grammar and mechanics', 28, 8, '2024-01-09 17:05:06', '2024-01-09 17:05:06'),
(471, ' Verb tense - Grammar and mechanics', 28, 8, '2024-01-09 17:05:24', '2024-01-09 17:05:24'),
(472, ' Nouns - Grammar and mechanics', 28, 8, '2024-01-09 17:05:42', '2024-01-09 17:05:42'),
(473, ' Prepositions - Grammar and mechanics', 28, 8, '2024-01-09 17:06:02', '2024-01-09 17:06:02'),
(474, ' Conjunctions - Grammar and mechanics', 28, 8, '2024-01-09 17:06:21', '2024-01-09 17:06:21'),
(475, ' Contractions - Grammar and mechanics', 28, 8, '2024-01-09 17:06:34', '2024-01-09 17:06:34'),
(476, ' Articles - Grammar and mechanics', 28, 8, '2024-01-09 17:06:50', '2024-01-09 17:06:50'),
(477, ' Pronouns - Grammar and mechanics', 28, 8, '2024-01-09 17:07:07', '2024-01-09 17:07:07'),
(478, ' Commas - Grammar and mechanics', 28, 8, '2024-01-09 17:07:21', '2024-01-09 17:07:21'),
(479, ' Capitalisation - Grammar and mechanics', 28, 8, '2024-01-09 17:07:38', '2024-01-09 17:07:38'),
(480, ' Formatting - Grammar and mechanics', 28, 8, '2024-01-09 17:07:54', '2024-01-09 17:07:54'),
(481, 'Main idea - Reading strategies', 39, 8, '2024-01-09 17:09:10', '2024-01-09 17:09:10'),
(482, ' Literary devices - Reading strategies', 39, 8, '2024-01-09 17:09:31', '2024-01-09 17:09:31'),
(483, 'Literary texts: level 1 - Reading strategies', 39, 8, '2024-01-09 17:09:48', '2024-01-09 17:09:48'),
(484, ' Theme - Reading strategies', 39, 8, '2024-01-09 17:10:02', '2024-01-09 17:10:02'),
(485, ' Literary texts: level 2 - Reading strategies', 39, 8, '2024-01-09 17:10:21', '2024-01-09 17:10:21'),
(486, ' Point of view - Reading strategies', 39, 8, '2024-01-09 17:10:40', '2024-01-09 17:10:40'),
(487, 'Author\'s purpose - Reading strategies', 39, 8, '2024-01-09 17:11:01', '2024-01-09 17:11:01'),
(488, ' Inference - Reading strategies', 39, 8, '2024-01-09 17:11:19', '2024-01-09 17:11:19'),
(489, ' Informational texts: level 1 - Reading strategies', 39, 8, '2024-01-09 17:11:36', '2024-01-09 17:11:36'),
(490, ' Text structure - Reading strategies', 39, 8, '2024-01-09 17:11:56', '2024-01-09 17:11:56'),
(491, 'Story elements - Reading strategies', 39, 8, '2024-01-09 17:12:34', '2024-01-09 17:12:34'),
(492, ' Informational texts: level 2 - Reading strategies', 39, 8, '2024-01-09 17:12:50', '2024-01-09 17:12:50'),
(493, ' Visual elements - Reading strategies', 39, 8, '2024-01-09 17:13:07', '2024-01-09 17:13:07'),
(494, ' Sensory details - Reading strategies', 39, 8, '2024-01-09 17:13:23', '2024-01-09 17:13:23'),
(495, ' Organising writing - Writing strategies', 39, 8, '2024-01-09 17:13:49', '2024-01-09 17:13:49'),
(496, ' Linking words - Writing strategies', 39, 8, '2024-01-09 17:14:04', '2024-01-09 17:14:04'),
(497, ' Descriptive details - Writing strategies', 39, 8, '2024-01-09 17:14:18', '2024-01-09 17:14:18'),
(498, ' Introductions and conclusions - Writing strategies', 39, 8, '2024-01-09 17:14:35', '2024-01-09 17:14:35'),
(499, ' Developing and supporting arguments - Writing strategies', 39, 8, '2024-01-09 17:14:51', '2024-01-09 17:14:51'),
(500, ' Prefixes and suffixes - Vocabulary', 39, 8, '2024-01-09 17:15:16', '2024-01-09 17:15:16'),
(501, ' Compound words - Vocabulary ', 39, 8, '2024-01-09 17:15:34', '2024-01-09 17:15:34'),
(502, ' Shades of meaning - Vocabulary', 39, 8, '2024-01-09 17:15:47', '2024-01-09 17:15:47'),
(503, ' Categories - Vocabulary', 39, 8, '2024-01-09 17:16:24', '2024-01-09 17:16:24'),
(504, ' Context clues - Vocabulary', 39, 8, '2024-01-09 17:16:58', '2024-01-09 17:16:58'),
(505, ' Synonyms and antonyms - Vocabulary', 39, 8, '2024-01-09 17:17:26', '2024-01-09 17:17:26'),
(506, ' Reference skills - Vocabulary', 39, 8, '2024-01-09 17:17:44', '2024-01-09 17:17:44'),
(507, ' Greek and Latin roots - Vocabulary', 39, 8, '2024-01-09 17:18:02', '2024-01-09 17:18:02'),
(508, ' Homophones - Vocabulary', 39, 8, '2024-01-09 17:18:30', '2024-01-09 17:18:30'),
(509, ' Multiple-meaning words - Vocabulary', 39, 8, '2024-01-09 17:18:46', '2024-01-09 17:18:46'),
(510, ' Sentences, fragments and run-ons - Grammar and mechanics', 39, 8, '2024-01-09 17:19:11', '2024-01-09 17:19:11'),
(511, ' Verb types - Grammar and mechanics', 39, 8, '2024-01-09 17:19:28', '2024-01-09 17:19:28'),
(512, ' Adjectives and adverbs - Grammar and mechanics', 39, 8, '2024-01-09 17:19:45', '2024-01-09 17:19:45'),
(513, ' Subject-verb agreement - Grammar and mechanics', 39, 8, '2024-01-09 17:20:03', '2024-01-09 17:20:03'),
(514, ' Nouns - Grammar and mechanics', 39, 8, '2024-01-09 17:20:24', '2024-01-09 17:20:24'),
(515, ' Verb tense - Grammar and mechanics', 39, 8, '2024-01-09 17:20:38', '2024-01-09 17:20:38'),
(516, ' Prepositions - Grammar and mechanics', 39, 8, '2024-01-09 17:20:53', '2024-01-09 17:20:53'),
(517, ' Conjunctions - Grammar and mechanics', 39, 8, '2024-01-09 17:21:09', '2024-01-09 17:21:09'),
(518, ' Contractions - Grammar and mechanics', 39, 8, '2024-01-09 17:21:26', '2024-01-09 17:21:26'),
(519, ' Commas - Grammar and mechanics', 39, 8, '2024-01-09 17:21:43', '2024-01-09 17:21:43'),
(520, ' Pronouns - Grammar and mechanics', 39, 8, '2024-01-09 17:21:59', '2024-01-09 17:21:59'),
(521, ' Articles - Grammar and mechanics ', 39, 8, '2024-01-09 17:22:13', '2024-01-09 17:22:13'),
(522, ' Capitalisation - Grammar and mechanics', 39, 8, '2024-01-09 17:22:30', '2024-01-09 17:22:30'),
(523, 'Formatting - Grammar and mechanics', 39, 8, '2024-01-09 17:23:37', '2024-01-09 17:23:37'),
(524, 'Main idea - Reading strategies', 40, 8, '2024-01-09 17:26:03', '2024-01-09 17:26:03'),
(525, ' Sensory details - Reading strategies', 40, 8, '2024-01-09 17:26:21', '2024-01-09 17:26:21'),
(526, ' Literary texts: level 1 - Reading strategies', 40, 8, '2024-01-09 17:26:35', '2024-01-09 17:26:35'),
(527, 'Literary devices - Reading strategies', 40, 8, '2024-01-09 17:26:55', '2024-01-09 17:26:55'),
(528, ' Literary texts: level 2 - Reading strategies', 40, 8, '2024-01-09 17:27:15', '2024-01-09 17:27:15'),
(529, ' Theme - Reading strategies', 40, 8, '2024-01-09 17:27:32', '2024-01-09 17:27:32'),
(530, 'Author\'s purpose and tone - Reading strategies', 40, 8, '2024-01-09 17:28:09', '2024-01-09 17:28:09'),
(531, ' Point of view - Reading strategies', 40, 8, '2024-01-09 17:28:21', '2024-01-09 17:28:21'),
(532, ' Informational texts: level 1 - Reading strategies', 40, 8, '2024-01-09 17:28:43', '2024-01-09 17:28:43'),
(533, ' Inference - Reading strategies', 40, 8, '2024-01-09 17:29:04', '2024-01-09 17:29:04'),
(534, ' Text structure - Reading strategies', 40, 8, '2024-01-09 17:29:19', '2024-01-09 17:29:19'),
(535, ' Informational texts: level 2 - Reading strategies', 40, 8, '2024-01-09 17:29:41', '2024-01-09 17:29:41'),
(536, ' Story elements - Reading strategies', 40, 8, '2024-01-09 17:29:53', '2024-01-09 17:29:53'),
(537, ' Visual elements - Reading strategies', 40, 8, '2024-01-09 17:30:10', '2024-01-09 17:30:10'),
(538, ' Organising writing - Writing strategies', 40, 8, '2024-01-09 17:30:34', '2024-01-09 17:30:34'),
(539, ' Developing and supporting arguments - Writing strategies', 40, 8, '2024-01-09 17:31:00', '2024-01-09 17:31:00'),
(540, ' Descriptive details - Writing strategies', 40, 8, '2024-01-09 17:31:17', '2024-01-09 17:31:17'),
(541, ' Editing and revising - Writing strategies', 40, 8, '2024-01-09 17:31:39', '2024-01-09 17:31:39'),
(542, ' Introductions and conclusions - Writing strategies', 40, 8, '2024-01-09 17:31:55', '2024-01-09 17:31:55'),
(543, ' Research skills - Writing strategies', 40, 8, '2024-01-09 17:32:10', '2024-01-09 17:32:10'),
(544, ' Prefixes and suffixes - Vocabulary', 40, 8, '2024-01-09 17:32:32', '2024-01-09 17:32:32'),
(545, ' Categories - Vocabulary', 40, 8, '2024-01-09 17:32:51', '2024-01-09 17:32:51'),
(546, ' Shades of meaning - Vocabulary', 40, 8, '2024-01-09 17:33:04', '2024-01-09 17:33:04'),
(547, ' Synonyms and antonyms - Vocabulary', 40, 8, '2024-01-09 17:33:18', '2024-01-09 17:33:18'),
(548, ' Context clues - Vocabulary', 40, 8, '2024-01-09 17:33:37', '2024-01-09 17:33:37'),
(549, ' Greek and Latin roots - Vocabulary', 40, 8, '2024-01-09 17:34:54', '2024-01-09 17:34:54'),
(550, ' Analogies - Vocabulary', 40, 8, '2024-01-09 17:35:08', '2024-01-09 17:35:08'),
(551, ' Reference skills - Vocabulary', 40, 8, '2024-01-09 17:35:23', '2024-01-09 17:35:23'),
(552, ' Homophones - Vocabulary', 40, 8, '2024-01-09 17:35:43', '2024-01-09 17:35:43'),
(553, ' Multiple-meaning words - Vocabulary', 40, 8, '2024-01-09 17:35:59', '2024-01-09 17:35:59'),
(554, ' Sentences, fragments and run-ons - Grammar and mechanics', 40, 8, '2024-01-09 17:36:18', '2024-01-09 17:36:18'),
(555, ' Pronouns - Grammar and mechanics', 40, 8, '2024-01-09 17:36:31', '2024-01-09 17:36:31'),
(556, ' Adjectives and adverbs - Grammar and mechanics', 40, 8, '2024-01-09 17:36:50', '2024-01-09 17:36:50'),
(557, ' Prepositions - Grammar and mechanics', 40, 8, '2024-01-09 17:37:13', '2024-01-09 17:37:13'),
(558, ' Nouns - Grammar and mechanics', 40, 8, '2024-01-09 17:37:33', '2024-01-09 17:37:33'),
(559, ' Verb types - Grammar and mechanics', 40, 8, '2024-01-09 17:37:48', '2024-01-09 17:37:48'),
(560, ' Conjunctions - Grammar and mechanics', 40, 8, '2024-01-09 17:38:02', '2024-01-09 17:38:02'),
(561, ' Subject-verb agreement - Grammar and mechanics', 40, 8, '2024-01-09 17:38:22', '2024-01-09 17:38:22'),
(562, ' Contractions - Grammar and mechanics', 40, 8, '2024-01-09 17:38:41', '2024-01-09 17:38:41'),
(563, ' Verb tense - Grammar and mechanics', 40, 8, '2024-01-09 17:39:01', '2024-01-09 17:39:01'),
(564, ' Commas - Grammar and mechanics', 40, 8, '2024-01-09 17:39:19', '2024-01-09 17:39:19'),
(565, ' Capitalisation - Grammar and mechanics', 40, 8, '2024-01-09 17:39:34', '2024-01-09 17:39:34'),
(566, 'Formatting - Grammar and mechanics', 40, 8, '2024-01-09 17:40:17', '2024-01-09 17:40:17'),
(567, 'Main idea - Reading strategies', 41, 8, '2024-01-09 18:40:35', '2024-01-09 18:40:35'),
(568, ' Point of view - Reading strategies', 41, 8, '2024-01-09 18:40:49', '2024-01-09 18:40:49'),
(569, ' Analysing literature - Reading strategies', 41, 8, '2024-01-09 18:41:09', '2024-01-09 18:41:09'),
(570, 'Theme -  Reading strategies', 41, 8, '2024-01-09 18:41:39', '2024-01-09 18:41:39'),
(571, ' Text structure - Reading strategies', 41, 8, '2024-01-09 18:41:51', '2024-01-09 18:41:51'),
(572, ' Analysing informational texts - Reading strategies', 41, 8, '2024-01-09 18:42:05', '2024-01-09 18:42:05'),
(573, 'Author\'s purpose and tone - Reading strategies', 41, 8, '2024-01-09 18:42:34', '2024-01-09 18:42:34'),
(574, ' Comparing texts - Reading strategies', 41, 8, '2024-01-09 18:42:55', '2024-01-09 18:42:55'),
(575, ' Literary devices - Reading strategies', 41, 8, '2024-01-09 18:43:10', '2024-01-09 18:43:10'),
(576, ' Visual elements - Reading strategies', 41, 8, '2024-01-09 18:43:23', '2024-01-09 18:43:23'),
(577, ' Organising writing - Writing strategies ', 41, 8, '2024-01-09 18:43:47', '2024-01-09 18:43:47'),
(578, ' Developing and supporting arguments - Writing strategies', 41, 8, '2024-01-09 18:44:04', '2024-01-09 18:44:04'),
(579, ' Editing and revising - Writing strategies', 41, 8, '2024-01-09 18:44:22', '2024-01-09 18:44:22'),
(580, ' Research skills - Writing strategies', 41, 8, '2024-01-09 18:44:36', '2024-01-09 18:44:36'),
(581, ' Creative techniques - Writing strategies', 41, 8, '2024-01-09 18:44:51', '2024-01-09 18:44:51'),
(582, ' Prefixes and suffixes - Vocabulary', 41, 8, '2024-01-09 18:45:21', '2024-01-09 18:45:21'),
(583, ' Synonyms and antonyms - Vocabulary', 41, 8, '2024-01-09 18:45:38', '2024-01-09 18:45:38'),
(584, ' Context clues - Vocabulary', 41, 8, '2024-01-09 18:45:50', '2024-01-09 18:45:50'),
(585, ' Homophones - Vocabulary', 41, 8, '2024-01-09 18:46:06', '2024-01-09 18:46:06'),
(586, ' Reference skills - Vocabulary', 41, 8, '2024-01-09 18:46:27', '2024-01-09 18:46:27'),
(587, ' Greek and Latin roots - Vocabulary', 41, 8, '2024-01-09 18:46:44', '2024-01-09 18:46:44'),
(588, ' Shades of meaning - Vocabulary', 41, 8, '2024-01-09 18:46:58', '2024-01-09 18:46:58'),
(589, ' Analogies - Vocabulary', 41, 8, '2024-01-09 18:47:13', '2024-01-09 18:47:13'),
(590, ' Sentences, fragments and run-ons - Grammar and mechanics', 41, 8, '2024-01-09 18:47:40', '2024-01-09 18:47:40'),
(591, ' Pronoun types - Grammar and mechanics', 41, 8, '2024-01-09 18:47:59', '2024-01-09 18:47:59'),
(592, ' Adjectives and adverbs - Grammar and mechanics', 41, 8, '2024-01-09 18:48:17', '2024-01-09 18:48:17'),
(593, ' Nouns - Grammar and mechanics', 41, 8, '2024-01-09 18:48:41', '2024-01-09 18:48:41'),
(594, ' Verb types - Grammar and mechanics', 41, 8, '2024-01-09 18:48:53', '2024-01-09 18:48:53'),
(595, ' Prepositions - Grammar and mechanics', 41, 8, '2024-01-09 18:49:06', '2024-01-09 18:49:06'),
(596, ' Conjunctions - Grammar and mechanics', 41, 8, '2024-01-09 18:49:23', '2024-01-09 18:49:23'),
(597, ' Subject-verb agreement - Grammar and mechanics', 41, 8, '2024-01-09 18:49:35', '2024-01-09 18:49:35'),
(598, ' Pronouns and antecedents - Grammar and mechanics', 41, 8, '2024-01-09 18:49:53', '2024-01-09 18:49:53'),
(599, ' Verb tense - Grammar and mechanics ', 41, 8, '2024-01-09 18:50:12', '2024-01-09 18:50:12'),
(600, ' Contractions - Grammar and mechanics', 41, 8, '2024-01-09 18:50:28', '2024-01-09 18:50:28'),
(601, ' Punctuation - Grammar and mechanics', 41, 8, '2024-01-09 18:50:49', '2024-01-09 18:50:49'),
(602, ' Capitalisation - Grammar and mechanics', 41, 8, '2024-01-09 18:51:04', '2024-01-09 18:51:04'),
(603, ' Formatting - Grammar and mechanics', 41, 8, '2024-01-09 18:51:24', '2024-01-09 18:51:24'),
(604, 'Main idea - Reading strategies', 42, 8, '2024-01-10 15:13:38', '2024-01-10 15:13:38'),
(605, ' Point of view - Reading strategies', 42, 8, '2024-01-10 15:13:50', '2024-01-10 15:13:50'),
(606, ' Analysing literature - Reading strategies', 42, 8, '2024-01-10 15:14:05', '2024-01-10 15:14:05'),
(607, ' Theme - Reading strategies', 42, 8, '2024-01-10 15:14:19', '2024-01-10 15:14:19'),
(608, ' Text structure - Reading strategies', 42, 8, '2024-01-10 15:14:37', '2024-01-10 15:14:37'),
(609, ' Analysing informational texts - Reading strategies', 42, 8, '2024-01-10 15:14:55', '2024-01-10 15:14:55'),
(610, ' Author\'s purpose and tone - Reading strategies', 42, 8, '2024-01-10 15:15:15', '2024-01-10 15:15:15');
INSERT INTO `lessons` (`id`, `title`, `grade_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(611, ' Comparing texts - Reading strategies', 42, 8, '2024-01-10 15:15:33', '2024-01-10 15:15:33'),
(612, ' Literary devices - Reading strategies', 42, 8, '2024-01-10 15:15:59', '2024-01-10 15:15:59'),
(613, ' Visual elements - Reading strategies', 42, 8, '2024-01-10 15:16:15', '2024-01-10 15:16:15'),
(614, 'Organising writing - Writing strategies', 42, 8, '2024-01-10 15:16:59', '2024-01-10 15:16:59'),
(615, ' Developing and supporting arguments - Writing strategies', 42, 8, '2024-01-10 15:17:14', '2024-01-10 15:17:14'),
(616, ' Editing and revising - Writing strategies', 42, 8, '2024-01-10 15:17:28', '2024-01-10 15:17:28'),
(617, ' Research skills - Writing strategies', 42, 8, '2024-01-10 15:17:50', '2024-01-10 15:17:50'),
(618, ' Creative techniques - Writing strategies', 42, 8, '2024-01-10 15:18:03', '2024-01-10 15:18:03'),
(619, 'Prefixes and suffixes - Vocabulary', 42, 8, '2024-01-10 15:18:30', '2024-01-10 15:18:30'),
(620, ' Synonyms and antonyms - Vocabulary', 42, 8, '2024-01-10 15:18:43', '2024-01-10 15:18:43'),
(621, ' Context clues - Vocabulary', 42, 8, '2024-01-10 15:19:02', '2024-01-10 15:19:02'),
(622, ' Homophones - Vocabulary', 42, 8, '2024-01-10 15:19:18', '2024-01-10 15:19:18'),
(623, ' Domain-specific vocabulary - Vocabulary', 42, 8, '2024-01-10 15:19:38', '2024-01-10 15:19:38'),
(624, ' Shades of meaning - Vocabulary', 42, 8, '2024-01-10 15:19:56', '2024-01-10 15:19:56'),
(625, ' Greek and Latin roots - Vocabulary', 42, 8, '2024-01-10 15:20:10', '2024-01-10 15:20:10'),
(626, ' Reference skills - Vocabulary', 42, 8, '2024-01-10 15:20:24', '2024-01-10 15:20:24'),
(627, ' Analogies - Vocabulary', 42, 8, '2024-01-10 15:20:41', '2024-01-10 15:20:41'),
(628, 'Sentences, fragments and run-ons - Grammar and mechanics', 42, 8, '2024-01-10 15:22:42', '2024-01-10 15:22:42'),
(629, ' Pronoun types - Grammar and mechanics', 42, 8, '2024-01-10 15:22:56', '2024-01-10 15:22:56'),
(630, ' Prepositions - Grammar and mechanics', 42, 8, '2024-01-10 15:23:11', '2024-01-10 15:23:11'),
(631, ' Direct and indirect objects - Grammar and mechanics', 42, 8, '2024-01-10 15:23:32', '2024-01-10 15:23:32'),
(632, ' Conjunctions - Grammar and mechanics', 42, 8, '2024-01-10 15:23:45', '2024-01-10 15:23:45'),
(633, ' Misplaced modifiers - Grammar and mechanics', 42, 8, '2024-01-10 15:24:02', '2024-01-10 15:24:02'),
(634, ' Phrases and clauses - Grammar and mechanics', 42, 8, '2024-01-10 15:24:28', '2024-01-10 15:24:28'),
(635, ' Verb types - Grammar and mechanics', 42, 8, '2024-01-10 15:24:46', '2024-01-10 15:24:46'),
(636, ' Restrictive and non-restrictive elements - Grammar and mechanics', 42, 8, '2024-01-10 15:25:11', '2024-01-10 15:25:11'),
(637, ' Subject-verb agreement - Grammar and mechanics', 42, 8, '2024-01-10 15:25:28', '2024-01-10 15:25:28'),
(638, ' Commas - Grammar and mechanics', 42, 8, '2024-01-10 15:25:42', '2024-01-10 15:25:42'),
(639, ' Nouns - Grammar and mechanics', 42, 8, '2024-01-10 15:26:03', '2024-01-10 15:26:03'),
(640, ' Verb tense - Grammar and mechanics', 42, 8, '2024-01-10 15:26:20', '2024-01-10 15:26:20'),
(641, ' Semicolons, colons and commas - Grammar and mechanics', 42, 8, '2024-01-10 15:26:38', '2024-01-10 15:26:38'),
(642, ' Pronouns and antecedents - Grammar and mechanics', 42, 8, '2024-01-10 15:26:57', '2024-01-10 15:26:57'),
(643, ' Dashes, hyphens and ellipses - Grammar and mechanics', 42, 8, '2024-01-10 15:27:18', '2024-01-10 15:27:18'),
(644, ' Adjectives and adverbs - Grammar and mechanics', 42, 8, '2024-01-10 15:27:48', '2024-01-10 15:27:48'),
(645, ' Capitalisation - Grammar and mechanics', 42, 8, '2024-01-10 15:28:16', '2024-01-10 15:28:16'),
(646, ' Formatting - Grammar and mechanics', 42, 8, '2024-01-10 15:28:36', '2024-01-10 15:28:36'),
(647, 'Main idea - Reading strategies', 43, 8, '2024-01-10 15:44:15', '2024-01-10 15:44:15'),
(648, ' Point of view -  Reading strategies', 43, 8, '2024-01-10 15:44:33', '2024-01-10 15:44:33'),
(649, ' Analysing literature - Reading strategies', 43, 8, '2024-01-10 15:44:55', '2024-01-10 15:44:55'),
(650, ' Theme - Reading strategies', 43, 8, '2024-01-10 15:45:12', '2024-01-10 15:45:12'),
(651, ' Text structure - Reading strategies', 43, 8, '2024-01-10 15:45:26', '2024-01-10 15:45:26'),
(652, ' Analysing informational texts - Reading strategies', 43, 8, '2024-01-10 15:45:41', '2024-01-10 15:45:41'),
(653, ' Author\'s purpose and tone - Reading strategies', 43, 8, '2024-01-10 15:45:58', '2024-01-10 15:45:58'),
(654, ' Comparing texts - Reading strategies', 43, 8, '2024-01-10 15:46:14', '2024-01-10 15:46:14'),
(655, ' Literary devices - Reading strategies', 43, 8, '2024-01-10 15:46:29', '2024-01-10 15:46:29'),
(656, ' Visual elements - Reading strategies', 43, 8, '2024-01-10 15:46:47', '2024-01-10 15:46:47'),
(657, 'Organising writing - Writing strategies', 43, 8, '2024-01-10 15:47:18', '2024-01-10 15:47:18'),
(658, ' Creative techniques - Writing strategies', 43, 8, '2024-01-10 15:47:35', '2024-01-10 15:47:35'),
(659, ' Editing and revising - Writing strategies', 43, 8, '2024-01-10 15:47:51', '2024-01-10 15:47:51'),
(660, ' Active and passive voice - Writing strategies', 43, 8, '2024-01-10 15:48:05', '2024-01-10 15:48:05'),
(661, ' Developing and supporting arguments - Writing strategies', 43, 8, '2024-01-10 15:48:23', '2024-01-10 15:48:23'),
(662, ' Research skills - Writing strategies', 43, 8, '2024-01-10 15:48:38', '2024-01-10 15:48:38'),
(663, 'Sentences, fragments and run-ons - Grammar and mechanics', 43, 8, '2024-01-10 15:49:59', '2024-01-10 15:49:59'),
(664, 'Pronoun types - Grammar and mechanics', 43, 8, '2024-01-10 16:02:19', '2024-01-10 16:02:19'),
(665, ' Prepositions - Grammar and mechanics', 43, 8, '2024-01-10 16:02:33', '2024-01-10 16:02:33'),
(666, ' Direct and indirect objects - Grammar and mechanics', 43, 8, '2024-01-10 16:02:50', '2024-01-10 16:02:50'),
(667, ' Conjunctions - Grammar and mechanics', 43, 8, '2024-01-10 16:03:02', '2024-01-10 16:03:02'),
(668, ' Misplaced modifiers - Grammar and mechanics', 43, 8, '2024-01-10 16:03:19', '2024-01-10 16:03:19'),
(669, ' Phrases and clauses - Grammar and mechanics', 43, 8, '2024-01-10 16:03:39', '2024-01-10 16:03:39'),
(670, ' Verb types - Grammar and mechanics', 43, 8, '2024-01-10 16:03:54', '2024-01-10 16:03:54'),
(671, ' Restrictive and non-restrictive elements - Grammar and mechanics', 43, 8, '2024-01-10 16:04:11', '2024-01-10 16:04:11'),
(672, ' Subject-verb agreement - Grammar and mechanics', 43, 8, '2024-01-10 16:04:28', '2024-01-10 16:04:28'),
(673, ' Commas - Grammar and mechanics', 43, 8, '2024-01-10 16:04:41', '2024-01-10 16:04:41'),
(674, ' Nouns - Grammar and mechanics', 43, 8, '2024-01-10 16:05:01', '2024-01-10 16:05:01'),
(675, ' Verb tense - Grammar and mechanics', 43, 8, '2024-01-10 16:05:29', '2024-01-10 16:05:29'),
(676, ' Semicolons, colons and commas - Grammar and mechanics', 43, 8, '2024-01-10 16:05:40', '2024-01-10 16:05:40'),
(677, ' Pronouns and antecedents - Grammar and mechanics', 43, 8, '2024-01-10 16:05:59', '2024-01-10 16:05:59'),
(678, ' Dashes, hyphens and ellipses - Grammar and mechanics', 43, 8, '2024-01-10 16:06:13', '2024-01-10 16:06:13'),
(679, ' Adjectives and adverbs - Grammar and mechanics', 43, 8, '2024-01-10 16:06:31', '2024-01-10 16:06:31'),
(680, ' Capitalisation - Grammar and mechanics', 43, 8, '2024-01-10 16:06:45', '2024-01-10 16:06:45'),
(681, ' Formatting - Grammar and mechanics', 43, 8, '2024-01-10 16:06:59', '2024-01-10 16:06:59'),
(682, 'Main idea - Reading strategies', 44, 8, '2024-01-10 16:07:52', '2024-01-10 16:07:52'),
(683, ' Literary devices - Reading strategies', 44, 8, '2024-01-10 16:08:10', '2024-01-10 16:08:10'),
(684, 'Analysing informational texts - Reading strategies', 44, 8, '2024-01-10 16:08:36', '2024-01-10 16:08:36'),
(685, ' Audience, purpose and tone - Reading strategies', 44, 8, '2024-01-10 16:08:55', '2024-01-10 16:08:55'),
(686, 'Analysing literature - Reading strategies', 44, 8, '2024-01-10 16:09:17', '2024-01-10 16:09:17'),
(687, ' Organising writing - Writing strategies', 44, 8, '2024-01-10 16:09:36', '2024-01-10 16:09:36'),
(688, ' Persuasive strategies - Writing strategies', 44, 8, '2024-01-10 16:09:57', '2024-01-10 16:09:57'),
(689, ' Active and passive voice - Writing strategies', 44, 8, '2024-01-10 16:10:08', '2024-01-10 16:10:08'),
(690, ' Topic sentences - Writing strategies', 44, 8, '2024-01-10 16:10:29', '2024-01-10 16:10:29'),
(691, ' Editing and revising - Writing strategies', 44, 8, '2024-01-10 16:10:42', '2024-01-10 16:10:42'),
(692, ' Creative techniques - Writing strategies', 44, 8, '2024-01-10 16:10:59', '2024-01-10 16:10:59'),
(693, ' Developing and supporting arguments - Writing strategies', 44, 8, '2024-01-10 16:11:19', '2024-01-10 16:11:19'),
(694, ' Writing clearly and concisely - Writing strategies', 44, 8, '2024-01-10 16:11:33', '2024-01-10 16:11:33'),
(695, ' Research skills - Writing strategies', 44, 8, '2024-01-10 16:11:47', '2024-01-10 16:11:47'),
(696, 'Prefixes and suffixes - Vocabulary', 44, 8, '2024-01-10 16:12:28', '2024-01-10 16:12:28'),
(697, 'Homophones - Vocabulary', 44, 8, '2024-01-10 16:12:45', '2024-01-10 16:12:45'),
(698, ' Analogies - Vocabulary', 44, 8, '2024-01-10 16:13:01', '2024-01-10 16:13:01'),
(699, ' Foreign words and expressions - Vocabulary', 44, 8, '2024-01-10 16:13:19', '2024-01-10 16:13:19'),
(700, ' Context clues - Vocabulary', 44, 8, '2024-01-10 16:13:33', '2024-01-10 16:13:33'),
(701, ' Word usage and nuance - Vocabulary', 44, 8, '2024-01-10 16:13:48', '2024-01-10 16:13:48'),
(702, ' Reference skills - Vocabulary', 44, 8, '2024-01-10 16:14:04', '2024-01-10 16:14:04'),
(703, ' Greek and Latin roots - Vocabulary', 44, 8, '2024-01-10 16:14:24', '2024-01-10 16:14:24'),
(704, ' Sentences, fragments and run-ons - Grammar and mechanics', 44, 8, '2024-01-10 16:14:50', '2024-01-10 16:14:50'),
(705, ' Verb types - Grammar and mechanics', 44, 8, '2024-01-10 16:15:06', '2024-01-10 16:15:06'),
(706, ' Restrictive and non-restrictive elements - Grammar and mechanics', 44, 8, '2024-01-10 16:15:30', '2024-01-10 16:15:30'),
(707, ' Commas - Grammar and mechanics', 44, 8, '2024-01-10 16:15:49', '2024-01-10 16:15:49'),
(708, ' Phrases and clauses - Grammar and mechanics', 44, 8, '2024-01-10 16:16:04', '2024-01-10 16:16:04'),
(709, ' Subject-verb agreement - Grammar and mechanics', 44, 8, '2024-01-10 16:16:18', '2024-01-10 16:16:18'),
(710, ' Semicolons, colons and commas - Grammar and mechanics', 44, 8, '2024-01-10 16:16:38', '2024-01-10 16:16:38'),
(711, ' Verb tense - Grammar and mechanics', 44, 8, '2024-01-10 16:16:57', '2024-01-10 16:16:57'),
(712, 'Nouns - Grammar and mechanics', 44, 8, '2024-01-10 16:18:11', '2024-01-10 16:18:11'),
(713, ' Dashes, hyphens and ellipses - Grammar and mechanics', 44, 8, '2024-01-10 16:18:29', '2024-01-10 16:18:29'),
(714, ' Pronouns - Grammar and mechanics', 44, 8, '2024-01-10 16:18:43', '2024-01-10 16:18:43'),
(715, ' Adjectives and adverbs - Grammar and mechanics', 44, 8, '2024-01-10 16:18:58', '2024-01-10 16:18:58'),
(716, ' Apostrophes - Grammar and mechanics', 44, 8, '2024-01-10 16:19:14', '2024-01-10 16:19:14'),
(717, ' Capitalisation - Grammar and mechanics', 44, 8, '2024-01-10 16:19:34', '2024-01-10 16:19:34'),
(718, ' Conjunctions - Grammar and mechanics', 44, 8, '2024-01-10 16:19:49', '2024-01-10 16:19:49'),
(719, ' Formatting - Grammar and mechanics', 44, 8, '2024-01-10 16:20:08', '2024-01-10 16:20:08'),
(720, ' Misplaced modifiers - Grammar and mechanics', 44, 8, '2024-01-10 16:20:22', '2024-01-10 16:20:22'),
(721, 'Main idea - Reading strategies', 45, 8, '2024-01-10 16:24:47', '2024-01-10 16:24:47'),
(722, ' Literary devices - Reading strategies', 45, 8, '2024-01-10 16:25:00', '2024-01-10 16:25:00'),
(723, ' Analysing informational texts - Reading strategies', 45, 8, '2024-01-10 16:25:15', '2024-01-10 16:25:15'),
(724, ' Audience, purpose and tone - Reading strategies', 45, 8, '2024-01-10 16:25:31', '2024-01-10 16:25:31'),
(725, ' Analysing literature - Reading strategies', 45, 8, '2024-01-10 16:25:48', '2024-01-10 16:25:48'),
(726, 'Organising writing - Writing strategies', 45, 8, '2024-01-10 16:26:12', '2024-01-10 16:26:12'),
(727, ' Persuasive strategies - Writing strategies', 45, 8, '2024-01-10 16:26:26', '2024-01-10 16:26:26'),
(728, ' Active and passive voice - Writing strategies', 45, 8, '2024-01-10 16:26:57', '2024-01-10 16:26:57'),
(729, ' Topic sentences - Writing strategies', 45, 8, '2024-01-10 16:27:19', '2024-01-10 16:27:19'),
(730, ' Editing and revising - Writing strategies', 45, 8, '2024-01-10 16:27:34', '2024-01-10 16:27:34'),
(731, ' Creative techniques - Writing strategies', 45, 8, '2024-01-10 16:27:48', '2024-01-10 16:27:48'),
(732, ' Developing and supporting arguments - Writing strategies', 45, 8, '2024-01-10 16:28:04', '2024-01-10 16:28:04'),
(733, ' Writing clearly and concisely - Writing strategies', 45, 8, '2024-01-10 16:28:18', '2024-01-10 16:28:18'),
(734, ' Research skills - Writing strategies', 45, 8, '2024-01-10 16:28:37', '2024-01-10 16:28:37'),
(735, 'Prefixes and suffixes - Vocabulary', 45, 8, '2024-01-10 16:29:31', '2024-01-10 16:29:31'),
(736, ' Homophones - Vocabulary', 45, 8, '2024-01-10 16:29:48', '2024-01-10 16:29:48'),
(737, ' Analogies - Vocabulary', 45, 8, '2024-01-10 16:30:03', '2024-01-10 16:30:03'),
(738, ' Foreign words and expressions - Vocabulary', 45, 8, '2024-01-10 16:30:17', '2024-01-10 16:30:17'),
(739, ' Context clues - Vocabulary', 45, 8, '2024-01-10 16:30:30', '2024-01-10 16:30:30'),
(740, ' Word usage and nuance - Vocabulary', 45, 8, '2024-01-10 16:30:51', '2024-01-10 16:30:51'),
(741, ' Reference skills - Vocabulary', 45, 8, '2024-01-10 16:31:06', '2024-01-10 16:31:06'),
(742, ' Greek and Latin roots - Vocabulary', 45, 8, '2024-01-10 16:31:20', '2024-01-10 16:31:20'),
(743, ' Sentences, fragments and run-ons - Grammar and mechanics', 45, 8, '2024-01-10 16:32:07', '2024-01-10 16:32:07'),
(744, ' Verb types - Grammar and mechanics', 45, 8, '2024-01-10 16:32:24', '2024-01-10 16:32:24'),
(745, 'Misplaced modifiers - Grammar and mechanics', 45, 8, '2024-01-10 16:33:36', '2024-01-10 16:33:36'),
(746, ' Restrictive and non-restrictive elements - Grammar and mechanics', 45, 8, '2024-01-10 16:34:01', '2024-01-10 16:34:01'),
(747, ' Phrases and clauses - Grammar and mechanics', 45, 8, '2024-01-10 16:34:20', '2024-01-10 16:34:20'),
(748, ' Subject-verb agreement - Grammar and mechanics', 45, 8, '2024-01-10 16:34:40', '2024-01-10 16:34:40'),
(749, ' Commas - Grammar and mechanics', 45, 8, '2024-01-10 16:34:56', '2024-01-10 16:34:56'),
(750, ' Verb tense - Grammar and mechanics', 45, 8, '2024-01-10 16:35:17', '2024-01-10 16:35:17'),
(751, ' Nouns - Grammar and mechanics', 45, 8, '2024-01-10 16:35:34', '2024-01-10 16:35:34'),
(752, ' Semicolons, colons and commas - Grammar and mechanics', 45, 8, '2024-01-10 16:35:58', '2024-01-10 16:35:58'),
(753, ' Pronouns - Grammar and mechanics', 45, 8, '2024-01-10 16:36:14', '2024-01-10 16:36:14'),
(754, ' Adjectives and adverbs - Grammar and mechanics', 45, 8, '2024-01-10 16:36:30', '2024-01-10 16:36:30'),
(755, ' Dashes, hyphens and ellipses - Grammar and mechanics', 45, 8, '2024-01-10 16:36:50', '2024-01-10 16:36:50'),
(756, ' Apostrophes - Grammar and mechanics', 45, 8, '2024-01-10 16:37:05', '2024-01-10 16:37:05'),
(757, ' Conjunctions - Grammar and mechanics', 45, 8, '2024-01-10 16:37:18', '2024-01-10 16:37:18'),
(758, ' Capitalisation - Grammar and mechanics', 45, 8, '2024-01-10 16:37:44', '2024-01-10 16:37:44'),
(759, 'Main idea - Reading strategies', 46, 8, '2024-01-10 16:38:49', '2024-01-10 16:38:49'),
(760, ' Literary devices - Reading strategies', 46, 8, '2024-01-10 16:39:24', '2024-01-10 16:39:24'),
(761, ' Analysing informational texts - Reading strategies', 46, 8, '2024-01-10 16:39:38', '2024-01-10 16:39:38'),
(762, ' Audience, purpose and tone - Reading strategies', 46, 8, '2024-01-10 16:39:54', '2024-01-10 16:39:54'),
(763, ' Analysing literature - Reading strategies', 46, 8, '2024-01-10 16:40:07', '2024-01-10 16:40:07'),
(764, 'Organising writing - Writing strategies', 46, 8, '2024-01-10 16:40:37', '2024-01-10 16:40:37'),
(765, ' Persuasive strategies - Writing strategies', 46, 8, '2024-01-10 16:40:50', '2024-01-10 16:40:50'),
(766, ' Editing and revising - Writing strategies', 46, 8, '2024-01-10 16:41:05', '2024-01-10 16:41:05'),
(767, ' Topic sentences - Writing strategies', 46, 8, '2024-01-10 16:41:20', '2024-01-10 16:41:20'),
(768, ' Writing clearly and concisely - Writing strategies', 46, 8, '2024-01-10 16:41:33', '2024-01-10 16:41:33'),
(769, ' Developing and supporting arguments - Writing strategies', 46, 8, '2024-01-10 16:41:47', '2024-01-10 16:41:47'),
(770, ' Research skills - Writing strategies', 46, 8, '2024-01-10 16:42:04', '2024-01-10 16:42:04'),
(771, ' Prefixes and suffixes - Vocabulary', 46, 8, '2024-01-10 16:42:31', '2024-01-10 16:42:31'),
(772, ' Homophones - Vocabulary', 46, 8, '2024-01-10 16:42:49', '2024-01-10 16:42:49'),
(773, ' Analogies - Vocabulary', 46, 8, '2024-01-10 16:43:02', '2024-01-10 16:43:02'),
(774, ' Foreign words and expressions - Vocabulary', 46, 8, '2024-01-10 16:43:17', '2024-01-10 16:43:17'),
(775, ' Context clues - Vocabulary', 46, 8, '2024-01-10 16:43:31', '2024-01-10 16:43:31'),
(776, ' Word usage and nuance - Vocabulary', 46, 8, '2024-01-10 16:43:47', '2024-01-10 16:43:47'),
(777, ' Sentences, fragments and run-ons - Grammar and mechanics', 46, 8, '2024-01-10 16:44:09', '2024-01-10 16:44:09'),
(778, ' Verb types - Grammar and mechanics', 46, 8, '2024-01-10 16:44:22', '2024-01-10 16:44:22'),
(779, ' Restrictive and non-restrictive elements - Grammar and mechanics', 46, 8, '2024-01-10 16:44:39', '2024-01-10 16:44:39'),
(780, ' Commas - Grammar and mechanics', 46, 8, '2024-01-10 16:44:54', '2024-01-10 16:44:54'),
(781, ' Phrases and clauses - Grammar and mechanics', 46, 8, '2024-01-10 16:45:10', '2024-01-10 16:45:10'),
(782, ' Subject-verb agreement - Grammar and mechanics', 46, 8, '2024-01-10 16:45:23', '2024-01-10 16:45:23'),
(783, ' Semicolons, colons and commas - Grammar and mechanics', 46, 8, '2024-01-10 16:45:44', '2024-01-10 16:45:44'),
(784, ' Pronouns - Grammar and mechanics', 46, 8, '2024-01-10 16:46:01', '2024-01-10 16:46:01'),
(785, ' Verb tense - Grammar and mechanics', 46, 8, '2024-01-10 16:46:16', '2024-01-10 16:46:16'),
(786, ' Dashes, hyphens and ellipses - Grammar and mechanics', 46, 8, '2024-01-10 16:46:32', '2024-01-10 16:46:32'),
(787, ' Adjectives and adverbs - Grammar and mechanics', 46, 8, '2024-01-10 16:46:46', '2024-01-10 16:46:46'),
(788, ' Apostrophes - Grammar and mechanics', 46, 8, '2024-01-10 16:47:01', '2024-01-10 16:47:01'),
(789, ' Misplaced modifiers - Grammar and mechanics', 46, 8, '2024-01-10 16:47:18', '2024-01-10 16:47:18'),
(790, ' Capitalisation - Grammar and mechanics', 46, 8, '2024-01-10 16:47:32', '2024-01-10 16:47:32'),
(791, 'Main idea - Reading strategies', 47, 8, '2024-01-10 17:25:39', '2024-01-10 17:25:39'),
(792, ' Literary devices - Reading strategies', 47, 8, '2024-01-10 17:25:59', '2024-01-10 17:25:59'),
(793, ' Analysing informational texts - Reading strategies', 47, 8, '2024-01-10 17:26:16', '2024-01-10 17:26:16'),
(794, ' Audience, purpose and tone - Reading strategies', 47, 8, '2024-01-10 17:26:36', '2024-01-10 17:26:36'),
(795, ' Analysing literature - Reading strategies', 47, 8, '2024-01-10 17:26:52', '2024-01-10 17:26:52'),
(796, 'Organising writing - Writing strategies', 47, 8, '2024-01-10 17:27:36', '2024-01-10 17:27:36'),
(797, ' Persuasive strategies - Writing strategies', 47, 8, '2024-01-10 17:27:55', '2024-01-10 17:27:55'),
(798, ' Editing and revising - Writing strategies', 47, 8, '2024-01-10 17:28:11', '2024-01-10 17:28:11'),
(799, ' Topic sentences - Writing strategies', 47, 8, '2024-01-10 17:28:28', '2024-01-10 17:28:28'),
(800, ' Writing clearly and concisely - Writing strategies', 47, 8, '2024-01-10 17:28:45', '2024-01-10 17:28:45'),
(801, ' Developing and supporting arguments - Writing strategies', 47, 8, '2024-01-10 17:29:01', '2024-01-10 17:29:01'),
(802, ' Research skills - Writing strategies', 47, 8, '2024-01-10 17:29:19', '2024-01-10 17:29:19'),
(803, ' Prefixes and suffixes - Vocabulary', 47, 8, '2024-01-10 17:30:06', '2024-01-10 17:30:06'),
(804, ' Homophones - Vocabulary', 47, 8, '2024-01-10 17:30:19', '2024-01-10 17:30:19'),
(805, ' Analogies - Vocabulary', 47, 8, '2024-01-10 17:30:33', '2024-01-10 17:30:33'),
(806, ' Foreign words and expressions - Vocabulary', 47, 8, '2024-01-10 17:30:49', '2024-01-10 17:30:49'),
(807, ' Context clues - Vocabulary', 47, 8, '2024-01-10 17:31:03', '2024-01-10 17:31:03'),
(808, ' Word usage and nuance - Vocabulary', 47, 8, '2024-01-10 17:31:37', '2024-01-10 17:31:37'),
(809, ' Sentences, fragments and run-ons - Grammar and mechanics', 47, 8, '2024-01-10 17:32:00', '2024-01-10 17:32:00'),
(810, ' Verb types - Grammar and mechanics', 47, 8, '2024-01-10 17:32:13', '2024-01-10 17:32:13'),
(811, ' Restrictive and non-restrictive elements - Grammar and mechanics', 47, 8, '2024-01-10 17:32:27', '2024-01-10 17:32:27'),
(812, ' Commas - Grammar and mechanics', 47, 8, '2024-01-10 17:32:51', '2024-01-10 17:32:51'),
(813, ' Phrases and clauses - Grammar and mechanics', 47, 8, '2024-01-10 17:33:08', '2024-01-10 17:33:08'),
(814, ' Subject-verb agreement - Grammar and mechanics', 47, 8, '2024-01-10 17:33:24', '2024-01-10 17:33:24'),
(815, ' Semicolons, colons and commas - Grammar and mechanics', 47, 8, '2024-01-10 17:33:40', '2024-01-10 17:33:40'),
(816, ' Pronouns - Grammar and mechanics', 47, 8, '2024-01-10 17:34:00', '2024-01-10 17:34:00'),
(817, ' Verb tense - Grammar and mechanics', 47, 8, '2024-01-10 17:34:17', '2024-01-10 17:34:17'),
(818, ' Adjectives and adverbs - Grammar and mechanics', 47, 8, '2024-01-10 17:34:33', '2024-01-10 17:34:33'),
(819, ' Dashes, hyphens and ellipses -  Grammar and mechanics', 47, 8, '2024-01-10 17:34:52', '2024-01-10 17:34:52'),
(820, ' Apostrophes - Grammar and mechanics', 47, 8, '2024-01-10 17:35:10', '2024-01-10 17:35:10'),
(821, ' Misplaced modifiers - Grammar and mechanics', 47, 8, '2024-01-10 17:35:28', '2024-01-10 17:35:28'),
(822, ' Capitalisation - Grammar and mechanics', 47, 8, '2024-01-10 17:35:43', '2024-01-10 17:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `country`, `currency`, `code`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'Albania', 'Leke', 'ALL', 'Lek', NULL, NULL),
(2, 'America', 'Dollars', 'USD', '$', NULL, NULL),
(3, 'Afghanistan', 'Afghanis', 'AFN', '؋', NULL, NULL),
(4, 'Argentina', 'Pesos', 'ARS', '$', NULL, NULL),
(5, 'Aruba', 'Guilders', 'AWG', 'ƒ', NULL, NULL),
(6, 'Australia', 'Dollars', 'AUD', '$', NULL, NULL),
(7, 'Azerbaijan', 'New Manats', 'AZN', 'ман', NULL, NULL),
(8, 'Bahamas', 'Dollars', 'BSD', '$', NULL, NULL),
(9, 'Barbados', 'Dollars', 'BBD', '$', NULL, NULL),
(10, 'Belarus', 'Rubles', 'BYR', 'p.', NULL, NULL),
(11, 'Belgium', 'Euro', 'EUR', '€', NULL, NULL),
(12, 'Beliz', 'Dollars', 'BZD', 'BZ$', NULL, NULL),
(13, 'Bermuda', 'Dollars', 'BMD', '$', NULL, NULL),
(14, 'Bolivia', 'Bolivianos', 'BOB', '$b', NULL, NULL),
(15, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', NULL, NULL),
(16, 'Botswana', 'Pula', 'BWP', 'P', NULL, NULL),
(17, 'Bulgaria', 'Leva', 'BGN', 'лв', NULL, NULL),
(18, 'Brazil', 'Reais', 'BRL', 'R$', NULL, NULL),
(20, 'Brunei Darussalam', 'Dollars', 'BND', '$', NULL, NULL),
(21, 'Cambodia', 'Riels', 'KHR', '៛', NULL, NULL),
(22, 'Canada', 'Dollars', 'CAD', '$', NULL, NULL),
(23, 'Cayman Islands', 'Dollars', 'KYD', '$', NULL, NULL),
(24, 'Chile', 'Pesos', 'CLP', '$', NULL, NULL),
(25, 'China', 'Yuan Renminbi', 'CNY', '¥', NULL, NULL),
(26, 'Colombia', 'Pesos', 'COP', '$', NULL, NULL),
(27, 'Costa Rica', 'Colón', 'CRC', '₡', NULL, NULL),
(28, 'Croatia', 'Kuna', 'HRK', 'kn', NULL, NULL),
(29, 'Cuba', 'Pesos', 'CUP', '₱', NULL, NULL),
(30, 'Cyprus', 'Euro', 'EUR', '€', NULL, NULL),
(31, 'Czech Republic', 'Koruny', 'CZK', 'Kč', NULL, NULL),
(32, 'Denmark', 'Kroner', 'DKK', 'kr', NULL, NULL),
(33, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$', NULL, NULL),
(34, 'East Caribbean', 'Dollars', 'XCD', '$', NULL, NULL),
(35, 'Egypt', 'Pounds', 'EGP', '£', NULL, NULL),
(36, 'El Salvador', 'Colones', 'SVC', '$', NULL, NULL),
(38, 'Euro', 'Euro', 'EUR', '€', NULL, NULL),
(39, 'Falkland Islands', 'Pounds', 'FKP', '£', NULL, NULL),
(40, 'Fiji', 'Dollars', 'FJD', '$', NULL, NULL),
(41, 'France', 'Euro', 'EUR', '€', NULL, NULL),
(42, 'Ghana', 'Cedis', 'GHC', '¢', NULL, NULL),
(43, 'Gibraltar', 'Pounds', 'GIP', '£', NULL, NULL),
(44, 'Greece', 'Euro', 'EUR', '€', NULL, NULL),
(45, 'Guatemala', 'Quetzales', 'GTQ', 'Q', NULL, NULL),
(46, 'Guernsey', 'Pounds', 'GGP', '£', NULL, NULL),
(47, 'Guyana', 'Dollars', 'GYD', '$', NULL, NULL),
(48, 'Holland (Netherlands)', 'Euro', 'EUR', '€', NULL, NULL),
(49, 'Honduras', 'Lempiras', 'HNL', 'L', NULL, NULL),
(50, 'Hong Kong', 'Dollars', 'HKD', '$', NULL, NULL),
(51, 'Hungary', 'Forint', 'HUF', 'Ft', NULL, NULL),
(52, 'Iceland', 'Kronur', 'ISK', 'kr', NULL, NULL),
(53, 'India', 'Rupees', 'INR', 'Rp', NULL, NULL),
(54, 'Indonesia', 'Rupiahs', 'IDR', 'Rp', NULL, NULL),
(55, 'Iran', 'Rials', 'IRR', '﷼', NULL, NULL),
(56, 'Ireland', 'Euro', 'EUR', '€', NULL, NULL),
(57, 'Isle of Man', 'Pounds', 'IMP', '£', NULL, NULL),
(58, 'Israel', 'New Shekels', 'ILS', '₪', NULL, NULL),
(59, 'Italy', 'Euro', 'EUR', '€', NULL, NULL),
(60, 'Jamaica', 'Dollars', 'JMD', 'J$', NULL, NULL),
(61, 'Japan', 'Yen', 'JPY', '¥', NULL, NULL),
(62, 'Jersey', 'Pounds', 'JEP', '£', NULL, NULL),
(63, 'Kazakhstan', 'Tenge', 'KZT', 'лв', NULL, NULL),
(64, 'Korea (North)', 'Won', 'KPW', '₩', NULL, NULL),
(65, 'Korea (South)', 'Won', 'KRW', '₩', NULL, NULL),
(66, 'Kyrgyzstan', 'Soms', 'KGS', 'лв', NULL, NULL),
(67, 'Laos', 'Kips', 'LAK', '₭', NULL, NULL),
(68, 'Latvia', 'Lati', 'LVL', 'Ls', NULL, NULL),
(69, 'Lebanon', 'Pounds', 'LBP', '£', NULL, NULL),
(70, 'Liberia', 'Dollars', 'LRD', '$', NULL, NULL),
(71, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', NULL, NULL),
(72, 'Lithuania', 'Litai', 'LTL', 'Lt', NULL, NULL),
(73, 'Luxembourg', 'Euro', 'EUR', '€', NULL, NULL),
(74, 'Macedonia', 'Denars', 'MKD', 'ден', NULL, NULL),
(75, 'Malaysia', 'Ringgits', 'MYR', 'RM', NULL, NULL),
(76, 'Malta', 'Euro', 'EUR', '€', NULL, NULL),
(77, 'Mauritius', 'Rupees', 'MUR', '₨', NULL, NULL),
(78, 'Mexico', 'Pesos', 'MXN', '$', NULL, NULL),
(79, 'Mongolia', 'Tugriks', 'MNT', '₮', NULL, NULL),
(80, 'Mozambique', 'Meticais', 'MZN', 'MT', NULL, NULL),
(81, 'Namibia', 'Dollars', 'NAD', '$', NULL, NULL),
(82, 'Nepal', 'Rupees', 'NPR', '₨', NULL, NULL),
(83, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', NULL, NULL),
(84, 'Netherlands', 'Euro', 'EUR', '€', NULL, NULL),
(85, 'New Zealand', 'Dollars', 'NZD', '$', NULL, NULL),
(86, 'Nicaragua', 'Cordobas', 'NIO', 'C$', NULL, NULL),
(87, 'Nigeria', 'Nairas', 'NGN', '₦', NULL, NULL),
(88, 'North Korea', 'Won', 'KPW', '₩', NULL, NULL),
(89, 'Norway', 'Krone', 'NOK', 'kr', NULL, NULL),
(90, 'Oman', 'Rials', 'OMR', '﷼', NULL, NULL),
(91, 'Pakistan', 'Rupees', 'PKR', '₨', NULL, NULL),
(92, 'Panama', 'Balboa', 'PAB', 'B/.', NULL, NULL),
(93, 'Paraguay', 'Guarani', 'PYG', 'Gs', NULL, NULL),
(94, 'Peru', 'Nuevos Soles', 'PEN', 'S/.', NULL, NULL),
(95, 'Philippines', 'Pesos', 'PHP', 'Php', NULL, NULL),
(96, 'Poland', 'Zlotych', 'PLN', 'zł', NULL, NULL),
(97, 'Qatar', 'Rials', 'QAR', '﷼', NULL, NULL),
(98, 'Romania', 'New Lei', 'RON', 'lei', NULL, NULL),
(99, 'Russia', 'Rubles', 'RUB', 'руб', NULL, NULL),
(100, 'Saint Helena', 'Pounds', 'SHP', '£', NULL, NULL),
(101, 'Saudi Arabia', 'Riyals', 'SAR', '﷼', NULL, NULL),
(102, 'Serbia', 'Dinars', 'RSD', 'Дин.', NULL, NULL),
(103, 'Seychelles', 'Rupees', 'SCR', '₨', NULL, NULL),
(104, 'Singapore', 'Dollars', 'SGD', '$', NULL, NULL),
(105, 'Slovenia', 'Euro', 'EUR', '€', NULL, NULL),
(106, 'Solomon Islands', 'Dollars', 'SBD', '$', NULL, NULL),
(107, 'Somalia', 'Shillings', 'SOS', 'S', NULL, NULL),
(108, 'South Africa', 'Rand', 'ZAR', 'R', NULL, NULL),
(109, 'South Korea', 'Won', 'KRW', '₩', NULL, NULL),
(110, 'Spain', 'Euro', 'EUR', '€', NULL, NULL),
(111, 'Sri Lanka', 'Rupees', 'LKR', '₨', NULL, NULL),
(112, 'Sweden', 'Kronor', 'SEK', 'kr', NULL, NULL),
(113, 'Switzerland', 'Francs', 'CHF', 'CHF', NULL, NULL),
(114, 'Suriname', 'Dollars', 'SRD', '$', NULL, NULL),
(115, 'Syria', 'Pounds', 'SYP', '£', NULL, NULL),
(116, 'Taiwan', 'New Dollars', 'TWD', 'NT$', NULL, NULL),
(117, 'Thailand', 'Baht', 'THB', '฿', NULL, NULL),
(118, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', NULL, NULL),
(119, 'Turkey', 'Lira', 'TRY', 'TL', NULL, NULL),
(120, 'Turkey', 'Liras', 'TRL', '£', NULL, NULL),
(121, 'Tuvalu', 'Dollars', 'TVD', '$', NULL, NULL),
(122, 'Ukraine', 'Hryvnia', 'UAH', '₴', NULL, NULL),
(123, 'United Kingdom', 'Pounds', 'GBP', '£', NULL, NULL),
(124, 'United States of America', 'Dollars', 'USD', '$', NULL, NULL),
(125, 'Uruguay', 'Pesos', 'UYU', '$U', NULL, NULL),
(126, 'Uzbekistan', 'Sums', 'UZS', 'лв', NULL, NULL),
(127, 'Vatican City', 'Euro', 'EUR', '€', NULL, NULL),
(128, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', NULL, NULL),
(129, 'Vietnam', 'Dong', 'VND', '₫', NULL, NULL),
(130, 'Yemen', 'Rials', 'YER', '﷼', NULL, NULL),
(131, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', NULL, NULL),
(132, 'India', 'Rupees', 'INR', '₹', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_07_07_055656_create_countries_table', 1),
(6, '2020_07_07_055725_create_cities_table', 1),
(7, '2020_07_07_055746_create_timezones_table', 1),
(8, '2021_10_19_071730_create_states_table', 1),
(9, '2021_10_23_082414_create_currencies_table', 1),
(10, '2022_01_22_034939_create_languages_table', 1),
(11, '2022_06_23_104735_create_roles_table', 1),
(12, '2022_06_23_104927_create_permissions_table', 1),
(13, '2022_06_23_105212_create_admin_roles_table', 1),
(14, '2022_06_23_105238_create_assign_permissions_table', 1),
(15, '2022_06_25_102333_create_teachers_table', 1),
(16, '2022_06_25_102624_create_subjects_table', 1),
(17, '2022_06_25_102650_create_lessons_table', 1),
(18, '2022_06_25_102724_create_grades_table', 1),
(19, '2022_06_27_123941_create_students_table', 1),
(20, '2022_06_28_115317_create_forums_table', 1),
(21, '2022_06_29_074151_create_asign_subjects_table', 1),
(22, '2022_06_30_073331_create_generals_table', 1),
(138, '2014_10_12_000000_create_users_table', 2),
(139, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(140, '2019_08_19_000000_create_failed_jobs_table', 2),
(141, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(142, '2023_11_30_125711_create_subjects_table', 2),
(143, '2023_11_30_125740_create_grades_table', 2),
(144, '2023_11_30_125750_create_lessions_table', 2),
(145, '2023_11_30_125756_create_lessons_table', 2),
(146, '2023_11_30_125804_create_students_table', 2),
(147, '2023_11_30_125813_create_enrollments_table', 2),
(148, '2023_11_30_125841_create_fees_table', 2),
(149, '2023_11_30_130007_create_recordings_table', 2),
(150, '2023_11_30_130740_create_meetings_table', 2),
(151, '2023_12_06_081057_create_facilities_table', 2),
(152, '2023_12_06_081531_create_assignmentfacilities_table', 2),
(153, '2023_12_06_081612_create_packages_table', 2),
(154, '2023_12_07_081415_create_cpackages_table', 2),
(155, '2023_12_08_111310_create_timetables_table', 2),
(156, '2023_12_08_111316_create_days_table', 2),
(157, '2023_12_08_134033_create_trainersubjects_table', 2),
(158, '2023_12_11_101347_create_subjecttrainers_table', 2),
(159, '2023_12_11_102301_create_trainers_table', 2),
(160, '2023_12_11_132548_create_timeschedules_table', 2),
(161, '2023_12_11_134249_create_trainerschedules_table', 2),
(162, '2023_12_26_123025_create_enrollschedules_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `cpackage_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `regularprice` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `country_id`, `cpackage_id`, `title`, `regularprice`, `discount`, `price`, `options`, `created_at`, `updated_at`) VALUES
(1, 13, 1, '2 DAYS / WEEK', '60', '50', '30', '02 Classes In A Week <br />\r\nRecording Backup With LMS <br />\r\nHomework/Assignments <br />\r\nReschedule Lessons <br />\r\n08 Classes In A Month', '2024-01-01 07:25:46', '2024-01-01 07:25:46'),
(2, 13, 1, '3 DAYS / WEEK', '90', '50', '45', '02 Classes In A Week <br />\r\nRecording Backup With LMS <br />\r\nHomework/Assignments <br />\r\nReschedule Lessons <br />\r\n08 Classes In A Month', '2024-01-01 08:07:57', '2024-01-01 08:07:57'),
(3, 13, 1, '5 DAYS / WEEK', '120', '50', '60', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:08:41', '2024-01-01 08:08:41'),
(4, 13, 2, '2 DAYS / WEEK', '80', '50', '40', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:19:49', '2024-01-01 08:19:49'),
(5, 13, 2, '3 DAYS / WEEK', '110', '50', '55', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:21:08', '2024-01-01 08:21:08'),
(6, 13, 2, '5 DAYS / WEEK', '140', '50', '70', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:22:11', '2024-01-01 08:22:11'),
(7, 13, 3, '2 DAYS / WEEK', '100', '50', '50', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:23:18', '2024-01-01 08:23:18'),
(8, 13, 3, '3 DAYS / WEEK', '130', '50', '65', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:24:10', '2024-01-01 08:24:10'),
(9, 13, 3, '5 DAYS / WEEK', '160', '50', '80', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:25:11', '2024-01-01 08:25:11'),
(10, 13, 4, '2 DAYS / WEEK', '120', '50', '60', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:26:17', '2024-01-01 08:26:17'),
(11, 13, 4, '3 DAYS / WEEK', '150', '50', '75', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:27:19', '2024-01-01 08:27:19'),
(12, 13, 4, '5 DAYS / WEEK', '180', '50', '90', '02 Classes In A Week <br />\nRecording Backup With LMS <br />\nHomework/Assignments <br />\nReschedule Lessons <br />\n08 Classes In A Month', '2024-01-01 08:28:04', '2024-01-01 08:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `route_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recordings`
--

CREATE TABLE `recordings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', '2023-03-21 15:54:58', '2023-03-21 15:54:58'),
(2, NULL, 'Manager', '2023-03-21 15:55:07', '2023-03-21 15:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(191) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `name`, `email`, `whatsapp`, `gender`, `country_id`, `created_at`, `updated_at`) VALUES
(42, 37, 'Muhammad ', 'asad.mu@gmail.com', '0338498492', 'male', 13, '2023-12-30 07:11:08', '2023-12-30 07:11:09'),
(43, 38, 'Tehmina Asad', 'tehmina.asad001@gmail.com', '03094612421', 'male', 13, '2023-12-31 05:00:24', '2023-12-31 05:00:25'),
(44, 39, 'Zeeshan ', 'zee.sn@na.com', '000000000', 'male', 13, '2024-01-01 02:51:11', '2024-01-01 02:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `country_id`, `code`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Mathematics', 13, 'M', '    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat illum veritatis delectus repudiandae doloribus totam velit accusantium omnis placeat beatae molestias quaerat perferendis, ipsum labore. Suscipit nihil optio illum possimus?', 'Mathematics-1704283773docs.png', '2024-01-03 17:09:33', '2024-01-03 17:09:33'),
(8, 'English', 13, 'E', '        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque et necessitatibus libero. Possimus harum dolores libero et cum, aut dolorem, perferendis distinctio animi a amet ea. Aspernatur repellendus architecto alias.', 'English-1704292652docs.png', '2024-01-03 19:37:32', '2024-01-03 19:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttrainers`
--

CREATE TABLE `subjecttrainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `trainersubject_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjecttrainers`
--

INSERT INTO `subjecttrainers` (`id`, `trainer_id`, `trainersubject_id`, `created_at`, `updated_at`) VALUES
(5, 3, 1, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(6, 3, 2, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(7, 4, 1, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(8, 4, 2, '2023-12-26 07:10:50', '2023-12-26 07:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `timeschedules`
--

CREATE TABLE `timeschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `timetable_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timeschedules`
--

INSERT INTO `timeschedules` (`id`, `timetable_id`, `day_id`, `created_at`, `updated_at`) VALUES
(162, 1, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(163, 2, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(164, 3, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(165, 4, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(166, 5, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(167, 6, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(168, 7, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(169, 8, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(170, 9, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(171, 10, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(172, 11, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(173, 12, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(174, 13, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(175, 14, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(176, 24, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(177, 25, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(178, 26, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(179, 27, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(180, 28, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(181, 29, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(182, 30, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(183, 31, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(184, 32, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(185, 33, 8, '2023-12-25 08:43:20', '2023-12-25 08:43:20'),
(186, 1, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(187, 2, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(188, 3, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(189, 4, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(190, 5, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(191, 6, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(192, 7, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(193, 8, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(194, 9, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(195, 10, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(196, 11, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(197, 12, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(198, 13, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(199, 14, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(200, 24, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(201, 25, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(202, 26, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(203, 27, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(204, 28, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(205, 29, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(206, 30, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(207, 31, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(208, 32, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(209, 33, 9, '2023-12-25 08:43:29', '2023-12-25 08:43:29'),
(210, 1, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(211, 2, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(212, 3, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(213, 4, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(214, 5, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(215, 6, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(216, 7, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(217, 8, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(218, 9, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(219, 10, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(220, 11, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(221, 12, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(222, 13, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(223, 14, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(224, 24, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(225, 25, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(226, 26, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(227, 27, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(228, 28, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(229, 29, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(230, 30, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(231, 31, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(232, 32, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(233, 33, 10, '2023-12-25 08:43:38', '2023-12-25 08:43:38'),
(234, 1, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(235, 2, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(236, 3, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(237, 4, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(238, 5, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(239, 6, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(240, 7, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(241, 8, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(242, 9, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(243, 10, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(244, 11, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(245, 12, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(246, 13, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(247, 14, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(248, 24, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(249, 25, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(250, 26, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(251, 27, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(252, 28, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(253, 29, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(254, 30, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(255, 31, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(256, 32, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(257, 33, 11, '2023-12-25 08:43:50', '2023-12-25 08:43:50'),
(258, 1, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(259, 2, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(260, 3, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(261, 4, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(262, 5, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(263, 6, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(264, 7, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(265, 8, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(266, 9, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(267, 10, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(268, 11, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(269, 12, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(270, 13, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(271, 14, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(272, 24, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(273, 25, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(274, 26, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(275, 27, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(276, 28, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(277, 29, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(278, 30, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(279, 31, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(280, 32, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(281, 33, 12, '2023-12-25 08:43:58', '2023-12-25 08:43:58'),
(282, 1, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(283, 2, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(284, 3, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(285, 4, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(286, 5, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(287, 6, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(288, 7, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(289, 8, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(290, 9, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(291, 10, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(292, 11, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(293, 12, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(294, 13, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(295, 14, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(296, 24, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(297, 25, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(298, 26, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(299, 27, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(300, 28, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(301, 29, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(302, 30, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(303, 31, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(304, 32, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(305, 33, 13, '2023-12-25 08:44:07', '2023-12-25 08:44:07'),
(306, 1, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(307, 2, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(308, 3, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(309, 4, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(310, 5, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(311, 6, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(312, 7, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(313, 8, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(314, 9, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(315, 10, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(316, 11, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(317, 12, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(318, 13, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(319, 14, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(320, 24, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(321, 25, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(322, 26, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(323, 27, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(324, 28, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(325, 29, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(326, 30, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(327, 31, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(328, 32, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16'),
(329, 33, 14, '2023-12-25 08:44:16', '2023-12-25 08:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, '21:00', '22:00', '2023-12-25 08:23:13', '2023-12-25 08:23:13'),
(2, '22:00', '23:00', '2023-12-25 08:23:24', '2023-12-25 08:23:24'),
(3, '23:00', '00:00', '2023-12-25 08:23:37', '2023-12-25 08:23:37'),
(4, '00:00', '01:00', '2023-12-25 08:24:35', '2023-12-25 08:24:35'),
(5, '01:00', '02:00', '2023-12-25 08:25:03', '2023-12-25 08:25:03'),
(6, '02:00', '03:00', '2023-12-25 08:25:29', '2023-12-25 08:25:29'),
(7, '03:00', '04:00', '2023-12-25 08:26:01', '2023-12-25 08:26:01'),
(8, '04:00', '05:00', '2023-12-25 08:26:37', '2023-12-25 08:26:37'),
(9, '05:00', '06:00', '2023-12-25 08:26:57', '2023-12-25 08:26:57'),
(10, '06:00', '07:00', '2023-12-25 08:27:24', '2023-12-25 08:27:24'),
(11, '07:00', '08:00', '2023-12-25 08:27:43', '2023-12-25 08:27:43'),
(12, '08:00', '09:00', '2023-12-25 08:28:01', '2023-12-25 08:28:01'),
(13, '09:00', '10:00', '2023-12-25 08:28:24', '2023-12-25 08:28:24'),
(14, '10:00', '11:00', '2023-12-25 08:28:44', '2023-12-25 08:28:44'),
(24, '11:00', '12:00', '2023-12-25 08:38:57', '2023-12-25 08:38:57'),
(25, '12:00', '13:00', '2023-12-25 08:39:22', '2023-12-25 08:39:22'),
(26, '13:00', '14:00', '2023-12-25 08:39:48', '2023-12-25 08:39:48'),
(27, '14:00', '15:00', '2023-12-25 08:40:04', '2023-12-25 08:40:04'),
(28, '15:00', '16:00', '2023-12-25 08:40:21', '2023-12-25 08:40:21'),
(29, '16:00', '17:00', '2023-12-25 08:40:38', '2023-12-25 08:40:38'),
(30, '17:00', '18:00', '2023-12-25 08:40:54', '2023-12-25 08:40:54'),
(31, '18:00', '19:00', '2023-12-25 08:41:10', '2023-12-25 08:41:10'),
(32, '19:00', '20:00', '2023-12-25 08:41:48', '2023-12-25 08:41:48'),
(33, '20:00', '21:00', '2023-12-25 08:42:06', '2023-12-25 08:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `trailrequests`
--

CREATE TABLE `trailrequests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `grade` varchar(110) DEFAULT NULL,
  `timetable_id` int(11) DEFAULT NULL,
  `traildate` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `whatsapp`, `address`, `gender`, `img`, `created_at`, `updated_at`) VALUES
(3, 'Muhammad Asad', 'asad@webeducatorz.org', '03374969039', 'lahore , pakistan', 'male', 'MuhammadAsad-1703590459profile.jpg', '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(4, 'Rehan Ali', 'rehan.ali02@gmail.com', '033749690390', 'lahore', 'male', 'RehanAli-1703592650profile.jpg', '2023-12-26 07:10:50', '2023-12-26 07:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `trainerschedules`
--

CREATE TABLE `trainerschedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `timeschedule_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainerschedules`
--

INSERT INTO `trainerschedules` (`id`, `trainer_id`, `timeschedule_id`, `status`, `created_at`, `updated_at`) VALUES
(169, 3, 162, 1, '2023-12-26 06:34:19', '2023-12-30 07:11:39'),
(170, 3, 163, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(171, 3, 164, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(172, 3, 165, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(173, 3, 166, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(174, 3, 167, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(175, 3, 168, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(176, 3, 169, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(177, 3, 170, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(178, 3, 171, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(179, 3, 172, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(180, 3, 173, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(181, 3, 174, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(182, 3, 175, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(183, 3, 176, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(184, 3, 177, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(185, 3, 178, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(186, 3, 179, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(187, 3, 180, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(188, 3, 181, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(189, 3, 182, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(190, 3, 183, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(191, 3, 184, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(192, 3, 185, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(193, 3, 186, 1, '2023-12-26 06:34:19', '2023-12-30 07:11:39'),
(194, 3, 187, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(195, 3, 188, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(196, 3, 189, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(197, 3, 190, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(198, 3, 191, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(199, 3, 192, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(200, 3, 193, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(201, 3, 194, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(202, 3, 195, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(203, 3, 196, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(204, 3, 197, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(205, 3, 198, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(206, 3, 199, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(207, 3, 200, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(208, 3, 201, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(209, 3, 202, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(210, 3, 203, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(211, 3, 204, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(212, 3, 205, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(213, 3, 206, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(214, 3, 207, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(215, 3, 208, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(216, 3, 209, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(217, 3, 210, 1, '2023-12-26 06:34:19', '2024-01-01 02:52:46'),
(218, 3, 211, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(219, 3, 212, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(220, 3, 213, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(221, 3, 214, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(222, 3, 215, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(223, 3, 216, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(224, 3, 217, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(225, 3, 218, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(226, 3, 219, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(227, 3, 220, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(228, 3, 221, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(229, 3, 222, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(230, 3, 223, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(231, 3, 224, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(232, 3, 225, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(233, 3, 226, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(234, 3, 227, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(235, 3, 228, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(236, 3, 229, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(237, 3, 230, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(238, 3, 231, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(239, 3, 232, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(240, 3, 233, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(241, 3, 234, 1, '2023-12-26 06:34:19', '2024-01-01 02:52:46'),
(242, 3, 235, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(243, 3, 236, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(244, 3, 237, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(245, 3, 238, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(246, 3, 239, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(247, 3, 240, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(248, 3, 241, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(249, 3, 242, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(250, 3, 243, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(251, 3, 244, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(252, 3, 245, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(253, 3, 246, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(254, 3, 247, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(255, 3, 248, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(256, 3, 249, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(257, 3, 250, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(258, 3, 251, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(259, 3, 252, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(260, 3, 253, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(261, 3, 254, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(262, 3, 255, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(263, 3, 256, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(264, 3, 257, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(265, 3, 258, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(266, 3, 259, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(267, 3, 260, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(268, 3, 261, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(269, 3, 262, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(270, 3, 263, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(271, 3, 264, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(272, 3, 265, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(273, 3, 266, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(274, 3, 267, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(275, 3, 268, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(276, 3, 269, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(277, 3, 270, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(278, 3, 271, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(279, 3, 272, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(280, 3, 273, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(281, 3, 274, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(282, 3, 275, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(283, 3, 276, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(284, 3, 277, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(285, 3, 278, 0, '2023-12-26 06:34:19', '2023-12-26 06:34:19'),
(286, 3, 279, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(287, 3, 280, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(288, 3, 281, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(289, 3, 282, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(290, 3, 283, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(291, 3, 284, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(292, 3, 285, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(293, 3, 286, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(294, 3, 287, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(295, 3, 288, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(296, 3, 289, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(297, 3, 290, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(298, 3, 291, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(299, 3, 292, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(300, 3, 293, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(301, 3, 294, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(302, 3, 295, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(303, 3, 296, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(304, 3, 297, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(305, 3, 298, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(306, 3, 299, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(307, 3, 300, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(308, 3, 301, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(309, 3, 302, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(310, 3, 303, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(311, 3, 304, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(312, 3, 305, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(313, 3, 306, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(314, 3, 307, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(315, 3, 308, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(316, 3, 309, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(317, 3, 310, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(318, 3, 311, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(319, 3, 312, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(320, 3, 313, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(321, 3, 314, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(322, 3, 315, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(323, 3, 316, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(324, 3, 317, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(325, 3, 318, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(326, 3, 319, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(327, 3, 320, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(328, 3, 321, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(329, 3, 322, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(330, 3, 323, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(331, 3, 324, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(332, 3, 325, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(333, 3, 326, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(334, 3, 327, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(335, 3, 328, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(336, 3, 329, 0, '2023-12-26 06:34:20', '2023-12-26 06:34:20'),
(337, 4, 162, 1, '2023-12-26 07:10:50', '2023-12-31 05:01:34'),
(338, 4, 163, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(339, 4, 164, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(340, 4, 165, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(341, 4, 166, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(342, 4, 167, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(343, 4, 168, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(344, 4, 169, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(345, 4, 170, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(346, 4, 171, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(347, 4, 172, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(348, 4, 173, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(349, 4, 174, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(350, 4, 175, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(351, 4, 176, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(352, 4, 177, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(353, 4, 178, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(354, 4, 179, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(355, 4, 180, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(356, 4, 181, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(357, 4, 182, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(358, 4, 183, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(359, 4, 184, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(360, 4, 185, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(361, 4, 186, 1, '2023-12-26 07:10:50', '2023-12-31 05:01:34'),
(362, 4, 187, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(363, 4, 188, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(364, 4, 189, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(365, 4, 190, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(366, 4, 191, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(367, 4, 192, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(368, 4, 193, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(369, 4, 194, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(370, 4, 195, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(371, 4, 196, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(372, 4, 197, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(373, 4, 198, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(374, 4, 199, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(375, 4, 200, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(376, 4, 201, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(377, 4, 202, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(378, 4, 203, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(379, 4, 204, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(380, 4, 205, 0, '2023-12-26 07:10:50', '2023-12-26 07:10:50'),
(381, 4, 206, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(382, 4, 207, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(383, 4, 208, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(384, 4, 209, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(385, 4, 210, 0, '2023-12-26 07:10:51', '2023-12-28 06:23:15'),
(386, 4, 211, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(387, 4, 212, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(388, 4, 213, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(389, 4, 214, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(390, 4, 215, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(391, 4, 216, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(392, 4, 217, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(393, 4, 218, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(394, 4, 219, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(395, 4, 220, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(396, 4, 221, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(397, 4, 222, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(398, 4, 223, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(399, 4, 224, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(400, 4, 225, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(401, 4, 226, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(402, 4, 227, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(403, 4, 228, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(404, 4, 229, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(405, 4, 230, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(406, 4, 231, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(407, 4, 232, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(408, 4, 233, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(409, 4, 234, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(410, 4, 235, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(411, 4, 236, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(412, 4, 237, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(413, 4, 238, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(414, 4, 239, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(415, 4, 240, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(416, 4, 241, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(417, 4, 242, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(418, 4, 243, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(419, 4, 244, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(420, 4, 245, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(421, 4, 246, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(422, 4, 247, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(423, 4, 248, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(424, 4, 249, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(425, 4, 250, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(426, 4, 251, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(427, 4, 252, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(428, 4, 253, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(429, 4, 254, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(430, 4, 255, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(431, 4, 256, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(432, 4, 257, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(433, 4, 258, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(434, 4, 259, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(435, 4, 260, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(436, 4, 261, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(437, 4, 262, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(438, 4, 263, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(439, 4, 264, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(440, 4, 265, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(441, 4, 266, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(442, 4, 267, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(443, 4, 268, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(444, 4, 269, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(445, 4, 270, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(446, 4, 271, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(447, 4, 272, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(448, 4, 273, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(449, 4, 274, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(450, 4, 275, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(451, 4, 276, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(452, 4, 277, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(453, 4, 278, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(454, 4, 279, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(455, 4, 280, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(456, 4, 281, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(457, 4, 282, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(458, 4, 283, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(459, 4, 284, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(460, 4, 285, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(461, 4, 286, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(462, 4, 287, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(463, 4, 288, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(464, 4, 289, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(465, 4, 290, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(466, 4, 291, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(467, 4, 292, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(468, 4, 293, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(469, 4, 294, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(470, 4, 295, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(471, 4, 296, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(472, 4, 297, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(473, 4, 298, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(474, 4, 299, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(475, 4, 300, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(476, 4, 301, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(477, 4, 302, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(478, 4, 303, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(479, 4, 304, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(480, 4, 305, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(481, 4, 306, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(482, 4, 307, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(483, 4, 308, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(484, 4, 309, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(485, 4, 310, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(486, 4, 311, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(487, 4, 312, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(488, 4, 313, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(489, 4, 314, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(490, 4, 315, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(491, 4, 316, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(492, 4, 317, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(493, 4, 318, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(494, 4, 319, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(495, 4, 320, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(496, 4, 321, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(497, 4, 322, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(498, 4, 323, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(499, 4, 324, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(500, 4, 325, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(501, 4, 326, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(502, 4, 327, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(503, 4, 328, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51'),
(504, 4, 329, 0, '2023-12-26 07:10:51', '2023-12-26 07:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `trainersubjects`
--

CREATE TABLE `trainersubjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainersubjects`
--

INSERT INTO `trainersubjects` (`id`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'English', '2023-12-26 02:53:37', '2023-12-26 02:53:37'),
(2, ' Urdu', '2023-12-26 02:53:43', '2023-12-26 02:53:43'),
(3, ' Quran Majeed', '2023-12-26 02:53:49', '2023-12-26 02:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_trainer` int(1) NOT NULL DEFAULT 0,
  `is_student` int(1) NOT NULL DEFAULT 0,
  `photo` varchar(191) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `is_admin` int(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_trainer`, `is_student`, `photo`, `gender`, `is_admin`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(41, 'Muhammad', 'axad03213@gmail.com', NULL, '$2y$12$6rgEq.3XkhQtfy7TRF2V0.ggLCt0CusfuP35.rUGGEE8Cj/NfxO7u', 0, 0, 'Muhammad-1704267261profile.jpg', 'male', 1, 1, NULL, '2024-01-03 02:34:22', '2024-01-03 03:44:48'),
(42, 'Muhammad Zeeshan Afzal', 'xeeshancontact@gmail.com', NULL, '$2y$12$UYvsylygU3o62vSjMc5.du4vp1Iifg1MsL/6y.HPG3UznpJ25TJF.', 0, 0, 'MuhammadZeeshanAfzal-1704285233profile.jpg', 'male', 1, 1, NULL, '2024-01-03 17:33:54', '2024-01-03 17:33:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignmentfacilities`
--
ALTER TABLE `assignmentfacilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpackages`
--
ALTER TABLE `cpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollschedules`
--
ALTER TABLE `enrollschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessions`
--
ALTER TABLE `lessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recordings`
--
ALTER TABLE `recordings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjecttrainers`
--
ALTER TABLE `subjecttrainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeschedules`
--
ALTER TABLE `timeschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trailrequests`
--
ALTER TABLE `trailrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainerschedules`
--
ALTER TABLE `trainerschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainersubjects`
--
ALTER TABLE `trainersubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignmentfacilities`
--
ALTER TABLE `assignmentfacilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cpackages`
--
ALTER TABLE `cpackages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `enrollschedules`
--
ALTER TABLE `enrollschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lessions`
--
ALTER TABLE `lessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=823;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recordings`
--
ALTER TABLE `recordings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjecttrainers`
--
ALTER TABLE `subjecttrainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timeschedules`
--
ALTER TABLE `timeschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `trailrequests`
--
ALTER TABLE `trailrequests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainerschedules`
--
ALTER TABLE `trainerschedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT for table `trainersubjects`
--
ALTER TABLE `trainersubjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
