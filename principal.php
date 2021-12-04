<?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
	
	echo "<script language='JavaScript'>document.location='index3.php';</script>";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/dhtmlgoodies_calendar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
include('fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1140px"> <label>Bienvenido Admin '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	
    echo "<script language='JavaScript'>document.location='index.php';</script>";
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
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
            <img src="images/logomedical.png" height="70" style="margin-left: 10px;margin-right: 5px; margin-top: 1px; border-radius:20px">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="paciente/paciente.php">Consultar</a>
                            </li>
                            <li>
                                
                                <a href="paciente/registrar_cita.php">registrar cita</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Citas Medicas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="consultas/dia.php">Consultar</a>
                            </li>
                            <li>
                                <a href="consultas/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Medicamentos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="medicamentos/medicamentos.php">Consultar</a>
                            </li>
                            <li>
                                <a href="medicamentos/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- NO UTILIZARLO  -->

                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleados <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="empleados/empleados.php">Consultar</a>
                            </li>
                            <li>
                                <a href="empleados/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- NO SE UTILIZARÁ -->
                         
                         <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="usuario/usuario.php">Consultar</a>
                            </li>
                            <li>
                                <a href="usuario/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                          
                                        
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:abrirReportepacientes()">Pacientes</a>
                            </li>
                            <li>
                                <a href="javascript:abrirReportemedicamentos()">Medicamentos</a>
                            </li>
                            <!-- <li>
                                <a href="javascript:abrirReportedia()">Diagnosticos</a>
                            </li> -->
                            
                        </ul>
                    </li>

                    <li class="dropdown">
                        
                        <li class="selected"><a href="Api.php">Ubicacion</a></li>
                        <li class="selected"><a href="privacidad.php">Privacidad</a></li>
                        
                            
                        
                    

                    
                    
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/consultorio.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/con2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/logo1.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/citas.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <FIELDSET>
	<LEGEND ALIGN=CENTER><FONT FACE="times new roman" SIZE=7>Empresa MedicalTechnology</FONT></LEGEND>
  			  
    <section class="columns">

<div class="column">

    <img src="./images/jor.jpg" alt="" style="width: 28%; margin: 0px 30px; border-radius: 20px;">
    <img src="./images/jorgereal.jpg" alt="" style="width: 28%; margin: 0px 30px; border-radius: 20px;">
    <img src="./images/jo1.jpg" alt="" style="width: 28%; margin: 0px 30px; border-radius: 20px;">
</div>

<div class="column" style="margin: 50px 30px; margin-left: 60px;">
<h4 style="margin: 30px 540px;"><i> ¿QUIENES SOMOS? </i></h4>
    
    <p align="justify">Medical Technology trabaja con el proyecto de Una aplicación web que permitirá a
los usuarios poder realizar citas médicas a través de línea, sin la necesidad de asistir
físicamente al consultorio. Las citas médicas serán registradas en la bd, guardando
los datos del cliente. Para poder utilizar la aplicación web el usuario deberá crear su
cuenta ingresando usuario y contraseña, el usuario podrá realizar su cita médica y
podrá ver los días laborales del médico. De igual manera podrá ver la ruta del
consultorio a través de un mapa incrustado de google maps. Una vez realizado su
cita médica el usuario podrá cerrar sesión.
    <br>
    <br>	
    
    <H1> Vision</H1>
    
    <p align="justify">Llegar a ser una de las empresas reconocidas a nivel mundial, brindando mejores
servicios a nuestros clientes usando servicios tecnológicos y hacer que nuestros
clientes se sientan seguros y cómodos con el servicio que ofrecemos en realizar
citas médicas.
    <br>
    <br>
    <H1>Mision</H1>
    <p align="justify">
    Medical Technology es la empresa dedicada a prestar servicios en realizar citas
médicas online. Somos una empresa honesta y responsable, con nuestra
experiencia y compromiso queremos ganar confianza de nuestros clientes.
   </p>
   </p>

</div>
</section>
 
  
 
</FIELDSET>
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/dhtmlgoodies_calendar.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <script language="javascript"> 
    function confirmar(id){ 
    //No utilizar el nombre del método dentro de él
    

    }
     function abrirReportepacientes(){
		window.open("reportes/pacientes.php");
	}
	 function abrirReportemedicamentos(){
		window.open("reportes/medicamentos.php");
	}
	 function abrirReportedia(){
		window.open("reportes/dia.php");
	}
    </script>


</body>

</html>
