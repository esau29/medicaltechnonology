<?php
session_start();
if ($_SESSION['tipo'] != 'Usuario') {
	
	
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

    <title>Hospital de " la Selva "</title>

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
    
<BODY BACKGROUND="../images/522.jpg">
</head>

<body>
	<?php
include('../fsesion.php');
if (verificar_usuario()){
	echo '<br><p align="right"> <label>Bienvenido '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="../salir.php"> Cerrar sesi&oacute;n </a> </label></p> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	header('Location:../index.php');
	}
?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                                <a href="../pacientes/paciente.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../pacientes/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                         
                          <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diagnosticos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="dia.php">Consultar</a>
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
                                <a href="javascript:abrirReportedia()">Diagnosticos</a>
                            </li>
                        </ul>
                    </li>
                    
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<IMG SRC="../images/luz.png" ALIGN="right"  WIDTH=400 HEIGHT=400 >
   
       <!-- Page Content -->
    <div class="container" >
        <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Registrar Diagnostico</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      
                      <table width="100%">
                      <form action="alta_dia.php" method="post" id="frmdiagnostico">
                      <tr class="espacio"> 
                      <td align="right"> <label for="nomb">ID del Paciente:</label></td><td><input title="Solo se aceptan numeros"  type="text" class="form-control" name="nomb" id="nomb" placeholder="la ID" autofocus required onkeyup=???javascript:this.value=this.value.toUpperCase();???></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="edad">edad:</label></td><td><input maxlength="3"   type="tel" class="form-control" name="edad" id="edad" placeholder="Ingrese la edad"  required onkeyup=???javascript:this.value=this.value.toUpperCase();???></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="area">Area donde se atendio el paciente:</label></td><td><input title="Solo se aceptan letras" pattern="[\sa-zA-Z????????????????????????????]+"  type="text" class="form-control" name="area" id="area" placeholder="Ingrese el Area"  required onkeyup=???javascript:this.value=this.value.toUpperCase();???></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre del Doctor:</label></td><td><input title="Solo se aceptan letras" pattern="[\sa-zA-Z????????????????????????????]+"  type="text" class="form-control" name="doc" id="doc" placeholder="Ingrese el Nombre del Doctor"  required onkeyup=???javascript:this.value=this.value.toUpperCase();???></td>
                      </tr> 
                      <tr class="espacio">
                      <td align="right"> <label for="fec">Fecha de la Consulta:</label></td><td><input type="text" class="form-control" name="fec" id="fec" required readonly></td><td><span><img src="../images/calendar1.gif" width="20px" height="20px" onClick="displayCalendar(document.forms[0].fec,'yyyy-mm-dd',this)"></span></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="dia">Diagnostico:</label></td><td><textarea class="form-control" name="dia" id="dia" placeholder="Ingrese su Diagnostico"  required onkeyup=???javascript:this.value=this.value.toUpperCase();???></textarea></td>
                      </tr>
                      
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar"></td>
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
                    <p>Copyright 2018 &copy; Hospital de " la Selva "</p>
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
