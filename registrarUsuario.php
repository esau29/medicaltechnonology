
<!DOCTYPE html>
<html>

<!-- AQUI EMPIEZA EL DISEÑO PARA DAR FORMATO A LA TABLA DE REGISTROS -->

<head>
<title>Medical Technology</title>
<link rel="icon" href="images/tipologo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/dhtmlgoodies_calendar.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <BODY BACKGROUND="../images/fondo4.jpg">
</head>
<body style="background-image: url('images/fondo4.jpg'); background-size: cover; background-repeat: no-repeat;">

<section>


<nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #3c97e8" >
<img src="images/logomedical.png" height="70" style="margin-left: 70px;margin-right: 5px; margin-top: 1px; border-radius:20px">
       
       
    </nav>

<!-- AQUI FINALIZA EL DISEÑO DE LA TABLA PARA REGISTROS  -->

   
       <!-- Page Content -->
    <div class="container" >
        <div class="col-md-5 col-md-offset-3" style="margin-top: 100px;">
        <div class="panel panel-primary">
                      <!-- default panel contents -->
                      <div class="panel-heading">Registrar Usuario</div>
                      <div class="panel-body">
                      <!-- Inicia la tabla -->
                      
                      <table width="100%">
                      <form action="alta_Usuario.php" method="post" id="frmusuario">
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="nombre">Nombre Completo:</label></td><td><input style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" title="Solo se aceptan letras" pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]+"   type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese un nombre" autofocus required onkeyup=”javascript:this.value=this.value.toUpperCase();”></td>
                      </tr> 
                     
                      <tr class="espacio"> 
                      <td align="right"> <label for="usuario">Usuario:</label></td><td><input style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese el Usuario"  required ><span id="resultado"</span></td>
                      </tr>
                      <tr class="espacio">
                      <td align="right"> <label for="email">Correo:</label></td><td><input type="email" class="form-control" name="email" id="email" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 20px;" placeholder="Correo electronico" required></td>
                      </tr>
                      
                      <tr class="espacio"> 
                      <td align="right"> <label for="pass">Contraseña:</label></td><td><input type="password" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" title="Minimo 8 caracteres" type="password" class="form-control" name="pass" id="pass" pattern="[\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ\d]{8}[\d\sa-zA-ZáéíóúñÁÉÍÓÚÜüÑ]*" placeholder="Ingrese la contraseña"  required ></td>
                      </tr>
             		  </td>
             		  </tr>
                      
                      <tr>
        			  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Registrar"  title="Registrar" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" ></td>
                      </tr>
                  	  </form>
                      </table>
                      <!-- termina la tabla -->
                      </div>
                      </div>
                      </div>

        

        <!-- Footer -->
        

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
