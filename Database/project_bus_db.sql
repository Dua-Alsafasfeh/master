-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 02:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(50) UNSIGNED NOT NULL DEFAULT 50,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `type`, `number`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Coaster', '14-73488', 23, '2022-08-10 16:10:00', '2022-09-27 20:05:06'),
(2, 'Toyota Coaster', '17-52148', 23, '2022-08-10 16:10:00', '2022-09-27 20:04:31'),
(3, 'Toyota Coaster', '13-79658', 23, '2022-09-27 12:42:00', '2022-09-27 20:05:18'),
(4, 'Mercedes large bus', '42-52148', 45, '2022-09-27 20:22:32', '2022-09-27 20:22:32'),
(5, 'Mercedes large bus', '20-73487', 45, '2022-09-27 20:22:53', '2022-09-27 20:22:53'),
(6, 'Mercedes large bus', '21-63259', 45, '2022-09-27 20:23:15', '2022-09-27 20:23:15'),
(7, 'Toyota Coaster', '75-25148', 23, '2022-09-27 20:23:00', '2022-09-27 20:23:45'),
(8, 'Toyota Coaster', '64-58249', 23, '2022-09-27 20:24:00', '2022-09-27 20:25:49'),
(9, 'Mercedes large bus', '35-73588', 45, '2022-09-27 20:25:01', '2022-09-27 20:25:01'),
(10, 'Toyota Coaster', '56-65842', 23, '2022-09-27 20:25:21', '2022-09-27 20:25:21'),
(11, 'Toyota Coaster', '25-63251', 23, '2022-09-27 20:25:41', '2022-09-27 20:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, NULL, 1, 'Category 2', 'category-2', '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Amman', '2022-08-10 15:42:09', '2022-08-10 15:42:09'),
(2, 'Irbid', '2022-08-10 15:42:09', '2022-08-10 15:42:09'),
(3, 'Aqaba', '2022-08-10 17:26:45', '2022-08-10 17:26:45'),
(4, 'Al-karak', '2022-08-10 17:26:45', '2022-08-10 17:26:45'),
(5, 'Al-Tafila', '2022-08-10 17:27:43', '2022-08-10 17:27:43'),
(6, 'Maan', '2022-09-27 17:31:28', '2022-09-27 17:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'voyager::seeders.data_rows.roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'city_name', 'text', 'City Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(59, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(60, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(61, 9, 'type', 'text', 'Type', 1, 1, 1, 1, 1, 1, '{}', 2),
(62, 9, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 3),
(63, 9, 'size', 'text', 'Size', 1, 1, 1, 1, 1, 1, '{}', 4),
(64, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(65, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(66, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 11, 'driver_name', 'text', 'Driver Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(68, 11, 'phone_number', 'text', 'Phone Number', 0, 1, 1, 1, 1, 1, '{}', 3),
(69, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(70, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(71, 12, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(72, 12, 'trip_id', 'text', 'Trip Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(73, 12, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(74, 12, 'is_payment', 'text', 'Is Payment', 1, 1, 1, 1, 1, 1, '{}', 4),
(75, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(76, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(77, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(78, 13, 'from_id', 'text', 'From Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(79, 13, 'to_id', 'text', 'To Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(80, 13, 'driver_id', 'text', 'Driver Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(81, 13, 'bus_id', 'text', 'Bus Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(82, 13, 'date', 'text', 'Date', 1, 1, 1, 1, 1, 1, '{}', 6),
(83, 13, 'time', 'text', 'Time', 1, 1, 1, 1, 1, 1, '{}', 7),
(84, 13, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 8),
(85, 13, 'path', 'text', 'Path', 1, 1, 1, 1, 1, 1, '{}', 9),
(86, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 10),
(87, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(88, 16, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 16, 'user_id', 'text', 'User Id', 1, 1, 1, 0, 0, 0, '{}', 2),
(91, 16, 'person_name', 'text', 'Person Name', 1, 1, 1, 0, 0, 0, '{}', 4),
(92, 16, 'card_num', 'text', 'Card Num', 1, 1, 1, 0, 0, 0, '{}', 5),
(93, 16, 'expiry', 'text', 'Expiry', 1, 1, 1, 0, 0, 0, '{}', 6),
(94, 16, 'cvv', 'text', 'Cvv', 1, 1, 1, 0, 0, 0, '{}', 7),
(95, 16, 'total_price', 'text', 'Total Price', 1, 1, 1, 0, 0, 0, '{}', 8),
(96, 16, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 9),
(97, 16, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(98, 16, 'trip_bookings_id', 'text', 'Trip Bookings Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(99, 12, 'num_of_seats', 'text', 'Num Of Seats', 1, 1, 1, 1, 1, 1, '{}', 4),
(100, 12, 'total_cost', 'text', 'Total Cost', 1, 1, 1, 1, 1, 1, '{}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(7, 'cities', 'cities', 'City', 'Cities', NULL, 'App\\Models\\City', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(9, 'buses', 'buses', 'Bus', 'Buses', NULL, 'App\\Models\\Bus', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(11, 'drivers', 'drivers', 'Driver', 'Drivers', NULL, 'App\\Models\\Driver', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(12, 'trip_bookings', 'trip-bookings', 'Trip Booking', 'Trip Bookings', NULL, 'App\\Models\\TripBooking', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-09-15 18:49:39', '2022-09-27 12:47:05'),
(13, 'trips', 'trips', 'Trip', 'Trips', NULL, 'App\\Models\\Trip', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(16, 'payments', 'payments', 'Payment', 'Payments', NULL, 'App\\Models\\Payment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2022-09-15 18:55:17', '2022-09-21 15:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `driver_name`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'ali Mohamad', '0778963254', '2022-08-10 16:09:00', '2022-09-27 12:15:24'),
(2, 'Hashem', '0779658471', '2022-09-27 20:11:15', '2022-09-27 20:11:15'),
(3, 'Ibrahim', '0774152369', '2022-09-27 20:11:33', '2022-09-27 20:11:33'),
(4, 'Khaled', '0795874125', '2022-09-27 20:11:47', '2022-09-27 20:11:47'),
(5, 'Omar', '0799521123', '2022-09-27 20:12:05', '2022-09-27 20:12:05'),
(6, 'Abdulrahman', '0786584789', '2022-09-27 20:12:24', '2022-09-27 20:12:24'),
(7, 'Yousef', '0779325147', '2022-09-27 20:13:15', '2022-09-27 20:13:15'),
(8, 'Hassan', '0777251489', '2022-09-27 20:13:29', '2022-09-27 20:13:29'),
(9, 'Hamza', '0785213695', '2022-09-27 20:13:57', '2022-09-27 20:13:57'),
(10, 'Ayman', '0777254159', '2022-09-27 20:14:21', '2022-09-27 20:14:21'),
(11, 'Jamal', '0799362584', '2022-09-27 20:14:39', '2022-09-27 20:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-dashboard', '#000000', NULL, 1, '2022-09-15 17:04:08', '2022-09-20 19:56:24', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 21, 4, '2022-09-15 17:04:08', '2022-09-18 15:28:29', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2022-09-15 17:04:08', '2022-09-15 17:04:08', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2022-09-15 17:04:08', '2022-09-15 17:04:08', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 10, '2022-09-15 17:04:08', '2022-09-18 15:30:13', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2022-09-15 17:04:08', '2022-09-18 12:24:28', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2022-09-15 17:04:08', '2022-09-18 12:24:28', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2022-09-15 17:04:08', '2022-09-18 12:24:28', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2022-09-15 17:04:08', '2022-09-18 12:24:28', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 11, '2022-09-15 17:04:08', '2022-09-18 15:30:13', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, 21, 2, '2022-09-15 17:04:08', '2022-09-18 15:27:55', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, 21, 3, '2022-09-15 17:04:08', '2022-09-18 15:28:19', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, 21, 1, '2022-09-15 17:04:08', '2022-09-18 15:27:31', 'voyager.pages.index', NULL),
(14, 1, 'Cities', '', '_self', 'voyager-company', '#000000', NULL, 6, '2022-09-15 18:22:30', '2022-09-18 15:31:31', 'voyager.cities.index', 'null'),
(16, 1, 'Buses', '', '_self', 'voyager-truck', '#000000', NULL, 5, '2022-09-15 18:47:32', '2022-09-18 15:31:13', 'voyager.buses.index', 'null'),
(17, 1, 'Drivers', '', '_self', 'voyager-people', '#000000', NULL, 4, '2022-09-15 18:48:10', '2022-09-18 15:31:58', 'voyager.drivers.index', 'null'),
(18, 1, 'Trip Bookings', '', '_self', 'voyager-ticket', '#000000', NULL, 8, '2022-09-15 18:49:39', '2022-09-18 15:33:36', 'voyager.trip-bookings.index', 'null'),
(19, 1, 'Trips', '', '_self', 'voyager-calendar', '#000000', NULL, 7, '2022-09-15 18:51:16', '2022-09-18 15:32:40', 'voyager.trips.index', 'null'),
(20, 1, 'Payments', '', '_self', 'voyager-credit-cards', '#000000', NULL, 9, '2022-09-15 18:55:17', '2022-09-18 15:33:49', 'voyager.payments.index', 'null'),
(21, 1, 'Additional Menus', '', '_self', 'voyager-list-add', '#000000', NULL, 12, '2022-09-18 15:26:29', '2022-09-18 15:28:29', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_08_10_180841_create_cities_table', 1),
(6, '2022_08_10_180903_create_drivers_table', 1),
(7, '2022_08_10_180913_create_buses_table', 1),
(8, '2022_08_10_180932_create_trips_table', 1),
(9, '2022_08_10_180946_create_trip_bookings_table', 1),
(10, '2022_08_23_200248_create_payments_table', 1),
(11, '2016_01_01_000000_add_voyager_user_fields', 2),
(12, '2016_01_01_000000_create_data_types_table', 2),
(13, '2016_05_19_173453_create_menu_table', 2),
(14, '2016_10_21_190000_create_roles_table', 2),
(15, '2016_10_21_190000_create_settings_table', 2),
(16, '2016_11_30_135954_create_permission_table', 2),
(17, '2016_11_30_141208_create_permission_role_table', 2),
(18, '2016_12_26_201236_data_types__add__server_side', 2),
(19, '2017_01_13_000000_add_route_to_menu_items_table', 2),
(20, '2017_01_14_005015_create_translations_table', 2),
(21, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 2),
(22, '2017_03_06_000000_add_controller_to_data_types_table', 2),
(23, '2017_04_21_000000_add_order_to_data_rows_table', 2),
(24, '2017_07_05_210000_add_policyname_to_data_types_table', 2),
(25, '2017_08_05_000000_add_group_to_settings_table', 2),
(26, '2017_11_26_013050_add_user_role_relationship', 2),
(27, '2017_11_26_015000_create_user_roles_table', 2),
(28, '2018_03_11_000000_add_user_settings', 2),
(29, '2018_03_14_000000_add_details_to_data_types_table', 2),
(30, '2018_03_16_000000_make_settings_value_nullable', 2),
(31, '2016_01_01_000000_create_pages_table', 3),
(32, '2016_01_01_000000_create_posts_table', 3),
(33, '2016_02_15_204651_create_categories_table', 3),
(34, '2017_04_11_000000_alter_post_nullable_fields_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trip_bookings_id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `total_price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `trip_bookings_id`, `person_name`, `card_num`, `expiry`, `cvv`, `total_price`, `created_at`, `updated_at`) VALUES
(71, 2, 272, 'Duaa ibrahim', '1234569854741589', '2022-09-30', 123, 1, '2022-09-27 13:19:38', '2022-09-27 13:19:38'),
(72, 2, 276, 'Duaa ibrahim', '1234569854741589', '2022-09-30', 125, 1, '2022-09-27 13:30:45', '2022-09-27 13:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, 'browse_bread', NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(3, 'browse_database', NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(4, 'browse_media', NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(5, 'browse_compass', NULL, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(6, 'browse_menus', 'menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(7, 'read_menus', 'menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(8, 'edit_menus', 'menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(9, 'add_menus', 'menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(10, 'delete_menus', 'menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(11, 'browse_roles', 'roles', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(12, 'read_roles', 'roles', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(13, 'edit_roles', 'roles', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(14, 'add_roles', 'roles', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(15, 'delete_roles', 'roles', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(16, 'browse_users', 'users', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(17, 'read_users', 'users', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(18, 'edit_users', 'users', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(19, 'add_users', 'users', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(20, 'delete_users', 'users', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(21, 'browse_settings', 'settings', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(22, 'read_settings', 'settings', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(23, 'edit_settings', 'settings', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(24, 'add_settings', 'settings', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(25, 'delete_settings', 'settings', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(26, 'browse_categories', 'categories', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(27, 'read_categories', 'categories', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(28, 'edit_categories', 'categories', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(29, 'add_categories', 'categories', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(30, 'delete_categories', 'categories', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(31, 'browse_posts', 'posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(32, 'read_posts', 'posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(33, 'edit_posts', 'posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(34, 'add_posts', 'posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(35, 'delete_posts', 'posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(36, 'browse_pages', 'pages', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(37, 'read_pages', 'pages', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(38, 'edit_pages', 'pages', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(39, 'add_pages', 'pages', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(40, 'delete_pages', 'pages', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(41, 'browse_cities', 'cities', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(42, 'read_cities', 'cities', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(43, 'edit_cities', 'cities', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(44, 'add_cities', 'cities', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(45, 'delete_cities', 'cities', '2022-09-15 18:22:30', '2022-09-15 18:22:30'),
(46, 'browse_buses', 'buses', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(47, 'read_buses', 'buses', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(48, 'edit_buses', 'buses', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(49, 'add_buses', 'buses', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(50, 'delete_buses', 'buses', '2022-09-15 18:28:58', '2022-09-15 18:28:58'),
(51, 'browse_drivers', 'drivers', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(52, 'read_drivers', 'drivers', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(53, 'edit_drivers', 'drivers', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(54, 'add_drivers', 'drivers', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(55, 'delete_drivers', 'drivers', '2022-09-15 18:48:10', '2022-09-15 18:48:10'),
(56, 'browse_trip_bookings', 'trip_bookings', '2022-09-15 18:49:39', '2022-09-15 18:49:39'),
(57, 'read_trip_bookings', 'trip_bookings', '2022-09-15 18:49:39', '2022-09-15 18:49:39'),
(58, 'edit_trip_bookings', 'trip_bookings', '2022-09-15 18:49:39', '2022-09-15 18:49:39'),
(59, 'add_trip_bookings', 'trip_bookings', '2022-09-15 18:49:39', '2022-09-15 18:49:39'),
(60, 'delete_trip_bookings', 'trip_bookings', '2022-09-15 18:49:39', '2022-09-15 18:49:39'),
(61, 'browse_trips', 'trips', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(62, 'read_trips', 'trips', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(63, 'edit_trips', 'trips', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(64, 'add_trips', 'trips', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(65, 'delete_trips', 'trips', '2022-09-15 18:51:16', '2022-09-15 18:51:16'),
(66, 'browse_payments', 'payments', '2022-09-15 18:55:17', '2022-09-15 18:55:17'),
(67, 'read_payments', 'payments', '2022-09-15 18:55:17', '2022-09-15 18:55:17'),
(68, 'edit_payments', 'payments', '2022-09-15 18:55:17', '2022-09-15 18:55:17'),
(69, 'add_payments', 'payments', '2022-09-15 18:55:17', '2022-09-15 18:55:17'),
(70, 'delete_payments', 'payments', '2022-09-15 18:55:17', '2022-09-15 18:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, 'user', 'Normal User', '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings\\September2022\\skabVRgElmDyMqm7aMD6.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Bus Station', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Laravel Voyager. Admin for Bus Station', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', 'settings\\September2022\\0AUPFb25kVD7YDVJ6IG5.png', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings\\September2022\\dxy5p8hkmFshELlZnlvV.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2022-09-15 17:04:08', '2022-09-15 17:04:08'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2022-09-15 17:04:08', '2022-09-15 17:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `price` double NOT NULL DEFAULT 1,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `from_id`, `to_id`, `driver_id`, `bus_id`, `date`, `time`, `price`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 11, 4, '2022-09-29', '06:00:00', 7, 'Zahran Street --> Fourth Circle --> Airport Street --> Zizia --> Dhabaa --> Swagah --> Alqutraneh --> Alsultani --> Alabiadh --> Alhasa --> Aljurf --> Alhusainiah  --> Alhashimiah --> Maan --> Almuraighah --> Ras Alnaqab --> Alquairah --> Customs Zone', '2022-08-10 16:11:59', '2022-08-10 16:11:59'),
(2, 1, 2, 10, 5, '2022-10-02', '08:00:00', 2, 'Zahran Street --> Wadi Alseer --> Medical City Circle --> Swaileh --> Aen Albasha --> Albaqaa --> Jerash Street --> Alhusun  ', '2022-08-10 18:04:42', '2022-08-10 18:04:42'),
(3, 3, 1, 11, 4, '2022-10-02', '19:00:00', 7, 'Customs Zone --> Alquairah --> Ras Alnaqab --> Almuraighah --> Maan --> Alhashimiah --> Alhusainiah --> Aljurf --> Alhasa --> Alabiadh --> Alsultani --> Alqutraneh --> Swagah --> Dhabaa --> Zizia --> Airport Street --> Fourth Circle --> Zahran Street     ', '2022-08-10 16:11:59', '2022-08-10 16:11:59'),
(4, 3, 5, 9, 1, '2022-10-02', '07:30:00', 3, 'Customs Zone --> Alquairah --> Ras Alnaqab --> Almuraighah --> Maan --> Alhashimiah -->Almuhammadiah --> Alhusainiah --> Alqadisiah --> Aen Albidaa ', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(5, 2, 1, 8, 6, '2022-10-12', '12:00:00', 3, 'Alhusun --> Jerash Street --> Albaqaa --> Aen Albasha --> Swaileh --> Medical City Circle --> Wadi Alseer --> Zahran Street        ', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(6, 6, 3, 5, 2, '2022-10-12', '10:00:00', 2, 'Customs Zone --> Alquairah --> Ras Alnaqab --> Almuraighah', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(7, 3, 6, 4, 3, '2022-10-10', '13:00:00', 2, 'Almuraighah --> Ras Alnaqab --> Alquairah --> Customs Zone   ', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(8, 5, 3, 6, 9, '2022-10-10', '09:00:00', 2, 'Aen Albidaa -->  Alqadisiah --> Alhusainiah --> Almuhammadiah --> Alhashimiah -->Maan --> Almuraighah --> Ras Alnaqab --> Alquairah --> Customs Zone           ', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(9, 5, 5, 7, 7, '2022-10-12', '07:30:00', 1.5, 'Alais --> Abu Banna --> Alaenah --> Efra Triangle ', '2022-08-17 16:11:59', '2022-08-17 16:11:59'),
(10, 4, 5, 8, 8, '2022-10-14', '14:00:00', 1.5, 'Efra Triangle --> Alaenah --> Abu Banna --> Alais    ', '2022-08-17 16:11:59', '2022-08-17 16:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `trip_bookings`
--

CREATE TABLE `trip_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `num_of_seats` int(50) NOT NULL,
  `total_cost` double NOT NULL,
  `is_payment` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trip_bookings`
--

INSERT INTO `trip_bookings` (`id`, `trip_id`, `user_id`, `num_of_seats`, `total_cost`, `is_payment`, `created_at`, `updated_at`) VALUES
(264, 1, 2, 1, 1, 0, '2022-09-27 12:49:38', '2022-09-27 12:49:38'),
(265, 1, 2, 1, 1, 0, '2022-09-27 12:56:39', '2022-09-27 12:56:39'),
(266, 1, 2, 1, 1, 0, '2022-09-27 12:57:49', '2022-09-27 12:57:49'),
(267, 1, 2, 1, 1, 0, '2022-09-27 12:59:14', '2022-09-27 12:59:14'),
(268, 1, 2, 1, 1, 0, '2022-09-27 12:59:48', '2022-09-27 12:59:48'),
(269, 1, 2, 1, 1, 0, '2022-09-27 13:01:51', '2022-09-27 13:01:51'),
(270, 1, 2, 1, 1, 0, '2022-09-27 13:14:54', '2022-09-27 13:14:54'),
(271, 1, 2, 1, 1, 0, '2022-09-27 13:16:40', '2022-09-27 13:16:40'),
(272, 1, 2, 1, 1, 1, '2022-09-27 13:19:02', '2022-09-27 13:19:02'),
(273, 1, 2, 1, 1, 0, '2022-09-27 13:24:42', '2022-09-27 13:24:42'),
(274, 1, 2, 1, 1, 0, '2022-09-27 13:27:22', '2022-09-27 13:27:22'),
(275, 1, 2, 1, 1, 0, '2022-09-27 13:29:03', '2022-09-27 13:29:03'),
(276, 1, 2, 1, 1, 1, '2022-09-27 13:30:26', '2022-09-27 13:30:26'),
(277, 1, 2, 1, 1, 0, '2022-09-27 13:30:51', '2022-09-27 13:30:51'),
(278, 2, 7, 1, 2, 0, '2022-09-27 21:41:40', '2022-09-27 21:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `phone`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users\\September2022\\Cx6RAFqsabUAGhCTPPcQ.png', NULL, '$2y$10$ht3ciNwURcM0shN.90Ym1uFNlMwEL798vTWGTxXZX9HM41Q65LI2u', 'null', 'A495kwMh5mqDUdTkCZM3le3Zk8tRptAXFQmuT8Evck5XWJ237po0AYyNn0Qq', '{\"locale\":\"en\"}', '2022-09-15 17:04:08', '2022-09-15 17:29:06'),
(2, NULL, 'Duaa Alsafasfeh', 'Duaa@gmail.com', 'users/default.png', NULL, '$2y$10$7kGUsNpApnnyDhWntaUlzOvaXQCIcx174ccK2J8GaUhYA5WQtMzdm', '0779658471', 'j03wHWhHbYsgavwOqpc8pacssqCNCJQMO09AORS1JyrNvFhvwTPwKFXdHBBz', NULL, '2022-08-10 12:38:34', '2022-08-23 10:49:06'),
(3, NULL, 'Tamara Alshabatat', 'tamara@gmail.com', 'users/default.png', NULL, '$2y$10$nSdnUxaJZKeEIE31714GZen2Rl7KRGefmsxK06Qb5Khm5WFbc9u4W', '0778965412', NULL, NULL, '2022-08-11 00:44:11', '2022-08-11 00:44:11'),
(4, NULL, 'majd albalawneh', 'majd@gmail.com', 'users/default.png', NULL, '$2y$10$LtvXuP7xtrAR5lA9fMFhSOkmd8a2kT2h3xW8lPVFKUiLov0eCP7Ge', '0778693514', NULL, NULL, '2022-08-11 00:47:24', '2022-08-11 00:47:24'),
(5, NULL, 'anas allawfeh', 'anas@gmail.com', 'users/default.png', NULL, '$2y$10$5dSxznyr72U9ub3VNql0kuWTs5B5TP9F1THjVBM0FYc/hZNfe5ppe', '0777852147', NULL, NULL, '2022-09-05 21:54:01', '2022-09-05 21:58:20'),
(6, 2, 'aya alsawa', 'aya@gmail.com', 'users/default.png', NULL, '$2y$10$1b59MKP10ncQvtNlri9i2uluFSAT/o.71rcuu.aY/nanCeSxlQmJy', '0786958471', NULL, '{\"locale\":\"en\"}', '2022-09-06 01:10:14', '2022-09-18 15:41:26'),
(7, 2, 'afnan khaled', 'afnan.khaled77@gmail.com', 'users/default.png', NULL, '$2y$10$oaIZ8HC3uEOwHsIzXWwUge38poAMqP17Qivs8Q4PwJmwHp7NbTa12', '0775896587', NULL, NULL, '2022-09-27 21:39:35', '2022-09-27 21:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drivers_phone_number_unique` (`phone_number`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `trip_bookings_id` (`trip_bookings_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_from_id_foreign` (`from_id`),
  ADD KEY `trips_to_id_foreign` (`to_id`),
  ADD KEY `trips_driver_id_foreign` (`driver_id`),
  ADD KEY `trips_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `trip_bookings`
--
ALTER TABLE `trip_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trip_bookings_trip_id_foreign` (`trip_id`),
  ADD KEY `trip_bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trip_bookings`
--
ALTER TABLE `trip_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`trip_bookings_id`) REFERENCES `trip_bookings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_from_id_foreign` FOREIGN KEY (`from_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trips_to_id_foreign` FOREIGN KEY (`to_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trip_bookings`
--
ALTER TABLE `trip_bookings`
  ADD CONSTRAINT `trip_bookings_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trip_bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
