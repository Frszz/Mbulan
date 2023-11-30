-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2023 pada 04.59
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
-- Database: `db_mbulan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(11, 'admin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_aktv`
--

CREATE TABLE `tbl_aktv` (
  `id_aktv` int(11) NOT NULL,
  `tgl_aktv` date NOT NULL,
  `ket_aktv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_aktv`
--

INSERT INTO `tbl_aktv` (`id_aktv`, `tgl_aktv`, `ket_aktv`) VALUES
(1, '2023-11-09', 'Gudang Kirim Barang'),
(2, '2023-11-25', 'Laporan Bulanan Data Obat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `id_obat` int(50) NOT NULL,
  `foto_obat` varchar(250) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `kode_obat` varchar(50) NOT NULL,
  `harga_obat` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `persediaan` int(100) NOT NULL,
  `tgl_kadaluwarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`id_obat`, `foto_obat`, `nama_obat`, `kode_obat`, `harga_obat`, `tgl_masuk`, `persediaan`, `tgl_kadaluwarsa`) VALUES
(1, 'Chlorpheniramine.jpeg', 'CTM (Chlorpheniramine)', '1111', '100k', '2023-10-12', 20, '2027-04-10'),
(2, 'Aminophylline.jpeg', 'Aminophylline Tablet', '2222', '-', '2023-10-12', 20, '2026-05-04'),
(3, 'Amoxsan.jpeg', 'Amoxsan', '3333', '-', '2023-10-12', 20, '2026-03-10'),
(4, 'Neomycin.jpeg', 'Neomycin', '4444', '-', '2023-10-12', 30, '2028-06-06'),
(5, 'Lactas Calcium.jpeg', 'Lactas Calcium', '5555', '-', '2023-10-12', 200, '2027-08-11'),
(13, '6567505f6625f.png', '1asdsa', '1231', '1313', '3131-12-13', 12313, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `usia_pelanggan` int(15) NOT NULL,
  `tensi_pelanggan` varchar(100) NOT NULL,
  `penyakit_pelanggan` varchar(100) NOT NULL,
  `obat_pelanggan` varchar(100) NOT NULL,
  `dosis_obat` varchar(100) NOT NULL,
  `tgl_konsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `usia_pelanggan`, `tensi_pelanggan`, `penyakit_pelanggan`, `obat_pelanggan`, `dosis_obat`, `tgl_konsultasi`) VALUES
(1, 'Sokidin', 35, '120/80 mmHg', 'Pneumonia', 'CTM, \r\nEphedrine, \r\nAminophylline, ', '2mg,\r\n5mg,\r\n150mg', '2023-09-25'),
(2, 'Sari', 2, '-', 'Febris', 'Paracetamol ', '120mg', '2023-09-13'),
(3, 'Reza', 20, '-', 'Herpes', 'Vaseline album ad ', '50mg', '2023-09-25'),
(4, 'adinda Setia', 43, '150/80 mmHg', 'Kanker payudara', 'Tamofen tab ', '20mg', '2023-09-27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_aktv`
--
ALTER TABLE `tbl_aktv`
  ADD PRIMARY KEY (`id_aktv`);

--
-- Indeks untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_aktv`
--
ALTER TABLE `tbl_aktv`
  MODIFY `id_aktv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `id_obat` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
