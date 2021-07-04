-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2021 pada 20.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5368102_repository`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banned`
--

CREATE TABLE `banned` (
  `id` int(11) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `banned`
--

INSERT INTO `banned` (`id`, `ip`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, '100.10.25.40', '2015-05-19 16:37:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `judul`, `sub_judul`, `gambar`, `link`) VALUES
(2, 'Selamat Datang di <span>REDIKA</span>', 'Repository Digital - Teknik Informatika', 'upload/images/1600963123-logo-Color-Find---Shadow-(1).png', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `nidn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nidn`) VALUES
(1, 'Hasannudin, ST., M.Cs. ', '345345345345345777'),
(2, 'Harun Mukhtar, S.Kom., M.Kom.', '1004117603'),
(3, 'Evan Fuad, S.Kom., M.Eng.', '1014028605'),
(6, 'Regiolina Hayami, S.T., M.Kom.', '1026039003'),
(9, 'Januar Al Amien, S.Kom., M.Kom. ', '1030018001'),
(10, 'Mitra Unik, S.Kom., M.Kom ', '1014118802'),
(11, 'Soni, S.Kom., M.Kom. ', '1004049101'),
(12, 'Yulia Fatma, S.Kom., M.Cs.', '1018079001'),
(13, 'Febby Apri Wenando, S.Pd., M.Eng. ', '1017049102'),
(14, 'Desti Maulifah, M.Kom. ', '1001129002'),
(15, 'Yoze Rizky, ST., MT.', '1016118904'),
(16, 'Reny Medikawati Taufiq, S.Kom,. M.T.', '1013028301'),
(17, 'Sunanto, S.Kom., M.Kom. ', '1014048403'),
(18, 'Dr. Baidarus, M.Ag.,MM', '1006087101');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators'),
(3, 'team', 'akun team'),
(5, 'member', 'member tect');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerja_praktek`
--

CREATE TABLE `kerja_praktek` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `pembimbing` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `abstrak` text NOT NULL,
  `daftar_pustaka` text NOT NULL,
  `cover` text NOT NULL,
  `bab_1` text NOT NULL,
  `files` text NOT NULL,
  `status` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerja_praktek`
--

INSERT INTO `kerja_praktek` (`id`, `judul`, `jenis`, `penulis`, `pembimbing`, `tanggal`, `abstrak`, `daftar_pustaka`, `cover`, `bab_1`, `files`, `status`, `komentar`, `user_id`, `time_update`) VALUES
(1, 'PROPERTRUST fghfhhdf', 'magang', 'dfghfhfghfghfg', 1, '2019-08-16', '<p>fgbdfgdfgdfgdfg</p>', '<p>dfgdfgdfgdfgdfgfg</p>', 'upload/files/1565844500-cover-domain-riautimes.pdf', 'upload/files/1565844500-bab-1-gunawan.pdf', 'upload/files/1565844500-skripsi-MP2307-r1.9.pdf', 1, '', 32, '2019-08-15 04:48:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosentrasi`
--

CREATE TABLE `kosentrasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kosentrasi`
--

INSERT INTO `kosentrasi` (`id`, `nama`, `keterangan`) VALUES
(2, 'Kecerdasan Buatan', 'khkjhk'),
(3, 'Jaringan Komputer', 'Jaringan Komputer'),
(4, 'Sistem Informasi', 'Sistem Informasi'),
(5, 'Multimedia', 'Multimedia'),
(6, 'Aplikasi Desktop', 'Aplikasi Desktop'),
(7, 'Data Mining', 'Data Mining'),
(8, 'Digital Forensic', 'Digital Forensic'),
(9, 'Keamanan Sistem', 'Keamanan Sistem'),
(10, 'Kriptografi', 'Kriptografi'),
(11, 'Pemrograman Mobile', 'Pemrograman Mobile'),
(12, 'Internet of Things', 'Internet of Things');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notivikasi`
--

CREATE TABLE `notivikasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `for_user` varchar(255) NOT NULL,
  `notiv_text` text NOT NULL,
  `notiv_url` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notivikasi`
--

INSERT INTO `notivikasi` (`id`, `user_id`, `for_user`, `notiv_text`, `notiv_url`, `tanggal`, `status`) VALUES
(1, 32, 'admin', 'baru saja mengupload data kerja praktek baru, klik link berikut untuk verifikasi data', 'praktek/review/1', '2019-08-15 11:48:20', 1),
(2, 1, '32', 'data skripsi anda kurang lengkap, klik link berikut untuk melengkapi data skripsi anda', 'skripsi/view/7', '2019-08-15 04:33:18', 1),
(3, 61, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/8', '2019-08-19 08:38:51', 1),
(4, 33, '61', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/8', '2019-08-19 08:41:53', 1),
(5, 60, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/9', '2019-08-19 08:49:00', 1),
(6, 59, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/10', '2019-08-19 08:59:53', 1),
(7, 58, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/11', '2019-08-19 09:05:49', 1),
(8, 57, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/12', '2019-08-19 09:10:32', 1),
(9, 56, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/13', '2019-08-19 09:15:31', 1),
(10, 55, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/14', '2019-08-19 09:20:43', 1),
(11, 54, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/15', '2019-08-19 09:25:53', 1),
(12, 53, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/16', '2019-08-19 09:31:10', 1),
(13, 52, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/17', '2019-08-19 09:35:08', 1),
(14, 51, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/18', '2019-08-19 09:45:40', 1),
(15, 50, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/19', '2019-08-19 09:52:54', 1),
(16, 33, '50', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/19', '2019-08-19 09:53:42', 1),
(17, 33, '51', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/18', '2019-08-19 09:53:52', 0),
(18, 33, '52', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/17', '2019-08-19 09:54:02', 0),
(19, 33, '53', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/16', '2019-08-19 09:54:12', 0),
(20, 33, '54', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/15', '2019-08-19 09:54:21', 0),
(21, 33, '55', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/14', '2019-08-19 09:54:33', 0),
(22, 33, '56', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/13', '2019-08-19 09:54:43', 0),
(23, 33, '57', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/12', '2019-08-19 09:54:53', 0),
(24, 33, '58', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/11', '2019-08-19 09:55:08', 1),
(25, 33, '59', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/10', '2019-08-19 09:55:22', 0),
(26, 33, '60', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/9', '2019-08-19 09:55:38', 0),
(27, 49, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/20', '2019-08-19 10:15:51', 1),
(28, 48, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/21', '2019-08-19 10:29:50', 1),
(29, 47, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/22', '2019-08-19 10:36:33', 1),
(30, 46, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/23', '2019-08-19 10:41:18', 1),
(31, 33, '49', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/20', '2019-08-19 10:53:54', 0),
(32, 45, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/24', '2019-08-19 11:01:27', 1),
(33, 44, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/25', '2019-08-19 11:06:52', 1),
(34, 43, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/26', '2019-08-19 11:11:56', 1),
(35, 42, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/27', '2019-08-19 11:18:04', 1),
(36, 1, '42', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/27', '2019-08-20 10:44:38', 0),
(37, 41, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/28', '2019-08-20 10:49:54', 1),
(38, 40, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/29', '2019-08-20 10:56:17', 1),
(39, 39, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/30', '2019-08-20 11:01:39', 1),
(40, 38, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/31', '2019-08-20 11:09:54', 1),
(41, 33, '38', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/31', '2019-08-21 06:07:14', 1),
(42, 33, '39', 'data skripsi anda kurang lengkap, klik link berikut untuk melengkapi data skripsi anda', 'skripsi/view/30', '2019-08-21 06:10:07', 0),
(43, 1, '40', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/29', '2019-08-23 05:47:15', 0),
(44, 1, '41', 'data skripsi anda kurang lengkap, klik link berikut untuk melengkapi data skripsi anda', 'skripsi/view/28', '2019-08-23 05:53:42', 0),
(45, 37, 'admin', 'baru saja mengupload data skripsi baru, klik link berikut untuk verifikasi data', 'skripsi/review/32', '2019-08-24 05:02:47', 1),
(46, 1, '37', 'data skripsi anda kurang lengkap, klik link berikut untuk melengkapi data skripsi anda', 'skripsi/view/32', '2019-08-24 05:31:44', 1),
(47, 1, '43', 'Data skripsi anda baru saja disetujui, klik link berikut untuk mencetak bukti penyerahan skripsi', 'skripsi/view/26', '2019-08-24 06:10:39', 1),
(48, 37, 'admin', 'baru saja merefisi data skripsi, klik link berikut untuk verifikasi ulang data', 'skripsi/review/32', '2019-08-25 02:46:07', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rat`
--

CREATE TABLE `rat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rat`
--

INSERT INTO `rat` (`id`, `user_id`, `date_time`, `code`, `message`) VALUES
(5, 1, '2015-06-19 17:03:50', 0, 'The user logged in'),
(6, 1, '2017-02-22 12:30:40', 0, 'The user logged in'),
(7, 1, '2017-02-22 12:36:00', 0, 'The user logged out'),
(8, 1, '2017-02-22 12:36:15', 0, 'The user logged in'),
(9, 1, '2017-02-22 12:39:50', 0, 'The user logged out'),
(10, 2, '2017-02-22 12:40:00', 0, 'The user logged in'),
(11, 2, '2017-02-22 12:41:03', 0, 'The user logged out'),
(12, 1, '2017-02-22 12:42:08', 0, 'The user logged in'),
(13, 1, '2017-02-22 12:45:03', 0, 'The user logged out'),
(14, 1, '2017-02-22 12:45:24', 0, 'The user logged in'),
(15, 1, '2017-02-22 13:02:09', 0, 'The user logged out'),
(16, 1, '2017-02-22 13:02:16', 0, 'The user logged in'),
(17, 1, '2017-02-24 12:28:32', 0, 'The user logged in'),
(18, 1, '2017-02-24 12:36:57', 0, 'The user logged out'),
(19, 2, '2017-02-24 12:37:07', 0, 'The user logged in'),
(20, 2, '2017-02-24 13:23:38', 0, 'The user logged out'),
(21, 1, '2017-02-24 15:28:49', 0, 'The user logged in'),
(22, 1, '2017-02-24 15:34:06', 0, 'The user logged out'),
(23, 3, '2017-02-24 15:34:13', 0, 'The user logged in'),
(24, 3, '2017-02-24 15:34:30', 0, 'The user logged out'),
(25, 3, '2017-02-24 20:02:27', 0, 'The user logged out'),
(26, 3, '2017-02-24 20:03:22', 0, 'The user logged in'),
(27, 3, '2017-02-24 20:04:13', 0, 'The user logged out'),
(28, 3, '2017-02-24 20:05:24', 0, 'The user logged out'),
(29, 3, '2017-02-24 20:07:59', 0, 'The user logged in'),
(30, 3, '2017-02-24 20:08:04', 0, 'The user logged out'),
(31, 3, '2017-02-24 20:08:40', 0, 'The user logged in'),
(32, 3, '2017-02-24 20:09:37', 0, 'The user logged out'),
(33, 3, '2017-02-24 20:12:50', 0, 'The user logged in'),
(34, 1, '2017-02-25 07:52:33', 0, 'The user logged in'),
(35, 1, '2017-02-25 07:52:48', 0, 'The user logged out'),
(36, 1, '2017-02-25 07:55:05', 0, 'The user logged in'),
(37, 1, '2017-02-25 07:55:15', 0, 'The user logged out'),
(38, 1, '2017-02-25 07:57:45', 0, 'The user logged out'),
(39, 1, '2017-02-25 07:59:13', 0, 'The user logged out'),
(40, 1, '2017-02-25 08:23:07', 0, 'The user logged out'),
(41, 1, '2017-02-25 08:32:39', 0, 'The user logged out'),
(42, 1, '2017-02-25 08:44:59', 0, 'The user logged out'),
(43, 1, '2017-02-25 08:48:45', 0, 'The user logged out'),
(44, 1, '2017-02-25 08:48:54', 0, 'The user logged in'),
(45, 1, '2017-02-25 08:49:19', 0, 'The user logged out'),
(46, 1, '2017-02-26 06:57:51', 0, 'The user logged out'),
(47, 1, '2017-02-26 10:28:28', 0, 'The user logged out'),
(48, 1, '2017-02-26 10:30:26', 0, 'The user logged in'),
(49, 1, '2017-02-26 18:48:01', 0, 'The user logged out'),
(50, 1, '2017-02-27 20:38:03', 0, 'The user logged in'),
(51, 1, '2017-02-28 04:49:24', 0, 'The user logged in'),
(52, 3, '2017-04-13 20:21:53', 0, 'The user logged out'),
(53, 1, '2017-04-13 20:22:09', 0, 'The user logged in'),
(54, 3, '2017-04-13 21:07:35', 0, 'The user logged out'),
(55, 0, '2017-04-13 21:07:36', 0, 'The user logged out'),
(56, 0, '2017-04-14 07:02:47', 0, 'The user logged out'),
(57, 3, '2017-04-14 07:10:34', 0, 'The user logged out'),
(58, 3, '2017-04-14 07:11:20', 0, 'The user logged out'),
(59, 3, '2017-04-14 07:17:15', 0, 'The user logged out'),
(60, 3, '2017-04-14 07:41:53', 0, 'The user logged out'),
(61, 3, '2017-04-17 10:11:48', 0, 'The user logged out'),
(62, 3, '2017-04-17 22:23:22', 0, 'The user logged out'),
(63, 1, '2017-04-17 22:25:09', 0, 'The user logged out'),
(64, 1, '2017-04-17 22:37:03', 0, 'The user logged out'),
(65, 3, '2017-04-18 10:17:41', 0, 'The user logged out'),
(66, 3, '2017-04-18 18:57:49', 0, 'The user logged out'),
(67, 1, '2017-04-18 19:33:15', 0, 'The user logged out'),
(68, 1, '2017-04-18 19:33:50', 0, 'The user logged out'),
(69, 1, '2017-04-19 10:18:36', 0, 'The user logged out'),
(70, 1, '2017-04-20 08:50:45', 0, 'The user logged out'),
(71, 1, '2017-04-25 10:42:46', 0, 'The user logged out'),
(72, 1, '2017-04-26 09:58:08', 0, 'The user logged out'),
(73, 1, '2017-04-26 09:58:53', 0, 'The user logged out'),
(74, 1, '2017-04-26 10:18:10', 0, 'The user logged out'),
(75, 1, '2017-04-26 10:34:04', 0, 'The user logged out'),
(76, 1, '2017-04-26 14:38:01', 0, 'The user logged out'),
(77, 1, '2017-04-26 14:44:04', 0, 'The user logged out'),
(78, 1, '2017-04-26 15:13:21', 0, 'The user logged out'),
(79, 1, '2017-05-01 01:09:03', 0, 'The user logged out'),
(80, 1, '2017-05-02 12:26:28', 0, 'The user logged out'),
(81, 1, '2017-05-02 16:24:13', 0, 'The user logged out'),
(82, 1, '2017-05-05 14:13:06', 0, 'The user logged out'),
(83, 1, '2017-05-06 16:00:08', 0, 'The user logged out'),
(84, 1, '2017-05-13 12:26:53', 0, 'The user logged out'),
(85, 0, '2017-05-14 07:56:49', 0, 'The user logged out'),
(86, 1, '2017-05-16 01:11:19', 0, 'The user logged out'),
(87, 1, '2017-05-22 12:42:26', 0, 'The user logged out'),
(88, 1, '2017-06-24 12:48:24', 0, 'The user logged out'),
(89, 1, '2017-07-01 10:10:58', 0, 'The user logged out'),
(90, 1, '2017-07-01 10:15:10', 0, 'The user logged in'),
(91, 1, '2017-07-01 23:33:25', 0, 'The user logged in'),
(92, 1, '2017-07-02 09:26:34', 0, 'The user logged in'),
(93, 1, '2017-07-02 09:41:29', 0, 'The user logged in'),
(94, 1, '2017-07-02 12:48:28', 0, 'The user logged in'),
(95, 1, '2017-07-02 15:56:47', 0, 'The user logged in'),
(96, 1, '2017-07-02 21:56:00', 0, 'The user logged in'),
(97, 1, '2017-07-05 11:03:56', 0, 'The user logged in'),
(98, 1, '2017-07-05 12:46:34', 0, 'The user logged in'),
(99, 1, '2017-07-06 09:51:44', 0, 'The user logged in'),
(100, 1, '2017-07-07 08:42:57', 0, 'The user logged in'),
(101, 1, '2017-07-07 22:03:42', 0, 'The user logged in'),
(102, 1, '2017-07-08 20:27:35', 0, 'The user logged in'),
(103, 1, '2017-07-08 20:55:59', 0, 'The user logged in'),
(104, 1, '2017-07-08 21:22:23', 0, 'The user logged in'),
(105, 1, '2017-07-08 21:27:43', 0, 'The user logged in'),
(106, 1, '2017-07-08 21:33:52', 0, 'The user logged in'),
(107, 1, '2017-07-08 21:55:16', 0, 'The user logged in'),
(108, 1, '2017-07-08 22:12:59', 0, 'The user logged in'),
(109, 1, '2017-07-08 22:17:21', 0, 'The user logged in'),
(110, 1, '2017-07-08 23:02:06', 0, 'The user logged in'),
(111, 1, '2017-07-08 23:06:18', 0, 'The user logged in'),
(112, 1, '2017-07-08 23:24:56', 0, 'The user logged in'),
(113, 1, '2017-07-09 00:41:10', 0, 'The user logged in'),
(114, 1, '2017-07-09 01:07:44', 0, 'The user logged in'),
(115, 1, '2017-07-10 04:28:19', 0, 'The user logged in'),
(116, 1, '2017-07-10 04:39:12', 0, 'The user logged in'),
(117, 1, '2017-07-10 04:41:43', 0, 'The user logged in'),
(118, 1, '2017-07-10 05:30:15', 0, 'The user logged in'),
(119, 1, '2017-07-10 05:34:27', 0, 'The user logged in'),
(120, 1, '2017-07-10 05:36:41', 0, 'The user logged in'),
(121, 1, '2017-07-10 05:42:13', 0, 'The user logged in'),
(122, 1, '2017-07-10 05:52:20', 0, 'The user logged in'),
(123, 1, '2017-07-10 07:33:37', 0, 'The user logged in'),
(124, 1, '2017-07-10 07:36:33', 0, 'The user logged in'),
(125, 1, '2017-07-10 07:44:25', 0, 'The user logged in'),
(126, 1, '2017-07-10 07:47:48', 0, 'The user logged in'),
(127, 1, '2017-07-10 07:49:40', 0, 'The user logged in'),
(128, 1, '2017-07-10 23:57:29', 0, 'The user logged in'),
(129, 1, '2017-07-11 10:45:09', 0, 'The user logged in'),
(130, 1, '2017-07-11 22:09:55', 0, 'The user logged in'),
(131, 1, '2017-07-12 14:01:39', 0, 'The user logged in'),
(132, 1, '2017-07-12 16:03:53', 0, 'The user logged in'),
(133, 1, '2017-07-13 00:59:03', 0, 'The user logged in'),
(134, 1, '2017-07-13 01:45:41', 0, 'The user logged in'),
(135, 1, '2017-07-13 01:57:15', 0, 'The user logged in'),
(136, 1, '2017-07-13 11:00:10', 0, 'The user logged in'),
(137, 1, '2017-07-19 03:47:55', 0, 'The user logged in'),
(138, 1, '2017-07-19 04:24:39', 0, 'The user logged in'),
(139, 1, '2017-08-11 10:51:56', 0, 'The user logged in'),
(140, 1, '2017-08-11 15:12:36', 0, 'The user logged in'),
(141, 1, '2017-08-13 13:36:06', 0, 'The user logged in'),
(142, 1, '2017-08-13 14:13:04', 0, 'The user logged in'),
(143, 1, '2017-08-14 00:11:31', 0, 'The user logged in'),
(144, 1, '2017-08-14 22:52:08', 0, 'The user logged in'),
(145, 1, '2017-08-15 07:58:04', 0, 'The user logged in'),
(146, 1, '2017-08-15 09:56:03', 0, 'The user logged out'),
(147, 1, '2017-08-15 09:56:16', 0, 'The user logged in'),
(148, 1, '2017-08-23 17:00:07', 0, 'The user logged in'),
(149, 1, '2017-09-13 16:31:47', 0, 'The user logged in'),
(150, 1, '2017-09-15 18:59:31', 0, 'The user logged in'),
(151, 1, '2017-09-15 19:10:16', 0, 'The user logged out'),
(152, 1, '2017-09-18 15:06:33', 0, 'The user logged in'),
(153, 1, '2017-09-26 16:39:44', 0, 'The user logged in'),
(154, 1, '2017-09-28 15:56:03', 0, 'The user logged in'),
(155, 1, '2017-09-29 00:38:44', 0, 'The user logged in'),
(156, 1, '2017-09-29 01:53:01', 0, 'The user logged in'),
(157, 1, '2017-10-29 13:26:05', 0, 'The user logged in'),
(158, 1, '2018-02-21 21:25:00', 0, 'The user logged in'),
(159, 1, '2018-02-24 14:16:03', 0, 'The user logged in'),
(160, 1, '2018-02-24 14:38:03', 0, 'The user logged out'),
(161, 17, '2018-02-24 14:39:17', 0, 'The user logged out'),
(162, 1, '2018-02-27 14:14:26', 0, 'The user logged in'),
(163, 1, '2018-02-27 22:50:35', 0, 'The user logged in'),
(164, 1, '2018-02-28 01:28:18', 0, 'The user logged in'),
(165, 1, '2018-02-28 13:02:27', 0, 'The user logged in'),
(166, 1, '2018-02-28 17:26:30', 0, 'The user logged in'),
(167, 1, '2018-02-28 21:27:49', 0, 'The user logged in'),
(168, 1, '2018-03-01 21:28:03', 0, 'The user logged in'),
(169, 1, '2018-03-01 21:28:31', 0, 'The user logged out'),
(170, 1, '2018-03-02 02:04:08', 0, 'The user logged in'),
(171, 1, '2018-03-02 02:41:18', 0, 'The user logged out'),
(172, 1, '2018-03-02 02:41:39', 0, 'The user logged in'),
(173, 1, '2018-03-02 03:07:59', 0, 'The user logged out'),
(174, 21, '2018-03-02 03:20:02', 0, 'The user logged out'),
(175, 21, '2018-03-02 03:22:49', 0, 'The user logged out'),
(176, 21, '2018-03-02 03:23:01', 0, 'The user logged out'),
(177, 21, '2018-03-02 03:23:23', 0, 'The user logged out'),
(178, 21, '2018-03-02 03:30:45', 0, 'The user logged out'),
(179, 21, '2018-03-02 03:33:33', 0, 'The user logged out'),
(180, 21, '2018-03-02 03:34:20', 0, 'The user logged out'),
(181, 1, '2018-03-02 03:34:36', 0, 'The user logged in'),
(182, 1, '2018-03-02 03:34:43', 0, 'The user logged out'),
(183, 22, '2018-03-02 03:36:32', 0, 'The user logged out'),
(184, 1, '2018-03-03 21:30:56', 0, 'The user logged in'),
(185, 1, '2018-03-04 20:31:16', 0, 'The user logged in'),
(186, 1, '2018-03-06 00:09:38', 0, 'The user logged in'),
(187, 1, '2018-03-09 00:12:34', 0, 'The user logged in'),
(188, 1, '2018-03-11 21:19:59', 0, 'The user logged in'),
(189, 1, '2018-03-11 22:10:52', 0, 'The user logged out'),
(190, 1, '2018-03-11 22:27:00', 0, 'The user logged in'),
(191, 1, '2018-03-11 23:01:16', 0, 'The user logged out'),
(192, 21, '2018-03-12 23:25:18', 0, 'The user logged out'),
(193, 21, '2018-03-12 23:43:30', 0, 'The user logged out'),
(194, 1, '2018-03-12 23:43:48', 0, 'The user logged in'),
(195, 1, '2018-03-12 23:47:03', 0, 'The user logged out'),
(196, 21, '2018-03-13 01:15:52', 0, 'The user logged out'),
(197, 1, '2018-03-13 01:16:00', 0, 'The user logged in'),
(198, 1, '2018-03-13 01:24:03', 0, 'The user logged out'),
(199, 1, '2018-03-14 22:28:16', 0, 'The user logged in'),
(200, 1, '2018-03-14 22:28:25', 0, 'The user logged out'),
(201, 21, '2018-03-15 01:36:42', 0, 'The user logged out'),
(202, 21, '2018-03-17 00:45:36', 0, 'The user logged out'),
(203, 1, '2018-03-17 00:45:51', 0, 'The user logged in'),
(204, 21, '2018-03-17 22:49:01', 0, 'The user logged out'),
(205, 1, '2018-03-17 22:49:17', 0, 'The user logged in'),
(206, 1, '2018-03-18 00:34:12', 0, 'The user logged out'),
(207, 21, '2018-03-19 16:40:24', 0, 'The user logged out'),
(208, 1, '2018-03-19 16:42:58', 0, 'The user logged in'),
(209, 1, '2018-03-19 16:53:34', 0, 'The user logged out'),
(210, 18, '2018-03-19 21:42:51', 0, 'The user logged in'),
(211, 18, '2018-03-19 21:49:12', 0, 'The user logged out'),
(212, 18, '2018-03-19 21:51:07', 0, 'The user logged in'),
(213, 1, '2018-03-20 19:51:40', 0, 'The user logged in'),
(214, 1, '2018-03-20 19:52:43', 0, 'The user logged out'),
(215, 18, '2018-03-20 19:52:53', 0, 'The user logged in'),
(216, 21, '2018-03-20 23:08:21', 0, 'The user logged in'),
(217, 21, '2018-03-21 01:43:51', 0, 'The user logged out'),
(218, 21, '2018-03-21 01:44:24', 0, 'The user logged in'),
(219, 23, '2018-03-21 11:05:59', 0, 'The user logged in'),
(220, 23, '2018-03-21 11:26:53', 0, 'The user logged out'),
(221, 23, '2018-03-21 11:28:35', 0, 'The user logged in'),
(222, 23, '2018-03-21 11:36:07', 0, 'The user logged out'),
(223, 24, '2018-03-21 11:37:49', 0, 'The user logged in'),
(224, 21, '2018-03-22 01:42:31', 0, 'The user logged in'),
(225, 18, '2018-03-22 01:50:03', 0, 'The user logged in'),
(226, 21, '2018-03-22 02:00:04', 0, 'The user logged out'),
(227, 21, '2018-03-22 02:07:16', 0, 'The user logged in'),
(228, 21, '2018-03-22 02:07:20', 0, 'The user logged out'),
(229, 21, '2018-03-22 02:13:45', 0, 'The user logged in'),
(230, 21, '2018-03-22 02:13:48', 0, 'The user logged out'),
(231, 25, '2018-03-23 13:40:46', 0, 'The user logged in'),
(232, 1, '2018-03-23 22:46:52', 0, 'The user logged in'),
(233, 21, '2018-03-24 01:20:18', 0, 'The user logged in'),
(234, 0, '2018-03-24 03:29:52', 0, 'The user logged out'),
(235, 26, '2018-03-24 03:30:47', 0, 'The user logged in'),
(236, 26, '2018-03-24 03:48:18', 0, 'The user logged out'),
(237, 18, '2018-03-25 04:37:02', 0, 'The user logged in'),
(238, 18, '2018-03-25 05:17:17', 0, 'The user logged out'),
(239, 18, '2018-03-25 05:20:36', 0, 'The user logged in'),
(240, 18, '2018-03-25 05:23:57', 0, 'The user logged out'),
(241, 1, '2018-03-25 05:24:14', 0, 'The user logged in'),
(242, 1, '2018-03-25 06:12:59', 0, 'The user logged out'),
(243, 25, '2018-03-25 06:14:12', 0, 'The user logged in'),
(244, 25, '2018-03-25 15:15:56', 0, 'The user logged in'),
(245, 25, '2018-03-25 16:01:46', 0, 'The user logged out'),
(246, 18, '2018-03-25 16:02:02', 0, 'The user logged in'),
(247, 18, '2018-03-25 16:07:39', 0, 'The user logged out'),
(248, 25, '2018-03-25 16:07:56', 0, 'The user logged in'),
(249, 25, '2018-03-26 00:01:23', 0, 'The user logged in'),
(250, 25, '2018-03-27 00:49:23', 0, 'The user logged in'),
(251, 25, '2018-03-27 02:30:14', 0, 'The user logged out'),
(252, 18, '2018-03-27 02:30:29', 0, 'The user logged in'),
(253, 18, '2018-03-27 03:33:23', 0, 'The user logged out'),
(254, 25, '2018-03-28 22:49:01', 0, 'The user logged in'),
(255, 25, '2018-03-29 23:49:37', 0, 'The user logged in'),
(256, 1, '2018-03-30 17:49:28', 0, 'The user logged in'),
(257, 1, '2018-03-30 17:50:53', 0, 'The user logged out'),
(258, 26, '2018-03-30 17:51:15', 0, 'The user logged in'),
(259, 26, '2018-03-30 17:51:15', 0, 'The user logged out'),
(260, 0, '2018-03-30 17:52:49', 0, 'The user logged out'),
(261, 26, '2018-03-30 17:53:15', 0, 'The user logged in'),
(262, 26, '2018-03-30 18:08:06', 0, 'The user logged out'),
(263, 18, '2018-03-30 18:08:26', 0, 'The user logged in'),
(264, 18, '2018-03-30 18:09:21', 0, 'The user logged out'),
(265, 26, '2018-03-30 18:14:39', 0, 'The user logged in'),
(266, 26, '2018-03-31 11:12:00', 0, 'The user logged in'),
(267, 26, '2018-03-31 13:49:22', 0, 'The user logged out'),
(268, 25, '2018-03-31 13:49:34', 0, 'The user logged in'),
(269, 25, '2018-03-31 13:49:46', 0, 'The user logged out'),
(270, 18, '2018-03-31 13:50:11', 0, 'The user logged in'),
(271, 1, '2018-04-04 23:23:04', 0, 'The user logged in'),
(272, 25, '2018-04-09 13:03:30', 0, 'The user logged in'),
(273, 25, '2018-04-09 13:08:37', 0, 'The user logged out'),
(274, 18, '2018-04-09 13:09:06', 0, 'The user logged in'),
(275, 25, '2018-04-11 12:30:04', 0, 'The user logged in'),
(276, 25, '2018-04-11 21:31:36', 0, 'The user logged in'),
(277, 25, '2018-04-12 00:46:04', 0, 'The user logged out'),
(278, 18, '2018-04-12 00:46:25', 0, 'The user logged in'),
(279, 18, '2018-04-12 00:46:48', 0, 'The user logged out'),
(280, 1, '2018-04-12 00:47:04', 0, 'The user logged in'),
(281, 1, '2018-04-12 00:48:10', 0, 'The user logged out'),
(282, 18, '2018-04-12 00:48:30', 0, 'The user logged in'),
(283, 18, '2018-04-12 12:47:18', 0, 'The user logged in'),
(284, 25, '2018-04-29 10:14:04', 0, 'The user logged in'),
(285, 25, '2018-04-29 10:17:00', 0, 'The user logged in'),
(286, 25, '2018-04-29 10:17:06', 0, 'The user logged out'),
(287, 18, '2018-04-29 10:17:24', 0, 'The user logged in'),
(288, 25, '2018-04-29 18:54:36', 0, 'The user logged in'),
(289, 25, '2018-04-30 23:01:45', 0, 'The user logged in'),
(290, 25, '2018-05-01 09:44:57', 0, 'The user logged in'),
(291, 25, '2018-05-01 22:56:59', 0, 'The user logged in'),
(292, 25, '2018-05-02 11:37:47', 0, 'The user logged in'),
(293, 18, '2018-05-02 22:16:41', 0, 'The user logged in'),
(294, 25, '2018-05-02 22:17:23', 0, 'The user logged in'),
(295, 1, '2018-05-03 22:29:50', 0, 'The user logged in'),
(296, 1, '2018-05-03 22:30:12', 0, 'The user logged out'),
(297, 25, '2018-05-03 22:30:47', 0, 'The user logged in'),
(298, 25, '2018-05-03 22:52:19', 0, 'The user logged out'),
(299, 18, '2018-05-03 22:52:41', 0, 'The user logged in'),
(300, 25, '2018-05-03 22:53:31', 0, 'The user logged in'),
(301, 25, '2018-05-17 21:55:50', 0, 'The user logged in'),
(302, 25, '2018-05-18 02:47:48', 0, 'The user logged in'),
(303, 25, '2018-05-19 22:47:01', 0, 'The user logged in'),
(304, 26, '2018-05-20 04:21:32', 0, 'The user logged in'),
(305, 26, '2018-05-20 04:35:05', 0, 'The user logged out'),
(306, 25, '2018-05-20 04:35:20', 0, 'The user logged in'),
(307, 18, '2018-05-20 04:36:13', 0, 'The user logged in'),
(308, 25, '2018-05-21 02:44:06', 0, 'The user logged in'),
(309, 26, '2018-05-21 04:23:54', 0, 'The user logged in'),
(310, 18, '2018-07-16 23:26:06', 0, 'The user logged in'),
(311, 25, '2018-07-17 00:18:05', 0, 'The user logged in'),
(312, 18, '2018-07-17 22:24:27', 0, 'The user logged in'),
(313, 25, '2018-07-17 23:34:28', 0, 'The user logged in'),
(314, 25, '2018-07-18 02:10:42', 0, 'The user logged in'),
(315, 1, '2019-07-29 14:18:35', 0, 'The user logged in'),
(316, 1, '2019-07-29 18:52:47', 0, 'The user logged in'),
(317, 1, '2019-07-31 13:48:06', 0, 'The user logged in'),
(318, 1, '2019-07-31 19:17:24', 0, 'The user logged in'),
(319, 1, '2019-07-31 21:05:14', 0, 'The user logged out'),
(320, 1, '2019-08-01 12:18:02', 0, 'The user logged in'),
(321, 1, '2019-08-01 16:31:04', 0, 'The user logged in'),
(322, 1, '2019-08-01 19:02:39', 0, 'The user logged in'),
(323, 1, '2019-08-03 13:18:58', 0, 'The user logged in'),
(324, 1, '2019-08-03 19:45:39', 0, 'The user logged in'),
(325, 1, '2019-08-05 20:32:38', 0, 'The user logged in'),
(326, 32, '2019-08-05 20:38:42', 0, 'The user logged in'),
(327, 32, '2019-08-06 17:55:45', 0, 'The user logged in'),
(328, 32, '2019-08-07 16:25:16', 0, 'The user logged in'),
(329, 32, '2019-08-07 21:20:49', 0, 'The user logged in'),
(330, 32, '2019-08-08 17:17:52', 0, 'The user logged in'),
(331, 32, '2019-08-08 18:52:07', 0, 'The user logged out'),
(332, 1, '2019-08-08 18:52:43', 0, 'The user logged in'),
(333, 1, '2019-08-08 18:53:24', 0, 'The user logged out'),
(334, 32, '2019-08-08 18:53:38', 0, 'The user logged in'),
(335, 1, '2019-08-14 14:43:55', 0, 'The user logged in'),
(336, 1, '2019-08-14 14:44:08', 0, 'The user logged out'),
(337, 32, '2019-08-14 14:44:20', 0, 'The user logged in'),
(338, 32, '2019-08-14 21:27:25', 0, 'The user logged in'),
(339, 32, '2019-08-15 08:33:53', 0, 'The user logged in'),
(340, 32, '2019-08-15 12:19:49', 0, 'The user logged out'),
(341, 32, '2019-08-15 12:53:53', 0, 'The user logged in'),
(342, 32, '2019-08-15 13:50:14', 0, 'The user logged out'),
(343, 1, '2019-08-15 13:50:40', 0, 'The user logged in'),
(344, 1, '2019-08-15 16:36:40', 0, 'The user logged out'),
(345, 1, '2019-08-15 16:37:28', 0, 'The user logged in'),
(346, 1, '2019-08-15 23:40:40', 0, 'The user logged in'),
(347, 1, '2019-08-16 08:15:55', 0, 'The user logged in'),
(348, 1, '2019-08-16 08:35:04', 0, 'The user logged out'),
(349, 1, '2019-08-16 08:35:59', 0, 'The user logged in'),
(350, 1, '2019-08-16 08:36:02', 0, 'The user logged out'),
(351, 33, '2019-08-16 08:36:15', 0, 'The user logged in'),
(352, 33, '2019-08-16 08:36:15', 0, 'The user logged out'),
(353, 33, '2019-08-16 08:37:48', 0, 'The user logged in'),
(354, 1, '2019-08-16 19:42:14', 0, 'The user logged in'),
(355, 1, '2019-08-16 21:11:57', 0, 'The user logged out'),
(356, 32, '2019-08-16 21:12:04', 0, 'The user logged in'),
(357, 32, '2019-08-16 22:31:01', 0, 'The user logged out'),
(358, 32, '2019-08-16 22:31:08', 0, 'The user logged in'),
(359, 1, '2019-08-17 16:56:12', 0, 'The user logged in'),
(360, 1, '2019-08-17 18:16:42', 0, 'The user logged out'),
(361, 1, '2019-08-17 18:23:08', 0, 'The user logged in'),
(362, 1, '2019-08-17 23:27:54', 0, 'The user logged in'),
(363, 1, '2019-08-18 19:18:58', 0, 'The user logged in'),
(364, 1, '2019-08-18 19:44:34', 0, 'The user logged in'),
(365, 1, '2019-08-18 19:47:20', 0, 'The user logged out'),
(366, 1, '2019-08-18 19:47:29', 0, 'The user logged in'),
(367, 1, '2019-08-18 21:10:18', 0, 'The user logged in'),
(368, 33, '2019-08-18 21:57:30', 0, 'The user logged in'),
(369, 33, '2019-08-18 22:25:30', 0, 'The user logged out'),
(370, 32, '2019-08-18 22:26:15', 0, 'The user logged in'),
(371, 32, '2019-08-18 22:28:57', 0, 'The user logged out'),
(372, 33, '2019-08-18 22:29:02', 0, 'The user logged in'),
(373, 1, '2019-08-19 10:46:40', 0, 'The user logged in'),
(374, 32, '2019-08-19 11:47:44', 0, 'The user logged in'),
(375, 32, '2019-08-19 11:48:32', 0, 'The user logged out'),
(376, 1, '2019-08-19 11:49:35', 0, 'The user logged in'),
(377, 1, '2019-08-19 12:22:49', 0, 'The user logged in'),
(378, 33, '2019-08-19 13:12:00', 0, 'The user logged in'),
(379, 33, '2019-08-19 16:50:34', 0, 'The user logged in'),
(380, 33, '2019-08-19 17:23:38', 0, 'The user logged out'),
(381, 61, '2019-08-19 17:24:01', 0, 'The user logged in'),
(382, 61, '2019-08-19 17:41:41', 0, 'The user logged out'),
(383, 61, '2019-08-19 17:41:53', 0, 'The user logged in'),
(384, 61, '2019-08-19 20:32:35', 0, 'The user logged out'),
(385, 1, '2019-08-19 20:32:52', 0, 'The user logged in'),
(386, 1, '2019-08-19 20:33:53', 0, 'The user logged out'),
(387, 61, '2019-08-19 20:34:04', 0, 'The user logged in'),
(388, 33, '2019-08-19 20:40:56', 0, 'The user logged in'),
(389, 61, '2019-08-19 20:43:43', 0, 'The user logged out'),
(390, 60, '2019-08-19 20:44:40', 0, 'The user logged in'),
(391, 60, '2019-08-19 20:50:03', 0, 'The user logged out'),
(392, 59, '2019-08-19 20:50:23', 0, 'The user logged in'),
(393, 59, '2019-08-19 21:00:01', 0, 'The user logged out'),
(394, 58, '2019-08-19 21:01:29', 0, 'The user logged in'),
(395, 58, '2019-08-19 21:05:57', 0, 'The user logged out'),
(396, 57, '2019-08-19 21:06:34', 0, 'The user logged in'),
(397, 57, '2019-08-19 21:10:46', 0, 'The user logged out'),
(398, 56, '2019-08-19 21:11:35', 0, 'The user logged in'),
(399, 56, '2019-08-19 21:16:09', 0, 'The user logged out'),
(400, 55, '2019-08-19 21:16:54', 0, 'The user logged in'),
(401, 55, '2019-08-19 21:20:52', 0, 'The user logged out'),
(402, 54, '2019-08-19 21:21:41', 0, 'The user logged in'),
(403, 54, '2019-08-19 21:27:40', 0, 'The user logged out'),
(404, 53, '2019-08-19 21:28:02', 0, 'The user logged in'),
(405, 53, '2019-08-19 21:31:17', 0, 'The user logged out'),
(406, 52, '2019-08-19 21:31:40', 0, 'The user logged in'),
(407, 52, '2019-08-19 21:36:26', 0, 'The user logged out'),
(408, 51, '2019-08-19 21:37:36', 0, 'The user logged in'),
(409, 51, '2019-08-19 21:48:39', 0, 'The user logged out'),
(410, 50, '2019-08-19 21:49:26', 0, 'The user logged in'),
(411, 50, '2019-08-19 21:53:07', 0, 'The user logged out'),
(412, 33, '2019-08-19 21:53:17', 0, 'The user logged in'),
(413, 33, '2019-08-19 21:56:17', 0, 'The user logged out'),
(414, 50, '2019-08-19 21:56:23', 0, 'The user logged in'),
(415, 50, '2019-08-19 22:00:24', 0, 'The user logged out'),
(416, 49, '2019-08-19 22:01:12', 0, 'The user logged in'),
(417, 49, '2019-08-19 22:03:39', 0, 'The user logged out'),
(418, 49, '2019-08-19 22:03:45', 0, 'The user logged in'),
(419, 49, '2019-08-19 22:16:01', 0, 'The user logged out'),
(420, 1, '2019-08-19 22:16:10', 0, 'The user logged in'),
(421, 1, '2019-08-19 22:25:39', 0, 'The user logged out'),
(422, 48, '2019-08-19 22:26:02', 0, 'The user logged in'),
(423, 48, '2019-08-19 22:30:22', 0, 'The user logged out'),
(424, 47, '2019-08-19 22:31:05', 0, 'The user logged in'),
(425, 47, '2019-08-19 22:37:20', 0, 'The user logged out'),
(426, 46, '2019-08-19 22:37:32', 0, 'The user logged in'),
(427, 46, '2019-08-19 22:48:41', 0, 'The user logged out'),
(428, 1, '2019-08-19 22:52:10', 0, 'The user logged in'),
(429, 33, '2019-08-19 22:54:20', 0, 'The user logged out'),
(430, 1, '2019-08-19 22:54:32', 0, 'The user logged out'),
(431, 33, '2019-08-19 22:56:06', 0, 'The user logged in'),
(432, 45, '2019-08-19 22:57:35', 0, 'The user logged in'),
(433, 45, '2019-08-19 23:02:23', 0, 'The user logged out'),
(434, 44, '2019-08-19 23:02:45', 0, 'The user logged in'),
(435, 44, '2019-08-19 23:07:16', 0, 'The user logged out'),
(436, 43, '2019-08-19 23:08:18', 0, 'The user logged in'),
(437, 43, '2019-08-19 23:12:59', 0, 'The user logged out'),
(438, 42, '2019-08-19 23:14:01', 0, 'The user logged in'),
(439, 1, '2019-08-20 10:43:11', 0, 'The user logged in'),
(440, 42, '2019-08-20 10:54:09', 0, 'The user logged in'),
(441, 1, '2019-08-20 11:00:57', 0, 'The user logged in'),
(442, 1, '2019-08-20 13:09:40', 0, 'The user logged in'),
(443, 1, '2019-08-20 17:55:27', 0, 'The user logged in'),
(444, 1, '2019-08-20 17:56:17', 0, 'The user logged out'),
(445, 33, '2019-08-20 17:56:28', 0, 'The user logged in'),
(446, 33, '2019-08-20 17:56:40', 0, 'The user logged out'),
(447, 1, '2019-08-20 17:56:49', 0, 'The user logged in'),
(448, 1, '2019-08-20 17:58:51', 0, 'The user logged out'),
(449, 33, '2019-08-20 17:58:56', 0, 'The user logged in'),
(450, 33, '2019-08-20 17:59:19', 0, 'The user logged out'),
(451, 1, '2019-08-20 17:59:29', 0, 'The user logged in'),
(452, 33, '2019-08-20 22:22:22', 0, 'The user logged in'),
(453, 33, '2019-08-20 22:23:19', 0, 'The user logged out'),
(454, 1, '2019-08-20 22:23:28', 0, 'The user logged in'),
(455, 1, '2019-08-20 22:30:58', 0, 'The user logged out'),
(456, 1, '2019-08-20 22:35:11', 0, 'The user logged in'),
(457, 1, '2019-08-20 22:44:54', 0, 'The user logged out'),
(458, 41, '2019-08-20 22:45:05', 0, 'The user logged in'),
(459, 41, '2019-08-20 22:50:01', 0, 'The user logged out'),
(460, 40, '2019-08-20 22:50:30', 0, 'The user logged in'),
(461, 40, '2019-08-20 22:56:25', 0, 'The user logged out'),
(462, 39, '2019-08-20 22:56:53', 0, 'The user logged in'),
(463, 39, '2019-08-20 23:02:21', 0, 'The user logged out'),
(464, 1, '2019-08-20 23:03:06', 0, 'The user logged in'),
(465, 1, '2019-08-20 23:04:56', 0, 'The user logged out'),
(466, 38, '2019-08-20 23:05:30', 0, 'The user logged in'),
(467, 38, '2019-08-20 23:10:24', 0, 'The user logged out'),
(468, 37, '2019-08-20 23:11:02', 0, 'The user logged in'),
(469, 37, '2019-08-21 00:29:17', 0, 'The user logged out'),
(470, 1, '2019-08-21 00:29:42', 0, 'The user logged in'),
(471, 1, '2019-08-21 16:55:30', 0, 'The user logged in'),
(472, 1, '2019-08-21 17:11:35', 0, 'The user logged in'),
(473, 1, '2019-08-21 17:32:41', 0, 'The user logged out'),
(474, 1, '2019-08-21 17:34:18', 0, 'The user logged in'),
(475, 1, '2019-08-21 17:34:54', 0, 'The user logged out'),
(476, 33, '2019-08-21 17:34:58', 0, 'The user logged in'),
(477, 33, '2019-08-21 17:35:38', 0, 'The user logged out'),
(478, 0, '2019-08-21 17:36:03', 0, 'The user logged out'),
(479, 33, '2019-08-21 17:37:59', 0, 'The user logged in'),
(480, 33, '2019-08-21 17:38:39', 0, 'The user logged out'),
(481, 33, '2019-08-21 17:38:55', 0, 'The user logged in'),
(482, 33, '2019-08-21 17:39:12', 0, 'The user logged out'),
(483, 61, '2019-08-21 17:39:15', 0, 'The user logged in'),
(484, 33, '2019-08-21 17:45:35', 0, 'The user logged in'),
(485, 33, '2019-08-21 17:45:41', 0, 'The user logged out'),
(486, 1, '2019-08-21 17:45:50', 0, 'The user logged in'),
(487, 1, '2019-08-21 17:46:56', 0, 'The user logged out'),
(488, 61, '2019-08-21 17:47:02', 0, 'The user logged in'),
(489, 61, '2019-08-21 17:47:06', 0, 'The user logged out'),
(490, 0, '2019-08-21 18:05:31', 0, 'The user logged out'),
(491, 33, '2019-08-21 18:05:36', 0, 'The user logged in'),
(492, 33, '2019-08-21 18:07:55', 0, 'The user logged out'),
(493, 38, '2019-08-21 18:07:57', 0, 'The user logged in'),
(494, 38, '2019-08-21 18:09:33', 0, 'The user logged out'),
(495, 33, '2019-08-21 18:09:36', 0, 'The user logged in'),
(496, 33, '2019-08-21 18:10:37', 0, 'The user logged out'),
(497, 39, '2019-08-21 18:10:48', 0, 'The user logged in'),
(498, 39, '2019-08-21 18:13:46', 0, 'The user logged out'),
(499, 33, '2019-08-21 20:30:39', 0, 'The user logged in'),
(500, 33, '2019-08-21 20:31:00', 0, 'The user logged out'),
(501, 1, '2019-08-21 20:31:04', 0, 'The user logged in'),
(502, 1, '2019-08-21 20:47:22', 0, 'The user logged out'),
(503, 1, '2019-08-22 16:48:28', 0, 'The user logged in'),
(504, 1, '2019-08-22 16:48:57', 0, 'The user logged out'),
(505, 1, '2019-08-22 17:03:51', 0, 'The user logged in'),
(506, 1, '2019-08-22 21:14:20', 0, 'The user logged in'),
(507, 1, '2019-08-23 13:40:57', 0, 'The user logged in'),
(508, 1, '2019-08-23 14:05:02', 0, 'The user logged out'),
(509, 1, '2019-08-23 14:05:03', 0, 'The user logged in'),
(510, 1, '2019-08-23 15:33:27', 0, 'The user logged out'),
(511, 37, '2019-08-23 15:33:31', 0, 'The user logged in'),
(512, 37, '2019-08-23 16:41:41', 0, 'The user logged out'),
(513, 1, '2019-08-23 16:41:45', 0, 'The user logged in'),
(514, 1, '2019-08-24 10:02:21', 0, 'The user logged in'),
(515, 1, '2019-08-24 10:16:56', 0, 'The user logged out'),
(516, 1, '2019-08-24 10:17:55', 0, 'The user logged in'),
(517, 1, '2019-08-24 10:24:22', 0, 'The user logged out'),
(518, 37, '2019-08-24 10:24:29', 0, 'The user logged in'),
(519, 37, '2019-08-24 11:01:00', 0, 'The user logged out'),
(520, 37, '2019-08-24 11:01:48', 0, 'The user logged in'),
(521, 37, '2019-08-24 11:28:10', 0, 'The user logged out'),
(522, 37, '2019-08-24 11:29:31', 0, 'The user logged in'),
(523, 37, '2019-08-24 11:31:41', 0, 'The user logged out'),
(524, 1, '2019-08-24 11:31:57', 0, 'The user logged in'),
(525, 1, '2019-08-24 12:04:02', 0, 'The user logged out'),
(526, 37, '2019-08-24 12:04:10', 0, 'The user logged in'),
(527, 37, '2019-08-24 12:04:21', 0, 'The user logged out'),
(528, 1, '2019-08-24 12:04:25', 0, 'The user logged in'),
(529, 1, '2019-08-24 12:07:14', 0, 'The user logged out'),
(530, 37, '2019-08-24 12:07:18', 0, 'The user logged in'),
(531, 37, '2019-08-24 16:50:18', 0, 'The user logged in'),
(532, 37, '2019-08-24 17:08:19', 0, 'The user logged out'),
(533, 1, '2019-08-24 17:08:24', 0, 'The user logged in'),
(534, 1, '2019-08-24 17:30:53', 0, 'The user logged out'),
(535, 37, '2019-08-24 17:30:57', 0, 'The user logged in'),
(536, 37, '2019-08-24 17:31:15', 0, 'The user logged out'),
(537, 1, '2019-08-24 17:31:19', 0, 'The user logged in'),
(538, 1, '2019-08-24 17:31:48', 0, 'The user logged out'),
(539, 37, '2019-08-24 17:31:53', 0, 'The user logged in'),
(540, 37, '2019-08-24 17:52:25', 0, 'The user logged out'),
(541, 1, '2019-08-24 17:52:30', 0, 'The user logged in'),
(542, 1, '2019-08-24 17:53:23', 0, 'The user logged out'),
(543, 37, '2019-08-24 17:53:27', 0, 'The user logged in'),
(544, 37, '2019-08-24 17:54:07', 0, 'The user logged out'),
(545, 1, '2019-08-24 17:54:10', 0, 'The user logged in'),
(546, 1, '2019-08-24 17:54:47', 0, 'The user logged out'),
(547, 37, '2019-08-24 17:54:52', 0, 'The user logged in'),
(548, 37, '2019-08-24 18:07:07', 0, 'The user logged out'),
(549, 1, '2019-08-24 18:07:27', 0, 'The user logged in'),
(550, 1, '2019-08-24 18:10:44', 0, 'The user logged out'),
(551, 43, '2019-08-24 18:10:49', 0, 'The user logged in'),
(552, 32, '2019-08-25 14:07:18', 0, 'The user logged in'),
(553, 32, '2019-08-25 14:16:56', 0, 'The user logged out'),
(554, 43, '2019-08-25 14:20:06', 0, 'The user logged in'),
(555, 43, '2019-08-25 14:43:24', 0, 'The user logged out'),
(556, 1, '2019-08-25 14:43:29', 0, 'The user logged in'),
(557, 1, '2019-08-25 14:43:48', 0, 'The user logged out'),
(558, 37, '2019-08-25 14:43:56', 0, 'The user logged in'),
(559, 37, '2019-08-25 14:46:24', 0, 'The user logged out'),
(560, 1, '2019-08-25 14:46:29', 0, 'The user logged in'),
(561, 1, '2019-08-25 14:47:07', 0, 'The user logged out'),
(562, 37, '2019-08-25 14:47:15', 0, 'The user logged in'),
(563, 37, '2019-08-25 14:52:49', 0, 'The user logged out'),
(564, 1, '2019-08-25 14:52:53', 0, 'The user logged in'),
(565, 1, '2019-08-25 15:23:48', 0, 'The user logged out'),
(566, 37, '2019-08-25 15:24:58', 0, 'The user logged in'),
(567, 1, '2019-08-25 21:08:20', 0, 'The user logged in'),
(568, 1, '2019-08-25 23:14:16', 0, 'The user logged in'),
(569, 1, '2019-08-25 23:26:10', 0, 'The user logged in'),
(570, 1, '2019-08-25 23:27:07', 0, 'The user logged out'),
(571, 37, '2019-08-25 23:27:16', 0, 'The user logged in'),
(572, 37, '2019-08-25 23:28:34', 0, 'The user logged out'),
(573, 1, '2019-08-25 23:28:57', 0, 'The user logged in'),
(574, 1, '2019-08-25 23:37:14', 0, 'The user logged out'),
(575, 1, '2019-08-25 23:39:45', 0, 'The user logged in'),
(576, 1, '2019-08-26 00:04:13', 0, 'The user logged out'),
(577, 33, '2020-09-24 22:34:53', 0, 'The user logged in'),
(578, 33, '2020-09-24 22:35:52', 0, 'The user logged out'),
(579, 58, '2020-09-24 22:35:58', 0, 'The user logged in'),
(580, 58, '2020-09-24 22:44:55', 0, 'The user logged out'),
(581, 33, '2020-09-24 22:44:59', 0, 'The user logged in'),
(582, 33, '2020-09-24 22:45:58', 0, 'The user logged out'),
(583, 45, '2020-09-24 22:46:04', 0, 'The user logged in'),
(584, 45, '2020-09-24 22:47:20', 0, 'The user logged out'),
(585, 33, '2020-09-24 22:47:33', 0, 'The user logged in'),
(586, 33, '2020-09-24 22:51:22', 0, 'The user logged out'),
(587, 1, '2020-09-24 22:53:46', 0, 'The user logged in'),
(588, 1, '2020-09-24 22:54:06', 0, 'The user logged out'),
(589, 1, '2020-09-24 22:54:27', 0, 'The user logged in'),
(590, 1, '2020-09-24 23:24:30', 0, 'The user logged out'),
(591, 1, '2020-09-24 23:29:54', 0, 'The user logged in'),
(592, 1, '2020-09-24 23:40:12', 0, 'The user logged out'),
(593, 1, '2020-09-25 00:10:20', 0, 'The user logged in'),
(594, 1, '2020-09-25 13:15:59', 0, 'The user logged in'),
(595, 1, '2020-09-25 13:16:01', 0, 'The user logged out'),
(596, 1, '2020-09-25 13:18:54', 0, 'The user logged in'),
(597, 1, '2020-09-25 13:21:21', 0, 'The user logged in'),
(598, 1, '2020-09-25 13:21:24', 0, 'The user logged out'),
(599, 1, '2020-09-25 13:30:20', 0, 'The user logged in'),
(600, 1, '2020-09-25 13:30:22', 0, 'The user logged out'),
(601, 33, '2020-09-25 13:32:24', 0, 'The user logged in'),
(602, 33, '2020-09-25 13:32:58', 0, 'The user logged out'),
(603, 33, '2020-09-25 13:33:09', 0, 'The user logged in'),
(604, 33, '2020-09-25 13:38:24', 0, 'The user logged out'),
(605, 33, '2020-09-25 13:38:52', 0, 'The user logged in'),
(606, 33, '2020-09-25 13:39:27', 0, 'The user logged in'),
(607, 33, '2020-09-25 13:53:24', 0, 'The user logged in'),
(608, 1, '2020-09-25 13:53:46', 0, 'The user logged in'),
(609, 33, '2020-09-25 14:51:36', 0, 'The user logged in'),
(610, 33, '2020-09-25 16:24:57', 0, 'The user logged in'),
(611, 33, '2020-09-28 20:18:48', 0, 'The user logged in'),
(612, 1, '2020-09-28 20:26:58', 0, 'The user logged in'),
(613, 52, '2020-09-28 20:27:45', 0, 'The user logged in');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `last_time_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `setting`, `value`, `last_time_update`) VALUES
(1, 'judul', 'REDIKA', '2017-04-18 07:48:12'),
(2, 'deskripsi', 'Universitas Muhammadiyah Riau', '2017-04-18 07:48:12'),
(3, 'copyright', 'Teknik Informatika', '2017-04-18 07:49:19'),
(4, 'company', 'REDIKA - Universitas Muhammadiyah Riau', '2017-04-18 07:49:19'),
(5, 'alamat', 'Program Studi Teknik Informatika - UMRI.<br>\r\nJl. Tuanku Tambusai,<br>\r\nPekanbaru, Riau, Indonesia <br>\r\n<abbr title=\"Phone\">P:</abbr> (+62) 761-35008', '2017-04-18 07:49:59'),
(6, 'kontak', 'informatika.umri.ac.id', '2017-04-18 07:49:59'),
(7, 'logo_site', 'upload/images/1600967837-logo-picture15625263484021.jpg', '2017-06-18 16:44:03'),
(31, 'about', 'Program Studi Teknik Informatika', '2018-02-28 12:18:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsi`
--

CREATE TABLE `skripsi` (
  `id` int(11) NOT NULL,
  `kosentrasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `pembimbing_1` int(11) NOT NULL,
  `pembimbing_2` int(11) NOT NULL,
  `tanggal_seminar` date NOT NULL,
  `abstrak` text NOT NULL,
  `daftar_pustaka` text NOT NULL,
  `cover` text NOT NULL,
  `bab_1` text NOT NULL,
  `jurnal` text NOT NULL,
  `dokumen` text NOT NULL,
  `files` text NOT NULL,
  `status` int(1) DEFAULT NULL,
  `komentar` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id`, `kosentrasi`, `judul`, `penulis`, `pembimbing_1`, `pembimbing_2`, `tanggal_seminar`, `abstrak`, `daftar_pustaka`, `cover`, `bab_1`, `jurnal`, `dokumen`, `files`, `status`, `komentar`, `user_id`, `time_update`) VALUES
(7, 2, 'PROPERTRUST', 'jhgjhgjgjgj', 1, 1, '2019-08-16', '<p>Seiring dengan pesatnya pertumbuhan teknologi informasi dalam bentuk format digital menyebabkan sejumlah arsip atau dokumen pada suatu instansi, dikonversi dalam bentuk digitalisasi. Bentuk digitalisasi tersebut akan disimpan dalam sistem repository. Repository merupakan ruang fisik yang digunakan untuk penyimpanan dokumen atau arsip (Reitz, J. M.. 2004). Dokumen yang digitalisasi biasanya dokumen yang sangat penting dan mempunyai nilai guna yang tinggi. Salah satu dokumen yang penting untuk digitalisasi adalah dokumen skripsi dan laporan kerja praktek mahasiswa.</p>', '<p>Seiring dengan pesatnya pertumbuhan teknologi informasi dalam bentuk format digital menyebabkan sejumlah arsip atau dokumen pada suatu instansi, dikonversi dalam bentuk digitalisasi. Bentuk digitalisasi tersebut akan disimpan dalam sistem repository. Repository merupakan ruang fisik yang digunakan untuk penyimpanan dokumen atau arsip (Reitz, J. M.. 2004). Dokumen yang digitalisasi biasanya dokumen yang sangat penting dan mempunyai nilai guna yang tinggi. Salah satu dokumen yang penting untuk digitalisasi adalah dokumen skripsi dan laporan kerja praktek mahasiswa.</p>', 'upload/files/1565836322-cover-goofstupid.pdf', 'upload/files/1565836322-bab-1-m240htn01.pdf', 'upload/files/1565836322-jurnal-ob3350cp.pdf', 'upload/files/1565836322-skripsi-tagihan-diriau.pdf', 'upload/files/1565836322-aplikasi-refnal-sticker.zip', 2, 'cfgfgdfgdfgd', 32, '2019-08-15 02:32:02'),
(8, 2, 'Penerapan Metode Analytic Network Process (ANP) Pada Aplikasi Perhitungan Harga Premi Asuransi Kebakaran (Studi Kasus PT Asuransi Bangun Askrida)', 'Halimul Hakim', 6, 1, '2019-06-26', '<p>Fire insurance is an insurance product that guarantees loss or damage to insured property that is directly caused by fire, lightning, explosion, aircraft crash, and smoke. Premium rates for fire insurance vary according to the conditions set by the company. The number of rules that must be considered causes the length of the process in determining this premium rate. To overcome this problem, an application was established to determine the price of fire insurance using the Analytic Network Process (ANP) Method. The ANP method is used to calculate the weight of each criterion and subcriteria used in determining fire insurance premium rates. The results of the blackbox test and method show the functions in the application that are in accordance with what is expected and the calculation of insurance premiums on the application that is in accordance with the calculation of premiums in the company. With this application, it can help companies manage fire insurance premiums quickly, accurately and efficiently.</p>', '<p>[1] Arifa, Rangga. 2015. Sistem Pendukung Keputusan Penerima Bantuan Dana Zakat Menggunakan Metode ANP (Analytic Network Process). Pekanbaru: UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU. [2] Destari, Ratih Adinda. 2016. Sistem Rangking Pemanfaatan Susu Bayi Menggunakan Analytical Network Process (ANP). Medan: UNIVERSITAS POTENSI UTAMA. [3] Gustriansyah, Rendra. 2016. Sistem Pendukung Keputusan Pemilihan Dosen Berprestasi Dengan Metode Anp Dan Topsis. Yogyakarta: UNIVERSITAS INDO GLOBAL MANDIRI. [4] Marlina, Dwi dkk. 2014. Sistem Keputusan Metode Belajar Baca Pada Anak Taman Kanak-Kanak Dengan Metode Analytical Network Process (Anp). Yogyakarta: STMIK AMIKOM YOGYAKARTA. [5] Neyfa, Bella Chintya &amp; Tamara, Dony. 2016. Perancangan Aplikasi E-Canteen Berbasis Android Dengan Menggunakan Metode Object Oriented Analysis &amp; Design (OOAD). Jakarta: POLITEKNIK NEGERI JAKARTA. [6] Otoritas Jasa Keuangan. 2017. Surat Edaran Otoritas Jasa Keuangan Tentang Penetapan Tarif Premi Atau Konstribusi Pada Lini Usaha Asuransi Harta Benda Dan Asuransi Kendaraan Bermotor Tahun 2017. Jakarta. [7] Pungkasanti, Prind Triajeng &amp; Handayani, Titis. 2017. Penerapan Analytic Network Process (Anp) Pada Sistem Pendukung Keputusan. Semarang: UNIVERSITAS SEMARANG. [8] Rohendi, Keukeu &amp; Putra, Ilham Eka. 2016. Simulasi Perhitungan Premi Dan Klaim Asuransi Berbasis Web (Studi Kasus : PT Asuransi Sinarmas Padang). Padang: STMIK INDONESIA PADANG. [9] Tahel, Fithry &amp; Kurniawan, Helmi. 2014. Sistem Pembuatan Keputusan Penetapan Calon Sertifikasi Dosen Menggunakan Analytical Network Process (Anp). Medan: STMIK POTENSI UTAMA. [10] Yanto, Budi. 2016. Sistem Pendukung Keputusan dalam Pemilihan Alternatif Pengelolaan Limbah Kelapa Sawit Metode Analityc Network Process (ANP) dan (BCOR) (Studi Kasus : PT Perkebunan Nusantara V Sei Tandun Rokan Hulu). Rokan Hulu: UNIVERSITAS PASIR PANGARAIAN</p>', 'upload/files/1566221931-cover-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566221931-bab-1-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566221931-jurnal-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566221931-skripsi-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566221931-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Setuju', 61, '2019-08-19 13:38:51'),
(9, 2, 'MEMBANGUN SISTEM CLOUD MENGGUNAKAN DOCKER DENGAN IMPLEMENTASI LOAD BALANCING DAN PENGUJIAN ALGORITMA PENJADWALAN ROUND ROBIN PADA WEB SERVER   (STUDI KASUS : UNIVERSITAS MUHAMMADIYAH RIAU)', 'IMAMUDDIN', 3, 9, '2019-06-29', '<p>Abstract: Along with the development of the world of technology and information, web site providers offer easy access and information provided by the cloud, which is inseparable from a server that is reliable and fast in calculating very large amounts of traffic, so there are still many problems in developing better services , such as new services, but the high price of physical devices is a reason for services that are not able to upgrade traffic demand into higher resources. Therefore Docker who supports container-based virtualization technology is the answer to the resources of physical devices. By using technology containers, physical servers can create multiple virtual servers using multiple resources such as memory and CPU load, different virtual container-based virtualization technologies. engine because it does not use the resources as a whole, but only uses the services that are needed. It is expected that implementing a technology based container docker with load balancing can increase the number of services with minimal resources. Keywords: Virtualization, Docker, Load Balancing</p>', '<p>Adiputra, F., 2015, Container dan Docker : Teknik Virtualisasi dalam Pengelolaan banyak Aplikasi Web., Jurnal Simantec (2015)., Vol.4, No.3 Juni 2015., ISSN : 2088-2130. Afiansyah. M. F. dan Rochim. A. F. dan Widianto. E. D., 2015, Rancang Bangun Layanan Cloud Computing Berbasis IaaS Menggunakan Virtualbox., Jurnal Teknologi dan Teknik Komputer (2015)., Vol. 3 No. 1, Januari 2015., ISSN : 2338-0403. Afdhal., 2013, Studi Perbandingan Layanan Coud Computing., Jurnal Rekayasa Elektrika Vol.10, No 4, Oktober 2013., ISSN : 2252-620x. Alimuddin., dan Ashari. A., 2016, Peningkatan Kinerja Siakad Menggunakan Metode Load Balancing dan Fault Tolerance Di Jaringan Kampus Universitas Halu Oleo., IJCCS (Indonesian Journal of Computing and Cybernetics Systems), Vol.10, No.1, Januari 2016., ISSN : 1978-1520. Fauziah. Y., 2014, Arsitektur Cloud Computing Pada Sistem Informasi Desa Sebagai Layanan Akses Informasi Desa., Jurnal Seminar Nasional Informatika 2014, UNP &ldquo;Veteran&rdquo; Yogyakarta, 12 Agustus 2014., ISSN : 1979-2328. Nugroho. M. A., dan Kartadie. R., 2016, Analisis Kinerja Penerapan Container untuk Load Balancing Web Server Pada Rasberry Pi., Jurnal Ilmiah Penelitian dan Pembelajaran Informatika (JIPI), Vol.1, No.2, Desember :7-9., ISSN : 2540-8984. Oktavianus. Y. L., 2013, Membangun Sistem Cloud Computing Dengan Implementasi Load Balancing dan Pengujian Algoritma Penjadwalan Linux Virtual Server Pada FTP Server., Jurnal Nasional Teknik Elektro, Vol.2, No.1, Maret 2013., ISSN : 2302-2949. Kan. C., 2016, DoCloud : An Elastic Cloud Platform for Web Applications Based on Docker., ICACT January 31~Febuary 32016., ISBN : 978-89-968650-7-0. Sardi. E. S. M., 2017, Implementasi Teknik Virtualisasi Container dengan Docker untuk pengelolaan aplikasi Web di Dinas Komunikasi dan Informatika Kota Payakumbuh. Jurnal Teknik Politeknik Negeri Padang 2017. Zharfan. A. A., 2018, Implementasi analisis kinerja container untuk load balancing FTP server(studi kasus PT.Yodya Karya(persero) cabang pekanbaru 2018.</p>', 'upload/files/1566222540-cover-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566222540-bab-1-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566222540-jurnal-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566222540-skripsi-6-Jurus-Mabok-Maen-YouTube.pdf', 'upload/files/1566222540-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 60, '2019-08-19 13:49:00'),
(10, 2, 'RANCANG BANGUN GAME EDUKASI PENGENALAN BUAH - BUAHAN DAN SAYUR – SAYURAN UNTUK ANAK USIA DINI BERBASIS ANDROID', 'SAIFUL ANWAR', 1, 10, '2019-08-19', '<p>DESIGN AND DEVELOPMENT OF EDUCATION GAME INTRODUCTION FRUITS AND VEGETABLES - VEGETABLES FOR EARLY AGE CHILDREN BASED ON ANDROID</p>', '<p>Aryantika. M. E. dkk, 2015 , Pengembangan Kamus Kolok Visual Berbasis Android Sebagai Media Edukatif Mempelajari Bahasa Penyandang Tuna Rungu di Desa Bengkala Ariadie. C. N. dkk, 2016 , Rancang Bangun Game Edukasi Sebagai Media Pembelajaran Mata Kuliah Praktik Teknik Digital Busran, Fitriyah., 2015), Perancangan Permainan (Game) Edukasi Belajar Membaca Pada Anak Prasekolah Berbasis Smartphone Android (Studi Kasus : Taman Kanak - Kanak Ikal Iqra Padang Selatan) Kristanto. O, 2013, Identifikasi Kebutuhan Pengguna Untuk Aplikasi Permainan Edukasi Bagi Anak Usia 4 sampai 6 Tahun Kustiyahningsih. Y, 2015, Game Edukasi Tebak Gambar Bendera Negara Menggunakan Metode Linear Congruential Generator (Lcg) Berbasis Android Mohammad A, Madanijah. S. (2015), Konsumsi Buah Dan Sayur Anak Usia Sekolah Dasar Di Bogor, ISSN 1978-1059 Novaliendry. D. 2013, Aplikasi Game Geografi Berbasis Multimedia Interaktif (Studi Kasus Siswa Kelas Ix Smpn 1 Rao) Rahman. R. A. Tresnawati. D, 2016, Pengembangan Game Edukasi Pengenalan Nama Hewan Dan Habitatnya Dalam 3 Bahasa Sebagai Media Pembelajaran Berbasis Multimedia Rohayani. H. 2013, Perancangan Aplikasi Game Edukasi Pembelajaran Anak Usia Dini Menggunakan Linear Congruent Method (Lcm) Berbasis Android Saurina. N. 2016, Pengembangan Media Pembelajaran Untuk Anak Usia Dini Menggunakan Augmented Reality Vitianingsih. A. V. 2016, Game Edukasi Sebagai Media Pembelajaran Pendidikan Anak Usia Dini Yulianti. A, 2016 , Keefektifan Kartu Permainan Who Am I Untuk Melatihkan Keterampilan Berpikir Tingkat Tinggi Peserta Didi K Pada Submateri Struktur Dan Fungsi Organel Sel</p>', 'upload/files/1566223193-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223193-bab-1-A030031931-20190708.pdf', 'upload/files/1566223193-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223193-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223193-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 59, '2019-08-19 13:59:53'),
(11, 2, 'Rancang Bangun Aplikasi Katalog Online dan Sistem Pemesanan Produk ( Studi Kasus : Toko Sahabatkoe Ponsel )', 'Riki Harianto', 6, 10, '2019-06-26', '<p>ABSTRAK RANCANG BANGUN APLIKASI KATALOG ONLINE DAN SISTEM PEMESANAN PRODUK ( STUDI KASUS : TOKO SAHABATKOE PONSEL) Sahabatkoe Ponsel merupakan sebuah perusahaan yang bergerak dibidang penjualan handphone, kartu internet, pulsa, aksesoris, dan service yang sudah berdiri hampir 10 tahun dan tiap harinya Sahabatkoe Ponsel mempunyai trafik kunjungan konsumen sekitar 400orang/hari. Pada penjualan handphone Sahabatkoe Ponsel menggunakan katalog cetak dalam pemberian informasi produk kepada konsumen. Katalog cetak yang digunakan sangat terbatas dan mempunyai beberapa kekurangan, yaitu produk yang ada dikatalog tidak selalu valid sehingga informasi yang ditampilkan katalog sering tidak update. Dengan terbatasnya karyawan dan katalog maka konsumen tidak terlayani dengan maksimal, promo yang selalu berubah tiap harinya tidak dapat ditampilkan di katalog cetak, dan karyawan tidak mampu menguasai tiap produk dan menjelaskan kepada konsumen dikarenakan produk yang selalu terbaru. Selain itu berkembangnya fenomena belanja online juga menjadi tantangan berat dalam proses bisnis di Sahabatkoe Ponsel. Tujuan dalam penelitian ini adalah untuk merancang suatu sistem komputer yang menjadi media informasi berbasis online yang lengkap, sebagai media promosi yang efektif, serta adanya fitur pemesanan produk yang proses pemesanannya menggunakan Barcode ( QRCode ) sebagai bukti pemesanan barang. Barcode ( QRCode ) yang digunakan hanya berlaku selama 2 jam sejak pemesanan, kemudian konsumen membayar pesanannya langsung ke toko. Dari hasil penelitian bahwa sistem ini bisa menampilkan informasi dengan lengkap, realtime, mudah digunakan dan diakses sehingga konsumen mendapatkan apa yang dicari, dan Sahabatkoe Ponsel bisa mempercepat proses transaksi, menyampaikan promosi dengan tepat, dan memberikan pelayanan yang maksimal kepada pelanggannya. Kata Kunci : Katalog Online, QRCode, Informasi.</p>', '<p>DAFTAR PUSTAKA Anis Masruri, dkk, Dasar-dasar katalogisasi, (2008). Yogyakarta : Universitas Islam Negeri Sunan Kalijaga. Hlm. 5. Andria, Sugiharto S. (2016). &ldquo;Perencanaan Strategi Pemasaran dalam Mempertahankan dan Mengembangkan Bisnis Toko Agung di Kota Tanjung Selor, Kalimantan Utara&rdquo;, Surabaya : Program Manajemen Bisnis, Program Studi Manajemen, Universitas Kristen Petra. Agora Vol. 4, No. 2. Daulay, Sere S dan Widyaiswara. (2014). Hubungan Barcode dengan Produk Industri Sebagai Standar Perdagangan Produk Industri Masa Kini. Vol.2, No.1. ISSN:2301-6523 Edhy Sutanta. (2011) Basis Data dalam Tinjuaan Konseptual. Yogyakarta: Penerbit ANDI. Evander, M. (2015). &ldquo;Penerapan Aplikasi Pembacaan Barcode menggunakan Zxing dan SOAP WebService untuk pemesanan produk berbasis Mobile&rdquo;. Artikel Ilmiah, Salatiga : Fakultas Teknologi Informasi, Program Studi Teknik Informatika, Universitas Kristen Satya Wacana Salatiga. Fithri D L ., Dkk (2017) &ldquo;Pemanfaatan E-Commerce Populer Untuk Optimalisasi Pemasaran Produk Pada KUB Bordir Kurnai Kudus&rdquo;. Jurnal SIMETRIS, Kudus : Fakultas Teknik, Program Studi Sistem Informasi Handayani, Sri Peni Mugi. (2013) &ldquo;Pembuatan Website E-Commerce Pada Distro Java Trend&rdquo;. Seminar Riset Unggulan Nasional Informatika dan Komputer FTI UNSA 2013. Vol 2 No 1. Hal.20 Hastanti (2013) &ldquo;Sistem Penjualan Berbasis WEB (E-Commerce) pada Tata Distro Kabupaten Pacitan&rdquo; Jurnal IJCSS &ndash; Indonesian Jurnal On Computer Science &ndash; Speed &ndash; FTI UNSA (ISSN:1979-9330) Hitt. Michael A., Irelan. R Duane, Hoskisson. Robert E. (2013). Strategic Management Concepts and Cases Competitiveness and Glovalization ( 10th Edition). Strayer University Izzah. Kusuma (2016) &ldquo;Pembuatan Katalog Online Layanan Jasa Berbasis WEB Sebagai Media Periklanan Penyedia Layanan Jasa&rdquo; Jurnal Pengabdian Masyarat J-DINAMIKA (P-ISSN:2503-1031), (e-ISSN 2503-1112) Jogiyanto, H.M., 2005, Analisa dan Desain Sistem Informasi : Pendekatan Terstruktur Teori dan Praktik Aplikasi Bisnis, ANDI, Yogyakarta Kadir, Abdul. &ldquo;Membuat Aplikasi Web dengan PHP dan Database MySQL, Andi Offset Yogyakarta, 2009 Komputer, W. (2014) Mudah Membuat Aplikasi SMS Gatway dengan CodeIgniter. PT Elex Media Komputindo. Kosasi, S (2014) &ldquo;Pembuatan Sistem Informasi Penjualan Berbasis WEB untuk Memperluas Pangsa Pasar&rdquo; Jurnal Prosiding SNATIF ke-1 Tahun 2014 (ISBN:978-602 1190-04-4) Kosasi, S (2015) &ldquo;Perancangan Sistem Informasi Penjualan Berbasis WEB dalam Memasakan Mobil Bekas&rdquo; Jurnal Citec Journal (ISSN:2354-5771) Kotler &amp; Keller. (2012). Marketing Management (14th Edition). New Jersey : Prentice Hall Marjito, Tesaria. (2016) &ldquo;Aplikasi Penjualan Online Berbasis Android (Studi Kasus : Di toko Hoax Merch ) &ldquo;. Jurnal Computech &amp; Bisnis, Vol. 10, No. 1. Hal 42. Madcoms (2011) Aplikasi Database dengan Dreamweaver dan PHP-MySQL. Edited by Andi. Yogyakarta. Mukaromah S dan Rosadi. (2015) &ldquo;Perancangan Aplikasi E-Commerce (Studi Kasus:Distributor Coklat Bandung)&rdquo;. Jurnal Skripsi. Bandung : STMIK Mardira Indonesia. Muqorobin dan Sulartopo. (2014) &ldquo;Perancangan Media Promosi dan Informasi Berbasis Multimedia Interaktif Pada CV. Karunia Semarang&rdquo;. Jurnal Skripsi. Semarang : Komputer Grafis Sekolah Tinggi Elektronika dan Komputer. Octafian, D. T. (2015) &ldquo;Web Multi E-commerce Berbasis Framework CodeIgniter&rdquo;, 5(1), pp. 1&ndash;22. Pearce, A. John., &amp; Robinson, B. Richard. (2013). Manajemen Strategis : Formulasi, Implementasi, dan Pengendalian. Jakatra : Salemba Empat Prasetio, A. (2012). Buku Pintar Pemrograman Web. Mediakita. Jakarta Yusup P, Subekti P (2010) Teori &amp; Praktik Penelusuran Informasi ( Information Retrieval ) Jakarta. Kencana. 216 Riyanto (2011) Membuat Sendiri Alikasi E-commerce Dengan PHP &amp; MySql Menggunakan Codeigniter &amp; JQuery. Shalahuddin, M. and A. S, R. (2015) Rekayasa Perangkat Lunak Terstruktur dan Berorientasi Objek. 3rd edn. Bandung: Informatika. Sofian, S. (2017) Penerapan Sistem Informasi E-Commerce Berbasis Web (Studi Kasus Untuk Vendor Pernikahan). Jurnal Skripsi. Medan: Manajemen STMB Mutli Smart. Tominanto. (2010). Card Elektrik (Barcode) Sebagai Sistem Komputerisasi Rekam Medis di Rumah Sakit Medika Mulya Wonogiri. Vol. 1., No. 1. ISSN: 2086-2628. Wahyutama, F., dkk. (2013). Penggunaan Teknologi Augmented Reality Berbasis Barcode sebagai Sarana Penyampaian Informasi dan Harga Barang yang Interaktif Berbasis Android, Studi Kasus pad aToko Elektronik ABC Surabaya. Vol.2, No.3 (ISSN:2337-3539). Yuliansyah, H. (2014) &ldquo;Perancangan Replika Basis Data MySQL Dengan Mekanisme Pengamanan Menggunakan SSL Encryption&rdquo;. 8(1), pp. 826-836.</p>', 'upload/files/1566223549-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223549-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223549-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223549-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223549-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 58, '2019-08-19 14:05:49'),
(12, 2, 'IMPLEMENTASI SISTEM KEAMANAN PESAN TEXT DENGAN TEKNIK STEGANOGRAFI MENGGUNAKAN METODE LEAST SIGNIFICANT BIT (LSB)', 'apriansyah', 10, 2, '2019-06-26', '<div class=\"freebirdFormviewerViewItemsItemItemHeader\">\r\n<div class=\"freebirdFormviewerViewItemsItemItemTitleDescContainer\">\r\n<div id=\"i.desc.11768037\" class=\"freebirdFormviewerViewItemsItemItemHelpText\" dir=\"auto\">Merupakan Abstrak dari karya intelektual anda yang ditulis Dalam Bahas Infggris</div>\r\n</div>\r\n</div>\r\n<div class=\"freebirdFormviewerViewItemsTextTextItemContainer\">\r\n<div class=\"freebirdFormviewerViewItemsTextLongText freebirdFormviewerViewItemsTextDisabledText freebirdThemedInput\">Indonesia, most cyber incidents reported by respondents relate to loss or leakage of business information such as internal records, information related to customers, employees and intellectuals. This worries the misuse of information held by irresponsible parties. in order to protect information so that it is not misused by unauthorized parties, then an attempt is made to hide the actual information on other information called steganography by using the Least Significant bit (LSB) method and to see the image quality value containing the message using the MSE calculation (Mean Square Error) and PSNR (Peak signal to noise ratio). The process of inserting messages is successfully carried out and produces extraction steganographic images. From testing the picture it can be concluded that the results of the steganography application must be invisible or not visible in plain view, as the purpose of this study is to increase the security sent to arrive at the recipient.</div>\r\n</div>', '<p>Alasi, T. S. (2007). Penerapan Hill Chiper pada Keamanan Pesan Teks, 1&ndash;5. Aydadenta, H., M, D. T., &amp; Nasri, J. (2016). Steganografi Menggunakan Blok Permutasi dan Algoritma Particle Swarm Optimization (PSO). Indonesian Journal on Computing (Indo-JC), 1(2), 57. https://doi.org/10.21108/indojc.2016.1.2.89 bahrudin _. (2017). PENGERTIAN VB.NET. Retrieved from http://www.intika34.com/2017/03/pengertian-vbnet.html Bonifacius Vicky Indriyono. (2016). Penerapan Keamanan Penyampaian Informasi Melalui Citra dengan Kriptografi Rijndael dan Steganografi LSB Information Security Through Imagery with Rijndael Cryptography, 228&ndash;241. Darwis, D. (2017). Teknik Steganografi Untuk Penyembunyian Pesan Text Menggunakan Algoritma Gifshuffle. Jurnal Teknoinfo, 11(1), 1&ndash;5. Djuwitaningrum, E. R., &amp; Apriyani, M. (2016). Teknik Steganografi Pesan Teks Menggunakan Metode Least Significant Bit dan Algoritma Linear Congruential Generator ( Text Message Steganography Using Least Significant Bit Method and Linear Congruential Generator Algorithm ). Teknik Steganografi Pesan Teks Menggunakan Metode Least Significant Bit Dan Algoritma Linear Congruential Generator (Text Message Steganography Using Least Significant Bit Method and Linear Congruential Generator Algorithm) Endang, IV(November), 79&ndash;85. Indra Agustian. (2013). Definisi Citra. Retrieved from http://te.unib.ac.id/lecturer/indraagustian/2013/06/defnisi-citra/ Irfan. (2013). Penyembunyian Informasi (steganography) Gambar Menggunakan Metode LSB (Least Significant Bit). Physics Education, 20(3), 106&ndash;108. https://doi.org/10.1088/0031-9120/20/3/307 Michael Sitorus. (2015). TEKNIK STEGANOGRAPHY DENGAN METODE LEAST SIGNIFICANT BIT (LSB), 11(2), 14&ndash;15. muamalkhoerdin. (2015). Algoritma Hill Cipher (Sandi Hill). Retrieved from https://muamalkhoerudin.com/2015/03/22/algoritma-hill-cipher-sandi-hill/ Muchlisin Riadi. (2016). Pengolahan Citra Digital. Retrieved from https://www.kajianpustaka.com/2016/04/pengolahan-citra-digital.html Muchlisin Riadi. (2017). Sejarah, Prinsip Kerja dan Teknik Steganografi. Retrieved from https://www.kajianpustaka.com/2017/09/sejarah-prinsip-kerja-teknik-steganografi.html Niswati, Z. A. I. (2008). STEGANOGRAFI BERBASIS LEAST SIGNIFICANT BIT ( LSB ) Abstrak . Penelitian ini bertujuan untuk menerapkan metode LSB untuk menyisipkan pesan gambar ke gambar grayscale . Hal ini diperlukan karena sering terjadi bahwa pesan gambar dikirim adalah pesan rahasi, 5(2), 181&ndash;191. Nugroho, P. D., Pi, S., Kom, M., Stmik, D., Pembangunan, I., &amp; Tangerang, B. (2015). Pengamanan Text Dengan Teknik Steganografi Menggunakan Metode Least Significant Bit ( Lsb ). Stmik, 2(3), 1&ndash;3. Pandapotan, T. S., &amp; Zebua, T. (2016). Analisa Perbandingan Least Significant Bit dan End Of File Untuk Steganografi Citra Digital Menggunakan Matlab, (November), 11&ndash;12. Susanto, A. (2010). Studi dan Implementasi Steganografi pada Berkas MIDI. Retrieved from http://www.informatika.org/~rinaldi/TA/Makalah_TA Agus Susanto.pdf Wijaya, E. S., &amp; Prayudi, Y. (2004). Konsep Hidden Message Menggunakan Teknik. Media Informatika, 2(1), 23&ndash;38. www.internetworldstats.com. (2018). top 20 countries with the highest number of internet users. Retrieved from https://www.internetworldstats.com/top20.htm www.pwc.com. (2017). Menurut Survei PwC, Para Eksekutif di Indonesia Manfaatkan Teknologi Baru untuk Mengelola Ancaman Siber dan Mencapai Keunggulan Kompetitif. Retrieved from https://www.pwc.com/id/en/media-centre/press-release/2017/indonesian/menurut-survei-pwc--para-eksekutif-di-indonesia-manfaatkan-tekno.html</p>', 'upload/files/1566223832-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223832-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223832-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223832-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566223832-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap', 57, '2019-08-19 14:10:32'),
(13, 2, 'ANALISA DAN IMPLEMENTASI SECURITY MAIL SERVER  (STUDI KASUS PT.VADHANA INTERNATIONAL)', 'daniel adi putra sitorus', 2, 12, '2019-06-26', '<p>Abstract-Mail server is one of the most widely used server functions in the company. This discusses e-mail itself which can reduce mailing costs, is more efficient than manual communication and can be used as attachments that are useful as a supplement and additional documents related to the contents of e-mail. Zimbra is a mail server application that provides complete features and also makes it easy to install mail server management, also mail server security issues are a factor that must be considered by the system administrator. The security design for e-mail servers addresses the importance of being able to prevent spam e-mail attacks that can fill e-mail servers and make mail server performance faster. Because a good mail server security can optimize the performance of the mail server itself. In this final project, the work and implementation of the zimbra mail server security will be carried out specifically for handling email spam. The zimbra email server will analyze its security against spam email attacks, so that it can function as an email server on the company. Keywords: Security, Email Server, Spam, Zimbra.</p>', '<p>Dumka, A., Tomar, R., Patni, J. C., &amp; Assistant, A. A. (2007). Taxonomy of E-Mail Security Protocol. International Journal of Innovative Research in Computer and Communication Engineering (An ISO Certified Organization), 3297(4). Retrieved from www.ijircce.com Kumar, S., &amp; Raj V.P, J. (2012). A Secure Email System Based on IBE, DNS and Proxy Service. Journal of Emerging Trends in Computing and Information Sciences, 3(9), 1271&ndash;1276. Mangunkusumo, I. E. S. ., Lumenta, A., Wowor, H., &amp; Sinsuw, A. (2013). Analisa dan Perancangan Keamanan Mail Server Zimbra pada Sistem Operasi Ubuntu. E-Jornal Teknik Elektro Dan Komputer, 1&ndash;9. https://doi.org/1. I. E. S. W. Mangunkusumo 2. A. Lumenta 3. H. Wowor 4. A. Sinsuw Of, I., Filter, S., Mail, F. O. R., Using, S., &amp; Spamassassin, T. (2017). Implementasi Spam Filter Untuk Mail Server Menggunakan Tools Spamassassin Implementation of Spam Filter for Mail Server Using Tools Spamassassin, 3(3), 1925&ndash;1933. Rohini, P., Ramya, K., Student, # M E, &amp; Professor, A. (2014). Phishing Email Filtering Techniques A Survey. International Journal of Computer Trends and Technology, 17(1). Retrieved from http://www.ijcttjournal.org Shrivastava, J. N., &amp; Bindu, M. H. (2014). E-mail Spam Filtering Using Adaptive Genetic Algorithm. International Journal of Intelligent Systems and Applications, 6(2), 54&ndash;60. https://doi.org/10.5815/ijisa.2014.02.07 Vavai, 2016, (Membangun Anti Spam Appliance &amp; Improvement Performa Mail Server), PT.Excellent Infotama Kreasindo Bekasi.</p>', 'upload/files/1566224131-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224131-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224131-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224131-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224131-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 56, '2019-08-19 14:15:31'),
(14, 2, 'PENERAPAN METODE FONIK UNTUK GAME EDUKASI PENYANDANG DISLEKSIA MENGGUNAKAN VISUAL NOVEL', 'Risma Shafriyani', 1, 13, '2019-06-26', '<p>ABSTRACT Multimedia that can help dyslexic children. Visual Novel is an interactive based game that displays stories in the form of static images, and is equipped with conversation boxes to convey narratives and sayings of each character, and sometimes each character has a sound effect so that every character in Visual Novel seems to be alive and able to speak. The method used in making this game is multimedia development life circle, and for the game itself, the phonics method will be used. As for the background of this writing, there is no Indonesian visual novel that has become a learning medium for children with dyslexia. And also visual novel is recommended to be used as a learning media, because it can help children enjoy the learning contained in it. Key words : Dyslexia, Visual Novel, Phonetic Method</p>', '<p>DAFTAR PUSTAKA Adrie Satrio, A. G. (2017). Pengembangan Visual Novel Game Mata Pelajaran Ilmu Pengetahuan Sosial Di Sekolah Menengah Pertama . Yogyakarta: Pascasarjana Universitas Negeri Yogyakarta . Ardyanti, W. (2015). Penggunaan Metode Fonik Untuk Meningkatkan Kemampuan Membaca Permulaan Pada Anak Berkesulitan Belajar Kelas 2 di SD N Jagamansan 1. Yogyakarta: Universitas Negeri Yogyakarta. Arifah, H. N. (2017). Pengembangan Multimedia Pembelajaran Interaktif Untuk Keterampilan Membaca Permulaan Siswa Berkesulitan Membaca (Disleksia) Kelas III Di SD Negeri Bangunrejo II Kricak Tegalrejo. Yogyakarta: Universitas Negri Yogyakarta. Azizah, I. N. (2016). Pembuatan Game \"Two Dis\" Untuk Terapi Membaca Bagi Anak Disleksia Dan Diskalkulia Berbasis Android. Surakarta: Universitas Sebelas Maret. Braghirolli, L. F., Duarte Ribeiro, J. L., &amp; Weise, A. D. (2016). Benefits of educational games as an introductory activity in industrial engineering education. Computers In Human Behavior, 315-324. Dewi, K. (2015). Disleksia. Lestari, d. (2015). Dysfun Course (Kursus membaca dan menulis pertama di Indonesia bagi anak-anak yang mengidap Disleksia). Lestari, D. (2015). Penanganan Anak Hiperaktif Melalui Terapi Permainan Puzzle Di Kelompok Kb Paud Saymara Kartasura. Madinatul Munawaroh, N. T. (2015). Mengenali Tanda-Tanda Disleksia Pada Anak Usia Dini. 168. Molina, D. N. (2014). Rancang Bangun Edugame untuk Pembelajaran Profil Negara-Negara ASEAN Berbasis Android. Muhaeminah. (2015). Game Therapy Untuk Meningkatkan Sense Of Belonging Anak Panti Asuhan. Patricia, J. W. (2016). Perancangan Board Game sebagai Media Terapi Penyakit Demensia Ringan pada Lansia. Prasetyowati, C. W. (2014). Pengaruh Game Digital Terhadap Metode Intervensi Anak Disleksia. Purnomo, d. (2017). Pengembangan Game Untuk Terapi Membaca Bagi Anak Disleksia Dan Diskalkulia. Ramadhani, H. S. (2016). Pengaruh Terapi Bermain Puzzle Terhadap Konsentrasi Belajar Anak Kelas 1 Di Sd Negeri Pokok 1 Ngemplak, Sleman, D.I. Yogyakarta. Safaat, N. (2015). Android : Pemograman Aplikasi Mobile Smartphone dan Tablet PC Berbasis Android. Sri Respati Andamari, S. R. (2017). Implementasi Terapi Berbasis Aplikasi Android dan Terapi Verbal untuk Meningkatkan Kemampuan Membaca pada Anak dengan Gejala Disleksia. Jurnal Psikologi, 21. Sudarmilah, E. d. (2015). Popular Games, Can Any Concept of Cognitive Prescholers Be In It? Tammasse, J. T. (2017). Mengatasi Kesulitan Belajar Disleksia. Studi Neuropsikolinguistik, 11. Virdyna, N. K. (2015). Penerapan Metode Fonik Dalam Pembelajaran Bahasa Inggris Bagi Anak Usia Dini. Jurnal Bahasa Inggris, Vol. 1, Tahun X, Hal. 119.</p>', 'upload/files/1566224443-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224443-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224443-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224443-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224443-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 55, '2019-08-19 14:20:43'),
(15, 2, 'Media Pembelajaran Candi Muara Takus Menggunakan Augmented Reality Markerless ', 'Ivan A Pohan', 3, 9, '2019-06-26', '<p>ABSTRACT Muara Takus Temple is a Buddhist heritage temple which was founded in Sriwijaya in Indonesia precisely in the village of Muara Takus, XIII District, Koto Kampar, Kampar District. But access to reach the temple site is not easy because of the distance from the city of Pekanbaru and the lack of public transportation, to enter the temple, visitors must travel another 16 kilometers from the entrance gate. Therefore for visitors, especially for students such as elementary schools, it needs a plan such as a study tour and students need more fees to conduct a study tour. for that, a solution can be taken by making temple modeling using an Android-based application, Markerless Augmented Reality. With this application can increase the knowledge of elementary school students and students of history in the province of Riau. And feel proud that they have a historical site that has been visited by foreign tourists, especially Buddhist pilgrims. Keywords: Muara takus temple, markerless augmented reality, method (ADDIE).</p>', '<p>DAFTAR PUSTAKA Anglan, Eka Anggia. (2017). Pengembangan Objek Wisata Candi Muara Takus Di Kabupaten Kampar. Apriyani, Eka Meyti, . (2016). Analisis Penggunaan Marker Tracking Pada Augmented Reality Huruf Hijaiyah. Adami, Feby Zulham. (2016). Penerapan Teknologi Augmented Reality Pada Media Pembelajaran Sistem Percernaan Berbasis Online. Asnawi, Noordin. &amp; Saifulloh. (2015). Evaluasi Antarmuka Dengan Pendekatan Kemudahan Penggunaan. Doewes, Afrizal, dkk. (2016). Implementation Markerless Augmented Reality Using Android Sensors For Identification Of Buildings In Sebelas Maret University. Indrawan, I Wayan Andis, dkk. (2017). Aplikasi Markerless Augmented Reality Dewata Nawa Sanga Berbasis Android. Lenurra, Ferry. &amp; Pratiwi, Dian. (2017). Penerapan Teknologi Augmented Reality Sebagai Media Promosi Apartemen Dengan Metode Markerless. Harnum, S. J. (2017). Rancang Bangun Game Puzzle Nusantara Berbasis Android. Pekanbaru: Universitas Muhammadiyah Riau. Romdhoni, Khoirudin. (2016). Teknologi Penerapan Markerless Augmented Reality Sebagai Alat Bantu Pengunjung Museum Berbasis Android. Sudiartini, Ni Made, dkk. (2016). Pengembangan Aplikasi Markerless Augmented Reality Balinese Story Calon Arang. Tjahyadi, Michello Pratama, dkk. (2014). Prototipe Game Musik Bambu Menggunakan Engine Unity 3D. Waeo, Victor, dkk. (2016). Implementasi Gerakan Manusia Pada Animasi 3D Dengan Menggunakan Metode Pose To Pose.</p>', 'upload/files/1566224753-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224753-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224753-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224753-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566224753-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap', 54, '2019-08-19 14:25:53'),
(16, 2, 'PENERAPAN DAN ANALISIS PERFORMA SECURE REAL-TIME TRANSPORT PROTOCOL (SRTP) PADA VOIP SERVER DENGAN RASPBERRY PI 3 MODEL B', 'Randi Pranata Putra', 2, 10, '2019-06-26', '<p>VoIP (IP Telephony, Internet telephony or Digital Phone) is a technology that allows long-distance voice conversations through internet media. Every message must have confidentiality, both personal and group affairs, therefore security issues are a basic requirement because VoIP is sent across the public network. which is unsafe, where the Real-time Transport Protocol (RTP) as a voice carrier protocol is commonly used in VoIP and is prone to sniffing attacks. For this reason, it is necessary to make VoIP servers that use the Linux operating system as the main foundation with opensource-based Asterisk and FreePBX applications that are integrated into the Mini PC server in the form of Raspberry Pi. VoIP technology has several methods to handle the security of VoIP SRTP (Secure Real Time Protocol) that uses network infrastructure that is private. which aims to analyze the performance and security of SRTP. The benefits of this study are to determine SRTP performance. The results of the comparison of Quality of Service between SRTP and Non SRTP using wireshark showed that the average delay value for SRTP was 99.983808 ms, 0.0837 ms jitter, and 0% packet loss, while the Non SRTP average delay was 100.01093 ms, 0.0833 ms jitter, and 0% packet loss. Analysis of the results obtained that for secure or security installation on VoIP Server does not affect the quality of voice or security services.</p>', '<p>Ahmad Sven Heddin Timoryansyah (2015). implementasi voip server dengan menggunakan mini pc. ISSN : 2442-5826 e-Proceeding of Applied Science : Vol.1, No.3 Desember 2015. Aprilyani, N. (2011). Analisa penggunaan sistem SRTP terhadap kualitas suara berdasarkan parameter QoS dengan penggunaan sistem RTP pada teknologi VoIP. Pekanbaru: Politeknik Caltex Riau. Aloysius Gilang Pradipta (2015) Analisis Perbandingan Unjuk Kerja TCP pada koneksi wired dan wireless dengan dan tanpa sack option. Program Studi Teknik Informatika Fakultas Sains dan Teknologi USANDHA Yogyakarta. Domiko Fahdi Jaya Patih (2012). analisa perancangan server voip (voice internet protocol) dengan opensource asterisk dan vpn (virtual private network) sebagai pengaman jaringan antar client. volume 1 No. 1 , Januari 2012 ISSN 2303-0577. Eko Budi Setiawan. (2012). analisa quality of services (qos) voice over internet protocol (voip) dengan protokol h.323 dan session initial protocol (sip). Volume. I Nomor. 2, Bulan Oktober 2012 - ISSN :2089-9033. Farida Arinie Soelistianto. (2016). kajian unjuk kerja aplikasi komputer mini sebagai server voip. prosiding sentia 2016 &ndash; politeknik negeri malang Volume 8 &ndash; ISSN: 2085-2347. Harnan Malik Abdullah. (2016). Perancangan Jaringan Voice Over IP (VoIP) Berbasis Raspberry Pi Untuk Sistem Komunikasi Area Remote. TELKA, Vol.2, No.1, Mei 2016, pp. 36~43 ISSN: 2502-1982. H Mukhtar, Syahril, K Rezki (2012). Penerapan Komunikasi Voice Over Internet Protocol (VOIP) Menggunakan Asterisk Session Initiation Protocol Pada Universitas Muhammadiyah Riau Jurnal FASILKOM ISSN : 2089-3353. Indra Warman. (2015). implementasi voice over internet protocol (voip) pada elastix server menggunakan protocol inter asterisk exchange (iax) ( studi kasus kantor bupati pasaman ). Vol. 3 No. 2 Oktober 2015 Jurnal TEKNOIF ISSN: 2338-2724. J Fischl, H Tschofenig, E Rescorla - 2010 - rfc-editor.org Framework for establishing a secure real-time transport protocol (SRTP) security context using datagram transport layer security (DTLS) Kurniawan (2012). Network Forensics Panduan Analisis dan investigasi paket data jaringan menggunakan Wireshark, Yogyakarta 2012. Meicsy E. I. Najoan, ST. MT. (2012) Implementasi Sentral Komunikasi Telepon Internet Berbasis Sip Jaringan Kampus Unsrat, e-journal Teknik Elektro dan Komputer Patich. (2014). Pengertian Linphone. Dipetik Januari 04, 2017,dari http://id.softoware.net/communicationsoftware/download-linphone-for-linux.html. Rafki Altobery. (2014) Implementasi IMS (IP Multimedia Subsystem) Menggunakan Protokol SIP (Session Initiation Protocol) Pada Jaringan Fakultas Ilmu Terapan, Jurnal Teknologi Informasi Vol. 2, No. 1, November 2014 Rika Wulandari. (2016) Analisis QoS (Quality Of Service) Pada Jaringan Internet (Studi Kasus : UPT Loka Uji Teknik Penambangan Jampang Kulon &ndash; LIPI) e-ISSN : 2443-2229 Jurnal Teknik Informatika dan Sistem Informasi Volume 2 Nomor 2 Agustus 2016 Rini Handayani. (2017). voice over internet protocol (voip) pada jaringan nirkabel berbasis raspberry pi. kinetik, Vol. 2, No. 2, Mei 2017, Hal. 83-88 ISSN : 2503-2259 E-ISSN : 2503-2267. Subandi. (2017). sistem komunikasi berbasis wireless (voip) menggunakan raspberry pi pada daerah tak terjangkau sumber daya listrik. jurnal intekna, Volume 17, No. 1, Mei 2017: 79-147 ISSN 1412-5609, ISSN 2443-1060.</p>', 'upload/files/1566225070-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225070-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225070-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225070-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225070-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap', 53, '2019-08-19 14:31:10'),
(17, 2, 'SISTEM INFORMASI PREDIKSI PENJUALAN LAPTOP PADA CV. COMPUTER SUPERMARKET MENGGUNAKAN METODE SINGLE EXPONENTIAL SMOOTHING BERBASIS WEB', 'Hari Iskandar', 12, 9, '2019-06-26', '<p>Forecasting is the initial part of a decision making process. In production activities forecasting is done to determine the number of requests for a product and is the first step in the production planning and control process. The forecasting process requires a certain method and which method to use depends on the data and information to be forecast and the objectives to be achieved. In this study the method usead is Single Exponential Smoothing. In this method the most suitable alpha value is chosen from the calculation of forecasting errors to produce the smallest value. The method of calculating forecasting errors using the Mean Absolute Percent Error method. The data used is sales data on CV. Computer Supermarket in the period August 2018 to December 2018. From the results of calculations, the biggest forecasting error is found in the Asus X441MA forecasting period of October 2018 at 7.5% and the smallest in the forecasting period of the Asus A407UF for November 2018 at 1.4%, and the results calculation of forecasting accuracy is 92.9577%.</p>', '<p>Andini, Titania Dwi Dan Probo Auristandi. 2016. &ldquo;Peramalan Jumlah Stok Alat Tulis Kantor Di Ud Achmad Jaya Menggunakan Metode Double Exponential Smoothing&rdquo;. Issn: 0852-730x. STMIK Asia Malang Andini, Titania Dwi dan Rike Mariska Sunyoto. 2018. &ldquo;Sistem Peramalan Jumlah Penumpang Kapal Laut Di Pelabuhan Tanjung Perak Surabaya Menggunakan Triple Eksponensial Smoothing Berbasis Android&rdquo;. E-Issn 2460-9552. Stmik Asia Malang Fyanda, Dwi Auji, Mutammimul Ula, Asrianda, 2017. Implementasi Fuzzy Time Series Pada Peramalan Penjualan Tabung Gas Lpg Di Ud. Samudera Lpg Lhokseumawe&rdquo;, Issn: 2598-599x. Universitas Malikussaleh Lhokseumawe Ginting, Elizabeth. 2015. &ldquo;Pengaruh Faktor Budaya, Sosial, Pribadi Dan Psikologis Terhadap Keputusan Pembelian Laptop Merek &ldquo;Asus&rdquo; (Studi Kasus Pada Mahasiswa Universitas Budi Luhur) Periode September &ndash; Desember 2014&rdquo;, Issn: 2252-6226. Universitas Budi Luhur Gusdian, Eby, Abdul Muis dan Arifuddin Lamusa. 2016. &ldquo;Peramalan Permintaan Produk Roti Pada Industri &ldquo;Tiara Rizki&rdquo; Di Kelurahan Boyaoge Kecamatan Tatanga Kota Palu&rdquo;, Issn : 2338-3011. Universitas Tadulako Iswandy, Eka. 2015. &ldquo;Sistem Penunjang Keputusan Untuk Menentukanpenerimaan Dana Santunan Sosialanak Nagari Dan Penyalurannya Bagi Mahasiswa Dan Pelajar Kurang Mampu Di Kenagarian Barung&ndash;Barung Balantai Timur&rdquo;. Issn: 2338-2724. STMIK Jayanusa Padang Kristien, Margi dan Sofian Pendawa W. 2015. &ldquo;Analisa Dan Penerapan Metode Single Exponential Smoothing Untuk Prediksi Penjualan Pada Periode Tertentu (Studi Kasus : Pt. Media Cemara Kreasi)&rdquo;, Isbn: 978-602-1180-21-1. Universitas Bunda Mulia Kurniagara. 2017. &ldquo;Penerapan Metode Exponential Smoothing Dalam Memprediksi Jumlah Siswa Baru (Studi Kasus: Smk Pemda Lubuk Pakam)&rdquo;. Issn 2301-9425. STMIK Budi Darma Kusuma, Abdi Pandu, Indyah Hartami Santi. 2017. &ldquo;Sistem Peramalan Penjualan Produk Usaha Kecil Menengah Berdasarkan Pola Data Riwayat Penjualan&rdquo;. Issn: 1978-5232. Universitas Islam Balitar. Lieberty, Annastasya dan Radiant V. Imbar. 2015. &ldquo;Sistem Informasi Meramalkan Penjualan Barang Dengan Metode Double Exponential Smoothing (Studi Kasus: Pd. Padalarang Jaya)&rdquo;, E-Issn : 2443-2229. Universitas Kristen Maranatha Mansyur Dan Erfan Rohadi. 2015. &ldquo;Sistem Informasi Peramalan Stok Barang Dicv. Annora Asia Menggunakan Metode Double Exponential Smoothing&rdquo; , Issn: 2407-070x. Politeknik Negeri Malang Nurlifa, Alfian dan Sri Kusumadewi. 2014. &ldquo;Analisis Pengaruh User Interface Terhadap Kemudahan Penggunaan Sistem Pendukung Keputusan Seorang Dokter&rdquo;. Isbn: 978-602-1180-04-4. Universitas Islam Indonesia Okwara, Nendang Kacikal. 2013. &ldquo;Sistem Peramalan Dan Monitoring Persediaan Obat Di Rspg Cisarua Bogor Dengan Menggunakan Metode Single Exponential Smoothing Dan Reorder Point&rdquo;, Issn : 2089-9033. Universitas Komputer Indonesia Rahmadayanti, Riza, Boko Susilo, Diyah Puspitaningrum. 2015. &ldquo;Perbandingan Keakuratan Metode Autoregressive Integrated Moving Average (Arima) Dan Exponential Smoothing Pada Peramalan Penjualan Semen Di Pt. Sinar Abadi&rdquo;, Issn 2303-0755. Universitas Bengkulu Saptari, Mochamad Ari dan Isnayati. 2017. &ldquo;Sistem Peramalan Penjualan Sepeda Motor Menggunakan Metode Trend Projection Pada Pt. Ud Prima Nusantara&rdquo;. Issn: 2598-599x. Universitas Malikussaleh Lhokseumawe Suswaini, Eka Dan Sri Haryati. 2016. &ldquo;Forecasting Penjualan Produk Pada PD. Adi Anugrah &ldquo;Food Industry&rdquo; Tanjungpinang Dengan Metode Single Exponential Smoothing&rdquo;. Issn 2087-5347. Universitas Maritim Raja Ali Haji Suwastika, Novian Anggis dan Praditya Wahyu W. 2015. &ldquo;Model Prediksi Simple Moving Average Pada Auto-Scaling Cloud Computing&rdquo;, Issn : 2407 &ndash; 3911 Universitas Telkom BandungTanaamah, Andeka Rocky dan Agustinus Fritz Wijaya. 2017. &ldquo;Analisis Dan Perancangan Sistem Informasi Penjualan Berdasarkan Stok Gudang Berbasis Client Server (Studi Kasus Toko Grosir &ldquo;Restu Anda&rdquo;)&rdquo; Issn: 2355-7699. Universitas Kristen Satya Wacana Utama , Cahyarizki Adi dan Yan Watequlis. 2016. &ldquo;Pengembangan Si Stok Barang Dengan Peramalan Menggunakan Metode Double Exponential Smoothing (Studi Kasus : Pt. Tomah Jaya Elektrikal)&rdquo;. Issn: 2407-070x. Politeknik Negeri Malang</p>', 'upload/files/1566225308-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225308-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225308-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225308-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225308-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap', 52, '2019-08-19 14:35:08');
INSERT INTO `skripsi` (`id`, `kosentrasi`, `judul`, `penulis`, `pembimbing_1`, `pembimbing_2`, `tanggal_seminar`, `abstrak`, `daftar_pustaka`, `cover`, `bab_1`, `jurnal`, `dokumen`, `files`, `status`, `komentar`, `user_id`, `time_update`) VALUES
(18, 2, 'Rancang bangun sistem informasi pengelolaan dana hibah pada badan pengelolaan keuangan aset daerah (BPKAD) provinsi riau', 'Jakok gundara', 3, 13, '2019-06-26', '<div class=\"freebirdFormviewerViewItemsItemItemHeader\">\r\n<div class=\"freebirdFormviewerViewItemsItemItemTitleDescContainer\">\r\n<div class=\"freebirdFormviewerViewItemsItemItemTitleContainer\">\r\n<div class=\"freebirdFormviewerViewItemsItemItemTitle exportItemTitle freebirdCustomFont\" dir=\"auto\" role=\"heading\" aria-level=\"2\" aria-describedby=\"i.desc.11768037 c1659\">ABSTRACT&nbsp;<span class=\"freebirdFormviewerViewItemsItemRequiredAsterisk\" aria-label=\"Pertanyaan wajib\">*</span></div>\r\n</div>\r\n<div id=\"i.desc.11768037\" class=\"freebirdFormviewerViewItemsItemItemHelpText\" dir=\"auto\">Merupakan Abstrak dari karya intelektual anda yang ditulis Dalam Bahas Infggris</div>\r\n</div>\r\n</div>\r\n<div class=\"freebirdFormviewerViewItemsTextTextItemContainer\">\r\n<div class=\"freebirdFormviewerViewItemsTextLongText freebirdFormviewerViewItemsTextDisabledText freebirdThemedInput\">ABSTRACT The Regional Asset Financial Management Agency (BPKAD) of Riau Province has a position as a Service that manages and supervises and coordinates the distribution of grant funds in Riau Province. The Regional Asset Financial Management Agency (BPKAD) of Riau Province is assisted by one of the Subdivisions, namely the regional work unit (SKPD). One of the activities of the program planning subdivision is to receive, evaluate, monitor and select proposals for the submission of grant assistance from foundations / educational institutions that submit requests for assistance. The problem is when processing the incoming proposal data, because the number of proposals submitted so program planning staff is overwhelmed to process the proposal data, there is no system that can validate the proposal so that many proposals come in with incomplete terms and the submission must be repeated. Therefore we need an online proposal submission system that can facilitate monitoring and selecting rejections and accepting proposals so that information is more quickly received. Keywords: grants, funds, bpkad.</div>\r\n</div>', '<p>DAFTAR PUSTAKA Abdullah, Dahlan (2015), Perancangan Sistem Informasi Pengelolaan Retribusi Pengujian Kendaraan Bermotor Pada Dinas Perhubungan, Pariwisata Dan Kebudayaan Kabupaten Aceh Utara, Sisfotenika, Vol. 5, No 2, Juli 2015. Abdul Kadir.2009. Membuat Aplikasi Web dengan PHP + Database MySQL. Andi. Yogyakarta. Agus Eka, Pratama. 2014. Sistem Informasi dan Implementasinya. Bandung: Informatika Bandung. Amborowati, Armadyah, Marco, Robert (2016). Perancangan Sistem Pengelolaan Dan Monitoring Bantuan Operasional Sekolah (Bos) Pada Sltpn Yogyakarta Dalam Upaya Pengendalian Dana, Jurnal Telematika, Vol. 9, No. 2, Agustus 2016. Dhian Satria Yudha, Kartika (2012) Manajemen Pengelolaan Dana Hibah Walikota Surabaya Berbasis Web Dan Sms Gateway. Undergraduate Thesis, Faculty Of Industrial Engineering Hamim, Tohari. 2014. Analisis Serta Perancangan Sistem Informasi Melalui Pendekatan UML. Andi Offset , Yogyakarta. Ichsan Nofian S, Djunaedy Sakam, Ds&nbsp;And&nbsp;Agus Hexagraha, Ds&nbsp;(2018)&nbsp;Perancangan Sistem Informasi Pengelolaan Dana Bantuan Operasional Sekolah (Bos) (Studi Kasus : Sd Negeri Rancakole 04).Skripsi(S1) Thesis, Fakultas Teknik. Nugroho, T. 2011. Asuhan Keperawatan Maternitas, Anak, Bedah Dan Paenyakit Dalam. Yogyakarta : Nuha Medika. Prasadhia, Griya, Oktaviani, Sari, Pradesan, Iis (2013). Sistem Informasi Pengelolaan Data Proyek Pada Cv. Haikal Pratama, STMIK GI MDP, 2013. Rizki, Pratomo Adi&nbsp;(2016)&nbsp;Sistem Informasi Pengelolaan Bantuan Operasional Sekolah (Bos) Pada Sekolah Dasar Negeri Harjosari Lor 01.&nbsp;Skripsi,Fakultas Ilmu Komputer. Satria Yudha Kartika, Dhian. (2012). Manajemen Pengelolaan Dana Hibah Walikota Surabaya Berbasis Web Dan Sms Gateway, Jurnal Teknik Informatika, Vol. 19, No. 1, Maret 2017. Susilowati, Susi. (2017). Pengembangan Sistem Informasi Manajemen Zakat, Infaq, Shadaqoh, Waqaf dan Hibah Menggunakan Metode Waterfall, Paradigma, Vol. 19, No. 1, Maret 2017. Zulaikho, Noor. (2013). Sistem Informasi Manajemen Pendistribusian Bantuan Alat Untuk Kelompok Usaha Bersama Pada Dinas Perindustrian Koperasi Dan Umkm Kabupaten Kudus, Skripsi Sarjana thesis, Universitas Muria Kudus. Jurnal Mahasiswa, Vol. 1, No. 1, 2014.</p>', 'upload/files/1566225940-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225940-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225940-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225940-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566225940-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 51, '2019-08-19 14:45:40'),
(19, 2, 'Implementasi Pengamanan Data dan Informasi dengan Metode Kriptografi RSA dan Steganografi BPCS', 'Dede Mulyono', 12, 2, '2019-06-26', '<p>Information technology is a set of tools that help work related to information and perform tasks related to processing information and distributing information using communication channels. Information technology is a combination of computer technology and telecommunications technology where both are interrelated. The confidentiality and security of information in the current era of globalization is increasingly becoming a vital need in various aspects of life. An information will have a higher value when it comes to aspects of business decisions, security, or public interest. Where the information will certainly be in great demand by various parties who also have interests in it. One of the security techniques in the shipping process is to use encryption techniques and descriptions to make the data or information processed cannot be known by others, except the authorities. Cryptographic techniques can arouse suspicion on third parties who are not entitled to receive information because the message is disguised by changing the original message as if it were illegible. Whereas, Steganography further reduces suspicion because messages that are disguised are hidden into other messages. Steganography can disguise messages into a media without other people realizing that the media has been inserted into a message. Keywords: RSA Cryptography, Images, Steganography, BPCS.</p>', '<p>Albert Ginting, dkk. 2015. Implementasi Algoritma Kriptografi RSA untuk Enkripsi dan Dekripsi Email. Ashari Arief, Ragil Saputra. 2016. Implementasi Kriptografi Kunci Publik dengan Algoritma RSA-CRT pada Aplikasi Instant Messaging. Dwi Ratna Sari. 20017. Perancangan Aplikasi Steganografi Pada Citra Digital Dengan Metode Bit Plane Complexity Segmentation (BPCS). Habibi Z. 2018. Implementasi Metode Bit Plane Complexity Segmentation pada Citra Digital dalam Penyembunyian Pesan Rahasia. Hasrul, Lamro Herianto Siregar. 2016. Penerapan Teknik Kriptografi pada Database mengggunakan Algoritma One Time Pad. Heldiansyah, dkk. 2015. Pengembangan Sistem Informasi Penjualan Alat Kesehatan Berbasis Web Pada PT. Alfin Fanca Prima Johannes Petrus. 2015. Implementasi Steganografi pada Citra dengan Metode Bit Plane Complexity Segmentation untuk Transformasi Data. Pranita P. Khainar, Prof.V.S. Ubale. 2013. Steganography Using BPCS Technology Rahmat Hidayat. 2015. Klasifikasi Bit-Plane Noise untuk menyisipkan Pesan pada Teknik Steganografi BPCS menggunakan Fuzzy Inference Sistem Mamdani. Ristiana Kusumawati, dkk. 2011. Implementasi Penyisipan Pesan Pada Citra Dengan Metode Steganografi BPCS dan Algoritma Enkripsi AES. RD. Kusumanto, Alan Novi Tompunu. 2011. Pengolahan Citra Digital untuk mendetekssi Obyek menggunakan Pengolahan Warna Model Normalisasi RGB. Syaiful Anwar. Implementasi Pengamanan Data dan Informasi Dengan Metode Steganografi LSB dan Algoritma Kriptografi AES. Yuri Arianto, dkk. 2017. Implementasi Steganografi Menggunakan Metode Bit Plane Complexity Segmentation Pada Citra Digital.</p>', 'upload/files/1566226374-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566226374-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566226374-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566226374-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566226374-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 50, '2019-08-19 14:52:54'),
(20, 2, 'Pemanfaatan Augmented Reality Sebagai Panduan Mengurus Jenazah', 'Maskuri Resiasa', 10, 1, '2019-06-26', '<p>ABSTRACT DailySocial Research Team In 2016 conducted a survey of smartphone user activity. the results obtained by the majority of users prefer interesting ones such as social media and games. This research discusses and builds an application about completing worship based on the Pillars of Islam using Augmented Reality technology based on the Android operating system. In Islam we are faced with looking for new discoveries in the field of technology and utilization in life. One of them is learning carried out by the corpse using augnmented reality technology and smartphones as supporters. The NFT method is a combination of several methods such as SIFT and Fern available in the SDK. Vuforia to use applications with augmented reality technology. By applying this augmented reality technology, ways of learning are more interactive and attract users\' interest can also be learned anywhere and anytime without studying space and time. Keywords : Android, NFT, Sift, Ferns, Augmented Reality.</p>', '<p>DAFTAR PUSTAKA Adelia, dan J. S. (2011). Implementasi Customer Relationship Management (CRM) pada Sistem Reservasi Hotel berbasisi Website dan Desktop. Brian K. Williams, S. S. (2011). Using Information Technology?: A Practical Introduction to Computers and Communications (9th Edition). New York: McGraw-Hill Higher Education. Elvrilla, S. (2011). Augmented Reality Panduan Belajar Sholat Berdasarkan Buku Teks Belajar Sholat Menggunakan Android. Jakarta. Kusuma, I. N. W. (2014). Pembangunan Aplikasi Media Periklanan Arloji Menggunakan Augmented Reality Berbasis Android. Luqman. (2012). Aplikasi Web Sistem Informasi Penjualan Pada Khazanah Ponsel Yogyakarta. Digital Times, Unknown(Unknown), No Pages. Retrieved from http://www.dt.co.kr/contents.html?article_no=2012071302010531749001 Lowe, D. G. (2004). Distinctive Image Features from Scale-Invariant Keypoints, 1&ndash;28. https://doi.org/http://dx.doi.org/10.1023/B:VISI.0000029664.99615.94 Maimunah, D. (2017). Aplikasi Sistem Order Online Berbasis Mobile Android Pada Outlet Pizza Hut Delivery. Seminar Nasional Teknologi Informasi Dan Multimedia 2017, (ISSN?: 2302-3805), 4&ndash;5. https://doi.org/10.1164/rccm.200609-1342OC Michael Haller, Mark Billinghurst, B. H. T. (2007). Emerging technologies of augmented reality: interfaces and design. United States of America: Idea Group Publishing. Idea Group Inc. Paul MILGRAM, F. K. (1994). A Taxonomy of Mixed Reality Visual Displays. E-Journal Teknik Informatika, 2(1), 35&ndash;46. Retrieved from http://sistemasi.ftik.unisi.ac.id/index.php/stmsi/article /download/29/pdf. Ronald T Azuma. (2009). A Survey of Augmented Reality, Presence: Teleoperators and Virtual Environments 6. Chaos, Solitons and Fractals, 42 (3), 1451&ndash;1462. https://doi.org/10.1016/j.chaos.2009.03.056 Rentor, M. F., &amp; Atma. (2013). Rancang Bangun Perangkat Lunak Pengenalan Motif Batik Berbasis Augmented Reality. Risyan, A. S. (2016). Analisis Penggunaan Metode Marker Tracking Pada, 7(1), 295&ndash;304. Sari, B. K. (2017). Desain Pembelajaran Model Addie Dan Implementasinya Dengan Teknik Jigsaw. Desain Pembelajaran Di Era ASEAN Economic Community (AEC) Untuk Pendidikan Indonesia Berkemajuan, 87&ndash;102. Sudarmawan, D. A. (2009). Interaksi Manusia dan Komputer, ed 1. Sutrisno Adam, Arie S. M. Lumenta, ST, MT, Jimmy R. Robot, ST, M. (2014). Implementasi Teknologi Augmented Reality pada Agen Penjualan Rumah. E-Journal Teknik Elektro Dan Komputer, 19&ndash;25. Team, D. R. (2016). Indonesian Andoid User Behavior, 28. Tim EMS. (2012). Panduan Cepat Pemograman Android. Jakarta: PT Elex Media Komputindo. Unity. (2012). Unity Techonologies. [Online]. http://unity3d.com/unity/ Diakses tanggal 20 maret 2018.</p>', 'upload/files/1566227751-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566227751-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566227751-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566227751-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566227751-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap ', 49, '2019-08-19 15:15:51'),
(21, 3, 'port knocking pada sistem keamanan jaringan  menerapkan algoritma rsa ssh cv intimedia ', 'Adi Arnika', 10, 9, '2019-06-26', '<p>ABSTARCT The security of computers connected to the Internet today has become a very thing noticed Various attack techniques and attempts to penetrate a host always appear every year. On generally attacks are carried out by exploiting applications that listen on ports open on the server. Let an open port and the listen application on that port be carrying a serious security problem, but closing the port means closing a host from the outside world. Port knocking as an authentication system can be an alternative to solve the problem above. Port knocking comes with a simple solution: \"open port to a client if the client requests, and closes again when the client has finished. \" Port knocking allows the client to connect even though each port on the server is closed. For open and close the port the client must send his personal identity through the network disguised as an attempt to connect to the server. This knocking port capability will cause the port-port on the server does not look open by other parties, but looks open or authenticated clients. Thus the port is opened only to legitimate parties, in this case the authenticated client. This is expected to reduce attacks DDoS / DOS on the server and exploiting applications that listen to certain ports. Keywords: port knocking, authentication, closed ports, computer security</p>', '<p>DAFTAR PUSTAKA Anggota IKAPI, 2008, Menjadi Teknisi Jaringan Professional, PT Elex media komputindo, Jakarta Arief ramadhan, 2006, Pengenalan Jaringan Komputer, PT Elex media komputindo, Jakarta Faussett, J. A, 1994, Fundamental Of Neural Network, Architecture, Algoritma and Applications, New Jersey, Prentice Hall Inc Gay, Warren W, 1999, Sams Teach Your Self Linux Programming In 24 Hours, Sams Publishing, Indianapolis Gray, John Shapley, 2000, Interprocess Communication In Unix The Nooks And Crannies, New Jersey, Prentice Hall Ivan Sudirman, 2003, TCP / IP dan Praktek Sekuriti Jaringan, Ilmu Komputer Krzywinski M, 2003, Port Knocking Network Authentication Across Closed Port Kung Luke, Hou C, Jennifer, 2000, Interprocess Communication In Unix The Nooks And Crannies, New Jersey, Prentice Hall Kung Luke, Hou C, Jennifer, 2004, Network System Labs Project Port Knocking, University Of Ilionis Mansfield Nial, 2005, Partical TCP IP Jilid I, Penerbit Adi, Yogyakarta Munir, Rinaldi, 2006, Bahan Kuliah IF2153 Matematika Diskrit, Departemen Teknik Informatika, Institut Teknologi Bandung Stanger, Dkk, 2001, Hack Proofing Linux A Guide To Open Source Security, Syngress Publishing Inc, Massachuset Steven, Dkk, 2004, Unix Network Programming, Boston, Addison Wesley Tannenbaum S Andrew, 2003, Computer Network, New Jersey, Prentice T. Y lonen, 2006, The Secure Shell (SSH) Protocol Architecture, Copy Right &copy; The Internet Society</p>', 'upload/files/1566228590-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228590-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228590-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228590-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228590-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 1, '', 48, '2019-08-19 15:29:50'),
(22, 4, 'IMPLEMENTASI SEMANTIK WEB UNTUK PENCARIAN WISATA KULINER DI WILAYAH PEKANBARU BERBASIS ANDROID', 'Fitratul Hayat', 1, 10, '2019-06-26', '<p>The excistence of culinary attractions in Pekanbaru which are always increases day by day makes the people confused to make a decicion which place to be choosen for eating. The sources of culinary information which is inadequate make the condition become worst, people need the information that can help them to find the best place or food for their culinary tour. This things which are being the background and purpose of this project creation. This is &ldquo;The Implementation of Semantic Web for the Searching of Culinary in Pekanbaru Based on Android&rdquo;. This information system utilizes Semantic Web as the information sources which are globaly connected to internet. The structure and semantic web of document type is described with an ideal concept of Ontology. People will easily find the culinary attractions by typing the food they wish. With Semantic Web, people will find the similar food&rsquo;s information they need in only one searching. With these informations, people will be easily choose the foods or restaurants they wish for eating. Key Words : Culinary Attractions, Information System, Semantic Web, Ontology, Pekanbaru</p>', '<p>Fadillah, Nava&rsquo;atul.,2010, penerapan teknologi semantic web pada aplikasi pencarian koleksi perpustakaan. Zebua, Javier., 2010, aplikasi pencarian buku berbasis web semantikuntuk perpustakaan SMK yadika 7 bogor, universitas gunadarma. Andri, dan Puji, Eka, 2014, Perancangan ontology sebagai meta data aplikasi berbasis semantic. T. burners-lee, j. Hendler, and o. lassila.Semantic web.Scientific American, 2001. Arief, M.Rudianto. 2011. Pemrograman Web Dinamis Menggunakan Php dan Mysql. Yogyakarta: ANDI. Wijayanto, Hendro, 2012, Penerapan web semantik dalam pecarian catalog buku di perpustakaan STMIK Sinar Nusantara Surakarta. Sifauttijani, Faris, 2017, Pencarian rumah makan berbasis android Universitas Muria Kudus. Nurkhamid, mukhamad., 2009, aplikasi bibliografi perpustakaan berbasis teknologi semantic, jurnal fakultas teknik, universitas maria kudus dikutip dari http://ilmuweb.net/semantic-web/rdf-resource-description-framework-pada-web-semantik. Labrou, Y. and Finin, T. 1994. &ldquo;A Semantics Aprprouch for KQML &ndash; a general purpose communication language for software agents&rdquo;, Proceedings of the 3rd internationalConference on Information and Knowledge Management, ACM Press Al Fatta, Hanif., 2008, Analisis dan Perancangan Sistem Informasi, Andi, Yogyakarta. Kadir, Abdul.,Penuntun Praktis Belajar SQL, Andi, Yogyakarta, 2008. Marlinda, Linda.,Sistem Basis Data, Andi, Yogyakarta, 2005. Wordpress.com (2013), Pengertian Mysql, dikutip dari http://lealy.wordpress.com/2009/10/21/pengertian-mysql/ Gunadarma.ac.id (2013), Pengertian Sistem File Klasifikasi Data Jenis, dikutip dari http://community.gunadarma.ac.id/blog/view/id_1787/title_pengertian-sistem-file-klasifikasi-data-jenis/. Zubaidillah, Harish (2015), Makalah Ontologi Episetmologi dikutip dari http://hariszubaidillah.blogspot.co.id/2015/10/makalah-ontologi-epistemologi-dan.html.</p>', 'upload/files/1566228993-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228993-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228993-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228993-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566228993-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 1, '', 47, '2019-08-19 15:36:33'),
(23, 4, 'SISTEM ABSENSI BERBASIS PENGENALAN WAJAH  (FACE RECOGNITION) MENGGUNAKAN METODE EIGENFACE', 'Wardana Bayu Syahputra', 1, 11, '2019-06-26', '<p>Face recognition is an important research field today. The application of face recognition in this final project is for lecture attendance. Problems that arise due to the use of ledgers in FASILKOM IT - UMRI are the safekeeping of signatures so that absences occur fraud, the application of attendance lectures using faces can be the solution. Based on several methods that have been studied the author wants to design and develop an attendance system through one of the face recognition methods which has quite good accuracy based on several previous studies, PCA (Principle Component Analysis) or often called Eigenfaces this is a multifunctional method used, because Eigenfaces have many functions especially in face recognition such as being able to make predictions, erase redundancy, data compression, dimension reduction, until feature extraction that has been incorporated in OpenCV so that the author uses eigenfaces method as a method to be used in developing realtime attendance systems in face recognition by adding methods for face detection so that faces can be detected in realtime. Keywords - Attendance, Face Recognition, PCA (Principal Component Analysis), Eigenface. OpenCV</p>', '<p>Fadlisyah. (2007). Computer Vision dan Pengolahan Citra. Yogyakarta: CV. ANDI OFFSET. Indra. (2012). Sistem Pengenalan Wajah Dengan Metode Eigenface Untuk Absensi Pada PT.Florindo Lestari, ISBN 979 - 26 - 0255 - 0. Ismawan, F. (2015). Hasil Ekstraksi Algoritma Principal Component, ISSN : 2088 &ndash; 1762 Vol. 5 No. 1 / Maret 2015. Kustian, N. (2016). Analisis Komponen Utama Menggunakan Metode Eigenface Terhadap Pengenalan Citra Wajah, ISSN : 2085 &ndash; 1669. Lestari, S. P. (2014). Implementasi Pengenalan Wajah Manusia, ISSN : 2301-9425. Pratikno, H. (2013). Sistem Absensi Berbasiskan Pengenalan Wajah Secara Realtime Menggunakan Webcam Dengan Metode PCA. Pratiwi, D. E. (2013). Implementasi Pengenalan Wajah Menggunakan PCA (Principal Component Analysis), ISSN: 2088-3714. Putra, D. (2011). Pengolahan Citra Digital. Yogyakarta: CV. ANDI OFFSET. Putra, I. N. (2014). Perancangan Dan Pengembangan Sistem Absensi Realtime Melalui Metode Pengenalan Wajah, ISSN: 2303-3142. Putro, M. D. (2012). Sistem Deteksi Wajah dengan Menggunakan Metode Viola-Jones. Saputra, I. (2016). Analisa Dan Perancangan Aplikasi Pengenalan Wajah, ISSN 2502-6989. Sari, A. M. (2016). Aplikasi Face Recognition dengan Menggunakan C#.Net, ISBN: 978-602-61268-0-1. Sinurat, S. (2014). Analisa Sistem Pengenalan Wajah Berbentuk Cintra Digital Dengan Algoritma Pricipal Components Analysis, ISSN : 2339-210X. Turk, A. P. (1991). Eigenfaces for Recognition. Journal of Cognitive Neuroscience, Volume 3. Zein, A. (2018). Pendeteksian Multi Wajah Dan Recognition Secara Real Time Menggunakan Metode Principal Component Analysis (PCA) Dan Eigenface.</p>', 'upload/files/1566229278-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566229278-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566229278-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566229278-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566229278-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 1, '', 46, '2019-08-19 15:41:18'),
(24, 2, 'implementasi sistem pakar menggunakan metode rule based reasoning dan case based reasoning untuk mengetahui gangguan tumbuh kembang anak usia dini', 'falda dimantara', 6, 1, '2019-06-25', '<p>ABSTRACT Related and the development of early childhood (0-12 years) is a very important period owned by parents. Disorders of growth and development of children need it accompanied by handling as early as possible. But in fact the handling of child growth disorders is still very difficult because it is still difficult for parents to develop children. To find out whether the child solves the problem of growth and development or does not need the help of an expert, that is the expert who develops the child. But parents cannot always help at all times because of busy work and quite expensive consulting fees. For this reason, a solution can be taken by including experts who need early childhood growth and development who are joined by a computer-based system consisting of expert systems. System expert research is conducted to find out the development of early child development and help parents and developers solve problems. problem From the results of the research using the Rule-based-reasoning (RBR) and Case-based-reasoning (CBR) methods that are very suitable to be used to understand the problems of early childhood development with 80% accuracy. Keywords: child development, expert systems, methods (CBR and RBR).</p>', '<p>DAFTAR PUSTAKA Aamodt, A. dan Plaza, E. (1994). Case-based Reasoning : foundation issues, methodological variation and System approach. AI Communication 7(1), pp. 39-59. Andik Adi Suryanto, Imron Rosyidi, Miftahul Ulum, dan Adi Wendra. (2016). Penerapan Case Based Reasoning (CBR) untuk Mendiagnosa Jenis Pecandu Narkoba. Seminar Nasional Ilmu Komputer. Halam 316-319. Arman, D, J,. Danang, J,. Imron, M,. (2017). Analisis dan Implementasi Sistem pakar dengan Metode Case Based Reasoning dan Rule Based Reasoning (studi kasus: diagnosis penyakit demam berdarah) Analysis and Implementation Expert System with case Based Reasoning and Rule Based Reasoning Methods(case study: diagnosis of dengue fever disease). jurnal e-Proceeding of Engineering, Vol.4, Hal. 3259. Dinar Pratisti W, M.Si. (2008). Psikologi anak usia dini. PT Indeks: penerbit PT Macanan jaya cemerlang. Fadhilla P. Cahyani1., M. Tanzil Furqon, dan Bayu Rahayudi. (2018). Identifikasi Penyimpangan anak dengan Algoritme Backpropagation. Jurnal Pengembangan Teknologi Informasi dan Ilmu Komputer. Vol. 2, No. 5, hlm. 1778-1786. Faizal E. (2015). Integrasi case-based reasoning dan rule-based Reasoning untuk pengembangan sistem pendeteksi dini ganguan tumbuh kembang anak. Jurnal Teknologi Informasi dan Ilmu Komputer. Vol. 13, No. 3. Halaman 27-41. Juwita Utami Putri, Wisnu Sukma Maulana, dan I Wayan S. Wicaksana. (2016). Metode Case Based Reasoning (CBR) dalam Menyusun Rencana Pemasaran. Universitas Gunadarma. K. Ashwin Kumar , Yashwardhan Singh, dan Sudip Sanyal. (2017). Hybrid approach using case-based reasoning and rule-based reasoning for domain independent clinical decision support in ICU. Indian Institute of Information Technology. Kusrini. (2008). Sistem Pakar Teori dan Aplikasinya. Penerbit Andi. Yogyakarta. Moersintowati B. Nendra, &amp; Titi S. Sularyo, Soetijiningsih. (2005). Tumbuh kembang anak Remaja (IDAI). Jakarta: Penerbit CV. Sagung Seto. Mulyana, Hartati. (2016). &ldquo;Tinjauan singkat perkembangan case based reasoning Universitas Gadjah Mada&rdquo; Seminar Nasional Informatika 2009 (semnasIF 2009). Nuryati l, S.Psi, M.Si, Psikolog. (2008). Psikologi anak. PT Indeks: penerbit PT Macanan jaya cemerlang. Rati Dwi Sanitasari, Desi Andreswari, &amp; Endina Putri Purwandari. (2017). Sistem monitoring tumbuh kembanganak usia 0-5 tahun berbasis android. Jurnal rekursif. Vol. 5 no. Halaman 1-27. Rusdi M,. Dr. (2013). Diagnosis gangguan jiwa. PT Nuh Jaya Jakarta : Penerbit Bagian ilmu kedokteran jiwa FK-Unika Atmajaya, Jakarta Kompleks RS Atmajaya, Gedung Damian, lantai 5 V- 506 jalan pluit Raya 2, Jakarta 14440. Syamsul Yusuf LN. Dr. ( 2011). Psikologi perkembangan anak remaja. Bandung: Penerbit pt remaja rosdakarya. Winyastuti D, dr. (2001). Panduan perkembangan anak 0-1 tahun. Jakarta: Penerbit Puspa Swara. Wahyu Widodo D., Kusrini., dan Eko Boedijanto. (2014). Perancangan sistem pakar deteksi dini tumbuh kembang anak berbasis multimedia. Jurnal ilmiah sisfotenika. Vol. 4, No. 2, 129-139.</p>', 'upload/files/1566230487-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230487-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230487-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230487-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230487-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 1, '', 45, '2019-08-19 16:01:27'),
(25, 7, 'IMPLEMENTASI KRIPTOGRAFI AES 128 DAN STEGANOGRAFI LSB (LEAST SIGNIFICANT BIT) PADA DATA TEKS ', 'Heru oktavian dani', 12, 6, '2019-06-25', '<p>Confidentiality and security is an important aspect that is needed in the process of message exchanges, information over a network or the internet. Cryptography and steganography can be implemented in applications for secure messages with media images. Generally the techniques used by encrypting message first, and then paste it into the media cover. The algorithm used for the encryption and decryption of messages is AES 128, while for the process of insertion messages on the image using the method of the LSB (least significant bit). To see the value of the quality in image that contains the message using calculation value of the MSE (Mean Square Error) and PSNR (Peak signal to noise ratio). Testing was done with two images dimensions 200 x 200 and 200 x 112, to see a threshold capacity image inserted different messages. The process of insertion messages that have been encrypted successfully done and produce images that can be extracted and decrypted. The resulting image has a good criteria, as had the imperceptibility, fidelity, recovery is good except the picture size increase. Keywords: AES 128, cryptography, image, LSB, MSE, symmetry, Steganogari, PSNR</p>', '<p>(2016). Penerapan Keamanan Penyampaian Informasi Melalui Citra dengan Kriptografi Rijndael dan Steganografi LSB Information Security Through Imagery with Rijndael Cryptography, 228&ndash;241. Cahyadi, T. (2012). Implementasi steganografi lsb dengan enkripsi vigenere cipher pada citra jpeg. Didi Surian. (2006). Algoritma kriptografi aes rijndael, 8(2), 97&ndash;101. Eriks Rahmat Swedia, M. C. (2010). Algoritma Transformasi Ruang Warna. Fatma, Y. (2017). Pembangkitan Kunci Asimetri Menggunakan Gambar dan Single Layer Perceptron. Fresly Nanda Pabokory, indah Fitri Astuti, A. H. K. (2015). Implementasi Kriptografi Pengamanan Data Pada Pesan Teks , Isi File Dokumen , Dan File Dokumen Menggunakan Algoritma Advanced Encryption, 10(1). Gede Wisnu Bhaudhayana, M. W. (2015). Implementasi Algoritma Kriptografi AES 256 Dan Metode Steganografi Pada Gambar Bitmap. Iliadi, N. A., Hidayat, B., &amp; Andini, N. (2015). Steganografi Enhanced Least Significant Bit Pada Karakter Khusus Citra Tulisan Arab, 2(2), 2451&ndash;2458. Maryam Arvandi. (2005). Analysis of neural network based ciphers. Menezes, A. J., Oorschot, P. C. Van, &amp; Vanstone, S. A. (1996). Applied Cryptography. Pandapotan, T. S., &amp; Zebua, T. (2016). Analisa Perbandingan Least Significant Bit dan End Of File Untuk Steganografi Citra Digital Menggunakan Matlab, (November), 11&ndash;12. Rifqi Azhar Nugraha. (2017). Advanced Encryption Standard ( AES ). https://doi.org/10.13140/RG.2.1.3538.7768 Rob, D. E. (1982). Cryptography and 13ata Security. Sasmito, G. W. (2017). Penerapan Metode Waterfall Pada Desain Sistem Informasi Geografis Industri Kabupaten Tegal, 2(1), 6&ndash;12. Stallings, W. (2005). Cryptography and Network Security (4th Edition). Ulan Ari Anti, Awang Harsan Kridalaksana, D. M. K. (2017). Steganografi Pada Video Menggunakan Metode Least Significant Bit (LSB) Dan End Of File (EOF), 12(2), 104&ndash;111. Vania Beatrice Liwandouw, A. D. W. (2017). Desain Algoritma Berbasis Kubus Rubik dalam Perancangan Kriptografi Simetris, (April 2015). Wahyuningsih, S., Pandex, T. V. D., &amp; Stefanny, V. (2016). Implementasi Visible Watermarking Dan Steganografi Least Significant Bit Pada File Citra Digital, 8(2), 140&ndash;145. Warkim, Irvan Lewanesi, P. K. K. (2016). Kriptografi Algoritma Advanced Encryption Standard Dan Pengecekan Error Detection Cyclic Redundancy Check, (April).</p>', 'upload/files/1566230812-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230812-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230812-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230812-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566230812-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 1, '', 44, '2019-08-19 16:06:52'),
(26, 4, 'Sistem informasi penetapan harga pokok pesanan menggunakan job order cost (joc) method pada MR interior', 'Fithyan fadhla', 1, 6, '2019-08-20', '<p>ABSTRACT Cost calculation for the type of manufacturing company that implements a job order system based on orders, needs to carry out a calculation at the beginning. As is common in manufacturing companies, the most discussed cost problems are the measurement of raw material costs, direct labor costs and allocation of overhead costs which are components of the basic price for the products they produce. The problem in calculating the cost of production at MR Interior Design is caused by not making a budget at the beginning such as calculating direct labor costs, raw material costs incurred and other non-production costs. The research methodology used is SDLC (System Development Live Cycle) based on the waterfall method. In this method there are 4 stages of research, namely: system analysis (Requirements), system design, implementation (Implementation), system testing (Testing). This study aims to produce a system by applying the formulation of the job order cost method so as to produce a calculation of the exact cost of the order. The results of this study are information systems determining the cost of the job order cost method, this system can manage problems in calculating costs and determining the cost of the order. Keywords: Order Pricing Information System, Job Order Cost Method</p>', '<p>DAFTAR PUSTAKA Adysta Rahadi. 2014. Analisis dan Desain Sistem Informasi Persediaan Barang Berbasis Komputer. Jakarta: Universitas Brawijaya(Skripsi) Edi Herman, MBA,Ak. 2013. Akuntansi Manajerial. Jakarta: Mitra Wacana Media Eddy Prahasta. 2009. Sistem Informasi Geografis. Bandung: Informatika Bandung Hanif Al Fatta. 2007. Analisis dan Perancangan Sistem Informasi. Yogyakarta: Andi Offset Jaluanto Sunu Punjul. 2016. Sistem Informasi Manajemen. Yogyakarta: CV.Budi Utama Jeperson Hutahaean. 2014. Konsep Sistem Informasi. Yogyakarta: CV.Budi Utama M. Fairul Filza. 2013. Rancang Bangun Sistem Informasi Untuk Mengatur Peredaran Stock Terhadap Transaksi Pada Perusahaan Retail. Yogyakarta: Universitas Amikom(Skripsi) Rahmat H.Labatjo. 2015. Rancang Bangun Sistem Pengolahan Data Brang Berbasis Web Pada Toko Fitber. Manado: UNSRAT(Skripsi) Rosa A.s &amp; M.Shalahuddin. 2011. Modul Pembelajaran Rekayasa Perangkat Lunak. Bandung: Modula Sritomo Wignjososoebroto, 2006. Pengantar Teknik dan Manajemen Industri. Surabaya: Prima Printing Suharyadi dkk, 2007, Kewirausahaan, Salemba Empat, Jakarta Tata Sutabri. 2012. Konsep Sistem Informasi. Yogyakarta: AndiOffset Tata Sutabri. 2005. Sistem Informasi Manajemen. Yogyakarta: Andi Offset Yakub. 2012. Pengantar Sistem Informasi. Yogyakarta: Graha Ilmu Yulia Djahir. 2015. Sistem Informasi Manajemen. Yogyakarta: CV.Budi Utama</p>', 'upload/files/1566231116-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231116-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231116-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231116-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231116-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'LENGKAP', 43, '2019-08-19 16:11:56'),
(27, 9, 'ANALISIS KASUS SERANGAN SECURE SOCKET SHELL TUNNELING (SSH) PADA SIMCARD INTERNET SERVICE PROVIDER (ISP)', 'Alvio Wansyah', 10, 12, '2019-06-25', '<p>Crime in the internet world is very widespread now. With the rapid development of information technology, making the opportunity to do crime by using the internet is also increasing. In this case Secure Socket Shell Tunneling (SSH) is on port 22, access and internet usage is done using supporting software as inject, a trick that utilizes a bug on the Internet Service Provider (ISP) Simcard using the Tunneling technique. Secure Socket Shell was originally created to improve security in data transfer, because SSH is a data transfer medium using encryption media, SSH is intended for secure remote servers because it uses a cryptographic key to authorize connections on a remote server so that each connection connection to that server safe from possible hidden. While Tunneling is sending data through established connections. The purpose of this study is to analyze how the Secure Socket Shell Tunneling attack case on the Simcard Internet Service Provider. This method has been misused by people (Phreaker) with Tunneling techniques which use inject and certain applications to look for bugs on the Simcard card to access and use the internet illegally.</p>', '<p>Aloysius S Wicaksono, Glagah Seto S Katon (2015). Teknik Elektro FT UGM. Telnet dan SSH, Yogyakarta Bayu Arie Nugroho (2012), Analisis Keamanan Jaringan Pada Fasilitas Internet (Wifi) Terhadap Serangan Packet Sniffing, Universitas Muhammadiyah Surakarta Darwis Faisal Maulana, (2017). Slang Dalam Komunitas Peretas Jaringan Seluler Pada Forum Phreaker Indonesia Di Jejaring Media Sosial Facebook, Universitas Jember Ika Dwi Cahyani, (2008). Sistem Keamanan Enkripsi Secure Shell (Ssh) Untuk Keamanan Data, Universitas Pandanaran Semarang Muhammad Iqbal, (2008). Keamanan Remote Server Melalui Ssh Dengan Kriptosistem Simetris, Universitas Sumatera Utara Ramadhan Triyanto Prabowo, Mochamad Teguh Kurniawan, (2015). Analisis Dan Desain Keamanan Jaringan Komputer Dengan Metode Network Development Life Cycle (Studi Kasus : Universitas Telkom), Jurnal Rekayasa Sistem &amp; Industri Rifkie Primartha, (2018). Security Jaringan Komputer Berbasis Certified Ethical Hacker, Penerbit INFORMATIKA, bandung Rizal Andriansyah, (2015). Tinjauan Hukum Penggunaan Akses Internet Melalui Provider Telekomunikasi Seluler, Universitas Jember Sri Wahyuni S. (2016). Perlindungan Hukum Internet Service Provider Terhadap Penyalahgunaan Sistem Secure Socket Shell Oleh Pengguna Layanan Jasa Telekomunikasi, Universitas Hasanuddin Makassar Triadi Wirawan, (2012). Perbandingan metode pengamanan data pada SSL ( Secure Socket Layer ) dan SSH ( Secure Shell ) http://www.arisudibyo.com, (2015) Apa Itu Phreaker ?, (diakses pada Oktober 2018) http://www.checker.freeproxy.ru/checker/, (diakses pada Oktober 2018) https://www.facebook.com/forumssh (diakses pada Oktober 2018) https://web.facebook.com/groups/2428428824049424/, KPTunnelSSH, (diakses pada Oktober 2018) https://www.fastssh.com/ (diakses pada Oktober 2018) https://www.fastssh.com/page/host-to-ip (diakses pada Oktober 2018) http://gebangkiidiw.com/, (diakses pada Oktober 2018) https://www.hostinger.co.id/tutorial/cara-kerja-ssh/, (diakses pada Oktober 2018) http://www.httptunnel.ge/ProxyListForFree.aspx (diakses pada Oktober 2018) http://www.ilmuhacking.com, Rizki Wicaksono (2013) Kupas Tuntas SSH Tunneling, (diakses pada Oktober 2018) https://www.portchecker.us/host-to-ip (diakses pada Oktober 2018) https://sshdo.com/?do=ssh-servers&amp;filter=vpnssh (diakses pada Oktober 2018) https://blog.compactbyte.com/2016/02/02/ssh-tunneling-dan-internet-gratis/ (diakses pada Oktober 2018)</p>', 'upload/files/1566231484-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231484-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231484-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231484-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566231484-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'lengkap', 42, '2019-08-19 16:18:04'),
(28, 8, 'ANALISIS SMS FORENSIK KASUS PENIPUAN PADA SMARTPHONE SEBAGAI RUJUKAN MENGHADIRKAN BARANG BUKTI', 'VICKY GEMA LARENDA', 10, 2, '2019-06-26', '<p>Fraud often occurs through SMS. A few online media in Indonesia report fraud cases using SMS. Based on KOMINFO 2016\'s annual report on ICT global data development Index, ITU (International Telecommunication Union), which is an index used to measure digital inequalities within a country and between countries by comparing 11 indicators grouped into 3 clusters namely access (access), utilization (use), and ability (skill). From these data it can be concluded that in Indonesia, smartphone devices and cellular telephones are more widely used than internet and computer use. With the existence of fraud through SMS, handling digital evidence in the form of a smartphone is needed so that it can become legitimate digital evidence. The handling of evidence used the standard of the Department of Justice which consists of Preparation / Extraction, Identification, Analysis, and Report. Search of evidence using forensic tools namely Autopsy, WinHex, and Oxygen Forensic SQLite Viewer. The results of this study obtained digital evidence in the form of metadata and recovery from deleted SMS, phone numbers, and timestamp from SMS. By obtaining evidence of the SMS message, that the perpetrator was indeed committing fraud. Keywords: Fraud, SMS, Smartphone, Digital Evidence.</p>', '<p>Agarwal, A., Gupta, M., Gupta, S., &amp; Chandra Gupta, S. (2011). Systematic Digital Forensic Investigation Model. Gupta International Journal of Computer Science and Security, 5(1), 118&ndash;131. https://doi.org/10.1149/1.2992231 Al-azhar, M. N. (2012). DIGITAL FORENSIC: Panduan Praktis Investigasi Komputer. Salemba Infotek. anri. (2016). DIGITAL FORENSIK PENYELAMATAN INFORMASI DALAM ARSIP. ARSIP Media Kearsipan Nasional, 16&ndash;18. Butterfield, J., Tracy, M., Jansen, W., &amp; Karen, S. (2007). Guidelines on Electronic Mail Security Recommendations of the National Institute of Standards and Technology, 139. https://doi.org/10.1021/nl5045007 INDONESIA, R. (2008). UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 11 TAHUN 2008. Jones, G. M., &amp; Winster, S. G. (2017). Forensics Analysis On Smart Phones Using Mobile Forensics Tools. International Journal of Computational Intelligence Research, ISSN 0973-1873, 13(8), 1859&ndash;1869. KOMINFO. (2016). Laporan Tahunan Kementerian Komunikasi dan Informatika. Jakarta Pusat. Mahajan, A., Gudipaty, L., &amp; Dahiya, M. S. (2013). Identification of Fake SMS generated using Android Applications in Android Devices. International Journal of Scientific &amp; Engineering Research, ISSN 2229-5518, 4(9), 1894&ndash;1899. Mair, Z. R. (2015). MINI TOOL FORENSIK UNTUK SMARTPHONE ANDROID MENENTUKAN PROBABILITAS SPAM PADA PESAN PENDEK. Jurnal Teknologi Informatika Politeknik Sekayu (TIPS) ISSN-P 2407-2192, II(1), 41&ndash;52. Martin, A. (2008). SANS Instituted InfoSec Reading Room, Mobile Device Forensics. Sammons, J. (2015). THE BASICS OF DIGITAL FORENSIC The Primer for Getting Started in Digital Forensics. The Basics of Digital Forensics. https://doi.org/10.1016/B978-1-59749-661-2.00001-2 Sari, B. K. (2017). Desain Pembelajaran Model Addie Dan Implementasinya Dengan Teknik Jigsaw. Desain Pembelajaran Di Era ASEAN Economic Community (AEC) Untuk Pendidikan Indonesia Berkemajuan, 87&ndash;102. Sulianta, F. (2014) TEKNIK FORENSIK - Cara Jitu Mengatasi Problematika Komputer. Jakarta: PT. Elex Media Komputindo. Sunardi, Hari Murti, H. L. (2014). Aplikasi SMS Gateway. Jurnal Teknologi Informasi DINAMIK, XIV(1), 30&ndash;34. Retrieved from sunardi@unisbank.ac.id, harimurti@unisbank.ac.id, hersatoto@unisbank.ac.id Tim EMS. (2012). Panduan Cepat Pemrograman Android. (PT Elex Media Komputindo, Ed.) (1st ed.). Jakarta: PT Elex Media Komputindo. Uysal, A. K., Gunal, S., Ergin, S., &amp; Gunal, E. S. (2013). The Impact of Feature Extraction and Selection on SMS Spam Filtering. ELEKTRONIKA IR ELEKTROTECHNIKA ISSN 1392-1215, 19(5), 67&ndash;72. Yadi, I. Z., &amp; Kunang, Y. N. (2014). Analisis Forensik pada Platform Android. Konferensi Nasional Ilmu Komputer (KONIK) 2014 ISSN?: 2338-2899, 8. Yegireddi, R., Pavan, S., Gudla, K., Kumar, K., &amp; Tangudu, N. (2013). Enhancing the Integrity of Short Message Service ( SMS ) in New Generation Mobile Devices. IJCSI International Journal of Computer Science Issues. ISSN (Print):1694-0814 | ISSN (Online): 1694-0784, 10(6), 282&ndash;288.</p>', 'upload/files/1566316194-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316194-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316194-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316194-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316194-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 2, 'REVISI', 41, '2019-08-20 15:49:54'),
(29, 8, 'PENERAPAN FRAMEWORK INTEGRATED DIGITAL FORENSICS PROCESS MODEL (IDFPM) BERBASIS SNI 27037:2014 PADA PROSES INVESTIGASI LAPTOP', 'Taufik Maulana', 10, 9, '2019-06-19', '<p>In the year 2016, a report from the Directorate of criminal offence criminal reserse polri siber (Dirtipidsiber bareskrim) 603 as much about hacking and fraud cases e-commerce as well as the increase in the first quarter of the year 2017 as much as 124 case. Framework Integrated Digital Forensic Process Model (IDFPM) SNI-based 27037:2014 is a method of investigation forensic. By applying the framework which uses fraud cases airfreight diwebsite olx is expected to prove a framework with a forensic investigation. Based on the results of the implementation of the framework at the stage of digital forensic investigation can be run every function &ndash; function properly. Keywords : Fraud, Framework, Integrated Digital Forensic Process Model (IDFPM), SNI- based 27037:2014, Digital Forensic Investigation</p>', '<p>Agarwal, A. et al. (2011) &lsquo;Systematic Digital Forensic Investigation Model&rsquo;, International Journal of Computer Science and Security (IJCSS), 5. Brook, R. L. et al. (2014) &lsquo;Using the ADDIE Model to Create an Online Strength Training Program?: An Exploration ( Instru-ctional Design and Technology )&rsquo;. Danuri, M. and Suharnawi (2017) &lsquo;Trend Cyber Crime dan Teknologi Informasi di Indonesia&rsquo;, INFOKAM. Ieong, R. S. C. (2006) &lsquo;Forza - digital forensic investigation framework that incorporate(s) legal issues&rsquo;, Digital Investigation, 3, pp. 29&ndash;36. Indonesia, R. (2008) Undang Undang Republik Indonesia. Jakarta. Kohn, M. D., Eloff, M. M. and Eloff, J. H. P. (2013) &lsquo;Integrated digital forensic process model&rsquo;, Computers and Security. Elsevier Ltd, 38, pp. 103&ndash;115. doi: 10.1016/j.cose.2013.05.001. Marshall, A. M. and Paige, R. (2018) &lsquo;Requirements in Digital Forensics Method Definition: Observations From a UK Study&rsquo;. Muhammad Nuh Al-Azhar (2012) Digital Forensic: Panduan Praktis Investigasi Komputer. Jakarta: Salemba Infotek. Nasional, B. S. (2014) SNI 27037:2014 Tentang Teknologi Informasi - Teknik Keamanan - Pedoman Identifikasi, Pengumpulan, Akuisisi, dan Preservasi Bukti Digital. Jakarta. Ruuhwan, Riadi, I. and Prayudi, Y. (2016) &lsquo;Analisis Kelayakan Integrated Digital Forensics Investigation Framework Untuk Investigasi Smartphone&rsquo;, Jurnal Buana Informatika, 7. Ruuhwan, Riadi, I. and Prayudi, Y. (2016) &lsquo;Penerapan Integrated Digital Forensic Investigation Framework v2 (IDFIF) pada Proses Investigasi Smartphone&rsquo;. Scalet, S. D. (2005) How to Keep a Digital Chain of Custody, csoonline. Subli, M., Sugiantoro, B. and Prayudi, Y. (2017) &lsquo;Metadata Forensik Untuk Mendukung Proses Investigasi Digital&rsquo;, Jurnal DASI, 18. Sudyana, D., Prayudi, Y. and Sugiantoro, B. (2019) &lsquo;Analysis And Evalution Digital Forensic Investigation Framework Using ISO 27037:2012&rsquo;, International Journal of Cyber-Security and Digital Forensics (IJCSDF), 8. Sulianta, F. (2008) Komputer Forensik. Jakarta: PT Elex Media Komputindo. Sulianta, F. (2014) Teknik Forensik Cara Jitu Mengatasi Problematika Komputer. Jakarta: PT Elex Media Komputindo. Y.N, Stela Maria. (2017) &lsquo;Cek Fakta Maling Zaman Now Incar Transaksi Online&rsquo;. Indonesia: Liputan6.Com. Yudhistira, D. S. (2018) &lsquo;Metode Live Forensics Untuk Analisis Random Access Memory Pada Perangkat Laptop&rsquo;. Zatyko, K. (2007) &lsquo;Defining Digital Forensics&rsquo;, forensicmag.com.</p>', 'upload/files/1566316577-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316577-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316577-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316577-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316577-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'Lengkap', 40, '2019-08-20 15:56:17');
INSERT INTO `skripsi` (`id`, `kosentrasi`, `judul`, `penulis`, `pembimbing_1`, `pembimbing_2`, `tanggal_seminar`, `abstrak`, `daftar_pustaka`, `cover`, `bab_1`, `jurnal`, `dokumen`, `files`, `status`, `komentar`, `user_id`, `time_update`) VALUES
(30, 10, 'APPLICATION FOR INTRODUCTION OF HISTORICAL SITES IN THE CITY OF PEKANBARU WITH MARKERLESS AUGMENTED REALITY BASED ON ANDROID', 'HERI SETIAWAN', 2, 11, '2019-06-25', '<p>APPLICATION FOR INTRODUCTION OF HISTORICAL SITES IN THE CITY OF PEKANBARU WITH MARKERLESS AUGMENTED REALITY BASED ON ANDROID Historical sites are places or areas where there is information about historical relics. But in general there are not many people who know the historical sites in Indonesia, especially in the city of Pekanbaru. The lack of information media also lies behind the public\'s ignorance. Therefore we need media publications to introduce these historic sites, namely by using Android-based Augmented Reality Markerless technology. Making this application uses Blender software to create 3D objects and Unity3D software to create Augmented Reality applications. The purpose of this study is to help the public get to know the historical sites in the city of Pekanbaru by building interactive introduction media that can display photos and 3D objects from the site, it is hoped that people can more easily recognize and learn about historical sites in the city of Pekanbaru. Key word: Augmented Reality, Software, Markerless</p>', '<p>Abdurahman dan Ernawati. 2014. Rancang Bangun Aplikasi Informasi Universitas Bengkulu Sebagai Panduan Pengenalan Kampus Menggunakan Metode Markerless Augmented Reality. Bengkulu : Jurnal Teknik Informatika Vol.7 Aditya dan Damar. 2018. Rancang Bangun Aplikasi Android AR Museum Bali : Gedung Karangasem dan Gedung Tabanan. Bali : LONTAR KOMPUTER VOL.7 Anton dan Agung. 2018. Aplikasi Pengenalan Objek Wisata Sejarah Kota Tua Jakarta Berbasis Augmented Reality. Jakarta : Jurnal TEKNIKa Arief dan Padma. 2015. Pengembangan Aplikasi Sistem Informasi Pengenalan Visual Art Objek Di Kota Singaraja Berbasis Markerless Augmented Reality. Bali : KARMAPATI Arsyad dan Azhar. 2007. Media Pembelajaran. Jakarta : PT.Raja Grafindo Persada. Azhar, N. F., Cahyono, E. B., &amp; Wicaksono, G. W. (2014). Pemanfaatan Augmented Reality Untuk Game Ranger Target Berbasis Android. Azuma, Ronald T. 1997. A Surve y of Augmented Reality. Hughes Research Laboratories. Malibu Bayu, Rezha. 2015. Pengenalan Kebudayaan Papua Dengan Augmented Reality Berbasis Android. Surakarta : Naskah Publikasi Dinas Kebudayaan Dan Pariwisata. 2018. Laporan Pendataan Cagar Budaya Kota Pekanbaru. Pekanbaru : Dinas Kebudayaan Dan Pariwisata Firdaus dan Ovi. 2018. Pemanfaatan Augmented Reality Untuk Pengenalan Landmark Pariwisata Kota Surakarta. Surakarta : Jurnal TEKNOINFO ISSN 1693-0010 Gusman dan Meyti. 2016. Analisis Pemanfaatan Metode Markerless User Defined Target Pada Augmented Reality Sholat Shubuh. Batam : Jurnal Infotel ISSN : 2085-3688 I Putu dan I Ketut. 2017. Pengembangan Aplikasi Augmented Reality Markerless Teknik Dasar Prenatal Yoga. Bali : SENAPATI Kadek dan Padma. 2015. Pengembangan Aplikasi Pengenalan Bunga Raya Eka Karya Bali Berbasis Markerless Augmented Reality. Bali : KARMAPATI Kadir, Abdul. 2011. Mudah Menjadi Programmer Java. Yogyakarta: Andi Naughton, Patrick. 1996. Java Handbook. Diterjemahkan oleh : Panji Gotama. Yogyakarta: Andi Nazruddin Safaat H. 2012. Pemograman Aplikasi Mobile Smartphone dan Tablet PC Berbasis Android. Bandung : Informatika Putu dan Gede. 2017. Pengembangan Aplikasi Augmented Reality Markerless Teknik Dasar Olahraga Bulu Tangkis. Bali : KARMAPATI Rahadi dan Tursina. 2017. Rancang Bangun Aplikasi Augmented Reality Berbasis Android Untuk Pengenalan Rumah Adat Kalimantan Barat. Pontianak : Jurnal Sistem dan Teknologi Informasi Randi dan Alicia. 2017. Pengenalan Teks pada Objek-Objek Wisata di Sulawesi Utara dengan Teknologi Augmented Reality. Sulawesi Utara : E-Journal Teknik Informatika Randy dan Meyti. 2016. &ldquo;Analisis Pemanfaatan Metode Markerless User Defined Target Pada Augmented Reality Sholat Shubuh&rdquo;. Batam : Jurnal Infotel Saputra Yoga. 2014. Implementasi Augmented Reality Pada Fosil Purbakala di Museum Geologi Bandung. Bandung : Jurnal Ilmiah Komputer dan Informatika Sessa, Carlos. 2013. 50 Android Hacks. New York : Manning</p>', 'upload/files/1566316899-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316899-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316899-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316899-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566316899-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 2, 'REVISI', 39, '2019-08-20 16:01:39'),
(31, 11, 'IMPLEMENTATION APPLICATION EMPLOYEE LEAVE BASED OF ANDROID USE IONIC FRAMEWORK IN PT. ENERGI SEJAHTERA MAS', 'Rio sandirela', 1, 13, '2019-06-26', '<p>The process of submitting leave at PT. Energi Sejahtera Mas is currently still done manually, namely filling in the form for filing leave, requesting approval in stages and inputting data is still done manually by Personalia. This certainly has several weaknesses such as the length of time for filing leave and lack of information about the remaining leave, leave history and colleagues who will take time off. Moreover, the Personalia in recapping employee leave reports still use Excel as a data source, of course there will be errors in inputting employee leave data. This study discusses about implementing an android based leave application using ionic framework at PT. Energi Sejahtera Mas. This study uses the SDLC (System Development Life Cycle) system development method. The results of this study show that android based employee leave application using ionic framework can make the process of filing leave easier, shorter, can be done outside working hours, and facilitate the leader in knowing information on filing leave and employees who take leave at PT. Energi Sejahtera Mas.</p>', '<p>A.S, R., &amp; M.Shalahuddin. (2013). Rekayasa Perangkat Lunak Terstruktur Dan Berorientasi Objek. Bandung: Informatika. Enterprise, J. (2015). Mengenal Dasar-Dasar Pemrograman Android. Jakarta: Elex Media Komputindo. Gata, W. (2013). Sukses Membangun Aplikasi Penjualan dengan JAVA. Jakarta: Elex Media Komputindo. Hartono, B. (2013). Sistem Informasi Manajemen Berbasis Komputer. Jakarta: Rineka Cipta. Ibisa. (2010). Evaluasi Paket Sistem Aplikasi?: Sistem Aplikasi dan Auditing Sistem Aplikasi bagi Perusahaan. Yogyakarta: Penerbit Andi. International Data Corporation. (2017). Smartphone OS Marketshare. Diambil 7 September 2018, dari https://www.idc.com/promo/smartphone-market-share/os Ladjamudin, A.-B. Bin. (2013). Analisis dan Desain Sistem Informasi. Yogyakarta: Graha Ilmu. Republik Indonesia. (2003). UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 13 TAHUN 2013 TENTANG KETENAGAKERJAAN. Jakarta. Santoso, H. (2010). Aplikasi Web/ASP.Net + CD. Jakarta: Elex Media Komputindo. Shelly, G., &amp; Vermaat, M. (2008). Discovering Computers 2009: Complete. Massachusetts, US: Cengage Learning. Sutarman. (2012). Buku Pengantar Teknologi Informasi. Jakarta: Bumi Aksara. Yakub. (2012). Pengantar Sistem Informasi. Yogyakarta: Graha Ilmu. Yuhefizar. (2012). CMM Website Interaktif MCMS Joomla(CMS). Jakarta: Elex Media Komputindo. Yusuf, S. (2016). Ionic Framework By Example. Birmingham, UK: Packt Publishing.</p>', 'upload/files/1566317394-cover-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566317394-bab-1-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566317394-jurnal-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566317394-skripsi-JADWAL-SKRIPSI-3-Agustus-2019.pdf', 'upload/files/1566317394-aplikasi-1565836322-aplikasi-refnal-sticker.zip', 3, 'LENGKAP', 38, '2019-08-20 16:09:54'),
(32, 12, 'ANALISIS SENTIMEN MASYARAKAT PADA PEMERINTAHAN YANG SEDANG BERJALAN TERHADAP PILPRES 2019 DI TWITTER MENGGUNAKAN ALGORITME NAÏVE  BAYES', 'agung jefrianto anggrawan', 13, 1, '2019-06-26', '<p>The general election about the 2019 Presidential Election became one of the most lively topics discussed on Twitter. Opinions from each community contain opinions on the candidate pair in the background. This study predicts public sentiment to the pairs of candidates for President and Vice President of the Republic of Indonesia. The data obtained is a tweet on the keyword @jokowi. Retrieving data using the Tweepy library with the Python 2.7 programming language was conducted on July 27 and September 4, 2018. This study divided sentiments into 2 classes, namely positive and negative Labeling was done manually then modeling using the Na&iuml;ve Bayes method on the Weka Application. Modeling uses a dataset of 646 sentences. The results showed that accuracy had the highest results with an accuracy of 81.4%, precision 81.5%, Recall 81.3% with a time of 0.72 s using Weighting N-gram (1-2). Based on this level of accuracy so that the dataset can be categorized as positive. Keywords: classification, Na&iuml;ve Bayes, 2019 presidential election, Twitter</p>', '<p>Adhiatma, F.N., dkk. 2016, Perancangan dan Analisis Clustering Data Menggunakan Metode Single Linkage Untuk Berita Berbahasa Inggris, e-Proceeding of Engineering, No.2, Vol.3,hlm 2285-2291. Alfina, I., dkk., 2017, Hate Speech Detection in the Indonesian Language : A Dataset and Preliminary Study, in Proceeding of 9th International Conference on Advanced Computer Science and Information Systems 2017. ICACSIS). Aksenova, Svetlana S. 2004. Mechine Learning with WEKA &ndash; WEKA Tutorial &ndash; Explore Tutorial for WEKA Version 3.4.3. California:California State University. Afshoh, Fauziah., 2017, Analisa Sentimen Menggunakan Na&iuml;ve Bayes Untuk Melihat Persepsi Masyarakat Terhadap Kenaikan Harga Jual Rokok Pada Media Sosial Twitter. Surakarta : Universitas Muhammadiyah Surakarta. Apriana. P.K, dkk. 2017. Sistem Temu Kembali Informasi Penerapan Tokenisasi, Stopword Removal &amp; Stemmin. Semarang : Universitas Stikubank Semarang. Basuki, Sulistyo. 1991. Pengantar Ilmu Perpustakaan. PT Gramedia Pustaka Utama: Jakarta. Budi, Agus Setia. Klarifikasi Opini Green And Clean Kabupaten Lamongan menggunakan Algoritma Multinomial Na&iuml;ve Bayes. Lamongan : Universitas Islam Lamongan, 2018. Buntoro, G.A., 2016, Analisis Sentimen Hatespeech Pada Twitter Dengan Metode Na&iuml;ve Bayes Classifier dan Support Vector Machine, Jurnal Dinamika Informatika, Nomor 2, Volume 5. Berry, M.W. &amp; Kogan, J. 2010. Text Minning Aplication and theory. Wiley : United Kongdom. Feldman, R, &amp; Sanger J.2007. Text Minning Handbook : Advanced Approaches in Analyzing Unstructure Data. New York : Cambridge University Press. Garcia, E., Dr. (2005). Document Indexing Tutorial, http://www.miislita.com/informationretrieval-tutorial/indexing.html, diakses pada tanggal 10 November 2018. Handoyo, R., dkk., 2014, Perbandingan Metode Clustering Menggunakan Metode Single Linkage Dan K - Means Pada Pengelompokan Dokumen, Universitas Telkom, Bandung. Hidayatullah, A.F. &amp; Azhari, S.N. 2014. Analisis sentimen dan Klasifikasi Kategori Terhadap Tokoh Publik pada Twitter. Yogyakarta : Univesitas Islam Indonesia. ISSN : 1979-2328. Han, J, Kamber, M, &amp; Pei, J. 2006. Data Mining: Concept and Techniques, Second Edition. Waltham: Morgan Kaufmann Publishers. Kristanto, Andri. 2008. Perancangan Sistem Informasi dan Aplikasinya. Yogyakarta: Gava media. Kusuma, Abdi Pandu dkk. 2016. Sistem Pencarian Catalog Buku Menggunakan Metode Na&iuml;ve Bayes Classifier (NBC) Pada Aplikasi Mulia-Bookstore Berbasis Android. Universitas Islam Balitar. Nurhuda, Faishol dkk., 2013. Analisa Sentimen Masyarakat terhadap Calon Presiden 2014 Berdasarkan Opini dari Twitter menggunakan Algoritma Naive Bayes. Surakarta : Univesitas Sebelas Maret. Pak A, Paroubek P. [internet] Twitter as a corpus for sentiment analysis and opinion mining. [diakses 2018 Juli]. Universit&acute;e de Paris-Sud, Tersedia pada: http://crowdsourcing-class.org/assignments/downloads/pak-paroubek.pdf. Purnamawan, I K., 2015, Support Vector Machine Pada Information Retrieval, JPTK, UNDIKSHA, No. 2, Vol. 12, hal. 173-180. Raharjo, A.B. &amp; Quafafou, M., 2015, Penggabungan Keputusan Pada Klasifikasi Multi-Label, JUTI , Volume 13, Nomor 1, hal 12-23. Rasyadi, M. Hadiyan. 2017, Analisis Sentimen Pada Twitter Menggunakan Metode Na&iuml;ve Bayes(Studi Kasus Pemilihan Gubernur DKI Jakarta 2017). Bogor. Institut Pertanian Bogor. Rosmala, Dewi &amp; Dwipa L, Gadya. 2012. Penggunaan Website Content Monitoring System Menggunakan Difflib Phyton. Jurnal Informatika No. 03 Vol. 03 September-Desember 2012. Soebandriya, K.E. Nugroho &amp; Sutanto, E. Sutisno, 2013, Analisis Distribution Center Pada PT. Anugrah Argon Medica Dengan Pendekatan Tata Letak Dan Fasilitas. Jakarta : Univesrtas Bina Nusantara. Saleh, Alfa. 2015. Implementasi Metode Klasifikasi Na&iuml;ve Bayes Dalam Memprediksi Besarnya Penggunaan Listrik Rumah Tangga. Universitas Potensi Utama. Saputra, Nurirwan. 2015. Analisis Sentimen data Presiden Jokowi dengan Preprocessing Normalisasi dan Stemming menggunakan Metode Na&iuml;ve Bayes dan SVM. Jurnal Dinamika Informatika. Volume 5, Nomor 1, November 2015. Singhal, Swasti &amp; M. Jena. 2013. A Study on WEKA Tool for Data Preprocessing Classification and Clustering. International Journal of Innovative Technology and Exploring Engineering (IJITEE), Vol. 2 Issue 6. Sukamto, Rosa Ariani. 2009. Langkah-langkah Pengujian Perangkat dan Evaluasi Piranti Lunak. diakses pada tanggal Desember 2018. Sunni, Ismail &amp; Widyantoro, D.H. 2012. Analisis Sentiment dan Ekstraksi Topik Penentu Sentimen pada Opini Terhadap Tokoh Publik. Jurnal Sarjana Institut Teknologi Bandung Bidang Teknik Elektro dan Informatika, Volume 1, Number 2, Juli 2012. Taufik. 2018. https://develpop.com/2018/08/15/metode-machine-learning-paling-populer/. Diakses pada Desember 2018. Tulach. 2008. Practical API Design: Confessions of a Java Framework Architect. Apress. Wenando, F. A., dkk., 2017, Text Classification to Detect Student Level of Understanding in Prior Knowledge Activation Process, Adv. Sci. Lett., Vol. 23, no. 3, pp. 2285&ndash;2287. Wibowo, Antoni. Klasifikasi, Binus University Graduate Program Master Program. 24 November 2017. Tersedia pada : https://mti.binus.ac.id/2017/11/24/klasifikasi/. Diakses pada 10 Agustus 2018. Witten, Ian H, Frank, Eibe, &amp; Hal, M.A. 2011. Data Mining: Pratical Machine Learning Tools and Techniques, Third Edition. Burlington: Morgan Kaufmann Publishers.</p>', 'upload/files/1566719167-cover-COVER.pdf', 'upload/files/1566719167-bab-1-COVER.pdf', 'upload/files/1566719167-jurnal-COVER.pdf', 'upload/files/1566719167-skripsi-COVER.pdf', 'upload/files/1566719167-aplikasi-APLIKASI.zip', 0, 'Revisi', 37, '2019-08-24 10:02:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'superadmin', '$2y$08$zILW7aqa.lyPC/FSTihnyOPZoyLZtY1aPl01WTBbBd1yM3sVMVoIG', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1601299618, 1, 'Super', 'Admin', NULL, '0'),
(32, '::1', '10101010', '$2y$08$CrN5gg4fuMDe2Trzh5OGdeaFVGMGuhHUPgqgEak92JRQYJdAxyc4.', NULL, 'iyes37445043@gmail.com', NULL, NULL, NULL, NULL, 1565012226, 1566716838, 1, 'abdullah siregar', '', 'UMRI', '897897999'),
(33, '::1', 'Admin', '$2y$08$G8G/3l2n.uzUbGf1zfjC2ugRJv.CW6cs3n6Wq79Ji5msMg0qUxcPu', NULL, 'pustaka@umri.ac.com', NULL, NULL, NULL, NULL, 1565918440, 1601299128, 1, 'ad', 'min', NULL, '08080808'),
(34, '180.241.244.244', '130401021', '$2y$08$IbFMW0LFQT27rPxOqD9IAOkubUb4LHCArw0uAbM1g7S6DfH7dzxIe', NULL, 'gigihsetyaji@gmail.com', NULL, NULL, NULL, NULL, 1566192524, NULL, 1, 'Gigih Setyaji', '', 'UMRI', '1234548588'),
(35, '180.241.244.244', '150401131', '$2y$08$8UUtMtFEqG0TXt0I3N6CfO803eMNiVQVSYKWQkulvcmH8l.8UgETW', NULL, '150401131@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566192632, NULL, 1, 'Abdurrahman', '', 'UMRI', '123456888'),
(36, '112.215.175.197', '120401159', '$2y$08$MbG0wwHLfwSqYlxVMraWD.dZOMRDwgZseTLdvaYNa0pl/Een7XMeO', NULL, 'fazrulazmi12@gmail.com', NULL, NULL, NULL, NULL, 1566208314, NULL, 1, 'Fazrul azmi septian', '', 'UMRI', '1236777'),
(37, '112.215.175.197', '120401092', '$2y$08$ZaVu5p9vYOXgb7N35mkp9.w2C3ERmnGBIVEacp/vzqecIXrQb5cQi', NULL, 'agungjefri88@gmail.com', NULL, NULL, NULL, NULL, 1566208391, 1566750436, 1, 'agung jefrianto anggrawan', '', 'UMRI', '1245678899'),
(38, '112.215.175.197', '110401031', '$2y$08$ObAbx0kME/OpO.4VLYmQ9eKv6Wgp8JBWqj6Dj4hE3uwyHWh7JR2Ny', NULL, 'sandirela.sandirela.rio@gmail.com', NULL, NULL, NULL, NULL, 1566208467, 1566385677, 1, 'Rio sandirela', '', 'UMRI', '3156267272'),
(39, '112.215.175.197', '140401061', '$2y$08$hiCU8UEc9wZrE5h1eOUy3euFrGcAbcV6r5UqpaC4Pnkj.QFWXqUvm', NULL, 'herisetiawan@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566208567, 1566385848, 1, 'Heri setiawan', '', 'UMRI', '567377373737'),
(40, '112.215.175.197', '120401065', '$2y$08$VlhuwnonJjpQByoU5zDVZO.q.9S7tdrj7fWhj0e/NrtWrBrEfezo.', NULL, 'taufik.maulana@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566208650, 1566316230, 1, 'Taufik Maulana', '', 'UMRI', '63773737838'),
(41, '112.215.175.197', '120401030', '$2y$08$KpwVfJ7wTjQz62miJB/q7eQj/0SjPKMbIj2uQEut/kAi4DOklY3ue', NULL, 'larendavicky@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566208775, 1566315905, 1, 'Vicky Gema Larenda', '', 'UMRI', '6378484838'),
(42, '112.215.175.197', '130401007', '$2y$08$J2C0TKqspdFJcU7CALxJ.O/MGyjqNpYMnRvoe3JuCAklEyVETxSlS', NULL, 'alfiowansyah@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209054, 1566273249, 1, 'Alvio Wansyah', '', 'UMRI', '6277373883'),
(43, '112.215.175.197', '110401072', '$2y$08$bW.vPtS6DfM2IXVBnK9Fz.QhcSqcPnB43/1VQ6u0Rnq8J.l/gZMWG', NULL, 'fidyanf2@gmail.com', NULL, NULL, NULL, NULL, 1566209107, 1566717606, 1, 'Fithyan fadhla', '', 'UMRI', '63883737377'),
(44, '112.215.175.197', '120401059', '$2y$08$nIhwXM7Noqcl.XwDw3ge7ucLCLmZyX66s1.FUF/VKL2Q8QJ7hrVpe', NULL, 'heru@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209173, 1566230565, 1, 'Heru oktavian dani', '', 'UMRI', '120401059'),
(45, '112.215.175.197', '130401056', '$2y$08$3P9dEiGQljFjbKly2VEZiODLujIRVp5bvy0T5ntVNaQcrOXI5yX7O', NULL, 'faldadimantara@gmail.com', NULL, NULL, NULL, NULL, 1566209243, 1600962364, 1, 'falda dimantara', '', 'UMRI', '130401056'),
(46, '112.215.175.197', '120401118', '$2y$08$Ck6pKnleE8LmUDS50BcrB.JFrCPMp.o.zciT36tP6SCpIpEuT4W6u', NULL, 'w.bayu.sy@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209308, 1566229052, 1, 'Wardana Bayu Syahputra', '', 'UMRI', '12041118'),
(47, '112.215.175.197', '140401160', '$2y$08$6CGjjG7OTWZ5Wgp1iJbwUONS3o8zMZRH0AVN10jMvPTyx2XYnme1.', NULL, 'fitratulhayat@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209359, 1566228665, 1, 'Fitratul Hayat', '', 'UMRI', '140401160'),
(48, '112.215.175.197', '120401011', '$2y$08$4Wxb2qypfiFI9EPERYbccejvx4lUSz3FVhjn/9IqdmMNUaO/iC.qK', NULL, 'tkjoneadie@gmail.com', NULL, NULL, NULL, NULL, 1566209413, 1566228362, 1, 'Adi Arnika', '', 'UMRI', '120401011'),
(49, '112.215.175.197', '120401014', '$2y$08$zxpvhtwq34y1dYrFQYdkn.9q9UMw8p26OUZ/P4PbvXg9ugrShwNmu', NULL, 'resi@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209474, 1566227025, 1, 'Maskuri Resiasa', '', 'UMRI', '120401014'),
(50, '112.215.175.197', '150401146', '$2y$08$8fYTgaHJxkR14z2z.8eKw.RHf.KKMVVFh7wobh8m8gPEoNts6ftA6', NULL, '150401146@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209520, 1566226583, 1, 'Dede Mulyono', '', 'UMRI', '150401146'),
(51, '112.215.175.197', '130401048', '$2y$08$AhMNyKYdgWIUc4z90TA2zepnJKxhyn0twKbw9vngPw1Kl6JLWU/hG', NULL, 'jakok.gundara@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209575, 1566225456, 1, 'Jakok gundara', '', 'UMRI', '130401048'),
(52, '112.215.175.197', '140401122', '$2y$08$0fVUlpxSUzgAKBOn2X9qWehM9RKtqNvIBcjf4MH6aWmlcX4K9R4OG', NULL, 'kiddarii@gmail.com', NULL, NULL, NULL, NULL, 1566209626, 1601299665, 1, 'Hari Iskandar', '', 'UMRI', '140401122'),
(53, '112.215.175.197', '140401056', '$2y$08$YMZGvXKLl/xfuj28lNxlYOz1JBK6YeVdhNAPKMbu1ITk1tUTK7k8m', NULL, 'randipranata2@gmail.com', NULL, NULL, NULL, NULL, 1566209680, 1566224882, 1, 'Randi Pranata Putra', '', 'UMRI', '140401056'),
(54, '112.215.175.197', '130401028', '$2y$08$A7ACpdUqgIJ99iiozX08quHCFSkEV0BLjLMezBlt9vKTOxAgWkBV.', NULL, 'vhan21895@gmail.com', NULL, NULL, NULL, NULL, 1566209733, 1566224501, 1, 'Ivan A Pohan', '', 'UMRI', '130401028'),
(55, '112.215.175.197', '130401101', '$2y$08$g5HGYI/kAT7ewXA5LPoKduWh4mLWYnzRb8nWCv086jzqA7DdbX6Zy', NULL, 'rismashafriyani@gmail.com', NULL, NULL, NULL, NULL, 1566209797, 1566224214, 1, 'Risma Shafriyani', '', 'UMRI', '130401101'),
(56, '112.215.175.197', '140401062', '$2y$08$8mK6iGwRkK/NOJFpHarf0enwdkyjpacr0gc2q2V4INujFnzOGijNa', NULL, 'danieladiputra@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209853, 1566223895, 1, 'daniel adi putra sitorus', '', 'UMRI', '140401062'),
(57, '112.215.175.197', '120401026', '$2y$08$pAdEHfgjEhkJys6aAWlf3OCI2PNszqtVZmXHyzbMNw8f.mEny/Wgi', NULL, 'apriansyah@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566209918, 1566223594, 1, 'apriansyah', '', 'UMRI', '120401026'),
(58, '112.215.175.197', '120401017', '$2y$08$TfdOmAwOI6r66K4qiQ8ANOntNG4D2yosI/V4Yk1qav4shptPo2Y2G', NULL, 'rikiharianto14@gmail.com', NULL, NULL, NULL, NULL, 1566209971, 1600961758, 1, 'Riki Harianto', '', 'UMRI', '120401017'),
(59, '112.215.175.197', '140401008', '$2y$08$Y/zbryW724gir.qncSeotOD0ydcQ1fEtWQpsZhVCdkoSlyh0pcBcu', NULL, 'saifulanwar@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566210043, 1566222623, 1, 'SAIFUL ANWAR', '', 'UMRI', '140401008'),
(60, '112.215.175.197', '140401051', '$2y$08$go1V.9Hc3333LvMqOfyaauQeFl3qHM.zbBOyyPjNI5vMS4a7WrQna', NULL, 'imamuddin@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566210106, 1566222280, 1, 'IMAMUDDIN', '', 'UMRI', '140401051'),
(61, '112.215.175.197', '130401131', '$2y$08$Osr9GFJtTq3kXQt/t2OSfOTEF6c2PPz0tyAoIjdXEB/fvLOPN4UJK', NULL, 'halimulhakim@student.umri.ac.id', NULL, NULL, NULL, NULL, 1566210206, 1566384422, 1, 'Halimul Hakim', '', 'UMRI', '130401131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(67, 1, 1),
(37, 32, 5),
(68, 33, 3),
(39, 34, 5),
(40, 35, 5),
(41, 36, 5),
(42, 37, 5),
(43, 38, 5),
(44, 39, 5),
(45, 40, 5),
(46, 41, 5),
(47, 42, 5),
(48, 43, 5),
(49, 44, 5),
(50, 45, 5),
(51, 46, 5),
(52, 47, 5),
(53, 48, 5),
(54, 49, 5),
(55, 50, 5),
(56, 51, 5),
(57, 52, 5),
(58, 53, 5),
(59, 54, 5),
(60, 55, 5),
(61, 56, 5),
(62, 57, 5),
(63, 58, 5),
(64, 59, 5),
(65, 60, 5),
(66, 61, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banned`
--
ALTER TABLE `banned`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerja_praktek`
--
ALTER TABLE `kerja_praktek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kosentrasi`
--
ALTER TABLE `kosentrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `notivikasi`
--
ALTER TABLE `notivikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rat`
--
ALTER TABLE `rat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banned`
--
ALTER TABLE `banned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kerja_praktek`
--
ALTER TABLE `kerja_praktek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kosentrasi`
--
ALTER TABLE `kosentrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `notivikasi`
--
ALTER TABLE `notivikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `rat`
--
ALTER TABLE `rat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=614;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
