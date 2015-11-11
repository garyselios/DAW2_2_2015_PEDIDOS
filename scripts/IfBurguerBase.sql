-- MySQL Workbench Forward Engineering-------

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
  `fecha` DATE NOT NULL COMMENT '',
  `nombre` VARCHAR(50) NOT NULL COMMENT '',
  `marca` VARCHAR(50) NOT NULL COMMENT '',
  `provedor` VARCHAR(50) NOT NULL COMMENT '',
  `cantidad` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`produto` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(30) NOT NULL COMMENT '',
  `precio` FLOAT NOT NULL COMMENT '',
  `costo` FLOAT NOT NULL COMMENT '',
  `ingredientes` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`tipo_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`tipo_usuario` (
  `id` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `if_burguer`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(50) NOT NULL COMMENT '',
  `apellido` VARCHAR(45) NOT NULL COMMENT '',
  `username` VARCHAR(15) NOT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `contrasena` VARCHAR(30) NOT NULL COMMENT '',
  `tipo_usuario` INT(11) NOT NULL COMMENT '',
  `documento` INT(11) NULL COMMENT '',
  `edad` INT(11) NULL COMMENT '',
  `telefono` INT NULL COMMENT '',
  `direccion` VARCHAR(45) NULL COMMENT '',
  `ciudad` VARCHAR(45) NULL COMMENT '',
  `barrio` VARCHAR(45) NULL COMMENT '',
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
  `fecha` DATE NOT NULL COMMENT '',
  `direccion` VARCHAR(100) NULL COMMENT '',
  `nombre` VARCHAR(50) NOT NULL COMMENT '',
  `telefono` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `id_comprador` INT(11) NOT NULL COMMENT '',
  `id_producto` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `id_produto_idx` (`id_producto` ASC)  COMMENT '',
  INDEX `id_comprador_idx` (`id_comprador` ASC)  COMMENT '',
  CONSTRAINT `id_produto`
    FOREIGN KEY (`id_producto`)
    REFERENCES `if_burguer`.`produto` (`id`)
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
-- Table `if_burguer`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `if_burguer`.`venda` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `id_usuario` INT(11) NOT NULL COMMENT '',
  `id_prod` INT(11) NOT NULL COMMENT '',
  `fecha` DATE NOT NULL COMMENT '',
  `cantidad` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `id_prod_Idx` (`id_prod` ASC)  COMMENT '',
  INDEX `id_usuario_idx` (`id_usuario` ASC)  COMMENT '',
  CONSTRAINT `id_prod`
    FOREIGN KEY (`id_prod`)
    REFERENCES `if_burguer`.`produto` (`id`),
  CONSTRAINT `id_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `if_burguer`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;