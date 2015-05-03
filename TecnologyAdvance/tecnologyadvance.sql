-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2015 a las 01:38:36
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fajasrosywar2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `ciudad`, `direccion`, `telefono`, `email`) VALUES
('106974122', 'Andres', 'Valencia', 'Fusa', 'Calle11', '313122', 'Javier@hot'),
('1069751356', 'Nestor', 'Fernando', 'Bogota', 'Calle 12', '3132212', 'fernando@hotm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE IF NOT EXISTS `detalle_factura` (
  `id_factura` int(11) NOT NULL DEFAULT '0',
  `id_producto` varchar(20) NOT NULL DEFAULT '',
  `nombre` varchar(40) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(15,0) DEFAULT NULL,
  `total` decimal(15,0) DEFAULT NULL,
  PRIMARY KEY (`id_factura`,`id_producto`),
  KEY `id_producto` (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_factura`, `id_producto`, `nombre`, `cantidad`, `precio`, `total`) VALUES
(1, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(1, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(1, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(2, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(3, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(4, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(5, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(6, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(6, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(7, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(7, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(7, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(8, '1398', 'Faja Cachetero-Tiras', 1, '80000', '80000'),
(8, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(8, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(8, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(9, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(10, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(11, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(11, '15031', 'Faja Body Brasilero-Manga Corta', 1, '70000', '70000'),
(12, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(12, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(13, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(13, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(14, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(14, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(14, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(15, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(15, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(16, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(16, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(16, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(17, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(17, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(18, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(18, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(19, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(19, '39481', 'Faja Pesquero-Tiras', 4, '100000', '400000'),
(20, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(20, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(21, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(21, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(22, '1398', 'Faja Cachetero-Tiras', 1, '80000', '80000'),
(22, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(22, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(23, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(24, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(24, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(24, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(25, '1398', 'Faja Cachetero-Tiras', 1, '80000', '80000'),
(25, '15031', 'Faja Body Brasilero-Manga Corta', 1, '70000', '70000'),
(25, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(25, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(25, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(25, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(26, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(26, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(26, '54963', 'Faja Short-Manga Corta', 1, '90000', '90000'),
(27, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(27, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(27, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(28, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(28, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(28, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(29, '1398', 'Faja Cachetero-Tiras', 1, '80000', '80000'),
(29, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(29, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(29, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(30, '1398', 'Faja Cachetero-Tiras', 1, '80000', '80000'),
(30, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(30, '39480', 'Faja Prehormada-Tiras', 1, '100000', '100000'),
(30, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(30, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(31, '15031', 'Faja Body Brasilero-Manga Corta', 1, '70000', '70000'),
(31, '15032', 'Faja Body Brasilero-Chaleco', 1, '60000', '60000'),
(31, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(31, '59664', 'Faja Short-Chaleco', 1, '80000', '80000'),
(32, '21571', 'Faja Bicicletero-Tiras', 1, '100000', '100000'),
(32, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(32, '39481', 'Faja Pesquero-Tiras', 1, '100000', '100000'),
(33, '1394', 'Faja Cachetero-Chaleco', 1, '80000', '80000'),
(33, '21572', 'Faja Bicicletero-Chaleco', 1, '100000', '100000'),
(33, '59664', 'Faja Short-Chaleco', 1, '80000', '80000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `id_usuario` varchar(20) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_cliente`, `fecha`, `hora`, `id_usuario`, `total`) VALUES
(1, '106974122', '2015-02-28', '23:29:14', '11', 240000),
(2, '106974122', '2015-02-28', '23:30:50', '11', 80000),
(3, '106974122', '2015-02-28', '23:31:22', '11', 80000),
(4, '106974122', '2015-02-28', '23:31:48', '11', 80000),
(5, '106974122', '2015-02-28', '23:32:16', '11', 80000),
(6, '106974122', '2015-02-28', '23:34:01', '11', 680000),
(7, '106974122', '2015-02-28', '23:59:34', '11', 260000),
(8, '106974122', '2015-03-01', '00:07:31', '11', 360000),
(9, '106974122', '2015-03-01', '00:08:47', '11', 80000),
(10, '106974122', '2015-03-01', '00:09:55', '11', 80000),
(11, '106974122', '2015-03-01', '00:10:22', '11', 150000),
(12, '106974122', '2015-03-01', '00:12:34', '11', 160000),
(13, '106974122', '2015-03-01', '00:13:28', '11', 160000),
(14, '106974122', '2015-03-01', '00:14:20', '11', 260000),
(15, '106974122', '2015-03-01', '00:19:31', '11', 190000),
(16, '106974122', '2015-03-01', '00:20:34', '11', 250000),
(17, '106974122', '2015-03-01', '00:22:19', '11', 160000),
(18, '106974122', '2015-03-01', '00:26:52', '11', 140000),
(19, '106974122', '2015-03-01', '00:39:04', '11', 500000),
(20, '106974122', '2015-03-01', '01:11:53', '11', 160000),
(21, '106974122', '2015-03-01', '01:12:54', '11', 150000),
(22, '106974122', '2015-03-01', '01:13:24', '11', 270000),
(23, '106974122', '2015-03-01', '01:13:57', '11', 200000),
(24, '106974122', '2015-03-01', '01:15:58', '11', 250000),
(25, '106974122', '2015-03-01', '01:18:16', '11', 520000),
(26, '106974122', '2015-03-01', '01:19:33', '11', 250000),
(27, '106974122', '2015-03-01', '01:24:08', '11', 280000),
(28, '106974122', '2015-03-01', '01:45:15', '11', 280000),
(29, '106974122', '2015-03-01', '01:48:32', '11', 320000),
(30, '1069751356', '2015-03-01', '01:50:07', '11', 460000),
(31, '106974122', '2015-03-01', '01:51:41', '11', 310000),
(32, '106974122', '2015-03-01', '01:54:33', '11', 300000),
(33, '106974122', '2015-03-01', '05:15:27', '11', 260000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `cantidad` int(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `cantidad`, `descripcion`) VALUES
(10, 'licra', 15, 'blanca'),
(11, 'cesgo', 15, 'blanco'),
(12, 'powernet', 15, 'Tela rustica'),
(13, 'hilaza', 15, 'rollos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `id_mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_mensaje`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `nombre`, `email`, `asunto`, `mensaje`) VALUES
(1, 'Alejandra Ruiz', 'Alejaruiz@hotmail.com', 'Programar cita', 'Oferta de materiales -tela'),
(2, ' Fernando Ruiz', ' Fernando.ruiz@hotmail.com', 'Catalogo', ' Envio de Catalogo de produtos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(15,0) NOT NULL,
  `archivo` varchar(70) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `descripcion`, `nombre`, `cantidad`, `precio`, `archivo`) VALUES
('1394', 'Chaleco', 'Faja Cachetero', 34, '80000', 'archivo/w.jpg'),
('1398', 'Tiras', 'Faja Cachetero', 45, '80000', 'archivo/w2.jpg'),
('15031', 'Manga Corta', 'Faja Body Brasilero', 42, '70000', 'archivo/w.jpg'),
('15032', 'Chaleco', 'Faja Body Brasilero', 37, '60000', 'archivo/w2.jpg'),
('21571', 'Tiras', 'Faja Bicicletero', 37, '100000', 'archivo/w.jpg'),
('21572', 'Chaleco', 'Faja Bicicletero', 43, '100000', 'archivo/w.jpg'),
('39480', 'Tiras', 'Faja Prehormada', 26, '100000', 'archivo/w.jpg'),
('39481', 'Tiras', 'Faja Pesquero', 34, '100000', 'archivo/w2.jpg'),
('54963', 'Manga Corta', 'Faja Short', 37, '90000', 'archivo/w2.jpg'),
('59664', 'Chaleco', 'Faja Short', 34, '80000', 'archivo/w.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `ciudad` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `direccion`, `ciudad`, `email`) VALUES
(1, 'Alejandro Ruiz', '8797983', 'Calle3', 'Bogota', 'Alejandro.ruiz@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_materiales`
--

CREATE TABLE IF NOT EXISTS `proveedor_materiales` (
  `id_proveedor` int(11) NOT NULL DEFAULT '0',
  `id_producto` varchar(20) NOT NULL DEFAULT '',
  `valor_compra` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`,`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(20) DEFAULT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `direccion` varchar(40) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `nombre`, `apellido`, `direccion`, `telefono`, `estado`, `pass`, `salt`) VALUES
('11', 'Fernando@hotmail.com', 'Fernando', 'Ricaurte', 'calle20 # 7-88 Balmoral', '8674456', '1', '74a49c698dbd3c12e36b0b287447d833f74f3937ff132ebff7054baa18623c35a705bb18b82e2ac0384b5127db97016e63609f712bc90e3506cfbea97599f46f66abdcb0c1e6cdb53b78de3d8b2b2d48', '66abdcb0c1e6cdb53b78de3d8b2b2d48'),
('13', 'Nestor@hotmail.com', 'Nestor', 'Ricaurte', 'calle22 # 3-55 Fusacatan', '4343', '0', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510aea3c2edab01513f75f331dcdc6ae804e', 'ea3c2edab01513f75f331dcdc6ae804e'),
('22', 'Fernando@hotmail.com', 'Fernando', 'Ricaurte', 'calle20', '3443', '0', '4dff4ea340f0a823f15d3f4f01ab62eae0e5da579ccb851f8db9dfe84c58b2b37b89903a740e1ee172da793a6e79d560e5f7f9bd058a12a280433ed6fa46510a0d978d0c139a3a6ac4824a493ff27ea9', '0d978d0c139a3a6ac4824a493ff27ea9');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `id_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`),
  ADD CONSTRAINT `id_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
