-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Agu 2024 pada 13.24
-- Versi server: 8.0.30
-- Versi PHP: 8.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalberitalaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikelkategori`
--

CREATE TABLE `artikelkategori` (
  `id` bigint NOT NULL,
  `artikel_id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikelkategori`
--

INSERT INTO `artikelkategori` (`id`, `artikel_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 3, 6, '2024-08-21 21:27:23', '2024-08-21 21:27:23'),
(2, 5, 6, '2024-08-21 21:28:13', '2024-08-21 21:28:13'),
(4, 7, 8, '2024-08-21 21:34:15', '2024-08-21 21:34:15'),
(5, 8, 8, '2024-08-21 21:47:50', '2024-08-21 21:47:50'),
(6, 9, 9, '2024-08-25 08:13:00', '2024-08-25 08:13:00'),
(7, 10, 8, '2024-08-28 00:03:29', '2024-08-28 00:03:29'),
(8, 11, 8, '2024-08-28 00:21:48', '2024-08-28 00:21:48'),
(9, 1, 6, '2024-08-28 00:24:55', '2024-08-28 00:24:55'),
(10, 2, 8, '2024-08-28 00:25:29', '2024-08-28 00:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint NOT NULL,
  `judul_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi_artikel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul_artikel`, `isi_artikel`, `kategori_id`, `gambar`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(1, 'satu', 'adsfgdfad', '6', 'images/317_c4563bb37310d328bef22f28abcd0e33.jpg', '2024-08-23', 'aktif', '2024-08-28 00:24:55', '2024-08-28 00:24:55'),
(2, 'aaaaaa', 'qwewqewq', '8', 'images/308_3324839017.jpg', '2024-08-15', 'tidak_aktif', '2024-08-28 00:25:29', '2024-08-28 00:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(6, 'bencana', '2024-08-21 00:25:27', '2024-08-21 21:14:26'),
(7, 'sidang', '2024-08-21 01:10:14', '2024-08-21 21:14:35'),
(8, 'jalan', '2024-08-21 17:52:13', '2024-08-21 21:14:43'),
(9, 'politik', '2024-08-21 21:38:50', '2024-08-21 21:38:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Elinor Bartoletti Jr.', 'ima06@example.org', '2024-08-27 19:20:17', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'UkQkUxSjWKRmZ6I8CTdCL6edliY240dVqvhmX9KuLsGYQt63IY21K3kERczt', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(2, 'Kavon Beier', 'powlowski.nat@example.com', '2024-08-27 19:20:17', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'jdAM6nZjT6', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(3, 'Carmella Keebler', 'vergie.gottlieb@example.net', '2024-08-27 19:20:17', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'UTpVoYEIOT', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(4, 'Maverick Bahringer', 'cglover@example.net', '2024-08-27 19:20:17', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', '5lM0CYcgQI', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(5, 'Oleta Ankunding', 'amber.oconnell@example.org', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'yo0KdsV8Ov', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(6, 'Mr. Jamal Pfannerstill', 'kunze.justen@example.com', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'Fai9qGnEcZ', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(7, 'Esta Walsh', 'noe80@example.com', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'udi56hGl62', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(8, 'Miss Astrid Kuhlman', 'priscilla.windler@example.com', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'ttVPfvZVn7', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(9, 'Peyton Brown', 'lwatsica@example.net', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'LAP4VHkrdJ', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(10, 'Josie Gottlieb', 'mkassulke@example.com', '2024-08-27 19:20:18', '$2y$12$HoE.8XQZdezjFFQz8NItP.H/BDqhdRKnaXwc8P12Ax18BA2fcjfHq', 'ynCL7Yxkk6', '2024-08-27 19:20:18', '2024-08-27 19:20:18'),
(11, 'UkqQkkLd5o', 'cd9CRzbBvU@example.com', '2024-08-27 19:20:18', '$2y$12$jKE/pt0HC1uFWm01ERM.yuokrAxqZlreDCTQZX2XiOYdId0KpsT3.', 'f6wjezkv1g', '2024-08-27 19:20:18', '2024-08-27 19:20:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikelkategori`
--
ALTER TABLE `artikelkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `artikelkategori`
--
ALTER TABLE `artikelkategori`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
