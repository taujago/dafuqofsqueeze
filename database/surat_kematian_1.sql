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

/*Table structure for table `surat_kematian_1` */

DROP TABLE IF EXISTS `surat_kematian_1`;

CREATE TABLE `surat_kematian_1` (
  `id` char(50) NOT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `nik` varchar(56) DEFAULT NULL,
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `nama` varchar(56) DEFAULT NULL,
  `pekerjaan` varchar(56) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `warga_negara` varchar(100) DEFAULT NULL,
  `tgl_meninggal` date DEFAULT NULL,
  `jam_meninggal` time DEFAULT NULL,
  `tempat_meninggal` varchar(100) DEFAULT NULL,
  `penyebab_kematian` varchar(100) DEFAULT NULL,
  `yang_menerangkan` varchar(100) DEFAULT NULL,
  `bapak_id_penduduk` char(32) DEFAULT NULL,
  `bapak_nik` varchar(50) DEFAULT NULL,
  `bapak_nama` varchar(100) DEFAULT NULL,
  `bapak_tempat_lahir` varchar(100) DEFAULT NULL,
  `bapak_tanggal_lahir` date DEFAULT NULL,
  `bapak_agama` varchar(100) DEFAULT NULL,
  `bapak_warga_negara` varchar(100) DEFAULT NULL,
  `bapak_pekerjaan` varchar(100) DEFAULT NULL,
  `bapak_alamat` varchar(100) DEFAULT NULL,
  `bapak_desa` varchar(100) DEFAULT NULL,
  `bapak_kecamatan` varchar(100) DEFAULT NULL,
  `bapak_kabupaten` varchar(100) DEFAULT NULL,
  `bapak_provinsi` varchar(100) DEFAULT NULL,
  `ibu_id_penduduk` char(20) DEFAULT NULL,
  `ibu_nik` varchar(100) DEFAULT NULL,
  `ibu_nama` varchar(100) DEFAULT NULL,
  `ibu_tempat_lahir` varchar(100) DEFAULT NULL,
  `ibu_tanggal_lahir` date DEFAULT NULL,
  `ibu_agama` varchar(100) DEFAULT NULL,
  `ibu_warga_negara` varchar(100) DEFAULT NULL,
  `ibu_pekerjaan` varchar(100) DEFAULT NULL,
  `ibu_alamat` varchar(100) DEFAULT NULL,
  `ibu_desa` varchar(100) DEFAULT NULL,
  `ibu_kecamatan` varchar(100) DEFAULT NULL,
  `ibu_kabupaten` varchar(100) DEFAULT NULL,
  `ibu_provinsi` varchar(100) DEFAULT NULL,
  `hubungan_pelapor` varchar(100) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  `saksi1_nik` varchar(100) DEFAULT NULL,
  `saksi1_nama` varchar(100) DEFAULT NULL,
  `saksi2_nik` varchar(100) DEFAULT NULL,
  `saksi2_nama` varchar(100) DEFAULT NULL,
  `nik_sekretaris` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL,
  `ttd` varchar(100) DEFAULT NULL,
  `ttd_nama` varchar(100) DEFAULT NULL,
  `ttd_jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_kematian_1` */

insert  into `surat_kematian_1`(`id`,`no_surat`,`tanggal`,`id_penduduk`,`nik`,`tanggal_lahir`,`jk`,`tempat_lahir`,`nama`,`pekerjaan`,`agama`,`provinsi`,`kabupaten`,`kecamatan`,`desa`,`alamat`,`warga_negara`,`tgl_meninggal`,`jam_meninggal`,`tempat_meninggal`,`penyebab_kematian`,`yang_menerangkan`,`bapak_id_penduduk`,`bapak_nik`,`bapak_nama`,`bapak_tempat_lahir`,`bapak_tanggal_lahir`,`bapak_agama`,`bapak_warga_negara`,`bapak_pekerjaan`,`bapak_alamat`,`bapak_desa`,`bapak_kecamatan`,`bapak_kabupaten`,`bapak_provinsi`,`ibu_id_penduduk`,`ibu_nik`,`ibu_nama`,`ibu_tempat_lahir`,`ibu_tanggal_lahir`,`ibu_agama`,`ibu_warga_negara`,`ibu_pekerjaan`,`ibu_alamat`,`ibu_desa`,`ibu_kecamatan`,`ibu_kabupaten`,`ibu_provinsi`,`hubungan_pelapor`,`deleted`,`saksi1_nik`,`saksi1_nama`,`saksi2_nik`,`saksi2_nama`,`nik_sekretaris`,`nip`,`pangkat`,`ttd`,`ttd_nama`,`ttd_jabatan`) values ('8c4cd0e1e9f6b334f9c1e0bd7edea285','SKMATI/01/2005/2016','2016-04-18','1905031003720001','1905031003720001','1972-03-10','L','KARANG MELATI','A. MARDANI','BURUH HARIAN LEPAS','ISLAM',NULL,'BANGKA BARAT','JEBUS','SINAR MANIK','DSN. KP BARU BARAT','WNI','2016-04-18','00:00:12','JALANAN','Sakit Biasa/Tua','Dokter',NULL,'1905036203080001','WULAN ANDAYANI','KAMPUNG BARU','2008-03-22','ISLAM','WNI','BELUM/TIDAK BEKERJA','DUSUN KP. BARU','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,'1905031607930001','RISKYHUDA LESMANA','JEBUS','1993-07-16',NULL,'WNI',NULL,'DUSUN KETAP BARU','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG','qw12ss',0,'7787','askasr','ererwer','adgdagadgda',NULL,'','','kepala','IRWAN','KEPALA DESA ');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
