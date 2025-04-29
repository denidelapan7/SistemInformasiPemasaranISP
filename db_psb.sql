-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 10:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Deni Kurniawan', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'Apriyani', 'apri88', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Dwi Putri', 'dwi87', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_pembayaran` int(10) NOT NULL,
  `id_pelanggan` int(20) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `tgl_psb` text NOT NULL,
  `bandwith` varchar(50) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_pembayaran`, `id_pelanggan`, `nama_pelanggan`, `email`, `layanan`, `no_tlp`, `tgl_psb`, `bandwith`, `alamat_pelanggan`) VALUES
(200400005, 200512121, 'Dewi Andani', 'internettangerang@gmail.com', 'Internet Home', '08986965578', '2024-12-14', '10 Mbps Rp. 165.000', 'Perum Mustika Tigaraksa Blok C1/20 Kel. Pasirnangka Kec. Tigaraksa Kab. Tangerang'),
(200400006, 200512124, 'Deni Kurniawan', 'deni.delapan7@gmail.com', 'Internet Home', '095636352255', '2025-04-10', '10 Mbps Rp. 165.000', 'Perum Mustika Tigaraksa Blok C1/20 Kel. Pasirnangka Kec. Tigaraksa Kab. Tangerang'),
(200400018, 200412135, 'Nety Anggraeni', 'anggranety@gmail.com', 'Internet Home', '085213862698', '2025-03-15', '50 Mbps Rp. 550.000', 'Perum Mustika Tigaraksa Blok C3/15 Kel. Pasirnangka Kec. Tigaraksa Kab. Tangerang'),
(200400019, 200412136, 'Deni Kurniawan', 'deni.delapan7@gmail.com', 'Internet Home', '08986965578', '2025-01-20', '30 Mbps Rp. 350.000', 'Perum Mustika Tigaraksa Blok C1/20 Kel. Pasirnangka Kec. Tigaraksa Kab. Tangerang'),
(200400020, 200412137, 'Intan Putri', 'internettangerang@gmail.com', 'Internet Home', '4575985679', '2025-02-20', '10 Mbps Rp. 165.000', 'Perum Mustika Tigaraksa Blok B1/20 Kel. Pasirnangka Kec. Tigaraksa Kab. Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `nm_pelanggan` varchar(50) NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `tgl_psb` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `bandwith` varchar(50) NOT NULL,
  `almt_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proses`
--

CREATE TABLE `tb_proses` (
  `id_pelanggan` int(11) NOT NULL,
  `id_pendaftaran` varchar(20) NOT NULL,
  `email_pelanggan` varchar(40) NOT NULL,
  `layanan_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `no_tlp_pelanggan` varchar(50) NOT NULL,
  `tgl_psb_pelanggan` varchar(30) NOT NULL,
  `jk_pelanggan` varchar(15) NOT NULL,
  `bandwith_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `tb_proses`
--
ALTER TABLE `tb_proses`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_pendaftaran` (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200400022;

--
-- AUTO_INCREMENT for table `tb_proses`
--
ALTER TABLE `tb_proses`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200412140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
