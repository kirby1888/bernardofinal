SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS bd_ber;

USE bd_ber;

DROP TABLE IF EXISTS currencies;

CREATE TABLE `currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `precision` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thousand_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decimal_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO currencies VALUES("1","US Dollar","$","2",",",".","USD");
INSERT INTO currencies VALUES("3","Euro","ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â¦ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¡ÃƒÆ’","2",".",",","EUR");
INSERT INTO currencies VALUES("4","South African Rand","R","2",".",",","ZAR");
INSERT INTO currencies VALUES("5","Danish Krone","kr ","2",".",",","DKK");
INSERT INTO currencies VALUES("6","Israeli Shekel","NIS ","2",",",".","ILS");
INSERT INTO currencies VALUES("7","Swedish Krona","kr ","2",".",",","SEK");
INSERT INTO currencies VALUES("8","Kenyan Shilling","KSh ","2",",",".","KES");
INSERT INTO currencies VALUES("9","Canadian Dollar","C$","2",",",".","CAD");
INSERT INTO currencies VALUES("10","Philippine Peso","P ","2",",",".","PHP");
INSERT INTO currencies VALUES("11","Indian Rupee","Rs. ","2",",",".","INR");
INSERT INTO currencies VALUES("12","Australian Dollar","$","2",",",".","AUD");
INSERT INTO currencies VALUES("13","Singapore Dollar","SGD ","2",",",".","SGD");
INSERT INTO currencies VALUES("14","Norske Kroner","kr ","2",".",",","NOK");
INSERT INTO currencies VALUES("15","New Zealand Dollar","$","2",",",".","NZD");
INSERT INTO currencies VALUES("16","Vietnamese Dong","VND ","0",".",",","VND");
INSERT INTO currencies VALUES("17","Swiss Franc","CHF ","2","\'",".","CHF");
INSERT INTO currencies VALUES("18","Quetzal Guatemalteco","Q","2",",",".","GTQ");
INSERT INTO currencies VALUES("19","Malaysian Ringgit","RM","2",",",".","MYR");
INSERT INTO currencies VALUES("21","Thai Baht","THB ","2",",",".","THB");
INSERT INTO currencies VALUES("22","Nigerian Naira","NGN ","2",",",".","NGN");
INSERT INTO currencies VALUES("23","Peso Argentino","$","2",".",",","ARS");
INSERT INTO currencies VALUES("24","Bangladeshi Taka","Tk","2",",",".","BDT");
INSERT INTO currencies VALUES("25","United Arab Emirates Dirham","DH ","2",",",".","AED");
INSERT INTO currencies VALUES("26","Hong Kong Dollar","$","2",",",".","HKD");
INSERT INTO currencies VALUES("27","Indonesian Rupiah","Rp","2",",",".","IDR");
INSERT INTO currencies VALUES("28","Peso Mexicano","$","2",",",".","MXN");
INSERT INTO currencies VALUES("30","Peso Colombiano","$","2",".",",","COP");
INSERT INTO currencies VALUES("31","West African Franc","CFA ","2",",",".","XOF");
INSERT INTO currencies VALUES("32","Chinese Renminbi","RMB ","2",",",".","CNY");



DROP TABLE IF EXISTS detalle_factura;

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `numero_factura` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_venta` double DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_detalle`),
  KEY `numero_cotizacion` (`numero_factura`,`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO detalle_factura VALUES("1","1","1","1","20","2017-10-08 00:06:05");
INSERT INTO detalle_factura VALUES("2","1","1","1","20","2017-10-08 00:06:05");
INSERT INTO detalle_factura VALUES("3","2","1","1","20","2017-10-08 00:08:11");
INSERT INTO detalle_factura VALUES("4","2","1","1","20","2017-10-08 00:08:11");
INSERT INTO detalle_factura VALUES("8","5","4","9","1","2017-10-08 15:46:35");
INSERT INTO detalle_factura VALUES("6","4","4","1","1","2017-10-08 14:06:02");
INSERT INTO detalle_factura VALUES("7","4","8","3","230","2017-10-08 14:06:02");
INSERT INTO detalle_factura VALUES("9","5","8","2","230","2017-10-08 15:46:35");



DROP TABLE IF EXISTS facturas;

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_factura`),
  UNIQUE KEY `numero_cotizacion` (`numero_factura`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO facturas VALUES("1","1","2017-10-08 08:06:05","1","42","1","46","1");
INSERT INTO facturas VALUES("2","2","2017-10-08 08:08:11","3","10","4","46","2");
INSERT INTO facturas VALUES("5","5","2017-10-08 23:46:35","3","10","1","539.35","1");
INSERT INTO facturas VALUES("4","4","2017-10-08 22:06:02","3","18","1","794.65","1");



DROP TABLE IF EXISTS perfil;

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(90) NOT NULL,
  `direccion` varchar(90) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `impuesto` int(2) NOT NULL,
  `moneda` varchar(6) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO perfil VALUES("1","SI","Col","Moncagua","3301","San Miguel","+(503) 2682-555","info@obedalvarado.pw","15","L","img/logo_icon.png");



DROP TABLE IF EXISTS permisos;

CREATE TABLE `permisos` (
  `id` bigint(20) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_panta` int(11) NOT NULL,
  `ins` int(11) NOT NULL,
  `elim` int(11) NOT NULL,
  `edi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO permisos VALUES("1","1","1","1","1","1");



DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `precio_producto` double NOT NULL,
  `cant` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `unidad` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  UNIQUE KEY `codigo_producto` (`codigo_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

INSERT INTO products VALUES("1","B000360","lala","1","2017-09-20 20:59:16","20","74","1","caja");
INSERT INTO products VALUES("2","B000363","licuadora","1","2017-09-21 16:33:11","122","0","1","bote");
INSERT INTO products VALUES("4","B000362","ana","1","0000-00-00 00:00:00","1","0","1","sobre");
INSERT INTO products VALUES("8","B000364","bici","0","2017-10-08 00:11:57","230","18","1","");
INSERT INTO products VALUES("10","B000366","ANAS","0","2017-10-10 18:35:44","130","2147483646","2","");



DROP TABLE IF EXISTS respuestas;

CREATE TABLE `respuestas` (
  `id_pregunta` bigint(20) DEFAULT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `respuesta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tbl_bitacoras;

CREATE TABLE `tbl_bitacoras` (
  `id_bitacora` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `accion` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=502 DEFAULT CHARSET=latin1;

INSERT INTO tbl_bitacoras VALUES("1","39","tbl_usuario","INSERTAR","","2017-06-28 08:01:18");
INSERT INTO tbl_bitacoras VALUES("2","40","tbl_usuario","INSERTAR","","2017-06-28 12:42:08");
INSERT INTO tbl_bitacoras VALUES("3","41","tbl_usuario","INSERTAR","","2017-06-28 13:10:20");
INSERT INTO tbl_bitacoras VALUES("4","35","tbl_usuario","INSERT","","2017-06-29 16:31:23");
INSERT INTO tbl_bitacoras VALUES("5","35","tbl_usuario","INSERT","","2017-06-29 16:35:05");
INSERT INTO tbl_bitacoras VALUES("6","35","tbl_usuario","DELETE","","2017-06-30 22:57:21");
INSERT INTO tbl_bitacoras VALUES("7","35","tbl_usuario","DELETE","","2017-06-30 22:58:48");
INSERT INTO tbl_bitacoras VALUES("8","35","tbl_usuario","UPDATE","","2017-06-30 23:01:17");
INSERT INTO tbl_bitacoras VALUES("9","35","tbl_usuario","UPDATE","","2017-06-30 23:31:35");
INSERT INTO tbl_bitacoras VALUES("10","49","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 21:29:18");
INSERT INTO tbl_bitacoras VALUES("11","49","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:29:37");
INSERT INTO tbl_bitacoras VALUES("12","49","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 21:29:50");
INSERT INTO tbl_bitacoras VALUES("13","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:36:52");
INSERT INTO tbl_bitacoras VALUES("14","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 21:36:57");
INSERT INTO tbl_bitacoras VALUES("15","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 21:37:35");
INSERT INTO tbl_bitacoras VALUES("16","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:37:43");
INSERT INTO tbl_bitacoras VALUES("17","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:37:50");
INSERT INTO tbl_bitacoras VALUES("18","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:37:59");
INSERT INTO tbl_bitacoras VALUES("19","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 21:38:16");
INSERT INTO tbl_bitacoras VALUES("20","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 21:58:26");
INSERT INTO tbl_bitacoras VALUES("21","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 23:20:49");
INSERT INTO tbl_bitacoras VALUES("22","21","tbl_tiposervicios","UPDATE","UPDATE tbl_tiposervicios SET nombre=\'INYECCION\', descripcion=\'APLICACION DE VACUNA\' WHERE id_tipo=\'1\'","2017-09-18 23:21:21");
INSERT INTO tbl_bitacoras VALUES("23","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 23:36:15");
INSERT INTO tbl_bitacoras VALUES("24","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-18 23:42:31");
INSERT INTO tbl_bitacoras VALUES("25","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-18 23:42:49");
INSERT INTO tbl_bitacoras VALUES("26","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-19 22:42:18");
INSERT INTO tbl_bitacoras VALUES("27","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-19 22:42:58");
INSERT INTO tbl_bitacoras VALUES("28","49","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-20 23:41:24");
INSERT INTO tbl_bitacoras VALUES("29","49","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-20 23:49:59");
INSERT INTO tbl_bitacoras VALUES("30","49","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:22:28");
INSERT INTO tbl_bitacoras VALUES("31","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:23:10");
INSERT INTO tbl_bitacoras VALUES("32","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:23:51");
INSERT INTO tbl_bitacoras VALUES("33","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:31:16");
INSERT INTO tbl_bitacoras VALUES("34","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:32:44");
INSERT INTO tbl_bitacoras VALUES("35","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:33:50");
INSERT INTO tbl_bitacoras VALUES("36","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:33:53");
INSERT INTO tbl_bitacoras VALUES("37","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:34:05");
INSERT INTO tbl_bitacoras VALUES("38","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:34:20");
INSERT INTO tbl_bitacoras VALUES("39","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:34:24");
INSERT INTO tbl_bitacoras VALUES("40","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:36:22");
INSERT INTO tbl_bitacoras VALUES("41","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:21");
INSERT INTO tbl_bitacoras VALUES("42","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:22");
INSERT INTO tbl_bitacoras VALUES("43","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:23");
INSERT INTO tbl_bitacoras VALUES("44","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:23");
INSERT INTO tbl_bitacoras VALUES("45","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:23");
INSERT INTO tbl_bitacoras VALUES("46","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:23");
INSERT INTO tbl_bitacoras VALUES("47","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:24");
INSERT INTO tbl_bitacoras VALUES("48","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:24");
INSERT INTO tbl_bitacoras VALUES("49","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:24");
INSERT INTO tbl_bitacoras VALUES("50","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:24");
INSERT INTO tbl_bitacoras VALUES("51","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:24");
INSERT INTO tbl_bitacoras VALUES("52","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:25");
INSERT INTO tbl_bitacoras VALUES("53","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:26");
INSERT INTO tbl_bitacoras VALUES("54","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:26");
INSERT INTO tbl_bitacoras VALUES("55","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:26");
INSERT INTO tbl_bitacoras VALUES("56","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:38:26");
INSERT INTO tbl_bitacoras VALUES("57","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:07");
INSERT INTO tbl_bitacoras VALUES("58","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:09");
INSERT INTO tbl_bitacoras VALUES("59","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:09");
INSERT INTO tbl_bitacoras VALUES("60","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:09");
INSERT INTO tbl_bitacoras VALUES("61","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:10");
INSERT INTO tbl_bitacoras VALUES("62","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:10");
INSERT INTO tbl_bitacoras VALUES("63","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:39:12");
INSERT INTO tbl_bitacoras VALUES("64","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:17");
INSERT INTO tbl_bitacoras VALUES("65","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:39:22");
INSERT INTO tbl_bitacoras VALUES("66","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:39:26");
INSERT INTO tbl_bitacoras VALUES("67","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:21");
INSERT INTO tbl_bitacoras VALUES("68","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:22");
INSERT INTO tbl_bitacoras VALUES("69","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:23");
INSERT INTO tbl_bitacoras VALUES("70","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:23");
INSERT INTO tbl_bitacoras VALUES("71","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:23");
INSERT INTO tbl_bitacoras VALUES("72","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:40:24");
INSERT INTO tbl_bitacoras VALUES("73","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:41:03");
INSERT INTO tbl_bitacoras VALUES("74","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:41:05");
INSERT INTO tbl_bitacoras VALUES("75","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:41:08");
INSERT INTO tbl_bitacoras VALUES("76","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:41:51");
INSERT INTO tbl_bitacoras VALUES("77","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:42:33");
INSERT INTO tbl_bitacoras VALUES("78","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:42:34");
INSERT INTO tbl_bitacoras VALUES("79","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:00");
INSERT INTO tbl_bitacoras VALUES("80","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:01");
INSERT INTO tbl_bitacoras VALUES("81","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:02");
INSERT INTO tbl_bitacoras VALUES("82","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:44:08");
INSERT INTO tbl_bitacoras VALUES("83","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 00:44:17");
INSERT INTO tbl_bitacoras VALUES("84","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:20");
INSERT INTO tbl_bitacoras VALUES("85","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:29");
INSERT INTO tbl_bitacoras VALUES("86","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:32");
INSERT INTO tbl_bitacoras VALUES("87","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:34");
INSERT INTO tbl_bitacoras VALUES("88","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 00:44:37");
INSERT INTO tbl_bitacoras VALUES("89","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 01:01:37");
INSERT INTO tbl_bitacoras VALUES("90","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 01:01:41");
INSERT INTO tbl_bitacoras VALUES("91","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 01:03:58");
INSERT INTO tbl_bitacoras VALUES("92","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 01:04:00");
INSERT INTO tbl_bitacoras VALUES("93","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 01:20:53");
INSERT INTO tbl_bitacoras VALUES("94","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 18:02:16");
INSERT INTO tbl_bitacoras VALUES("95","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 18:02:36");
INSERT INTO tbl_bitacoras VALUES("96","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 18:02:46");
INSERT INTO tbl_bitacoras VALUES("97","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 18:08:24");
INSERT INTO tbl_bitacoras VALUES("98","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 18:24:22");
INSERT INTO tbl_bitacoras VALUES("99","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$GhXNHRGiTrzNlN6rM0pgh","2017-09-21 18:25:58");
INSERT INTO tbl_bitacoras VALUES("100","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'","2017-09-21 18:26:23");
INSERT INTO tbl_bitacoras VALUES("101","45","tbl_usuario","INSERTAR","insert into tbl_usuario (nombre_usuario,usuario,contrasena,correo_electronico,estado_usuario,id_rol, fecha_creacion,activacion,fecha_cambio_contrasena) values(\'HOLA\', \'HOLA\',\'$2y$10$gLQVPXzxHVz5Rb.dEp","2017-09-21 18:27:20");
INSERT INTO tbl_bitacoras VALUES("102","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:42:39");
INSERT INTO tbl_bitacoras VALUES("103","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:42:43");
INSERT INTO tbl_bitacoras VALUES("104","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'45\'","2017-09-21 21:43:00");
INSERT INTO tbl_bitacoras VALUES("105","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:43:13");
INSERT INTO tbl_bitacoras VALUES("106","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:43:25");
INSERT INTO tbl_bitacoras VALUES("107","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:44:08");
INSERT INTO tbl_bitacoras VALUES("108","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:53:18");
INSERT INTO tbl_bitacoras VALUES("109","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:53:20");
INSERT INTO tbl_bitacoras VALUES("110","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:53:21");
INSERT INTO tbl_bitacoras VALUES("111","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:53:23");
INSERT INTO tbl_bitacoras VALUES("112","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:53:37");
INSERT INTO tbl_bitacoras VALUES("113","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:54:01");
INSERT INTO tbl_bitacoras VALUES("114","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:54:10");
INSERT INTO tbl_bitacoras VALUES("115","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:54:24");
INSERT INTO tbl_bitacoras VALUES("116","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 21:58:11");
INSERT INTO tbl_bitacoras VALUES("117","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:58:14");
INSERT INTO tbl_bitacoras VALUES("118","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:58:18");
INSERT INTO tbl_bitacoras VALUES("119","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:58:20");
INSERT INTO tbl_bitacoras VALUES("120","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 21:58:23");
INSERT INTO tbl_bitacoras VALUES("121","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:02:13");
INSERT INTO tbl_bitacoras VALUES("122","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 22:02:24");
INSERT INTO tbl_bitacoras VALUES("123","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:06:32");
INSERT INTO tbl_bitacoras VALUES("124","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:06:38");
INSERT INTO tbl_bitacoras VALUES("125","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:06:43");
INSERT INTO tbl_bitacoras VALUES("126","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:06:47");
INSERT INTO tbl_bitacoras VALUES("127","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 22:13:17");
INSERT INTO tbl_bitacoras VALUES("128","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 23:24:21");
INSERT INTO tbl_bitacoras VALUES("129","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-21 23:24:28");
INSERT INTO tbl_bitacoras VALUES("130","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 23:24:33");
INSERT INTO tbl_bitacoras VALUES("131","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-21 23:25:52");
INSERT INTO tbl_bitacoras VALUES("132","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$qxYpxhCZuPPU97VrzZeio","2017-09-21 23:26:38");
INSERT INTO tbl_bitacoras VALUES("133","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'46\'","2017-09-21 23:26:49");
INSERT INTO tbl_bitacoras VALUES("134","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-22 22:33:28");
INSERT INTO tbl_bitacoras VALUES("135","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-22 22:33:29");
INSERT INTO tbl_bitacoras VALUES("136","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-23 00:42:21");
INSERT INTO tbl_bitacoras VALUES("137","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-23 00:42:25");
INSERT INTO tbl_bitacoras VALUES("138","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-23 00:42:47");
INSERT INTO tbl_bitacoras VALUES("139","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-23 00:42:50");
INSERT INTO tbl_bitacoras VALUES("140","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-23 00:44:06");
INSERT INTO tbl_bitacoras VALUES("141","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-23 00:48:09");
INSERT INTO tbl_bitacoras VALUES("142","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-23 23:01:01");
INSERT INTO tbl_bitacoras VALUES("143","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-24 12:16:24");
INSERT INTO tbl_bitacoras VALUES("144","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$nWQ28oY66sxVz.kCqZR1k","2017-09-24 12:20:49");
INSERT INTO tbl_bitacoras VALUES("145","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'47\'","2017-09-24 12:20:56");
INSERT INTO tbl_bitacoras VALUES("146","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-24 12:22:13");
INSERT INTO tbl_bitacoras VALUES("147","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-24 12:22:14");
INSERT INTO tbl_bitacoras VALUES("148","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-24 12:22:15");
INSERT INTO tbl_bitacoras VALUES("149","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$rabfK.voKZDQ6z5HcgFQO","2017-09-24 12:23:08");
INSERT INTO tbl_bitacoras VALUES("150","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'48\'","2017-09-24 12:23:22");
INSERT INTO tbl_bitacoras VALUES("151","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 14:39:25");
INSERT INTO tbl_bitacoras VALUES("152","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 15:00:07");
INSERT INTO tbl_bitacoras VALUES("153","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 15:02:54");
INSERT INTO tbl_bitacoras VALUES("154","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 15:03:17");
INSERT INTO tbl_bitacoras VALUES("155","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 15:07:38");
INSERT INTO tbl_bitacoras VALUES("156","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-24 15:07:58");
INSERT INTO tbl_bitacoras VALUES("157","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 15:36:16");
INSERT INTO tbl_bitacoras VALUES("158","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-24 16:22:24");
INSERT INTO tbl_bitacoras VALUES("159","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-28 23:57:44");
INSERT INTO tbl_bitacoras VALUES("160","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-29 01:11:13");
INSERT INTO tbl_bitacoras VALUES("161","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-29 01:12:42");
INSERT INTO tbl_bitacoras VALUES("162","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-29 01:15:02");
INSERT INTO tbl_bitacoras VALUES("163","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-29 01:15:02");
INSERT INTO tbl_bitacoras VALUES("164","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-29 01:15:03");
INSERT INTO tbl_bitacoras VALUES("165","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-30 01:24:07");
INSERT INTO tbl_bitacoras VALUES("166","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-30 16:13:25");
INSERT INTO tbl_bitacoras VALUES("167","21","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-09-30 16:13:28");
INSERT INTO tbl_bitacoras VALUES("168","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$JyYhY6kxP4Ncx1e1Lz5xl","2017-09-30 16:15:05");
INSERT INTO tbl_bitacoras VALUES("169","21","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'","2017-09-30 16:15:23");
INSERT INTO tbl_bitacoras VALUES("170","21","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$AD.uBEhc/8TJ3IsyBLd4E","2017-09-30 16:15:33");
INSERT INTO tbl_bitacoras VALUES("171","21","tbl_usuario","UPDATE","UPDATE tbl_usuario SET nombre_usuario=\'HOLANNM\', usuario=\'HOLA\', id_rol=\'5\', correo_electronico=\'hola@hola.com\', estado_usuario=\'\', activacion= \'0\' WHERE id_usuario=\'45\'","2017-09-30 16:15:41");
INSERT INTO tbl_bitacoras VALUES("172","21","tbl_usuario","UPDATE","UPDATE tbl_usuario SET nombre_usuario=\'HOLANNM\', usuario=\'HOLA\', id_rol=\'5\', correo_electronico=\'hola@hola.com\', estado_usuario=\'INACTIVO\', activacion= \'0\' WHERE id_usuario=\'45\'","2017-09-30 16:15:45");
INSERT INTO tbl_bitacoras VALUES("173","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-30 16:18:33");
INSERT INTO tbl_bitacoras VALUES("174","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-30 16:44:42");
INSERT INTO tbl_bitacoras VALUES("175","21","pantalla principal","INGRESO","ingreso a pantalla principal","2017-09-30 16:45:18");
INSERT INTO tbl_bitacoras VALUES("176","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-07 03:01:51");
INSERT INTO tbl_bitacoras VALUES("177","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-07 03:01:59");
INSERT INTO tbl_bitacoras VALUES("178","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ã","2017-10-07 03:03:21");
INSERT INTO tbl_bitacoras VALUES("180","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-07 03:04:03");
INSERT INTO tbl_bitacoras VALUES("181","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-07 03:07:35");
INSERT INTO tbl_bitacoras VALUES("182","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-07 03:07:40");
INSERT INTO tbl_bitacoras VALUES("183","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-07 03:07:52");
INSERT INTO tbl_bitacoras VALUES("184","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-07 03:20:46");
INSERT INTO tbl_bitacoras VALUES("185","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-08 02:55:54");
INSERT INTO tbl_bitacoras VALUES("186","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-08 02:57:01");
INSERT INTO tbl_bitacoras VALUES("187","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-08 03:03:40");
INSERT INTO tbl_bitacoras VALUES("188","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-08 03:03:45");
INSERT INTO tbl_bitacoras VALUES("189","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-08 03:35:11");
INSERT INTO tbl_bitacoras VALUES("190","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-08 03:35:33");
INSERT INTO tbl_bitacoras VALUES("191","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 00:33:49");
INSERT INTO tbl_bitacoras VALUES("192","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 00:38:02");
INSERT INTO tbl_bitacoras VALUES("193","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 17:58:03");
INSERT INTO tbl_bitacoras VALUES("194","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:08:46");
INSERT INTO tbl_bitacoras VALUES("195","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-09 18:08:56");
INSERT INTO tbl_bitacoras VALUES("196","35","tbl_usuario","DELETE","DELETE  FROM tbl_usuario WHERE id_usuario=\'45\'","2017-10-09 18:09:06");
INSERT INTO tbl_bitacoras VALUES("197","35","tbl_usuario","UPDATE","UPDATE tbl_usuario SET nombre_usuario=\'LOQWEW\', usuario=\'KKK\', id_rol=\'3\', correo_electronico=\'jeklro@ho\', estado_usuario=\'ACTIVO\', activacion= \'1\' WHERE id_usuario=\'43\'","2017-10-09 18:09:15");
INSERT INTO tbl_bitacoras VALUES("198","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:10:48");
INSERT INTO tbl_bitacoras VALUES("199","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-09 18:10:53");
INSERT INTO tbl_bitacoras VALUES("200","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:11:31");
INSERT INTO tbl_bitacoras VALUES("201","35","tbl_parametros","UPDATE","UPDATE tbl_parametros SET nombre=\'KSLDFKLS\', descripcion=\'5\' WHERE id_parametro=\'23\'","2017-10-09 18:11:54");
INSERT INTO tbl_bitacoras VALUES("202","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:12:09");
INSERT INTO tbl_bitacoras VALUES("203","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:32:23");
INSERT INTO tbl_bitacoras VALUES("204","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:34:23");
INSERT INTO tbl_bitacoras VALUES("205","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 18:43:45");
INSERT INTO tbl_bitacoras VALUES("206","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-09 23:20:09");
INSERT INTO tbl_bitacoras VALUES("207","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 00:35:34");
INSERT INTO tbl_bitacoras VALUES("208","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 00:35:41");
INSERT INTO tbl_bitacoras VALUES("209","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 00:35:48");
INSERT INTO tbl_bitacoras VALUES("210","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 00:35:53");
INSERT INTO tbl_bitacoras VALUES("211","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 00:35:58");
INSERT INTO tbl_bitacoras VALUES("212","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 17:10:22");
INSERT INTO tbl_bitacoras VALUES("213","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 17:15:21");
INSERT INTO tbl_bitacoras VALUES("214","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 17:15:51");
INSERT INTO tbl_bitacoras VALUES("215","35","tbl_tiposervicios","UPDATE","UPDATE tbl_tiposervicios SET nombre=\'FARMACIA\', descripcion=\'FARMACIA\' WHERE id_tipo=\'1\'","2017-10-10 17:18:48");
INSERT INTO tbl_bitacoras VALUES("216","35","tbl_tiposervicios","UPDATE","UPDATE tbl_tiposervicios SET nombre=\'MEDICO\', descripcion=\'TRATAMIENTO MEDICO ESPECIALIZADO\' WHERE id_tipo=\'2\'","2017-10-10 17:19:15");
INSERT INTO tbl_bitacoras VALUES("217","35","tbl_tiposervicios","UPDATE","UPDATE tbl_tiposervicios SET nombre=\'PELUQUERIA\', descripcion=\'SERVICIO DE PELUQUERIA PARA LAS MASCOTAS\' WHERE id_tipo=\'3\'","2017-10-10 17:19:36");
INSERT INTO tbl_bitacoras VALUES("218","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 17:21:25");
INSERT INTO tbl_bitacoras VALUES("219","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-10 17:26:04");
INSERT INTO tbl_bitacoras VALUES("220","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-11 00:41:14");
INSERT INTO tbl_bitacoras VALUES("221","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-12 18:44:27");
INSERT INTO tbl_bitacoras VALUES("222","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-12 18:45:50");
INSERT INTO tbl_bitacoras VALUES("223","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-12 18:50:06");
INSERT INTO tbl_bitacoras VALUES("224","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-12 18:52:02");
INSERT INTO tbl_bitacoras VALUES("225","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-14 17:37:39");
INSERT INTO tbl_bitacoras VALUES("226","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-14 17:45:34");
INSERT INTO tbl_bitacoras VALUES("227","35","tbl_parametros","UPDATE","UPDATE tbl_parametros SET nombre=\'E\', descripcion=\'3\' WHERE id_parametro=\'27\'","2017-10-14 17:46:08");
INSERT INTO tbl_bitacoras VALUES("228","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-14 17:46:58");
INSERT INTO tbl_bitacoras VALUES("229","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-14 17:59:04");
INSERT INTO tbl_bitacoras VALUES("230","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'PRUEBA\', descripcion=\'\' WHERE id_rol=\'0\'","2017-10-14 22:10:04");
INSERT INTO tbl_bitacoras VALUES("231","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'PRUEBA\', descripcion=\'\' WHERE id_rol=\'\'","2017-10-14 22:11:24");
INSERT INTO tbl_bitacoras VALUES("232","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'NANANANA\', descripcion=\'NANANANANAN\' WHERE id_rol=\'\'","2017-10-15 00:19:13");
INSERT INTO tbl_bitacoras VALUES("233","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'NANANANA\', descripcion=\'NANANANANAN\' WHERE id_rol=\'\'","2017-10-15 00:19:56");
INSERT INTO tbl_bitacoras VALUES("234","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'KCFFKF\', descripcion=\'MCMCMCMC\' WHERE id_rol=\'\'","2017-10-15 00:21:15");
INSERT INTO tbl_bitacoras VALUES("235","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'KCFFKF\', descripcion=\'MCMCMCMC\' WHERE id_rol=\'\'","2017-10-15 00:21:58");
INSERT INTO tbl_bitacoras VALUES("236","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'KDSKFSDKKFK\', descripcion=\'MCMCCMCMCMC\' WHERE id_rol=\'\'","2017-10-15 00:23:15");
INSERT INTO tbl_bitacoras VALUES("237","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'ANANANANA\', descripcion=\'NAANANANANAN\' WHERE id_rol=\'\'","2017-10-15 00:27:34");
INSERT INTO tbl_bitacoras VALUES("238","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'NANANANA\', descripcion=\'NNANANAANANA\' WHERE id_rol=\'\'","2017-10-15 00:30:17");
INSERT INTO tbl_bitacoras VALUES("239","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'NANANANA\', descripcion=\'NNANANAANANA\' WHERE id_rol=\'\'","2017-10-15 00:34:24");
INSERT INTO tbl_bitacoras VALUES("240","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'JAAJAJJAJA\', descripcion=\'JDDSASDJDJSADOJ\' WHERE id_rol=\'\'","2017-10-15 00:36:39");
INSERT INTO tbl_bitacoras VALUES("241","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'XJA\', descripcion=\'JJKS\' WHERE id_rol=\'\'","2017-10-15 00:37:49");
INSERT INTO tbl_bitacoras VALUES("242","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'CCNCCN\', descripcion=\'KMKDKDDKDKK\' WHERE id_rol=\'\'","2017-10-15 00:38:20");
INSERT INTO tbl_bitacoras VALUES("243","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'INTERNO\', descripcion=\'PRACTICANTE\' WHERE id_rol=\'6\'","2017-10-15 00:40:35");
INSERT INTO tbl_bitacoras VALUES("244","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'ANANANANA\', descripcion=\'CCCKCCKCK\' WHERE id_rol=\'6\'","2017-10-15 00:40:51");
INSERT INTO tbl_bitacoras VALUES("245","35","tbl_roles","UPDATE","UPDATE tbl_roles SET rol=\'LUISA\', descripcion=\'MI AMOR ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢Ãƒ","2017-10-15 00:51:28");
INSERT INTO tbl_bitacoras VALUES("246","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 00:52:39");
INSERT INTO tbl_bitacoras VALUES("247","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 02:05:23");
INSERT INTO tbl_bitacoras VALUES("248","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 10:21:32");
INSERT INTO tbl_bitacoras VALUES("249","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 10:21:44");
INSERT INTO tbl_bitacoras VALUES("250","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 10:23:09");
INSERT INTO tbl_bitacoras VALUES("251","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:29");
INSERT INTO tbl_bitacoras VALUES("252","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:36");
INSERT INTO tbl_bitacoras VALUES("253","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:42");
INSERT INTO tbl_bitacoras VALUES("254","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:46");
INSERT INTO tbl_bitacoras VALUES("255","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:55");
INSERT INTO tbl_bitacoras VALUES("256","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:30:59");
INSERT INTO tbl_bitacoras VALUES("257","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:31:04");
INSERT INTO tbl_bitacoras VALUES("258","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:31:09");
INSERT INTO tbl_bitacoras VALUES("259","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:33:40");
INSERT INTO tbl_bitacoras VALUES("260","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 11:34:37");
INSERT INTO tbl_bitacoras VALUES("261","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 11:35:04");
INSERT INTO tbl_bitacoras VALUES("262","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-15 11:37:06");
INSERT INTO tbl_bitacoras VALUES("263","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:37:11");
INSERT INTO tbl_bitacoras VALUES("264","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-15 11:40:29");
INSERT INTO tbl_bitacoras VALUES("265","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-17 17:53:02");
INSERT INTO tbl_bitacoras VALUES("266","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-17 17:53:08");
INSERT INTO tbl_bitacoras VALUES("267","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ã","2017-10-17 17:53:09");
INSERT INTO tbl_bitacoras VALUES("269","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 17:53:35");
INSERT INTO tbl_bitacoras VALUES("270","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 17:58:28");
INSERT INTO tbl_bitacoras VALUES("271","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 17:59:20");
INSERT INTO tbl_bitacoras VALUES("272","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 17:59:32");
INSERT INTO tbl_bitacoras VALUES("273","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 17:59:45");
INSERT INTO tbl_bitacoras VALUES("274","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 17:59:47");
INSERT INTO tbl_bitacoras VALUES("275","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 18:16:13");
INSERT INTO tbl_bitacoras VALUES("276","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:16:27");
INSERT INTO tbl_bitacoras VALUES("277","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:19:07");
INSERT INTO tbl_bitacoras VALUES("278","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:23:56");
INSERT INTO tbl_bitacoras VALUES("279","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:24:06");
INSERT INTO tbl_bitacoras VALUES("280","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:24:18");
INSERT INTO tbl_bitacoras VALUES("281","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:24:28");
INSERT INTO tbl_bitacoras VALUES("282","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-17 18:24:32");
INSERT INTO tbl_bitacoras VALUES("283","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:25:45");
INSERT INTO tbl_bitacoras VALUES("284","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-17 18:33:21");
INSERT INTO tbl_bitacoras VALUES("285","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-17 18:33:27");
INSERT INTO tbl_bitacoras VALUES("286","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ã","2017-10-17 18:33:27");
INSERT INTO tbl_bitacoras VALUES("288","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 18:34:37");
INSERT INTO tbl_bitacoras VALUES("289","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 20:40:27");
INSERT INTO tbl_bitacoras VALUES("290","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 21:59:50");
INSERT INTO tbl_bitacoras VALUES("291","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-17 22:21:38");
INSERT INTO tbl_bitacoras VALUES("292","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 22:21:54");
INSERT INTO tbl_bitacoras VALUES("293","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 22:22:01");
INSERT INTO tbl_bitacoras VALUES("294","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 22:22:05");
INSERT INTO tbl_bitacoras VALUES("295","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-17 22:22:09");
INSERT INTO tbl_bitacoras VALUES("296","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-18 01:59:46");
INSERT INTO tbl_bitacoras VALUES("297","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-18 23:01:05");
INSERT INTO tbl_bitacoras VALUES("298","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-18 23:01:16");
INSERT INTO tbl_bitacoras VALUES("299","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â±a","2017-10-18 23:01:16");
INSERT INTO tbl_bitacoras VALUES("300","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-18 23:01:25");
INSERT INTO tbl_bitacoras VALUES("301","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â±a","2017-10-18 23:01:26");
INSERT INTO tbl_bitacoras VALUES("302","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-18 23:02:54");
INSERT INTO tbl_bitacoras VALUES("303","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-18 23:10:25");
INSERT INTO tbl_bitacoras VALUES("304","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 00:14:09");
INSERT INTO tbl_bitacoras VALUES("305","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 00:14:14");
INSERT INTO tbl_bitacoras VALUES("306","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 00:14:24");
INSERT INTO tbl_bitacoras VALUES("307","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 00:14:31");
INSERT INTO tbl_bitacoras VALUES("308","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 00:58:01");
INSERT INTO tbl_bitacoras VALUES("309","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 17:13:31");
INSERT INTO tbl_bitacoras VALUES("310","0","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 17:20:49");
INSERT INTO tbl_bitacoras VALUES("311","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-19 18:01:16");
INSERT INTO tbl_bitacoras VALUES("312","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-19 18:01:21");
INSERT INTO tbl_bitacoras VALUES("313","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â±a","2017-10-19 18:01:21");
INSERT INTO tbl_bitacoras VALUES("315","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:01:44");
INSERT INTO tbl_bitacoras VALUES("316","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:01:47");
INSERT INTO tbl_bitacoras VALUES("317","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:01:56");
INSERT INTO tbl_bitacoras VALUES("318","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:04:25");
INSERT INTO tbl_bitacoras VALUES("319","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:04:28");
INSERT INTO tbl_bitacoras VALUES("320","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:04:39");
INSERT INTO tbl_bitacoras VALUES("321","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:05:27");
INSERT INTO tbl_bitacoras VALUES("322","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:05:31");
INSERT INTO tbl_bitacoras VALUES("323","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:05:47");
INSERT INTO tbl_bitacoras VALUES("324","35","tbl_parametros","UPDATE","UPDATE tbl_roles_objeto set permiso_consulta=\'1\', permiso_insercion=\'1\' , permiso_actualizacion=\'0\', permiso_eliminacion=\'0\' WHERE id_permiso=\'39\'","2017-10-19 18:37:18");
INSERT INTO tbl_bitacoras VALUES("325","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:38:16");
INSERT INTO tbl_bitacoras VALUES("326","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:38:47");
INSERT INTO tbl_bitacoras VALUES("327","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:39:24");
INSERT INTO tbl_bitacoras VALUES("328","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:39:27");
INSERT INTO tbl_bitacoras VALUES("329","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:39:31");
INSERT INTO tbl_bitacoras VALUES("330","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:40:09");
INSERT INTO tbl_bitacoras VALUES("331","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:41:07");
INSERT INTO tbl_bitacoras VALUES("332","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:43:07");
INSERT INTO tbl_bitacoras VALUES("333","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 18:43:42");
INSERT INTO tbl_bitacoras VALUES("334","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:43:45");
INSERT INTO tbl_bitacoras VALUES("335","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:45:10");
INSERT INTO tbl_bitacoras VALUES("336","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:45:16");
INSERT INTO tbl_bitacoras VALUES("337","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:45:57");
INSERT INTO tbl_bitacoras VALUES("338","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:46:01");
INSERT INTO tbl_bitacoras VALUES("339","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:46:23");
INSERT INTO tbl_bitacoras VALUES("340","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:47:29");
INSERT INTO tbl_bitacoras VALUES("341","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-19 18:49:31");
INSERT INTO tbl_bitacoras VALUES("342","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:50:03");
INSERT INTO tbl_bitacoras VALUES("343","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-19 18:50:22");
INSERT INTO tbl_bitacoras VALUES("344","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:51:26");
INSERT INTO tbl_bitacoras VALUES("345","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:56:30");
INSERT INTO tbl_bitacoras VALUES("346","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:56:43");
INSERT INTO tbl_bitacoras VALUES("347","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:57:29");
INSERT INTO tbl_bitacoras VALUES("348","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-19 18:58:21");
INSERT INTO tbl_bitacoras VALUES("349","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 22:23:27");
INSERT INTO tbl_bitacoras VALUES("350","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-19 22:23:39");
INSERT INTO tbl_bitacoras VALUES("351","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:08:54");
INSERT INTO tbl_bitacoras VALUES("352","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:09:16");
INSERT INTO tbl_bitacoras VALUES("353","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:13:11");
INSERT INTO tbl_bitacoras VALUES("354","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:32:10");
INSERT INTO tbl_bitacoras VALUES("355","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:32:15");
INSERT INTO tbl_bitacoras VALUES("356","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:36:29");
INSERT INTO tbl_bitacoras VALUES("357","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-20 01:42:00");
INSERT INTO tbl_bitacoras VALUES("358","35","recupera","INGRESO","Esta en la pantalla de verificacion de pregunta y respuesta","2017-10-20 01:42:46");
INSERT INTO tbl_bitacoras VALUES("359","35","cambia","INGRESO","Esta en la pantalla de cambio de contraseÃƒÂ±a","2017-10-20 01:42:46");
INSERT INTO tbl_bitacoras VALUES("361","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:43:22");
INSERT INTO tbl_bitacoras VALUES("362","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:47:01");
INSERT INTO tbl_bitacoras VALUES("363","35","tbl_usuario","INSERT","insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'KIRBY\', \'KIRBY\', \'5\',\'NUEVO\',\'$2y$10$ZCm1K/eYR1BVAe0p0cM","2017-10-20 01:48:10");
INSERT INTO tbl_bitacoras VALUES("364","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:48:30");
INSERT INTO tbl_bitacoras VALUES("365","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:51:38");
INSERT INTO tbl_bitacoras VALUES("366","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:51:46");
INSERT INTO tbl_bitacoras VALUES("367","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:52:11");
INSERT INTO tbl_bitacoras VALUES("368","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:52:14");
INSERT INTO tbl_bitacoras VALUES("369","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:52:29");
INSERT INTO tbl_bitacoras VALUES("370","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:52:37");
INSERT INTO tbl_bitacoras VALUES("371","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:52:48");
INSERT INTO tbl_bitacoras VALUES("372","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:52:54");
INSERT INTO tbl_bitacoras VALUES("373","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:53:05");
INSERT INTO tbl_bitacoras VALUES("374","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:53:24");
INSERT INTO tbl_bitacoras VALUES("375","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:57:03");
INSERT INTO tbl_bitacoras VALUES("376","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:57:05");
INSERT INTO tbl_bitacoras VALUES("377","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:57:52");
INSERT INTO tbl_bitacoras VALUES("378","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:58:23");
INSERT INTO tbl_bitacoras VALUES("379","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:58:29");
INSERT INTO tbl_bitacoras VALUES("380","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:58:32");
INSERT INTO tbl_bitacoras VALUES("381","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 01:58:34");
INSERT INTO tbl_bitacoras VALUES("382","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:58:44");
INSERT INTO tbl_bitacoras VALUES("383","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:58:54");
INSERT INTO tbl_bitacoras VALUES("384","44","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-20 01:59:07");
INSERT INTO tbl_bitacoras VALUES("385","44","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-20 01:59:26");
INSERT INTO tbl_bitacoras VALUES("386","44","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-20 01:59:33");
INSERT INTO tbl_bitacoras VALUES("387","44","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 02:00:07");
INSERT INTO tbl_bitacoras VALUES("388","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 21:49:33");
INSERT INTO tbl_bitacoras VALUES("389","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-20 21:50:11");
INSERT INTO tbl_bitacoras VALUES("390","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 22:07:50");
INSERT INTO tbl_bitacoras VALUES("391","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-20 23:00:06");
INSERT INTO tbl_bitacoras VALUES("392","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:06:06");
INSERT INTO tbl_bitacoras VALUES("393","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:06:23");
INSERT INTO tbl_bitacoras VALUES("394","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:06:35");
INSERT INTO tbl_bitacoras VALUES("395","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:06:50");
INSERT INTO tbl_bitacoras VALUES("396","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:06:52");
INSERT INTO tbl_bitacoras VALUES("397","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:07:45");
INSERT INTO tbl_bitacoras VALUES("398","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:10:41");
INSERT INTO tbl_bitacoras VALUES("399","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:10:52");
INSERT INTO tbl_bitacoras VALUES("400","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:10:56");
INSERT INTO tbl_bitacoras VALUES("401","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:10:58");
INSERT INTO tbl_bitacoras VALUES("402","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:11:03");
INSERT INTO tbl_bitacoras VALUES("403","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:11:12");
INSERT INTO tbl_bitacoras VALUES("404","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:11:16");
INSERT INTO tbl_bitacoras VALUES("405","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:11:18");
INSERT INTO tbl_bitacoras VALUES("406","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:11:57");
INSERT INTO tbl_bitacoras VALUES("407","35","Menu","Acceso","Acceso al menu","2017-10-21 01:11:57");
INSERT INTO tbl_bitacoras VALUES("408","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:12:16");
INSERT INTO tbl_bitacoras VALUES("409","35","Menu","Acceso","Acceso al menu","2017-10-21 01:12:16");
INSERT INTO tbl_bitacoras VALUES("410","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:12:23");
INSERT INTO tbl_bitacoras VALUES("411","35","Menu","Acceso","Acceso al menu","2017-10-21 01:12:23");
INSERT INTO tbl_bitacoras VALUES("412","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:12:43");
INSERT INTO tbl_bitacoras VALUES("413","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:12:45");
INSERT INTO tbl_bitacoras VALUES("414","35","Menu","Acceso","Acceso al menu","2017-10-21 01:12:45");
INSERT INTO tbl_bitacoras VALUES("415","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:14:12");
INSERT INTO tbl_bitacoras VALUES("416","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:14:31");
INSERT INTO tbl_bitacoras VALUES("417","35","Menu","Acceso","Acceso al menu","2017-10-21 01:14:32");
INSERT INTO tbl_bitacoras VALUES("418","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:14:41");
INSERT INTO tbl_bitacoras VALUES("419","35","Menu","Acceso","Acceso al menu","2017-10-21 01:14:41");
INSERT INTO tbl_bitacoras VALUES("420","35","Menu","Acceso","Acceso al menu","2017-10-21 01:14:45");
INSERT INTO tbl_bitacoras VALUES("421","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:15:29");
INSERT INTO tbl_bitacoras VALUES("422","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:15:32");
INSERT INTO tbl_bitacoras VALUES("423","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:15:36");
INSERT INTO tbl_bitacoras VALUES("424","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:15:38");
INSERT INTO tbl_bitacoras VALUES("425","35","Menu","Acceso","Acceso al menu","2017-10-21 01:15:38");
INSERT INTO tbl_bitacoras VALUES("426","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:19:37");
INSERT INTO tbl_bitacoras VALUES("427","35","Menu","Acceso","Acceso al menu","2017-10-21 01:19:37");
INSERT INTO tbl_bitacoras VALUES("428","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:50:17");
INSERT INTO tbl_bitacoras VALUES("429","35","Menu","Acceso","Acceso al menu","2017-10-21 01:50:17");
INSERT INTO tbl_bitacoras VALUES("430","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:53:12");
INSERT INTO tbl_bitacoras VALUES("431","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:53:16");
INSERT INTO tbl_bitacoras VALUES("432","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:53:22");
INSERT INTO tbl_bitacoras VALUES("433","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:53:33");
INSERT INTO tbl_bitacoras VALUES("434","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:53:41");
INSERT INTO tbl_bitacoras VALUES("435","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:54:02");
INSERT INTO tbl_bitacoras VALUES("436","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:54:05");
INSERT INTO tbl_bitacoras VALUES("437","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 01:54:07");
INSERT INTO tbl_bitacoras VALUES("438","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 01:57:43");
INSERT INTO tbl_bitacoras VALUES("439","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:25:22");
INSERT INTO tbl_bitacoras VALUES("440","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:25:26");
INSERT INTO tbl_bitacoras VALUES("441","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:28:59");
INSERT INTO tbl_bitacoras VALUES("442","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:29:07");
INSERT INTO tbl_bitacoras VALUES("443","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:33:14");
INSERT INTO tbl_bitacoras VALUES("444","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:33:18");
INSERT INTO tbl_bitacoras VALUES("445","35","Menu","Acceso","Acceso al menu","2017-10-21 02:33:18");
INSERT INTO tbl_bitacoras VALUES("446","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:33:29");
INSERT INTO tbl_bitacoras VALUES("447","35","Menu","Acceso","Acceso al menu","2017-10-21 02:33:30");
INSERT INTO tbl_bitacoras VALUES("448","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:33:31");
INSERT INTO tbl_bitacoras VALUES("449","35","Menu","Acceso","Acceso al menu","2017-10-21 02:33:31");
INSERT INTO tbl_bitacoras VALUES("450","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:37:06");
INSERT INTO tbl_bitacoras VALUES("451","35","Menu","Acceso","Acceso al menu","2017-10-21 02:37:06");
INSERT INTO tbl_bitacoras VALUES("452","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:38:31");
INSERT INTO tbl_bitacoras VALUES("453","35","Menu","Acceso","Acceso al menu","2017-10-21 02:38:31");
INSERT INTO tbl_bitacoras VALUES("454","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:43:17");
INSERT INTO tbl_bitacoras VALUES("455","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:46:01");
INSERT INTO tbl_bitacoras VALUES("456","35","Menu","Acceso","Acceso al menu","2017-10-21 02:46:01");
INSERT INTO tbl_bitacoras VALUES("457","35","pantalla control de vacunas","INGRESO","ingreso a pantalla control de vacunas","2017-10-21 02:46:10");
INSERT INTO tbl_bitacoras VALUES("458","35","Menu","Acceso","Acceso al menu","2017-10-21 02:46:10");
INSERT INTO tbl_bitacoras VALUES("459","35","pantalla control de vacunas","INGRESO","ingreso a pantalla control de vacunas","2017-10-21 02:47:00");
INSERT INTO tbl_bitacoras VALUES("460","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:00");
INSERT INTO tbl_bitacoras VALUES("461","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:47:07");
INSERT INTO tbl_bitacoras VALUES("462","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:08");
INSERT INTO tbl_bitacoras VALUES("463","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:16");
INSERT INTO tbl_bitacoras VALUES("464","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:47:20");
INSERT INTO tbl_bitacoras VALUES("465","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:20");
INSERT INTO tbl_bitacoras VALUES("466","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:23");
INSERT INTO tbl_bitacoras VALUES("467","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:47:25");
INSERT INTO tbl_bitacoras VALUES("468","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:25");
INSERT INTO tbl_bitacoras VALUES("469","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:47:37");
INSERT INTO tbl_bitacoras VALUES("470","35","Menu","Acceso","Acceso al menu","2017-10-21 02:47:37");
INSERT INTO tbl_bitacoras VALUES("471","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:48:05");
INSERT INTO tbl_bitacoras VALUES("472","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:48:14");
INSERT INTO tbl_bitacoras VALUES("473","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:48:19");
INSERT INTO tbl_bitacoras VALUES("474","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 02:48:25");
INSERT INTO tbl_bitacoras VALUES("475","35","Menu","Acceso","Acceso al menu","2017-10-21 02:48:25");
INSERT INTO tbl_bitacoras VALUES("476","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:48:39");
INSERT INTO tbl_bitacoras VALUES("477","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:48:52");
INSERT INTO tbl_bitacoras VALUES("478","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:49:05");
INSERT INTO tbl_bitacoras VALUES("479","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:52:45");
INSERT INTO tbl_bitacoras VALUES("480","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:52:49");
INSERT INTO tbl_bitacoras VALUES("481","35","Menu","Acceso","Acceso al menu","2017-10-21 02:52:49");
INSERT INTO tbl_bitacoras VALUES("482","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:53:00");
INSERT INTO tbl_bitacoras VALUES("483","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:53:02");
INSERT INTO tbl_bitacoras VALUES("484","35","Menu","Acceso","Acceso al menu","2017-10-21 02:53:02");
INSERT INTO tbl_bitacoras VALUES("485","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 02:53:07");
INSERT INTO tbl_bitacoras VALUES("486","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 02:53:13");
INSERT INTO tbl_bitacoras VALUES("487","35","Menu","Acceso","Acceso al menu","2017-10-21 02:53:13");
INSERT INTO tbl_bitacoras VALUES("488","35","pantalla principal","INGRESO","ingreso a pantalla principal","2017-10-21 03:00:04");
INSERT INTO tbl_bitacoras VALUES("489","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:00:06");
INSERT INTO tbl_bitacoras VALUES("490","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 03:00:12");
INSERT INTO tbl_bitacoras VALUES("491","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:00:17");
INSERT INTO tbl_bitacoras VALUES("492","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:00:19");
INSERT INTO tbl_bitacoras VALUES("493","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:00:21");
INSERT INTO tbl_bitacoras VALUES("494","35","pantalla vacunas","INGRESO","ingreso a pantalla vacunas","2017-10-21 03:02:48");
INSERT INTO tbl_bitacoras VALUES("495","35","pantalla control de vacunas","INGRESO","ingreso a pantalla control de vacunas","2017-10-21 03:02:51");
INSERT INTO tbl_bitacoras VALUES("496","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:03:16");
INSERT INTO tbl_bitacoras VALUES("497","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:03:23");
INSERT INTO tbl_bitacoras VALUES("498","35","pantalla control de vacunas","INGRESO","ingreso a pantalla control de vacunas","2017-10-21 03:03:32");
INSERT INTO tbl_bitacoras VALUES("499","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:03:40");
INSERT INTO tbl_bitacoras VALUES("500","35","pantalla usuarios","INGRESO","ingreso a pantalla usuarios","2017-10-21 03:06:22");
INSERT INTO tbl_bitacoras VALUES("501","35","pantalla parametros","INGRESO","ingreso a pantalla paramerso","2017-10-21 03:06:49");



DROP TABLE IF EXISTS tbl_borrar;

CREATE TABLE `tbl_borrar` (
  `id_prueas` int(10) NOT NULL,
  `cdcdd` text NOT NULL,
  PRIMARY KEY (`id_prueas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tbl_clientes;

CREATE TABLE `tbl_clientes` (
  `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT,
  `identidad` varchar(14) NOT NULL,
  `nom_cliente` varchar(50) NOT NULL,
  `ape_cliente` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `membresia` varchar(20) DEFAULT NULL,
  `cor_cliente` varchar(50) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_clientes VALUES("1","2147483647","pedro angel","pedro","99678765","22345654","El Loarque","si","pedro@yahhoo.com","2017-09-18 22:29:28","2017-09-18 22:29:28");
INSERT INTO tbl_clientes VALUES("2","2147483647","ana","sjs","99004567","22345678","sjsks","","nsmsn@hotmail.com","2017-09-30 16:18:16","2017-09-30 16:18:16");
INSERT INTO tbl_clientes VALUES("5","0801199222062","SANA","AAAA","99003256","99996542","sdsd","no","msd@hotmail.com","2017-10-09 18:21:31","2017-10-09 18:21:31");
INSERT INTO tbl_clientes VALUES("6","0801199122058","ARIEL","MARTINEZ","88625379","22709560","el sitio","si","kirby_1888@hotmail.com","2017-10-09 23:04:44","2017-10-09 23:04:44");



DROP TABLE IF EXISTS tbl_compras;

CREATE TABLE `tbl_compras` (
  `id_compra` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_proveedor` bigint(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_entrega` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_compra`),
  KEY `id_proveedor` (`id_proveedor`),
  CONSTRAINT `tbl_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO tbl_compras VALUES("2","1","Inyeccion","100","50","50000","2017-09-18 00:00:00","2017-09-19 00:00:00");
INSERT INTO tbl_compras VALUES("3","1","penicilina","20","50","1000","2017-09-21 00:00:00","2017-09-22 00:00:00");
INSERT INTO tbl_compras VALUES("4","1","anestecia","10","20","200","2017-09-21 00:00:00","2017-09-22 00:00:00");



DROP TABLE IF EXISTS tbl_consulta;

CREATE TABLE `tbl_consulta` (
  `id_consulta` bigint(20) NOT NULL,
  `motivo` varchar(200) DEFAULT NULL,
  `sintomas` varchar(200) DEFAULT NULL,
  `tratamientos` varchar(200) DEFAULT NULL,
  `dieta` varchar(150) DEFAULT NULL,
  `peso` varchar(30) DEFAULT NULL,
  `temperatura` varchar(10) DEFAULT NULL,
  `fc` varchar(30) DEFAULT NULL,
  `fr` varchar(30) DEFAULT NULL,
  `condicion` varchar(100) DEFAULT NULL,
  `membranas` varchar(50) DEFAULT NULL,
  `hidratacion` varchar(50) DEFAULT NULL,
  `patron` varchar(50) DEFAULT NULL,
  `temperamento` varchar(50) DEFAULT NULL,
  `id_mascota` bigint(20) NOT NULL,
  `TLLC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_consulta VALUES("1","hj","hjk","klÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â","jkl","12","2","3","4","6","7","8","9","","1","1");
INSERT INTO tbl_consulta VALUES("2","gripe","calentura muy fuerte","zorritone","gati","12lb","21","bien","bien","sana","gripe","deshidra","pausado","","2","nose");
INSERT INTO tbl_consulta VALUES("3","feo","se cayo","ninguno","gati","12","12","good","all right","feliz","gripe","hn","purr","","1","no");
INSERT INTO tbl_consulta VALUES("4","miadera","miados","ninguno","gati","23","jj","23","1","4","4","4","4","","2","jj");
INSERT INTO tbl_consulta VALUES("5","nose","lala","ninguno","corn","120","m","nm","nm","nm","nm","nm","n","","2","nm");
INSERT INTO tbl_consulta VALUES("6","gordo","come mcuho","ninguno","gati","12","j","2","4","7","jlsa","nkm","m","","1","f");
INSERT INTO tbl_consulta VALUES("7","diarrea","pupu","nada","tyuk","12","56","bien","bien","flaca","moci","67","hjk","","2","ghj");
INSERT INTO tbl_consulta VALUES("0","tos","le duele la cabeza","aspirina","arroz y firjoles","12","234","w","34","alegre","moco","12","12","","2","23");



DROP TABLE IF EXISTS tbl_consultas;

CREATE TABLE `tbl_consultas` (
  `id_consulta` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_preclinica` bigint(20) NOT NULL,
  `sintomas` varchar(200) NOT NULL,
  `tratamiento` varchar(200) DEFAULT NULL,
  `dieta` varchar(200) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_consulta`),
  KEY `id_preclinica` (`id_preclinica`),
  CONSTRAINT `tbl_consultas_ibfk_1` FOREIGN KEY (`id_preclinica`) REFERENCES `tbl_preclinicas` (`id_preclinica`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_consultaservicios;

CREATE TABLE `tbl_consultaservicios` (
  `id_consulservi` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_servicio` bigint(20) NOT NULL,
  `id_consulta` bigint(20) NOT NULL,
  `id_cliente` bigint(20) NOT NULL,
  PRIMARY KEY (`id_consulservi`),
  KEY `id_servicio` (`id_servicio`),
  KEY `id_consulta` (`id_consulta`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `tbl_consultaservicios_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `tbl_proservicios` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_consultaservicios_ibfk_3` FOREIGN KEY (`id_consulta`) REFERENCES `tbl_consultas` (`id_consulta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_consultaservicios_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_detafacturas;

CREATE TABLE `tbl_detafacturas` (
  `id_detafac` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_consulservi` bigint(20) NOT NULL,
  `monto_producto` varchar(20) NOT NULL,
  PRIMARY KEY (`id_detafac`),
  KEY `id_consulservi` (`id_consulservi`),
  CONSTRAINT `tbl_detafacturas_ibfk_1` FOREIGN KEY (`id_consulservi`) REFERENCES `tbl_consultaservicios` (`id_consulservi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_empleados;

CREATE TABLE `tbl_empleados` (
  `id_empleado` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_empleado` varchar(50) NOT NULL,
  `ape_empleado` varchar(50) NOT NULL,
  `num_tel1` bigint(20) NOT NULL,
  `num_tel2` bigint(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `salario` varchar(20) NOT NULL,
  `deducciones` varchar(20) NOT NULL,
  `salario_neto` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_eventos;

CREATE TABLE `tbl_eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

INSERT INTO tbl_eventos VALUES("1","All Day Event","#40E0D0","2016-01-01 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("2","Long Event","#FF0000","2016-01-07 00:00:00","2016-01-10 00:00:00");
INSERT INTO tbl_eventos VALUES("3","Repeating Event","#0071c5","2016-01-09 16:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("4","Conference","#40E0D0","2016-01-11 00:00:00","2016-01-13 00:00:00");
INSERT INTO tbl_eventos VALUES("5","Meeting","#000","2016-01-12 10:30:00","2016-01-12 12:30:00");
INSERT INTO tbl_eventos VALUES("6","Lunch","#0071c5","2016-01-12 12:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("7","Happy Hour","#0071c5","2016-01-12 17:30:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("8","Dinner","#0071c5","2016-01-12 20:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("9","Birthday Party","#FFD700","2016-01-14 07:00:00","2016-01-14 07:00:00");
INSERT INTO tbl_eventos VALUES("10","Double click to change","#008000","2016-01-28 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("21","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO tbl_eventos VALUES("22","corte de patas","#008000","2017-10-25 00:00:00","2017-10-25 00:00:00");
INSERT INTO tbl_eventos VALUES("24","sgshfhhf","#008000","2017-10-13 00:00:00","2017-10-13 00:00:00");
INSERT INTO tbl_eventos VALUES("26","vfdfdfs","#FFD700","2017-10-10 00:00:00","2017-10-10 00:00:00");



DROP TABLE IF EXISTS tbl_facturas;

CREATE TABLE `tbl_facturas` (
  `id_factura` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_detafac` bigint(20) NOT NULL,
  `id_pago` bigint(20) NOT NULL,
  `NO_Factura` bigint(20) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `descuento` varchar(20) NOT NULL,
  `ISV` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_factura`),
  KEY `id_detafac` (`id_detafac`),
  KEY `id_pago` (`id_pago`),
  CONSTRAINT `tbl_facturas_ibfk_1` FOREIGN KEY (`id_detafac`) REFERENCES `tbl_detafacturas` (`id_detafac`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_facturas_ibfk_2` FOREIGN KEY (`id_pago`) REFERENCES `tbl_tipopagos` (`id_pago`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_kerders;

CREATE TABLE `tbl_kerders` (
  `id_kerder` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_servicio` bigint(20) NOT NULL,
  `id_compra` bigint(20) NOT NULL,
  `tip_producto` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  PRIMARY KEY (`id_kerder`),
  KEY `id_servicio` (`id_servicio`),
  KEY `id_compra` (`id_compra`),
  CONSTRAINT `tbl_kerders_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `tbl_proservicios` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_kerders_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `tbl_compras` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_mascotas;

CREATE TABLE `tbl_mascotas` (
  `id_mascota` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_cliente` bigint(20) NOT NULL,
  `nom_mascota` varchar(30) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacimiento` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mascota`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `tbl_mascotas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_mascotas VALUES("2","2","taquito","Canino","aguacate","Macho","2013-10-19","feo","2017-09-30 16:39:42");
INSERT INTO tbl_mascotas VALUES("3","1","CANELA","Felino","siames","Hembra","2014-11-29","se mea mucho","2017-10-08 03:43:24");
INSERT INTO tbl_mascotas VALUES("5","6","THOR","Canino","Husky Siberian","Macho","2015-12-15","relajero","2017-10-10 00:24:56");
INSERT INTO tbl_mascotas VALUES("6","6","ANA","Canino","linda","Hembra","2017-10-11","hola","2017-10-10 17:35:14");



DROP TABLE IF EXISTS tbl_maser;

CREATE TABLE `tbl_maser` (
  `id_maser` bigint(20) NOT NULL,
  `id_mascota` bigint(20) DEFAULT NULL,
  `id_servicio` bigint(20) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `costo` varchar(50) DEFAULT NULL,
  `fec_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_maser VALUES("1","1","1","consulta","200","2017-07-22 01:53:08","1");
INSERT INTO tbl_maser VALUES("2","1","0","consulta","100","2017-07-22 17:24:50","");
INSERT INTO tbl_maser VALUES("3","1","0","sangre","100","2017-07-22 20:37:34","");
INSERT INTO tbl_maser VALUES("4","1","0","vbn","100","2017-07-22 21:25:45","");
INSERT INTO tbl_maser VALUES("5","1","0","ghjk","120","2017-07-22 21:36:04","");
INSERT INTO tbl_maser VALUES("6","1","0","hj","199","2017-07-22 22:05:48","1");
INSERT INTO tbl_maser VALUES("7","2","0","bn","120","2017-07-22 22:22:56","1");
INSERT INTO tbl_maser VALUES("8","2","0","hj","100","2017-07-22 22:39:28","1");
INSERT INTO tbl_maser VALUES("9","2","0","ana","10","2017-07-22 22:41:11","1");
INSERT INTO tbl_maser VALUES("10","1","0","SANGRE","100","2017-07-29 23:18:39","2");
INSERT INTO tbl_maser VALUES("11","1","0","CONSULTA","200","2017-07-29 23:20:42","2");
INSERT INTO tbl_maser VALUES("12","1","0","DIALISIS","300","2017-07-29 23:20:55","469");
INSERT INTO tbl_maser VALUES("13","1","0","SANGRE","345","2017-07-30 00:49:00","470");
INSERT INTO tbl_maser VALUES("14","1","0","SANGRE","345","2017-07-30 00:49:47","470");
INSERT INTO tbl_maser VALUES("15","1","0","MIAU","123","2017-07-30 00:52:33","471");
INSERT INTO tbl_maser VALUES("16","1","0","ANA","1001","2017-07-30 00:54:09","472");
INSERT INTO tbl_maser VALUES("17","1","0","NA","oipÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â","2017-07-30 00:54:43","473");
INSERT INTO tbl_maser VALUES("18","1","0","MIAJ","102","2017-07-30 00:56:32","474");
INSERT INTO tbl_maser VALUES("19","1","0","AAJ","123","2017-07-30 01:04:58","475");
INSERT INTO tbl_maser VALUES("20","1","0","AAJ","123","2017-07-30 01:05:08","475");
INSERT INTO tbl_maser VALUES("21","1","0","LOLO","123","2017-07-30 01:07:31","00476");
INSERT INTO tbl_maser VALUES("22","1","0","ANA","1209","2017-07-30 01:09:48","476");
INSERT INTO tbl_maser VALUES("23","1","0","ANA","1234","2017-07-30 01:33:37","477");
INSERT INTO tbl_maser VALUES("24","1","0","AH","123","2017-07-30 01:42:16","478");
INSERT INTO tbl_maser VALUES("25","1","0","AJA","123","2017-07-30 02:02:15","479");
INSERT INTO tbl_maser VALUES("26","2","0","SANGRE","120","2017-08-02 13:45:59","480");
INSERT INTO tbl_maser VALUES("0","2","0","KA","sd","2017-10-05 15:14:11","481");



DROP TABLE IF EXISTS tbl_objeto_pantalla;

CREATE TABLE `tbl_objeto_pantalla` (
  `id_permiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_rol` int(11) NOT NULL,
  `id_pantalla` int(11) NOT NULL,
  `permiso_insercion` int(11) NOT NULL,
  `permiso_eliminacion` int(11) NOT NULL,
  `permiso_actualizacion` int(11) NOT NULL,
  `permiso_consulta` int(11) NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tbl_objeto_pantalla VALUES("1","2","3","0","0","1","0");
INSERT INTO tbl_objeto_pantalla VALUES("3","1","4","1","1","1","1");
INSERT INTO tbl_objeto_pantalla VALUES("4","2","2","1","1","1","1");



DROP TABLE IF EXISTS tbl_objetos_pantallas;

CREATE TABLE `tbl_objetos_pantallas` (
  `id_objeto` bigint(20) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(60) NOT NULL,
  `tipo_objeto` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creaccion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_pantallas;

CREATE TABLE `tbl_pantallas` (
  `id_objeto` int(6) NOT NULL AUTO_INCREMENT,
  `objeto` varchar(60) NOT NULL,
  `tipo_objeto` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_objeto`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO tbl_pantallas VALUES("1","Inicio","Formulario","Pantalla de Usuario","2015-07-02 10:13:44","","2015-08-14 13:50:17"," 1");
INSERT INTO tbl_pantallas VALUES("2","Usuario","Formulario","Pantalla del usuario","2015-07-02 10:13:44","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("3","Preguntas","Formulario","Pantalla de preguntas","2015-07-02 10:13:44","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("4","Personal","Formulario","Mantenimiento del Personal","2015-07-02 10:13:44","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("5","Parametros","Formulario","Parametros del Sistema","2015-07-02 10:13:44","","2015-07-21 23:35:50","");
INSERT INTO tbl_pantallas VALUES("6","Tipo de Personal","Formulario","Mantenimiento del Personal","2015-07-02 10:13:44","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("7","pantalla","mantenimiento","mo","2017-10-19 18:32:20","mi","0000-00-00 00:00:00","mi");
INSERT INTO tbl_pantallas VALUES("8","MASCOTAS","","ADMINISTRACION DE MASCOTAS","2017-10-19 18:39:03","","0000-00-00 00:00:00","");
INSERT INTO tbl_pantallas VALUES("9","VACUNAS","","CONTRALAR LAS VACUNAS QUE TIENE EL SISTEMA","2017-10-19 18:48:17","","0000-00-00 00:00:00","");



DROP TABLE IF EXISTS tbl_parametros;

CREATE TABLE `tbl_parametros` (
  `id_parametro` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  PRIMARY KEY (`id_parametro`),
  KEY `dias_vencimiento_contrasena` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

INSERT INTO tbl_parametros VALUES("1","vencimiento","30","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("2","Direccion de la Empresa","kslkd","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("5","RTN","XXXXXXXXXXX","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("6","ADMIN_CORREO","ansluisa@hotmail.com","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("7","Nombre de la Empresa","bernardos veterynary","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("8","intentos","6","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("9","preguntas","2","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("23","KSLDFKLS","5","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("27","E","3","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("28","BORRAR","20","0000-00-00 00:00:00");
INSERT INTO tbl_parametros VALUES("29","PAQUITO","10","0000-00-00 00:00:00");



DROP TABLE IF EXISTS tbl_preclinicas;

CREATE TABLE `tbl_preclinicas` (
  `id_preclinica` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_mascota` bigint(20) NOT NULL,
  `peso` varchar(15) NOT NULL,
  `temperatura` varchar(15) DEFAULT NULL,
  `motivo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_preclinica`),
  KEY `id_mascota` (`id_mascota`),
  CONSTRAINT `tbl_preclinicas_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `tbl_mascotas` (`id_mascota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_preguntas;

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` bigint(20) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(70) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO tbl_preguntas VALUES("1","Fecha de Nacimiento?","2017-05-24 15:10:44","1","2017-06-06 14:38:11","1");
INSERT INTO tbl_preguntas VALUES("2","Color Favorito ?","2017-05-24 15:11:28","1","2017-06-06 14:38:21","1");
INSERT INTO tbl_preguntas VALUES("3","CuÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€","2017-05-24 15:16:11","1","2017-06-06 14:38:29","");
INSERT INTO tbl_preguntas VALUES("4","Lugar de nacimiento de la madre ?","2017-07-24 15:18:31","1","2017-06-06 14:40:14","");
INSERT INTO tbl_preguntas VALUES("5","Mejor amigo(a) de la infancia ?","2017-07-24 15:18:53","1","2017-06-06 14:40:06","1");
INSERT INTO tbl_preguntas VALUES("6","Nombre de la primera mascota ?","2017-07-24 15:19:13","1","2017-06-06 14:39:58","");
INSERT INTO tbl_preguntas VALUES("7","OcupaciÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ","2017-07-24 15:19:27","1","2017-06-06 14:39:52","");
INSERT INTO tbl_preguntas VALUES("8","Personaje histÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã","2017-07-24 15:19:51","1","2017-06-06 14:39:46","");
INSERT INTO tbl_preguntas VALUES("9","Profesor Favorito ?","2017-07-24 15:20:16","1","2017-06-06 14:39:31","");
INSERT INTO tbl_preguntas VALUES("10","Nombre de su pelÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ","2017-07-24 15:20:36","1","2017-06-06 14:39:36","");
INSERT INTO tbl_preguntas VALUES("11","Modelo de su primer auto ?","2017-07-24 15:21:31","1","2017-06-06 14:39:17","");
INSERT INTO tbl_preguntas VALUES("12","Evento que marcÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’","2017-07-24 15:23:11","1","2017-06-06 14:39:04","");
INSERT INTO tbl_preguntas VALUES("13","Fecha de Nacimiento??","2017-10-21 11:49:26","1","2017-06-06 14:39:12","");



DROP TABLE IF EXISTS tbl_proservicios;

CREATE TABLE `tbl_proservicios` (
  `id_servicio` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tipo` bigint(20) NOT NULL,
  `id_compra` bigint(20) DEFAULT NULL,
  `nom_servicio` varchar(30) NOT NULL,
  `tip_servicio` varchar(30) NOT NULL,
  `can_producto` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `id_tipo` (`id_tipo`),
  KEY `id_compra` (`id_compra`),
  CONSTRAINT `tbl_proservicios_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tbl_tiposervicios` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_proservicios_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `tbl_compras` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO tbl_proservicios VALUES("2","1","2","cirugia","medico","","5000");



DROP TABLE IF EXISTS tbl_proveedores;

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(50) NOT NULL,
  `num_tel1` bigint(20) NOT NULL,
  `num_tel2` bigint(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `RTN` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `representante` varchar(30) NOT NULL,
  `cor_empresa` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO tbl_proveedores VALUES("1","JUAN PABLOA","22345676","98675875","Los Robles quin","022345674","independiente","PEDRO","juan@yahoo.com","2017-09-18 22:14:24","2017-09-18 22:14:24");



DROP TABLE IF EXISTS tbl_reservaciones;

CREATE TABLE `tbl_reservaciones` (
  `id_reservacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_cliente` bigint(20) NOT NULL,
  `tip_cita` varchar(30) NOT NULL,
  `fec_cita` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_reservacion`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `tbl_reservaciones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_respuestas;

CREATE TABLE `tbl_respuestas` (
  `id_usuario` bigint(20) NOT NULL,
  `id_pregunta` bigint(20) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tbl_respuestas VALUES("1","1","hola","2017-06-28 12:06:04");
INSERT INTO tbl_respuestas VALUES("35","1","hola","2017-06-28 12:27:17");
INSERT INTO tbl_respuestas VALUES("21","2","rojo","2017-06-28 12:31:17");
INSERT INTO tbl_respuestas VALUES("21","1","1992","2017-06-28 12:31:21");
INSERT INTO tbl_respuestas VALUES("35","2","rojo","2017-06-28 12:32:16");
INSERT INTO tbl_respuestas VALUES("40","1","aki","2017-06-28 13:02:24");
INSERT INTO tbl_respuestas VALUES("40","2","rojo","2017-06-28 13:02:28");
INSERT INTO tbl_respuestas VALUES("1","8","nose","2017-06-28 13:04:44");
INSERT INTO tbl_respuestas VALUES("1","5","yo","2017-06-28 13:04:51");
INSERT INTO tbl_respuestas VALUES("41","2","rojo","2017-06-28 13:10:49");
INSERT INTO tbl_respuestas VALUES("41","1","26 febrero 2017","2017-06-28 13:11:00");
INSERT INTO tbl_respuestas VALUES("35","9","yo","2017-07-01 14:42:15");
INSERT INTO tbl_respuestas VALUES("35","3","astronauta","2017-07-01 14:42:23");
INSERT INTO tbl_respuestas VALUES("49","1","20 de enero","2017-09-21 00:22:39");
INSERT INTO tbl_respuestas VALUES("49","2","NEGRO","2017-09-21 00:22:48");



DROP TABLE IF EXISTS tbl_roles;

CREATE TABLE `tbl_roles` (
  `id_rol` bigint(20) NOT NULL AUTO_INCREMENT,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tbl_roles VALUES("1","Administrador","Administrador Del Aplicativo","2017-05-24 14:38:02","1","2017-06-22 13:53:24","");
INSERT INTO tbl_roles VALUES("2","Doctor","Doctor ","2017-05-24 15:44:30","1","2017-06-22 13:53:34","");
INSERT INTO tbl_roles VALUES("3","Secretaria","Secretaria del Doctor","2017-07-24 15:53:02","1","2017-06-22 13:53:44","1");
INSERT INTO tbl_roles VALUES("4","asistente","asistente","2017-05-08 13:43:26","1","2017-06-22 13:53:59","");
INSERT INTO tbl_roles VALUES("5","NUEVO","NUEVO","2017-09-18 21:33:16","","2017-09-18 21:33:59","");



DROP TABLE IF EXISTS tbl_roles_objeto;

CREATE TABLE `tbl_roles_objeto` (
  `id_permiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_rol` bigint(20) NOT NULL,
  `id_objeto` bigint(20) NOT NULL,
  `permiso_consulta` char(1) NOT NULL,
  `permiso_insercion` varchar(2) NOT NULL,
  `permiso_eliminacion` varchar(2) NOT NULL,
  `permiso_actualizacion` varchar(2) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) DEFAULT NULL,
  `contador` bigint(20) NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO tbl_roles_objeto VALUES("2","2","2","s","s","n","s","2017-10-14 19:29:51","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("4","2","2","s","s","n","s","2017-10-14 19:32:40","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("5","2","2","s","s","n","s","2017-10-14 19:33:28","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("6","2","2","s","s","n","s","2017-10-14 19:34:09","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("7","4","3","s","s","s","s","2017-10-14 19:48:09","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("8","2","15","s","n","s","s","2017-10-14 19:49:36","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("9","2","15","s","n","s","s","2017-10-14 19:51:10","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("10","2","15","s","n","s","s","2017-10-14 19:54:25","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("11","2","15","s","n","s","s","2017-10-14 19:54:34","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("12","2","15","s","n","s","s","2017-10-14 19:55:07","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("13","2","15","s","n","s","s","2017-10-14 19:55:55","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("14","2","15","s","n","s","s","2017-10-14 19:56:48","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("15","2","15","s","n","s","s","2017-10-14 19:57:27","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("16","2","15","s","n","s","s","2017-10-14 21:51:32","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("17","2","15","s","n","s","s","2017-10-14 21:57:38","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("18","2","15","s","n","s","s","2017-10-14 21:59:07","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("19","2","15","s","n","s","s","2017-10-14 22:00:07","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("20","2","15","s","1","s","s","2017-10-14 22:01:02","luisa","2017-10-14 22:15:36","","0");
INSERT INTO tbl_roles_objeto VALUES("21","1","2","n","n","n","n","2017-10-14 23:36:42","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("22","1","3","n","s","n","n","2017-10-14 23:48:30","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("23","4","4","s","s","n","s","2017-10-14 23:48:43","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("24","3","3","1","1","1","1","2017-10-14 23:54:29","luisa","2017-10-15 02:22:17","","0");
INSERT INTO tbl_roles_objeto VALUES("25","3","2","1","1","1","0","2017-10-15 00:02:27","luisa","2017-10-15 02:22:34","","0");
INSERT INTO tbl_roles_objeto VALUES("26","5","3","1","0","0","0","2017-10-15 00:02:47","luisa","2017-10-15 02:40:21","","0");
INSERT INTO tbl_roles_objeto VALUES("31","5","3","1","1","0","0","2017-10-15 11:38:30","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("32","1","1","1","1","0","0","2017-10-17 17:33:41","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("38","2","3","1","1","0","0","2017-10-18 00:02:26","luisa","0000-00-00 00:00:00","","0");
INSERT INTO tbl_roles_objeto VALUES("39","1","7","1","1","0","0","2017-10-19 18:32:45","luisa","2017-10-19 18:37:18","","0");
INSERT INTO tbl_roles_objeto VALUES("40","1","8","1","1","1","1","2017-10-19 18:39:19","luisa","0000-00-00 00:00:00","","0");



DROP TABLE IF EXISTS tbl_tipopagos;

CREATE TABLE `tbl_tipopagos` (
  `id_pago` bigint(20) NOT NULL AUTO_INCREMENT,
  `tip_pago` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_tiposervicios;

CREATE TABLE `tbl_tiposervicios` (
  `id_tipo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO tbl_tiposervicios VALUES("1","FARMACIA","FARMACIA","2017-09-18 23:19:27");
INSERT INTO tbl_tiposervicios VALUES("2","MEDICO","TRATAMIENTO MEDICO ESPECIALIZADO","2017-09-18 23:22:14");
INSERT INTO tbl_tiposervicios VALUES("3","PELUQUERIA","SERVICIO DE PELUQUERIA PARA LAS MASCOTAS","2017-09-30 16:45:06");



DROP TABLE IF EXISTS tbl_tipvacunas;

CREATE TABLE `tbl_tipvacunas` (
  `id_tipovacuna` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_tipovacuna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO tbl_tipvacunas VALUES("1","rabia","hahha");



DROP TABLE IF EXISTS tbl_usuario;

CREATE TABLE `tbl_usuario` (
  `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_rol` bigint(20) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `nombre_usuario` varchar(70) NOT NULL,
  `estado_usuario` varchar(100) NOT NULL,
  `activacion` int(11) DEFAULT NULL,
  `contrasena` varchar(200) NOT NULL,
  `intentos` varchar(60) DEFAULT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT NULL,
  `ultima_conexion` datetime DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT CURRENT_TIMESTAMP,
  `correo_electronico` varchar(80) DEFAULT NULL,
  `fecha_modificacion` datetime DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) DEFAULT NULL,
  `dias_expirado` int(3) DEFAULT NULL,
  `fecha_expira` date DEFAULT NULL,
  `fecha_cambio_contrasena` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

INSERT INTO tbl_usuario VALUES("1","1","USER","ANA LUISA AGUILAR","ACTIVO","1","$2y$10$c2gFnZjifO44hEsL1y9mrOfUEkNIZlH4a6V30Xxi8RKRGtTbk9XKW","1","","0","2017-06-28 13:04:28","2015-07-24 14:40:46","a","2017-07-01 01:11:12","","0","0000-00-00","2016-05-15");
INSERT INTO tbl_usuario VALUES("6","2","LUISA","LUISAFU","ACTIVO","1","44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=","0","","0","0000-00-00 00:00:00","2017-05-31 00:00:00","anso@hotmail.com","2017-06-22 13:48:56","","0","2017-06-30","0000-00-00");
INSERT INTO tbl_usuario VALUES("7","3","FIBI","FREE","ACTIVO","1","44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=","2","","0","0000-00-00 00:00:00","2017-05-31 00:00:00","ss","2017-06-22 13:49:08","","0","2017-06-30","0000-00-00");
INSERT INTO tbl_usuario VALUES("9","2","AGUILAR","FIBI","Inactivo","0","-gUOU4Me","","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","axx","2017-06-22 13:49:14","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("10","2","ELENA","ANA","Inactivo","0","44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=","","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","hola@hotmail.com","2017-06-03 14:00:37","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("11","2","KLK","KKL","BLOQUEADO","0","ola","0","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","olor@hotmail.com","2017-06-22 13:49:40","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("12","2","PAME","LOLO","BLOQUEADO","0","LOLO","","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","lelo@yahoo.es","2017-06-22 13:49:33","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("13","4","USUARIO","USUARIO","BLOQUEADO","0","polo","","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","polo@hotmail.com","2017-06-22 13:49:26","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("14","4","MIZU","OLO","Activo","0","a","","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","alaa@hotmail.com","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("15","1","ERLIN","ERE","BlOQUEADO","0","hol45%ANA","0","","0","0000-00-00 00:00:00","2017-06-01 00:00:00","hola@hotmail.com","2017-06-22 17:50:15","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("17","1","ANALIU","ANALUISA","BlOQUEADO","0","$2y$10$Opi.mFYaOeVb0rv.QlAjvuohkqry36yo34C1QTJrFFwwdvdZvUEvO","1","755a582f8f9beba77b346f8b6c8f184b","1","2017-06-10 01:00:23","2017-06-05 00:00:00","@hotmail.com","2017-06-27 09:56:40","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("18","1","BESTIE","BES","Nuevo","0","FYnH/Y9+RG0b1ulzlwahfAEOzm1M8iryaP6dT58EO0o=","","","0","0000-00-00 00:00:00","2017-06-06 00:00:00","m","2017-06-06 18:14:40","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("20","2","MAGI","ANA LUISA","Activo","1","$2y$10$WfL7DIh3HIOUrKkjp0gmzOUuTKaddo0KTMEqUqu602pUYv8JEGST2","0","","0","2017-06-07 14:02:38","2017-06-07 00:00:00","kirby_1888@hotmail.com","2017-06-07 16:07:18","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("21","1","YONY","YONYS","ACTIVO","1","$2y$10$NQsWBPcqFVmxtfuHfAtJyurfBwEJ5IShAfZ/ks2crgQM1YEzbsUz6","0","","0","2017-06-28 16:08:33","2017-06-08 00:00:00","yonyruiz1988@gmail.com","2017-06-28 16:08:33","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("22","0","gomez","lorely","Bloqueado","0","$2y$10$fJF441xITBwRlYEQJWr8v.6Xyk0ewmqQOe4PZVs0BpR0sdSeglv1O","","","0","0000-00-00 00:00:00","2017-06-21 16:11:49","samos@hotmail.com","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("23","1","MARIX","MARIANITO","Activo","0","$2y$10$LxwM1iJMKsW8rOWxcV5cZ.F4.QHuA9DYAQtHczdCSKBayQFgy83q6","","","0","0000-00-00 00:00:00","2017-06-21 16:14:06","purkissss@gmail.com","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("24","1","KING","KING","Activo","0","$2y$10$WiS.auSUjJCnnxmG4YlPvu9FRdmsIFrjM8ON5FVpuPIsYNgFt2X4G","","","0","0000-00-00 00:00:00","2017-06-21 16:17:21","purkiss34s@gmail.com","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("25","2","KIRX","ARIEL","Inactivo","0","$2y$10$anyMOxVeKwgceLtKJBNNaOEtFGDobPvb3UJQmR4r2aoeo7ILQVUUW","","","0","0000-00-00 00:00:00","2017-06-21 16:18:39","KIRBY98@HOTMAIL.COM","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("27","1","ARIELX","ARIELYN","ACTIVO","1","$2y$10$/ckKVNFz.zobUDdFxMcznegJKMYMjN9oEWldGC36fMULaD0Plds8G","","","0","0000-00-00 00:00:00","2017-06-21 16:25:44","kirby1823@gmail.com","2017-06-22 13:59:12","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("28","2","GATO","RESENTIDA","NUEVO","1","$2y$10$5K.szxejpI70WhBV28EJD.RyR1/qNHIoNElfSZcsnXZ1UcWeo3wpK","","","0","0000-00-00 00:00:00","2017-06-22 00:00:00","alizlanxa@yahoo.es","0000-00-00 00:00:00","","0","2017-07-22","0000-00-00");
INSERT INTO tbl_usuario VALUES("29","2","LEMER","ELMER","NUEVO","1","$2y$10$g58kbNvWni5BpQHu2LjtE.XBEWj5hJnQlJchjvftGDD79ExF56gou","","47e31a840523af4b6ee2d06a41106bc1","1","0000-00-00 00:00:00","2017-06-22 00:00:00","iam_dontpunk15@hotmail.com","2017-06-21 17:35:26","","0","2017-07-22","0000-00-00");
INSERT INTO tbl_usuario VALUES("30","2","MAYTE","MATIAS","ACTIVO","1","$2y$10$T5QjB5E0bMDdapvy27nN..J3x7Jpprl3FtT9du6fmuDu/uELuX5oa","","","0","0000-00-00 00:00:00","2017-06-22 00:00:00","myate@hotmail.com","2017-06-28 02:05:52","","0","2017-07-22","0000-00-00");
INSERT INTO tbl_usuario VALUES("31","1","KIxxxx","arielx","ACTIVO","1","$2y$10$WZcpeE9w4pDP2BAk1nMs2eVK9tNl5pTWBp5HTGwOrsxG.MdrtyJdy","","","0","0000-00-00 00:00:00","2017-06-21 18:47:19","kilin@hotmail.com","2017-06-28 02:55:27","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("35","1","ADMIN","ANSLUISA","ACTIVO","1","$2y$10$u3QAWo.qIw6EZ8BkNNcopOQABsvDaWgqFTbqdhTwDzE3nshQjsP4O","0","","0","2017-07-01 00:55:08","2017-06-27 00:00:00","ansluisa@hotmail.com","2017-10-20 01:43:05","","0","2017-07-27","2017-10-20");
INSERT INTO tbl_usuario VALUES("36","1","HARRYSON","MARIANUS","ACTIVO","1","$2y$10$WvpagydZJcKFYOX7OkMGF.FALs1BtuktOSBcLpmf3PLPvPWsyHZ4K","0","","0","0000-00-00 00:00:00","2017-06-28 00:00:00","alizson@hotmail.com","2017-06-28 02:00:17","","0","2017-07-28","0000-00-00");
INSERT INTO tbl_usuario VALUES("37","2","nomsk","nombre","ACTIVO","1","$2y$10$/RMP.2BfSenfN0TPFLZK.uhYKtfDjWlDNOfupE7Lxi58CY5/HrHVK","","","0","0000-00-00 00:00:00","2017-06-28 02:01:39","user@gmail.com","2017-06-28 03:14:02","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("38","2","loaks","hola","ACTIVO","1","$2y$10$hW.fjLdei.DQUDZkIL./.uNTOhG74xewkAF0NzIWq39sseezdJ39q","","","0","0000-00-00 00:00:00","2017-06-28 03:20:13","usejkjkr@gmail.com","2017-06-28 03:23:45","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("39","1","ASKFM","ASK","NUEVO","1","$2y$10$rtLAAlBgiY3ifIG0sfDWZe3.DxEzQiI2adqumo4b9vysD0sYTeoO6","","","0","0000-00-00 00:00:00","2017-06-28 00:00:00","ajsk@hotmail.com","0000-00-00 00:00:00","","0","2017-07-28","0000-00-00");
INSERT INTO tbl_usuario VALUES("40","2","MECHES","MARIAMERCEDES","ACTIVO","1","$2y$10$VwdgBNrxlBcYXilj5gCg3e9jhfX52bCrDbNHeArtbX7e2/qdZNZUu","0","","0","2017-06-28 12:42:30","2017-06-28 00:00:00","askdoe@hotmail.com","2017-06-28 13:02:28","","0","2017-07-28","0000-00-00");
INSERT INTO tbl_usuario VALUES("41","2","ERAMOS","ELMER RAMOS","ACTIVO","1","$2y$10$QVtkjND4Vu4CAN8crp4XiOhm1EaFXJWZ/AcQF8ZBgQ0ex8A7iT8SW","0","","0","2017-06-28 15:03:43","2017-06-28 00:00:00","holagngngnrh@gmail.com","2017-06-28 15:03:43","","0","2017-07-28","0000-00-00");
INSERT INTO tbl_usuario VALUES("42","3","sadly","sad","Activo","0","$2y$10$RQy/JTFh1K7SnZzJW8DxJOTYRqvLIsAVTTrVsPwoZZHEa1DDQELFm","","","0","0000-00-00 00:00:00","2017-06-29 16:31:23","sadlro@ho","0000-00-00 00:00:00","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("43","3","KKK","LOQWEW","ACTIVO","1","$2y$10$4r3wGJeuHjxbtn52uH2Bq.PPFfjksektcp9KQDnrVr7861SpUEjBq","","","0","0000-00-00 00:00:00","2017-06-29 16:35:05","jeklro@ho","2017-10-09 18:09:15","","0","0000-00-00","0000-00-00");
INSERT INTO tbl_usuario VALUES("44","5","KIRBY","KIRBY","NUEVO","1","$2y$10$ZCm1K/eYR1BVAe0p0cMwVO3aFH0qpXFBNayPVYfW..3WujY3G.9li","0","","0","0000-00-00 00:00:00","2017-10-20 01:48:10","kirbumaster182@hotmail.com","2017-10-20 01:49:40","","0","0000-00-00","2017-10-20");



DROP TABLE IF EXISTS tbl_vacunas;

CREATE TABLE `tbl_vacunas` (
  `id_vacuna` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_mascota` bigint(20) NOT NULL,
  `id_tipovacuna` bigint(20) NOT NULL,
  `ccml` decimal(18,2) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `aplicada` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `proxima` date NOT NULL,
  PRIMARY KEY (`id_vacuna`),
  KEY `id_mascota` (`id_mascota`),
  KEY `id_tipovacuna` (`id_tipovacuna`),
  CONSTRAINT `tbl_vacunas_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `tbl_mascotas` (`id_mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_vacunas_ibfk_2` FOREIGN KEY (`id_tipovacuna`) REFERENCES `tbl_tipvacunas` (`id_tipovacuna`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO tbl_vacunas VALUES("1","2","1","56.00","kjsdhfjhf","2017-10-19 18:04:16","2017-10-11");



DROP TABLE IF EXISTS tmp;

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id_tmp`)
) ENGINE=MyISAM AUTO_INCREMENT=283 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO tmp VALUES("29","1","11","40.00","2o77qvpq8mqgij4hii8me17fq2","2017-10-06 01:30:07","0");
INSERT INTO tmp VALUES("28","1","2","20.00","6s800j0abc0tch4dapbeagqr40","2017-10-06 01:30:07","0");
INSERT INTO tmp VALUES("18","1","3","20.00","9i6v4nmn7qssbnjjksh415gjk1","2017-10-06 01:30:07","0");
INSERT INTO tmp VALUES("198","2","1","122.00","","2017-10-06 02:22:15","0");
INSERT INTO tmp VALUES("197","2","1","122.00","","2017-10-06 02:13:02","0");
INSERT INTO tmp VALUES("196","2","1","122.00","","2017-10-06 02:10:39","0");
INSERT INTO tmp VALUES("195","2","1","122.00","","2017-10-06 02:09:58","0");
INSERT INTO tmp VALUES("194","2","1","122.00","","2017-10-06 02:09:57","0");
INSERT INTO tmp VALUES("193","2","1","122.00","","2017-10-06 02:09:57","0");
INSERT INTO tmp VALUES("192","4","1","1.00","","2017-10-06 02:08:59","0");
INSERT INTO tmp VALUES("199","2","1","122.00","","2017-10-06 03:48:48","0");
INSERT INTO tmp VALUES("200","2","1","122.00","","2017-10-07 10:22:47","0");
INSERT INTO tmp VALUES("277","1","1","20.00","29sojrmc2rmqr2svjmde3ub101","2017-10-20 22:49:04","0");
INSERT INTO tmp VALUES("280","1","1","20.00","29sojrmc2rmqr2svjmde3ub101","2017-10-20 22:55:16","0");
INSERT INTO tmp VALUES("281","1","1","20.00","29sojrmc2rmqr2svjmde3ub101","2017-10-20 22:56:00","0");



DROP TABLE IF EXISTS transaccion_medicamentos;

CREATE TABLE `transaccion_medicamentos` (
  `codigo_transaccion` varchar(15) NOT NULL,
  `no` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `codigo` varchar(7) NOT NULL,
  `numero` int(11) NOT NULL,
  `created_user` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo_transaccion` varchar(50) NOT NULL,
  `id_proveedor` bigint(20) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `id_barang` (`codigo`),
  KEY `created_user` (`created_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO transaccion_medicamentos VALUES("TM-2017-0000001","1","2017-07-26","B000362","5","1","2017-10-05 08:42:47","Entrada","0","0");
INSERT INTO transaccion_medicamentos VALUES("TM-2017-0000002","2","2017-07-26","B000363","10","1","2017-10-05 08:44:31","Entrada","0","0");
INSERT INTO transaccion_medicamentos VALUES("TM-2017-0000003","3","2017-07-26","B000364","5","1","2017-10-05 08:48:28","Salida","0","0");



SET FOREIGN_KEY_CHECKS=1;