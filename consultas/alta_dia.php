<?php
$nomb = $_POST['nomb'];
$edad = $_POST['edad'];
$area = $_POST['area'];
$doc = $_POST['doc'];
$fec = $_POST['fec'];
$dia = $_POST['dia'];



require_once ("../conexion/conexion.php");
$sql = "INSERT INTO diagnostico (nomb,edad,area,doc,fec,dia) VALUES('$nomb','$edad','$area','$doc','$fec','$dia')";

$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar.php';
                }else{
                window.location.href='dia.php';
                }
 </script>";
?>