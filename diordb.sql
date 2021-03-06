-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 01:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameCol` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typeproduct` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `nameCol`, `hinhanh`, `typeproduct`, `created_at`, `updated_at`) VALUES
(1, 'SPRING-SUMMER 2022 COLLECTION', 'https://www.dior.com/couture/var/dior/storage/images/29896073/8-eng-HK/cdc-femme-collection-spring-summer-2218_1440_1200.jpg', 2, '2022-04-04 05:57:19', '2022-04-04 05:57:19'),
(2, 'B29 SNEAKERS', 'https://www.dior.com/couture/var/dior/storage/images/30482795/6-eng-HK/cdc-homme-sneakers-b2969_1440_1200.jpg', 1, '2022-04-04 05:57:19', '2022-04-04 05:57:19'),
(3, 'DIOR CHEZ MOI', 'https://www.dior.com/couture/var/dior/storage/images/horizon/fashion/block-cover-cdc-cover-4/block-cover-item-cdc-femme-gift-for-her2/32115299-2-eng-HK/cdc-femme-dior-chez-moi27_1440_1200.jpg', 2, '2022-04-04 05:57:19', '2022-04-04 05:57:19'),
(4, 'SUMMER 2022 COLLECTION', 'https://www.dior.com/couture/var/dior/storage/images/31777747/4-eng-HK/cdc-homme-summer-2022-collection80_1440_1200.jpg', 1, '2022-04-04 05:57:19', '2022-04-04 05:57:19'),
(5, 'SPRING-SUMMER 2022 COLLECTION', 'https://www.dior.com/couture/var/dior/storage/images/31781970/4-eng-GB/cdc-baby-spring-summer-2022-collection18_1440_1200.jpg', 3, '2022-04-04 05:57:19', '2022-04-04 05:57:19');

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
(8, '2022_02_26_094450_create_orderdetail_table', 1),
(9, '2022_03__29_094450_create_collection_table', 1);

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
  `subtitle` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluongton` int(11) DEFAULT NULL,
  `trangthai` tinyint(4) DEFAULT NULL,
  `maloaihang` bigint(20) UNSIGNED NOT NULL,
  `collectionID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`masanpham`, `tensanpham`, `giaban`, `giagiam`, `mota`, `subtitle`, `hinhanh`, `soluongton`, `trangthai`, `maloaihang`, `collectionID`, `created_at`, `updated_at`) VALUES
(1, 'SHORT-SLEEVED BLOUSE', 2000, 0, 'A staple of the Dior silhouette, the blouse is adorned with the D-Tiger Pop print that embodies the collection\'s colorful pop universe. Crafted in pink cotton poplin, it features a cropped, regular fit with a front button closure. The short-sleeved blouse can be worn with the matching skirt to complete the look.', 'Pink Cotton Poplin with Multicolor D-Tiger Pop Motif', 'download.jpg', 50, 1, 2, 1, '2022-04-04 08:18:41', '2022-04-04 08:18:41'),
(2, '??o veston', 1234561, 123, '??dqwdqdasdas', 'Sub Title 3', '905ce67f-69df-4595-a3b6-a8946631e27c_1.png', 43, 1, 1, 2, '2022-04-04 03:31:09', '2022-04-04 03:31:09');

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
(1, 'Men\'Fashion', '2022-04-04 05:49:08', '2022-04-04 05:49:08'),
(2, 'Women\'s Fashion', '2022-04-04 05:49:08', '2022-04-04 05:49:08'),
(3, 'Kid\'s Fashion', '2022-04-04 05:54:24', '2022-04-04 05:54:24');

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
(1, 'Huy', 'huy@gmail.com', NULL, '$2y$10$hWljVmIQ4P7Euby6okPtu.38V/om/6RTHKM67X7C5K/pKQPtkyNOa', 1, 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collections_typeproduct_foreign` (`typeproduct`);

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
  ADD KEY `products_maloaihang_foreign` (`maloaihang`),
  ADD KEY `products_collectionID_foreign` (`collectionID`);

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
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `makhachhang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `masanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `typeproducts`
--
ALTER TABLE `typeproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_typeproduct_foreign` FOREIGN KEY (`typeproduct`) REFERENCES `typeproducts` (`id`);

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
  ADD CONSTRAINT `products_collectionID_foreign` FOREIGN KEY (`collectionID`) REFERENCES `collections` (`id`),
  ADD CONSTRAINT `products_maloaihang_foreign` FOREIGN KEY (`maloaihang`) REFERENCES `typeproducts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
