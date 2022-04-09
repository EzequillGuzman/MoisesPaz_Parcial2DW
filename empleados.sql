-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2022 a las 02:49:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dw2022_personas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Codigo` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Numero` int(20) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Texto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Codigo`, `Nombre`, `Numero`, `Fecha`, `Texto`) VALUES
(11, '11111', 11111, '11111', '111111'),
(101, 'Manuel', 35643534, '2021-09-07', 'Gerente'),
(202, 'Mariana', 57393929, '2022-04-04', 'Secretaria'),
(303, 'Jorge', 41631660, '2022-01-05', 'Sub-Gerente'),
(404, 'Kristel', 56993030, '2021-11-02', 'Recepcionista'),
(505, 'Noé', 37533634, '2022-06-09', 'Tesorero'),
(606, 'Valeria', 58637373, '2021-08-18', 'Reportera'),
(607, 'Rashell', 39245325, '10/04/2022', 'Asesora'),
(608, 'Rashell', 56473828, '10/12/2022', 'Contadora'),
(609, 'Katherine', 46374634, '10/02/2022', 'Diseñadoraa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
