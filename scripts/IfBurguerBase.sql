-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema if_burguer
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema if_burguer
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `if_burguer` DEFAULT CHARACTER SET latin1 ;
USE `if_burguer` ;

-- -----------------------------------------------------
-- Table `if_burguer`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`estoque` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `date_entrada` DATE NULL COMMENT '',
  `nome` VARCHAR(50) NOT NULL COMMENT '',
  `marca` VARCHAR(50) NOT NULL COMMENT '',
  `forncedor` VARCHAR(50) NOT NULL COMMENT '',
  `quantidade` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`produtos` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(30) NOT NULL COMMENT '',
  `preco` FLOAT NOT NULL COMMENT '',
  `custo` FLOAT NOT NULL COMMENT '',
  `ingredientes` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`tipo_usuario` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(50) NOT NULL COMMENT '',
  `username` VARCHAR(15) NOT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `senha` VARCHAR(30) NOT NULL COMMENT '',
  `documento` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `idade` INT(11) NULL DEFAULT NULL COMMENT '',
  `tipo_usuario` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `tipo_usuario_idx` (`tipo_usuario` ASC)  COMMENT '',
  CONSTRAINT `tipo_usuario`
    FOREIGN KEY (`tipo_usuario`)
    REFERENCES `if_burguer`.`tipo_usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB

DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`pedido` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `data` DATE NULL DEFAULT NULL COMMENT '',
  `endereco` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `nome` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `telefone` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `id_comprador` INT(11) NULL DEFAULT NULL COMMENT '',
  `id_produto` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `id_produto_idx` (`id_produto` ASC)  COMMENT '',
  INDEX `id_comprador_idx` (`id_comprador` ASC)  COMMENT '',
  CONSTRAINT `id_produto`
    FOREIGN KEY (`id_produto`)
    REFERENCES `if_burguer`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_comprador`
    FOREIGN KEY (`id_comprador`)
    REFERENCES `if_burguer`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`vendas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `id_comp` INT(11) NULL DEFAULT NULL COMMENT '',
  `id_prod` INT(11) NULL COMMENT '',
  `data` DATE NULL COMMENT '',
  `quantidade` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `id_prod_Idx` (`id_prod` ASC)  COMMENT '',
  INDEX `id_comp_idx` (`id_comp` ASC)  COMMENT '',
  CONSTRAINT `id_prod`
    FOREIGN KEY (`id_prod`)
    REFERENCES `if_burguer`.`produtos` (`id`),
  CONSTRAINT `id_comp`
    FOREIGN KEY (`id_comp`)
    REFERENCES `if_burguer`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

