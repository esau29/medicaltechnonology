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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Medicamentos <b class="caret"></b></a>
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
<IMG SRC="../images/luz.png" ALIGN="right"  WIDTH=400 HEIGHT=400 >
   

    
    <!-- fin de indicador -->
    <div class="col-md-5 col-md-offset-3">

        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Modificar Medicamentos</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      <!-- Código para la conexión a base de datos-->
                      <?php
                         require_once("../conexion/conexion.php");
                      $opcion = $_GET['id'];
                      $result=mysqli_query($link,"SELECT * FROM empleados WHERE id='$opcion'");
                      $consulta = mysqli_fetch_array($result);
					  ?>
                      <!-- fin de la conexión -->
                      <table width="100%">
                      <form action="modificar_empleados.php" method="post" id="frmmodificarempleados">
                      <tr class="espacio"> 
                      <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $consulta['id'];?>">
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre Completo:</label></td><td><input type="text" class="form-control" name="nombre" id="nombre" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"  autofocus required value="<?php echo $consulta['nombre'];?>"></td>
                      </tr> 
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="dir">Dirección:</label></td><td><input type="text" class="form-control" name="dir" id="dir" required value="<?php echo $consulta['dir'];?>"></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="tel">Telefono:</label></td><td><input maxlength="10" type="tel" class="form-control" name="tel" id="tel" required value="<?php echo $consulta['tel'];?>"></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="correo">Correo Electronico:</label></td><td><input type="text" class="form-control" name="correo" id="correo" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required value="<?php echo $consulta['correo'];?>"></td>
                      </tr>
                      
                      <tr class="espacio">
                     <td align="right"><label>Sexo:</label></td><td><select name="sexo" id="sexo" class="form-control">
                            	
                                <option value="<?php echo $consulta['sexo'];?>"><?php echo $consulta['sexo'];?></option>
                                <?php if ($consulta['sexo'] == 'Hombre')
                                { 
                                  echo"<option value='Mujer'>Mujer</option>";
                                }
                                else if ($consulta['sexo'] == 'Mujer')
                                {
                              	  echo"<option value='Hombre'>Hombre</option>";
                                }
                                
                                ?>
                                </tr>
                                        
                            </td>
                            
                     <tr class="espacio">
                      <td align="right"> <label for="fecha_nac">Fecha de Nacimiento:</label></td><td><input type="text" class="form-control" name="fecha_nac" id="fecha_nac" required readonly value="<?php echo $consulta['fecha_nac'];?>"></td><td><span><img src="../images/calendar1.gif" width="20px" height="20px" onClick="displayCalendar(document.forms[0].fecha_nac,'yyyy-mm-dd',this)"></span></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="cedula">Cedula:</label></td><td><input type="text" class="form-control" name="cedula" id="cedula" required value="<?php echo $consulta['cedula'];?>"></td>
                      </tr>
                     <tr class="espacio"> 
                      <td align="right"> <label for="cargo">Cargo:</label></td><td><input type="text" class="form-control" name="cargo" id="cargo" required value="<?php echo $consulta['cargo'];?>"></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="area_tra">Area de Trabajo:</label></td><td><input type="text" class="form-control" name="area_tra" id="area_tra" required value="<?php echo $consulta['area_tra'];?>"></td>
                      </tr>
                      
                      <tr class="espacio">
                     <td align="right"><label>Estado Civil:</label></td><td><select name="edo_civil" id="edo_civil" class="form-control">
                            	
                                <option value="<?php echo $consulta['edo_civil'];?>"><?php echo $consulta['edo_civil'];?></option>
                                <?php if ($consulta['edo_civil'] == 'Soltero')
                                { 
                                  echo"<option value='Casado'>Casado</option>";
                                }
                                else if ($consulta['edo_civil'] == 'Casado')
                                {
                              	  echo"<option value='Soltero'>Soltero</option>";
                                }
                                
                                ?>
                                        
                            </td>
     				 
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar"></td>
                      </tr>
                  	  </form>
                      </table>
                      <!-- termina la tabla -->
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
