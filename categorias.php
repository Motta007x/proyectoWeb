<!DOCTYPE html>
<html lang="es">

<head>
    <title> Categorias </title>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
</head>
     <?php
     include_once("cabecera.html");
     ?>

<body class="body-categorias">

    <div id="bannercategorias">
        <div class="contenido-bannercat">
            <h2>Todo lo que necesitas al alcance </h2>
            <h2> de un click</h2>
        </div>
    </div>

    <section class="categorias">
        <div class="display-categorias">


            <div class="widgets">
                <a href="camisas.php">
                    <img src="img/camisa.png" width="100" height="100">
                    <p>Camisas</p>
                </a>
            </div>

            <div class="widgets">
                <a href="#">
                    <img src="img/pantalones.png" alt="" width="100" height="100">
                    <p>Pantalones</p>
                </a>
            </div>

            <div class="widgets">
                <a href="#">
                    <img src="img/sudadera.png" alt="" width="100" height="100">
                    <p>Sudaderas</p>
                </a>
            </div>
            <div class="widgets">
                <a href="tenis.php">
                    <img src="img/shoes.png" alt="" width="100" height="100">
                    <p>Tenis</p>
                </a>
            </div>
            <div class="widgets">
                <a href="#">
                    <img src="img/shoe.png" alt="" width="100" height="100">
                    <p>Zapatos</p>
                </a>
            </div>

            <div class="widgets">
                <a href="#">
                    <img src="img/reloj.png" alt="" width="100" height="100">
                    <p>Relojes</p>
                </a>
            </div>

            <div class="widgets">
                <a href="#">
                    <img src="img/gafas.png" alt="" width="100" height="100">
                    <p>Gafas</p>
                </a>
            </div>

            <div class="widgets">
                <a href="#">
                    <img src="img/cinturon.png" alt="" width="100" height="100">
                    <p>Cinturones</p>
                </a>
            </div>
        </div>
    </section>
    <section class="contenedor-slide">
    <div class="slider">
        <ul>
          <li> <img src="img/slide1.png" alt="" width="1000" height="400"></li>
          <li> <img src="img/slide2.jpg" alt="" width="1000" height="400"></li>
          <li> <img src="img/slide3.jpg" alt="" width="1000" height="400"></li>
          <li> <img src="img/slide4.jpg" alt="" width="1000" height="400"></li>
 
        </ul>
      </div>
      </section>
</body>
<?php
     include_once("footer.html");
     ?>

</html>