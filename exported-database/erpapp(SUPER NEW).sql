/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.5.8 : Database - erpapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erpapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erpapp`;

/*Table structure for table `absensi` */

DROP TABLE IF EXISTS `absensi`;

CREATE TABLE `absensi` (
  `id_absensi` varchar(20) NOT NULL DEFAULT '',
  `id_pegawai` int(7) NOT NULL,
  `tgl_absensi` date NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `jenis_absensi` enum('normal','lembur','cuti','alfa') NOT NULL,
  `status_validasi_absensi` enum('sudah','belum') NOT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `absensi` */

insert  into `absensi`(`id_absensi`,`id_pegawai`,`tgl_absensi`,`jam_masuk`,`jam_keluar`,`jenis_absensi`,`status_validasi_absensi`) values 
('12132',1,'2019-05-20','11:02:15','11:02:30','normal','sudah'),
('12133',2,'2019-06-04','11:00:00','00:00:00','normal','sudah');

/*Table structure for table `bahan_baku` */

DROP TABLE IF EXISTS `bahan_baku`;

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `nama_bahan_baku` varchar(100) NOT NULL,
  `keterangan_bahan_baku` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_baku` */

insert  into `bahan_baku`(`id_bahan_baku`,`jml_bahan_baku`,`nama_bahan_baku`,`keterangan_bahan_baku`) values 
('BB0001',5000,'Teh Hijau',''),
('BB0002',5000,'Gula','');

/*Table structure for table `bahan_baku_keluar` */

DROP TABLE IF EXISTS `bahan_baku_keluar`;

CREATE TABLE `bahan_baku_keluar` (
  `id_bahan_baku_keluar` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_keluar` int(255) NOT NULL,
  `tgl_bahan_baku_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_baku_keluar` */

insert  into `bahan_baku_keluar`(`id_bahan_baku_keluar`,`id_bahan_baku`,`jml_bahan_baku_keluar`,`tgl_bahan_baku_keluar`) values 
('BBO0000001','BB0001',200,'2019-07-15'),
('BBO0000002','BB0002',200,'2019-07-15');

/*Table structure for table `bahan_baku_masuk` */

DROP TABLE IF EXISTS `bahan_baku_masuk`;

CREATE TABLE `bahan_baku_masuk` (
  `id_bahan_baku_masuk` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku_masuk` varchar(255) NOT NULL,
  `tgl_bahan_baku_masuk` date NOT NULL,
  `id_supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_baku_masuk` */

insert  into `bahan_baku_masuk`(`id_bahan_baku_masuk`,`id_bahan_baku`,`jml_bahan_baku_masuk`,`tgl_bahan_baku_masuk`,`id_supplier`) values 
('BBI0000001','BB0001','300','2019-07-15','S0001'),
('BBI0000002','BB0002','300','2019-07-15','S0002');

/*Table structure for table `bahan_baku_produksi` */

DROP TABLE IF EXISTS `bahan_baku_produksi`;

CREATE TABLE `bahan_baku_produksi` (
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_bb_produksi` varchar(255) NOT NULL,
  `jumlah_bb_produksi` int(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  PRIMARY KEY (`id_bahan_baku_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan_baku_produksi` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

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
('1126','RVZ Didan','Jl. Medan Raya','Medan','Retailer','2019-06-06'),
('1127','Ryumada Rizuki','Jl. Cipayung','Jakarta Timur','Distributor','2019-06-07'),
('3','Akubaruto Rizuki','','Jakarta Selatan','Distributor','2019-06-03'),
('4','Bayu Uicaksono','','Cikupa','Personal','2019-06-03'),
('5','Nasirudin Sabiq','','Depok','Personal','2019-07-09');

/*Table structure for table `cuti` */

DROP TABLE IF EXISTS `cuti`;

CREATE TABLE `cuti` (
  `id_cuti` varchar(20) NOT NULL,
  `id_pegawai` int(7) NOT NULL,
  `tgl_mulai_cuti` date NOT NULL,
  `tgl_selesai_cuti` date NOT NULL,
  `keterangan_cuti` text NOT NULL,
  `status_cuti` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cuti` */

insert  into `cuti`(`id_cuti`,`id_pegawai`,`tgl_mulai_cuti`,`tgl_selesai_cuti`,`keterangan_cuti`,`status_cuti`) values 
('23',3,'2019-07-14','2019-07-16','','disetujui');

/*Table structure for table `data_produk_jadi` */

DROP TABLE IF EXISTS `data_produk_jadi`;

CREATE TABLE `data_produk_jadi` (
  `id_produk` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jml_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `tgl_produk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_produk_jadi` */

/*Table structure for table `gaji` */

DROP TABLE IF EXISTS `gaji`;

CREATE TABLE `gaji` (
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

/*Data for the table `gaji` */

insert  into `gaji`(`id_gaji`,`id_pegawai`,`periode_gaji`,`gaji_pokok`,`gaji_lembur`,`pengurangan_gaji`,`gaji_total`,`status_validasi_gaji`) values 
('21',2,'Juni',3000000,200000,2500000,700000,'disetujui'),
('22',1,'April',4000000,0,2500000,1500000,'pending'),
('23',2,'Juni',5000000,2500000,0,2500000,'ditolak');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `file_name` varchar(40) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

/*Table structure for table `golongan` */

DROP TABLE IF EXISTS `golongan`;

CREATE TABLE `golongan` (
  `id_golongan` varchar(3) NOT NULL,
  `nama_golongan` text NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `golongan` */

insert  into `golongan`(`id_golongan`,`nama_golongan`) values 
('1','I'),
('2','II'),
('3','III');

/*Table structure for table `hasil_produksi` */

DROP TABLE IF EXISTS `hasil_produksi`;

CREATE TABLE `hasil_produksi` (
  `id_hasil_produksi` varchar(100) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tgl_hasil_produksi` date NOT NULL,
  `keterangan_barang` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hasil_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `hasil_produksi` */

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id_kecamatan` varchar(5) NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `nama_kecamatan` text NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`id_kecamatan`,`id_kota`,`nama_kecamatan`) values 
('1','1','Kecamatan 1'),
('2','2','Kecamatan 2'),
('3','3','Kecamatan 3'),
('4','4','Kecamatan 4');

/*Table structure for table `kelurahan` */

DROP TABLE IF EXISTS `kelurahan`;

CREATE TABLE `kelurahan` (
  `id_kelurahan` varchar(5) NOT NULL,
  `id_kecamatan` varchar(5) NOT NULL,
  `nama_kelurahan` text NOT NULL,
  `kode_pos` text NOT NULL,
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelurahan` */

insert  into `kelurahan`(`id_kelurahan`,`id_kecamatan`,`nama_kelurahan`,`kode_pos`) values 
('1','1','Depok','21432'),
('2','2','Ciputat','12345'),
('3','3','Pondok Beji','21432'),
('4','4','Ini nama kelurahan','23564');

/*Table structure for table `komposisi_produk` */

DROP TABLE IF EXISTS `komposisi_produk`;

CREATE TABLE `komposisi_produk` (
  `id_komposisi_produk` varchar(100) NOT NULL,
  `id_produk` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `cara_pengolahan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_komposisi_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `komposisi_produk` */

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `nama_kota` text NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(`id_kota`,`id_provinsi`,`nama_kota`) values 
('1','1','Kota 1'),
('2','2','Kota 2'),
('3','3','Kota 3');

/*Table structure for table `laporan_biaya_produksi` */

DROP TABLE IF EXISTS `laporan_biaya_produksi`;

CREATE TABLE `laporan_biaya_produksi` (
  `id_biaya_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `biaya_tenaga_kerja` int(100) NOT NULL,
  `biaya_waktu_produksi` int(100) NOT NULL,
  `biaya_peralatan` int(100) NOT NULL,
  PRIMARY KEY (`id_biaya_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporan_biaya_produksi` */

/*Table structure for table `laporan_perbaikan_produksi` */

DROP TABLE IF EXISTS `laporan_perbaikan_produksi`;

CREATE TABLE `laporan_perbaikan_produksi` (
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_quality_control` varchar(100) NOT NULL,
  `jumlah_perbaian` int(100) NOT NULL,
  `jenis_produk` varchar(100) NOT NULL,
  `keterangan_perbaikan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_perbaikan_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporan_perbaikan_produksi` */

/*Table structure for table `laporan_produksi` */

DROP TABLE IF EXISTS `laporan_produksi`;

CREATE TABLE `laporan_produksi` (
  `id_laporan_produksi` varchar(100) NOT NULL,
  `id_hasil_produksi` varchar(100) NOT NULL,
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_perbaikan_produk` varchar(100) NOT NULL,
  `id_biaya_produksi` varchar(100) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `jumlah_barang` int(100) NOT NULL,
  PRIMARY KEY (`id_laporan_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporan_produksi` */

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
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
  `sk_file` text,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`id_pendidikan`,`id_golongan`,`id_satker`,`id_kelurahan`,`password_pegawai`,`nama_pegawai`,`umur`,`alamat`,`no_telp`,`email`,`rekening_pegawai`,`tgl_diterima`,`tgl_berhenti`,`status_pegawai`,`sk_file`,`foto`) values 
(1,'','','','','','Akbaru',26,'Jl. sqwqw',8217382673,'qwqwqw@',0,'2019-07-08','0000-00-00','resign',NULL,''),
(2,'1','3','','','','Bayu',32,'Jl. Alamat 434',3534232,'bayu@ph.com',26,'2019-07-15','0000-00-00','aktif',NULL,'7dea61f76dabf60b5253a05133db53c2.jpg');

/*Table structure for table `pelatihan` */

DROP TABLE IF EXISTS `pelatihan`;

CREATE TABLE `pelatihan` (
  `id_pelatihan` varchar(20) NOT NULL,
  `nama_pelatihan` text NOT NULL,
  `instansi` text NOT NULL,
  `satuan_kerja` text NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status_persetujuan` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_pelatihan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelatihan` */

insert  into `pelatihan`(`id_pelatihan`,`nama_pelatihan`,`instansi`,`satuan_kerja`,`tgl_mulai`,`tgl_selesai`,`status_persetujuan`) values 
('121312','Peningkatan Kinerja Pegawai dengan E-Sport','RRQ','IT','2018-06-18','2019-06-20','disetujui');

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `id_pendidikan` varchar(3) NOT NULL,
  `jenjang_pendidikan` text NOT NULL,
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan` */

insert  into `pendidikan`(`id_pendidikan`,`jenjang_pendidikan`) values 
('1','S1'),
('2','S2'),
('3','S3');

/*Table structure for table `perencanaan_produksi` */

DROP TABLE IF EXISTS `perencanaan_produksi`;

CREATE TABLE `perencanaan_produksi` (
  `id_perencanaan_produksi` varchar(100) NOT NULL,
  `id_bahan_baku_produksi` varchar(100) NOT NULL,
  `id_po` varchar(100) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `jadwal_perencanaan` date NOT NULL,
  PRIMARY KEY (`id_perencanaan_produksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perencanaan_produksi` */

/*Table structure for table `permohonan_resign` */

DROP TABLE IF EXISTS `permohonan_resign`;

CREATE TABLE `permohonan_resign` (
  `id_resign` varchar(20) NOT NULL,
  `id_pegawai` int(7) NOT NULL,
  `keterangan_resign` text NOT NULL,
  `status_validasi_resign` enum('pending','disetujui','ditolak') NOT NULL,
  PRIMARY KEY (`id_resign`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `permohonan_resign` */

insert  into `permohonan_resign`(`id_resign`,`id_pegawai`,`keterangan_resign`,`status_validasi_resign`) values 
('13',2,'Mau turnamen pabji onlen di warnet ali','pending');

/*Table structure for table `production_order` */

DROP TABLE IF EXISTS `production_order`;

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
('P-201906033','1',5555,'2019-06-03','success'),
('P-201907082','1',20,'2019-07-08','onprocess'),
('P-201907083','CC-1',600,'2019-07-08','pending');

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

/*Table structure for table `produk_jadi_keluar` */

DROP TABLE IF EXISTS `produk_jadi_keluar`;

CREATE TABLE `produk_jadi_keluar` (
  `id_produk_keluar` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) NOT NULL,
  `jml_produk_keluar` int(255) NOT NULL,
  `tgl_produk_keluar` date NOT NULL,
  PRIMARY KEY (`id_produk_keluar`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk_jadi_keluar` */

insert  into `produk_jadi_keluar`(`id_produk_keluar`,`id_barang`,`id_pelanggan`,`jml_produk_keluar`,`tgl_produk_keluar`) values 
('POUT0000001','1','1125',20,'2019-07-15'),
('POUT0000002','2','3',30,'2019-07-15');

/*Table structure for table `produk_jadi_masuk` */

DROP TABLE IF EXISTS `produk_jadi_masuk`;

CREATE TABLE `produk_jadi_masuk` (
  `id_produk_jadi_masuk` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `jml_barang_masuk` int(255) NOT NULL,
  `tgl_produk_masuk` date NOT NULL,
  PRIMARY KEY (`id_produk_jadi_masuk`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk_jadi_masuk` */

insert  into `produk_jadi_masuk`(`id_produk_jadi_masuk`,`id_barang`,`jml_barang_masuk`,`tgl_produk_masuk`) values 
('PIN0000001','1',50,'2019-07-15'),
('PIN0000002','2',20,'2019-07-15');

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

/*Table structure for table `provinsi` */

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `id_provinsi` varchar(5) NOT NULL,
  `nama_provinsi` text NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `provinsi` */

insert  into `provinsi`(`id_provinsi`,`nama_provinsi`) values 
('1','Provinsi 1'),
('2','Provinsi 2');

/*Table structure for table `quality_control` */

DROP TABLE IF EXISTS `quality_control`;

CREATE TABLE `quality_control` (
  `id_quality_control` int(100) NOT NULL,
  `id_hasil_produksi` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_quality_control`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `quality_control` */

/*Table structure for table `retur_bahan_baku` */

DROP TABLE IF EXISTS `retur_bahan_baku`;

CREATE TABLE `retur_bahan_baku` (
  `id_retur` varchar(100) NOT NULL,
  `tgl_retur` date NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `jml_bahan_baku` int(255) NOT NULL,
  `id_supplier` varchar(100) NOT NULL,
  PRIMARY KEY (`id_retur`),
  KEY `id_bahan_baku` (`id_bahan_baku`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `retur_bahan_baku` */

/*Table structure for table `sales_order` */

DROP TABLE IF EXISTS `sales_order`;

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
('201906022','2019-06-02','4',2,12000,'onprocess','N'),
('201906023','2019-06-02','1127',70,750000,'success','Y'),
('201907081','2019-07-08','5',1321341,5285360000,'pending','Y');

/*Table structure for table `satuan_kerja` */

DROP TABLE IF EXISTS `satuan_kerja`;

CREATE TABLE `satuan_kerja` (
  `id_satker` varchar(3) NOT NULL,
  `nama_satker` text NOT NULL,
  PRIMARY KEY (`id_satker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `satuan_kerja` */

insert  into `satuan_kerja`(`id_satker`,`nama_satker`) values 
('1','Humas'),
('2','Manajemen'),
('3','IT');

/*Table structure for table `shopping_cart` */

DROP TABLE IF EXISTS `shopping_cart`;

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
('201906022-1','201906022','FT-1','2019-06-02',2,12000),
('201906023-1','201906023','P-3','2019-06-02',20,400000),
('201906023-2','201906023','TBS-3','2019-06-02',50,350000),
('201907081-1','201907081','CC-1','2019-07-08',1321321,5285280000),
('201907081-2','201907081','CC-1','2019-07-08',20,80000);

/*Table structure for table `stock_barang` */

DROP TABLE IF EXISTS `stock_barang`;

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
('CC-1','Country Choice (250 mL)','2020-09-10',4000,258),
('CC-2','Country Choice (1 L)','2019-07-24',8000,500),
('FT-1','Fruit Tea Botol Beling (235 mL)','2020-05-15',6000,400),
('FT-2','Fruit Tea Genggam (200 mL)','2020-03-27',4000,500),
('FT-3','Fruit Tea Kaleng (318 mL)','2020-07-16',8000,460),
('P-1','Prim-A Cup (240 mL)','2020-07-17',2500,258),
('P-2','Prim-A Botol (330 mL)','2020-05-16',4000,500),
('P-3','Prim-A Gallon (19 L)','2020-08-21',20000,1500),
('ST-1','S-Tee Botol Beling (318 mL)','2020-08-21',4000,200),
('ST-2','S-Tee Botol Plastik (350 mL)','2020-10-16',5000,500),
('T-1','Tebs Botol Beling (230 mL)','2020-06-05',5000,200),
('T-2','Tebs Botol Plastik (500 mL)','2020-06-19',6000,500),
('T-3','Tebs Kaleng (500 mL)','2020-11-06',8000,300),
('TBS-1','Teh Botol Sosro (220 mL)','2019-06-30',7000,200),
('TBS-2','Teh Kotak Sosro (200mL)','2020-02-01',5000,258),
('TBS-3','Teh Kotak Sosro (250 mL)','2020-06-19',7000,520),
('TBS-4','Teh Kotak Sosro (330 mL)','2020-05-15',10000,500),
('TBS-5','Teh Kotak Sosro (1 L)','2020-03-13',11000,300),
('TBS-6','Teh Botol Sosro Plastik (450 mL)','2020-09-17',6000,460),
('TBS-7','Teh Botol Sosro Plastik (350 mL)','2020-09-18',4000,600),
('TBS-8','Teh Pouch Sosro (230 mL)','2020-08-07',5000,1200),
('TBS-9','Teh Kaleng Sosro (318 mL)','2020-09-25',5000,700);

/*Table structure for table `stock_produk_jadi` */

DROP TABLE IF EXISTS `stock_produk_jadi`;

CREATE TABLE `stock_produk_jadi` (
  `id_barang` varchar(100) NOT NULL,
  `jml_stock_produk` int(255) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stock_produk_jadi` */

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id_supplier` varchar(100) NOT NULL,
  `nama_supplier` varchar(1000) NOT NULL,
  `telp_supplier` varchar(20) NOT NULL,
  `alamat_supplier` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_supplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id_supplier`,`nama_supplier`,`telp_supplier`,`alamat_supplier`) values 
('S0001','PT. Agroland Sejahtera','0811111111','Jl. Raya Puncak no. 100 Jawa Barat'),
('S0002','PT. Hasil Tani Jaya','08122222222','Jl. Raya Bogor no. 101 Jawa Barat');

/*Table structure for table `surat_jalan_distribusi_produk_jadi` */

DROP TABLE IF EXISTS `surat_jalan_distribusi_produk_jadi`;

CREATE TABLE `surat_jalan_distribusi_produk_jadi` (
  `no_surat_jalan_dpj` varchar(100) NOT NULL,
  `id_barang` varchar(100) NOT NULL,
  `nama_distributor` varchar(100) NOT NULL,
  `tgl_surat_jalan_dpj` date NOT NULL,
  `jml_produk_jadi_keluar` int(255) NOT NULL,
  PRIMARY KEY (`no_surat_jalan_dpj`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_jalan_distribusi_produk_jadi` */

insert  into `surat_jalan_distribusi_produk_jadi`(`no_surat_jalan_dpj`,`id_barang`,`nama_distributor`,`tgl_surat_jalan_dpj`,`jml_produk_jadi_keluar`) values 
('SJDPJ0000001','1','Imam','2019-07-15',10),
('SJPJ0000001','2','Ponco','2019-07-15',30);

/*Table structure for table `surat_jalan_pengiriman_bahan_baku` */

DROP TABLE IF EXISTS `surat_jalan_pengiriman_bahan_baku`;

CREATE TABLE `surat_jalan_pengiriman_bahan_baku` (
  `no_surat_jalan_pbb` varchar(100) NOT NULL,
  `id_bahan_baku` varchar(100) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `tgl_surat_jalan_pbb` date NOT NULL,
  PRIMARY KEY (`no_surat_jalan_pbb`),
  KEY `id_bahan_baku` (`id_bahan_baku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_jalan_pengiriman_bahan_baku` */

insert  into `surat_jalan_pengiriman_bahan_baku`(`no_surat_jalan_pbb`,`id_bahan_baku`,`nama_kurir`,`tgl_surat_jalan_pbb`) values 
('SJPBB0000001','BB0001','Fakhri','2019-07-15'),
('SJPBB0000002','BB0002','Arizki','2019-07-15');

/*Table structure for table `testimoni` */

DROP TABLE IF EXISTS `testimoni`;

CREATE TABLE `testimoni` (
  `id_testimoni` varchar(35) NOT NULL,
  `id_pelanggan` varchar(30) NOT NULL,
  `id_so` varchar(30) NOT NULL,
  `testimoni_barang` text NOT NULL,
  PRIMARY KEY (`id_testimoni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `testimoni` */

insert  into `testimoni`(`id_testimoni`,`id_pelanggan`,`id_so`,`testimoni_barang`) values 
('T-201906023','1127','201906023','kita bikin startup'),
('T-201907081','5','201907081','yoman');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
