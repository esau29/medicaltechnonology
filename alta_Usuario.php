<?php
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['pass'];




require_once ("conexion/conexion.php");
$sql = "INSERT INTO usuario (nombre,usuario,email,pass,tipo) VALUES('$nombre','$usuario','$email','$pass','Usuario')";


$consulta=mysqli_query($link,$sql );

echo "<script language='JavaScript'>document.location='ingreso.php';</script>";

?>