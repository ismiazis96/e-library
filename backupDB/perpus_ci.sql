/*
SQLyog Enterprise v12.5.1 (64 bit)
MySQL - 5.7.33 : Database - db_perpus_ci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_perpus_ci` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_perpus_ci`;

/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `id_admin` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `id_admin` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`),
  KEY `id_admin_2` (`id_admin`,`password`,`nama`,`alamat`,`no_hp`,`img`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

/*Table structure for table `tb_agama` */

DROP TABLE IF EXISTS `tb_agama`;

CREATE TABLE `tb_agama` (
  `id_agama` int(2) NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_agama` */

insert  into `tb_agama`(`id_agama`,`agama`) values 
(2,'Islam'),
(3,'Kristen'),
(4,'budha'),
(5,'Katholik');

/*Table structure for table `tb_anggota` */

DROP TABLE IF EXISTS `tb_anggota`;

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `id_agama` (`id_agama`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_anggota_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_anggota` */

insert  into `tb_anggota`(`id_anggota`,`nama`,`id_kelas`,`id_agama`,`jenis_kelamin`,`hp`,`alamat`,`ket`) values 
('ANGG000006','fauzia',8,2,'P','00000','depok','-');

/*Table structure for table `tb_buku` */

DROP TABLE IF EXISTS `tb_buku`;

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `id_kategori` int(3) NOT NULL,
  `id_penerbit` int(3) NOT NULL,
  `id_pengarang` int(3) NOT NULL,
  `no_rak` int(2) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `stok` int(3) NOT NULL,
  `ket` text,
  PRIMARY KEY (`id_buku`),
  KEY `id_kategori` (`id_kategori`),
  KEY `id_penerbit` (`id_penerbit`),
  KEY `id_pengarang` (`id_pengarang`),
  KEY `no_rak` (`no_rak`),
  KEY `id_buku` (`id_buku`,`ISBN`,`judul`,`id_kategori`,`id_penerbit`,`id_pengarang`,`no_rak`,`thn_terbit`,`stok`),
  CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `tb_penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_buku_ibfk_3` FOREIGN KEY (`id_pengarang`) REFERENCES `tb_pengarang` (`id_pengarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tb_buku_ibfk_4` FOREIGN KEY (`no_rak`) REFERENCES `tb_rak` (`no_rak`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tb_buku` */

insert  into `tb_buku`(`id_buku`,`ISBN`,`judul`,`id_kategori`,`id_penerbit`,`id_pengarang`,`no_rak`,`thn_terbit`,`stok`,`ket`) values 
(4,'20240804','Pemrograman Web PHP',5,1,1,3,2024,0,'ok'),
(13,'20240805','Keutamaan Shalat Tahajud',1,5,2,3,2023,0,'siap');

/*Table structure for table `tb_denda` */

DROP TABLE IF EXISTS `tb_denda`;

CREATE TABLE `tb_denda` (
  `id_denda` int(6) NOT NULL AUTO_INCREMENT,
  `denda` int(6) NOT NULL,
  `status` enum('A','N') NOT NULL,
  PRIMARY KEY (`id_denda`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_denda` */

insert  into `tb_denda`(`id_denda`,`denda`,`status`) values 
(1,2500,'N'),
(3,3000,'N'),
(5,3000,'A');

/*Table structure for table `tb_detail_buku` */

DROP TABLE IF EXISTS `tb_detail_buku`;

CREATE TABLE `tb_detail_buku` (
  `id_detail_buku` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  KEY `id_detail_buku` (`id_detail_buku`,`id_buku`,`no_buku`,`status`),
  KEY `id_buku` (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `tb_detail_buku` */

insert  into `tb_detail_buku`(`id_detail_buku`,`id_buku`,`no_buku`,`status`) values 
(12,1,1,'1'),
(13,1,2,'1'),
(14,1,3,'1'),
(15,1,4,'1'),
(16,1,5,'1'),
(17,1,6,'1'),
(18,1,7,'1'),
(19,1,8,'1'),
(20,1,9,'1'),
(21,1,10,'1'),
(22,1,11,'1'),
(23,1,12,'1'),
(24,1,13,'1'),
(25,1,14,'1'),
(26,1,15,'1'),
(27,1,16,'1'),
(28,1,17,'1'),
(29,1,18,'1'),
(30,1,19,'1'),
(31,1,20,'1');

/*Table structure for table `tb_detail_pinjam` */

DROP TABLE IF EXISTS `tb_detail_pinjam`;

CREATE TABLE `tb_detail_pinjam` (
  `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjam` int(11) NOT NULL,
  `id_buku` char(15) NOT NULL,
  `no_buku` int(4) NOT NULL,
  `flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_detail_pinjam`),
  KEY `id_anggota` (`id_pinjam`),
  KEY `id_detail_pinjam` (`id_detail_pinjam`,`id_pinjam`,`id_buku`,`no_buku`),
  KEY `id_buku` (`id_buku`),
  CONSTRAINT `tb_detail_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

/*Data for the table `tb_detail_pinjam` */

/*Table structure for table `tb_kategori` */

DROP TABLE IF EXISTS `tb_kategori`;

CREATE TABLE `tb_kategori` (
  `id_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kategori` */

insert  into `tb_kategori`(`id_kategori`,`kategori`) values 
(1,'Pendidikan Agama Islam'),
(2,'komik'),
(3,'cerpen'),
(4,'Ilmu Hukum'),
(5,'Teknologi'),
(6,'Skripsi');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `id_kelas` int(2) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`id_kelas`,`kelas`) values 
(4,'7A'),
(5,'8A'),
(6,'9C'),
(7,'9A'),
(8,'9D');

/*Table structure for table `tb_kembali` */

DROP TABLE IF EXISTS `tb_kembali`;

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL AUTO_INCREMENT,
  `id_pinjam` int(11) NOT NULL,
  `tgl_dikembalikan` date NOT NULL,
  `terlambat` int(2) NOT NULL,
  `id_denda` int(6) NOT NULL,
  `denda` int(11) NOT NULL,
  PRIMARY KEY (`id_kembali`),
  KEY `id_detail` (`id_pinjam`),
  KEY `id_kembali` (`id_kembali`,`id_pinjam`,`tgl_dikembalikan`,`terlambat`,`id_denda`),
  CONSTRAINT `tb_kembali_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tb_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kembali` */

/*Table structure for table `tb_login` */

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(75) NOT NULL,
  `stts` varchar(10) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`,`password`,`stts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_login` */

insert  into `tb_login`(`username`,`password`,`stts`) values 
('admin','21232f297a57a5a743894a0e4a801fc3','admin');

/*Table structure for table `tb_penerbit` */

DROP TABLE IF EXISTS `tb_penerbit`;

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(3) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(50) NOT NULL,
  `id_provinsi` int(4) NOT NULL,
  PRIMARY KEY (`id_penerbit`),
  KEY `id_penerbit` (`id_penerbit`,`nama_penerbit`,`id_provinsi`),
  KEY `id_provinsi` (`id_provinsi`),
  CONSTRAINT `tb_penerbit_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_penerbit` */

insert  into `tb_penerbit`(`id_penerbit`,`nama_penerbit`,`id_provinsi`) values 
(1,'Gunawan',1),
(4,'Andi',2),
(5,'Ahamd Sudirman Abbas',8);

/*Table structure for table `tb_pengarang` */

DROP TABLE IF EXISTS `tb_pengarang`;

CREATE TABLE `tb_pengarang` (
  `id_pengarang` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengarang` */

insert  into `tb_pengarang`(`id_pengarang`,`nama_pengarang`) values 
(1,'suroso'),
(2,'Tere Liye'),
(3,'Graha Mulia');

/*Table structure for table `tb_petugas` */

DROP TABLE IF EXISTS `tb_petugas`;

CREATE TABLE `tb_petugas` (
  `id_petugas` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `img` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_petugas`),
  KEY `id_agama` (`id_agama`),
  CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `tb_agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_petugas` */

insert  into `tb_petugas`(`id_petugas`,`nama`,`img`,`jenis_kelamin`,`alamat`,`password`,`id_agama`,`hp`,`ket`) values 
('admin','ismi azis','3FAGBLO5QR69Y8CIV4HXP0JEU2T1WDMZNS7K.jpg','L','depok indonesia','admin',2,'053xxxx','');

/*Table structure for table `tb_pinjam` */

DROP TABLE IF EXISTS `tb_pinjam`;

CREATE TABLE `tb_pinjam` (
  `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pinjam` date NOT NULL,
  `id_anggota` varchar(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_buku` int(4) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id_pinjam`),
  KEY `id_detail` (`tgl_kembali`),
  KEY `id_buku` (`id_anggota`),
  KEY `id_pinjam` (`id_pinjam`,`tgl_pinjam`,`id_anggota`,`tgl_kembali`,`total_buku`),
  CONSTRAINT `tb_pinjam_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pinjam` */

/*Table structure for table `tb_provinsi` */

DROP TABLE IF EXISTS `tb_provinsi`;

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(2) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tb_provinsi` */

insert  into `tb_provinsi`(`id_provinsi`,`nama_provinsi`,`kota`) values 
(1,'Sumatera Selatan','Palembang'),
(2,'D.I.Y Yogyakarta','Yogya'),
(4,'Jambi','Jambi Kota'),
(6,'Pekan Baru','Riau'),
(7,'Jakarta','DKI Jakarta'),
(8,'Jawa Barat','Depok');

/*Table structure for table `tb_rak` */

DROP TABLE IF EXISTS `tb_rak`;

CREATE TABLE `tb_rak` (
  `no_rak` int(2) NOT NULL AUTO_INCREMENT,
  `nama_rak` varchar(50) NOT NULL,
  `id_kategori` int(3) DEFAULT '0',
  PRIMARY KEY (`no_rak`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tb_rak_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_rak` */

insert  into `tb_rak`(`no_rak`,`nama_rak`,`id_kategori`) values 
(2,'A',4),
(3,'B',5),
(4,'C',6);

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `kode` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mboh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `test` */

insert  into `test`(`kode`,`nama`,`mboh`) values 
('','ari',''),
('Kode000001','ari2',''),
('Kode000002','ari2',''),
('Kode000003','Ariandi AS','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
