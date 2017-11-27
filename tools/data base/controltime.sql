-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2017 a las 05:43:20
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controltime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `area_codigo` int(3) NOT NULL,
  `area_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `area_fecharegistro` datetime NOT NULL,
  `area_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`area_codigo`, `area_nombre`, `area_fecharegistro`, `area_registradopor`) VALUES
(1, 'Fruver', '2017-11-25 00:00:00', 'root'),
(2, 'Panaderia', '2017-11-26 08:12:20', 'admin'),
(3, 'Oficina', '2017-11-26 08:12:47', 'admin');

--
-- Disparadores `areas`
--
DELIMITER $$
CREATE TRIGGER `TR_DELETE_AREAS` AFTER DELETE ON `areas` FOR EACH ROW BEGIN 
INSERT INTO aud_areas( 
	area_codigo, 
	area_nombre, 
	area_fecharegistro, 
	area_registradopor,
	tregistro_areas ) 
VALUES( 
	OLD.area_codigo, 
	OLD.area_nombre, 
	OLD.area_fecharegistro, 
	OLD.area_registradopor, 
	"U"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_INSERT_AREAS` BEFORE INSERT ON `areas` FOR EACH ROW INSERT INTO aud_areas( 
	area_codigo, 
	area_nombre, 
	area_fecharegistro, 
	area_registradopor,
	tregistro_areas ) 
VALUES( 
	NEW.area_codigo, 
	NEW.area_nombre, 
	NEW.area_fecharegistro, 
	NEW.area_registradopor, 
	"I")
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_UPDATE_AREAS` AFTER UPDATE ON `areas` FOR EACH ROW BEGIN 
INSERT INTO aud_areas( 
	area_codigo, 
	area_nombre, 
	area_fecharegistro, 
	area_registradopor,
	tregistro_areas ) 
VALUES( 
	OLD.area_codigo, 
	OLD.area_nombre, 
	OLD.area_fecharegistro, 
	OLD.area_registradopor, 
	"U"); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_areas`
--

CREATE TABLE `aud_areas` (
  `area_codigo` int(3) NOT NULL,
  `area_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `area_fecharegistro` datetime NOT NULL,
  `area_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tregistro_areas` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aud_areas`
--

INSERT INTO `aud_areas` (`area_codigo`, `area_nombre`, `area_fecharegistro`, `area_registradopor`, `tregistro_areas`) VALUES
(2, 'PRUEBA', '2017-11-25 00:00:00', 'ROOT', 'U'),
(2, 'PRUEBA 2', '2017-11-25 00:00:00', 'ROOT', 'U'),
(2, 'colsupsidio', '2017-11-25 00:00:00', 'ROOT', 'U'),
(1, 'Compensar', '2017-11-25 00:00:00', 'root', 'U'),
(0, 'Panaderia', '2017-11-26 08:12:20', 'admin', 'I'),
(0, 'Oficina12', '2017-11-26 08:12:41', 'admin', 'I'),
(3, 'Oficina12', '2017-11-26 08:12:41', 'admin', 'U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_controlhoras`
--

CREATE TABLE `aud_controlhoras` (
  `contro_horaingreso` datetime NOT NULL,
  `contro_horasalida` datetime NOT NULL,
  `contro_fecharegistro` datetime NOT NULL,
  `contro_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_cedula` int(14) NOT NULL,
  `tregistro_controlhoras` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_eps`
--

CREATE TABLE `aud_eps` (
  `eps_codigo` int(2) NOT NULL,
  `eps_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `eps_fecharegistro` datetime NOT NULL,
  `eps_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tregistro_eps` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aud_eps`
--

INSERT INTO `aud_eps` (`eps_codigo`, `eps_nombre`, `eps_fecharegistro`, `eps_registradopor`, `tregistro_eps`) VALUES
(3, 'Colsanitas', '2017-11-26 00:00:00', 'root', 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_instituciones`
--

CREATE TABLE `aud_instituciones` (
  `insti_codigo` int(3) NOT NULL,
  `insti_nombreinstitucion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_jefevoluntariado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_telefono` int(7) DEFAULT NULL,
  `insti_celular` int(10) DEFAULT NULL,
  `insti_correoelectronico` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_fecharegistro` datetime NOT NULL,
  `insti_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `tregistro_instituciones` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aud_instituciones`
--

INSERT INTO `aud_instituciones` (`insti_codigo`, `insti_nombreinstitucion`, `insti_jefevoluntariado`, `insti_telefono`, `insti_celular`, `insti_correoelectronico`, `insti_fecharegistro`, `insti_registradopor`, `tregistro_instituciones`) VALUES
(1, 'San Mateo', 'leonor', 12344, 3112312, 'leonor@sanmateo.edu.co', '2017-11-26 00:00:00', 'root', 'I'),
(1, 'San Mateo', 'leonor', 12344, 3112312, 'leonor@sanmateo.edu.co', '2017-11-26 00:00:00', 'root', 'U');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_personas`
--

CREATE TABLE `aud_personas` (
  `perso_cedula` int(14) NOT NULL,
  `perso_tipo` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_apellidos` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_telefonofijo` int(7) DEFAULT NULL,
  `perso_celular` int(10) DEFAULT NULL,
  `perso_usermail` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_contrasena` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_jefe` int(14) DEFAULT NULL,
  `perso_modalidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_estado` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_canthoras` int(4) NOT NULL,
  `perso_estudiosencurso` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_fecharegistro` datetime NOT NULL,
  `perso_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `eps_codigo` int(2) NOT NULL,
  `insti_codigo` int(3) NOT NULL,
  `suba_codigo` int(3) NOT NULL,
  `tregistro_personas` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aud_personas`
--

INSERT INTO `aud_personas` (`perso_cedula`, `perso_tipo`, `perso_nombres`, `perso_apellidos`, `perso_telefonofijo`, `perso_celular`, `perso_usermail`, `perso_contrasena`, `perso_jefe`, `perso_modalidad`, `perso_estado`, `perso_canthoras`, `perso_estudiosencurso`, `perso_fecharegistro`, `perso_registradopor`, `eps_codigo`, `insti_codigo`, `suba_codigo`, `tregistro_personas`) VALUES
(12345, 'Administrador', 'David', 'Zambrano', 1243435, 2198373, 'dzambrano.226@gmail.com', '5a690d842935c51f26f473e025c1b97a', NULL, 'ing sistemas', 'Activo', 10, 'ing sistemas', '2017-11-26 00:00:00', 'root', 3, 1, 3, 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aud_subareas`
--

CREATE TABLE `aud_subareas` (
  `suba_codigo` int(3) NOT NULL,
  `suba_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `suba_fecharegistro` datetime NOT NULL,
  `suba_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `area_codigo` int(3) NOT NULL,
  `tregistro_subareas` char(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `aud_subareas`
--

INSERT INTO `aud_subareas` (`suba_codigo`, `suba_nombre`, `suba_fecharegistro`, `suba_registradopor`, `area_codigo`, `tregistro_subareas`) VALUES
(3, 'Tomate', '2017-11-26 00:00:00', 'root', 0, 'I'),
(11, 'Galletas', '2017-11-26 08:30:20', 'admin', 2, 'I'),
(12, 'a', '2017-11-26 08:30:51', 'admin', 3, 'I'),
(12, 'a', '2017-11-26 08:30:51', 'admin', 3, 'D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlhoras`
--

CREATE TABLE `controlhoras` (
  `contro_fecha` date NOT NULL,
  `contro_horaingreso` datetime NOT NULL,
  `contro_horasalida` datetime NOT NULL,
  `contro_fecharegistro` datetime NOT NULL,
  `contro_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_cedula` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `controlhoras`
--

INSERT INTO `controlhoras` (`contro_fecha`, `contro_horaingreso`, `contro_horasalida`, `contro_fecharegistro`, `contro_registradopor`, `perso_cedula`) VALUES
('2017-11-26', '2017-11-26 11:16:07', '2017-11-26 11:30:17', '2017-11-26 11:16:07', 'admin', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eps`
--

CREATE TABLE `eps` (
  `eps_codigo` int(2) NOT NULL,
  `eps_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `eps_fecharegistro` datetime NOT NULL,
  `eps_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `eps`
--

INSERT INTO `eps` (`eps_codigo`, `eps_nombre`, `eps_fecharegistro`, `eps_registradopor`) VALUES
(3, 'Colsanitas', '2017-11-26 00:00:00', 'root');

--
-- Disparadores `eps`
--
DELIMITER $$
CREATE TRIGGER `TR_DELETE_EPS` AFTER DELETE ON `eps` FOR EACH ROW BEGIN 
INSERT INTO aud_eps( 
	eps_codigo, 
	eps_nombre, 
	eps_fecharegistro, 
	eps_registradopor,
	tregistro_eps ) 
VALUES( 
	OLD.eps_codigo, 
	OLD.eps_nombre, 
	OLD.eps_fecharegistro, 
	OLD.eps_registradopor, 
	"D"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_INSERT_EPS` AFTER INSERT ON `eps` FOR EACH ROW BEGIN 
INSERT INTO aud_eps( 
	eps_codigo, 
	eps_nombre, 
	eps_fecharegistro, 
	eps_registradopor,
	tregistro_eps) 
VALUES( 
	NEW.eps_codigo, 
	NEW.eps_nombre, 
	NEW.eps_fecharegistro, 
	NEW.eps_registradopor, 
	"I"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_UPDATE_EPS` AFTER UPDATE ON `eps` FOR EACH ROW BEGIN 
INSERT INTO aud_eps( 
	eps_codigo, 
	eps_nombre, 
	eps_fecharegistro, 
	eps_registradopor,
	tregistro_eps ) 
VALUES( 
	OLD.eps_codigo, 
	OLD.eps_nombre, 
	OLD.eps_fecharegistro, 
	OLD.eps_registradopor, 
	"U"); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `insti_codigo` int(3) NOT NULL,
  `insti_nombreinstitucion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_jefevoluntariado` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_telefono` int(7) DEFAULT NULL,
  `insti_celular` int(10) DEFAULT NULL,
  `insti_correoelectronico` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `insti_fecharegistro` datetime NOT NULL,
  `insti_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`insti_codigo`, `insti_nombreinstitucion`, `insti_jefevoluntariado`, `insti_telefono`, `insti_celular`, `insti_correoelectronico`, `insti_fecharegistro`, `insti_registradopor`) VALUES
(1, 'San Mateo', 'leonor patricia', 12344, 3112312, 'leonor@sanmateo.edu.co', '2017-11-26 08:13:44', 'admin');

--
-- Disparadores `instituciones`
--
DELIMITER $$
CREATE TRIGGER `TR_DELETE_INSTITUCIONES` AFTER DELETE ON `instituciones` FOR EACH ROW BEGIN 
INSERT INTO aud_instituciones( 
	insti_codigo, 
	insti_nombreinstitucion, 
	insti_jefevoluntariado,
	insti_telefono,
	insti_celular,
	insti_correoelectronico,
	insti_fecharegistro, 
	insti_registradopor,
	tregistro_instituciones ) 
VALUES( 
	OLD.insti_codigo, 
	OLD.insti_nombreinstitucion, 
	OLD.insti_jefevoluntariado,
	OLD.insti_telefono,
	OLD.insti_celular,
	OLD.insti_correoelectronico,
	OLD.insti_fecharegistro, 
	OLD.insti_registradopor, 
	"D"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_INSERT_INSTITUCIONES` AFTER INSERT ON `instituciones` FOR EACH ROW BEGIN 
INSERT INTO aud_instituciones( 
	insti_codigo, 
	insti_nombreinstitucion, 
	insti_jefevoluntariado,
	insti_telefono,
	insti_celular,
	insti_correoelectronico,
	insti_fecharegistro, 
	insti_registradopor,
	tregistro_instituciones ) 
VALUES( 
	NEW.insti_codigo, 
	NEW.insti_nombreinstitucion,
	NEW.insti_jefevoluntariado,
	NEW.insti_telefono,
	NEW.insti_celular,
	NEW.insti_correoelectronico,
	NEW.insti_fecharegistro, 
	NEW.insti_registradopor, 
	"I"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_UPDATE_INSTITUCIONES` AFTER UPDATE ON `instituciones` FOR EACH ROW BEGIN 
INSERT INTO aud_instituciones( 
	insti_codigo, 
	insti_nombreinstitucion, 
	insti_jefevoluntariado,
	insti_telefono,
	insti_celular,
	insti_correoelectronico,
	insti_fecharegistro, 
	insti_registradopor,
	tregistro_instituciones ) 
VALUES( 
	OLD.insti_codigo, 
	OLD.insti_nombreinstitucion, 
	OLD.insti_jefevoluntariado,
	OLD.insti_telefono,
	OLD.insti_celular,
	OLD.insti_correoelectronico,
	OLD.insti_fecharegistro, 
	OLD.insti_registradopor, 
	"U"); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `perso_cedula` int(14) NOT NULL,
  `perso_tipo` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_nombres` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_apellidos` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_telefonofijo` int(7) DEFAULT NULL,
  `perso_celular` int(10) DEFAULT NULL,
  `perso_usermail` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_contrasena` varchar(250) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_jefe` int(14) DEFAULT NULL,
  `perso_modalidad` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_estado` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `perso_canthoras` int(4) NOT NULL,
  `perso_estudiosencurso` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `perso_fecharegistro` datetime NOT NULL,
  `perso_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `eps_codigo` int(2) NOT NULL,
  `insti_codigo` int(3) NOT NULL,
  `suba_codigo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`perso_cedula`, `perso_tipo`, `perso_nombres`, `perso_apellidos`, `perso_telefonofijo`, `perso_celular`, `perso_usermail`, `perso_contrasena`, `perso_jefe`, `perso_modalidad`, `perso_estado`, `perso_canthoras`, `perso_estudiosencurso`, `perso_fecharegistro`, `perso_registradopor`, `eps_codigo`, `insti_codigo`, `suba_codigo`) VALUES
(12345, 'Administrador', 'David', 'Zambrano', 1243435, 2198373, 'dzambrano.226@gmail.com', '5a690d842935c51f26f473e025c1b97a', NULL, 'ing sistemas', 'Activo', 10, 'ing sistemas', '2017-11-26 00:00:00', 'root', 3, 1, 3);

--
-- Disparadores `personas`
--
DELIMITER $$
CREATE TRIGGER `TR_DELETE_PERSONAS` AFTER DELETE ON `personas` FOR EACH ROW BEGIN 
INSERT INTO aud_personas( 
	perso_cedula, 
	perso_tipo,
	perso_nombres,
	perso_apellidos,
	perso_telefonofijo,
	perso_celular,
	perso_usermail,
	perso_contrasena,
	perso_jefe,
	perso_modalidad,
	perso_estado,
	perso_canthoras,
	perso_estudiosencurso,	 
	perso_fecharegistro, 
	perso_registradopor,
	eps_codigo,
	insti_codigo,
	suba_codigo,
	tregistro_personas )  
VALUES( 
	OLD.perso_cedula, 
	OLD.perso_tipo,
	OLD.perso_nombres,
	OLD.perso_apellidos,
	OLD.perso_telefonofijo,
	OLD.perso_celular,
	OLD.perso_usermail,
	OLD.perso_contrasena,
	OLD.perso_jefe,
	OLD.perso_modalidad,
	OLD.perso_estado,
	OLD.perso_canthoras,
	OLD.perso_estudiosencurso,	 
	OLD.perso_fecharegistro, 
	OLD.perso_registradopor,
	OLD.eps_codigo,
	OLD.insti_codigo,
	OLD.suba_codigo,
	"D"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_INSERT_PERSONAS` AFTER INSERT ON `personas` FOR EACH ROW BEGIN 
INSERT INTO aud_personas( 
	perso_cedula, 
	perso_tipo,
	perso_nombres,
	perso_apellidos,
	perso_telefonofijo,
	perso_celular,
	perso_usermail,
	perso_contrasena,
	perso_jefe,
	perso_modalidad,
	perso_estado,
	perso_canthoras,
	perso_estudiosencurso,	 
	perso_fecharegistro, 
	perso_registradopor,
	eps_codigo,
	insti_codigo,
	suba_codigo,
	tregistro_personas ) 
VALUES(
	NEW.perso_cedula, 
	NEW.perso_tipo,
	NEW.perso_nombres,
	NEW.perso_apellidos,
	NEW.perso_telefonofijo,
	NEW.perso_celular,
	NEW.perso_usermail,
	NEW.perso_contrasena,
	NEW.perso_jefe,
	NEW.perso_modalidad,
	NEW.perso_estado,
	NEW.perso_canthoras,
	NEW.perso_estudiosencurso,	 
	NEW.perso_fecharegistro, 
	NEW.perso_registradopor,
	NEW.eps_codigo,
	NEW.insti_codigo,
	NEW.suba_codigo,
	"I"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_UPDATE_PERSONAS` AFTER UPDATE ON `personas` FOR EACH ROW BEGIN 
INSERT INTO aud_personas( 
	perso_cedula, 
	perso_tipo,
	perso_nombres,
	perso_apellidos,
	perso_telefonofijo,
	perso_celular,
	perso_usermail,
	perso_contrasena,
	perso_jefe,
	perso_modalidad,
	perso_estado,
	perso_canthoras,
	perso_estudiosencurso,	 
	perso_fecharegistro, 
	perso_registradopor,
	eps_codigo,
	insti_codigo,
	suba_codigo,
	tregistro_personas )  
VALUES( 
	OLD.perso_cedula, 
	OLD.perso_tipo,
	OLD.perso_nombres,
	OLD.perso_apellidos,
	OLD.perso_telefonofijo,
	OLD.perso_celular,
	OLD.perso_usermail,
	OLD.perso_contrasena,
	OLD.perso_jefe,
	OLD.perso_modalidad,
	OLD.perso_estado,
	OLD.perso_canthoras,
	OLD.perso_estudiosencurso,	 
	OLD.perso_fecharegistro, 
	OLD.perso_registradopor,
	OLD.eps_codigo,
	OLD.insti_codigo,
	OLD.suba_codigo,
	"U"); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subareas`
--

CREATE TABLE `subareas` (
  `suba_codigo` int(3) NOT NULL,
  `suba_nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `suba_fecharegistro` datetime NOT NULL,
  `suba_registradopor` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `area_codigo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `subareas`
--

INSERT INTO `subareas` (`suba_codigo`, `suba_nombre`, `suba_fecharegistro`, `suba_registradopor`, `area_codigo`) VALUES
(3, 'Tomate', '2017-11-26 00:00:00', 'root', 1),
(11, 'Galletas', '2017-11-26 08:30:20', 'admin', 2);

--
-- Disparadores `subareas`
--
DELIMITER $$
CREATE TRIGGER `TR_DELETE_SUBAREAS` AFTER DELETE ON `subareas` FOR EACH ROW BEGIN 
INSERT INTO aud_subareas( 
	suba_codigo, 
	suba_nombre, 
	suba_fecharegistro, 
	suba_registradopor,
	area_codigo,
	tregistro_subareas ) 
VALUES( 
	OLD.suba_codigo, 
	OLD.suba_nombre, 
	OLD.suba_fecharegistro, 
	OLD.suba_registradopor,
	OLD.area_codigo, 
	"D"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_INSERT_SUBAREAS` AFTER INSERT ON `subareas` FOR EACH ROW BEGIN 
INSERT INTO aud_subareas( 
	suba_codigo, 
	suba_nombre, 
	suba_fecharegistro, 
	suba_registradopor,
	area_codigo,
	tregistro_subareas ) 
VALUES( 
	NEW.suba_codigo, 
	NEW.suba_nombre,
	NEW.suba_fecharegistro, 
	NEW.suba_registradopor, 
	NEW.area_codigo,
	"I"); 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TR_UPDATE_SUBAREAS` AFTER UPDATE ON `subareas` FOR EACH ROW BEGIN 
INSERT INTO aud_subareas( 
	suba_codigo, 
	suba_nombre,
	suba_fecharegistro, 
	suba_registradopor,
	area_codigo,
	tregistro_subareas ) 
VALUES( 
	OLD.suba_codigo, 
	OLD.suba_nombre, 
	OLD.suba_fecharegistro, 
	OLD.suba_registradopor,
	OLD.area_codigo, 
	"U"); 
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`area_codigo`);

--
-- Indices de la tabla `controlhoras`
--
ALTER TABLE `controlhoras`
  ADD PRIMARY KEY (`contro_fecha`,`perso_cedula`) USING BTREE,
  ADD KEY `controlhoras_personas_fk` (`perso_cedula`);

--
-- Indices de la tabla `eps`
--
ALTER TABLE `eps`
  ADD PRIMARY KEY (`eps_codigo`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`insti_codigo`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`perso_cedula`),
  ADD KEY `personas_eps_fk` (`eps_codigo`),
  ADD KEY `personas_instituciones_fk` (`insti_codigo`),
  ADD KEY `personas_personas_fk` (`perso_jefe`),
  ADD KEY `personas_subareas_fk` (`suba_codigo`);

--
-- Indices de la tabla `subareas`
--
ALTER TABLE `subareas`
  ADD PRIMARY KEY (`suba_codigo`),
  ADD KEY `subareas_areas_fk` (`area_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `area_codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `eps`
--
ALTER TABLE `eps`
  MODIFY `eps_codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `insti_codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subareas`
--
ALTER TABLE `subareas`
  MODIFY `suba_codigo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `controlhoras`
--
ALTER TABLE `controlhoras`
  ADD CONSTRAINT `controlhoras_personas_fk` FOREIGN KEY (`perso_cedula`) REFERENCES `personas` (`perso_cedula`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_eps_fk` FOREIGN KEY (`eps_codigo`) REFERENCES `eps` (`eps_codigo`),
  ADD CONSTRAINT `personas_instituciones_fk` FOREIGN KEY (`insti_codigo`) REFERENCES `instituciones` (`insti_codigo`),
  ADD CONSTRAINT `personas_personas_fk` FOREIGN KEY (`perso_jefe`) REFERENCES `personas` (`perso_cedula`),
  ADD CONSTRAINT `personas_subareas_fk` FOREIGN KEY (`suba_codigo`) REFERENCES `subareas` (`suba_codigo`);

--
-- Filtros para la tabla `subareas`
--
ALTER TABLE `subareas`
  ADD CONSTRAINT `subareas_areas_fk` FOREIGN KEY (`area_codigo`) REFERENCES `areas` (`area_codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
