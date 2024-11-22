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
insert into users values (0,'Bryan Palma','´palma@mail.com','1234567',0);
select * from users where email='joselin@mail.com'and password ='1234567';