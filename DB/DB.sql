-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 08:19:43
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int AUTO_INCREMENT,
  `puntuation` int(20) NOT NULL,
  `difficult` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `number_persons` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estimated_time` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `vegan` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `instruction` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `ingredients` (
  `id` int,
  `ingredient` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `recipe` (
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS `cocina` (
  `id` int AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO cocina (nombre, imagen, precio) VALUES ("Sartén", "", "17,75");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Olla", "", "12");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Mantel", "", "5");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Pack de vasos de 6", "", "5");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Pack de cuchillos de 6", "", "3");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Cuchillo jamonero", "", "7");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Nevera modelo A4G", "", "270");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Horno eléctrico modelo 7B805", "", "180");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Microondas", "", "11,99");
INSERT INTO cocina (nombre, imagen, precio) VALUES ("Lavavajillas", "", "300");

UPDATE cocina SET imagen = "module/cocina/view/image/cocina.jpg"
/*CREATE TABLE IF NOT EXISTS `usuario` (
  `user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `sex` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(2) NOT NULL,
  `country` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `language` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `hobby` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `pass`, `name`, `dni`, `sex`, `birthdate`, `age`, `country`, `language`, `comment`, `hobby`) VALUES
('ancoca', 'User-123', 'angel', '48292627X', 'Hombre', '19/07/1993', 22, 'Francia', 'Ingles:Frances:', 'Welcome to this page', 'Informatica:Alimentacion:Automovil:'),
('daurgil', 'User-123', 'david', '87654321X', 'Hombre', '06/06/1990', 25, 'EspaÃ±a', 'EspaÃ±ol:Ingles:', 'Hoal mundo', 'Informatica:'),
('usuario', 'User-123', 'usuario', '12345678Z', 'Hombre', '16/05/1980', 36, 'EspaÃ±a', 'Ingles:', 'Adios mundo', 'Informatica:Automovil:');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
