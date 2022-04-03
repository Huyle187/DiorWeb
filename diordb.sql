-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 08:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `makhachhang` int(10) UNSIGNED NOT NULL,
  `tenkhachhang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(4) NOT NULL,
  `ngaysinh` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_02_24_092456_create_typeproduct_table', 1),
(5, '2022_02_25_092458_create_product_table', 1),
(6, '2022_02_26_092938_create_customer_table', 1),
(7, '2022_02_26_093417_create_order_table', 1),
(8, '2022_02_26_094450_create_orderdetail_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `sohoadon` int(10) UNSIGNED NOT NULL,
  `masanpham` int(10) UNSIGNED NOT NULL,
  `dongia` double(8,2) DEFAULT NULL,
  `soluongmua` int(11) DEFAULT NULL,
  `mucgiamgia` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sohoadon` int(10) UNSIGNED NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaydathang` datetime DEFAULT NULL,
  `ngaygiaohang` datetime DEFAULT NULL,
  `tinhtranggiaohang` smallint(6) DEFAULT NULL,
  `tinhtrangthanhtoan` smallint(6) DEFAULT NULL,
  `makhachhang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `masanpham` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giaban` bigint(20) DEFAULT NULL,
  `giagiam` bigint(20) DEFAULT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtittle` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluongton` int(11) DEFAULT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `maloaihang` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`masanpham`, `tensanpham`, `giaban`, `giagiam`, `mota`, `subtittle`, `hinhanh`, `soluongton`, `trangthai`, `maloaihang`, `created_at`, `updated_at`) VALUES
(1, 'Product has Image', 123456, 123, 'asdasdasdasdasdasdasdasdasdas', NULL, '/resources/images/cat-5.jpg', 50, 1, 1, '2022-04-03 05:29:16', '2022-04-03 05:29:16'),
(2, '3213123', 12, 12, '1111111111111', NULL, '/resources/images/download.jpg', 122, 1, 1, '2022-04-03 08:35:40', '2022-04-03 11:46:35'),
(3, 'FDSF', 3213, 23312, '1', NULL, '/resources/images/download.jpg', 1, 1, 2, '2022-04-03 11:49:35', '2022-04-03 11:49:35'),
(4, '1231', 3213, 3213, '321', NULL, '/resources/images/3213123.jpg', 321, 1, 1, '2022-04-03 11:50:05', '2022-04-03 11:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `typeproducts`
--

CREATE TABLE `typeproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenloaihang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `typeproducts`
--

INSERT INTO `typeproducts` (`id`, `tenloaihang`, `created_at`, `updated_at`) VALUES
(1, 'Men\' Fashion', '2022-04-03 12:28:27', '2022-04-03 12:28:27'),
(2, 'Women\' Fashion', '2022-04-03 12:28:27', '2022-04-03 12:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` tinyint(4) NOT NULL,
  `access_level` smallint(6) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `enable`, `access_level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huy', 'huy@gmail.com', NULL, '$2y$10$F4dMdzOJAmhjtfm9vMFU/OGkqdl0stlsGDxsoTVgOq9zjM79hCrcq', 1, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`sohoadon`),
  ADD KEY `orderdetails_masanpham_foreign` (`masanpham`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sohoadon`),
  ADD KEY `orders_makhachhang_foreign` (`makhachhang`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `products_maloaihang_foreign` (`maloaihang`);

--
-- Indexes for table `typeproducts`
--
ALTER TABLE `typeproducts`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `makhachhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `sohoadon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `masanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `typeproducts`
--
ALTER TABLE `typeproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_masanpham_foreign` FOREIGN KEY (`masanpham`) REFERENCES `products` (`masanpham`),
  ADD CONSTRAINT `orderdetails_sohoadon_foreign` FOREIGN KEY (`sohoadon`) REFERENCES `orders` (`sohoadon`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_makhachhang_foreign` FOREIGN KEY (`makhachhang`) REFERENCES `customers` (`makhachhang`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_maloaihang_foreign` FOREIGN KEY (`maloaihang`) REFERENCES `typeproducts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
