<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "csayprueba";

$conexion = mysqli_connect($server, $user, $pass, $database);

if(!$conexion) {
    die("<script>alert('Conexion fallida')</script>");
}

?>