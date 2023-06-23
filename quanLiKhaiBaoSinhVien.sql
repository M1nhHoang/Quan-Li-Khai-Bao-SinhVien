-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2023 at 08:49 AM
-- Server version: 10.3.39-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minhhoa2_testPhpWebLaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `tbCong_Viec`
--

CREATE TABLE `tbCong_Viec` (
  `soCMND` int(11) NOT NULL,
  `ngayVaoCongTy` date NOT NULL,
  `maNganh` int(11) NOT NULL,
  `tenCongViec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diaChiCongTy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoiGianLamViec` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbCong_Viec`
--

INSERT INTO `tbCong_Viec` (`soCMND`, `ngayVaoCongTy`, `maNganh`, `tenCongViec`, `tenCongTy`, `diaChiCongTy`, `thoiGianLamViec`) VALUES
(1, '2022-01-01', 1, 'Cong viec 1', 'Cong ty 1', 'Dia chi cong ty 1', '2022-01-01'),
(2, '2023-01-01', 2, 'Cong viec 2', 'Cong ty 2', 'Dia chi cong ty 2', '2023-01-01'),
(9, '2023-06-23', 1, NULL, '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbNganh`
--

CREATE TABLE `tbNganh` (
  `maNganh` int(11) NOT NULL,
  `tenNganh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiNganh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbNganh`
--

INSERT INTO `tbNganh` (`maNganh`, `tenNganh`, `loaiNganh`) VALUES
(1, 'Nganh 1', 'Loai 1'),
(2, 'Nganh 2', 'Loai 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbSinhVien`
--

CREATE TABLE `tbSinhVien` (
  `soCMND` int(11) NOT NULL,
  `hoTen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL CHECK (`Email` like '%@%.%'),
  `soDt` varchar(10) NOT NULL CHECK (`soDt` regexp '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]'),
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbSinhVien`
--

INSERT INTO `tbSinhVien` (`soCMND`, `hoTen`, `Email`, `soDt`, `diaChi`) VALUES
(1, 'Sinh vien 1', 'sinhvien1@example.com', '0123456789', ''),
(2, 'Sinh vien 2', 'sinhvien2@example.com', '0987654321', ''),
(9, '1', '12@gmail.com', '1234456789', '11 một hai ba'),
(12, '1', '2@gmail.com', '1234456789', '12'),
(122, '12', '12@gmail.com', '1234456789', '12'),
(123, '12', '12@gmail.com', '1234456789', '1'),
(1222, '12', '12@gmail.com', '1234456789', '1'),
(6969, 'ABCDEF', '12@gmail.com', '1234456789', '11 một hai ba'),
(12345, '12', '12@gmail.com', '1234456789', '1'),
(13125, '12', 'boydammedamsamcotdien@gmail.com', '1234567899', '123'),
(123456, '12', '12@gmail.com', '1234456789', '1'),
(191923777, 'Hồ Lê Minh Hoàng', '12@gmail.com', '1234456789', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbTot_Nghiep`
--

CREATE TABLE `tbTot_Nghiep` (
  `soCMND` int(11) NOT NULL,
  `maTruong` int(11) NOT NULL,
  `maNganh` int(11) NOT NULL,
  `heTN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngayTN` date DEFAULT NULL,
  `loaiTN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbTot_Nghiep`
--

INSERT INTO `tbTot_Nghiep` (`soCMND`, `maTruong`, `maNganh`, `heTN`, `ngayTN`, `loaiTN`) VALUES
(1, 1, 1, 'He TN 1', '2022-01-01', 'Loai TN 1'),
(2, 2, 2, 'He TN 2', '2023-01-01', 'Loai TN 2'),
(9, 1, 1, NULL, NULL, 'Xuất Xắc'),
(6969, 1, 1, NULL, NULL, 'Xuất Xắc'),
(13125, 1, 1, NULL, NULL, 'Xuất Xắc'),
(123456, 1, 1, NULL, NULL, 'Xuất Xắc'),
(191923777, 1, 1, NULL, NULL, 'Xuất Xắc');

-- --------------------------------------------------------

--
-- Table structure for table `tbTruong`
--

CREATE TABLE `tbTruong` (
  `maTruong` int(11) NOT NULL,
  `tenTruong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDt` varchar(10) NOT NULL CHECK (`soDt` regexp '[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]')
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbTruong`
--

INSERT INTO `tbTruong` (`maTruong`, `tenTruong`, `diaChi`, `soDt`) VALUES
(1, 'Truong A', 'Dia chi A', '0123456789'),
(2, 'Truong B', 'Dia chi B', '0987654321');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1234', '1234@gmail.com', NULL, '$2y$10$7yzTOZjC368ZG9ZKnMQMcORX2ziQha6rFPXno/EiEdFMeftaHuYnS', NULL, '2023-06-22 00:28:42', '2023-06-22 00:28:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbCong_Viec`
--
ALTER TABLE `tbCong_Viec`
  ADD PRIMARY KEY (`soCMND`,`ngayVaoCongTy`),
  ADD KEY `maNganh` (`maNganh`);

--
-- Indexes for table `tbNganh`
--
ALTER TABLE `tbNganh`
  ADD PRIMARY KEY (`maNganh`);

--
-- Indexes for table `tbSinhVien`
--
ALTER TABLE `tbSinhVien`
  ADD PRIMARY KEY (`soCMND`);

--
-- Indexes for table `tbTot_Nghiep`
--
ALTER TABLE `tbTot_Nghiep`
  ADD PRIMARY KEY (`soCMND`,`maTruong`,`maNganh`),
  ADD KEY `maNganh` (`maNganh`),
  ADD KEY `maTruong` (`maTruong`);

--
-- Indexes for table `tbTruong`
--
ALTER TABLE `tbTruong`
  ADD PRIMARY KEY (`maTruong`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbNganh`
--
ALTER TABLE `tbNganh`
  MODIFY `maNganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbSinhVien`
--
ALTER TABLE `tbSinhVien`
  MODIFY `soCMND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191923778;

--
-- AUTO_INCREMENT for table `tbTruong`
--
ALTER TABLE `tbTruong`
  MODIFY `maTruong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbCong_Viec`
--
ALTER TABLE `tbCong_Viec`
  ADD CONSTRAINT `tbCong_Viec_ibfk_1` FOREIGN KEY (`soCMND`) REFERENCES `tbSinhVien` (`soCMND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbCong_Viec_ibfk_2` FOREIGN KEY (`maNganh`) REFERENCES `tbNganh` (`maNganh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbTot_Nghiep`
--
ALTER TABLE `tbTot_Nghiep`
  ADD CONSTRAINT `tbTot_Nghiep_ibfk_1` FOREIGN KEY (`soCMND`) REFERENCES `tbSinhVien` (`soCMND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbTot_Nghiep_ibfk_2` FOREIGN KEY (`maNganh`) REFERENCES `tbNganh` (`maNganh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbTot_Nghiep_ibfk_3` FOREIGN KEY (`maTruong`) REFERENCES `tbTruong` (`maTruong`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
