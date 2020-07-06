<?php

   include_once('../config/config.php');
   include('../config/Database.php');

   class Estudiante{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->conectarBaseDeDatos();
        
    }
    
    function guardar($params){
        $nombre = $params['nombre'];
        $apellido = $params['apellido'];
        $codigoBit = $params['codigoBit'];
        $cedula = $params['cedula'];
        $carrera = $params['carrera'];
        $telefono = $params['telefono'];
        $direccion = $params['direccion'];
        $correo = $params['correo'];

        $insert = "INSERT INTO estudiantes VALUES (NULL, '$nombre', '$apellido', $codigoBit, $cedula, '$carrera', '$telefono', '$direccion', '$correo')";
        return mysqli_query($this->conexion, $insert);
         
         
    }

    function descargar($params){
        $cedula = $params['cedula'];
        $codigoBit = $params['codigoBit'];
     
        $sql = "SELECT * FROM estudiantes WHERE codigoBit=$codigoBit AND cedula=$cedula";

        $query = mysqli_query($this->conexion, $sql);
        $total = mysqli_num_rows($query);
        if ($total == 0){
           return false;
        }else{
            return $query;
        }
        
    
    }
    
    }

   

?>