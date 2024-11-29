<?php
$name = $_POST['txtname'];
$price = $_POST['txtprice'];
$cat = $_POST['txtcat'];
$des = $_POST['txtdes'];
//$fecha = date('Y-m-d');
$con="insert into productos values (0,'$name',$price,'img5.jpg',$cat,'$des')";
echo $con;
?>