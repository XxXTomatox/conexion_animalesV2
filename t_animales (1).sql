-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2022 a las 20:25:24
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animales_conexion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_animales`
--

CREATE TABLE `t_animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `comida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_animales`
--

INSERT INTO `t_animales` (`id`, `nombre`, `region`, `comida`) VALUES
(3, 'lobo', 'montañas', 'carne'),
(4, 'rana', 'pantanos', 'moscas'),
(5, 'oso', 'maduro', 'tu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_animales`
--
ALTER TABLE `t_animales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_animales`
--
ALTER TABLE `t_animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
