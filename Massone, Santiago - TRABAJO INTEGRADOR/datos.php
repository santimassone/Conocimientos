<?php

$fecha = $_POST['fecha'];
$nombres = $_POST['nombres'];
$impuesto = $_POST['provincia'];

$fila1_codigo = $_POST['codigo1'];
$fila1_descripcion = $_POST['descripcion1'];
$fila1_cantidad = $_POST['cantidad1'];
$fila1_precio = $_POST['precio1'];

$fila2_codigo = $_POST['codigo2'];
$fila2_descripcion = $_POST['descripcion2'];
$fila2_cantidad = $_POST['cantidad2'];
$fila2_precio = $_POST['precio2'];

$precio_total1 = $fila1_precio * $fila1_cantidad;
$precio_total2 = $fila2_precio * $fila2_cantidad;

$precio_neto = $precio_total1 + $precio_total2;

if($impuesto == 10){
    $impuesto_total = $precio_neto * 10 / 100;
}else{
    $impuesto_total = $precio_neto * 20 / 100;
}

$total_final = $impuesto_total  + $precio_neto;

?>