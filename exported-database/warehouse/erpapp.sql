-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 08:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `nama_bahan_baku` varchar(100) NOT NULL,
  `keterangan_bahan_baku` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `jml_bahan_baku`, `nama_bahan_baku`, `keterangan_bahan_baku`) VALUES
('BB0001', 5000, 'Teh Hijau', ''),
('BB0002', 5000, 'Gula', '');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku_keluar`
--

CREATE TABLE `bahan_baku_keluar` (
  `id_bahan_baku_keluar` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_keluar` int(255) NOT NULL,
  `tgl_bahan_baku_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku_keluar`
--

INSERT INTO `bahan_baku_keluar` (`id_bahan_baku_keluar`, `id_bahan_baku`, `jml_bahan_baku_keluar`, `tgl_bahan_baku_keluar`) VALUES
('BBO0000001', 'BB0001', 200, '2019-07-15'),
('BBO0000002', 'BB0002', 200, '2019-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku_masuk`
--

CREATE TABLE `bahan_baku_masuk` (
  `id_bahan_baku_masuk` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_masuk` varchar(255) NOT NULL,
  `tgl_bahan_baku_masuk` date NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku_masuk`
--

INSERT INTO `bahan_baku_masuk` (`id_bahan_baku_masuk`, `id_bahan_baku`, `jml_bahan_baku_masuk`, `tgl_bahan_baku_masuk`, `id_supplier`) VALUES
('BBI0000001', 'BB0001', '300', '2019-07-15', 'S0001'),
('BBI0000002', 'BB0002', '300', '2019-07-15', 'S0002');

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
('1125', 'Nasirudin Sabiq', 'Jl. Aowkwkwkwk', 'Depok', '', '2019-06-05'),
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
-- Table structure for table `produk_jadi_keluar`
--

CREATE TABLE `produk_jadi_keluar` (
  `id_produk_keluar` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) NOT NULL,
  `jml_produk_keluar` int(255) NOT NULL,
  `tgl_produk_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_jadi_keluar`
--

INSERT INTO `produk_jadi_keluar` (`id_produk_keluar`, `id_barang`, `id_pelanggan`, `jml_produk_keluar`, `tgl_produk_keluar`) VALUES
('POUT0000001', '1', '1125', 20, '2019-07-15'),
('POUT0000002', '2', '3', 30, '2019-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `produk_jadi_masuk`
--

CREATE TABLE `produk_jadi_masuk` (
  `id_produk_jadi_masuk` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `jml_barang_masuk` int(255) NOT NULL,
  `tgl_produk_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_jadi_masuk`
--

INSERT INTO `produk_jadi_masuk` (`id_produk_jadi_masuk`, `id_barang`, `jml_barang_masuk`, `tgl_produk_masuk`) VALUES
('PIN0000001', '1', 50, '2019-07-15'),
('PIN0000002', '2', 20, '2019-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `retur_bahan_baku`
--

CREATE TABLE `retur_bahan_baku` (
  `id_retur` varchar(100) NOT NULL,
  `tgl_retur` date NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('201906021', '2019-06-02', '1125', 45, 225000, 'pending', 'Y'),
('201906022', '2019-06-02', '1126', 49, 255000, 'onprocess', 'Y'),
('201906023', '2019-06-02', '1127', 110, 682000, 'success', 'Y'),
('201906031', '2019-06-03', '3', 350, 2050000, 'pending', 'Y'),
('201906032', '2019-06-03', '4', 21, 107000, 'pending', 'N'),
('201907141', '2019-07-14', '1125', 0, 0, 'pending', 'N'),
('201907142', '2019-07-14', '4', 0, 0, 'pending', 'N'),
('201907151', '2019-07-15', '1126', 90, 450000, 'pending', 'N');

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
('201906022-1', '201906022', '1', '2019-06-02', 44, 220000),
('201906022-2', '201906022', '2', '2019-06-02', 5, 35000),
('201906023-1', '201906023', '2', '2019-06-02', 66, 462000),
('201906023-2', '201906023', '1', '2019-06-02', 44, 220000),
('201906031-1', '201906031', '1', '2019-06-03', 200, 1000000),
('201906031-2', '201906031', '2', '2019-06-03', 150, 1050000),
('201906032-1', '201906032', '1', '2019-06-03', 20, 100000),
('201906032-2', '201906032', '2', '2019-06-03', 1, 7000),
('201907151-1', '201907151', '1', '2019-07-15', 90, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL,
  `tgl_produksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_barang`
--

INSERT INTO `stock_barang` (`id_barang`, `nama_barang`, `tanggal_kadaluarsa_barang`, `harga_barang`, `jumlah_stok_barang`, `tgl_produksi`) VALUES
('1', 'Teh Kotak', '2020-02-01', 5000, 258, '0000-00-00'),
('2', 'Teh Botol', '2019-06-30', 7000, 200, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_produk_jadi`
--

CREATE TABLE `stock_produk_jadi` (
  `id_barang` varchar(100) NOT NULL,
  `jml_stock_produk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(100) NOT NULL,
  `nama_supplier` varchar(1000) NOT NULL,
  `telp_supplier` varchar(20) NOT NULL,
  `alamat_supplier` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telp_supplier`, `alamat_supplier`) VALUES
('S0001', 'PT. Agroland Sejahtera', '0811111111', 'Jl. Raya Puncak no. 100 Jawa Barat'),
('S0002', 'PT. Hasil Tani Jaya', '08122222222', 'Jl. Raya Bogor no. 101 Jawa Barat');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan_distribusi_produk_jadi`
--

CREATE TABLE `surat_jalan_distribusi_produk_jadi` (
  `no_surat_jalan_dpj` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `nama_distributor` varchar(100) NOT NULL,
  `tgl_surat_jalan_dpj` date NOT NULL,
  `jml_produk_jadi_keluar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan_distribusi_produk_jadi`
--

INSERT INTO `surat_jalan_distribusi_produk_jadi` (`no_surat_jalan_dpj`, `id_barang`, `nama_distributor`, `tgl_surat_jalan_dpj`, `jml_produk_jadi_keluar`) VALUES
('SJDPJ0000001', '1', 'Imam', '2019-07-15', 10),
('SJPJ0000001', '2', 'Ponco', '2019-07-15', 30);

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan_pengiriman_bahan_baku`
--

CREATE TABLE `surat_jalan_pengiriman_bahan_baku` (
  `no_surat_jalan_pbb` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tgl_surat_jalan_pbb` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan_pengiriman_bahan_baku`
--

INSERT INTO `surat_jalan_pengiriman_bahan_baku` (`no_surat_jalan_pbb`, `id_bahan_baku`, `nama_kurir`, `tgl_surat_jalan_pbb`) VALUES
('SJPBB0000001', 'BB0001', 'Fakhri', '2019-07-15'),
('SJPBB0000002', 'BB0002', 'Arizki', '2019-07-15');

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
('T-201906021', '1125', '201906021', 'parah'),
('T-201906022', '1126', '201906022', 'Gila sih ini gila gila'),
('T-201906023', '1127', '201906023', 'kita bikin startup'),
('T-201906031', '3', '201906031', 'Keren bat para para');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `bahan_baku_keluar`
--
ALTER TABLE `bahan_baku_keluar`
  ADD PRIMARY KEY (`id_bahan_baku_keluar`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `bahan_baku_masuk`
--
ALTER TABLE `bahan_baku_masuk`
  ADD PRIMARY KEY (`id_bahan_baku_masuk`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`),
  ADD KEY `id_supplier` (`id_supplier`);

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
-- Indexes for table `produk_jadi_keluar`
--
ALTER TABLE `produk_jadi_keluar`
  ADD PRIMARY KEY (`id_produk_keluar`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `produk_jadi_masuk`
--
ALTER TABLE `produk_jadi_masuk`
  ADD PRIMARY KEY (`id_produk_jadi_masuk`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `retur_bahan_baku`
--
ALTER TABLE `retur_bahan_baku`
  ADD PRIMARY KEY (`id_retur`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`),
  ADD KEY `id_supplier` (`id_supplier`);

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
-- Indexes for table `stock_produk_jadi`
--
ALTER TABLE `stock_produk_jadi`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `surat_jalan_distribusi_produk_jadi`
--
ALTER TABLE `surat_jalan_distribusi_produk_jadi`
  ADD PRIMARY KEY (`no_surat_jalan_dpj`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `surat_jalan_pengiriman_bahan_baku`
--
ALTER TABLE `surat_jalan_pengiriman_bahan_baku`
  ADD PRIMARY KEY (`no_surat_jalan_pbb`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahan_baku_keluar`
--
ALTER TABLE `bahan_baku_keluar`
  ADD CONSTRAINT `bahan_baku_keluar_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`);

--
-- Constraints for table `bahan_baku_masuk`
--
ALTER TABLE `bahan_baku_masuk`
  ADD CONSTRAINT `bahan_baku_masuk_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`),
  ADD CONSTRAINT `bahan_baku_masuk_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `produk_jadi_keluar`
--
ALTER TABLE `produk_jadi_keluar`
  ADD CONSTRAINT `produk_jadi_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock_barang` (`id_barang`),
  ADD CONSTRAINT `produk_jadi_keluar_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `customer` (`id_pelanggan`);

--
-- Constraints for table `produk_jadi_masuk`
--
ALTER TABLE `produk_jadi_masuk`
  ADD CONSTRAINT `produk_jadi_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock_barang` (`id_barang`);

--
-- Constraints for table `retur_bahan_baku`
--
ALTER TABLE `retur_bahan_baku`
  ADD CONSTRAINT `retur_bahan_baku_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`),
  ADD CONSTRAINT `retur_bahan_baku_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Constraints for table `surat_jalan_distribusi_produk_jadi`
--
ALTER TABLE `surat_jalan_distribusi_produk_jadi`
  ADD CONSTRAINT `surat_jalan_distribusi_produk_jadi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `stock_barang` (`id_barang`);

--
-- Constraints for table `surat_jalan_pengiriman_bahan_baku`
--
ALTER TABLE `surat_jalan_pengiriman_bahan_baku`
  ADD CONSTRAINT `surat_jalan_pengiriman_bahan_baku_ibfk_1` FOREIGN KEY (`id_bahan_baku`) REFERENCES `bahan_baku` (`id_bahan_baku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
