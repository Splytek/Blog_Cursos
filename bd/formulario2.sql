-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2020 a las 16:10:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `edad` int(20) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  `genero` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `edad`, `mensaje`, `genero`) VALUES
(1, '0', '0', 24, '0', '0'),
(2, '0', '0', 24, '0', '0'),
(3, '0', '0', 24, '0', '0'),
(4, '0', '0', 24, '52552252', '0'),
(5, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'dffdfdgg', 'Masculino'),
(6, 'Hugo Gonzalez', 'splytek@gmail.com', 24, 'Hola como estas? Yo bien, Que bueno que este bien.', 'Masculino'),
(7, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'ghghhghg', 'Masculino'),
(8, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'hgghhh', 'Masculino'),
(9, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'hgghhh', 'Masculino'),
(10, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'hgghhh', 'Masculino'),
(11, 'Gonzalez Gomez', 'splytek@gmail.com', 24, 'fggdgdgfd', 'Masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
