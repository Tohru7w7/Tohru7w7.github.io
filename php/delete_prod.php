<?php
include "./conexion.php";
$id=$_POST['id'];


echo "id: ".$id."<br>";


$con="Delete from productos where id=$id";
$conexion->query($con) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../dietas.php?status=1");
?>