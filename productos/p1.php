<?php session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
}else{
  header("Location: ./login.php");
}
include "../php/conexion.php";

$sql="select * from productos where id=".$_GET['id'];
$res=$conexion->query($sql) or die($conexion->error);
$fila=mysqli_fetch_row($res);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
  <div class="d-flex">
    <!--sidebbar-->
    <?php
      include "../layouts/aside.php"
    ?>
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
      <?php
      include "../layouts/header.php"
    ?>
      <!--end header-->
      <!--title section-->
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Producto</h1>
        <div>
        <a href="../dietas.php" class="btn btn-dark">Volver</a>
        </div>
      </div>
      <!--end title section-->
      <section class="p-6 container">
        <div class="row">
            <div class="col-5 mt-2 p-2">
                 <img src="../img/<?php echo $fila[3]; ?>" height="600px" class="card-img-top" alt="...">
               
            </div>
            <div class="col-7">
                    <h1 class="card-title p-4"><?php echo $fila[1]; ?></h1>
                      <p class="card-text p-5"><?php echo $fila[5]; ?></p>
                      <h3 class="card-title p-5">$<?php echo $fila[2]; ?></h3>
                      
            </div>

        </div>
       
        
      </section>
      

    </main>
  </div>


  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./js/users.js"></script>
</body>
</body>

</html>
