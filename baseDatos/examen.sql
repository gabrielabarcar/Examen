-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2020 a las 07:13:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `nombredueno` varchar(50) NOT NULL,
  `nombremascota` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `edadmascota` varchar(50) NOT NULL,
  `fechacita` date NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombredueno`, `nombremascota`, `raza`, `edadmascota`, `fechacita`, `observaciones`) VALUES
(1, 'Gabriel', 'Luquitas', 'No', '8 años', '2020-08-13', 'Luquitas es un perrito grande y hermoso'),
(8, 'Daniel', 'tdas', 't', '5', '2020-07-31', 'o2'),
(9, 'Tavo', 'gato', 'gato', '2', '2020-08-20', 'ygvtfctf'),
(10, 'Barbara', 'Gabelina', 'Gato', '2', '2020-08-21', 'ddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `estadocuenta` varchar(50) NOT NULL,
  `tipocuenta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `usuario`, `password`, `telefono`, `correo`, `direccion`, `estadocuenta`, `tipocuenta`) VALUES
(1, '112680918', 'Gabriel Abarca', 'gabo', '1234', 60416796, 'gabrielabarcar@hotmail.com', 'San Rafael Abajo, Desamparados.', 'Activo', 'Administrador'),
(3, '88888888888888888888', 'Prueba', 'prueba', '12345', 8888, 'rueba@prueba.com', 'prueba', 'Activo', 'Asistente'),
(4, '1', '1', '1', '1', 1, '1@1', '1', 'desactivado', 'Asistente'),
(5, '123659', 'Pedro', 'pedro', '1234', 65495, 'p@p', '123', 'desactivado', 'Asistente'),
(6, '1281', 'Daniel', 'da', '1234', 21, 'd@d.com', '171', 'desactivado', 'Asistente'),
(7, '511', 'Laura', 'lau', '1234', 441, 'lau@lau', '414', 'desactivado', 'Asistente'),
(8, '1124', 'q', 'q', 'q', 2554, 'q@q', 'q', 'desactivado', 'Asistente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
