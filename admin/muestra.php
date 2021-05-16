
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminproductos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/stylesnav.css?v=<?php echo time(); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Datos</h1>
    <center><table>
<tr>
<th>Nombre</th>
<th>Modelo</th>
<th>Precio</th>
<th>Stock</th>
<th>Categoria</th>
<th>Imagen</th>
</tr>


<?php
 require_once("../modelo/config.php");
 $query= mysqli_query($conexion,"SELECT * FROM producto");
 $resultado = mysqli_num_rows($query) ;
 if ($resultado>0){
     while($data = mysqli_fetch_array($query)){
        ?>
<tr>
  <td><?php echo $data['nombre']?></td>
  <td><?php echo $data['modelo']?></td>
  <td><?php echo $data['precio']?></td>
  <td><?php echo $data['cantidad_existente']?></td>
  <td><?php echo $data['id_categoria']?></td>
  
  <td> <img width="100px"src="data:image/jpg;base64, <?php echo base64_encode($data['imagen'])?>"></td>
  <td>  <button> <a href="consulta.php">Eliminar</a></button>   </td>
  <td>  <button> <a href="consulta.php">Editar</a></button>   </td>

 
</tr>


    <?php     
     }
 }
 
    
 
 
?>
</table></center>
</body>
</html>