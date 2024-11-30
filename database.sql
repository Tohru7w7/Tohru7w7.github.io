CREATE DATABASE mramor;

USE mramor;

-- Tabla users (Usuarios)
CREATE TABLE users (
    id INTEGER not null auto_increment,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(255),
    level TINYINT,
    primary key (id)
);

insert into users values (0,'Joselin Cera','joselin@mail.com','1234567',1);
insert into users values (0,'Bryan Palma','palma@mail.com','1234567',0);
select * from users where email='joselin@mail.com'and password ='1234567';
select * from users order by id

create table proveedores(
id INTEGER not null auto_increment,
nombre VARCHAR(30),
telefono varchar(20),
producto varchar(30),
cantidad numeric,
pago INT,
fecha_pedido DATE,
primary key(id)
)
drop table productos
select * from proveedores
insert into proveedores values(0,'Juan Duran','636-123-4567','SERUM','40',3000,'2024/2/27')

create table productos(
id INTEGER not null auto_increment,
name varchar(30),
price double,
img varchar(30),
idCategoria Integer,
primary key(id)
)
select * from productos

insert into productos values (0,'Serum',250.00,'img5.jpg',1)
