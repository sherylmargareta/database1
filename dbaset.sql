-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220531.aadb8cc914
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2023 at 12:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `kode_brg` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `lok_awal` varchar(100) NOT NULL,
  `lok_akhir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` int(11) NOT NULL,
  `kode_brg` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `jenis` text NOT NULL,
  `tgl` date NOT NULL,
  `thn` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `hrg` int(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `condi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `kode_brg`, `nama`, `jenis`, `tgl`, `thn`, `jumlah`, `hrg`, `loc`, `condi`) VALUES
(23, '123ABC', 'meja', 'baru', '2023-01-16', 0, 1, 0, 'R. Guru', 'hilang'),
(24, '456EFG', 'Kursi Putar Hitam', 'Pipa dan busa', '2023-01-20', 0, 2, 0, 'Lab. Komputer', 'rusak');

-- --------------------------------------------------------

--
-- Table structure for table `barang_rusak`
--

CREATE TABLE `barang_rusak` (
  `id` int(100) NOT NULL,
  `kode_brg` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jml` text NOT NULL,
  `lok` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_rusak`
--

INSERT INTO `barang_rusak` (`id`, `kode_brg`, `nama`, `jenis`, `tgl`, `jml`, `lok`) VALUES
(5, '456EFG', 'Meja Kayu', 'Meubel', '2023-01-16', '3', 'Kelas 10');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `nama`, `username`, `password`) VALUES
(25, 'Kelompok 9', 'kel9', 'kel9'),
(26, 'Kelompok 9', 'kel9', 'kel9'),
(27, 'Kelompok 9', 'kel9', 'kel9'),
(28, 'Kelompok 9', 'kel9', '8c9931edfa775092424664ccd436d456'),
(29, 'Kelompok 9', 'kel9', '8c9931edfa775092424664ccd436d456'),
(30, '', 'kel9', '8c9931edfa775092424664ccd436d456'),
(31, 'Kelompok 9', 'kel9', '8c9931edfa775092424664ccd436d456'),
(32, 'henley', 'henley', 'c23d576ed76c3d91a193ddcb1709127f'),
(33, 'henley', 'henley', 'f39c6ad8266cb99657b3f4eb0d0e1d70'),
(34, 'henley', 'henley', '57f842286171094855e51fc3a541c1e2'),
(35, 'henley', 'henley', 'halo'),
(36, '', 'kel9', 'kel9'),
(37, 'kelompok 9', 'kel9', '12345'),
(38, '', 'kel9', 'kel9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `barang_rusak`
--
ALTER TABLE `barang_rusak`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



