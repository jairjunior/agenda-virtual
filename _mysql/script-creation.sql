-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema agenda_virtual
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema agenda_virtual
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `agenda_virtual` DEFAULT CHARACTER SET utf8 ;
USE `agenda_virtual` ;

-- -----------------------------------------------------
-- Table `agenda_virtual`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda_virtual`.`usuarios` (
  `idusuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(30) NOT NULL,
  `sobrenome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `admin` INT UNSIGNED NOT NULL,
  `criacao` DATETIME NOT NULL,
  `modificacao` DATETIME NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agenda_virtual`.`contatos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agenda_virtual`.`contatos` (
  `idcontato` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `tratamento` VARCHAR(20) NULL,
  `nome` VARCHAR(50) NOT NULL,
  `sobrenome` VARCHAR(100) NULL,
  `apelido` VARCHAR(45) NULL,
  `telefone1` VARCHAR(45) NULL,
  `tipo_telefone1` VARCHAR(45) NULL,
  `telefone2` VARCHAR(45) NULL,
  `tipo_telefone2` VARCHAR(45) NULL,
  `telefone3` VARCHAR(45) NULL,
  `tipo_telefone3` VARCHAR(45) NULL,
  `telefone4` VARCHAR(45) NULL,
  `tipo_telefone4` VARCHAR(45) NULL,
  `telefone5` VARCHAR(45) NULL,
  `tipo_telefone5` VARCHAR(45) NULL,
  `email1` VARCHAR(100) NULL,
  `email2` VARCHAR(100) NULL,
  `endereco` VARCHAR(200) NULL,
  `webpage` VARCHAR(100) NULL,
  `nota` VARCHAR(45) NULL,
  `criacao` DATETIME NOT NULL,
  `modificacao` DATETIME NOT NULL,
  `idusuario` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idcontato`, `idusuario`),
  INDEX `fk_contatos_usuarios_idx` (`idusuario` ASC),
  CONSTRAINT `fk_contatos_usuarios`
    FOREIGN KEY (`idusuario`)
    REFERENCES `agenda_virtual`.`usuarios` (`idusuario`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
