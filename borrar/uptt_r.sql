-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 13-07-2020 a las 15:44:51
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
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DOCUMENTOS`
--

CREATE TABLE `DOCUMENTOS` (
  `id` int(11) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `responsable` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EQUIPOS`
--

CREATE TABLE `EQUIPOS` (
  `id` int(11) NOT NULL,
  `equipo` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_nucleo` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `EQUIPOS`
--

INSERT INTO `EQUIPOS` (`id`, `equipo`, `id_rol`, `id_persona`, `id_nucleo`, `id_pnf`) VALUES
(1, 'veronica osuna', 0, 0, 0, 0),
(2, 'marisela olmos', 0, 0, 0, 0),
(3, 'jose palencia', 0, 0, 0, 0),
(4, 'karla quintero', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTRUCTURAS`
--

CREATE TABLE `ESTRUCTURAS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `id_tipo_de_documento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ESTRUCTURAS`
--

INSERT INTO `ESTRUCTURAS` (`id`, `nombre`, `nivel`, `id_tipo_de_documento`) VALUES
(1, 'titulo', 1, 0),
(2, 'resumen', 2, 0),
(3, 'palabras clave', 3, 0),
(4, 'parte 1', 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LINEAS_DE_INVESTIGACION`
--

CREATE TABLE `LINEAS_DE_INVESTIGACION` (
  `id` int(11) NOT NULL,
  `nombre` tinytext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_centro_de_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LINEAS_DE_INVESTIGACION__TRABAJOS`
--

CREATE TABLE `LINEAS_DE_INVESTIGACION__TRABAJOS` (
  `id` int(11) NOT NULL,
  `id_linea_de_investigacion` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `NUCLEOS`
--

CREATE TABLE `NUCLEOS` (
  `id` int(11) NOT NULL,
  `nombre_largo` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_corto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `responsable` int(10) DEFAULT NULL,
  `id_nucleo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `NUCLEOS`
--

INSERT INTO `NUCLEOS` (`id`, `nombre_largo`, `nombre_corto`, `responsable`, `id_nucleo`) VALUES
(1, 'Núcleos Universitarios de Educación Socialista “Robert Serra” ', 'NUES Beatriz', 25913031, 0),
(2, 'Núcleos Universitarios de Educación Socialista “Hugo Rafael Chávez Frías”', 'NUES San Luis ', NULL, 0),
(4, 'Núcleos Universitarios de Educación Socialista “Francisco de Miranda”', 'NUES Dividive', 25171058, 0),
(7, 'Núcleos Universitarios de Educación Socialista “Barbarita De La Torre”', 'NUES Trujillo', 25913031, 0);

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
(4, 5, 3),
(6, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONAS`
--

CREATE TABLE `PERSONAS` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `PERSONAS`
--

INSERT INTO `PERSONAS` (`id`, `nombre`, `apellido`) VALUES
(25913031, 'María Verónica', 'Osuna Briceño'),
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
  `nombre_largo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_corto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
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
  `codigo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `privilegio` varchar(501) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `icono` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `PRIVILEGIOS`
--

INSERT INTO `PRIVILEGIOS` (`id`, `codigo`, `privilegio`, `direccion`, `nombre`, `icono`) VALUES
(1, 'NUCL_V', 'Ver Lista de Nucleos', 'nucleo/nucleos.php', 'Nucleos', 'fa fa-university'),
(2, 'NUCL_A', 'Agregar Nucleo', NULL, 'Nucleos', NULL),
(3, 'NUCL_M', 'Modificar Nucleo', NULL, 'Nucleos', NULL),
(4, 'NUCL_E', 'Eliminar Nucleo', NULL, 'Nucleos', NULL),
(5, 'PNF_V', 'Ver Lista de PNF', 'pnf/pnf.php', 'PNF', 'fa fa-leanpub'),
(6, 'PNF_A', 'Agregar PNF', NULL, 'PNF', NULL),
(7, 'PNF_M', 'Modificar PNF', NULL, 'PNF', NULL),
(8, 'PNF_E', 'Eliminar PNF', NULL, 'PNF', NULL),
(9, 'USUA_V1000', 'Ver Lista de Usuarios', 'usuario/usuarios.php?5ea6fd8de7329=5ea6fd8de75be', 'Usuarios', 'fa fa-users'),
(10, 'USUA_A', 'Agregar Usuario', NULL, 'Usuarios', NULL),
(11, 'USUA_M', 'Modificar Usuario', NULL, 'Usuarios', NULL),
(12, 'USUA_E', 'Eliminar Usuario', NULL, 'Usuarios', NULL),
(13, 'USUA_VR', 'Ver Lista de Roles de los usuario', NULL, 'Usuarios', NULL),
(14, 'USUA_AR', 'Agregar Roles a los Usuarios', NULL, 'Usuarios', NULL),
(15, 'USUA_ER', 'Eliminar Roles de los Usuarios', NULL, 'Usuarios', NULL),
(17, 'CENT_V', 'Ver Centros', 'centro_de_investigacion/centros.php', 'Centros', 'fa fa-building'),
(18, 'CENT_A', 'Agregar Centro', NULL, 'Centros', NULL),
(19, 'CENT_M', 'Modificar Centro', NULL, 'Centros', NULL),
(20, 'CENT_E', 'Eliminar Centro', NULL, 'Centros', NULL),
(21, 'LINE_V', 'Ver Líneas', 'linea_de_investigacion/lineas.php', 'Líneas', 'fa fa-area-chart'),
(22, 'LINE_A', 'Agregar Línea', NULL, 'Líneas', NULL),
(23, 'LINE_M', 'Modificar Línea', NULL, 'Líneas', NULL),
(24, 'LINE_E', 'Eliminar Línea', NULL, 'Líneas', NULL),
(25, 'ROLE_V', 'Ver Roles', 'rol/roles.php', 'Roles', 'fa fa-sitemap'),
(26, 'ROLE_A', 'Agregar Rol', NULL, 'Roles', NULL),
(27, 'ROLE_M', 'Modificar Roles', NULL, 'Roles', NULL),
(28, 'ROLE_E', 'Eliminar Rol', NULL, 'Roles', NULL),
(66, '5ebc2e73e9e97', 'Ver lista de Cordinador Sede', 'usuarios.php?5ea6fd8de7329=5ebc2e73e9e97', 'Cordinador Sede', 'fa fa-users'),
(67, '5ebc2e99b6067', 'Ver lista de Cordinador PNF', 'usuarios.php?5ea6fd8de7329=5ebc2e99b6067', 'Cordinador PNF', 'fa fa-users'),
(68, '5ebc318b69a33', 'Ver lista de Profesor', 'usuarios.php?5ea6fd8de7329=5ebc318b69a33', 'Profesor', 'fa fa-users'),
(69, '5ebc31adafbd4', 'Ver lista de Comite Tecnico', 'usuarios.php?5ea6fd8de7329=5ebc31adafbd4', 'Comite Tecnico', 'fa fa-users'),
(70, '5ebc31d4bcf20', 'Ver lista de Tutor academico', 'usuarios.php?5ea6fd8de7329=5ebc31d4bcf20', 'Tutor academico', 'fa fa-users'),
(71, '5ebc31e9a7ff3', 'Ver lista de Tutor comunitario', 'usuarios.php?5ea6fd8de7329=5ebc31e9a7ff3', 'Tutor comunitario', 'fa fa-users'),
(72, '5ebc320e4f318', 'Ver lista de Lider de Grupo', 'usuarios.php?5ea6fd8de7329=5ebc320e4f318', 'Lider de Grupo', 'fa fa-users'),
(73, '5ebc3220299eb', 'Ver lista de Estudiante', 'usuarios.php?5ea6fd8de7329=5ebc3220299eb', 'Estudiante', 'fa fa-users'),
(74, 'ASIG_5ebc2e99b6067', 'Asignar el rol Coordinador de PNF', NULL, NULL, NULL),
(76, 'ASIG_5ebc318b69a33', 'Asignar el rol profesor ', NULL, NULL, NULL),
(77, 'ASIG_5ebc31adafbd4', 'Asignar el rol Comite Tecnico', NULL, NULL, NULL),
(78, 'NUCL_R', 'Asignar un responsable para un Nucleo', NULL, 'Nucleos', NULL),
(79, 'REPO_V', 'Ver Reportes', NULL, 'Reportes', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROPUESTAS`
--

CREATE TABLE `PROPUESTAS` (
  `id` int(11) NOT NULL,
  `status` enum('APROBADA','CORRECCIONES','DECLINADA','RECHAZADA') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_trayecto_pnf` int(11) NOT NULL,
  `id_nucleo_pnf` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_trabajo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `PROPUESTAS`
--

INSERT INTO `PROPUESTAS` (`id`, `status`, `observacion`, `id_trayecto_pnf`, `id_nucleo_pnf`, `id_equipo`, `id_trabajo`) VALUES
(1, 'APROBADA', '', 0, 0, 1, 1),
(2, 'CORRECCIONES', '', 0, 0, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROLES`
--

CREATE TABLE `ROLES` (
  `id` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `rol` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ROLES`
--

INSERT INTO `ROLES` (`id`, `rol`, `nivel`) VALUES
('5e7ec3342d4ee', 'Administrador', 1000),
('5ebc2e73e9e97', 'Cordinador Sede', 900),
('5ebc2e99b6067', 'Cordinador PNF', 800),
('5ebc318b69a33', 'Profesor', 500),
('5ebc31adafbd4', 'Comite Tecnico', 600),
('5ebc31d4bcf20', 'Tutor academico', 400),
('5ebc31e9a7ff3', 'Tutor comunitario', 400),
('5ebc320e4f318', 'Lider de Grupo', 300),
('5ebc3220299eb', 'Estudiante', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROLES__PRIVILEGIOS`
--

CREATE TABLE `ROLES__PRIVILEGIOS` (
  `id` int(11) NOT NULL,
  `id_rol` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ROLES__PRIVILEGIOS`
--

INSERT INTO `ROLES__PRIVILEGIOS` (`id`, `id_rol`, `id_privilegio`) VALUES
(82, '5e7ec3342d4ee', 1),
(83, '5e7ec3342d4ee', 2),
(84, '5e7ec3342d4ee', 3),
(85, '5e7ec3342d4ee', 4),
(86, '5e7ec3342d4ee', 5),
(87, '5e7ec3342d4ee', 6),
(88, '5e7ec3342d4ee', 7),
(89, '5e7ec3342d4ee', 8),
(90, '5e7ec3342d4ee', 9),
(91, '5e7ec3342d4ee', 10),
(92, '5e7ec3342d4ee', 11),
(93, '5e7ec3342d4ee', 12),
(94, '5e7ec3342d4ee', 13),
(95, '5e7ec3342d4ee', 14),
(96, '5e7ec3342d4ee', 15),
(97, '5e7ec3342d4ee', 17),
(98, '5e7ec3342d4ee', 18),
(99, '5e7ec3342d4ee', 19),
(100, '5e7ec3342d4ee', 20),
(101, '5e7ec3342d4ee', 21),
(102, '5e7ec3342d4ee', 22),
(103, '5e7ec3342d4ee', 23),
(104, '5e7ec3342d4ee', 24),
(105, '5e7ec3342d4ee', 25),
(106, '5e7ec3342d4ee', 26),
(107, '5e7ec3342d4ee', 27),
(108, '5e7ec3342d4ee', 28),
(133, '5e7ec3342d4ee', 39),
(157, '5e7ec3342d4ee', 65),
(158, '5ebc2e73e9e97', 18),
(159, '5ebc2e73e9e97', 22),
(160, '5ebc2e73e9e97', 20),
(161, '5ebc2e73e9e97', 24),
(163, '5ebc2e73e9e97', 19),
(164, '5ebc2e73e9e97', 23),
(165, '5ebc2e73e9e97', 17),
(166, '5ebc2e73e9e97', 21),
(168, '5ebc2e73e9e97', 67),
(171, '5ebc2e73e9e97', 10),
(172, '5ebc2e99b6067', 10),
(173, '5ebc2e99b6067', 12),
(174, '5ebc2e99b6067', 69),
(175, '5ebc2e99b6067', 68),
(176, '5ebc318b69a33', 10),
(177, '5ebc318b69a33', 12),
(178, '5ebc318b69a33', 73),
(179, '5ebc318b69a33', 72),
(180, '5ebc318b69a33', 70),
(181, '5ebc318b69a33', 71),
(182, '5ebc320e4f318', 10),
(183, '5ebc320e4f318', 11),
(184, '5ebc320e4f318', 73),
(185, '5ebc2e73e9e97', 11),
(186, '5ebc2e73e9e97', 12),
(187, '5ebc2e73e9e97', 74),
(188, '5ebc2e73e9e97', 13),
(189, '5ebc2e73e9e97', 14),
(191, '5ebc2e73e9e97', 77),
(193, '5e7ec3342d4ee', 78),
(194, '5e7ec3342d4ee', 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPOS_DE_DOCUMENTOS`
--

CREATE TABLE `TIPOS_DE_DOCUMENTOS` (
  `id` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRABAJOS`
--

CREATE TABLE `TRABAJOS` (
  `id` int(11) NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_mes` enum('SIN MES','ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO','AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_anyo` year(4) NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `responsable` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `status` enum('APROBADO','CORRECCIONES','REPROBADO','') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `TRABAJOS`
--

INSERT INTO `TRABAJOS` (`id`, `descripcion`, `fecha_mes`, `fecha_anyo`, `observacion`, `responsable`, `status`) VALUES
(1, 'repositorio', 'ENERO', 2020, 'repositorio uptt', 'veronica osuna', 'APROBADO'),
(2, 'mmmmmmmmmmm.........', 'SEPTIEMBRE', 2018, 'mmmmmmmmmmmmmmmnnnnnnnnnnn.........', 'karla quintero', 'CORRECCIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRABAJOS__DOCUMENTOS`
--

CREATE TABLE `TRABAJOS__DOCUMENTOS` (
  `id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_trabajo` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `id_tipo_de_documento` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_trayecto_pnf` int(11) NOT NULL,
  `id_linea_trabajo` int(11) NOT NULL,
  `id_nucleo_pnf` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `TRABAJOS__DOCUMENTOS`
--

INSERT INTO `TRABAJOS__DOCUMENTOS` (`id`, `status`, `id_trabajo`, `id_documento`, `id_tipo_de_documento`, `id_equipo`, `id_trayecto_pnf`, `id_linea_trabajo`, `id_nucleo_pnf`) VALUES
(1, '', 0, 0, 1, 1, 4, 0, 0),
(2, '', 0, 0, 2, 2, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TRAYECTOS`
--

CREATE TABLE `TRAYECTOS` (
  `id` int(11) NOT NULL,
  `trayecto` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
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
  `clave_temporal` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `plazo` datetime DEFAULT NULL,
  `jerarquia` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`id`, `correo`, `clave`, `clave_temporal`, `plazo`, `jerarquia`) VALUES
('25913031', 'vero@gmail.com', '$2y$10$sF5UIR8H78QTKKouFUUYYudDDas3B6XWs5wiBQFvEYqRx7zb/Oq4.', NULL, '0000-00-00 00:00:00', ''),
('25171058', 'jp@gmail.com', '$2y$10$zXmj9LzbdM0wRXVrRY9dr.pPcW4TD59RJ0H/bDbPHgxFeAu3qk3Bm', NULL, NULL, NULL),
('13896043', 'marisela@gmail.com', '$2y$10$HuxMzAhyRCVoFgoKh/rfEO2tujE//0Y.vn2gwINvTfgnVtK4nZvbK', NULL, '0000-00-00 00:00:00', ''),
('25913050', 'karla@gmail.com', '$2y$10$zZ6mf4jmq6wtD2p0ZAM/QunQ8aFdTY2Ir14HXSM/7Kh80l5HQ5RD2', NULL, '0000-00-00 00:00:00', ''),
('25681838', 'brando@gmail.com', '$2y$10$G06aSvZZH1eFJUn0NxXfk.XMUN1PRtKQoR9C8JH8Opu1pNemSf6T6', NULL, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS__ROLES`
--

CREATE TABLE `USUARIOS__ROLES` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_nucleo` int(11) DEFAULT NULL,
  `id_pnf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Volcado de datos para la tabla `USUARIOS__ROLES`
--

INSERT INTO `USUARIOS__ROLES` (`id`, `id_usuario`, `id_rol`, `id_nucleo`, `id_pnf`) VALUES
(19, 25913031, '5e77c9749a862', 1, 1),
(43, 25913050, '5e7ec4bf92280', 1, 1),
(69, 25171058, '5e7ec3342d4ee', 1, 1),
(87, 25171058, '5ebc04aac381c', 1, 1),
(90, 25681838, '5ebc3220299eb', 2, 1),
(95, 25913050, '5ebc3220299eb', 1, 1),
(120, 13896043, '5ebc318b69a33', 1, 1),
(128, 13896043, '5ebc31adafbd4', 1, 1),
(137, 25913031, '5e7ec3342d4ee', 7, NULL),
(138, 25913031, '5ebc2e73e9e97', 1, NULL),
(139, 25171058, '5ebc2e73e9e97', 4, NULL),
(140, 25171058, '5ebc2e99b6067', 1, 1),
(141, 25913050, '5ebc31e9a7ff3', 2, NULL),
(143, 25913050, '5e7ec3342d4ee', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CENTROS_DE_INVESTIGACION`
--
ALTER TABLE `CENTROS_DE_INVESTIGACION`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `DOCUMENTOS`
--
ALTER TABLE `DOCUMENTOS`
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
-- AUTO_INCREMENT de la tabla `DOCUMENTOS`
--
ALTER TABLE `DOCUMENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `EQUIPOS`
--
ALTER TABLE `EQUIPOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ESTRUCTURAS`
--
ALTER TABLE `ESTRUCTURAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `PERSONAS`
--
ALTER TABLE `PERSONAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25913051;
--
-- AUTO_INCREMENT de la tabla `PNF`
--
ALTER TABLE `PNF`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `PRIVILEGIOS`
--
ALTER TABLE `PRIVILEGIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT de la tabla `PROPUESTAS`
--
ALTER TABLE `PROPUESTAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ROLES__PRIVILEGIOS`
--
ALTER TABLE `ROLES__PRIVILEGIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT de la tabla `TIPOS_DE_DOCUMENTOS`
--
ALTER TABLE `TIPOS_DE_DOCUMENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TRABAJOS`
--
ALTER TABLE `TRABAJOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `TRABAJOS__DOCUMENTOS`
--
ALTER TABLE `TRABAJOS__DOCUMENTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
