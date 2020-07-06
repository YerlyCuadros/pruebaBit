<?php

include_once('../config/config.php');
include('Estudiante.php');


if ( isset($_POST) && !empty($_POST)){
   $e = new Estudiante();

$descarga = $e->descargar($_POST);

   if ($descarga==false){
      $mensaje = '<div class="alert alert-warning" > Usted no esta registrado </div>';
   }else{
       include('pdf.php');
       $pdf = new PDF();

       while ($datosEstudiante= mysqli_fetch_object($descarga)) {
           $mensaje = 'El/la estudiante '
           .$datosEstudiante->nombre.' '.$datosEstudiante->apellido
           .' con documento de identidad '.$datosEstudiante->cedula
           .' estudia actualmente la carrera de '.$datosEstudiante->carrera
           .' la cual tiene una duración de 5 meses.';
          }
       $pdf->imprimirContenido($mensaje);
       ob_end_clean();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
       $pdf->Output();
    
}
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar certificado</title>
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


    
    <h2 class="text-center mb-2">Descargar certificado</h2>

    <div class="container text-center">
        <?php 
       if(isset($mensaje)){
           echo $mensaje;
       }
    ?>

        <form method="POST">
            <div class="form-group row">
                <label for="cedula" class="col-sm-2 col-form-label">Cédula</label>
                <div class="col-sm-5">
                    <input name="cedula" type="number" class="form-control" id="cedula">
                </div>
            </div>
            <div class="form-group row">
                <label for="codigoBit" class="col-sm-2 col-form-label">CodigoBit</label>
                <div class="col-sm-5">
                    <input name="codigoBit" type="number" class="form-control" id="codigoBit">

                </div>
            </div>
            <button class="btn btn-dark">Descargar</button>

        </form>
    </div>


    <script src="../assets/funtion.js"></script>
</body>

</html>