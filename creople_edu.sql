-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 15.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creople_edu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL,
  `role_id_admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `password`, `role_id_admin`) VALUES
(1, 'admin', 'admin', 123, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `email`, `no_telepon`, `tgl_pesan`, `batas_bayar`, `status_bayar`) VALUES
(1, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 15:02:17', '2023-12-18 15:02:17', ''),
(2, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 15:03:00', '2023-12-18 15:03:00', ''),
(3, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 15:21:51', '2023-12-18 15:21:51', ''),
(4, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 15:29:14', '2023-12-18 15:29:14', 'belum_bayar'),
(5, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 15:30:24', '2023-12-18 15:30:24', 'belum_bayar'),
(6, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 15:30:31', '2023-12-18 15:30:31', 'belum_bayar'),
(7, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 16:15:31', '2023-12-18 16:15:31', ''),
(8, 'Fatimah Azzahra', 'fatimah123@gmail.com', '0892928292920', '2023-12-17 16:15:34', '2023-12-18 16:15:34', ''),
(9, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:38:05', '2023-12-18 20:38:05', ''),
(10, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:42:34', '2023-12-18 20:42:34', ''),
(11, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:44:44', '2023-12-18 20:44:44', ''),
(12, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:46:58', '2023-12-18 20:46:58', ''),
(13, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:47:12', '2023-12-18 20:47:12', ''),
(14, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:47:37', '2023-12-18 20:47:37', ''),
(15, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:48:38', '2023-12-18 20:48:38', ''),
(16, 'Enggar Dyah Bintang Ayuna', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 20:48:58', '2023-12-18 20:48:58', ''),
(17, 'Enggar Dyah Bintang Ayuna', 'kkm@t.c', '99999999', '2023-12-17 20:49:29', '2023-12-18 20:49:29', ''),
(18, 'pooo', 'a@b.c', '788', '2023-12-17 20:51:21', '2023-12-18 20:51:21', ''),
(19, 'Enggar Dyah', 'enggardyah57@gmail.com', '088291417540', '2023-12-17 21:08:33', '2023-12-18 21:08:33', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `id_kursus` int(11) NOT NULL,
  `nama_kursus` varchar(500) NOT NULL,
  `mentor` varchar(200) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `sisa_peserta` int(10) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kursus`
--

INSERT INTO `tb_kursus` (`id_kursus`, `nama_kursus`, `mentor`, `kategori`, `harga`, `sisa_peserta`, `gambar`) VALUES
(1, 'Mengatur strategi mencari relasi koneksi', 'Suryadi Mamujo', 'Softskill', 250000, 15, 'sk1.png'),
(2, 'Belajar pede depan umum', 'Ananda Haryanza', 'SoftSkill', 250000, 15, 'sk2.png'),
(3, 'Membuat caraousel dengan power point', 'Radit Saputra', 'Microsoft Office', 300000, 15, 'mo1.png\r\n'),
(4, 'Mengenal rumus-rumus dasar excel', 'Vika Viola', 'Microsoft Office', 300000, 15, 'mo2.png'),
(5, 'Mengenal UI UX tingkat dasar', 'Prabowo Brivan', 'Desain', 400000, 15, 'ds1.png'),
(6, 'Implementasi desain dengan figma', 'Inggrid Permata Sari', 'Desain', 400000, 15, 'ds2.png'),
(7, 'Mencapai penjualan terbaik', 'Gevano Mahendra', 'Marketing', 300000, 15, 'mk1.png'),
(8, 'Belajar riset kata kunci konten tranding', 'Jaya Wijaya', 'Marketing', 300000, 14, 'mk2.png'),
(9, 'Belajar php untuk pemula', 'Rudi Herman', 'Programming', 600000, 15, 'pr1.png'),
(10, 'Mengenal konsep dasar HTML dan CSS', 'Muhammad Hasan', 'Programming', 600000, 15, 'pr2.png\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `nama_kursus` varchar(200) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(20) NOT NULL,
  `pilihan` text NOT NULL,
  `status_bayar` varchar(20) DEFAULT 'belum_bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_kursus` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok= stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` int(15) NOT NULL,
  `role_id_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id_user`) VALUES
(2, 'user', 'user', 123, 2),
(3, 'Enggar Dyah Bintang Ayuna', 'enggardyah_', 456, 2),
(4, 'Melisaa', 'melisa_', 123, 2),
(5, 'nasya zabrina qatrunada', 'nasya', 0, 2),
(6, 'Fatimah', 'fatimah_', 123, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_kursus`
--
ALTER TABLE `tb_kursus`
  MODIFY `id_kursus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
