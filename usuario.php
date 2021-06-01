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
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a class="logo" href="index.php"><img src="img/Csay.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="cabecerac.php"> Productos </a></li>
                    <li><a href="pedidos.php"> Mis Pedidos </a></li>
                    <li><a href="ver_carrito.php"> Carrito </a></li>
                    <li><a href="notfound.php">Soporte</a></li>
                    <!--li><a href="notfound.php">Mis Pedidos</a></li-->
                </ul>
            </nav>
            <h2> <?php echo "Hola, ". $_SESSION['username']; ?> </h2>
            <a class="cta" href="login.php"> Perfil  </a>
            <a class="cta" href="logout.php"> Cerrar sesión  </a>
            <p class="menu cta">Menu</p>
        </header>
        <?php 
          include_once ("aside.html");
          include_once ("promos.php");
          include_once ("footer.html");
        ?>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Inicio</a>
                <a href="#">Categorias</a>
                <a href="#">Promociones</a>
            </div>
        </div>
        <script type="text/javascript" src="js/mobile.js"></script>
    </body>
</html>