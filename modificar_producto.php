<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query(" select *from persona where id=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b28e2846c.js" crossorigin="anonymous"></script>
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secundary">Modificar personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include "controlador/modificar_persona.php";
        while($datos=$sql->fetch_object()){?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cedula</label>
            <input type="text" class="form-control" name="cedula" value="<?= $datos->cedula ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha_nac ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" value="<?= $datos->correo ?>">
        </div>
        <?php }
        ?>
       

        <button type="submit" class="btn btn-primary" name="btn_registrar" value="Ok">Modificar Registro</button>
    </form>
</body>

</html>