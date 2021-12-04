<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$fecha_cad = $_POST['fecha_cad'];
$fecha_ad = $_POST['fecha_ad'];
$marca = $_POST['marca'];

$cant = $_POST['cant'];

  mysqli_query($link,"UPDATE medicamentos set nombre='$nombre', codigo='$codigo', fecha_ad='$fecha_ad', fecha_cad='$fecha_cad', marca='$marca', cant='$cant' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='medicamentos.php';
                </script>";
?>