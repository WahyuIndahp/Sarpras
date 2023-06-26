-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 04.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `distribusis`
--

CREATE TABLE `distribusis` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `ruang_id` bigint(5) UNSIGNED NOT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_bukti` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_sarpras` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terima` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `distribusis`
--

INSERT INTO `distribusis` (`id`, `ruang_id`, `semester`, `deskripsi`, `foto_bukti`, `foto_sarpras`, `tgl_terima`, `created_at`, `updated_at`) VALUES
(1, 1, 'Genap', 'Sapu, Kemoceng, Spidol, Penghapus', 'terima.jpg', 'sarpras.jpg', '2022-06-25 17:00:00', '2022-07-01 22:49:22', '2022-07-01 22:49:22');

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
-- Struktur dari tabel `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `asal_sarpras` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegunaan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_terima` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_terima` timestamp NULL DEFAULT NULL,
  `kode_inventaris` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventories`
--

INSERT INTO `inventories` (`id`, `sarpras_id`, `asal_sarpras`, `jumlah`, `kegunaan`, `foto_terima`, `tgl_terima`, `kode_inventaris`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dinas Pendidikan', '10', 'Untuk mendukung proses pembelajaran', 'meja.png', '2022-07-10 17:00:00', 'INV20220620', '2022-07-01 22:25:28', '2022-07-01 22:25:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembalis`
--

CREATE TABLE `kembalis` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `pinjam_id` bigint(5) UNSIGNED NOT NULL,
  `kondisi_sesudah` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kembali` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kembalis`
--

INSERT INTO `kembalis` (`id`, `pinjam_id`, `kondisi_sesudah`, `foto_kembali`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `tgl_kembali`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tidak Ada Kerusakan', 'bola voli.jpg', 'bola voli.jpg', 'bola voli.jpg', 'bola voli.jpg', 'bola voli.jpg', '2022-06-25 17:00:00', '2022-07-01 23:32:21', '2022-07-01 23:32:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisis`
--

CREATE TABLE `kondisis` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `kode_kondisi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegunaan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_kondisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kondisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_cek` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kondisis`
--

INSERT INTO `kondisis` (`id`, `sarpras_id`, `kode_kondisi`, `kegunaan`, `status`, `detail_kondisi`, `foto_kondisi`, `tgl_cek`, `created_at`, `updated_at`) VALUES
(1, 2, 'KDSP0001', 'Untuk mendukung proses pembelajaran', 'Tidak Ada Kerusakan', 'Tidak ada kayu yang mengeropos dan masih kuat', 'meja.png', '2022-06-25 17:00:00', '2022-07-01 23:49:42', '2022-07-01 23:59:08');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_02_044714_create_sarprases_table', 1),
(6, '2022_07_02_045010_create_ruangs_table', 1),
(7, '2022_07_02_045316_create_plans_table', 1),
(8, '2022_07_02_045901_create_rekaps_table', 1),
(9, '2022_07_02_050212_create_pengadaans_table', 1),
(10, '2022_07_02_050452_create_distribusis_table', 1),
(11, '2022_07_02_050714_create_inventories_table', 1),
(12, '2022_07_02_050938_create_permintaans_table', 1),
(13, '2022_07_02_051203_create_pinjams_table', 1),
(14, '2022_07_02_051437_create_kembalis_table', 1),
(15, '2022_07_02_051653_create_kondisis_table', 1),
(16, '2022_07_02_051823_create_pembenahans_table', 1),
(17, '2022_07_02_051939_create_penghapusans_table', 1),
(18, '2022_07_11_235158_create_qrcodes_table', 2);

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
-- Struktur dari tabel `pembenahans`
--

CREATE TABLE `pembenahans` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `kondisi_id` bigint(5) UNSIGNED NOT NULL,
  `detail_rusak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kondisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_servis` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembenahans`
--

INSERT INTO `pembenahans` (`id`, `kondisi_id`, `detail_rusak`, `status`, `foto_kondisi`, `tgl_servis`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kayu yang mengeropos dan paku sudah berkarat membuat kursi goyang', 'Sudah Dibenahi', 'meja.png', '2022-06-25 17:00:00', '2022-07-02 00:16:12', '2022-07-02 00:24:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadaans`
--

CREATE TABLE `pengadaans` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `jumlah` bigint(3) NOT NULL,
  `hargabeli` bigint(10) NOT NULL,
  `harga_total` bigint(10) NOT NULL,
  `tgl_beli` timestamp NULL DEFAULT NULL,
  `foto_terima` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengadaans`
--

INSERT INTO `pengadaans` (`id`, `sarpras_id`, `jumlah`, `hargabeli`, `harga_total`, `tgl_beli`, `foto_terima`, `created_at`, `updated_at`) VALUES
(2, 4, 10, 50000, 500000, '2022-06-26 17:00:00', 'bukusekolah.jpg', '2022-07-02 23:25:20', '2022-07-11 08:36:55'),
(3, 3, 2, 65999, 131998, '2022-07-05 17:00:00', 'bola voli.jpg', '2022-07-11 08:19:53', '2022-07-11 08:36:22'),
(4, 5, 10, 50999, 509990, '2022-07-05 17:00:00', 'bukusekolah.jpg', '2022-07-12 03:20:34', '2022-07-12 03:20:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghapusans`
--

CREATE TABLE `penghapusans` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `kondisi_id` bigint(5) UNSIGNED NOT NULL,
  `alasan_hps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kondisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_hps` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penghapusans`
--

INSERT INTO `penghapusans` (`id`, `kondisi_id`, `alasan_hps`, `foto_kondisi`, `tgl_hps`, `created_at`, `updated_at`) VALUES
(1, 1, '80% kayu sudah mengalami pengeroposan', 'meja.png', '2022-06-25 17:00:00', '2022-07-02 00:40:25', '2022-07-02 00:42:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaans`
--

CREATE TABLE `permintaans` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `ruang_id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `tgl_minta` date DEFAULT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permintaans`
--

INSERT INTO `permintaans` (`id`, `ruang_id`, `sarpras_id`, `tgl_minta`, `semester`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2022-06-26', 'Genap', '1', '2022-07-02 23:30:59', '2022-07-02 23:30:59');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjams`
--

CREATE TABLE `pinjams` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `user_id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_sarpras` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_sebelum` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pinjam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pinjams`
--

INSERT INTO `pinjams` (`id`, `user_id`, `sarpras_id`, `kode_pinjam`, `jml_sarpras`, `kondisi_sebelum`, `foto_pinjam`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `tgl_pinjam`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'PJM0001', '2', 'Tidak Ada Kerusakan', 'terima.jpg', 'bola voli.jpg', 'bola voli.jpg', 'bola voli.jpg', 'bola voli.jpg', '2022-06-25 17:00:00', '2022-07-01 23:25:33', '2022-07-01 23:25:34'),
(2, 1, 2, 'PJM0002', '3', 'Tidak Ada Kerusakan', 'terima.jpg', 'meja.png', 'meja.png', 'meja.png', 'meja.png', '2022-06-26 17:00:00', '2022-07-01 23:29:51', '2022-07-01 23:29:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plans`
--

CREATE TABLE `plans` (
  `id` bigint(6) UNSIGNED NOT NULL,
  `ruang_id` bigint(5) UNSIGNED NOT NULL,
  `sarpras_id` bigint(5) UNSIGNED NOT NULL,
  `thn_ajr` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `plans`
--

INSERT INTO `plans` (`id`, `ruang_id`, `sarpras_id`, `thn_ajr`, `semester`, `jumlah`, `created_at`, `updated_at`) VALUES
(2, 3, 2, '2022', 'Genap', '1', '2022-07-02 22:59:41', '2022-07-02 22:59:41'),
(3, 3, 5, '2022', 'Genap', '10', '2022-07-05 20:19:57', '2022-07-05 20:19:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `qrcodes`
--

CREATE TABLE `qrcodes` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `inventaris_id` bigint(5) UNSIGNED NOT NULL,
  `link_detail` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `qrcodes`
--

INSERT INTO `qrcodes` (`id`, `inventaris_id`, `link_detail`, `created_at`, `updated_at`) VALUES
(2, 1, 'https://github.com/SimpleSoftwareIO/simp', '2022-07-11 17:20:14', '2022-07-11 17:20:14'),
(3, 1, 'http://127.0.0.1:8000/datainventaris/1', '2022-07-11 17:48:36', '2022-07-11 17:48:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekaps`
--

CREATE TABLE `rekaps` (
  `id` bigint(4) UNSIGNED NOT NULL,
  `sarpras_id` bigint(4) UNSIGNED NOT NULL,
  `thn_ajr` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rekaps`
--

INSERT INTO `rekaps` (`id`, `sarpras_id`, `thn_ajr`, `semester`, `total`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '2022', 'Genap', '20', 'Belum Terealisasi', '2022-07-02 23:00:09', '2022-07-02 23:00:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangs`
--

CREATE TABLE `ruangs` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `nama_ruang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj_ruang` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangs`
--

INSERT INTO `ruangs` (`id`, `nama_ruang`, `pj_ruang`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Kepala Sekolah', 'Indrawati', '2022-07-01 22:21:47', '2022-07-01 22:21:47'),
(2, 'Ruang Kelas 1B', 'Belinda Permata', '2022-07-01 22:22:10', '2022-07-01 22:22:10'),
(3, 'Ruang Kelas 1A', 'Andini', '2022-07-02 22:27:34', '2022-07-05 20:16:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarprases`
--

CREATE TABLE `sarprases` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `kode_sarpras` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_sarpras` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sarprases`
--

INSERT INTO `sarprases` (`id`, `kode_sarpras`, `nama_sarpras`, `created_at`, `updated_at`) VALUES
(2, 'MJPLJ', 'Meja', '2022-07-01 22:23:17', '2022-07-01 22:23:17'),
(3, 'BLVL001', 'Bola Voli', '2022-07-01 22:28:49', '2022-07-01 22:28:49'),
(4, 'BKBC', 'Buku Bacaan', '2022-07-02 22:43:30', '2022-07-02 22:44:54'),
(5, 'BKPKT', 'Buku Paket', '2022-07-05 20:17:40', '2022-07-05 20:17:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(3) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'admin/pjruang/staff',
  `email` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Syaiful Anam', 'syai', 'admin', 'syaiful@gmail.com', NULL, '$2y$10$ppFX0cQViZ1IlHndPTIUk.3CLntk6iuCAGZifly/8aQ8NLucuOrxu', NULL, '2022-07-01 23:20:15', '2022-07-01 23:20:15'),
(2, 'Animbar Yuli', 'animbar', 'staff', 'animbar@gmail.com', NULL, '$2y$10$dS1hyN8gCkj.qg8O.0htau4lU27kVeRx1gldIowPh6WeTdMXWnfHC', NULL, '2022-07-02 02:28:25', '2022-07-02 02:28:25'),
(3, 'Riesje Dharsini', 'riesje', 'pjruang', 'riesje@gmail.com', NULL, '$2y$10$fSW7azpwgbCMtizNvAHxxO333CVmWOXu2.tnBH99tO9rnau082ZRG', NULL, '2022-07-02 02:30:01', '2022-07-02 02:30:01'),
(5, 'Indrawati', 'iin', 'admin', 'indrawati@gmail.com', NULL, '$2y$10$KVC6bdDVKV9ahfLn5MbapeQ5ffblp0QOFL560W.1x6daPv0/TAJmC', NULL, '2022-07-08 18:31:38', '2022-07-08 18:31:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distribusis_ruang_id_foreign` (`ruang_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventories_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `kembalis`
--
ALTER TABLE `kembalis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kembalis_pinjam_id_foreign` (`pinjam_id`);

--
-- Indeks untuk tabel `kondisis`
--
ALTER TABLE `kondisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kondisis_sarpras_id_foreign` (`sarpras_id`);

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
-- Indeks untuk tabel `pembenahans`
--
ALTER TABLE `pembenahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembenahans_kondisi_id_foreign` (`kondisi_id`);

--
-- Indeks untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengadaans_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `penghapusans`
--
ALTER TABLE `penghapusans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penghapusans_kondisi_id_foreign` (`kondisi_id`);

--
-- Indeks untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permintaans_ruang_id_foreign` (`ruang_id`),
  ADD KEY `permintaans_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjams_user_id_foreign` (`user_id`),
  ADD KEY `pinjams_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_ruang_id_foreign` (`ruang_id`),
  ADD KEY `plans_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qrcodes_inventaris_id_foreign` (`inventaris_id`);

--
-- Indeks untuk tabel `rekaps`
--
ALTER TABLE `rekaps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekaps_sarpras_id_foreign` (`sarpras_id`);

--
-- Indeks untuk tabel `ruangs`
--
ALTER TABLE `ruangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ruangs_nama_ruang_unique` (`nama_ruang`);

--
-- Indeks untuk tabel `sarprases`
--
ALTER TABLE `sarprases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sarprases_kode_sarpras_unique` (`kode_sarpras`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kembalis`
--
ALTER TABLE `kembalis`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kondisis`
--
ALTER TABLE `kondisis`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pembenahans`
--
ALTER TABLE `pembenahans`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `penghapusans`
--
ALTER TABLE `penghapusans`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekaps`
--
ALTER TABLE `rekaps`
  MODIFY `id` bigint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ruangs`
--
ALTER TABLE `ruangs`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sarprases`
--
ALTER TABLE `sarprases`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `distribusis`
--
ALTER TABLE `distribusis`
  ADD CONSTRAINT `distribusis_ruang_id_foreign` FOREIGN KEY (`ruang_id`) REFERENCES `ruangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `inventories`
--
ALTER TABLE `inventories`
  ADD CONSTRAINT `inventories_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kembalis`
--
ALTER TABLE `kembalis`
  ADD CONSTRAINT `kembalis_pinjam_id_foreign` FOREIGN KEY (`pinjam_id`) REFERENCES `pinjams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kondisis`
--
ALTER TABLE `kondisis`
  ADD CONSTRAINT `kondisis_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembenahans`
--
ALTER TABLE `pembenahans`
  ADD CONSTRAINT `pembenahans_kondisi_id_foreign` FOREIGN KEY (`kondisi_id`) REFERENCES `kondisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengadaans`
--
ALTER TABLE `pengadaans`
  ADD CONSTRAINT `pengadaans_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penghapusans`
--
ALTER TABLE `penghapusans`
  ADD CONSTRAINT `penghapusans_kondisi_id_foreign` FOREIGN KEY (`kondisi_id`) REFERENCES `kondisis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permintaans`
--
ALTER TABLE `permintaans`
  ADD CONSTRAINT `permintaans_ruang_id_foreign` FOREIGN KEY (`ruang_id`) REFERENCES `ruangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permintaans_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pinjams`
--
ALTER TABLE `pinjams`
  ADD CONSTRAINT `pinjams_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pinjams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ruang_id_foreign` FOREIGN KEY (`ruang_id`) REFERENCES `ruangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plans_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD CONSTRAINT `qrcodes_inventaris_id_foreign` FOREIGN KEY (`inventaris_id`) REFERENCES `inventories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rekaps`
--
ALTER TABLE `rekaps`
  ADD CONSTRAINT `rekaps_sarpras_id_foreign` FOREIGN KEY (`sarpras_id`) REFERENCES `sarprases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
