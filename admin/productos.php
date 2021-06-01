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
                <h1>Nuevo Producto</h1>
                <form action="insertar.php" method="POST" enctype="multipart/form-data">
                        <input type="text" placeholder="Nombre" name="nombre" class="form-control mb-3" required="">
                   
                   
                        <input type="text" placeholder="Modelo" name="modelo" class="form-control mb-3"  required="">
                   
                
                        <input type="number" placeholder="Precio"  class="form-control mb-3" name="precio" required="">
                   
                    
                        <input type="number" placeholder="Stock" class="form-control mb-3"  name="stock" required="">
                   
                    
                        Categoria:
                        <select class="form-control mb-3"  name="categoria" id="">
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
                        <select class="form-control mb-3"  name="talla" id="">
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
                            <option value="11">UNITALLA</option>
                        </select>
                    
                   
                        <label for="">imagen</label>
                        <input class="form-control mb-3"     type='file' name='imagen' required="">
                    

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
                            <th>Stock</th>
                            <th>Categoria</th>
                            <th>Talla</th>
                            <th>Imagen</th>
                            
                       

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require_once("../modelo/config.php");
                        $query = mysqli_query($conexion, "SELECT * FROM producto, categorias,tallas
                                WHERE producto.id_categoria = categorias.id_categoria AND  producto.id_tallas = tallas.id_tallas
                                  ");
                        $resultado = mysqli_num_rows($query);
                        if ($resultado > 0) {
                            while ($data = mysqli_fetch_array($query)) {

                        ?>

                                <tr>
                                     <td><?php echo $data['id_producto'] ?></td>
                                    <td><?php echo $data['nombre'] ?></td>
                                    <td><?php echo $data['modelo'] ?></td>
                                    <td><?php echo $data['precio'] ?></td>
                                    <td><?php echo $data['cantidad_existente'] ?></td>
                                    <td><?php echo $data['nombre_cat'] ?></td>
                                    <td><?php echo $data['tipo_talla'] ?></td>

                                    <td>
                                        <?php
                                        echo "<img width='100' height='100' src='../img_productos/" . $data['imagen'] . "'>"
                                        ?>
                                    </td>
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