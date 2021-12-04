<?php
  
//funcion para conectar a la base de datos y verificar la existencia del usuario
function conexiones($usuario, $pass, $tipo) {
require_once("conexion/conexion.php");
	//sentencia sql para consultar el nombre del usuario

         
	//ejecucion de la sentencia anterior
	$result = mysqli_query($link, "select nombre,usuario,pass,tipo from usuario where usuario='$usuario' and pass='$pass'");

	//si existe inicia una sesion y guarda el nombre del usuario
	if (mysqli_num_rows($result)!=0){

		//inicio de sesion
		session_start();
		//configurar un elemento usuario dentro del arreglo global $_SESSION
		$row = mysqli_fetch_array($result);
		$nombre=$row[0];
 		$tipo=$row[3];
		$_SESSION['usuario']=$usuario;
    	$_SESSION['nombre']=$nombre;
    	$_SESSION['tipo']=$tipo;
		//retornar verdadero
		return true;
	} else {
		//retornar falso
		return false;
	}
}

//funcion para verificar que dentro del arreglo global $_SESSION existe el nombre del usuario
function verificar_usuario(){
	//continuar una sesion iniciada
	@session_start();
	
	//comprobar la existencia del usuario
	return $_SESSION['tipo'];
	
}
?>