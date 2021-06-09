<?php

require_once("modelo/config.php");

session_start();

$sesion=$_SESSION['id_usuario'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/stylesadmin.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Direcciones </title>
</head>

<body>

    <?php
    include_once("cabeceracliente.php");
    ?>
    <div class="container mt-5 agregar">
        <div class="row">
            <div class="col-md-3">
                <h1>Nueva direccion</h1>
                <form action="insertar_direccion.php" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Calle" name="calle" class="form-control mb-3" required="">

                    <input type="number" placeholder="Numero de casa" class="form-control mb-3" name="precio" required="">

                    <input type="text" placeholder="Colonia" name="colonia" class="form-control mb-3" required="">

                    <input type="text" placeholder="Municipio" name="municipio" class="form-control mb-3" required="">

                    Estado:
                    <select class="form-control mb-3" name="promo" requiered>
                       
                        <option value="DIF">Distrito Federal</option>
                        <option value="AGS">Aguascalientes</option>
                        <option value="BCN">Baja California</option>
                        <option value="BCS">Baja California Sur</option>
                        <option value="CAM">Campeche</option>
                        <option value="CHP">Chiapas</option>
                        <option value="CHI">Chihuahua</option>
                        <option value="COA">Coahuila</option>
                        <option value="COL">Colima</option>
                        <option value="DUR">Durango</option>
                        <option value="GTO">Guanajuato</option>
                        <option value="GRO">Guerrero</option>
                        <option value="HGO">Hidalgo</option>
                        <option value="JAL">Jalisco</option>
                        <option value="MEX">M&eacute;xico</option>
                        <option value="MIC">Michoac&aacute;n</option>
                        <option value="MOR">Morelos</option>
                        <option value="NAY">Nayarit</option>
                        <option value="NLE">Nuevo Le&oacute;n</option>
                        <option value="OAX">Oaxaca</option>
                        <option value="PUE">Puebla</option>
                        <option value="QRO">Quer&eacute;taro</option>
                        <option value="ROO">Quintana Roo</option>
                        <option value="SLP">San Luis Potos&iacute;</option>
                        <option value="SIN">Sinaloa</option>
                        <option value="SON">Sonora</option>
                        <option value="TAB">Tabasco</option>
                        <option value="TAM">Tamaulipas</option>
                        <option value="TLX">Tlaxcala</option>
                        <option value="VER">Veracruz</option>
                        <option value="YUC">Yucat&aacute;n</option>
                        <option value="ZAC">Zacatecas</option>

                    </select>

                    <input type="number" placeholder="Codigo postal" class="form-control mb-3" name="codigo_postal" required="">
                    <input type="hidden" placeholder="id_usuario" name="id" class="form-control mb-3" value="<?php $sesion  ?> ">
                    <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Calle</th>
                            <th>Numero de casa</th>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Estado</th>
                            <th>Codigo postal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $query = mysqli_query($conexion, "SELECT * FROM direccion, usuario
                                WHERE direccion.id_usuario = usuario.id_usuario
                                  ");
                        $resultado = mysqli_num_rows($query);
                        if ($resultado > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                            $id_usuario = $data['id_usuario'];
                        ?>

                                <tr>
                                    <td><?php echo $data['id_direccion'] ?></td>
                                    <td><?php echo $data['calle'] ?></td>
                                    <td><?php echo $data['num_casa'] ?></td>
                                    <td><?php echo $data['colonia'] ?></td>
                                    <td><?php echo $data['municipio'] ?></td>
                                    <td><?php echo $data['estado'] ?></td>
                                    <td><?php echo $data['codigo_postal'] ?></td>

                                    <th><a href="actualizar.php?id=<?php echo $data['id_direccion'] ?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $data['id_direccion'] ?>" class="btn btn-danger">Eliminar</a></th>


                                </tr>


                        <?php
                            }
                        }

                        ?>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer">

    </footer>
</body>

</html>