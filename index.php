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
    <script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas elimar?");
            return respuesta;
        }
    </script>
    <h1 class="text-center p-3">BIENVENIDOS</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secundary">Registro de personas</h3>
            <?php
            include "modelo/conexion.php";
            include "controlador/eliminar_persona.php";
            include "controlador/registro_persona.php";
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cedula</label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="fecha">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btn_registrar" value="Ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Correo</th>
                    <th scope="col"></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql=$conexion->query(" select * from persona");
                while($datos=$sql->fetch_object()){?>

               
                <tr>
                    <td><?=$datos->id?></td>
                    <td><?=$datos->nombre?></td>
                    <td><?=$datos->apellido?></td>
                    <td><?=$datos->cedula?></td>
                    <td><?=$datos->fecha_nac?></td>
                    <td><?=$datos->correo?></td>
                    
                    <td>
                        <a href="modificar_producto.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php }
                ?>
                
            </tbody>
        </table>
    </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>