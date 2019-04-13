-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2019 a las 15:35:37
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta`
--

CREATE TABLE `acta` (
  `ID_acta` int(11) NOT NULL,
  `fecha` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `creado` int(11) NOT NULL,
  `elaborado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `ID_detalle` int(11) NOT NULL,
  `ID_actas` int(11) NOT NULL,
  `ID_productos` int(11) NOT NULL,
  `serie` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lote` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_vencimiento` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Nivel_inspeccion` tinyint(1) NOT NULL,
  `tamano` tinyint(1) NOT NULL,
  `Rotulacion_empaque` tinyint(1) NOT NULL,
  `Rotulacion_empaque_secundario` tinyint(1) NOT NULL,
  `ausencia_efectos_FF` tinyint(1) NOT NULL,
  `Estado_recepcion_tecnica` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `ID_permisos` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Crear_acta` tinyint(1) NOT NULL,
  `Modificar_acta` tinyint(1) NOT NULL,
  `Eliminar_acta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`ID_permisos`, `Nombre`, `Crear_acta`, `Modificar_acta`, `Eliminar_acta`) VALUES
(1, 'Sistema', 1, 0, 1),
(2, 'Administrador', 1, 0, 1),
(3, 'Operario', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre_comercial` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Registro_sanitario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_generico` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Forma_farmaceutica` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `presentacion_comercial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `concentracion` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado_registro_sanitario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion_riesgo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `vida_util` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_Producto`, `Nombre_comercial`, `Registro_sanitario`, `Nombre_generico`, `Forma_farmaceutica`, `presentacion_comercial`, `concentracion`, `estado_registro_sanitario`, `clasificacion_riesgo`, `vida_util`, `marca`, `activo`) VALUES
(1, 'GUADSIDUASIODA ', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'jhgh', '5 AÑOS', '1', 1),
(2, 'albertodasd ', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2028', 'IIa', '5 AÑOS', '3', 1),
(3, 'AIRE REES 1 LITRO', '2017DM-0000426-R1as', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KITf', 'NO APLICA', '11/05/2027', 'IIa', '40 AÑOS', '3', 1),
(4, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '3', 1),
(5, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(6, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(7, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(8, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 0),
(9, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(10, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(11, 'AIRE REES 1 LITRO', '2017DM-0000426-R1hbgvfcdxsxcfvygbunijmoknutyvrcex', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(12, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(13, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(14, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(15, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(16, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '3', 1),
(17, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '25 AÑOS', '3', 1),
(18, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '3', 1),
(19, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(20, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(21, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', 'gftgyhiuygtf', 0),
(22, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(23, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(24, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(25, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 0),
(26, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 1),
(27, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 0),
(29, 'AIRE REES 1 LITRO', '2017DM-0000426-R1', 'SISTEMA DESECHABLE PARA ANESTESIA Y VENTILACIÓN', 'NO APLICA', 'KIT', 'NO APLICA', '11/05/2027', 'IIa', '5 AÑOS', '1', 0),
(30, 'ha', 'ausadjkas', 'h', 'hh', 'hh', 'hhh', 'hhhh', 'jjj', 'j', 'hhhh', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `Usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `ID_permisos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `Usuario`, `Nombre`, `pass`, `ID_permisos`) VALUES
(1, 'admin', 'Administrador', 'admin1234', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acta`
--
ALTER TABLE `acta`
  ADD PRIMARY KEY (`ID_acta`),
  ADD KEY `creado` (`creado`,`elaborado`),
  ADD KEY `elaborado` (`elaborado`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`ID_detalle`),
  ADD KEY `ID_actas` (`ID_actas`,`ID_productos`),
  ADD KEY `ID_productos` (`ID_productos`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`ID_permisos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_Producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD KEY `ID_permisos` (`ID_permisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acta`
--
ALTER TABLE `acta`
  MODIFY `ID_acta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `ID_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `ID_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acta`
--
ALTER TABLE `acta`
  ADD CONSTRAINT `acta_ibfk_1` FOREIGN KEY (`creado`) REFERENCES `usuarios` (`ID_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `acta_ibfk_2` FOREIGN KEY (`elaborado`) REFERENCES `usuarios` (`ID_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`ID_actas`) REFERENCES `acta` (`ID_acta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`ID_productos`) REFERENCES `productos` (`ID_Producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ID_permisos`) REFERENCES `permisos` (`ID_permisos`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
