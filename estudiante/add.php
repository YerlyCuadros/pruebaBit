<?php

include_once('../config/config.php');
include('Estudiante.php');


if ( isset($_POST) && !empty($_POST)){
   $e = new Estudiante();

   $save = $e->guardar($_POST);
   if ($save){
       $mensaje = '<div class="alert alert-warning" > Sección registrada </div>';
   }else{
      $mensaje = '<div class="alert alert-dark" > Error de registro </div>';
    }  
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de estudiantes</title>
    <link rel="stylesheet" href="../assets/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-pink">
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a class="nav-link" href="<?= ROOT ?>/index.php">Inicio</a>
            </li>
            <li class="navbar-item">
                <a class="nav-link" href="<?= ROOT ?>/estudiante/add.php">Registro de estudiantes</a>
            </li>
            <li class="navbar-item">
                <a class="nav-link" href="<?= ROOT ?>/estudiante/download.php">Descarga de certificados</a>
            </li>
        </ul>
    </nav>
    <div class="container text-center">
        <?php 
       if(isset($mensaje)){
           echo $mensaje;
       }
    ?>
        <h2 class="text-center mb-2">Registro de estudiantes</h2>
        <form method="POST" enctype="multipart/form-data">



            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombres del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="text" name="apellido" id="apellido" placeholder="Apellidos del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="number" name="codigoBit" id="codigoBit" placeholder="Codigo del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="numero" name="cedula" id="cedula" placeholder="Cédula del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="text" name="carrera" id="carrera" placeholder="Carrera del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="number" name="telefono" id="telefono" placeholder="Telefono del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="text" name="direccion" id="direccion" placeholder="Dirección del estudiante"
                        class="form-control" />
                </div>
            </div>

            <div class="form-group row mb-2">
                <div class="form-group col-md-6">
                    <input type="email" name="correo" id="correo" placeholder="Email del estudiante"
                        class="form-control" />
                </div>
            </div>

            <button class="btn btn-dark">Registrar</button>

        </form>
    </div>
</body>

</html>