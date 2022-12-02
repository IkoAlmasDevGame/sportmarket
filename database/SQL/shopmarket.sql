-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2022 pada 11.29
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
-- Database: `shopmarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userEmail` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `userEmail`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', 'admin123', 'Admin Ganteng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buy`
--

CREATE TABLE `buy` (
  `id_buy` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `namabarang` text NOT NULL,
  `hargabarang` int(12) NOT NULL,
  `jumlahbeli` int(12) NOT NULL,
  `laba` int(12) NOT NULL,
  `total_harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buy`
--

INSERT INTO `buy` (`id_buy`, `tanggal`, `namabarang`, `hargabarang`, `jumlahbeli`, `laba`, `total_harga`) VALUES
(1, '12/01/2022', 'Tony Hawk', 5000, 1, 5000, 5000),
(2, '12/01/2022', 'God of War Ragnarok', 999000, 2, 1998000, 1998000),
(3, '12/01/2022', 'Need for Speed - Underground 2', 6000, 1, 6000, 6000),
(4, '12/01/2022', 'Downhill Domination', 6000, 1, 6000, 6000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cd_ps`
--

CREATE TABLE `cd_ps` (
  `id_cd` int(11) NOT NULL,
  `kaset_ps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cd_ps`
--

INSERT INTO `cd_ps` (`id_cd`, `kaset_ps`) VALUES
(1, 'PS 1'),
(2, 'PS 2'),
(3, 'PS 3'),
(4, 'PS 4'),
(5, 'PS 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `databarang`
--

CREATE TABLE `databarang` (
  `id_barang` int(11) NOT NULL,
  `namabarang` text NOT NULL,
  `game` text NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `databarang`
--

INSERT INTO `databarang` (`id_barang`, `namabarang`, `game`, `harga`, `jumlah`, `sisa`) VALUES
(1, 'Tony Hawk', 'PS 1', 5500, 19, 19),
(2, 'Tony Hawk American Westland', 'PS 2', 6000, 20, 0),
(3, 'Crash Team Racing', 'PS 1', 5000, 20, 0),
(4, 'Harvest Moon - Back to Nature', 'PS 1', 5000, 20, 0),
(5, 'Pepsiman', 'PS 1', 5000, 20, 0),
(6, 'Mortal Kombat - Shaolin Monks', 'PS 2', 6000, 20, 0),
(7, 'Bully', 'PS 2', 6000, 20, 0),
(8, 'Downhill Domination', 'PS 2', 6000, 19, 19),
(9, 'Grand Theft Auto - San Andreas', 'PS 2', 6000, 20, 0),
(10, 'Need for Speed - Underground 2', 'PS 2', 6000, 19, 19),
(11, 'Yu-Gi-Oh! Forbidden Memories', 'PS 1', 6000, 20, 0),
(12, 'Spider-Man', 'PS 1', 6000, 20, 0),
(13, 'MTX Mototrax', 'PS 2', 6000, 20, 0),
(14, 'Bakusou Kyoudai Let\'s & Go!! - Eternal Wings', 'PS 1', 6000, 20, 0),
(15, 'Resident Evil 6 Biohazard', 'PS 3', 32000, 20, 0),
(16, 'Activision Call of Duty Modern Warfare 3', 'PS 3', 33155, 20, 0),
(17, 'Red Dead Redemption', 'PS 3', 32000, 20, 0),
(18, 'GTA IV', 'PS 3', 32000, 20, 0),
(19, 'GTA V', 'PS 3', 32000, 20, 0),
(20, 'Watch Dogs', 'PS 3', 50000, 20, 0),
(21, 'the walking dead', 'PS 3', 45000, 20, 0),
(22, 'Red Dead Redemption 2', 'PS 4', 85000, 20, 0),
(23, 'Marvel\'s Spider-Man Miles Morales', 'PS 4', 85000, 20, 0),
(24, 'Mojang Minecraft', 'PS 4', 110000, 20, 0),
(25, 'Resident Evil 7: Biohazard', 'PS 4', 82234, 20, 0),
(26, 'Hot Wheels Unleashed', 'PS 4', 365000, 20, 0),
(27, 'Game God Of War', 'PS 4', 299000, 20, 0),
(28, 'WWE 2K20', 'PS 4', 700000, 20, 0),
(29, 'Naruto Shippuden: Ultimate Ninja Storm', 'PS 4', 200000, 20, 0),
(30, 'Need for Speed Heat', 'PS 4', 100000, 20, 0),
(31, 'Ubisoft Far Cry 6', 'PS 4', 80000, 20, 0),
(32, 'God of War Ragnarok', 'PS 5', 999000, 18, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapribadi`
--

CREATE TABLE `datapribadi` (
  `id_pribadi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `namalengkap` text NOT NULL,
  `namapanggilan` text NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `salary` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapribadi`
--

INSERT INTO `datapribadi` (`id_pribadi`, `id`, `namalengkap`, `namapanggilan`, `umur`, `alamat`, `salary`) VALUES
(1, 1, 'Admin Ganteng', 'Ganteng', 19, 'Jl. Xxxxxx xxxxx xx/xx', 2500000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id_buy`);

--
-- Indeks untuk tabel `cd_ps`
--
ALTER TABLE `cd_ps`
  ADD PRIMARY KEY (`id_cd`);

--
-- Indeks untuk tabel `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `datapribadi`
--
ALTER TABLE `datapribadi`
  ADD PRIMARY KEY (`id_pribadi`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `buy`
--
ALTER TABLE `buy`
  MODIFY `id_buy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `cd_ps`
--
ALTER TABLE `cd_ps`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `databarang`
--
ALTER TABLE `databarang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `datapribadi`
--
ALTER TABLE `datapribadi`
  MODIFY `id_pribadi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
