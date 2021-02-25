create database farmacia;

create table farmacia.cargoempleado(
idcargoempleado int auto_increment primary key,
cargoempleado varchar(30) not null
);

create table farmacia.tipoestado(
idtipoestado int auto_increment primary key,
tipoestado varchar(30) not null
);

create table farmacia.empleado(
idempleado int auto_increment primary key,
idtipoestado int,
idcargoempleado int,
dni char(8) not null,
nombres varchar(200) not null,
direccion varchar(120) not null,
telefono char(9) not null,
foreign key (idtipoestado) references farmacia.tipoestado(idtipoestado) on delete cascade,
foreign key (idcargoempleado) references farmacia.cargoempleado(idcargoempleado) on delete cascade
);

create table farmacia.tipodocumento(
idtipodocumento int auto_increment primary key,
tipodocumento varchar(30) not null
);

create table farmacia.tipocliente(
idtipocliente int auto_increment primary key,
tipocliente varchar(30) not null
);

create table farmacia.cliente(
idcliente int auto_increment primary key,
idtipocliente int,
nombres varchar(180) not null,
direccion varchar(180) not null,
telefono char(9) not null,
correo varchar(120) not null,
idtipodocumento int,
nrodocumento varchar(25),
foreign key (idtipocliente) references farmacia.tipocliente(idtipocliente) on delete cascade,
foreign key (idtipodocumento) references farmacia.tipodocumento(idtipodocumento) on delete cascade
);

create table farmacia.procentajedescuento(
idporcentajedescuento int auto_increment primary key,
porcentajedescuento int
);

create table farmacia.producto(
idproducto int auto_increment primary key,
nomprod varchar(35) not null,
fechahoravenc date not null,
stock int not null, 
presentacion varchar(60) not null,
concentracion varchar(120) not null,
formafarmaceutica varchar(120) not null,
registrosanitario varchar(60) not null,
idporcentajedescuento int,
precionuit int not null,
foreign key (idporcentajedescuento) references farmacia.procentajedescuento(idporcentajedescuento) on delete cascade
);

create table farmacia.tipopago(
idtipopago int auto_increment primary key,
tipopago int not null
);

create table farmacia.tipocomprobante(
idtipocomprobante int auto_increment primary key,
tipocomprobante varchar(100)
);

create table farmacia.comprobante(
idcomprobante int auto_increment primary key,
fechapago date not null,
nropedido char(3) not null,
idtipopago int,
idtipocomprobante int,
montototal int not null,
idcliente int,
foreign key (idtipopago) references farmacia.tipopago(idtipopago) on delete cascade,
foreign key (idtipocomprobante) references farmacia.tipocomprobante(idtipocomprobante) on delete cascade,
foreign key (idcliente) references farmacia.cliente(idcliente) on delete cascade
);

create table farmacia.pedido(
nropedido int auto_increment primary key,
fechapedido date not null,
montototal int not null,
idcliente int,
idempleado int,
foreign key (idcliente) references farmacia.cliente(idcliente) on delete cascade,
foreign key (idempleado) references farmacia.empleado(idempleado) on delete cascade
);

create table farmacia.detallepedido(
iddetallepedido int auto_increment primary key,
nropedido int,
idproducto int,
foreign key (nropedido) references farmacia.pedido(nropedido) on delete cascade,
foreign key (idproducto) references farmacia.producto(idproducto) on delete cascade
);

create table farmacia.imapro(
idimagen int auto_increment primary key,
nombre varchar(160),
imgen longblob,
idproducto int,
foreign key (idproducto) references farmacia.producto(idproducto) on delete cascade
);


create table farmacia.registro(
idregistro int auto_increment primary key,
Nombre varchar(180) not null,
Email varchar(120) not null,
Contraseña varchar(120) not null
);

create table farmacia.doctor(
iddoctor int auto_increment primary key,
Nombre varchar (180) not null,
Especialidad varchar(120) not null,
ncolegiado char(9) not null,
Cargo varchar (60) not null
);

create table farmacia.usario(
idusuario int primary key auto_increment,
email varchar(120) not null,
pass varchar(240) not null
);





