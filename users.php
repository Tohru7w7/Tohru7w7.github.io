<?php
include "./php/conexion.php";
$sql="select * from users order by id";
$res=$conexion->query($sql) or die($conexion->error);

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
    <aside class="bg-dark text-white vh-100" style="width: 20%;">
      <h2 class="p-4 h4">
        <img width="50px" src="./img/nogordas.png" alt="" class="mx-1">
        MrAmor
      </h2>
      <ul class="nav flex-column">
        <li class="nav-item h5 mx-2"><a href="./dashboard.html" class="nav-link text-white"><i
              class="bi bi-house px-2"></i>Home</a></li>
        <li class="nav-item h5 mx-2"><a href="./dietas.html" class="nav-link text-white"><i class="bi bi-heart-fill"></i></i>Products</a></li>
        <li class="nav-item h5 mx-2"><a href="./provee.html" class="nav-link text-white"><i
              class="bi bi-people px-2"></i>User</a></li>
        <li class="nav-item h5 mx-2"><a href="./provee.html" class="nav-link text-white"><i class="bi bi-person-vcard"></i>Proveedores</a></li>
      </ul>
    </aside>
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
      <header>
        <nav class="px-4 py-4 navbar navbar-expand-lg bg-body-tertiary px-4">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Dashboard</a>
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
                    Cinnamoroll
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
      <!--end header-->
      <!--title section-->
      <div class="mx-4 d-flex justify-content-between">
        <h1 class="h4">Usuarios</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal1Add">Agregar</button>
        </div>
      </div>
      <!--end title section-->
      <section class="mt-4 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th scope="col">nivel</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($fila=mysqli_fetch_array($res)){
            ?>
            <tr>
              <td><?php echo $fila['id'] ?></td>
              <td><?php echo $fila['name'] ?></td>
              <td><?php echo $fila['email'] ?></td>
              <td>***********</td>
              <td><?php if($fila['level']==0){
                echo "<span class='rounded bg-success text-white p-1'>Administrador</span>";
              }else{
                echo "<span class='rounded bg-dark text-white p-1'>Usuario</span>";
              } ?></td>
              <td class="text-end">
                <button class="btn btn-outline-danger btn-sm">
                  <i class="bi bi-trash"></i>
                </button>
                <button class="btn btn-outline-warning btn-sm mx-2">
                  <i class="bi bi-pen"></i>
                </button>
                <button class="btn btn-outline-dark btn-sm">
                  <i class="bi bi-arrow-right-square"></i>
                </button>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </section>
    </main>
  </div>
  <!-- Modal -->
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
              <div class="col-15 mb-2">
                <label for="">Nombre:</label>
                <input type="text" class="form-control" placeholder="Insertar el nombre">
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./js/users.js"></script>
</body>
</body>

</html>