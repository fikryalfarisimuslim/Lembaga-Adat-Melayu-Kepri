-- MySQL dump 10.16  Distrib 10.1.25-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u811128985_crud
-- ------------------------------------------------------
-- Server version	10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (15,1,'Serah Terima Jabatan Gubernur Terpilih SANUR','Admin','<p><span style=\"font-family: Lato; font-size: 14px;\">Prosesi Serah Terima Jabatan Gubernur terpilih Bpk. Sani dan Bpk. Nurdin dilaksanakan di Gedung Daerah Provinsi Kepulauan Riau pada tanggal 13 Febuari 2016.</span><br style=\"font-family: Lato; font-size: 14px;\" /><span style=\"font-family: Lato; font-size: 14px;\">Pengurus LAM Kepri menyambut dan memberikan Tepuk Tepung Tawar sebagai tanda penghormatan kepada Gubernur terpilih.</span></p>','2017-08-22','12:38:59','12_38_59_2017_08_22_Serah_Terima_Jabatan_Gubernur_Terpilih_SANUR.jpg'),(16,1,'LAM Akan Sambut “SANUR” Secara Adat','Admin','<p style=\"margin-bottom: 20px; margin-top: 0px; font-family: Lato; font-size: 14px;\">Lembaga Adat Melayu Provinsi Kepulauan Riau akan mengadakan upacara penyambutan Gubernur dan Wakil Gubernur Kepulauan Riau terpilih secara adat di Bandara Raja Haji Fisabilillah Tanjungpinang.Gubernur Kepri terpilih Muhammad Sani dan Nurdin Basirun secara resmi akan dilantik di Istana Negara oleh Presiden RI Joko Widodo pada hari Jum&rsquo;at tangggal 12 Februari 2016.Berdasarkan informasi akan dilantik pada pukul 14.00 wib.</p>\r\n<p style=\"margin-bottom: 20px; margin-top: 0px; font-family: Lato; font-size: 14px;\">Kami baru saja selesai rapat persiapan penyambutan Gubernur terpilih,InsyaAllah &ldquo;Sanur&rdquo; akan kita sambut scara adat di Bandara, ungkap Ketua LAM Kepri Abdul Razak.Pada kesempatan yang sama Sekretaris Lam Kepri Raja Al Hafis mengatakan bahwa seluruh pengurus akan bekerja sesuai dengan tugas yang telah disepakati, ada yang mempersiapkan perangkat adat, ada yang mempersiapkan susunan tata upacara adat dan sebagainya, pokoknya penyambutan nanti akan kita maksimalkan dan mari kita berdoa semoga berjalan lancar.</p>\r\n<p style=\"margin-bottom: 20px; margin-top: 0px; font-family: Lato; font-size: 14px;\">Masyarakat Kepri berharap Sanur dapat memmbawa Kepri menjadi lebih maju, aman, nyaman dan harmonis.</p>','2017-08-22','01:00:05','12_41_41_2017_08_22_LAM_Akan_Sambut_“SANUR”_Secara_Adat.jpg');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;

--
-- Table structure for table `bukutamu`
--

DROP TABLE IF EXISTS `bukutamu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bukutamu` (
  `id_bukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id_bukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bukutamu`
--

/*!40000 ALTER TABLE `bukutamu` DISABLE KEYS */;
INSERT INTO `bukutamu` VALUES (9,'Fikry','fikryalfarisimuslim@gmail.com','http://fikry.com','Website ini sangat menginspirasi kami supaya bisa membuat karya yang lebih baik. sukses buat semuanya');
/*!40000 ALTER TABLE `bukutamu` ENABLE KEYS */;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Berita'),(4,'Politik');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

--
-- Table structure for table `kontak`
--

DROP TABLE IF EXISTS `kontak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `isi` longtext NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kontak`
--

/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` VALUES (2,'Fikry Al Farisi','fikryalfarisimuslim@mail.com','http://fikry.com','wah websitenya bagus');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;

--
-- Table structure for table `tentang`
--

DROP TABLE IF EXISTS `tentang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tentang` (
  `tentang` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tentang`
--

/*!40000 ALTER TABLE `tentang` DISABLE KEYS */;
INSERT INTO `tentang` VALUES ('<p>&nbsp;</p>\r\n<p>LAM KEPRI adalah Lembaga Adat Melayu Provinsi Kepulauan Riau. Website ini mendeskripsikan tentang LAM KEPRI dan apa saja kegiatan yang dilaksanakan.&nbsp;</p>\r\n<p>&nbsp;</p>');
/*!40000 ALTER TABLE `tentang` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'Administrator','admin@mail.com','','Bandung','admin','21232f297a57a5a743894a0e4a801fc3','06_31_50_2016_01_26_Administrator.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Dumping routines for database 'u811128985_crud'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-04 12:14:50
