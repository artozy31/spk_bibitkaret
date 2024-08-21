-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 25 Jan 2023 pada 16.18
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis21`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(5) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`) VALUES
('al002', 'Bibit 1'),
('al003', 'Bibit 2'),
('al004', 'Bibit 3'),
('al005', 'Bibit 4'),
('al006', 'Bibit 5'),
('al007', 'Bibit 6'),
('al008', 'Bibit 7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `sifat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `sifat`) VALUES
('kr001', 'Bentuk Daun ', 4, 'benefit'),
('kr002', 'Bentuk Payung', 3, 'benefit'),
('kr003', 'Posisi Tangkai Daun', 5, 'benefit'),
('kr004', 'Ketebalan Daun', 2, 'benefit'),
('kr005', 'Tulang Daun', 3, 'benefit'),
('kr006', 'Warna Helai Daun', 4, 'benefit'),
('kr007', 'Panjang Tangkai Daun', 3, 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_awal`
--

CREATE TABLE `nilai_awal` (
  `id_matrik` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_awal`
--

INSERT INTO `nilai_awal` (`id_matrik`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(9, 'al002', 'kr001', 'Oval'),
(10, 'al002', 'kr002', 'Setengah Lingkaran'),
(11, 'al002', 'kr003', 'Lurus'),
(12, 'al002', 'kr004', '0.2225'),
(13, 'al002', 'kr005', 'Menyirip'),
(14, 'al002', 'kr006', 'Hijau'),
(15, 'al002', 'kr007', '10'),
(16, 'al003', 'kr001', 'Memanjang'),
(17, 'al003', 'kr002', 'Tidak Setengah Lingkaran'),
(18, 'al003', 'kr003', 'Melengkung'),
(19, 'al003', 'kr004', '0.2075'),
(20, 'al003', 'kr005', 'Tidak Menyirip'),
(21, 'al003', 'kr006', 'Hijau Kekuningan'),
(22, 'al003', 'kr007', '8'),
(23, 'al004', 'kr001', 'Oval'),
(24, 'al004', 'kr002', 'Tidak Setengah Lingkaran'),
(25, 'al004', 'kr003', 'Lurus'),
(26, 'al004', 'kr004', '0.2555'),
(27, 'al004', 'kr005', 'Menyirip'),
(28, 'al004', 'kr006', 'Hijau Kekuningan'),
(29, 'al004', 'kr007', '2,5'),
(30, 'al005', 'kr001', 'Memanjang'),
(31, 'al005', 'kr002', 'Setengah Lingkaran'),
(32, 'al005', 'kr003', 'Lurus'),
(33, 'al005', 'kr004', '0.2625'),
(34, 'al005', 'kr005', 'Menyirip'),
(35, 'al005', 'kr006', 'Hijau'),
(36, 'al005', 'kr007', '21'),
(37, 'al006', 'kr001', 'Oval'),
(38, 'al006', 'kr002', 'Tidak Setengah Lingkaran'),
(39, 'al006', 'kr003', 'Melengkung'),
(40, 'al006', 'kr004', '0.2125'),
(41, 'al006', 'kr005', 'Tidak Menyirip'),
(42, 'al006', 'kr006', 'Hijau Kekuningan'),
(43, 'al006', 'kr007', '5'),
(44, 'al007', 'kr001', 'Oval'),
(49, 'al007', 'kr002', 'Setengah Lingkaran'),
(50, 'al007', 'kr003', 'Lurus'),
(51, 'al007', 'kr004', '0.2075'),
(52, 'al007', 'kr005', 'Menyirip'),
(53, 'al007', 'kr006', 'Hijau Kekuningan'),
(54, 'al007', 'kr007', '8'),
(55, 'al008', 'kr001', 'Oval'),
(56, 'al008', 'kr002', 'Tidak Setengah Lingkaran'),
(57, 'al008', 'kr003', 'Melengkung'),
(58, 'al008', 'kr004', '0.2125'),
(59, 'al008', 'kr005', 'Menyirip'),
(60, 'al008', 'kr006', 'Hijau'),
(61, 'al008', 'kr007', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matrik`
--

CREATE TABLE `nilai_matrik` (
  `id_matrik` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai_matrik`
--

INSERT INTO `nilai_matrik` (`id_matrik`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(9, 'al002', 'kr001', 1),
(10, 'al002', 'kr002', 1),
(11, 'al002', 'kr003', 1),
(12, 'al002', 'kr004', 0.2225),
(13, 'al002', 'kr005', 1),
(14, 'al002', 'kr006', 1),
(15, 'al002', 'kr007', 1),
(16, 'al003', 'kr001', 0),
(17, 'al003', 'kr002', 0),
(18, 'al003', 'kr003', 0),
(19, 'al003', 'kr004', 0.2075),
(20, 'al003', 'kr005', 0),
(21, 'al003', 'kr006', 0),
(22, 'al003', 'kr007', 1),
(23, 'al004', 'kr001', 1),
(24, 'al004', 'kr002', 0),
(25, 'al004', 'kr003', 1),
(26, 'al004', 'kr004', 0.2555),
(27, 'al004', 'kr005', 1),
(28, 'al004', 'kr006', 0),
(29, 'al004', 'kr007', 0),
(30, 'al005', 'kr001', 0),
(31, 'al005', 'kr002', 1),
(32, 'al005', 'kr003', 1),
(33, 'al005', 'kr004', 0.2625),
(34, 'al005', 'kr005', 1),
(35, 'al005', 'kr006', 1),
(36, 'al005', 'kr007', 1),
(37, 'al006', 'kr001', 1),
(38, 'al006', 'kr002', 0),
(39, 'al006', 'kr003', 0),
(40, 'al006', 'kr004', 0.2125),
(41, 'al006', 'kr005', 0),
(42, 'al006', 'kr006', 0),
(43, 'al006', 'kr007', 1),
(44, 'al007', 'kr001', 1),
(49, 'al007', 'kr002', 1),
(50, 'al007', 'kr003', 1),
(51, 'al007', 'kr004', 0.2075),
(52, 'al007', 'kr005', 1),
(53, 'al007', 'kr006', 0),
(54, 'al007', 'kr007', 1),
(55, 'al008', 'kr001', 1),
(56, 'al008', 'kr002', 0),
(57, 'al008', 'kr003', 0),
(58, 'al008', 'kr004', 0.2125),
(59, 'al008', 'kr005', 1),
(60, 'al008', 'kr006', 1),
(61, 'al008', 'kr007', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `nm_alternatif` varchar(35) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  ADD PRIMARY KEY (`id_matrik`);

--
-- Indeks untuk tabel `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  ADD PRIMARY KEY (`id_matrik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `nilai_awal`
--
ALTER TABLE `nilai_awal`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
