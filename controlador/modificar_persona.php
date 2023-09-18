<?php

if(!empty($_POST["btn_registrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"])
     and !empty($_POST["cedula"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $cedula=$_POST["cedula"];
        $fecha_nac=$_POST["fecha"];
        $correo=$_POST["correo"];
        
        $sql=$conexion->query(" update persona set nombre='$nombre',apellido='$apellido',cedula=$cedula,fecha_nac='$fecha_nac',correo='$correo' where id=$id");
        if($sql==1){
            header("location:index.php");
        }else{
            echo '<div class="alert alert-danger">Error al modificar producto</div>';

        }
    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
}
?>