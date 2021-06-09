<?php
session_start();
if (!isset($_SESSION['carrito'])) {
  header('location: ./index.php');
}
$arreglo = $_SESSION['carrito'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Orden </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://kit.fontawesome.com/b965409e0d.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/owl.theme.default.min.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/stylesnav.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/stylescategorias.css?v=<?php echo time(); ?>">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/stylestarjeta.css?v=<?php echo time(); ?>">

</head>

<body>

  <div class="site-wrap">
    <?php include("cabeceracliente.php"); ?>

    <div class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles de Compra</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">País <span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">México</option>

                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>



              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Dirección <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Av. ">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Número de Teléfono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="(+52)">
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6">


            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu Orden</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Producto</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php
                      $total = 0;
                      for ($i = 0; $i < count($arreglo); $i++) {
                        $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);


                      ?>
                        <tr>
                          <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                          <td>$<?php echo number_format($arreglo[$i]['Precio'], 2, '.', ''); ?></td>
                        </tr>
                      <?php
                      }

                      ?>
                      <tr>
                        <td>Total de Orden</td>
                        <td> $<?php echo number_format($total, 2, '.', ''); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
          </div>
              <div class="contenedorTarjeta">

                <!-- Tarjeta -->
                <div class="tarjeta" id="tarjeta">
                  <div class="delantera">
                    <div class="logo-marca" id="logo-marca">

                    </div>
                    <img src="img/chip-tarjeta.png" class="chip" alt="">
                    <div class="datos">
                      <div class="grupo" id="numero">
                        <p class="label">Número Tarjeta</p>
                        <p class="numero">#### #### #### ####</p>
                      </div>
                      <div class="flexbox">
                        <div class="grupo" id="nombre">
                          <p class="label">Nombre Tarjeta</p>
                          <p class="nombre">Nombre Apellido</p>
                        </div>

                        <div class="grupo" id="expiracion">
                          <p class="label">Expiracion</p>
                          <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="trasera">
                    <div class="barra-magnetica"></div>
                    <div class="datos">
                      <div class="grupo" id="firma">
                        <p class="label">Firma</p>
                        <div class="firma">
                          <p></p>
                        </div>
                      </div>
                      <div class="grupo" id="ccv">
                        <p class="label">CCV</p>
                        <p class="ccv"></p>
                      </div>
                    </div>
                    <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
                  </div>
                </div>

                <!-- Contenedor Boton Abrir Formulario -->
                <div class="contenedor-btn">
                  <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>

                <!-- Formulario -->
                <form action="thankyou.php" id="formulario-tarjeta" class="formulario-tarjeta">
                  <div class="grupo">
                    <label for="inputNumero">Número Tarjeta</label>
                    <input type="text" id="inputNumero" maxlength="19" autocomplete="off" required>
                  </div>
                  <div class="grupo">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" id="inputNombre" maxlength="19" autocomplete="off" required>
                  </div>
                  <div class="flexbox">
                    <div class="grupo expira">
                      <label for="selectMes">Expiracion</label>
                      <div class="flexbox">
                        <div class="grupo-select">
                          <select name="mes" id="selectMes" required>
                            <option disabled selected>Mes</option>
                          </select>
                          <i class="fas fa-angle-down"></i>
                        </div>
                        <div class="grupo-select">
                          <select name="year" id="selectYear" required>
                            <option disabled selected>Año</option>
                          </select>
                          <i class="fas fa-angle-down"></i>
                        </div>
                      </div>
                    </div>

                    <div class="grupo ccv">
                      <label for="inputCCV">CCV</label>
                      <input type="text" id="inputCCV" maxlength="3" required>
                    </div>
                  </div>

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg py-3 btn-block">Pagar</button>
                 
                </div>
                </form>
                
              </div>


              </div>

            


        </div>
        <!-- </form> -->
      </div>
    </div>

    <?php include("footer.html"); ?>
  </div>
  <script src="js/mainTarjeta.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>