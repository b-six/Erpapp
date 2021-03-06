-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 03:04 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erpapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

DROP TABLE IF EXISTS `absensi`;
CREATE TABLE IF NOT EXISTS `absensi` (
  `id_absensi` varchar(20) NOT NULL DEFAULT '',
  `id_pegawai` int(7) NOT NULL,
  `tgl_absensi` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `jenis_absensi` enum('normal','lembur','cuti','alfa') NOT NULL,
  `status_validasi_absensi` enum('sudah','belum') NOT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_pegawai`, `tgl_absensi`, `jam_masuk`, `jam_keluar`, `jenis_absensi`, `status_validasi_absensi`) VALUES
('12132', 1, '2019-05-20', '11:02:15', '11:02:30', 'normal', 'sudah'),
('12133', 2, '2019-06-04', '11:00:00', '00:00:00', 'normal', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(69) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` varchar(258) NOT NULL,
  `modul` enum('marketing','produksi','hrd','warehouse','finance') NOT NULL,
  `level` enum('admin','manajer','user') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `modul`, `level`) VALUES
('algorithm', 'marketing', 'Algorithm', 'marketing', 'admin'),
('finance', 'finance', 'Bayu Wicaksono', 'finance', 'admin'),
('hrd', 'hrd', 'Androxus', 'hrd', 'admin'),
('produksi', 'produksi', 'Wakhid Kampang', 'produksi', 'admin'),
('rizkith', 'marketing', 'Rizuki Ryumada', 'marketing', 'admin'),
('warehouse', 'warehouse', 'warehouse', 'warehouse', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

DROP TABLE IF EXISTS `bahan_baku`;
CREATE TABLE IF NOT EXISTS `bahan_baku` (
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

DROP TABLE IF EXISTS `bahan_baku_keluar`;
CREATE TABLE IF NOT EXISTS `bahan_baku_keluar` (
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

DROP TABLE IF EXISTS `bahan_baku_masuk`;
CREATE TABLE IF NOT EXISTS `bahan_baku_masuk` (
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
-- Table structure for table `bahan_baku_produksi`
--

DROP TABLE IF EXISTS `bahan_baku_produksi`;
CREATE TABLE IF NOT EXISTS `bahan_baku_produksi` (
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_bb_produksi` varchar(255) NOT NULL,
  `jumlah_bb_produksi` int(255) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id_pelanggan` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `alamat_pelanggan` varchar(30) NOT NULL,
  `wilayah` varchar(30) NOT NULL,
  `tipe_customer` enum('Retailer','Personal','Distributor') NOT NULL,
  `sejak` date NOT NULL,
  `email` varchar(258) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `wilayah`, `tipe_customer`, `sejak`, `email`, `password`) VALUES
('1126', 'RVZ Didan', 'Jl. Medan Raya', 'Medan', 'Retailer', '2019-06-06', 'rvzdidan@gmail.com', '123456'),
('1127', 'Ryumada Rizuki', 'Jl. Cipayung', 'Jakarta Timur', 'Distributor', '2019-06-07', 'ryumada@msn.cn', '123456'),
('3', 'Akubaruto Rizuki', '', 'Jakarta Selatan', 'Distributor', '2019-06-03', 'alogirthm@hotmail.com', '123456'),
('4', 'Bayu Uicaksono', '', 'Cikupa', 'Personal', '2019-06-03', 'bay@gmail.com', '12345'),
('5', 'Nasirudin Sabiq', '', 'Depok', 'Personal', '2019-07-09', 'nassabiq@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

DROP TABLE IF EXISTS `cuti`;
CREATE TABLE IF NOT EXISTS `cuti` (
  `id_cuti` varchar(20) NOT NULL,
  `id_pegawai` int(7) NOT NULL,
  `tgl_mulai_cuti` date NOT NULL,
  `tgl_selesai_cuti` date NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `status_cuti` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_pegawai`, `tgl_mulai_cuti`, `tgl_selesai_cuti`, `keterangan_cuti`, `status_cuti`) VALUES
('23', 3, '2019-07-14', '2019-07-16', '', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk_jadi`
--

DROP TABLE IF EXISTS `data_produk_jadi`;
CREATE TABLE IF NOT EXISTS `data_produk_jadi` (
  `id_produk` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jml_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tgl_produk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produk_jadi`
--


-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

DROP TABLE IF EXISTS `gaji`;
CREATE TABLE IF NOT EXISTS `gaji` (
  `id_gaji` varchar(20) NOT NULL,
  `id_pegawai` int(7) NOT NULL,
  `periode_gaji` varchar(9) NOT NULL,
  `gaji_pokok` float NOT NULL,
  `gaji_lembur` float NOT NULL,
  `pengurangan_gaji` float NOT NULL,
  `gaji_total` float NOT NULL,
  `status_validasi_gaji` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id_pegawai`, `periode_gaji`, `gaji_pokok`, `gaji_lembur`, `pengurangan_gaji`, `gaji_total`, `status_validasi_gaji`) VALUES
('21', 2, 'Juni', 3000000, 200000, 2500000, 700000, 'disetujui'),
('22', 1, 'April', 4000000, 0, 2500000, 1500000, 'pending'),
('23', 2, 'Juni', 5000000, 6969, 0, 0, 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `file_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

DROP TABLE IF EXISTS `golongan`;
CREATE TABLE IF NOT EXISTS `golongan` (
  `id_golongan` varchar(3) NOT NULL,
  `nama_golongan` text NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `nama_golongan`) VALUES
('1', 'I'),
('2', 'II'),
('3', 'III');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_produksi`
--

DROP TABLE IF EXISTS `hasil_produksi`;
CREATE TABLE IF NOT EXISTS `hasil_produksi` (
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tgl_hasil_produksi` date NOT NULL,
  `keterangan_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` varchar(5) NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `nama_kecamatan` text NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota`, `nama_kecamatan`) VALUES
('1', '1', 'Kecamatan 1'),
('2', '2', 'Kecamatan 2'),
('3', '3', 'Kecamatan 3'),
('4', '4', 'Kecamatan 4');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

DROP TABLE IF EXISTS `kelurahan`;
CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kelurahan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `nama_kelurahan` text NOT NULL,
  `kode_pos` text NOT NULL,
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `id_kecamatan`, `nama_kelurahan`, `kode_pos`) VALUES
('1', '1', 'Depok', '21432'),
('2', '2', 'Ciputat', '12345'),
('3', '3', 'Pondok Beji', '21432'),
('4', '4', 'Ini nama kelurahan', '23564');

-- --------------------------------------------------------

--
-- Table structure for table `komposisi_produk`
--

DROP TABLE IF EXISTS `komposisi_produk`;
CREATE TABLE IF NOT EXISTS `komposisi_produk` (
  `id_komposisi_produk` varchar(100) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komposisi_produk`
--


-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

DROP TABLE IF EXISTS `kota`;
CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `nama_kota` text NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `id_provinsi`, `nama_kota`) VALUES
('1', '1', 'Kota 1'),
('2', '2', 'Kota 2'),
('3', '3', 'Kota 3');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_biaya_produksi`
--

DROP TABLE IF EXISTS `laporan_biaya_produksi`;
CREATE TABLE IF NOT EXISTS `laporan_biaya_produksi` (
  `id_biaya_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `biaya_tenaga_kerja` int(100) NOT NULL,
  `biaya_waktu_produksi` int(100) NOT NULL,
  `biaya_peralatan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_biaya_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `laporan_perbaikan_produksi`
--

DROP TABLE IF EXISTS `laporan_perbaikan_produksi`;
CREATE TABLE IF NOT EXISTS `laporan_perbaikan_produksi` (
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_quality_control` varchar(100) NOT NULL,
  `jumlah_perbaian` int(100) NOT NULL,
  `jenis_produk` varchar(100) NOT NULL,
  `keterangan_perbaikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_perbaikan_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `laporan_produksi`
--

DROP TABLE IF EXISTS `laporan_produksi`;
CREATE TABLE IF NOT EXISTS `laporan_produksi` (
  `id_laporan_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_biaya_produksi` varchar(100) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `jumlah_barang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(7) NOT NULL DEFAULT '0',
  `id_pendidikan` varchar(3) NOT NULL,
  `id_golongan` varchar(2) NOT NULL,
  `id_satker` varchar(2) NOT NULL,
  `id_kelurahan` varchar(5) NOT NULL,
  `password_pegawai` varchar(8) NOT NULL,
  `nama_pegawai` varchar(35) NOT NULL,
  `umur` int(2) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` bigint(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `rekening_pegawai` bigint(10) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `status_pegawai` enum('aktif','pensiun','resign') NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_pendidikan`, `id_golongan`, `id_satker`, `id_kelurahan`, `password_pegawai`, `nama_pegawai`, `umur`, `alamat`, `no_telp`, `email`, `rekening_pegawai`, `tgl_diterima`, `tgl_berhenti`, `status_pegawai`) VALUES
(1, '1', '1', '1', '1', '8f7c3c77', 'Rizki Sanik', 444, 'wqqwqwqwqwqw', 212121212, 'rizkusanik@ph.com', 2132422, '2018-01-16', '2019-07-16', 'resign'),
(2, '2', '2', '2', '2', '4d0badf2', 'Akbar Gayming', 696, 'sqsqwqwqsq', 232312, 'akbarusilat_masterr@huehue.com', 121332, '2018-06-19', '0000-00-00', 'aktif'),
(3, '3', '3', '3', '3', '34d38f52', 'Bayu Milos', 69, 'sqwqwqsqwqdefwef', 2132323, 'bayu_hehe@hehe.com', 2132323, '2019-07-01', '2019-07-03', 'pensiun');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

DROP TABLE IF EXISTS `pelatihan`;
CREATE TABLE IF NOT EXISTS `pelatihan` (
  `id_pelatihan` varchar(20) NOT NULL,
  `nama_pelatihan` text NOT NULL,
  `instansi` text NOT NULL,
  `satuan_kerja` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_persetujuan` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `nama_pelatihan`, `instansi`, `satuan_kerja`, `tgl_mulai`, `tgl_selesai`, `status_persetujuan`) VALUES
('121312', 'Peningkatan Kinerja Pegawai dengan E-Sport', 'RRQ', 'IT', '2018-06-18', '2019-06-20', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` varchar(3) NOT NULL,
  `jenjang_pendidikan` text NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `jenjang_pendidikan`) VALUES
('1', 'S1'),
('2', 'S2'),
('3', 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_produksi`
--

DROP TABLE IF EXISTS `perencanaan_produksi`;
CREATE TABLE IF NOT EXISTS `perencanaan_produksi` (
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_po` varchar(100) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `jadwal_perencanaan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perencanaan_produksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `permohonan_resign`
--

DROP TABLE IF EXISTS `permohonan_resign`;
CREATE TABLE IF NOT EXISTS `permohonan_resign` (
  `id_resign` varchar(20) NOT NULL,
  `id_pegawai` int(7) NOT NULL,
  `keterangan_resign` text NOT NULL,
  `status_validasi_resign` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_resign`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan_resign`
--

INSERT INTO `permohonan_resign` (`id_resign`, `id_pegawai`, `keterangan_resign`, `status_validasi_resign`) VALUES
('13', 2, 'Mau turnamen pabji onlen di warnet ali', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `production_order`
--

DROP TABLE IF EXISTS `production_order`;
CREATE TABLE IF NOT EXISTS `production_order` (
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
('P-201906033', '1', 5555, '2019-06-03', 'success'),
('P-201907082', '1', 20, '2019-07-08', 'onprocess'),
('P-201907083', 'CC-1', 600, '2019-07-08', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `produk_baru`
--

DROP TABLE IF EXISTS `produk_baru`;
CREATE TABLE IF NOT EXISTS `produk_baru` (
  `id_barang` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(64) NOT NULL,
  `harga` float NOT NULL,
  `file_desain` text NOT NULL,
  `tampilan_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_baru`
--

INSERT INTO `produk_baru` (`id_barang`, `nama`, `jenis`, `harga`, `file_desain`, `tampilan_produk`) VALUES
('20190713001', 'Mama', 'sadsadsa', 8888, 'e70aa71937b7736168a3007c3dc38b93.pdf', '15631489336107018365d2bc2857f755.png'),
('20190715001', 'yhdtryhrt', 'rteewt', 4354350000, '8977149bc0aecd909866a7b38b2f9c47.pdf', '15631489847465557585d2bc2b875649.png'),
('20190715002', 'retrete', 'sfdsfsfds', 23423400, '0ed9fc9e9df9f94e801d733e34dc5a65.docx', '15631490329586804115d2bc2e861617.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk_jadi_keluar`
--

DROP TABLE IF EXISTS `produk_jadi_keluar`;
CREATE TABLE IF NOT EXISTS `produk_jadi_keluar` (
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

DROP TABLE IF EXISTS `produk_jadi_masuk`;
CREATE TABLE IF NOT EXISTS `produk_jadi_masuk` (
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
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id_promo` varchar(128) NOT NULL,
  `produk` varchar(256) DEFAULT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `banner_promo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `produk`, `jumlah_pembelian`, `banner_promo`) VALUES
('943425356thsz', 'trnjrsdht mds', 422253, 'b47508d6835386a750064a20b5c710be.png'),
('Guccha', 'GOGOGO', 1236453, '06cd2ea4c46805e149fa72f3f8843046.jpg'),
('SOSROMANTAPSUPERJUNI', 'klaffjafa', 2147483647, '5f048b0b6637e8c5e66e645f1455f535.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` varchar(5) NOT NULL,
  `nama_provinsi` text NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('1', 'Provinsi 1'),
('2', 'Provinsi 2');

-- --------------------------------------------------------

--
-- Table structure for table `quality_control`
--

DROP TABLE IF EXISTS `quality_control`;
CREATE TABLE IF NOT EXISTS `quality_control` (
  `id_quality_control` int(100) NOT NULL,
  `id_hasil_produksi` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_control`
--


-- --------------------------------------------------------

--
-- Table structure for table `retur_bahan_baku`
--

DROP TABLE IF EXISTS `retur_bahan_baku`;
CREATE TABLE IF NOT EXISTS `retur_bahan_baku` (
  `id_retur` varchar(100) NOT NULL,
  `tgl_retur` date NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retur_bahan_baku`
--


-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

DROP TABLE IF EXISTS `sales_order`;
CREATE TABLE IF NOT EXISTS `sales_order` (
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
('201906022', '2019-06-02', '4', 2, 12000, 'onprocess', 'N'),
('201906023', '2019-06-02', '1127', 70, 750000, 'success', 'Y'),
('201907081', '2019-07-08', '5', 40, 240000, 'pending', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_kerja`
--

DROP TABLE IF EXISTS `satuan_kerja`;
CREATE TABLE IF NOT EXISTS `satuan_kerja` (
  `id_satker` varchar(3) NOT NULL,
  `nama_satker` text NOT NULL,
  PRIMARY KEY (`id_satker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `satuan_kerja`
--

INSERT INTO `satuan_kerja` (`id_satker`, `nama_satker`) VALUES
('1', 'Humas'),
('2', 'Manajemen'),
('3', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
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
('201906022-1', '201906022', 'FT-1', '2019-06-02', 2, 12000),
('201906023-1', '201906023', 'P-3', '2019-06-02', 20, 400000),
('201906023-2', '201906023', 'TBS-3', '2019-06-02', 50, 350000),
('201907081-1', '201907081', 'FT-3', '2019-07-08', 20, 160000),
('201907081-2', '201907081', 'CC-1', '2019-07-08', 20, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `stock_barang`
--

DROP TABLE IF EXISTS `stock_barang`;
CREATE TABLE IF NOT EXISTS `stock_barang` (
  `id_barang` varchar(30) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `tanggal_kadaluarsa_barang` date NOT NULL,
  `harga_barang` float NOT NULL,
  `jumlah_stok_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_barang`
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
-- Table structure for table `stock_produk_jadi`
--

DROP TABLE IF EXISTS `stock_produk_jadi`;
CREATE TABLE IF NOT EXISTS `stock_produk_jadi` (
  `id_barang` varchar(100) NOT NULL,
  `jml_stock_produk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_produk_jadi`
--


-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
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

DROP TABLE IF EXISTS `surat_jalan_distribusi_produk_jadi`;
CREATE TABLE IF NOT EXISTS `surat_jalan_distribusi_produk_jadi` (
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

DROP TABLE IF EXISTS `surat_jalan_pengiriman_bahan_baku`;
CREATE TABLE IF NOT EXISTS `surat_jalan_pengiriman_bahan_baku` (
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

DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `id_pelanggan`, `id_so`, `testimoni_barang`) VALUES
('T-201906023', '1127', '201906023', 'kita bikin startup'),
('T-201907081', '5', '201907081', 'yoman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `bahan_baku_produksi`
--
ALTER TABLE `bahan_baku_produksi`
  ADD PRIMARY KEY (`id_bahan_baku_produksi`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `data_produk_jadi`
--
ALTER TABLE `data_produk_jadi`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `hasil_produksi`
--
ALTER TABLE `hasil_produksi`
  ADD PRIMARY KEY (`id_hasil_produksi`);

--
-- Indeks untuk tabel `komposisi_produk`
--
ALTER TABLE `komposisi_produk`
  ADD PRIMARY KEY (`id_komposisi_produk`);

--
-- Indeks untuk tabel `laporan_biaya_produksi`
--
ALTER TABLE `laporan_biaya_produksi`
  ADD PRIMARY KEY (`id_biaya_produksi`);

--
-- Indeks untuk tabel `laporan_perbaikan_produksi`
--
ALTER TABLE `laporan_perbaikan_produksi`
  ADD PRIMARY KEY (`id_perbaikan_produk`);

--
-- Indeks untuk tabel `laporan_produksi`
--
ALTER TABLE `laporan_produksi`
  ADD PRIMARY KEY (`id_laporan_produksi`);

--
-- Indeks untuk tabel `perencanaan_produksi`
--
ALTER TABLE `perencanaan_produksi`
  ADD PRIMARY KEY (`id_perencanaan_produksi`);

--
-- Indeks untuk tabel `production_order`
--
ALTER TABLE `production_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indeks untuk tabel `produk_baru`
--
ALTER TABLE `produk_baru`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `produk_jadi_keluar`
--
ALTER TABLE `produk_jadi_keluar`
  ADD PRIMARY KEY (`id_produk_keluar`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `produk_jadi_masuk`
--
ALTER TABLE `produk_jadi_masuk`
  ADD PRIMARY KEY (`id_produk_jadi_masuk`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indeks untuk tabel `quality_control`
--
ALTER TABLE `quality_control`
  ADD PRIMARY KEY (`id_quality_control`);

--
-- Indeks untuk tabel `retur_bahan_baku`
--
ALTER TABLE `retur_bahan_baku`
  ADD PRIMARY KEY (`id_retur`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`),
  ADD KEY `id_supplier` (`id_supplier`);

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
-- Indeks untuk tabel `stock_produk_jadi`
--
ALTER TABLE `stock_produk_jadi`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `surat_jalan_distribusi_produk_jadi`
--
ALTER TABLE `surat_jalan_distribusi_produk_jadi`
  ADD PRIMARY KEY (`no_surat_jalan_dpj`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `surat_jalan_pengiriman_bahan_baku`
--
ALTER TABLE `surat_jalan_pengiriman_bahan_baku`
  ADD PRIMARY KEY (`no_surat_jalan_pbb`),
  ADD KEY `id_bahan_baku` (`id_bahan_baku`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
