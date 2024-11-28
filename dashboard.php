<?php session_start();
if(isset($_SESSION['userdata'])){
  $user=$_SESSION['userdata'];
}else{
  header("Location: ./login.php");
}

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
</head>

<body>
  <div class="d-flex">
    <!--sidebbar-->
    <aside class="bg-dark text-white vh-100" style="width: 20%;">
      <h2 class="p-4 h4">
        <img width="50px" src="./img/nogordas.png" alt="" class="mx-1">
        Dietas
      </h2>
      <ul class="nav flex-column">
        <li class="nav-item h5 mx-2"><a href="./dashboard.php" class="nav-link text-white"><i class="bi bi-house px-2"></i>Home</a></li>
        <li class="nav-item h5 mx-2"><a href="./dietas.php" class="nav-link text-white"><i class="bi bi-heart-fill"></i>Products</a></li>
        <li class="nav-item h5 mx-2"><a href="./users.php" class="nav-link text-white"><i class="bi bi-people px-2"></i>User</a></li>
        <li class="nav-item h5 mx-2"><a href="./provee.php" class="nav-link text-white"><i class="bi bi-person-vcard"></i>Proveedores</a></li>
      </ul>
    </aside>
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
      <header>
        <nav class="px-4 py-4 navbar navbar-expand-lg bg-body-tertiary px-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">MrAmor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item mx-4">
                  <button type="button" class="btn btn-light position-relative">
                    <i class="bi bi-bell"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      20
                      <span class="visually-hidden">unread messages</span>
                    </span>
                  </button>
                </li>
                <li class="nav-item">
                  <img src="./img/profile.jpg" style="width: 40px;border-radius: 50%; border: 1px solid black;">
                </li>
                <li class="nav-item dropdown mx-4">
                  <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php
                    echo $user['Nombre'];
                    ?>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!--end hedear-->
      <!--row stats-->
      <div class="row mx-4 px-4 my-4">
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <h6><i class="bi bi-coin px-2"></i>Ingresos Mensuales</h6>
              <h6 class="h3 text-center">$35,000.00</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <h6><i class="bi bi-person px-2"></i>Total de Clientes</h6>
              <h6 class="h3 text-center">65</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <h6><i class="bi bi-flower3"></i>Total de Pedidos</h6>
              <h6 class="h3 text-center">70</h6>
            </div>

          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <div class="card-body">
              <h6><i class="bi bi-piggy-bank px-2"></i>Pago a Proveedores</h6>
              <h6 class="h3 text-center">$1,500.00</h6>
            </div>

          </div>
        </div>
      </div>
      <!--end row stats-->
      <!--charts-->
      <div class="row mx-4 px-4 my-4">
        <div class="col-6">
          <div class="card">
            <div class="card-header">Ingresos Mensuales</div>
            <div class="card-body">
              <canvas id="chartIngresos"></canvas>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-header">Productos más vendidos</div>
            <div class="card-body">
              <canvas id="chartCategorias"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!--end charts-->
    </main>
  </div>
  <div class="modal fade modal-lg" id="modal1Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" class="needs-validation" novalidate id="form">
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Nombre:</label>
                <input required type="text" class="form-control" placeholder="Inserta el nombre">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Apellido:</label>
                <input required type="text" class="form-control" placeholder="Inserta el apellido">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-4 mb-2">
                <label for="">Edad</label>
                <input required min="1" type="number" class="form-control" placeholder="Inserta la edad">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-4 mb-2">
                <label for="">Peso</label>
                <input required min="1" type="number" class="form-control" placeholder="Inserta el peso">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-4 mb-2">
                <label for="">Estatura</label>
                <input required min="1" type="number" class="form-control" placeholder="Inserta la estatura">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-15 mb-2">
                <label for="">Email:</label>
                <input required min="1" type="email" class="form-control" placeholder="Insertar el email">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 mb-2">
                <label for="">Password:</label>
                <input required type="password" class="form-control" placeholder="Insertar la contraseña">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="col-6 mb-2">
                <label for="">Confirmar Password:</label>
                <input required type="password" class="form-control" placeholder="Confirmar contraseña">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-dark" id="btnSave">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/index.js"></script>
</body>
</body>

</html>