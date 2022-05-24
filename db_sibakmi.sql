-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2020 pada 06.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sibakmi`
--
CREATE DATABASE IF NOT EXISTS `db_sibakmi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_sibakmi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `password`) VALUES
('root', 'admin', '7b24afc8bc80e548d66c4e7ff72171c5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori_sampah`
--

CREATE TABLE `tb_kategori_sampah` (
  `id` varchar(15) NOT NULL,
  `nama_sampah` varchar(255) NOT NULL,
  `jenis_sampah` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori_sampah`
--

INSERT INTO `tb_kategori_sampah` (`id`, `nama_sampah`, `jenis_sampah`, `harga`) VALUES
('K001', 'botol pelastik', 'plastik', 3000),
('K002', 'kardus', 'kertas', 1500),
('K003', 'koran', 'kertas', 1500),
('K004', 'kaleng minuman', 'logam', 4000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `password`) VALUES
('m0001', 'Akmaludin', 'Bojong Sari', 'L', 'aff19ff3cb28994600ae92b437dfeb03'),
('m0002', 'Dimas Tedy Irawan', 'Bojong Sari', 'L', 'f0591bf70b0977dd0024667aec2d696b'),
('m0003', 'Juliani', 'Kebayoran', 'P', 'fbdead954bc6635f1bfee5e88d30550a'),
('m0004', 'Listiani', 'Parung', 'P', '2e1dc8d2e9015c61838f513436a82aea'),
('m0005', 'Monika Juwiata', 'serang', 'P', '59a509a7aa3e34daf174ae056a8cb76a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_timbang_sampah`
--

CREATE TABLE `tb_timbang_sampah` (
  `id` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_member` varchar(15) NOT NULL,
  `id_kategori_sampah` varchar(15) NOT NULL,
  `berat` float NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_timbang_sampah`
--

INSERT INTO `tb_timbang_sampah` (`id`, `tanggal`, `id_member`, `id_kategori_sampah`, `berat`, `total_harga`) VALUES
('TS001', '2020-12-15', 'm0001', 'K002', 11, 16500),
('TS002', '2020-12-15', 'm0001', 'K001', 5, 15000),
('TS003', '2020-12-15', 'm0001', 'K004', 5, 20000),
('TS004', '2020-12-15', 'm0001', 'K003', 5, 7500),
('TS005', '2020-12-15', 'm0002', 'K001', 6.2, 18600),
('TS006', '2020-12-15', 'm0002', 'K004', 4, 16000),
('TS007', '2020-12-15', 'm0003', 'K001', 4.5, 13500),
('TS008', '2020-12-15', 'm0005', 'K004', 4, 16000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kategori_sampah`
--
ALTER TABLE `tb_kategori_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_timbang_sampah`
--
ALTER TABLE `tb_timbang_sampah`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
