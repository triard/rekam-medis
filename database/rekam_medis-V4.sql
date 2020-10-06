-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table rekam_medis.diagnosa: ~0 rows (approximately)
/*!40000 ALTER TABLE `diagnosa` DISABLE KEYS */;
/*!40000 ALTER TABLE `diagnosa` ENABLE KEYS */;

-- Dumping data for table rekam_medis.nomor_ruangan: ~0 rows (approximately)
/*!40000 ALTER TABLE `nomor_ruangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `nomor_ruangan` ENABLE KEYS */;

-- Dumping data for table rekam_medis.pasien: ~0 rows (approximately)
/*!40000 ALTER TABLE `pasien` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasien` ENABLE KEYS */;

-- Dumping data for table rekam_medis.pasien_keluar: ~0 rows (approximately)
/*!40000 ALTER TABLE `pasien_keluar` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasien_keluar` ENABLE KEYS */;

-- Dumping data for table rekam_medis.pasien_masuk: ~0 rows (approximately)
/*!40000 ALTER TABLE `pasien_masuk` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasien_masuk` ENABLE KEYS */;

-- Dumping data for table rekam_medis.ruangan: ~0 rows (approximately)
/*!40000 ALTER TABLE `ruangan` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruangan` ENABLE KEYS */;

-- Dumping data for table rekam_medis.tabel_log: ~11 rows (approximately)
/*!40000 ALTER TABLE `tabel_log` DISABLE KEYS */;
INSERT INTO `tabel_log` (`log_id`, `log_time`, `log_user`, `log_tipe`, `log_desc`) VALUES
	(31, '2020-10-04 11:54:04', 'mamang', 'login', 'login ke admin'),
	(32, '2020-10-04 11:54:12', 'mamang', 'logout', 'melakukan logout'),
	(33, '2020-10-04 11:54:27', 'tri', 'login', 'login ke rekam medis'),
	(34, '2020-10-04 11:54:34', 'tri', 'logout', 'melakukan logout'),
	(35, '2020-10-04 11:57:29', 'mamang', 'login', 'login ke admin'),
	(36, '2020-10-04 11:59:30', 'mamang', 'logout', 'melakukan logout'),
	(37, '2020-10-04 12:00:20', 'tri', 'login', 'login ke rekam medis'),
	(38, '2020-10-04 12:01:09', 'tri', 'login', 'login ke rekam medis'),
	(39, '2020-10-04 12:02:51', 'tri', 'logout', 'melakukan logout'),
	(40, '2020-10-04 12:03:32', 'mamang', 'login', 'login ke admin'),
	(41, '2020-10-04 12:04:16', 'mamang', 'logout', 'melakukan logout');
/*!40000 ALTER TABLE `tabel_log` ENABLE KEYS */;

-- Dumping data for table rekam_medis.tokens: ~30 rows (approximately)
/*!40000 ALTER TABLE `tokens` DISABLE KEYS */;
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
	(30, 'a2465920131729844fdcec4a0f49fa', 1, '2020-10-03');
/*!40000 ALTER TABLE `tokens` ENABLE KEYS */;

-- Dumping data for table rekam_medis.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `nama_user`, `username`, `email`, `password`, `role`, `tgl_lahir`, `tempat_lahir`, `jk_user`, `no_ktp`, `no_telp`, `alamat`, `image`, `last_login`, `create_at`, `is_active`) VALUES
	(1, 'mamang ganteng', 'mamang', 'tria84838@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 'admin', '2020-10-02', 'bojonegoro', 'LAKI-LAKI', '1234567896456784', '085880633630', 'rt/rw 13/03 de stare kec sugihwaras kab bojonegoror', 'mamang.jpg', '2020-10-04 12:03:32', '2020-10-04 11:00:00', 'offline'),
	(2, 'iron man', 'iron', 'iron@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 'rekam_medis', '1999-02-13', 'Malang', 'LAKI-LAKI', '2365435654325675', '0865748121', 'rt/rw 13/03 de stare kec sugihwaras kab bojonegoro', 'iron.png', '2020-10-03 15:39:05', '2020-10-03 15:39:05', 'offline'),
	(5, 'Tri Ardiansyah', 'tri', 'tria84838@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'rekam_medis', '2020-10-09', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'default.jpg', '2020-10-04 12:01:09', '2020-10-03 13:27:26', 'offline'),
	(6, 'Ega Firgatia', 'ega', 'ega@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'admin', '2020-10-01', 'Bojonegoro', 'LAKI-LAKI', '7463283737222345', '085880633630', 'sssssssssssssssssssssssssssssss', '.png', '2020-10-03 13:32:17', '2020-10-03 13:32:17', 'offline'),
	(8, 'Ely Nur', 'ely', 'elynur@gmail.com', '202cb962ac59075b964b07152d234b70', 'rekam_medis', '2020-10-05', 'Tuban', 'PEREMPUAN', '7463283737222345', '085880633630', 'sssssssssssssssssssssssssssssssssssssssssssss', 'ely.jpg', '2020-10-03 13:39:04', '2020-10-03 13:39:04', 'offline');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
