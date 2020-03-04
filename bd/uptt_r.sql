-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-03-2020 a las 11:52:05
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
-- Estructura de tabla para la tabla `Carreras`
--
-- Creación: 01-03-2020 a las 14:51:04
-- Última actualización: 01-03-2020 a las 14:51:04
--

CREATE TABLE `Carreras` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `Carreras`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Dependencia`
--
-- Creación: 01-03-2020 a las 14:53:28
--

CREATE TABLE `Dependencia` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Dependencia`:
--   `id_sede`
--       `Sedes` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipo_Trabajo`
--
-- Creación: 01-03-2020 a las 15:04:14
--

CREATE TABLE `Equipo_Trabajo` (
  `id` int(11) NOT NULL,
  `equipo` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Equipo_Trabajo`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Participantes`
--
-- Creación: 01-03-2020 a las 15:02:07
--

CREATE TABLE `Participantes` (
  `id` int(11) NOT NULL,
  `id_personas` int(11) NOT NULL,
  `id_etra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Participantes`:
--   `id_etra`
--       `Equipo_Trabajo` -> `id`
--   `id_personas`
--       `Personas` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personas`
--
-- Creación: 01-03-2020 a las 14:38:37
-- Última actualización: 01-03-2020 a las 14:38:37
--

CREATE TABLE `Personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `Personas`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Propuestas`
--
-- Creación: 01-03-2020 a las 15:14:14
--

CREATE TABLE `Propuestas` (
  `id` int(11) NOT NULL,
  `status` enum('APROVADA','CORRECCIONES','DECLINADA','RECHAZADA') COLLATE utf8_unicode_ci NOT NULL,
  `id_etra` int(11) NOT NULL,
  `id_trab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Propuestas`:
--   `id_etra`
--       `Equipo_Trabajo` -> `id`
--   `id_trab`
--       `Trabajos` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Roles`
--
-- Creación: 01-03-2020 a las 14:50:27
--

CREATE TABLE `Roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `privilegios` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Roles`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sedes`
--
-- Creación: 01-03-2020 a las 14:52:18
--

CREATE TABLE `Sedes` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_corto` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Sedes`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sedes-Carreras`
--
-- Creación: 01-03-2020 a las 14:47:35
--

CREATE TABLE `Sedes-Carreras` (
  `id` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Sedes-Carreras`:
--   `id_carrera`
--       `Carreras` -> `id`
--   `id_sede`
--       `Sedes` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo`
--
-- Creación: 01-03-2020 a las 15:37:51
--

CREATE TABLE `Tipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `Tipo`:
--   `id_rol`
--       `Roles` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_Documento`
--
-- Creación: 01-03-2020 a las 15:06:36
--

CREATE TABLE `Tipo_Documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Tipo_Documento`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Trabajos`
--
-- Creación: 01-03-2020 a las 15:00:49
-- Última actualización: 01-03-2020 a las 15:00:49
--

CREATE TABLE `Trabajos` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_mes` enum('SIN MES','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE') COLLATE utf8mb4_spanish_ci NOT NULL,
  `f_anyo` year(4) NOT NULL,
  `observacion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `responsable` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` enum('APROBADO','CORRECCIONES','REPROBADO','') COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tdoc` int(11) NOT NULL,
  `id_etra` int(11) NOT NULL,
  `id_trayecto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `Trabajos`:
--   `id_etra`
--       `Equipo_Trabajo` -> `id`
--   `id_tdoc`
--       `Tipo_Documento` -> `id`
--   `id_trayecto`
--       `Trayecto` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Trayecto`
--
-- Creación: 01-03-2020 a las 15:11:42
--

CREATE TABLE `Trayecto` (
  `id` int(11) NOT NULL,
  `trayecto` enum('TRAYECTO I','TRAYECTO II','TRAYECTO III','TRAYECTO IV') COLLATE utf8_unicode_ci NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Trayecto`:
--   `id_carrera`
--       `Carreras` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--
-- Creación: 01-03-2020 a las 14:43:44
-- Última actualización: 01-03-2020 a las 14:43:44
-- Última revisión: 01-03-2020 a las 14:43:44
--

CREATE TABLE `Usuarios` (
  `id` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave_temp` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `plazo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `jerarquia` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- RELACIONES PARA LA TABLA `Usuarios`:
--   `id_rol`
--       `Roles` -> `id`
--   `id_tipo`
--       `Tipo` -> `id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios-Tipos`
--
-- Creación: 01-03-2020 a las 14:46:29
--

CREATE TABLE `Usuarios-Tipos` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `Usuarios-Tipos`:
--   `id_rol`
--       `Roles` -> `id`
--   `id_sede`
--       `Sedes` -> `id`
--   `id_tipo`
--       `Tipo` -> `id`
--   `id_usuario`
--       `Usuarios` -> `id`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Carreras`
--
ALTER TABLE `Carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Dependencia`
--
ALTER TABLE `Dependencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Equipo_Trabajo`
--
ALTER TABLE `Equipo_Trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Personas`
--
ALTER TABLE `Personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Roles`
--
ALTER TABLE `Roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Sedes`
--
ALTER TABLE `Sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Sedes-Carreras`
--
ALTER TABLE `Sedes-Carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Tipo`
--
ALTER TABLE `Tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Tipo_Documento`
--
ALTER TABLE `Tipo_Documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Trabajos`
--
ALTER TABLE `Trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Trayecto`
--
ALTER TABLE `Trayecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Carreras`
--
ALTER TABLE `Carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Dependencia`
--
ALTER TABLE `Dependencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Equipo_Trabajo`
--
ALTER TABLE `Equipo_Trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Personas`
--
ALTER TABLE `Personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Roles`
--
ALTER TABLE `Roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Sedes`
--
ALTER TABLE `Sedes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Sedes-Carreras`
--
ALTER TABLE `Sedes-Carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tipo`
--
ALTER TABLE `Tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Tipo_Documento`
--
ALTER TABLE `Tipo_Documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Trabajos`
--
ALTER TABLE `Trabajos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `Trayecto`
--
ALTER TABLE `Trayecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
