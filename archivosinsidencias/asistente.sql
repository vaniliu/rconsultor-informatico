-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2018 a las 21:57:50
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asistente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `area`) VALUES
(1, 'Ingieneria de Sistemas'),
(2, 'Ingieneria Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `estado` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `estado`) VALUES
(1, 'en proceso'),
(2, 'cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insidentes`
--

CREATE TABLE `insidentes` (
  `idinsidentes` int(11) NOT NULL,
  `idareas` int(11) DEFAULT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensajes` varchar(2000) NOT NULL,
  `rutaarchivos` varchar(2000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `insidentes`
--

INSERT INTO `insidentes` (`idinsidentes`, `idareas`, `asunto`, `mensajes`, `rutaarchivos`, `estado`, `idusuario`, `fecha`, `ticket`) VALUES
(7, 1, 'prueba', 'hola', 'archivosinsidencias/certificado android.pdf', 1, 7, '2018-11-16', 4),
(8, 1, 'prueba', 'hola  saludos  ', 'archivosinsidencias/', 1, 6, '2018-11-19', 7),
(9, 2, 'fallo en el servidor  xampp por  error  505  ', 'buenos dias ', 'archivosinsidencias/cso7252.pdf', 1, 6, '2018-11-19', 10),
(10, 1, 'juan', 'prueba  ', 'archivosinsidencias/', 1, 6, '2018-11-19', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `ticket` int(11) NOT NULL,
  `respuesta` varchar(500) NOT NULL,
  `fechares` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`ticket`, `respuesta`, `fechares`) VALUES
(7, 'prueba respuesta 1', '2018-11-19'),
(7, 'prueba respuesta 2', '2018-11-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `nomrol` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nomrol`) VALUES
(1, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `idrol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombres`, `apellidos`, `email`, `usuario`, `contrasena`, `idrol`) VALUES
(6, 'juan', 'moreno', 'manius1027@hotmail.com', 'jmorenoe', '123456789', 1),
(7, 'vanessa', 'nieto', 'brenda.1990_@hotmail.com', 'vnieto', 'juano', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `insidentes`
--
ALTER TABLE `insidentes`
  ADD PRIMARY KEY (`idinsidentes`),
  ADD KEY `areas_idx` (`idareas`),
  ADD KEY `estado_idx` (`estado`),
  ADD KEY `usuario_idx` (`idusuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD KEY `roles_idx` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `insidentes`
--
ALTER TABLE `insidentes`
  MODIFY `idinsidentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `insidentes`
--
ALTER TABLE `insidentes`
  ADD CONSTRAINT `areas` FOREIGN KEY (`idareas`) REFERENCES `area` (`idarea`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `estado` FOREIGN KEY (`estado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `roles` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
