<?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
	
	
    echo "<script language='JavaScript'>document.location='../index3.php';</script>";
	exit();
	return;
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medical Technology</title>
    <link rel="icon" href="images/tipologo.png">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/dhtmlgoodies_calendar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
<BODY BACKGROUND="../images/fondo4.jpg">
</head>

<body>
<?php
include('../fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1200px;"> <label>Bienvenido '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="../salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	header('Location:../index.php');
	}
?>	

    <!-- Navigation -->
    <nav class="navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #3c97e8">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../principal.php">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../paciente/paciente.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../paciente/registrar.php">Registrar Cita</a>
                            </li>
                        </ul>
                    </li>
                     <li class="dropdown">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diagnosticos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../consultas/dia.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../consultas/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Medicamentos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../medicamentos/medicamentos.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../medicamentos/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleados <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../empleados/empleados.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../empleados/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li> -->
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="usuario.php">Consultar</a>
                            </li>
                            <li>
                                <a href="registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                         
                         
                          
                                        
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:abrirReportepaciente()">Pacientes</a>
                            </li>
                            <li>
                                <a href="javascript:abrirReportemedicamentos()">Medicamentos</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!-- <IMG SRC="../images/l.png" ALIGN="right"  WIDTH=400 HEIGHT=400 > -->
   
       <!-- Page Content -->
    <div class="container" >
        <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Registrar Usuario</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      
                      <table width="100%">
                      <form action="alta_usuario.php" method="post" id="frmusuario">
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre Completo:</label></td><td><input title="Solo se aceptan letras"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]+"   type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                      </tr> 
                     
                      <tr class="espacio"> 
                      <td align="right"> <label for="usuario">Usuario:</label></td><td><input type="text"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" class="form-control" name="usuario" id="usuario" placeholder="Ingrese el Usuario"  required ><span id="resultado"</span></td>
                      </tr>

                      <tr class="espacio"> 
                      <td align="right"> <label for="email">Correo</label></td><td><input type="email"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" class="form-control" name="email" id="email" placeholder="Ingrese el correo"  required ><span id="resultado"</span></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="pass">Contraseña:</label></td><td><input title="Minimo 8 caracteres"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" type="password" class="form-control" name="pass" id="pass" pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ\d]{8}[\d\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]*" placeholder="Ingrese la contraseña"  required ></td>
                      </tr>
                       <tr class="espacio">
                      <td align="right"><label for="tipo">Tipo:</label></td><td><select  class="form-control"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" name="tipo" id="tipo" >
                      <option  value="Administrador">Administrador</option>
                      <option value="Usuario">Usuario</option>                    
             		  </select>
             		  </td>
             		  </tr>
                      
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;"></td>
                      </tr>
                  	  </form>
                      </table>
                      <!-- termina la tabla -->
                      </div>
                      </div>
                      </div>

        

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <!-- <p>Copyright 2018 &copy; Hospital de " la Selva "</p> -->
                </div>
            </div>
        </footer>

    </div>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/dhtmlgoodies_calendar.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    function abrirReportepaciente(){
		window.open("../reportes/paciente.php");
	}
	 function abrirReportemedicamentos(){
		window.open("../reportes/medicamentos.php");
	}
	 function abrirReportedia(){
		window.open("../reportes/dia.php");
	}
    </script>
<script type="text/javascript">
       //funcion para validar nombre de usuario existente
  $(document).ready(function(){
                         
      var consulta = "";
      //hacemos focus
      $("#usuario").focus();
                                                 
      //comprobamos si se pulsa una tecla
      var frmUsuario = document.getElementById("frmusuario");
      var enviar = true;
      $("#usuario").keyup(function(e){
      
             //obtenemos el texto introducido en el campo
             if(consulta != $("#usuario").val()){
                $("#resultado").empty();
             }
             consulta = $("#usuario").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1300).queue(function(n) {     
                                           
                        $.ajax({
                              type: "POST",
                              url: "comprobar.php",
                              data: "b="+consulta,
                              dataType: "html",
                              error: function(){
                                   // alert("error petición ajax");
                              },
                              success: function(data){   
                              		console.log(data);
                              		if (data.trim() == "<span style='font-weight:bold;color:red;'>No disponible.</span>") {
                              			console.log("false");
										enviar = false;
									} else {
										enviar = true;
										console.log("true");
									}                  
									                               
                                    $("#resultado").html(data);
                                    n();
                              }
                  });
                                           
             });
                                
      });
      
      frmUsuario.addEventListener("submit", function(ev){
		if (!enviar) {
			ev.preventDefault();
			return false;
		}
	
	});
                          
});


</script>
</body>

</html>
