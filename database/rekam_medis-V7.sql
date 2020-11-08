-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2020 pada 15.00
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
-- Database: `rekam_medis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_pasien_masuk` int(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `tgl_buat` date NOT NULL DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `tahun_buat` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien_masuk`, `nama_penyakit`, `tindakan`, `nama_obat`, `tgl_buat`, `bulan_buat`, `tahun_buat`) VALUES
(17, 24, 'tipess', 'perawatans', 'penurun panass', '2020-10-26', '10', 2020),
(18, 26, 'flu', 'perawatan', 'penurun panas', '2020-10-26', '10', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama`) VALUES
(1, 'VVIP'),
(2, 'VIP'),
(3, 'Kelas 1'),
(4, 'Kelas 2'),
(5, 'Kelas 3'),
(6, 'Kelas Asuransi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nomor_ruangan`
--

CREATE TABLE `nomor_ruangan` (
  `id_nomor_ruangan` int(10) NOT NULL,
  `id_ruangan` int(10) NOT NULL,
  `nomor_ruangan` char(3) NOT NULL,
  `status_ruangan` enum('null','Diisi','Kosong','Booking','Booked','pas') NOT NULL DEFAULT 'Kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nomor_ruangan`
--

INSERT INTO `nomor_ruangan` (`id_nomor_ruangan`, `id_ruangan`, `nomor_ruangan`, `status_ruangan`) VALUES
(10, 13, '1', 'Kosong'),
(11, 13, '2', 'Kosong'),
(12, 15, '1', 'Kosong'),
(13, 15, '2', 'Kosong'),
(14, 14, '1', 'Diisi'),
(15, 14, '2', 'Kosong'),
(16, 16, '1', 'Kosong'),
(17, 16, '2', 'Kosong'),
(18, 16, '3', 'Diisi'),
(19, 17, '1', 'Kosong'),
(20, 17, '2', 'Kosong'),
(21, 17, '3', 'Kosong'),
(22, 18, '1', 'Kosong'),
(23, 18, '2', 'Diisi'),
(24, 18, '3', 'Kosong'),
(25, 18, '4', 'Booked'),
(26, 18, '5', 'Kosong'),
(27, 19, '1', 'Kosong'),
(28, 19, '2', 'Kosong'),
(29, 19, '3', 'Kosong'),
(30, 19, '4', 'Kosong'),
(31, 19, '5', 'Kosong'),
(32, 20, '1', 'Kosong'),
(33, 20, '2', 'Kosong'),
(34, 20, '3', 'Kosong'),
(35, 20, '4', 'Kosong'),
(36, 20, '5', 'Kosong'),
(37, 21, '1', 'Kosong'),
(38, 21, '2', 'Kosong'),
(39, 21, '3', 'Kosong'),
(40, 21, '4', 'Kosong'),
(41, 21, '5', 'Kosong'),
(42, 21, '6', 'Kosong'),
(43, 21, '7', 'Kosong'),
(44, 21, '8', 'Kosong'),
(45, 21, '9', 'Kosong'),
(46, 21, '10', 'Kosong'),
(47, 22, '1', 'Kosong'),
(48, 22, '2', 'Kosong'),
(49, 22, '3', 'Kosong'),
(50, 22, '4', 'Kosong'),
(51, 22, '5', 'Kosong'),
(52, 22, '6', 'Kosong'),
(53, 22, '7', 'Kosong'),
(54, 22, '8', 'Kosong'),
(55, 22, '9', 'Kosong'),
(56, 22, '10', 'Kosong'),
(57, 23, '1', 'Kosong'),
(58, 23, '2', 'Kosong'),
(59, 23, '3', 'Kosong'),
(60, 23, '4', 'Kosong'),
(61, 23, '5', 'Kosong'),
(62, 23, '6', 'Kosong'),
(63, 23, '7', 'Kosong'),
(64, 23, '8', 'Kosong'),
(65, 23, '9', 'Kosong'),
(66, 23, '10', 'Kosong'),
(67, 24, '1', 'Kosong'),
(68, 24, '2', 'Kosong'),
(69, 24, '3', 'Kosong'),
(70, 24, '4', 'Kosong'),
(71, 24, '5', 'Kosong'),
(72, 24, '6', 'Kosong'),
(73, 24, '7', 'Kosong'),
(74, 24, '8', 'Kosong'),
(75, 24, '9', 'Kosong'),
(76, 24, '10', 'Kosong'),
(77, 25, '1', 'Kosong'),
(78, 25, '2', 'Kosong'),
(79, 25, '3', 'Kosong'),
(80, 25, '4', 'Kosong'),
(81, 25, '5', 'Kosong'),
(82, 25, '6', 'Kosong'),
(83, 25, '7', 'Kosong'),
(84, 25, '8', 'Kosong'),
(85, 25, '9', 'Kosong'),
(86, 25, '10', 'Kosong'),
(87, 26, '1', 'Kosong'),
(88, 26, '2', 'Kosong'),
(89, 26, '3', 'Kosong'),
(90, 26, '4', 'Kosong'),
(91, 26, '5', 'Kosong'),
(92, 26, '6', 'Kosong'),
(93, 26, '7', 'Kosong'),
(94, 26, '8', 'Kosong'),
(95, 26, '9', 'Kosong'),
(96, 26, '10', 'Kosong'),
(97, 27, '1', 'Kosong'),
(98, 27, '2', 'Kosong'),
(99, 27, '3', 'Kosong'),
(100, 27, '4', 'Kosong'),
(101, 27, '5', 'Kosong'),
(102, 27, '6', 'Kosong'),
(103, 27, '7', 'Kosong'),
(104, 27, '8', 'Kosong'),
(105, 27, '9', 'Kosong'),
(106, 27, '10', 'Kosong'),
(107, 28, '1', 'Kosong'),
(108, 28, '2', 'Kosong'),
(109, 28, '3', 'Kosong'),
(110, 28, '4', 'Kosong'),
(111, 28, '5', 'Kosong'),
(112, 28, '6', 'Kosong'),
(113, 28, '7', 'Kosong'),
(114, 28, '8', 'Kosong'),
(115, 28, '9', 'Kosong'),
(116, 28, '10', 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_keluar`
--

CREATE TABLE `pasien_keluar` (
  `id_pasien_keluar` int(10) NOT NULL,
  `id_pasien_masuk` int(10) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kondisi_keluar` enum('Sehat','Belum Sehat','Meninggal') NOT NULL,
  `status_pulang` enum('Dipulangkan','Pulang Paksa') NOT NULL,
  `tgl_buat` date NOT NULL DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `tahun_buat` year(4) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_keluar`
--

INSERT INTO `pasien_keluar` (`id_pasien_keluar`, `id_pasien_masuk`, `tanggal_keluar`, `kondisi_keluar`, `status_pulang`, `tgl_buat`, `bulan_buat`, `tahun_buat`) VALUES
(11, 24, '2020-10-26 14:48:59', 'Belum Sehat', 'Dipulangkan', '2020-10-26', '10', 2020),
(14, 26, '2020-11-02 12:24:09', 'Sehat', 'Dipulangkan', '2020-11-02', '1', 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_masuk`
--

CREATE TABLE `pasien_masuk` (
  `id_pasien_masuk` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_nomor_ruangan` int(11) NOT NULL,
  `nomor_rekam_medis` varchar(20) NOT NULL DEFAULT 'IB1234-',
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan_pasien` varchar(100) NOT NULL,
  `tgl_buat` date DEFAULT current_timestamp(),
  `tahun_buat` year(4) DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL,
  `status_input` enum('pas','rek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_masuk`
--

INSERT INTO `pasien_masuk` (`id_pasien_masuk`, `id_pasien`, `id_nomor_ruangan`, `nomor_rekam_medis`, `tanggal_masuk`, `keterangan_pasien`, `tgl_buat`, `tahun_buat`, `bulan_buat`, `status_input`) VALUES
(24, 11, 10, 'IB12345-1', '2020-11-01 15:26:14', 'flu', '2020-10-26', 2020, '10', 'rek'),
(26, 11, 14, 'IB12345-2', '2020-11-01 15:26:16', 'cccccccc', '2020-10-26', 2020, '10', 'rek'),
(30, 11, 18, 'IB12345-3', '2020-11-01 14:39:11', 'flu', '2020-11-01', 2020, '11', 'pas'),
(38, 31, 16, 'IB12345-4', '2020-11-01 16:19:17', 'sssssssss', '2020-11-01', 2020, '11', 'rek'),
(39, 34, 23, 'IB12345-5', '2020-11-01 16:28:42', 'pilek', '2020-11-01', 2020, '11', 'pas'),
(40, 34, 25, 'IB12345-6', '2020-11-01 16:31:58', 'ssssssssss', '2020-11-01', 2020, '11', 'pas'),
(41, 34, 21, 'IB12345-7', '2020-11-01 17:00:37', 'buhbuub', '2020-11-02', 2020, '11', 'pas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `id_kelas`, `nama_ruangan`) VALUES
(13, 1, 'Anggrek'),
(14, 2, 'Mawar'),
(15, 2, 'Anggrek 2'),
(16, 3, 'Mawar 2'),
(17, 3, 'Melati 2'),
(18, 4, 'Melati 3'),
(19, 4, 'Mawar 3'),
(20, 4, 'Cempaka'),
(21, 5, 'Melati 4'),
(22, 5, 'Mawar 4'),
(23, 5, 'Cempaka 2'),
(24, 5, 'Tulip'),
(25, 6, 'Cempaka 3'),
(26, 6, 'Melati 5'),
(27, 6, 'Tulip 2'),
(28, 6, 'Teratai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_log`
--

CREATE TABLE `tabel_log` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` varchar(50) DEFAULT NULL,
  `log_tipe` varchar(10) DEFAULT NULL,
  `log_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_log`
--

INSERT INTO `tabel_log` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
(229, '2020-10-26 06:16:42', 'ely', 'login', 'login ke admin'),
(230, '2020-10-26 08:40:59', 'ely', 'login', 'login ke admin'),
(231, '2020-10-26 08:53:42', 'ely', 'add', 'tambah data ruangan'),
(232, '2020-10-26 08:53:55', 'ely', 'delete', 'hapus data ruangan'),
(233, '2020-10-26 08:58:59', 'ely', 'add', 'tambah data Nomor ruangan'),
(234, '2020-10-26 08:59:13', 'ely', 'delete', 'hapus data Nomor ruangan'),
(235, '2020-10-26 09:12:42', 'ely', 'login', 'login ke admin'),
(236, '2020-10-26 11:08:57', 'ely', 'add', 'tambah data user'),
(237, '2020-10-26 11:11:54', 'ely', 'add', 'tambah data user'),
(238, '2020-10-26 11:13:47', 'ely', 'add', 'tambah data user'),
(239, '2020-10-26 11:17:47', 'ely', 'add', 'tambah data user'),
(240, '2020-10-26 11:18:12', 'ely', 'delete', 'hapus data user'),
(241, '2020-10-26 11:18:15', 'ely', 'delete', 'hapus data user'),
(242, '2020-10-26 11:18:17', 'ely', 'delete', 'hapus data user'),
(243, '2020-10-26 11:18:19', 'ely', 'delete', 'hapus data user'),
(244, '2020-10-26 11:19:01', 'ely', 'add', 'tambah data user'),
(245, '2020-10-26 11:19:53', 'ely', 'add', 'tambah data user'),
(246, '2020-10-26 11:22:02', 'ely', 'add', 'tambah data user'),
(247, '2020-10-26 11:23:04', 'ely', 'add', 'tambah data user'),
(248, '2020-10-26 11:24:46', 'ely', 'add', 'tambah data user'),
(249, '2020-10-26 11:24:59', 'ely', 'delete', 'hapus data user'),
(250, '2020-10-26 11:25:04', 'ely', 'delete', 'hapus data user'),
(251, '2020-10-26 11:25:06', 'ely', 'delete', 'hapus data user'),
(252, '2020-10-26 11:25:09', 'ely', 'delete', 'hapus data user'),
(253, '2020-10-26 11:25:11', 'ely', 'delete', 'hapus data user'),
(254, '2020-10-26 11:25:13', 'ely', 'delete', 'hapus data user'),
(255, '2020-10-26 11:25:14', 'ely', 'delete', 'hapus data user'),
(256, '2020-10-26 11:25:16', 'ely', 'delete', 'hapus data user'),
(257, '2020-10-26 11:40:50', 'ely', 'edit', 'edit data user'),
(258, '2020-10-26 11:44:03', 'ely', 'edit', 'edit data user'),
(259, '2020-10-26 11:44:08', 'ely', 'edit', 'edit data user'),
(260, '2020-10-26 12:44:15', 'ely', 'add', 'tambah data Pasien'),
(261, '2020-10-26 12:46:13', 'ely', 'add', 'tambah data user'),
(262, '2020-10-26 12:50:29', 'ely', 'add', 'tambah data user'),
(263, '2020-10-26 12:53:10', 'ely', 'add', 'tambah data user'),
(264, '2020-10-26 13:06:01', 'ely', 'add', 'tambah data Pasien'),
(265, '2020-10-26 13:06:17', 'ely', 'delete', 'hapus data Pasien'),
(266, '2020-10-26 13:15:22', 'ely', 'edit', 'edit data user'),
(267, '2020-10-26 13:18:54', 'ely', 'edit', 'edit data Pasien'),
(268, '2020-10-26 13:19:00', 'ely', 'edit', 'edit data Pasien'),
(269, '2020-10-26 13:19:14', 'ely', 'edit', 'edit data Pasien'),
(270, '2020-10-26 13:19:22', 'ely', 'edit', 'edit data Pasien'),
(271, '2020-10-26 13:19:42', 'ely', 'edit', 'edit data Pasien'),
(272, '2020-10-26 13:21:37', 'ely', 'edit', 'edit data user'),
(273, '2020-10-26 13:26:10', 'ely', 'edit', 'edit data user'),
(274, '2020-10-26 13:26:21', 'ely', 'edit', 'edit data user'),
(275, '2020-10-26 13:26:25', 'ely', 'edit', 'edit data user'),
(276, '2020-10-26 13:26:32', 'ely', 'edit', 'edit data user'),
(277, '2020-10-26 13:26:49', 'ely', 'edit', 'edit data user'),
(278, '2020-10-26 13:26:54', 'ely', 'edit', 'edit data user'),
(279, '2020-10-26 13:26:57', 'ely', 'edit', 'edit data user'),
(280, '2020-10-26 13:27:16', 'ely', 'edit', 'edit data user'),
(281, '2020-10-26 13:28:38', 'ely', 'edit', 'edit data Pasien'),
(282, '2020-10-26 13:30:05', 'ely', 'edit', 'edit data Pasien'),
(283, '2020-10-26 13:30:15', 'ely', 'edit', 'edit data Pasien'),
(284, '2020-10-26 13:30:32', 'ely', 'edit', 'edit data Pasien'),
(285, '2020-10-26 13:31:41', 'ely', 'edit', 'edit data Pasien'),
(286, '2020-10-26 13:35:59', 'ely', 'edit', 'edit data Pasien'),
(287, '2020-10-26 13:36:28', 'ely', 'edit', 'edit data Pasien'),
(288, '2020-10-26 13:38:05', 'ely', 'edit', 'edit data user'),
(289, '2020-10-26 13:39:53', 'ely', 'edit', 'edit data user'),
(290, '2020-10-26 13:40:51', 'ely', 'edit', 'edit data user'),
(291, '2020-10-26 13:41:17', 'ely', 'edit', 'edit data user'),
(292, '2020-10-26 13:41:20', 'ely', 'edit', 'edit data user'),
(293, '2020-10-26 13:42:09', 'ely', 'edit', 'edit data user'),
(294, '2020-10-26 13:42:22', 'ely', 'edit', 'edit data user'),
(295, '2020-10-26 13:42:35', 'ely', 'edit', 'edit data Pasien'),
(296, '2020-10-26 13:44:24', 'ely', 'edit', 'edit data Pasien'),
(297, '2020-10-26 13:44:33', 'ely', 'edit', 'edit data Pasien'),
(298, '2020-10-26 13:44:59', 'ely', 'edit', 'edit data Pasien'),
(299, '2020-10-26 13:45:08', 'ely', 'edit', 'edit data Pasien'),
(300, '2020-10-26 13:45:11', 'ely', 'edit', 'edit data Pasien'),
(301, '2020-10-26 13:45:20', 'ely', 'edit', 'edit data Pasien'),
(302, '2020-10-26 13:46:13', 'ely', 'edit', 'edit data Pasien'),
(303, '2020-10-26 13:46:20', 'ely', 'edit', 'edit data Pasien'),
(304, '2020-10-26 13:46:29', 'ely', 'edit', 'edit data Pasien'),
(305, '2020-10-26 13:46:34', 'ely', 'edit', 'edit data Pasien'),
(306, '2020-10-26 13:47:02', 'ely', 'edit', 'edit data Pasien'),
(307, '2020-10-26 13:51:03', 'ely', 'add', 'tambah data Pasien'),
(308, '2020-10-26 13:53:36', 'ely', 'add', 'tambah data Pasien'),
(309, '2020-10-26 14:00:30', 'ely', 'login', 'login ke admin'),
(310, '2020-10-26 14:01:18', 'ely', 'add', 'tambah data Pasien'),
(311, '2020-10-26 14:02:33', 'ely', 'edit', 'edit data Pasien'),
(312, '2020-10-26 14:02:56', 'ely', 'edit', 'edit data Pasien'),
(313, '2020-10-26 14:03:10', 'ely', 'delete', 'hapus data Pasien'),
(314, '2020-10-26 14:03:15', 'ely', 'delete', 'hapus data Pasien'),
(315, '2020-10-26 14:03:27', 'ely', 'edit', 'edit data Pasien'),
(316, '2020-10-26 14:03:41', 'ely', 'edit', 'edit data Pasien'),
(317, '2020-10-26 14:04:04', 'ely', 'edit', 'edit data Pasien'),
(318, '2020-10-26 14:23:02', 'ely', 'add', 'tambah data pasien masuk'),
(319, '2020-10-26 14:26:12', 'ely', 'add', 'tambah data diagnosa'),
(320, '2020-10-26 14:29:39', 'ely', 'add', 'tambah data pasien masuk'),
(321, '2020-10-26 14:34:43', 'ely', 'edit', 'edit data pasien masuk'),
(322, '2020-10-26 14:34:49', 'ely', 'delete', 'hapus data pasien masuk'),
(323, '2020-10-26 14:40:53', 'ely', 'edit', 'edit data diagnosa'),
(324, '2020-10-26 14:46:59', 'ely', 'add', 'tambah data pasien Keluar'),
(325, '2020-10-26 14:48:52', 'ely', 'edit', 'edit data pasien keluar'),
(326, '2020-10-26 14:48:59', 'ely', 'edit', 'edit data pasien keluar'),
(327, '2020-10-26 14:49:42', 'ely', 'add', 'tambah data pasien masuk'),
(328, '2020-10-26 14:50:00', 'ely', 'add', 'tambah data diagnosa'),
(329, '2020-10-26 14:50:12', 'ely', 'add', 'tambah data pasien Keluar'),
(330, '2020-10-26 14:50:18', 'ely', 'edit', 'edit data pasien keluar'),
(331, '2020-10-26 14:50:26', 'ely', 'edit', 'edit data pasien keluar'),
(332, '2020-10-26 14:50:32', 'ely', 'delete', 'hapus data pasien keluar'),
(333, '2020-10-26 15:03:51', 'ely', 'logout', 'melakukan logout'),
(334, '2020-10-26 15:03:58', 'ely', 'login', 'login ke rekam medis'),
(335, '2020-10-26 15:09:27', 'ely', 'login', 'login ke rekam medis'),
(336, '2020-10-26 15:11:07', 'ely', 'add', 'tambah data pasien masuk'),
(337, '2020-10-26 15:11:14', 'ely', 'edit', 'edit data pasien masuk'),
(338, '2020-10-26 15:11:19', 'ely', 'delete', 'hapus data pasien masuk'),
(339, '2020-10-26 15:13:56', 'ely', 'login', 'login ke rekam medis'),
(340, '2020-10-26 15:15:17', 'ely', 'login', 'login ke rekam medis'),
(341, '2020-10-26 15:16:41', 'ely', 'login', 'login ke rekam medis'),
(342, '2020-10-26 15:23:01', 'ely', 'add', 'tambah data pasien masuk'),
(343, '2020-10-26 15:23:08', 'ely', 'edit', 'edit data pasien masuk'),
(344, '2020-10-26 15:23:14', 'ely', 'delete', 'hapus data pasien masuk'),
(345, '2020-10-26 15:29:38', 'ely', 'add', 'tambah data diagnosa'),
(346, '2020-10-26 15:30:19', 'ely', 'edit', 'edit data diagnosa'),
(347, '2020-10-26 15:30:24', 'ely', 'delete', 'hapus data diagnosa'),
(348, '2020-10-26 15:41:14', 'ely', 'add', 'tambah data pasien Keluar'),
(349, '2020-10-26 15:41:24', 'ely', 'edit', 'edit data pasien keluar'),
(350, '2020-10-26 15:41:29', 'ely', 'delete', 'hapus data pasien keluar'),
(351, '2020-10-26 15:41:44', 'ely', 'login', 'login ke rekam medis'),
(352, '2020-10-27 01:12:48', 'ely', 'login', 'login ke rekam medis'),
(353, '2020-10-27 01:23:03', 'ely', 'add', 'tambah data pasien'),
(354, '2020-10-27 01:25:28', 'ely', 'edit', 'edit data pasien'),
(355, '2020-10-27 01:25:39', 'ely', 'edit', 'edit data pasien'),
(356, '2020-10-27 01:25:47', 'ely', 'delete', 'hapus data pasien'),
(357, '2020-10-27 06:17:20', NULL, 'logout', 'melakukan logout'),
(358, '2020-10-27 06:21:50', 'ely', 'login', 'login ke rekam medis'),
(359, '2020-10-27 06:21:58', 'ely', 'logout', 'melakukan logout'),
(360, '2020-10-27 06:28:06', 'ely', 'login', 'login ke pasien'),
(361, '2020-10-27 06:31:09', 'ely', 'logout', 'melakukan logout'),
(362, '2020-10-27 13:36:07', 'ely', 'login', 'login ke pasien'),
(363, '2020-10-27 14:55:21', 'ely', 'login', 'login ke admin'),
(364, '2020-10-27 15:16:45', 'ely', 'login', 'login ke admin'),
(365, '2020-10-27 15:52:35', 'ely', 'login', 'login ke admin'),
(366, '2020-10-28 06:12:58', 'ely', 'login', 'login ke admin'),
(367, '2020-10-28 06:13:33', 'ely', 'logout', 'melakukan logout'),
(368, '2020-10-28 07:00:41', 'ely', 'login', 'login ke pasien'),
(369, '2020-10-28 10:05:12', 'ely', 'login', 'login ke pasien'),
(370, '2020-10-28 12:42:50', 'ely', 'logout', 'melakukan logout'),
(371, '2020-10-28 12:42:57', 'ely', 'login', 'login ke pasien'),
(372, '2020-10-28 12:44:21', 'ely', 'logout', 'melakukan logout'),
(373, '2020-10-28 12:44:29', 'ely', 'login', 'login ke pasien'),
(374, '2020-10-28 13:04:08', 'ely', 'logout', 'melakukan logout'),
(375, '2020-10-28 13:04:20', 'ely', 'login', 'login ke pasien'),
(376, '2020-10-28 13:07:59', 'ely', 'logout', 'melakukan logout'),
(377, '2020-10-28 13:08:10', 'ely', 'login', 'login ke pasien'),
(378, '2020-10-28 13:12:46', 'ely', 'logout', 'melakukan logout'),
(379, '2020-10-28 13:12:53', 'ely', 'login', 'login ke pasien'),
(380, '2020-10-29 06:53:24', 'ely', 'login', 'login ke pasien'),
(381, '2020-10-31 22:04:04', 'ely', 'login', 'login ke pasien'),
(382, '2020-11-01 07:48:43', 'ely', 'login', 'login ke pasien'),
(383, '2020-11-01 10:45:01', 'ely', 'login', 'login ke admin'),
(384, '2020-11-01 11:11:47', 'ely', 'login', 'login ke pasien'),
(385, '2020-11-01 11:27:10', 'ely', 'login', 'login ke pasien'),
(386, '2020-11-01 11:27:20', 'ely', 'edit', 'edit data Pasien'),
(387, '2020-11-01 11:30:33', 'ely', 'logout', 'melakukan logout'),
(388, '2020-11-01 11:31:16', 'ely', 'login', 'login ke admin'),
(389, '2020-11-01 12:56:49', 'ely', 'logout', 'melakukan logout'),
(390, '2020-11-01 12:57:13', 'ely', 'login', 'login ke pasien'),
(391, '2020-11-01 13:31:22', 'ely', 'login', 'login ke pasien'),
(392, '2020-11-01 13:45:10', 'ely', 'login', 'login ke pasien'),
(393, '2020-11-01 13:53:45', 'ely', 'add', 'tambah data pasien masuk'),
(394, '2020-11-01 14:08:34', 'ely', 'login', 'login ke pasien'),
(395, '2020-11-01 14:08:40', 'ely', 'delete', 'hapus data pasien masuk'),
(396, '2020-11-01 14:10:04', 'ely', 'add', 'tambah data pasien masuk'),
(397, '2020-11-01 14:10:19', 'ely', 'login', 'login ke pasien'),
(398, '2020-11-01 14:14:44', 'ely', 'add', 'tambah data pasien masuk'),
(399, '2020-11-01 14:15:16', 'ely', 'add', 'tambah data pasien masuk'),
(400, '2020-11-01 14:16:10', 'ely', 'add', 'tambah data pasien masuk'),
(401, '2020-11-01 14:16:55', 'ely', 'add', 'tambah data pasien masuk'),
(402, '2020-11-01 14:21:59', 'ely', 'add', 'tambah data pasien masuk'),
(403, '2020-11-01 14:22:05', 'ely', 'delete', 'hapus data pasien masuk'),
(404, '2020-11-01 14:22:10', 'ely', 'delete', 'hapus data pasien masuk'),
(405, '2020-11-01 14:22:12', 'ely', 'delete', 'hapus data pasien masuk'),
(406, '2020-11-01 14:22:15', 'ely', 'delete', 'hapus data pasien masuk'),
(407, '2020-11-01 14:22:18', 'ely', 'delete', 'hapus data pasien masuk'),
(408, '2020-11-01 14:38:39', 'ely', 'login', 'login ke pasien'),
(409, '2020-11-01 14:38:56', 'ely', 'edit', 'edit data pasien masuk'),
(410, '2020-11-01 14:39:11', 'ely', 'edit', 'edit data pasien masuk'),
(411, '2020-11-01 15:05:59', 'ely', 'logout', 'melakukan logout'),
(412, '2020-11-01 15:06:24', 'ely', 'login', 'login ke rekam medis'),
(413, '2020-11-01 15:34:43', 'ely', 'logout', 'melakukan logout'),
(414, '2020-11-01 15:34:58', 'ely', 'login', 'login ke admin'),
(415, '2020-11-01 15:51:56', 'ely', 'logout', 'melakukan logout'),
(416, '2020-11-01 15:52:55', 'ely', 'login', 'login ke admin'),
(417, '2020-11-01 16:10:42', 'ely', 'logout', 'melakukan logout'),
(418, '2020-11-01 16:10:55', 'ely', 'login', 'login ke pasien'),
(419, '2020-11-01 16:14:24', 'ely', 'logout', 'melakukan logout'),
(420, '2020-11-01 16:14:31', 'ely', 'login', 'login ke admin'),
(421, '2020-11-01 16:14:47', 'ely', 'logout', 'melakukan logout'),
(422, '2020-11-01 16:14:58', 'ely', 'login', 'login ke pasien'),
(423, '2020-11-01 16:15:13', 'ely', 'logout', 'melakukan logout'),
(424, '2020-11-01 16:15:25', 'ely', 'login', 'login ke admin'),
(425, '2020-11-01 16:17:06', 'ely', 'add', 'tambah data pasien masuk'),
(426, '2020-11-01 16:17:18', 'ely', 'delete', 'hapus data pasien masuk'),
(427, '2020-11-01 16:19:17', 'ely', 'add', 'tambah data pasien masuk'),
(428, '2020-11-01 16:23:18', 'obet', 'login', 'login ke pasien'),
(429, '2020-11-01 16:25:11', 'obet', 'logout', 'melakukan logout'),
(430, '2020-11-01 16:25:24', 'ely', 'login', 'login ke pasien'),
(431, '2020-11-01 16:25:33', 'ely', 'logout', 'melakukan logout'),
(432, '2020-11-01 16:25:47', 'obet', 'login', 'login ke pasien'),
(433, '2020-11-01 16:26:08', 'obet', 'logout', 'melakukan logout'),
(434, '2020-11-01 16:26:15', 'obet', 'login', 'login ke pasien'),
(435, '2020-11-01 16:28:42', 'obet', 'add', 'tambah data pasien masuk'),
(436, '2020-11-01 16:31:58', 'obet', 'add', 'tambah data pasien masuk'),
(437, '2020-11-01 17:00:37', 'obet', 'add', 'tambah data pasien masuk'),
(438, '2020-11-01 18:56:52', 'obet', 'logout', 'melakukan logout'),
(439, '2020-11-01 18:58:40', 'obet', 'login', 'login ke pasien'),
(440, '2020-11-01 19:16:32', 'obet', 'logout', 'melakukan logout'),
(441, '2020-11-02 12:22:58', 'ely', 'login', 'login ke admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('rekam_medis','admin','pasien') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk_user` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('ISLAM','PROTESTAN','KATOLIK','HINDU','BUDDHA','KHONGHUCU') NOT NULL,
  `image` text NOT NULL DEFAULT 'default.jpg',
  `status` enum('verification','unverification') NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` varchar(50) NOT NULL,
  `tahun_buat` year(4) NOT NULL DEFAULT current_timestamp(),
  `tgl_buat` date NOT NULL DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `email`, `password`, `role`, `tgl_lahir`, `tempat_lahir`, `jk_user`, `no_ktp`, `no_telp`, `alamat`, `agama`, `image`, `status`, `last_login`, `create_at`, `is_active`, `tahun_buat`, `tgl_buat`, `bulan_buat`) VALUES
(11, 'Ely Nur  Rahayu s', 'ely', 'tria84838@gmail.com', '$2y$10$VclQi/dLbXzNOxCnoqmEV.swaYyfLjTXVk8Av.R3ZZTSFG9h0z7tm', 'admin', '1988-06-14', 'Tuban', 'PEREMPUAN', '4436328373722234', '081384058499', 'RT/RW 05/01 Ds. Parengan Kec. Parengan Kab. Tuban', 'ISLAM', 'obet.jpg', 'verification', '2020-11-02 12:22:58', '2020-11-01 11:27:20', 'online', 2020, '2020-10-26', ''),
(25, 'Ega Firgatiasss', '1831710143@polinema.ac.iddd', 'triard78@gmail.com', '$2y$10$FZLQU5BwPL2ivf1hZgFBBuA8Uh1uf2UCGsG.QTnB9GUJAzuxjCV0.', 'admin', '2020-10-05', 'Bojonegoro', 'PEREMPUAN', '7463283737222345', '085880633630', 'ddddddddddddddddddddddddddd', 'PROTESTAN', 'default.jpg', '', '2020-10-26 13:27:16', '2020-10-26 13:27:16', 'offline', 2020, '2020-10-26', ''),
(26, 'm obet', '1831710143@polinema.ac.id', 'triard78@gmail.com', '$2y$10$CiCTuME.WrGmjCP7APkT2OHultdHtljbK8K1dqD48Bb5VRlK8.6H.', 'admin', '2020-10-07', 'Bojonegoro', 'PEREMPUAN', '7463283737222345', '085880633630', 'sssssssssssssssssssssssssssssssss', 'PROTESTAN', 'default.jpg', 'verification', '2020-10-26 12:46:13', '2020-10-26 12:46:13', 'offline', 2020, '2020-10-26', '10'),
(27, 'hhhhhhhhhhhhhhhhhh', '1831710143@polinema.ac.id', 'triard78@gmail.com', '$2y$10$dbPQL6ch0OGCBv2tzZgpYOE5gflUI65/N2cSqBNHx6ToSIeIphrMi', 'admin', '2020-10-01', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'gffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'ISLAM', 'default.jpg', 'verification', '2020-10-26 12:50:29', '2020-10-26 12:50:29', 'offline', 2020, '2020-10-26', '10'),
(28, 'Ega Firgatiaddddddddd', 'cccccccccc', 'triard78@gmail.com', '$2y$10$5ZEv6RmlBNWGgJYAkiqZLekb/fb1QCNgkQOWRjIGzFrWIG58bS9BS', 'rekam_medis', '2020-10-15', 'Bojonegoro', 'PEREMPUAN', '7463283737222345', '085880633630', 'ccccccccccccccccccccccccc', 'PROTESTAN', 'cccccccccc.png', 'verification', '2020-10-26 13:42:22', '2020-10-26 13:42:22', 'offline', 2020, '2020-10-26', '10'),
(30, 'm obet', 'xxx', 'triard78@gmail.com', '$2y$10$nZzvYCQiNC.wUBFJnVuh/exch8f2gI/4LdE3.0ept51movENhDtkm', 'pasien', '2020-10-02', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'lllllllllllllllllllllllllllllllllllllllllll', 'ISLAM', 'xxx.png', 'verification', '2020-10-26 14:04:04', '2020-10-26 14:04:04', 'offline', 2020, '2020-10-26', '10'),
(31, 'Ely Nur', '1831710143', 'triard78@gmail.com', '$2y$10$6biN0uPU0gqvhDidx60ffOSDYYFsHrGRvIjlbSIt/u9hj.Yfkum5u', 'pasien', '2020-10-08', 'Bojonegoro', 'PEREMPUAN', '7463283737222345', '085880633630', 'qqqqqqqqqqqqqqqqqqqqqqqqqq', 'ISLAM', '1831710143.png', 'verification', '2020-10-26 14:03:41', '2020-10-26 14:03:41', 'offline', 2020, '2020-10-26', '9'),
(34, 'm obetaa', 'obet', 'triard78@gmail.com', '$2y$10$VclQi/dLbXzNOxCnoqmEV.swaYyfLjTXVk8Av.R3ZZTSFG9h0z7tm', 'pasien', '2020-10-07', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'KATOLIK', 'obet.jpg', 'verification', '2020-11-01 18:58:40', '2020-10-28 02:57:16', 'offline', 2020, '2020-10-28', '10'),
(35, 'Sutrisno', 'sut', 'sut@gmail.com', '$2y$10$ivJXc8NmhvV3tGWORxvCOuSTFzUyrGHspSXEjKaZxV2680XjMcjii', 'pasien', '1977-06-14', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '089657483283', 'Sugihwaras Bojonegoro', 'ISLAM', 'sut.jpg', 'unverification', '2020-10-28 05:30:06', '2020-10-28 05:30:06', 'offline', 2020, '2020-10-28', '10'),
(36, 'yyyyyyyyyyyyyy', 'yyyyyyyyyyy', 'triard78@gmail.com', '$2y$10$GQrVeLsvsn5UDGCFUcBH8OZIMJhIPE2dicUhnQgOSHoRtzpBAT4.C', 'pasien', '2020-09-30', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'ttttttttttttttttttttttttttttttttttttttttttttttttttttttt', 'PROTESTAN', 'yyyyyyyyyyy.jpg', 'unverification', '2020-10-28 06:48:49', '2020-10-28 06:48:49', 'offline', 2020, '2020-10-28', '10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `FK_diagnosa_pasien_masuk` (`id_pasien_masuk`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nomor_ruangan`
--
ALTER TABLE `nomor_ruangan`
  ADD PRIMARY KEY (`id_nomor_ruangan`),
  ADD KEY `FK_nomor_ruangan_ruangan` (`id_ruangan`);

--
-- Indeks untuk tabel `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  ADD PRIMARY KEY (`id_pasien_keluar`),
  ADD KEY `FK_pasien_keluar_pasien_masuk` (`id_pasien_masuk`);

--
-- Indeks untuk tabel `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  ADD PRIMARY KEY (`id_pasien_masuk`),
  ADD KEY `FK_pasien_masuk_nomor_ruangan` (`id_nomor_ruangan`),
  ADD KEY `FK_pasien_masuk_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `FK_ruangan_level` (`id_kelas`);

--
-- Indeks untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nomor_ruangan`
--
ALTER TABLE `nomor_ruangan`
  MODIFY `id_nomor_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  MODIFY `id_pasien_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  MODIFY `id_pasien_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `FK_diagnosa_pasien_masuk` FOREIGN KEY (`id_pasien_masuk`) REFERENCES `pasien_masuk` (`id_pasien_masuk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nomor_ruangan`
--
ALTER TABLE `nomor_ruangan`
  ADD CONSTRAINT `FK_nomor_ruangan_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  ADD CONSTRAINT `FK_pasien_keluar_pasien_masuk` FOREIGN KEY (`id_pasien_masuk`) REFERENCES `pasien_masuk` (`id_pasien_masuk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  ADD CONSTRAINT `FK_pasien_masuk_nomor_ruangan` FOREIGN KEY (`id_nomor_ruangan`) REFERENCES `nomor_ruangan` (`id_nomor_ruangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pasien_masuk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `FK_ruangan_level` FOREIGN KEY (`id_kelas`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
