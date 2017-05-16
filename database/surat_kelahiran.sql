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

/*Table structure for table `surat_kelahiran` */

DROP TABLE IF EXISTS `surat_kelahiran`;

CREATE TABLE `surat_kelahiran` (
  `id` char(32) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_lahir` time DEFAULT NULL,
  `ayah_id_penduduk` char(32) DEFAULT NULL,
  `bapak_nama` varchar(100) DEFAULT NULL,
  `bapak_nik` varchar(50) DEFAULT NULL,
  `bapak_umur` int(11) DEFAULT NULL,
  `bapak_warga_negara` varchar(10) DEFAULT NULL,
  `bapak_keturunan` varchar(100) DEFAULT NULL,
  `bapak_pekerjaan` varchar(100) DEFAULT NULL,
  `bapak_alamat` varchar(200) DEFAULT NULL,
  `bapak_desa` varchar(100) DEFAULT NULL,
  `bapak_kecamatan` varchar(100) DEFAULT NULL,
  `bapak_kota` varchar(100) DEFAULT NULL,
  `bapak_provinsi` varchar(100) DEFAULT NULL,
  `ayah_nik_original` char(40) DEFAULT NULL,
  `ayah_nama_original` varbinary(255) DEFAULT NULL,
  `ibu_id_penduduk` char(16) DEFAULT NULL,
  `ibu_nama` varchar(100) DEFAULT NULL,
  `ibu_nik` char(16) DEFAULT NULL,
  `ibu_umur` int(11) DEFAULT NULL,
  `ibu_alamat` varchar(255) DEFAULT NULL,
  `ibu_warga_negara` varchar(10) DEFAULT NULL,
  `ibu_keturunan` varchar(100) DEFAULT NULL,
  `ibu_pekerjaan` varchar(100) DEFAULT NULL,
  `ibu_desa` varchar(100) DEFAULT NULL,
  `ibu_kecamatan` varchar(100) DEFAULT NULL,
  `ibu_kota` varchar(100) DEFAULT NULL,
  `ibu_provinsi` varchar(100) DEFAULT NULL,
  `ibu_nik_original` char(50) DEFAULT NULL,
  `ibu_nama_original` varchar(50) DEFAULT NULL,
  `saksi_1_id_penduduk` char(32) DEFAULT NULL,
  `saksi_2_id_penduduk` char(32) DEFAULT NULL,
  `tmp_kelahiran` varchar(255) DEFAULT NULL,
  `penolong_kelahiran` varchar(255) DEFAULT NULL,
  `berat` float DEFAULT NULL,
  `tgl_pernikahan` date DEFAULT NULL,
  `pelapor_id_penduduk` char(32) DEFAULT NULL,
  `hubungan_pelapor` varchar(100) DEFAULT NULL,
  `ttd` char(10) DEFAULT NULL,
  `ttd_jabatan` varchar(50) DEFAULT NULL,
  `ttd_nama` varchar(50) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `saksi1_nik` varchar(255) DEFAULT NULL,
  `saksi1_nama` varchar(255) DEFAULT NULL,
  `saksi2_nik` varchar(255) DEFAULT NULL,
  `saksi2_nama` varchar(255) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `surat_kelahiran` */

insert  into `surat_kelahiran`(`id`,`no_surat`,`id_penduduk`,`anak_ke`,`tanggal`,`jam_lahir`,`ayah_id_penduduk`,`bapak_nama`,`bapak_nik`,`bapak_umur`,`bapak_warga_negara`,`bapak_keturunan`,`bapak_pekerjaan`,`bapak_alamat`,`bapak_desa`,`bapak_kecamatan`,`bapak_kota`,`bapak_provinsi`,`ayah_nik_original`,`ayah_nama_original`,`ibu_id_penduduk`,`ibu_nama`,`ibu_nik`,`ibu_umur`,`ibu_alamat`,`ibu_warga_negara`,`ibu_keturunan`,`ibu_pekerjaan`,`ibu_desa`,`ibu_kecamatan`,`ibu_kota`,`ibu_provinsi`,`ibu_nik_original`,`ibu_nama_original`,`saksi_1_id_penduduk`,`saksi_2_id_penduduk`,`tmp_kelahiran`,`penolong_kelahiran`,`berat`,`tgl_pernikahan`,`pelapor_id_penduduk`,`hubungan_pelapor`,`ttd`,`ttd_jabatan`,`ttd_nama`,`deleted`,`saksi1_nik`,`saksi1_nama`,`saksi2_nik`,`saksi2_nama`,`nip`,`pangkat`) values ('2b3caec8345750155da5f02b27ee22cd','SKTL/01/2005/2016','2b3caec8345750155da5f02b27ee22cd',1,'2016-04-18','12:00:00','1905030112470004','A. RASYID','1905030112470004',68,'WNI','','BURUH HARIAN LEPAS','DESA SINAR MANIK','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,NULL,'1905036009970002','LEIDY ULFA','1905036009970002',18,'DUSUN KETAP BARU','WNI','','PELAJAR/MAHASISWA','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,NULL,NULL,NULL,'RUMAH SAKIT','DOKTER',2,'0000-00-00','1905036203080001','Bapak','kepala','KEPALA DESA ','IRWAN','0','21231','askasr','qw','adgdagadgda',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
