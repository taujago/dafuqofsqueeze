/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.16 : Database - simdeskel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `surat_sppfbt` */

DROP TABLE IF EXISTS `surat_sppfbt`;

CREATE TABLE `surat_sppfbt` (
  `id` char(32) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `jenis_tanah` varchar(50) DEFAULT NULL,
  `alamat_tanah` varchar(255) DEFAULT NULL,
  `status_perolehan_tanah` varchar(500) DEFAULT NULL,
  `blok` varchar(40) DEFAULT NULL,
  `persil` varchar(50) DEFAULT NULL,
  `luas` float DEFAULT NULL,
  `dimiliki_sejak` int(11) DEFAULT NULL,
  `batas_selatan` varchar(50) DEFAULT NULL,
  `batas_utara` varchar(50) DEFAULT NULL,
  `batas_barat` varchar(50) DEFAULT NULL,
  `batas_timur` varchar(50) DEFAULT NULL,
  `saksi1_nik` varchar(100) DEFAULT NULL,
  `saksi1_nama` varchar(100) DEFAULT NULL,
  `saksi1_tmp_lahir` varchar(100) DEFAULT NULL,
  `saksi1_tgl_lahir` date DEFAULT NULL,
  `saksi1_umur` int(11) DEFAULT NULL,
  `saksi1_pekerjaan` varchar(100) DEFAULT NULL,
  `saksi1_alamat` varchar(255) DEFAULT NULL,
  `saksi2_nik` varchar(100) DEFAULT NULL,
  `saksi2_nama` varchar(200) DEFAULT NULL,
  `saksi2_tmp_lahir` varchar(50) DEFAULT NULL,
  `saksi2_tgl_lahir` date DEFAULT NULL,
  `saksi2_umur` int(11) DEFAULT NULL,
  `saksi2_pekerjaan` varchar(100) DEFAULT NULL,
  `saksi2_alamat` varchar(200) DEFAULT NULL,
  `ttd` char(10) DEFAULT NULL,
  `ttd_jabatan` varchar(50) DEFAULT NULL,
  `ttd_nama` varchar(50) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `nip` varchar(50) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_sppfbt` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
