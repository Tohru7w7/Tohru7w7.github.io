<?php
include "./conexion.php";
$id=$_POST['txtId'];
$name=$_POST['txtName'];
$tel=$_POST['txtTel'];
$prod=$_POST['txtProduct'];
$cant=$_POST['txtCantProd'];
$pago=$_POST['txtHM'];
$date=$_POST['txtDate'];

echo "Id: ".$id."<br>";
echo "Nombre: ".$name."<br>";
echo "Telefono: ".$tel."<br>";
echo "Productos: ".$prod."<br>";
echo "Cantidad de productos: ".$cant."<br>";
echo "Cuanto debe pagarse: ".$pago."<br>";
echo "Fecha: ".$date."<br>";

$consulta="update proveedores set 
nombre='$name', telefono='$tel', 
producto=$prod, cantidad=$cant, 
pago=$pago, fecha_pedido='$date' 
where id=$id";

$conexion->query($consulta) or die($conexion->error);
echo "dato actualizado correctamente";
header("Location: ../provee.php?status=1");
?>