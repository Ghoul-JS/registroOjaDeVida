-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 00:28:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda_usco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basicos`
--

CREATE TABLE `basicos` (
  `id` int(12) NOT NULL,
  `cedula` int(12) NOT NULL,
  `codigo` int(12) NOT NULL,
  `nombre1` varchar(20) NOT NULL,
  `nombre2` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL,
  `ciudad` varchar(25) NOT NULL,
  `telefono` int(12) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `basicos`
--

INSERT INTO `basicos` (`id`, `cedula`, `codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `ciudad`, `telefono`, `correo`, `direccion`) VALUES
(1, 1003803957, 1010, 'julian', 'andres', 'garcia', 'perdomo', 'pitalito', 322558899, 'mcerquera6420@gmail.com', 'calle 18a # 39 - 100'),
(2, 1002142536, 20181102, 'diana', 'marcela', 'romero', 'diaz', 'neiva', 2147483647, 'mcerquera6420@gmail.com', 'calle 18a # 39 - 100 el vergel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `basicos`
--
ALTER TABLE `basicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `basicos`
--
ALTER TABLE `basicos`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
