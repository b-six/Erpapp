/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 10.1.37-MariaDB : Database - erpapp
*********************************************************************
*/
=======
-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2019 pada 05.13
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erpapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erpapp`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;
=======
--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_pelanggan` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat_pelanggan` varchar(30) NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `tipe_customer` enum('Retailer','Personal','Distributor') NOT NULL,
  `sejak` date NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id_pelanggan`,`nama_pelanggan`,`alamat_pelanggan`,`wilayah`,`tipe_customer`,`sejak`) values 
('1125','Nasirudin Sabiq','Jl. Aowkwkwkwk','Depok','Personal','2019-06-05'),
('1126','RVZ Didan','Jl. Medan Raya','Medan','Retailer','2019-06-06'),
('1127','Ryumada Rizuki','Jl. Cipayung','Jakarta Timur','Distributor','2019-06-07'),
('3','Akubaruto Rizuki','','Jakarta Selatan','Distributor','2019-06-03'),
('4','Bayu Uicaksono','','Cikupa','Personal','2019-06-03');
=======
--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `wilayah`, `tipe_customer`, `sejak`) VALUES
('1126', 'RVZ Didan', 'Jl. Medan Raya', 'Medan', 'Retailer', '2019-06-06'),
('1127', 'Ryumada Rizuki', 'Jl. Cipayung', 'Jakarta Timur', 'Distributor', '2019-06-07'),
('3', 'Akubaruto Rizuki', '', 'Jakarta Selatan', 'Distributor', '2019-06-03'),
('4', 'Bayu Uicaksono', '', 'Cikupa', 'Personal', '2019-06-03'),
('5', 'Nasirudin Sabiq', '', 'Depok', 'Personal', '2019-07-09');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `file_name` varchar(40) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

/*Table structure for table `production_order` */

DROP TABLE IF EXISTS `production_order`;
=======
--
-- Struktur dari tabel `production_order`
--

CREATE TABLE `production_order` (
  `id_po` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_po`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `production_order` */

insert  into `production_order`(`id_po`,`id_barang`,`jumlah_pesanan`,`tanggal`,`status`) values 
('P-201906031','1',20,'2019-06-03','pending'),
('P-201906032','2',200,'2019-06-03','onprocess'),
('P-201906033','1',5555,'2019-06-03','success'),
('P-201906071','1',345,'2019-06-07','pending'),
('P-201906072','2',567,'2019-06-07','pending'),
('P-201906073','2',56446,'2019-06-07','pending'),
('P-201906074','1',789,'2019-06-07','pending');

/*Table structure for table `produk_baru` */

DROP TABLE IF EXISTS `produk_baru`;

CREATE TABLE `produk_baru` (
  `id_barang` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `harga` float NOT NULL,
  `file_desain` text NOT NULL,
  `tampilan_produk` text NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk_baru` */

insert  into `produk_baru`(`id_barang`,`nama`,`jenis`,`harga`,`file_desain`,`tampilan_produk`) values 
('20190713001','Mama','sadsadsa',8888,'e70aa71937b7736168a3007c3dc38b93.pdf','15631489336107018365d2bc2857f755.png'),
('20190715001','yhdtryhrt','rteewt',4354350000,'8977149bc0aecd909866a7b38b2f9c47.pdf','15631489847465557585d2bc2b875649.png'),
('20190715002','retrete','sfdsfsfds',23423400,'0ed9fc9e9df9f94e801d733e34dc5a65.docx','15631490329586804115d2bc2e861617.png');

/*Table structure for table `promo` */

DROP TABLE IF EXISTS `promo`;

CREATE TABLE `promo` (
  `id_promo` varchar(128) NOT NULL,
  `produk` varchar(256) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `banner_promo` text,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `promo` */

insert  into `promo`(`id_promo`,`produk`,`jumlah_pembelian`,`banner_promo`) values 
('943425356thsz','trnjrsdht mds',422253,'b47508d6835386a750064a20b5c710be.png'),
('Guccha','GOGOGO',1236453,'06cd2ea4c46805e149fa72f3f8843046.jpg'),
('SOSROMANTAPSUPERJUNI','klaffjafa',2147483647,'5f048b0b6637e8c5e66e645f1455f535.jpg');
=======
--
-- Dumping data untuk tabel `production_order`
--

INSERT INTO `production_order` (`id_po`, `id_barang`, `jumlah_pesanan`, `tanggal`, `status`) VALUES
('P-201906033', '1', 5555, '2019-06-03', 'success'),
('P-201907082', '1', 20, '2019-07-08', 'onprocess'),
('P-201907083', '1', 40, '2019-07-08', 'pending');

/*Table structure for table `sales_order` */

DROP TABLE IF EXISTS `sales_order`;
=======
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
  `testimoni` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_so`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sales_order` */

insert  into `sales_order`(`id_so`,`tanggal_pesanan`,`id_pelanggan`,`total_barang`,`total_pesanan`,`status`,`testimoni`) values 
('201906021','2019-06-02','1125',67,379000,'pending','N'),
('201906022','2019-06-02','1126',49,255000,'onprocess','Y'),
('201906023','2019-06-02','1127',110,682000,'success','Y'),
('201906031','2019-06-03','3',350,2050000,'pending','Y'),
('201906032','2019-06-03','4',21,107000,'pending','N');
=======
--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `tanggal_pesanan`, `id_pelanggan`, `total_barang`, `total_pesanan`, `status`, `testimoni`) VALUES
('201906022', '2019-06-02', '4', 2, 12000, 'onprocess', 'N'),
('201906023', '2019-06-02', '1127', 70, 750000, 'success', 'Y'),
('201907081', '2019-07-08', '5', 22, 88000, 'pending', 'Y');

/*Table structure for table `shopping_cart` */

DROP TABLE IF EXISTS `shopping_cart`;
=======
--
-- Struktur dari tabel `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id_sc` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total_harga` float NOT NULL,
  PRIMARY KEY (`id_sc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `shopping_cart` */

insert  into `shopping_cart`(`id_sc`,`id_so`,`id_barang`,`tanggal_pesanan`,`jumlah_barang`,`total_harga`) values 
('201906021-1','201906021','1','2019-06-02',45,225000),
('201906021-2','201906021','2','2019-06-02',22,154000),
('201906022-1','201906022','1','2019-06-02',44,220000),
('201906022-2','201906022','2','2019-06-02',5,35000),
('201906023-1','201906023','2','2019-06-02',66,462000),
('201906023-2','201906023','1','2019-06-02',44,220000),
('201906031-1','201906031','1','2019-06-03',200,1000000),
('201906031-2','201906031','2','2019-06-03',150,1050000),
('201906032-1','201906032','1','2019-06-03',20,100000),
('201906032-2','201906032','2','2019-06-03',1,7000);
=======
--
-- Dumping data untuk tabel `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_sc`, `id_so`, `id_barang`, `tanggal_pesanan`, `jumlah_barang`, `total_harga`) VALUES
('201906022-1', '201906022', 'FT-1', '2019-06-02', 2, 12000),
('201906023-1', '201906023', 'P-3', '2019-06-02', 20, 400000),
('201906023-2', '201906023', 'TBS-3', '2019-06-02', 50, 350000),
('201907081-1', '201907081', 'FT-2', '2019-07-08', 2, 8000),
('201907081-2', '201907081', 'CC-1', '2019-07-08', 20, 80000);

/*Table structure for table `stock_barang` */

DROP TABLE IF EXISTS `stock_barang`;
=======
--
-- Struktur dari tabel `stock_barang`
--

CREATE TABLE `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stock_barang` */

insert  into `stock_barang`(`id_barang`,`nama_barang`,`tanggal_kadaluarsa_barang`,`harga_barang`,`jumlah_stok_barang`) values 
('1','Teh Kotak','2020-02-01',5000,258),
('2','Teh Botol','2019-06-30',7000,200);
=======
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

/*Table structure for table `testimoni` */

DROP TABLE IF EXISTS `testimoni`;
=======
--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `testimoni` */

insert  into `testimoni`(`id_testimoni`,`id_pelanggan`,`id_so`,`testimoni_barang`) values 
('T-201906022','1126','201906022','Gila sih ini gila gila'),
('T-201906023','1127','201906023','kita bikin startup'),
('T-201906031','3','201906031','Keren bat para para');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
=======
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

