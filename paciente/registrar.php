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
    <link rel="icon" href="images/tipologo.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/dhtmlgoodies_calendar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<BODY BACKGROUND="../images/fondo4.jpg">
</head>

<body>
<?php
include('../fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1200px"> <label>Bienvenido '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="../salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
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
                                <a href="paciente.php">Consultar</a>
                            </li>
                            <li>
                                <a href="registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                     <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diagnosticos <b class="caret"></b></a>
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
                                <a href="../usuario/usuario.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../usuario/registrar.php">Registrar</a>
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
<!-- <IMG SRC="../images/jorge.jpg" ALIGN="right"  WIDTH=400 HEIGHT=400; style="border-radius: 30px;"> -->
   
       <!-- Page Content -->
    <div class="container" style=" margin-top: -25px;">
        <div class="col-md-5 col-md-offset-3" >
        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Registrar Paciente</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      
                      
                      <table width="100%">
                      <form action="alta_paciente.php" method="post" id="frmpaciente">
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre Completo:</label></td><td><input title="Solo se aceptan letras" pattern="[\sa-zA-Z????????????????????????????]+"  type="text" class="form-control"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" name="nombre" id="nombre" placeholder="Ingrese un nombre" autofocus required onkeyup=???javascript:this.value=this.value.toUpperCase();???></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="tel">Telefono:</label></td><td><input maxlength="10" type="tel" class="form-control" name="tel" id="tel" placeholder="Ingrese el numero telefonico"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;"  required ></td>
                      </tr>
                      <tr class="espacio">
                      <td align="right"> <label for="email">Correo:</label></td><td><input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" required></td>
                      </tr>
                      
                                         
                    
                       <tr class="espacio">
                      <td align="right"><label for="sexo">Sexo:</label></td><td><select   style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" class="form-control" name="sexo" id="sexo" >
                      <option value="Hombre">Hombre</option>
                      <option value="Mujer">Mujer</option>                    
             		  </select>
             		  </td>
             		  </tr>

                       <tr class="espacio">
                      <td align="right"> <label for="fecha">Fecha de cita:</label></td><td><input type="text"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" class="form-control" name="fecha" id="fecha" required readonly></td><td><span><img src="../images/calendar1.gif" width="20px" height="20px" onClick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)"></span></td>
                      </tr>

                      <tr class="espacio">
                      <td align="right"> <label for="time">Hora:</label></td><td><input type="time"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" class="form-control" name="hora" id="time" placeholder="Hora" required></td>
                      </tr>
                      
                                                        
                      
                       <tr class="espacio"> 
                      <td align="right"> <label for="tipo_sangre">Tipo de Cita:</label></td><td><input type="text"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;" class="form-control" name="tipo_cita" id="tipo_cita" placeholder="Ingrese el tipo de cita" required ></td>
                      </tr>
                                         
                     
                      
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar"  style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 15px;"></td>
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

</body>

</html>
