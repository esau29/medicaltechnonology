<?php
  require_once ("conexion/conexion.php");
  if(isset($_GET["id"]) && isset($_GET["token"])){
    $token=$_GET["token"];
    $id=$_GET["id"];
    $sql = "SELECT * FROM usuario WHERE token='$token' && id='$id'";
    $result = mysqli_query($link,$sql);
    if (mysqli_num_rows($result)==0){
      echo "<script language='JavaScript'>
        alert('Acceso no permitido');
        document.location='index3.php';
      </script>";
    }
  }else{
    echo "<script language='JavaScript'>
        alert('Acceso no permitido');
        document.location='index3.php';
      </script>";
  }

  if(isset($_POST["pass"])){
    $pass=$_POST["pass"];
    $id=$_POST["id"];
    mysqli_query($link,"UPDATE usuario set pass='$pass' where id='$id'"); 
    echo "<script language='JavaScript'>
        alert('Su contraseña fue cambiada');
        document.location='index.php';
      </script>";
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
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <BODY BACKGROUND="images/.jpg"> 

</head>

<section>
<nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #3c97e8" >
<img src="images/logomedical.png" height="70" style="margin-left: 70px;margin-right: 5px; margin-top: 1px; border-radius:20px">  
</section>

<body style="background-image: url('images/fondo4.jpg'); background-size: cover; background-repeat: no-repeat;">
<div id="main">
    <header>
      <table style="width:100%;">
      <tr>
        <td>
          <h1></h1>
        </td>
        <td class="alinear_td">
       
        </td>
      </tr>
      <A></A> <FONT FACE="raro, courier" SIZE=4 COLOR="#060606"><H1></H1></FONT> </A>
      </table>
      <br>
      </br>
      <nav>
      <button style="font-size:15px; border-radius:30px; background-color:white; margin-left:10px; margin-right:90%;">
          <li class="selected"><a href="index3.php">Ir al inicio</a></li>
    </button>
      </nav>
    </header>
      
     </div>
     
     
   
    <div class="col-md-4 col-md-offset-4">

      <div class="panel panel-primary">
        <!-- default panel contents -->
        <div class="panel-heading">Nueva Contraseña</div>
        <div class="panel-body">
        <!-- Inicia la tabla -->
        <table width="100%">

        <form action="" method="post" id="frmlogin">

          <tr class="espacio">
        <!-- <td align="center"><img src="images/tipologo.png" width="200" height="100"> </td> -->
        </tr>
               
        <tr class="espacio">
        <td align="right"> <label for="pass">Escribir nueva Contraseña:</label></td><td><input type="password" class="form-control" style="border-color: #3c97e8; border-width: 3px; border-radius: 25px; margin-top: 10px;" name="pass" id="pass" placeholder="Ingrese un password" required></td>
        <input type="hidden" value="<?php echo $id?>" name="id">
        <div>
        <tr>
  <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="enviar">

  </tr>        
        </form>
        </table>
        
        <!-- termina la tabla -->                  
    
</body>

</html>
