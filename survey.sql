-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `questions_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tidak sesuai', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(2, 1, 'Kurang sesuai', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(3, 1, 'Sesuai', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(4, 1, 'Sangat sesuai', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(5, 2, 'Tidak mudah', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(6, 2, 'Kurang mudah', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(7, 2, 'Mudah', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(8, 2, 'Sangat mudah', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(9, 3, 'Tidak cepat', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(10, 3, 'Kurang cepat', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(11, 3, 'Cepat', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(12, 3, 'Sangat cepat', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(13, 4, 'Sangat mahal', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(14, 4, 'Cukup mahal', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(15, 4, 'Murah', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(16, 4, 'Gratis', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(17, 5, 'Tidak sesuai', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(18, 5, 'Kurang sesuai', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(19, 5, 'Sesuai', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(20, 5, 'Sangat sesuai', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(21, 6, 'Tidak kompeten', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(22, 6, 'Kurang kompeten', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(23, 6, 'Kompeten', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(24, 6, 'Sangat kompeten', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(25, 7, 'Tidak sopan dan ramah', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(26, 7, 'Kurang sopan dan ramah', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(27, 7, 'Sopan dan ramah', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(28, 7, 'Sangat sopan dan ramah', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(29, 8, 'Buruk', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(30, 8, 'Cukup', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(31, 8, 'Baik', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(32, 8, 'Sangat Baik', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(33, 9, 'Tidak ada', 1, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(34, 9, 'Ada tetapi tidak berfungsi', 2, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(35, 9, 'Berfungsi kurang maksimal', 3, '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(36, 9, 'Dikelola dengan baik', 4, '2023-09-13 00:34:21', '2023-09-13 00:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_user` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `code_user`, `date`, `class`, `comment`, `created_at`, `updated_at`) VALUES
(1, '2023-09-13 18:44:59', '2023-04-21', 'kritik', 'Kurang', '2023-09-13 10:44:59', '2023-09-13 10:44:59'),
(2, '2023-09-13 18:49:17', '2023-04-21', 'saran', 'Sangat Baik', '2023-09-13 10:49:17', '2023-09-13 10:49:17'),
(3, '2023-09-21 08:40:01', '2023-09-21', 'saran', 'Sangat Bagus', '2023-09-21 00:40:01', '2023-09-21 00:40:01'),
(4, '2023-09-21 08:40:47', '2023-09-21', 'kritik', 'Kurang Optimal', '2023-09-21 00:40:47', '2023-09-21 00:40:47'),
(5, '2023-09-23 02:03:52', '2023-04-21', 'saran', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '2023-09-22 18:03:52', '2023-09-22 18:03:52');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_11_064312_create_questions_table', 1),
(6, '2023_09_11_110324_create_answers_table', 1),
(7, '2023_09_12_090815_create_surveys_table', 1),
(8, '2023_09_13_075701_create_periodes_table', 1),
(9, '2023_09_13_093033_create_services_table', 2),
(10, '2023_09_13_182017_create_comments_table', 3);

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
-- Table structure for table `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mulai` varchar(255) NOT NULL,
  `akhir` varchar(255) NOT NULL,
  `target` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periodes`
--

INSERT INTO `periodes` (`id`, `mulai`, `akhir`, `target`, `created_at`, `updated_at`) VALUES
(1, '2023-09-01', '2023-12-01', 90, '2023-09-13 00:46:41', '2023-09-13 00:46:41');

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` bigint(20) NOT NULL,
  `questions_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `no`, `questions_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bagaimana pendapat Saudara tentang kesesuaian\npersyaratan pelayanan dengan jenis pelayanannya.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(2, 2, 'Bagaimana pemahaman Saudara tentang kemudahan\nprosedur pelayanan di unit ini.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(3, 3, 'Bagaimana pendapat Saudara tentang kecepatan\nwaktu dalam memberikan pelayanan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(4, 4, 'Bagaimana pendapat Saudara tentang kewajaran\nbiaya/tarif dalam pelayanan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(5, 5, 'Bagaimana pendapat Saudara tentang kesesuaian\nproduk pelayanan antara yang tercantum dalam\nstandar pelayanan dengan hasil yang diberikan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(6, 6, 'Bagaimana pendapat Saudara tentang kompetensi/\nkemampuan petugas dalam pelayanan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(7, 7, ' Bagamana pendapat saudara perilaku petugas dalam\npelayanan terkait kesopanan dan keramahan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(8, 8, 'Bagaimana pendapat Saudara tentang kualitas sarana\ndan prasarana.', '2023-09-13 00:34:21', '2023-09-13 00:34:21'),
(9, 9, 'Bagaimana pendapat Saudara tentang penanganan\npengaduan pengguna layanan.', '2023-09-13 00:34:21', '2023-09-13 00:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `no`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'KTP', '2023-09-13 01:55:39', '2023-09-13 02:02:37'),
(2, 2, 'Akta', '2023-09-13 01:56:28', '2023-09-13 01:56:28'),
(3, 3, 'Sertifikat', '2023-09-13 01:56:44', '2023-09-13 01:56:44'),
(4, 4, 'Poli Umum', '2023-09-13 01:56:56', '2023-09-13 01:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_user` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` bigint(20) NOT NULL,
  `education` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `total_IKP` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `code_user`, `date`, `time`, `gender`, `age`, `education`, `service`, `total_IKP`, `created_at`, `updated_at`) VALUES
(1, '2023-09-13 08:42:28', '2023-09-13', '13.00 - 17.00*', 'laki-laki', 22, 'sma', 'poli umum', 72, '2023-09-13 00:42:28', '2023-09-13 00:42:28'),
(3, '2023-09-13 18:15:43', '2023-02-11', '13.00 - 17.00*', 'perempuan', 22, 'sma', 'Sertifikat', 89, '2023-09-13 10:15:43', '2023-09-13 10:15:43'),
(4, '2023-09-21 08:18:11', '2023-04-21', '08.00 - 12.00*', 'laki-laki', 25, 's1', 'Sertifikat', 78, '2023-09-21 00:18:11', '2023-09-21 00:18:11'),
(5, '2023-09-23 01:54:02', '2023-04-21', '13.00 - 17.00*', 'perempuan', 22, 's2', 'Sertifikat', 69, '2023-09-22 17:54:02', '2023-09-22 17:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
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

INSERT INTO `users` (`id`, `name`, `username`, `image`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'admin', NULL, 'admin', 'test@example.com', '2023-09-13 00:34:21', '$2y$10$V3bVBKkdjz/aNcT30Ql4ceBLH8ac8z4BCRV4hKrnuEuyPM/gRC0U.', 'JR3oga2wBMQS77tS7w2t4s6wg4lyAwuODxYDNE5ml7iTMFf9Iy5sV9go2BJ0', '2023-09-13 00:34:21', '2023-09-22 17:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
