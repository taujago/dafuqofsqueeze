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
/*Table structure for table `pekerjaan` */

DROP TABLE IF EXISTS `pekerjaan`;

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  `id_sektor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=MyISAM AUTO_INCREMENT=131161 DEFAULT CHARSET=latin1;

/*Data for the table `pekerjaan` */

insert  into `pekerjaan`(`id_pekerjaan`,`pekerjaan`,`deleted`,`id_sektor`) values (84,'PEDAGANG',0,8),(2,'MENGURUS RUMAH TANGGA',0,10),(4,'PENSIUNAN',0,0),(88,'WIRASWASTA',0,8),(3,'PELAJAR/MAHASISWA',0,0),(5,'PEGAWAI NEGERI SIPIL (PNS)',0,12),(65,'GURU',0,13),(15,'KARYAWAN SWASTA',0,10),(9,'PETANI/PEKEBUN',0,1),(1,'BELUM/TIDAK BEKERJA',0,0),(8,'PERDAGANGAN',0,8),(16,'KARYAWAN BUMN',0,10),(18,'KARYAWAN HONORER',0,12),(45,'USTADZ/MUBALIGH',0,13),(20,'BURUH TANI/PERKEBUNAN',0,2),(73,'BIDAN',0,11),(19,'BURUH HARIAN LEPAS',0,10),(75,'APOTEKER',0,10),(23,'PEMBANTU RUMAH TANGGA',0,NULL),(81,'SOPIR',0,10),(72,'DOKTER',0,11),(26,'TUKANG BATU',0,10),(35,'MEKANIK',0,10),(27,'TUKANG KAYU',0,10),(29,'TUKANG LAS/PANDAI BESI',0,7),(17,'KARYAWAN BUMD',0,8),(71,'KONSULTAN',0,8),(22,'BURUH PETERNAKAN',0,3),(14,'TRANSPORTASI',0,10),(85,'PERANGKAT DESA',0,12),(86,'KEPALA DESA',0,12),(89,'LAINNYA',0,0),(34,'PENATA RAMBUT',0,10),(11,'NELAYAN/PERIKANAN',0,4),(24,'TUKANG CUKUR',0,10),(74,'PERAWAT',0,11),(31,'TUKANG GIGI',0,11),(37,'TABIB',0,11),(30,'TUKANG JAHIT',0,10),(42,'PENDETA',0,13),(50,'ANGGOTA BPK',0,12),(10,'PETERNAK',0,3),(82,'PIALANG',0,10),(80,'PENELITI',0,13),(13,'KONSTRUKSI',0,8),(32,'PENATA RIAS',0,10),(12,'INDUSTRI',0,8),(21,'BURUH NELAYAN/PERIKANAN',0,4),(36,'SENIMAN',0,10),(25,'TUKANG LISTRIK',0,10),(64,'DOSEN',0,13),(28,'TUKANG SOL SEPATU',0,10),(63,'ANGGOTA DPRD KABUPATEN/KOTA',0,10),(83,'PARANORMAL',0,10),(41,'IMAM MESJID',0,10),(40,'PENTERJEMAH',0,10),(46,'JURU MASAK',0,10),(58,'BUPATI',0,12),(59,'WAKIL BUPATI',0,12),(49,'ANGGOTA DPD',0,12),(68,'NOTARIS',0,10),(79,'PELAUT',0,10),(48,'ANGGOTA DPR-RI',0,12),(87,'BIARAWATI',0,10),(33,'PENATA BUSANA',0,10),(38,'PARAJI',0,10),(131158,'KEPOLISIAN RI (POLRI)',0,NULL),(131159,'MAHASISWA',0,13),(131160,'TENTARA NASIONAL INDONESIA (TNI)',0,NULL);

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(4) NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(100) DEFAULT NULL,
  `deleted` int(1) DEFAULT '0',
  PRIMARY KEY (`id_pendidikan`)
) ENGINE=MyISAM AUTO_INCREMENT=222233 DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan` */

insert  into `pendidikan`(`id_pendidikan`,`pendidikan`,`deleted`) values (50,'TIDAK/BLM SEKOLAH',0),(53,'TAMAT SD/SEDERAJAT',0),(56,'SLTP/SEDERAJAT',0),(37,'SLTA/SEDERAJAT',0),(89,'DIPLOMA I/II',0),(91,'AKADEMI/DIPLOMA III/SARJANA MUDA',0),(52,'BELUM TAMAT SD/SEDERAJAT',0),(95,'DIPLOMA IV/STRATA I',0),(97,'STRATA-II',0),(98,'STRATAIII',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;