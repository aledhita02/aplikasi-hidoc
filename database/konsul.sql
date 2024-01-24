-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2024 pada 05.31
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `tartikel`
--

CREATE TABLE `tartikel` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `artikel` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tartikel`
--

INSERT INTO `tartikel` (`id`, `judul`, `artikel`, `foto`, `date`) VALUES
(1, ' Jagung Itu Sehat : Manfaat Luar Biasa untuk Kesehatan', 'Jagung, yang sering dianggap sebagai makanan yang umum dan biasa, sebenarnya menyimpan sejumlah manfaat kesehatan yang luar biasa. Pertama-tama, jagung merupakan sumber serat yang baik, terutama serat pangan yang berperan penting dalam menjaga kesehatan pencernaan, mengurangi risiko sembelit, dan menjaga kadar gula darah tetap stabil. Selain itu, konsumsi serat juga dapat membantu mengurangi risiko penyakit jantung dan kolesterol tinggi.  Tidak hanya itu, jagung juga kaya akan antioksidan, seperti lutein dan zeaxanthin, yang menjaga kesehatan mata dengan melindungi dari kerusakan akibat radiasi UV dan membantu mencegah penyakit mata terkait usia. Kandungan antioksidan ini membuat jagung menjadi tambahan yang baik untuk mempertahankan kesehatan mata Anda.  Selain itu, jagung merupakan sumber energi yang baik berkat karbohidrat kompleksnya. Karbohidrat ini memberikan energi bertahap, menjaga kadar gula darah tetap stabil, dan memberikan rasa kenyang lebih lama. Ini menjadikan jagung pilihan makanan yang baik untuk menjaga tingkat energi sepanjang hari.  Tak hanya sebagai penyedia energi, jagung juga mengandung nutrisi penting, termasuk vitamin B kompleks seperti tiamin (B1), niacin (B3), dan folat (B9). Vitamin-vitamin ini mendukung metabolisme energi, pembentukan sel darah merah, dan menjaga kesehatan sistem saraf.  Dengan tambahan asam lemak omega-3 dan omega-6, jagung juga dapat mendukung kesehatan jantung dengan mengurangi risiko penyakit kardiovaskular. Fitosterol yang terdapat dalam jagung juga membantu menurunkan kadar kolesterol dalam darah.  Jangan lupakan manfaat jagung untuk kesehatan kulit. Kandungan vitamin E dalam jagung dapat melindungi kulit dari kerusakan akibat sinar UV dan membantu mempercepat penyembuhan luka.  Terlebih lagi, jagung adalah pilihan makanan yang fleksibel. Dapat dimasak dalam berbagai cara, seperti direbus, dipanggang, dipepes, atau dijadikan bahan dasar untuk berbagai hidangan. Kesederhanaan dalam memasak jagung membuatnya mudah diintegrasikan ke dalam pola makan sehari-hari. Jangan hanya melihat jagung sebagai camilan yang lezat, tetapi juga sebagai investasi dalam kesehatan Anda. Mulailah menikmati kelezatan dan manfaat kesehatan jagung mulai dari sekarang!', 'photos/jagung.jpg', '2024-01-19 14:39:01'),
(2, 'Mangga Itu Manis : Kelezatan dan Manfaat Kesehatan', 'Mangga, dengan rasa manis khas dan aroma yang menggoda, tidak hanya menjadi buah favorit di seluruh dunia, tetapi juga menyimpan sejumlah manfaat kesehatan yang luar biasa. Kelezatan mangga tidak dapat disangkal, dengan setiap gigitannya memberikan pengalaman rasa yang memanjakan lidah dan menjadikannya pilihan utama untuk camilan sehat atau penyegar dalam hidangan.  Selain rasa manis yang memikat, mangga juga merupakan sumber vitamin C yang sangat baik, mendukung sistem kekebalan tubuh, meningkatkan penyerapan zat besi, dan menjaga kesehatan kulit. Kandungan antioksidan, seperti beta-karoten dan polifenol, dalam mangga membantu melindungi sel-sel tubuh dari radikal bebas, menawarkan perlindungan terhadap penuaan dini, dan mengurangi risiko penyakit kronis.  Tidak hanya memberikan kelezatan dan nutrisi, mangga juga kaya serat pangan yang mendukung pencernaan sehat, mengatasi masalah sembelit, dan memberikan rasa kenyang lebih lama. Kandungan air yang tinggi dalam mangga memberikan sensasi kesegaran dan membantu menjaga tubuh tetap terhidrasi, penting untuk fungsi organ tubuh dan keseimbangan elektrolit.  Mangga bukan hanya sumber energi alami berkat gula alaminya, seperti glukosa, fruktosa, dan sukrosa, tetapi juga menawarkan keunikan dalam berbagai varietas. Dari yang dimakan langsung hingga diolah menjadi hidangan kreatif seperti smoothie, salad buah, atau sambal mangga, mangga memberikan variasi dan kreativitas dalam konsumsi buah.  Dengan segala kelezatan dan manfaat kesehatannya, mangga bukan hanya memuaskan selera, tetapi juga memberikan kontribusi positif untuk kesehatan tubuh secara menyeluruh. Oleh karena itu, jadikanlah mangga sebagai bagian tak terpisahkan dari pola makan sehat Anda untuk menikmati kelezatan dan manfaatnya yang melimpah.', 'photos/mangga.jpg', '2024-01-19 14:39:52'),
(19, 'Melon Hijau : Segar dan Penuh Manfaat untuk Kesehatan', 'Melon hijau, dengan warna yang mencolok dan rasa yang segar, bukan hanya sekadar buah meja yang menyegarkan, melainkan juga menyimpan sejumlah manfaat kesehatan yang patut diperhitungkan. Dalam setiap potongan melon hijau, terkandung segarnya hidrasi dan sejumlah nutrisi esensial yang dapat memberikan kontribusi positif pada kesehatan tubuh.  Warna hijau pada melon menandakan kandungan tinggi pigmen alami, seperti klorofil, yang dikenal sebagai antioksidan kuat. Antioksidan ini membantu melawan radikal bebas, mendukung perlindungan sel-sel tubuh, dan dapat mengurangi risiko penyakit kronis.  Melon hijau juga mengandung banyak air, sehingga sangat efektif dalam menjaga tubuh tetap terhidrasi. Kehidratan yang cukup penting untuk menjaga keseimbangan elektrolit, meningkatkan fungsi organ tubuh, dan mendukung kulit agar tetap sehat dan segar.  Selain itu, melon hijau kaya akan vitamin dan mineral, seperti vitamin A, vitamin C, dan potasium. Vitamin A penting untuk kesehatan mata dan kulit, sedangkan vitamin C mendukung sistem kekebalan tubuh dan mempercepat penyembuhan luka. Potasium membantu menjaga tekanan darah normal dan keseimbangan cairan tubuh.  Mengonsumsi melon hijau juga merupakan cara yang lezat untuk meningkatkan asupan serat. Serat dalam melon dapat membantu menjaga kesehatan pencernaan, mengurangi risiko sembelit, dan memberikan rasa kenyang lebih lama.  Selain manfaat kesehatan, melon hijau juga menjadi pilihan yang segar dan lezat untuk disantap langsung atau diolah menjadi berbagai hidangan, seperti salad buah, smoothie, atau campuran dengan yogurt. Keberagaman cara mengonsumsi melon hijau memberikan fleksibilitas dalam menikmati buah ini sesuai selera dan kreativitas pribadi.  Dengan segala kebaikan yang terkandung dalam setiap potongan melon hijau, jadikanlah buah ini sebagai bagian yang tak terpisahkan dari pola makan sehat Anda. Nikmati kelezatan dan manfaat kesehatan yang melimpah dari melon hijau untuk mendukung gaya hidup yang seimbang dan bugar.', 'photos/melon.jpg', '2024-01-19 14:41:53'),
(20, 'Sayur Itu Murah : Kekayaan Kesehatan yang Terjangkau', 'Sayuran, selain menjadi bagian integral dari pola makan sehat, juga menawarkan keunggulan ekonomis sebagai pilihan nutrisi yang terjangkau. Keberlimpahan manfaat kesehatan yang terkandung dalam sayuran membuatnya menjadi investasi yang tak hanya baik untuk tubuh, tetapi juga untuk dompet Anda.  Kaya akan vitamin, mineral, dan serat, sayuran memberikan kontribusi penting untuk menjaga kesehatan tubuh secara menyeluruh. Vitamin A, vitamin C, dan vitamin K adalah contoh nutrisi yang melimpah dalam sayuran, yang mendukung kesehatan mata, sistem kekebalan tubuh, dan pembekuan darah. Serat, yang juga banyak terdapat dalam sayuran, membantu menjaga pencernaan yang sehat dan memberikan rasa kenyang lebih lama.  Selain itu, sayuran sering kali menjadi sumber protein nabati yang terjangkau. Protein nabati ini penting untuk pembentukan dan pemeliharaan jaringan tubuh, serta memberikan energi bertahan lama tanpa lemak jenuh yang berlebihan.  Keuntungan ekonomis dari sayuran juga terletak pada ketersediaannya sepanjang tahun. Dengan berbagai jenis sayuran yang dapat ditemukan di pasar lokal, baik yang segar, beku, maupun kalengan, Anda dapat memilih opsi yang sesuai dengan anggaran dan kebutuhan gizi Anda.  Selain itu, sayuran juga bisa menjadi bahan dasar yang fleksibel untuk berbagai hidangan. Dari salad segar hingga sup yang hangat, sayuran dapat diolah dengan berbagai cara yang sesuai dengan selera dan preferensi pribadi. Ini memberikan kesempatan untuk menikmati kelezatan dan manfaat kesehatan tanpa harus menguras isi dompet.  Dengan keberlimpahan manfaat kesehatan dan daya beli yang ramah, sayuran menawarkan pilihan yang cerdas dan terjangkau untuk meningkatkan kualitas pola makan Anda. Sebagai bagian integral dari gaya hidup sehat, konsumsi sayuran dapat membantu Anda mencapai tujuan kesehatan Anda tanpa harus memberatkan anggaran. Sebuah investasi murah yang memberikan hasil luar biasa untuk kesehatan jangka panjang Anda.', 'photos/sayur.jpg', '2024-01-19 14:42:39'),
(21, 'Nutrisi Wortel : Manfaatnya Bagi Tubuh Kita', 'Wortel, dengan warna oranye cerahnya yang khas, bukan hanya sekadar sayuran yang bisa dimakan, tetapi juga menyajikan kelezatan dan manfaat kesehatan yang tak terbantahkan. Dalam setiap gigitannya, wortel memberikan pengalaman rasa yang renyah dan manis, sementara juga menyuguhkan sejumlah nutrisi yang menguntungkan untuk tubuh.  Warna oranye pada wortel menandakan kandungan beta-karoten yang tinggi, sejenis antioksidan yang dapat diubah menjadi vitamin A oleh tubuh. Vitamin A esensial untuk kesehatan mata, membantu mempertahankan penglihatan yang baik, dan mendukung pertumbuhan sel-sel tubuh.  Wortel juga dikenal sebagai sumber serat pangan yang baik. Serat ini penting untuk menjaga kesehatan pencernaan, mencegah sembelit, dan memberikan rasa kenyang lebih lama. Selain itu, konsumsi serat yang cukup dapat membantu mengontrol berat badan dan meningkatkan kadar kolesterol baik dalam tubuh.  Tidak hanya lezat dan menyehatkan, wortel juga mengandung sejumlah nutrisi penting lainnya, termasuk vitamin K, vitamin C, kalium, dan vitamin B kompleks. Vitamin-vitamin tersebut berperan dalam pembekuan darah, dukungan sistem kekebalan tubuh, keseimbangan elektrolit, dan metabolisme energi.  Wortel juga dapat diolah dengan berbagai cara, membuatnya menjadi pilihan yang fleksibel untuk berbagai hidangan. Dari sajian segar wortel mentah hingga hidangan kukus atau dipanggang, wortel dapat disesuaikan dengan selera dan preferensi kuliner masing-masing.  Selain memenuhi selera lidah, wortel juga merupakan camilan sehat yang ramah anggaran. Ketersediaannya sepanjang tahun membuatnya menjadi pilihan yang praktis untuk memenuhi kebutuhan nutrisi harian tanpa harus menguras isi dompet.  Dengan kelezatan dan manfaat kesehatannya, wortel adalah bukti nyata bahwa sayuran bukan hanya elemen makanan yang dapat dimakan, tetapi juga penyumbang utama untuk pola makan sehat dan bergizi. Jadikan wortel sebagai bagian tak terpisahkan dari menu harian Anda, dan nikmati kelezatan serta manfaat kesehatannya setiap hari.', 'photos/wortel.jpg', '2024-01-19 14:43:45'),
(22, 'Apel Itu Segar : Kenikmatan dan Manfaat Kesehatan Bagi Tubuh', 'Apel, dengan keceriaan warna dan kelembutan rasa, tak hanya sekadar buah yang segar secara fisik, tetapi juga menyiratkan kesejukan dan manfaat kesehatan yang melimpah. Gigitan pertama ke dalam daging apel memberikan sensasi kelezatan, menghadirkan kombinasi manis, asam, dan renyah yang memanjakan lidah.  Kandungan air yang tinggi dalam apel menjadikannya sebagai camilan penyegar yang sempurna, memberikan hidrasi alami dan membangunkan selera dengan setiap gigitan. Apel juga mengandung serat pangan, membantu menjaga kesehatan pencernaan, serta memberikan rasa kenyang yang dapat menjadi teman setia dalam menjalani pola makan sehat.  Keberagaman nutrisi dalam apel juga patut diperhitungkan. Dari vitamin C yang mendukung sistem kekebalan tubuh, hingga serat yang membantu menurunkan risiko penyakit jantung, apel adalah paket lengkap nutrisi yang memperkaya pola makan sehari-hari. Senyawa antioksidan dalam apel juga dapat memberikan perlindungan terhadap kerusakan sel akibat radikal bebas.  Salah satu keunikan apel adalah kemampuannya menjadi camilan yang praktis dan mudah dibawa ke mana pun. Tanpa perlu persiapan khusus, apel dapat menjadi penyelamat di tengah hari yang sibuk atau sebagai teman sehat di saat bepergian.  Dengan kelezatan dan manfaat kesehatannya, apel adalah bukti bahwa kenikmatan kuliner dapat berpadu dengan kesehatan. Jadikan apel sebagai bagian tak terpisahkan dari gaya hidup sehat Anda, dan nikmati setiap gigitannya sebagai investasi dalam kesejahteraan tubuh Anda.', 'photos/apel.jpg', '2024-01-19 14:44:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkomentar`
--

CREATE TABLE `tkomentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `komentar` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tkomentar`
--

INSERT INTO `tkomentar` (`id`, `nama`, `komentar`, `date`, `post`) VALUES
(53, 'Sanny', 'Beliin apelnya donk kak', '2024-01-19 18:33:23', 22),
(67, 'Sanny', 'hehehe', '2024-01-19 18:56:11', 22),
(68, 'Venda', 'Diet bersama apel yuk hehe', '2024-01-19 18:57:22', 22),
(73, 'Sandika', 'Sayur biji nangka apa lagi tuh, enak banget', '2024-01-19 19:05:15', 20),
(75, 'Alessandro Pramudhit', 'Melon sedep banget euy', '2024-01-19 19:11:33', 19),
(76, 'Sandika', 'Jus wortel enak tau', '2024-01-24 04:16:43', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkonsultasi`
--

CREATE TABLE `tkonsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `topik_konsul` text NOT NULL,
  `konsultasi_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_konsul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpesan`
--

CREATE TABLE `tpesan` (
  `id_pesan` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `pesan_teks` text NOT NULL,
  `pesan_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pesan_attachment` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tspesialisasi`
--

CREATE TABLE `tspesialisasi` (
  `id_spesialisasi` int(11) NOT NULL,
  `kode_spesialisasi` varchar(20) NOT NULL,
  `nama_spesialisasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tspesialisasi`
--

INSERT INTO `tspesialisasi` (`id_spesialisasi`, `kode_spesialisasi`, `nama_spesialisasi`) VALUES
(19, 'SK', 'Spesialis Kandungan'),
(20, 'SKT', 'Spesialis Kulit'),
(22, 'SJ', 'Spesialis Jantung'),
(23, 'SA', 'Spesialis Anak'),
(24, 'SS', 'Spesialis Saraf'),
(25, 'SM', 'Spesialis Mata'),
(28, 'SBP', 'Spesialis Bedah Plastik'),
(29, 'SPRU', 'Spesialis Paru-Paru'),
(30, 'SPM', 'Spesialis Mulut');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama_user`, `email_user`, `telp_user`, `pass_user`, `spesialis`, `role`, `foto_user`, `tgl_lahir`, `jk`) VALUES
(42, 'Admin', 'admin@gmail.com', '082213525038', '$2y$10$k1XJn46DWrICjAwPh1NA1uBPvT9y0b6KUBTqeD2q7cdCzvrlvS2GK', NULL, 'admin', 'photos/admin.jpg', '1997-01-02', 'Laki-Laki'),
(98, 'Andika', 'andika@gmail.com', '0833446677', '$2y$10$xHWdgXje8rzWlV5ggyjyn.J5JXNKOLXn.5tGUy2kcdTpAjDulRSQW', 'SA', 'dokter', 'photos/65aa8b654e4dc.jpg', '1994-01-04', 'Laki-Laki'),
(99, 'Budi', 'budi@gmail.com', '081288779978', '$2y$10$FqcX7N1MbvqFNy.QWlHfieCPzbnDctaE80FNH/v693GYqpzHodCT.', 'SA', 'dokter', 'photos/65aa8cd9eae7a.png', '1977-06-22', 'Laki-Laki'),
(100, 'Nia', 'nia@gmail.com', '081377886655', '$2y$10$RaWZM9trQtupntkZXmPp0OzUlJodbPxPBOGQ61Rjn0Ao2/5OMS4Mi', 'SKT', 'dokter', 'photos/65aaa551a0a7d.jpeg', '1991-04-10', 'Perempuan'),
(101, 'Anita', 'anita@gmail.com', '08135544675', '$2y$10$KaPbsMh/V2HhRZ1/G12Sq.pdTjBtjeXfl/FTNCQTS7O1mMqYFZpEG', 'SBP', 'dokter', 'photos/65aaa5ae1ab5a.jpg', '1982-07-01', 'Laki-Laki'),
(102, 'Sandi', 'sandi@gmail.com', '08776678456', '$2y$10$7UUuh.JCVzVSviySIYlThukgfvfNO9XJmgqEqzcDTTXkN8XMZWj.q', 'SPM', 'dokter', 'photos/65aaa752dacc8.jpeg', '1972-11-23', 'Laki-Laki'),
(103, 'Judika', 'judika@gmail.com', '081277668956', '$2y$10$Z0bqmBlVEO9pjcE0mnofceJnp0OAZBXoek7gGiEOr6UyHVc.tsbkW', 'SK', 'dokter', 'photos/65aaa7eb38b92.jpg', '1981-09-30', 'Laki-Laki'),
(104, 'Santika', 'santika@gmail.com', '08156665386', '$2y$10$/eMDDK8BDOUPDbhO85x1XeGdrUIRs2AgT1PhwpiU9uKgCPoNjhVj6', 'SM', 'dokter', 'photos/65aaa847d266e.jpg', '1990-06-19', 'Perempuan'),
(106, 'Joe', 'joe@gmail.com', '08997767563', '$2y$10$q7y42selP0fLj8QIjkC.ueV2dhRyjwl27RjjtoIlbUR9siktrRpXe', 'SPM', 'dokter', 'photos/65aaa9fa84519.jpeg', '1991-08-21', 'Laki-Laki'),
(107, 'Maya', 'maya@gmail.com', '08675342344', '$2y$10$3NJ0M37TNScFIuigMVXWROMIDILbUaArf5.Kh5LkINeO.WGb7h.sS', 'SJ', 'dokter', 'photos/65aaaa3313673.jpeg', '1982-02-10', 'Perempuan'),
(108, 'Ana', 'ana@gmail.com', '081255654442', '$2y$10$lLYS9SyuPECui4jqY8xdBuT283.EILhzJEieMsxUt.UJlxRJz3WDq', 'SS', 'dokter', 'photos/65aaaaee6bc52.jpg', '1995-03-28', 'Perempuan'),
(109, 'Novianto', 'novianto@gmail.com', '081164567744', '$2y$10$/bXlTlOrL1312m00yqhABeQVN/DsXB.OjxDVidr5Cp7FCaQROGh/m', 'SPRU', 'dokter', 'photos/65aaab6dcc822.jpeg', '1993-08-15', 'Laki-Laki'),
(111, 'Radit', 'radit@gmail.com', '087766353272', '$2y$10$/puVOziXS.A3iVoJE39QcuRBGT4IQTGzLJDQ0YMYR0ZD/Pnx3oXtO', NULL, 'user', 'photos/65aaacc6a6903.jpg', '2001-01-03', 'Laki-Laki'),
(112, 'Venda', 'venda@gmail.com', '087767645723', '$2y$10$ykxq3GtsGRwW2oWiOEA9keHLa0/GTlI6FfoUXRJ8viDI72pysJudO', NULL, 'user', 'photos/65aaad0f46caf.jpg', '2001-12-15', 'Perempuan'),
(113, 'Sanny', 'sanny@gmail.com', '08128453534', '$2y$10$VGkXqInhIZpncm.yNPSkxulJ8ahIroA4zpVT.vD6Tmhcf/AYon3mC', NULL, 'user', 'photos/65aaad9819c3d.jpg', '2006-04-07', 'Perempuan'),
(114, 'Sandika', 'sandika@gmail.com', '08128834432', '$2y$10$7m554T6xLRrFUm4oZ00bwuZ0e0zEgnxJoxUfQKp8aIgvCTvW/neIa', NULL, 'user', 'photos/65aab2d4b0d06.jpg', '1997-06-01', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tartikel`
--
ALTER TABLE `tartikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tkomentar`
--
ALTER TABLE `tkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter_2` (`id_dokter`,`id_pasien`);

--
-- Indeks untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_konsultasi` (`id_konsultasi`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tspesialisasi`
--
ALTER TABLE `tspesialisasi`
  ADD PRIMARY KEY (`id_spesialisasi`),
  ADD UNIQUE KEY `kode_spesialisasi` (`kode_spesialisasi`);

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`),
  ADD KEY `spesialis` (`spesialis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tartikel`
--
ALTER TABLE `tartikel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tkomentar`
--
ALTER TABLE `tkomentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tspesialisasi`
--
ALTER TABLE `tspesialisasi`
  MODIFY `id_spesialisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  ADD CONSTRAINT `tkonsultasi_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `tuser` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `tkonsultasi_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `tuser` (`id_user`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  ADD CONSTRAINT `tpesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `tpesan_ibfk_2` FOREIGN KEY (`id_konsultasi`) REFERENCES `tkonsultasi` (`id_konsultasi`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD CONSTRAINT `tuser_ibfk_1` FOREIGN KEY (`spesialis`) REFERENCES `tspesialisasi` (`kode_spesialisasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
