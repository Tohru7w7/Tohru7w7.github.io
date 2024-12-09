<?php
include "./php/conexion.php";
$sql="select * from proveedores order by id";
$res=$conexion->query($sql) or die($conexion->error);
?>
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
        <h1 class="h4">Proveedores</h1>
        <div>
          <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal1Add">Agregar</button>
        </div>
      </div>
      <!--end title section-->
      <section class="mt-4 p-4">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">TELEFONO</th>
              <th scope="col">PRODUCTO</th>
              <th scope="col">CANTIDAD</th>
              <th scope="col">PAGO</th>
              <th scope="col">FECHA</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
            while($fila=mysqli_fetch_array($res)){
            ?>
            <tr>
              <td><?php echo $fila['id'] ?></td>
              <td><?php echo $fila['nombre'] ?></td>
              <td><?php echo $fila['telefono'] ?></td>
              <td><?php echo $fila['producto'] ?></td>
              <td><?php echo $fila['cantidad'] ?></td>
              <td><?php echo $fila['pago'] ?></td>
              <td><?php echo $fila['fecha_pedido'] ?></td>
              <td class="text-end">
              <form action="./php/delete_provee.php" method="post" style="display:inline">
                <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                  <button trpe="submit" class="btn btn-outline-danger btn-sm" 
                  onclick="return confirm('Estas seguro de borrarlo?')">
                  <i class="bi bi-trash"></i>
                </button>
              </form>
              <button class="btn btn-outline-warning btn-sm mx-2 btnEdit" 
                data-name="<?php echo $fila['nombre']; ?>"
                data-id="<?php echo $fila['id'] ?>"
                data-phone="<?php echo $fila['telefono'] ?>"
                data-prod="<?php echo $fila['producto'] ?>"
                data-cant="<?php echo $fila['cantidad'] ?>"
                data-pago="<?php echo $fila['pago'] ?>"
                data-fecha="<?php echo $fila['fecha_pedido'] ?>"
                data-bs-toggle="modal" data-bs-target="#modalEdit">
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
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Proveedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/provee_add.php" class="needs-validation" novalidate id="form" method="post">
          <div class="modal-body">
          <input type="hidden"  id="txtIdEdit" name="txtId">
            <div class="row">
              <div class="col-15 mb-2">
                <label for="">Nombre:</label>
                <input name="txtName" type="text" class="form-control" placeholder="Insertar el nombre">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-15 mb-2">
                <label for="">Telefono:</label>
                <input name="txtTel" type="tel" class="form-control" placeholder="Insertar el telefono">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="col-15 mb-2">
                <label for="">Producto:</label>
                <input name="txtProduct" type="number" class="form-control" placeholder="Insertar el id del producto">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="row">
                <div class="col-15 mb-2">
                  <label for="">Cantidad de productos:</label>
                  <input name="txtCantProd" required min="1" required type="number" class="form-control" placeholder="Insertar la cantidad">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
                <div class="col-15 mb-2">
                  <label for="">Cuanto debe pagarse:</label>
                  <input name="txtHM" required min="1" required type="number" class="form-control" placeholder="Confirmar contraseña">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-15 mb-2">
                  <label for="">Fecha del pedido:</label>
                  <input name="txtDate" type="date" class="form-control" placeholder="Insertar la fecha">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark" id="btnSave">Save</button>
              </div>
            </div>
            
            
            
          
        </form>
      </div>
    </div>
  </div>
  <!-- Modal Edit -->
  <div class="modal fade modal-lg" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Proveedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="./php/provee_add.php" class="needs-validation" novalidate id="form" method="post">
          <div class="modal-body">
          <input type="hidden"  id="txtIdEdit" name="txtId">
            <div class="row">
              <div class="col-15 mb-2">
                <label for="">Nombre:</label>
                <input name="txtNameEdit" type="text" class="form-control" placeholder="Insertar el nombre">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="row">
              <div class="col-15 mb-2">
                <label for="">Telefono:</label>
                <input name="txtTelEdit" type="tel" class="form-control" placeholder="Insertar el telefono">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
            </div>
            <div class="col-15 mb-2">
                <label for="">Producto:</label>
                <input name="txtProductEdit" type="number" class="form-control" placeholder="Insertar el id del producto">
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Datos invalidos</div>
              </div>
              <div class="row">
                <div class="col-15 mb-2">
                  <label for="">Cantidad de productos:</label>
                  <input name="txtCantProdEdit" required min="1" required type="number" class="form-control" placeholder="Insertar la cantidad">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
                <div class="col-15 mb-2">
                  <label for="">Cuanto debe pagarse:</label>
                  <input name="txtHMEdit" required min="1" required type="number" class="form-control" placeholder="Confirmar contraseña">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-15 mb-2">
                  <label for="">Fecha del pedido:</label>
                  <input name="txtDateEdit" type="date" class="form-control" placeholder="Insertar la fecha">
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Datos invalidos</div>
                </div>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark" id="btnSave">Save</button>
              </div>
            </div>
            
            
            
          
        </form>
      </div>
    </div>
  </div>

  <?php
    if(isset($_GET['status'])){
      if($_GET['status']==1){
        ?>
        <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Datos Guardados"
      });
        </script>
        <?php
      }
    }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="./js/users.js"></script>
</body>
</body>

</html>