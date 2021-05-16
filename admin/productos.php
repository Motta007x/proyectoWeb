<?php
require_once("../modelo/config.php");

if (empty($_POST['nombre']) || empty($_POST['modelo'])) {
    echo "Campos Vacios";
} else {
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $imagen = base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
    $categoria = $_POST['categoria'];

    $query = "INSERT INTO producto (nombre, modelo, precio, cantidad_existente, imagen, id_categoria) VALUES ('$nombre','$modelo',$precio, $stock, '$imagen', $categoria) ";
    $resultado = $conexion->query(($query));
    if ($resultado) {
        echo "Agregado correctamente";
    } else {
        echo "Error";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminproductos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/stylesnav.css?v=<?php echo time(); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <title> Producto </title>
</head>

<body>
        <div class="container">
            <form action="" method="POST" class="login-email" enctype="multipart/form-data">
                <p> Nuevo Producto </p>
                <div>
                    <div class="input-group">
                        <input type='file' name='imagen' required="">
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="input-group">
                        <input type="text" placeholder="Modelo" name="modelo">
                    </div>
                    <div class="input-group">
                        <input type="number" placeholder="Precio" name="precio">
                    </div>
                    <div class="input-group">
                        <input type="number" placeholder="Stock" name="stock">
                    </div>
                    <div class="input-group">
                        Categoria:
                        <select name="categoria" id="">
                            <option value="1">Camisas</option>
                            <option value="2">Pantalones</option>
                            <option value="3">Sudaderas</option>
                            <option value="4">Tenis</option>
                            <option value="5">Zapatos</option>
                            <option value="6">Relojes</option>
                            <option value="7">Gafas</option>
                            <option value="8">Cinturones</option>
                        </select>
                    </div>
                </div>

                <input type="submit" name="Guardar" value="Guardar">
            </form>
        </div>
</body>
<?php
include_once("muestra.php");
?>

</html>