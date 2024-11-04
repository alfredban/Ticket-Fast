-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_tickets
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_tickets
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_tickets` DEFAULT CHARACTER SET utf8mb3 ;
USE `db_tickets` ;

-- -----------------------------------------------------
-- Table `db_tickets`.`ci_sessions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_tickets`.`ci_sessions` (
  `id` VARCHAR(128) NOT NULL,
  `ip_address` VARCHAR(45) NOT NULL,
  `timestamp` INT UNSIGNED NOT NULL DEFAULT '0',
  `data` BLOB NOT NULL,
  INDEX `ci_sessions_timestamp` (`timestamp` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_tickets`.`rol_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_tickets`.`rol_usuario` (
  `id_rol` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_tickets`.`shows`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_tickets`.`shows` (
  `id_shows` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `fecha` DATE NOT NULL,
  `precio` FLOAT NOT NULL,
  `capacidad` INT NOT NULL,
  `cant_reservas` INT NOT NULL DEFAULT '0',
  `direccion` VARCHAR(40) NOT NULL,
  `imagen` VARCHAR(30) NOT NULL,
  `baja` TINYINT NOT NULL,
  PRIMARY KEY (`id_shows`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_tickets`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_tickets`.`usuario` (
  `nombre` VARCHAR(16) NOT NULL,
  `correo` VARCHAR(30) NOT NULL,
  `contraseña` VARCHAR(16) NOT NULL,
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `id_rol` INT NOT NULL,
  `entradas` INT NOT NULL,
  PRIMARY KEY (`id_usuario`),
  INDEX `id_rol_idx` (`id_rol` ASC) VISIBLE,
  CONSTRAINT `id_rol`
    FOREIGN KEY (`id_rol`)
    REFERENCES `db_tickets`.`rol_usuario` (`id_rol`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `db_tickets`.`shows_x_clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_tickets`.`shows_x_clientes` (
  `id_shows_x_clientes` INT NOT NULL AUTO_INCREMENT,
  `id_show` INT NOT NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id_shows_x_clientes`),
  INDEX `id_usuario_idx` (`id_usuario` ASC) VISIBLE,
  INDEX `id_show_idx` (`id_show` ASC) VISIBLE,
  CONSTRAINT `id_show`
    FOREIGN KEY (`id_show`)
    REFERENCES `db_tickets`.`shows` (`id_shows`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `db_tickets`.`usuario` (`id_usuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 172
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


-- agregar admin = 1  cliente = 2 
-- no se puede agregar usuario admin desde la app
INSERT INTO `db_tickets`.`rol_usuario`(id_rol, descripcion)
	VALUES(1,"admin");
INSERT INTO `db_tickets`.`rol_usuario`(id_rol,descripcion)
	VALUES(2,"cliente");
    
-- agregar admin id rol =1
INSERT INTO `db_tickets`.`usuario`(nombre,correo,contraseña,id_rol,entradas)
	VALUES("alfredban","alfredban@gmail.com","1998",1,0);



