<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$fecha_nac = $_POST['fecha_nac'];
$tel = $_POST['tel'];
$dir = $_POST['dir'];
$sexo = $_POST['sexo'];
$tipo_sangre = $_POST['tipo_sangre'];
$nss = $_POST['nss'];
$en = $_POST['en'];
  mysqli_query($link,"UPDATE pacientes set nombre='$nombre', fecha_nac='$fecha_nac', tel='$tel', dir='$dir', sexo='$sexo', tipo_sangre='$tipo_sangre', nss='$nss', en='$en' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='paciente.php';
                </script>";
?>