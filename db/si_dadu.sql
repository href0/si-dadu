-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Agu 2022 pada 13.09
-- Versi server: 5.7.33
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
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `id_kejuruan` int(11) NOT NULL,
  `pelatihan` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `id_kejuruan`, `pelatihan`, `tgl_awal`, `tgl_akhir`, `lokasi`) VALUES
(1, 2, 'Asisten Pembuat Pakaian (2 Paket)', '2021-03-02', '2022-04-13', 'Simpang rimbo'),
(2, 1, 'Disnaker 1', '2022-07-04', '2022-08-18', 'kota baru'),
(3, 1, 'Disnaker 2', '2022-08-01', '2022-08-26', 'jelutung'),
(5, 1, 'Disnaker 3', '2022-08-01', '2022-08-19', 'jambi'),
(6, 12, 'Operasi Komputer', '2021-03-22', '2021-04-20', 'jambi'),
(7, 2, 'Pembuatan Hiasan Busana Dengan Mesin Bondir Manual', '2021-05-25', '2021-07-03', 'jambi'),
(8, 4, 'Pembuatan Roti dan Kue', '2021-05-25', '2021-06-16', 'jambi'),
(9, 3, 'Junior Beautician', '2021-03-22', '2021-04-20', 'jambi'),
(10, 3, 'Yunior Stylist', '2021-05-25', '2021-06-22', 'jambi'),
(11, 13, 'Pemasangan Instalasi Listrik Bangunan Sederhana', '2021-06-23', '2021-07-31', 'jambi'),
(12, 14, 'Service Sepeda Motor Konvensional', '2021-06-23', '2021-08-14', 'jambi'),
(13, 15, 'Perawatan AC Split', '2021-06-23', '2021-07-31', 'jambi');

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
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `rw-dusun` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `detail_alamat` text NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `hasil_pelatihan` enum('Lulus','Tidak Lulus') DEFAULT NULL,
  `sertifikasi` enum('Kompeten','Tidak Kompeten','Tidak Uji Kompetensi','Lainnya') DEFAULT NULL,
  `penyerapan_lulusan` enum('Mandiri','Industri') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_pelatihan`, `nik`, `nama`, `jenis_kelamin`, `kecamatan`, `kelurahan`, `rw-dusun`, `rt`, `detail_alamat`, `no_hp`, `email`, `foto`, `hasil_pelatihan`, `sertifikasi`, `penyerapan_lulusan`) VALUES
(11, 2, '0923842390423', 'Rizki', 'Laki-Laki', 'Pal merah', 'Talang bakung', '2', '20', 'Jl santoso', '0982092833', 'rizki@gmail.com', 'default.jpg', NULL, NULL, NULL);

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
(3, 'admin', '$2y$10$K7B9PJkRXMth5Xg.wLkZ.eTtBYDn/iw0M4l3qWtoOrQyyCAD9Q5EW', 'Ahmad Tabri', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kejuruan`
--
ALTER TABLE `kejuruan`
  ADD PRIMARY KEY (`id_kejuruan`);

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
-- AUTO_INCREMENT untuk tabel `kejuruan`
--
ALTER TABLE `kejuruan`
  MODIFY `id_kejuruan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `satuan_kerja`
--
ALTER TABLE `satuan_kerja`
  MODIFY `id_satuan_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
