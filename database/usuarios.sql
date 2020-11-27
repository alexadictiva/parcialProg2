-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2020 a las 01:10:43
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adoore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `name`, `dni`, `mail`, `password`) VALUES
(1, 'alexadictiva', 'Libia', '95800263', 'Alexandra220790@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(13, 'alexa21', 'libia', '234234235', 'asd@hotmail.com', '1234567'),
(14, 'eriidiaz', 'cosita', '456337', 'segfsttt45433fs@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(16, 'eriidiazd', 'cositaa', '456337s', 'segfsttt454a33fs@hotmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(17, 'eriidiazqd', 'cositqaa', '456q337s', 'segfstttq454a33fs@hotmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc'),
(18, 'ninita59', 'maria', '2425312', 'marianina@hotmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
