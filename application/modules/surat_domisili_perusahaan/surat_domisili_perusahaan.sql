/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.16 : Database - simdeskel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`simdeskel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `simdeskel`;

/*Table structure for table `surat_domisili_perusahaan` */

DROP TABLE IF EXISTS `surat_domisili_perusahaan`;

CREATE TABLE `surat_domisili_perusahaan` (
  `nik` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id` char(32) NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `jk` varchar(56) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `jenis_usaha` varchar(255) DEFAULT NULL,
  `bidang_usaha` varchar(255) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `status_bangunan` varchar(100) DEFAULT NULL,
  `sk` varchar(100) DEFAULT NULL,
  `akta` varchar(100) DEFAULT NULL,
  `alamat_usaha` varchar(255) DEFAULT NULL,
  `ttd` char(10) DEFAULT NULL,
  `pj` varchar(100) DEFAULT NULL,
  `ttd_jabatan` varchar(50) DEFAULT NULL,
  `ttd_nama` varchar(50) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `sumber_data` char(5) DEFAULT NULL,
  `ex_nik` varchar(100) DEFAULT NULL,
  `ex_nama` varchar(255) DEFAULT NULL,
  `ex_tgl_lahir` date DEFAULT NULL,
  `ex_pekerjaan` varchar(255) DEFAULT NULL,
  `ex_alamat` varchar(255) DEFAULT NULL,
  `ex_rt` int(11) DEFAULT NULL,
  `ex_id_dusun` varchar(10) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
