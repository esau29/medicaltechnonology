
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

    <!-- <body style="background-image: url('images/fondo4.jpg'); background-size: cover; background-repeat: no-repeat;"> -->
    <section>
        <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #3c97e8;" >
        <a class="navbar-brand" href="../principal.php">Inicio</a>
    </section>
   
                
   
   
       <!-- Page Content -->
    <div class="container" >
        <div class="col-md-5 col-md-offset-3" style="margin-top: 30px;">
        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Registrar Paciente</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      
                      <table width="100%">
                      <form action="alta_paciente.php" method="post" id="frmpaciente">
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre Completo:</label></td><td><input title="Solo se aceptan letras" pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]+"  type="text" class="form-control" name="nombre" id="nombre" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" placeholder="Ingrese un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                      </tr> 
                      <tr class="espacio"> 
                      <td align="right"> <label for="tel">Telefono:</label></td><td><input maxlength="10" type="tel" class="form-control" name="tel" id="tel" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;"  placeholder="Ingrese el numero telefonico" required></td>
                      </tr>
                      <tr class="espacio">
                      <td align="right"> <label for="email">Correo:</label></td><td><input type="email" class="form-control" name="email" id="email" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" placeholder="Correo electronico" required></td>
                      </tr>
                    
                       <tr class="espacio">
                      <td align="right"><label for="sexo">Sexo:</label></td><td><select  class="form-control" name="sexo" id="sexo" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" >
                      <option value="Hombre">Hombre</option>
                      <option value="Mujer">Mujer</option>                    
             		  </select>
             		  </td>
             		  </tr>

                       <tr class="espacio">
                      <td align="right"> <label for="fecha">Fecha de cita:</label></td><td><input type="text" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" class="form-control" name="fecha" id="fecha" required readonly></td><td><span><img src="../images/calendar1.gif" width="20px" height="20px" onClick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)"></span></td>
                      </tr>

                      <tr class="espacio">
                      <td align="right"> <label for="time">Hora:</label></td><td><input type="time" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" class="form-control" name="hora" id="time" placeholder="Hora" required></td>
                      </tr>
                      
                       <tr class="espacio"> 
                      <td align="right"> <label for="tipo_sangre">Tipo de Cita:</label></td><td><input type="text" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" class="form-control" name="tipo_cita" id="tipo_cita" placeholder="Ingrese el tipo de cita" required ></td>
                      </tr>
                      
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar" style="margin-top: 15px;"></td>
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
