-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2020 pada 05.15
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
  `nama_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_pasien_masuk`, `nama_penyakit`, `tindakan`, `nama_obat`) VALUES
(1, 1, 'sehat', 'tidak dilakukan apa apa', 'cuan'),
(9, 1, 'tipes', 'perawatan', 'penurun panas'),
(10, 1, 'tipes', 'perawatan', 'penurun panas'),
(11, 12, 'tipes', 'perawatansss', 'penurun panas');

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
(4, 1, '1', 'Diisi'),
(5, 5, '4', 'Kosong'),
(6, 5, '1', 'Diisi'),
(7, 1, '10', 'Kosong'),
(8, 3, '3', 'Kosong'),
(9, 1, '6', 'Kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `no_KTP` varchar(20) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `no_telp_pasien` varchar(15) NOT NULL,
  `agama_pasien` enum('ISLAM','PROTESTAN','KATOLIK','HINDU','BUDDHA','KHONGHUCU') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `no_KTP`, `tgl_lahir_pasien`, `jenis_kelamin`, `alamat_pasien`, `no_telp_pasien`, `agama_pasien`) VALUES
(1, 'tri ardiansyah', '123453456457', '2020-10-04', 'LAKI-LAKI', 'sugihwaras bojonegoro', '231313123123321', 'ISLAM'),
(8, 'ega firghatia', '442124124112', '2000-07-14', 'LAKI-LAKI', 'bojonegoro jawa timur', '086584382342', 'ISLAM'),
(9, 'ely nur rahayu', '123453456456', '1990-12-30', 'PEREMPUAN', 'tuban jawa timur', '086532321233', 'ISLAM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_keluar`
--

CREATE TABLE `pasien_keluar` (
  `id_pasien_keluar` int(10) NOT NULL,
  `id_pasien_masuk` int(10) NOT NULL,
  `tanggal_keluar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kondisi_keluar` enum('Sehat','Belum Sehat','Meninggal') NOT NULL,
  `status_pulang` enum('Dipulangkan','Pulang Paksa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_keluar`
--

INSERT INTO `pasien_keluar` (`id_pasien_keluar`, `id_pasien_masuk`, `tanggal_keluar`, `kondisi_keluar`, `status_pulang`) VALUES
(2, 4, '2020-10-17 16:42:32', 'Belum Sehat', 'Dipulangkan'),
(4, 12, '2020-10-17 16:53:04', 'Sehat', 'Dipulangkan'),
(6, 10, '2020-10-18 05:53:53', 'Sehat', 'Dipulangkan'),
(7, 13, '2020-10-16 06:35:23', 'Belum Sehat', 'Pulang Paksa');

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
  `keterangan_pasien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien_masuk`
--

INSERT INTO `pasien_masuk` (`id_pasien_masuk`, `id_pasien`, `id_nomor_ruangan`, `nomor_rekam_medis`, `tanggal_masuk`, `keterangan_pasien`) VALUES
(1, 1, 4, 'IB1234-1', '2020-10-12 06:07:36', 'diare poll'),
(4, 1, 7, 'IB12345-2', '2020-10-12 06:07:46', 'asSssa'),
(10, 1, 6, 'IB12345-7', '2020-10-11 06:07:39', 'ngelu mari o'),
(12, 8, 5, 'IB1234-22', '2020-10-11 05:07:33', 'ws'),
(13, 8, 8, 'IB1234-77', '2020-10-12 06:07:46', 'flu'),
(14, 8, 6, 'IB12345-6', '2020-10-13 06:17:57', 'aishidhaidhdi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(10) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(1, 'Melatia'),
(3, 'Anggreka'),
(5, 'Rawat Anak');

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
(130, '2020-10-14 02:42:39', 'tri', 'logout', 'melakukan logout');

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
(39, '0ea7dfb5cc54daad7d085518926446', 5, '2020-10-14');

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
(1, 'mamang ganteng', 'mamang', 'tria8438@gmail.com', '$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O', 'admin', '2020-10-02', 'bojonegoro', 'LAKI-LAKI', '1234567896456784', '085880633630', 'rt/rw 13/03 de stare kec sugihwaras kab bojonegoror', 'mamang.jpg', '2020-10-14 01:59:14', '2020-10-04 04:00:00', 'offline'),
(2, 'iron man', 'iron', 'iron@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'rekam_medis', '1999-02-13', 'Malang', 'LAKI-LAKI', '2365435654325675', '0865748121', 'rt/rw 13/03 de stare kec sugihwaras kab bojonegoro', 'iron.png', '2020-10-03 08:39:05', '2020-10-03 08:39:05', 'offline'),
(5, 'Tri Ardiansyah', 'tri', 'triard78@gmail.com', '$2y$10$3IoLo1/ZNVYRCfRZnUnjruCzq/pHQJTLYxpKwopDozV6c4d7.PNWS', 'rekam_medis', '2020-10-09', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'default.jpg', '2020-10-14 02:42:33', '2020-10-03 06:27:26', 'offline'),
(6, 'Ega Firgatia', 'ega', 'ega@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'admin', '2020-10-01', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'sssssssssssssssssssssssssssssss', '.png', '2020-10-03 06:32:17', '2020-10-03 06:32:17', 'offline'),
(8, 'Ely Nur', 'ely', 'elynur@gmail.com', '202cb962ac59075b964b07152d234b70', 'rekam_medis', '2020-10-05', 'Tuban', 'PEREMPUAN', '7463283737222345', '085880633630', 'sssssssssssssssssssssssssssssssssssssssssssss', 'ely.jpg', '2020-10-03 06:39:04', '2020-10-03 06:39:04', 'offline'),
(11, 'm obet', 'obet', 'tria84838@gmail.com', '$2y$10$VclQi/dLbXzNOxCnoqmEV.swaYyfLjTXVk8Av.R3ZZTSFG9h0z7tm', 'rekam_medis', '1988-06-14', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'defwffffffffffffffffffffffffffffffff', 'obet.png', '2020-10-14 01:32:42', '2020-10-07 22:11:04', 'online');

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
  ADD PRIMARY KEY (`id_ruangan`);

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
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `nomor_ruangan`
--
ALTER TABLE `nomor_ruangan`
  MODIFY `id_nomor_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pasien_keluar`
--
ALTER TABLE `pasien_keluar`
  MODIFY `id_pasien_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pasien_masuk`
--
ALTER TABLE `pasien_masuk`
  MODIFY `id_pasien_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT untuk tabel `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
