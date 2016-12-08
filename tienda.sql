# Host: 127.0.0.1  (Version 5.5.5-10.1.13-MariaDB)
# Date: 2016-12-07 01:11:50
# Generator: MySQL-Front 5.4  (Build 1.4)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "categorias"
#

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "categorias"
#

INSERT INTO `categorias` VALUES (1,'Computadoras','todo tipo de computadoras','2016-11-04 01:46:02','2016-11-04 01:46:02'),(2,'Gaming','computadoras de juegos','2016-11-04 01:47:18','2016-11-04 01:47:18'),(3,'Workstations','Computadoras potentes','2016-11-04 01:47:40','2016-11-04 01:47:40'),(4,'Servidores','Servidores ','2016-11-04 01:47:55','2016-11-04 01:47:55'),(5,'Ensamble','partes de ensamble','2016-11-04 01:48:23','2016-11-04 01:48:23'),(6,'Tarjetas','Todo tipo de tarjetas','2016-11-04 01:48:42','2016-11-04 01:48:42'),(7,'Almacenamiento','discos duros etc','2016-11-04 01:48:54','2016-11-04 01:48:54'),(8,'Impresion ','tipos de impresoras','2016-11-04 01:49:12','2016-11-04 01:49:12'),(9,'Consumibles','Cartuchos toners etc','2016-11-04 01:49:32','2016-11-04 01:49:32'),(10,'Digitalizacion e Imagenes','scanners','2016-11-04 01:49:53','2016-11-04 01:49:53'),(11,'Electronica','articulos de electronica','2016-11-04 01:50:06','2016-11-04 01:50:06'),(12,'Audio','aparatos de sonido','2016-11-04 01:50:20','2016-11-04 01:50:20'),(13,'Almacenamiento Portatil','tipos de almacenamiento','2016-11-04 01:50:36','2016-11-04 01:50:36'),(14,'Red Activa','componentes de red activa','2016-11-04 01:50:50','2016-11-04 01:50:50'),(15,'Cables','cables para aparatos electronicos','2016-11-04 01:51:05','2016-11-04 01:51:05'),(16,'Telefonia','todo lo relacionado con la telefonia','2016-11-04 01:51:21','2016-11-04 01:51:21'),(17,'Video Vigilancia','todo relacionado con videovigilancia','2016-11-04 01:51:38','2016-11-04 01:51:38');

#
# Structure for table "comentarios"
#

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "comentarios"
#

INSERT INTO `comentarios` VALUES (1,1,2,'Muy buen producto','2016-11-17 06:37:40','2016-11-17 06:37:40'),(3,1,1,'Muy rapida laptop y muy buen precio','2016-11-17 07:57:10','2016-11-17 07:57:10'),(4,6,1,'buena pc','2016-12-07 07:54:07','2016-12-07 07:54:07');

#
# Structure for table "estados"
#

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#
# Data for table "estados"
#

INSERT INTO `estados` VALUES (1,'SINALOA'),(2,'Aguascalientes'),(3,'Baja California'),(4,'Baja California Sur'),(5,'Campeche'),(6,'Coahuila'),(7,'Colima'),(8,'Chiapas'),(9,'Chiuahua'),(10,'Distrito Federal'),(11,'Durango'),(12,'Guanajuato'),(13,'Guerrero'),(14,'Hidalgo'),(15,'Jalisco'),(16,'Mexico'),(17,'Michoacan'),(18,'Morelos'),(19,'Nayarit'),(20,'Nuevo Leon'),(21,'Oaxaca'),(22,'Puebla'),(23,'Queretaro'),(24,'Quintana Roo'),(25,'San Luis Potosi'),(26,'Sinaloa'),(27,'Sonora'),(28,'Tabasco'),(29,'Tamaulipas'),(30,'Tlaxcala'),(31,'Veracruz'),(32,'Yucatan'),(33,'Zacatecas');

#
# Structure for table "ciudades"
#

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ciudades` (`id_estado`),
  CONSTRAINT `fk_ciudades` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "ciudades"
#

INSERT INTO `ciudades` VALUES (1,'CULIACAN',1);

#
# Structure for table "marcas"
#

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "marcas"
#

INSERT INTO `marcas` VALUES (1,'Hp','marca hp','2016-11-04 02:40:02','2016-11-04 02:40:02'),(2,'Dell','marca dell','2016-11-06 04:08:25','2016-11-06 04:08:25'),(3,'Acer','marca acer','2016-11-06 05:19:35','2016-11-06 05:19:35'),(4,'Cisco','marca cisco','2016-11-04 02:40:02','2016-11-04 02:40:02'),(5,'kingston','marca kingston','2016-11-28 01:44:50','2016-11-28 01:44:50'),(6,'LG','marga Lg','2016-11-28 01:45:30','2016-11-28 01:45:30'),(7,'Samsung','marca samsung','2016-11-28 01:45:59','2016-11-28 01:45:59'),(8,'Adata','marca Adata','2016-11-28 01:46:15','2016-11-28 01:46:15'),(9,'Asus','marca Asus','2016-11-28 01:46:28','2016-11-28 01:46:28'),(10,'TP-LINK','marca TP-LINK','2016-11-28 01:47:00','2016-11-28 01:47:00'),(11,'Sony','marca Sony','2016-11-28 01:47:12','2016-11-28 01:47:12'),(12,'Vorago','marca Vorago','2016-11-28 01:47:24','2016-11-28 01:47:24'),(13,'Lenovo','marca Lenovo','2016-11-28 01:46:15','2016-11-28 01:46:15'),(14,'Apple','marca Apple','2016-12-03 07:27:25','2016-12-03 07:27:25');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2015_10_25_000000_update_users_table',2),(6,'2016_03_13_151018_crear_tabla_educacion',3),(7,'2016_03_13_153835_crear_tabla_tiposEducacion',3),(8,'2016_03_20_224237_crear_tabla_tipos_publicaciones',4),(9,'2016_03_20_230021_crear_tabla_publicaciones',5),(10,'2016_03_26_211538_crear_tabla_pais',6),(11,'2016_03_25_161404_crear_tabla_proyectos',7);

#
# Structure for table "paqueterias"
#

DROP TABLE IF EXISTS `paqueterias`;
CREATE TABLE `paqueterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "paqueterias"
#

INSERT INTO `paqueterias` VALUES (1,'dhl','2554489');

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "password_resets"
#

INSERT INTO `password_resets` VALUES ('maannuell@gmail.com','de9bf8071ed216b1a40ad1ca43d6dcaef6f8f82ee3f2aa2191b6e5533cf1fba5','2016-11-17 03:21:09');

#
# Structure for table "subcategorias"
#

DROP TABLE IF EXISTS `subcategorias`;
CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` varchar(255) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorias` (`id_categoria`),
  CONSTRAINT `fk_categorias` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "subcategorias"
#

INSERT INTO `subcategorias` VALUES (1,'All in One','computadora con cpu Integrado',1,'2016-11-04 03:59:54','2016-11-04 03:59:54'),(2,'IMac','computadora apple de escritorio',1,'2016-11-06 05:03:48','2016-11-06 05:03:48'),(3,'Ipad','tableta de apple ',1,'2016-11-06 05:04:00','2016-11-06 05:04:00'),(4,'Laptops','computadora portatil',1,'2016-11-06 05:04:11','2016-11-06 05:04:11'),(5,'Macpro','computadora pro de mac',1,'2016-11-06 05:04:28','2016-11-06 05:04:28'),(6,'MacBook','laptop de apple',1,'2016-11-06 05:04:52','2016-11-06 05:04:52'),(7,'Pcs de escritorio','computadora de escritorio',1,'2016-11-06 05:05:12','2016-11-06 05:05:12'),(8,'Tabletas','tabletas de otras marcas',1,'2016-11-06 05:05:23','2016-11-06 05:05:23'),(9,'Laptops','Laptops Para juegos',2,'2016-11-06 05:24:42','2016-11-06 05:24:42'),(10,'Monitor','monitor para juegos',2,'2016-11-06 05:24:59','2016-11-06 05:24:59'),(11,'Pc de escritorio','Pc de escritorio para juegos',2,'2016-11-06 05:25:27','2016-11-06 05:25:27'),(12,'Workstations de Escritorio','computadoras con muy buenas prestaciones',3,'2016-11-07 04:08:47','2016-11-07 04:08:47'),(13,'Workstations Moviles','laptops con muy buenas prestaciones',3,'2016-11-07 04:09:24','2016-11-07 04:09:24');

#
# Structure for table "articulos"
#

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` varchar(255) NOT NULL DEFAULT '',
  `precio` float NOT NULL DEFAULT '0',
  `id_subcategoria` int(11) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  `promo` float DEFAULT NULL,
  `visitas` int(11) DEFAULT '0',
  `calificacion` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idsubcategoria` (`id_subcategoria`),
  KEY `fk_idmarca` (`id_marca`),
  CONSTRAINT `fk_idmarca` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`),
  CONSTRAINT `fk_idsubcategoria` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "articulos"
#

INSERT INTO `articulos` VALUES (1,'Laptop DELL Vostro 14 3000','Intel Core i3, 8 GB, 1000 GB, 14 pulgadas, Windows 7 Pro',8503.95,4,2,'1.jpg',29,0,4,NULL,'2016-11-10 03:48:37','2016-11-10 03:48:37'),(2,'Laptop DELL Latitude E3460',' Intel Core i5, 4 GB, 500 GB, 14 pulgadas, Windows 7 Pro',12211.5,4,2,'2.jpg',48,0.04,7,NULL,'2016-11-15 04:17:51','2016-11-15 04:17:51'),(3,'Laptop HP 240 G4 Notebook','Intel Celeron, 4 GB, 500 GB, 14 pulgadas, Windows 10 Home',4239.9,4,1,'3.jpg',20,0.04,3,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26'),(4,'Laptop HP 240 G5 Notebook','Intel Celeron, 8 GB, 1000 GB, 14 pulgadas, Windows 10 Home',4877.4,4,1,'4.jpg',40,0.04,4,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26'),(5,'Laptop HP ProBook 440 G3','Intel Core i3, 8 GB, 1000 GB, 14 pulgadas, Windows 7 Pro',10460,4,1,'5.jpg',45,0.03,1,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26'),(6,'All in One HP 20-e111la','19.5 pulgadas, Intel Celeron, 4 GB, 500 GB, Windows 10 Home',5297.25,1,1,'6.jpg',50,0,2,NULL,NULL,NULL),(7,'All In One LENOVO Idea AIO300-22ACL','21.5 pulgadas, AMD A6, 4 GB, 1000 GB, Windows 10 Home',8068.32,1,13,'7.jpg',40,0,0,NULL,NULL,NULL),(8,'All in One LENOVO Think S400Z','21.5 pulgadas, Intel Core i3, 4 GB, 500 GB, Windows 10 Pro',11123.8,1,13,'8.jpg',23,0,0,NULL,NULL,NULL),(9,'All in One HP 600 G2','21.5 pulgadas, Intel Core i5, 8 GB, 1000 GB, Windows 7 Pro',15855,1,1,'9.jpg',32,0,1,NULL,NULL,NULL),(10,'All In One ACER AZ1-611-MW1','19 pulgadas, Intel Pentium, 4 GB, 1000 GB, Windows 10',5821.2,1,3,'10.jpg',46,0,0,NULL,NULL,NULL),(11,'iMac APPLE iMac 21.5','21.5 pulgadas, Intel Core i5, 8 GB, 1000 GB, MAC OS X',20933,2,14,'11.jpg',50,0,3,NULL,NULL,NULL),(12,'iMac APPLE iMac 27','27 pulgadas, Intel Core i5, 8 GB, 1000 GB, MAC OS X',34614,2,14,'12.jpg',61,0,0,NULL,NULL,NULL),(13,'iPad APPLE Mini iPad','Apple A7, 32 GB, 7.9 pulgadas, 2048 x 1536 Pixeles, iOS 7',4797.45,3,14,'13.jpg',61,0,8,NULL,NULL,NULL),(14,'iPad APPLE iPad Air 2','Apple A8, 128 GB, 9.7 pulgadas, 2048 x 1536 Pixeles, IOS 8',10575.6,3,14,'14.jpg',34,0,10,NULL,NULL,NULL),(15,'iPad APPLE Mini iPad','Apple A7, 16 GB, 7.9 pulgadas, 2048 x 1536 Pixeles, iOS 7',4460.4,3,14,'15.jpg',64,0,0,NULL,NULL,NULL),(16,'iPad Air 2 WI-FI 32GB APPLE MNV62CL/A','Apple A8, 32 GB, 9.7 pulgadas, iOS 10',7077.79,3,14,'16.jpg',46,0,0,NULL,NULL,NULL),(17,'iPad APPLE','Apple A9, 32 GB, 9.7 pulgadas, 2048 x 1536 Pixeles, iOS 9',10825.5,3,14,'17.jpg',57,0.05,1,NULL,NULL,NULL);

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` int(11) DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'user.png',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'manuel meza','maannuell@gmail.com','$2y$10$6R4iOR6EQ6dPUB7Mdi9nFO/wp8ntbQKv0Ut3ABLnjvjMpC4WNc0W2',1,'KsTxYFghrpSlMAhhgrDGhia7CUmJzivnYhNzFwkxISDre6soXaHLNfFf96F1','2016-11-17 02:59:23','2016-12-07 08:02:01','user.png'),(2,'Miguel Villegaz','miguel@gmail.com','$2y$10$tZ4nRxVHi3.WdXxUR63zr.jRLsocTMVNq8RV/KDITIB74OxKuyaWW',2,'Wb1aflCNMGA3uDhwUqRdqrfNQ2J59bFKa913BpC2SW7mdRm0qorUNfZs0qGH','2016-11-17 05:23:42','2016-11-20 21:55:18','user.png'),(3,'Celis Lopez','celis@gmail.com','$2y$10$r8ibj1caHDcTrY/3eCUFv.1lIS9Qvc66R31BVhXsvuEMK1F8XKTsu',2,'3ZBNdcCs84zolkmUq9GD7lXar6YLKWK041m8uSA3PkkMlNok07F3HbtN8DI0','2016-11-20 07:20:04','2016-11-20 07:20:48','user.png'),(4,'brisa jazmin','brisa@gmail.com','$2y$10$di3YzqLDxTePU1ruUp4KX.DYysC8H83lrqoEvjeXz9pngi3I6z9qK',2,NULL,'2016-11-20 08:16:13','2016-11-20 08:16:13','user.png'),(5,'pedro azpe','pedro@gmail.com','$2y$10$2KPAABfaYr8ne.PddJeqlOyAhUCqrDq5ls60r6aeRrjmvp/guU/Me',1,'27fohBQDWQFaKO2rWJJxUvqEI8g6lWEUi7Cge47fZAGs2Ticqv5pqXQOATOd','2016-11-20 08:20:26','2016-11-20 08:21:29','user.png'),(6,'pablo salas','pablo@gmail.com','$2y$10$LtZPeM65Y4r4jGTGbN2xyOJq/QaiOld0OIg5qQrEMFBhwUaYfkJXW',2,'PsrFWzbsTSwhbzx64uZJtJpzIbmiL3Mlk7moTt5w6SJUvhl4zzNk984imatm','2016-12-07 02:59:17','2016-12-07 03:06:23','user.png'),(7,'maria match','maria@gmail.com','$2y$10$HlIYh8ZQ6F2J..JEgDuKbeoI1PwRjbp8Zzq8J3Ng4inuMhxGeLouG',2,'QiyXTNuktmcGn5GyiOw8r6yplQLkmD1TxxNM6Him1IZCd04218AJKtPhDAjH','2016-12-07 03:06:57','2016-12-07 03:13:07','user.png'),(8,'Paco Salas','paco@gmail.com','$2y$10$GUwdy93Ob/cnUafWTnqAtO60byqCrQ/6I68xChIiyLacGWSyUXEm6',2,'HCzlFpDpULxXsW6oxxbcDsBEB3jOwUtMN3aOb8XtNf3adD0xeSVdGFOM9B02','2016-12-07 03:14:04','2016-12-07 03:17:46','user.png'),(9,'Angelica Villa','angelika_jazmin96@hotmail.com','$2y$10$/5gFkq8agGoHunT6nNGAi.Umd91/UHTs6A622YEKdd5mFEAC7FNnC',2,'4sQjfSetP2wQ8nq6Oa05IgbP1F0EnxWPsuya1kMggQskUEaFFd68bJapRJOB','2016-12-07 03:19:45','2016-12-07 04:04:13','user.png');

#
# Structure for table "ordenes"
#

DROP TABLE IF EXISTS `ordenes`;
CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) unsigned DEFAULT NULL,
  `id_paqueteria` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  `direnvio` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `estatus` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente` (`id_cliente`),
  KEY `fk_paqueteria` (`id_paqueteria`),
  KEY `fk_ciudad` (`id_ciudad`),
  CONSTRAINT `fk_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_paqueteria` FOREIGN KEY (`id_paqueteria`) REFERENCES `paqueterias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

#
# Data for table "ordenes"
#

INSERT INTO `ordenes` VALUES (8,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:29:38','2016-12-04 23:29:38'),(10,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:33:29','2016-12-04 23:33:29'),(11,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:36:56','2016-12-04 23:36:56'),(12,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:38:19','2016-12-04 23:38:19'),(13,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:39:50','2016-12-04 23:39:50'),(14,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:40:06','2016-12-04 23:40:06'),(15,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:41:00','2016-12-04 23:41:00'),(16,1,NULL,NULL,NULL,'2016-12-12',NULL,3,'2016-12-04 23:43:26','2016-12-04 23:43:26'),(17,1,1,1,'Romulo Diaz de la Vega # 210 Col. Ampl. Lazaro Cardenas','2016-12-04','2016-12-09',4,'2016-12-05 03:38:49','2016-12-06 01:34:31'),(18,1,1,1,'domicilio conocido #25 ','2016-12-04','2016-12-10',4,'2016-12-05 05:07:53','2016-12-06 01:42:55'),(19,1,1,1,'Domicilio Romulo Diaz de la vega #245 col Ampl Lazaro Cardenas','2016-12-04',NULL,3,'2016-12-06 04:09:24','2016-12-06 04:10:06'),(20,8,1,1,'revolucion #352 col. bellavista ','2016-12-04',NULL,3,'2016-12-07 03:14:43','2016-12-07 03:15:21'),(21,9,1,1,'angel flores #7458 col. lomas ','2016-12-04',NULL,3,'2016-12-07 03:20:25','2016-12-07 03:21:02'),(22,9,1,1,'soliradidad #2451 col. barrancos','2016-12-04',NULL,3,'2016-12-07 03:30:39','2016-12-07 03:31:13'),(23,9,1,1,'domicilio nuevo #54711','2016-12-04',NULL,3,'2016-12-07 04:03:02','2016-12-07 04:03:25'),(24,1,1,1,'nuevo','2016-12-04',NULL,3,'2016-12-07 04:04:35','2016-12-07 04:04:50'),(25,1,1,1,'direccion de manuel meza','2016-12-04',NULL,3,'2016-12-07 04:17:16','2016-12-07 04:17:40'),(26,1,1,1,'la costera #254 col. villa','2016-12-07',NULL,3,'2016-12-07 07:59:10','2016-12-07 07:59:43');

#
# Structure for table "detalle_orden"
#

DROP TABLE IF EXISTS `detalle_orden`;
CREATE TABLE `detalle_orden` (
  `id_orden` int(11) NOT NULL DEFAULT '0',
  `id_articulo` int(11) NOT NULL DEFAULT '0',
  `preciouni` float NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `descuento` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_orden` (`id_orden`),
  KEY `fk_articulo` (`id_articulo`),
  CONSTRAINT `fk_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`),
  CONSTRAINT `fk_orden` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detalle_orden"
#

INSERT INTO `detalle_orden` VALUES (8,1,8503.95,1,0,'2016-12-04 23:29:38','2016-12-04 23:29:38'),(8,1,8503.95,1,0,'2016-12-04 23:30:24','2016-12-04 23:30:24'),(8,13,4797.45,2,0,'2016-12-04 23:30:24','2016-12-04 23:30:24'),(8,2,11723,2,0,'2016-12-04 23:30:24','2016-12-04 23:30:24'),(8,15,4460.4,2,0,'2016-12-04 23:33:29','2016-12-04 23:33:29'),(8,7,8068.32,1,0,'2016-12-04 23:33:29','2016-12-04 23:33:29'),(8,1,8503.95,1,0,'2016-12-04 23:33:29','2016-12-04 23:33:29'),(8,12,34614,1,0,'2016-12-04 23:36:56','2016-12-04 23:36:56'),(8,11,20933,1,0,'2016-12-04 23:36:56','2016-12-04 23:36:56'),(8,6,5297.25,1,0,'2016-12-04 23:36:56','2016-12-04 23:36:56'),(11,2,11723,1,0,'2016-12-04 23:40:06','2016-12-04 23:40:06'),(15,8,11123.8,1,0,'2016-12-04 23:41:00','2016-12-04 23:41:00'),(16,14,10575.6,1,0,'2016-12-04 23:43:26','2016-12-04 23:43:26'),(16,10,5821.2,1,0,'2016-12-04 23:43:26','2016-12-04 23:43:26'),(16,13,4797.45,1,0,'2016-12-04 23:43:26','2016-12-04 23:43:26'),(17,1,8503.95,1,0,'2016-12-05 03:38:49','2016-12-05 03:38:49'),(18,14,10575.6,1,0,'2016-12-05 05:07:53','2016-12-05 05:07:53'),(19,2,11723,2,0,'2016-12-06 04:09:25','2016-12-06 04:09:25'),(19,1,8503.95,2,0,'2016-12-06 04:09:25','2016-12-06 04:09:25'),(19,8,11123.8,2,0,'2016-12-06 04:09:25','2016-12-06 04:09:25'),(20,1,8503.95,2,0,'2016-12-07 03:14:43','2016-12-07 03:14:43'),(20,3,4070.3,2,0,'2016-12-07 03:14:43','2016-12-07 03:14:43'),(21,3,4070.3,2,0,'2016-12-07 03:20:25','2016-12-07 03:20:25'),(21,12,34614,2,0,'2016-12-07 03:20:25','2016-12-07 03:20:25'),(22,14,10575.6,1,0,'2016-12-07 03:30:39','2016-12-07 03:30:39'),(23,11,20933,1,0,'2016-12-07 04:03:02','2016-12-07 04:03:02'),(24,13,4797.45,1,0,'2016-12-07 04:04:35','2016-12-07 04:04:35'),(25,11,20933,1,0,'2016-12-07 04:17:17','2016-12-07 04:17:17'),(26,3,4070.3,1,0,'2016-12-07 07:59:10','2016-12-07 07:59:10');

#
# Structure for table "cartemplate"
#

DROP TABLE IF EXISTS `cartemplate`;
CREATE TABLE `cartemplate` (
  `idpartida` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) DEFAULT NULL,
  `id_cliente` int(11) unsigned DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpartida`),
  KEY `fk_articulos` (`id_articulo`),
  KEY `fk_clientes` (`id_cliente`),
  CONSTRAINT `fk_articulos` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`),
  CONSTRAINT `fk_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

#
# Data for table "cartemplate"
#

INSERT INTO `cartemplate` VALUES (1,1,1,1,1,'2016-12-04 07:06:48','2016-12-04 07:06:48'),(3,13,1,2,1,'2016-12-04 07:13:40','2016-12-04 07:13:40'),(4,2,1,2,1,'2016-12-04 07:17:32','2016-12-04 07:17:32'),(5,15,1,2,1,'2016-12-04 23:32:14','2016-12-04 23:32:14'),(6,7,1,1,1,'2016-12-04 23:32:20','2016-12-04 23:32:20'),(7,1,1,1,1,'2016-12-04 23:32:28','2016-12-04 23:32:28'),(8,12,1,1,1,'2016-12-04 23:36:33','2016-12-04 23:36:33'),(9,11,1,1,1,'2016-12-04 23:36:38','2016-12-04 23:36:38'),(10,6,1,1,1,'2016-12-04 23:36:47','2016-12-04 23:36:47'),(11,2,1,1,1,'2016-12-04 23:38:15','2016-12-04 23:38:15'),(12,8,1,1,1,'2016-12-04 23:40:56','2016-12-04 23:40:56'),(13,14,1,1,1,'2016-12-04 23:42:14','2016-12-04 23:42:14'),(14,10,1,1,1,'2016-12-04 23:42:25','2016-12-04 23:42:25'),(15,13,1,1,1,'2016-12-04 23:42:32','2016-12-04 23:42:32'),(16,1,1,1,1,'2016-12-04 23:59:02','2016-12-04 23:59:02'),(17,14,1,1,1,'2016-12-05 05:07:43','2016-12-05 05:07:43'),(18,2,1,2,1,'2016-12-06 04:08:56','2016-12-06 04:08:56'),(19,1,1,2,1,'2016-12-06 04:09:00','2016-12-06 04:09:00'),(20,8,1,2,1,'2016-12-06 04:09:07','2016-12-06 04:09:07'),(21,1,8,2,1,'2016-12-07 03:14:23','2016-12-07 03:14:23'),(22,3,8,2,1,'2016-12-07 03:14:27','2016-12-07 03:14:27'),(23,3,9,2,1,'2016-12-07 03:19:51','2016-12-07 03:19:51'),(24,12,9,2,1,'2016-12-07 03:20:10','2016-12-07 03:20:10'),(25,14,9,1,1,'2016-12-07 03:30:32','2016-12-07 03:30:32'),(26,11,9,1,1,'2016-12-07 04:02:56','2016-12-07 04:02:56'),(27,13,1,1,1,'2016-12-07 04:04:30','2016-12-07 04:04:30'),(28,11,1,1,1,'2016-12-07 04:17:09','2016-12-07 04:17:09'),(30,3,1,1,1,'2016-12-07 07:58:54','2016-12-07 07:58:54');
