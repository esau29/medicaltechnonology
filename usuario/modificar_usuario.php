<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$tipo = $_POST['tipo'];

  mysqli_query($link,"UPDATE usuario set nombre='$nombre', usuario='$usuario', email='$email', pass='$pass', tipo='$tipo' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='usuario.php';
                </script>";
?>