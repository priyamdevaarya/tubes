/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - pajak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pajak` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pajak`;

/*Table structure for table `tb_pajak` */

DROP TABLE IF EXISTS `tb_pajak`;

CREATE TABLE `tb_pajak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `kendaraan` varchar(20) NOT NULL,
  `plat_nomor` varchar(12) NOT NULL,
  `nomor_rangka` int(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `keterangan` enum('Lunas','Belum Lunas') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pajak` */

insert  into `tb_pajak`(`id`,`nama`,`kendaraan`,`plat_nomor`,`nomor_rangka`,`nominal`,`keterangan`) values 
(1,'Andi','R25','DK 2145 AC',871761276,700000,'Belum Lunas'),
(2,'Deva','R15','DK 7517 AX',276126781,500000,'Belum Lunas'),
(3,'Rizki','CBR 150','DK 5418 AB',829105379,500000,'Belum Lunas'),
(4,'Boby','Vario','DK 8081 YD',171781991,250000,'Belum Lunas'),
(5,'Riski','SOUL','DK 7391 RZ',127192921,400000,'Belum Lunas'),
(8,'Adhi','Harley','DK 9 LN',129065192,4000000,'Belum Lunas'),
(9,'Agus Ari','Scoopy','DK 2194 FS',289170601,350000,'Belum Lunas'),
(10,'Ari Wiradana','Beat','DK 6391 DC',826391047,300000,'Belum Lunas'),
(11,'Agus','Vario','DK 9182 BC',987123457,300000,'Belum Lunas'),
(12,'Widiana','Vario','DK 8362 AW',1009981628,300000,'Belum Lunas'),
(13,'trisnappp','Vario','dk 5746 dg',344567676,500000,'Belum Lunas');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
