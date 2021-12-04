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
<BODY BACKGROUND="../images/fondo4.jpg">
</head>

<body>
<?php
include('../fsesion.php');
if (verificar_usuario()){
	echo '<br><div style="margin-left:1200px"> <label>Bienvenido '.$_SESSION['usuario']; echo '<br> &nbsp; <a href="../salir.php"> Cerrar sesi&oacute;n </a> </label></div> ';
	//Aqui adentro se pone el contenido que deseas que sea visualizado por el usuario autenticado
		

} else {
	header('Location:../index3.php');
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
                <a class="navbar-brand" href="../prin.php">Inicio</a>
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
                         
                          <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diagnosticos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../consulta/dia.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../consulta/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                                        
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="javascript:abrirReportepaciente()">Pacientes</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   
    <h1> <IMG SRC="../images/tipologo.png" ALIGN=""  WIDTH=250 HEIGHT=100; style=" margin-top: -60px; margin-left:550px"> </h1>
   
    <div class="container">
    
    <!-- Código para realizar una consulta por medio de un parámetro-->
    
    <table  border="0" cellspacing="0" >
    <form action="#" method="post" id="frmbuscar">
     <tr class="espacio">
     <td align="right"> <label for="nombre">Nombre del Paciente:</label></td><td><input type="text" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 0px;" class="form-control" name="nombre" id="nombre" autocomplete="off"></td>
     <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Consultar"  title="Consultar" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 0px;"></td>
     </tr>
    <?php
	
	    require_once("../conexion/conexion.php");
        $usuario=$_SESSION["usuario"];
        $result = mysqli_query($link, "SELECT * FROM pacientes WHERE nombre = '$usuario'");
      echo "<table class='table table-striped'>";
      echo "<tr>
            <th class='success'>ID</th>                   
            <th class='success'>Nombre Completo</th>
            <th class='success'>Telefono</th>
            <th class='success'>correo</th>
            <th class='success'>Sexo</th>
            <th class='success'>Fecha</th>
            <th class='success'>Hora cita</th>
            <th class='success'>Tipo de cita</th>
            <th class='success'>Editar</th>
            <th class='success'>Eliminar</th>                                           
                                                                                                                                                    
                  
            </tr>";
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {
            
                $id =  $row['id'];
                $nombre =  $row['nombre'];
                $tel =  $row['tel'];
                $email =  $row['email'];
                $sexo =  $row['sexo'];
                $fecha =  $row['fecha'];
                $hora =  $row['hora'];
                $tipo_cita =  $row['tipo_cita'];
                
            
                                            
            echo "<tr>
         
            <td class='active'>$id</td>
            <td class='active'>$nombre</td>
            <td class='active'>$tel</td>
            <td class='active'>$email</td>
            <td class='active'>$sexo</td>
            <td class='active'>$fecha</td>
            <td class='active'>$hora</td>
            <td class='active'>$tipo_cita</td>
            
            
            
            <td class='active'><a href='modificar.php?id=$id'><img	width='32px' height='32px' src='../images/actualizar1.gif'/></a></td>
            <td class='active'><a onClick='confirmar($id)'><img width='32px' height='32px' src='../images/eliminar1.gif'/></a></td>
    
            
            </tr>";
            }
            echo "</table>";
            
            ?> 
            </form>                                                                                                                             
            </table> 
        
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
    </script>
    
    <script language="javascript"> 
    function confirmar(id){ 
    //No utilizar el nombre del método dentro de él
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_paciente.php?opcion="+id;
    }
    else{
		
		 return false;
	}

    }
     function abrirReportepaciente(){
		window.open("../reportes/paciente.php");
	}
	 function abrirReportedia(){
		window.open("../reportes/dia.php");
	}
	
    </script>


</body>

</html>
