Create database EDL;
USE EDL;

CREATE TABLE usuario (
  `num_Id` INT(11) NOT NULL,
  `Password` VARCHAR(12) NOT NULL,
  `Estado` INT(11) NOT NULL DEFAULT 1,
  `pri_Nombre` VARCHAR(14) NOT NULL,
  `seg_Nombre` VARCHAR(14) NULL DEFAULT NULL,
  `pri_Apellido` VARCHAR(14) NOT NULL,
  `seg_Apellido` VARCHAR(14) NULL DEFAULT NULL,
  `telefono` VARCHAR(10) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`num_Id`));

CREATE TABLE certificado (
  `idCertificado` INT(11) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  `certificado` TINYBLOB NOT NULL,
  `Estado` INT(11) NOT NULL DEFAULT 1,
  `Id_usuario` INT(11) NOT NULL,
  PRIMARY KEY (`idCertificado`),
  CONSTRAINT `fk_certificado_usuario1`
    FOREIGN KEY (`Id_usuario`)
    REFERENCES usuario (`num_Id`));
    
CREATE TABLE proyecto (
  `idProyecto` INT(11) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `Estado` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idProyecto`));
  
CREATE TABLE imagen (
  `idImagen` INT(11) NOT NULL,
  `imagen` TINYBLOB NOT NULL,
  `usuario_num_Id` INT(11) NULL,
  `proyecto_idProyecto` INT(11) NULL,
  PRIMARY KEY (`idImagen`),
  CONSTRAINT `fk_imagen_usuario1`
    FOREIGN KEY (`usuario_num_Id`)
    REFERENCES usuario (`num_Id`),
  CONSTRAINT `fk_imagen_proyecto1`
    FOREIGN KEY (`proyecto_idProyecto`)
    REFERENCES proyecto (`idProyecto`));

CREATE TABLE registro (
  `idRegistro` INT(11) NOT NULL AUTO_INCREMENT,
  `descr_Registro` VARCHAR(80) NULL DEFAULT NULL,
  `usuario` VARCHAR(20) NULL DEFAULT NULL,
  `fecha` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`idRegistro`));

CREATE TABLE rol (
  `idRol` INT(11) NOT NULL,
  `Nombre_rol` VARCHAR(15) NOT NULL,
  `Desc_rol` VARCHAR(45) NULL DEFAULT NULL,
  `Estado` INT(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idRol`));
  
CREATE TABLE rol_usuario (
  `rol_idRol` INT(11) NOT NULL,
  `usuario_num_Id` INT(11) NOT NULL,
  PRIMARY KEY (`rol_idRol`, `usuario_num_Id`),
  CONSTRAINT `fk_rol_has_usuario_rol1`
    FOREIGN KEY (`rol_idRol`)
    REFERENCES rol (`idRol`),
  CONSTRAINT `fk_rol_has_usuario_usuario1`
    FOREIGN KEY (`usuario_num_Id`)
    REFERENCES usuario (`num_Id`));

CREATE TABLE usuario_proyecto (
  `usuario_num_Id` INT(11) NOT NULL,
  `proyecto_idProyecto` INT(11) NOT NULL,
  PRIMARY KEY (`usuario_num_Id`, `proyecto_idProyecto`),
  CONSTRAINT `fk_usuario_has_proyecto_usuario1`
    FOREIGN KEY (`usuario_num_Id`)
    REFERENCES usuario (`num_Id`),
  CONSTRAINT `fk_usuario_has_proyecto_proyecto1`
    FOREIGN KEY (`proyecto_idProyecto`)
    REFERENCES proyecto (`idProyecto`));

 