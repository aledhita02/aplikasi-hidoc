-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2023 at 10:34 AM
-- Server version: 5.7.40
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konsul`
--

-- --------------------------------------------------------

--
-- Table structure for table `tartikel`
--

CREATE TABLE `tartikel` (
  `id` int(5) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `artikel` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tartikel`
--

INSERT INTO `tartikel` (`id`, `judul`, `artikel`, `foto`, `date`) VALUES
(1, 'Jagung itu Sehat', 'Penemuan fakta terbaru dari dokter bahwa jagung itu sehat', 'photos/097414500_1438079406-20150728-Jagung.jpg', '2018-12-26 14:07:01'),
(2, 'Mangga itu Manis', 'Ilmuwan indonesia telah resmi menyatakan bahwa mangga itu manis', 'photos/ilustrasi-mangga_20160325_192256.jpg', '2018-12-26 14:07:12'),
(19, 'Melon itu Hijau', 'Warna hijau ditemukan pada buah melon', 'photos/23079094-cantaloupe-melon-vector-illustration.jpg', '2018-12-26 02:07:59'),
(20, 'Sayur itu Murah', 'Mahasiswa lulusan IPB menemukan bahwa sayur lebih murah daripada ayam goreng', 'photos/sayuran_20180619_101443.jpg', '2018-12-26 14:18:46'),
(21, 'Wortel Bisa Dimakan', 'Hal mengejutkan datang dari para ilmuwan bahwa wortel dapat dimakan ', 'photos/3156f99e74deee890c8db9483e9ef7fd.jpeg', '2018-12-26 02:11:41'),
(22, 'Apel itu segar', 'Siapa yang tak kenal dengan buah apel? Buah yang sangat familiar ini bisa dijumpai di manapun Anda berada, baik di pasar tradisional, swalayan bahkan supermarket. Siapa sangka, di balik rasanya yang memang enak dan segar, ada banyak manfaat buah apel bagi kesehatan yang bisa didapatkan oleh tubuh Anda.\r\nSelain populer, ternyata memang ada banyak manfaat apel bagi kesehatan tubuh. Manfaat apel bagi kesehatan yang bisa didapatkan tubuh antara lain adalah mengobati berbagai macam penyakit dan mengganti sel-sel jaringan tubuh yang rusak. Apakah hanya itu saja manfaat apel bagi kesehatan tubuh?', 'photos/31975142285_c33e90f767.jpg', '2019-01-15 04:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `tkomentar`
--

CREATE TABLE `tkomentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkomentar`
--

INSERT INTO `tkomentar` (`id`, `nama`, `komentar`, `date`, `post`) VALUES
(16, 'Reza', 'Mangga itu buah ya?', '2018-12-08 13:18:44', 2),
(18, 'Henry', 'Besok mulai nanem jagung ah', '2018-12-08 13:19:17', 1),
(19, 'Dhonny', 'Mantap gan!', '2018-12-08 13:19:39', 1),
(20, 'Reza', 'wah hebat', '2019-01-03 14:36:26', 2),
(21, 'Kevin', 'mantaab', '2019-01-03 14:41:33', 2),
(22, 'Reza', 'kereen', '2019-01-08 13:42:43', 2),
(23, 'Kevin', 'beli lah', '2019-01-08 13:44:26', 2),
(24, 'Reza', 'yoi', '2019-01-09 01:53:22', 2),
(25, 'Kevin', 'emang manis sih', '2019-01-13 14:28:38', 2),
(26, 'Reza', 'buat pulkam', '2019-01-13 14:42:28', 2),
(27, 'steven', 'bermanfaat gan', '2019-01-15 03:57:19', 20),
(28, 'steven', 'wah sangat bermanfaat', '2019-01-15 04:04:52', 22),
(29, 'steven', 'buat mamah dirumah ah', '2019-01-16 03:22:16', 2),
(30, 'steven', 'sama ayah', '2019-01-16 03:23:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tkonsultasi`
--

CREATE TABLE `tkonsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `topik_konsul` text NOT NULL,
  `konsultasi_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_konsul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkonsultasi`
--

INSERT INTO `tkonsultasi` (`id_konsultasi`, `id_dokter`, `id_pasien`, `topik_konsul`, `konsultasi_date`, `status_konsul`) VALUES
(2, 58, 57, 'Saya sakit', '2019-01-09 01:57:54', 'process'),
(8, 62, 57, 'hai dok', '2019-01-08 13:20:39', 'finish'),
(9, 58, 63, 'Saya sakit gigi', '2019-01-03 14:27:12', 'finish'),
(12, 62, 73, 'anak saya demam', '2019-01-15 04:13:40', 'finish'),
(13, 75, 73, 'hai dok', '2019-01-15 04:26:59', 'pending'),
(14, 75, 73, 'dokkk', '2019-01-15 04:27:07', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tpesan`
--

CREATE TABLE `tpesan` (
  `id_pesan` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan_teks` text NOT NULL,
  `pesan_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pesan_attachment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpesan`
--

INSERT INTO `tpesan` (`id_pesan`, `id_konsultasi`, `id_user`, `pesan_teks`, `pesan_date`, `pesan_attachment`) VALUES
(13, 2, 58, 'sakit apa ya?', '2018-12-10 04:36:51', ''),
(14, 2, 57, 'sakit demam', '2018-12-10 04:38:03', ''),
(15, 2, 58, 'Sudah Berapa lama?', '2018-12-10 04:38:33', ''),
(16, 2, 57, 'Sekitar 3 minggu', '2018-12-10 04:46:16', ''),
(17, 2, 57, 'Mulai dari hari senin', '2018-12-10 04:46:54', ''),
(18, 2, 57, 'sakit parah', '2018-12-11 02:26:50', ''),
(19, 2, 58, 'parah bet', '2018-12-10 22:05:16', NULL),
(20, 2, 58, 'a', '2018-12-10 22:05:44', NULL),
(21, 2, 58, 'a', '2018-12-10 22:06:12', NULL),
(22, 2, 57, 'b', '2018-12-10 22:07:17', NULL),
(25, 2, 58, 'apa yang di rasakan', '2018-12-11 04:32:50', NULL),
(26, 2, 58, 'apakah sakit?', '2018-12-11 04:33:18', NULL),
(27, 2, 57, 'Iya', '2018-12-12 02:04:17', NULL),
(28, 2, 57, 'Iya', '2018-12-12 02:04:33', NULL),
(29, 2, 57, 'cek', '2018-12-12 02:05:35', NULL),
(34, 2, 58, 'knp', '2018-12-12 02:12:57', NULL),
(35, 8, 62, 'iya?', '2018-12-12 02:17:28', NULL),
(36, 8, 57, 'test', '2018-12-12 02:20:12', NULL),
(37, 2, 57, 'nih penyakitnya', '2018-12-12 02:40:11', 'attachment/1497221329700.jpg'),
(38, 2, 58, 'oh saya tau penyebabnya', '2018-12-13 02:44:58', NULL),
(39, 2, 58, 'itu karena', '2018-12-13 02:45:33', NULL),
(40, 9, 58, 'test', '2018-12-18 01:26:05', NULL),
(41, 9, 58, 'test2', '2018-12-18 01:27:04', NULL),
(42, 9, 58, 'test', '2018-12-18 01:37:10', NULL),
(43, 9, 58, 'cekk', '2018-12-19 04:00:36', NULL),
(44, 9, 58, 'cek2', '2018-12-19 04:07:31', NULL),
(45, 9, 58, ' cekk3', '2018-12-19 04:09:09', NULL),
(46, 9, 58, 'cek4', '2018-12-19 04:09:39', NULL),
(47, 2, 58, 'ada penyakit', '2018-12-19 04:10:42', NULL),
(48, 2, 58, 'yang tumbuh', '2018-12-19 04:12:42', NULL),
(49, 2, 58, 'asdasd', '2018-12-19 04:14:18', NULL),
(50, 2, 58, 'sdsd', '2018-12-19 04:15:13', NULL),
(51, 2, 58, 'dsdddd', '2018-12-19 04:16:09', NULL),
(52, 2, 58, 'awe awe', '2018-12-19 04:17:48', NULL),
(53, 9, 58, 'hai', '2018-12-19 04:28:42', NULL),
(56, 2, 58, 'yaitu dengan', '2018-12-20 04:48:24', NULL),
(58, 2, 57, 'begini', '2018-12-27 03:55:52', 'attachment/1492186574473.jpg'),
(59, 2, 57, 'begini', '2018-12-27 04:08:05', 'attachment/5c24f8e5b574d.jpg'),
(60, 2, 57, 'asd', '2018-12-27 04:14:09', ''),
(61, 2, 57, 'dsadsa', '2018-12-27 04:21:09', ''),
(66, 2, 57, 'ada foto', '2018-12-27 04:23:48', 'attachment/5c24fc944a269.jpg'),
(67, 2, 57, 'gaada foto', '2018-12-27 04:23:55', ''),
(68, 8, 57, 'ini penyakitnya', '2018-12-27 04:55:05', 'attachment/5c2503e92cfeb.jpg'),
(71, 8, 57, 'asd', '2018-12-28 03:48:15', NULL),
(72, 8, 57, 'asdasdasdas', '2018-12-28 03:48:55', NULL),
(73, 8, 57, 'cek kirim', '2018-12-28 03:49:59', NULL),
(74, 8, 57, 'ini video', '2018-12-28 03:51:56', NULL),
(75, 8, 57, 'ini foto', '2018-12-28 03:53:21', NULL),
(76, 8, 57, 'ini foto', '2018-12-28 03:55:49', 'attachment/5c26478558f74.jpg'),
(79, 8, 57, 'footo2', '2018-12-28 04:00:25', 'attachment/5c2648997d2cc.jpg'),
(81, 2, 57, '', '2018-12-29 01:06:52', 'attachment/5c27716c8c4c3.jpg'),
(84, 2, 57, '', '2018-12-29 01:20:10', 'attachment/5c27748ac6aee.jpg'),
(85, 2, 57, 'test lagi', '2018-12-29 01:24:22', ''),
(86, 2, 58, 'cek', '2018-12-29 02:28:35', NULL),
(87, 9, 58, 'sesudah', '2018-12-30 04:03:15', ''),
(88, 9, 58, 'cekkkk', '2018-12-30 04:04:24', ''),
(89, 9, 58, 'asdd', '2018-12-30 04:04:40', ''),
(90, 9, 58, 'cesadas', '2018-12-30 04:08:35', ''),
(91, 9, 58, 'asdasd', '2018-12-30 04:08:45', 'attachment/5c2844cd311eb.jpg'),
(92, 9, 58, 'ini foto', '2018-12-30 04:09:21', 'attachment/5c2844f102fd4.jpg'),
(93, 9, 58, '', '2018-12-30 04:09:36', 'attachment/5c284500926a0.jpg'),
(94, 2, 57, 'ceeek', '2019-01-08 01:37:04', ''),
(97, 2, 57, 'cdscnsdcs dcscsdcds vccdscsdc sdcsdcsdc sdcsdcsdcsd cdsdcsdcsd dcsdcsdcsd csdcdscdcd cdscdscdcdsscdc dcdcdcdc dcsdvsdvdvsdvsdvdvdv dvdvdvdvdvdvdvdvds', '2019-01-09 02:13:18', ''),
(98, 2, 57, 'heu', '2019-01-09 02:39:12', ''),
(99, 2, 58, 'heheh', '2019-01-09 02:41:43', ''),
(100, 2, 58, 'haha', '2019-01-09 02:42:46', NULL),
(101, 2, 58, 'hehehe\r\n', '2019-01-09 02:56:12', ''),
(102, 2, 58, 'sdfsdfsdf', '2019-01-09 02:57:21', ''),
(103, 2, 57, 'a', '2019-01-09 03:47:36', ''),
(104, 12, 62, 'demam knapa', '2019-01-15 04:06:48', ''),
(105, 12, 62, 'sudah berapa lama?', '2019-01-15 04:08:14', ''),
(106, 12, 73, 'sudah 3 hari', '2019-01-15 04:09:30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tspesialisasi`
--

CREATE TABLE `tspesialisasi` (
  `id_spesialisasi` int(11) NOT NULL,
  `kode_spesialisasi` varchar(20) NOT NULL,
  `nama_spesialisasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tspesialisasi`
--

INSERT INTO `tspesialisasi` (`id_spesialisasi`, `kode_spesialisasi`, `nama_spesialisasi`) VALUES
(12, 'GG', 'Gigi'),
(14, 'THT', 'THT'),
(15, 'PD', 'Penyakit Dalam'),
(16, 'ANK', 'Anak'),
(17, 'KGD', 'Kandungan'),
(18, 'KNK', 'Kanker');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telp_user` varchar(20) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `spesialis` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `foto_user` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama_user`, `email_user`, `telp_user`, `pass_user`, `spesialis`, `role`, `foto_user`, `tgl_lahir`, `jk`) VALUES
(42, 'Admin1', 'admin@gmail.com', '082213525038', '$2y$10$k1XJn46DWrICjAwPh1NA1uBPvT9y0b6KUBTqeD2q7cdCzvrlvS2GK', NULL, 'admin', 'photos/1497221355172.jpg', '1997-01-02', 'Laki-Laki'),
(57, 'Reza', 'reza@gmail.com', '082113131313', '$2y$10$2pV/E8yCtHZWINUBpPQqZOg2XoGSPIXSa/BarXiX91sQSUxyG24Eu', NULL, 'user', 'photos/1497221355172.jpg', '1998-12-03', 'Laki-Laki'),
(58, 'Goldy', 'goldywidiyanto@gmail.como', '082213525038', '$2y$10$9hD0wcO.Crh/LNsDXP3KDO9ToRYynISRe3L8IwIXAM/RCpBMBtQQ.', 'GG', 'dokter', 'photos/1492186602070.jpg', '2018-12-04', 'Laki-Laki'),
(61, 'Made', 'made@gmail.com', '0823131213', '$2y$10$/YF0AZx.DbLMD8G2DcmnMuf996gNw5qT89jhbDbfwUQuCEeVB7ma2', 'THT', 'dokter', 'photos/1522510426416.jpg', '2018-11-25', 'Laki-Laki'),
(62, 'Leo', 'leo@gmail.com', '082113131313', '$2y$10$cx8PfUcikEesSO9RoFNsnOlIcYF9sYadeRu7M29GA23tZu.TvZW16', 'ANK', 'dokter', 'photos/1522510435196.jpg', '2018-11-26', 'Laki-Laki'),
(63, 'abel', 'abel@gmail.com', '02131421312', '$2y$10$6NGE7Heo.2a9uJFPCdB1b.DuDQm8fmh6Zo.0LX9CVT/PFeJ4qWHGy', NULL, 'user', 'photos/1522510426416.jpg', NULL, NULL),
(69, 'Henry', 'henry@gmail.com', '082213525038', '$2y$10$f4ZRQjizMsU5ucbmRH96Duf2JW/J8TNq9hC0q8TnU/UQwbXW.7zpC', 'PD', 'dokter', 'photos/5c25031507d09.jpg', '2018-12-18', 'Laki-Laki'),
(72, 'Kevin', 'kevin@gmail.com', '08222154134', '$2y$10$xcgG8n1PFkICltr9AaWSdeBNATIuvIApeRtDVCIiuk.ZRhBFjffay', NULL, 'user', 'photos/5c2e167a87226.jpg', NULL, NULL),
(73, 'steven', 'steven@gmail.com', '213210312', '$2y$10$T/XOefZLXYgH08yyCKafieFJi5mCSJ8U96FcofR9vsPmaenMhqFde', NULL, 'user', 'photos/5c3d59512acf6.jpg', '2019-01-10', 'Laki-Laki'),
(75, 'Ibnu', 'ibnu@gmail.com', '08843535543', '$2y$10$HlycR.600gtxwQkdzoyMCuNUY/goTO005tKVs6KKhnRfuX0WWM1Tu', 'KGD', 'dokter', 'photos/5c3d60f7bea1f.jpg', '2019-01-11', 'Laki-Laki'),
(76, 'Sigit', 'sigit@gmail.com', '082321313123', '$2y$10$lZNCARxJoM0YDtVLY/Z06.6Fxkrh02oa9xQQ4iGu8Mq6ResySYULa', 'PD', 'dokter', 'photos/5c3e8940876f5.jpg', '1998-01-07', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tartikel`
--
ALTER TABLE `tartikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkomentar`
--
ALTER TABLE `tkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter_2` (`id_dokter`,`id_pasien`);

--
-- Indexes for table `tpesan`
--
ALTER TABLE `tpesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_konsultasi` (`id_konsultasi`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tspesialisasi`
--
ALTER TABLE `tspesialisasi`
  ADD PRIMARY KEY (`id_spesialisasi`),
  ADD UNIQUE KEY `kode_spesialisasi` (`kode_spesialisasi`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD KEY `spesialis` (`spesialis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tartikel`
--
ALTER TABLE `tartikel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tkomentar`
--
ALTER TABLE `tkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tpesan`
--
ALTER TABLE `tpesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tspesialisasi`
--
ALTER TABLE `tspesialisasi`
  MODIFY `id_spesialisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  ADD CONSTRAINT `tkonsultasi_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tuser` (`id_user`),
  ADD CONSTRAINT `tkonsultasi_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tuser` (`id_user`);

--
-- Constraints for table `tpesan`
--
ALTER TABLE `tpesan`
  ADD CONSTRAINT `tpesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id_user`),
  ADD CONSTRAINT `tpesan_ibfk_2` FOREIGN KEY (`id_konsultasi`) REFERENCES `tkonsultasi` (`id_konsultasi`);

--
-- Constraints for table `tuser`
--
ALTER TABLE `tuser`
  ADD CONSTRAINT `tuser_ibfk_1` FOREIGN KEY (`spesialis`) REFERENCES `tspesialisasi` (`kode_spesialisasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
