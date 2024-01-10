-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 15.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
  `judul` varchar(50) NOT NULL,
  `artikel` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tartikel`
--

INSERT INTO `tartikel` (`id`, `judul`, `artikel`, `foto`, `date`) VALUES
(1, ' Jagung Itu Sehat : Manfaat Luar Biasa untuk Keseh', 'Jagung, yang sering dianggap sebagai makanan yang umum dan biasa, sebenarnya menyimpan sejumlah manfaat kesehatan yang luar biasa. Pertama-tama, jagung merupakan sumber serat yang baik, terutama serat pangan yang berperan penting dalam menjaga kesehatan pencernaan, mengurangi risiko sembelit, dan menjaga kadar gula darah tetap stabil. Selain itu, konsumsi serat juga dapat membantu mengurangi risiko penyakit jantung dan kolesterol tinggi.  Tidak hanya itu, jagung juga kaya akan antioksidan, seperti lutein dan zeaxanthin, yang menjaga kesehatan mata dengan melindungi dari kerusakan akibat radiasi UV dan membantu mencegah penyakit mata terkait usia. Kandungan antioksidan ini membuat jagung menjadi tambahan yang baik untuk mempertahankan kesehatan mata Anda.  Selain itu, jagung merupakan sumber energi yang baik berkat karbohidrat kompleksnya. Karbohidrat ini memberikan energi bertahap, menjaga kadar gula darah tetap stabil, dan memberikan rasa kenyang lebih lama. Ini menjadikan jagung pilihan makanan yang baik untuk menjaga tingkat energi sepanjang hari.  Tak hanya sebagai penyedia energi, jagung juga mengandung nutrisi penting, termasuk vitamin B kompleks seperti tiamin (B1), niacin (B3), dan folat (B9). Vitamin-vitamin ini mendukung metabolisme energi, pembentukan sel darah merah, dan menjaga kesehatan sistem saraf.  Dengan tambahan asam lemak omega-3 dan omega-6, jagung juga dapat mendukung kesehatan jantung dengan mengurangi risiko penyakit kardiovaskular. Fitosterol yang terdapat dalam jagung juga membantu menurunkan kadar kolesterol dalam darah.  Jangan lupakan manfaat jagung untuk kesehatan kulit. Kandungan vitamin E dalam jagung dapat melindungi kulit dari kerusakan akibat sinar UV dan membantu mempercepat penyembuhan luka.  Terlebih lagi, jagung adalah pilihan makanan yang fleksibel. Dapat dimasak dalam berbagai cara, seperti direbus, dipanggang, dipepes, atau dijadikan bahan dasar untuk berbagai hidangan. Kesederhanaan dalam memasak jagung membuatnya mudah diintegrasikan ke dalam pola makan sehari-hari. Jangan hanya melihat jagung sebagai camilan yang lezat, tetapi juga sebagai investasi dalam kesehatan Anda. Mulailah menikmati kelezatan dan manfaat kesehatan jagung mulai dari sekarang!', 'photos/ce737be452a9af49e2d832d1afb241e8.jpg', '2023-12-06 16:07:50'),
(2, 'Mangga Itu Manis : Kelezatan dan Manfaat Kesehatan', 'Mangga, dengan rasa manis khas dan aroma yang menggoda, tidak hanya menjadi buah favorit di seluruh dunia, tetapi juga menyimpan sejumlah manfaat kesehatan yang luar biasa. Kelezatan mangga tidak dapat disangkal, dengan setiap gigitannya memberikan pengalaman rasa yang memanjakan lidah dan menjadikannya pilihan utama untuk camilan sehat atau penyegar dalam hidangan.  Selain rasa manis yang memikat, mangga juga merupakan sumber vitamin C yang sangat baik, mendukung sistem kekebalan tubuh, meningkatkan penyerapan zat besi, dan menjaga kesehatan kulit. Kandungan antioksidan, seperti beta-karoten dan polifenol, dalam mangga membantu melindungi sel-sel tubuh dari radikal bebas, menawarkan perlindungan terhadap penuaan dini, dan mengurangi risiko penyakit kronis.  Tidak hanya memberikan kelezatan dan nutrisi, mangga juga kaya serat pangan yang mendukung pencernaan sehat, mengatasi masalah sembelit, dan memberikan rasa kenyang lebih lama. Kandungan air yang tinggi dalam mangga memberikan sensasi kesegaran dan membantu menjaga tubuh tetap terhidrasi, penting untuk fungsi organ tubuh dan keseimbangan elektrolit.  Mangga bukan hanya sumber energi alami berkat gula alaminya, seperti glukosa, fruktosa, dan sukrosa, tetapi juga menawarkan keunikan dalam berbagai varietas. Dari yang dimakan langsung hingga diolah menjadi hidangan kreatif seperti smoothie, salad buah, atau sambal mangga, mangga memberikan variasi dan kreativitas dalam konsumsi buah.  Dengan segala kelezatan dan manfaat kesehatannya, mangga bukan hanya memuaskan selera, tetapi juga memberikan kontribusi positif untuk kesehatan tubuh secara menyeluruh. Oleh karena itu, jadikanlah mangga sebagai bagian tak terpisahkan dari pola makan sehat Anda untuk menikmati kelezatan dan manfaatnya yang melimpah.', 'photos/ilustrasi-mangga_20160325_192256.jpg', '2023-12-06 16:08:15'),
(19, 'Melon Hijau : Segar dan Penuh Manfaat untuk Keseha', 'Melon hijau, dengan warna yang mencolok dan rasa yang segar, bukan hanya sekadar buah meja yang menyegarkan, melainkan juga menyimpan sejumlah manfaat kesehatan yang patut diperhitungkan. Dalam setiap potongan melon hijau, terkandung segarnya hidrasi dan sejumlah nutrisi esensial yang dapat memberikan kontribusi positif pada kesehatan tubuh.  Warna hijau pada melon menandakan kandungan tinggi pigmen alami, seperti klorofil, yang dikenal sebagai antioksidan kuat. Antioksidan ini membantu melawan radikal bebas, mendukung perlindungan sel-sel tubuh, dan dapat mengurangi risiko penyakit kronis.  Melon hijau juga mengandung banyak air, sehingga sangat efektif dalam menjaga tubuh tetap terhidrasi. Kehidratan yang cukup penting untuk menjaga keseimbangan elektrolit, meningkatkan fungsi organ tubuh, dan mendukung kulit agar tetap sehat dan segar.  Selain itu, melon hijau kaya akan vitamin dan mineral, seperti vitamin A, vitamin C, dan potasium. Vitamin A penting untuk kesehatan mata dan kulit, sedangkan vitamin C mendukung sistem kekebalan tubuh dan mempercepat penyembuhan luka. Potasium membantu menjaga tekanan darah normal dan keseimbangan cairan tubuh.  Mengonsumsi melon hijau juga merupakan cara yang lezat untuk meningkatkan asupan serat. Serat dalam melon dapat membantu menjaga kesehatan pencernaan, mengurangi risiko sembelit, dan memberikan rasa kenyang lebih lama.  Selain manfaat kesehatan, melon hijau juga menjadi pilihan yang segar dan lezat untuk disantap langsung atau diolah menjadi berbagai hidangan, seperti salad buah, smoothie, atau campuran dengan yogurt. Keberagaman cara mengonsumsi melon hijau memberikan fleksibilitas dalam menikmati buah ini sesuai selera dan kreativitas pribadi.  Dengan segala kebaikan yang terkandung dalam setiap potongan melon hijau, jadikanlah buah ini sebagai bagian yang tak terpisahkan dari pola makan sehat Anda. Nikmati kelezatan dan manfaat kesehatan yang melimpah dari melon hijau untuk mendukung gaya hidup yang seimbang dan bugar.', 'photos/23079094-cantaloupe-melon-vector-illustration.jpg', '2023-12-06 16:08:29'),
(20, 'Sayur Itu Murah : Kekayaan Kesehatan yang Terjangk', 'Sayuran, selain menjadi bagian integral dari pola makan sehat, juga menawarkan keunggulan ekonomis sebagai pilihan nutrisi yang terjangkau. Keberlimpahan manfaat kesehatan yang terkandung dalam sayuran membuatnya menjadi investasi yang tak hanya baik untuk tubuh, tetapi juga untuk dompet Anda.  Kaya akan vitamin, mineral, dan serat, sayuran memberikan kontribusi penting untuk menjaga kesehatan tubuh secara menyeluruh. Vitamin A, vitamin C, dan vitamin K adalah contoh nutrisi yang melimpah dalam sayuran, yang mendukung kesehatan mata, sistem kekebalan tubuh, dan pembekuan darah. Serat, yang juga banyak terdapat dalam sayuran, membantu menjaga pencernaan yang sehat dan memberikan rasa kenyang lebih lama.  Selain itu, sayuran sering kali menjadi sumber protein nabati yang terjangkau. Protein nabati ini penting untuk pembentukan dan pemeliharaan jaringan tubuh, serta memberikan energi bertahan lama tanpa lemak jenuh yang berlebihan.  Keuntungan ekonomis dari sayuran juga terletak pada ketersediaannya sepanjang tahun. Dengan berbagai jenis sayuran yang dapat ditemukan di pasar lokal, baik yang segar, beku, maupun kalengan, Anda dapat memilih opsi yang sesuai dengan anggaran dan kebutuhan gizi Anda.  Selain itu, sayuran juga bisa menjadi bahan dasar yang fleksibel untuk berbagai hidangan. Dari salad segar hingga sup yang hangat, sayuran dapat diolah dengan berbagai cara yang sesuai dengan selera dan preferensi pribadi. Ini memberikan kesempatan untuk menikmati kelezatan dan manfaat kesehatan tanpa harus menguras isi dompet.  Dengan keberlimpahan manfaat kesehatan dan daya beli yang ramah, sayuran menawarkan pilihan yang cerdas dan terjangkau untuk meningkatkan kualitas pola makan Anda. Sebagai bagian integral dari gaya hidup sehat, konsumsi sayuran dapat membantu Anda mencapai tujuan kesehatan Anda tanpa harus memberatkan anggaran. Sebuah investasi murah yang memberikan hasil luar biasa untuk kesehatan jangka panjang Anda.', 'photos/sayuran_20180619_101443.jpg', '2023-12-06 16:09:39'),
(21, ' Wortel Bisa Dimakan : Kesehatan dalam Setiap Gigi', 'Wortel, dengan warna oranye cerahnya yang khas, bukan hanya sekadar sayuran yang bisa dimakan, tetapi juga menyajikan kelezatan dan manfaat kesehatan yang tak terbantahkan. Dalam setiap gigitannya, wortel memberikan pengalaman rasa yang renyah dan manis, sementara juga menyuguhkan sejumlah nutrisi yang menguntungkan untuk tubuh.  Warna oranye pada wortel menandakan kandungan beta-karoten yang tinggi, sejenis antioksidan yang dapat diubah menjadi vitamin A oleh tubuh. Vitamin A esensial untuk kesehatan mata, membantu mempertahankan penglihatan yang baik, dan mendukung pertumbuhan sel-sel tubuh.  Wortel juga dikenal sebagai sumber serat pangan yang baik. Serat ini penting untuk menjaga kesehatan pencernaan, mencegah sembelit, dan memberikan rasa kenyang lebih lama. Selain itu, konsumsi serat yang cukup dapat membantu mengontrol berat badan dan meningkatkan kadar kolesterol baik dalam tubuh.  Tidak hanya lezat dan menyehatkan, wortel juga mengandung sejumlah nutrisi penting lainnya, termasuk vitamin K, vitamin C, kalium, dan vitamin B kompleks. Vitamin-vitamin tersebut berperan dalam pembekuan darah, dukungan sistem kekebalan tubuh, keseimbangan elektrolit, dan metabolisme energi.  Wortel juga dapat diolah dengan berbagai cara, membuatnya menjadi pilihan yang fleksibel untuk berbagai hidangan. Dari sajian segar wortel mentah hingga hidangan kukus atau dipanggang, wortel dapat disesuaikan dengan selera dan preferensi kuliner masing-masing.  Selain memenuhi selera lidah, wortel juga merupakan camilan sehat yang ramah anggaran. Ketersediaannya sepanjang tahun membuatnya menjadi pilihan yang praktis untuk memenuhi kebutuhan nutrisi harian tanpa harus menguras isi dompet.  Dengan kelezatan dan manfaat kesehatannya, wortel adalah bukti nyata bahwa sayuran bukan hanya elemen makanan yang dapat dimakan, tetapi juga penyumbang utama untuk pola makan sehat dan bergizi. Jadikan wortel sebagai bagian tak terpisahkan dari menu harian Anda, dan nikmati kelezatan serta manfaat kesehatannya setiap hari.', 'photos/3156f99e74deee890c8db9483e9ef7fd.jpeg', '2023-12-06 16:10:03'),
(22, ' Apel Itu Segar : Kenikmatan dan Manfaat Kesehatan', 'Apel, dengan keceriaan warna dan kelembutan rasa, tak hanya sekadar buah yang segar secara fisik, tetapi juga menyiratkan kesejukan dan manfaat kesehatan yang melimpah. Gigitan pertama ke dalam daging apel memberikan sensasi kelezatan, menghadirkan kombinasi manis, asam, dan renyah yang memanjakan lidah.  Kandungan air yang tinggi dalam apel menjadikannya sebagai camilan penyegar yang sempurna, memberikan hidrasi alami dan membangunkan selera dengan setiap gigitan. Apel juga mengandung serat pangan, membantu menjaga kesehatan pencernaan, serta memberikan rasa kenyang yang dapat menjadi teman setia dalam menjalani pola makan sehat.  Keberagaman nutrisi dalam apel juga patut diperhitungkan. Dari vitamin C yang mendukung sistem kekebalan tubuh, hingga serat yang membantu menurunkan risiko penyakit jantung, apel adalah paket lengkap nutrisi yang memperkaya pola makan sehari-hari. Senyawa antioksidan dalam apel juga dapat memberikan perlindungan terhadap kerusakan sel akibat radikal bebas.  Salah satu keunikan apel adalah kemampuannya menjadi camilan yang praktis dan mudah dibawa ke mana pun. Tanpa perlu persiapan khusus, apel dapat menjadi penyelamat di tengah hari yang sibuk atau sebagai teman sehat di saat bepergian.  Dengan kelezatan dan manfaat kesehatannya, apel adalah bukti bahwa kenikmatan kuliner dapat berpadu dengan kesehatan. Jadikan apel sebagai bagian tak terpisahkan dari gaya hidup sehat Anda, dan nikmati setiap gigitannya sebagai investasi dalam kesejahteraan tubuh Anda.', 'photos/31975142285_c33e90f767.jpg', '2023-12-06 16:10:18');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkomentar`
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
(30, 'steven', 'sama ayah', '2019-01-16 03:23:08', 2),
(31, 'Firman Nurcahyo', 'Hi', '2023-12-07 02:07:56', 21),
(32, 'Firman Nurcahyo', 'Hi', '2023-12-07 02:08:18', 22);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkonsultasi`
--

INSERT INTO `tkonsultasi` (`id_konsultasi`, `id_dokter`, `id_pasien`, `topik_konsul`, `konsultasi_date`, `status_konsul`) VALUES
(16, 79, 86, 'Hay dokter Anisa', '2023-12-06 16:24:56', 'process'),
(17, 82, 86, 'Hay Dokter Aditya', '2023-12-06 16:30:19', 'process'),
(18, 82, 87, 'Halo ka adit', '2023-12-07 02:14:49', 'finish');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tpesan`
--

INSERT INTO `tpesan` (`id_pesan`, `id_konsultasi`, `id_user`, `pesan_teks`, `pesan_date`, `pesan_attachment`) VALUES
(108, 16, 79, 'Pagi Firman', '2023-12-06 04:25:04', ''),
(109, 16, 86, 'Ternyata istri saya mengalami ketidakseimbangan hormon. Apakah ini umum dan bagaimana cara mengatasi masalah ini', '2023-12-06 04:26:44', ''),
(110, 16, 79, 'Ketidakseimbangan hormon bisa menjadi penyebab masalah siklus menstruasi yang tidak teratur. Pengobatan akan disesuaikan berdasarkan kebutuhan khususnya. Kami bisa membahas lebih lanjut saat janji berikutnya.', '2023-12-06 04:27:02', ''),
(111, 16, 86, 'Bagaimana dengan rencana kehamilan? Apakah ketidakseimbangan hormon ini akan memengaruhi kemampuan kami untuk memiliki anak?', '2023-12-06 04:27:24', ''),
(112, 16, 79, 'Pada beberapa kasus, ketidakseimbangan hormon dapat mempengaruhi kesuburan, tetapi banyak yang bisa dilakukan untuk membantu. Kami akan merencanakan perawatan yang sesuai dengan tujuan kehamilan Anda.', '2023-12-06 04:27:32', ''),
(113, 16, 86, 'Terima kasih, Dr. Anisa. Kami akan terus mengikuti saran Anda dan membuat janji untuk pembahasan lebih lanjut.', '2023-12-06 04:27:43', ''),
(114, 16, 79, 'Sama-sama, Firman. Saya di sini untuk membantu dan mendukung Anda dan istri selama proses ini. Jangan ragu untuk bertanya jika ada pertanyaan lebih lanjut.', '2023-12-06 04:27:54', ''),
(115, 17, 82, 'Hay Firman', '2023-12-06 04:30:28', ''),
(116, 18, 82, 'Hai nandur\r\n', '2023-12-07 02:13:37', ''),
(117, 18, 82, 'Hai nandur\r\n', '2023-12-07 02:13:37', ''),
(118, 18, 82, '', '2023-12-07 02:13:59', 'attachment/65712a676d89f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tspesialisasi`
--

CREATE TABLE `tspesialisasi` (
  `id_spesialisasi` int(11) NOT NULL,
  `kode_spesialisasi` varchar(20) NOT NULL,
  `nama_spesialisasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tspesialisasi`
--

INSERT INTO `tspesialisasi` (`id_spesialisasi`, `kode_spesialisasi`, `nama_spesialisasi`) VALUES
(19, 'SK', 'Spesialis Kandungan'),
(20, 'SKT', 'Spesialis Kulit'),
(21, 'SBP', 'Spesialis Bedah Plastik'),
(22, 'SJ', 'Spesialis Jantung'),
(23, 'SA', 'Spesialis Anak'),
(24, 'SS', 'Spesialis Saraf'),
(25, 'SM', 'Spesialis Mata');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama_user`, `email_user`, `telp_user`, `pass_user`, `spesialis`, `role`, `foto_user`, `tgl_lahir`, `jk`) VALUES
(42, 'Admin1', 'admin@gmail.com', '082213525038', '$2y$10$k1XJn46DWrICjAwPh1NA1uBPvT9y0b6KUBTqeD2q7cdCzvrlvS2GK', NULL, 'admin', 'photos/65708e13679d9.png', '1997-01-02', 'Laki-Laki'),
(79, 'Anisa Safitri', 'anisa@gmail.com', '(804) 545-9922', '$2y$10$FHx6EKzWOhTYnty13gsxI.u.oby6oBCZUtlrDHyMyOrd8d1vT1kyW', 'SK', 'dokter', 'photos/65709e5d12fef.png', '1993-05-06', 'Perempuan'),
(80, 'Monica Utami', 'monica@gmail.com', '(251) 906-0650', '$2y$10$4kVWOe5atjamM5Qy0ML6deMHZTITYSvFQyMdRLymtVrGTH3ByU9GK', 'SKT', 'dokter', 'photos/65709e8851e45.jpg', '1982-01-06', 'Perempuan'),
(81, 'Putri Larasati', 'putri@gmail.com', '(469) 656-7790', '$2y$10$RsU78mZyQBsvv7D5KI4NXuz9SP0nEGRofVKrFkjlHhUz23pTX7sHy', 'SBP', 'dokter', 'photos/65709eb2a37ad.jpg', '1990-06-06', 'Perempuan'),
(82, 'Aditya Pratama', 'aditya@gmail.com', '(831) 184-2175', '$2y$10$tSmo5eB4buC.RJr0awxhI.a73KCch7OULFnVV7MxRtS8pwku7kujq', 'SJ', 'dokter', 'photos/65709f1d6295c.jpg', '1983-02-06', 'Laki-Laki'),
(83, 'Farhan Malik ', 'farhan@gmail.com', '(570) 427-6934', '$2y$10$dsLpGMsS0BFvbGqYKZyzQeLm9xTrMrY5MxnIZ5SzW10/gDw4zzvwO', 'SA', 'dokter', 'photos/65709f47b85e7.jpg', '1981-01-06', 'Laki-Laki'),
(86, 'Firman Nurcahyo', 'firman@gmail.com', '(+62) 812 9629 0578', '$2y$10$3OB3o9fEp0hf13LsdRMZk.QzeKlZ/nDAOVAcQmReVcI.jmGsnqjbi', NULL, 'user', 'photos/65709fe302427.png', '2003-06-07', 'Laki-Laki'),
(87, 'Nandur', 'nandur@gmail.com', '(804) 545-9922', '$2y$10$/smK3.0BE64IZDAcAVw/ueitOITKdWVF43HGRvoAdNKYJgz3WStTq', NULL, 'user', 'photos/6571295c4f7bc.png', '2023-12-07', 'Laki-Laki'),
(88, 'Arjun', 'arjun@gmail.com', '(469) 656-7790', '$2y$10$D15QKO0uFVDAcO4KDryPMuEz1eUKvtuHZMu6ewo81P/F59o0vrCTu', 'SS', 'dokter', 'photos/65712b3ac48e4.png', '2023-12-07', 'Laki-Laki');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tkonsultasi`
--
ALTER TABLE `tkonsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tpesan`
--
ALTER TABLE `tpesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `tspesialisasi`
--
ALTER TABLE `tspesialisasi`
  MODIFY `id_spesialisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
