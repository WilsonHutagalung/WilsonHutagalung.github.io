-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 16.21
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
-- Database: `tokosparepart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akunuser`
--

CREATE TABLE `akunuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `akunuser`
--

INSERT INTO `akunuser` (`id`, `username`, `email`, `password`) VALUES
(1, 'Asep', 'Asep@gmail.com', '123'),
(2, 'mahasiswa', 'wilson@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE `sparepart` (
  `Id` int(11) NOT NULL,
  `Nama_sparepart` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Stok` int(20) NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`Id`, `Nama_sparepart`, `Harga`, `Stok`, `Gambar`) VALUES
(14, 'Ban', '460000', 6, 'Ban.png'),
(15, 'OLI', '46500', 5, 'OIL.png'),
(17, 'AKI', '155000', 2, 'Aki.png'),
(19, 'RANTAI', '50000', 5, 'Rantai.png'),
(29, 'Kampas', '50000', 2, 'Kampas.png'),
(30, 'GEAR', '200000', 2, '2023-10-25 08-56-06.  GEAR.png'),
(31, 'Bearing Roda', '300000', 3, '2023-10-25.  Bearing Roda.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akunuser`
--
ALTER TABLE `akunuser`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akunuser`
--
ALTER TABLE `akunuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sparepart`
--
ALTER TABLE `sparepart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
