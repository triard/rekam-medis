-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 06.56
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
(15, 20, 'tipes', 'perawatan', 'penurun panas', '2020-10-20', '10', 2020),
(16, 21, 'flu', 'perawatansss', 'obat flu', '2019-09-20', '9', 2019);

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
  `status_ruangan` enum('null','Diisi','Kosong') NOT NULL DEFAULT 'Kosong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nomor_ruangan`
--

INSERT INTO `nomor_ruangan` (`id_nomor_ruangan`, `id_ruangan`, `nomor_ruangan`, `status_ruangan`) VALUES
(10, 13, '1', 'Kosong'),
(11, 13, '2', 'Kosong'),
(12, 15, '1', 'Kosong'),
(13, 15, '2', 'Kosong'),
(14, 14, '1', 'Kosong'),
(15, 14, '2', 'Kosong'),
(16, 16, '1', 'Kosong'),
(17, 16, '2', 'Kosong'),
(18, 16, '3', 'Kosong'),
(19, 17, '1', 'Kosong'),
(20, 17, '2', 'Kosong'),
(21, 17, '3', 'Kosong'),
(22, 18, '1', 'Diisi'),
(23, 18, '2', 'Kosong'),
(24, 18, '3', 'Kosong'),
(25, 18, '4', 'Kosong'),
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
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `no_KTP` varchar(20) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') DEFAULT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `no_telp_pasien` varchar(15) NOT NULL,
  `agama_pasien` enum('ISLAM','PROTESTAN','KATOLIK','HINDU','BUDDHA','KHONGHUCU') NOT NULL,
  `image` text NOT NULL,
  `tahun_buat` year(4) NOT NULL DEFAULT current_timestamp(),
  `tgl_buat` date NOT NULL DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `no_KTP`, `tgl_lahir_pasien`, `jenis_kelamin`, `alamat_pasien`, `no_telp_pasien`, `agama_pasien`, `image`, `tahun_buat`, `tgl_buat`, `bulan_buat`) VALUES
(17, 'tri ardiansyah', '3333333333333333', '2020-10-07', 'LAKI-LAKI', 'sugihwaras bojonegoro', '231313123123', 'ISLAM', 'tri_ardiansyah.jpg', 2020, '2020-10-20', '10'),
(18, 'weqew', '3333333333333333', '1999-02-13', 'PEREMPUAN', 'sugihwaras bojonegoro', '231313123123', 'ISLAM', 'tri_ardiansyah.jpg', 2019, '2019-10-12', '1'),
(19, 'ega', '3333333333333333', '1999-02-13', 'LAKI-LAKI', 'sugihwaras bojonegoro', '231313123123', 'ISLAM', 'tri_ardiansyah.jpg', 2020, '2020-10-20', '1'),
(20, 'tri ardiansyah', '1111333333333333', '2020-10-13', 'LAKI-LAKI', 'sugihwaras bojonegoro', '231313123123', 'ISLAM', 'tri_ardiansyah.jpg', 2020, '2020-10-26', '10');

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
(9, 21, '2020-10-20 15:22:52', 'Sehat', 'Dipulangkan', '2020-10-20', '10', 2020),
(10, 20, '2020-10-20 22:56:40', 'Belum Sehat', 'Pulang Paksa', '2020-10-20', '9', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_masuk`
--

CREATE TABLE `pasien_masuk` (
  `id_pasien_masuk` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_nomor_ruangan` int(11) NOT NULL DEFAULT 0,
  `nomor_rekam_medis` varchar(20) NOT NULL DEFAULT 'IB1234-',
  `tanggal_masuk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan_pasien` varchar(100) NOT NULL,
  `tgl_buat` date DEFAULT current_timestamp(),
  `tahun_buat` year(4) DEFAULT current_timestamp(),
  `bulan_buat` enum('1','2','3','4','5','6','7','8','9','10','11','12') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_masuk`
--

INSERT INTO `pasien_masuk` (`id_pasien_masuk`, `id_pasien`, `id_nomor_ruangan`, `nomor_rekam_medis`, `tanggal_masuk`, `keterangan_pasien`, `tgl_buat`, `tahun_buat`, `bulan_buat`) VALUES
(20, 19, 16, 'IB12345-1', '2020-10-20 14:38:43', 'adsdsada', '2019-10-20', 2019, '2'),
(21, 17, 17, 'IB12345-2', '2020-10-20 14:39:05', 'sSa', '2020-10-23', 2020, '10'),
(22, 18, 22, 'IB12345-3', '2020-10-20 14:28:45', 'uuih', '2020-10-20', 2020, '10');

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
(117, '2020-10-13 20:05:49', 'obet', 'logout', 'melakukan logout'),
(122, '2020-10-14 01:32:42', 'obet', 'login', 'login ke rekam medis'),
(123, '2020-10-14 01:33:39', 'obet', 'add', 'tambah data pasien'),
(124, '2020-10-14 01:52:58', 'mamang', 'logout', 'melakukan logout'),
(125, '2020-10-14 01:53:56', NULL, 'reset', 'reset password akun user'),
(126, '2020-10-14 01:58:04', NULL, 'reset', 'reset password akun user'),
(127, '2020-10-14 01:59:14', 'mamang', 'login', 'login ke admin'),
(128, '2020-10-14 01:59:23', 'mamang', 'logout', 'melakukan logout'),
(129, '2020-10-14 02:42:33', 'tri', 'login', 'login ke rekam medis'),
(130, '2020-10-14 02:42:39', 'tri', 'logout', 'melakukan logout'),
(131, '2020-10-14 03:19:11', 'obet', 'logout', 'melakukan logout'),
(132, '2020-10-14 03:19:34', 'tri', 'login', 'login ke rekam medis'),
(133, '2020-10-14 03:19:40', 'tri', 'logout', 'melakukan logout'),
(134, '2020-10-14 07:46:55', 'obet', 'login', 'login ke rekam medis'),
(135, '2020-10-14 07:48:34', 'obet', 'edit', 'edit data pasien'),
(136, '2020-10-14 07:50:16', 'obet', 'add', 'tambah data pasien masuk'),
(137, '2020-10-14 07:51:27', 'obet', 'add', 'tambah data diagnosa'),
(138, '2020-10-14 07:52:07', 'obet', 'add', 'tambah data pasien Keluar'),
(139, '2020-10-14 07:53:41', 'obet', 'logout', 'melakukan logout'),
(140, '2020-10-14 07:55:16', 'tri', 'login', 'login ke rekam medis'),
(141, '2020-10-14 07:55:24', 'tri', 'logout', 'melakukan logout'),
(142, '2020-10-14 07:55:33', 'mamang', 'login', 'login ke admin'),
(143, '2020-10-14 07:57:20', 'obet', 'login', 'login ke rekam medis'),
(144, '2020-10-14 08:10:41', 'mamang', 'logout', 'melakukan logout'),
(145, '2020-10-14 08:31:04', 'mamang', 'login', 'login ke admin'),
(146, '2020-10-14 08:31:20', 'mamang', 'logout', 'melakukan logout'),
(147, '2020-10-14 08:32:37', 'obet', 'login', 'login ke rekam medis'),
(148, '2020-10-14 08:37:25', 'obet', 'add', 'tambah data pasien'),
(149, '2020-10-14 08:58:14', 'obet', 'add', 'tambah data pasien masuk'),
(150, '2020-10-14 09:05:35', 'obet', 'logout', 'melakukan logout'),
(151, '2020-10-14 09:05:52', 'mamang', 'login', 'login ke admin'),
(152, '2020-10-14 09:06:54', 'mamang', 'logout', 'melakukan logout'),
(153, '2020-10-14 09:16:19', 'mamang', 'login', 'login ke admin'),
(154, '2020-10-14 09:21:32', 'mamang', 'edit', 'edit data ruangan'),
(155, '2020-10-14 09:21:37', 'mamang', 'edit', 'edit data ruangan'),
(156, '2020-10-19 01:20:21', 'ega', 'login', 'login ke admin'),
(157, '2020-10-19 01:51:52', 'tri', 'login', 'login ke rekam medis'),
(158, '2020-10-19 02:01:47', 'tri', 'add', 'tambah data pasien'),
(159, '2020-10-19 02:03:42', 'tri', 'edit', 'edit data pasien'),
(160, '2020-10-19 02:04:25', 'tri', 'edit', 'edit data pasien'),
(161, '2020-10-19 02:04:36', 'tri', 'edit', 'edit data pasien'),
(162, '2020-10-19 02:37:12', 'tri', 'edit', 'edit data pasien'),
(163, '2020-10-19 02:37:20', 'tri', 'logout', 'melakukan logout'),
(164, '2020-10-19 02:37:38', 'ega', 'login', 'login ke admin'),
(165, '2020-10-19 02:41:09', 'ega', 'add', 'tambah data level'),
(166, '2020-10-19 02:41:15', 'ega', 'add', 'tambah data level'),
(167, '2020-10-19 02:42:17', 'ega', 'add', 'tambah data level'),
(168, '2020-10-19 02:46:06', 'ega', 'add', 'tambah data level'),
(169, '2020-10-19 02:46:12', 'ega', 'edit', 'edit data level'),
(170, '2020-10-19 02:46:16', 'ega', 'delete', 'hapus data  level'),
(171, '2020-10-19 02:46:19', 'ega', 'delete', 'hapus data  level'),
(172, '2020-10-19 02:46:21', 'ega', 'delete', 'hapus data  level'),
(173, '2020-10-19 02:46:23', 'ega', 'delete', 'hapus data  level'),
(174, '2020-10-19 02:48:26', 'ega', 'add', 'tambah data level'),
(175, '2020-10-19 02:50:09', 'ega', 'add', 'tambah data level'),
(176, '2020-10-19 02:50:17', 'ega', 'add', 'tambah data level'),
(177, '2020-10-19 02:53:14', 'ega', 'add', 'tambah data level'),
(178, '2020-10-19 02:58:08', 'ega', 'add', 'tambah data level'),
(179, '2020-10-19 03:07:44', 'ega', 'delete', 'hapus data  level'),
(180, '2020-10-19 03:07:47', 'ega', 'delete', 'hapus data  level'),
(181, '2020-10-19 03:07:49', 'ega', 'delete', 'hapus data  level'),
(182, '2020-10-19 03:07:52', 'ega', 'delete', 'hapus data  level'),
(183, '2020-10-19 03:07:54', 'ega', 'delete', 'hapus data  level'),
(184, '2020-10-19 03:08:32', 'ega', 'add', 'tambah data level'),
(185, '2020-10-19 03:11:23', 'ega', 'edit', 'edit data level'),
(186, '2020-10-19 03:11:29', 'ega', 'edit', 'edit data level'),
(187, '2020-10-19 03:11:32', 'ega', 'delete', 'hapus data  level'),
(188, '2020-10-19 03:23:27', 'tri', 'login', 'login ke rekam medis'),
(189, '2020-10-19 03:24:19', 'tri', 'logout', 'melakukan logout'),
(190, '2020-10-19 03:24:30', 'ega', 'login', 'login ke admin'),
(191, '2020-10-19 03:24:41', 'ega', 'add', 'tambah data ruangan'),
(192, '2020-10-19 03:28:42', 'ega', 'edit', 'edit data ruangan'),
(193, '2020-10-19 03:28:48', 'ega', 'delete', 'hapus data ruangan'),
(194, '2020-10-19 15:13:55', 'ega', 'login', 'login ke admin'),
(195, '2020-10-19 15:22:27', 'ega', 'login', 'login ke admin'),
(196, '2020-10-19 15:24:26', 'ega', 'add', 'tambah data pasien masuk'),
(197, '2020-10-19 15:33:01', 'ega', 'logout', 'melakukan logout'),
(198, '2020-10-19 15:33:07', 'tri', 'login', 'login ke rekam medis'),
(199, '2020-10-19 16:53:36', 'tri', 'logout', 'melakukan logout'),
(200, '2020-10-20 02:21:21', 'ega', 'login', 'login ke admin'),
(201, '2020-10-20 04:32:03', 'ega', 'login', 'login ke admin'),
(202, '2020-10-20 04:32:04', 'ega', 'login', 'login ke admin'),
(203, '2020-10-20 11:42:40', 'ega', 'login', 'login ke admin'),
(204, '2020-10-20 13:09:27', 'ega', 'login', 'login ke admin'),
(205, '2020-10-20 13:10:34', 'ega', 'login', 'login ke admin'),
(206, '2020-10-20 13:12:40', 'ega', 'add', 'tambah data Pasien'),
(207, '2020-10-20 14:24:37', 'ega', 'add', 'tambah data pasien masuk'),
(208, '2020-10-20 14:25:02', 'ega', 'edit', 'edit data pasien masuk'),
(209, '2020-10-20 14:26:49', 'ega', 'add', 'tambah data pasien masuk'),
(210, '2020-10-20 14:28:45', 'ega', 'add', 'tambah data pasien masuk'),
(211, '2020-10-20 15:01:10', 'ega', 'add', 'tambah data diagnosa'),
(212, '2020-10-20 15:01:23', 'ega', 'add', 'tambah data diagnosa'),
(213, '2020-10-20 15:01:31', 'ega', 'delete', 'hapus data diagnosa'),
(214, '2020-10-20 15:01:33', 'ega', 'delete', 'hapus data diagnosa'),
(215, '2020-10-20 15:15:37', 'ega', 'add', 'tambah data diagnosa'),
(216, '2020-10-20 15:17:26', 'ega', 'add', 'tambah data diagnosa'),
(217, '2020-10-20 15:22:22', 'ega', 'add', 'tambah data pasien Keluar'),
(218, '2020-10-20 15:22:34', 'ega', 'add', 'tambah data pasien Keluar'),
(219, '2020-10-20 15:23:45', 'ega', 'edit', 'edit data diagnosa'),
(220, '2020-10-20 15:24:26', 'ega', 'edit', 'edit data diagnosa'),
(221, '2020-10-20 16:08:38', 'ega', 'logout', 'melakukan logout'),
(222, '2020-10-20 16:08:45', 'tri', 'login', 'login ke rekam medis'),
(223, '2020-10-20 16:09:12', 'tri', 'logout', 'melakukan logout'),
(224, '2020-10-20 16:09:31', 'ega', 'login', 'login ke admin'),
(225, '2020-10-20 22:10:51', 'ega', 'login', 'login ke admin'),
(226, '2020-10-21 05:06:00', 'ega', 'logout', 'melakukan logout'),
(227, '2020-10-26 00:54:22', 'ega', 'login', 'login ke admin'),
(228, '2020-10-26 00:55:55', 'ega', 'add', 'tambah data Pasien');

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

--
-- Dumping data untuk tabel `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, 'c85683e4d561a888684e39fb9d6db9', 2, '2020-10-02'),
(2, '0233b84595617aaa39f62c845ab79e', 2, '2020-10-02'),
(3, '598a92dea77b194502caf42472828c', 1, '2020-10-02'),
(4, '8cd6210deb5d3a1dd2b5879979204a', 1, '2020-10-02'),
(5, '90ec48040ea44d517100cdfb3bd154', 2, '2020-10-02'),
(6, '589019089e58e2bedbd8259cf2cd53', 1, '2020-10-02'),
(7, 'e782fea056d843dac8e4b6e4252a1b', 2, '2020-10-02'),
(8, '9a3a21c21a343b75b6f8868bea23c7', 1, '2020-10-02'),
(9, 'f0b2735d4b5ea807d5967f4c60d5ed', 1, '2020-10-02'),
(10, '86c9a5aa2de783a6eafbdaa4a7bdc2', 1, '2020-10-02'),
(11, 'e14d2802cafc84d91ff317fd509a59', 1, '2020-10-02'),
(12, '0a5b7624c1ca09d126f32456c3af02', 1, '2020-10-02'),
(13, 'b297898e4ddb620b1f753c1de7dd47', 1, '2020-10-02'),
(14, 'a7292afb5ea233b82cbeeed8c2a57e', 1, '2020-10-02'),
(15, '57515aeb6731a461ef7d3edc103187', 1, '2020-10-02'),
(16, '1cbf7e192c1b83ad046663d3575ac2', 1, '2020-10-02'),
(17, '7508bbb616abae8e0719c9f239762a', 1, '2020-10-02'),
(18, 'fe423ed266550be093979130de616c', 1, '2020-10-02'),
(19, 'f99898a97d773869f4d4bf2515abae', 1, '2020-10-02'),
(20, '4a27b6b5902600ac91d3c54ab09a21', 1, '2020-10-02'),
(21, 'eea5aa2df795cfe2beca30b0fd180b', 1, '2020-10-02'),
(22, '65033ea48d90a4d095f2f6d60c3242', 1, '2020-10-02'),
(23, 'd88f123e63042f10b395afe6233d30', 1, '2020-10-02'),
(24, '613c43f92962dd6eed7040e5a38fb8', 1, '2020-10-02'),
(25, '029f803f1ef084b7b655ca1dce639a', 1, '2020-10-02'),
(26, '49e8fa58603dba4559ea51f35c0a85', 1, '2020-10-02'),
(27, '404640e87cfc906f495cb997978fd4', 1, '2020-10-02'),
(28, 'de19ebbb9e608afda427286014d2bd', 1, '2020-10-02'),
(29, 'b93ff6ce8b99181a180b814998cb77', 1, '2020-10-02'),
(30, 'a2465920131729844fdcec4a0f49fa', 1, '2020-10-03'),
(31, 'd8f50a63e0bd316d312ce04fe18b64', 11, '2020-10-13'),
(32, '5dc0147237b42341254ee92948d1b7', 11, '2020-10-13'),
(33, '328a5615052f47ba124d78a11bbaaf', 11, '2020-10-13'),
(34, 'f9d1d6a3f41a59ebeaf7c70bc8e1c7', 11, '2020-10-13'),
(35, '304b960da022e3385cdc9b5e5c52b1', 11, '2020-10-13'),
(36, 'c728f9e83c3de97d38fcaea829a86a', 11, '2020-10-13'),
(37, 'ea6472d67b7ce1b4eee41329618c8e', 11, '2020-10-13'),
(38, '89a4489f1c78c294da3955ef6b46c8', 11, '2020-10-13'),
(39, '0ea7dfb5cc54daad7d085518926446', 5, '2020-10-14'),
(40, '38135bb8d7593d0ad05feba40c79fd', 5, '2020-10-14');

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
  `role` enum('rekam_medis','admin') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `jk_user` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `image` text NOT NULL DEFAULT 'default.jpg',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` char(10) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama_user`, `username`, `email`, `password`, `role`, `tgl_lahir`, `tempat_lahir`, `jk_user`, `no_ktp`, `no_telp`, `alamat`, `image`, `last_login`, `create_at`, `is_active`) VALUES
(1, 'Ega Firgatia', 'ega', 'tria8438@gmail.com', '$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O', 'admin', '2020-10-02', 'bojonegoro', 'LAKI-LAKI', '1234567896456784', '085880633630', 'RT/RW 01/01 Ds. Ujung Kec. Padangan Kab. Bojonegoro', 'mamang.jpg', '2020-10-26 00:54:21', '2020-10-04 04:00:00', 'online'),
(5, 'Tri Ardiansyah', 'tri', 'triard78@gmail.com', '$2y$10$uXcT6S53oM.Wqg8t6HVIG.9oHqC658Usb9E4.nVUcQM7iT0miBspy', 'rekam_medis', '2020-10-09', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '089364372838', 'RT/RW 13/03 Ds. Trare kec Sugihwaras Kab. Bojonegoro', 'default.jpg', '2020-10-20 16:08:45', '2020-10-03 06:27:26', 'offline'),
(11, 'Ely Nur  Rahayu', 'ely', 'tria84838@gmail.com', '$2y$10$VclQi/dLbXzNOxCnoqmEV.swaYyfLjTXVk8Av.R3ZZTSFG9h0z7tm', 'rekam_medis', '1988-06-14', 'Tuban', 'PEREMPUAN', '4436328373722234', '081384058499', 'RT/RW 05/01 Ds. Parengan Kec. Parengan Kab. Tuban', 'obet.png', '2020-10-14 08:32:37', '2020-10-07 22:11:04', 'offline');

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
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

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
  ADD KEY `FK_pasien_masuk_pasien` (`id_pasien`),
  ADD KEY `FK_pasien_masuk_nomor_ruangan` (`id_nomor_ruangan`);

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
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `level`
--
ALTER TABLE `level`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nomor_ruangan`
--
ALTER TABLE `nomor_ruangan`
  MODIFY `id_nomor_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  MODIFY `id_pasien_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  MODIFY `id_pasien_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `FK_pasien_masuk_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `FK_ruangan_level` FOREIGN KEY (`id_kelas`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
