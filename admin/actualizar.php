<?php
include_once("../cabeceradmin.html");
require_once("../modelo/config.php");

$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE id_producto='$id'";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Actualizar Producto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesadmin.css?v=<?php echo time(); ?>">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="actualiza">


            <form action="update.php" method="POST" enctype="multipart/form-data">


            <input type="hidden" placeholder="id_producto" name="id" class="form-control mb-3" value="<?php echo $row['id_producto']  ?> ">

                <input type="text" placeholder="Nombre" name="nombre" class="form-control mb-3" value="<?php echo $row['nombre']  ?> ">

                <input type="text" placeholder="Modelo" name="modelo" class="form-control mb-3" value="<?php echo $row['modelo']  ?>">

                <input type="number" placeholder="Precio" class="form-control mb-3" name="precio" value="<?php echo $row['precio']  ?>">

                <input type="number" placeholder="Stock" class="form-control mb-3" name="stock" value="<?php echo $row['cantidad_existente']  ?>">

                Categoria:
                <select class="form-control mb-3" name="categoria" value="<?php echo $row['id_categoria']  ?>">
                    <option value="1">Camisas</option>
                    <option value="2">Pantalones</option>
                    <option value="3">Sudaderas</option>
                    <option value="4">Tenis</option>
                    <option value="5">Zapatos</option>
                    <option value="6">Relojes</option>
                    <option value="7">Gafas</option>
                    <option value="8">Cinturones</option>
                </select>

                Talla:
                <select class="form-control mb-3" name="talla" value="<?php echo $row['id_tallas']  ?>">
                    <option value="1">S</option>
                    <option value="2">M</option>
                    <option value="3">L</option>
                    <option value="4">G</option>
                    <option value="5">XG</option>
                    <option value="6">25</option>
                    <option value="7">26</option>
                    <option value="8">27</option>
                    <option value="9">28</option>
                    <option value="10">29</option>
                    <option value=11">UNITALLA</option>
                </select>
                <label for="">imagen</label>
                <input class="form-control mb-3" type='file' name='imagen' required="" value="<?php echo $row['imagen']  ?>">

                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>

        </div>
    </div>
</body>

</html>
