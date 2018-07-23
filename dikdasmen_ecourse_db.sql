-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 02:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dikdasmen_ecourse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(26) NOT NULL,
  `judul_berita` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `berita` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `berita`, `gambar`, `tgl_dibuat`, `id_user`) VALUES
(1, 'Kikuk', 'Visi\nMenjadi Penyelenggara Pendidikan Muhammadiyah berbasis Al-Islam dan Kemuhammadiyahan yang bertatakelola baik, serta berkeunggulan dan berdaya saing.\nMisi\n1. Menguatkan identitas pendidikan Muhammadiyah melalui intensifikasi pembinaan akhlak islami dan ideologi Muhammadiyah.\n2. Menyusun roadmap dan database pendidikan Muhammadiyah DIY untuk menguatkan peran dan fungsi pendidikan Muhammadiyah sebagai kaderisasi.\n3. Meningkatkan kualitas jaringan kemitraan dan kerjasama pendidikan Muhammadiyah dalam dan luar negeri.\n4. Meningkatkan kualitas kepemimpinan pembelajaran bagi guru dan kepala sekolah, tata kella, peraturan dan penjaminan mutu pendidikan Muhammadiyah DIY baik sekolah maupun madrasah.\n5. Menigkatkan jumlah sekolah/madrasah yang memenuhi kualifikasi akreditasi, berkeunggulan, dan berdaya saing.\n', '', '2017-06-03 04:38:25', 2),
(3, 'Ramadhan Momen Beribadah Secara Seimbang', 'Manusia merupakan makhluk sosial. Selain hubungan vertikal manusia dengan tuhannya sebagai Sang Pencipta, kita juga menjalin hubungan dengan sesama makhluk-Nya secara horisontal. Oleh karena itu, di bulan Ramadhan ini Dharma Wanita Persatuan (DWP) UIN Sunan Kalijaga Yogyakarta melaksanakan bakti sosial berupa pembagian Paket Sembako kepada pegawai non-PNS di lingkungan UIN Suka, Jum’at (2/6).\n\nKetua Dharma Wanita Persatuan UIN Sunan Kalijaga Dra. Hj. Handaroh Yudian menuturkan momen Ramadhan merupakan bulan yang penuh berkah. Manusia dituntut untuk meningkatkan ibadah kepada Allah S.W.T. Salah satunya dengan bersedekah dan mengasihi antar sesama manusia. Dalam beribadah harus seimbang antara habluminallah dan habluminannas.\n\nHandaroh menambahkan pada bakti sosial ini ada 150paket sembako yang dibagikan. Mereka yang menerima dari golongan pegawai kontrak dan petugas kebersihan (cleaning service). Sementara isi dari satu paket sembako adalah terdiri dari minyak goreng, gula pasir, sirup, susu, mie instan, wafer dan kopi. “ Kegiatan ini kita niatkan ibadah dan bersilaturrahim dengan karyawan agar saling mengenal” tutur Handaroh.\n\nSelain pembagian paket sembako, DWP UIN Sunan Kalijaga akan mengadakan silaturrahmike rumah para guru besar, dosen dan pegawai yang sudah pensiun atau yang sedang terkena musibah. Rencananya kita akan mengunjungi 15 – 20 rumah setelah lebaran. “ Mereka akan merasa bahagia dan senang, karena kita perhatian kepadanya”, kata Handaroh ketika ditemui di gedung PAU UIN Sunan Kalijaga.\n\n“Tahun sebelumnya kita sempat mengadakan bakti sosial ke Panti Jompo Wreda Hanna. Kali ini memperbanyak silaturrahmike pegawai pensiunan UIN Sunan Kalijaga, sambilmenanyakan kesehatan dan kabar mereka yang sudah mengabdi membangun dan membesarkan kampus ini” ucap Handaroh di sela memberikan paket sembako.\n\nUcapan terimakasih kepada anggota DWP dan Pimpinan UIN Sunan Kalijaga yang telah mengupayakan dan mengelola kantin, karena pendapatan dari situ bisa menyisihkan sebagian keuntungan untuk beramal dankebahagian orang lain. (habib/humas)', '', '2017-06-05 21:31:27', 2),
(4, 'Bila Resmi Menjabat, Anies Janji Tingkatkan Kesejahteraan Guru', 'Hal ini disampaikan saat menerima kunjungan dari guru dan murid dari Taman Kanak-kanak (TK) Besuki Menteng, Jakarta Pusat.\r\n\r\nBACA JUGA\r\nSoal Hadiah Lebaran, Ini Imbauan KPK Pada Penyelenggara Negara dan PNS\r\nXL Axiata Gelar Mudik Bareng, Wujud Apresiasi Kepada Retailer\r\nImbauan MUI Jelang dan Setelah Lebaran 2017\r\n\"Banyak pengajar yang tidak mendapatkan kompensasi yang layak. Karena itu salah satu janji kita untuk meningkatkan kompensasi itu,\" ucap Anies di Lebak Bulus, Jakarta Selatan, Rabu (21/6/2017).\r\n\r\nTak hanya itu, mantan Menteri Pendidikan dan Kebudayaan tersebut juga menyatakan dalam pemerintahannya bersama Sandiaga Uno akan memfokuskan pada pendidikan usia dini, antara umur 0 hingga 6 tahun.\r\n\r\n\"Pendidikan usia dini mempunyai dampak paling besar, sifatnya jangka panjang. Biasanya malah (masyarakat) tidak banyak memikirkan,\" ujar dia.\r\n\r\nKarena hal tersebut, Anies beralasan dengan kemajuan pendidikan akan sebanding dengan tingkat kesejahteraan yang didapatkan oleh masyarakat.\r\n\r\n\"Tapi kita merasa wahana ini yang dapat membantu membangun masyarakat secara umum,\" jelas Anies.', 'default.jpg', '2017-06-22 14:47:12', 0),
(5, 'Bila Resmi Menjabat, Anies Janji Tingkatkan Kesejahteraan Guru', 'Hal ini disampaikan saat menerima kunjungan dari guru dan murid dari Taman Kanak-kanak (TK) Besuki Menteng, Jakarta Pusat.\r\n\r\nBACA JUGA\r\nSoal Hadiah Lebaran, Ini Imbauan KPK Pada Penyelenggara Negara dan PNS\r\nXL Axiata Gelar Mudik Bareng, Wujud Apresiasi Kepada Retailer\r\nImbauan MUI Jelang dan Setelah Lebaran 2017\r\n\"Banyak pengajar yang tidak mendapatkan kompensasi yang layak. Karena itu salah satu janji kita untuk meningkatkan kompensasi itu,\" ucap Anies di Lebak Bulus, Jakarta Selatan, Rabu (21/6/2017).\r\n\r\nTak hanya itu, mantan Menteri Pendidikan dan Kebudayaan tersebut juga menyatakan dalam pemerintahannya bersama Sandiaga Uno akan memfokuskan pada pendidikan usia dini, antara umur 0 hingga 6 tahun.\r\n\r\n\"Pendidikan usia dini mempunyai dampak paling besar, sifatnya jangka panjang. Biasanya malah (masyarakat) tidak banyak memikirkan,\" ujar dia.\r\n\r\nKarena hal tersebut, Anies beralasan dengan kemajuan pendidikan akan sebanding dengan tingkat kesejahteraan yang didapatkan oleh masyarakat.\r\n\r\n\"Tapi kita merasa wahana ini yang dapat membantu membangun masyarakat secara umum,\" jelas Anies.', 'default.jpg', '2017-06-22 23:49:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(26) NOT NULL,
  `f_nama` varchar(40) NOT NULL,
  `l_nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` int(15) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `f_nama`, `l_nama`, `email`, `no_hp`, `message`, `tgl_dibuat`) VALUES
(3, 'murid', 'rajin', 'murid@gmail.com', 2147483647, 'ada aja', '2017-06-03 19:32:59'),
(7, 'ikka', 'aja', 'ikka@gmail.com', 765643235, 'kamu cantik', '2017-06-03 19:33:27'),
(8, 'zxc', 'zxc', 'zxc@x.com', NULL, 'zxcxx', '2017-06-23 03:11:03'),
(9, 'mznxcmn', 'mnbmznxcbm', 'asd@asd.com', NULL, 'zxczxc Mantapp', '2017-06-23 03:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_download`
--

CREATE TABLE `jumlah_download` (
  `id_jumlah_download` int(24) NOT NULL,
  `id_materi` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah_download`
--

INSERT INTO `jumlah_download` (`id_jumlah_download`, `id_materi`) VALUES
(1, 48),
(2, 48),
(3, 48),
(4, 48),
(5, 48),
(6, 48),
(7, 6),
(8, 6),
(9, 7),
(10, 7),
(11, 3),
(12, 47);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(16) NOT NULL,
  `id_user` int(16) NOT NULL,
  `id_materi` int(16) NOT NULL,
  `komentar` varchar(300) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_user`, `id_materi`, `komentar`, `tgl_dibuat`) VALUES
(1, 3, 1, 'Saya sangat berterimakasih karena bermanfaat', '2017-05-16 17:08:37'),
(2, 2, 1, 'Sukron Barakallah', '2017-05-16 17:08:37'),
(3, 4, 8, 'terimakasih\r\n semua', '2017-05-17 16:52:17'),
(4, 4, 8, 'Ada materi selanjutnya kah?', '2017-05-17 16:56:42'),
(5, 4, 4, 'Ini yang saya cari', '2017-05-17 16:58:56'),
(6, 4, 2, 'Alhamdulillah, bertambah ilmu', '2017-05-17 17:38:49'),
(14, 2, 46, 'Indah nya masyaaAllah', '2017-05-30 08:21:09'),
(15, 2, 46, 'Bagus', '2017-05-31 04:35:50'),
(16, 2, 46, 'Bagus juga', '2017-05-31 04:36:00'),
(17, 2, 46, 'Juga Bagus', '2017-05-31 04:36:11'),
(18, 2, 47, 'bagus', '2017-06-03 00:49:44'),
(19, 3, 8, 'terimaksih', '2017-06-13 03:53:45'),
(20, 4, 46, 'Cek', '2017-06-13 03:57:58'),
(21, 1, 48, 'Mantapp', '2017-06-23 03:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `lihat_materi`
--

CREATE TABLE `lihat_materi` (
  `id_lihat_materi` int(24) NOT NULL,
  `id_materi` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lihat_materi`
--

INSERT INTO `lihat_materi` (`id_lihat_materi`, `id_materi`) VALUES
(1, 48),
(2, 48),
(3, 48),
(4, 48),
(5, 47),
(6, 46),
(7, 7),
(8, 8),
(9, 6),
(10, 6),
(11, 8),
(12, 48),
(13, 8),
(14, 48),
(15, 48),
(16, 48),
(17, 48),
(18, 48),
(19, 48),
(20, 48),
(21, 48),
(22, 48),
(23, 48),
(24, 48),
(25, 48),
(26, 48),
(27, 48),
(28, 48),
(29, 48),
(30, 48),
(31, 48),
(32, 48),
(33, 48),
(34, 8),
(35, 47),
(36, 47),
(37, 6),
(38, 7),
(39, 3),
(40, 47),
(41, 47),
(42, 48),
(43, 48),
(44, 47),
(45, 47),
(46, 46),
(47, 47),
(48, 48),
(49, 46),
(50, 0),
(51, 48),
(52, 0),
(53, 48),
(54, 0),
(55, 48),
(56, 0),
(57, 8),
(58, 0),
(59, 46),
(60, 46),
(61, 46),
(62, 46),
(63, 6),
(64, 46),
(65, 6),
(66, 48),
(67, 8);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(16) NOT NULL,
  `judul_materi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `materi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) DEFAULT 'default.jpg',
  `file` varchar(255) NOT NULL,
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` int(16) NOT NULL,
  `kelas` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `materi`, `gambar`, `file`, `tgl_dibuat`, `id_user`, `kelas`) VALUES
(1, 'Menghitung Gradien Parabola', 'Born in 1821 and trained as a blacksmith before becoming a newspaper publisher in Cincinnati, Ohio, Charles Francis Hall lacked the pedigree one might expect of such an accomplished Arctic explorer. Yet in the 1860s, he joined the throngs of adventurers determined to journey north into the white unknown. He had neither naval experience nor skills in survival or linguistics, but a pair of yellowed, slightly musty, leather-bound notebooks reveals a key skill required of polar explorers that Hall had in spades?the ability to fundraise.\r\n\r\n?During this era of polar exploration, I don?t think anyone could have succeeded without being good at the fundraising,? says James McCarthy, an oceanographer at Harvard University and armchair Arctic historian who does research in the Arctic. As with current polar expeditions, journeys to the North were expensive affairs in the 19th century. If governments couldn?t fund the project, as the British Crown did for Sir John Franklin?s expedition to the Arctic in 1845, then wealthy individuals or business owners would contribute. (In return, benefactors had expedition lifeboats named after them or received special commemorative books after the trip?s completion.) Russian industrialist Alexander Sibiryakov, for example, supported the 19th-century Russian expeditions of Adolf Nordenski?ld and A. V. Grigoryev before going to Siberia himself in 1880 to explore.', 'indah-49.jpg', '6 KEKUATAN TERSEMBUNYI MANUSIA.docx', '2017-05-17 13:25:37', 2, '10'),
(2, 'Hukum Newton Gravitasi', 'Yet in the 1860s, he joined the throngs of adventurers determined to journey north into the white unknown. He had neither naval experience nor skills in survival or linguistics, but a pair of yellowed, slightly musty, leather-bound notebooks reveals a key skill required of polar explorers that Hall had in spades?the ability to fundraise.\r\n\r\n?During this era of polar exploration, I don?t think anyone could have succeeded without being good at the fundraising,? says James McCarthy, an oceanographer at Harvard University and armchair Arctic historian who does research in the Arctic. As with current polar expeditions, journeys to the North were expensive affairs in the 19th century. If governments couldn?t fund the project, as the British Crown did for Sir John Franklin?s expedition to the Arctic in 1845, then wealthy individuals or business owners would contribute. (In return, benefactors had expedition lifeboats named after them or received special commemorative books after the trip?s completion.) Russian industrialist Alexander Sibiryakov, for example, supported the 19th-century Russian expeditions of Adolf Nordenski?ld and A. V. Grigoryev before going to Siberia himself in 1880 to explore.', 'autumn rays by_annmariebone-d6r67hv.jpg', '10 Fenomena Aneh dalam Pikiran Manusia.docx', '2017-05-17 13:25:44', 2, '10'),
(3, 'Belajar Bahasa Indonesia Sesuai EYD', ' He had neither naval experience nor skills in survival or linguistics, but a pair of yellowed, slightly musty, leather-bound notebooks reveals a key skill required of polar explorers that Hall had in spades?the ability to fundraise.\r\n\r\n?During this era of polar exploration, I don?t think anyone could have succeeded without being good at the fundraising,? says James McCarthy, an oceanographer at Harvard University and armchair Arctic historian who does research in the Arctic. As with current polar expeditions, journeys to the North were expensive affairs in the 19th century. If governments couldn?t fund the project, as the British Crown did for Sir John Franklin?s expedition to the Arctic in 1845, then wealthy individuals or business owners would contribute. (In return, benefactors had expedition lifeboats named after them or received special commemorative books after the trip?s completion.) Russian industrialist Alexander Sibiryakov, for example, supported the 19th-century Russian expeditions of Adolf Nordenski?ld and A. V. Grigoryev before going to Siberia himself in 1880 to explore.', 'default.jpg', '10 Hewan.rar', '2017-05-17 13:14:06', 2, '1'),
(4, 'Macam-macam Idghom', ' During this era of polar exploration, I don?t think anyone could have succeeded without being good at the fundraising,? says James McCarthy, an oceanographer at Harvard University and armchair Arctic historian who does research in the Arctic. As with current polar expeditions, journeys to the North were expensive affairs in the 19th century. If governments couldn?t fund the project, as the British Crown did for Sir John Franklin?s expedition to the Arctic in 1845, then wealthy individuals or business owners would contribute. (In return, benefactors had expedition lifeboats named after them or received special commemorative books after the trip?s completion.) Russian industrialist Alexander Sibiryakov, for example, supported the 19th-century Russian expeditions of Adolf Nordenski?ld and A. V. Grigoryev before going to Siberia himself in 1880 to explore.', 'default.jpg', 'Anak Indigo.docx', '2017-05-17 10:09:12', 2, '1'),
(5, 'Mitokondria bagian jaringan penyusun makhluk hidup', 'Mitokondride 4 k?s?m vard?r. Bunlar d?? zar, i? zar, zarlararas? (periferal) b?lge ve matriksdir. D?? zar i? zara g?re daha kal?nd?r ve porin denilen ta??y?c? proteinler bulundururlar. Mitokondri i?erisine girecek maddeler porinlerle al?n?rlar. ?? zar d?? zara g?re daha se?ici ge?irgen yap?dad?r. D?? ve i? zar aras?ndaki b?lgeye periferal b?lge ad? verilir. ?? zar mitokondri matriksine do?ru girintiler yaparak krista denilen yap?lar? olu?turur. Kristalar kese, boru, t?p??k, zigzag gibi ?e?itli ?ekillerde olabilirler. Kristalar?n mitokondri eksenine uzanma bi?imleri genelde enine olmakla birlikte, boyuna ve ?apraz olarak da olabilir. ?? zar ?zerinde solunumda g?rev alan ETS proteinleri bulunur. Bu sebeple enerji ihtiyac? fazla olan h?crelerin mitokondrilerindeki krista say?s? daha fazlad?r. ?? zar ?zerinde elementer partik?l ( Racker partik?l?) denilen yap?lar vard?r. Bu yap?lar?n i? zarla ba?lant?l? olan bir sap b?lgesi ve buna ba?l? ba? b?lgesi vard?r. Ba? b?lgesinde kimyasal enerjiden[2] ATP sentezi ger?ekle?ti?inden bu b?lgeye ATPozom ismi verilmektedir. Matrikste organel proteinlerinin 2/3\'? bulunur.[3]', 'default.jpg', 'Apa sudah ada mesin waktu.docx', '2017-05-17 13:25:54', 2, '3'),
(6, 'Mimikri pada Bunglon', 'Kondriosom (bahasa Inggris: chondriosome, mitochondrion, plural:mitochondria) yaitu organel tempat berlangsungnya fungsi respirasi sel makhluk hidup, selain fungsi seluler lain, seperti metabolisme asam lemak, biosintesis pirimidina, homeostasis kalsium, transduksi sinyal seluler dan penghasil energi[1] berupa adenosina trifosfat pada lintasan katabolisme.\n\nMitokondria mempunyai dua lapisan membran, yaitu lapisan membran luar dan lapisan membran dalam. Lapisan membran dalam ada dalam bentuk lipatan-lipatan yang sering disebut dengan cristae. Di dalam mitokondria terdapat \'ruangan\' yang disebut matriks, di mana beberapa mineral dapat ditemukan. Sel yang mempunyai banyak mitokondria dapat dijumpai di jantung, hati, dan otot.\n\nTerdapat hipotesis bahwa mitokondria merupakan organel hasil evolusi dari sel ?-proteobacteria prokariota yang ber-endosimbiosis dengan sel eukariota.[2] Hipotesis ini didukung oleh beberapa fakta antara lain,\n\nadanya DNA di dalam mitokondria menunjukkan bahwa dahulu mitokondria merupakan entitas yang terpisah dari sel inangnya,\nbeberapa kemiripan antara mitokondria dan bakteri, baik ukuran maupun cara reproduksi dengan membelah diri, juga struktur DNA yang berbentuk lingkaran.\nOleh karena itu, mitokondria memiliki sistem genetik sendiri yang berbeda dengan sistem genetik inti. Selain itu, ribosom dan rRNA mitokondria lebih mirip dengan yang dimiliki bakteri dibandingkan dengan yang dikode oleh inti sel eukariota.[3]', 'default.jpg', 'Bahasa Portugis.docx', '2017-05-17 10:09:29', 2, '1'),
(7, 'Simbiosis Mutualisme', 'Organel tempat berlangsungnya fungsi respirasi sel makhluk hidup, selain fungsi seluler lain, seperti metabolisme asam lemak, biosintesis pirimidina, homeostasis kalsium, transduksi sinyal seluler dan penghasil energi[1] berupa adenosina trifosfat pada lintasan katabolisme.\n\nMitokondria mempunyai dua lapisan membran, yaitu lapisan membran luar dan lapisan membran dalam. Lapisan membran dalam ada dalam bentuk lipatan-lipatan yang sering disebut dengan cristae. Di dalam mitokondria terdapat \'ruangan\' yang disebut matriks, di mana beberapa mineral dapat ditemukan. Sel yang mempunyai banyak mitokondria dapat dijumpai di jantung, hati, dan otot.\n\nTerdapat hipotesis bahwa mitokondria merupakan organel hasil evolusi dari sel α-proteobacteria prokariota yang ber-endosimbiosis dengan sel eukariota.[2] Hipotesis ini didukung oleh beberapa fakta antara lain,\n\nadanya DNA di dalam mitokondria menunjukkan bahwa dahulu mitokondria merupakan entitas yang terpisah dari sel inangnya,\nbeberapa kemiripan antara mitokondria dan bakteri, baik ukuran maupun cara reproduksi dengan membelah diri, juga struktur DNA yang berbentuk lingkaran.\nOleh karena itu, mitokondria memiliki sistem genetik sendiri yang berbeda dengan sistem genetik inti. Selain itu, ribosom dan rRNA mitokondria lebih mirip dengan yang dimiliki bakteri dibandingkan dengan yang dikode oleh inti sel eukariota.[3]', 'default.jpg', 'BELAJAR SENDIRI HIPNOTIS.docx', '2017-05-17 13:26:03', 2, '3'),
(8, 'Kloroplas', 'Kloroplas (bahasa Inggris: Chloroplast) adalah plastid yang mengandung klorofil. Di dalam kloroplas berlangsung fasa terang dan fasa gelap dari fotosintesis tumbuhan. Kloroplas terdapat pada hampir seluruh tumbuhan, tetapi tidak umum dalam semua sel. Bila ada, maka tiap sel dapat memiliki satu sampai banyak plastid. Pada tumbuhan tingkat tinggi umumnya berbentuk cakram (kira-kira 2 x 5 mm, kadang-kadang lebih besar), tersusun dalam lapisan tunggal dalam sitoplasma tetapi bentuk dan posisinya berubah-ubah sesuai dengan intensitas cahaya. Pada ganggang, bentuknya dapat seperti mangkuk, spiral, bintang menyerupai jaring, seringkali disertai pirenoid.\r\n\r\nKloroplas matang pada beberapa ganggang , biofita dan likopoda dapat memperbanyak diri dengan pembelahan. Kesinambungan kloroplas terjadi melalui pertumbuhan dan pembelahan proplastid di daerah meristem. Secara khas kloroplas dewasa mencakup dua membran luar yang menyalkuti stroma homogen, di sinilah berlangsung reaksi-reaksi fasa gelap. Dalam stroma tertanam sejumlah grana, masing-masing terdiri atas setumpuk tilakoid yang berupa gelembung bermembran, pipih dan diskoid (seperti cakram). Membran tilakoid menyimpan pigmen-pigmen fotosintesis dan sistem transpor elektron yang terlibat dalam fasa fotosintesis yang bergantung pada cahaya. Grana biasanya terkait dengan lamela intergrana yang bebas pigmen.\r\n\r\nProkariota yang berfotosintesis tidak mempunyai kloroplas, tilakoid yang banyak itu terletak bebas dalam sitoplasma dan memiliki susunan yang beragam dengan bentuk yang beragam pula. Kloroplas mengandung DNA lingkar dan mesin sistesis protein, termasuk ribosom dari tipe prokariotik.', 'default.jpg', 'Cara Kerja Kacamata Terapi Pinhole.docx', '2017-05-17 10:09:54', 2, '1'),
(46, 'Senja di mata Tuhan', '<h1 id=\"firstHeading\" class=\"firstHeading\" lang=\"id\">Gerhana</h1>\r\n<div id=\"bodyContent\" class=\"mw-body-content\">\r\n<div id=\"siteSub\">Dari Wikipedia bahasa Indonesia, ensiklopedia bebas</div>\r\n<div id=\"contentSub\">&nbsp;</div>\r\n<div id=\"jump-to-nav\" class=\"mw-jump\">&nbsp;</div>\r\n<div id=\"mw-content-text\" class=\"mw-content-ltr\" dir=\"ltr\" lang=\"id\">\r\n<div class=\"mw-parser-output\">\r\n<div class=\"dablink noprint\">Artikel ini berisi tentang gerhana ilmu astronomi. Untuk kegunaan gerhana yang lain, lihat <a class=\"mw-disambig\" title=\"Eclipse\" href=\"https://id.wikipedia.org/wiki/Eclipse\">Eclipse</a>.</div>\r\n<div class=\"hatnote\" role=\"note\">Untuk sinetron, lihat <a title=\"Gerhana (sinetron)\" href=\"https://id.wikipedia.org/wiki/Gerhana_(sinetron)\">Gerhana (sinetron)</a>.</div>\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\"><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Solar_eclipse_from_space_29_Mar_2006.jpg\"><img class=\"thumbimage\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Solar_eclipse_from_space_29_Mar_2006.jpg/280px-Solar_eclipse_from_space_29_Mar_2006.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Solar_eclipse_from_space_29_Mar_2006.jpg/420px-Solar_eclipse_from_space_29_Mar_2006.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Solar_eclipse_from_space_29_Mar_2006.jpg/560px-Solar_eclipse_from_space_29_Mar_2006.jpg 2x\" alt=\"\" width=\"280\" height=\"185\" data-file-width=\"3032\" data-file-height=\"2008\" /></a>\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\nBayangan Bulan pada Bumi ketika <a class=\"mw-redirect\" title=\"Gerhana Matahari\" href=\"https://id.wikipedia.org/wiki/Gerhana_Matahari\">gerhana Matahari</a>.</div>\r\n</div>\r\n</div>\r\n<p><strong>Gerhana</strong> adalah fenomena <a title=\"Astronomi\" href=\"https://id.wikipedia.org/wiki/Astronomi\">astronomi</a> yang terjadi apabila sebuah <a class=\"new\" title=\"Benda angkasa (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Benda_angkasa&amp;action=edit&amp;redlink=1\">benda angkasa</a> bergerak ke dalam <a class=\"mw-redirect\" title=\"Bayangan\" href=\"https://id.wikipedia.org/wiki/Bayangan\">bayangan</a> sebuah benda angkasa lain. Istilah ini umumnya digunakan untuk <a class=\"mw-redirect\" title=\"Gerhana Matahari\" href=\"https://id.wikipedia.org/wiki/Gerhana_Matahari\">gerhana Matahari</a> ketika posisi <a title=\"Bulan\" href=\"https://id.wikipedia.org/wiki/Bulan\">Bulan</a> terletak di antara <a title=\"Bumi\" href=\"https://id.wikipedia.org/wiki/Bumi\">Bumi</a> dan <a title=\"Matahari\" href=\"https://id.wikipedia.org/wiki/Matahari\">Matahari</a>, atau <a title=\"Gerhana bulan\" href=\"https://id.wikipedia.org/wiki/Gerhana_bulan\">gerhana bulan</a> saat sebagian atau keseluruhan penampang Bulan tertutup oleh bayangan Bumi. Namun, gerhana juga terjadi pada fenomena lain yang tidak berhubungan dengan Bumi atau Bulan, misalnya pada <a title=\"Planet\" href=\"https://id.wikipedia.org/wiki/Planet\">planet</a> lain dan <a title=\"Satelit\" href=\"https://id.wikipedia.org/wiki/Satelit\">satelit</a> yang dimiliki planet lain.</p>\r\n<p>Di dalam agama Islam, umat Muslim yang mengetahui atau melihat terjadinya gerhana bulan ataupun matahari, maka selayaknya segera melakukan <a class=\"new\" title=\"Salat kusuf (halaman belum tersedia)\" href=\"https://id.wikipedia.org/w/index.php?title=Salat_kusuf&amp;action=edit&amp;redlink=1\">salat kusuf</a> (salat gerhana)</p>\r\n</div>\r\n</div>\r\n</div>', 'img_1496811003.jpg', 'Dakwah_Nabi_Muhammad.docx', '2017-06-07 04:50:04', 2, '10'),
(47, 'Distorsi Cahaya', '<h1 id=\"firstHeading\" class=\"firstHeading\" lang=\"id\">Kategori:Astronomi</h1>\r\n<div id=\"bodyContent\" class=\"mw-body-content\">\r\n<div id=\"siteSub\">Dari Wikipedia bahasa Indonesia, ensiklopedia bebas</div>\r\n<div id=\"contentSub\">&nbsp;</div>\r\n<div id=\"jump-to-nav\" class=\"mw-jump\">&nbsp;</div>\r\n<div id=\"mw-content-text\" class=\"mw-content-ltr\" dir=\"ltr\" lang=\"id\">\r\n<div class=\"mw-parser-output\">\r\n<table class=\"mbox-small plainlinks sistersitebox\" role=\"presentation\">\r\n<tbody>\r\n<tr>\r\n<td class=\"mbox-image\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/30px-Commons-logo.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/45px-Commons-logo.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Commons-logo.svg/59px-Commons-logo.svg.png 2x\" alt=\"\" width=\"30\" height=\"40\" data-file-width=\"1024\" data-file-height=\"1376\" /></td>\r\n<td class=\"mbox-text plainlist\"><a title=\"Wikimedia Commons\" href=\"https://id.wikipedia.org/wiki/Wikimedia_Commons\">Wikimedia Commons</a> memiliki galeri mengenai:\r\n<div><em><strong><a class=\"extiw\" title=\"commons:Category:Astronomy\" href=\"https://commons.wikimedia.org/wiki/Category:Astronomy\">Astronomi</a></strong></em></div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<div class=\"noprint tright portal\">\r\n<table>\r\n<tbody>\r\n<tr>\r\n<td><a class=\"image\" href=\"https://id.wikipedia.org/wiki/Berkas:Saturn.svg\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Saturn.svg/32px-Saturn.svg.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Saturn.svg/48px-Saturn.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Saturn.svg/64px-Saturn.svg.png 2x\" alt=\"Ikon portal\" width=\"32\" height=\"23\" data-file-width=\"740\" data-file-height=\"530\" /></a></td>\r\n<td><em><strong><a title=\"Portal:Astronomi\" href=\"https://id.wikipedia.org/wiki/Portal:Astronomi\">Portal Astronomi</a></strong></em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</div>\r\n<p><strong>Astronomi</strong>, yang secara etimologi berarti \"ilmu bintang\" (dari Yunani: ά&sigma;&tau;&rho;&omicron;, + &nu;ό&mu;&omicron;&sigmaf;), adalah ilmu yang melibatkan pengamatan dan penjelasan kejadian yang terjadi di luar Bumi dan atmosfernya.</p>\r\n<dl>\r\n<dd>\r\n<div id=\"catmore\" class=\"boilerplate\"><a class=\"image\" title=\"!\" href=\"https://id.wikipedia.org/wiki/Berkas:Crystal_Clear_app_xmag.png\"><img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Crystal_Clear_app_xmag.png/20px-Crystal_Clear_app_xmag.png\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Crystal_Clear_app_xmag.png/30px-Crystal_Clear_app_xmag.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Crystal_Clear_app_xmag.png/40px-Crystal_Clear_app_xmag.png 2x\" alt=\"!\" width=\"20\" height=\"20\" data-file-width=\"128\" data-file-height=\"128\" /></a> <em>Artikel utama untuk <a title=\"Bantuan:Kategori\" href=\"https://id.wikipedia.org/wiki/Bantuan:Kategori\">kategori</a> ini adalah <strong><a title=\"Astronomi\" href=\"https://id.wikipedia.org/wiki/Astronomi\">Astronomi</a></strong>.</em></div>\r\n</dd>\r\n</dl>\r\n</div>\r\n<div class=\"mw-category-generated\" dir=\"ltr\" lang=\"id\">\r\n<div id=\"mw-subcategories\">\r\n<h2>Subkategori</h2>\r\n<p>Kategori ini memiliki 30 subkategori berikut, dari total 30.</p>\r\n<div class=\"mw-content-ltr\" dir=\"ltr\" lang=\"id\">\r\n<div class=\"mw-category\">\r\n<div class=\"mw-category-group\">\r\n<h3>&nbsp;</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Portal:Astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Portal:Astronomi\">Portal:Astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 1 subkategori, 15 halaman, dan 0 berkas\">(1 K, 15 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Daftar_bertopik_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Daftar_bertopik_astronomi\">Daftar bertopik astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 3 halaman, dan 0 berkas\">(3 K, 3 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>A</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Artikel_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Artikel_astronomi\">Artikel astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 63 subkategori, 1 halaman, dan 0 berkas\">(63 K, 1 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Astrobiologi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astrobiologi\">Astrobiologi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 2 subkategori, 8 halaman, dan 0 berkas\">(2 K, 8 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Astrofisika\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astrofisika\">Astrofisika</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 35 halaman, dan 0 berkas\">(3 K, 35 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astrokimia\">Astrokimia</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 5 halaman, dan 0 berkas\">(5 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Astrometri\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astrometri\">Astrometri</a>&lrm; <span dir=\"ltr\" title=\"memiliki 2 subkategori, 11 halaman, dan 0 berkas\">(2 K, 11 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Astronom\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astronom\">Astronom</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 13 halaman, dan 0 berkas\">(3 K, 13 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astronomi_amatir\">Astronomi amatir</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 5 halaman, dan 0 berkas\">(5 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Astronomi_radio\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Astronomi_radio\">Astronomi radio</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 11 halaman, dan 0 berkas\">(3 K, 11 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>F</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Fenomena_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Fenomena_astronomi\">Fenomena astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 2 subkategori, 5 halaman, dan 0 berkas\">(2 K, 5 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Fenomena_bintang\">Fenomena bintang</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 4 halaman, dan 0 berkas\">(4 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>I</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Instrumen_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Instrumen_astronomi\">Instrumen astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 1 subkategori, 6 halaman, dan 0 berkas\">(1 K, 6 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Istilah_astronomi\">Istilah astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 1 halaman, dan 0 berkas\">(1 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>J</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Jarak_astronomis\">Jarak astronomis</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 4 halaman, dan 0 berkas\">(4 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>K</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Kalender\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Kalender\">Kalender</a>&lrm; <span dir=\"ltr\" title=\"memiliki 11 subkategori, 79 halaman, dan 0 berkas\">(11 K, 79 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Katalog_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Katalog_astronomi\">Katalog astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 5 subkategori, 3 halaman, dan 0 berkas\">(5 K, 3 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Kenampakan_albedo\">Kenampakan albedo</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 1 halaman, dan 0 berkas\">(1 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Kosmologi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Kosmologi\">Kosmologi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 1 subkategori, 31 halaman, dan 0 berkas\">(1 K, 31 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>L</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Luar_angkasa\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Luar_angkasa\">Luar angkasa</a>&lrm; <span dir=\"ltr\" title=\"memiliki 17 subkategori, 8 halaman, dan 0 berkas\">(17 K, 8 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>O</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Observatorium\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Observatorium\">Observatorium</a>&lrm; <span dir=\"ltr\" title=\"memiliki 2 subkategori, 28 halaman, dan 0 berkas\">(2 K, 28 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Obyek_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Obyek_astronomi\">Obyek astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 14 subkategori, 6 halaman, dan 0 berkas\">(14 K, 6 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Organisasi_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Organisasi_astronomi\">Organisasi astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 1 subkategori, 5 halaman, dan 0 berkas\">(1 K, 5 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>P</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Ilmu_keplanetan\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Ilmu_keplanetan\">Ilmu keplanetan</a>&lrm; <span dir=\"ltr\" title=\"memiliki 6 subkategori, 14 halaman, dan 0 berkas\">(6 K, 14 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Pencitraan_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Pencitraan_astronomi\">Pencitraan astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 2 subkategori, 10 halaman, dan 0 berkas\">(2 K, 10 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Planetarium\">Planetarium</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 5 halaman, dan 0 berkas\">(5 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>S</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Sejarah_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Sejarah_astronomi\">Sejarah astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 20 halaman, dan 0 berkas\">(3 K, 20 H)</span></div>\r\n</div>\r\n</li>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Semua_rintisan_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Semua_rintisan_astronomi\">Semua rintisan astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 4 subkategori, 18.720 halaman, dan 0 berkas\">(4 K, 18.720 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>T</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeEmptyBullet\">► </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Trojan_(astronomi)\">Trojan (astronomi)</a>&lrm; <span dir=\"ltr\" title=\"memiliki 0 subkategori, 1 halaman, dan 0 berkas\">(1 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n<div class=\"mw-category-group\">\r\n<h3>&Mu;</h3>\r\n<ul>\r\n<li>\r\n<div class=\"CategoryTreeSection\">\r\n<div class=\"CategoryTreeItem\"><span class=\"CategoryTreeBullet\"><span class=\"CategoryTreeToggle\" title=\"buka\" data-ct-title=\"Rintisan_bertopik_astronomi\" data-ct-state=\"collapsed\">►</span> </span><a class=\"CategoryTreeLabel  CategoryTreeLabelNs14 CategoryTreeLabelCategory\" href=\"https://id.wikipedia.org/wiki/Kategori:Rintisan_bertopik_astronomi\">Rintisan bertopik astronomi</a>&lrm; <span dir=\"ltr\" title=\"memiliki 3 subkategori, 2.761 halaman, dan 0 berkas\">(3 K, 2.761 H)</span></div>\r\n</div>\r\n</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'img_1496812121.jpg', 'Doa_Haji.docx', '2017-06-07 05:08:41', 2, '10'),
(48, 'Lidah Buaya dan Penerapan Butanol', '<p>ASKALSKJALKSJLAS</p>\r\n<p>asHASJAHSKJHKJS</p>\r\n<blockquote>\r\n<p>ajshashajshksjh<br />akjskajskajshaksj<br />aksjakjsakjshakjs</p>\r\n<p><img src=\"https://cloud.tinymce.com/stable/plugins/emoticons/img/smiley-cool.gif\" alt=\"cool\" /></p>\r\n</blockquote>\r\n<p>&nbsp;</p>', 'img_1496545622.jpg', 'unspecified.pdf', '2017-06-12 18:20:01', 2, '10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(16) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `level` enum('0','1','2') DEFAULT '2',
  `aktif` enum('0','1') NOT NULL DEFAULT '1',
  `kode` varchar(32) DEFAULT NULL,
  `konfirm` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`, `aktif`, `kode`, `konfirm`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '0', '1', NULL, '0'),
(2, 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru@gmail.com', '1', '1', NULL, '0'),
(3, 'murid', '8779fd433a4bbdf35442d79476edafac', 'murid@gmail.com', '2', '1', NULL, '0'),
(4, 'asd', '7815696ecbf1c96e6894b779456d330e', 'asd@gmail.com', '2', '1', NULL, '0'),
(9, 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'qwe@gmail.com', '1', '1', NULL, '0'),
(10, 'semar', '04858a35baee8fea350bcfd244ff16ba', 'semar@gmail.com', '1', '1', NULL, '0'),
(11, 'Tri', '7815696ecbf1c96e6894b779456d330e', 'tri@gmail.com', '1', '1', NULL, '0'),
(12, 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'ade@gmail.com', '0', '1', NULL, '0'),
(17, 'jaskun', 'f6cafefbb1bd33a6918a0ce4c1eafbfa', 'jaskun@gmail.com', '1', '1', NULL, '0'),
(18, 'haji', '3d1102f8d75f56bc6de99aff5cd8d6ea', 'haji@gmail.com', '1', '1', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `username` varchar(25) NOT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `kelas` enum('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL DEFAULT '1',
  `sekolah` varchar(40) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `validasi_guru` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`username`, `nama_lengkap`, `kelas`, `sekolah`, `jenis_kelamin`, `tgl_lahir`, `no_hp`, `alamat`, `status`, `validasi_guru`) VALUES
('ade', NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, '0'),
('admin', 'Administrator', '1', 'SDN Payung Cahaya', 'L', '2017-05-02', '1234567890', 'Jl. Pluto', 'Semangat menatap masa depan', '0'),
('asd', 'Asa Selenia Dovani', '1', 'MAN Al-Kautsar', 'P', '1996-11-21', '081546777338', 'Jl. Galaksi Andromedia, 2 tahun cahaya arah zenith', 'Aku lebih kecil dari debus', '0'),
('guru', 'Guru', '10', 'MAN Al-Faruq', 'P', '2017-05-16', '123456789343', 'Jl. Venus', 'Air adalah cahaya yang membeku', '1'),
('haji', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1'),
('jaskun', 'Jaskun Muftia', '1', 'SMPN 6', 'P', '2017-06-01', '018203719284', 'Bumio', 'Dadio Mario', '0'),
('murid', 'Murid Rajin', '1', 'SMPN Bayangkaray', 'P', '2017-05-15', '12345678901', 'Jl. Yupiter', 'Rajin belajar belum tentu pintar', '0'),
('qwe', 'Quantila Wips Erdunia', '1', 'SMK 2', 'P', '2017-06-07', '091823112312', 'qwe', 'qwe', '0'),
('semar', 'Semar Gareng', '10', 'STNK', 'L', '1990-05-17', '091023019201', 'Jl Bumi', 'Hilang lah kau', '0'),
('Tri', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `jumlah_download`
--
ALTER TABLE `jumlah_download`
  ADD PRIMARY KEY (`id_jumlah_download`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `lihat_materi`
--
ALTER TABLE `lihat_materi`
  ADD PRIMARY KEY (`id_lihat_materi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jumlah_download`
--
ALTER TABLE `jumlah_download`
  MODIFY `id_jumlah_download` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `lihat_materi`
--
ALTER TABLE `lihat_materi`
  MODIFY `id_lihat_materi` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
