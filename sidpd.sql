-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 05.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidpd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_1`
--

CREATE TABLE `level_1` (
  `lvl1_id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level_1`
--

INSERT INTO `level_1` (`lvl1_id`, `detail`) VALUES
(1, 'Kondisi Umum Daerah'),
(2, 'Keagamaan / ABS-SBK'),
(3, 'Kesejahteraan Masyarakat'),
(4, 'Daya Saing Daerah'),
(5, 'Pelayanan Umum'),
(6, 'Potensi Sumber Daya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_2`
--

CREATE TABLE `level_2` (
  `lvl2_id` bigint(20) UNSIGNED NOT NULL,
  `lvl1_id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level_2`
--

INSERT INTO `level_2` (`lvl2_id`, `lvl1_id`, `detail`) VALUES
(1, 1, 'Karateristik Lokasi dan Wilayah'),
(2, 1, 'Wilayah Rawan Bencana'),
(3, 1, 'Demografi'),
(4, 2, 'Nagari Madani'),
(5, 2, 'Lembaga Pendidikan'),
(6, 2, 'SDM Keagamaan'),
(7, 2, 'Lembaga Adat'),
(8, 2, 'Sarana Ibadah'),
(9, 5, 'Layanan Urusan Wajib Dasar'),
(10, 5, 'Layanan Urusan Wajib Non Dasar'),
(11, 5, 'Layanan Urusan Pilihan'),
(12, 5, 'Penunjang Urusan'),
(13, 6, 'Kawasan Pengembangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_3`
--

CREATE TABLE `level_3` (
  `lvl3_id` bigint(20) UNSIGNED NOT NULL,
  `lvl2_id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level_3`
--

INSERT INTO `level_3` (`lvl3_id`, `lvl2_id`, `detail`) VALUES
(1, 1, 'Topografi'),
(2, 1, 'Geologi'),
(3, 1, 'Hidrologi'),
(4, 1, 'Klimatologi'),
(5, 1, 'Luas dan Batas Wilayah'),
(6, 1, 'Letak dan Kondisi Geografis'),
(7, 1, 'Penggunaan Lahan'),
(8, 2, 'Tsunami'),
(9, 2, 'Banjir'),
(10, 2, 'Abrasi'),
(11, 2, 'Longsor'),
(12, 2, 'Kebakaran Hutan'),
(13, 2, 'Gempa'),
(14, 3, 'Struktur'),
(15, 10, 'Tenaga Kerja'),
(16, 10, 'Pemberdayaan Perempuan dan Perlindungan Anak'),
(17, 10, 'Pangan'),
(18, 10, 'Pertanahan'),
(19, 10, 'Lingkungan Hidup'),
(20, 10, 'Administrasi Kependudukan dan Pencatatan Sipil'),
(21, 10, 'Pemberdayaan Masyarakat dan Desa'),
(22, 10, 'Pengendalian Penduduk dan Keluarga Berencana'),
(23, 10, 'Perhubungan'),
(24, 10, 'Komunikasi dan Informatika'),
(25, 10, 'Keporeasi, Usaha Kecil, dan Menengah'),
(26, 10, 'Penanaman Modal'),
(27, 10, 'Kepemudaan dan Olah Raga'),
(28, 10, 'Statistik'),
(29, 10, 'Persandian'),
(30, 10, 'Kebudayaan'),
(31, 10, 'Perpustakaan'),
(32, 10, 'Kearsipan'),
(33, 11, 'Pariwisata'),
(34, 11, 'Pertanian'),
(35, 11, 'Kehutanan'),
(36, 11, 'Perindustrian'),
(37, 11, 'Kelautan dan Perikanan'),
(38, 11, 'Energi dan Sumber Daya Mineral'),
(39, 11, 'Perdagangan'),
(40, 11, 'Transmigrasi'),
(41, 12, 'Prencanaan Pembangunan'),
(42, 12, 'Keuangan'),
(43, 12, 'Kepegawaian Serta Pendidikan dan Pelatihan'),
(44, 12, 'Penelitian dan Pengembangan'),
(45, 12, 'Pengawasan'),
(46, 12, 'Sekretariat Dewan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_4`
--

CREATE TABLE `level_4` (
  `lvl4_id` bigint(20) UNSIGNED NOT NULL,
  `lvl3_id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level_4`
--

INSERT INTO `level_4` (`lvl4_id`, `lvl3_id`, `detail`) VALUES
(1, 7, 'Kawasan Budidayawan'),
(2, 7, 'Kawasan Lindung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lvl1_data`
--

CREATE TABLE `lvl1_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lvl1_id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lvl1_data`
--

INSERT INTO `lvl1_data` (`id`, `lvl1_id`, `data`, `value`, `satuan`, `tahun`, `created_at`, `updated_at`) VALUES
(4, 3, 'Angka Usia Harapan Hidup', 20, 'orang', '2020', '2020-12-16 11:43:33', '2020-12-18 15:31:11'),
(5, 4, 'Pengeluaran Konsumsi Rumah Tangga Perkapita', NULL, NULL, '2020', '2020-12-16 11:44:44', '2020-12-16 11:44:44'),
(7, 3, 'ets data', 22, '2020', '2017', '2020-12-18 15:31:20', '2020-12-18 15:48:26'),
(8, 3, 'tes', 100, '12', '2019', '2020-12-18 15:31:38', '2020-12-18 15:31:38'),
(9, 3, 'tes 2015', 120, 'tes', '2016', '2020-12-18 15:48:15', '2020-12-18 17:02:44'),
(10, 3, 'coba', 22, 'ets', '2018', '2020-12-18 15:48:38', '2020-12-18 17:02:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lvl2_data`
--

CREATE TABLE `lvl2_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lvl2_id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lvl2_data`
--

INSERT INTO `lvl2_data` (`id`, `lvl2_id`, `data`, `value`, `satuan`, `tahun`, `created_at`, `updated_at`) VALUES
(2, 4, 'Nagari Madani', NULL, NULL, NULL, '2020-12-16 13:06:32', '2020-12-16 16:59:48'),
(3, 5, 'Pondok Hafidz', NULL, NULL, NULL, '2020-12-16 16:53:02', '2020-12-16 16:54:12'),
(5, 5, 'TPA/MDA', NULL, NULL, NULL, '2020-12-16 16:54:28', '2020-12-16 16:54:28'),
(6, 5, 'Pondok Pesantren', NULL, NULL, NULL, '2020-12-16 16:54:39', '2020-12-16 16:54:39'),
(7, 5, 'MIN/MIS', NULL, NULL, NULL, '2020-12-16 16:55:01', '2020-12-16 16:55:01'),
(8, 5, 'MTsN/S', NULL, NULL, NULL, '2020-12-16 16:55:16', '2020-12-16 16:55:16'),
(9, 5, 'MAN/S', NULL, NULL, NULL, '2020-12-16 16:55:26', '2020-12-16 16:55:26'),
(10, 5, 'PTN/S', NULL, NULL, NULL, '2020-12-16 16:55:31', '2020-12-16 16:55:31'),
(11, 6, 'Ustad / Garin', NULL, NULL, NULL, '2020-12-16 16:56:59', '2020-12-16 16:56:59'),
(12, 6, 'Guru', NULL, NULL, NULL, '2020-12-16 16:57:07', '2020-12-16 16:57:07'),
(13, 6, 'Murid', NULL, NULL, NULL, '2020-12-16 16:57:11', '2020-12-16 16:57:11'),
(14, 7, 'KAN', NULL, NULL, NULL, '2020-12-16 16:58:07', '2020-12-16 16:58:07'),
(15, 7, 'Bundo Kanduang', NULL, NULL, NULL, '2020-12-16 16:58:13', '2020-12-16 16:58:13'),
(16, 7, 'Parik Paga Nagari', NULL, NULL, NULL, '2020-12-16 16:58:23', '2020-12-16 16:58:23'),
(17, 8, 'Masjid', NULL, NULL, NULL, '2020-12-16 16:59:14', '2020-12-16 16:59:14'),
(18, 8, 'Mushalla', NULL, NULL, NULL, '2020-12-16 16:59:20', '2020-12-16 16:59:20'),
(19, 8, 'Rumah Ibadah Lainnya', NULL, NULL, NULL, '2020-12-16 16:59:35', '2020-12-16 16:59:35'),
(20, 13, 'Kawasan Pembangunan', NULL, NULL, NULL, '2020-12-16 17:00:15', '2020-12-16 17:00:15'),
(21, 3, 'penduduk', 2220000000, 'jiwa', '2020', '2020-12-16 18:34:11', '2020-12-16 18:34:11'),
(23, 9, 'wajib dasat', 12, '2131', '112', '2020-12-16 19:55:48', '2020-12-16 19:55:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lvl3_data`
--

CREATE TABLE `lvl3_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lvl3_id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lvl3_data`
--

INSERT INTO `lvl3_data` (`id`, `lvl3_id`, `data`, `value`, `satuan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 14, 'Perempuan', 122, 'manusia', '2001', '2020-12-16 18:02:02', '2020-12-16 18:07:12'),
(2, 14, 'Laki - Laki', NULL, NULL, NULL, '2020-12-16 18:07:23', '2020-12-16 18:07:23'),
(4, 8, 'Jumlah Kejadian', NULL, NULL, NULL, '2020-12-16 18:16:02', '2020-12-16 18:16:02'),
(5, 8, 'Daerah RAwan', NULL, NULL, NULL, '2020-12-16 18:16:09', '2020-12-16 18:16:09'),
(7, 9, 'Banjir', NULL, NULL, NULL, '2020-12-16 18:17:22', '2020-12-16 18:17:22'),
(8, 9, 'tes1312', 3, 'dasw', '13', '2020-12-16 18:18:12', '2020-12-16 18:18:21'),
(9, 10, 'Abrasi', 11111, 'nilai', '2020', '2020-12-16 18:18:46', '2020-12-16 18:18:46'),
(10, 10, 'tes data 2', 121, 'ssss', '2009', '2020-12-16 18:19:01', '2020-12-16 18:19:12'),
(11, 11, 'Longsor', NULL, NULL, NULL, '2020-12-16 18:19:27', '2020-12-16 18:19:27'),
(12, 11, 'Tes Data', 202, 'data', '2010', '2020-12-16 18:19:43', '2020-12-16 18:19:58'),
(13, 12, 'Kebakran Hutan', 1010, 'Satuan', '2019', '2020-12-16 18:20:24', '2020-12-16 18:20:24'),
(14, 12, 'tes data', 111, 'satuan', '2222', '2020-12-16 18:20:33', '2020-12-16 18:20:33'),
(15, 13, 'Data Gempa', 12, 'buah', '12', '2020-12-16 18:21:01', '2020-12-16 18:21:01'),
(17, 1, 'Ketinggian lahan', 100, 'm3', '2016', '2020-12-16 18:25:12', '2020-12-20 20:51:48'),
(18, 2, 'Struktur dan Karakterisiti', 123, 'sds', '2018', '2020-12-16 18:25:54', '2020-12-20 20:57:23'),
(19, 2, 'data testor', 1201, 'panjang', '2019', '2020-12-16 18:26:04', '2020-12-16 18:26:04'),
(20, 3, 'Daerah aliran Sungai', 20, 'unit', '2020', '2020-12-16 18:27:00', '2020-12-20 20:57:51'),
(21, 4, 'Tipe', 20, 'lebat', '2020', '2020-12-16 18:27:23', '2020-12-16 18:27:23'),
(22, 5, 'luas', 2020, 'panjang', '2020', '2020-12-16 18:27:45', '2020-12-16 18:27:45'),
(23, 6, 'kondisi kawasan', 220, 'kawasan', '2020', '2020-12-16 18:28:10', '2020-12-20 20:58:14'),
(24, 46, 'sekretarian dewan ata', 22, 'orang', '2020', '2020-12-16 19:53:41', '2020-12-16 19:53:41'),
(25, 45, 'pengawasan data', 11, 'satuan', '2020', '2020-12-16 19:54:00', '2020-12-16 19:54:03'),
(26, 44, 'litbang', 111, 'orang', '2020', '2020-12-16 19:54:32', '2020-12-16 19:54:32'),
(27, 43, 'nlk', 111, 'unit', '2019', '2020-12-16 19:54:47', '2020-12-16 19:54:47'),
(28, 42, 'keuangan', 20000, 'rupiah', '2018', '2020-12-16 19:54:58', '2020-12-16 19:54:58'),
(29, 41, 'perancangan pembangunan', 2020, '202022', '2020', '2020-12-16 19:55:24', '2020-12-16 19:55:24'),
(30, 37, 'bu suusi data', 222, '2020', '2002', '2020-12-16 19:56:19', '2020-12-16 19:56:19'),
(31, 40, 'TRNASMIGRASI TES TIPU', 9098, 'OIIOU', '900', '2020-12-16 19:56:30', '2020-12-16 19:56:30'),
(32, 36, 'industri data test', 2020, 'tipu tipu', '2020', '2020-12-16 19:58:03', '2020-12-16 19:58:03'),
(33, 39, 'perdagangan data tes', 1111, 'metea', '2222', '2020-12-16 19:58:23', '2020-12-16 19:58:23'),
(34, 38, 'mineral ee data', 2020, 'satuan', '3020', '2020-12-16 19:58:40', '2020-12-16 19:58:40'),
(37, 33, 'ini data pariwiasata', 1212, 'satuan', '2020', '2020-12-16 20:03:10', '2020-12-16 20:03:10'),
(38, 34, 'pertanian data tes', 2222, 'CM', '2020', '2020-12-16 20:03:25', '2020-12-16 20:03:25'),
(39, 35, 'DATA hutan', 200, 'hektare', '2222', '2020-12-16 20:03:38', '2020-12-16 20:03:38'),
(40, 32, 'arsip ts 01', 1, 'test', '2020', '2020-12-16 20:04:20', '2020-12-16 20:04:20'),
(41, 31, 'pustaka tes data', 1, 'tese', '2020', '2020-12-16 20:04:34', '2020-12-16 20:04:34'),
(42, 30, 'kebudayaan', 22, 'tes', '2020', '2020-12-16 20:04:43', '2020-12-16 20:04:43'),
(43, 29, 'sandian tes', 1, 'tes unit', '2020', '2020-12-16 20:05:13', '2020-12-16 20:05:13'),
(44, 28, 'statistik', 1, 'tes', '2020', '2020-12-16 20:05:59', '2020-12-16 20:05:59'),
(45, 27, 'olahraga', 22, 'satuan', '222', '2020-12-16 20:06:09', '2020-12-16 20:06:09'),
(46, 26, 'modal', 1, 'tes', '2020', '2020-12-16 20:06:19', '2020-12-16 20:06:19'),
(47, 25, 'kopearis tes', 1, 'ts data', '2020', '2020-12-16 20:06:30', '2020-12-16 20:06:30'),
(48, 24, 'kominfo data', 1, 'tes', '2020', '2020-12-16 20:06:47', '2020-12-16 20:06:47'),
(49, 23, 'dishub', 1, 'tes', '2222', '2020-12-16 20:06:56', '2020-12-16 20:06:56'),
(50, 22, 'penduduk tes', 222, 'tes', '2020', '2020-12-16 20:07:09', '2020-12-16 20:07:09'),
(51, 22, 'kb ets', 1, 'percobaan', '2020', '2020-12-16 20:08:09', '2020-12-16 20:08:09'),
(52, 21, 'masyarakat', 1, 'tes', '2020', '2020-12-16 20:08:21', '2020-12-16 20:08:21'),
(53, 20, 'sipil', 1, 'tes', '1111', '2020-12-16 20:08:33', '2020-12-16 20:08:33'),
(54, 19, 'lingkungan', 2020, '1010', '202', '2020-12-16 20:08:43', '2020-12-16 20:08:43'),
(55, 18, 'Pertahanan', 1, 'tes', '2020', '2020-12-16 20:09:28', '2020-12-16 20:09:28'),
(57, 17, 'pangan', 1, 'tes', '2020', '2020-12-16 20:10:17', '2020-12-16 20:10:17'),
(58, 16, 'perlindungan', 1, '01', '01', '2020-12-16 20:10:49', '2020-12-16 20:10:49'),
(59, 15, 'tenaga kerja', 2020, 'res', '1212', '2020-12-16 20:11:02', '2020-12-16 20:11:02'),
(60, 1, 'data 2', 201, 'orang', '2017', '2020-12-20 20:52:00', '2020-12-20 20:52:00'),
(61, 1, 'data 3', 521, 'satuan', '2018', '2020-12-20 20:52:16', '2020-12-20 20:52:16'),
(62, 1, 'data4', 1001, 'satuan', '2019', '2020-12-20 20:53:49', '2020-12-20 20:53:56'),
(63, 1, 'data lainnya', 222, 'satuan', '2020', '2020-12-20 20:54:15', '2020-12-20 20:54:15'),
(64, 2, 'data', 222, 'satuan', '2020', '2020-12-20 20:57:11', '2020-12-20 20:57:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lvl4_data`
--

CREATE TABLE `lvl4_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lvl4_id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` bigint(20) DEFAULT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lvl4_data`
--

INSERT INTO `lvl4_data` (`id`, `lvl4_id`, `data`, `value`, `satuan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 1, 'tebu', 12, 'hektare', '2020', '2020-12-16 18:31:01', '2020-12-16 18:31:01'),
(2, 1, 'jagung', 10, 'hektare', '2020', '2020-12-16 18:31:13', '2020-12-16 18:31:13'),
(4, 2, 'kawasan lindung', 111, 'hektare', '1001', '2020-12-16 18:31:51', '2020-12-16 18:32:08');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_16_123443_create_level_1s_table', 1),
(4, '2020_12_16_123550_create_lvl1_datas_table', 1),
(5, '2020_12_16_123601_create_level_2s_table', 1),
(6, '2020_12_16_123615_create_lvl2_datas_table', 1),
(7, '2020_12_16_123627_create_level_3s_table', 1),
(8, '2020_12_16_123652_create_lvl3_datas_table', 1),
(9, '2020_12_16_133158_create_level_4s_table', 1),
(10, '2020_12_16_133209_create_lvl4_datas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Admin', 'a@a.com', NULL, '$2y$10$YEm8CTqxjcbIM3WMZ5rxkuhESyUuP6SXXKaj6C4Z4YPI3jAsGPpBS', NULL, '2020-12-16 07:31:55', '2020-12-16 07:31:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level_1`
--
ALTER TABLE `level_1`
  ADD PRIMARY KEY (`lvl1_id`);

--
-- Indeks untuk tabel `level_2`
--
ALTER TABLE `level_2`
  ADD PRIMARY KEY (`lvl2_id`),
  ADD KEY `level_2_lvl1_id_foreign` (`lvl1_id`);

--
-- Indeks untuk tabel `level_3`
--
ALTER TABLE `level_3`
  ADD PRIMARY KEY (`lvl3_id`),
  ADD KEY `level_3_lvl2_id_foreign` (`lvl2_id`);

--
-- Indeks untuk tabel `level_4`
--
ALTER TABLE `level_4`
  ADD PRIMARY KEY (`lvl4_id`),
  ADD KEY `level_4_lvl3_id_foreign` (`lvl3_id`);

--
-- Indeks untuk tabel `lvl1_data`
--
ALTER TABLE `lvl1_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lvl1_data_lvl1_id_foreign` (`lvl1_id`);

--
-- Indeks untuk tabel `lvl2_data`
--
ALTER TABLE `lvl2_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lvl2_data_lvl2_id_foreign` (`lvl2_id`);

--
-- Indeks untuk tabel `lvl3_data`
--
ALTER TABLE `lvl3_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lvl3_data_lvl3_id_foreign` (`lvl3_id`);

--
-- Indeks untuk tabel `lvl4_data`
--
ALTER TABLE `lvl4_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lvl4_data_lvl4_id_foreign` (`lvl4_id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `level_1`
--
ALTER TABLE `level_1`
  MODIFY `lvl1_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `level_2`
--
ALTER TABLE `level_2`
  MODIFY `lvl2_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `level_3`
--
ALTER TABLE `level_3`
  MODIFY `lvl3_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `level_4`
--
ALTER TABLE `level_4`
  MODIFY `lvl4_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lvl1_data`
--
ALTER TABLE `lvl1_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `lvl2_data`
--
ALTER TABLE `lvl2_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `lvl3_data`
--
ALTER TABLE `lvl3_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `lvl4_data`
--
ALTER TABLE `lvl4_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `level_2`
--
ALTER TABLE `level_2`
  ADD CONSTRAINT `level_2_lvl1_id_foreign` FOREIGN KEY (`lvl1_id`) REFERENCES `level_1` (`lvl1_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `level_3`
--
ALTER TABLE `level_3`
  ADD CONSTRAINT `level_3_lvl2_id_foreign` FOREIGN KEY (`lvl2_id`) REFERENCES `level_2` (`lvl2_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `level_4`
--
ALTER TABLE `level_4`
  ADD CONSTRAINT `level_4_lvl3_id_foreign` FOREIGN KEY (`lvl3_id`) REFERENCES `level_3` (`lvl3_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lvl1_data`
--
ALTER TABLE `lvl1_data`
  ADD CONSTRAINT `lvl1_data_lvl1_id_foreign` FOREIGN KEY (`lvl1_id`) REFERENCES `level_1` (`lvl1_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lvl2_data`
--
ALTER TABLE `lvl2_data`
  ADD CONSTRAINT `lvl2_data_lvl2_id_foreign` FOREIGN KEY (`lvl2_id`) REFERENCES `level_2` (`lvl2_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lvl3_data`
--
ALTER TABLE `lvl3_data`
  ADD CONSTRAINT `lvl3_data_lvl3_id_foreign` FOREIGN KEY (`lvl3_id`) REFERENCES `level_3` (`lvl3_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lvl4_data`
--
ALTER TABLE `lvl4_data`
  ADD CONSTRAINT `lvl4_data_lvl4_id_foreign` FOREIGN KEY (`lvl4_id`) REFERENCES `level_4` (`lvl4_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
