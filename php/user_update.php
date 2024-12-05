<?php
include "./conexion.php";
$name=$_POST['txtName'];
$email=$_POST['txtEmail'];
$id=$_POST['txtId'];
$level=$_POST['txtLevel'];

$consulta="update users set name='$name',email='$email', level='$level' where id=$id";

$conexion->query($consulta) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../users.php?status=1");
?>