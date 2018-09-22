-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2018 pada 00.36
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ukm`
--

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@darmajaya.com', '$2y$10$Z7oFzVX3Qdh6pb/2gJiLZetJMp/avpgaA1v4QTGyA/nwLkRTxgmdm', NULL, '2018-08-15 06:16:01', '2018-08-15 06:16:01');

--
-- Dumping data untuk tabel `bahasas`
--

INSERT INTO `bahasas` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'UKM Bahasa', 'bahasa@darmajaya.com', '$2y$10$mq01dGpKK8H3kuvL3snwduPvizr6Kw2BrqOAwiJZW6p4d/CRuX8hu', NULL, '2018-08-14 15:40:18', '2018-08-14 15:40:18');

--
-- Dumping data untuk tabel `bems`
--

INSERT INTO `bems` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Badan Eksekutif Mahasiswa', 'bem@darmajaya.com', '$2y$10$kB5p3BQY9C/iYZNdAobjm.oliMXJxDRbBcWHVdbgRPJw6xRq61j/i', NULL, '2018-08-15 02:41:00', '2018-08-15 02:41:00');

--
-- Dumping data untuk tabel `dcfcs`
--

INSERT INTO `dcfcs` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'UKM DCFC', 'dcfc@darmajaya.com', '$2y$10$6XqY4aOHZBjbMAuiw./6CuyoBJiQJNl424XaXpn/9IZxhPtR8cQju', NULL, '2018-09-01 10:40:20', '2018-09-01 10:40:20');

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_07_06_140809_create_input_bahasas_table', 1),
(10, '2018_08_09_075333_create_input_bahasas_table', 2),
(11, '2018_08_09_081356_create_input_bahasas_table', 3),
(14, '2018_07_05_011612_create_admins_table', 4),
(15, '2018_07_05_011640_create_bahasas_table', 4),
(16, '2018_07_06_212959_create_dcfcs_table', 4),
(17, '2018_07_06_223224_create_input_dcfcs_table', 4),
(18, '2018_07_08_165323_create_bahasa_validasis_table', 4),
(19, '2018_07_17_093521_create_news_table', 4),
(20, '2018_08_09_082502_create_input_bahasas_table', 4),
(21, '2018_08_14_155807_create_bems_table', 4),
(22, '2018_08_15_100132_create_bem_bahasas_table', 5),
(23, '2018_08_15_101635_create_bem_bahasas_table', 6),
(24, '2018_08_15_110555_create_bem_bahasas_table', 7),
(25, '2018_09_01_222033_create_input_dcfcs_table', 8),
(26, '2018_09_01_224919_create_bem_dcfcs_table', 9),
(27, '2018_09_02_140615_create_kmh_dcfcs_table', 10),
(28, '2018_09_11_063306_create_psdjs_table', 11),
(29, '2018_09_11_071100_create_musiks_table', 12),
(30, '2018_09_11_151228_create_input_musiks_table', 13),
(31, '2018_09_11_154804_create_bem_musiks_table', 14),
(32, '2018_09_13_041032_create_kmh_musiks_table', 15),
(33, '2018_09_16_173009_create_input_psdjs_table', 16),
(34, '2018_09_16_175514_create_bem_psdjs_table', 17),
(35, '2018_09_16_211035_create_kmh_psdjs_table', 18);

--
-- Dumping data untuk tabel `musiks`
--

INSERT INTO `musiks` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'UKM Musik', 'musik@darmajaya.com', '$2y$10$0NUeiqLrDggWU.jTKYn2C.NYkF1.24k7/vfZJItSqQ5Odcirv.w5y', NULL, '2018-09-22 05:27:24', '2018-09-22 05:27:24');

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Pengumpulan Berkas LPJ', 'Harap segera dikumpulkan berkas LPJ, paling lambat tanggal 25 September 2018.', '2018-08-31 05:20:32', '2018-08-31 05:20:32'),
(5, 'Pengajuan Program Kerja Ditunda', 'Untuk semua UKM yang akan mengajukan program kerja, saat ini sistem sedang diperbaiki hingga waktu yang tidak dapat di tentukan.', '2018-09-08 14:08:01', '2018-09-08 14:08:01');

--
-- Dumping data untuk tabel `psdjs`
--

INSERT INTO `psdjs` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'UKM PSDJ', 'psdj@darmajaya.com', '$2y$10$9i5sI8AGpeJIypiQrPhS.uBeaqWlybG12kJBPJtqWDjYTra8tahPS', NULL, '2018-09-11 00:09:24', '2018-09-11 00:09:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
