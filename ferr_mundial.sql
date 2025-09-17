-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2025 a las 00:00:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ferr_mundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `doc_vendedor` int(11) NOT NULL,
  `doc_comprador` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `material` varchar(60) NOT NULL,
  `nombre_comprador` varchar(60) NOT NULL,
  `nombre_vendedor` varchar(60) NOT NULL,
  `apellido_comprador` varchar(60) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `doc_vendedor`, `doc_comprador`, `cantidad`, `material`, `nombre_comprador`, `nombre_vendedor`, `apellido_comprador`, `telefono`, `fecha`, `precio`) VALUES
(8, 0, 2147483647, 5, 'tornillo', 'ivan', 'sebastian', 'martinez', 317289154, '2025-09-17 23:40:40', 200),
(9, 0, 0, 0, 'producto', 'nombre_2', 'nombre_1', 'apellido', 0, '2025-09-17 23:57:57', 0),
(10, 0, 2147483647, 5, 'tornillo', 'ivan', 'sebastian', 'martinez', 317289154, '2025-09-17 23:57:57', 200);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
