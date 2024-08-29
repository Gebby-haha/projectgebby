-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Agu 2024 pada 08.33
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
-- Database: `portalku`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
(1, 'Marquis Balistreri', 'greenholt.verdie@example.net', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eKu56ZGSqB', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(2, 'Giovani Schmeler', 'barrows.herbert@example.com', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jlbxckOWuM', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(3, 'Ms. Marcelina Abbott IV', 'runte.horace@example.com', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AsZG6r65cW', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(4, 'Brennan Doyle', 'ladarius.ward@example.org', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rnsyR0qCwM', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(5, 'John Monahan I', 'bryce17@example.com', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XuCK4I98ka', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(6, 'Derek Roob', 'pauline.lind@example.org', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Flem4dXQud', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(7, 'Dayton Botsford IV', 'mcclure.miller@example.net', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'voVqYtV4gx', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(8, 'Van Shanahan', 'mraz.jeremie@example.org', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0RzLBnCZrT', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(9, 'Miss Aurelie Krajcik Sr.', 'howe.turner@example.org', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yt6dwMVpoY', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(10, 'Penelope Hansen', 'ytorphy@example.net', '2024-08-27 20:28:47', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NaNUN1ExmQ', '2024-08-27 20:28:47', '2024-08-27 20:28:47'),
(11, 'Lilian DuBuque', 'lkoelpin@example.com', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e7SZV1x8F1', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(12, 'Stanley Oberbrunner', 'nfranecki@example.net', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0C73v0zIHo', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(13, 'Trace Fritsch', 'toy.tito@example.com', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QmJVFwHNcL', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(14, 'Johan Grant', 'tgerhold@example.org', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RuOvf8BGtx', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(15, 'Andrew Herman Sr.', 'alverta.schuppe@example.org', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oQCLv1fqKF', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(16, 'Manuel Dietrich', 'gracie.daniel@example.net', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 't26KxvxA2K', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(17, 'Lessie Kilback', 'kaylie36@example.net', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Z9kWDS95EP', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(18, 'Reanna White III', 'maybelle05@example.com', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zpBP2hedn2', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(19, 'Miss Noelia Dickinson', 'melyna88@example.com', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'e9QkHTVPNI', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(20, 'Therese McDermott MD', 'alva70@example.org', '2024-08-27 20:29:03', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sj5ng2KyUj', '2024-08-27 20:29:03', '2024-08-27 20:29:03'),
(21, 'Beth Wolf', 'isabel69@example.org', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rRAFGDAtfQ', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(22, 'Dr. Dawn Terry', 'aurelie.hansen@example.com', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XUnvmLkwJ3', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(23, 'Elwin Casper IV', 'bret.hirthe@example.net', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Uvh1uRQnFs', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(24, 'Jarvis Hackett', 'krolfson@example.com', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wVbG2Bdcq4', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(25, 'Brenden Barrows', 'kcrist@example.com', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'k00xlqvVeJ', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(26, 'Mr. Fernando Heidenreich', 'awyman@example.org', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nJWqDvmlD0', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(27, 'Otto Yundt III', 'ryan.earnestine@example.com', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5vRTNT24br', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(28, 'Eulah Rodriguez', 'chaya.hintz@example.net', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nMnnZ7M4yy', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(29, 'Rossie Wisoky', 'aditya.crona@example.com', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H9jurI0VC7', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(30, 'Chad Toy', 'evalyn.hackett@example.net', '2024-08-27 20:29:30', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qXYeratmEY', '2024-08-27 20:29:30', '2024-08-27 20:29:30'),
(31, 'lXs4ar74Ke', 'YP3cHGKXnr@example.com', '2024-08-27 20:29:30', '$2y$10$QCkeb6H9TUZFkR/5t8ih0ehQy/dT0p9n1oXxSZw4ASj/lY.khFg6.', 's6AYpfCmpF', '2024-08-27 20:29:30', '2024-08-27 20:29:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
