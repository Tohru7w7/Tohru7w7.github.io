<?php
    if(isset($_GET['error'])){
        $error =$_GET['error'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mramor</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./mediacurito/medialogin.css">
</head>
<body>
    <section>
        <div id="img">
            <img id="image1" src="./img/image1.png" alt="">
            
        </div class="section">

        <form action="./php/login.php" method="POST" >
            <div id="phone" action="" >
                <img id="icono" src="./img/icono3.png" alt="">
                <h1>Bienvenid@</h1>
                <h2 id="txtNC"  >Nombre</h2>
                <input id="user" name="txtuser" type="text" required>
                <h3 id="txtNC"  >Contraseña</h3>
                <input id="pass" name="txtpass" type="password" required><br>
                
                    <button id="btnLogin" type="submit" class="login" >Login</button>
                
                <div class="sign">
                     <a href="./sign.html">Registrate aquí</a>
               </div>
                
            </div>
        </form>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if(isset($error)){
    ?>
    <script>
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "Credenciales incorrectas!"
        });
    </script>
    <?php } ?>

</body>
</html>

    <!--<script src="./js/val.js" ></script>-->
   <!-- CREATE DATABASE mramor;

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

select * from users where email='joselin@mail.com'and password ='1234567';-->
<!--<script src="./js/users.js"></script>

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

insert into productos values (0,'Serum',250.00,'img5.jpg',1)-->
    