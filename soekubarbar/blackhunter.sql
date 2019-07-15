-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 17.13
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackhunter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud`
--

CREATE TABLE `crud` (
  `id` int(10) UNSIGNED NOT NULL,
  `tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `crud`
--

INSERT INTO `crud` (`id`, `tujuan`, `nama`, `tanggal`, `jam`) VALUES
(1, '11111', 'jhjh', '2019-10-01', '8'),
(10, 'x', 'z', '2019-12-04', '8'),
(11, 'madura', 'dicky fathur p', '2019-07-17', '9');

--
-- Trigger `crud`
--
DELIMITER $$
CREATE TRIGGER `after_insert` AFTER INSERT ON `crud` FOR EACH ROW BEGIN
  INSERT INTO LOG (ket, user, data_baru)
  VALUES (CONCAT('Insert data ke tabel nama, id = ', NEW.id), USER(), NEW.nama);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_delete` BEFORE DELETE ON `crud` FOR EACH ROW BEGIN
  INSERT INTO LOG (ket, USER, data_lama)
  VALUES (CONCAT('Delete data ke tabel crud, id = ', OLD.id), USER(), OLD.tujuan);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `ket` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL DEFAULT '',
  `data_lama` varchar(25) NOT NULL DEFAULT '',
  `data_baru` varchar(25) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`ket`, `datetime`, `user`, `data_lama`, `data_baru`) VALUES
('Insert data ke tabel crud, id = 8', '2019-07-11 03:19:53', 'root@localhost', '', 'jj'),
('Update data ke tabel crud, id = 8', '2019-07-11 03:21:14', 'root@localhost', 'jj', 'jj'),
('Delete data ke tabel crud, id = 8', '2019-07-11 03:26:12', 'root@localhost', 'jj', ''),
('Insert data ke tabel nama, id = 9', '2019-07-11 15:03:28', 'root@localhost', '', '212122'),
('Delete data ke tabel crud, id = 9', '2019-07-14 19:09:11', 'root@localhost', '123', ''),
('Insert data ke tabel nama, id = 10', '2019-07-14 19:09:36', 'root@localhost', '', 'z'),
('Insert data ke tabel nama, id = 11', '2019-07-15 14:50:27', 'root@localhost', '', 'dicky fathur p');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_09_022752_create_crud_table', 1),
(2, '2019_07_14_132820_create_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'docky', 'dickynaxsoempunk@yahoo.com', NULL, '$2y$10$WZSEkcc4NPoB6LLogTtofe.Ghy0r5jYPSlr27eUXdN.u3S0rSGK8q', NULL, '2019-07-14 13:30:15', '2019-07-14 13:30:15'),
(3, 'saelendra', 'fathoer68@gmail.com', NULL, '$2y$10$z.1OuTk7HyKgXgZ7/ED/yeDxKHYwz4J6OWRRzyhz782KOg/R9zFiG', 'GSQxrM0YMuyXsu9VfTR7qrQ7eQdD8IaMJKlgij37D0ICb3IGfNSKn8Cfz9HI', '2019-07-14 20:10:48', '2019-07-14 20:10:48'),
(4, 'sumi', 'dfathoer65@gmail.com', NULL, '$2y$10$vfntRcU1Nz1HT462eNxF/eruVpsX7PZfd4Y.TGoePCxG1wd4prWyy', NULL, '2019-07-15 07:26:12', '2019-07-15 07:26:12'),
(5, 'sumi123', 'sumi@gmail.com', NULL, '$2y$10$889tELsuhfE8QabwUaEu5.VIrGpdj0Zy6YRh1jrWKWwzMPgXqJxje', NULL, '2019-07-15 07:28:55', '2019-07-15 07:28:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
