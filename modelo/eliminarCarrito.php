<?php
session_start();
$arreglo = $_SESSION['carrito'];
for ($i = 0; $i < count($arreglo);$i ++){
    if($arreglo[$i]['Id_producto'] != $_POST['id']){
$arregloNuevo[]= array(
'Id_producto' => $arreglo[$i]['Id_producto'],
'Nombre' => $arreglo[$i]['Nombre'],
'Precio' => $arreglo[$i]['Precio'],
'Imagen' => $arreglo[$i]['Imagen'],
'Cantidad' => $arreglo[$i]['Cantidad']

);
    }
}
if(isset($arregloNuevo)){
    
$_SESSION['carrito']=$arregloNuevo;
}
else{
    $arregloNuevo[]= array(
'Id_producto' => $arreglo[$i][0],
'Nombre' => $arreglo[$i][0],
'Precio' => $arreglo[$i][0],
'Imagen' => $arreglo[$i][0],
'Cantidad' => $arreglo[$i][0]

);
    
    
    //quiere edecir que el registro al finla es el unico que habia 
    unset($_SESSION['carrito']);
}
echo "Listo";
?>