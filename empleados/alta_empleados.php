<?php
$nombre = $_POST['nombre'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
$correo = $_POST['correo'];
$sexo = $_POST['sexo'];
$fecha_nac = $_POST['fecha_nac'];
$cedula = $_POST['cedula'];
$cargo = $_POST['cargo'];
$area_tra = $_POST['area_tra'];
$edo_civil = $_POST['edo_civil'];


require_once ("../conexion/conexion.php");
$sql = "INSERT INTO empleados (nombre,dir,tel,correo,sexo,fecha_nac,cedula,cargo,area_tra,edo_civil) VALUES('$nombre','$dir','$tel','$correo','$sexo','$fecha_nac','$cedula', '$cargo','$area_tra','$edo_civil')";

$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='empleados.php';
                }
 </script>";
?>