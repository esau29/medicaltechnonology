<?php
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$pass = $_POST['pass'];





require_once ("../conexion/conexion.php");
$sql = "INSERT INTO usuario (nombre,usuario,email,pass) VALUES('$nombre','$usuario','$email','$pass')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='usuario.php';
                }
 </script>";
?>