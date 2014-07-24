-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2014 a las 04:46:37
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tap_informatica_db2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE IF NOT EXISTS `acciones` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Adjunto` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `TAP_CAS_Id` int(11) NOT NULL,
  PRIMARY KEY (`TAP_CAS_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Lineas_Investigacion_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`Lineas_Investigacion_Id`),
  KEY `Areas_Lineas_Investigacion_FK` (`Lineas_Investigacion_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE IF NOT EXISTS `auditorias` (
  `Id` int(11) NOT NULL,
  `Fecha_Hora_Accion` date NOT NULL,
  `Acciones_Id` int(11) NOT NULL,
  `Usuarios_Id` int(11) NOT NULL,
  `Paginas_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`Acciones_Id`,`Usuarios_Id`,`Paginas_Id`),
  KEY `Auditorias_Acciones_FK` (`Acciones_Id`),
  KEY `Auditorias_Paginas_FK` (`Paginas_Id`),
  KEY `Auditorias_Usuarios_FK` (`Usuarios_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Editable` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `Adjuntable` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `Multiplicidad` char(1) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_auditorias`
--

CREATE TABLE IF NOT EXISTS `comentarios_auditorias` (
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Auditorias_Id` int(11) NOT NULL,
  `Auditorias_Id1` int(11) NOT NULL,
  `Auditorias_Id2` int(11) NOT NULL,
  `Auditorias_Id3` int(11) NOT NULL,
  PRIMARY KEY (`Auditorias_Id`,`Auditorias_Id1`,`Auditorias_Id2`,`Auditorias_Id3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1401764731, 1401766531, 0, '::1', 1, 1401764731, NULL, NULL),
(2, 1, 1401766593, 1401768393, 0, '::1', 1, 1401766593, 1401767606, '::1'),
(3, 1, 1401826321, 1401828121, 0, '::1', 1, 1401826321, 1401827179, '::1'),
(4, 1, 1401827769, 1401829569, 0, '::1', 1, 1401827769, 1401827913, '::1'),
(5, 1, 1401827925, 1401829725, 0, '::1', 1, 1401827925, 1401828664, '::1'),
(6, 1, 1401828766, 1401830566, 0, '::1', 1, 1401828766, 1401828826, '::1'),
(7, 1, 1401830081, 1401831881, 0, '::1', 1, 1401830081, NULL, NULL),
(8, 1, 1401838029, 1401839829, 0, '::1', 1, 1401838029, 1401838031, '::1'),
(9, 1, 1401838036, 1401839836, 0, '::1', 1, 1401838036, 1401838074, '::1'),
(10, 1, 1401904203, 1401906003, 0, '::1', 1, 1401904203, 1401904478, '::1'),
(11, 1, 1401937818, 1401939618, 0, '::1', 1, 1401937818, 1401937838, '::1'),
(12, 1, 1401939026, 1401940826, 0, '::1', 1, 1401939026, 1401939057, '::1'),
(13, 1, 1401939133, 1401940933, 0, '::1', 1, 1401939133, 1401939176, '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 30, 10, 1, -1, -1, 0, 0, 0, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
(1, NULL, NULL, 1401939133, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuidades`
--

CREATE TABLE IF NOT EXISTS `cuidades` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estados_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`,`Estados_Id`),
  KEY `Cuidades_Estados_FK` (`Estados_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE IF NOT EXISTS `direcciones` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `Detalle` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Otro_Contacto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio_Id` int(11) NOT NULL,
  `Empresas_Id` int(11) NOT NULL,
  PRIMARY KEY (`id_direccion`),
  UNIQUE KEY `Municipio_Id` (`Municipio_Id`,`Empresas_Id`),
  KEY `Direcciones_Empresas_FK` (`Empresas_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `Id` int(11) NOT NULL,
  `RIF` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo_Electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_revisiones`
--

CREATE TABLE IF NOT EXISTS `estados_revisiones` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Icono` blob NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluadores`
--

CREATE TABLE IF NOT EXISTS `evaluadores` (
  `Retirados` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Nota` int(11) DEFAULT NULL,
  `RES_UOS_Usuarios_Id` int(11) NOT NULL,
  `RES_UOS_Roles_Id` int(11) NOT NULL,
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  PRIMARY KEY (`RES_UOS_Usuarios_Id`,`RES_UOS_Roles_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE IF NOT EXISTS `inscripciones` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `Usuarios_Id` int(11) NOT NULL,
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `Inscripciones_Usuarios_FK` (`Usuarios_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lapsos_academicos`
--

CREATE TABLE IF NOT EXISTS `lapsos_academicos` (
  `Id` int(11) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas_investigacion`
--

CREATE TABLE IF NOT EXISTS `lineas_investigacion` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Cuidades_Id` int(11) NOT NULL,
  `Cuidades_Estados_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Municipio_Cuidades_FK` (`Cuidades_Id`,`Cuidades_Estados_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `Id` int(11) NOT NULL,
  `URL` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Ruta` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasantias`
--

CREATE TABLE IF NOT EXISTS `pasantias` (
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  `Nota_Externa` int(11) DEFAULT NULL,
  `Tutores_Externos_Id` int(11) NOT NULL,
  PRIMARY KEY (`TAP_TAP_ID`),
  KEY `Tutores_Externos_Id` (`Tutores_Externos_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisologia`
--

CREATE TABLE IF NOT EXISTS `permisologia` (
  `Paginas_Id` int(11) NOT NULL,
  `Roles_Id` int(11) NOT NULL,
  PRIMARY KEY (`Paginas_Id`,`Roles_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_uos`
--

CREATE TABLE IF NOT EXISTS `res_uos` (
  `Fecha` date DEFAULT NULL,
  `Usuarios_Id` int(11) NOT NULL,
  `Roles_Id` int(11) NOT NULL,
  PRIMARY KEY (`Usuarios_Id`,`Roles_Id`),
  KEY `RES_UOS_Roles_FK` (`Roles_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE IF NOT EXISTS `revisiones` (
  `Detalle` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Estados_Revisiones_Id` int(11) NOT NULL,
  `Evaluadores_RES_UOS_Usuarios_Id` int(11) NOT NULL,
  `Evaluadores_RES_UOS_Roles_Id` int(11) NOT NULL,
  `TAP_CAS_Id` int(11) NOT NULL,
  PRIMARY KEY (`TAP_CAS_Id`),
  KEY `Revisiones_Evaluadores_FK` (`Evaluadores_RES_UOS_Usuarios_Id`,`Evaluadores_RES_UOS_Roles_Id`),
  KEY `Revisiones_Estados_Revisiones_FK` (`Estados_Revisiones_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Descripcion` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fecha` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tap`
--

CREATE TABLE IF NOT EXISTS `tap` (
  `TAP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `Fecha_Aprobacion` date DEFAULT NULL,
  `Areas_Id` int(11) NOT NULL,
  `Areas_Lineas_Investigacion_Id` int(11) NOT NULL,
  `Lapsos_Academicos_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`TAP_ID`),
  KEY `TAP_Lapsos_Academicos_FK` (`Lapsos_Academicos_Id`),
  KEY `TAP_Areas_FK` (`Areas_Id`,`Areas_Lineas_Investigacion_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tap_cas`
--

CREATE TABLE IF NOT EXISTS `tap_cas` (
  `Id` int(11) NOT NULL,
  `Detalle` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `TAP_CAS_Id` int(11) DEFAULT NULL,
  `Caracteristicas_Id` int(11) NOT NULL,
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `TAP_CAS_TAP_CAS_FK` (`TAP_CAS_Id`),
  KEY `TAP_CAS_Caracteristicas_FK` (`Caracteristicas_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tap_eus`
--

CREATE TABLE IF NOT EXISTS `tap_eus` (
  `Fecha` date NOT NULL,
  `Estatus_Id` int(11) NOT NULL,
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  PRIMARY KEY (`Estatus_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE IF NOT EXISTS `tesis` (
  `TAP_TAP_ID` decimal(10,0) NOT NULL,
  `Usuarios_Id` int(11) NOT NULL,
  PRIMARY KEY (`TAP_TAP_ID`),
  KEY `Tesis_Usuarios_FK` (`Usuarios_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores_externos`
--

CREATE TABLE IF NOT EXISTS `tutores_externos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Cedula_Identidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Correo_Electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Curriculum` varchar(400) COLLATE utf8_spanish_ci NOT NULL,
  `id_direccion` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uos_las_ias`
--

CREATE TABLE IF NOT EXISTS `uos_las_ias` (
  `Fecha` date NOT NULL,
  `Lineas_Investigacion_Id` int(11) NOT NULL,
  `Usuarios_Id` int(11) NOT NULL,
  PRIMARY KEY (`Lineas_Investigacion_Id`,`Usuarios_Id`),
  KEY `UOS_LAS_IAS_Usuarios_FK` (`Usuarios_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `Archivos_TAP_CAS_FK` FOREIGN KEY (`TAP_CAS_Id`) REFERENCES `tap_cas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `Areas_Lineas_Investigacion_FK` FOREIGN KEY (`Lineas_Investigacion_Id`) REFERENCES `lineas_investigacion` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD CONSTRAINT `Auditorias_Usuarios_FK` FOREIGN KEY (`Usuarios_Id`) REFERENCES `cruge_user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Auditorias_Acciones_FK` FOREIGN KEY (`Acciones_Id`) REFERENCES `acciones` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Auditorias_Paginas_FK` FOREIGN KEY (`Paginas_Id`) REFERENCES `paginas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios_auditorias`
--
ALTER TABLE `comentarios_auditorias`
  ADD CONSTRAINT `Comentarios_Auditorias_Auditorias_FK` FOREIGN KEY (`Auditorias_Id`, `Auditorias_Id1`, `Auditorias_Id2`, `Auditorias_Id3`) REFERENCES `auditorias` (`Id`, `Acciones_Id`, `Usuarios_Id`, `Paginas_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
  ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
  ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuidades`
--
ALTER TABLE `cuidades`
  ADD CONSTRAINT `Cuidades_Estados_FK` FOREIGN KEY (`Estados_Id`) REFERENCES `estados` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `Direcciones_Empresas_FK` FOREIGN KEY (`Empresas_Id`) REFERENCES `empresas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Direcciones_Municipio_FK` FOREIGN KEY (`Municipio_Id`) REFERENCES `municipio` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluadores`
--
ALTER TABLE `evaluadores`
  ADD CONSTRAINT `Evaluadores_RES_UOS_FK` FOREIGN KEY (`RES_UOS_Usuarios_Id`, `RES_UOS_Roles_Id`) REFERENCES `res_uos` (`Usuarios_Id`, `Roles_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD CONSTRAINT `Inscripciones_Usuarios_FK` FOREIGN KEY (`Usuarios_Id`) REFERENCES `cruge_user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `Municipio_Cuidades_FK` FOREIGN KEY (`Cuidades_Id`, `Cuidades_Estados_Id`) REFERENCES `cuidades` (`Id`, `Estados_Id`);

--
-- Filtros para la tabla `pasantias`
--
ALTER TABLE `pasantias`
  ADD CONSTRAINT `pasantias_ibfk_1` FOREIGN KEY (`Tutores_Externos_Id`) REFERENCES `tutores_externos` (`Id`);

--
-- Filtros para la tabla `permisologia`
--
ALTER TABLE `permisologia`
  ADD CONSTRAINT `Permisologia_Paginas_FK` FOREIGN KEY (`Paginas_Id`) REFERENCES `paginas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `res_uos`
--
ALTER TABLE `res_uos`
  ADD CONSTRAINT `RES_UOS_Roles_FK` FOREIGN KEY (`Roles_Id`) REFERENCES `roles` (`Id`);

--
-- Filtros para la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD CONSTRAINT `Revisiones_Estados_Revisiones_FK` FOREIGN KEY (`Estados_Revisiones_Id`) REFERENCES `estados_revisiones` (`Id`),
  ADD CONSTRAINT `Revisiones_Evaluadores_FK` FOREIGN KEY (`Evaluadores_RES_UOS_Usuarios_Id`, `Evaluadores_RES_UOS_Roles_Id`) REFERENCES `evaluadores` (`RES_UOS_Usuarios_Id`, `RES_UOS_Roles_Id`),
  ADD CONSTRAINT `Revisiones_TAP_CAS_FK` FOREIGN KEY (`TAP_CAS_Id`) REFERENCES `tap_cas` (`Id`);

--
-- Filtros para la tabla `tap`
--
ALTER TABLE `tap`
  ADD CONSTRAINT `TAP_Areas_FK` FOREIGN KEY (`Areas_Id`, `Areas_Lineas_Investigacion_Id`) REFERENCES `areas` (`Id`, `Lineas_Investigacion_Id`),
  ADD CONSTRAINT `TAP_Lapsos_Academicos_FK` FOREIGN KEY (`Lapsos_Academicos_Id`) REFERENCES `lapsos_academicos` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tap_cas`
--
ALTER TABLE `tap_cas`
  ADD CONSTRAINT `TAP_CAS_Caracteristicas_FK` FOREIGN KEY (`Caracteristicas_Id`) REFERENCES `caracteristicas` (`Id`),
  ADD CONSTRAINT `TAP_CAS_TAP_CAS_FK` FOREIGN KEY (`TAP_CAS_Id`) REFERENCES `tap_cas` (`Id`);

--
-- Filtros para la tabla `tap_eus`
--
ALTER TABLE `tap_eus`
  ADD CONSTRAINT `TAP_EUS_Estatus_FK` FOREIGN KEY (`Estatus_Id`) REFERENCES `estatus` (`Id`);

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `Tesis_Usuarios_FK` FOREIGN KEY (`Usuarios_Id`) REFERENCES `cruge_user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
