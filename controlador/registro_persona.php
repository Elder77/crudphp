<?php

if(!empty($_POST["btn_registrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cedula"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
      
      $nombre=$_POST["nombre"];
      $apellido=$_POST["apellido"];
      $cedula=$_POST["cedula"];
      $fecha_nac=$_POST["fecha"];
      $correo=$_POST["correo"];

      $sql=$conexion->query (" insert into persona(nombre,apellido,cedula,fecha_nac,correo) values ('$nombre','$apellido',$cedula,'$fecha_nac','$correo')");
      if($sql==1){
        echo '<div class="alert alert-success">Persona registrada correctamente</div>';
      }else{
        echo '<div class="alert alert-danger">Error al registrar persona</div>';
      }
    }else{
      echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }

}

?>