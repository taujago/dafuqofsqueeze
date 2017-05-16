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

/*Table structure for table `surat_pindah` */

DROP TABLE IF EXISTS `surat_pindah`;

CREATE TABLE `surat_pindah` (
  `id` char(32) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `hubungan` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tgl_pindah` date DEFAULT NULL,
  `pindah_id_desa` char(13) DEFAULT NULL,
  `ttd` varchar(10) DEFAULT NULL,
  `ttd_nama` varchar(50) DEFAULT NULL,
  `ttd_jabatan` varchar(50) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `pindah_jenis` char(2) DEFAULT NULL COMMENT 'dn=dalam negeri, ln = luar negeri',
  `pindah_negara` varchar(255) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL,
  `alasan_pindah` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_pindah` */

insert  into `surat_pindah`(`id`,`no_surat`,`id_penduduk`,`hubungan`,`tanggal`,`tgl_pindah`,`pindah_id_desa`,`ttd`,`ttd_nama`,`ttd_jabatan`,`deleted`,`pindah_jenis`,`pindah_negara`,`nip`,`pangkat`,`alasan_pindah`) values ('b035a454a82671e34c4aa29cb51c4aa8','475/01/2005/2016','1905030112470004','b','2016-04-18','2016-04-18',NULL,'kepala','IRWAN','KEPALA DESA ','0','ln','amerika','','',''),('c2d35f62dd70d722bbaa468a521755af','475/01/2005/2016','1905036203080001','b','2016-04-18','2016-04-18',NULL,'kepala','IRWAN','KEPALA DESA ','0','ln','amerika','','','PINDAH TUGAS');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
