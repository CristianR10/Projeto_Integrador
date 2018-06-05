create database cadastro
default character set utf8
default collate utf8_general_ci;
use cadastro;
create table clientes (
	id int not null auto_increment,
    adm varchar (5),
	email varchar (50) not null,
    nome varchar (30) not null,
    endereco varchar (100) not null,
    numero int (10) not null,
    complemento varchar (20),
    telefone varchar (20) not null,
    celular varchar (20) not null,
    senha varchar (10) not null,
    
    primary key (id)
)default charset = utf8;

insert into `clientes` (`id`, `adm`, `email`, `nome`, `endereco`, `numero`, `complemento`, `telefone`, `celular`, `senha`)
VALUES ('NULL', '1', 'cristian_hiei@hotmail.com', 'Cristian Renato Andrade Melo', 'Rua branquinha', '427', 'Bl-B Ap - 04', '1120851400', '11951092298', '1234')

insert into `clientes` (`id`, `adm`, `email`, `nome`, `endereco`, `numero`, `complemento`, `telefone`, `celular`, `senha`)
VALUES ('NULL', '0', 'daniel@daniel.com', 'Daniel kun', 'Rua liberdade', '538', '', '1120851400', '11951092298', '1234')

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);
select * from clientes;