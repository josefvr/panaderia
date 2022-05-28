-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-12-2021 a las 22:28:01
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admi`
--

CREATE TABLE `admi` (
  `id` int(5) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `correo` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admi`
--

INSERT INTO `admi` (`id`, `contrasena`, `nombre`, `correo`) VALUES
(1, 'HolaCetina1', 'Hector Cetina', 'hector.cc@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panes`
--

CREATE TABLE `panes` (
  `imagen` varchar(200) NOT NULL,
  `nombre_pan` varchar(80) NOT NULL,
  `precio` varchar(4) NOT NULL,
  `promocion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `panes`
--

INSERT INTO `panes` (`imagen`, `nombre_pan`, `precio`, `promocion`) VALUES
('pan/2021-12-16-06:41:54-concha.jpg', 'Concha', '$4', 'NUEVO'),
('pan/2021-12-16-06:48:04-cuernito.jpeg', 'Cuernito', '$4', 'NUEVO'),
('pan/2021-12-16-06:13:32-matecada.jpg', 'Mantecada', '$4', 'NUEVO'),
('pan/2021-12-16-06:15:24-pan de muerto.jpg', 'Pan de Muerto', '$50', 'NUEVO por tiempo limitado'),
('pan/2021-12-16-09:27:22-', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
