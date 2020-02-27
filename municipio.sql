-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2020 a las 00:00:18
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

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
  `iddelegacion` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`idbarrio`, `iddelegacion`, `descripcion`) VALUES
(1, 1, 'all boys');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delegaciones`
--

CREATE TABLE `delegaciones` (
  `iddelegacion` int(40) NOT NULL,
  `descripcion` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `delegaciones`
--

INSERT INTO `delegaciones` (`iddelegacion`, `descripcion`) VALUES
(1, 'newels');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `iddirector` int(11) NOT NULL,
  `nombredi` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `celular2` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto` longblob NOT NULL,
  `fechadesde` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`iddirector`, `nombredi`, `apellido`, `celular`, `celular2`, `email`, `foto`, `fechadesde`, `observaciones`) VALUES
(1, 'wadaw', 'sdsds', 312321, 312312, 'root', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interacciones`
--

CREATE TABLE `interacciones` (
  `idinteraccion` int(11) NOT NULL,
  `idse` int(11) NOT NULL,
  `idtipodeinteraccion` int(11) NOT NULL,
  `idresponsable` int(11) NOT NULL,
  `observacion` varchar(100) COLLATE utf32_spanish_ci NOT NULL,
  `fechainteraccion` varchar(10) COLLATE utf32_spanish_ci NOT NULL,
  `estado` varchar(40) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `interacciones`
--

INSERT INTO `interacciones` (`idinteraccion`, `idse`, `idtipodeinteraccion`, `idresponsable`, `observacion`, `fechainteraccion`, `estado`) VALUES
(1, 4, 1, 1, 'puto', 'ayer', 'en proceso'),
(2, 4, 1, 1, 'puto', 'ayer', 'en proceso'),
(3, 4, 1, 1, 'puto', 'ayer', 'en proceso'),
(4, 4, 1, 1, 'puto', 'ayer', 'en proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referentes`
--

CREATE TABLE `referentes` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `fechabaja` date NOT NULL,
  `idcoordinador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `referentes`
--

INSERT INTO `referentes` (`idusuario`, `nombre`, `apellido`, `idtipousuario`, `email`, `password`, `fechabaja`, `idcoordinador`) VALUES
(1, 'Valentin ', 'Gluszczuk', 3, 'valentingluszczuk@gmail.com', '$2y$10$5gxd/d7sA.XZQjySiVHpZ.6.VTNijVJfOGuCiwDUlxQLlw9Hujgfe', '0000-00-00', 0),
(2, 'Matias', 'Gluszczuk', 3, 'dadw@sad', '$2y$10$2RXTwCJj3lGiTitTRZmUoOhYoTSoYg.I/3itcAV94nQRIjLcx6dpu', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioeducativo`
--

CREATE TABLE `servicioeducativo` (
  `idse` int(11) NOT NULL,
  `tipose` int(11) NOT NULL,
  `Autoridad` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Nivel` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Numero` int(11) NOT NULL,
  `Nombrese` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `idusuario` int(11) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Entrecalle 1` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `Entre calle 2` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `iddelegacion` int(11) NOT NULL,
  `idbarrio` int(11) NOT NULL,
  `mail` varchar(50) COLLATE utf32_spanish_ci NOT NULL,
  `iddirector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `servicioeducativo`
--

INSERT INTO `servicioeducativo` (`idse`, `tipose`, `Autoridad`, `Nivel`, `Numero`, `Nombrese`, `idusuario`, `Telefono`, `Direccion`, `Entrecalle 1`, `Entre calle 2`, `iddelegacion`, `idbarrio`, `mail`, `iddirector`) VALUES
(4, 1, 'awda', 'awdwdaw', 11, 'dwawdwa', 5, 3543453, 'jgyjgj', 'jtfhjfth', 'hfthft', 1, 1, 'fawfdawdf', 1),
(5, 1, 'awda', 'awdwdaw', 11, 'dawdawddawddawdaw', 2, 3543453, 'jgyjgj', 'jtfhjfth', 'hfthft', 1, 1, 'awdwwd', 1);

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

--
-- Volcado de datos para la tabla `tipose`
--

INSERT INTO `tipose` (`idtipo`, `tipose`) VALUES
(6, 'CENS'),
(7, 'CPII'),
(9, 'Escuela Municipal'),
(5, 'Escuela Nivel Adultos'),
(3, 'Escuela Nivel Primario'),
(4, 'Escuela Nivel Secundario'),
(8, 'Fines'),
(2, 'Jardines de Infantes Municipales'),
(1, 'Jardines de Infantes Provinciales');

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
(1, 'valentin', 'gluszczuk', 3, 'valentin@gmail.com', '$2y$10$lSexE32wYaoKKs87e2mmve7KBZ8imn2NEE9IgP46f5wn7kpARznW2', '0000-00-00'),
(2, 'Matias ', 'Gluszczuk', 1, 'matttglu@gmail.com', '$2y$10$EHcz4.FljeaQxOaF9XGZCe9BT55yNpmXbo29paqAAXNzdwLKYpszq', '0000-00-00'),
(4, 'leandro', 'weber', 2, 'weberleand@patito.com', '$2y$10$A8i6R5BNzt2YyRPKHjvxtOgKNQs1gRCOY4xOmo0eQHJC5OOOGCWqC', '0000-00-00'),
(5, 'Matias', 'Gluszczuk', 3, 'matttglu@outlook.com', '$2y$10$HKAS3Qfg6GsYlv77T8yJIegPVd1WeIfSw3.MvFeyLmaRKGaykAwqS', '0000-00-00'),
(7, 'martin', 'vinuales', 2, 'martin@municipio.com', '$2y$10$1LMg34JtZuwo/0Pqme4QrOECtrAcCwo1FSnV7bvbbdiJfIZrzFwjO', '0000-00-00');

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
-- Indices de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD PRIMARY KEY (`idinteraccion`),
  ADD KEY `id tipo se` (`idse`),
  ADD KEY `idtipodeiteracion` (`idtipodeinteraccion`),
  ADD KEY `idresponsable` (`idresponsable`);

--
-- Indices de la tabla `referentes`
--
ALTER TABLE `referentes`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idcoordinador` (`idcoordinador`);

--
-- Indices de la tabla `servicioeducativo`
--
ALTER TABLE `servicioeducativo`
  ADD PRIMARY KEY (`idse`),
  ADD KEY `iddelegacion` (`iddelegacion`),
  ADD KEY `idbarrio` (`idbarrio`),
  ADD KEY `ID Usuario` (`idusuario`),
  ADD KEY `tipo se` (`tipose`),
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
  MODIFY `idbarrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `delegaciones`
--
ALTER TABLE `delegaciones`
  MODIFY `iddelegacion` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `iddirector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `interacciones`
--
ALTER TABLE `interacciones`
  MODIFY `idinteraccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `referentes`
--
ALTER TABLE `referentes`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicioeducativo`
--
ALTER TABLE `servicioeducativo`
  MODIFY `idse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tiposdeinteracciones`
--
ALTER TABLE `tiposdeinteracciones`
  MODIFY `idtipodeinteraccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipose`
--
ALTER TABLE `tipose`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD CONSTRAINT `barrios_ibfk_1` FOREIGN KEY (`iddelegacion`) REFERENCES `delegaciones` (`iddelegacion`);

--
-- Filtros para la tabla `interacciones`
--
ALTER TABLE `interacciones`
  ADD CONSTRAINT `interacciones_ibfk_2` FOREIGN KEY (`idtipodeinteraccion`) REFERENCES `tiposdeinteracciones` (`idtipodeinteraccion`),
  ADD CONSTRAINT `interacciones_ibfk_3` FOREIGN KEY (`idresponsable`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `interacciones_ibfk_4` FOREIGN KEY (`idse`) REFERENCES `servicioeducativo` (`idse`);

--
-- Filtros para la tabla `servicioeducativo`
--
ALTER TABLE `servicioeducativo`
  ADD CONSTRAINT `servicioeducativo_ibfk_1` FOREIGN KEY (`iddelegacion`) REFERENCES `delegaciones` (`iddelegacion`),
  ADD CONSTRAINT `servicioeducativo_ibfk_2` FOREIGN KEY (`idbarrio`) REFERENCES `barrios` (`idbarrio`),
  ADD CONSTRAINT `servicioeducativo_ibfk_4` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `servicioeducativo_ibfk_5` FOREIGN KEY (`tipose`) REFERENCES `tipose` (`idtipo`),
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
