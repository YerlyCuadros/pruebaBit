<?php

class Database{

    public $host = 'localhost';  
    public $user = 'root';
    public $pass = '';
    public $db = 'estudiantes';
    public $conexion;


    function conectarBaseDeDatos(){
        $cone = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
         
        if (mysqli_connect_error()){
            echo 'Error de conexión' . mysqli_connect_error();
        }
        
          return $cone;
          
    }
}

?>