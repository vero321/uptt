-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-03-2020 a las 12:26:56
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uptt_r`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CENTROS_DE_INVESTIGACION`
--

CREATE TABLE `CENTROS_DE_INVESTIGACION` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EMAIL`
--

CREATE TABLE `EMAIL` (
  `id` int(2) NOT NULL,
  `direccion` text COLLATE utf8_slovenian_ci NOT NULL,
  `clave` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Volcado de datos para la tabla `EMAIL`
--

INSERT INTO `EMAIL` (`id`, `direccion`, `clave`) VALUES
(1, 'repo@upttmbi.edu.ve', 'repo1234_');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EQUIPOS`
--

CREATE TABLE `EQUIPOS` (
  `id` int(11) NOT NULL,
  `equipo` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EQUIPOS`
--

INSERT INTO `EQUIPOS` (`id`, `equipo`, `rol`, `id_persona`, `id_nucleo`, `id_pnf`) VALUES
(1, 'veronica osuna', 'autor', 0, 0, 0),
(2, 'marisela olmos', 'asesor academico', 0, 0, 0),
(3, 'jose palencia', 'autor', 0, 0, 0),
(4, 'karla quintero', 'autor', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTRUCTURAS`
--

CREATE TABLE `ESTRUCTURAS` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LINEAS_DE_INVESTIGACION`
--

CREATE TABLE `LINEAS_DE_INVESTIGACION` (
  `id` int(11) NOT NULL,
  `nombre` tinytext COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_centro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LINEAS_DE_INVESTIGACION__TRABAJOS`
--

CREATE TABLE `LINEAS_DE_INVESTIGACION__TRABAJOS` (
  `id` int(11) NOT NULL,
  `id_linea` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NUCLEOS`
--

CREATE TABLE `NUCLEOS` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_nucleo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `NUCLEOS`
--

INSERT INTO `NUCLEOS` (`id`, `nombre_largo`, `nombre_corto`, `id_nucleo`) VALUES
(1, 'Núcleos Universitarios de Educación Socialista “Robert Serra” ', 'NUES Beatriz ', 0),
(2, 'Núcleos Universitarios de Educación Socialista “Hugo Rafael Chávez Frías”', 'NUES San Luis ', 0),
(3, 'Núcleos Universitarios de Educación Socialista “Fabricio Ojeda”', 'NUES Bocono', 0),
(4, 'Núcleos Universitarios de Educación Socialista “Francisco de Miranda”', 'NUES Dividive', 0),
(7, 'Núcleos Universitarios de Educación Socialista “Barbarita De La Torre”', 'NUES Trujillo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NUCLEOS__PNF`
--

CREATE TABLE `NUCLEOS__PNF` (
  `id` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `NUCLEOS__PNF`
--

INSERT INTO `NUCLEOS__PNF` (`id`, `id_nucleo`, `id_pnf`) VALUES
(1, 1, 1),
(2, 3, 4),
(3, 3, 2),
(4, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONAS`
--

CREATE TABLE `PERSONAS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `PERSONAS`
--

INSERT INTO `PERSONAS` (`id`, `nombre`, `apellido`) VALUES
(25913031, 'maria veronica', 'osuna briceño'),
(22345125, 'marisela', 'olmos de delgadillo'),
(25171058, '', ''),
(25913050, 'karla patricia', 'quintero espinoza'),
(12345678, '', ''),
(1234, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PNF`
--

CREATE TABLE `PNF` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `PNF`
--

INSERT INTO `PNF` (`id`, `nombre_largo`, `nombre_corto`) VALUES
(1, 'Programa Nacional de Formación Critica en Informática', 'Informática'),
(2, 'Programa Nacional de Formacion Critica en Mecanica', 'Mecanica'),
(3, 'Programa Nacional de Formacion Critica en Construccion Civil', 'Construccion Civil'),
(4, 'Programa Nacional de Formacion Critica Turismo', 'Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRIVILEGIOS`
--

CREATE TABLE `PRIVILEGIOS` (
  `id` int(11) NOT NULL,
  `privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROPUESTAS`
--

CREATE TABLE `PROPUESTAS` (
  `id` int(11) NOT NULL,
  `status` enum('APROBADA','CORRECCIONES','DECLINADA','RECHAZADA') COLLATE utf8_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8_unicode_ci NOT NULL,
  `id_trayecto_pnf` int(11) NOT NULL,
  `id_nucleo_pnf` int(11) NOT NULL,
  `id_equipo_de_trabajo` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `id_estructura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `PROPUESTAS`
--

INSERT INTO `PROPUESTAS` (`id`, `status`, `observacion`, `id_trayecto_pnf`, `id_nucleo_pnf`, `id_equipo_de_trabajo`, `id_trabajo`, `id_estructura`) VALUES
(1, 'APROBADA', '', 0, 0, 1, 1, 0),
(2, 'CORRECCIONES', '', 0, 0, 2, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROLES`
--

CREATE TABLE `ROLES` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ROLES`
--

INSERT INTO `ROLES` (`id`, `nombre`, `rol`, `nivel`) VALUES
(1, '', 'Admisnistrador', 1000),
(2, '', 'Operador Nucleo', 900),
(3, '', 'Operador PNF', 800),
(4, '', 'Profesor Proyecto', 700);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROLES__PRIVILEGIOS`
--

CREATE TABLE `ROLES__PRIVILEGIOS` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPOS_DE_DOCUMENTOS`
--

CREATE TABLE `TIPOS_DE_DOCUMENTOS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `id_estructura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TIPOS_DE_DOCUMENTOS`
--

INSERT INTO `TIPOS_DE_DOCUMENTOS` (`id`, `nombre`, `nivel`, `id_estructura`) VALUES
(1, 'titulo', 1, 0),
(2, 'resumen', 2, 0),
(3, 'palabras clave', 3, 0),
(4, 'parte 1', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRABAJOS`
--

CREATE TABLE `TRABAJOS` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_mes` enum('SIN MES','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE') COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_anyo` year(4) NOT NULL,
  `observacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `responsable` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` enum('APROBADO','CORRECCIONES','REPROBADO','') COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo_de_documento` int(11) NOT NULL,
  `id_equipo_de_trabajo` int(11) NOT NULL,
  `id_trayecto_pnf` int(11) NOT NULL,
  `id_estructura` int(11) NOT NULL,
  `id_linea_trabajo` int(11) NOT NULL,
  `id_nucleo_pnf` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `TRABAJOS`
--

INSERT INTO `TRABAJOS` (`id`, `descripcion`, `fecha_mes`, `fecha_anyo`, `observacion`, `responsable`, `status`, `id_tipo_de_documento`, `id_equipo_de_trabajo`, `id_trayecto_pnf`, `id_estructura`, `id_linea_trabajo`, `id_nucleo_pnf`) VALUES
(1, 'repositorio', 'ENERO', 2020, 'repositorio uptt', 'veronica osuna', 'APROBADO', 1, 1, 4, 0, 0, 0),
(2, 'mmmmmmmmmmm.........', 'SEPTIEMBRE', 2018, 'mmmmmmmmmmmmmmmnnnnnnnnnnn.........', 'karla quintero', 'CORRECCIONES', 2, 2, 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRABAJOS__DOCUMENTOS`
--

CREATE TABLE `TRABAJOS__DOCUMENTOS` (
  `id` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `observacion` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `id_tipo_de_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRAYECTOS`
--

CREATE TABLE `TRAYECTOS` (
  `id` int(11) NOT NULL,
  `trayecto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `TRAYECTOS`
--

INSERT INTO `TRAYECTOS` (`id`, `trayecto`) VALUES
(1, 'TRAYECTO I'),
(2, 'TRAYECTO II'),
(3, 'TRAYECTO III'),
(4, 'TRAYECTO IV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRAYECTOS__PNF`
--

CREATE TABLE `TRAYECTOS__PNF` (
  `id` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL,
  `id_trayecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `TRAYECTOS__PNF`
--

INSERT INTO `TRAYECTOS__PNF` (`id`, `id_pnf`, `id_trayecto`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave_temporal` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `plazo` datetime NOT NULL,
  `jerarquia` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`id`, `correo`, `clave`, `clave_temporal`, `plazo`, `jerarquia`) VALUES
('12345678', 'pedro@gmail.com', '$2y$10$VMjPlAEg3L2VcBAs.s6vi.agwo2e3PkPhVx0MzlJGb6jDCpPDnmES', '', '0000-00-00 00:00:00', ''),
('25913031', 'vero@gmail.com', '$2y$10$8.yp0iKh0MVPH2oXK.2R4OmWBI34fThjgp0PDyxDCFndKMvWxZHSO', '', '0000-00-00 00:00:00', ''),
('25171058', 'palencia575@gmail.com', '$2y$10$3Nh82RwA3vhmRTGeaSRk1O1CfQt/ryCOKc1oWF4zXP6T/cNkr.cru', '$2y$10$d7y3t6IqDHXnVKoDTXbTe.Ws0ZtR5LWYqrE1eYJ.np0gR9Dfd6vjy', '2020-03-17 15:00:00', ''),
('25171057', 'juana@gmail.com', '$2y$10$9AeDTisIDLTeIvwIO0vLV.dpDahVfHC2bNoaQ33fgXU2EeECzpKIK', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS__ROLES`
--

CREATE TABLE `USUARIOS__ROLES` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Volcado de datos para la tabla `USUARIOS__ROLES`
--

INSERT INTO `USUARIOS__ROLES` (`id`, `id_usuario`, `id_rol`, `id_nucleo`, `id_pnf`) VALUES
(1, 25913031, 1, 0, 0),
(2, 25913031, 2, 1, 0),
(4, 25171058, 2, 1, 1),
(5, 25171058, 3, 1, 1),
(6, 25171058, 4, 0, 0),
(7, 25171058, 1, 0, 0),
(8, 2517105, 1, 0, 0),
(9, 2517105, 3, 0, 0),
(10, 25171057, 4, 0, 0),
(11, 25171057, 1, 0, 0),
(12, 1234, 3, 0, 0),
(13, 25913034, 2, 0, 0),
(14, 25913034, 3, 0, 0),
(15, 25913034, 4, 0, 0),
(16, 12345678, 1, 0, 0),
(17, 12345, 1, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CENTROS_DE_INVESTIGACION`
--
ALTER TABLE `CENTROS_DE_INVESTIGACION`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `EMAIL`
--
ALTER TABLE `EMAIL`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `EQUIPOS`
--
ALTER TABLE `EQUIPOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ESTRUCTURAS`
--
ALTER TABLE `ESTRUCTURAS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `LINEAS_DE_INVESTIGACION`
--
ALTER TABLE `LINEAS_DE_INVESTIGACION`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `LINEAS_DE_INVESTIGACION__TRABAJOS`
--
ALTER TABLE `LINEAS_DE_INVESTIGACION__TRABAJOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `NUCLEOS`
--
ALTER TABLE `NUCLEOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `NUCLEOS__PNF`
--
ALTER TABLE `NUCLEOS__PNF`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PERSONAS`
--
ALTER TABLE `PERSONAS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PNF`
--
ALTER TABLE `PNF`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PRIVILEGIOS`
--
ALTER TABLE `PRIVILEGIOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PROPUESTAS`
--
ALTER TABLE `PROPUESTAS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ROLES`
--
ALTER TABLE `ROLES`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ROLES__PRIVILEGIOS`
--
ALTER TABLE `ROLES__PRIVILEGIOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TIPOS_DE_DOCUMENTOS`
--
ALTER TABLE `TIPOS_DE_DOCUMENTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TRABAJOS`
--
ALTER TABLE `TRABAJOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TRABAJOS__DOCUMENTOS`
--
ALTER TABLE `TRABAJOS__DOCUMENTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TRAYECTOS`
--
ALTER TABLE `TRAYECTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TRAYECTOS__PNF`
--
ALTER TABLE `TRAYECTOS__PNF`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `USUARIOS__ROLES`
--
ALTER TABLE `USUARIOS__ROLES`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CENTROS_DE_INVESTIGACION`
--
ALTER TABLE `CENTROS_DE_INVESTIGACION`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `EMAIL`
--
ALTER TABLE `EMAIL`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `EQUIPOS`
--
ALTER TABLE `EQUIPOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ESTRUCTURAS`
--
ALTER TABLE `ESTRUCTURAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `LINEAS_DE_INVESTIGACION`
--
ALTER TABLE `LINEAS_DE_INVESTIGACION`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `LINEAS_DE_INVESTIGACION__TRABAJOS`
--
ALTER TABLE `LINEAS_DE_INVESTIGACION__TRABAJOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `NUCLEOS`
--
ALTER TABLE `NUCLEOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `NUCLEOS__PNF`
--
ALTER TABLE `NUCLEOS__PNF`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `PERSONAS`
--
ALTER TABLE `PERSONAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25913051;
--
-- AUTO_INCREMENT de la tabla `PNF`
--
ALTER TABLE `PNF`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `PRIVILEGIOS`
--
ALTER TABLE `PRIVILEGIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `PROPUESTAS`
--
ALTER TABLE `PROPUESTAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ROLES`
--
ALTER TABLE `ROLES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ROLES__PRIVILEGIOS`
--
ALTER TABLE `ROLES__PRIVILEGIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TIPOS_DE_DOCUMENTOS`
--
ALTER TABLE `TIPOS_DE_DOCUMENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TRABAJOS`
--
ALTER TABLE `TRABAJOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TRABAJOS__DOCUMENTOS`
--
ALTER TABLE `TRABAJOS__DOCUMENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TRAYECTOS`
--
ALTER TABLE `TRAYECTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TRAYECTOS__PNF`
--
ALTER TABLE `TRAYECTOS__PNF`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `USUARIOS__ROLES`
--
ALTER TABLE `USUARIOS__ROLES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
