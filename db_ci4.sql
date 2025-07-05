-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 07:32 AM
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
-- Database: `db_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskon`
--

CREATE TABLE `diskon` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nominal` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diskon`
--

INSERT INTO `diskon` (`id`, `tanggal`, `nominal`, `created_at`, `updated_at`) VALUES
(1, '2025-07-04', 60324, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(3, '2025-07-06', 46335, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(4, '2025-07-07', 20322, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(5, '2025-07-08', 38228, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(6, '2025-07-09', 34531, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(7, '2025-07-10', 48610, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(8, '2025-07-11', 45728, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(9, '2025-07-12', 48395, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(10, '2025-07-13', 42287, '2025-07-04 15:47:36', '2025-07-04 15:47:36'),
(12, '2025-07-14', 123456, '2025-07-04 17:40:11', '2025-07-04 17:40:11'),
(13, '2025-07-15', 1111111, '2025-07-04 17:52:06', '2025-07-04 17:52:06'),
(15, '2025-07-05', 50000, '2025-07-05 12:18:17', '2025-07-05 12:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-05-07-060755', 'App\\Database\\Migrations\\Product', 'default', 'App', 1746598147, 1),
(2, '2025-05-07-060755', 'App\\Database\\Migrations\\Transaction', 'default', 'App', 1746598147, 1),
(3, '2025-05-07-060755', 'App\\Database\\Migrations\\User', 'default', 'App', 1746598148, 1),
(4, '2025-05-07-060811', 'App\\Database\\Migrations\\TransactionDetail', 'default', 'App', 1746598148, 1),
(5, '2025-05-12-145905', 'App\\Database\\Migrations\\ProductCategory', 'default', 'App', 1747062179, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(5) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `jumlah`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'ASUS TUF A15 FA506NF', 10899000, 5, 'asus_tuf_a15.jpg', '2025-05-07 06:14:46', NULL),
(2, 'Asus Vivobook 14 A1404ZA', 6899000, 7, 'asus_vivobook_14.jpg', '2025-05-07 06:14:46', NULL),
(3, 'Lenovo IdeaPad Slim 3-14IAU7', 6299000, 5, 'lenovo_idepad_slim_3.jpg', '2025-05-07 06:14:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `nama`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Elektronik', 'Kategori produk elektronik seperti HP, laptop, dll.', '2025-05-12 15:23:10', '2025-05-26 13:34:57'),
(2, 'Pakaian', 'Kategori produk pakaian seperti baju dan celana.', '2025-05-12 15:23:10', '2025-05-12 15:23:10'),
(3, 'Laptop Gaming', NULL, '2025-05-30 02:55:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `total_harga` double NOT NULL,
  `alamat` text NOT NULL,
  `ongkir` double DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `username`, `total_harga`, `alamat`, `ongkir`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hafizh01', 10910000, 'Semarang', 11000, 0, '2025-06-14 12:53:08', '2025-06-14 12:53:08'),
(2, 'hafizh01', 10910000, 'Semarang', 11000, 0, '2025-06-16 13:16:39', '2025-06-16 13:16:39'),
(3, 'hafizh01', 10660000, 'Jl. Menoreh ', 11000, 0, '2025-07-05 11:38:56', '2025-07-05 11:38:56'),
(4, 'salwarama', 10889000, 'Jl. Menoreh ', 40000, 0, '2025-07-05 11:42:51', '2025-07-05 11:42:51'),
(5, 'salwarama', 7049000, 'Jl. Menoreh ', 200000, 0, '2025-07-05 12:08:43', '2025-07-05 12:08:43'),
(6, 'salwarama', 10874000, 'Jl. Menoreh ', 25000, 0, '2025-07-05 12:19:07', '2025-07-05 12:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `jumlah` int(5) NOT NULL,
  `diskon` double DEFAULT NULL,
  `subtotal_harga` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`id`, `transaction_id`, `product_id`, `jumlah`, `diskon`, `subtotal_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 10899000, '2025-06-14 12:53:10', '2025-06-14 12:53:10'),
(2, 2, 1, 1, 0, 10899000, '2025-06-16 13:16:41', '2025-06-16 13:16:41'),
(3, 3, 1, 1, 250000, 10649000, '2025-07-05 11:38:56', '2025-07-05 11:38:56'),
(4, 4, 1, 1, 50000, 10849000, '2025-07-05 11:42:51', '2025-07-05 11:42:51'),
(5, 5, 2, 1, 50000, 6849000, '2025-07-05 12:08:43', '2025-07-05 12:08:43'),
(6, 6, 1, 1, 50000, 10849000, '2025-07-05 12:19:07', '2025-07-05 12:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'usamah.intan', 'gina69@gmail.com', '$2y$10$UfyrU5ic8p.a0sp9w4IKWOqigTYxAA440dFQfokw1vUCtGWNk2.sy', 'admin', '2025-05-07 06:16:03', NULL),
(2, 'talia64', 'galang42@gmail.com', '$2y$10$KIr/IMHwHD/TlKGNU1jvk.BkGtYHL.SCYEB8pEuXg40X47IAGLJi.', 'admin', '2025-05-07 06:16:03', NULL),
(3, 'unapitupulu', 'febi.kurniawan@yahoo.com', '$2y$10$oHX7zlAPMNqyr3Ytf4gHWOZ1OY3WP5kExMOw8YXu6R4KgYwU/aAOC', 'admin', '2025-05-07 06:16:03', NULL),
(4, 'tnapitupulu', 'kamaria.tampubolon@yahoo.com', '$2y$10$Mm9qpArm4fd.RQ7YCPJC9u/LpcKoWFLHox7GwPhymT3dpAvtCaT5q', 'admin', '2025-05-07 06:16:03', NULL),
(5, 'tirtayasa.hariyah', 'danuja.siregar@yahoo.co.id', '$2y$10$H9IuG8Yd5hnIDsNp5.m7l.grOTOSFrH6VEiisFoxp2M09X7wiq8sK', 'admin', '2025-05-07 06:16:04', NULL),
(6, 'hakim.asirwada', 'ira61@yahoo.com', '$2y$10$lofuoykzQ2d4OAYCxG7OneoiIqAanSgqK.LwN8q/jwrMs9Tfr95GG', 'admin', '2025-05-07 06:16:04', NULL),
(7, 'rendy.tamba', 'bhastuti@puspita.com', '$2y$10$RgfilIDlXMwAsHS4VCqTQuVkUjZUaENZkMkcm8OgtL3TP/0iUQ62i', 'admin', '2025-05-07 06:16:04', NULL),
(8, 'salwarama', 'salwa37@yahoo.com', '$2y$10$6RetvsAAO4zghkJhP/nTwebjCY6iKPoFSsuxHR77LvXziNGi.oqyC', 'guest', '2025-05-07 06:16:04', NULL),
(9, 'rahmawati.lili', 'usamah.tasnim@yahoo.co.id', '$2y$10$2wOt.GhrRuX3KX9hpcbb5eiEsFXehyrQ.J5eiM8K72osouaev26qu', 'admin', '2025-05-07 06:16:04', NULL),
(10, 'hafizh01', 'hafizh01@gmail.com', '$2y$10$dhuMfEI37D0aM1IhCIpHTelDFaMAWYdrVkjU9nnvjdSZnZU5HNm3y', 'admin', '2025-05-07 06:16:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskon`
--
ALTER TABLE `diskon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskon`
--
ALTER TABLE `diskon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
