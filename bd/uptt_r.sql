-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-03-2020 a las 17:58:43
-- Versión del servidor: 10.1.44-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u7

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
-- Estructura de tabla para la tabla `equipo_trabajo`
--

CREATE TABLE `equipo_trabajo` (
  `id` int(11) NOT NULL,
  `equipo` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `equipo_trabajo`
--

INSERT INTO `equipo_trabajo` (`id`, `equipo`, `rol`) VALUES
(1, 'veronica osuna', 'autor'),
(2, 'marisela olmos', 'asesor academico'),
(3, 'jose palencia', 'autor'),
(4, 'karla quintero', 'autor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extensiones`
--

CREATE TABLE `extensiones` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_nucleo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `extensiones`
--

INSERT INTO `extensiones` (`id`, `nombre_largo`, `nombre_corto`, `id_nucleo`) VALUES
(3, 'Extension de la UPTT La Puerta', 'Extension La Puerta', 1),
(4, 'Extension de la UPTT Carache', 'Extension Carache', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nucleos`
--

CREATE TABLE `nucleos` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nucleos`
--

INSERT INTO `nucleos` (`id`, `nombre_largo`, `nombre_corto`) VALUES
(1, 'Núcleos Universitarios de Educación Socialista “Robert Serra”', 'NUES Beatriz '),
(2, 'Núcleos Universitarios de Educación Socialista “Hugo Rafael Chávez Frías”', 'NUES San Luis '),
(3, 'Núcleos Universitarios de Educación Socialista “Fabricio Ojeda”', 'NUES Bocono'),
(4, 'Núcleos Universitarios de Educación Socialista “Francisco de Miranda”', 'NUES Dividive'),
(7, 'Núcleos Universitarios de Educación Socialista “Barbarita De La Torre”', 'NUES Trujillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nucleos-pnf`
--

CREATE TABLE `nucleos-pnf` (
  `id` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `nucleos-pnf`
--

INSERT INTO `nucleos-pnf` (`id`, `id_nucleo`, `id_pnf`) VALUES
(1, 1, 1),
(2, 3, 4),
(3, 3, 2),
(4, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `id_personas` int(11) NOT NULL,
  `id_etra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `id_personas`, `id_etra`) VALUES
(1, 22345125, 2),
(2, 25171058, 3),
(3, 25913031, 1),
(4, 25913050, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`) VALUES
(25913031, 'maria veronica', 'osuna briceño'),
(22345125, 'marisela', 'olmos de delgadillo'),
(25171058, 'jose enrique', 'palencia briceño'),
(25913050, 'karla patricia', 'quintero espinoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pnf`
--

CREATE TABLE `pnf` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pnf`
--

INSERT INTO `pnf` (`id`, `nombre_largo`, `nombre_corto`) VALUES
(1, 'Programa Nacional de Formación Critica en Informática', 'Informática'),
(2, 'Programa Nacional de Formacion Critica en Mecanica', 'Mecanica'),
(3, 'Programa Nacional de Formacion Critica en Construccion Civil', 'Construccion Civil'),
(4, 'Programa Nacional de Formacion Critica Turismo', 'Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas`
--

CREATE TABLE `propuestas` (
  `id` int(11) NOT NULL,
  `status` enum('APROBADA','CORRECCIONES','DECLINADA','RECHAZADA') COLLATE utf8_unicode_ci NOT NULL,
  `id_etra` int(11) NOT NULL,
  `id_trab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `propuestas`
--

INSERT INTO `propuestas` (`id`, `status`, `id_etra`, `id_trab`) VALUES
(1, 'APROBADA', 1, 1),
(2, 'CORRECCIONES', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `privilegios` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `privilegios`, `nivel`) VALUES
(1, 'Administrador', '', 100),
(2, 'Operador Nucleo', '', 90),
(3, 'Operador PNF', '', 80),
(4, 'Profesor Proyecto', '', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `nombre`, `id_rol`) VALUES
(1, 'coordinar sedes', 1),
(2, 'coordinar PNF', 1),
(3, 'coordinar usuarios', 3),
(4, 'asignar sedes', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`, `nivel`) VALUES
(1, 'titulo', 1),
(2, 'resumen', 2),
(3, 'palabras clave', 3),
(4, 'parte 1', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_mes` enum('SIN MES','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE') COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_anyo` year(4) NOT NULL,
  `observacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `responsable` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` enum('APROBADO','CORRECCIONES','REPROBADO','') COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tdoc` int(11) NOT NULL,
  `id_etra` int(11) NOT NULL,
  `id_tra-pnf` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `descripcion`, `f_mes`, `f_anyo`, `observacion`, `responsable`, `status`, `id_tdoc`, `id_etra`, `id_tra-pnf`) VALUES
(1, 'repositorio', 'ENERO', 2020, 'repositorio uptt', 'veronica osuna', 'APROBADO', 1, 1, 4),
(2, 'mmmmmmmmmmm.........', 'SEPTIEMBRE', 2018, 'mmmmmmmmmmmmmmmnnnnnnnnnnn.........', 'karla quintero', 'CORRECCIONES', 2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayecto`
--

CREATE TABLE `trayecto` (
  `id` int(11) NOT NULL,
  `trayecto` enum('TRAYECTO I','TRAYECTO II','TRAYECTO III','TRAYECTO IV') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `trayecto`
--

INSERT INTO `trayecto` (`id`, `trayecto`) VALUES
(1, 'TRAYECTO I'),
(2, 'TRAYECTO II'),
(3, 'TRAYECTO III'),
(4, 'TRAYECTO IV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayecto-pnf`
--

CREATE TABLE `trayecto-pnf` (
  `id` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL,
  `id_trayecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `trayecto-pnf`
--

INSERT INTO `trayecto-pnf` (`id`, `id_pnf`, `id_trayecto`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave_temp` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `plazo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `jerarquia` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `clave_temp`, `plazo`, `jerarquia`, `id_tipo`, `id_rol`) VALUES
('25171058', 'palencia575@gmail.com', '', '', '', '', 0, 1),
('29052892', 'pedro@gmail.com', '', '', '', '', 2, 1),
('13050683', 'mari@gmail.com', '', '', '', '', 2, 3),
('12345678', 'jp@gmail.com', '', '', '', '', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios-tipos`
--

CREATE TABLE `usuarios-tipos` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios-tipos`
--

INSERT INTO `usuarios-tipos` (`id_usuario`, `id_rol`, `id_tipo`, `id_nucleo`) VALUES
(25171058, 2, 1, 2),
(12345678, 2, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipo_trabajo`
--
ALTER TABLE `equipo_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `extensiones`
--
ALTER TABLE `extensiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nucleos`
--
ALTER TABLE `nucleos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nucleos-pnf`
--
ALTER TABLE `nucleos-pnf`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pnf`
--
ALTER TABLE `pnf`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trayecto`
--
ALTER TABLE `trayecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trayecto-pnf`
--
ALTER TABLE `trayecto-pnf`
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
-- AUTO_INCREMENT de la tabla `equipo_trabajo`
--
ALTER TABLE `equipo_trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `extensiones`
--
ALTER TABLE `extensiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nucleos`
--
ALTER TABLE `nucleos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `nucleos-pnf`
--
ALTER TABLE `nucleos-pnf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25913051;
--
-- AUTO_INCREMENT de la tabla `pnf`
--
ALTER TABLE `pnf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `trayecto`
--
ALTER TABLE `trayecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `trayecto-pnf`
--
ALTER TABLE `trayecto-pnf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
