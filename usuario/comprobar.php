<?php
      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
      	require_once("../conexion/conexion.php");
            //$con = mysqli_connect('localhost','root');
           // mysqli_select_db($link,'refaccionaria');
       
            $sql = mysqli_query($link,"select usuario from usuario where usuario='$b'");
             
            $contar = mysqli_num_rows($sql);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:white;'>Usuario Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>No disponible.</span>";
            }
      }    
?>