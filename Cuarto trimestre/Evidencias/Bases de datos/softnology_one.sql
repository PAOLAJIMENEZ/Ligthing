-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-06-2017 a las 13:12:53
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `softnology_one`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Lampara'),
(2, 'Repuesto'),
(3, 'Linea de Acero'),
(4, 'Linea Eléctrica\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `documento` varchar(12) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido1` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido2` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`documento`, `nombres`, `apellido1`, `apellido2`, `correo`) VALUES
('123', 'Paola', 'Jara', 'jimenez', 'paolis_pequis@joder.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Disponible'),
(2, 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_factura`
--

CREATE TABLE IF NOT EXISTS `estado_factura` (
  `id_estado_fac` int(11) NOT NULL AUTO_INCREMENT,
  `estado_fac` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_estado_fac`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_factura`
--

INSERT INTO `estado_factura` (`id_estado_fac`, `estado_fac`) VALUES
(1, 'Valida'),
(2, 'No valida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int(11) NOT NULL AUTO_INCREMENT,
  `cod_factura` int(4) NOT NULL,
  `fecha` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_pago` int(11) NOT NULL,
  `fk_doc_cliente` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_doc_vendedor` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `cod_factura`, `fecha`, `fk_pago`, `fk_doc_cliente`, `fk_doc_vendedor`, `fk_producto`, `cantidad`, `descripcion`, `fk_estado`) VALUES
(1, 1111, '2017-05-02', 1, '123', '1033799014', 1234, 7, 'A mitad de precio', 1),
(2, 1111, '2017-05-02', 1, '123', '1033799014', 2134, 2, 'A mitad de precio', 1),
(3, 9811, '2017-05-31', 2, '123456', '123', 2134, 6, 'nonononono', 2),
(4, 2222, '2017-06-07', 2, '123456', '12345', 1234, 2, 'Descuento de un 10%', 1),
(5, 2222, '2017-06-07', 2, '123456', '12345', 1233, 1, 'Descuento de un 10%', 1),
(6, 9876, '2017-06-06', 2, '123456', '12345', 1236, 5, 'asfn dergfgsndfg', 1),
(7, 9876, '2017-06-06', 2, '123456', '12345', 1233, 5, 'DSFSDFNGNSDFG', 1),
(8, 3333, '2017-06-01', 2, '123', '123', 1236, 5, 'lamapra lalala', 1),
(9, 3333, '2017-06-01', 2, '123', '123', 2134, 3, 'lamapra lalala', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago`
--

CREATE TABLE IF NOT EXISTS `forma_pago` (
  `id_forma_pago` int(11) NOT NULL AUTO_INCREMENT,
  `forma_pago` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_forma_pago`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `forma_pago`
--

INSERT INTO `forma_pago` (`id_forma_pago`, `forma_pago`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_Imagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_Imagen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_Imagen`, `imagen`) VALUES
(13, '131317chandelier-1082182_640.jpg'),
(12, '131325chandelier-390632_640.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id_material` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`id_material`, `material`) VALUES
(1, 'Cristal'),
(2, 'Madera'),
(3, 'Marmol'),
(4, 'Crom'),
(5, 'Acero'),
(6, 'Vidrio'),
(7, 'Bronce'),
(8, 'Tela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE IF NOT EXISTS `medida` (
  `id_medida` int(11) NOT NULL AUTO_INCREMENT,
  `medida` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_medida`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`id_medida`, `medida`) VALUES
(1, 'CM'),
(2, 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(4) NOT NULL AUTO_INCREMENT,
  `codigo_producto` int(4) NOT NULL,
  `nombreP` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `fk_tipo_producto` int(11) DEFAULT NULL,
  `cantidad` int(3) NOT NULL,
  `garantia` int(2) DEFAULT NULL,
  `tamanio` varchar(3) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_material` int(11) DEFAULT NULL,
  `fk_medida` int(11) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_estado` int(11) NOT NULL,
  `imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `codigo_producto`, `nombreP`, `fk_categoria`, `fk_tipo_producto`, `cantidad`, `garantia`, `tamanio`, `fk_material`, `fk_medida`, `precio`, `descripcion`, `fk_estado`, `imagen`) VALUES
(11, 444, 'Caperuza', 2, 7, 2, 1, '60', 8, 1, 20000, 'Caperuza blanca para lampara pequeña de mesa. ', 1, '121220pantalla-lampara-velasco-01.jpg'),
(10, 5555, 'Yesikaterca', 1, 1, 3, 1, '20', 1, 1, 10000, 'Lampara de cristal, 20*20 cm.\r\n10000', 1, '131334imagen19.jpg'),
(12, 555, 'Cadena', 2, 9, 1, 1, '3', 5, 2, 150000, 'Cadena plata de 3 Metros,Para lampara colgante.', 1, '121246cadena.jpg'),
(8, 1010, 'Espiral', 1, 2, 4, 1, '4', 1, 2, 850000, 'Lampra colgante azul', 1, '131339imagen3.jpg'),
(13, 777, 'Bandeja ', 3, 11, 7, 1, '20', 5, 1, 40000, 'Bandeja color plata de 20*15 cm.  $40000', 1, '121245imagen22.jpg'),
(14, 111, 'Cristales', 2, 6, 30, 1, '2', 1, 1, 30000, 'Cristales para lamparas colgantes, 2 cm $30000 la caja. ', 1, '121234img1.jpg'),
(15, 222, 'Floron', 2, 8, 2, 1, '20', 5, 1, 15000, 'Floron color oro , 20*5 $ 15000', 1, '121203Florones.jpg'),
(16, 888, 'Platillos', 2, 10, 2, 1, '10', 1, 1, 8000, 'Platillos trasnparentes de pasta  10*8 cm $ 8000 cada uno.  ', 1, '121259imag2.jpg'),
(17, 999, 'Bandeja ', 3, 11, 3, 1, '30', 5, 1, 48000, 'Bandeja grande 30*20 cm $ 48000 ', 1, '121257imagen 23.jpg'),
(18, 1012, 'Frutero', 3, 12, 2, 1, '60', 5, 1, 60000, 'Frutero  plata 60 cm de alto, $60000', 1, '121245frutero-de-cristal-con-pie.jpg'),
(19, 1013, 'Frutero', 3, 12, 2, 1, '40', 5, 1, 70000, 'Frutero en forma de canasta 40cm ,$70000', 1, '121212f992834072772a00e0de89a0cd03a1d5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE IF NOT EXISTS `rol_usuario` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id_tipo_documento`, `tipo_documento`) VALUES
(1, 'CC'),
(2, 'CE'),
(3, 'TI'),
(4, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_lampara`
--

CREATE TABLE IF NOT EXISTS `tipo_lampara` (
  `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_producto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_tipo_producto`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `tipo_lampara`
--

INSERT INTO `tipo_lampara` (`id_tipo_producto`, `tipo_producto`) VALUES
(1, 'Lampara de techo'),
(2, 'Lampara Colgante'),
(3, 'Lampara de sobremesa'),
(4, 'Lampara de pared'),
(5, 'Lampara de pie'),
(6, 'cristales'),
(7, 'Caperuzas'),
(8, 'Floron'),
(9, 'Cadenas'),
(10, 'Platillos'),
(11, 'Bandejas'),
(12, 'Fruteros'),
(13, 'Porta lampara'),
(14, 'Clavijas'),
(15, 'Interruptores'),
(16, 'Bombillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `documento` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombres` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido2` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(7) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fk_rol_usuario` int(11) NOT NULL,
  PRIMARY KEY (`documento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`documento`, `nombres`, `apellido1`, `apellido2`, `contrasena`, `fk_rol_usuario`) VALUES
('1033799014', 'Angie Paola', 'Jimenez', 'Hidalgo', '1234567', 1),
('123', 'laura', 'Uruena', 'Diaz', '1234567', 2),
('12345', 'Maria', 'Montes', 'Paloma', '1234567', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
