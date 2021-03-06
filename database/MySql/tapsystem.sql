-- MySQL Script generated by MySQL Workbench
-- Thu Jul 24 02:08:40 2014
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tap3
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `tap3` ;
CREATE SCHEMA IF NOT EXISTS `tap3` DEFAULT CHARACTER SET utf8 ;
USE `tap3` ;

-- -----------------------------------------------------
-- Table `tap3`.`Capitulo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Capitulo` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Capitulo` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(512) NOT NULL,
  `descripcion` VARCHAR(1024) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Caracteristica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Caracteristica` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Caracteristica` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Capitulo_id` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `imprimible` TINYINT(1) NOT NULL DEFAULT 1,
  `citable` TINYINT(1) NOT NULL DEFAULT 0,
  `adjuntable` TINYINT(1) NOT NULL DEFAULT 0,
  `multiplicidad` INT NOT NULL DEFAULT 1,
  `pertenencia` TINYINT(1) NOT NULL DEFAULT 0,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_Caracteristica_Capitulo1_idx` (`Capitulo_id` ASC),
  CONSTRAINT `fk_Caracteristica_Capitulo1`
    FOREIGN KEY (`Capitulo_id`)
    REFERENCES `tap3`.`Capitulo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`LapsoAcademico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`LapsoAcademico` ;

CREATE TABLE IF NOT EXISTS `tap3`.`LapsoAcademico` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `fechaInicio` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaFin` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Area` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Area` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`LineaInvestigacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`LineaInvestigacion` ;

CREATE TABLE IF NOT EXISTS `tap3`.`LineaInvestigacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Area_id` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`, `Area_id`),
  INDEX `fk_LineaInvestigacion_Area1_idx` (`Area_id` ASC),
  CONSTRAINT `fk_LineaInvestigacion_Area1`
    FOREIGN KEY (`Area_id`)
    REFERENCES `tap3`.`Area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`TAP`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`TAP` ;

CREATE TABLE IF NOT EXISTS `tap3`.`TAP` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `LineaInvestigacion_id` INT NOT NULL,
  `Area_id` INT NOT NULL,
  `publica` TINYINT(1) NOT NULL DEFAULT 1,
  `fechaCreacion` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `lapsoInicio` INT NULL,
  `fechaInicio` TIMESTAMP NULL,
  `fechaFin` TIMESTAMP NULL,
  `lapsoFin` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_TAP_LapsoAcademico1_idx` (`lapsoInicio` ASC),
  INDEX `fk_TAP_LapsoAcademico2_idx` (`lapsoFin` ASC),
  INDEX `fk_TAP_LineaInvestigacion1_idx` (`LineaInvestigacion_id` ASC, `Area_id` ASC),
  CONSTRAINT `fk_TAP_LapsoAcademico1`
    FOREIGN KEY (`lapsoInicio`)
    REFERENCES `tap3`.`LapsoAcademico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TAP_LapsoAcademico2`
    FOREIGN KEY (`lapsoFin`)
    REFERENCES `tap3`.`LapsoAcademico` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TAP_LineaInvestigacion1`
    FOREIGN KEY (`LineaInvestigacion_id` , `Area_id`)
    REFERENCES `tap3`.`LineaInvestigacion` (`id` , `Area_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`tap_ica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`tap_ica` ;

CREATE TABLE IF NOT EXISTS `tap3`.`tap_ica` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `detalle` LONGTEXT NOT NULL,
  `Caracteristica_id` INT NOT NULL,
  `TAP_id` INT NOT NULL,
  `tapIcaCita` INT NULL,
  `versionPrevia` INT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_tap_ica_Caracteristica1_idx` (`Caracteristica_id` ASC),
  INDEX `fk_tap_ica_TAP1_idx` (`TAP_id` ASC),
  INDEX `fk_tap_ica_tap_ica1_idx` (`versionPrevia` ASC),
  INDEX `fk_tap_ica_tap_ica2_idx` (`tapIcaCita` ASC),
  CONSTRAINT `fk_tap_ica_Caracteristica1`
    FOREIGN KEY (`Caracteristica_id`)
    REFERENCES `tap3`.`Caracteristica` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tap_ica_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tap_ica_tap_ica1`
    FOREIGN KEY (`versionPrevia`)
    REFERENCES `tap3`.`tap_ica` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tap_ica_tap_ica2`
    FOREIGN KEY (`tapIcaCita`)
    REFERENCES `tap3`.`tap_ica` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Archivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Archivo` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Archivo` (
  `tap_ica_id` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `adjunto` BLOB NOT NULL,
  PRIMARY KEY (`tap_ica_id`),
  CONSTRAINT `fk_Archivo_tap_ica1`
    FOREIGN KEY (`tap_ica_id`)
    REFERENCES `tap3`.`tap_ica` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Estado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Estado` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Estado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Municipio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Municipio` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Municipio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `Estado_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Municipio_Estado1_idx` (`Estado_id` ASC),
  CONSTRAINT `fk_Municipio_Estado1`
    FOREIGN KEY (`Estado_id`)
    REFERENCES `tap3`.`Estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Ciudad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Ciudad` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Ciudad` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `Municipio_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Ciudad_Municipio1_idx` (`Municipio_id` ASC),
  CONSTRAINT `fk_Ciudad_Municipio1`
    FOREIGN KEY (`Municipio_id`)
    REFERENCES `tap3`.`Municipio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Empresa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Empresa` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Empresa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `RIF` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `correoElectronico` VARCHAR(100) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `RIF_UNIQUE` (`RIF` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Direccion` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Direccion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `detalle` VARCHAR(200) NOT NULL,
  `telefono` VARCHAR(50) NOT NULL,
  `otroContacto` VARCHAR(50) NOT NULL,
  `Ciudad_id` INT NOT NULL,
  `Empresa_id` INT NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `fk_Direccion_Empresa1_idx` (`Empresa_id` ASC),
  INDEX `fk_Direccion_Ciudad1_idx` (`Ciudad_id` ASC),
  CONSTRAINT `fk_Direccion_Empresa1`
    FOREIGN KEY (`Empresa_id`)
    REFERENCES `tap3`.`Empresa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Ciudad1`
    FOREIGN KEY (`Ciudad_id`)
    REFERENCES `tap3`.`Ciudad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`EstadoRevision`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`EstadoRevision` ;

CREATE TABLE IF NOT EXISTS `tap3`.`EstadoRevision` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `Icono` BLOB NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Estatus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Estatus` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Estatus` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(200) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_user` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `regdate` BIGINT(30) NULL DEFAULT NULL,
  `actdate` BIGINT(30) NULL DEFAULT NULL,
  `logondate` BIGINT(30) NULL DEFAULT NULL,
  `username` VARCHAR(64) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(64) NULL DEFAULT NULL COMMENT 'Hashed password',
  `authkey` VARCHAR(100) NULL DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` INT(11) NULL DEFAULT 0,
  `totalsessioncounter` INT(11) NULL DEFAULT 0,
  `currentsessioncounter` INT(11) NULL DEFAULT 0,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_authitem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_authitem` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_authitem` (
  `name` VARCHAR(64) NOT NULL,
  `type` INT(11) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_authassignment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_authassignment` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_authassignment` (
  `userid` INT NOT NULL,
  `itemname` VARCHAR(64) NOT NULL,
  `bizrule` TEXT NULL DEFAULT NULL,
  `data` TEXT NULL DEFAULT NULL,
  `activo` TINYINT(1) NULL DEFAULT 1,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`, `itemname`),
  INDEX `fk_cruge_authassignment_user` (`userid` ASC),
  INDEX `fk_cruge_authassignment_cruge_authitem1_idx` (`itemname` ASC),
  CONSTRAINT `fk_cruge_authassignment_user`
    FOREIGN KEY (`userid`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1`
    FOREIGN KEY (`itemname`)
    REFERENCES `tap3`.`cruge_authitem` (`name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Evaluador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Evaluador` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Evaluador` (
  `TAP_id` INT NOT NULL,
  `Usuario_id` INT NOT NULL,
  `Rol_name` VARCHAR(64) NOT NULL,
  `nota` INT NULL DEFAULT NULL,
  `retirado` TINYINT(1) NOT NULL DEFAULT 0,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TAP_id`, `Usuario_id`),
  INDEX `fk_Evaluador_cruge_authassignment1_idx` (`Usuario_id` ASC, `Rol_name` ASC),
  CONSTRAINT `fk_Evaluador_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evaluador_cruge_authassignment1`
    FOREIGN KEY (`Usuario_id` , `Rol_name`)
    REFERENCES `tap3`.`cruge_authassignment` (`userid` , `itemname`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Inscripcion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Inscripcion` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Inscripcion` (
  `TAP_id` INT NOT NULL,
  `Estudiante_id` INT NOT NULL,
  `Estudiante_id2` INT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TAP_id`),
  INDEX `fk_Inscripcion_cruge_user1_idx` (`Estudiante_id` ASC),
  INDEX `fk_Inscripcion_cruge_user2_idx` (`Estudiante_id2` ASC),
  CONSTRAINT `fk_Inscripcion_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inscripcion_cruge_user1`
    FOREIGN KEY (`Estudiante_id`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inscripcion_cruge_user2`
    FOREIGN KEY (`Estudiante_id2`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`TutorExterno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`TutorExterno` ;

CREATE TABLE IF NOT EXISTS `tap3`.`TutorExterno` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `cedulaIdentidad` VARCHAR(20) NOT NULL,
  `telefono` VARCHAR(100) NOT NULL,
  `correoElectronico` VARCHAR(100) NOT NULL,
  `curriculum` BLOB NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cedulaIdentidad_UNIQUE` (`cedulaIdentidad` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Pasantia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Pasantia` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Pasantia` (
  `notaExterna` INT NULL DEFAULT NULL,
  `TAP_id` INT NOT NULL,
  `TutorExterno_Id` INT NOT NULL,
  PRIMARY KEY (`TAP_id`),
  INDEX `fk_Pasantia_TutorExterno1_idx` (`TutorExterno_Id` ASC),
  CONSTRAINT `fk_Pasantia_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pasantia_TutorExterno1`
    FOREIGN KEY (`TutorExterno_Id`)
    REFERENCES `tap3`.`TutorExterno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Revision`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Revision` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Revision` (
  `tap_ica_id` INT NOT NULL,
  `Evaluador_Usuario_id` INT NOT NULL,
  `detalle` VARCHAR(1024) NOT NULL,
  `EstadoRevision_id` INT NOT NULL,
  `Evaluador_TAP_id` INT NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tap_ica_id`, `Evaluador_Usuario_id`, `Evaluador_TAP_id`),
  INDEX `fk_Revision_EstadoRevision1_idx` (`EstadoRevision_id` ASC),
  INDEX `fk_Revision_Evaluador1_idx` (`Evaluador_TAP_id` ASC, `Evaluador_Usuario_id` ASC),
  CONSTRAINT `fk_Revision_EstadoRevision1`
    FOREIGN KEY (`EstadoRevision_id`)
    REFERENCES `tap3`.`EstadoRevision` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Revision_tap_ica1`
    FOREIGN KEY (`tap_ica_id`)
    REFERENCES `tap3`.`tap_ica` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Revision_Evaluador1`
    FOREIGN KEY (`Evaluador_TAP_id` , `Evaluador_Usuario_id`)
    REFERENCES `tap3`.`Evaluador` (`TAP_id` , `Usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`tap_eus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`tap_eus` ;

CREATE TABLE IF NOT EXISTS `tap3`.`tap_eus` (
  `TAP_id` INT NOT NULL,
  `Estatus_id` INT NOT NULL,
  `detalle` VARCHAR(1024) NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TAP_id`, `Estatus_id`),
  INDEX `fk_tap_eus_Estatus1_idx` (`Estatus_id` ASC),
  CONSTRAINT `fk_tap_eus_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tap_eus_Estatus1`
    FOREIGN KEY (`Estatus_id`)
    REFERENCES `tap3`.`Estatus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Tesis`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Tesis` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Tesis` (
  `TAP_id` INT NOT NULL,
  `Usuario_id` INT NOT NULL,
  PRIMARY KEY (`TAP_id`),
  INDEX `fk_Tesis_cruge_user1_idx` (`Usuario_id` ASC),
  CONSTRAINT `fk_Tesis_TAP1`
    FOREIGN KEY (`TAP_id`)
    REFERENCES `tap3`.`TAP` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tesis_cruge_user1`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`uio_lon`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`uio_lon` ;

CREATE TABLE IF NOT EXISTS `tap3`.`uio_lon` (
  `Usuario_id` INT NOT NULL,
  `Area_id` INT NOT NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Usuario_id`, `Area_id`),
  INDEX `fk_uio_lon_cruge_user1_idx` (`Usuario_id` ASC),
  INDEX `fk_uio_lon_Area1_idx` (`Area_id` ASC),
  CONSTRAINT `fk_uio_lon_cruge_user1`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_uio_lon_Area1`
    FOREIGN KEY (`Area_id`)
    REFERENCES `tap3`.`Area` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_system`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_system` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_system` (
  `idsystem` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `largename` VARCHAR(45) NULL DEFAULT NULL,
  `sessionmaxdurationmins` INT(11) NULL DEFAULT 30,
  `sessionmaxsameipconnections` INT(11) NULL DEFAULT 10,
  `sessionreusesessions` INT(11) NULL DEFAULT 1 COMMENT '1yes 0no',
  `sessionmaxsessionsperday` INT(11) NULL DEFAULT -1,
  `sessionmaxsessionsperuser` INT(11) NULL DEFAULT -1,
  `systemnonewsessions` INT(11) NULL DEFAULT 0 COMMENT '1yes 0no',
  `systemdown` INT(11) NULL DEFAULT 0,
  `registerusingcaptcha` INT(11) NULL DEFAULT 0,
  `registerusingterms` INT(11) NULL DEFAULT 0,
  `terms` BLOB NULL DEFAULT NULL,
  `registerusingactivation` INT(11) NULL DEFAULT 1,
  `defaultroleforregistration` VARCHAR(64) NULL DEFAULT NULL,
  `registerusingtermslabel` VARCHAR(100) NULL DEFAULT NULL,
  `registrationonlogin` INT(11) NULL DEFAULT 1,
  PRIMARY KEY (`idsystem`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_session`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_session` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_session` (
  `idsession` INT NOT NULL AUTO_INCREMENT,
  `iduser` INT NOT NULL,
  `created` BIGINT(30) NULL DEFAULT NULL,
  `expire` BIGINT(30) NULL DEFAULT NULL,
  `status` INT(11) NULL DEFAULT 0,
  `ipaddress` VARCHAR(45) NULL DEFAULT NULL,
  `usagecount` INT(11) NULL DEFAULT 0,
  `lastusage` BIGINT(30) NULL DEFAULT NULL,
  `logoutdate` BIGINT(30) NULL DEFAULT NULL,
  `ipaddressout` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  INDEX `crugesession_iduser` (`iduser` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_field`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_field` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_field` (
  `idfield` INT NOT NULL AUTO_INCREMENT,
  `fieldname` VARCHAR(20) NOT NULL,
  `longname` VARCHAR(50) NULL DEFAULT NULL,
  `position` INT(11) NULL DEFAULT 0,
  `required` INT(11) NULL DEFAULT 0,
  `fieldtype` INT(11) NULL DEFAULT 0,
  `fieldsize` INT(11) NULL DEFAULT 20,
  `maxlength` INT(11) NULL DEFAULT 45,
  `showinreports` INT(11) NULL DEFAULT 0,
  `useregexp` VARCHAR(512) NULL DEFAULT NULL,
  `useregexpmsg` VARCHAR(512) NULL DEFAULT NULL,
  `predetvalue` MEDIUMBLOB NULL DEFAULT NULL,
  PRIMARY KEY (`idfield`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_fieldvalue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_fieldvalue` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_fieldvalue` (
  `idfieldvalue` INT NOT NULL AUTO_INCREMENT,
  `iduser` INT NOT NULL,
  `idfield` INT NOT NULL,
  `value` BLOB NULL DEFAULT NULL,
  PRIMARY KEY (`idfieldvalue`),
  INDEX `fk_cruge_fieldvalue_cruge_user1` (`iduser` ASC),
  INDEX `fk_cruge_fieldvalue_cruge_field1` (`idfield` ASC),
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1`
    FOREIGN KEY (`iduser`)
    REFERENCES `tap3`.`cruge_user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1`
    FOREIGN KEY (`idfield`)
    REFERENCES `tap3`.`cruge_field` (`idfield`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`cruge_authitemchild`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`cruge_authitemchild` ;

CREATE TABLE IF NOT EXISTS `tap3`.`cruge_authitemchild` (
  `parent` VARCHAR(64) NOT NULL,
  `child` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`parent`, `child`),
  INDEX `child` (`child` ASC),
  CONSTRAINT `crugeauthitemchild_ibfk_1`
    FOREIGN KEY (`parent`)
    REFERENCES `tap3`.`cruge_authitem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2`
    FOREIGN KEY (`child`)
    REFERENCES `tap3`.`cruge_authitem` (`name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`don_tno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`don_tno` ;

CREATE TABLE IF NOT EXISTS `tap3`.`don_tno` (
  `TutorExterno_id` INT NOT NULL,
  `Direccion_id` INT NOT NULL,
  `comentario` VARCHAR(45) NULL,
  `fecha` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`TutorExterno_id`, `Direccion_id`),
  INDEX `fk_don_tno_Direccion1_idx` (`Direccion_id` ASC),
  INDEX `fk_don_tno_TutorExterno1_idx` (`TutorExterno_id` ASC),
  CONSTRAINT `fk_don_tno_Direccion1`
    FOREIGN KEY (`Direccion_id`)
    REFERENCES `tap3`.`Direccion` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_don_tno_TutorExterno1`
    FOREIGN KEY (`TutorExterno_id`)
    REFERENCES `tap3`.`TutorExterno` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Usuario` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cedula` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`ControlDeEstudio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`ControlDeEstudio` ;

CREATE TABLE IF NOT EXISTS `tap3`.`ControlDeEstudio` (
  `Usuario_id` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `tipoUsuario` ENUM('Estudiante','Profesor') NULL DEFAULT 'Estudiante',
  `tipoAcceso` ENUM('Sin Acceso','Tesis','Pasantia') NULL DEFAULT 'Sin Acceso',
  PRIMARY KEY (`Usuario_id`),
  CONSTRAINT `fk_ControlDeEstudio_Usuario1`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `tap3`.`Usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`CETI`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`CETI` ;

CREATE TABLE IF NOT EXISTS `tap3`.`CETI` (
  `Usuario_id` INT NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Usuario_id`),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC),
  CONSTRAINT `fk_CETI_Usuario1`
    FOREIGN KEY (`Usuario_id`)
    REFERENCES `tap3`.`Usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Regla`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Regla` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Regla` (
  `id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tap3`.`Tabla`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tap3`.`Tabla` ;

CREATE TABLE IF NOT EXISTS `tap3`.`Tabla` (
  `id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

USE `tap3` ;

-- -----------------------------------------------------
-- procedure Estatus_Tap
-- -----------------------------------------------------

USE `tap3`;
DROP procedure IF EXISTS `tap3`.`Estatus_Tap`;

DELIMITER $$
USE `tap3`$$
CREATE PROCEDURE `Estatus_Tap` (Estatus_Buscar varchar(100))
BEGIN
select TAP.id,TI.detalle as Titulo,
			
			CONCAT(A.nombre," - ",LI.nombre) as 'Temática y Linea de investigacion',
			t2.nombre as estatus
			
	from
(select t1.nombre, t1.id,t1.Estatus_id from
				(select TAP.id, ES.nombre, TE.fecha,TE.Estatus_id  
				from TAP, Estatus AS ES
				join  tap_eus AS TE on(TE.Estatus_id=ES.id )
				where TE.TAP_id=TAP.id
				order by TE.fecha desc)t1
			group by t1.id)t2,
		   TAP AS TAP join tap_ica AS TI on(TAP.id=TI.TAP_id)
			join Caracteristica as CT on (TI.Caracteristica_id=CT.id)
			join LineaInvestigacion AS LI on(TAP.LineaInvestigacion_id= LI.id)
			join tap_eus AS TE on(TE.TAP_id=TAP.id)
			join Estatus AS EST on (EST.id=TE.Estatus_id)
			join Area as A on (A.id = LI.id)
			where	(EST.nombre=Estatus_Buscar) 
			and (t2.id=TAP.id and t2.Estatus_id=EST.id);

END$$

DELIMITER ;

-- -----------------------------------------------------
-- function Obtener_Dato
-- -----------------------------------------------------

USE `tap3`;
DROP function IF EXISTS `tap3`.`Obtener_Dato`;

DELIMITER $$
USE `tap3`$$
CREATE FUNCTION `Obtener_Dato` (IdBuscar int, ValorBuscar varchar(100))
RETURNS Varchar(100)
BEGIN
	DECLARE Devolver Varchar(100);
	SET Devolver = NULL;

	SELECT CONVERT(CFV.value  USING utf8) as VALOR 
	FROM cruge_field as CF
	JOIN cruge_fieldvalue as CFV on (CF.idfield = CFV.idfield)
	JOIN cruge_user as CU on (CFV.iduser = CU.iduser)
	WHERE CF.fieldname = ValorBuscar && CU.iduser = IdBuscar
	INTO Devolver;

	SET Devolver= ifnull(Devolver,"No encontrado");

RETURN Devolver;
END$$

DELIMITER ;
SET SQL_MODE = '';
GRANT USAGE ON *.* TO tap3;
 DROP USER tap3;
SET SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
CREATE USER 'tap3' IDENTIFIED BY 'Software2014';

GRANT ALL ON `tap3`.* TO 'tap3';
GRANT SELECT ON TABLE `tap3`.* TO 'tap3';
GRANT SELECT, INSERT, TRIGGER ON TABLE `tap3`.* TO 'tap3';
GRANT SELECT, INSERT, TRIGGER, UPDATE, DELETE ON TABLE `tap3`.* TO 'tap3';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
