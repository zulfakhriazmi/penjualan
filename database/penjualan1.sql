-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 03:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id_transaksi` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id_transaksi`, `id_produk`, `qty`, `created_at`, `updated_at`) VALUES
(26, 3, 1, '2020-06-18 06:11:16', '2020-06-18 06:11:16'),
(26, 1, 4, '2020-06-18 06:11:16', '2020-06-18 06:11:16'),
(27, 2, 3, '2020-06-18 06:12:14', '2020-06-18 06:12:14'),
(27, 3, 5, '2020-06-18 06:12:14', '2020-06-18 06:12:14'),
(27, 1, 4, '2020-06-18 06:12:14', '2020-06-18 06:12:14'),
(28, 1, 2, '2020-06-18 06:29:53', '2020-06-18 06:29:53'),
(28, 2, 6, '2020-06-18 06:29:53', '2020-06-18 06:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Laptop/Komputer', '2020-06-17 00:11:12', '2020-06-17 00:11:12'),
(2, 'Penyimpanan', '2020-06-17 00:11:33', '2020-06-17 00:11:33'),
(3, 'Jaringan', '2020-06-17 00:12:09', '2020-06-17 00:21:23'),
(4, 'Utility', '2020-06-18 06:31:00', '2020-06-18 06:31:28');

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
(1, '2020_06_16_174451_create_penggunas_table', 1),
(8, '2020_06_16_174537_create_pelanggans_table', 2),
(9, '2020_06_16_174615_create_produks_table', 2),
(10, '2020_06_16_174714_create_kategoris_table', 2),
(11, '2020_06_16_174757_create_transaksis_table', 2),
(12, '2020_06_16_175008_create_detail_transaksis_table', 2),
(13, '2020_06_17_050437_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Fahri', 'Panam', '085356068635', '2020-06-17 00:15:13', '2020-06-17 00:20:42'),
(2, 'Ari', 'Rumbai', '085356068632', '2020-06-17 19:15:47', '2020-06-17 19:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` int(10) NOT NULL,
  `id_kategori` int(10) NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sandisk 16 GB', 75000, '2020-06-17 00:37:17', '2020-06-17 07:44:38'),
(2, 3, 'Realtek PCI', 85000, '2020-06-17 19:14:17', '2020-06-17 19:14:17'),
(3, 1, 'Laptop Asus A5i', 4500000, '2020-06-17 19:15:03', '2020-06-17 19:15:03'),
(4, 2, 'Kingston 8 GB', 55000, '2020-06-18 06:30:36', '2020-06-18 06:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id_transaksi` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id_transaksi`, `id_pelanggan`, `created_at`, `updated_at`) VALUES
(26, 1, '2020-06-18 06:11:16', '2020-06-18 06:11:16'),
(27, 2, '2020-06-18 06:12:14', '2020-06-18 06:12:14'),
(28, 1, '2020-06-18 06:29:53', '2020-06-18 06:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD KEY `transaksi` (`id_transaksi`),
  ADD KEY `produk` (`id_produk`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kat` (`id_kategori`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `pelanggan` (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `kat` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
