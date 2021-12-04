<?php
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$fecha_cad = $_POST['fecha_cad'];
$marca = $_POST['marca'];
$fecha_ad = $_POST['fecha_ad'];
$cant = $_POST['cant'];



require_once ("../conexion/conexion.php");
$sql = "INSERT INTO medicamentos (nombre,codigo,fecha_cad,marca,fecha_ad,cant) VALUES('$nombre','$codigo','$fecha_cad','$marca','$fecha_ad','$cant')";

$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='medicamentos.php';
                }
 </script>";
?>