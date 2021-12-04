<?php
include ('fsesion.php');

//usuario y clave pasados por el formulario
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//usa la funcion conexiones() que se ubica dentro de fsesion.php
if (conexiones($usuario, $pass, $tipo ) ){
	//si es valido accedemos a ingreso.php
	echo "<script language='JavaScript'>document.location='ingreso.php';</script>";
} else {
	//si no es valido volvemos al formulario inicial
	echo "<script language='JavaScript'>document.location='index.php';</script>";
}
?>