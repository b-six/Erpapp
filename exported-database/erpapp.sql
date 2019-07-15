-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jul 2019 pada 11.58
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erpapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE IF NOT EXISTS `bahan_baku` (
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `nama_bahan_baku` varchar(100) NOT NULL,
  `keterangan_bahan_baku` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `jml_bahan_baku`, `nama_bahan_baku`, `keterangan_bahan_baku`) VALUES
('BB0001', 5000, 'Teh Hijau', ''),
('BB0002', 5000, 'Gula', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku_keluar`
--

CREATE TABLE IF NOT EXISTS `bahan_baku_keluar` (
  `id_bahan_baku_keluar` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_keluar` int(255) NOT NULL,
  `tgl_bahan_baku_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku_keluar`
--

INSERT INTO `bahan_baku_keluar` (`id_bahan_baku_keluar`, `id_bahan_baku`, `jml_bahan_baku_keluar`, `tgl_bahan_baku_keluar`) VALUES
('BBO0000001', 'BB0001', 200, '2019-07-15'),
('BBO0000002', 'BB0002', 200, '2019-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku_masuk`
--

CREATE TABLE IF NOT EXISTS `bahan_baku_masuk` (
  `id_bahan_baku_masuk` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_masuk` varchar(255) NOT NULL,
  `tgl_bahan_baku_masuk` date NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku_masuk`
--

INSERT INTO `bahan_baku_masuk` (`id_bahan_baku_masuk`, `id_bahan_baku`, `jml_bahan_baku_masuk`, `tgl_bahan_baku_masuk`, `id_supplier`) VALUES
('BBI0000001', 'BB0001', '300', '2019-07-15', 'S0001'),
('BBI0000002', 'BB0002', '300', '2019-07-15', 'S0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku_produksi`
--

CREATE TABLE IF NOT EXISTS `bahan_baku_produksi` (
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_bb_produksi` varchar(255) NOT NULL,
  `jumlah_bb_produksi` int(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  PRIMARY KEY (`id_bahan_baku_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_pelanggan` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat_pelanggan` varchar(30) NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `tipe_customer` enum('Retailer','Personal','Distributor') NOT NULL,
  `sejak` date NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
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
-- Struktur dari tabel `data_produk_jadi`
--

CREATE TABLE IF NOT EXISTS `data_produk_jadi` (
  `id_produk` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jml_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tgl_produk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `file_name` varchar(40) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_produksi`
--

CREATE TABLE IF NOT EXISTS `hasil_produksi` (
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tgl_hasil_produksi` date NOT NULL,
  `keterangan_barang` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hasil_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komposisi_produk`
--

CREATE TABLE IF NOT EXISTS `komposisi_produk` (
  `id_komposisi_produk` varchar(100) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komposisi_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_biaya_produksi`
--

CREATE TABLE IF NOT EXISTS `laporan_biaya_produksi` (
  `id_biaya_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `biaya_tenaga_kerja` int(100) NOT NULL,
  `biaya_waktu_produksi` int(100) NOT NULL,
  `biaya_peralatan` int(100) NOT NULL,
  PRIMARY KEY (`id_biaya_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_perbaikan_produksi`
--

CREATE TABLE IF NOT EXISTS `laporan_perbaikan_produksi` (
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_quality_control` varchar(100) NOT NULL,
  `jumlah_perbaian` int(100) NOT NULL,
  `jenis_produk` varchar(100) NOT NULL,
  `keterangan_perbaikan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_perbaikan_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_produksi`
--

CREATE TABLE IF NOT EXISTS `laporan_produksi` (
  `id_laporan_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_biaya_produksi` varchar(100) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  PRIMARY KEY (`id_laporan_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan_produksi`
--

CREATE TABLE IF NOT EXISTS `perencanaan_produksi` (
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_po` varchar(100) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `jadwal_perencanaan` date NOT NULL,
  PRIMARY KEY (`id_perencanaan_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `production_order`
--

CREATE TABLE IF NOT EXISTS `production_order` (
  `id_po` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id_po`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `production_order`
--

INSERT INTO `production_order` (`id_po`, `id_barang`, `jumlah_pesanan`, `tanggal`, `status`) VALUES
('P-201906033', '1', 5555, '2019-06-03', 'success'),
('P-201907082', '1', 20, '2019-07-08', 'onprocess'),
('P-201907083', 'CC-1', 600, '2019-07-08', 'pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_baru`
--

CREATE TABLE IF NOT EXISTS `produk_baru` (
  `id_barang` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `harga` float NOT NULL,
  `file_desain` text NOT NULL,
  `tampilan_produk` text NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_baru`
--

INSERT INTO `produk_baru` (`id_barang`, `nama`, `jenis`, `harga`, `file_desain`, `tampilan_produk`) VALUES
('20190713001', 'Mama', 'sadsadsa', 8888, 'e70aa71937b7736168a3007c3dc38b93.pdf', '15631489336107018365d2bc2857f755.png'),
('20190715001', 'yhdtryhrt', 'rteewt', 4354350000, '8977149bc0aecd909866a7b38b2f9c47.pdf', '15631489847465557585d2bc2b875649.png'),
('20190715002', 'retrete', 'sfdsfsfds', 23423400, '0ed9fc9e9df9f94e801d733e34dc5a65.docx', '15631490329586804115d2bc2e861617.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_jadi_keluar`
--

CREATE TABLE IF NOT EXISTS `produk_jadi_keluar` (
  `id_produk_keluar` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) NOT NULL,
  `jml_produk_keluar` int(255) NOT NULL,
  `tgl_produk_keluar` date NOT NULL,
  PRIMARY KEY (`id_produk_keluar`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_jadi_keluar`
--

INSERT INTO `produk_jadi_keluar` (`id_produk_keluar`, `id_barang`, `id_pelanggan`, `jml_produk_keluar`, `tgl_produk_keluar`) VALUES
('POUT0000001', '1', '1125', 20, '2019-07-15'),
('POUT0000002', '2', '3', 30, '2019-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_jadi_masuk`
--

CREATE TABLE IF NOT EXISTS `produk_jadi_masuk` (
  `id_produk_jadi_masuk` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `jml_barang_masuk` int(255) NOT NULL,
  `tgl_produk_masuk` date NOT NULL,
  PRIMARY KEY (`id_produk_jadi_masuk`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_jadi_masuk`
--

INSERT INTO `produk_jadi_masuk` (`id_produk_jadi_masuk`, `id_barang`, `jml_barang_masuk`, `tgl_produk_masuk`) VALUES
('PIN0000001', '1', 50, '2019-07-15'),
('PIN0000002', '2', 20, '2019-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE IF NOT EXISTS `promo` (
  `id_promo` varchar(128) NOT NULL,
  `produk` varchar(256) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `banner_promo` text,
  PRIMARY KEY (`id_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id_promo`, `produk`, `jumlah_pembelian`, `banner_promo`) VALUES
('943425356thsz', 'trnjrsdht mds', 422253, 'b47508d6835386a750064a20b5c710be.png'),
('Guccha', 'GOGOGO', 1236453, '06cd2ea4c46805e149fa72f3f8843046.jpg'),
('SOSROMANTAPSUPERJUNI', 'klaffjafa', 2147483647, '5f048b0b6637e8c5e66e645f1455f535.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quality_control`
--

CREATE TABLE IF NOT EXISTS `quality_control` (
  `id_quality_control` int(100) NOT NULL,
  `id_hasil_produksi` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_quality_control`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_bahan_baku`
--

CREATE TABLE IF NOT EXISTS `retur_bahan_baku` (
  `id_retur` varchar(100) NOT NULL,
  `tgl_retur` date NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `id_supplier` varchar(100) NOT NULL,
  PRIMARY KEY (`id_retur`),
  KEY `id_bahan_baku` (`id_bahan_baku`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sales_order`
--

CREATE TABLE IF NOT EXISTS `sales_order` (
  `id_so` varchar(30) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `total_barang` int(11) NOT NULL,
  `total_pesanan` float NOT NULL,
  `status` enum('pending','onprocess','success') NOT NULL,
  `testimoni` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_so`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sales_order`
--

INSERT INTO `sales_order` (`id_so`, `tanggal_pesanan`, `id_pelanggan`, `total_barang`, `total_pesanan`, `status`, `testimoni`) VALUES
('201906022', '2019-06-02', '4', 2, 12000, 'onprocess', 'N'),
('201906023', '2019-06-02', '1127', 70, 750000, 'success', 'Y'),
('201907081', '2019-07-08', '5', 1321341, 5285360000, 'pending', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shopping_cart`
--

CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `id_sc` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `id_barang` varchar(30) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `total_harga` float NOT NULL,
  PRIMARY KEY (`id_sc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `shopping_cart`
--

INSERT INTO `shopping_cart` (`id_sc`, `id_so`, `id_barang`, `tanggal_pesanan`, `jumlah_barang`, `total_harga`) VALUES
('201906022-1', '201906022', 'FT-1', '2019-06-02', 2, 12000),
('201906023-1', '201906023', 'P-3', '2019-06-02', 20, 400000),
('201906023-2', '201906023', 'TBS-3', '2019-06-02', 50, 350000),
('201907081-1', '201907081', 'CC-1', '2019-07-08', 1321321, 5285280000),
('201907081-2', '201907081', 'CC-1', '2019-07-08', 20, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_barang`
--

CREATE TABLE IF NOT EXISTS `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
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
-- Struktur dari tabel `stock_produk_jadi`
--

CREATE TABLE IF NOT EXISTS `stock_produk_jadi` (
  `id_barang` varchar(100) NOT NULL,
  `jml_stock_produk` int(255) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id_supplier` varchar(100) NOT NULL,
  `nama_supplier` varchar(1000) NOT NULL,
  `telp_supplier` varchar(20) NOT NULL,
  `alamat_supplier` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `telp_supplier`, `alamat_supplier`) VALUES
('S0001', 'PT. Agroland Sejahtera', '0811111111', 'Jl. Raya Puncak no. 100 Jawa Barat'),
('S0002', 'PT. Hasil Tani Jaya', '08122222222', 'Jl. Raya Bogor no. 101 Jawa Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan_distribusi_produk_jadi`
--

CREATE TABLE IF NOT EXISTS `surat_jalan_distribusi_produk_jadi` (
  `no_surat_jalan_dpj` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `nama_distributor` varchar(100) NOT NULL,
  `tgl_surat_jalan_dpj` date NOT NULL,
  `jml_produk_jadi_keluar` int(255) NOT NULL,
  PRIMARY KEY (`no_surat_jalan_dpj`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_jalan_distribusi_produk_jadi`
--

INSERT INTO `surat_jalan_distribusi_produk_jadi` (`no_surat_jalan_dpj`, `id_barang`, `nama_distributor`, `tgl_surat_jalan_dpj`, `jml_produk_jadi_keluar`) VALUES
('SJDPJ0000001', '1', 'Imam', '2019-07-15', 10),
('SJPJ0000001', '2', 'Ponco', '2019-07-15', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_jalan_pengiriman_bahan_baku`
--

CREATE TABLE IF NOT EXISTS `surat_jalan_pengiriman_bahan_baku` (
  `no_surat_jalan_pbb` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tgl_surat_jalan_pbb` date NOT NULL,
  PRIMARY KEY (`no_surat_jalan_pbb`),
  KEY `id_bahan_baku` (`id_bahan_baku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_jalan_pengiriman_bahan_baku`
--

INSERT INTO `surat_jalan_pengiriman_bahan_baku` (`no_surat_jalan_pbb`, `id_bahan_baku`, `nama_kurir`, `tgl_surat_jalan_pbb`) VALUES
('SJPBB0000001', 'BB0001', 'Fakhri', '2019-07-15'),
('SJPBB0000002', 'BB0002', 'Arizki', '2019-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pelanggan`, `id_so`, `testimoni_barang`) VALUES
('T-201906023', '1127', '201906023', 'kita bikin startup'),
('T-201907081', '5', '201907081', 'yoman');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
