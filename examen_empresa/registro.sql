-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-06-2017 a las 01:43:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `examen_empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `idregistro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `tipo_empresa` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idregistro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`idregistro`, `nombre_empresa`, `tipo_empresa`, `pais`, `estado`, `ciudad`, `user`, `password`, `descripcion`) VALUES
(1, 'empresita', 'Sociedad Anomina (S.A)', 'Venezuela', 'zulia', 'cabimas', 'shaka0241', '12', 'sajhfdlkjasdhflkjashdfkljshadk'),
(2, 'empresota', 'Sociedad Anomina (S.A)', 'Venezuela', 'zulia', 'cabimas', 'shaka0242', '12', 'asdlfhasiudhfkjlashfdkjhasldlkjfhaljskdhflakjsdhflk'),
(3, 'empresa', 'Sociedad Anomina (S.A)', 'Colombia', 'Carabobo', 'Valencia', 'shaka0243', '123', 'Buena empresa'),
(6, 'pdvsa', 'Sociedad Anomina (S.A)', 'Venezuela', 'Todos', 'Todos', 'chavez', '12', 'petro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
