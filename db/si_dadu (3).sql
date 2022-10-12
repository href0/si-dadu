-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 12 Okt 2022 pada 16.05
-- Versi server: 8.0.13
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_dadu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Muara Sabak Barat'),
(2, 'Muara Sabak Timur'),
(3, 'Kuala Jambi'),
(4, 'Geragai'),
(5, 'Mendahara Ulu'),
(6, 'Dendang'),
(7, 'Berbak'),
(8, 'Mendahara'),
(9, 'Nipah Panjang'),
(10, 'Rantau Rasau'),
(11, 'Sadu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kejuruan`
--

CREATE TABLE `kejuruan` (
  `id_kejuruan` int(11) NOT NULL,
  `id_satuan_kerja` int(11) NOT NULL,
  `kejuruan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kejuruan`
--

INSERT INTO `kejuruan` (`id_kejuruan`, `id_satuan_kerja`, `kejuruan`) VALUES
(1, 2, 'Disnaker'),
(2, 1, 'Garment Apparel'),
(3, 1, 'Tata Kecantikan'),
(4, 1, 'Processing'),
(12, 1, 'TIK'),
(13, 1, 'Teknik Listrik'),
(14, 1, 'Otomotif'),
(15, 1, 'Refrigerasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `kelurahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `kelurahan`) VALUES
(1, 1, 'Kel. Kampung Singkep'),
(2, 1, 'Kel. Nibung Putih'),
(3, 1, 'Kel. Talang Babat'),
(4, 1, 'Kel. Rano'),
(5, 1, 'Kel. Teluk Dawan'),
(6, 1, 'Kel. Parit Culum I'),
(7, 1, 'Kel. Parit Culum II'),
(8, 2, 'Kel. Muara Sabak Ilir'),
(9, 2, 'Kel. Muara Sabak Ulu'),
(10, 2, 'Desa Siau Dalam'),
(11, 2, 'Desa Kota Raja'),
(12, 2, 'Desa Alang-Alang'),
(13, 2, 'Desa Sungai Ular'),
(14, 2, 'Desa Lambur'),
(15, 2, 'Desa Lambur I'),
(16, 2, 'Desa Lambur II'),
(17, 2, 'Desa Kota Harapan'),
(18, 2, 'Desa Simbur Naik'),
(19, 2, 'Desa Kuala Simbur'),
(20, 3, 'Kel. Kampung Laut'),
(21, 3, 'Kel. Tanjung Solok'),
(22, 3, 'Desa Kuala Lagan'),
(23, 3, 'Desa Teluk Majelis'),
(24, 3, 'Desa Manunggal Makmur'),
(25, 3, 'Majelis Hidayah'),
(26, 4, 'Kel. Pandan Jaya'),
(27, 4, 'Desa Pandan Makmur'),
(28, 4, 'Desa Pandan Sejahtera'),
(29, 4, 'Desa Pandan Lagan'),
(30, 4, 'Desa Suka Maju'),
(31, 4, 'Desa Rantau Karya'),
(32, 4, 'Desa Kota Baru'),
(33, 4, 'Desa Lagan Tengah'),
(34, 4, 'Desa Lagan Ulu'),
(35, 5, 'Kel. Simpang Tuan'),
(36, 5, 'Desa. Sungai Toman'),
(37, 5, 'Desa Sungai Beras'),
(38, 5, 'Desa Bukit Tempurung'),
(39, 5, 'Desa Pematang Rahim'),
(40, 5, 'Desa Sinar Wajo'),
(41, 5, 'Desa Mencolok'),
(42, 6, 'Kel. Rantau Indah'),
(43, 6, 'Desa Sido Mukti'),
(44, 6, 'Desa Catur Rahayu'),
(45, 6, 'Desa Koto Kandis'),
(46, 6, 'Desa Koto Kandis Dendang'),
(47, 6, 'Desa Jati Mulyo'),
(48, 6, 'Desa Kuala Dendang'),
(49, 7, 'Kel. Simpang'),
(50, 7, 'Desa Rantau Rasau'),
(51, 7, 'Desa Sungai Rambut'),
(52, 7, 'Desa Telago Limo'),
(53, 7, 'Desa Rantau Makmur'),
(54, 7, 'Desa Rawasari'),
(55, 8, 'Kel. Mendahara Ilir'),
(56, 8, 'Desa Mendahara Tengah'),
(57, 8, 'Desa Lagan ilir'),
(58, 8, 'Desa Sinar Kalimantan'),
(59, 8, 'Desa Sungai Tawar'),
(60, 8, 'Desa Bhakti Idaman'),
(61, 8, 'Desa Merbau'),
(62, 8, 'Desa Pangkal Duri'),
(63, 8, 'Desa Pangkal Duri Ilir'),
(64, 9, 'Kel. Nipah Panjang I'),
(65, 9, 'Kel. Nipah Panjang II'),
(66, 9, 'Desa Simpang Jelita'),
(67, 9, 'Desa Simpang Datuk'),
(68, 9, 'Desa Teluk Kijing'),
(69, 9, 'Desa Sungai Raya'),
(70, 9, 'Desa Pemusiran'),
(71, 9, 'Desa Sungai Tering'),
(72, 9, 'Desa Sungai Jeruk'),
(73, 9, 'Desa Bunga Tanjung'),
(74, 10, 'Kel. Bandar Jaya'),
(75, 10, 'Desa Rantau Rasau I'),
(76, 10, 'Desa Rantau Rasau II'),
(77, 10, 'Desa Harapan Makmur'),
(78, 10, 'Desa Bangun Karya'),
(79, 10, 'Desa Rantau Jaya'),
(80, 10, 'Desa Sungai Dusun'),
(81, 10, 'Desa Karya Bhakti'),
(82, 10, 'Desa Marga Mulya'),
(83, 10, 'Desa Pematang Mayan'),
(84, 10, 'Desa Tri Mulyo'),
(85, 11, 'Kel. Sungai Lokan'),
(86, 11, 'Desa Sungai Sayang'),
(87, 11, 'Desa Sungai Itik'),
(88, 11, 'Desa Sungai Benuh'),
(89, 11, 'Desa Sungai Cemara'),
(90, 11, 'Desa Sungai Jambat'),
(91, 11, 'Desa Air Hitam laut'),
(92, 11, 'Desa Remau Baku Tuo'),
(93, 11, 'Desa Labuhan Pering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `id_kejuruan` int(11) NOT NULL,
  `pelatihan` varchar(255) NOT NULL,
  `tgl_awal` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL,
  `lokasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `id_kejuruan`, `pelatihan`, `tgl_awal`, `tgl_akhir`, `lokasi`) VALUES
(1, 2, 'Asisten Pembuat Pakaian (2 Paket)', '2022-10-01', '1899-12-08', ''),
(2, 1, 'Disnaker 1', '2022-10-01', '2022-10-08', ''),
(3, 1, 'Disnaker 2', '2022-08-02', '2022-08-05', ''),
(5, 1, 'Disnaker 3', NULL, NULL, ''),
(6, 12, 'Operasi Komputer', '2022-10-12', '1900-01-17', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.'),
(7, 2, 'Pembuatan Hiasan Busana Dengan Mesin Bondir Manual', NULL, NULL, ''),
(8, 4, 'Pembuatan Roti dan Kue', NULL, NULL, ''),
(9, 3, 'Junior Beautician', NULL, NULL, ''),
(10, 3, 'Yunior Stylist', NULL, NULL, ''),
(11, 13, 'Pemasangan Instalasi Listrik Bangunan Sederhana', NULL, NULL, ''),
(12, 14, 'Service Sepeda Motor Konvensional', NULL, NULL, ''),
(13, 15, 'Perawatan AC Split', NULL, NULL, ''),
(15, 1, 'Kewirausahaan', NULL, NULL, ''),
(16, 1, 'Teknologi Tepat Guna', NULL, NULL, ''),
(17, 1, 'Peningkatan Produktivitas', NULL, NULL, ''),
(18, 12, 'Operasi Komputer', '1900-01-01', '1900-01-03', ''),
(19, 1, 'Accusamus iusto laud', '2015-08-23', '2013-12-02', 'Quia commodi fugit '),
(20, 1, 'Occaecat similique c', '1974-06-13', '2004-08-03', 'Qui ex consequuntur '),
(21, 12, 'Desain Grafis', '2022-10-13', '2022-11-12', 'Kota baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_pelatihan` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `id_kelurahan` int(11) NOT NULL,
  `rw-dusun` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `detail_alamat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `pendidikan_terakhir` enum('SD','SMP','SMA','SMK','D3','S1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `hasil_pelatihan` enum('Lulus','Tidak Lulus') DEFAULT NULL,
  `sertifikasi` enum('K','BK') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `penyerapan_lulusan` enum('Mandiri','Industri') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_pelatihan`, `nik`, `nama`, `jenis_kelamin`, `id_kelurahan`, `rw-dusun`, `rt`, `detail_alamat`, `no_hp`, `tgl_lahir`, `tempat_lahir`, `pendidikan_terakhir`, `email`, `foto`, `hasil_pelatihan`, `sertifikasi`, `penyerapan_lulusan`) VALUES
(24, 1, '955525814', 'Keisya Wisnu', 'Perempuan', 2, '46', '23', 'desa Siau Dalam komplek mekarsari no 2', '6284380994959', '0000-00-00', '', 'SMP', 'moxizabeme@gmail.com', 'default.jpg', 'Lulus', 'K', 'Mandiri'),
(25, 15, '794730607', 'Elin', 'Perempuan', 46, '1', '46', 'desa Alang-Alang perumahan guru no 2', '6288124456567', '2022-10-07', 'Muaro Jambi', 'SD', 'wipo@gmail.com', 'default.jpg', 'Lulus', 'BK', NULL),
(26, 12, '957273263', 'Vania Wira', 'Perempuan', 3, '25', '44', 'Desa Sungai Ular lorong kartini nomor 1', '6289933747889', NULL, '', 'SD', 'wywo@gmail.com', 'default.jpg', 'Tidak Lulus', 'BK', 'Industri'),
(27, 15, '328705177', 'Lukman Qafi', 'Laki-Laki', 92, '26', '69', 'Desa Lambur II lorong bhayangkara no 1', '6289139391119', '2022-10-06', 'Jambi', 'SD', 'cywizeg@gmail.com', 'default.jpg', 'Lulus', 'K', NULL),
(28, 7, '661360018', 'Nisa Nida', 'Perempuan', 6, '12', '13', 'Desa Simbur Naik jalan pahlawan no 4', '6280538142397', NULL, '', 'SD', 'xecukoso@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(29, 17, '962904092', 'Cinta Keisya', 'Perempuan', 7, '17', '27', 'Desa Kota Harapan komplek bhayangkara no 7', '6289440566458', NULL, '', 'SD', 'bikoxe@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(30, 17, '145253661', 'Ivan Dodi', 'Laki-Laki', 10, '23', '45', 'Desa Alang-Alang komplek pahlawan nomor 2', '6282549359327', NULL, '', 'SD', 'lyzo@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(31, 16, '614353019', 'Indra Ben', 'Laki-Laki', 5, '55', '39', 'Desa Siau Dalam jalan pahlawan no 3', '6285270940337', NULL, '', 'SD', 'faxym@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(32, 15, '446858668', 'Arya Qafi', 'Laki-Laki', 20, '52', '44', 'Desa Sungai Ular jalan bhayangkari no 8', '6280966772852', NULL, '', 'SD', 'belozimyzo@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(33, 13, '358208086', 'Tristan Oki', 'Laki-Laki', 25, '17', '68', 'Desa Simbur Naik jalan tni no 4', '6287710889832', '0000-00-00', '', 'D3', 'leduhylu@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(34, 17, '286082199', 'Fani Malik', 'Perempuan', 55, '40', '40', 'Desa Kota Harapan perumahan bhayangkara no 8', '6285560860449', NULL, '', 'SD', 'jomehedana@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(35, 15, '727710776', 'Tobi Bagas', 'Laki-Laki', 66, '66', '32', 'Desa Sungai Ular lorong bhayangkari nomor 7', '6287882762823', NULL, '', 'SD', 'fuzaruteq@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(36, 15, '843475894', 'Ririn Utari', 'Perempuan', 25, '53', '19', 'Desa Kota Harapan jalan bhayangkara nomor 1', '6282145913841', NULL, '', 'SD', 'faviw@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(37, 10, '971610454', 'Chika Jonathan', 'Laki-Laki', 7, '38', '32', 'Desa Sungai Ular komplek bhayangkara no 2', '6288714173179', NULL, '', 'SD', 'dyky@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(38, 17, '240591795', 'Karin Naila', 'Perempuan', 98, '13', '54', 'Desa Lambur perumahan bhayangkari no 7', '6280174473178', NULL, '', 'SD', 'gadobezo@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(39, 16, '694361854', 'Indra Omar', 'Laki-Laki', 92, '33', '11', 'Desa Sungai Ular jalan kartini nomor 5', '6280312127657', NULL, '', 'SD', 'qura@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(40, 15, '674759665', 'Aulia Mila', 'Laki-Laki', 52, '46', '3', 'Desa Simbur Naik jalan guru nomor 9', '6282997917148', NULL, '', 'SD', 'kyxe@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(41, 17, '181611865', 'Oskar Eka', 'Laki-Laki', 25, '6', '42', 'Desa Kota Harapan lorong bhayangkari no 8', '6289428697274', NULL, '', 'SD', 'vomohyh@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(42, 1, '890166303', 'Irwan Cakra', 'Laki-Laki', 65, '18', '7', 'Desa Kota Harapan komplek pahlawan nomor 8', '6281481873958', NULL, '', 'SD', 'cokinisur@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(43, 9, '882775020', 'Fitri Utari', 'Perempuan', 98, '17', '32', 'Desa Lambur II komplek budiono nomor 7', '6286154697457', NULL, '', 'SD', 'notokehun@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(44, 8, '248970863', 'Geri Darius', 'Laki-Laki', 92, '57', '26', 'Desa Lambur I lorong bhayangkari nomor 8', '6280481388443', NULL, '', 'SD', 'kywuhih@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(45, 6, '362463304', 'Qori Harun', 'Perempuan', 52, '50', '56', 'Desa Kota Harapan jalan kartini nomor 1', '6280576253419', NULL, '', 'SD', 'xideha@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(46, 11, '434431190', 'Nanda', 'Laki-Laki', 76, '23', '23', 'Desa Alang-Alang lorong guru no 1', '6289359124649', NULL, '', 'SD', 'vogoh@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(47, 12, '945284268', 'Ian Ade', 'Laki-Laki', 86, '8', '51', 'Desa Kuala Simbur komplek bhayangkara nomor 4', '6280991491979', NULL, '', 'SD', 'zesadoqiru@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(48, 9, '938440039', 'Okta Kirana', 'Perempuan', 86, '29', '26', 'Desa Alang-Alang lorong tni nomor 2', '6282328518893', NULL, '', 'SD', 'qetal@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(49, 1, '602671583', 'Andi Rafa', 'Laki-Laki', 68, '70', '33', 'Desa Lambur II komplek merdeka no 8', '6282952271854', NULL, '', 'SD', 'deluni@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(50, 7, '358257786', 'Anggi', 'Perempuan', 96, '5', '29', 'Desa Lambur II komplek guru nomor 3', '6288375158383', NULL, '', 'SD', 'bolokytop@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(51, 9, '356095000', 'Ema Yolanda', 'Perempuan', 86, '50', '11', 'Desa Kota Raja lorong budiono no 3', '6283890846446', NULL, '', 'SD', 'mubotu@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(52, 10, '119246725', 'Hilda', 'Perempuan', 29, '4', '1', 'Desa Sungai Ular lorong pahlawan no 3', '6284788490463', NULL, '', 'SD', 'cucycasol@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(53, 10, '144994384', 'Sinta', 'Perempuan', 97, '51', '34', 'Desa Siau Dalam jalan budiono nomor 8', '6286699997517', NULL, '', 'SD', 'tadozaje@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(54, 8, '392447964', 'Bagas Arya', 'Laki-Laki', 96, '1', '70', 'Desa Simbur Naik perumahan bhayangkara nomor 6', '6283168685111', NULL, '', 'SD', 'taziwurox@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(55, 6, '728664064', 'Candra Naila', 'Perempuan', 91, '60', '45', 'Desa Kota Harapan jalan kartini nomor 5', '6285469835868', NULL, '', 'SD', 'nusivel@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(56, 11, '557263957', 'Harun Deo', 'Laki-Laki', 52, '21', '44', 'Desa Simbur Naik jalan bhayangkari nomor 8', '6288776872294', NULL, '', 'SD', 'levucyqu@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(57, 15, '549272846', 'Fani', 'Laki-Laki', 62, '54', '68', 'Desa Lambur II jalan merdeka nomor 2', '6282682624576', NULL, '', 'SD', 'jixyle@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(58, 16, '263969172', 'Yuli Okta', 'Perempuan', 6, '63', '40', 'Desa Simbur Naik komplek merdeka no 5', '6281395496652', NULL, '', 'SD', 'kaxem@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(59, 11, '236325470', 'Ian', 'Laki-Laki', 0, '17', '65', 'Desa Sungai Ular perumahan merdeka no 9', '6281865365253', NULL, '', 'SD', 'refoneze@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(60, 17, '475743761', 'Yusron Valdo', 'Perempuan', 0, '65', '52', 'Desa Alang-Alang lorong polri nomor 2', '6284290745078', NULL, '', 'SD', 'rohocidar@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(61, 17, '574560750', 'Queen Vania', 'Perempuan', 0, '14', '62', 'Desa Sungai Ular perumahan guru no 7', '6284250962018', NULL, '', 'SD', 'cubigofy@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(62, 9, '264479385', 'Yolanda Ernes', 'Perempuan', 0, '65', '8', 'Desa Kota Raja lorong pahlawan no 6', '6284847614069', NULL, '', 'SD', 'vazyduf@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(63, 17, '734691909', 'Tristan Tin', 'Laki-Laki', 0, '34', '16', 'Desa Sungai Ular jalan bhayangkari no 7', '6285172634072', NULL, '', 'SD', 'nuqo@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(64, 6, '830726973', 'Gilang', 'Laki-Laki', 0, '60', '30', 'Desa Kuala Simbur komplek merdeka nomor 4', '6284574571367', NULL, '', 'SD', 'qycohe@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(65, 11, '864990931', 'Yosep Farid', 'Laki-Laki', 0, '41', '56', 'Desa Kota Harapan perumahan pahlawan no 4', '6289399496972', NULL, '', 'SD', 'qepigug@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(66, 12, '391868039', 'Bagas Arya', 'Laki-Laki', 0, '5', '18', 'Desa Lambur komplek merdeka nomor 5', '6287298824385', NULL, '', 'SD', 'regopowil@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(67, 15, '257047570', 'Putri Fina', 'Perempuan', 0, '55', '14', 'Desa Kota Raja perumahan guru no 2', '6282522795371', NULL, '', 'SD', 'xaquw@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(68, 1, '283973533', 'Okta Wira', 'Perempuan', 0, '14', '14', 'Desa Simbur Naik lorong mekarsari no 7', '6284296752043', NULL, '', 'SD', 'wonadig@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(69, 13, '329136303', 'Arya Qi', 'Laki-Laki', 0, '6', '62', 'Desa Lambur perumahan tni nomor 8', '6283435738786', NULL, '', 'SD', 'juqezus@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(70, 7, '372575124', 'Keyla Andi', 'Perempuan', 0, '15', '22', 'Desa Kuala Simbur jalan mekarsari no 2', '6281178549259', NULL, '', 'SD', 'cemovir@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(71, 8, '162983204', 'Wira Gibran', 'Laki-Laki', 0, '61', '44', 'Desa Kuala Simbur komplek merdeka no 1', '6286325884895', NULL, '', 'SD', 'rybu@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(72, 16, '687961920', 'Rian Ulya', 'Laki-Laki', 0, '12', '16', 'Desa Alang-Alang komplek bhayangkara no 2', '6282598394153', NULL, '', 'SD', 'gywo@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(73, 11, '395964609', 'Winda Bastian', 'Laki-Laki', 0, '59', '43', 'Desa Lambur I lorong guru no 5', '6286363754594', NULL, '', 'SD', 'hesetyj@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(74, 6, '497298162', 'Maya Irfan', 'Perempuan', 0, '54', '45', 'Desa Lambur I perumahan tni no 1', '6285315353249', NULL, '', 'SD', 'zejyxi@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(75, 16, '234886348', 'Andi Pinkan', 'Laki-Laki', 0, '40', '59', 'Desa Siau Dalam lorong budiono nomor 4', '6285598858154', NULL, '', 'SD', 'cutanu@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(76, 11, '479439192', 'Bastian Syahrul', 'Laki-Laki', 0, '38', '56', 'Desa Lambur II lorong bhayangkara nomor 9', '6289972360611', NULL, '', 'SD', 'fubi@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(77, 1, '628922422', 'Syifa', 'Perempuan', 0, '11', '50', 'Desa Simbur Naik lorong bhayangkara no 5', '6285245423737', NULL, '', 'SD', 'comiw@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(78, 15, '404183785', 'Qori Qafi', 'Laki-Laki', 0, '45', '42', 'Desa Siau Dalam perumahan guru no 6', '6289987564674', NULL, '', 'SD', 'vexo@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(79, 17, '288138740', 'Umi Efri', 'Perempuan', 0, '1', '43', 'Desa Kota Harapan komplek kartini no 2', '6280948418037', NULL, '', 'SD', 'zabaw@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(80, 7, '361191398', 'Cinta Monika', 'Perempuan', 0, '13', '57', 'Desa Lambur II komplek pahlawan no 3', '6281919468222', NULL, '', 'SD', 'bydacem@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(81, 7, '684626424', 'Olivia Salsa', 'Perempuan', 0, '52', '68', 'Desa Alang-Alang komplek kartini no 1', '6286264284269', NULL, '', 'SD', 'vurenesar@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(82, 9, '164269075', 'Mila Amel', 'Perempuan', 0, '15', '20', 'Desa Lambur perumahan merdeka no 4', '6283335633952', NULL, '', 'SD', 'rarijan@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(83, 10, '636558775', 'Karin Yoko', 'Perempuan', 0, '63', '20', 'Desa Lambur II jalan guru nomor 4', '6280199117218', NULL, '', 'SD', 'fazaj@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(84, 8, '254513465', 'Syahrul Kevin', 'Laki-Laki', 0, '63', '67', 'Desa Siau Dalam komplek tni nomor 9', '6289660613445', NULL, '', 'SD', 'tynozu@gmail.com', 'default.jpg', 'Lulus', 'BK', NULL),
(85, 13, '973816166', 'Ian Gilang', 'Laki-Laki', 0, '53', '38', 'Desa Kota Harapan jalan kartini no 7', '6280891866054', NULL, '', 'SD', 'vebaxena@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(86, 6, '220391250', 'Mira Oki', 'Perempuan', 0, '37', '62', 'Desa Simbur Naik jalan mekarsari nomor 9', '6281482450594', NULL, '', 'SD', 'lyhy@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(87, 13, '815817710', 'Samuel Toni', 'Laki-Laki', 0, '62', '42', 'Desa Simbur Naik komplek merdeka nomor 9', '6288613138729', NULL, '', 'SD', 'nemylybe@gmail.com', 'default.jpg', 'Lulus', NULL, NULL),
(88, 13, '851170675', 'Rian Hila', 'Laki-Laki', 0, '70', '54', 'Desa Siau Dalam jalan budiono nomor 6', '6280139395712', NULL, '', 'SD', 'sejiviral@gmail.com', 'default.jpg', 'Tidak Lulus', NULL, NULL),
(89, 2, 'Rerum aut et cupidat', 'Odio eu obcaecati qu', 'Perempuan', 0, 'Sit ad illum sint', 'Suscipit velit place', 'Proident do qui nul', '+1 (899) 322-3485', '1978-02-08', 'Quisquam quis ut quo', 'SD', 'sozeqo@mailinator.com', 'default.jpg', NULL, NULL, NULL),
(90, 19, 'Dolorem repudiandae', 'Est et et nemo minim', 'Perempuan', 0, 'Nulla proident aliq', 'Unde quisquam irure', 'Officiis amet qui h', '+1 (451) 278-5413', '1989-08-06', 'Quod eius consectetu', 'SD', 'fegej@mailinator.com', 'default.jpg', NULL, NULL, NULL),
(91, 3, 'Dolor qui officia do', 'Maxime culpa sit aut', 'Perempuan', 0, 'Irure quae beatae si', 'Eaque eius exercitat', 'Commodi rerum earum', '+1 (251) 339-1341', '2020-08-22', 'Nostrum qui velit co', 'SMA', 'zyvewuqah@mailinator.com', 'default.jpg', NULL, NULL, NULL),
(92, 7, 'Do eum adipisci ab e', 'Illum quo qui provi', 'Laki-Laki', 10, 'Eveniet tenetur dol', 'Non dolor non odit a', 'Laborum Illum expl', '+1 (436) 242-1521', '2017-11-03', 'Veritatis et delectu', 'SD', 'pevo@mailinator.com', 'default.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan_kerja`
--

CREATE TABLE `satuan_kerja` (
  `id_satuan_kerja` int(11) NOT NULL,
  `satuan_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `satuan_kerja`
--

INSERT INTO `satuan_kerja` (`id_satuan_kerja`, `satuan_kerja`) VALUES
(1, 'UPTD BLK'),
(2, 'Disnakertrans');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`) VALUES
(3, 'admin', '$2y$10$K7B9PJkRXMth5Xg.wLkZ.eTtBYDn/iw0M4l3qWtoOrQyyCAD9Q5EW', 'Pepen', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indeks untuk tabel `kejuruan`
--
ALTER TABLE `kejuruan`
  ADD PRIMARY KEY (`id_kejuruan`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `satuan_kerja`
--
ALTER TABLE `satuan_kerja`
  ADD PRIMARY KEY (`id_satuan_kerja`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kejuruan`
--
ALTER TABLE `kejuruan`
  MODIFY `id_kejuruan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `satuan_kerja`
--
ALTER TABLE `satuan_kerja`
  MODIFY `id_satuan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
