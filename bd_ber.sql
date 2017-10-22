-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2017 a las 01:01:39
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_ber`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_pregunta` bigint(20) DEFAULT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `respuesta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacoras`
--

CREATE TABLE `tbl_bitacoras` (
  `id_bitacora` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `accion` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_bitacoras`
--

INSERT INTO `tbl_bitacoras` (`id_bitacora`, `id_usuario`, `objeto`, `accion`, `descripcion`, `fecha`) VALUES
(1, 39, 'tbl_usuario', 'INSERTAR', '', '2017-06-28 08:01:18'),
(2, 40, 'tbl_usuario', 'INSERTAR', '', '2017-06-28 12:42:08'),
(3, 41, 'tbl_usuario', 'INSERTAR', '', '2017-06-28 13:10:20'),
(4, 35, 'tbl_usuario', 'INSERT', '', '2017-06-29 16:31:23'),
(5, 35, 'tbl_usuario', 'INSERT', '', '2017-06-29 16:35:05'),
(6, 35, 'tbl_usuario', 'DELETE', '', '2017-06-30 22:57:21'),
(7, 35, 'tbl_usuario', 'DELETE', '', '2017-06-30 22:58:48'),
(8, 35, 'tbl_usuario', 'UPDATE', '', '2017-06-30 23:01:17'),
(9, 35, 'tbl_usuario', 'UPDATE', '', '2017-06-30 23:31:35'),
(10, 49, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 21:29:18'),
(11, 49, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:29:37'),
(12, 49, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 21:29:50'),
(13, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:36:52'),
(14, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 21:36:57'),
(15, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 21:37:35'),
(16, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:37:43'),
(17, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:37:50'),
(18, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:37:59'),
(19, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 21:38:16'),
(20, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 21:58:26'),
(21, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 23:20:49'),
(22, 21, 'tbl_tiposervicios', 'UPDATE', 'UPDATE tbl_tiposervicios SET nombre=\'INYECCION\', descripcion=\'APLICACION DE VACUNA\' WHERE id_tipo=\'1\'', '2017-09-18 23:21:21'),
(23, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 23:36:15'),
(24, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-18 23:42:31'),
(25, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-18 23:42:49'),
(26, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 22:42:18'),
(27, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 22:42:58'),
(28, 49, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-20 23:41:24'),
(29, 49, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-20 23:49:59'),
(30, 49, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:22:28'),
(31, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:23:10'),
(32, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:23:51'),
(33, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:31:16'),
(34, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:32:44'),
(35, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:33:50'),
(36, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:33:53'),
(37, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:34:05'),
(38, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:34:20'),
(39, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:34:24'),
(40, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:36:22'),
(41, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:21'),
(42, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:22'),
(43, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:23'),
(44, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:23'),
(45, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:23'),
(46, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:23'),
(47, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:24'),
(48, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:24'),
(49, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:24'),
(50, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:24'),
(51, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:24'),
(52, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:25'),
(53, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:26'),
(54, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:26'),
(55, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:26'),
(56, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:38:26'),
(57, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:07'),
(58, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:09'),
(59, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:09'),
(60, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:09'),
(61, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:10'),
(62, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:10'),
(63, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:39:12'),
(64, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:17'),
(65, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:39:22'),
(66, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:39:26'),
(67, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:21'),
(68, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:22'),
(69, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:23'),
(70, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:23'),
(71, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:23'),
(72, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:40:24'),
(73, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:41:03'),
(74, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:41:05'),
(75, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:41:08'),
(76, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:41:51'),
(77, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:42:33'),
(78, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:42:34'),
(79, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:00'),
(80, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:01'),
(81, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:02'),
(82, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:44:08'),
(83, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 00:44:17'),
(84, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:20'),
(85, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:29'),
(86, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:32'),
(87, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:34'),
(88, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 00:44:37'),
(89, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 01:01:37'),
(90, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 01:01:41'),
(91, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 01:03:58'),
(92, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 01:04:00'),
(93, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 01:20:53'),
(94, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 18:02:16'),
(95, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 18:02:36'),
(96, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 18:02:46'),
(97, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 18:08:24'),
(98, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 18:24:22'),
(99, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$GhXNHRGiTrzNlN6rM0pgh', '2017-09-21 18:25:58'),
(100, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'', '2017-09-21 18:26:23'),
(101, 45, 'tbl_usuario', 'INSERTAR', 'insert into tbl_usuario (nombre_usuario,usuario,contrasena,correo_electronico,estado_usuario,id_rol, fecha_creacion,activacion,fecha_cambio_contrasena) values(\'HOLA\', \'HOLA\',\'$2y$10$gLQVPXzxHVz5Rb.dEp', '2017-09-21 18:27:20'),
(102, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:42:39'),
(103, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:42:43'),
(104, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'45\'', '2017-09-21 21:43:00'),
(105, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:43:13'),
(106, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:43:25'),
(107, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:44:08'),
(108, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:53:18'),
(109, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:53:20'),
(110, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:53:21'),
(111, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:53:23'),
(112, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:53:37'),
(113, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:54:01'),
(114, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:54:10'),
(115, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:54:24'),
(116, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 21:58:11'),
(117, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:58:14'),
(118, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:58:18'),
(119, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:58:20'),
(120, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 21:58:23'),
(121, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:02:13'),
(122, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 22:02:24'),
(123, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:06:32'),
(124, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:06:38'),
(125, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:06:43'),
(126, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:06:47'),
(127, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 22:13:17'),
(128, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 23:24:21'),
(129, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-21 23:24:28'),
(130, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 23:24:33'),
(131, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-21 23:25:52'),
(132, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$qxYpxhCZuPPU97VrzZeio', '2017-09-21 23:26:38'),
(133, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'46\'', '2017-09-21 23:26:49'),
(134, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-22 22:33:28'),
(135, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-22 22:33:29'),
(136, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-23 00:42:21'),
(137, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-23 00:42:25'),
(138, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-23 00:42:47'),
(139, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-23 00:42:50'),
(140, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-23 00:44:06'),
(141, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-23 00:48:09'),
(142, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-23 23:01:01'),
(143, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-24 12:16:24'),
(144, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$nWQ28oY66sxVz.kCqZR1k', '2017-09-24 12:20:49'),
(145, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'47\'', '2017-09-24 12:20:56'),
(146, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-24 12:22:13'),
(147, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-24 12:22:14'),
(148, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-24 12:22:15'),
(149, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$rabfK.voKZDQ6z5HcgFQO', '2017-09-24 12:23:08'),
(150, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'48\'', '2017-09-24 12:23:22'),
(151, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 14:39:25'),
(152, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 15:00:07'),
(153, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 15:02:54'),
(154, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 15:03:17'),
(155, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 15:07:38'),
(156, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-24 15:07:58'),
(157, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 15:36:16'),
(158, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-24 16:22:24'),
(159, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-28 23:57:44'),
(160, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-29 01:11:13'),
(161, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-29 01:12:42'),
(162, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-29 01:15:02'),
(163, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-29 01:15:02'),
(164, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-29 01:15:03'),
(165, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-30 01:24:07'),
(166, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-30 16:13:25'),
(167, 21, 'pantalla usuarios', 'INGRESO', 'ingreso a pantalla usuarios', '2017-09-30 16:13:28'),
(168, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$JyYhY6kxP4Ncx1e1Lz5xl', '2017-09-30 16:15:05'),
(169, 21, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'', '2017-09-30 16:15:23'),
(170, 21, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values(\'HOLA\', \'HOLA\', \'5\',\'NUEVO\',\'$2y$10$AD.uBEhc/8TJ3IsyBLd4E', '2017-09-30 16:15:33'),
(171, 21, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'HOLANNM\', usuario=\'HOLA\', id_rol=\'5\', correo_electronico=\'hola@hola.com\', estado_usuario=\'\', activacion= \'0\' WHERE id_usuario=\'45\'', '2017-09-30 16:15:41'),
(172, 21, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'HOLANNM\', usuario=\'HOLA\', id_rol=\'5\', correo_electronico=\'hola@hola.com\', estado_usuario=\'INACTIVO\', activacion= \'0\' WHERE id_usuario=\'45\'', '2017-09-30 16:15:45'),
(173, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-30 16:18:33'),
(174, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-30 16:44:42'),
(175, 21, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-30 16:45:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` bigint(20) NOT NULL,
  `identidad` varchar(14) NOT NULL,
  `nom_cliente` varchar(50) NOT NULL,
  `ape_cliente` varchar(50) NOT NULL,
  `celular` bigint(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `membresia` varchar(20) DEFAULT NULL,
  `cor_cliente` varchar(50) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `identidad`, `nom_cliente`, `ape_cliente`, `celular`, `telefono`, `direccion`, `membresia`, `cor_cliente`, `fecha_registro`, `usr_registro`) VALUES
(1, '2147483647', 'pedro angel', 'pedro', 99678765, 22345654, 'El Loarque', 'si', 'pedro@yahhoo.com', '2017-09-18 22:29:28', '2017-09-18 22:29:28'),
(2, '2147483647', 'ana', 'sjs', 99004567, 22345678, 'sjsks', '', 'nsmsn@hotmail.com', '2017-09-30 16:18:16', '2017-09-30 16:18:16'),
(3, '0801199222062', 'ANAD', 'SJS', 99004567, 22345678, 'sjsks', '', 'nsmsn@hotmail.com', '2017-09-30 16:19:43', '2017-09-30 16:19:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_compras`
--

CREATE TABLE `tbl_compras` (
  `id_compra` bigint(20) NOT NULL,
  `id_proveedor` bigint(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_entrega` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_compras`
--

INSERT INTO `tbl_compras` (`id_compra`, `id_proveedor`, `descripcion`, `cantidad`, `precio`, `total`, `fecha_registro`, `fecha_entrega`) VALUES
(2, 1, 'Inyeccion', '100', '50', '50000', '2017-09-18 00:00:00', '2017-09-19 00:00:00'),
(3, 1, 'penicilina', '20', '50', '1000', '2017-09-21 00:00:00', '2017-09-22 00:00:00'),
(4, 1, 'anestecia', '10', '20', '200', '2017-09-21 00:00:00', '2017-09-22 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consultas`
--

CREATE TABLE `tbl_consultas` (
  `id_consulta` bigint(20) NOT NULL,
  `id_preclinica` bigint(20) NOT NULL,
  `sintomas` varchar(200) NOT NULL,
  `tratamiento` varchar(200) DEFAULT NULL,
  `dieta` varchar(200) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consultaservicios`
--

CREATE TABLE `tbl_consultaservicios` (
  `id_consulservi` bigint(20) NOT NULL,
  `id_servicio` bigint(20) NOT NULL,
  `id_consulta` bigint(20) NOT NULL,
  `id_cliente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detafacturas`
--

CREATE TABLE `tbl_detafacturas` (
  `id_detafac` bigint(20) NOT NULL,
  `id_consulservi` bigint(20) NOT NULL,
  `monto_producto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleados`
--

CREATE TABLE `tbl_empleados` (
  `id_empleado` bigint(20) NOT NULL,
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
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `id_factura` bigint(20) NOT NULL,
  `id_detafac` bigint(20) NOT NULL,
  `id_pago` bigint(20) NOT NULL,
  `NO_Factura` bigint(20) NOT NULL,
  `cantidad` varchar(30) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `descuento` varchar(20) NOT NULL,
  `ISV` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_kerders`
--

CREATE TABLE `tbl_kerders` (
  `id_kerder` bigint(20) NOT NULL,
  `id_servicio` bigint(20) NOT NULL,
  `id_compra` bigint(20) NOT NULL,
  `tip_producto` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `cantidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mascotas`
--

CREATE TABLE `tbl_mascotas` (
  `id_mascota` bigint(20) NOT NULL,
  `id_cliente` bigint(20) NOT NULL,
  `nom_mascota` varchar(30) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `raza` varchar(20) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacimiento` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_mascotas`
--

INSERT INTO `tbl_mascotas` (`id_mascota`, `id_cliente`, `nom_mascota`, `especie`, `raza`, `sexo`, `nacimiento`, `descripcion`, `fecha_registro`) VALUES
(1, 3, 'fibi', 'gato', 'angora', 'f', '2017-09-22', 'sns', '2017-09-30 16:38:14'),
(2, 2, 'kasja', 'Ana', 'JS', 'M', '2017-09-29', 'JKJ', '2017-09-30 16:39:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos_pantallas`
--

CREATE TABLE `tbl_objetos_pantallas` (
  `id_objeto` bigint(20) NOT NULL,
  `objeto` varchar(60) NOT NULL,
  `tipo_objeto` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creaccion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `tbl_objetos_pantallas`
--
DELIMITER $$
CREATE TRIGGER `otras` AFTER INSERT ON `tbl_objetos_pantallas` FOR EACH ROW INSERT INTO tbl_bitacora (id_usuario ) VALUES (1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parametros`
--

CREATE TABLE `tbl_parametros` (
  `id_parametro` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_parametros`
--

INSERT INTO `tbl_parametros` (`id_parametro`, `nombre`, `descripcion`, `fecha_creacion`) VALUES
(1, 'vencimiento', '30', '0000-00-00 00:00:00'),
(2, 'Direccion de la Empresa', 'kslkd', '0000-00-00 00:00:00'),
(5, 'RTN', 'XXXXXXXXXXX', '0000-00-00 00:00:00'),
(6, 'ADMIN_CORREO', 'ansluisa@hotmail.com', '0000-00-00 00:00:00'),
(7, 'Nombre de la Empresa', 'bernardos veterynary', '0000-00-00 00:00:00'),
(8, 'intentos', '6', '0000-00-00 00:00:00'),
(9, 'preguntas', '2', '0000-00-00 00:00:00'),
(23, 'aaa@hoy.com', '5', '0000-00-00 00:00:00'),
(26, 'WJS', '5', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preclinicas`
--

CREATE TABLE `tbl_preclinicas` (
  `id_preclinica` bigint(20) NOT NULL,
  `id_mascota` bigint(20) NOT NULL,
  `peso` varchar(15) NOT NULL,
  `temperatura` varchar(15) DEFAULT NULL,
  `motivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` bigint(20) NOT NULL,
  `pregunta` varchar(70) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_preguntas`
--

INSERT INTO `tbl_preguntas` (`id_pregunta`, `pregunta`, `fecha_creacion`, `creado_por`, `fecha_modificacion`, `modificado_por`) VALUES
(1, 'Fecha de Nacimiento?', '2017-05-24 15:10:44', '1', '2017-06-06 14:38:11', '1'),
(2, 'Color Favorito ?', '2017-05-24 15:11:28', '1', '2017-06-06 14:38:21', '1'),
(3, 'CuÃ¡l serÃ­a tu trabajo ideal ?', '2017-05-24 15:16:11', '1', '2017-06-06 14:38:29', ''),
(4, 'Lugar de nacimiento de la madre ?', '2017-07-24 15:18:31', '1', '2017-06-06 14:40:14', ''),
(5, 'Mejor amigo(a) de la infancia ?', '2017-07-24 15:18:53', '1', '2017-06-06 14:40:06', '1'),
(6, 'Nombre de la primera mascota ?', '2017-07-24 15:19:13', '1', '2017-06-06 14:39:58', ''),
(7, 'OcupaciÃ³n del abuelo ?', '2017-07-24 15:19:27', '1', '2017-06-06 14:39:52', ''),
(8, 'Personaje histÃ³rico favorito ?', '2017-07-24 15:19:51', '1', '2017-06-06 14:39:46', ''),
(9, 'Profesor Favorito ?', '2017-07-24 15:20:16', '1', '2017-06-06 14:39:31', ''),
(10, 'Nombre de su pelÃ­cula favorita ?', '2017-07-24 15:20:36', '1', '2017-06-06 14:39:36', ''),
(11, 'Modelo de su primer auto ?', '2017-07-24 15:21:31', '1', '2017-06-06 14:39:17', ''),
(12, 'Evento que marcÃ³ su vida ?', '2017-07-24 15:23:11', '1', '2017-06-06 14:39:04', ''),
(13, 'Fecha de Nacimiento??', '2017-10-21 11:49:26', '1', '2017-06-06 14:39:12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proservicios`
--

CREATE TABLE `tbl_proservicios` (
  `id_servicio` bigint(20) NOT NULL,
  `id_tipo` bigint(20) NOT NULL,
  `id_compra` bigint(20) DEFAULT NULL,
  `nom_servicio` varchar(30) NOT NULL,
  `tip_servicio` varchar(30) NOT NULL,
  `can_producto` varchar(30) NOT NULL,
  `precio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_proservicios`
--

INSERT INTO `tbl_proservicios` (`id_servicio`, `id_tipo`, `id_compra`, `nom_servicio`, `tip_servicio`, `can_producto`, `precio`) VALUES
(2, 1, 2, 'cirugia', 'medico', '', '5000'),
(3, 2, NULL, 'HJH', '', '', '129');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

CREATE TABLE `tbl_proveedores` (
  `id_proveedor` bigint(20) NOT NULL,
  `nom_empresa` varchar(50) NOT NULL,
  `num_tel1` bigint(20) NOT NULL,
  `num_tel2` bigint(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `RTN` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `representante` varchar(30) NOT NULL,
  `cor_empresa` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_proveedores`
--

INSERT INTO `tbl_proveedores` (`id_proveedor`, `nom_empresa`, `num_tel1`, `num_tel2`, `direccion`, `RTN`, `tipo`, `representante`, `cor_empresa`, `fecha_registro`, `usr_registro`) VALUES
(1, 'JUAN PABLOA', 22345676, 98675875, 'Los Robles quin', '022345674', 'independiente', 'PEDRO', 'juan@yahoo.com', '2017-09-18 22:14:24', '2017-09-18 22:14:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reservaciones`
--

CREATE TABLE `tbl_reservaciones` (
  `id_reservacion` bigint(20) NOT NULL,
  `id_cliente` bigint(20) NOT NULL,
  `tip_cita` varchar(30) NOT NULL,
  `fec_cita` date NOT NULL,
  `hora` time NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_respuestas`
--

CREATE TABLE `tbl_respuestas` (
  `id_usuario` bigint(20) NOT NULL,
  `id_pregunta` bigint(20) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_respuestas`
--

INSERT INTO `tbl_respuestas` (`id_usuario`, `id_pregunta`, `respuesta`, `fecha_creacion`) VALUES
(1, 1, 'hola', '2017-06-28 18:06:04'),
(35, 1, 'hola', '2017-06-28 18:27:17'),
(21, 2, 'rojo', '2017-06-28 18:31:17'),
(21, 1, '1992', '2017-06-28 18:31:21'),
(35, 2, 'rojo', '2017-06-28 18:32:16'),
(40, 1, 'aki', '2017-06-28 19:02:24'),
(40, 2, 'rojo', '2017-06-28 19:02:28'),
(1, 8, 'nose', '2017-06-28 19:04:44'),
(1, 5, 'yo', '2017-06-28 19:04:51'),
(41, 2, 'rojo', '2017-06-28 19:10:49'),
(41, 1, '26 febrero 2017', '2017-06-28 19:11:00'),
(35, 9, 'yo', '2017-07-01 20:42:15'),
(35, 3, 'astronauta', '2017-07-01 20:42:23'),
(49, 1, '20 de enero', '2017-09-21 06:22:39'),
(49, 2, 'NEGRO', '2017-09-21 06:22:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_rol` bigint(20) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_rol`, `rol`, `descripcion`, `fecha_creacion`, `creado_por`, `fecha_modificacion`, `modificado_por`) VALUES
(1, 'Administrador', 'Administrador Del Aplicativo', '2017-05-24 14:38:02', '1', '2017-06-22 13:53:24', ''),
(2, 'Doctor', 'Doctor ', '2017-05-24 15:44:30', '1', '2017-06-22 13:53:34', ''),
(3, 'Secretaria', 'Secretaria del Doctor', '2017-07-24 15:53:02', '1', '2017-06-22 13:53:44', '1'),
(4, 'asistente', 'asistente', '2017-05-08 13:43:26', '1', '2017-06-22 13:53:59', ''),
(5, 'NUEVO', 'NUEVO', '2017-09-18 21:33:16', '', '2017-09-18 21:33:59', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles_objeto`
--

CREATE TABLE `tbl_roles_objeto` (
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
  `contador` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipopagos`
--

CREATE TABLE `tbl_tipopagos` (
  `id_pago` bigint(20) NOT NULL,
  `tip_pago` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tiposervicios`
--

CREATE TABLE `tbl_tiposervicios` (
  `id_tipo` bigint(20) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tiposervicios`
--

INSERT INTO `tbl_tiposervicios` (`id_tipo`, `nombre`, `descripcion`, `fecha_registro`) VALUES
(1, 'Cirugia', 'APLICACION DE VACUNA', '2017-09-18 23:19:27'),
(2, 'Consulta', 'OPERACION POR CAUSA DE HERIDA', '2017-09-18 23:22:14'),
(3, 'PELUQUERIA', 'AJA', '2017-09-30 16:45:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipvacunas`
--

CREATE TABLE `tbl_tipvacunas` (
  `id_tipovacuna` bigint(20) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` bigint(20) NOT NULL,
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
  `fecha_cambio_contrasena` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `id_rol`, `usuario`, `nombre_usuario`, `estado_usuario`, `activacion`, `contrasena`, `intentos`, `token_password`, `password_request`, `ultima_conexion`, `fecha_creacion`, `correo_electronico`, `fecha_modificacion`, `modificado_por`, `dias_expirado`, `fecha_expira`, `fecha_cambio_contrasena`) VALUES
(1, 1, 'USER', 'ANA LUISA AGUILAR', 'ACTIVO', 1, '$2y$10$c2gFnZjifO44hEsL1y9mrOfUEkNIZlH4a6V30Xxi8RKRGtTbk9XKW', '1', '', 0, '2017-06-28 13:04:28', '2015-07-24 14:40:46', 'a', '2017-07-01 01:11:12', '', 0, '0000-00-00', '2016-05-15'),
(6, 2, 'LUISA', 'LUISAFU', 'ACTIVO', 1, '44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=', '0', NULL, NULL, NULL, '2017-05-31 00:00:00', 'anso@hotmail.com', '2017-06-22 13:48:56', NULL, NULL, '2017-06-30', NULL),
(7, 3, 'FIBI', 'FREE', 'ACTIVO', 1, '44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=', '2', NULL, NULL, NULL, '2017-05-31 00:00:00', 'ss', '2017-06-22 13:49:08', NULL, NULL, '2017-06-30', NULL),
(9, 2, 'AGUILAR', 'FIBI', 'Inactivo', 0, '-gUOU4Me', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'axx', '2017-06-22 13:49:14', NULL, NULL, '0000-00-00', NULL),
(10, 2, 'ELENA', 'ANA', 'Inactivo', NULL, '44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'hola@hotmail.com', '2017-06-03 14:00:37', NULL, NULL, '0000-00-00', NULL),
(11, 2, 'KLK', 'KKL', 'BLOQUEADO', NULL, 'ola', '0', NULL, NULL, NULL, '2017-06-01 00:00:00', 'olor@hotmail.com', '2017-06-22 13:49:40', NULL, NULL, '0000-00-00', NULL),
(12, 2, 'PAME', 'LOLO', 'BLOQUEADO', NULL, 'LOLO', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'lelo@yahoo.es', '2017-06-22 13:49:33', NULL, NULL, '0000-00-00', NULL),
(13, 4, 'USUARIO', 'USUARIO', 'BLOQUEADO', NULL, 'polo', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'polo@hotmail.com', '2017-06-22 13:49:26', NULL, NULL, '0000-00-00', NULL),
(14, 4, 'MIZU', 'OLO', 'Activo', NULL, 'a', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'alaa@hotmail.com', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00', NULL),
(15, 1, 'ERLIN', 'ERE', 'BlOQUEADO', 0, 'hol45%ANA', '0', NULL, NULL, NULL, '2017-06-01 00:00:00', 'hola@hotmail.com', '2017-06-22 17:50:15', NULL, NULL, '0000-00-00', NULL),
(17, 1, 'ANALIU', 'ANALUISA', 'BlOQUEADO', 0, '$2y$10$Opi.mFYaOeVb0rv.QlAjvuohkqry36yo34C1QTJrFFwwdvdZvUEvO', '1', '755a582f8f9beba77b346f8b6c8f184b', 1, '2017-06-10 01:00:23', '2017-06-05 00:00:00', '@hotmail.com', '2017-06-27 09:56:40', NULL, NULL, '0000-00-00', NULL),
(18, 1, 'BESTIE', 'BES', 'Nuevo', NULL, 'FYnH/Y9+RG0b1ulzlwahfAEOzm1M8iryaP6dT58EO0o=', NULL, NULL, NULL, NULL, '2017-06-06 00:00:00', 'm', '2017-06-06 18:14:40', NULL, NULL, '0000-00-00', NULL),
(20, 2, 'MAGI', 'ANA LUISA', 'Activo', 1, '$2y$10$WfL7DIh3HIOUrKkjp0gmzOUuTKaddo0KTMEqUqu602pUYv8JEGST2', '0', '', 0, '2017-06-07 14:02:38', '2017-06-07 00:00:00', 'kirby_1888@hotmail.com', '2017-06-07 16:07:18', NULL, NULL, '0000-00-00', NULL),
(21, 1, 'YONY', 'YONYS', 'ACTIVO', 1, '$2y$10$NQsWBPcqFVmxtfuHfAtJyurfBwEJ5IShAfZ/ks2crgQM1YEzbsUz6', '0', '', 0, '2017-06-28 16:08:33', '2017-06-08 00:00:00', 'yonyruiz1988@gmail.com', '2017-06-28 16:08:33', NULL, NULL, '0000-00-00', NULL),
(22, 0, 'gomez', 'lorely', 'Bloqueado', NULL, '$2y$10$fJF441xITBwRlYEQJWr8v.6Xyk0ewmqQOe4PZVs0BpR0sdSeglv1O', NULL, NULL, NULL, NULL, '2017-06-21 16:11:49', 'samos@hotmail.com', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(23, 1, 'MARIX', 'MARIANITO', 'Activo', NULL, '$2y$10$LxwM1iJMKsW8rOWxcV5cZ.F4.QHuA9DYAQtHczdCSKBayQFgy83q6', NULL, NULL, NULL, NULL, '2017-06-21 16:14:06', 'purkissss@gmail.com', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(24, 1, 'KING', 'KING', 'Activo', NULL, '$2y$10$WiS.auSUjJCnnxmG4YlPvu9FRdmsIFrjM8ON5FVpuPIsYNgFt2X4G', NULL, NULL, NULL, NULL, '2017-06-21 16:17:21', 'purkiss34s@gmail.com', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(25, 2, 'KIRX', 'ARIEL', 'Inactivo', NULL, '$2y$10$anyMOxVeKwgceLtKJBNNaOEtFGDobPvb3UJQmR4r2aoeo7ILQVUUW', NULL, NULL, NULL, NULL, '2017-06-21 16:18:39', 'KIRBY98@HOTMAIL.COM', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(27, 1, 'ARIELX', 'ARIELYN', 'ACTIVO', 1, '$2y$10$/ckKVNFz.zobUDdFxMcznegJKMYMjN9oEWldGC36fMULaD0Plds8G', NULL, NULL, NULL, NULL, '2017-06-21 16:25:44', 'kirby1823@gmail.com', '2017-06-22 13:59:12', NULL, NULL, NULL, NULL),
(28, 2, 'GATO', 'RESENTIDA', 'NUEVO', 1, '$2y$10$5K.szxejpI70WhBV28EJD.RyR1/qNHIoNElfSZcsnXZ1UcWeo3wpK', NULL, NULL, NULL, NULL, '2017-06-22 00:00:00', 'alizlanxa@yahoo.es', '0000-00-00 00:00:00', NULL, NULL, '2017-07-22', NULL),
(29, 2, 'LEMER', 'ELMER', 'NUEVO', 1, '$2y$10$g58kbNvWni5BpQHu2LjtE.XBEWj5hJnQlJchjvftGDD79ExF56gou', NULL, '47e31a840523af4b6ee2d06a41106bc1', 1, NULL, '2017-06-22 00:00:00', 'iam_dontpunk15@hotmail.com', '2017-06-21 17:35:26', NULL, NULL, '2017-07-22', NULL),
(30, 2, 'MAYTE', 'MATIAS', 'ACTIVO', 1, '$2y$10$T5QjB5E0bMDdapvy27nN..J3x7Jpprl3FtT9du6fmuDu/uELuX5oa', NULL, NULL, NULL, NULL, '2017-06-22 00:00:00', 'myate@hotmail.com', '2017-06-28 02:05:52', NULL, NULL, '2017-07-22', NULL),
(31, 1, 'KIxxxx', 'arielx', 'ACTIVO', 1, '$2y$10$WZcpeE9w4pDP2BAk1nMs2eVK9tNl5pTWBp5HTGwOrsxG.MdrtyJdy', NULL, NULL, NULL, NULL, '2017-06-21 18:47:19', 'kilin@hotmail.com', '2017-06-28 02:55:27', NULL, NULL, NULL, NULL),
(35, 1, 'ADMIN', 'ANSLUISA', 'ACTIVO', 1, '$2y$10$fNb1uh7PovTORGL4inBft.ctpP5H5OwgtTmQs01hAHDb0C5XysEaS', '0', '', 0, '2017-07-01 00:55:08', '2017-06-27 00:00:00', 'ansluisa@hotmail.com', '2017-07-01 14:42:24', NULL, NULL, '2017-07-27', NULL),
(36, 1, 'HARRYSON', 'MARIANUS', 'ACTIVO', 1, '$2y$10$WvpagydZJcKFYOX7OkMGF.FALs1BtuktOSBcLpmf3PLPvPWsyHZ4K', '0', NULL, NULL, NULL, '2017-06-28 00:00:00', 'alizson@hotmail.com', '2017-06-28 02:00:17', NULL, NULL, '2017-07-28', NULL),
(37, 2, 'nomsk', 'nombre', 'ACTIVO', 1, '$2y$10$/RMP.2BfSenfN0TPFLZK.uhYKtfDjWlDNOfupE7Lxi58CY5/HrHVK', NULL, NULL, NULL, NULL, '2017-06-28 02:01:39', 'user@gmail.com', '2017-06-28 03:14:02', NULL, NULL, NULL, NULL),
(38, 2, 'loaks', 'hola', 'ACTIVO', 1, '$2y$10$hW.fjLdei.DQUDZkIL./.uNTOhG74xewkAF0NzIWq39sseezdJ39q', NULL, NULL, NULL, NULL, '2017-06-28 03:20:13', 'usejkjkr@gmail.com', '2017-06-28 03:23:45', NULL, NULL, NULL, NULL),
(39, 1, 'ASKFM', 'ASK', 'NUEVO', 1, '$2y$10$rtLAAlBgiY3ifIG0sfDWZe3.DxEzQiI2adqumo4b9vysD0sYTeoO6', NULL, NULL, NULL, NULL, '2017-06-28 00:00:00', 'ajsk@hotmail.com', '0000-00-00 00:00:00', NULL, NULL, '2017-07-28', NULL),
(40, 2, 'MECHES', 'MARIAMERCEDES', 'ACTIVO', 1, '$2y$10$VwdgBNrxlBcYXilj5gCg3e9jhfX52bCrDbNHeArtbX7e2/qdZNZUu', '0', '', 0, '2017-06-28 12:42:30', '2017-06-28 00:00:00', 'askdoe@hotmail.com', '2017-06-28 13:02:28', NULL, NULL, '2017-07-28', NULL),
(41, 2, 'ERAMOS', 'ELMER RAMOS', 'ACTIVO', 1, '$2y$10$QVtkjND4Vu4CAN8crp4XiOhm1EaFXJWZ/AcQF8ZBgQ0ex8A7iT8SW', '0', '', 0, '2017-06-28 15:03:43', '2017-06-28 00:00:00', 'holagngngnrh@gmail.com', '2017-06-28 15:03:43', NULL, NULL, '2017-07-28', NULL),
(42, 3, 'sadly', 'sad', 'Activo', NULL, '$2y$10$RQy/JTFh1K7SnZzJW8DxJOTYRqvLIsAVTTrVsPwoZZHEa1DDQELFm', NULL, NULL, NULL, NULL, '2017-06-29 16:31:23', 'sadlro@ho', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(43, 3, 'kkk', 'LOQ', 'ACTIVO', 1, '$2y$10$4r3wGJeuHjxbtn52uH2Bq.PPFfjksektcp9KQDnrVr7861SpUEjBq', NULL, NULL, NULL, NULL, '2017-06-29 16:35:05', 'jeklro@ho', '2017-06-30 23:31:35', NULL, NULL, NULL, NULL),
(45, 5, 'HOLA', 'HOLANNM', 'INACTIVO', 0, '$2y$10$AD.uBEhc/8TJ3IsyBLd4E.OA2uSAFO5/IklldgCkcej3x0Q9jYKl2', NULL, NULL, NULL, NULL, '2017-09-30 16:15:33', 'hola@hola.com', '2017-09-30 16:15:45', NULL, NULL, NULL, '2017-09-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vacunas`
--

CREATE TABLE `tbl_vacunas` (
  `id_vacuna` bigint(20) NOT NULL,
  `id_mascota` bigint(20) NOT NULL,
  `id_tipovacuna` bigint(20) NOT NULL,
  `precio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_preclinica` (`id_preclinica`);

--
-- Indices de la tabla `tbl_consultaservicios`
--
ALTER TABLE `tbl_consultaservicios`
  ADD PRIMARY KEY (`id_consulservi`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_consulta` (`id_consulta`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tbl_detafacturas`
--
ALTER TABLE `tbl_detafacturas`
  ADD PRIMARY KEY (`id_detafac`),
  ADD KEY `id_consulservi` (`id_consulservi`);

--
-- Indices de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_detafac` (`id_detafac`),
  ADD KEY `id_pago` (`id_pago`);

--
-- Indices de la tabla `tbl_kerders`
--
ALTER TABLE `tbl_kerders`
  ADD PRIMARY KEY (`id_kerder`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `tbl_mascotas`
--
ALTER TABLE `tbl_mascotas`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tbl_objetos_pantallas`
--
ALTER TABLE `tbl_objetos_pantallas`
  ADD PRIMARY KEY (`id_objeto`);

--
-- Indices de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  ADD PRIMARY KEY (`id_parametro`),
  ADD KEY `dias_vencimiento_contrasena` (`nombre`);

--
-- Indices de la tabla `tbl_preclinicas`
--
ALTER TABLE `tbl_preclinicas`
  ADD PRIMARY KEY (`id_preclinica`),
  ADD KEY `id_mascota` (`id_mascota`);

--
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `tbl_proservicios`
--
ALTER TABLE `tbl_proservicios`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_compra` (`id_compra`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tbl_roles_objeto`
--
ALTER TABLE `tbl_roles_objeto`
  ADD PRIMARY KEY (`contador`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_objeto` (`id_objeto`);

--
-- Indices de la tabla `tbl_tipopagos`
--
ALTER TABLE `tbl_tipopagos`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `tbl_tiposervicios`
--
ALTER TABLE `tbl_tiposervicios`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tbl_tipvacunas`
--
ALTER TABLE `tbl_tipvacunas`
  ADD PRIMARY KEY (`id_tipovacuna`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tbl_vacunas`
--
ALTER TABLE `tbl_vacunas`
  ADD PRIMARY KEY (`id_vacuna`),
  ADD KEY `id_mascota` (`id_mascota`),
  ADD KEY `id_tipovacuna` (`id_tipovacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  MODIFY `id_bitacora` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  MODIFY `id_compra` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  MODIFY `id_consulta` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_consultaservicios`
--
ALTER TABLE `tbl_consultaservicios`
  MODIFY `id_consulservi` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_detafacturas`
--
ALTER TABLE `tbl_detafacturas`
  MODIFY `id_detafac` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_empleados`
--
ALTER TABLE `tbl_empleados`
  MODIFY `id_empleado` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  MODIFY `id_factura` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_kerders`
--
ALTER TABLE `tbl_kerders`
  MODIFY `id_kerder` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_mascotas`
--
ALTER TABLE `tbl_mascotas`
  MODIFY `id_mascota` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_objetos_pantallas`
--
ALTER TABLE `tbl_objetos_pantallas`
  MODIFY `id_objeto` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  MODIFY `id_parametro` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_preclinicas`
--
ALTER TABLE `tbl_preclinicas`
  MODIFY `id_preclinica` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `id_pregunta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_proservicios`
--
ALTER TABLE `tbl_proservicios`
  MODIFY `id_servicio` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `id_proveedor` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  MODIFY `id_reservacion` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_rol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_roles_objeto`
--
ALTER TABLE `tbl_roles_objeto`
  MODIFY `contador` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipopagos`
--
ALTER TABLE `tbl_tipopagos`
  MODIFY `id_pago` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tiposervicios`
--
ALTER TABLE `tbl_tiposervicios`
  MODIFY `id_tipo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_tipvacunas`
--
ALTER TABLE `tbl_tipvacunas`
  MODIFY `id_tipovacuna` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `tbl_vacunas`
--
ALTER TABLE `tbl_vacunas`
  MODIFY `id_vacuna` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_compras`
--
ALTER TABLE `tbl_compras`
  ADD CONSTRAINT `tbl_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tbl_proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  ADD CONSTRAINT `tbl_consultas_ibfk_1` FOREIGN KEY (`id_preclinica`) REFERENCES `tbl_preclinicas` (`id_preclinica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_consultaservicios`
--
ALTER TABLE `tbl_consultaservicios`
  ADD CONSTRAINT `tbl_consultaservicios_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `tbl_proservicios` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_consultaservicios_ibfk_3` FOREIGN KEY (`id_consulta`) REFERENCES `tbl_consultas` (`id_consulta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_consultaservicios_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_detafacturas`
--
ALTER TABLE `tbl_detafacturas`
  ADD CONSTRAINT `tbl_detafacturas_ibfk_1` FOREIGN KEY (`id_consulservi`) REFERENCES `tbl_consultaservicios` (`id_consulservi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD CONSTRAINT `tbl_facturas_ibfk_1` FOREIGN KEY (`id_detafac`) REFERENCES `tbl_detafacturas` (`id_detafac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_facturas_ibfk_2` FOREIGN KEY (`id_pago`) REFERENCES `tbl_tipopagos` (`id_pago`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_kerders`
--
ALTER TABLE `tbl_kerders`
  ADD CONSTRAINT `tbl_kerders_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `tbl_proservicios` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_kerders_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `tbl_compras` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_mascotas`
--
ALTER TABLE `tbl_mascotas`
  ADD CONSTRAINT `tbl_mascotas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_preclinicas`
--
ALTER TABLE `tbl_preclinicas`
  ADD CONSTRAINT `tbl_preclinicas_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `tbl_mascotas` (`id_mascota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_proservicios`
--
ALTER TABLE `tbl_proservicios`
  ADD CONSTRAINT `tbl_proservicios_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tbl_tiposervicios` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_proservicios_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `tbl_compras` (`id_compra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_reservaciones`
--
ALTER TABLE `tbl_reservaciones`
  ADD CONSTRAINT `tbl_reservaciones_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbl_clientes` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_roles_objeto`
--
ALTER TABLE `tbl_roles_objeto`
  ADD CONSTRAINT `tbl_roles_objeto_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_roles_objeto_ibfk_2` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos_pantallas` (`id_objeto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_vacunas`
--
ALTER TABLE `tbl_vacunas`
  ADD CONSTRAINT `tbl_vacunas_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `tbl_mascotas` (`id_mascota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_vacunas_ibfk_2` FOREIGN KEY (`id_tipovacuna`) REFERENCES `tbl_tipvacunas` (`id_tipovacuna`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
