<?php
include "./conexion.php";
$name = $_POST['txtName'];
$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];
$pass2 = $_POST['txtPass2'];

echo "Nombre: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Password: ".$pass."<br>";
echo "Password2: ".$pass2."<br>";

//$consulta="insert into users values (0,'$name','$email','$level')";
//echo ($consulta)
//if(isset($_POST[]))
$con="insert into users values (0,'$name','$email','$pass',0)";
$conexion->query($con) or die($conexion->error);
//echo "dato actualizado correctamente";
header("Location: ../users.php?status=1");
?>