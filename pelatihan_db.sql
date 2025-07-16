-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2025 pada 03.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelatihan_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_09_021250_create_pesertas_table', 1),
(5, '2025_07_09_030310_create_pelatihans_table', 2),
(6, '2025_07_09_033823_create_pendaftarans_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihans`
--

CREATE TABLE `pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelatihans`
--

INSERT INTO `pelatihans` (`id`, `judul`, `deskripsi`, `tanggal_mulai`, `tanggal_selesai`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 'Pelatihan Menjahit Dasar', 'Belajar dasar menjahit dan menggunakan mesin jahit.', '2025-07-15', '2025-07-30', 20, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(2, 'Pelatihan Las Listrik', 'Teknik dasar pengelasan listrik untuk industri.', '2025-07-16', '2025-08-01', 15, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(3, 'Pelatihan Desain Grafis', 'Mengenal Photoshop, CorelDraw dan desain digital.', '2025-07-18', '2025-07-31', 25, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(4, 'Pelatihan Komputer Perkantoran', 'Ms Word, Excel, PowerPoint dan pengarsipan.', '2025-07-20', '2025-08-05', 30, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(5, 'Pelatihan Barista', 'Belajar membuat kopi dan pelayanan pelanggan.', '2025-07-22', '2025-07-31', 10, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(6, 'Pelatihan Teknik Pendingin (AC)', 'Instalasi dan perawatan AC rumah tangga.', '2025-07-25', '2025-08-10', 12, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(7, 'Pelatihan Tata Boga', 'Memasak, membuat kue, dan pengelolaan dapur.', '2025-07-27', '2025-08-08', 20, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(8, 'Pelatihan Operator Forklift', 'Pengoperasian alat berat forklift dan keselamatan kerja.', '2025-07-29', '2025-08-12', 8, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(9, 'Pelatihan Digital Marketing', 'Strategi promosi online, media sosial & SEO.', '2025-07-30', '2025-08-15', 18, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(10, 'Pelatihan Customer Service', 'Komunikasi efektif dan penanganan pelanggan.', '2025-08-01', '2025-08-14', 22, '2025-07-09 08:18:27', '2025-07-09 08:18:27'),
(11, 'Pelatihan Administrasi Perkantoran', 'Pelatihan tentang arsip, surat menyurat, dan tata kelola dokumen kantor.', '2025-08-04', '2025-08-11', 50, '2025-07-09 01:20:38', '2025-07-09 01:21:11'),
(12, 'Pelatihan Memasak', 'memasak resep rumaham', '2025-07-23', '2025-07-30', 20, '2025-07-15 17:14:42', '2025-07-15 17:15:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `pelatihan_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('terdaftar','mengikuti','lulus') NOT NULL DEFAULT 'terdaftar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendaftarans`
--

INSERT INTO `pendaftarans` (`id`, `peserta_id`, `pelatihan_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 'terdaftar', '2025-07-09 01:21:44', '2025-07-09 01:21:44'),
(2, 3, 9, 'mengikuti', '2025-07-09 01:24:30', '2025-07-09 01:24:30'),
(3, 2, 10, 'lulus', '2025-07-09 01:37:34', '2025-07-09 01:37:34'),
(4, 6, 11, 'mengikuti', '2025-07-14 04:25:30', '2025-07-14 04:25:30'),
(5, 4, 8, 'lulus', '2025-07-14 04:25:55', '2025-07-14 04:25:55'),
(6, 15, 6, 'mengikuti', '2025-07-15 06:17:04', '2025-07-15 06:17:04'),
(7, 2, 9, 'lulus', '2025-07-15 17:16:17', '2025-07-15 17:16:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesertas`
--

CREATE TABLE `pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesertas`
--

INSERT INTO `pesertas` (`id`, `nama`, `email`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'alex@gmail.com', '0889423432', 'Jogja', '2025-07-09 00:36:45', '2025-07-09 01:13:28'),
(2, 'Budi Santoso', 'budi@gmail.com', '081234567891', 'Jakarta', '2025-07-09 08:17:59', '2025-07-14 04:28:03'),
(3, 'Siti Aminah', 'siti@gmail.com', '081234567892', 'Bandung', '2025-07-09 08:17:59', '2025-07-14 04:28:19'),
(4, 'Andi Wijaya', 'andi@gmail.com', '081234567893', 'Surabaya', '2025-07-09 08:17:59', '2025-07-14 04:28:33'),
(5, 'Dewi Lestari', 'dewi@gmail.com', '081234567894', 'Jogja', '2025-07-09 08:17:59', '2025-07-14 04:28:52'),
(6, 'Rudi Hartono', 'rudi@gmail.com', '081234567895', 'Semarang', '2025-07-09 08:17:59', '2025-07-14 04:29:14'),
(7, 'Ayu Maharani', 'ayu@gmail.com', '081234567896', 'Malang', '2025-07-09 08:17:59', '2025-07-14 04:29:25'),
(8, 'Tono Prasetyo', 'tono@gmail.com', '081234567897', 'Bekasi', '2025-07-09 08:17:59', '2025-07-14 04:29:39'),
(9, 'Nina Ramadhani', 'nina@gmail.com', '081234567898', 'Depok', '2025-07-09 08:17:59', '2025-07-14 04:29:51'),
(10, 'Hendra Kurnia', 'hendra@gmail.com', '081234567899', 'Tangerang', '2025-07-09 08:17:59', '2025-07-14 04:30:02'),
(11, 'Fitriani', 'fitri@gmail.com', '081234567800', 'Bogor', '2025-07-09 08:17:59', '2025-07-14 04:30:15'),
(13, 'Tony Stark', 'tony@gmail.com', '098876765544', 'Jayapura', '2025-07-14 04:31:21', '2025-07-14 04:31:21'),
(14, 'antony Stark', 'stark@gmail.com', '098276785544', 'Palu', '2025-07-14 04:31:35', '2025-07-14 04:32:20'),
(15, 'Pablo Gavi', 'pablo@gmail.com', '088344562243', 'Malang', '2025-07-14 04:33:01', '2025-07-15 17:13:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4LWHF2wHvmsYgnXqdmzQkCA69m47GzgaqZUJYiKm', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVhpVklUbjRUcnNNSWQyYzY5R2xvaXVBV2Y3dHJSM255dGx4YkVYUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1752625373),
('Cy3lFTLgg1h39q7AuwFy0cTF9MUGGSLX2GmGR1D4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiT3hEZFBZaDBlOUZObjhuWG9ob0RTVGxhZ0ZnUFBCZThEbUNPRXlOYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1752586773),
('En88W5oRBkxQtPMjNzup1yTswyhu0WdvuW2rAJb5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYndoUFhWT3FSRG11cGVQSmdPdTZVTFBwOVJOMXBpZzIwbGhuazAwaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1752495591),
('xAOueKBaX08nJI1sdMkLGELua5bBEG1CkqdoXcHV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZGhwb3NHdVlqcmtQREo3UDJVMUZuc1MzYk94eUhCN2E4bFNSNVVnTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1752492978);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$12$3pQvoPge4irXOMi9QFvqf.ceJsFuGRCpKIUb/gjHhh2LKOypm/dXO', '6nCiIVPMlnWg1YN1ZtyS7D4ahXyzGh55J9P65RmheHavKvimbbrs4INCQOq7', '2025-07-08 19:24:42', '2025-07-08 19:24:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pelatihans`
--
ALTER TABLE `pelatihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_peserta_id_foreign` (`peserta_id`),
  ADD KEY `pendaftarans_pelatihan_id_foreign` (`pelatihan_id`);

--
-- Indeks untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pesertas_email_unique` (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pelatihans`
--
ALTER TABLE `pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_pelatihan_id_foreign` FOREIGN KEY (`pelatihan_id`) REFERENCES `pelatihans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
