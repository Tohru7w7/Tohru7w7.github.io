<?php session_start();

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
    <?php
      include "./layouts/aside-user.php"
    ?>
    <!--end sidebbar-->

    <main class="flex-grow-1">
      <!--hedear-->
      <?php
      include "./layouts/header-user.php"
    ?>
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