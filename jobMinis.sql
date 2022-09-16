-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022 at 10:45 PM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobMinis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user_name`, `slug`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'astha123', 'astha123', 'false', '2022-06-23 13:17:51', '2022-06-23 13:17:51', '2022-06-23 13:17:51'),
(2, 'sapna', 'sapna', 'false', '2022-06-24 01:01:11', '2022-06-24 01:01:11', '2022-06-24 01:01:11'),
(3, 'sapnabaniya', 'sapnabaniya', 'false', '2022-06-26 01:31:12', '2022-06-26 01:31:12', '2022-06-26 01:31:12'),
(4, 'astha', 'astha', 'false', '2022-08-06 11:18:56', '2022-08-06 11:18:56', '2022-08-06 11:18:56'),
(5, 'simran', 'simran', 'false', '2022-08-06 11:34:10', '2022-08-06 11:34:10', '2022-08-06 11:34:10'),
(6, 'simran', 'simran1', 'false', '2022-08-06 11:35:21', '2022-08-06 11:35:21', '2022-08-06 11:35:21'),
(7, 'simran1@gmail.com', 'simran1@gmail.com', 'false', '2022-09-06 08:45:11', '2022-09-06 08:45:11', '2022-09-06 08:45:11'),
(8, 'simran1@gmail.com', 'simran1@gmail.com', 'false', '2022-09-07 03:08:06', '2022-09-07 03:08:06', '2022-09-07 03:08:06'),
(9, 'simran123', 'simran123', 'false', '2022-09-13 08:36:26', '2022-09-13 08:36:26', '2022-09-13 08:36:26'),
(10, 'simran1', 'simran1', 'false', '2022-09-15 16:03:17', '2022-09-15 16:03:17', '2022-09-15 16:03:17'),
(11, 'simran1@gmail.com', 'simran1@gmail.com', 'false', '2022-09-15 16:07:09', '2022-09-15 16:07:09', '2022-09-15 16:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `account_profiles`
--

CREATE TABLE `account_profiles` (
  `id` int NOT NULL,
  `account_id` int NOT NULL,
  `profile_id` int NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account_profiles`
--

INSERT INTO `account_profiles` (`id`, `account_id`, `profile_id`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 6, 1, 'true', '2022-09-12 06:27:55', '2022-09-12 06:27:55', '2022-09-12 06:27:55'),
(2, 4, 2, 'true', '2022-09-13 07:45:09', '2022-09-13 07:45:09', '2022-09-13 07:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int NOT NULL,
  `state` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `state`, `street`, `city`, `country`, `zip_code`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'narayani', 'ganestole', 'pokhara', 'nepal', '33700', 'true', '2022-09-12 06:34:05', '2022-09-12 06:34:05', '2022-09-12 06:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `is_active` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sapna', 'sapna123@gmail.com', '374267365742', 'this is the testing message', NULL, '2022-06-24 01:29:56', '2022-06-24 01:29:56', '2022-06-24 01:29:56'),
(2, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:55:25', '2022-06-25 14:55:25', '2022-06-25 14:55:25'),
(3, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:57:47', '2022-06-25 14:57:47', '2022-06-25 14:57:47'),
(4, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:58:05', '2022-06-25 14:58:05', '2022-06-25 14:58:05'),
(5, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:58:15', '2022-06-25 14:58:15', '2022-06-25 14:58:15'),
(6, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:58:27', '2022-06-25 14:58:27', '2022-06-25 14:58:27'),
(7, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 14:58:43', '2022-06-25 14:58:43', '2022-06-25 14:58:43'),
(8, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:05:16', '2022-06-25 15:05:16', '2022-06-25 15:05:16'),
(9, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:06:12', '2022-06-25 15:06:12', '2022-06-25 15:06:12'),
(10, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:06:25', '2022-06-25 15:06:25', '2022-06-25 15:06:25'),
(11, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:18:49', '2022-06-25 15:18:49', '2022-06-25 15:18:49'),
(12, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:20:13', '2022-06-25 15:20:13', '2022-06-25 15:20:13'),
(13, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:20:53', '2022-06-25 15:20:53', '2022-06-25 15:20:53'),
(14, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:21:08', '2022-06-25 15:21:08', '2022-06-25 15:21:08'),
(15, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'can you please help me to find me a job?', NULL, '2022-06-25 15:21:53', '2022-06-25 15:21:53', '2022-06-25 15:21:53'),
(16, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'sdfc', NULL, '2022-06-25 15:22:32', '2022-06-25 15:22:32', '2022-06-25 15:22:32'),
(17, 'sejal baniya', 'baniyasapna4@gmail.com', '9827190713', 'sdfc', NULL, '2022-06-25 15:57:55', '2022-06-25 15:57:55', '2022-06-25 15:57:55'),
(18, 'Aditya Baniya', 'itsadityabaniya@gmail.com', '9816112768', 'testing', NULL, '2022-09-15 14:47:46', '2022-09-15 14:47:46', '2022-09-15 14:47:46'),
(19, 'Aditya Baniya', 'itsadityabaniya@gmail.com', '9816112768', 'testing', NULL, '2022-09-15 14:50:32', '2022-09-15 14:50:32', '2022-09-15 14:50:32'),
(20, 'Aditya Baniya', 'simran1@gmail.com', '9816112768', 'i want to know about this website', NULL, '2022-09-15 14:51:11', '2022-09-15 14:51:11', '2022-09-15 14:51:11'),
(21, 'Aditya Baniya', 'simran1@gmail.com', '9816112768', 'i want to know about this website', NULL, '2022-09-15 14:51:50', '2022-09-15 14:51:50', '2022-09-15 14:51:50'),
(22, 'Aditya Baniya', 'simran1@gmail.com', '9816112768', 'i want to know about this website', NULL, '2022-09-15 14:58:22', '2022-09-15 14:58:22', '2022-09-15 14:58:22'),
(23, 'Aditya Baniya', 'rohan56das@gmail.com', '9816112768', 'srgr', NULL, '2022-09-15 14:58:44', '2022-09-15 14:58:44', '2022-09-15 14:58:44'),
(24, 'Aditya Baniya', 'rohan56das@gmail.com', '9816112768', 'srgr', NULL, '2022-09-15 15:01:10', '2022-09-15 15:01:10', '2022-09-15 15:01:10'),
(25, 'Aditya Baniya', 'itsadityabaniya@gmail.com', '9816112768', 'fdvd', NULL, '2022-09-15 15:01:25', '2022-09-15 15:01:25', '2022-09-15 15:01:25'),
(26, 'Aditya Baniya', 'itsadityabaniya@gmail.com', '9816112768', 'fdvd', NULL, '2022-09-15 15:01:55', '2022-09-15 15:01:55', '2022-09-15 15:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int NOT NULL,
  `credentials_type` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `k` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `v` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `credentials_type`, `user_id`, `k`, `e`, `v`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'password', 10, '10', '098f6bcd4621d373cade4e832627b4f6', 'null', 'false', '2022-06-23 11:16:14', '2022-06-23 11:16:14', '2022-06-23 11:16:14'),
(2, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 11:17:56', '2022-06-23 11:17:56', '2022-06-23 11:17:56'),
(3, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 11:19:07', '2022-06-23 11:19:07', '2022-06-23 11:19:07'),
(4, 'password', 21, '21', 'af4e5834b08749e4351722895ad14f5a', 'null', 'false', '2022-06-23 11:21:13', '2022-06-23 11:21:13', '2022-06-23 11:21:13'),
(5, 'password', 24, '24', '907175e69298b3b6ce23e929159a7728', 'null', 'false', '2022-06-23 12:04:48', '2022-06-23 12:04:48', '2022-06-23 12:04:48'),
(6, 'password', 25, '25', '91bbc32e8590ecc8765d88330bea92b6', 'null', 'false', '2022-06-23 13:16:37', '2022-06-23 13:16:37', '2022-06-23 13:16:37'),
(7, 'password', 26, '26', '0f3d1ff7fe53fa572e455d4275e02f4b', 'null', 'false', '2022-06-24 01:01:04', '2022-06-24 01:01:04', '2022-06-24 01:01:04'),
(8, 'password', 27, '27', '7d6a5c1eeca24942a5a4987a1998dc3f', 'null', 'false', '2022-06-26 01:31:04', '2022-06-26 01:31:04', '2022-06-26 01:31:04'),
(9, 'password', 28, '28', 'b1eb4d0b383339a26c16c5a9253c1188', 'null', 'false', '2022-08-06 11:18:22', '2022-08-06 11:18:22', '2022-08-06 11:18:22'),
(10, 'password', 30, '30', '9b16eb2704cead43ecf04dd665908205', 'null', 'false', '2022-08-06 11:34:02', '2022-08-06 11:34:02', '2022-08-06 11:34:02'),
(11, 'password', 31, '31', '1a044483e26e3ae95e7c853e05daac5b', 'null', 'false', '2022-08-06 11:35:13', '2022-08-06 11:35:13', '2022-08-06 11:35:13'),
(12, 'password', 32, '32', 'b1eb4d0b383339a26c16c5a9253c1188', 'null', 'false', '2022-09-06 08:45:02', '2022-09-06 08:45:02', '2022-09-06 08:45:02'),
(13, 'password', 33, '33', '91bbc32e8590ecc8765d88330bea92b6', 'null', 'false', '2022-09-07 03:08:03', '2022-09-07 03:08:03', '2022-09-07 03:08:03'),
(14, 'password', 34, '34', '9b16eb2704cead43ecf04dd665908205', 'null', 'false', '2022-09-13 08:36:16', '2022-09-13 08:36:16', '2022-09-13 08:36:16'),
(15, 'password', 35, '35', '1a044483e26e3ae95e7c853e05daac5b', 'null', 'false', '2022-09-15 16:01:06', '2022-09-15 16:01:06', '2022-09-15 16:01:06'),
(16, 'password', 36, '36', '1a044483e26e3ae95e7c853e05daac5b', 'null', 'false', '2022-09-15 16:03:08', '2022-09-15 16:03:08', '2022-09-15 16:03:08'),
(17, 'password', 37, '37', '1a044483e26e3ae95e7c853e05daac5b', 'null', 'false', '2022-09-15 16:07:06', '2022-09-15 16:07:06', '2022-09-15 16:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `filelink` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `filelink`, `ext`, `status`, `created_at`, `updated_at`, `type`, `user_id`) VALUES
(2, 'Photo', '21655969402.png', 'png', 'Active', '2022-06-23 07:30:02', '2022-06-23 07:30:02', 'gallery', 31),
(3, 'frontpage', 'image-removebg-preview(5)1656035304.png', 'png', 'Active', '2022-06-24 01:48:24', '2022-06-24 01:48:24', 'gallery', 31),
(4, 'sapna cv', 'a2zlibrary.png - 2022.09.13 - 07.08.26am09.png', 'png', 'Active', '2022-09-13 07:08:26', '2022-09-13 07:08:26', 'cv', 31),
(5, 'sapna', 'Github_Command.docx - 2022.09.13 - 07.19.03am09.docx', 'docx', 'Active', '2022-09-13 07:19:03', '2022-09-13 07:19:03', 'cv', 34),
(6, 'sapna', 'Github_Command.docx - 2022.09.13 - 07.22.16am09.docx', 'docx', 'Active', '2022-09-13 07:22:16', '2022-09-13 07:22:16', 'cv', 31),
(7, 'Madonna Shepherd', 'Github_Command.docx - 2022.09.13 - 05.33.42Z09.docx', 'docx', 'Active', '2022-09-13 17:33:42', '2022-09-13 17:33:42', 'Neque facere volupta', 34),
(8, 'Madonna Shepherd', 'Github_Command.docx - 2022.09.13 - 05.34.48Z09.docx', 'docx', 'Active', '2022-09-13 17:34:48', '2022-09-13 17:34:48', 'Neque facere volupta', 34),
(9, 'Madonna Shepherd', 'Github_Command.docx - 2022.09.13 - 05.35.55Z09.docx', 'docx', 'Active', '2022-09-13 17:35:55', '2022-09-13 17:35:55', 'Neque facere volupta', 34),
(10, 'Madonna Shepherd', 'Github_Command.docx - 2022.09.13 - 05.36.46Z09.docx', 'docx', 'Active', '2022-09-13 17:36:46', '2022-09-13 17:36:46', 'Neque facere volupta', 34);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int NOT NULL,
  `link` text,
  `status` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `link`, `status`, `is_active`, `user_id`, `created_at`, `deleted_at`, `name`, `type`) VALUES
(1, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.41.47am09.jpg', NULL, NULL, 31, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.41.47am09.jpg', 'background-image'),
(2, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 06.48.24am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 06.48.24am09.jpg', 'background-image'),
(3, 'viber_image_2022-09-04_18-28-25-567.jpg - 2022.09.09 - 07.25.20am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-25-567.jpg - 2022.09.09 - 07.25.20am09.jpg', 'background-image'),
(4, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.25.46am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.25.46am09.jpg', 'background-image'),
(5, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.26.07am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.26.07am09.jpg', 'background-image'),
(6, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.37.03am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.37.03am09.jpg', 'background-image'),
(7, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.39.28am09.jpg', NULL, NULL, NULL, NULL, NULL, 'viber_image_2022-09-04_18-28-14-522.jpg - 2022.09.09 - 07.39.28am09.jpg', 'background-image'),
(8, '274626508_990943381823685_519734290069302601_n.jpeg - 2022.09.09 - 07.57.02am09.jpeg', NULL, NULL, 31, NULL, NULL, '274626508_990943381823685_519734290069302601_n.jpeg - 2022.09.09 - 07.57.02am09.jpeg', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `is_active`, `status`, `created_at`) VALUES
(1, 'data scientist', 'active', 'true', '2022-09-08 10:43:12'),
(2, 'software engineer', 'active', 'true', '2022-09-08 10:43:12'),
(3, 'software developer', 'active', 'true', '2022-09-08 10:43:12'),
(4, 'civil engineer', 'active', 'true', '2022-09-08 10:43:12'),
(5, 'data entry', 'active', 'true', '2022-09-08 10:43:12'),
(6, 'advisor', 'active', 'true', '2022-09-08 10:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `job_category_id` int DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  `skill` text,
  `experience` text,
  `availability` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `job_type_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `user_id`, `title`, `job_category_id`, `contact_person`, `email`, `phone`, `date`, `description`, `skill`, `experience`, `availability`, `language`, `salary`, `is_active`, `status`, `created_at`, `job_type_id`) VALUES
(1, 25, 'Et consectetur expl', 2, 'Nostrud voluptatem s', 'lakovi@mailinator.com', '+1 (707) 349-4602', '1973-11-01', 'Enim quo et est sit', 'Ut ullamco modi quia', 'Aliquam cumque eos a', 'Perferendis reprehen', 'Sunt labore et in co', 54, 'true', 'true', NULL, 1),
(2, 31, 'software developer', 2, 'Sapna baniya', 'baniyasapna4@gmail.com', '+1 (743) 543-5731', '2022-08-11', 'I am hiring a software developer for my project', 'Laravel, nodejs', 'minimum 1 yrs', 'available', '', 10000, 'true', 'true', NULL, 2),
(3, 31, 'Project Manager', 2, 'Rajhu ram', 'baniyasapna4@gmail.com', '9811111111', '2022-09-17', 'we need a prominent and experienced project manager.', 'good communication, problem solving', '3 years', 'true', 'English, Nepali', 30000, 'true', 'true', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `type`, `is_active`, `status`, `created_at`) VALUES
(1, 'hourly', 'active', 'true', '2022-09-08 10:41:07'),
(2, 'monthly', 'active', 'true', '2022-09-08 10:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `login_sessions`
--

CREATE TABLE `login_sessions` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `k` varchar(255) NOT NULL,
  `v` varchar(255) NOT NULL,
  `remember_me` tinyint(1) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `cretaed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `v0` varchar(255) NOT NULL,
  `v1` varchar(255) NOT NULL,
  `v2` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `p_type`, `v0`, `v1`, `v2`, `is_active`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'g', '0', 'job-provider', 'job-provider', 'false', '2022-06-23 13:07:56', '2022-06-23 13:07:56', '2022-06-23 13:07:56'),
(2, 'g', '0', 'job-provider', 'job-provider', 'false', '2022-06-23 13:08:20', '2022-06-23 13:08:20', '2022-06-23 13:08:20'),
(3, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 13:18:37', '2022-06-23 13:18:37', '2022-06-23 13:18:37'),
(4, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 13:39:57', '2022-06-23 13:39:57', '2022-06-23 13:39:57'),
(5, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-23 13:39:58', '2022-06-23 13:39:58', '2022-06-23 13:39:58'),
(6, 'g', '12', 'job-seeker', 'job-seeker', 'false', '2022-06-24 01:01:13', '2022-06-24 01:01:13', '2022-06-24 01:01:13'),
(7, 'g', '12', 'job-seeker', 'job-seeker', 'false', '2022-06-26 01:31:15', '2022-06-26 01:31:15', '2022-06-26 01:31:15'),
(8, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-06-26 01:31:28', '2022-06-26 01:31:28', '2022-06-26 01:31:28'),
(9, 'g', '12', 'job-provider', 'job-provider', 'false', '2022-08-06 11:25:39', '2022-08-06 11:25:39', '2022-08-06 11:25:39'),
(10, 'g', 'Array', 'job-seeker', 'job-seeker', 'false', '2022-08-06 11:34:12', '2022-08-06 11:34:12', '2022-08-06 11:34:12'),
(11, 'g', '31', 'job-seeker', 'job-seeker', 'false', '2022-08-06 11:35:22', '2022-08-06 11:35:22', '2022-08-06 11:35:22'),
(12, 'g', '25', 'job-seeker', 'job-seeker', 'false', '2022-09-06 08:45:16', '2022-09-06 08:45:16', '2022-09-06 08:45:16'),
(13, 'g', '25', 'job-seeker', 'job-seeker', 'false', '2022-09-06 09:17:50', '2022-09-06 09:17:50', '2022-09-06 09:17:50'),
(14, 'g', '25', 'job-seeker', 'job-seeker', 'false', '2022-09-06 09:17:57', '2022-09-06 09:17:57', '2022-09-06 09:17:57'),
(15, 'g', '21', 'job-provider', 'job-provider', 'false', '2022-09-07 03:08:08', '2022-09-07 03:08:08', '2022-09-07 03:08:08'),
(16, 'g', '32', 'admin', '*', 'fase', '2022-09-13 07:44:04', '2022-09-13 07:44:04', '2022-09-13 07:44:04'),
(17, 'g', '34', 'job-seeker', 'job-seeker', 'false', '2022-09-13 08:36:36', '2022-09-13 08:36:36', '2022-09-13 08:36:36'),
(18, 'g', '31', 'job-seeker', 'job-seeker', 'false', '2022-09-15 16:03:27', '2022-09-15 16:03:27', '2022-09-15 16:03:27'),
(19, 'g', '31', 'job-provider', 'job-provider', 'false', '2022-09-15 16:07:12', '2022-09-15 16:07:12', '2022-09-15 16:07:12'),
(20, 'g', '31', 'job-seeker', 'job-seeker', 'false', '2022-09-15 16:08:27', '2022-09-15 16:08:27', '2022-09-15 16:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email_verified` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL,
  `bio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `email_verified`, `is_active`, `created_at`, `deleted_at`, `updated_at`, `user_id`, `bio`) VALUES
(1, 'sapna', 'kumari', 'baniy1', 'skyrootmam123@gmail.com', 'true', 'true', '2022-09-12 05:23:28', '2022-09-12 05:23:28', '2022-09-12 05:23:28', 31, 'i am a girl'),
(2, NULL, NULL, NULL, NULL, NULL, 'true', '2022-09-13 07:47:33', '2022-09-13 07:47:33', '2022-09-13 07:47:33', 32, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_addresses`
--

CREATE TABLE `profile_addresses` (
  `id` int NOT NULL,
  `profile_id` int NOT NULL,
  `account_id` int NOT NULL,
  `address_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `is_active` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile_addresses`
--

INSERT INTO `profile_addresses` (`id`, `profile_id`, `account_id`, `address_id`, `name`, `type`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 6, 1, 'sapna', 'job_seeker', 'true', '2022-09-12 06:34:56', '2022-09-12 06:34:56', '2022-09-12 06:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfig`
--

CREATE TABLE `siteconfig` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `site_key` varchar(255) NOT NULL,
  `site_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siteconfig`
--

INSERT INTO `siteconfig` (`id`, `name`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(2, 'sahigi@mailinator.com', 'norek@mailinator.com', 'wiqew@mailinator.com', 'Active', '2022-06-23 10:32:53', '2022-06-23 10:32:53', NULL),
(3, 'location', 'Our Location ', 'NP: Pokhara, Gandaki, Nepal', 'Active', '2022-06-23 16:03:53', '2022-06-23 16:03:53', NULL),
(4, 'email', 'How Can We Help???', 'jobminis@gmail.com', 'Active', '2022-06-23 16:10:57', '2022-06-23 16:10:57', NULL),
(6, 'title', 'Frequently Asked Questions(FAQs)', 'The most common questions about how our application works .', 'Active', '2022-06-23 16:24:01', '2022-06-23 16:24:01', NULL),
(7, 'faq', 'How does this site work?', 'We provide a portal to use your services to create run such flow.', 'Active', '2022-06-23 16:28:10', '2022-06-23 16:28:10', NULL),
(8, 'faq', 'Can I send email or sms from this site?', 'Yes, Of course, we provide you the flexibility send email or sms.', 'Active', '2022-06-23 16:44:48', '2022-06-23 16:44:48', NULL),
(9, 'Roary Blackwell', 'Vero numquam ipsum o', 'Culpa dolores ', 'Active', '2022-09-14 04:37:35', '2022-09-14 04:37:35', 31),
(10, 'faq', '  Can I create multiple users in my account?', 'We are giving our best to bring up this feature ASAP.', 'Active', '2022-09-15 16:57:15', '2022-09-15 16:57:15', 32),
(11, 'faq', ' Can I add new operations?', ' We are excited learn new ideas and feedback from you. You can always request new\r\n                                        features and we will try implement it after some study.\r\n                                        For now, you can create flow with operations provided on this site. Get started by\r\n                                        choose one of the ', 'Active', '2022-09-15 16:58:55', '2022-09-15 16:58:55', 32),
(12, 'faq', '      Can I cancel the plan?', '  You can request cancellation of plan at any time. Since the plans are life-time in\r\n                                        period, refunds are not made.\r\n                                        Good news is you can request for <a href=\"#contact\" class=\"text-secondary hover:text-lite\">demo</a> before choosing the plan.\r\n                                        Or you can use our', 'Active', '2022-09-15 17:00:00', '2022-09-15 17:00:00', 32);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_Active` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `h1` varchar(255) DEFAULT NULL,
  `p` varchar(255) DEFAULT NULL,
  `btn_txt` varchar(255) DEFAULT NULL,
  `btn_link` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `h1`, `p`, `btn_txt`, `btn_link`, `img`, `status`, `created_at`, `updated_at`) VALUES
(3, 'slider2', 'Find the perfect Job for you', 'Find and search your career opportunity here', 'hellofg nvbsfmgv', 'hellobdvcbadc', 'image-removebg-preview(5)1655989739.png', 'active', '2022-06-23 14:15:09', '2022-06-23 14:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `untitled_table_20`
--

CREATE TABLE `untitled_table_20` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ziwubuke@mailinator.com', '0', '2022-06-17 01:34:40', '2022-06-17 01:34:40'),
(2, 'pizap@mailinator.com', '0', '2022-06-17 01:34:53', '2022-06-17 01:34:53'),
(3, 'shresthaastha848@gmail.com', '0', '2022-06-19 00:58:01', '2022-06-19 00:58:01'),
(4, 'sangu@gmail.com', '1', '2022-06-20 06:25:46', '2022-06-20 06:25:46'),
(5, 'anmol@gmail.com', '1', '2022-06-20 06:47:36', '2022-06-20 06:47:36'),
(6, 'anmol@gmail.com', '1', '2022-06-20 06:48:18', '2022-06-20 06:48:18'),
(7, 'anmol@gmail.com', '1', '2022-06-20 06:48:22', '2022-06-20 06:48:22'),
(8, 'simran848@gmail.com', '1', '2022-06-20 07:12:05', '2022-06-20 07:12:05'),
(9, 'sumi@gmail.com', '0', '2022-06-22 07:59:41', '2022-06-22 07:59:41'),
(10, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:05:50', '2022-06-23 11:05:50'),
(11, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:06:13', '2022-06-23 11:06:13'),
(12, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:06:36', '2022-06-23 11:06:36'),
(13, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:07:26', '2022-06-23 11:07:26'),
(14, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:08:46', '2022-06-23 11:08:46'),
(15, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:09:33', '2022-06-23 11:09:33'),
(16, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:10:19', '2022-06-23 11:10:19'),
(17, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:10:47', '2022-06-23 11:10:47'),
(18, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:12:59', '2022-06-23 11:12:59'),
(19, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:15:12', '2022-06-23 11:15:12'),
(20, 'sapnabaniya.xdezo@gmail.com', 'inactive', '2022-06-23 11:16:14', '2022-06-23 11:16:14'),
(21, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 11:17:56', '2022-06-23 11:17:56'),
(22, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 11:19:07', '2022-06-23 11:19:07'),
(23, 'baniyasapna4@gmail.com', 'inactive', '2022-06-23 11:21:13', '2022-06-23 11:21:13'),
(24, 'sapna@gmail.com', 'inactive', '2022-06-23 12:04:48', '2022-06-23 12:04:48'),
(25, 'astha@gmail.com', 'inactive', '2022-06-23 13:16:37', '2022-06-23 13:16:37'),
(26, 'sapna123@gmail.com', 'inactive', '2022-06-24 01:01:04', '2022-06-24 01:01:04'),
(27, 'sapna2@gmail.com', 'inactive', '2022-06-26 01:31:04', '2022-06-26 01:31:04'),
(28, 'astha@gmail.com', 'inactive', '2022-08-06 11:18:22', '2022-08-06 11:18:22'),
(29, 'simran@gmail.com', 'inactive', '2022-08-06 11:33:28', '2022-08-06 11:33:28'),
(30, 'simran@gmail.com', 'inactive', '2022-08-06 11:34:02', '2022-08-06 11:34:02'),
(31, 'simran1@gmail.com', 'inactive', '2022-08-06 11:35:13', '2022-08-06 11:35:13'),
(32, 'astha@gmail.com', 'inactive', '2022-09-06 08:45:02', '2022-09-06 08:45:02'),
(33, 'baniyasapna4@gmail.com', 'inactive', '2022-09-07 03:08:03', '2022-09-07 03:08:03'),
(34, 'simran123@gmail.com', 'inactive', '2022-09-13 08:36:16', '2022-09-13 08:36:16'),
(35, 'simran1@gmail.com', 'inactive', '2022-09-15 16:01:06', '2022-09-15 16:01:06'),
(36, 'simran1@gmail.com', 'inactive', '2022-09-15 16:03:08', '2022-09-15 16:03:08'),
(37, 'simran1@gmail.com', 'inactive', '2022-09-15 16:07:06', '2022-09-15 16:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `information` longtext,
  `job_category_id` int DEFAULT NULL,
  `size` int DEFAULT NULL,
  `founded_at` int DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address_id` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `user_id`, `information`, `job_category_id`, `size`, `founded_at`, `phone`, `email`, `address_id`, `status`, `created_at`, `deleted_at`) VALUES
(1, 'orgware construct', 21, 'this is orgware construct', 2, 1000, 2000, NULL, 'orgware@gmail.com', NULL, 'true', NULL, NULL),
(2, 'xdezo', 21, 'xdezo technology', 2, 500, NULL, NULL, 'xdezo@gmail.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_setting`
--

CREATE TABLE `user_setting` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `link_key` varchar(255) DEFAULT NULL,
  `link_value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_setting`
--

INSERT INTO `user_setting` (`id`, `user_id`, `link_key`, `link_value`, `created_at`, `deleted_at`, `status`) VALUES
(1, 31, 'github', 'http://www.github.com', NULL, NULL, 'active'),
(2, 31, 'linkedin', 'www.linkedin', NULL, NULL, 'active'),
(3, 31, 'website', 'www.sapna.com', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_skill`
--

CREATE TABLE `user_skill` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `skill_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_profiles`
--
ALTER TABLE `account_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_sessions`
--
ALTER TABLE `login_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_addresses`
--
ALTER TABLE `profile_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteconfig`
--
ALTER TABLE `siteconfig`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `untitled_table_20`
--
ALTER TABLE `untitled_table_20`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_setting`
--
ALTER TABLE `user_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_skill`
--
ALTER TABLE `user_skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `account_profiles`
--
ALTER TABLE `account_profiles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_sessions`
--
ALTER TABLE `login_sessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_addresses`
--
ALTER TABLE `profile_addresses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siteconfig`
--
ALTER TABLE `siteconfig`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `untitled_table_20`
--
ALTER TABLE `untitled_table_20`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_setting`
--
ALTER TABLE `user_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_skill`
--
ALTER TABLE `user_skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
