<?php
session_start();
if ($_SESSION['tipo'] != 'Administrador') {
	
	header('Location: ../index3.php');
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
                                <a href="../paciente/paciente.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../paciente/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Diagnosticos <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../consultas/dia.php">Consultar</a>
                            </li>
                            <li>
                                <a href="../consultas/registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Empleados<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="empleados.php">Consultar</a>
                            </li>
                            <li>
                                <a href="registrar.php">Registrar</a>
                            </li>
                        </ul>
                    </li>
                    
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

   <CENTER> <IMG SRC="../images/hosdelaselva.png" ALIGN=""  WIDTH=200 HEIGHT=200 > </CENTER>

    
    <div class="container">
    
    <!-- C??digo para realizar una consulta por medio de un par??metro-->
    
    <table  border="0" cellspacing="0" >
    <form action="#" method="post" id="frmbuscar">
     <tr class="espacio">
     <td align="right"> <label for="nombre">Nombre del Empleado:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off"></td>
     <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Consultar"  title="Consultar"></td>
     </tr>
    <?php
    	
      if(isset($_POST['nombre']) ){
	
						require_once("../conexion/conexion.php");
        
      $result = mysqli_query($link, "SELECT *FROM empleados WHERE nombre like '$_POST[nombre]%'");
    
     
      echo "<table class='table table-striped'>";
      echo "<tr>
                                      
                  <th class='success'>Nombre Completo</th>
                  <th class='success'>Direccion</th>
                  <th class='success'>Tel??fono</th>
                  <th class='success'>Correo Electronico</th>
                  <th class='success'>Sexo</th>
                  <th class='success'>Fecha de Nacimiento</th>
                  <th class='success'>Cedula</th>  
                  <th class='success'>Cargo</th>
                  <th class='success'>Area de Trabajo</th>
                  <th class='success'>Estado Civil</th>
                  <th class='success'>Editar</th> 
                  <th class='success'>Eliminar</th>                                      
                                                                                                                                              
                  
            </tr>";
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {
            
           

             $id =  $row['id'];
            $nombre =  $row['nombre'];
            $dir =  $row['dir'];
            $tel =  $row['tel'];
            $correo =  $row['correo'];
            $sexo =  $row['sexo'];
            $fecha_nac =  $row['fecha_nac'];
            $cedula =  $row['cedula'];
            $cargo =  $row['cargo'];
            $area_tra =  $row['area_tra'];
            $edo_civil =  $row['edo_civil'];                       
            echo "<tr>
         
            <td class='active'>$nombre</td>
            <td class='active'>$dir</td>
            <td class='active'>$tel</td> 
            <td class='active'>$correo</td>
            <td class='active'>$sexo</td>
            <td class='active'>$fecha_nac</td>
            <td class='active'>$cedula</td>
            <td class='active'>$cargo</td>
            <td class='active'>$area_tra</td>
            <td class='active'>$edo_civil</td>
            
            
            <td class='active'><a href='modificar.php?id=$id'><img	width='32px' height='32px' src='../images/actualizar1.gif'/></a></td>
            <td class='active'><a onClick='confirmar($id)'><img width='32px' height='32px' src='../images/eliminar1.gif'/></a></td>
    
            
            </tr>";    
            }
            echo "</table>";
            }
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
    //No utilizar el nombre del m??todo dentro de ??l
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_empleados.php?opcion="+id;
    }
    else{
		
		 return false;
	}

    }
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
