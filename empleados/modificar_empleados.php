<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
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

  mysqli_query($link,"UPDATE empleados set nombre='$nombre', dir='$dir', tel='$tel', correo='$correo', sexo='$sexo', fecha_nac='$fecha_nac', cedula='$cedula', cargo='$cargo', area_tra='$area_tra', edo_civil='$edo_civil' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='empleados.php';
                </script>";
?>