# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-09-30 01:12:29
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "analisa_alternatif"
#

DROP TABLE IF EXISTS `analisa_alternatif`;
CREATE TABLE `analisa_alternatif` (
  `id_paket` char(7) NOT NULL DEFAULT '',
  `id_kriteria` char(6) NOT NULL DEFAULT '',
  `nilai_analisa_alternatif` int(10) DEFAULT NULL,
  `periode` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "analisa_alternatif"
#


#
# Structure for table "analisa_kriteria"
#

DROP TABLE IF EXISTS `analisa_kriteria`;
CREATE TABLE `analisa_kriteria` (
  `id_kriteria_1` varchar(6) NOT NULL DEFAULT '',
  `id_kriteria_2` varchar(6) NOT NULL DEFAULT '',
  `nilai_analisa_kriteria` double(4,3) DEFAULT NULL,
  `periode` char(4) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "analisa_kriteria"
#

INSERT INTO `analisa_kriteria` VALUES ('KRIT01','KRIT02',3.000,'2022'),('KRIT01','KRIT03',4.000,'2022'),('KRIT01','KRIT04',5.000,'2022'),('KRIT02','KRIT03',8.000,'2022'),('KRIT02','KRIT04',6.000,'2022'),('KRIT03','KRIT04',7.000,'2022'),('KRIT02','KRIT01',0.333,'2022'),('KRIT03','KRIT01',0.250,'2022'),('KRIT04','KRIT01',0.200,'2022'),('KRIT03','KRIT02',0.125,'2022'),('KRIT04','KRIT02',0.167,'2022'),('KRIT04','KRIT03',0.143,'2022'),('KRIT01','KRIT01',1.000,'2022'),('KRIT02','KRIT02',1.000,'2022'),('KRIT03','KRIT03',1.000,'2022'),('KRIT04','KRIT04',1.000,'2022');

#
# Structure for table "harga"
#

DROP TABLE IF EXISTS `harga`;
CREATE TABLE `harga` (
  `id_anggaran` int(11) NOT NULL AUTO_INCREMENT,
  `anggaran` varchar(255) DEFAULT NULL,
  `id_jns_rias` int(11) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_anggaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "harga"
#

INSERT INTO `harga` VALUES (1,'7000000',3,0),(2,'10000000',1,0),(3,'2000000',2,0),(4,'5000000',3,0),(5,'18000000',3,0);

#
# Structure for table "kriteria"
#

DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria` (
  `id_kriteria` char(6) NOT NULL DEFAULT '',
  `nm_kriteria` varchar(50) DEFAULT NULL,
  `jns_kriteria` varchar(7) DEFAULT NULL,
  `nilai_eigenvector` double(5,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "kriteria"
#

INSERT INTO `kriteria` VALUES ('KRIT01','Jenis Rias','Benefit',0.364),('KRIT02','Jumlah Orang','Benefit',0.527),('KRIT03','Jumlah Pakaian Perorang','Benefit',0.016),('KRIT04','Anggaran','Benefit',0.093);

#
# Structure for table "nilai"
#

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id_nilai` char(4) NOT NULL DEFAULT '',
  `jml_nilai` int(1) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `definisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#

INSERT INTO `nilai` VALUES ('NL1',1,'Kedua elemen mempunyai pengaruh yang sama','Sama penting (Equal)'),('NL2',2,'Nilai yang diberikan jika terdapat keraguan antara dua nilai yang berdekatan','Nilai tengah diantara dua pertimbangan yang berdekatan'),('NL3',3,'Penilaian lebih sedikit memihak pada salah satu elemen dibandingkan pasangannya','Sedikit lebih penting'),('NL4',4,'Nilai yang diberikan jika terdapat keraguan antara dua nilai yang berdekatan','Nilai tengah diantara dua pertimbangan yang berdekatan'),('NL5',5,'Penilaian sangat memihak pada salah satu elemen dibandingkan pasangannya','Lebih penting'),('NL6',6,'Nilai yang diberikan jika terdapat keraguan antara dua nilai yang berdekatan','Nilai tengah diantara dua pertimbangan yang berdekatan'),('NL7',7,'Salah satu elemen sangat berpengaruh dan dominasinya tampak secara nyata','Sangat penting'),('NL8',8,'Nilai yang diberikan jika terdapat keraguan antara dua nilai yang berdekatan','Nilai tengah diantara dua pertimbangan yang berdekatan'),('NL9',9,'Bukti bahwa salah satu elemen lebih penting daripada pasangannya pada tingkat keyakinan tertinggi','Mutlak lebih penting');

#
# Structure for table "orang"
#

DROP TABLE IF EXISTS `orang`;
CREATE TABLE `orang` (
  `id_jml_orang` int(11) NOT NULL AUTO_INCREMENT,
  `jml_orang` varchar(255) DEFAULT NULL,
  `id_jml_pakaian` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jml_orang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "orang"
#

INSERT INTO `orang` VALUES (2,'2',2),(4,'4',8),(14,'14',14),(16,'16',24),(18,'18',18);

#
# Structure for table "pakaian"
#

DROP TABLE IF EXISTS `pakaian`;
CREATE TABLE `pakaian` (
  `id_jml_pakaian` int(11) NOT NULL AUTO_INCREMENT,
  `jml_pakaian` varchar(255) DEFAULT NULL,
  `id_paket` char(7) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_jml_pakaian`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

#
# Data for table "pakaian"
#

INSERT INTO `pakaian` VALUES (2,'2','PKT03','Rias Pengantin Akad Nasional Pengantin Wanita Dan Pria: Masing-Masing 1 Pasang Dan Busana Dan Accessories Lengkap Untuk Harga 2juta Harga Masi Boleh Nego Lagi','paket31.jpg','paketc.php'),(8,'8','PKT04','Rias Pengantin Akad Daerah Sunda Dan Resepsi Nasional Untuk Pengantin Wanita Dan Pria: Masing-Masing 2 Pasang,Make Up Dan Baju 1 Pasang Untuk Masing-Masing Orang Tua Dan Busana Serta Accessories Lengkap, Untuk Harga Di Kenakan 5 Juta Harga Masi Boleh Nego','paket41.jpg','paketd.php'),(14,'14','PKT01','Riasan Daerah Atau Nasional, 3 Pasang Gaun Pengantin, 2 Pasang Kebaya Orang Tua + Besan, 4 Seragam Pagar Ayu + MakeUp , Free MakeUp Untuk 4 Orang, Free Hand Bucked, Free Siger Sunda, Free Selati Segar, Dan Untuk Harga DiKenakan Biaya : 7 Jutaan, Harga Mas','p1.jpg','paketa.php'),(18,'18','PKT02','Rias Pengantin Daerah, Bebas Pilih Daerah, 3 Pasang Kebayan Atau Gaun Pengantin Wanita, 3 Pasang Jas Pengantin Pria, Free 1 Kebayan/Gamis Untuk Ibu Tuan Rumah,Free 1 Kebayan/Gamis Untuk Ibu Besan, Free 1 Beskap Untuk Bapak Tuah Rumah, Free 1 Beskap Untuk','p2.jpg','paketb.php'),(24,'24','PKT05','Rias Pengantin Akad Daerah Jawa Dan Resepsi Nasional Untuk Pengantin Wanita Dan Pria: Masing-Masing 3 Pasang, Rias Pendamping (Orang Tua) 2 Pasang, Rias Untuk Pager Ayu: 4 Orang, Rias Bagus Atau Among Tamu: 6 Pasang, Busana Dan Accessories Lengkap, Acara','paket51.jpg','pakete.php');

#
# Structure for table "paket"
#

DROP TABLE IF EXISTS `paket`;
CREATE TABLE `paket` (
  `id_paket` char(7) NOT NULL DEFAULT '',
  `nm_paket` varchar(255) DEFAULT NULL,
  `riasan` varchar(255) DEFAULT NULL,
  `jns_rias` int(2) DEFAULT NULL,
  `jml_orang` int(2) DEFAULT NULL,
  `jml_pakaian` int(2) DEFAULT NULL,
  `anggaran` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `nilai_akhir` double(4,3) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "paket"
#

INSERT INTO `paket` VALUES ('PKT01','Paket A','Riasan Daerah dan Nasional',3,14,14,'7000000','Riasan Daerah Atau Nasional, 3 Pasang Gaun Pengantin, 2 Pasang Kebaya Orang Tua + Besan, 4 Seragam Pagar Ayu + MakeUp , Free MakeUp Untuk 4 Orang, Free Hand Bucked, Free Siger Sunda, Free Selati Segar, Dan Untuk Harga DiKenakan Biaya : 7 Jutaan, Harga Mas',0.000,'p1.jpg','paketa.php'),('PKT02','Paket B','Riasan Daerah',1,18,18,'10000000','Rias Pengantin Daerah, Bebas Pilih Daerah, 3 Pasang Kebayan Atau Gaun Pengantin Wanita, 3 Pasang Jas Pengantin Pria, Free 1 Kebayan/Gamis Untuk Ibu Tuan Rumah,Free 1 Kebayan/Gamis Untuk Ibu Besan, Free 1 Beskap Untuk Bapak Tuah Rumah, Free 1 Beskap Untuk',0.000,'p2.jpg','paketb.php'),('PKT03','Paket C','Riasan Nasional',2,2,2,'2000000','Rias Pengantin Akad Nasional Pengantin Wanita Dan Pria: Masing-Masing 1 Pasang Dan Busana Dan Accessories Lengkap Untuk Harga 2juta Harga Masi Boleh Nego Lagi',0.000,'paket31.jpg','paketc.php'),('PKT04','Paket D','Riasan Daerah dan Nasional',3,4,8,'5000000','Rias Pengantin Akad Daerah Sunda Dan Resepsi Nasional Untuk Pengantin Wanita Dan Pria: Masing-Masing 2 Pasang,Make Up Dan Baju 1 Pasang Untuk Masing-Masing Orang Tua Dan Busana Serta Accessories Lengkap, Untuk Harga Di Kenakan 5 Juta Harga Masi Boleh Nego',0.000,'paket41.jpg','paketd.php'),('PKT05','Paket E','Riasan Daerah dan Nasional',3,16,24,'18000000','Rias Pengantin Akad Daerah Jawa Dan Resepsi Nasional Untuk Pengantin Wanita Dan Pria: Masing-Masing 3 Pasang, Rias Pendamping (Orang Tua) 2 Pasang, Rias Untuk Pager Ayu: 4 Orang, Rias Bagus Atau Among Tamu: 6 Pasang, Busana Dan Accessories Lengkap, Acara',0.000,'paket51.jpg','pakete.php');

#
# Structure for table "riasan"
#

DROP TABLE IF EXISTS `riasan`;
CREATE TABLE `riasan` (
  `id_jns_rias` int(11) NOT NULL AUTO_INCREMENT,
  `riasan` varchar(255) DEFAULT NULL,
  `id_jml_orang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jns_rias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "riasan"
#

INSERT INTO `riasan` VALUES (1,'Riasan Daerah',18),(2,'Riasan Nasional',2),(3,'Riasan Daerah dan Nasional',14);

#
# Structure for table "temp"
#

DROP TABLE IF EXISTS `temp`;
CREATE TABLE `temp` (
  `id_kriteria` char(6) NOT NULL DEFAULT '',
  `kali_eigen` double(4,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "temp"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) DEFAULT NULL,
  `hak_akses` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('admin','admin','admin'),('user','user','user'),('user','1234','user');

#
# View "view_nilai_kriteria"
#

DROP VIEW IF EXISTS `view_nilai_kriteria`;
CREATE
  ALGORITHM = UNDEFINED
  VIEW `view_nilai_kriteria`
  AS
  SELECT
    `a`.`periode`, `a`.`id_kriteria`, CASE WHEN `b`.`jns_kriteria` = 'Benefit' THEN MAX(`a`.`nilai_analisa_alternatif`) WHEN `b`.`jns_kriteria` = 'Cost' THEN MIN(`a`.`nilai_analisa_alternatif`) ELSE NULL END AS 'nilai_kriteria'
  FROM
    (`analisa_alternatif` a
      JOIN `kriteria` b ON (`a`.`id_kriteria` = `b`.`id_kriteria`))
  GROUP BY
    `a`.`id_kriteria`;
