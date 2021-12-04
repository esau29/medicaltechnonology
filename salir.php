<?php
include ('fsesion.php');
if (verificar_usuario()){
	//si el usuario es verificado, se elimina los valores,se destruye la sesion y volvemos al formulario de ingreso
	session_unset();
	session_destroy();
	
	echo "<script language='JavaScript'>document.location='index3.php';</script>";
} else {
	//si el usuario no es verificado vuelve al formulario de ingreso
	echo "<script language='JavaScript'>document.location='index3.php';</script>";
}
?>