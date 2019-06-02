-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2019 pada 18.21
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
  `tipe_customer` enum('Retailer','Personal','Distributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `wilayah`, `tipe_customer`) VALUES
('1125', 'Nasirudin Sabiq', 'Jl. Aowkwkwkwk', 'Depok', 'Personal'),
('1126', 'RVZ Didan', 'Jl. Medan Raya', 'Medan', 'Retailer'),
('1127', 'Ryumada Rizuki', 'Jl. Cipayung', 'Jakarta Timur', 'Distributor');

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
  `status` enum('pending','onprocess','success') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `tanggal_pesanan`, `id_pelanggan`, `total_barang`, `total_pesanan`, `status`) VALUES
('201906021', '2019-06-02', '1125', 67, 379000, 'pending'),
('201906022', '2019-06-02', '1126', 49, 255000, 'onprocess'),
('201906023', '2019-06-02', '1127', 110, 682000, 'success');

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
('201906021-1', '201906021', '1', '2019-06-02', 45, 225000),
('201906021-2', '201906021', '2', '2019-06-02', 22, 154000),
('201906022-1', '201906022', '1', '2019-06-02', 44, 220000),
('201906022-2', '201906022', '2', '2019-06-02', 5, 35000),
('201906023-1', '201906023', '2', '2019-06-02', 66, 462000),
('201906023-2', '201906023', '1', '2019-06-02', 44, 220000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock_barang`
--

INSERT INTO `stock_barang` (`id_barang`, `nama_barang`, `tanggal_kadaluarsa_barang`, `harga_barang`, `jumlah_stok_barang`) VALUES
('1', 'Teh Kotak', '2020-02-01', 5000, 258),
('2', 'Teh Botol', '2019-06-30', 7000, 200);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pelanggan`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
