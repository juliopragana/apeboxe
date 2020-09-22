create table tb_atleta(
    id_atleta int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    email varchar(100) not null,
    cpf varchar(20) not null,
    telefone varchar(20) not null,
    datanascimento varchar(20) not null,
    sexo varchar(20),
    img varchar (255),
    cep varchar(20),
    rua varchar (80),
    complemento varchar(100),
    num int(10),
    bairro varchar(80),
    cidade varchar (80),
    uf varchar(50),
    status int(5)
);

SELECT * FROM tb_atleta;


use ocomon;


create table tb_baseline_teste(
	
    id_base int auto_increment primary key,
    id_usuario int not null,
    deslogin varchar(80) not null,
    dessenha varchar(50) not null,
    data_cadastro date
);

select * from tb_baseline_teste;

alter table tb_baseline_teste modify column data_cadastro VARCHAR(30);

use apeboxe2; 

INSERT INTO tb_atleta (nome_atleta, email, cpf, telefone, datanascimento, sexo, img, cep, rua, complemento, num, bairro, cidade, uf, academia, professor, status_inscricao, data_registro) 
				VALUES ('Julio Pragana', 'julinho@gmail.com', '09453574430', '81 99987878', '24/03/1993', 'Masculino', '', '53090000', 'Rua rosa de oliveira', 'casa', 110, 'Rio Doce', 'Recife', 'PE', 'Academia A', 'Paulo Magnus', 1, '2019-04-04 23:30:14'); 
                

CALL sp_atleta_save ('Julio Praganas', 'julinho@gmail.com', '09453574430', '81 99987878', '24/03/1993', 'Masculino', '', '53090000', 'Rua rosa de oliveira', 'casa', 110, 'Rio Doce', 'Recife', 'PE', 'Academia A', 'Paulo Magnus', 1, '16/04/2019 13:04:36');
				
select * from tb_atleta;
select * from tb_boleto_atleta;
                

drop table tb_curso; 
drop table tb_boleto_curso;

truncate table tb_curso;

drop database apeboxe2;

use apeboxe2; 
select * from tb_curso;
select * from tb_boleto_curso;

select last_insert_id() tb_boleto;

drop database apeboxe2;
                
                
UPDATE tb_atleta SET 
            codigo = '0051', 
            referencia = 'ksajas', 
            data_vencimento = '20/01/2020', 
            valor = '75', 
            link = 'http', 
            linkdownload = 'linkd',
            linhadigitavel = 'digtal', 
            barcodeNumber = 'sddsd', 
            status_boleto = 1 
            WHERE 
            id_atleta = 00001;
            
SELECT * FROM tb_curso a INNER JOIN tb_boleto_curso b USING(id_atleta) WHERE b.id_atleta = 1;

SELECT * FROM tb_curso a INNER JOIN tb_boleto_curso b USING(id_atleta) WHERE cpf = '094.535.744-30' AND status_boleto = 1 ORDER BY data_vencimento ASC;

select * from tb_curso;
select * from tb_boleto_curso;

INSERT INTO tb_boleto_curso (codigo, referencia, data_vencimento, valor, linkdownload, barcodeNumber, status_boleto, id_atleta) 
                    VALUES ('4554', 'teste', '20/01/2015', '2250', 'link', '024445', 1, 1); 
                