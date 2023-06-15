-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 11:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winkdetailll`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_type_id` varchar(255) DEFAULT NULL,
  `wash_package_id` varchar(255) DEFAULT NULL,
  `services_menu_id` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `vehicle_make` varchar(255) DEFAULT NULL,
  `vehicle_model` varchar(255) DEFAULT NULL,
  `booking_date` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `vehicle_type_id`, `wash_package_id`, `services_menu_id`, `duration`, `total_price`, `first_name`, `second_name`, `email`, `phone_number`, `vehicle_make`, `vehicle_model`, `booking_date`, `message`, `created_at`, `updated_at`) VALUES
(2, '2', '1', '1,2', '1:30', '25.95', 'Muzammil', 'Shahzad', 'muzammilshahzad894@gmail.com', '09000900', 'test', 'test', '2023-06-16', 'test message', '2023-06-15 15:34:36', '2023-06-15 16:13:17'),
(3, '1', '1', '2', '0:30', '18.95', 'Muzammil', 'Shahzad', 'muzammilshahzad894@gmail.com', '98767890', 'Test', 'test', '16-06-2023 01:50', 'Testing', '2023-06-15 15:43:13', '2023-06-15 15:43:13');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_13_181218_create_vehicle_types_table', 1),
(6, '2023_06_13_202723_create_wash_packages_table', 2),
(7, '2023_06_14_194100_create_services_menus_table', 3),
(8, '2023_06_14_224728_create_bookings_table', 4);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_menus`
--

CREATE TABLE `services_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `vehicle_type_id` varchar(255) DEFAULT NULL,
  `wash_package_id` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_menus`
--

INSERT INTO `services_menus` (`id`, `name`, `time`, `price`, `vehicle_type_id`, `wash_package_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Exterior Hand Wash', '10', '7.95', '1', '1', '<p>We hand wash your paint with a pH neutral shampoo, we remove dirt without damaging paint or trims. Your carĵs exterior is chamois-dried to prevent water marks forming on the paint and high pressure air is used to remove water from panel joins and trim.</p>', '2023-06-14 15:18:22', '2023-06-14 15:27:50'),
(2, 'Trunk Vacuum', '5', '3.50', '1', '1', NULL, '2023-06-15 13:56:17', '2023-06-15 13:56:17');

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
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$fcaXj.Lp93IWJczGYPPfy.qltouleXcEEVWFTpvx2Bhs6HOdeJt0K', 'admin', NULL, '2023-06-13 15:03:02', '2023-06-13 15:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Regular Size Car', 'template-icon-vehicle-small-car', NULL, NULL),
(2, 'Medium Size Car', 'template-icon-vehicle-car-mid-size', NULL, NULL),
(3, 'Compact SUV', 'template-icon-vehicle-suv', NULL, NULL),
(4, 'Minivan', 'template-icon-vehicle-minivan', NULL, NULL),
(5, 'Pickup Truck', 'template-icon-vehicle-pickup', NULL, NULL),
(6, 'Cargo Truck', 'template-icon-vehicle-truck-mid-size', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wash_packages`
--

CREATE TABLE `wash_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_type_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wash_packages`
--

INSERT INTO `wash_packages` (`id`, `vehicle_type_id`, `name`, `price`, `time`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'BASIC HAND WASH', '15.95', '25', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 15:51:26', '2023-06-13 16:45:35'),
(2, '1', 'DELUXE WASH', '27.95', '45', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:07:40', '2023-06-13 16:07:40'),
(3, '1', 'ULTIMATE SHINE', '40.45', '60', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n</ul>', '2023-06-13 16:08:13', '2023-06-13 16:08:13'),
(4, '1', 'PLATINUM WORKS', '65.95', '100', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n	<li>Air Freshener</li>\r\n	<li>Triple Coat Hand Wax</li>\r\n	<li>Exterior Vinyl Protectant</li>\r\n	<li>&nbsp;</li>\r\n</ul>', '2023-06-13 16:09:10', '2023-06-13 16:09:10'),
(5, '2', 'BASIC HAND WASH', '17.95', '30', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 16:10:03', '2023-06-13 16:10:03'),
(6, '2', 'DELUXE WASH', '30.95', '55', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:10:37', '2023-06-13 16:10:37'),
(7, '2', 'ULTIMATE SHINE', '52.95', '80', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n</ul>', '2023-06-13 16:11:09', '2023-06-13 16:11:09'),
(8, '2', 'PLATINUM WORKS', '82.95', '125', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n	<li>Air Freshener</li>\r\n	<li>Triple Coat Hand Wax</li>\r\n	<li>Exterior Vinyl Protectant</li>\r\n</ul>', '2023-06-13 16:11:43', '2023-06-13 16:11:43'),
(9, '3', 'BASIC HAND WASH', '15.95', '25', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 16:12:23', '2023-06-13 16:12:23'),
(10, '3', 'DELUXE WASH', '27.95', '45', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:12:50', '2023-06-13 16:12:50'),
(11, '3', 'ULTIMATE SHINE', '40.45', '60', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n</ul>', '2023-06-13 16:13:33', '2023-06-13 16:13:33'),
(12, '4', 'BASIC HAND WASH', '15.95', '25', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 16:15:32', '2023-06-13 16:15:32'),
(13, '4', 'DELUXE WASH', '27.95', '45', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:16:03', '2023-06-13 16:16:03'),
(14, '4', 'ULTIMATE SHINE', '40.45', '60', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n	<li>Interior Vacuum</li>\r\n	<li>Trunk Vacuum</li>\r\n	<li>Door Shuts &amp; Plastics</li>\r\n	<li>Dashboard Clean</li>\r\n</ul>', '2023-06-13 16:16:35', '2023-06-13 16:16:35'),
(15, '5', 'BASIC HAND WASH', '15.95', '25', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 16:17:14', '2023-06-13 16:17:14'),
(16, '5', 'DELUXE WASH', '27.95', '45', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:17:48', '2023-06-13 16:17:48'),
(17, '6', 'BASIC HAND WASH', '15.95', '25', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n</ul>', '2023-06-13 16:18:19', '2023-06-13 16:18:19'),
(18, '6', 'DELUXE WASH', '27.95', '45', '<ul>\r\n	<li>Exterior Hand Wash</li>\r\n	<li>Towel Hand Dry</li>\r\n	<li>Wheel Shine</li>\r\n	<li>Tire Dressing</li>\r\n	<li>Windows In &amp; Out</li>\r\n	<li>Sealer Hand Wax</li>\r\n</ul>', '2023-06-13 16:18:48', '2023-06-13 16:18:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services_menus`
--
ALTER TABLE `services_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wash_packages`
--
ALTER TABLE `wash_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services_menus`
--
ALTER TABLE `services_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wash_packages`
--
ALTER TABLE `wash_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
