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
<!-- <BODY BACKGROUND="images/522.jpg">  -->
<BODY BACKGROUND="images/fondo4.jpg">

</head>

<body>

<?php
include('fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1100px"> <label>Bienvenido usuario '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	header('Location:index.php');
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
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="pacientes/paciente.php">Consultar</a>
                            </li>
                            <li>
                                <a href="pacientes/registrar.php">Registrar cita</a>
                            </li>
                        </ul>
                    </li> -->
                         
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
                    
                    <li class="selected"><a href="ApiUsuario.php">Ubicacion</a></li>
                    <!-- <li class="selected"><a href="privacidadUs.php">Privacidad</a></li>
                    <li class="selected"><a href="Acerca.php">Acerca de</a></li> -->
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    
    </header>
    
    <body>

<h3 class="text-center" style=color:white><b>Ruta Obtenida</b></h3>
<iframe width="99%" height="80%" style="border:10; margin-left:5px" allowfullscreen 
   src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDU3hHPwh9GosRnleQRhg3Y0GPfb7VERyA&q=consultorio,ocosingo">
</iframe>   
</body>