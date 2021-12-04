<?php
$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$tipo_cita = $_POST['tipo_cita'];








require_once ("../conexion/conexion.php");
$sql = "INSERT INTO pacientes (nombre,tel,email,sexo,fecha,hora,tipo_cita) VALUES('$nombre','$tel','$email','$sexo','$fecha','$hora','$tipo_cita')";

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