DROP TABLE IF EXISTS `tb_curso` ;

CREATE TABLE IF NOT EXISTS `tb_curso` (
  `id_atleta` INT(5) ZEROFILL NOT NULL AUTO_INCREMENT,
  `nome_atleta` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(20) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `datanascimento` VARCHAR(20) NOT NULL,
  `sexo` VARCHAR(20) NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `cep` VARCHAR(20) NOT NULL,
  `rua` VARCHAR(80) NOT NULL,
  `complemento` VARCHAR(100) NOT NULL,
  `num` INT(10) NOT NULL,
  `bairro` VARCHAR(80) NOT NULL,
  `cidade` VARCHAR(80) NOT NULL,
  `uf` VARCHAR(45) NOT NULL,
  `status_inscricao` INT(5) NOT NULL,
  `academia` VARCHAR(100) NOT NULL,
  `data_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_atleta`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tb_boleto_curso` ;

CREATE TABLE IF NOT EXISTS `tb_boleto_curso` (
  `id_boleto_curso` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(45) NOT NULL,
  `referencia` VARCHAR(80) NOT NULL,
  `data_vencimento` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  `linkdownload` VARCHAR(300) NOT NULL,
  `barcodeNumber` VARCHAR(45) NOT NULL,
  `status_boleto` INT(5) NOT NULL,
  `id_atleta` INT(5) ZEROFILL NOT NULL,
  PRIMARY KEY (`id_boleto_curso`),
  CONSTRAINT `fk_tb_boleto_atleta_tb_atleta1`
    FOREIGN KEY (`id_atleta`)
    REFERENCES `tb_curso` (`id_atleta`)
    ON DELETE CASCADE)
ENGINE = InnoDB DEFAULT CHARSET=utf8;

