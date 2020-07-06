<?php
  include("config/config.php");
  getFolderProyect();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/estilo.css">
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

        <div class="container">
        <h1 class="text-center">Certificados Estudiantes</h1>
    </div>
</body>

</html>