-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 11:50 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_pelanggan` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat_pelanggan` varchar(30) NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `tipe_customer` enum('Retailer','Personal','Distributor') NOT NULL,
  `sejak` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `wilayah`, `tipe_customer`, `sejak`) VALUES
('1125', 'Nasirudin Sabiq', 'Jl. Aowkwkwkwk', 'Depok', 'Personal', '2019-06-05'),
('1126', 'RVZ Didan', 'Jl. Medan Raya', 'Medan', 'Retailer', '2019-06-06'),
('1127', 'Ryumada Rizuki', 'Jl. Cipayung', 'Jakarta Timur', 'Distributor', '2019-06-07'),
('3', 'Akubaruto Rizuki', '', 'Jakarta Selatan', 'Distributor', '2019-06-03'),
('4', 'Bayu Uicaksono', '', 'Cikupa', 'Personal', '2019-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `production_order`
--

CREATE TABLE `production_order` (
  `id_po` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_order`
--

INSERT INTO `production_order` (`id_po`, `id_barang`, `jumlah_pesanan`, `tanggal`, `status`) VALUES
('P-201906031', '1', 20, '2019-06-03', 'pending'),
('P-201906032', '2', 200, '2019-06-03', 'onprocess'),
('P-201906033', '1', 5555, '2019-06-03', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_so` varchar(30) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `total_pesanan` float NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL,
  `testimoni` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `tanggal_pesanan`, `id_pelanggan`, `total_barang`, `total_pesanan`, `status`, `testimoni`) VALUES
('201906021', '2019-06-02', '1125', 67, 379000, 'pending', 'N'),
('201906022', '2019-06-02', '1126', 49, 255000, 'onprocess', 'Y'),
('201906023', '2019-06-02', '1127', 110, 682000, 'success', 'Y'),
('201906031', '2019-06-03', '3', 350, 2050000, 'pending', 'Y'),
('201906032', '2019-06-03', '4', 21, 107000, 'pending', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id_sc` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total_harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_sc`, `id_so`, `id_barang`, `tanggal_pesanan`, `jumlah_barang`, `total_harga`) VALUES
('201906021-1', '201906021', '1', '2019-06-02', 45, 225000),
('201906021-2', '201906021', '2', '2019-06-02', 22, 154000),
('201906022-1', '201906022', '1', '2019-06-02', 44, 220000),
('201906022-2', '201906022', '2', '2019-06-02', 5, 35000),
('201906023-1', '201906023', '2', '2019-06-02', 66, 462000),
('201906023-2', '201906023', '1', '2019-06-02', 44, 220000),
('201906031-1', '201906031', '1', '2019-06-03', 200, 1000000),
('201906031-2', '201906031', '2', '2019-06-03', 150, 1050000),
('201906032-1', '201906032', '1', '2019-06-03', 20, 100000),
('201906032-2', '201906032', '2', '2019-06-03', 1, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_barang`
--

INSERT INTO `stock_barang` (`id_barang`, `nama_barang`, `tanggal_kadaluarsa_barang`, `harga_barang`, `jumlah_stok_barang`) VALUES
('1', 'Teh Kotak', '2020-02-01', 5000, 258),
('2', 'Teh Botol', '2019-06-30', 7000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pelanggan`, `id_so`, `testimoni_barang`) VALUES
('T-201906022', '1126', '201906022', 'Gila sih ini gila gila'),
('T-201906023', '1127', '201906023', 'kita bikin startup'),
('T-201906031', '3', '201906031', 'Keren bat para para');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `production_order`
--
ALTER TABLE `production_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_so`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indexes for table `stock_barang`
--
ALTER TABLE `stock_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
