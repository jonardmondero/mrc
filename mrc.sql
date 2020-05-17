/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - mrc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mrc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mrc`;

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `address` */

insert  into `address`(`id`,`address`,`detail`) values 
(17,'Big Tibuco, Molave, San Carlos City','GREEN GATE '),
(18,'1233','4123'),
(19,'Big Tibuco, Molave, San Carlos City','GREEN GATE ');

/*Table structure for table `contactno` */

DROP TABLE IF EXISTS `contactno`;

CREATE TABLE `contactno` (
  `id` int(11) NOT NULL,
  `contactno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `contactno` */

insert  into `contactno`(`id`,`contactno`) values 
(17,'2147483647'),
(18,'86856745'),
(19,'2147483647');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `customer` */

insert  into `customer`(`id`,`name`) values 
(17,'Karla Regina R. Mondero'),
(18,'Jonard A. Mondero'),
(19,'jekoy');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `upass` varchar(200) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`upass`,`account_type`) values 
(1,'admin','admin','Administrator');

/* Procedure structure for procedure `spInsertCustomer` */

/*!50003 DROP PROCEDURE IF EXISTS  `spInsertCustomer` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertCustomer`(nname varchar(50),contactno int(50),address varchar(200),detail varchar(200))
BEGIN
	INSERT INTO customer SET 
	name		=	nname;
	SET	@id	=	(SELECT id from customer where name = nname);
	
	INSERT INTO address SET
	id 		=	@id,
	address		=	address,
	detail		=	detail;
	
	insert	into contactno set
	id		=	@id,
	contactno	=	contactno;
	

	END */$$
DELIMITER ;

/* Procedure structure for procedure `spSearchCustomer` */

/*!50003 DROP PROCEDURE IF EXISTS  `spSearchCustomer` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `spSearchCustomer`()
BEGIN
	SELECT * from customer c inner join address d on c.id = d.id inner join contactno cn on c.id = cn.id;
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
