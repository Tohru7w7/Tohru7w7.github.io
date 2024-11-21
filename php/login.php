<?php
     include  "./conexion.php";
     $user = $_POST['txtuser'];
     $pass = $_POST['txtpass'];
     echo "Bienvenudo $user Password: $pass";
     echo '<br>';
     $query="select * from users where name='$user' and password='$pass';";
     $res = $conexion->query($query);
     if(mysqli_num_rows($res) > 0){
        echo ("Login Correcto");
        echo '<br>';
        $fila = mysqli_fetch_row($res);
        echo "ID: ".$fila[0].'<br>'; 
        echo "Nombre: ".$fila[1].'<br>'; 
        echo "Correo: ".$fila[2]; 
     }else{
        echo ("Datos no validos");
     }
?>