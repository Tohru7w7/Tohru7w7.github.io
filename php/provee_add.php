<?php
include "./conexion.php";
$name = $_POST['txtName'];
$tel = $_POST['txtTel'];
$prod = $_POST['txtProduct'];
$cant = $_POST['txtCantProd'];
$hm = $_POST['txtHM'];
$date = $_POST['txtDate'];

echo "Nombre: ".$name."<br>";
echo "Telefono: ".$tel."<br>";
echo "Productos: ".$prod."<br>";
echo "Cantidad de productos: ".$cant."<br>";
echo "Cuanto debe pagarse: ".$hm."<br>";
echo "Fecha: ".$date."<br>";

echo ($consulta);

$con="insert into proveedores values (0,'$name','$tel',$prod,$cant,$hm,'$date')";
$conexion->query($con) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../provee.php?status=1");

?>