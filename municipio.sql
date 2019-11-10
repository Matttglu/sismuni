-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2019 a las 23:46:15
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `municipio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `idbarrio` int(11) NOT NULL,
  `iddelegacion` varchar(11) COLLATE utf32_spanish_ci NOT NULL,
  `descripcion` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegaciones`
--

CREATE TABLE `delegaciones` (
  `iddelegacion` int(40) NOT NULL,
  `descripcion` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `iddirector` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `celular2` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` longblob NOT NULL,
  `fechadesde` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadosinteracciones`
--

CREATE TABLE `estadosinteracciones` (
  `idestado` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interacciones`
--

CREATE TABLE `interacciones` (
  `idinteraccion` int(11) NOT NULL,
  `id tipo se` int(11) NOT NULL,
  `idtipodeinteraccion` int(11) NOT NULL,
  `idresponsable` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `observacion` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `fechainteraccion` varchar(10) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioeducativo`
--

CREATE TABLE `servicioeducativo` (
  `tipo se` int(11) NOT NULL,
  `Autoridad` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Nivel` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `ID Usuario` int(11) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Entrecalle 1` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Entre calle 2` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `iddelegacion` int(11) NOT NULL,
  `idbarrio` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `iddirector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeinteracciones`
--

CREATE TABLE `tiposdeinteracciones` (
  `idtipodeinteraccion` int(11) NOT NULL,
  `tipodeinteraccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposdeinteracciones`
--

INSERT INTO `tiposdeinteracciones` (`idtipodeinteraccion`, `tipodeinteraccion`, `descripcion`) VALUES
(1, 'visita', ''),
(2, 'entrga de kits', ''),
(3, 'mejora edilicia', ''),
(4, 'pintura', ''),
(5, 'entrega materiales', ''),
(6, 'pasantias', ''),
(7, 'viajes', ''),
(8, 'otras', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdeusuarios`
--

CREATE TABLE `tiposdeusuarios` (
  `idtipousuario` int(40) NOT NULL,
  `descripcion` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `rol` varchar(50) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tiposdeusuarios`
--

INSERT INTO `tiposdeusuarios` (`idtipousuario`, `descripcion`, `rol`) VALUES
(1, 'administra el sistema', 'administrador'),
(2, 'coordina el sistema', 'coordinador'),
(3, 'referenta el sistema', 'referente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipose`
--

CREATE TABLE `tipose` (
  `idtipo` int(11) NOT NULL,
  `tipose` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(40) NOT NULL,
  `nombre` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `idtipousuario` int(40) NOT NULL,
  `email` varchar(40) COLLATE utf32_spanish_ci NOT NULL,
  `password` text COLLATE utf32_spanish_ci NOT NULL,
  `fechabaja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `apellido`, `idtipousuario`, `email`, `password`, `fechabaja`) VALUES
(1, '', '', 1, 'root', 'root', '0000-00-00'),
(2, 'Matias ', 'Gluszczuk', 1, 'matttglu@gmail.com', '$2y$10$EHcz4.FljeaQxOaF9XGZCe9BT55yNpmXbo29paqAAXNzdwLKYpszq', '0000-00-00'),
(4, 'leandro', 'weber', 2, 'weberleand@patito.com', '$2y$10$A8i6R5BNzt2YyRPKHjvxtOgKNQs1gRCOY4xOmo0eQHJC5OOOGCWqC', '0000-00-00'),
(5, 'Matias', 'Gluszczuk', 2, 'matttglu@outlook.com', '$2y$10$4pKQyL/Fc3Uh0Q9fwK3lgeYCQQ/6ytwBavsfrApgVyo/jI.VUcWTm', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`idbarrio`),
  ADD KEY `iddelegacion` (`iddelegacion`);

--
-- Indices de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  ADD PRIMARY KEY (`iddelegacion`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`iddirector`);

--
-- Indices de la tabla `estadosinteracciones`
--
ALTER TABLE `estadosinteracciones`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD PRIMARY KEY (`idinteraccion`),
  ADD KEY `id tipo se` (`id tipo se`),
  ADD KEY `idtipodeiteracion` (`idtipodeinteraccion`),
  ADD KEY `idresponsable` (`idresponsable`),
  ADD KEY `idestado` (`idestado`);

--
-- Indices de la tabla `servicioeducativo`
--
ALTER TABLE `servicioeducativo`
  ADD KEY `iddelegacion` (`iddelegacion`),
  ADD KEY `idbarrio` (`idbarrio`),
  ADD KEY `ID Usuario` (`ID Usuario`),
  ADD KEY `tipo se` (`tipo se`),
  ADD KEY `idbarrio_2` (`idbarrio`),
  ADD KEY `iddirector` (`iddirector`);

--
-- Indices de la tabla `tiposdeinteracciones`
--
ALTER TABLE `tiposdeinteracciones`
  ADD PRIMARY KEY (`idtipodeinteraccion`);

--
-- Indices de la tabla `tiposdeusuarios`
--
ALTER TABLE `tiposdeusuarios`
  ADD PRIMARY KEY (`idtipousuario`);

--
-- Indices de la tabla `tipose`
--
ALTER TABLE `tipose`
  ADD PRIMARY KEY (`idtipo`),
  ADD KEY `tipose` (`tipose`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idtipousuario` (`idtipousuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `idbarrio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  MODIFY `iddelegacion` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `iddirector` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  MODIFY `idinteraccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiposdeinteracciones`
--
ALTER TABLE `tiposdeinteracciones`
  MODIFY `idtipodeinteraccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipose`
--
ALTER TABLE `tipose`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD CONSTRAINT `interacciones_ibfk_1` FOREIGN KEY (`idestado`) REFERENCES `estadosinteracciones` (`idestado`),
  ADD CONSTRAINT `interacciones_ibfk_2` FOREIGN KEY (`idtipodeinteraccion`) REFERENCES `tiposdeinteracciones` (`idtipodeinteraccion`),
  ADD CONSTRAINT `interacciones_ibfk_3` FOREIGN KEY (`idresponsable`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `servicioeducativo`
--
ALTER TABLE `servicioeducativo`
  ADD CONSTRAINT `servicioeducativo_ibfk_1` FOREIGN KEY (`iddelegacion`) REFERENCES `delegaciones` (`iddelegacion`),
  ADD CONSTRAINT `servicioeducativo_ibfk_2` FOREIGN KEY (`idbarrio`) REFERENCES `barrios` (`idbarrio`),
  ADD CONSTRAINT `servicioeducativo_ibfk_4` FOREIGN KEY (`ID Usuario`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `servicioeducativo_ibfk_5` FOREIGN KEY (`tipo se`) REFERENCES `tipose` (`idtipo`),
  ADD CONSTRAINT `servicioeducativo_ibfk_6` FOREIGN KEY (`iddirector`) REFERENCES `director` (`iddirector`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idtipousuario`) REFERENCES `tiposdeusuarios` (`idtipousuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
