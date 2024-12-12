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
insert into users values (0,'Juan','juan@mail.com','1234',1);
insert into users values (0,'Bryan Palma','palma@mail.com','1234567',0);
select * from users where email='joselin@mail.com'and password ='1234567';
select * from users order by id

create table proveedores(
id INTEGER not null auto_increment,
nombre VARCHAR(30),
telefono varchar(20),
producto int,
cantidad numeric,
pago INT,
fecha_pedido DATE,
primary key(id)
)
drop table productos
select * from proveedores
insert into proveedores values(0,'Juan Duran','636-123-4567',1,40,3000,'2024/2/27')
update proveedores set nombre='fuhjf',telefono='5723572',producto=1,cantidad=400,pago=424,fecha_pedido='2024/12/12' where id=1

create table productos(
id INTEGER not null auto_increment,
name varchar(30),
price double,
img varchar(30),
idCategoria Integer,
des varchar(200),
primary key(id)
)

insert into productos values (0,'Fijador','130.60','fijador.jpg',2,
'Este spray fijador 2 en 1 te ayudará a matificar o sellar el maquillaje y además, 
prolonga su duración. Aplica al final de tu maquillaje o en tu rostro limpio para matificar ¡y olvídate del brillo! ');
insert into productos values (0,'Delineador','109.99','delineador.jpg',3,
'La forma más fácil y rápida de crear el look Cat Eye perfecto. Este look es muy moderno y muy favorecedor 
para la mayoría de las formas de ojos. Es súper práctico y resalta tus ojos al instante.');
insert into productos values (0,'Lipstic','190.10','lipstic.jpg',4,
'¡Despierta tus sentidos con nuestro labial líquido VELVET! Obtén labios irresistibles con un color intenso 
y una textura suave como la seda. ');
insert into productos values (0,'Rimel','180.60','mascara.jpg',3,
'Una máscara para pestañas es un básico indispensable en cualquier rutina. Esta increíble máscara te ayudará a 
enmarcar tus ojos para conseguir una mirada intensa y hermosa. ');

select * from productos

CREATE TABLE proveedores_log (
    log_id INTEGER NOT NULL AUTO_INCREMENT,
    proveedor_id INTEGER,
    nombre VARCHAR(30),
    telefono VARCHAR(20),
    producto INT,
    cantidad NUMERIC,
    pago INT,
    fecha_pedido DATE,
    log_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (log_id)
);


CREATE TRIGGER after_proveedores_insert
AFTER INSERT ON proveedores
FOR EACH ROW
BEGIN
    INSERT INTO proveedores_log (proveedor_id, nombre, telefono, producto, cantidad, pago, fecha_pedido)
    VALUES (NEW.id, NEW.nombre, NEW.telefono, NEW.producto, NEW.cantidad, NEW.pago, NEW.fecha_pedido);
END;


INSERT INTO proveedores (id, nombre, telefono, producto, cantidad, pago, fecha_pedido)
VALUES (0, 'Carlos Lopez', '123-456-7890', 2, 100, 5000, '2024-03-01');

SELECT * FROM proveedores_log;

CREATE TABLE stock (
    id INTEGER NOT NULL AUTO_INCREMENT,
    producto_id INT,
    producto_nombre VARCHAR(30),
    stock_actual INT,
    last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);



CREATE PROCEDURE update_stock (
    IN producto_id INT,
    IN producto_nombre VARCHAR(30),
    IN cantidad_comprada INT
)
BEGIN
    DECLARE existing_stock INT;

    -- Check if the product exists in the stock table
    SELECT stock_actual INTO existing_stock
    FROM stock
    WHERE producto_id = producto_id;

    IF existing_stock IS NOT NULL THEN
        -- Update the existing stock
        UPDATE stock
        SET stock_actual = stock_actual + cantidad_comprada,
            last_updated = CURRENT_TIMESTAMP
        WHERE producto_id = producto_id;
    ELSE
        -- Insert a new record into the stock table
        INSERT INTO stock (producto_id, producto_nombre, stock_actual)
        VALUES (producto_id, producto_nombre, cantidad_comprada);
    END IF;
END;


CREATE TRIGGER after_proveedores_insert_update_stock
AFTER INSERT ON proveedores
FOR EACH ROW
BEGIN
    -- Call the stored procedure to update stock
    CALL update_stock(NEW.producto, NEW.nombre, NEW.cantidad);
END;

INSERT INTO proveedores (id, nombre, telefono, producto, cantidad, pago, fecha_pedido)
VALUES (0, 'Ana Perez', '555-678-9101', 1, 50, 2500, '2024-03-10');

SELECT * FROM stock;






 