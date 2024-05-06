-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 02:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bastami`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(12) NOT NULL,
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('masuk','keluar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_produk`, `nama_produk`, `stock`, `tanggal`, `status`) VALUES
(8, 1, 'Nugget Salam', 50, '2022-09-19', 'masuk'),
(9, 1, 'Nugget Salam', 100, '2022-09-19', 'keluar'),
(10, 1, 'Nugget Salam', 40, '2022-09-19', 'keluar'),
(11, 1, 'Nugget Salam', 50, '2022-09-19', 'masuk'),
(12, 2, 'baso', 100, '2022-09-19', 'masuk'),
(13, 1, 'Nugget Salam', 50, '2022-09-19', 'keluar'),
(14, 4, 'Nugget Champ', 50, '2022-09-19', 'keluar'),
(15, 4, 'Nugget Champ', 208, '0000-00-00', 'masuk'),
(16, 6, 'nugget fiesta/pcs', 1, '2022-09-19', 'keluar');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_uang` int(12) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('masuk','keluar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_uang`, `jumlah`, `keterangan`, `tanggal`, `status`) VALUES
(1, 2000000, 'bayar nugget salam 100 karton', '2022-09-19', 'keluar'),
(2, 1000000, 'Bayar Nugget Salam 100 karton', '2022-09-19', 'keluar'),
(3, 2000000, 'orang bayar', '2022-09-19', 'masuk'),
(4, 5000000, 'Bayar Nugget Salam 500 karton', '2022-09-19', 'keluar'),
(5, 10000000, 'pak .... bayar setoran', '2022-09-19', 'masuk'),
(6, 5000000, 'pak .... bayar setoran', '2022-09-19', 'masuk'),
(7, 30000, 'ada yang beli nugget fiesta 1 pcs', '2022-09-19', 'masuk');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(12) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stock`, `harga`) VALUES
(1, 'Nugget Fiesta', 120, 100000),
(3, 'Otak-otak Atin', 200, 7000),
(4, 'Nugget Champ', 200, 200000),
(5, 'Nugget Salam', 200, 75000),
(6, 'nugget fiesta/pcs', 29, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_uang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id_uang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
