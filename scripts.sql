create table usuario(
	id int primery key identity,
	usuario varchar(50),
	senha varchar(20)
)

create table sintegra(
	id int primery key identity,
	idusuario int,
	cnpj varchar(20),
	resultado_json varchar(1000)	
)
