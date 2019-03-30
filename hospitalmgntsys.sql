-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 05:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmgntsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$P7mGa8jVYz1W2h4jsyt1aui0WxE2TcSP6L45ZannBZQaVqViD3Wo2', NULL, NULL, '2019-02-27 03:46:58', '2019-02-27 03:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `appointment_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `address`, `phone`, `gender`, `dob`, `appointment_date`, `doctor_id`, `created_at`, `updated_at`, `status`) VALUES
(14, 'MANISH RAYAMAJHI', 'ktm', '9863859081', 'male', '2019-03-14', '2019-03-09', 21, '2019-03-07 21:40:23', '2019-03-30 05:51:14', 'closed'),
(15, 'gajendra yadav', 'Kathmandu', '985621054', 'male', '1995-02-13', '2019-03-22', 21, '2019-03-21 05:51:52', '2019-03-21 05:51:52', 'open'),
(16, 'test appointment', 'test', '9863859081', 'male', '2019-03-15', '2019-03-29', 21, '2019-03-26 13:19:19', '2019-03-26 13:19:19', 'open'),
(17, 'gajju', 'ktm', '9863859081', 'male', '2019-03-25', '2019-03-30', 22, '2019-03-27 15:45:23', '2019-03-27 15:45:23', 'open'),
(18, 'test appointment', 'test', '9863859081', 'male', '2019-03-04', '2019-03-31', 20, '2019-03-30 02:58:16', '2019-03-30 02:58:16', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nmc_num` int(11) NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` float NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `contact`, `email`, `address`, `nmc_num`, `specialization`, `created_at`, `updated_at`, `gender`, `fee`, `password`) VALUES
(20, 'Dr. ABC', '9865982156', 'abc@gmail.com', 'ktm', 125, 'neurology', '2019-03-03 00:12:53', '2019-03-24 23:14:29', 'female', 800, '123456'),
(21, 'MANISH RAYAMAJHI', '9865982156', 'manishrmc7@gmail.com', 'Ktm', 125, 'neurology', '2019-03-07 21:33:06', '2019-03-24 23:15:09', 'male', 1000, '12130'),
(22, 'Tulasi Bhandari', '9812326223', 'tulasi@gmail.com', 'Kathmandu', 12, 'neurology', '2019-03-21 05:47:54', '2019-03-24 23:13:54', 'male', 1000, 'admin'),
(23, 'nepal', '9812326223', 'nepal@gmail.com', 'ktm', 12, 'neurology', '2019-03-24 23:09:58', '2019-03-24 23:13:21', 'male', 1000, '12120'),
(24, 'Doctor', '21598648', 'doctor5@gmail.com', 'ktm', 2300, 'neurology', '2019-03-30 03:18:31', '2019-03-30 03:18:31', 'male', 1000, NULL),
(25, 'New Doctor', '9865218', 'new@gmail.com', 'ktm', 2015, 'neurology', '2019-03-30 03:21:41', '2019-03-30 03:21:41', 'male', 1000, NULL),
(26, 'manish', '9865982156', 'manish1@gmail.com', 'ktm', 215, 'neurology', '2019-03-30 06:07:36', '2019-03-30 06:07:36', 'male', 1000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_07_060255_create_doctor_table', 1),
(4, '2019_02_07_063803_create_appointment_table', 1),
(5, '2019_02_07_064531_create_patient_table', 1),
(6, '2019_02_27_055513_create_admin_table', 2),
(7, '2019_03_03_082903_create_schedules_table', 3),
(8, '2019_03_18_051454_create_preceptions_table', 4),
(9, '2019_03_18_051909_create_patients_table', 5),
(10, '2019_03_30_095631_create_preceptions_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) UNSIGNED NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `preception_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'Display user Listing', 'See only Listing Of user', NULL, NULL),
(2, 'user-create', 'Create user', 'Create New user', NULL, NULL),
(3, 'user-edit', 'Edit user', 'Edit user', NULL, NULL),
(4, 'user-delete', 'Delete user', 'Delete user', NULL, NULL),
(5, 'role-list', 'Display Role Listing', 'See only Listing Of Role', NULL, NULL),
(6, 'role-create', 'Create Role', 'Create New Role', NULL, NULL),
(7, 'role-edit', 'Edit Role', 'Edit Role', NULL, NULL),
(8, 'role-delete', 'Delete Role', 'Delete Role', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `preceptions`
--

CREATE TABLE `preceptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `preception` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preceptions`
--

INSERT INTO `preceptions` (`id`, `preception`, `created_at`, `updated_at`, `appointment_id`) VALUES
(6, 'test', '2019-03-30 05:09:40', '2019-03-30 05:09:40', 18),
(7, 'hifjsd', '2019-03-30 05:15:11', '2019-03-30 05:15:11', 18),
(8, 'gggg', '2019-03-30 05:36:16', '2019-03-30 05:36:16', 14),
(9, 'yhhh', '2019-03-30 05:47:05', '2019-03-30 05:47:05', 14),
(10, 'hhh', '2019-03-30 05:48:06', '2019-03-30 05:48:06', 14),
(11, 'aa', '2019-03-30 05:51:14', '2019-03-30 05:51:14', 14);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'admin', NULL, NULL),
(2, 'doctor', 'HR', 'Doctor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(11, 2),
(12, 2),
(14, 2),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `sunday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuesday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wednesday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thursday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `created_at`, `updated_at`, `doctor_id`) VALUES
(21, '7 am to 10 am', '7 am to 9 am', '7 am to 9:30 am', '7 am to 9 am', '7 am to 10 am', '7 am to 9 am', '7 am to 12 pm', '2019-03-06 04:21:42', '2019-03-06 04:21:42', 20),
(22, '7 am to 10 am', '7 am to 9 am', 'not avaiable', '7 am to 9 am', '7 am to 9 am', '7 am to 8 am', 'not avaiable', '2019-03-07 21:33:32', '2019-03-27 15:44:02', 21),
(23, '7 am to 11 am', '9 am to 12 pm', 'none', '2 pm to 5 pm', '4 pm to 6 pm', '8 am to 11 am', '6 am to 9 am', '2019-03-21 05:49:28', '2019-03-21 05:49:28', 22),
(24, '7 am to 11 am', '9 am to 12 pm', '10 am to 2 pm', '2 pm to 5 pm', '4 pm to 6 pm', '8 am to 11 am', 'none', '2019-03-24 23:43:49', '2019-03-24 23:43:49', 23);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MANISH RAYAMAJHI', 'manish@gmail.com', NULL, '$2y$10$TwsRvYMcj777L4S5acWFKO/zA5dkbuP0BLnSqwbeHihHA3kAqqzrq', NULL, '2019-02-11 23:57:11', '2019-02-11 23:57:11'),
(11, 'admin', 'admin2@gmail.com', NULL, 'admin', NULL, '2019-03-26 21:22:16', '2019-03-26 21:22:16'),
(12, 'test doctor', 'doctor@gmail.com', NULL, 'doctor', NULL, '2019-03-26 21:24:11', '2019-03-26 21:24:11'),
(14, 'test doctor', 'doctor3@gmail.com', NULL, '123456', NULL, '2019-03-26 21:26:29', '2019-03-26 21:26:29'),
(15, 'admin', 'admin@gmail.com', NULL, '$2y$10$WgzCd8VEKiokPLMSpLW5HOEiYDLzFV0nk0euQA./Ivo3nm425Wxuu', '7kcEU44dgzfoMzMIMdwWRzSWqKD4OLdrFOhDgfzpBRSMcY3px4934EA2U1J0', '2019-03-30 01:58:27', '2019-03-30 15:52:43'),
(16, 'Doctor', 'doctor5@gmail.com', NULL, '$2y$10$fjxQ7KmYXJtRFuqEmEPBDutlccyuplGyjrGBvYBUZ/ZO8A8N2rB2m', NULL, '2019-03-30 03:18:30', '2019-03-30 03:18:30'),
(17, 'New Doctor', 'new@gmail.com', NULL, '$2y$10$3H13FZYWOhrYznA0NNeXSunWf2AO7AH99G0oXTTH8kLQGUrjH4DoK', NULL, '2019-03-30 03:21:40', '2019-03-30 03:21:40'),
(18, 'manish', 'manish1@gmail.com', NULL, '$2y$10$WgzCd8VEKiokPLMSpLW5HOEiYDLzFV0nk0euQA./Ivo3nm425Wxuu', NULL, '2019-03-30 06:07:36', '2019-03-30 06:07:36'),
(19, 'employee', 'developer@gmail.com', NULL, '$2y$10$pBIEbtOYg4J6oJFRdEIsd.04mjtUPdijQ7G1KX06wZCiXKq9toama', NULL, '2019-03-30 16:07:30', '2019-03-30 16:07:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctor_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `preceptions`
--
ALTER TABLE `preceptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `preceptions`
--
ALTER TABLE `preceptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
