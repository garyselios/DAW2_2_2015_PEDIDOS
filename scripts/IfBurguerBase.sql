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
-- Table `if_burguer`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`admin` (
  `id` INT(11) NOT NULL COMMENT '',
  `nome` VARCHAR(100) NOT NULL COMMENT '',
  `username` VARCHAR(100) NOT NULL COMMENT '',
  `email` VARCHAR(100) NOT NULL COMMENT '',
  `senha` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`cliente`
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
-- Table `if_burguer`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`estoque` (
  `id_estoque` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `ingredientes` VARCHAR(100) NOT NULL COMMENT '',
  `date_entrada` DATE NULL DEFAULT NULL COMMENT '',
  `nome_esto` VARCHAR(200) NOT NULL COMMENT '',
  `marca` VARCHAR(100) NOT NULL COMMENT '',
  `forncedor` VARCHAR(200) NOT NULL COMMENT '',
  `quantidade` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id_estoque`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`produtos` (
  `id_prod` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_pro` VARCHAR(100) NOT NULL COMMENT '',
  `preco_custo` FLOAT NOT NULL COMMENT '',
  `preco_venda` FLOAT NOT NULL COMMENT '',
  `pro_ingredientes` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id_prod`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`pedido` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `data` DATE NULL DEFAULT NULL COMMENT '',
  `endereco` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `nome` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `telefone` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `id_cliente` INT(11) NULL DEFAULT NULL COMMENT '',
  `id_produto` INT(11) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `id_cliente` (`id_cliente` ASC)  COMMENT '',
  INDEX `id_produto_idx` (`id_produto` ASC)  COMMENT '',
  CONSTRAINT `id_produto`
    FOREIGN KEY (`id_produto`)
    REFERENCES `if_burguer`.`produtos` (`id_prod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `pedido_ibfk_1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `if_burguer`.`cliente` (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(100) NOT NULL COMMENT '',
  `username` VARCHAR(100) NOT NULL COMMENT '',
  `email` VARCHAR(100) NOT NULL COMMENT '',
  `senha` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`vendas` (
  `id_vendas` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `id_cliente` INT(11) NULL DEFAULT NULL COMMENT '',
  `id_prod` INT(11) NULL DEFAULT NULL COMMENT '',
  `data_venda` DATE NULL DEFAULT NULL COMMENT '',
  `quantidade_vendas` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id_vendas`)  COMMENT '',
  INDEX `fk_vendas_usuario_cliente_Idx` (`id_cliente` ASC)  COMMENT '',
  INDEX `fk_vendas_produtos_Idx` (`id_prod` ASC)  COMMENT '',
  CONSTRAINT `fk_vendas_produtos`
    FOREIGN KEY (`id_prod`)
    REFERENCES `if_burguer`.`produtos` (`id_prod`),
  CONSTRAINT `fk_vendas_usuario_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `if_burguer`.`cliente` (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
