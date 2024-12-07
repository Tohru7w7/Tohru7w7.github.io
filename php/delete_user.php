<?php
include "./conexion.php";
$id=$_POST['id'];


echo "id: ".$id."<br>";


$con="Delete from users where id=$id";
$conexion->query($con) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../users.php?status=1");
?>