<?php
include "./conexion.php";
$id=$_POST['txtIdEdit'];
$name=$_POST['txtNameEdit'];
$tel=$_POST['txtTelEdit'];
$prod=$_POST['txtProductEdit'];
$cant=$_POST['txtCantProdEdit'];
$pago=$_POST['txtHMEdit'];
$date=$_POST['txtDateEdit'];

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
//header("Location: ../provee.php?status=1");
?>