-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2018 a las 15:50:47
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taste`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

CREATE TABLE `cocina` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cocina`
--

INSERT INTO `cocina` (`id`, `nombre`, `imagen`, `precio`) VALUES
(1, 'Sarten', 'module/cocina/view/image/cocina.jpg', '17.75'),
(2, 'Olla', 'module/cocina/view/image/cocina.jpg', '12'),
(3, 'Mantel', 'module/cocina/view/image/cocina.jpg', '5'),
(4, 'Pack de vasos de 6', 'module/cocina/view/image/cocina.jpg', '5'),
(5, 'Pack de cuchillos de 6', 'module/cocina/view/image/cocina.jpg', '3'),
(6, 'Cuchillo jamonero', 'module/cocina/view/image/cocina.jpg', '7'),
(7, 'Nevera modelo A4G', 'module/cocina/view/image/cocina.jpg', '270'),
(8, 'Horno electrico modelo 7B805', 'module/cocina/view/image/cocina.jpg', '180'),
(9, 'Microondas', 'module/cocina/view/image/cocina.jpg', '11.99'),
(10, 'Lavavajillas', 'module/cocina/view/image/cocina.jpg', '300');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `usuario`, `fecha`) VALUES
(26, 'admin', '2018-03-03 19:26:47'),
(27, 'admin', '2018-03-05 16:13:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `ingredient` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`id`, `id_compra`, `id_producto`, `cantidad`, `precio`) VALUES
(48, 26, 1, '1', '17.75'),
(49, 26, 5, '1', '3'),
(50, 26, 4, '1', '5'),
(51, 27, 4, '2', '10'),
(52, 27, 1, '1', '17.75');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `puntuation` int(20) NOT NULL,
  `difficult` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `number_persons` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estimated_time` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `vegan` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `instruction` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recipe`
--

INSERT INTO `recipe` (`id`, `puntuation`, `difficult`, `name`, `number_persons`, `estimated_time`, `vegan`, `description`, `instruction`, `image`) VALUES
(27, 1, '1', 'c', '1', '2.0', 'No', 'c', 'c', 'module/recipe/view/uploads/pic03.jpg'),
(28, 1, '1', 'd', '1', '3.0', 'No', 'd', 'd', 'module/recipe/view/uploads/banner.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `especialidades` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aficiones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idioma` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`email`, `username`, `password`, `type`, `fecha_nacimiento`, `especialidades`, `aficiones`, `idioma`) VALUES
('a@gmail.com', 'd', 'd', 'client', '', '', '', 'InglÃ©s'),
('s@gmail.com', 's', 's', 'client', '', '', '', 'InglÃ©s'),
('serhuegi@gmail.com', 'admin', 'admin', 'admin', '01/02/2018', 'Verduras,Pescado', 'Bailar,Cocinar', 'InglÃ©s');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cocina`
--
ALTER TABLE `cocina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cocina`
--
ALTER TABLE `cocina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
