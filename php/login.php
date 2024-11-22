<?php session_start();
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
        echo "Correo: ".$fila[2].'<br>'; 
        echo "Nivel".$file[4].'<br>';
        $arr=[
         'id'=>$fila[0],
         'Nombre'=>$fila[1],
         'Email'=>$fila[2],
         'Level'=>$fila[4]
        ];
        $_SESSION['userdata']=$arr;
        if($fila[4] == 1){
         header("Location: ../dashboard.php");
        }else{
         header("Location: ../index.html");
        }
     }else{
        echo ("Datos no validos");
        header("Location: ../login.php?error=Datos no validos");
     }
?>