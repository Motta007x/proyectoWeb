<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/stylesadmin.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Producto </title>
</head>
<body>

    <?php
    include_once("../cabeceradmin.html");
    ?>
    <div class="container mt-5 agregar" >
        <div class="row">
            <div class="col-md-3">
                <h1>Nueva Promocion</h1>
                <form action="nuevapromo.php" method="POST" enctype="multipart/form-data">
                        <input type="text" placeholder="Modelo" name="modelo" class="form-control mb-3" required="">

                        <input type="number" placeholder="Precio"  class="form-control mb-3" name="precio" required="">

                    <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                        <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Modelo</th>
                            <th>Precio</th>
                           
                            <th>Categoria</th>
                        
                            
                       

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require_once("../modelo/config.php");
                        $query = mysqli_query($conexion, "SELECT * FROM promociones, productos, categorias,tallas
                                WHERE producto.id_categoria = categorias.id_categoria AND  producto.id_tallas = tallas.id_tallas and producto.modelo=
                                  promociones.modelo");
                        $resultado = mysqli_num_rows($query);
                        if ($resultado > 0) {
                            while ($data = mysqli_fetch_array($query)) {

                        ?>

                                <tr>
                                     <td><?php echo $data['id_producto'] ?></td>
                                    <td><?php echo $data['nombre'] ?></td>
                                    <td><?php echo $data['modelo'] ?></td>
                                    <td><?php echo $data['precio'] ?></td>
                                
                                    <td><?php echo $data['nombre_cat'] ?></td>
                                 

                                    <th><a href="actualizar.php?id=<?php echo $data['id_producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $data['id_producto'] ?>" class="btn btn-danger">Eliminar</a></th> 


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