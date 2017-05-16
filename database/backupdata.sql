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
/*Table structure for table `penduduk` */

DROP TABLE IF EXISTS `penduduk`;

CREATE TABLE `penduduk` (
  `id_penduduk` char(32) NOT NULL,
  `nik` char(30) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmp_lahir` char(50) DEFAULT NULL,
  `golongan_darah` char(1) DEFAULT NULL,
  `id_agama` int(11) DEFAULT NULL,
  `id_pendidikan` char(4) DEFAULT NULL,
  `id_pekerjaan` char(32) DEFAULT NULL,
  `cacat_fisik` varchar(50) DEFAULT NULL,
  `status_kawin` char(1) DEFAULT NULL COMMENT '2=single, m=menikah, d=duda, j=janda',
  `nik_ayah` char(40) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nik_ibu` char(40) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `alamat_sebelumnya` varchar(255) DEFAULT NULL,
  `rt_sebelumnya` int(11) DEFAULT NULL,
  `rw_sebelumnya` int(11) DEFAULT NULL,
  `id_desa_sebelumnya` char(13) DEFAULT NULL,
  `id_kecamatan_sebelumnya` char(13) DEFAULT NULL,
  `id_kota_sebelumnya` char(13) DEFAULT NULL,
  `id_provinsi_sebelumnya` char(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `rt` int(11) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `id_desa` char(13) DEFAULT NULL,
  `id_dusun` char(10) DEFAULT NULL,
  `dusun` varchar(50) DEFAULT NULL,
  `no_paspor` char(50) DEFAULT NULL,
  `tgl_paspor_akhir` date DEFAULT NULL,
  `no_akta_lahir` char(50) DEFAULT NULL,
  `no_akta_nikah` char(50) DEFAULT NULL,
  `tgl_akta_nikah` date DEFAULT NULL,
  `no_akta_cerai` char(50) DEFAULT NULL,
  `tgl_akta_cerai` date DEFAULT NULL,
  `warga_negara` char(4) DEFAULT NULL COMMENT '1=wni, 2=wna',
  `status` char(1) DEFAULT '1' COMMENT '1=aktif, 2= pindah, 3=mati',
  `foto` varchar(255) DEFAULT NULL,
  `foto_thumbnail` varchar(255) DEFAULT NULL,
  `baca_tulis` char(5) DEFAULT NULL COMMENT 'Ya, tidak',
  `status_kependudukan` char(1) DEFAULT NULL COMMENT '0=tetap, 1=sementara, 2=pendatang, 3=pindah',
  `hidup_mati` char(1) DEFAULT '1' COMMENT '0=mati, 1=hidup',
  `pindah_alamat` varchar(255) DEFAULT NULL,
  `pindah_id_desa` int(11) DEFAULT NULL,
  `pindah_rt` int(11) DEFAULT NULL,
  `pindah_rw` int(11) DEFAULT NULL,
  `pindah_tanggal` date DEFAULT NULL,
  `sementara_maksud` varchar(50) DEFAULT NULL,
  `sementara_id_tujuan` char(32) DEFAULT NULL COMMENT 'nip warga setempat',
  `id_suku` int(11) DEFAULT NULL,
  `keturunan` varchar(50) DEFAULT NULL,
  `id_keturunan` int(11) DEFAULT NULL,
  `kebangsaan` varchar(50) DEFAULT NULL,
  `miskin` char(1) DEFAULT NULL COMMENT '1=miskin,0=kaya',
  `regdate` date DEFAULT NULL,
  `asal_negara` varchar(255) DEFAULT NULL,
  `jenis_kedatangan` char(5) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `suku` varchar(255) DEFAULT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `kepala_keluarga` char(1) DEFAULT NULL,
  `masa_berlaku_ktp` date DEFAULT NULL,
  `flag` char(1) DEFAULT NULL COMMENT 'l=lahir,d=datang',
  `hubungan_dlm_keluarga` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_penduduk`),
  UNIQUE KEY `nik` (`nik`),
  KEY `pendudukPdesa` (`id_desa_sebelumnya`),
  KEY `pendudukddesas` (`id_desa`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `penduduk` */


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
  `hubungan_pelapor` char(2) DEFAULT NULL,
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

insert  into `surat_kelahiran`(`id`,`no_surat`,`id_penduduk`,`anak_ke`,`tanggal`,`jam_lahir`,`ayah_id_penduduk`,`bapak_nama`,`bapak_nik`,`bapak_umur`,`bapak_warga_negara`,`bapak_keturunan`,`bapak_pekerjaan`,`bapak_alamat`,`bapak_desa`,`bapak_kecamatan`,`bapak_kota`,`bapak_provinsi`,`ayah_nik_original`,`ayah_nama_original`,`ibu_id_penduduk`,`ibu_nama`,`ibu_nik`,`ibu_umur`,`ibu_alamat`,`ibu_warga_negara`,`ibu_keturunan`,`ibu_pekerjaan`,`ibu_desa`,`ibu_kecamatan`,`ibu_kota`,`ibu_provinsi`,`ibu_nik_original`,`ibu_nama_original`,`saksi_1_id_penduduk`,`saksi_2_id_penduduk`,`tmp_kelahiran`,`penolong_kelahiran`,`berat`,`tgl_pernikahan`,`pelapor_id_penduduk`,`hubungan_pelapor`,`ttd`,`ttd_jabatan`,`ttd_nama`,`deleted`,`saksi1_nik`,`saksi1_nama`,`saksi2_nik`,`saksi2_nama`,`nip`,`pangkat`) values ('30dfe52dc88771d80bdfca311e6c2b28','SKTL/01/SG/2016','30dfe52dc88771d80bdfca311e6c2b28',2,'2016-04-18','12:00:00','1905031503710001','A. PATAH','1905031503710001',45,'WNI','Indoensia','BURUH HARIAN LEPAS','DUSUN KP. BARU','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,NULL,'1901025508910001','AGUSTINA','1901025508910001',24,'JL. RAYA KAMPUNG BARU TIMUR','WNI','Indoensia','MENGURUS RUMAH TANGGA','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,NULL,NULL,NULL,'djfdkjfkd','bidan darmi',3,'2016-03-28','1901025508910001','I','kepala','KEPALA DESA ','Baso Irwan Sakri','0','252351511fafafa','asfsadfdsfdsaf sadf sa fsadf ','35335 ','asfsdafsa',NULL,NULL);

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

insert  into `surat_kematian_1`(`id`,`no_surat`,`tanggal`,`id_penduduk`,`nik`,`tanggal_lahir`,`jk`,`tempat_lahir`,`nama`,`pekerjaan`,`agama`,`provinsi`,`kabupaten`,`kecamatan`,`desa`,`alamat`,`warga_negara`,`tgl_meninggal`,`jam_meninggal`,`tempat_meninggal`,`penyebab_kematian`,`yang_menerangkan`,`bapak_id_penduduk`,`bapak_nik`,`bapak_nama`,`bapak_tempat_lahir`,`bapak_tanggal_lahir`,`bapak_agama`,`bapak_warga_negara`,`bapak_pekerjaan`,`bapak_alamat`,`bapak_desa`,`bapak_kecamatan`,`bapak_kabupaten`,`bapak_provinsi`,`ibu_id_penduduk`,`ibu_nik`,`ibu_nama`,`ibu_tempat_lahir`,`ibu_tanggal_lahir`,`ibu_agama`,`ibu_warga_negara`,`ibu_pekerjaan`,`ibu_alamat`,`ibu_desa`,`ibu_kecamatan`,`ibu_kabupaten`,`ibu_provinsi`,`hubungan_pelapor`,`deleted`,`saksi1_nik`,`saksi1_nama`,`saksi2_nik`,`saksi2_nama`,`nik_sekretaris`,`nip`,`pangkat`,`ttd`,`ttd_nama`,`ttd_jabatan`) values ('f02b7a8327f54486596f007da98ee2d8','SKMATI/01/SG/2016','2016-04-11','1905035710140001','1905035710140001','2014-10-17','P','KETAP','AISYAH NAULI HASIBUAN','BELUM/TIDAK BEKERJA','ISLAM',NULL,'BANGKA BARAT','JEBUS','SINAR MANIK','DUSUN KP. BARU BARAT','WNI','2016-04-18','00:00:02','r34344','Sakit Biasa/Tua','Dokter',NULL,'3471120904790001','ANDHI RAHMAN SAPUTRO','YOGYAKARTA','1979-04-09','ISLAM','WNI','BURUH HARIAN LEPAS','DUSUN KP. BARU BARAT','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG',NULL,'1905034905990001','CATHERINE ELISABETH','KETAP','1999-05-09',NULL,'WNI',NULL,'DSN. KP. BARU BARAT','SINAR MANIK','JEBUS','BANGKA BARAT','KEPULAUAN BANGKA BELITUNG','saudara',0,'24242442424','fafafas','4535','af',NULL,'','','kepala','Baso Irwan Sakri','KEPALA DESA ');

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

insert  into `surat_pindah`(`id`,`no_surat`,`id_penduduk`,`hubungan`,`tanggal`,`tgl_pindah`,`pindah_id_desa`,`ttd`,`ttd_nama`,`ttd_jabatan`,`deleted`,`pindah_jenis`,`pindah_negara`,`nip`,`pangkat`,`alasan_pindah`) values ('425482dcc91441acad960a237e6c0409','475/01/SG/2016','1905030311740002','i','2016-04-18','2016-04-18','31_71_8_1001','kepala','Baso Irwan Sakri','KEPALA DESA ','0','dn',NULL,'','','afafdf'),('e246db6f8703b27a9ec8a7231bc3014b','475/01/SG/2016','1905031704070002','a','2016-04-18','2016-04-04','31_74_5_1004','kepala','Baso Irwan Sakri','KEPALA DESA ','0','dn',NULL,'','','pindah kerja');

/*Table structure for table `surat_pindah_detail` */

DROP TABLE IF EXISTS `surat_pindah_detail`;

CREATE TABLE `surat_pindah_detail` (
  `id_surat_detail` char(32) NOT NULL,
  `id` char(32) DEFAULT NULL,
  `id_penduduk` char(32) DEFAULT NULL,
  `hubungan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_surat_detail`),
  KEY `surat_pindah_detail_ibfk_1` (`id`),
  CONSTRAINT `surat_pindah_detail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `surat_pindah` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `surat_pindah_detail` */

insert  into `surat_pindah_detail`(`id_surat_detail`,`id`,`id_penduduk`,`hubungan`) values ('4c7d1ebac042641133206bd7df88af6f','425482dcc91441acad960a237e6c0409','1905036110050004','a'),('7bf133f98ef222aa8f1518a1eed11734','425482dcc91441acad960a237e6c0409','1905031409100006','a');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;