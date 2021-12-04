



<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$tipo_cita = $_POST['tipo_cita'];

  mysqli_query($link,"UPDATE pacientes set nombre='$nombre', tel='$tel', email='$email', sexo='$sexo', fecha='$fecha', hora='$hora', tipo_cita='$tipo_cita' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='paciente.php';
                </script>";
?>