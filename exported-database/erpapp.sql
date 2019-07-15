-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 05.13
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

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
-- Struktur dari tabel `customer`
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
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `wilayah`, `tipe_customer`, `sejak`) VALUES
('1126', 'RVZ Didan', 'Jl. Medan Raya', 'Medan', 'Retailer', '2019-06-06'),
('1127', 'Ryumada Rizuki', 'Jl. Cipayung', 'Jakarta Timur', 'Distributor', '2019-06-07'),
('3', 'Akubaruto Rizuki', '', 'Jakarta Selatan', 'Distributor', '2019-06-03'),
('4', 'Bayu Uicaksono', '', 'Cikupa', 'Personal', '2019-06-03'),
('5', 'Nasirudin Sabiq', '', 'Depok', 'Personal', '2019-07-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_order`
--

CREATE TABLE `production_order` (
  `id_po` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `production_order`
--

INSERT INTO `production_order` (`id_po`, `id_barang`, `jumlah_pesanan`, `tanggal`, `status`) VALUES
('P-201906033', '1', 5555, '2019-06-03', 'success'),
('P-201907082', '1', 20, '2019-07-08', 'onprocess'),
('P-201907083', '1', 40, '2019-07-08', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_order`
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
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `tanggal_pesanan`, `id_pelanggan`, `total_barang`, `total_pesanan`, `status`, `testimoni`) VALUES
('201906022', '2019-06-02', '4', 2, 12000, 'onprocess', 'N'),
('201906023', '2019-06-02', '1127', 70, 750000, 'success', 'Y'),
('201907081', '2019-07-08', '5', 22, 88000, 'pending', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopping_cart`
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
-- Dumping data untuk tabel `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_sc`, `id_so`, `id_barang`, `tanggal_pesanan`, `jumlah_barang`, `total_harga`) VALUES
('201906022-1', '201906022', 'FT-1', '2019-06-02', 2, 12000),
('201906023-1', '201906023', 'P-3', '2019-06-02', 20, 400000),
('201906023-2', '201906023', 'TBS-3', '2019-06-02', 50, 350000),
('201907081-1', '201907081', 'FT-2', '2019-07-08', 2, 8000),
('201907081-2', '201907081', 'CC-1', '2019-07-08', 20, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock_barang`
--

INSERT INTO `stock_barang` (`id_barang`, `nama_barang`, `tanggal_kadaluarsa_barang`, `harga_barang`, `jumlah_stok_barang`) VALUES
('CC-1', 'Country Choice (250 mL)', '2020-09-10', 4000, 258),
('CC-2', 'Country Choice (1 L)', '2019-07-24', 8000, 500),
('FT-1', 'Fruit Tea Botol Beling (235 mL)', '2020-05-15', 6000, 400),
('FT-2', 'Fruit Tea Genggam (200 mL)', '2020-03-27', 4000, 500),
('FT-3', 'Fruit Tea Kaleng (318 mL)', '2020-07-16', 8000, 460),
('P-1', 'Prim-A Cup (240 mL)', '2020-07-17', 2500, 258),
('P-2', 'Prim-A Botol (330 mL)', '2020-05-16', 4000, 500),
('P-3', 'Prim-A Gallon (19 L)', '2020-08-21', 20000, 1500),
('ST-1', 'S-Tee Botol Beling (318 mL)', '2020-08-21', 4000, 200),
('ST-2', 'S-Tee Botol Plastik (350 mL)', '2020-10-16', 5000, 500),
('T-1', 'Tebs Botol Beling (230 mL)', '2020-06-05', 5000, 200),
('T-2', 'Tebs Botol Plastik (500 mL)', '2020-06-19', 6000, 500),
('T-3', 'Tebs Kaleng (500 mL)', '2020-11-06', 8000, 300),
('TBS-1', 'Teh Botol Sosro (220 mL)', '2019-06-30', 7000, 200),
('TBS-2', 'Teh Kotak Sosro (200mL)', '2020-02-01', 5000, 258),
('TBS-3', 'Teh Kotak Sosro (250 mL)', '2020-06-19', 7000, 520),
('TBS-4', 'Teh Kotak Sosro (330 mL)', '2020-05-15', 10000, 500),
('TBS-5', 'Teh Kotak Sosro (1 L)', '2020-03-13', 11000, 300),
('TBS-6', 'Teh Botol Sosro Plastik (450 mL)', '2020-09-17', 6000, 460),
('TBS-7', 'Teh Botol Sosro Plastik (350 mL)', '2020-09-18', 4000, 600),
('TBS-8', 'Teh Pouch Sosro (230 mL)', '2020-08-07', 5000, 1200),
('TBS-9', 'Teh Kaleng Sosro (318 mL)', '2020-09-25', 5000, 700);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pelanggan`, `id_so`, `testimoni_barang`) VALUES
('T-201906023', '1127', '201906023', 'kita bikin startup'),
('T-201907081', '5', '201907081', 'yoman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `production_order`
--
ALTER TABLE `production_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indeks untuk tabel `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_so`);

--
-- Indeks untuk tabel `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indeks untuk tabel `stock_barang`
--
ALTER TABLE `stock_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
