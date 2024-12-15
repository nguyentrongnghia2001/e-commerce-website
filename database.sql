-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2024 lúc 01:51 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anhphi_trongnghia`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
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
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay', 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính', 'lamdep1.png', 'Trị Mụn', '', '2023-07-16 14:08:22', NULL),
(2, 3, 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa', 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp', 'lamdep2.png', 'Trắng Da', '', '2023-07-15 14:08:31', NULL),
(3, 3, 'Top 10 Kem Chống Nắng Cao Cấp Nhất', 'Sử dụng kem chống nắng có thể giúp bảo vệ cho làn da của bạn trước tác động từ tia UV. Trong thời gian từ 9h', 'lamdep3.png', 'Trị Mụn', '', '2023-07-04 14:08:35', NULL),
(4, 3, 'Top 10 Kem Nền Nào Tốt Nhất Giá Bình Dân Nhất Hiện Nay', 'Kem nền là một sản phẩm không thể thiếu trong makeup, không phải ai cũng có được làn da khỏe không tì vết, chính', 'lamdep1.png', 'Trị Mụn', '', '2023-07-12 14:08:39', NULL),
(5, 3, 'Top 9 Phấn Phủ Tốt Nhất Hiện Nay Được Nhiều Người Ưa', 'Phấn phủ là các tinh thể cực kỳ nhỏ bé, mỏng, có độ bám trên da và kết cấu ở dạng khô. Ta dùng phấn phủ để lớp', 'lamdep2.png', 'Trắng Da', '', '2023-07-02 14:08:44', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_comments`
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
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ANESSA', NULL, NULL),
(2, 'LAROCHE-POSAY', NULL, NULL),
(3, 'CERAVE', NULL, NULL),
(4, 'SVR', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `importinvoices`
--

CREATE TABLE `importinvoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(10) UNSIGNED NOT NULL,
  `importinvoices_total` double UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `importinvoices`
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
-- Cấu trúc bảng cho bảng `importinvoice_details`
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
-- Đang đổ dữ liệu cho bảng `importinvoice_details`
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
-- Cấu trúc bảng cho bảng `madeins`
--

CREATE TABLE `madeins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `madeins`
--

INSERT INTO `madeins` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Pháp', NULL, NULL),
(2, 'Mỹ', NULL, NULL),
(3, 'Anh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `orders`
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
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `street_address`, `email`, `phone`, `total_orders`, `description`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(41, 1, 'eyJpdiI6IjBFQzlzVVVyTnB2MTJqaXk5Y0NGRmc9PSIsInZhbHVlIjoiOGhBU1lqeEszTGE1NlNPQkx2WC9RQT09IiwibWFjIjoiZGExNTI0OWM0MzU2ZjQ3OGY3MGM0ZTI2MWQyYjFmYWU2Yjc5N2UwYzdjYmMzZjA2OTc3YTNjZmI3NGI3YzZmYiIsInRhZyI6IiJ9', 'eyJpdiI6ImJ4T0Yxa3lPeE9lY1U4K2EwWWxmWlE9PSIsInZhbHVlIjoidmpoQXV0a3RRZXYvN3VEUWZiWjRPdk4rQzRZNE5sR0JHdEpwSUZyd2dPTT0iLCJtYWMiOiI1NmNlOTg1MDQyODBlOWViZTVkMTNlYjViNWIzZDcyYzljMWZjMmZmOWU5NGE0ZWY3NjIzMjQ5YmZhOTMzYWEyIiwidGFnIjoiIn0=', 'eyJpdiI6IkpDazZwaVU2SEh6d21ReUEyZHVqRnc9PSIsInZhbHVlIjoiVC9pc21YRnp0MHhpb1NTV0Njc3RCUmFuM3NXeVhvVXNHUFFHSWJybHJIUT0iLCJtYWMiOiIxY2JjMDM5YjBlMWNmMzExNjNiN2UyYmRiODVjMmU0MjJiYWU4YTA0ZGMxYWVlMDMwNDRhZmQ0ZTViN2Q2ZmJmIiwidGFnIjoiIn0=', 'eyJpdiI6IkRYb09kbS9hSHNramdGeVlwRERUQXc9PSIsInZhbHVlIjoiRVpCSFp1eDdhMnQ5eFRGZzdMMUpoekFkSHpLdWU4ZVBWNERjTHZYNnFDRT0iLCJtYWMiOiJhZGE4MmU1ODlkY2VkYjhlNjQ0ODAzZDA4ZDllOGMyZDQyY2E4MWJjYTU4YTk4NjEyN2ZiNjEzZTg2YjZiN2RlIiwidGFnIjoiIn0=', 960000, 'eyJpdiI6IjEwQ0x3cERHMmswdGtuT0hvTytGMWc9PSIsInZhbHVlIjoiNDlZV3l5eXg5RkRyRWlGS1o4SU5iL1dKbnhyb0F3SDlpeE5TaG82amRNdz0iLCJtYWMiOiJhNmExNTgzZTZkN2FhM2U1OTMwNDJmODc3MjIyZTFhZGQ3OGRkMjhlNjNjNzE0YzIxZWU2MDdlNzE3M2Q0ZDNiIiwidGFnIjoiIn0=', 'pay_later', 1, '2024-12-15 12:26:06', '2024-12-15 12:26:06'),
(42, 9, 'eyJpdiI6IjhDVUE1OTlJT3Zub2ZpbElSUWRoc2c9PSIsInZhbHVlIjoiZkVBaUF6WEtHY1poWi9Yb1E2MWFpQT09IiwibWFjIjoiYWYxNDljYWFlNGY0MTFkNDhjOGE1MWRhODQ3YTI1N2M1YzI4ZmY1OTA0YmNmOTY5Y2FiNjU0MDIxZjFhMzRmYiIsInRhZyI6IiJ9', 'eyJpdiI6Ik00SXBnSCt2ckxQaHRZNXVvN0huV3c9PSIsInZhbHVlIjoicFBpY3FyL1JRdjlpbzQxWnozQTlhMUtCRXk5RWthUnB6NTBnZjNwbkgwWT0iLCJtYWMiOiI1ZjA4NzA3NzdmZjY5ODcwNjYxOWMwMDE5YTU5YWFmOTg1ZDQyZDBhYzI0YTA2OGZkNjk2Yzg0N2ZiOGJiZWFkIiwidGFnIjoiIn0=', 'eyJpdiI6Ino1NXR5Q1ZOUTdzZm9acEJmbFY0UkE9PSIsInZhbHVlIjoiOXI5aTVWR2s5aWw5NWtqWVlsVkdFMm5KRVZLcDVYd2FRZWJtbk43WW14SmpKYW45SndoMW5heVRZOEZYdGk4WCIsIm1hYyI6IjYzMTY2OTViZDkzNGRmZDIyOWYwZTg0MDk0MGZmM2MzY2VkMDg2OTMyNDJmY2Y3OTJmYjQ0MzUyZTlmMTlkZmIiLCJ0YWciOiIifQ==', 'eyJpdiI6Ik5EK2N6VkRpeGdqN0NUQ0p4UGthL1E9PSIsInZhbHVlIjoiOTRXTEFHeEQxenE3TmVLRTJGR3hWSmFHZEthN3ZoaTM1WlNKUjRQVGw3bz0iLCJtYWMiOiI2ZTEwZDlmMTk4NzZkODRhNTgyNTk5MzU4Mjk4YWQ2N2UxNDNlYmI5NDY1N2Q3YWEyMzlhNmNjNjQ2YjI1ZTk5IiwidGFnIjoiIn0=', 405000, 'eyJpdiI6InZ0SUdyb1RmK1ZjSGVPOUxsaklzSUE9PSIsInZhbHVlIjoiN2l6cHdUdG5NeU1SY3IrQ1BHZDA4dz09IiwibWFjIjoiNzkxM2Y0Y2IyMjdlMjBkNGY1MWQ5Y2Q5MTYwMWNlOTQ5YjVmMDA0NzAwZWZmMjBkNDVhNTc1YWRlMWIwZTAwMSIsInRhZyI6IiJ9', 'pay_later', 1, '2024-12-15 12:35:10', '2024-12-15 12:35:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
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
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(102, 41, 1, 5, 180000, 900000, '2024-12-15 12:26:06', '2024-12-15 12:26:06'),
(103, 41, 3, 2, 15000, 30000, '2024-12-15 12:26:06', '2024-12-15 12:26:06'),
(104, 41, 4, 1, 30000, 30000, '2024-12-15 12:26:06', '2024-12-15 12:26:06'),
(105, 42, 3, 3, 15000, 45000, '2024-12-15 12:35:10', '2024-12-15 12:35:10'),
(106, 42, 4, 4, 30000, 120000, '2024-12-15 12:35:10', '2024-12-15 12:35:10'),
(107, 42, 5, 4, 60000, 240000, '2024-12-15 12:35:10', '2024-12-15 12:35:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `madein_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Sửa Rửa Mặt 1', '<p><strong><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u&nbsp;</strong></strong>l&agrave; sản phẩm&nbsp;<a href=\"https://hasaki.vn/danh-muc/sua-rua-mat-c19.html\" target=\"_blank\">sữa rửa mặt</a>&nbsp;đến từ&nbsp;<a href=\"https://hasaki.vn/thuong-hieu/cerave.html\" target=\"_blank\">thương hiệu mỹ phẩm Cerave</a>&nbsp;của Mỹ,&nbsp;với sự kết hợp của ba Ceramides thiết yếu, Hyaluronic Acid sản phẩm gi&uacute;p l&agrave;m sạch v&agrave; giữ ẩm cho l&agrave;n da m&agrave; kh&ocirc;ng ảnh hưởng đến h&agrave;ng r&agrave;o bảo vệ da mặt v&agrave; cơ thể.</p>\r\n\r\n<p>Hiện sản phẩm&nbsp;<strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u&nbsp;</strong>đ&atilde; c&oacute; mặt tại <strong>Hasaki</strong> với 2 loại v&agrave; 3 dung t&iacute;ch (88ml; 236ml; 473ml):</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Dầu</strong><strong>&nbsp;</strong></p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Kh&ocirc;</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>1.&nbsp;<strong>Sữa Rửa Mặt Cerave Sạch S&acirc;u Cho Da Thường Đến Da Dầu</strong><strong>&nbsp;</strong></strong></h2>\r\n\r\n<p><strong>Sữa Rửa Mặt Cerave&nbsp;Foaming Cleanser&nbsp;</strong>kết cấu dạng gel tạo bọt rất l&yacute; tưởng để loại bỏ dầu thừa, bụi bẩn v&agrave; lớp trang điểm với c&ocirc;ng thức nhẹ nh&agrave;ng, kh&ocirc;ng ph&aacute; vỡ h&agrave;ng r&agrave;o bảo vệ tự nhi&ecirc;n của da v&agrave; chứa c&aacute;c th&agrave;nh phần gi&uacute;p duy tr&igrave; độ ẩm c&acirc;n bằng da. Cerave Foaming Cleanser<strong>&nbsp;</strong>chứa <strong>Ceramides, Axit Hyaluronic v&agrave; Niacinamide</strong> gi&uacute;p duy tr&igrave; h&agrave;ng r&agrave;o bảo vệ da, kh&oacute;a ẩm v&agrave; l&agrave;m dịu l&agrave;n da của bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Sữa Rửa Mặt Cerave Sạch Sâu Cho Da Thường Đến Da Dầu\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-2.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Loại da ph&ugrave; hợp:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho da thường đến dầu.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; thể sử dụng cho mặt v&agrave; to&agrave;n th&acirc;n.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Giải ph&aacute;p cho t&igrave;nh trạng da:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da thường tiết b&atilde; nhờn, <a href=\"https://hasaki.vn/danh-muc/dau-thua-lo-chan-long-to-c1879.html\" target=\"_blank\">dầu thừa, lỗ ch&acirc;n l&ocirc;ng to</a>.&nbsp;</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Kết cấu Sữa Rửa Mặt Cerave Sạch Sâu Cho Da Thường Đến Da Dầu\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-3.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ưu thế nổi bật:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>3 loại Ceramides (1, 3, 6-II)</strong>&nbsp;thiết yếu gi&uacute;p kh&ocirc;i phục h&agrave;ng r&agrave;o độ ẩm da.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hyaluronic Acid</strong>&nbsp;gi&uacute;p duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Niacinamide</strong>&nbsp;gi&uacute;p l&agrave;m dịu, nu&ocirc;i dưỡng, củng cố h&agrave;ng r&agrave;o da.</p>\r\n	</li>\r\n	<li>\r\n	<p>Kết cấu dạng gel tạo bọt gi&uacute;p l&agrave;m sạch s&acirc;u, loại bỏ dầu thừa, th&ocirc;ng tho&aacute;ng lỗ ch&acirc;n l&ocirc;ng nhưng vẫn duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Sữa Rửa Mặt Cerave Foaming Cleanser\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-tao-bot-cho-da-thuong-den-da-dau-1.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>2.&nbsp;<strong>Sữa Rửa Mặt Cerave Cho Da Thường Đến Kh&ocirc;&nbsp;</strong></h2>\r\n\r\n<p><strong>Sữa Rửa Mặt Cerave&nbsp;Hydrating Cleanser&nbsp;</strong>gi&uacute;p loại bỏ bụi bẩn, dầu thừa, nhẹ nh&agrave;ng lấy đi lớp kem chống nắng, trang điểm nhưng vẫn giữ h&agrave;ng r&agrave;o bảo vệ da v&agrave; kh&ocirc;ng l&agrave;m mất đi độ ẩm tự nhi&ecirc;n. Sữa rửa mặt dịu nhẹ với c&aacute;c th&agrave;nh phần như <strong>Ceramides </strong>v&agrave;<strong> Axit Hyaluronic</strong> c&oacute; t&aacute;c dụng kh&ocirc;i phục h&agrave;ng r&agrave;o tự nhi&ecirc;n của da v&agrave; dưỡng da ẩm mịn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;<img alt=\"Sữa Rửa Mặt Cerave Cho Da Thường Đến Khô \" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-cho-da-thuong-den-kho-1.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Loại da ph&ugrave; hợp:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho da thường đến kh&ocirc;.</p>\r\n	</li>\r\n	<li>\r\n	<p>C&oacute; thể sử dụng cho mặt v&agrave; to&agrave;n th&acirc;n.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sản phẩm th&iacute;ch hợp cho cả người lớn v&agrave; trẻ em.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Giải ph&aacute;p cho t&igrave;nh trạng da:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Da <a href=\"https://hasaki.vn/danh-muc/thieu-am-thieu-nuoc-c1883.html\" target=\"_blank\">thiếu nước, thiếu ẩm</a>.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Da kh&ocirc; r&aacute;p, sần s&ugrave;i, bong tr&oacute;c.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Sữa Rửa Mặt Cerave Hydrating Cleanser\" src=\"https://media.hasaki.vn/wysiwyg/Chau/sua-rua-mat-cerave-cho-da-thuong-den-kho-2.jpg\" style=\"width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Ưu thế nổi bật:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sản phẩm gi&uacute;p l&agrave;m sạch bụi bẩn, dầu thừa, lấy đi cặn b&atilde; lớp trang điểm c&ograve;n s&oacute;t tr&ecirc;n da v&agrave; l&agrave;m th&ocirc;ng tho&aacute;ng lỗ ch&acirc;n l&ocirc;ng nhưng vẫn duy tr&igrave; độ ẩm cho da.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>3 loại Ceramides (1, 3, 6-II)</strong>&nbsp;thiết yếu gi&uacute;p kh&ocirc;i phục h&agrave;ng r&agrave;o độ ẩm da.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>C&ocirc;ng nghệ MVE độc quyền</strong> kho&aacute; ẩm cho da suốt 24 giờ.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Hyaluronic Acid</strong> gi&uacute;p duy tr&igrave; độ ẩm tự nhi&ecirc;n của da.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3>Độ an to&agrave;n:&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Kh&ocirc;ng x&agrave; ph&ograve;ng&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng hương liệu&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng chứa paraben&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Kh&ocirc;ng b&iacute;t tắc lỗ ch&acirc;n l&ocirc;ng&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>Đ&atilde; được kiểm nghiệm kh&ocirc;ng g&acirc;y k&iacute;ch ứng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Bảo quản:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Nơi kh&ocirc; r&aacute;o tho&aacute;ng m&aacute;t.</p>\r\n	</li>\r\n	<li>\r\n	<p>Tr&aacute;nh &aacute;nh nắng trực tiếp, nơi c&oacute; nhiệt độ cao hoặc ẩm ướt.</p>\r\n	</li>\r\n	<li>\r\n	<p>Đậy nắp k&iacute;n sau khi sử dụng.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h3><strong>Th&ocirc;ng số sản phẩm:</strong></h3>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Dung t&iacute;ch: </strong>88ml; 236ml; 473ml</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Thương hiệu:&nbsp;</strong>Cerave&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Xuất xứ thương hiệu:</strong> Mỹ.</p>\r\n	</li>\r\n</ul>', 'Đây là sản phẩm hàng đầu dành cho da dầu mụn', 200000, -3, 180000, 500, '00012', 1, NULL, '2024-12-15 12:26:13'),
(2, 2, 1, 1, 'Sửa Rửa Mặt 2', NULL, NULL, 170000, 101, 150000, NULL, NULL, 0, NULL, '2023-07-16 15:12:16'),
(3, 3, 1, 1, 'Sửa Rửa Mặt 3', NULL, NULL, 30000, 14, 15000, NULL, NULL, 1, NULL, '2024-12-15 12:35:14'),
(4, 4, 2, 1, 'Kem Chống Nắng 1', '<p>ưqwqe</p>', 'sssad', 40000, 14, 30000, 100, NULL, 1, NULL, '2024-12-15 12:35:14'),
(5, 1, 2, 1, 'Kem Chống Nắng 2', NULL, NULL, 70000, 15, 60000, NULL, NULL, 1, NULL, '2024-12-15 12:35:14'),
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
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sữa Rửa Mặt', NULL, NULL),
(2, 'Kem Chống Nắng', NULL, NULL),
(3, 'Tẩy Trang', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
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
-- Đang đổ dữ liệu cho bảng `product_comments`
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
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
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
-- Cấu trúc bảng cho bảng `suppliers`
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
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Nhà cung cấp 1', 'Nhon Trach district', 'ncc1@gmail.com', '036363636', NULL, NULL),
(2, 'Nhà cung cấp 2', 'Nhon Trach district', 'ncc2@gmail.com', '036363636', NULL, NULL),
(3, 'Nhà cung cấp 3', 'Nhon Trach district', 'ncc3@gmail.com', '036363636', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `importinvoices`
--
ALTER TABLE `importinvoices`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `importinvoice_details`
--
ALTER TABLE `importinvoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `madeins`
--
ALTER TABLE `madeins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `importinvoices`
--
ALTER TABLE `importinvoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `importinvoice_details`
--
ALTER TABLE `importinvoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `madeins`
--
ALTER TABLE `madeins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
