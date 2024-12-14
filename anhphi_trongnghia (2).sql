-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 01:53 PM
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
-- Database: `anhphi_trongnghia`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay', 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính', 'lamdep1.png', 'Trị Mụn', '', '2023-07-16 14:08:22', NULL),
(2, 3, 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa', 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp', 'lamdep2.png', 'Trắng Da', '', '2023-07-15 14:08:31', NULL),
(3, 3, 'Top 10 Kem Chống Nắng Cao Cấp Nhất', 'Sử dụng kem chống nắng có thể giúp bảo vệ cho làn da của bạn trước tác động từ tia UV. Trong thời gian từ 9h', 'lamdep3.png', 'Trị Mụn', '', '2023-07-04 14:08:35', NULL),
(4, 3, 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay', 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính', 'lamdep1.png', 'Trị Mụn', '', '2023-07-12 14:08:39', NULL),
(5, 3, 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa', 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp', 'lamdep2.png', 'Trắng Da', '', '2023-07-02 14:08:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'ANESSA', NULL, NULL),
(2, 'LAROCHE-POSAY', NULL, NULL),
(3, 'CERAVE', NULL, NULL),
(4, 'SVR', NULL, NULL);

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
-- Table structure for table `importinvoices`
--

CREATE TABLE `importinvoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `importinvoices_total` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `importinvoices`
--

INSERT INTO `importinvoices` (`id`, `supplier_id`, `importinvoices_total`, `created_at`, `updated_at`) VALUES
(1, 1, 12500000, '2023-07-08 13:27:27', '2023-07-08 13:28:24'),
(2, 2, 25000000, '2023-07-08 13:28:33', '2023-07-08 13:29:16'),
(3, 1, 7000000, '2023-07-08 13:29:26', '2023-07-08 13:29:53'),
(4, 1, 39600000, '2023-07-08 13:38:01', '2023-07-09 15:19:19'),
(5, 2, 1500000, '2023-07-09 15:42:07', '2023-07-09 16:45:19'),
(6, 1, 1500000, '2023-07-09 15:43:12', '2023-07-10 13:21:28'),
(7, 1, 1530000, '2023-07-10 13:22:26', '2023-07-10 14:19:26'),
(8, 2, 600000, '2023-07-10 15:28:25', '2023-07-10 15:28:57'),
(9, 1, NULL, '2023-07-10 15:30:45', '2023-07-10 15:30:45'),
(10, 1, 1800000, '2023-07-13 15:18:00', '2023-07-13 15:18:34'),
(12, 1, 1200000, '2023-07-16 15:11:17', '2023-07-16 15:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `importinvoice_details`
--

CREATE TABLE `importinvoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `importinvoices_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `importinvoices_price` double NOT NULL,
  `importinvoices_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `importinvoice_details`
--

INSERT INTO `importinvoice_details` (`id`, `importinvoices_id`, `product_id`, `importinvoices_price`, `importinvoices_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 100000, 50, '2023-07-08 13:27:55', '2023-07-08 13:27:55'),
(2, 1, 2, 150000, 50, '2023-07-08 13:28:17', '2023-07-08 13:28:17'),
(3, 2, 4, 200000, 50, '2023-07-08 13:28:52', '2023-07-08 13:28:52'),
(4, 2, 6, 300000, 50, '2023-07-08 13:29:05', '2023-07-08 13:29:05'),
(5, 3, 16, 100000, 50, '2023-07-08 13:29:40', '2023-07-08 13:29:40'),
(6, 3, 18, 50000, 40, '2023-07-08 13:29:51', '2023-07-08 13:29:51'),
(7, 4, 1, 200000, 50, '2023-07-08 13:41:54', '2023-07-08 13:41:54'),
(8, 4, 4, 500000, 50, '2023-07-08 13:42:09', '2023-07-08 13:42:09'),
(9, 4, 18, 200000, 20, '2023-07-08 13:42:26', '2023-07-08 13:42:26'),
(10, 4, 2, 30000, 20, '2023-07-09 15:10:28', '2023-07-09 15:10:28'),
(11, 5, 1, 30000, 20, '2023-07-09 15:42:18', '2023-07-09 15:42:18'),
(12, 5, 2, 30000, 30, '2023-07-09 15:42:34', '2023-07-09 15:42:34'),
(13, 6, 1, 30000, 30, '2023-07-09 15:43:27', '2023-07-09 15:43:27'),
(14, 6, 2, 30000, 20, '2023-07-10 13:20:04', '2023-07-10 13:20:04'),
(15, 7, 1, 30000, 50, '2023-07-10 13:22:43', '2023-07-10 13:22:43'),
(16, 7, 1, 30000, 1, '2023-07-10 14:19:25', '2023-07-10 14:19:25'),
(17, 8, 3, 30000, 20, '2023-07-10 15:28:51', '2023-07-10 15:28:51'),
(18, 10, 2, 30000, 30, '2023-07-13 15:18:15', '2023-07-13 15:18:15'),
(19, 10, 2, 30000, 30, '2023-07-13 15:18:23', '2023-07-13 15:18:23'),
(20, 11, 25, 30000, 20, '2023-07-13 15:24:49', '2023-07-13 15:24:49'),
(21, 12, 1, 30000, 20, '2023-07-16 15:11:38', '2023-07-16 15:11:38'),
(22, 12, 2, 30000, 20, '2023-07-16 15:11:57', '2023-07-16 15:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `madeins`
--

CREATE TABLE `madeins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `madeins`
--

INSERT INTO `madeins` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pháp', NULL, NULL),
(2, 'Mỹ', NULL, NULL),
(3, 'Anh', NULL, NULL);

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
(4, '2023_05_14_125648_create_orders_table', 1),
(5, '2023_05_14_130318_create_products_table', 1),
(6, '2023_05_14_130345_create_brands_table', 1),
(7, '2023_05_14_130406_create_product_categories_table', 1),
(8, '2023_05_14_130423_create_product_images_table', 1),
(9, '2023_05_14_130505_create_product_details_table', 1),
(10, '2023_05_14_130532_create_product_comments_table', 1),
(11, '2023_05_14_130607_create_blogs_table', 1),
(12, '2023_05_14_130632_create_blog_comments_table', 1),
(13, '2023_05_14_131935_create_order_details_table', 1),
(14, '2023_06_29_140657_create_madeins_table', 1),
(15, '2023_07_04_203120_create_suppliers_table', 1),
(16, '2023_07_04_210948_create_importinvoice_details_table', 1),
(17, '2023_07_04_211004_create_importinvoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` mediumtext NOT NULL,
  `street_address` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `phone` mediumtext NOT NULL,
  `total_orders` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `street_address`, `email`, `phone`, `total_orders`, `description`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, NULL, 'pay_later', 0, '2023-07-08 07:33:22', '2023-07-16 13:25:14'),
(2, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 260000, NULL, 'pay_later', 1, '2023-07-08 07:41:53', '2023-07-08 07:41:53'),
(3, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 170000, NULL, 'pay_later', 4, '2023-07-08 07:42:42', '2023-07-16 13:30:40'),
(4, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, NULL, 'online_payment', 0, '2023-07-08 08:22:44', '2023-07-08 13:09:33'),
(5, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, NULL, 'online_payment', 5, '2023-07-08 08:23:01', '2023-07-08 13:09:51'),
(6, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, NULL, 'online_payment', 0, '2023-07-08 08:23:24', '2023-07-09 14:10:15'),
(7, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, 'test', 'online_payment', 0, '2023-07-08 08:23:34', '2023-07-10 14:08:56'),
(9, 3, 'Phi Nguyễn', 'Nhơn Trạch', 'nguyenanhphi1805@gmail.com', '0799646477', 345000, 'test', 'pay_later', 6, '2023-07-08 09:22:34', '2023-07-10 13:50:51'),
(10, 1, 'AnhPhi', 'Nhon Trach district', 'anhphi@gmail.com', '036363636', 235000, 'test', 'pay_later', 1, '2023-07-09 13:40:09', '2023-07-09 13:40:09'),
(11, 1, 'AnhPhi', 'Nhon Trach district', 'anhphi@gmail.com', '036363636', 180000, 'qwewqwqwq', 'pay_later', 4, '2023-07-10 13:41:57', '2023-07-12 14:16:09'),
(12, 1, 'AnhPhi', 'Nhon Trach district', 'anhphi@gmail.com', '036363636', 180000, 'qwewqwqwq', 'pay_later', 6, '2023-07-10 13:43:46', '2023-07-10 14:18:02'),
(13, NULL, 'Nguyễn Trọng Nghĩa', 'Tạp Hóa Nguyệt Anh - Ấp 9', 'thang@gmail.com', '0363897327', 900000, 'tesst 3', 'pay_later', 2, '2023-07-13 13:29:48', '2023-07-13 13:36:38'),
(14, 5, 'Nguyễn Trọng Nghĩa 1', 'Tạp Hóa Nguyệt Anh - Ấp 9', '0306201157@caothang.edu.vn', '0363897327', 360000, 'test 2', 'online_payment', 5, '2023-07-13 14:43:54', '2023-07-13 15:17:44'),
(15, 3, 'Phi Nguyễn', 'Nhon Trach district', 'nguyenanhphi1805@gmail.com', '036363636', 275000, 'tesst 3', 'online_payment', 3, '2023-07-16 14:45:19', '2023-07-16 15:09:35'),
(16, 1, 'eyJpdiI6IlFxWkpXRnJWZ1JBOTF1Qm1CTk1GN1E9PSIsInZhbHVlIjoiQnNSdlZiODhpOWpzbUxwSnhiYkV0dz09IiwibWFjIjoiOTc3NWZmZjM5MDg4OGMwNzUwNDA3NmQ4ZjBkNzA5MzIwOTRhMWZmZmUxZjk5YWQyZDE0MDkyNmU1Y2NmNmQ1NSIsInRhZyI6IiJ9', 'eyJpdiI6IldkQ0hSVGprTXQrYlFDemNqTjZNWVE9PSIsInZhbHVlIjoiam9abnFGWjNVa1J0OHNtSlFVdEViUEFsRElMcnNyRUtnTnZrQ05nWUNYOD0iLCJtYWMiOiJjZDQ1ODM3OGJhMWEwNWIyMDgyMDlkNTJiNDc5YTIxNjA3NDUyYjdkNzM3MWUyYTc1MTI4YjFlYjUwNTQxMTcyIiwidGFnIjoiIn0=', 'eyJpdiI6Ijh5YVQ0Sk9lSG9weUFENE04S2Y0Zmc9PSIsInZhbHVlIjoiWnoxUmp4Y2s3NkhoQ00yTkdEMVlQSjVCN1pIa2VuVkhBRmZrMnQ3K1Qvbz0iLCJtYWMiOiJhYWM5YzEyMzY2MmJhMGJjN2I0ODRiZjQxMzFiYjMxYzRhMTY3OThjNjAzOTcwZDUzNzFiOWMyZTc0YzIwNGVkIiwidGFnIjoiIn0=', 'eyJpdiI6IlhBQklSeHNMeHlVZnRnR3NKaVZva3c9PSIsInZhbHVlIjoiOE9NTnRvdDBodDZUZzFRVDNqcFZzeG91ZnBEYUlJN0VRZTlNY3d3SU9QVT0iLCJtYWMiOiI3OTgwNzEyOWNkMjJkYmJiOGYyNTY3MDljMDJkMWM1ZjBhMWM4YzE2ZWZkNjJhNTJlYzAxOWYxMDRmYjcwYTJhIiwidGFnIjoiIn0=', NULL, 'dsasadasđsad', 'pay_later', 1, '2024-12-10 15:40:04', '2024-12-10 15:40:04'),
(17, 1, 'eyJpdiI6IlpyWDFLaTBVL0t5OUFQUzRoMWZWMUE9PSIsInZhbHVlIjoiTnZUOXFhZ1lKeXV6ZmcyV1JhMnFxZz09IiwibWFjIjoiMDU2NWVkMmRjYWQ2NmU3NWViYTY0ODc3OWMyNDc3YjM0ZDgzODdmNDA2OGM1Njg3MDhiYWQ1NDcyZDg3NGNhNyIsInRhZyI6IiJ9', 'eyJpdiI6IlhFK0twazVFOUgyQTdwalk2cm54MUE9PSIsInZhbHVlIjoiN1dISG9tUk9lSk9JaW1wZWg0UHV2L0lTTlBnZ1pHK2ltUER5TDZxaTNCOD0iLCJtYWMiOiJhZTBiYzRiYmNkMDczYTE5YTU1ZDEyNzgxM2U4MjAwZjIyY2YzNTI5MDNkNTE4Yjg0YjYyOGU1NDNjYmU4YWQ2IiwidGFnIjoiIn0=', 'eyJpdiI6IkorSFNML3JQNGJiNlpIcFExQStrTUE9PSIsInZhbHVlIjoiNlEwa2hYTE50M3o0VWxQTXVRSVRwZ2JycWNDNy9Xa1lkQllFL2RsUGFVQT0iLCJtYWMiOiJiZTU3YTIwMTQzMGU4YmFkZDRlMjc5Y2I4MjUzY2U0ZmEzZDA3MTRkNzc2OTM5ZTJkODBmMjIxMzg2NzIzMGU1IiwidGFnIjoiIn0=', 'eyJpdiI6ImlhL3NQTmhFcjA1NnBpcFdOVmZIOHc9PSIsInZhbHVlIjoiUHI0Mis2Q05UdmYxNjh2bEhQVjRGdHduZ0tlam9PSWhFLzFHZjB6bnBEbz0iLCJtYWMiOiJjODZkY2Y5YmM2ZWMwZGIwYmRiNmE4NTFjOWMxZmM3ODViY2ZiZDcyNzMwYmYwZGE1Nzg4ZTNiODY5ZmM5NDgxIiwidGFnIjoiIn0=', 1585000, 'dsasadasđsad', 'pay_later', 1, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(18, 1, 'AnhPhi', 'Nhon Trach district', 'anhphi@gmail.com', '036363636', 1585000, 'dsasadasđsad', 'pay_later', 1, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(19, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'assasd', 'pay_later', 1, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(20, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'asdssa', 'pay_later', 1, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(21, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'asdssaasd', 'pay_later', 1, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(22, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'asdssaasd', 'pay_later', 1, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(23, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'âsdsasa', 'pay_later', 1, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(24, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'asds', 'pay_later', 1, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(25, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 1585000, 'dsasadasđsad', 'pay_later', 1, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(26, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', NULL, 'saddasas', 'pay_later', 1, '2024-12-10 16:23:38', '2024-12-10 16:23:38'),
(27, 9, 'eyJpdiI6IkVZSWF1cE9sRmYzRHNIdVJoSFZTK3c9PSIsInZhbHVlIjoicFRxaEdJc04yNm5CUkZSckxWNkVXZz09IiwibWFjIjoiOWJkNzkxYTRjODM2YmEwMDI1ZmYyMzAzYzA2OTA0MWVkZDNiMTcyMTBiN2NkYzMyOWU1MmMyYzE1ZWYzYWUxOCIsInRhZyI6IiJ9', 'eyJpdiI6IkdVRHRnZWV4RVRlMHhMTjVDclpza1E9PSIsInZhbHVlIjoibkpsZ3lLQXRtUnF0QnZ4eGc0aTR2M1JZMHpOeXMvMmlZRTVkSUhRTlNMRT0iLCJtYWMiOiI5YjMyMjhkOGE5MDk2NmRmZWI4ZDY0ZTQwNTdmYzA4MjYwNjM2ZTliMmZmMzNmMWM1ZGI1OGYwNWQxNTM5ZGJkIiwidGFnIjoiIn0=', 'eyJpdiI6IlRsZ3JCV3Rtb0VNbGE0YU9RVVk2U2c9PSIsInZhbHVlIjoiTHdzMnBKSVhab1ZwQzgvNmtiWU1oUzBsZDN1VHA3amVqT0IwbS9DUHptazZrQ3diWkdweEdYelRvaW1WTkFFViIsIm1hYyI6ImRhYjUyZDcxMTA2MGE3ODE0YTEzYjYwMWJkOWJlMGJiOWI1YmUzOGNmZDRkNDNlMDgyZGQyNTg0MDVmYmMxODciLCJ0YWciOiIifQ==', 'eyJpdiI6IjVHUk1pb1Z3eEltc3p0ZXZ5UURnREE9PSIsInZhbHVlIjoibzlXa2JYaEMxT0FCNWlxVjgzNEptbFA2QTlJT2F1TlhjdUpSd1B5R0Mrbz0iLCJtYWMiOiI5NzEyNTFjZWM1MGFkYmI5ZTM1NWUxNmI4ZWJmMjVmNzliYjNiMzAxMzA5MzJjOWJlYTVlMzBlYzQ3NmJmMmI1IiwidGFnIjoiIn0=', 640000, 'eyJpdiI6InFPQlpaaEZVZHQ3Z2lxT2ZvdVBWamc9PSIsInZhbHVlIjoibGJvVUZ1dFYvOS9SK0gvV3hrVG1mUT09IiwibWFjIjoiMmI1ZWZjYWQ3ODAwZTY4MWNkNWEwZDk2NjVkNWIyMmRkMjI2ODNjNmNlYjhkOTQ1MzZiNWZlMmU5YjkzMDljMCIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:33:46', '2024-12-10 16:33:49'),
(28, 9, 'eyJpdiI6IkRMcmV6VTg5MElrK3YwNStGckltYUE9PSIsInZhbHVlIjoiT1A1emU0dVYvamFZdDBLQ3o1eCtUQT09IiwibWFjIjoiYzhhOWI1Nzc4NTE4ZjFiZDhiMTY4OGE0MjYwZmY0OTBmNTYzMDAyNTE1YjM2NWE2MGU0NGE2MDZkNjJjMWE4MyIsInRhZyI6IiJ9', 'eyJpdiI6IlhwRFJ3RXdEaUltVHE2cTRBRFpiZXc9PSIsInZhbHVlIjoiSTFSUVpHT0pwdVY1SFpubW55OXhhVU81ZVBvNUpsdHZPTWVsV0xETndpdz0iLCJtYWMiOiI3OGVlYmFjZTcxODQ0MWM3NjYyMDdhYjc1YmJhZjU3Y2U3Y2I2MzlkNWZkNmJjMmVkZjcyYWI2YWFiZjBhNGE1IiwidGFnIjoiIn0=', 'eyJpdiI6Iks4N3phcDZ4aFBmZnVuanlWa0hON0E9PSIsInZhbHVlIjoiTDE0clZaL2Y0ZkE4dHZmV2UreHoyR1o4Z1pBdFIwSFlvWlhFbjVXeTBNTHNiQ3ZLWDZKTWlxYzNrYUNBV2dJeCIsIm1hYyI6ImY2NDk0NDQ2YzZhOTJiY2IwMjNkZDEwYWRjM2RhYjE1ZDk1MDU2ODk5MWI4Y2I1NWU1M2YxNGYwYjE5YzkzNTUiLCJ0YWciOiIifQ==', 'eyJpdiI6IjZQbmRtN0owUXhKQncydVNWMjFITlE9PSIsInZhbHVlIjoiMGZ1THN1SXZEaUJOUFdkM2ZvY3ZrY3Vsb0hMdlVpYThkRzhyNlpoTWdEVT0iLCJtYWMiOiJkZjJjMDM4NTNlMzJkMTBkYzA2NDBjYmQzZTRiYmYxNDlmYThjMDg3NDFjNWE5NGMwNmNmNzI2ZGQwZWViNGMyIiwidGFnIjoiIn0=', 0, 'eyJpdiI6IkVPMlEvNGdIQWVVK2g5Ni9nVmtNa1E9PSIsInZhbHVlIjoicEpSYnNON0ZFMlRxSW9mVVRYcVFtQT09IiwibWFjIjoiNzgyMTM2NzM1ZmJlY2IwNTdkOGM0ZjY0YjU4NDQzODA4MmY2MTRhOThlNjA1Y2Y4NzU5YWM1ODMxM2I0NTY1MiIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:33:52', '2024-12-10 16:33:55'),
(29, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 900000, 'asdadssasadsss', 'pay_later', 1, '2024-12-10 16:37:04', '2024-12-10 16:37:07'),
(30, 9, 'Test', 'Nhon Trach district', '0306201157@caothang.edu.vn', '0363897327', 900000, 'sadasdsa', 'pay_later', 1, '2024-12-10 16:42:31', '2024-12-10 16:42:34'),
(31, 9, 'eyJpdiI6ImVlcnlBSlE3bCtmTlhjWXRWTTRjR3c9PSIsInZhbHVlIjoicDBudHViTFBZKzBXQWVZZU5WSzRpQT09IiwibWFjIjoiMzZmOGYzOGMyYjdlMmMwZWQyMGNmMDBkYWU0M2JiNmRhMThkZWE5MmY0NDBmMjY1NTkwMGZhYmQ4OTA2ZWUwOCIsInRhZyI6IiJ9', 'eyJpdiI6IjJKVFB5cFBZN1B2d2tXNXA2dXd6bVE9PSIsInZhbHVlIjoiT1J2L1dYS0ZNek1WRmh2bzJTOFIvR1VEbEVCMDh2czdzaEdvdk5UYXdBYz0iLCJtYWMiOiI4NTc5ZTM3ODFjODllYTRhMjMwZTIwZTBmMGM2YTQ2N2I5YWI1MzI5NjMxNWMwODIxMzJmZjM3Y2Q3MDM2ZWNmIiwidGFnIjoiIn0=', 'eyJpdiI6IlFsNC9zVEdSbGR2UUk4NDRBa1JaR3c9PSIsInZhbHVlIjoialYxQmJwaS9iYXdkdS82TW5qc3o3RFI3eTVXUEdiU3lWYU5xRDhYMGVsbXRnSmFBRTlPY0pvOS9yZzVlTXM0aiIsIm1hYyI6IjU3Yzk3YjI5MTFiMTNjZmQ5MDcyNjNlZjQ3NjJmNzdkMDdhMDAwYzI1MDcyNTg0OTJjNjIwMTYyZjg3MjIxYjIiLCJ0YWciOiIifQ==', 'eyJpdiI6Ii9TU1Z5Y3BHcnF4Z1RpUkt2a0JWN3c9PSIsInZhbHVlIjoiYnprUlhGQmFVQ2xKb3JuUlJyVUxwNkdrSnY4UndQeGVESGhwMzFQSzlQYz0iLCJtYWMiOiI0Njk2NmUyNTkzYTU0YmUzODc3NTkzODFiNzJmNGQ2ZmU1YWRmMzNiOTczNmE0Zjk0MmM4MzJmNGI1ODM1MWEyIiwidGFnIjoiIn0=', NULL, 'eyJpdiI6Im5SYnVKSk42R29OdFBoa0tUbnliTXc9PSIsInZhbHVlIjoiWFI3OUxRa2Q5ZHhMRk5aVVFuUTF6UT09IiwibWFjIjoiOGI2YjVkNGFkODcxYzQ1YjIyZjVhNmViMzcxMDY3MWQzNDYwNDk0MDNhYzUyYmFlN2Q4Y2RlNmQ1OTA0M2FiMSIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:45:28', '2024-12-10 16:45:28'),
(32, 9, 'eyJpdiI6IjBJSGNndU95SFpIQmJEeHVxS1E1Mmc9PSIsInZhbHVlIjoiNkpZT3h6YW5aS1ZmcXV0QUdMU0xrUT09IiwibWFjIjoiZWUwMjI4ZDM5YjE3NjllZmViZGQyM2JiNTkwNWNmNTZjMTczODNiYjc5Mzc0ODBlOWFlNzhiMGFjZDEwYzg3NiIsInRhZyI6IiJ9', 'eyJpdiI6IjUwbTRMdjNrMXI3d1ptcGdRQ2pqRWc9PSIsInZhbHVlIjoiOHk4bG94aytBeERvZ3BtZGhhbHZsWTVRYnRUL2ZaSzNBWkNMYjdtOVh4MD0iLCJtYWMiOiIwM2I1ZTljZDQyODIyZWFlMTJmOTM3Njk5ODU3MzE2MTE5OTZkMzJiNTRhZWUyYzQwNGM5MWE1MjA4NjFmYjc0IiwidGFnIjoiIn0=', 'eyJpdiI6InVqK2xOUlg1RzZXVnBubXQvSm1ZUVE9PSIsInZhbHVlIjoidDJwOHZlZDJGRmoxK2tzRFA2V09MQ1FRNmpNZ0dvQlo3ckZuUCtjanJIMmY4NDhQaVZYWklOYTJqQ0pIb3BhTCIsIm1hYyI6ImNiZjJkN2UxOGViMWFhODI2NTg2MDkxMGU1YzlhYzdkYTAwZmNmMDRkZWY4YzMwYWRmZDVmNDAwMDQ4YTQ2OGYiLCJ0YWciOiIifQ==', 'eyJpdiI6Ik5YdTJSR1p3Z292RW1EV0J4Z0FFSHc9PSIsInZhbHVlIjoiTC84T210ZTdGNVJrWXdhbXhqb3Y5ckFTb2NhbXk4aHFabEZBWW9zMTJxST0iLCJtYWMiOiJkM2E3YzRkZjRkYjQxMzZjMTVmZGE2MmI4ZGUxZDk4M2FjMmU3ZGIwYmY0NDAyMjUzZTBjOTk5YThiMWNmNzU2IiwidGFnIjoiIn0=', NULL, 'eyJpdiI6Imk2dHNDMG9PZHZpZU5wRW9HSUFYSnc9PSIsInZhbHVlIjoiZTErOUp3OEZOK1VuQkhZdmxMT0lEQT09IiwibWFjIjoiZGY4YThlYzcxYTE4MzVhODIxM2YwZmQ1YjdmMWIzNWQ4MWVmZWU0ZTBhZTJiY2U0MzgzZjNjYzVkOTAyZGM5NiIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:46:42', '2024-12-10 16:46:42'),
(33, 9, 'eyJpdiI6IjAzWTU0SHdidTVaU3FNSGxneUxvbEE9PSIsInZhbHVlIjoicFY4OTBWdThQK2lVZXVOVmhFQk1WUT09IiwibWFjIjoiZmE4YTY2MDlhMzdjM2M5MWYwMTM2YWE2OTUzYmEwNDViZDQ1ZmE2MTUzZWE1YTRiY2Y0NjhiYzk3MGI0NGRkOCIsInRhZyI6IiJ9', 'eyJpdiI6InBhaFZuWCtHaDlXVG8vbUFob2xEVXc9PSIsInZhbHVlIjoibi9MTmdqdjdGOTNaMWxlYmlVaVo2Zlk0SEZ2bDRiVnZYRThsRVZtUFZxQT0iLCJtYWMiOiJlNzMyNGJmMTM1OTNhYzViMTJlZmE1MmU4MTA4MGM5MDIzMWYyODA2MjdhMmI3Mjk5YTdiYWIwOWRlMDAyNGJhIiwidGFnIjoiIn0=', 'eyJpdiI6IlFSSE1PM0FvbW0rOVVpYWlkTWowTlE9PSIsInZhbHVlIjoiTkZRTkVCQ2dJSWJkZW54SGRSbC8vMi8wR0FPNXlRdEhLaXUxY3N6NStkemtmWHI0M0pqckpheDNlc1pOSEJjRCIsIm1hYyI6IjgyZTZmMjJmZDg0NTNhY2VjYzViNzEwMTU5ZjU0YTdhYmU5MGJlNGJlYmUwZDczMGQ2ZWExOGU0MDA1OTkwNDciLCJ0YWciOiIifQ==', 'eyJpdiI6ImFOYVZVN3o2ak9mUFFCb2dyU0tDWFE9PSIsInZhbHVlIjoic1BEcXBReWFoYVpkTmtrMEx1TUc0MFVkczhFdjQ3SFNxNkRITVZNUXdUOD0iLCJtYWMiOiI0ZjU1YzA2ZDk3ZDM3NzMyMTQ1YjdjNTM5NGMwMjg0NzZlNjc1ZDI5M2ViZmE4ZGZhZTkxZjkwNTRjNDZkZmI2IiwidGFnIjoiIn0=', NULL, 'eyJpdiI6ImJZRmh6a29Udkg5UmJGcVFIN3BVVEE9PSIsInZhbHVlIjoiVlBNSzkvMStHRWtKUjRPTGR6YUZFdz09IiwibWFjIjoiNzFkNDk5MzVjMjM4Zjc0YjNlNTIxMzE1YmQ0YjBkMTdlMjk5YTUwYzQ5MTVhMWVkNzZlN2EyMWQ0OTRmYzY2MSIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:46:50', '2024-12-10 16:46:50'),
(34, 9, 'eyJpdiI6IkFEdmxPSWFTU3labUZjR3NPblF1bFE9PSIsInZhbHVlIjoiRk1BR00wQzFWOVVGZUpPTXhWSDhNdz09IiwibWFjIjoiMjliMDhhYmQyMTNiNGZiYTk0ZDZmNGZkZjdkZWQ4MjljOTBlMjc3ZjFlNjM1ZGRlMWZmNGY3N2I2YzllZjg5OCIsInRhZyI6IiJ9', 'eyJpdiI6InQrVWhiVXB0TlFvRWtHd08xQUR4V0E9PSIsInZhbHVlIjoicDZ2NWVnR1M0NGJHRUZUcTZZM1ZENTNPTTZDb0psdFc1RnQyZFQyemJWOD0iLCJtYWMiOiIwYjlhZTRhMjNhNTM5MDAyNzgyMmNhNWIxYjNjNWZmOGYxMzdmMmRjYzIwZTY0OGViZjRkNGYyYjdjMjM4NjVhIiwidGFnIjoiIn0=', 'eyJpdiI6IkxzUTQ1SjMxaEtUMUdYemV3RHpFWXc9PSIsInZhbHVlIjoicGFOK0JKMFloSXA0c29jaWhydFJZUy8yWFVNd2JJWnhXY2NNcHJiM1dHWTlmQTJaODhMVk5Jb3RucTJzNE5lYSIsIm1hYyI6IjEwMmVlNmRhYmUwZDgxY2QwOTVkMzU3OGI4NmRjYmE0NjYyOWJmZWY2MjlhOTIwMjEzYzNjM2Q1YjIxMWYwZTIiLCJ0YWciOiIifQ==', 'eyJpdiI6Ikc4SFdWcUFYd0daNnRRR2ppNTM1MXc9PSIsInZhbHVlIjoiQ3k1blZUblB3em5ZdUkyYzdaWTQ0WThSV0hMWTRHbUJ0NnNkTFVmK05LUT0iLCJtYWMiOiI3MzZlYTA0ZmZmODQxZDU2YjkxZmYwOWE1ZjQ1M2I4MjcyOTVkNjdmNmJkZmZkNGEyMDNkMmM1YTc4OGQzZmVlIiwidGFnIjoiIn0=', NULL, 'eyJpdiI6Im1JUUxMRVQ2ZkNZcVFIcytDRTNtZkE9PSIsInZhbHVlIjoiMFZ0UVpKcloxaXY1TmdRT2k1V1RzUT09IiwibWFjIjoiYzFiYzcyN2Y4ZTc3NGFhMDg2Mjc3NTBkZDg2NzFjN2UzY2M0ZDgyNzkwZmE4NDU1Njc4ZGI1OWU5NGEzYTU4ZiIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-10 16:48:35', '2024-12-10 16:48:35'),
(35, 9, 'eyJpdiI6Ik01WXkwVUVpdFhoOFc3ZDFFSjZVZGc9PSIsInZhbHVlIjoiT2pieDBjeFJZdVpTVkpQaGtEM2x3dz09IiwibWFjIjoiZTdhY2VmNGFiNGNiM2U0Nzc1YmUwMzFjZmFmZWUzMWMwZDRjNzhiZmY5ZThkMTBmZWIwNGUzMzEwNGIzOTg4OSIsInRhZyI6IiJ9', 'eyJpdiI6Im1rcEw2LzdxMExxajV3NkhoZnl3Ymc9PSIsInZhbHVlIjoiczVDMy81NW9weTVOL1FSNkJ3blNtTXFPSHBhdGhzQ3RXN1FGbkFiM3JHOD0iLCJtYWMiOiI2MDlmYmJhMjQ0ZTZlODY5MTYxZjQ5MjZiN2Q3MWVjMGMzYmE5MDFkNzc1NjE2ZmNiNmY4Y2M0MmRlMTA4ZTYwIiwidGFnIjoiIn0=', 'eyJpdiI6Ik1zZ0JjRFRJTEJHQ0NjUlp1enRYeGc9PSIsInZhbHVlIjoiMEN3NGU5VWtEUVBOdTJ1ZHlSNithcnZYc1c1cXd1M1NuUGFVRFA2Rlplc3VwVExuTXoyWm9KYktCTWIvRkRaMiIsIm1hYyI6ImNjYzE1NDg5NjRhYjM4YzU2N2M2YmRiZmVmNTYxZjExMjc2MTI4ZTUzNGM3MzBmMDZhZmI2MzVkYTAwYzljYjQiLCJ0YWciOiIifQ==', 'eyJpdiI6Imk5K014aXFPL0lvTjNtc2FMNEw3R3c9PSIsInZhbHVlIjoiVzA2aWR5ZjFDbm9CZ1A0cHN2ZEhTbXFQZGZFNHdXK3I3TXFnQVVjSzFOYz0iLCJtYWMiOiJhMjVkNmI4MDMxODRiOTFkYTViZTJmOGJmYzM5YTUxMmQ3YTc5YmFhN2VjZTY0MWI2ZjNkYWYzN2UzMjBiMDA1IiwidGFnIjoiIn0=', NULL, 'eyJpdiI6InBQSkRzaDZBbDNpMFcxWkxqRHBNdWc9PSIsInZhbHVlIjoiQUFwVERGTmU0Y05jd1Z4WUdCYWtoQ0FXVTVqUk9XU0hzblB5d2pjUGs3MD0iLCJtYWMiOiI5NTcxNzYwZmM4NDg1NzJkNTdlNzc0MWUzNTU0MDA3YjIzNWY0NWFjMGY4NTU3ODY0MGU1ZWFkNGJiMWUwZDg4IiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:48:43', '2024-12-10 16:48:43'),
(36, 9, 'eyJpdiI6IkU5UE9kL21TYnAvNkhvMThyRFBJZXc9PSIsInZhbHVlIjoic1lORW5IR0FKUzluNWk4L3FWOEV6QT09IiwibWFjIjoiZDA5ZDMwNmRkYzA2ZjcyMGVkZjNkNWExNTQyMmRhMjFkZWMzMDYwODNhMDExYTRhOTgwNzVjYzhjNzk4M2YyMyIsInRhZyI6IiJ9', 'eyJpdiI6ImpKZy9GTENTUnNRTlRtY1NtQWJYSlE9PSIsInZhbHVlIjoialhLeUk3cTdtVE9jL3hKTmFubldKN1V3S1JacTNCQXJsZmUvVUxUN2Rvbz0iLCJtYWMiOiI4MzQ4YjQ4YmNkOTc2M2QzYjEzNGYzMTZmMDg2ZGE3NTc0YmRmYWU0YjllNzRiMjY5MDQxMWM3NWRmZTRhYjQ0IiwidGFnIjoiIn0=', 'eyJpdiI6IlhCcU1jUFFNREdiZ0FoeXF3a05Pd0E9PSIsInZhbHVlIjoidUlJYy9ZeDlHb1E2cExScXZRa05SaHNTdllFbllvMmRUakkrMVJIK2JEZ3o1bmQ1bm9lcGtBekFkcVdiVGFSdiIsIm1hYyI6IjE2ZDJmMGY4ZmMyZTFkZTkyNGViYzRmN2ExZGI1ODJiYjBiZDA2MzA1OTU4MDM1ZTA3ZGU1OWE4NzQ1NmY0YmYiLCJ0YWciOiIifQ==', 'eyJpdiI6Im9zQWNmblFTeDV3M3NsMVZpS0RQR2c9PSIsInZhbHVlIjoiY2pBKzlab3R3cTVxNkdnbW9uMmV5aHJFSGlZUWxTQnFDaGUyNmErc05RZz0iLCJtYWMiOiJiODA3NzFlOGU5NmE0OGNjYmQ3OTUwYWI0MDg0NDVkNDQyOWFlMzIzNDI1NjVkMWFjZGYyZjlkMzFiZTZlMmUyIiwidGFnIjoiIn0=', NULL, 'eyJpdiI6Ikp1OHAzclZIbnc3VVBRK1N3Zk00eHc9PSIsInZhbHVlIjoieUdOQ2crbFdnQjlTeHd1TXFBN1RISGtPMGo2U2Z1L3lpbVBXV1Z1ZGFIbz0iLCJtYWMiOiI2YjdjMDBkNjU1OTJhYTFmM2Y3M2EzNDQ5NzUwZGEzZDU4YjE5MjI4ZjdhYmExNjNjMjAxODczNjQ1M2UzZTc1IiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:48:50', '2024-12-10 16:48:50'),
(37, 9, 'eyJpdiI6IlJ6MkM2WUxjMFJyZ3VnUDlNRE11YXc9PSIsInZhbHVlIjoiR2xyNGcxNE5SUkxyVGp5SG1acTNBQT09IiwibWFjIjoiYzRkYjZjMTlkOTgxNTFkMWFkOThiYWFjMDhjOGNkYjMyZTJhYjAwN2Y0ZjcyNjQwNmE1MDJhNjQyYTRmMjVjMiIsInRhZyI6IiJ9', 'eyJpdiI6IlkvbzZKdHdhWURyU3FCeDZ5VGNRWnc9PSIsInZhbHVlIjoiT3F4cHVFcmpBTDd3eDZ4cjBhaklJelhqbGZDTGMxOWZtemk5MjdRbDRPUT0iLCJtYWMiOiJhNTFiZDJmNWQ5NTMyOTkzNDgxNzc3NjQ1ZjY5NDk2NTE3ZDE4ZDZjYWUwYTVlNzEzMGMzNzUzZGJlYzI4YjQ4IiwidGFnIjoiIn0=', 'eyJpdiI6Ik54UjFXSE54K3gyZzFoUTU3aEYzUFE9PSIsInZhbHVlIjoiQUhoWERSNGY3SnQ2eWhhR0tseVRla09DVjRYMUxrTkppS1MwdlNEOUFMWEpaeWdZKytrVnNUeTB1T001QkhkRiIsIm1hYyI6ImQxZTgwZWM2MDlhZWI1NWZjM2IyYzA4NWFlZjI4NDU0Y2Y3MTg1OGU2NzU0MTAyOGM3Zjk2NzJkZTEzM2E1NmQiLCJ0YWciOiIifQ==', 'eyJpdiI6IkNuU1RJVlY5cHRkdEZ3SWZiSzJORUE9PSIsInZhbHVlIjoicmNNVU9Sb1l5a3dOZ0ZRdXN1bVY0ZjBNbFN6OUZPYVpVaTdRMEJsYkU1WT0iLCJtYWMiOiI5MGVmY2U3MzhmMjc5MTkxYWFlNDgwNjkzMTllZjRmMWY1N2I4NzRkY2YxYjM0MDNjZDViODg1NTJhZGI4OWQ3IiwidGFnIjoiIn0=', NULL, 'eyJpdiI6IjF3cDhkYzNlLzY0elNuSHJXbDNzV1E9PSIsInZhbHVlIjoiK1ZzYVRsNVYrU1NUNnd3L2FBMkFmSTBsN1VaSTNBNldqaElNWFIzb3VoYz0iLCJtYWMiOiI3MGU5NmIyZmNhMjQ0ZDUwMGQ2OWY0Njg3NjllN2JkMDliN2E1MTViMzc4YmM5NDI1ZGZkNmJjZDY5NjZmMTUyIiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:49:07', '2024-12-10 16:49:07'),
(38, 9, 'eyJpdiI6ImhlY3FaMTFwRTJSbFNwdElxRUVzYWc9PSIsInZhbHVlIjoiY0ovM0lQcjNlN256Y0laditUcTlGQT09IiwibWFjIjoiYTA4ODdmYjQyNWUzZWQxNzIzNTE3YTAyNTdmOWJkODM2ZTg1ZTAwMWMyYjhmMmJlNDU5ZDY0NjljMjk2OTJlYiIsInRhZyI6IiJ9', 'eyJpdiI6InZyTkd6RHlQZGVGUmg0UEQvQnZKb1E9PSIsInZhbHVlIjoieUZ6d3F1Z2hyNHdlTW85dFZFUEU2ZS9HblU1NHF0anNhYWdLL08rWko3Zz0iLCJtYWMiOiIxZGMyODc1OWJiY2Y3YzRiYjM1ZWYzNTMwODM5MDQ0YTNjZThlMjVjZTI1MWQzOTUxZjA4MzFiNmJmYzZmOTI0IiwidGFnIjoiIn0=', 'eyJpdiI6Inl3c1lsUVViYy9RRXpxb212bDNmd1E9PSIsInZhbHVlIjoiY3dmdHRqRjJnUzVIaFJrYmZFblJEb1dlUFMrWU1WWkZST0FGbjlVNTFrcm93dFhYZFl6aU8ra2YvWU1FSUF1VCIsIm1hYyI6ImE5ZWQ3OTJmMjg0NGMwYzUwNDkzNWNhZTc3MWRiYjM0YWM3MzY3ZGY3MDZlNTJiMjlkMmQ1ZmY1NDA3ODZkMDAiLCJ0YWciOiIifQ==', 'eyJpdiI6IjNKT2pqTHp1RXY5Y0RoYUhpSHZ3L2c9PSIsInZhbHVlIjoiZGlScjJSOWhMTWxXblBDVVRjd0ZQS1BQWkJrdlhEU1N0V1F6NWJUQ1FRZz0iLCJtYWMiOiIxZWM1OTU3ZDQzOTMyMWNiZTE1ZWI4MzYwZDQzMmU0NmExYTA3NDMwZmMwMWE4YjNhMGM0ODFmMDY1Y2Q2ZGJmIiwidGFnIjoiIn0=', NULL, 'eyJpdiI6IklpckJ4NFA0TlFsWDQ1NmJoNnRMWUE9PSIsInZhbHVlIjoiZ3FjZStDRDVCTXhLWUR1L1puVjdLeFZMNkJMcTVpUnkxakNmK1Q1NlJxZz0iLCJtYWMiOiIxZTc4ZWJkOTE4ZDYwZGU1MWIxMzcxNzI0YjExMmY5Y2IzYTIxMzUzMTdkNmYzNDNkOWYwZDMzZjI2MWI2OGYxIiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:49:13', '2024-12-10 16:49:13'),
(39, 9, 'eyJpdiI6IlFBVWdVb0JISm5xbUhlRGszK0k5MEE9PSIsInZhbHVlIjoiUUZ2WHBVTWZ1S29oR05rSytoUHVHZz09IiwibWFjIjoiZDM4YWVmNzlhNWIwOTFmMzNjM2EwYmNkNzRiNzU4ZWY2MzA4Y2IwZTM2ZGE1MmY1ZTA3ZjhkZTMwMjQ0NGFlNSIsInRhZyI6IiJ9', 'eyJpdiI6IjlYQm5CazNOQjFXK2JBR3BOcURrRmc9PSIsInZhbHVlIjoidzlub044T2lhdlpBL3VndkU0ZmEyOGE3NUsrckRjRGRyZy8wTWpJNVpLWT0iLCJtYWMiOiI4ZTIxMzhhYTU1OTM4MGY5NmExNTViZDIyNTIzMjBlYzAxNmZjM2NhMjdlNjg1YTI3MDA0ODBiMDllYzE4ODAwIiwidGFnIjoiIn0=', 'eyJpdiI6Ii9lZkUxNEw4RXh2RlN2ZDdXbWozTWc9PSIsInZhbHVlIjoibXdCYWY0dDh2MlpQNjFJZHhDeVJleVJ4eU1vMUVsOURaMEZkb0RDbm5TN3V3d0hUYTRIbXVNckRkd1h2SHhwVCIsIm1hYyI6ImFjMmI4OGVmYWVmNzUzMmM0ZTFmOTQ5OGIxZDAzZTI0YmY4ZTI3MzQ4YjRiOTdjNDUwNDQzNDM1MjUxMjcyYzQiLCJ0YWciOiIifQ==', 'eyJpdiI6IkVBRGlVY205T1kzdk52VTFVdGdxWEE9PSIsInZhbHVlIjoiYXFIVy9BN1JDNU9GU09UOFlnMDhJcTRxYVRmd1U5SUlybW8yU01LRitSST0iLCJtYWMiOiJlYTE2NjAyZGUwZDkyNWJhN2ZlZDg5NDhlZTZiNTU2ZjRmODgxY2Q4YWI0NmQ2ODE3NWY5YWE1YTVhMTIzZDM2IiwidGFnIjoiIn0=', NULL, 'eyJpdiI6IkRMNDI5SnVLVFNJS0ZsNGdYdmViNkE9PSIsInZhbHVlIjoiejZQQXUzaDdBR21VVCtYYmlCbjBWem52TTVIL1NUNUpMVkxHNFlzRncyMD0iLCJtYWMiOiI2M2NmNmUzZGZjYzNjYjRhNGRjODc1ZTE4ZmNmOWVkYTUyM2YzMDBmODU2MzY2ZWUzZWI4YmJjZmZmY2EwMGE0IiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:51:39', '2024-12-10 16:51:39'),
(40, 9, 'eyJpdiI6Im5oajJIWmkxdDNpbXdpbk0reWlObmc9PSIsInZhbHVlIjoiek9jVXdWVHhUZWlTUlI4b0R0dXlRQT09IiwibWFjIjoiYjJjOGIzOTIxOWM3MDllMDY0ZmIxYzk0MWYxMzI0NzVhOWE3MTY5ZmJmNWE4OTY4OTE2ZmY4NTQ5YWEwYTUxZiIsInRhZyI6IiJ9', 'eyJpdiI6IlpWMUttbmhOUnN2SHdoU3NCNHFKTXc9PSIsInZhbHVlIjoiYS8xejJ3ZE1iOVptQWwwc2xzdUFNTlF4SGJqeE9pVnpNcWxsem5XdGJvMD0iLCJtYWMiOiIyZDUyYTc2MmZlNDlhNDFlYzE2NzIwMTc1MjM4ZDBjNDJiODM2NjVmZWU0ZGUwYjUxZDdmZjkxMDNjM2E4YTRlIiwidGFnIjoiIn0=', 'eyJpdiI6IllMSXpSVllzUDFqYjcxRTkvRU8rK0E9PSIsInZhbHVlIjoicE1uUitTTDZGWlN2TVg1aFBnV0hMeDZGczRvR29QbXZXTVFvbGx0TDJ6dS8ydVJwMEg3NS9Tc1NHQVlaTTB0USIsIm1hYyI6IjhkYWRhMDgxYjI2MDMxZWQ2YTU5NzZlMmFhNjc0MGJiNGEyYzI1NWFhYzRhYjE3MDExZWM1OTNmMDZmODAwZWYiLCJ0YWciOiIifQ==', 'eyJpdiI6Im41ekFRWXU1MEpvRTZqL214LzBxNmc9PSIsInZhbHVlIjoiUW9tNzdzQlZtTW5TL0VpcHZxZW9lbExZMGNwbWIvYnhvaU8raTZwUDFLQT0iLCJtYWMiOiIyOTdiMDhlZjU0YzczYTM3ZjBmYWE2YjEzYjQwY2RkY2ZjOTliNWQ0NjE2NDQ1MjljYTRiZjE5MmFlOWRkZjJhIiwidGFnIjoiIn0=', 720000, 'eyJpdiI6ImRRQnFGaUxzMXdBODJGZTJvbkoxNXc9PSIsInZhbHVlIjoiTkNrQWFjUzYvZVR2R0IxcUVJelVJTFJ4NG92eHhJTHBCOU1VMW9qTitPTT0iLCJtYWMiOiIzOGI2ZWVkODRlYmUxNDM4MzY3NjJmYzEwM2Q3Y2JjZjhlOWE3NTMxMzRhNzk3NjEwOWM2YzAwNmFjYTZkZTE5IiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-10 16:52:14', '2024-12-10 16:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 180000, 180000, '2023-07-08 07:33:22', '2023-07-08 07:33:22'),
(2, 1, 2, 1, 150000, 150000, '2023-07-08 07:33:22', '2023-07-08 07:33:22'),
(3, 1, 3, 1, 15000, 15000, '2023-07-08 07:33:22', '2023-07-08 07:33:22'),
(4, 2, 7, 1, 100000, 100000, '2023-07-08 07:41:53', '2023-07-08 07:41:53'),
(5, 2, 9, 1, 80000, 80000, '2023-07-08 07:41:53', '2023-07-08 07:41:53'),
(6, 2, 8, 1, 80000, 80000, '2023-07-08 07:41:53', '2023-07-08 07:41:53'),
(7, 3, 4, 1, 30000, 30000, '2023-07-08 07:42:42', '2023-07-08 07:42:42'),
(8, 3, 5, 1, 60000, 60000, '2023-07-08 07:42:42', '2023-07-08 07:42:42'),
(9, 3, 6, 1, 80000, 80000, '2023-07-08 07:42:42', '2023-07-08 07:42:42'),
(10, 4, 1, 1, 180000, 180000, '2023-07-08 08:22:44', '2023-07-08 08:22:44'),
(11, 4, 3, 1, 15000, 15000, '2023-07-08 08:22:44', '2023-07-08 08:22:44'),
(12, 4, 2, 1, 150000, 150000, '2023-07-08 08:22:44', '2023-07-08 08:22:44'),
(13, 5, 1, 1, 180000, 180000, '2023-07-08 08:23:01', '2023-07-08 08:23:01'),
(14, 5, 3, 1, 15000, 15000, '2023-07-08 08:23:01', '2023-07-08 08:23:01'),
(15, 5, 2, 1, 150000, 150000, '2023-07-08 08:23:01', '2023-07-08 08:23:01'),
(16, 6, 1, 1, 180000, 180000, '2023-07-08 08:23:24', '2023-07-08 08:23:24'),
(17, 6, 2, 1, 150000, 150000, '2023-07-08 08:23:24', '2023-07-08 08:23:24'),
(18, 6, 3, 1, 15000, 15000, '2023-07-08 08:23:24', '2023-07-08 08:23:24'),
(19, 7, 1, 1, 180000, 180000, '2023-07-08 08:23:34', '2023-07-08 08:23:34'),
(20, 7, 2, 1, 150000, 150000, '2023-07-08 08:23:34', '2023-07-08 08:23:34'),
(21, 7, 3, 1, 15000, 15000, '2023-07-08 08:23:34', '2023-07-08 08:23:34'),
(22, 8, 1, 1, 180000, 180000, '2023-07-08 08:32:57', '2023-07-08 08:32:57'),
(23, 9, 1, 1, 180000, 180000, '2023-07-08 09:22:34', '2023-07-08 09:22:34'),
(24, 9, 2, 1, 150000, 150000, '2023-07-08 09:22:34', '2023-07-08 09:22:34'),
(25, 9, 3, 1, 15000, 15000, '2023-07-08 09:22:34', '2023-07-08 09:22:34'),
(26, 10, 3, 1, 15000, 15000, '2023-07-09 13:40:09', '2023-07-09 13:40:09'),
(27, 10, 10, 1, 80000, 80000, '2023-07-09 13:40:09', '2023-07-09 13:40:09'),
(28, 10, 11, 1, 80000, 80000, '2023-07-09 13:40:09', '2023-07-09 13:40:09'),
(29, 10, 5, 1, 60000, 60000, '2023-07-09 13:40:09', '2023-07-09 13:40:09'),
(30, 11, 1, 1, 180000, 180000, '2023-07-10 13:41:57', '2023-07-10 13:41:57'),
(31, 12, 1, 1, 180000, 180000, '2023-07-10 13:43:46', '2023-07-10 13:43:46'),
(32, 0, 0, 0, 0, 0, NULL, NULL),
(33, 13, 1, 5, 180000, 900000, '2023-07-13 13:29:48', '2023-07-13 13:29:48'),
(34, 14, 1, 2, 180000, 360000, '2023-07-13 14:43:54', '2023-07-13 14:43:54'),
(35, 15, 1, 1, 180000, 180000, '2023-07-16 14:45:19', '2023-07-16 14:45:19'),
(36, 15, 3, 1, 15000, 15000, '2023-07-16 14:45:19', '2023-07-16 14:45:19'),
(37, 15, 10, 1, 80000, 80000, '2023-07-16 14:45:19', '2023-07-16 14:45:19'),
(38, 17, 1, 5, 180000, 900000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(39, 17, 3, 1, 15000, 15000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(40, 17, 4, 1, 30000, 30000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(41, 17, 5, 1, 60000, 60000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(42, 17, 6, 1, 80000, 80000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(43, 17, 7, 5, 100000, 500000, '2024-12-10 15:40:18', '2024-12-10 15:40:18'),
(44, 18, 1, 5, 180000, 900000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(45, 18, 3, 1, 15000, 15000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(46, 18, 4, 1, 30000, 30000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(47, 18, 5, 1, 60000, 60000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(48, 18, 6, 1, 80000, 80000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(49, 18, 7, 5, 100000, 500000, '2024-12-10 15:44:12', '2024-12-10 15:44:12'),
(50, 19, 1, 5, 180000, 900000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(51, 19, 3, 1, 15000, 15000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(52, 19, 4, 1, 30000, 30000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(53, 19, 5, 1, 60000, 60000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(54, 19, 6, 1, 80000, 80000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(55, 19, 7, 5, 100000, 500000, '2024-12-10 15:50:01', '2024-12-10 15:50:01'),
(56, 20, 1, 5, 180000, 900000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(57, 20, 3, 1, 15000, 15000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(58, 20, 4, 1, 30000, 30000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(59, 20, 5, 1, 60000, 60000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(60, 20, 6, 1, 80000, 80000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(61, 20, 7, 5, 100000, 500000, '2024-12-10 16:00:39', '2024-12-10 16:00:39'),
(62, 21, 1, 5, 180000, 900000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(63, 21, 3, 1, 15000, 15000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(64, 21, 4, 1, 30000, 30000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(65, 21, 5, 1, 60000, 60000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(66, 21, 6, 1, 80000, 80000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(67, 21, 7, 5, 100000, 500000, '2024-12-10 16:01:13', '2024-12-10 16:01:13'),
(68, 22, 1, 5, 180000, 900000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(69, 22, 3, 1, 15000, 15000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(70, 22, 4, 1, 30000, 30000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(71, 22, 5, 1, 60000, 60000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(72, 22, 6, 1, 80000, 80000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(73, 22, 7, 5, 100000, 500000, '2024-12-10 16:03:53', '2024-12-10 16:03:53'),
(74, 23, 1, 5, 180000, 900000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(75, 23, 3, 1, 15000, 15000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(76, 23, 4, 1, 30000, 30000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(77, 23, 5, 1, 60000, 60000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(78, 23, 6, 1, 80000, 80000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(79, 23, 7, 5, 100000, 500000, '2024-12-10 16:04:20', '2024-12-10 16:04:20'),
(80, 24, 1, 5, 180000, 900000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(81, 24, 3, 1, 15000, 15000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(82, 24, 4, 1, 30000, 30000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(83, 24, 5, 1, 60000, 60000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(84, 24, 6, 1, 80000, 80000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(85, 24, 7, 5, 100000, 500000, '2024-12-10 16:06:22', '2024-12-10 16:06:22'),
(86, 25, 1, 5, 180000, 900000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(87, 25, 3, 1, 15000, 15000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(88, 25, 4, 1, 30000, 30000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(89, 25, 5, 1, 60000, 60000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(90, 25, 6, 1, 80000, 80000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(91, 25, 7, 5, 100000, 500000, '2024-12-10 16:12:44', '2024-12-10 16:12:44'),
(92, 26, 11, 8, 80000, 640000, '2024-12-10 16:23:38', '2024-12-10 16:23:38'),
(93, 27, 11, 8, 80000, 640000, '2024-12-10 16:33:46', '2024-12-10 16:33:46'),
(94, 29, 1, 5, 180000, 900000, '2024-12-10 16:37:04', '2024-12-10 16:37:04'),
(95, 30, 1, 5, 180000, 900000, '2024-12-10 16:42:31', '2024-12-10 16:42:31'),
(96, 31, 1, 4, 180000, 720000, '2024-12-10 16:45:28', '2024-12-10 16:45:28'),
(97, 36, 1, 4, 180000, 720000, '2024-12-10 16:48:50', '2024-12-10 16:48:50'),
(98, 37, 1, 4, 180000, 720000, '2024-12-10 16:49:07', '2024-12-10 16:49:07'),
(99, 38, 1, 4, 180000, 720000, '2024-12-10 16:49:13', '2024-12-10 16:49:13'),
(100, 39, 1, 4, 180000, 720000, '2024-12-10 16:51:39', '2024-12-10 16:51:39'),
(101, 40, 1, 4, 180000, 720000, '2024-12-10 16:52:14', '2024-12-10 16:52:14');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `madein_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `madein_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Sửa Rửa Mặt 1', '<p><strong><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u&nbsp;</strong></strong>l&agrave; sản phẩm&nbsp;<a href=\"https://hasaki.vn/danh-muc/sua-rua-mat-c19.html\" target=\"_blank\">sữa rửa mặt</a>&nbsp;đến từ&nbsp;<a href=\"https://hasaki.vn/thuong-hieu/cerave.html\" target=\"_blank\">thương hiệu mỹ phẩm Cerave</a>&nbsp;của Mỹ,&nbsp;với sự kết hợp của ba Ceramides thiết yếu, Hyaluronic Acid sản phẩm gi&uacute;p l&agrave;m sạch v&agrave; giữ ẩm cho l&agrave;n da m&agrave; kh&ocirc;ng ảnh hưởng đến h&agrave;ng r&agrave;o bảo vệ da mặt v&agrave; cơ thể.</p>\r\n\r\n<p>Hiện sản phẩm&nbsp;<strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u&nbsp;</strong>đ&atilde; c&oacute; mặt tại <strong>Hasaki</strong> với 2 loại v&agrave; 3 dung t&iacute;ch (88ml; 236ml; 473ml):</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Dầu</strong><strong>&nbsp;</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Kh&ocirc;</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>1.&nbsp;<strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Dầu</strong><strong>&nbsp;</strong></strong></h2>\r\n\r\n<p><strong>Sữa Rửa Mặt Cerave&nbsp;Foaming Cleanser&nbsp;</strong>kết cấu dạng gel tạo bọt rất l&yacute; tưởng để loại bỏ dầu thừa, bụi bẩn v&agrave; lớp trang điểm với c&ocirc;ng thức nhẹ nh&agrave;ng, kh&ocirc;ng ph&aacute; vỡ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n của da v&agrave; chứa c&aacute;c th&agrave;nh phần gi&uacute;p duy tr&igrave; độ ẩm c&acirc;n bằng da. Cerave Foaming Cleanser<strong>&nbsp;</strong>chứa <strong>Ceramides, Axit Hyaluronic v&agrave; Niacinamide</strong> gi&uacute;p duy tr&igrave; h&agrave;ng r&agrave;o bảo vệ da, kh&oacute;a ẩm v&agrave; l&agrave;m dịu l&agrave;n da của bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Sữa Rửa Mặt Cerave Sạch Sâu Cho Da Thường Đến Da Dầu\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-2.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Loại da ph&ugrave; hợp:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho da thường đến dầu.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; thể sử dụng cho mặt v&agrave; to&agrave;n th&acirc;n.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Giải ph&aacute;p cho t&igrave;nh trạng da:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da thường tiết b&atilde; nhờn, <a href=\"https://hasaki.vn/danh-muc/dau-thua-lo-chan-long-to-c1879.html\" target=\"_blank\">dầu thừa, lỗ ch&acirc;n l&ocirc;ng to</a>.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Kết cấu Sữa Rửa Mặt Cerave Sạch Sâu Cho Da Thường Đến Da Dầu\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-3.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ưu thế nổi bật:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>3 loại Ceramides (1, 3, 6-II)</strong>&nbsp;thiết yếu gi&uacute;p kh&ocirc;i phục h&agrave;ng r&agrave;o độ ẩm da.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hyaluronic Acid</strong>&nbsp;gi&uacute;p duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Niacinamide</strong>&nbsp;gi&uacute;p l&agrave;m dịu, nu&ocirc;i dưỡng, củng cố h&agrave;ng r&agrave;o da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kết cấu dạng gel tạo bọt gi&uacute;p l&agrave;m sạch s&acirc;u, loại bỏ dầu thừa, th&ocirc;ng tho&aacute;ng lỗ ch&acirc;n l&ocirc;ng nhưng vẫn duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Sữa Rửa Mặt Cerave Foaming Cleanser\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-1.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>2.&nbsp;<strong>Sữa Rửa Mặt Cerave Cho Da Thường Đến Kh&ocirc;&nbsp;</strong></h2>\r\n\r\n<p><strong>Sữa Rửa Mặt Cerave&nbsp;Hydrating Cleanser&nbsp;</strong>gi&uacute;p loại bỏ bụi bẩn, dầu thừa, nhẹ nh&agrave;ng lấy đi lớp kem chống nắng, trang điểm nhưng vẫn giữ h&agrave;ng r&agrave;o bảo vệ da v&agrave; kh&ocirc;ng l&agrave;m mất đi độ ẩm tự nhi&ecirc;n. Sữa rửa mặt dịu nhẹ với c&aacute;c th&agrave;nh phần như <strong>Ceramides </strong>v&agrave;<strong> Axit Hyaluronic</strong> c&oacute; t&aacute;c dụng kh&ocirc;i phục h&agrave;ng r&agrave;o tự nhi&ecirc;n của da v&agrave; dưỡng da ẩm mịn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Sữa Rửa Mặt Cerave Cho Da Thường Đến Khô \" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-cho-da-thuong-den-kho-1.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Loại da ph&ugrave; hợp:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho da thường đến kh&ocirc;.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; thể sử dụng cho mặt v&agrave; to&agrave;n th&acirc;n.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho cả người lớn v&agrave; trẻ em.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Giải ph&aacute;p cho t&igrave;nh trạng da:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da <a href=\"https://hasaki.vn/danh-muc/thieu-am-thieu-nuoc-c1883.html\" target=\"_blank\">thiếu nước, thiếu ẩm</a>.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Da kh&ocirc; r&aacute;p, sần s&ugrave;i, bong tr&oacute;c.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Sữa Rửa Mặt Cerave Hydrating Cleanser\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-cho-da-thuong-den-kho-2.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ưu thế nổi bật:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm gi&uacute;p l&agrave;m sạch bụi bẩn, dầu thừa, lấy đi cặn b&atilde; lớp trang điểm c&ograve;n s&oacute;t tr&ecirc;n da v&agrave; l&agrave;m th&ocirc;ng tho&aacute;ng lỗ ch&acirc;n l&ocirc;ng nhưng vẫn duy tr&igrave; độ ẩm cho da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>3 loại Ceramides (1, 3, 6-II)</strong>&nbsp;thiết yếu gi&uacute;p kh&ocirc;i phục h&agrave;ng r&agrave;o độ ẩm da.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>C&ocirc;ng nghệ MVE độc quyền</strong> kho&aacute; ẩm cho da suốt 24 giờ.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hyaluronic Acid</strong> gi&uacute;p duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Độ an to&agrave;n:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kh&ocirc;ng x&agrave; ph&ograve;ng&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng hương liệu&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng chứa paraben&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng b&iacute;t tắc lỗ ch&acirc;n l&ocirc;ng&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Đ&atilde; được kiểm nghiệm kh&ocirc;ng g&acirc;y k&iacute;ch ứng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Bảo quản:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tr&aacute;nh &aacute;nh nắng trực tiếp, nơi c&oacute; nhiệt độ cao hoặc ẩm ướt.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đậy nắp k&iacute;n sau khi sử dụng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Th&ocirc;ng số sản phẩm:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Dung t&iacute;ch: </strong>88ml; 236ml; 473ml</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Thương hiệu:&nbsp;</strong>Cerave&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Xuất xứ thương hiệu:</strong> Mỹ.</p>\r\n	</li>\r\n</ul>', 'Đây là sản phẩm hàng đầu dành cho da dầu mụn', 200000, 2, 180000, 500, '00012', 1, NULL, '2024-12-10 16:52:17'),
(2, 2, 1, 1, 'Sửa Rửa Mặt 2', NULL, NULL, 170000, 101, 150000, NULL, NULL, 0, NULL, '2023-07-16 15:12:16'),
(3, 3, 1, 1, 'Sửa Rửa Mặt 3', NULL, NULL, 30000, 19, 15000, NULL, NULL, 1, NULL, '2024-12-10 16:12:50'),
(4, 4, 2, 1, 'Kem Chống Nắng 1', '<p>ưqwqe</p>', 'sssad', 40000, 19, 30000, 100, NULL, 1, NULL, '2024-12-10 16:12:50'),
(5, 1, 2, 1, 'Kem Chống Nắng 2', NULL, NULL, 70000, 19, 60000, NULL, NULL, 1, NULL, '2024-12-10 16:12:50'),
(6, 1, 2, 1, 'Kem Chống Nắng 3', NULL, NULL, 100000, 19, 80000, NULL, NULL, 1, NULL, '2024-12-10 16:12:50'),
(7, 1, 3, 1, 'Tẩy Trang 1', NULL, NULL, 120000, 15, 100000, NULL, NULL, 1, NULL, '2024-12-10 16:12:50'),
(8, 1, 3, 1, 'Tẩy Trang 2', NULL, NULL, 100000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(9, 1, 3, 1, 'Tẩy Trang 3', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(10, 1, 1, 1, 'Sửa Rửa Mặt 4', NULL, NULL, 90000, 19, 80000, NULL, NULL, 1, NULL, '2023-07-16 14:46:21'),
(11, 1, 1, 1, 'Sửa Rửa Mặt 5', NULL, NULL, 90000, 4, 80000, NULL, NULL, 1, NULL, '2024-12-10 16:33:49'),
(12, 1, 1, 1, 'Sửa Rửa Mặt 6', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(13, 1, 2, 1, 'Kem Chống Nắng 4', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(14, 1, 2, 1, 'Kem Chống Nắng 6', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(15, 1, 2, 1, 'Kem Chống Nắng 7', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(16, 1, 3, 1, 'Tẩy Trang 5', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(17, 1, 3, 1, 'Tẩy Trang 6', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(18, 1, 3, 1, 'Tẩy Trang 7', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(19, 1, 2, 1, 'Kem Chống Nắng 5', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(20, 1, 3, 1, 'Tẩy Trang 4', NULL, NULL, 90000, 20, 80000, NULL, NULL, 1, NULL, NULL),
(22, 1, 1, 1, 'sr7', '<p>ưeqwewwqe</p>', 'ưqewq', 20000, 1, 15000, 100, 'SRM1', 0, '2023-07-13 14:55:46', '2023-07-13 15:07:17'),
(23, 1, 1, 1, 'sr7', '<p>ưeqwewwqe</p>', 'ưqewq', 20000, 1, 15000, 100, 'SRM1', 0, '2023-07-13 15:03:46', '2023-07-13 15:07:42'),
(24, 1, 1, 1, 'Sửa Rưa Mặt 5', '<p>123</p>', 'ádsasa', 20000, 1, 15000, 100, 'SRM1', 1, '2023-07-13 15:19:43', '2023-07-13 15:19:43'),
(25, 1, 1, 1, 'Sửa rửa mặt 8 test', '<p>&aacute;dsdassa</p>', 'ádsasa', 20000, 2, 15000, 100, 'SRM8T', 1, '2023-07-13 15:23:55', '2023-07-13 15:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sữa Rửa Mặt', NULL, NULL),
(2, 'Kem Chống Nắng', NULL, NULL),
(3, 'Tẩy Trang', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'BrandonKelley@gmail.com', 'Đức Minh', 'Nice !', 4, '2023-07-02 14:17:52', NULL),
(2, 1, 5, 'RoyBanks@gmail.com', 'Anh Phi', 'Nice !', 4, '2023-07-05 14:18:00', NULL),
(3, 1, 2, 'nghianhodoi@gamil.com', 'Nguyễn Trọng Nghĩa', 'tệ', 1, '2023-07-12 15:06:29', '2023-07-12 15:06:29'),
(4, 1, NULL, 'nghianhodoi2@gmail.com', 'Nguyễn Trọng Nghĩa', 'rấtt tốt', 5, '2023-07-13 14:37:08', '2023-07-13 14:37:08'),
(5, 1, 2, 'nghianhodoi@gamil.com', 'Nguyễn Trọng Nghĩa', 'ssss', 5, '2023-07-16 14:16:58', '2023-07-16 14:16:58'),
(6, 1, NULL, 'nghianhodoi@gmail.com', 'Nguyễn Trọng Nghĩa', 'good', 3, '2023-07-16 14:40:22', '2023-07-16 14:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 16, 'tt-1_64aeb25eeb2fd_230712_090206.png', '2023-07-12 14:02:06', '2023-07-12 14:02:06'),
(8, 15, 'kcn-2_64aeb2d8bcb54_230712_090408.png', '2023-07-12 14:04:08', '2023-07-12 14:04:08'),
(9, 14, 'kcn-2_64aeb2ee7fd6c_230712_090430.png', '2023-07-12 14:04:30', '2023-07-12 14:04:30'),
(10, 13, 'kcn-3_64aeb309f016a_230712_090457.png', '2023-07-12 14:04:57', '2023-07-12 14:04:57'),
(11, 12, 'srm-5_64aeb321527d4_230712_090521.jpg', '2023-07-12 14:05:21', '2023-07-12 14:05:21'),
(12, 1, 'srm-1_64aeb335e413f_230712_090541.jpg', '2023-07-12 14:05:41', '2023-07-12 14:05:41'),
(13, 1, 'kcn-2_64aeb33b829be_230712_090547.png', '2023-07-12 14:05:47', '2023-07-12 14:05:47'),
(14, 2, 'srm-2_64aeb3629b876_230712_090626.jpg', '2023-07-12 14:06:26', '2023-07-12 14:06:26'),
(15, 11, 'srm-4_64aeb37403422_230712_090644.png', '2023-07-12 14:06:44', '2023-07-12 14:06:44'),
(16, 10, 'srm-5_64aeb3b5046da_230712_090749.jpg', '2023-07-12 14:07:49', '2023-07-12 14:07:49'),
(17, 9, 'tt-2_64aeb3c7b9646_230712_090807.png', '2023-07-12 14:08:07', '2023-07-12 14:08:07'),
(18, 8, 'tt-1_64aeb3d86b6a7_230712_090824.png', '2023-07-12 14:08:24', '2023-07-12 14:08:24'),
(19, 7, 'tt-3_64aeb3e9c74c2_230712_090841.png', '2023-07-12 14:08:41', '2023-07-12 14:08:41'),
(20, 6, 'kcn-3_64aeb3facbf7f_230712_090858.png', '2023-07-12 14:08:58', '2023-07-12 14:08:58'),
(21, 5, 'kcn-3_64aeb41b169bb_230712_090931.png', '2023-07-12 14:09:31', '2023-07-12 14:09:31'),
(22, 4, 'kcn-4_64aeb42ba3e53_230712_090947.jpg', '2023-07-12 14:09:47', '2023-07-12 14:09:47'),
(23, 3, 'srm-5_64aeb44385a5c_230712_091011.jpg', '2023-07-12 14:10:11', '2023-07-12 14:10:11'),
(24, 21, 'tt-2_64b00ea9d2180_230713_094809.png', '2023-07-13 14:48:09', '2023-07-13 14:48:09'),
(25, 21, 'srm-4_64b00eae3a900_230713_094814.png', '2023-07-13 14:48:14', '2023-07-13 14:48:14'),
(26, 23, 'srm-3_64b0126806fe8_230713_100408.png', '2023-07-13 15:04:08', '2023-07-13 15:04:08'),
(29, 25, 'srm-10_64b41342dc630_230716_105650.png', '2023-07-16 15:56:50', '2023-07-16 15:56:50'),
(30, 24, 'srm-11_64b4136c282b7_230716_105732.jpg', '2023-07-16 15:57:32', '2023-07-16 15:57:32'),
(31, 24, 'srm-10_64b413723adfa_230716_105738.png', '2023-07-16 15:57:38', '2023-07-16 15:57:38'),
(32, 20, 'tt-10_64b413c93a219_230716_105905.jpg', '2023-07-16 15:59:05', '2023-07-16 15:59:05'),
(33, 20, 'tt-11_64b413d221ef4_230716_105914.png', '2023-07-16 15:59:14', '2023-07-16 15:59:14'),
(34, 19, 'kcn-10_64b4145ea293f_230716_110134.png', '2023-07-16 16:01:34', '2023-07-16 16:01:34'),
(35, 18, 'tt-12_64b4147e91d4b_230716_110206.png', '2023-07-16 16:02:06', '2023-07-16 16:02:06'),
(36, 17, 'tt-14_64b414a465585_230716_110244.png', '2023-07-16 16:02:44', '2023-07-16 16:02:44'),
(38, 22, 'srm-14_64b414bcdbaf8_230716_110308.png', '2023-07-16 16:03:08', '2023-07-16 16:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Nhà cung cấp 1', 'Nhon Trach district', 'ncc1@gmail.com', '036363636', NULL, NULL),
(2, 'Nhà cung cấp 2', 'Nhon Trach district', 'ncc2@gmail.com', '036363636', NULL, NULL),
(3, 'Nhà cung cấp 3', 'Nhon Trach district', 'ncc3@gmail.com', '036363636', NULL, NULL);

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
  `avatar` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `description` text DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `street_address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'AnhPhi', 'anhphi@gmail.com', NULL, '$2y$10$qMtMmnb4.anPk9KHpESebuYC35GCnl2MsXmTx93jlhXOBYp3OfWmW', NULL, NULL, 2, NULL, 'Nhon Trach district', '036363636', NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$vP2KyCqh0mBQPgamGzZFteuTxhSVsop3MoGLanJmhFb2YqhJg39Bm', NULL, NULL, 1, 'https://dongnaibeauty.io.vn/', 'https://dongnaibeauty.io.vn/', '0363897327', NULL, '2023-07-16 15:34:58'),
(3, 'Phi Nguyễn', 'nguyenanhphi1805@gmail.com', NULL, '$2y$10$21HQghmlGFtBOf72MelzCuG1f8HvMncOhm01RzylM3pydhXteF.9K', NULL, 'beauty_64b0179ebc8c0_230713_102622.png', 2, 'ưqewqeweq', 'Nhon Trach district', '036363636', '2023-07-13 15:26:22', '2023-07-13 15:26:22'),
(4, 'Nguyễn Trọng Nghĩa', '0306201157@gmail.com', NULL, '$2y$10$zronFOPKa47rBdumWLM5m.4.DrpC9TlxMUoDClK5ixhrHriJe8rQy', NULL, NULL, 2, NULL, 'Tạp Hóa Nguyệt Anh - Ấp 9', '0363897327', '2023-07-13 14:40:06', '2023-07-13 14:40:06'),
(7, 'Trân Văn Việt Thắng', 'thang@123.com', NULL, '$2y$10$ePqwcA3pU0AzP7A0KzCNy.fabPrlBbFJcGpXzbAXM0IPkrXqUWQXC', NULL, 'win-20220719-09-33-10-pro_64b410d7e86bd_230716_104631.jpg', 2, 'test', 'Gò vấp', '0363897327', '2023-07-16 15:46:31', '2023-07-16 15:46:31'),
(8, 'Nghia DT', 'nghianhodoi2@gmail.com', NULL, '$2y$10$RQiPboGYk.G5SQP9Ibb.Qu7vp/LdsxlTD.2BtgKgzd9J2Q9MpP1CW', NULL, NULL, 2, NULL, 'ưqeqwe', '0363897327', '2024-11-24 13:31:29', '2024-11-24 13:31:29'),
(9, 'Test', '0306201157@caothang.edu.vn', NULL, '$2y$10$Vd.lbWZWIDoZxWEMcAg3VenEQrroMf/ZVpiJcn2Ss4nf.82OOn6/C', NULL, NULL, 2, NULL, 'Nhon Trach district', '0363897327', '2024-12-10 15:49:43', '2024-12-10 15:49:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `importinvoices`
--
ALTER TABLE `importinvoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importinvoice_details`
--
ALTER TABLE `importinvoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madeins`
--
ALTER TABLE `madeins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `importinvoices`
--
ALTER TABLE `importinvoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `importinvoice_details`
--
ALTER TABLE `importinvoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `madeins`
--
ALTER TABLE `madeins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
