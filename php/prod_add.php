<?php
include "./conexion.php";
$name = $_POST['txtname'];
$price = $_POST['txtprice'];
$file = $_POST['txtfile'];
$cat = $_POST['txtcat'];
$des = $_POST['txtdes'];

echo "Nombre: ".$name."<br>";
echo "Precio: ".$price."<br>";
echo "Imagen: ".$file."<br>";
echo "Categoria: ".$cat."<br>";
echo "Descripcion: ".$des."<br>";

//$consulta="insert into users values (0,'$name','$email','$level')";
//echo ($consulta)
//if(isset($_POST[]))
$con="insert into productos values (0,'$name','$price','$file',$cat,'$des')";
$conexion->query($con) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../dietas.php?status=1");
?>