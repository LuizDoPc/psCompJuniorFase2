-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pscompjuniorfase2` DEFAULT CHARACTER SET utf8 ;
USE `pscompjuniorfase2` ;

CREATE TABLE IF NOT EXISTS `Estado` (
  `idEstado` INT(11) NOT NULL,
  `Nome` VARCHAR(75) NOT NULL,
  `UF` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `Cidade` (
  `idCidade` INT(11) NOT NULL,
  `Nome` VARCHAR(120) NOT NULL,
  `Estado_idEstado` INT(11) NOT NULL,
  PRIMARY KEY (`idCidade`, `Estado_idEstado`),
  INDEX `fk_Cidade_Estado1_idx` (`Estado_idEstado` ASC),
  CONSTRAINT `fk_Cidade_Estado1`
    FOREIGN KEY (`Estado_idEstado`)
    REFERENCES `pscompjuniorfase2`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `pscompjuniorfase2`.`participantes` (
  `cpf` VARCHAR(14) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `sexo` CHAR(1) NOT NULL,
  `ufrg` CHAR(2) NOT NULL,
  `rg` VARCHAR(10) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `nascimento` DATE NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `numero` VARCHAR(10) NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `ìnscrito` TINYINT NOT NULL,
  `idEstado` INT NOT NULL,
  `idCidade` INT NOT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC),
  UNIQUE INDEX `rg_UNIQUE` (`rg` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_participantes_estado1_idx` (`idEstado` ASC),
  INDEX `fk_participantes_cidade1_idx` (`idCidade` ASC),
  CONSTRAINT `fk_participantes_estado1`
    FOREIGN KEY (`idEstado`)
    REFERENCES `pscompjuniorfase2`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_participantes_cidade1`
    FOREIGN KEY (`idCidade`)
    REFERENCES `pscompjuniorfase2`.`Cidade` (`idCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
