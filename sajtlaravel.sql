-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 11:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajtlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', '2024-03-05 14:19:35', '2024-03-10 10:34:04'),
(2, 'Apple', '2024-03-05 14:19:35', '2024-03-10 16:35:06'),
(3, 'Huawei', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, 'Xiaomi', '2024-03-05 14:19:35', '2024-03-05 14:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `camera_specs`
--

CREATE TABLE `camera_specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `camera_specs`
--

INSERT INTO `camera_specs` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, '20', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, '40', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, '70', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, '108', '2024-03-05 14:19:35', '2024-03-10 11:44:48'),
(5, '200', '2024-03-05 14:19:35', '2024-03-05 14:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 1, NULL, NULL),
(5, 1, NULL, NULL),
(6, 1, NULL, NULL),
(7, 1, NULL, NULL),
(8, 1, NULL, NULL),
(9, 1, NULL, NULL),
(10, 1, NULL, NULL),
(11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Black', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 'Blue', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 'White', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, 'Lila', '2024-03-10 13:11:29', '2024-03-10 13:12:30');

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
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder_name` varchar(255) NOT NULL,
  `parent_folder_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `folder_name`, `parent_folder_id`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 7 Plus', NULL, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, '2023-11-11', 1, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 'Iphone 12', NULL, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, '2024-01-12', 3, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 'Galaxy S20 Ultra', NULL, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(6, '2024-01-09', 5, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(7, 'Iphone 13', NULL, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(8, '2023-11-05', 7, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(9, 'Iphone 13 Pro', NULL, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(10, '2023-10-03', 9, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(11, 'Redmi Note 12', NULL, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(12, '2024-02-11', 11, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(17, 'Iphone XS Max', NULL, '2024-03-10 22:02:49', '2024-03-10 22:02:49'),
(18, '2024-03-10', 17, '2024-03-10 22:02:49', '2024-03-10 22:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `folder_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_name`, `model_id`, `folder_id`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 4, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(2, '2', 1, 4, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(3, '3', 1, 4, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(4, '4', 1, 4, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(5, '1', 2, 2, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(6, '2', 2, 2, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(7, '3', 2, 2, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(8, '4', 2, 2, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(9, '1', 3, 6, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(10, '2', 3, 6, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(11, '3', 3, 6, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(12, '4', 3, 6, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(13, '5', 3, 6, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(14, '1', 4, 8, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(15, '2', 4, 8, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(16, '3', 4, 8, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(17, '4', 4, 8, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(18, '5', 4, 8, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(19, '1', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(20, '2', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(21, '3', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(22, '4', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(23, '5', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(24, '6', 5, 10, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(25, '1', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(26, '2', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(27, '3', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(28, '4', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(29, '5', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(30, '6', 6, 12, '2024-03-05 14:19:36', '2024-03-05 14:19:36'),
(48, '1', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48'),
(49, '2', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48'),
(50, '3', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48'),
(51, '4', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48'),
(52, '5', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48'),
(53, '6', 7, 18, '2024-03-10 23:02:48', '2024-03-10 23:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logType_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `logType_id`, `user_id`, `value`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'User Lazar  has logged in.', '2024-03-12 14:51:51', NULL),
(3, 2, 9, 'User TestLog  has registered in.', '2024-03-12 14:56:17', NULL),
(4, 2, 1, 'User Lazar  has logged in.', '2024-03-12 14:57:25', NULL),
(5, 2, 1, 'User Lazar  has logged in.', '2024-03-12 14:57:27', NULL),
(6, 2, 1, 'User Lazar  has logged in.', '2024-03-12 15:02:30', NULL),
(7, 2, 1, 'User Lazar  has logged out.', '2024-03-12 15:24:02', NULL),
(8, 2, 1, 'User Lazar  has logged in.', '2024-03-12 15:39:15', NULL),
(9, 2, 1, 'User Lazar  has logged out.', '2024-03-12 15:44:38', NULL),
(10, 2, 1, 'User Lazar  has logged in.', '2024-03-12 16:47:19', NULL),
(11, 2, 1, 'User Lazar  has logged out.', '2024-03-12 17:10:35', NULL),
(12, 2, 1, 'User Lazarr  has logged in.', '2024-03-12 17:10:46', NULL),
(13, 2, 1, 'User Lazar  has logged in.', '2024-03-12 17:12:28', NULL),
(14, 2, 1, 'User Lazar  has logged out.', '2024-03-12 17:16:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_type`
--

CREATE TABLE `log_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_type`
--

INSERT INTO `log_type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Register', NULL, NULL),
(2, 'Login', NULL, NULL),
(3, 'Logout', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memory_specs`
--

CREATE TABLE `memory_specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memory_specs`
--

INSERT INTO `memory_specs` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, '64GB', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, '128GB', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, '256GB', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, '512GB', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, '1TB', '2024-03-05 14:19:35', '2024-03-05 14:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`, `created_at`, `updated_at`) VALUES
(1, 'Početna', 'home', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 'Telefoni', 'products', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 'Kontakt', 'contact', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 'Author', 'author', '2024-03-11 08:27:25', '2024-03-11 08:27:25');

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_02_27_000000_create_users_table', 1),
(5, '2024_02_27_221436_create_camera_specs_table', 1),
(6, '2024_02_27_221455_create_ram_specs_table', 1),
(7, '2024_02_27_221553_create_memory_specs_table', 1),
(8, '2024_02_27_221618_create_brands_table', 1),
(9, '2024_02_27_221630_create_roles_table', 1),
(10, '2024_02_28_123157_create_models_table', 1),
(11, '2024_02_28_123223_create_model_specifications_table', 1),
(12, '2024_02_28_123314_create_colors_table', 1),
(13, '2024_02_28_193447_create_model_specification_color_table', 1),
(14, '2024_02_29_113001_create_user_dva_table', 1),
(15, '2024_02_29_115029_create_price_table', 1),
(16, '2024_02_29_122028_create_cart_table', 1),
(17, '2024_02_29_124042_create_product_cart_table', 1),
(18, '2024_03_01_182644_create_menus_table', 1),
(19, '2024_03_03_113110_create_folders_table', 1),
(20, '2024_03_03_123427_create_images_table', 1),
(21, '2024_03_11_094658_create_log_type_table', 2),
(22, '2024_03_11_094704_create_logs_table', 3),
(23, '2024_03_11_094704_create_log_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_of_delivery` date NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `name`, `description`, `date_of_delivery`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 12', 'test', '2024-01-12', 2, '2024-03-05 14:19:35', '2024-03-10 16:48:49'),
(2, 'Iphone 7 Plus', 'test', '2023-11-11', 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 'Galaxy S20 Ultra', 'test', '2024-01-09', 1, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, 'Iphone 13', 'test', '2023-11-05', 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 'Iphone 13 Pro', 'test', '2023-10-03', 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(6, 'Redmi Note 12', 'test', '2024-02-11', 4, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(7, 'Iphone XS Max', 'test', '2024-03-10', 2, '2024-03-10 20:50:52', '2024-03-10 20:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `model_specifications`
--

CREATE TABLE `model_specifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `camera_id` bigint(20) UNSIGNED NOT NULL,
  `memory_id` bigint(20) UNSIGNED NOT NULL,
  `ram_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_specifications`
--

INSERT INTO `model_specifications` (`id`, `model_id`, `camera_id`, `memory_id`, `ram_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 4, 3, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 2, 2, 3, 1, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 3, 4, 4, 3, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, 4, 2, 4, 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 5, 3, 5, 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(6, 6, 2, 1, 1, '2024-03-05 14:19:35', '2024-03-10 17:19:04'),
(7, 7, 2, 3, 1, '2024-03-10 20:51:15', '2024-03-10 20:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `model_specification_color`
--

CREATE TABLE `model_specification_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ms_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_specification_color`
--

INSERT INTO `model_specification_color` (`id`, `ms_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 2, 2, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 3, 1, '2024-03-05 14:19:35', '2024-03-10 20:44:24'),
(4, 4, 1, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 5, 1, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(6, 6, 2, '2024-03-05 14:19:35', '2024-03-10 20:45:11'),
(7, 7, 3, '2024-03-10 20:51:25', '2024-03-10 20:51:25');

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
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `msc_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `old_price` decimal(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `msc_id`, `price`, `old_price`, `created_at`, `updated_at`) VALUES
(1, 1, 350.00, 400.00, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 2, 120.00, 0.00, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, 3, 400.00, 550.00, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, 4, 570.00, 600.00, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(5, 5, 680.00, 700.00, '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(6, 6, 210.00, 0.00, '2024-03-05 14:19:35', '2024-03-10 14:10:25'),
(8, 7, 250.00, 0.00, '2024-03-10 21:00:46', '2024-03-10 21:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `msc_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`id`, `cart_id`, `msc_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2024-03-07 13:07:34', '2024-03-07 13:07:34'),
(2, 2, 3, 1, '2024-03-07 13:07:34', '2024-03-07 13:07:34'),
(3, 2, 6, 1, '2024-03-07 13:07:34', '2024-03-07 13:07:34'),
(4, 3, 1, 1, '2024-03-07 19:40:28', '2024-03-07 19:40:28'),
(5, 3, 3, 1, '2024-03-07 19:40:28', '2024-03-07 19:40:28'),
(6, 4, 5, 1, '2024-03-09 12:04:11', '2024-03-09 12:04:11'),
(7, 5, 3, 1, '2024-03-09 12:09:34', '2024-03-09 12:09:34'),
(8, 5, 5, 1, '2024-03-09 12:09:34', '2024-03-09 12:09:34'),
(9, 6, 2, 1, '2024-03-09 12:10:38', '2024-03-09 12:10:38'),
(10, 6, 4, 1, '2024-03-09 12:10:38', '2024-03-09 12:10:38'),
(11, 7, 1, 1, '2024-03-09 12:10:55', '2024-03-09 12:10:55'),
(12, 8, 2, 1, '2024-03-09 12:12:00', '2024-03-09 12:12:00'),
(13, 8, 5, 1, '2024-03-09 12:12:00', '2024-03-09 12:12:00'),
(14, 9, 1, 1, '2024-03-10 13:28:43', '2024-03-10 13:28:43'),
(15, 10, 1, 1, '2024-03-10 13:30:31', '2024-03-10 13:30:31'),
(16, 11, 4, 1, '2024-03-11 11:05:30', '2024-03-11 11:05:30'),
(17, 11, 7, 1, '2024-03-11 11:05:30', '2024-03-11 11:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `ram_specs`
--

CREATE TABLE `ram_specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ram_specs`
--

INSERT INTO `ram_specs` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, '4', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, '6', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(3, '8', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(4, '12', '2024-03-05 14:19:35', '2024-03-05 14:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2024-03-05 14:19:35', '2024-03-05 14:19:35'),
(2, 'User', '2024-03-05 14:19:35', '2024-03-05 14:19:35');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_dva`
--

CREATE TABLE `users_dva` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_dva`
--

INSERT INTO `users_dva` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Lazar', 'Milosevic', 'lazarmilosevic2709@gmail.com', NULL, '$2y$12$PPXHv6LwsEh5PQugEgCJIe.wWXYpSYDp.rJw0RIth4CvAQIBj0VHm', NULL, 1, '2024-03-05 14:19:44', '2024-03-12 16:57:25'),
(2, 'Test', 'Test', 'test@gmail.com', NULL, '$2y$12$K7voyWvzCU69sW9hAfFxMe5OHSSLTccZ3CXJpqV7/Xyve6EdOKfu6', NULL, 1, '2024-03-06 10:10:41', '2024-03-10 15:21:02'),
(3, 'Testiranje2', 'Testiranje2', 'test2@gmail.com', NULL, '$2y$12$qbjVZ6kRihDul7ksxHFNZuMVDVrtIZqvoliPqArknzTliGW33bJVm', NULL, 2, '2024-03-10 14:43:53', '2024-03-10 14:43:53'),
(6, 'Administrator', 'Administrator', 'administrator@gmail.com', NULL, '$2y$12$7iMYg6yrH5omsWpeBhpyiOQpP.THhophKPUqu6g/xN/67Uapcdgbu', NULL, 1, '2024-03-11 12:23:52', '2024-03-11 12:23:52'),
(9, 'TestLog', 'TestLog', 'testlog@gmail.com', NULL, '$2y$12$UYUFM3AyMe7aACjO2FC...OFwDe9AdBJeWplNEFssUNWv0TDW.PKa', NULL, 2, '2024-03-12 14:56:17', '2024-03-12 14:56:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `camera_specs`
--
ALTER TABLE `camera_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id_foreign` (`user_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folders_parent_folder_id_foreign` (`parent_folder_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_model_id_foreign` (`model_id`),
  ADD KEY `images_folder_id_foreign` (`folder_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_logtype_id_foreign` (`logType_id`),
  ADD KEY `log_user_id_foreign` (`user_id`);

--
-- Indexes for table `log_type`
--
ALTER TABLE `log_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memory_specs`
--
ALTER TABLE `memory_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `model_specifications`
--
ALTER TABLE `model_specifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_specifications_model_id_foreign` (`model_id`),
  ADD KEY `model_specifications_camera_id_foreign` (`camera_id`),
  ADD KEY `model_specifications_memory_id_foreign` (`memory_id`),
  ADD KEY `model_specifications_ram_id_foreign` (`ram_id`);

--
-- Indexes for table `model_specification_color`
--
ALTER TABLE `model_specification_color`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_specification_color_ms_id_foreign` (`ms_id`),
  ADD KEY `model_specification_color_color_id_foreign` (`color_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_msc_id_foreign` (`msc_id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cart_cart_id_foreign` (`cart_id`),
  ADD KEY `product_cart_msc_id_foreign` (`msc_id`);

--
-- Indexes for table `ram_specs`
--
ALTER TABLE `ram_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_dva`
--
ALTER TABLE `users_dva`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_dva_email_unique` (`email`),
  ADD KEY `users_dva_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `camera_specs`
--
ALTER TABLE `camera_specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `log_type`
--
ALTER TABLE `log_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `memory_specs`
--
ALTER TABLE `memory_specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `model_specifications`
--
ALTER TABLE `model_specifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `model_specification_color`
--
ALTER TABLE `model_specification_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ram_specs`
--
ALTER TABLE `ram_specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_dva`
--
ALTER TABLE `users_dva`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_dva` (`id`);

--
-- Constraints for table `folders`
--
ALTER TABLE `folders`
  ADD CONSTRAINT `folders_parent_folder_id_foreign` FOREIGN KEY (`parent_folder_id`) REFERENCES `folders` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_folder_id_foreign` FOREIGN KEY (`folder_id`) REFERENCES `folders` (`id`),
  ADD CONSTRAINT `images_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_logtype_id_foreign` FOREIGN KEY (`logType_id`) REFERENCES `log_type` (`id`),
  ADD CONSTRAINT `log_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_dva` (`id`);

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `model_specifications`
--
ALTER TABLE `model_specifications`
  ADD CONSTRAINT `model_specifications_camera_id_foreign` FOREIGN KEY (`camera_id`) REFERENCES `camera_specs` (`id`),
  ADD CONSTRAINT `model_specifications_memory_id_foreign` FOREIGN KEY (`memory_id`) REFERENCES `memory_specs` (`id`),
  ADD CONSTRAINT `model_specifications_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`),
  ADD CONSTRAINT `model_specifications_ram_id_foreign` FOREIGN KEY (`ram_id`) REFERENCES `ram_specs` (`id`);

--
-- Constraints for table `model_specification_color`
--
ALTER TABLE `model_specification_color`
  ADD CONSTRAINT `model_specification_color_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  ADD CONSTRAINT `model_specification_color_ms_id_foreign` FOREIGN KEY (`ms_id`) REFERENCES `model_specifications` (`id`);

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_msc_id_foreign` FOREIGN KEY (`msc_id`) REFERENCES `model_specification_color` (`id`);

--
-- Constraints for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD CONSTRAINT `product_cart_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `product_cart_msc_id_foreign` FOREIGN KEY (`msc_id`) REFERENCES `model_specification_color` (`id`);

--
-- Constraints for table `users_dva`
--
ALTER TABLE `users_dva`
  ADD CONSTRAINT `users_dva_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
