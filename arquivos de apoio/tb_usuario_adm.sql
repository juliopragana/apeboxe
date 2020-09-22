DROP TABLE IF EXISTS `tb_usuario` ;

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` INT(5) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(120) NOT NULL,
  `usuario` VARCHAR(40) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NOT NULL,
  `status_usuario` INT(5) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;