<?php
$nombre = $_POST['nombre'];
$fecha_nac = $_POST['fecha_nac'];
$tel = $_POST['tel'];
$dir = $_POST['dir'];
$sexo = $_POST['sexo'];
$tipo_sangre = $_POST['tipo_sangre'];
$nss = $_POST['nss'];
$en = $_POST['en'];



require_once ("../conexion/conexion.php");
$sql = "INSERT INTO pacientes (nombre,fecha_nac,tel,dir,sexo,tipo_sangre,nss,en) VALUES('$nombre','$fecha_nac','$tel','$dir','$sexo','$tipo_sangre','$nss','$en')";

$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='paciente.php';
                }
 </script>";
?>