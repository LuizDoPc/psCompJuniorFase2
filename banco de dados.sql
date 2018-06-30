-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pscompjuniorfase2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pscompjuniorfase2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pscompjuniorfase2` DEFAULT CHARACTER SET utf8 ;
USE `pscompjuniorfase2` ;

-- -----------------------------------------------------
-- Table `pscompjuniorfase2`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pscompjuniorfase2`.`estado` (
  `idEstado` INT(11) NOT NULL,
  `Nome` VARCHAR(75) NOT NULL,
  `UF` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pscompjuniorfase2`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pscompjuniorfase2`.`cidade` (
  `idCidade` INT(11) NOT NULL,
  `Nome` VARCHAR(120) NOT NULL,
  `Estado_idEstado` INT(11) NOT NULL,
  PRIMARY KEY (`idCidade`, `Estado_idEstado`),
  INDEX `fk_Cidade_Estado1_idx` (`Estado_idEstado` ASC),
  CONSTRAINT `fk_Cidade_Estado1`
    FOREIGN KEY (`Estado_idEstado`)
    REFERENCES `pscompjuniorfase2`.`estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pscompjuniorfase2`.`participantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pscompjuniorfase2`.`participantes` (
  `CPF` VARCHAR(14) NOT NULL,
  `Nome` VARCHAR(100) NOT NULL,
  `Sexo` CHAR(1) NOT NULL,
  `ufRG` CHAR(2) NOT NULL,
  `RG` VARCHAR(10) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Telefone` VARCHAR(15) NOT NULL,
  `Nascimento` DATE NOT NULL,
  `Logradouro` VARCHAR(100) NOT NULL,
  `Numero` VARCHAR(10) NOT NULL,
  `Bairro` VARCHAR(100) NOT NULL,
  `Complemento` VARCHAR(45) NOT NULL,
  `CEP` VARCHAR(10) NOT NULL,
  `Inscrito` TINYINT NOT NULL,
  `Estado_idEstado` INT(11) NOT NULL,
  `Cidade_idCidade` INT(11) NOT NULL,
  PRIMARY KEY (`CPF`, `Email`),
  UNIQUE INDEX `cpf_UNIQUE` (`CPF` ASC),
  UNIQUE INDEX `rg_UNIQUE` (`RG` ASC),
  UNIQUE INDEX `email_UNIQUE` (`Email` ASC),
  INDEX `fk_participantes_estado1_idx` (`Estado_idEstado` ASC),
  INDEX `fk_participantes_cidade1_idx` (`Cidade_idCidade` ASC),
  CONSTRAINT `fk_participantes_cidade1`
    FOREIGN KEY (`Cidade_idCidade`)
    REFERENCES `pscompjuniorfase2`.`cidade` (`idCidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_participantes_estado1`
    FOREIGN KEY (`Estado_idEstado`)
    REFERENCES `pscompjuniorfase2`.`estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pscompjuniorfase2`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pscompjuniorfase2`.`login` (
  `idlogin` INT NOT NULL,
  `Senha` VARCHAR(45) NULL,
  `Email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idlogin`),
  INDEX `fk_login_participantes1_idx` (`Email` ASC),
  CONSTRAINT `fk_login_participantes1`
    FOREIGN KEY (`Email`)
    REFERENCES `pscompjuniorfase2`.`participantes` (`Email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
