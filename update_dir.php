<?php
session_start();
$sesion=$_SESSION['id_usuario'];
require_once("modelo/config.php");
$id=$_POST['id'];
$casa = $_POST['num_casa'];

    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $municipio = $_POST['municipio'];
    $estado = $_POST['estado'];

    $postal = $_POST['codigo_postal'];
    
        $sql="UPDATE direccion SET  calle='$calle', num_casa='$casa', colonia='$colonia', municipio='$municipio', estado='$estado', codigo_postal=$postal id_usuario=$sesion WHERE direccion.id_direccion='$id' ";
        $query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: direcciones.php");
    }
    else{
        echo "Error";
    }
?>