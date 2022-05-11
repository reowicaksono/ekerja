-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2021 pada 03.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cpps`
--

CREATE TABLE `cpps` (
  `cpp_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alamat_course` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cpps`
--

INSERT INTO `cpps` (`cpp_id`, `user_id`, `judul`, `alamat_course`, `created_at`, `updated_at`) VALUES
(1, 1, 'coba C++', 'asda', '2021-05-24', '2021-05-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `javas`
--

CREATE TABLE `javas` (
  `java_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alamat_course` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `javas`
--

INSERT INTO `javas` (`java_id`, `user_id`, `judul`, `alamat_course`, `created_at`, `updated_at`) VALUES
(1, 1, 'coba Java', 'Kr52qrkpoUI', '2021-05-24', '2021-05-24'),
(7, 1, 'asdasd', 'asdasd', '2021-05-26', '2021-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawabans`
--

CREATE TABLE `jawabans` (
  `jawaban_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `jawaban` varchar(12) NOT NULL,
  `skor` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jawabans`
--

INSERT INTO `jawabans` (`jawaban_id`, `user_id`, `jawaban`, `skor`, `created_at`, `updated_at`) VALUES
(93, 15, 'A', '1', '2021-05-29', '2021-05-29'),
(94, 15, 'A', '1', '2021-05-29', '2021-05-29'),
(95, 15, 'A', '0', '2021-05-29', '2021-05-29'),
(96, 15, 'A', '1', '2021-05-29', '2021-05-29'),
(97, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(98, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(99, 15, 'A', '0', '2021-05-30', '2021-05-30'),
(100, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(101, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(102, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(103, 15, 'A', '0', '2021-05-30', '2021-05-30'),
(104, 15, 'A', '1', '2021-05-30', '2021-05-30'),
(105, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(106, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(107, 15, 'A', '0', '2021-05-31', '2021-05-31'),
(108, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(109, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(110, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(111, 15, 'A', '0', '2021-05-31', '2021-05-31'),
(112, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(113, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(114, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(115, 15, 'A', '0', '2021-05-31', '2021-05-31'),
(116, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(117, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(118, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(119, 15, 'A', '0', '2021-05-31', '2021-05-31'),
(120, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(121, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(122, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(123, 15, 'A', '0', '2021-05-31', '2021-05-31'),
(124, 15, 'A', '1', '2021-05-31', '2021-05-31'),
(125, 15, 'A', '1', '2021-06-03', '2021-06-03'),
(126, 15, 'A', '1', '2021-06-03', '2021-06-03'),
(127, 15, 'C', '0', '2021-06-03', '2021-06-03'),
(128, 15, 'A', '1', '2021-06-03', '2021-06-03'),
(129, 15, 'A', '1', '2021-06-04', '2021-06-04'),
(130, 15, 'A', '1', '2021-06-04', '2021-06-04'),
(131, 15, 'B', '0', '2021-06-04', '2021-06-04'),
(132, 15, 'A', '1', '2021-06-04', '2021-06-04'),
(133, 15, 'A', '1', '2021-06-04', '2021-06-04'),
(134, 15, 'A', '1', '2021-06-04', '2021-06-04'),
(135, 15, 'A', '0', '2021-06-04', '2021-06-04'),
(136, 15, 'A', '1', '2021-06-04', '2021-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `kategori_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `webdevs_id` bigint(20) NOT NULL,
  `java_id` bigint(20) NOT NULL,
  `cpp_id` bigint(20) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`kategori_id`, `user_id`, `webdevs_id`, `java_id`, `cpp_id`, `nama_kategori`) VALUES
(1, 15, 1, 0, 0, 'web-developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokers`
--

CREATE TABLE `lokers` (
  `loker_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `kategori_id` bigint(20) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bagian` varchar(255) NOT NULL,
  `idr` varchar(255) NOT NULL,
  `kualifikasi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `requirements` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokers`
--

INSERT INTO `lokers` (`loker_id`, `user_id`, `kategori_id`, `nama_perusahaan`, `alamat`, `website`, `bagian`, `idr`, `kualifikasi`, `keterangan`, `requirements`, `created_at`, `updated_at`) VALUES
(1, 15, 1, 'PT Intikom Berlian Mustika', 'Jakarta Pusat', 'https://intikom.com/', 'Web Developer', '0.0', 'Sarjana (S1)', '', 'Menguasai HTML,CSS,Javascript,PHP. Sudah memiliki pengalaman 2 tahun dalam pengembangan website.', '2021-05-20', '2021-05-13'),
(2, 1, 1, 'PT Bisnis Integrasi Global', 'Jakarta Selatan', NULL, 'Web Developer', 'Rp.Rp.0.0', 'Sarjana (S2)', 'Founded in 2013, PT. Business Integrasi Global (BIG), a subsidiary of PT. Zebra Nuasantara Tbk, has been awarded as a fast-growing IT consulting and Digital Solution Provider, and managed support services, helping organizations use latest digital iniative', 'Menguasai HTML,CSS,Javascript,PHP. Sudah memiliki pengalaman 2 tahun dalam pengembangan website.', '2021-05-13', '2021-05-13'),
(8, 15, 1, 'PT Reo Wicaksono', 'Cirebon', NULL, 'Web Developer', '200000', 'Sarjana (S3)', NULL, NULL, '2021-05-30', '2021-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(6, '2021_05_18_001646_courses', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$8UFPonZAiG7IKULN5N/l9uDZlVw8mxRYE3Tiz2.Ncppz40mGoM69a', '2021-05-23 16:46:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Tempat_Tinggal` varchar(255) DEFAULT NULL,
  `Provinsi` varchar(255) DEFAULT NULL,
  `No_Telepon` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`profile_id`, `user_id`, `Tempat_Tinggal`, `Provinsi`, `No_Telepon`, `tanggal_lahir`, `pekerjaan`, `jenis_kelamin`) VALUES
(1, 1, 'Cirebon', 'Jawa Barat', '147748779010', '2021-05-26', 'Mahasiswa', 'L'),
(2, 9, 'Gebang Kulon', 'Jawa Barat', '087738779010', '2021-05-27', 'mahasiswa', 'L'),
(3, 11, 'Cirebon', 'Jawa Barat', '087748779010', '2021-05-27', 'Mahasiswa', 'L'),
(4, 14, 'Cirebon', 'Jawa Barat', '087748779010', '2021-05-27', 'Mahasiwa', 'L'),
(5, 15, 'Dummy', 'Dummy', '127748779010', '2021-05-27', 'Dummy', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soals`
--

CREATE TABLE `soals` (
  `soal_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `webdevs_id` bigint(20) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `kunci_jawaban` varchar(12) NOT NULL,
  `A` varchar(255) NOT NULL,
  `B` varchar(255) NOT NULL,
  `C` varchar(255) NOT NULL,
  `D` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soals`
--

INSERT INTO `soals` (`soal_id`, `user_id`, `webdevs_id`, `soal`, `kunci_jawaban`, `A`, `B`, `C`, `D`, `created_at`, `updated_at`) VALUES
(7, 15, 24, 'Berikut ini tag untuk membuat heading, kecuali', 'A', '<h4>', '<h5>', '<h6>', '<h7>', NULL, NULL),
(8, 15, 24, 'Untuk membuat baris baru menggunakan tag ?', 'A', ' <br>', '<newline>', '<break>', '<hr>', NULL, NULL),
(9, 15, 24, 'Tag untuk membuat garis datar (horizontal)?', 'D', '<br>', 'newline>', '<break>', '<hr>', NULL, NULL),
(10, 15, 24, 'Tag untuk membuat huruf tebal adalah', 'A', '<bold>', '<b>', '<i>', '<important>', NULL, NULL),
(12, 15, 24, 'Tag untuk membuat huruf tebal adalah', 'B', '<bold>', '<b>', '<i>', '<important>', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `level`, `nama_kategori`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Coba', 'admin@gmail.com', '2021-05-16 22:30:43', '$2y$10$tX.VRWb9ZO/mdi5N6BM3LuaXmjX2brt74GPXiDNgHw/bklRgH26NG', 'admin', '', 'ekerja1622015540.jpg', NULL, '2021-05-16 21:53:39', '2021-05-31 02:34:50'),
(9, 'Reo Wicaksono', 'user@gmail.com', '2021-05-16 22:30:43', '$2y$10$FEmxXElyZ7LLMLyCk58z2uWLQ2nrHRlY8jc.PEXFBLWFX0CUGk5Vm', 'user', 'web-developer', 'bg-1.jpg', NULL, '2021-05-16 22:30:04', '2021-05-16 22:30:43'),
(11, 'user1', 'user1@gmail.com', '2021-05-18 18:07:51', '$2y$10$kJSVTOFEhiyaPLlUh1kupel9RX4mznrD1I9kkjp/iZUSJbqbV2dZi', 'user', 'web-developer', NULL, NULL, '2021-05-18 18:07:14', '2021-05-18 18:07:51'),
(14, 'user4', 'user4@gmail.com', '2021-05-23 00:28:38', '$2y$10$VjDfw8VZ35ULJbsKUyTFiuHTpgX1lMar8YTLz.lzm3S5G7jxp0KJy', 'user', 'java-oop', 'ekerja1621998676.png', NULL, '2021-05-18 19:24:54', '2021-05-23 00:28:38'),
(15, 'User12', 'user12@gmail.com', '2021-05-23 17:02:09', '$2y$10$uwzy6fQ/I9FsjRYGJ7FeJOkNO9lXYIZIEQF7BWLRsIFlCW.Kd9UBu', 'user', 'web-developer', 'ekerja1622768487.jpg', NULL, '2021-05-23 17:01:05', '2021-06-03 17:45:42'),
(16, 'user123@gmail.com', 'user123@gmail.com', '2021-06-03 17:41:08', '$2y$10$igx0cCTihuNFvMXuxUS4leKMhvpL4kSdNTax/k3xpb7caMJwOBXfK', 'user', 'web-developer', NULL, NULL, '2021-06-03 17:40:27', '2021-06-03 17:41:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webdevs`
--

CREATE TABLE `webdevs` (
  `webdevs_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `alamat_course` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `webdevs`
--

INSERT INTO `webdevs` (`webdevs_id`, `user_id`, `judul`, `alamat_course`, `created_at`, `updated_at`) VALUES
(21, 1, 'Intro', 'c_fRtpQf4Oc', '2021-05-27', '2021-05-27'),
(22, 1, 'Pengenalan HTML', 'NBZ9Ro6UKV8', '2021-05-27', '2021-05-27'),
(23, 1, 'Hello World', '1NicaVOCXHA', '2021-05-27', '2021-05-27'),
(24, 1, 'Kode Editor', '3sLSi9L5nWE', '2021-05-27', '2021-05-27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cpps`
--
ALTER TABLE `cpps`
  ADD PRIMARY KEY (`cpp_id`,`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `javas`
--
ALTER TABLE `javas`
  ADD PRIMARY KEY (`java_id`,`user_id`);

--
-- Indeks untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`jawaban_id`,`user_id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`kategori_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `webdevs_id` (`webdevs_id`),
  ADD UNIQUE KEY `java_id` (`java_id`),
  ADD UNIQUE KEY `cpp_id` (`cpp_id`);

--
-- Indeks untuk tabel `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`loker_id`,`user_id`,`kategori_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`,`user_id`);

--
-- Indeks untuk tabel `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`soal_id`,`user_id`,`webdevs_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `webdevs`
--
ALTER TABLE `webdevs`
  ADD PRIMARY KEY (`webdevs_id`,`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cpps`
--
ALTER TABLE `cpps`
  MODIFY `cpp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `javas`
--
ALTER TABLE `javas`
  MODIFY `java_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jawabans`
--
ALTER TABLE `jawabans`
  MODIFY `jawaban_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `kategori_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokers`
--
ALTER TABLE `lokers`
  MODIFY `loker_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `soals`
--
ALTER TABLE `soals`
  MODIFY `soal_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `webdevs`
--
ALTER TABLE `webdevs`
  MODIFY `webdevs_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
