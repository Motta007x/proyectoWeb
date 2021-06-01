<!DOCTYPE html>
<html lang="es">

<head>
    <title>Gafas</title>
    <link rel="stylesheet" href="css/stylescategorias.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/stylesproductos.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
</head>
<?php
include_once("cabecera.html");
?>

<body class="body-categorias">

    <div id="bannergafas">
        <div class="contenido-bannercat">
            <h2>Destinadas a Ocupar su Lugar D&iacutea tras D&iacutea</h2>
        </div>
    </div>
    <div class="texto">
        <h2>Un Supremo Toque de Elegancia Enigm&aacutetica</h2>
    </div>
    <section class="container">
        <div class="display-productos">
            <?php
            include("modelo/config.php");
            $query = "SELECT * FROM producto WHERE id_categoria= 7";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
            ?>
              <div class="card">
              <div class="card__imag" >
              <?php
                    echo "<img  src='img_productos/" . $row['imagen'] . "' >"
                    ?>
                </div>
                <div class="card__data">
                    <h1 class="card__title"> <?php echo ($row['nombre']);?></h1>
                    <span class="card__preci">$<?php echo ($row['precio']);?></span>
                    <p class="card__description">Modelo: <?php echo ($row['modelo']);?></p>
                   
                    <a href="#" class="card__button">Comprar ahora</a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>

</body>

<?php
include_once("footer.html");
?>

</html>