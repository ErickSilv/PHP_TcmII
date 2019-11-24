-- criação do banco de dados db_pc atendendo as normas da lingua portuguesa
create database db_pc
default character set utf8
default collate utf8_general_ci;


-- acessando banco de dados chamado db_pc
use db_pc;

-- criação da tabela cargo
create table tbl_Cargo(
	cod_Cargo  int primary key auto_increment,
    nome_Cargo varchar(80) not null,
    valor_cargo decimal(10,2) not null
)default charset utf8;

/* criação da tabela Consultor com chave estrangeira cd_cargo */
create table tbl_Consultor(
	cod_Consultor int primary key auto_increment,
    nome_Consultor varchar(80) not null,
    formacao_Consultor varchar(30) not null,
    no_Telefone varchar(14) not null,
    Email varchar(80) not null,
    nome_Usuario varchar(20) not null,
    Senha varchar(8) not null,
    cod_Cargo int not null,
    constraint foreign key(cd_cargo) references tbl_Cargo(cd_cargo)
)default charset utf8;



/* criação da tabela Projeto */
create table tbl_Projeto(
    cod_Projeto int primary key auto_increment,
    nome_Projeto varchar(30) not null,
    Descr_Projeto varchar (100) not null,
    Status_Projeto varchar(15) not null
)default charset utf8;

/* criação da tabela Cronograma */
create table tbl_Cronograma(

cod_Cronograma int primary key auto_increment,
    cargaHora varchar(6),
    dataCronograma date,
    cod_Projeto int not null,
    
    constraint foreign key(cod_Projeto) references tbl_Projeto(cod_projeto)
)default charset utf8;


/* criação da tabela Endereco */
create table tbl_Endereco(
    cod_Endereco int primary key auto_increment,
    logradouro varchar(80) not null,
    Numero varchar(6) not null,
    Complemento varchar(20),
    Cep varchar (10) not null,
    Bairro varchar(20) not null, 
    Cidade varchar(30) not null,
    Estado char(2) not null
)default charset utf8;

/* criação da tabela Contrato */
create table tbl_Contrato(
	cod_Contrato int primary key auto_increment,
    nome_Contato varchar(80) not null,
    tel_Contrato varchar(14),
    email_Contrato varchar(80) not null,
    cnpj_Contrato varchar(20) not null,
    nome_Contrato varchar(30) not null, 
    prazo_Contrato varchar(20) not null,
    vigencia_Contrato varchar(12) not null,
    valor_Contrato varchar(12) not null,
    cod_Projeto int not null,
    cod_Endereco int not null,
    cod_Consultor int not null,
    
   
    constraint foreign key(cod_Projeto) references tbl_Projeto(cod_Projeto),
    constraint foreign key(cod_Endereco) references tbl_Endereco(cod_Endereco),
    constraint foreign key(cod_Consultor) references tbl_Consultor(cod_Consultor)
)default charset utf8;


/* criação tabela Reunião*/
create table tbl_Reuniao(

    cod_Reuniao int primary key auto_increment,
    data_Reuniao date,
    hora_Reuniao varchar(6) not null,
    descr_Reuniao varchar(40) not null,
    status_Reunial varchar(15) not null,
    cod_Projeto int not null,
    cod_Consultor int not null,
    
    constraint foreign key(cod_Projeto) references tbl_Projeto(cod_Projeto),
    constraint foreign key(cod_Consultor) references tbl_Consultor(cod_Consultor)
    
)default charset utf8;



/*  inserindo registro para teste tbl_consultor */ 
insert into tbl_Consultor 
	values(default,'administrador','(11)98585-4596','admin@gmail.com','admin','1234','1');
    
    -- inserindo registro para teste tbl_cargo
insert into tbl_Cargo 
	values(default,'Analista de sistemas','15.00');

-- selecionando os dados da tabela consultor
select * from tbl_Consultor;

-- selecionando os dados da tabela cargo
select * from tbl_Cargo;

-- selecionando os dados da tabela consultor
select * from tbl_Contrato;



CREATE USER 'programadorpc'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
GRANT ALL PRIVILEGES ON db_pc.* TO 'programadorpc'@'localhost' WITH GRANT OPTION;


