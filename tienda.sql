# Host: 127.0.0.1  (Version 5.5.5-10.1.13-MariaDB)
# Date: 2016-11-27 15:14:17
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "comentarios"
#

INSERT INTO `comentarios` VALUES (1,1,2,'Muy buen producto','2016-11-17 06:37:40','2016-11-17 06:37:40'),(3,1,1,'Muy rapida laptop y muy buen precio','2016-11-17 07:57:10','2016-11-17 07:57:10');

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
  PRIMARY KEY (`id_orden`,`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detalle_orden"
#


#
# Structure for table "estados"
#

DROP TABLE IF EXISTS `estados`;
CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "estados"
#

INSERT INTO `estados` VALUES (1,'SINALOA');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "marcas"
#

INSERT INTO `marcas` VALUES (1,'Hp','marca hp','2016-11-04 02:40:02','2016-11-04 02:40:02'),(2,'Dell','marca dell','2016-11-06 04:08:25','2016-11-06 04:08:25'),(3,'Acer','marca acer','2016-11-06 05:19:35','2016-11-06 05:19:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "articulos"
#

INSERT INTO `articulos` VALUES (1,'Laptop DELL Vostro 14 3000','Intel Core i3, 8 GB, 1000 GB, 14 pulgadas, Windows 7 Pro',8503.95,4,2,'1.jpg',5,0,0,NULL,'2016-11-10 03:48:37','2016-11-10 03:48:37'),(2,'Laptop DELL Latitude E3460',' Intel Core i5, 4 GB, 500 GB, 14 pulgadas, Windows 7 Pro',12211.5,4,2,'2.jpg',20,0.04,0,NULL,'2016-11-15 04:17:51','2016-11-15 04:17:51'),(3,'Laptop HP 240 G4 Notebook','Intel Celeron, 4 GB, 500 GB, 14 pulgadas, Windows 10 Home',4239.9,4,1,'3.jpg',5,0.04,0,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26'),(4,'Laptop HP 240 G5 Notebook','Intel Celeron, 8 GB, 1000 GB, 14 pulgadas, Windows 10 Home',4877.4,4,1,'4.jpg',10,0.04,0,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26'),(5,'Laptop HP ProBook 440 G3','Intel Core i3, 8 GB, 1000 GB, 14 pulgadas, Windows 7 Pro',10460,4,1,'5.jpg',15,0.03,0,NULL,'2016-11-15 04:21:26','2016-11-15 04:21:26');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'manuel meza','maannuell@gmail.com','$2y$10$6R4iOR6EQ6dPUB7Mdi9nFO/wp8ntbQKv0Ut3ABLnjvjMpC4WNc0W2',1,'WfOo4L2FxplhxnWyCJmqNvJxcAeoKwGwjBUyZBnRQXUq1AcpgTQS1dEyUhI6','2016-11-17 02:59:23','2016-11-27 22:13:38','user.png'),(2,'Miguel Villegaz','miguel@gmail.com','$2y$10$tZ4nRxVHi3.WdXxUR63zr.jRLsocTMVNq8RV/KDITIB74OxKuyaWW',2,'Wb1aflCNMGA3uDhwUqRdqrfNQ2J59bFKa913BpC2SW7mdRm0qorUNfZs0qGH','2016-11-17 05:23:42','2016-11-20 21:55:18','user.png'),(3,'Celis Lopez','celis@gmail.com','$2y$10$r8ibj1caHDcTrY/3eCUFv.1lIS9Qvc66R31BVhXsvuEMK1F8XKTsu',2,'3ZBNdcCs84zolkmUq9GD7lXar6YLKWK041m8uSA3PkkMlNok07F3HbtN8DI0','2016-11-20 07:20:04','2016-11-20 07:20:48','user.png'),(4,'brisa jazmin','brisa@gmail.com','$2y$10$di3YzqLDxTePU1ruUp4KX.DYysC8H83lrqoEvjeXz9pngi3I6z9qK',2,NULL,'2016-11-20 08:16:13','2016-11-20 08:16:13','user.png'),(5,'pedro azpe','pedro@gmail.com','$2y$10$2KPAABfaYr8ne.PddJeqlOyAhUCqrDq5ls60r6aeRrjmvp/guU/Me',1,'27fohBQDWQFaKO2rWJJxUvqEI8g6lWEUi7Cge47fZAGs2Ticqv5pqXQOATOd','2016-11-20 08:20:26','2016-11-20 08:21:29','user.png');

#
# Structure for table "ordenes"
#

DROP TABLE IF EXISTS `ordenes`;
CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) DEFAULT NULL,
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
  KEY `FK_articulos` (`id_articulo`),
  KEY `fk_cliente` (`id_cliente`),
  KEY `fk_paqueteria` (`id_paqueteria`),
  KEY `fk_ciudad` (`id_ciudad`),
  CONSTRAINT `FK_articulos` FOREIGN KEY (`id_articulo`) REFERENCES `articulos` (`id`),
  CONSTRAINT `fk_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  CONSTRAINT `fk_paqueteria` FOREIGN KEY (`id_paqueteria`) REFERENCES `paqueterias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "ordenes"
#

INSERT INTO `ordenes` VALUES (11,3,1,NULL,NULL,NULL,'2016-11-11',NULL,0,'2016-11-26 22:35:05','2016-11-26 22:35:05');
