<?php
include "./conexion.php";
$name = $_POST['txtname'];
$price = $_POST['txtprice'];
$cat = $_POST['txtcat'];
$des = $_POST['txtdes'];
//$fecha = date('Y-m-d');
$file_name =$_FILES['txtfile']['name'];
$temp = explode(".",$file_name);
$ext = end($temp);
$destino="../img/products/";
$new_name = date('Y_m_d_h_i_s').rand(1000,9999).".".$ext;
if(move_uploaded_file($_FILES['txtfile']['tmp_name'],$destino.$new_name)){
    echo "archivo subido correctamente\n";
    $con="insert into productos values (0,'$name',$price,'$new_name',$cat,'$des')";
    echo $con;
    $conexion->query($con) or die($conexion->error);
    echo"\n Registro insertado correctamente";
}else{
    echo "no se cargo el archivo";
}
die();

?>