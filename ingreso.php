<?php
include ('fsesion.php');
//uso de la funcion verificar_usuario()
if (verificar_usuario()){
	//si el usuario es verificado puede acceder al contenido permitido a el
	print "Hola $_SESSION[usuario]<br/>Ingresa a otra parte del sistema si deseas <a href='sistema.php'>clic aqui</a><br/>";
	print "Desconectarse <a href='salir.php'/>aqui</a>";

	$saludo=$_SESSION['tipo'];

	if ($saludo=="Administrador") {
		echo "<script language='JavaScript'>document.location='principal.php';</script>";
	};

	if ($saludo=="Usuario") {
		echo "<script language='JavaScript'>document.location='prin.php';</script>";
	};
} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	echo "<script language='JavaScript'>document.location='index.php';</script>";

	

}
?>