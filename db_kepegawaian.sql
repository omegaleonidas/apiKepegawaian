-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2021 pada 06.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kepegawaian`
--

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_06_29_045906_create_user_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\user', 2, 'token-name ', '197d7293859cebbfeba76b530602895d2956cd48b8658569a71175be54fd50cb', '[\"*\"]', NULL, '2021-07-04 01:04:29', '2021-07-04 01:04:29'),
(2, 'App\\Models\\user', 2, 'token-name ', 'f070fcc7f25867dcc82e532642f9d633a5edbbe5ddb2992332345d0899c0ce48', '[\"*\"]', NULL, '2021-07-04 01:04:48', '2021-07-04 01:04:48'),
(3, 'App\\Models\\user', 2, 'token-name ', '3ef4a45b7d5866ae85bbec39e140e5ca26db2d6608a345fce76855cfced2cafb', '[\"*\"]', NULL, '2021-07-04 01:54:48', '2021-07-04 01:54:48'),
(4, 'App\\Models\\user', 2, 'token', '42cea5c86c522e109f7413dcc07eaa2a03e2dca2884580751863269ea6040225', '[\"*\"]', NULL, '2021-07-04 02:02:52', '2021-07-04 02:02:52'),
(5, 'App\\Models\\user', 2, 'token', 'db7ff5daf7ba1656306c384bf3c69d2c8cc48f624b452bae80931d5397c52501', '[\"*\"]', NULL, '2021-07-04 02:05:17', '2021-07-04 02:05:17'),
(6, 'App\\Models\\user', 2, 'token', '683925efd2b6b791f24d49c276be571486dada9edd61e95922782a8f8a24d609', '[\"*\"]', NULL, '2021-07-04 02:06:03', '2021-07-04 02:06:03'),
(7, 'App\\Models\\user', 2, 'token', 'd1df6545d8fb0e25948832fb45ab9f3de2619d40243bde74da33239cc994c6a7', '[\"*\"]', NULL, '2021-07-04 02:11:02', '2021-07-04 02:11:02'),
(8, 'App\\Models\\user', 2, 'token', '57d4a8dadd37b69a1ea33a8091a4ec2846010034b0a0f81d3d6059392eabb677', '[\"*\"]', '2021-07-04 02:16:50', '2021-07-04 02:12:44', '2021-07-04 02:16:50'),
(10, 'App\\Models\\user', 2, 'token', '08e1d7ec08ac6098f18f86e4747b55284111c87c6b3e4e3ef7670876b0d56755', '[\"*\"]', '2021-07-06 00:35:51', '2021-07-04 04:59:00', '2021-07-06 00:35:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_absensi`
--

CREATE TABLE `t_absensi` (
  `id_absen` int(6) NOT NULL,
  `id_pegawai` int(6) NOT NULL,
  `jam_ke` int(2) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_masuk` varchar(6) NOT NULL,
  `jam_selesai` varchar(6) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_agama`
--

CREATE TABLE `t_agama` (
  `id_agama` int(10) NOT NULL,
  `nama_agama` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_agama`
--

INSERT INTO `t_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'islam'),
(2, 'kristen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_cuti`
--

CREATE TABLE `t_cuti` (
  `id_cuti` int(12) NOT NULL,
  `nip` int(6) NOT NULL,
  `lama_cuti` int(6) NOT NULL,
  `alasan_cuti` varchar(30) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_cuti`
--

INSERT INTO `t_cuti` (`id_cuti`, `nip`, `lama_cuti`, `alasan_cuti`, `tanggal_mulai`, `tanggal_akhir`, `tanggal`, `tanggal_acc`) VALUES
(1, 3487, 3, 'liburan', '2020-02-02', '2020-02-02', '2020-02-02', '2020-02-02'),
(2, 222, 3, 'liburan', '2020-02-02', '2020-02-02', '2020-02-02', '2020-02-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_informasi`
--

CREATE TABLE `t_informasi` (
  `id_informasi` int(10) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `descripsi` text NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_informasi`
--

INSERT INTO `t_informasi` (`id_informasi`, `judul`, `descripsi`, `gambar`) VALUES
(1, 'kelulusan', 'lulus 100%', 'kelulusan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jabatan`
--

CREATE TABLE `t_jabatan` (
  `id_jabatan` int(10) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jabatan`
--

INSERT INTO `t_jabatan` (`id_jabatan`, `nama_jabatan`, `updated_at`, `created_at`) VALUES
(1, 'kepala sekolah', '2021-07-04 12:31:28', '2021-07-04 12:31:57'),
(2, 'admin', '2021-07-04 12:31:28', '2021-07-04 12:31:57'),
(3, 'bendahara', '2021-07-04 05:32:02', '2021-07-04 05:32:02'),
(4, 'seketaris', '2021-07-04 05:32:52', '2021-07-04 05:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pegawai`
--

CREATE TABLE `t_pegawai` (
  `id_pegawai` int(12) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `jabatan_id` int(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_tlp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `id_agama` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pegawai`
--

INSERT INTO `t_pegawai` (`id_pegawai`, `nip`, `nama_pegawai`, `jabatan_id`, `email`, `no_tlp`, `alamat`, `tgl_masuk`, `tmp_lahir`, `id_agama`, `gender`, `pendidikan`, `password`, `foto`) VALUES
(1, '12', 'sidiq', 1, 'sidiq@gmail.com', '121212', 'secata b', '2020-12-02', 'padang panjang', 1, '', 's3', '12334', '1'),
(2, '1711082025', 'sidiq', 1, '1@gmail.com', 'sidiq', 'secata b', '2021-06-08', 'padang', 2, 'laki laki', 'sidiq', NULL, '1711082025.jpg'),
(3, '111', 'bbubu', 1, 'bubu@gmail.com', '082170911098', 'secata b', '2020-12-02', 'padang', 1, 'laki laki', 'sma', NULL, 'foto.jpg'),
(4, '111', 'bbubu', 1, 'bubu@gmail.com', '082170911098', 'secata b', '2020-12-02', 'padang', 1, 'laki laki', 'sma', NULL, 'foto.jpg'),
(5, '2222', 'fotoselah', 1, 'foto@gmail.com', '082170911098', 'secata b', '2021-02-02', 'padang panjang', 1, 'laki laki', 'sma', NULL, 'C:\\xampp\\tmp\\phpD6E7.tmp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(6) NOT NULL,
  `level_id` int(2) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `last_login` int(6) NOT NULL,
  `fhoto` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'sidiq', 'dicky@gmail.com', NULL, '$2y$10$o32i34Ml21/j6ADCFj9AsO8Vbxvq3edBd/TfiQGTTuUez9nKpyoNS', NULL, '2021-06-29 09:42:29', '2021-06-29 09:42:29', 2),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$56rLJTpkdMwLM7O1a4ioCOzKvSCVhzjItG.WI3qJx1RqnkoPcv9w2', NULL, '2021-06-29 19:26:51', '2021-06-29 19:26:51', 1);

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `t_absensi`
--
ALTER TABLE `t_absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `t_agama`
--
ALTER TABLE `t_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indeks untuk tabel `t_cuti`
--
ALTER TABLE `t_cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indeks untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `t_jabatan`
--
ALTER TABLE `t_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `t_pegawai`
--
ALTER TABLE `t_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `t_absensi`
--
ALTER TABLE `t_absensi`
  MODIFY `id_absen` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_agama`
--
ALTER TABLE `t_agama`
  MODIFY `id_agama` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_cuti`
--
ALTER TABLE `t_cuti`
  MODIFY `id_cuti` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_informasi`
--
ALTER TABLE `t_informasi`
  MODIFY `id_informasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_jabatan`
--
ALTER TABLE `t_jabatan`
  MODIFY `id_jabatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_pegawai`
--
ALTER TABLE `t_pegawai`
  MODIFY `id_pegawai` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
