-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ifburguer
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ifburguer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `if_burguer` DEFAULT CHARACTER SET latin1 ;
USE `if_burguer` ;

-- -----------------------------------------------------
-- Table `ifburguer`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_cliente` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `username_cliente` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `email_cliente` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `senha_cliente` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_cliente`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ifburguer`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `username` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `senha` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `senha_admin` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
