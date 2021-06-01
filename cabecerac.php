<?php

session_start();

if (isset($_SESSION['username'])) {
}

?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Csay </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stylesnav.css">
        <link rel="stylesheet" href="css/stylescategorias.css?v=<?php echo time(); ?>">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
        <header>
            <a class="logo" href="index.php"><img src="img/Csay.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cabecerac.php"> Productos </a></li>
                    <li><a href="pedidos.php"> Mis Pedidos </a></li>
                    <li><a href="carrito.php"> Carrito </a></li>
                    <li><a href="notfound.php">Soporte</a></li>
                    <!--li><a href="notfound.php">Mis Pedidos</a></li-->
                </ul>
            </nav>
            <h2> <?php echo "Hola, ". $_SESSION['username']; ?> </h2>
            <a class="cta" href="login.php"> Perfil  </a>
            <a class="cta" href="logout.php"> Cerrar sesión  </a>
            <p class="menu cta">Menu</p>
        </header>
        
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Inicio</a>
                <a href="#">Categorias</a>
                <a href="#">Promociones</a>
            </div>
        </div>
        <script type="text/javascript" src="js/mobile.js"></script>

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
                <a href="pantalones.php">
                    <img src="img/pantalones.png" alt="" width="100" height="100">
                    <p>Pantalones</p>
                </a>
            </div>

            <div class="widgets">
                <a href="sudaderas.php">
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
                <a href="zapatos.php">
                    <img src="img/shoe.png" alt="" width="100" height="100">
                    <p>Zapatos</p>
                </a>
            </div>
            <div class="widgets">
                <a href="relojes.php">
                    <img src="img/reloj.png" alt="" width="100" height="100">
                    <p>Relojes</p>
                </a>
            </div>

            <div class="widgets">
                <a href="gafas.php">
                    <img src="img/gafas.png" alt="" width="100" height="100">
                    <p>Gafas</p>
                </a>
            </div>

            <div class="widgets">
                <a href="cinturones.php">
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