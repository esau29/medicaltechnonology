<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nomb = $_POST['nomb'];
$edad = $_POST['edad'];
$area = $_POST['area'];
$doc = $_POST['doc'];
$fec = $_POST['fec'];
$dia = $_POST['dia'];

  mysqli_query($link,"UPDATE diagnostico set nomb='$nomb', edad='$edad', area='$area', doc='$doc', fec='$fec', dia='$dia' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='dia.php';
                </script>";
?>