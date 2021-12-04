<?php
session_start();
if ($_SESSION['tipo'] != 'Usuario') {
	
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
    <BODY BACKGROUND="images/fondo4.jpg">
</head>

<body>

<?php
include('fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1100px"> <label>Bienvenido usuario '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	
    echo "<script language='JavaScript'>document.location='index3.php';</script>";
    
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
            <img src="images/logomedical.png" height="70" style="margin-left: 10px;margin-right: 2px; margin-top: 1px; border-radius:20px">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<b class="caret"></b></a> -->
                        <ul class="dropdown-menu">
                            <!-- <li>
                                <a href="pacientes/paciente.php">Consultar</a>
                            </li> -->
                            <li>
                                <a href="pacientes/registrar.php">Registrar cita</a>
                                
                            </li>
                        </ul>
                    </li>
                         
                    <!-- No USAR -->
                          <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Citas Medicas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="consulta/dia.php">Consultar</a>
                            </li>
                            <li>
                            <a href="consultas/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li> -->
                                        
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:abrirReportepaciente()">Pacientes</a>
                            </li>
                            <li>
                                <a href="javascript:abrirReportedia()">Diagnosticos</a>
                            </li>
                        </ul>
                    </li> -->
                                <li class="selected"><a href="pacientes/registrar.php">Registrar Cita</a></li>
                                <li class="selected"><a href="ApiUsuario.php">Ubicacion</a></li>
                                <li class="selected"><a href="privacidadUs.php">Privacidad</a></li>
                                <li class="selected"><a href="Acerca.php">Acerca de</a></li>
                    
                   
                    
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
                <div class="fill" style="background-image:url('images/consultorio1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/con2.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/consultorio.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/me.jpg');"></div>
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
	
    
	<div class="column" style="margin: 50px 30px; margin-left: 70px;">
	
    <h1 style="margin: 3px 54px;"><center> ¿QUIÉNES SOMOS? </center></h1>

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

<h1 style="margin: 3px 54px;"><center> Visión </center></h1>

<p align="justify">Llegar a ser una de las empresas reconocidas a nivel mundial, brindando mejores
servicios a nuestros clientes usando servicios tecnológicos y hacer que nuestros
clientes se sientan seguros y cómodos con el servicio que ofrecemos en realizar
citas médicas.
<br>
<br>
<h1 style="margin: 3px 54px;"><center> Misión </center></h1>
<p align="justify">
Medical Technology es la empresa dedicada a prestar servicios en realizar citas
médicas online. Somos una empresa honesta y responsable, con nuestra
experiencia y compromiso queremos ganar confianza de nuestros clientes.
</p>
</p>

</div>

    
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
     function abrirReportepaciente(){
		window.open("reportes/paciente.php");
	}
	 function abrirReportedia(){
		window.open("reportes/dia.php");
	}
	 
    </script>


</body>

</html>

