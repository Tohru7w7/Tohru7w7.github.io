<?php session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
}else{
  header("Location: ./login.php");
}?>
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
      include "./layouts/aside.php"
    ?>
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
      <?php
      include "./layouts/header.php"
    ?>
      <!--end header-->
      <!--title section-->
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Productos en Stock</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal1Add">Agregar</button>
        </div>
      </div>
      <!--end title section-->
      <section class="p-4 container">
        <div class="row">
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="./img/setum.webp" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Snack</h5>
                      <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                      <a href="#" class="btn btn-dark">Go somewhere</a>
                      <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="./img/lipstic.webp" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pasta</h5>
                      <p class="card-text">Una pasta con crema, agregando espinacas y tomate para algo balanceado</p>
                      <a href="#" class="btn btn-dark">Go somewhere</a>
                      <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="./img/mascara.jpg" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Sopa de Dumplings</h5>
                      <p class="card-text">uejjfhjhjhjefhjhjeheffiuwhgvuiwehbuijngijgjitgjiggijgjigjgjirtgerhsnrnhjksenhjes</p>
                      <a href="#" class="btn btn-dark">Go somewhere</a>
                      <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="./img/aguamicelar.webp" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Snack</h5>
                      <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                      <a href="#" class="btn btn-dark">Go somewhere</a>
                      <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
                <div class="card" >
                    <img src="./img/img6.webp" height="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Snack</h5>
                      <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                      <a href="#" class="btn btn-dark">Go somewhere</a>
                      <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                    </div>
                  </div>
            </div>
            <div class="col-3 mt-2 p-2">
              <div class="card" >
                  <img src="./img/img4.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Snack</h5>
                    <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                    <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                  </div>
                </div>
          </div>
            <div class="col-3 mt-2 p-2">
              <div class="card" >
                  <img src="./img/img5.webp" height="300px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Snack</h5>
                    <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                    <a href="#" class="btn btn-dark">Go somewhere</a>
                    <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                  </div>
                </div>
          </div>
          <div class="col-3 mt-2 p-2">
            <div class="card" >
                <img src="./img/image2.webp" height="300px" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Snack</h5>
                  <p class="card-text">Un snack de yogurd natural, agregando frutas saludables para dar un extra al snack</p>
                  <a href="#" class="btn btn-dark">Go somewhere</a>
                  <button class="btn btn-outline-danger btn-sm ">
                  <i class="bi bi-trash"></i>
                </button>
                </div>
              </div>
        </div>
        </div>
        
      </section>

    </main>
  </div>
  <div class="modal fade modal-lg" id="modal1Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/product-add.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre del producto:</label>
                <input name="txtname" required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Precio:</label>
                <input name="txtprice" required type="decimal" required min=1 class="form-control" placeholder="Inserta el precio">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Imagen:</label>
                <input name="txtfile" required type="file" class="form-control" placeholder="Inserta la imagen">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 mb-2">
                <label for="">Categoria:</label>
                <input  name="txtcat" type="text" class="form-control" placeholder="Inserta el tipo de maquillaje">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="row">
              <div class="col-12 mb-2">
                <label for="">Descripción:</label>
                <input  name="txtdes" type="text" class="form-control" placeholder="Inserta el tipo de maquillaje">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" id="btnSave2">Save</button>
          </div>
        </from>

  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./js/users.js"></script>
</body>
</body>

</html>