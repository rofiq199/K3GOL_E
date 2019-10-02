-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Okt 2019 pada 09.36
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detilbeli`
--

CREATE TABLE `tb_detilbeli` (
  `kd_beli` char(3) NOT NULL,
  `kd_supplier` char(4) NOT NULL,
  `kd_pupuk` char(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga_beli` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detilbeli`
--

INSERT INTO `tb_detilbeli` (`kd_beli`, `kd_supplier`, `kd_pupuk`, `jumlah`, `harga_beli`) VALUES
('B01', 'S001', 'P01', 200, 210000),
('B01', 'S001', 'P04', 100, 350000),
('B01', 'S001', 'P05', 2, 350000),
('B01', 'S001', 'P03', 20, 137500),
('B02', 'S001', 'P06', 20, 500000),
('B03', 'S001', 'P03', 50, 137500),
('B03', 'S001', 'P06', 10, 137500),
('B03', 'S001', 'P07', 10, 137500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detiljual`
--

CREATE TABLE `tb_detiljual` (
  `kd_jual` char(4) NOT NULL,
  `kd_pupuk` char(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga_jual` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detiljual`
--

INSERT INTO `tb_detiljual` (`kd_jual`, `kd_pupuk`, `jumlah`, `harga_jual`) VALUES
('J001', 'P01', 10, 250000),
('J001', 'P04', 20, 375000),
('J002', 'P03', 5, 150000),
('J002', 'P05', 2, 375000),
('J003', 'P06', 3, 550000),
('J003', 'P07', 7, 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `kd_beli` char(3) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`kd_beli`, `tgl_beli`) VALUES
('B01', '2019-04-01'),
('B02', '2019-04-02'),
('B03', '2019-04-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `kd_jual` char(4) NOT NULL,
  `nama_pembeli` varchar(25) NOT NULL,
  `tgl_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`kd_jual`, `nama_pembeli`, `tgl_beli`) VALUES
('J001', 'Sumail', '2019-04-09'),
('J002', 'Ahmad', '2019-04-09'),
('J003', 'Abdul', '2019-04-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pupuk`
--

CREATE TABLE `tb_pupuk` (
  `kd_pupuk` char(3) NOT NULL,
  `nama_pupuk` varchar(25) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga_beli` int(6) NOT NULL,
  `harga_jual` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pupuk`
--

INSERT INTO `tb_pupuk` (`kd_pupuk`, `nama_pupuk`, `stok`, `harga_beli`, `harga_jual`) VALUES
('P01', 'ZA Mestindo', 400, 210000, 250000),
('P02', 'ZA Kertopaten', 400, 210000, 250000),
('P03', 'Rock Phospate', 100, 137500, 150000),
('P04', 'KCL Mestindo', 200, 350000, 375000),
('P05', 'KCL Wilmar', 6, 350000, 375000),
('P06', 'NPK Mutiara', 40, 500000, 550000),
('P07', 'Amophos', 20, 325000, 350000),
('', '', 20, 0, 0),
('', '', 20, 0, 0),
('', '', 20, 0, 0),
('P00', 'kwkw', 20, 200000, 210000),
('P00', 'kwkw', 20, 200000, 210000),
('P00', 'kwkw', 20, 200000, 210000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `kd_supplier` char(4) NOT NULL,
  `nama_supplier` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`kd_supplier`, `nama_supplier`) VALUES
('S001', 'UD.ANUGERAH TANI MAKMUR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'dodhy', 'dc502eff4e2efeaecb6566348dfb630b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
