-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2017 a las 06:05:17
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

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
  `respuesta` varchar(200) DEFAULT NULL,
  `num` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_pregunta`, `id_usuario`, `respuesta`, `num`) VALUES
(1, 1, 'iop', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bitacoras`
--

CREATE TABLE `tbl_bitacoras` (
  `id_bitacora` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `objeto` varchar(100) DEFAULT NULL,
  `accion` varchar(100) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_bitacoras`
--

INSERT INTO `tbl_bitacoras` (`id_bitacora`, `id_usuario`, `objeto`, `accion`, `descripcion`, `fecha`) VALUES
(1, 39, 'tbl_usuario', 'INSERTAR', NULL, '2017-06-28 08:01:18'),
(2, 40, 'tbl_usuario', 'INSERTAR', NULL, '2017-06-28 12:42:08'),
(3, 41, 'tbl_usuario', 'INSERTAR', NULL, '2017-06-28 13:10:20'),
(4, 35, 'tbl_usuario', 'INSERT', NULL, '2017-06-29 16:31:23'),
(5, 35, 'tbl_usuario', 'INSERT', NULL, '2017-06-29 16:35:05'),
(6, 35, 'tbl_usuario', 'DELETE', NULL, '2017-06-30 22:57:21'),
(7, 35, 'tbl_usuario', 'DELETE', NULL, '2017-06-30 22:58:48'),
(8, 35, 'tbl_usuario', 'UPDATE', NULL, '2017-06-30 23:01:17'),
(9, 35, 'tbl_usuario', 'UPDATE', NULL, '2017-06-30 23:31:35'),
(10, 44, 'tbl_usuario', 'INSERTAR', NULL, '2017-07-01 16:08:53'),
(11, 35, 'tbl_usuario', 'INSERT', NULL, '2017-07-02 16:04:19'),
(12, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-02 16:14:02'),
(13, 35, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'44\'', '2017-07-03 11:16:16'),
(14, 35, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'43\'', '2017-07-03 11:18:17'),
(15, 35, 'tbl_usuario', 'INSERT', 'INSERT INTO tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico) VALUES(\'HOLAS\', \'LOSIYW\', \'5\',\'NUEVO\',\'$2y$10$k6pbbqgRUFmZUjm7vrtWWewi0/m2CJZryde6EoFMbjzF8SSe74QHi\',\'kldiyql@hotmail.com\')', '2017-07-03 11:20:58'),
(16, 35, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'NKNK\', usuario=\'LOSIYW\', id_rol=\'5\', correo_electronico=\'kldiyql@hotmail.com\', estado_usuario=\'NUEVO\', activacion= \'0\' WHERE id_usuario=\'45\'', '2017-07-03 11:22:04'),
(17, 35, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'10\'', '2017-07-03 13:24:23'),
(18, 35, 'tbl_parametro', 'INSERT', 'INSERT INTO tbl_parametros (nombre,descripcion) VALUES (\'\',\'\')', '2017-07-03 13:32:31'),
(19, 35, 'tbl_parametro', 'INSERT', 'INSERT INTO tbl_parametros (nombre,descripcion) VALUES (\'ASF\',\'4\')', '2017-07-03 13:33:05'),
(20, 35, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'11\'', '2017-07-03 13:33:12'),
(21, 35, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'12\'', '2017-07-03 13:33:18'),
(22, 35, 'tbl_parametros', 'UPDATE', 'UPDATE tbl_parametros SET nombre=\'PREGUNTAS\', descripcion=\'3\'\r\n                            WHERE id_parametro=\'9\';', '2017-07-03 14:15:10'),
(23, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla', '2017-07-03 14:58:17'),
(24, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-03 18:23:25'),
(25, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-03 18:24:32'),
(26, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-03 21:36:15'),
(27, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-03 22:12:37'),
(28, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-03 22:20:21'),
(29, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 02:46:25'),
(30, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 02:50:23'),
(31, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 03:31:29'),
(32, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 11:26:19'),
(33, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 12:47:35'),
(34, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 16:11:49'),
(35, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 16:13:06'),
(36, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 23:22:35'),
(37, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-05 23:22:51'),
(38, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 11:07:50'),
(39, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 11:08:18'),
(40, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 11:11:48'),
(41, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 11:13:34'),
(42, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 11:16:13'),
(43, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 11:20:02'),
(44, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 11:30:35'),
(45, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:11:01'),
(46, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:16:32'),
(47, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:17:51'),
(48, 35, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'SAD\', usuario=\'SADLY\', id_rol=\'3\', correo_electronico=\'sadlro@ho\', estado_usuario=\'ACTIVO\', activacion= \'1\' WHERE id_usuario=\'42\'', '2017-07-06 14:19:50'),
(49, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:29:41'),
(50, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:34:13'),
(51, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:40:22'),
(52, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:42:48'),
(53, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 14:45:31'),
(54, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 14:48:01'),
(55, 35, 'tbl_usuario', 'UPDATE', NULL, '2017-07-06 14:48:09'),
(56, 35, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 14:50:30'),
(57, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:51:07'),
(58, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:54:19'),
(59, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 14:56:19'),
(60, 35, 'pantalla principal', 'INGRESO', NULL, '2017-07-06 16:56:55'),
(61, 35, 'pantalla principal', 'INGRESO', NULL, '2017-07-06 16:57:45'),
(62, 46, 'tbl_usuario', 'INSERTAR', NULL, '2017-07-06 17:01:22'),
(63, 47, 'tbl_usuario', 'INSERTAR', NULL, '2017-07-06 17:03:23'),
(64, 47, 'pantalla principal', 'INGRESO', NULL, '2017-07-06 17:04:20'),
(65, 47, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 17:08:43'),
(66, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 17:09:15'),
(67, 35, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'MILANESA\', usuario=\'HAMBRE\', id_rol=\'1\', correo_electronico=\'akdlk@gmail.com\', estado_usuario=\'ACTIVO\', activacion= \'1\' WHERE id_usuario=\'47\'', '2017-07-06 17:09:27'),
(68, 47, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 17:09:42'),
(69, 47, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'12\'', '2017-07-06 17:12:34'),
(70, 47, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'10\'', '2017-07-06 17:12:44'),
(71, 47, 'tbl_parametros', 'DELETE', 'DELETE FROM tbl_parametros WHERE id_parametro=\'11\'', '2017-07-06 17:12:51'),
(72, 47, 'tbl_usuario', 'INSERT', NULL, '2017-07-06 17:14:28'),
(73, 47, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico) values(\'sjkfd\', \'baleadasis\', \'5\',\'NUEVO\',\'$2y$10$7Sa7B8p0XJ6j6BQwS57dlOvQhcwsptgaqgqAoXTKbCNecxv2sSSsm\',\'jakwp@hotmail.com\')', '2017-07-06 17:16:39'),
(74, 47, 'tbl_usuario', 'INSERT', NULL, '2017-07-06 17:27:39'),
(75, 47, 'tbl_usuario', 'INSERT', 'insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico) values(\'MISIFUSs\', \'MINIMICHOoo\', \'5\',\'NUEVO\',\'$2y$10$T/ol5Aq8QTIxqm1s3dRisOD8I5gyl1Rkvbw8I4rVHZDI7gSd9F0Vu\',\'f6b@yopmail.com\')', '2017-07-06 17:28:41'),
(76, 47, 'tbl_usuario', 'DELETE', NULL, '2017-07-06 17:29:27'),
(77, 47, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'50\'', '2017-07-06 17:31:47'),
(78, 47, 'tbl_usuario', 'DELETE', 'DELETE  FROM tbl_usuario WHERE id_usuario=\'49\'', '2017-07-06 17:31:50'),
(79, 47, 'tbl_usuario', 'UPDATE', 'UPDATE tbl_usuario SET nombre_usuario=\'ARLIERJ\', usuario=\'BALEADASHSJDHJ\', id_rol=\'5\', correo_electronico=\'jakduwp@hotmail.com\', estado_usuario=\'NUEVO\', activacion= \'0\' WHERE id_usuario=\'48\'', '2017-07-06 17:55:47'),
(80, 0, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 18:00:57'),
(81, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-06 18:01:38'),
(82, 0, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 18:01:46'),
(83, 0, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 18:01:55'),
(84, 0, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 21:02:49'),
(85, 35, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 21:03:28'),
(86, 35, 'camibia', 'INGRESO', 'Esta en la pantalla de cambia password', '2017-07-06 21:22:07'),
(87, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-20 22:36:04'),
(88, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-07-30 01:20:19'),
(89, 35, 'camibia', 'INGRESO', NULL, '2017-09-17 14:00:46'),
(90, 35, 'tbl_usuario', 'INSERT', NULL, '2017-09-17 14:01:33'),
(91, 35, 'pantalla principal', 'INGRESO', NULL, '2017-09-17 14:01:44'),
(92, 35, 'pantalla principal', 'INGRESO', NULL, '2017-09-17 16:02:23'),
(93, 35, 'recupera', 'INGRESO', 'Esta en la pantalla de verificacion de pregunta y respuesta', '2017-09-17 16:49:23'),
(94, 35, 'recupera', 'INGRESO', 'Esta en la pantalla de verificacion de pregunta y respuesta', '2017-09-17 16:49:38'),
(95, 35, 'cambia', 'INGRESO', 'Esta en la pantalla de cambio de contraseÃ±a', '2017-09-17 16:49:39'),
(96, 35, NULL, 'INSERT', 'UPDATE tbl_usuario SET contrasena=\'$2y$10$ooXAIE6Ji7rka5knhZywEOs67nZfcE7fwggnDYTsiSxu0sbAEiP1O\',fecha_cambio_contrasena=NOW(), intentos= 0\r\n                            WHERE id_usuario=\'35\';', '2017-09-17 16:50:08'),
(97, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-17 16:50:32'),
(98, 35, 'tbl_parametros', 'UPDATE', 'UPDATE tbl_parametros SET nombre=\'HOLA\', descripcion=\'12\' WHERE id_parametro=\'16\'', '2017-09-17 17:00:28'),
(99, 35, 'pantalla principal', 'INGRESO', NULL, '2017-09-17 17:02:33'),
(100, 35, 'pantalla principal', 'INGRESO', NULL, '2017-09-17 17:02:54'),
(101, 35, 'tbl_usuario', 'UPDATE', NULL, '2017-09-17 17:04:25'),
(102, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-17 17:31:40'),
(103, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 21:27:59'),
(104, 35, 'tbl_tiposervicios', 'UPDATE', 'UPDATE tbl_tiposervicios SET nombre=\'HELLOW\', descripcion=\'ADIOS\' WHERE id_tipo=\'2\'', '2017-09-19 21:52:22'),
(105, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 21:57:25'),
(106, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 22:00:27'),
(107, 35, 'pantalla principal', 'INGRESO', 'ingreso a pantalla principal', '2017-09-19 22:01:00'),
(108, 35, 'tbl_tiposervicios', 'UPDATE', 'UPDATE tbl_tiposervicios SET nombre=\'PELUQUERIA\', descripcion=\'SERVICIO DE BELLEZA Y MAS\' WHERE id_tipo=\'2\'', '2017-09-19 22:01:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `id_cliente` bigint(20) NOT NULL,
  `identidad` varchar(20) DEFAULT NULL,
  `nom_cliente` varchar(50) DEFAULT NULL,
  `ape_cliente` varchar(50) DEFAULT NULL,
  `tel_celular` bigint(20) DEFAULT NULL,
  `tel_2` bigint(20) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `membresia` varchar(20) DEFAULT NULL,
  `cor_cliente` varchar(50) DEFAULT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usr_registro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`id_cliente`, `identidad`, `nom_cliente`, `ape_cliente`, `tel_celular`, `tel_2`, `direccion`, `membresia`, `cor_cliente`, `fecha_registro`, `usr_registro`) VALUES
(1, '80119928456', 'nelson', 'mandela', 98675436, 22234567, 'col hato', 'si', 'cindy@hotmail.com', '2017-07-12 16:46:01', '2017-07-12 16:46:01'),
(2, '080119223466', 'ana', 'miaj', 984591283, 2234567890, 'la rosa', '-si', 'ajskas@yahoo,es', '2017-07-22 20:12:57', ''),
(4, '0801199222067', 'ana', 'aguilar', 99001234, 22345678, 'ghjkl', '', 'ahjkls@ghjk.com', '2017-07-30 01:25:14', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consulta`
--

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

--
-- Volcado de datos para la tabla `tbl_consulta`
--

INSERT INTO `tbl_consulta` (`id_consulta`, `motivo`, `sintomas`, `tratamientos`, `dieta`, `peso`, `temperatura`, `fc`, `fr`, `condicion`, `membranas`, `hidratacion`, `patron`, `temperamento`, `id_mascota`, `TLLC`) VALUES
(1, 'hj', 'hjk', 'klÃ±', 'jkl', '12', '2', '3', '4', '6', '7', '8', '9', NULL, 1, '1'),
(2, 'gripe', 'calentura muy fuerte', 'zorritone', 'gati', '12lb', '21', 'bien', 'bien', 'sana', 'gripe', 'deshidra', 'pausado', NULL, 2, 'nose'),
(3, 'feo', 'se cayo', 'ninguno', 'gati', '12', '12', 'good', 'all right', 'feliz', 'gripe', 'hn', 'purr', NULL, 1, 'no'),
(4, 'miadera', 'miados', 'ninguno', 'gati', '23', 'jj', '23', '1', '4', '4', '4', '4', NULL, 2, 'jj'),
(5, 'nose', 'lala', 'ninguno', 'corn', '120', 'm', 'nm', 'nm', 'nm', 'nm', 'nm', 'n', NULL, 2, 'nm'),
(6, 'gordo', 'come mcuho', 'ninguno', 'gati', '12', 'j', '2', '4', '7', 'jlsa', 'nkm', 'm', NULL, 1, 'f'),
(7, 'diarrea', 'pupu', 'nada', 'tyuk', '12', '56', 'bien', 'bien', 'flaca', 'moci', '67', 'hjk', NULL, 2, 'ghj'),
(8, 'hai', 'jk', 'm,', 'nm', '10', '12', 'hjk', 'jkl', 'jkl', 'jk', 'jk', 'k', NULL, 1, 'u'),
(9, 'dfghj', 'ghjk', 'vhbjnm', 'ghjk', '12', '', '', '', '', '', '', '', NULL, 1, '13'),
(10, 'HOA', 'J', 'KL', 'K', '120', '9', '9', '9', '9', '9', '9', '9', NULL, 2, '29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mascotas`
--

CREATE TABLE `tbl_mascotas` (
  `id_mascota` bigint(20) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `nom_mascota` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `nacimiento` date NOT NULL,
  `descripcion` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_mascotas`
--

INSERT INTO `tbl_mascotas` (`id_mascota`, `id_cliente`, `nom_mascota`, `especie`, `raza`, `sexo`, `nacimiento`, `descripcion`, `fecha_registro`) VALUES
(1, 1, 'harry', 'gato', 'dfghjk', 'M', '2017-07-07', 0, '2017-07-21 00:42:53'),
(2, 1, 'fibi', 'gato', 'calica', 'F', '2017-07-11', 1, '2017-07-22 01:26:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_maser`
--

CREATE TABLE `tbl_maser` (
  `id_maser` bigint(20) NOT NULL,
  `id_mascota` bigint(20) DEFAULT NULL,
  `id_servicio` bigint(20) DEFAULT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `costo` varchar(50) DEFAULT NULL,
  `fec_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_maser`
--

INSERT INTO `tbl_maser` (`id_maser`, `id_mascota`, `id_servicio`, `servicio`, `costo`, `fec_registro`, `num`) VALUES
(1, 1, 1, 'consulta', '200', '2017-07-22 01:53:08', '1'),
(2, 1, NULL, 'consulta', '100', '2017-07-22 17:24:50', ''),
(3, 1, NULL, 'sangre', '100', '2017-07-22 20:37:34', ''),
(4, 1, NULL, 'vbn', '100', '2017-07-22 21:25:45', ''),
(5, 1, NULL, 'ghjk', '120', '2017-07-22 21:36:04', ''),
(6, 1, NULL, 'hj', '199', '2017-07-22 22:05:48', '1'),
(7, 2, NULL, 'bn', '120', '2017-07-22 22:22:56', '1'),
(8, 2, NULL, 'hj', '100', '2017-07-22 22:39:28', '1'),
(9, 2, NULL, 'ana', '10', '2017-07-22 22:41:11', '1'),
(10, 1, NULL, 'SANGRE', '100', '2017-07-29 23:18:39', '2'),
(11, 1, NULL, 'CONSULTA', '200', '2017-07-29 23:20:42', '2'),
(12, 1, NULL, 'DIALISIS', '300', '2017-07-29 23:20:55', '469'),
(13, 1, NULL, 'SANGRE', '345', '2017-07-30 00:49:00', '470'),
(14, 1, NULL, 'SANGRE', '345', '2017-07-30 00:49:47', '470'),
(15, 1, NULL, 'MIAU', '123', '2017-07-30 00:52:33', '471'),
(16, 1, NULL, 'ANA', '1001', '2017-07-30 00:54:09', '472'),
(17, 1, NULL, 'NA', 'oipÃ±', '2017-07-30 00:54:43', '473'),
(18, 1, NULL, 'MIAJ', '102', '2017-07-30 00:56:32', '474'),
(19, 1, NULL, 'AAJ', '123', '2017-07-30 01:04:58', '475'),
(20, 1, NULL, 'AAJ', '123', '2017-07-30 01:05:08', '475'),
(21, 1, NULL, 'LOLO', '123', '2017-07-30 01:07:31', '00476'),
(22, 1, NULL, 'ANA', '1209', '2017-07-30 01:09:48', '476'),
(23, 1, NULL, 'ANA', '1234', '2017-07-30 01:33:37', '477'),
(24, 1, NULL, 'AH', '123', '2017-07-30 01:42:16', '478'),
(25, 1, NULL, 'AJA', '123', '2017-07-30 02:02:15', '479'),
(26, 2, NULL, 'SANGRE', '120', '2017-08-02 13:45:59', '480');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos_pantallas`
--

CREATE TABLE `tbl_objetos_pantallas` (
  `id_objeto` int(6) NOT NULL,
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
  `id_parametro` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_parametros`
--

INSERT INTO `tbl_parametros` (`id_parametro`, `nombre`, `descripcion`, `fecha_creacion`) VALUES
(1, 'vencimiento', '50', '2017-09-17 16:58:37'),
(2, 'Direccion de la Empresa', 'kslkd', '2017-09-17 16:58:37'),
(5, 'RTN', 'XXXXXXXXXXX', '2017-09-17 16:58:37'),
(6, 'ADMIN_CORREO', 'ansluisa@hotmail.com', '2017-09-17 16:58:37'),
(7, 'Nombre de la Empresa', 'bernardos veterynary', '2017-09-17 16:58:37'),
(8, 'intentos', '3', '2017-09-17 16:58:37'),
(9, 'PREGUNTAS', '3', '2017-09-17 16:58:37'),
(13, 'ANA', 'jklhjkl', '2017-09-17 16:58:37'),
(14, 'GHJK', 'hjkl', '2017-09-17 16:58:37'),
(15, 'MIAU', '15', '2017-09-17 16:58:37'),
(16, 'XXX', '12', '2017-09-17 16:58:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `id_pregunta` int(2) NOT NULL,
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
-- Estructura de tabla para la tabla `tbl_preguntas_usuario`
--

CREATE TABLE `tbl_preguntas_usuario` (
  `id_usuario` int(3) NOT NULL,
  `id_pregunta` int(2) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `id_pregunta2` int(2) NOT NULL,
  `respuesta2` varchar(60) NOT NULL,
  `id_pregunta3` int(2) NOT NULL,
  `respuesta3` varchar(60) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `creado_por` varchar(15) NOT NULL,
  `modificado_por` varchar(15) NOT NULL
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
(9, 1, 'hola', '2017-07-03 16:44:02'),
(47, 12, 'harry', '2017-07-06 23:04:02'),
(47, 1, '1992', '2017-07-06 23:04:07'),
(47, 2, 'amarillo', '2017-07-06 23:04:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_rol` int(6) NOT NULL,
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
(5, 'NUEVO', 'usuario recien creado', '2017-07-02 16:01:37', 'ana', '0000-00-00 00:00:00', 'luisa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles_objeto`
--

CREATE TABLE `tbl_roles_objeto` (
  `id_rol` int(6) NOT NULL,
  `id_objeto` int(6) NOT NULL,
  `permiso_consulta` char(1) NOT NULL,
  `permiso_insercion` varchar(2) NOT NULL,
  `permiso_eliminacion` varchar(2) NOT NULL,
  `permiso_actualizacion` varchar(2) NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creado_por` varchar(15) DEFAULT NULL,
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modificado_por` varchar(15) DEFAULT NULL,
  `contador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicio`
--

CREATE TABLE `tbl_servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_servicio`
--

INSERT INTO `tbl_servicio` (`id_servicio`, `nombre`, `descripcion`, `tipo`) VALUES
(1, 'consulta', 'medica', 1),
(2, ' sangre', 'sangre', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tiposervicios`
--

CREATE TABLE `tbl_tiposervicios` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tiposervicios`
--

INSERT INTO `tbl_tiposervicios` (`id_tipo`, `nombre`, `descripcion`, `fecha_registro`) VALUES
(2, 'PELUQUERIA', 'SERVICIO DE BELLEZA Y MAS', '2017-09-19 21:51:44'),
(4, 'FARMACIA', 'PRODUCTOS DE FARMACIA', '2017-09-19 22:02:45'),
(5, 'CONSULTA', 'CONSULTA PARA PACIENTES', '2017-09-19 22:03:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_usuario` int(4) NOT NULL,
  `id_rol` int(3) DEFAULT NULL,
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
(9, 2, 'AGUILAR', 'FIBI', 'Inactivo', 0, '-gUOU4Me', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'axx', '2017-06-22 13:49:14', NULL, NULL, '0000-00-00', NULL),
(10, 2, 'ELENA', 'ANA', 'Inactivo', NULL, '44lb97Nevm34ohG/mqcGXiiAnElyI1krdLE9XcFCNOo=', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'hola@hotmail.com', '2017-06-03 14:00:37', NULL, NULL, '0000-00-00', NULL),
(13, 4, 'USUARIO', 'USUARIO', 'BLOQUEADO', NULL, 'polo', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'polo@hotmail.com', '2017-06-22 13:49:26', NULL, NULL, '0000-00-00', NULL),
(14, 4, 'MIZU', 'OLO', 'Activo', NULL, 'a', NULL, NULL, NULL, NULL, '2017-06-01 00:00:00', 'alaa@hotmail.com', '0000-00-00 00:00:00', NULL, NULL, '0000-00-00', NULL),
(20, 2, 'MAGI', 'ANA LUISA', 'Activo', 1, '$2y$10$WfL7DIh3HIOUrKkjp0gmzOUuTKaddo0KTMEqUqu602pUYv8JEGST2', '0', '', 0, '2017-06-07 14:02:38', '2017-06-07 00:00:00', 'kirby_1888@hotmail.com', '2017-06-07 16:07:18', NULL, NULL, '0000-00-00', NULL),
(23, 1, 'MARIX', 'MARIANITO', 'BlOQUEADO', 0, '$2y$10$LxwM1iJMKsW8rOWxcV5cZ.F4.QHuA9DYAQtHczdCSKBayQFgy83q6', NULL, NULL, NULL, NULL, '2017-06-21 16:14:06', 'purkissss@gmail.com', '2017-07-06 14:48:08', NULL, NULL, NULL, NULL),
(24, 1, 'KING', 'KING', 'Activo', NULL, '$2y$10$WiS.auSUjJCnnxmG4YlPvu9FRdmsIFrjM8ON5FVpuPIsYNgFt2X4G', NULL, NULL, NULL, NULL, '2017-06-21 16:17:21', 'purkiss34s@gmail.com', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(25, 2, 'KIRX', 'ARIEL', 'Inactivo', NULL, '$2y$10$anyMOxVeKwgceLtKJBNNaOEtFGDobPvb3UJQmR4r2aoeo7ILQVUUW', NULL, NULL, NULL, NULL, '2017-06-21 16:18:39', 'KIRBY98@HOTMAIL.COM', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(27, 1, 'ARIELX', 'ARIELYN', 'ACTIVO', 1, '$2y$10$/ckKVNFz.zobUDdFxMcznegJKMYMjN9oEWldGC36fMULaD0Plds8G', NULL, NULL, NULL, NULL, '2017-06-21 16:25:44', 'kirby1823@gmail.com', '2017-06-22 13:59:12', NULL, NULL, NULL, NULL),
(28, 2, 'GATO', 'RESENTIDA', 'NUEVO', 1, '$2y$10$5K.szxejpI70WhBV28EJD.RyR1/qNHIoNElfSZcsnXZ1UcWeo3wpK', NULL, NULL, NULL, NULL, '2017-06-22 00:00:00', 'alizlanxa@yahoo.es', '0000-00-00 00:00:00', NULL, NULL, '2017-07-22', NULL),
(29, 2, 'LEMER', 'ELMER', 'NUEVO', 1, '$2y$10$g58kbNvWni5BpQHu2LjtE.XBEWj5hJnQlJchjvftGDD79ExF56gou', NULL, '47e31a840523af4b6ee2d06a41106bc1', 1, NULL, '2017-06-22 00:00:00', 'iam_dontpunk15@hotmail.com', '2017-06-21 17:35:26', NULL, NULL, '2017-07-22', NULL),
(30, 2, 'MAYTE', 'MATIAS', 'ACTIVO', 1, '$2y$10$T5QjB5E0bMDdapvy27nN..J3x7Jpprl3FtT9du6fmuDu/uELuX5oa', NULL, NULL, NULL, NULL, '2017-06-22 00:00:00', 'myate@hotmail.com', '2017-06-28 02:05:52', NULL, NULL, '2017-07-22', NULL),
(31, 1, 'KIxxxx', 'arielx', 'ACTIVO', 1, '$2y$10$WZcpeE9w4pDP2BAk1nMs2eVK9tNl5pTWBp5HTGwOrsxG.MdrtyJdy', NULL, NULL, NULL, NULL, '2017-06-21 18:47:19', 'kilin@hotmail.com', '2017-06-28 02:55:27', NULL, NULL, NULL, NULL),
(35, 1, 'ADMIN', 'ALEXANDER', 'ACTIVO', 1, '$2y$10$ooXAIE6Ji7rka5knhZywEOs67nZfcE7fwggnDYTsiSxu0sbAEiP1O', '0', '', 0, '2017-07-01 00:55:08', '2017-06-27 00:00:00', 'mrfloyd2690@gmail.com', '2017-09-17 17:04:25', NULL, NULL, '2017-07-27', '2017-09-17'),
(36, 1, 'HARRYSON', 'MARIANUS', 'ACTIVO', 1, '$2y$10$WvpagydZJcKFYOX7OkMGF.FALs1BtuktOSBcLpmf3PLPvPWsyHZ4K', '0', NULL, NULL, NULL, '2017-06-28 00:00:00', 'alizson@hotmail.com', '2017-06-28 02:00:17', NULL, NULL, '2017-07-28', NULL),
(37, 2, 'nomsk', 'nombre', 'ACTIVO', 1, '$2y$10$/RMP.2BfSenfN0TPFLZK.uhYKtfDjWlDNOfupE7Lxi58CY5/HrHVK', NULL, NULL, NULL, NULL, '2017-06-28 02:01:39', 'user@gmail.com', '2017-06-28 03:14:02', NULL, NULL, NULL, NULL),
(38, 2, 'loaks', 'hola', 'ACTIVO', 1, '$2y$10$hW.fjLdei.DQUDZkIL./.uNTOhG74xewkAF0NzIWq39sseezdJ39q', NULL, NULL, NULL, NULL, '2017-06-28 03:20:13', 'usejkjkr@gmail.com', '2017-06-28 03:23:45', NULL, NULL, NULL, NULL),
(39, 1, 'ASKFM', 'ASK', 'NUEVO', 1, '$2y$10$rtLAAlBgiY3ifIG0sfDWZe3.DxEzQiI2adqumo4b9vysD0sYTeoO6', NULL, NULL, NULL, NULL, '2017-06-28 00:00:00', 'ajsk@hotmail.com', '0000-00-00 00:00:00', NULL, NULL, '2017-07-28', NULL),
(40, 2, 'MECHES', 'MARIAMERCEDES', 'ACTIVO', 1, '$2y$10$VwdgBNrxlBcYXilj5gCg3e9jhfX52bCrDbNHeArtbX7e2/qdZNZUu', '0', '', 0, '2017-06-28 12:42:30', '2017-06-28 00:00:00', 'askdoe@hotmail.com', '2017-06-28 13:02:28', NULL, NULL, '2017-07-28', NULL),
(41, 2, 'ERAMOS', 'ELMER RAMOS', 'ACTIVO', 1, '$2y$10$QVtkjND4Vu4CAN8crp4XiOhm1EaFXJWZ/AcQF8ZBgQ0ex8A7iT8SW', '0', '', 0, '2017-06-28 15:03:43', '2017-06-28 00:00:00', 'holagngngnrh@gmail.com', '2017-06-28 15:03:43', NULL, NULL, '2017-07-28', NULL),
(42, 3, 'SADLY', 'SAD', 'ACTIVO', 1, '$2y$10$RQy/JTFh1K7SnZzJW8DxJOTYRqvLIsAVTTrVsPwoZZHEa1DDQELFm', NULL, NULL, NULL, NULL, '2017-06-29 16:31:23', 'sadlro@ho', '2017-07-06 14:19:49', NULL, NULL, NULL, NULL),
(46, 5, 'ARAMOS', 'ELMER RAMOS', 'NUEVO', 1, '$2y$10$irlmNQKbWQTpWPbb2yroz.00Kiw1Pzr9c5DqfZijsm9yoQeVkKe9q', NULL, NULL, NULL, NULL, '2017-07-07 00:00:00', 'ggg@gmail.com', '0000-00-00 00:00:00', NULL, NULL, NULL, NULL),
(47, 1, 'HAMBRE', 'MILANESA', 'ACTIVO', 1, '$2y$10$lTiU4RsY.8Xev9qSgJYbVe8c.Ii4bD2CsU/uUIuR4Ed9oQyL3FIDK', '0', NULL, NULL, NULL, '2017-07-07 00:00:00', 'akdlk@gmail.com', '2017-07-06 17:09:27', NULL, NULL, NULL, '2017-07-06'),
(48, 5, 'BALEADASHSJDHJ', 'ARLIERJ', 'NUEVO', 0, '$2y$10$lR8ByR3qfl2JSgAPcqBn5.6rLSXDhx3qPWwoX.MIrhP.aHKOrK.y.', NULL, NULL, NULL, NULL, '2017-07-06 17:14:28', 'jakduwp@hotmail.com', '2017-07-06 17:55:47', NULL, NULL, NULL, NULL);

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
-- Indices de la tabla `tbl_consulta`
--
ALTER TABLE `tbl_consulta`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `tbl_mascotas`
--
ALTER TABLE `tbl_mascotas`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `tbl_maser`
--
ALTER TABLE `tbl_maser`
  ADD PRIMARY KEY (`id_maser`);

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
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `tbl_preguntas_usuario`
--
ALTER TABLE `tbl_preguntas_usuario`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_pregunta2` (`id_pregunta2`),
  ADD KEY `id_pregunta3` (`id_pregunta3`),
  ADD KEY `id_preguntas` (`id_pregunta`),
  ADD KEY `id_pregunta2_2` (`id_pregunta2`);

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
-- Indices de la tabla `tbl_tiposervicios`
--
ALTER TABLE `tbl_tiposervicios`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bitacoras`
--
ALTER TABLE `tbl_bitacoras`
  MODIFY `id_bitacora` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `id_cliente` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_consulta`
--
ALTER TABLE `tbl_consulta`
  MODIFY `id_consulta` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_mascotas`
--
ALTER TABLE `tbl_mascotas`
  MODIFY `id_mascota` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_maser`
--
ALTER TABLE `tbl_maser`
  MODIFY `id_maser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_objetos_pantallas`
--
ALTER TABLE `tbl_objetos_pantallas`
  MODIFY `id_objeto` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  MODIFY `id_parametro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `id_pregunta` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_rol` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_roles_objeto`
--
ALTER TABLE `tbl_roles_objeto`
  MODIFY `contador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tiposervicios`
--
ALTER TABLE `tbl_tiposervicios`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_preguntas_usuario`
--
ALTER TABLE `tbl_preguntas_usuario`
  ADD CONSTRAINT `tbl_preguntas_usuario_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_preguntas_usuario_ibfk_3` FOREIGN KEY (`id_pregunta2`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_preguntas_usuario_ibfk_4` FOREIGN KEY (`id_pregunta3`) REFERENCES `tbl_preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_preguntas_usuario_ibfk_5` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_roles_objeto`
--
ALTER TABLE `tbl_roles_objeto`
  ADD CONSTRAINT `tbl_roles_objeto_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_roles_objeto_ibfk_2` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos_pantallas` (`id_objeto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
