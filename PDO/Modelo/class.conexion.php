<?php
class Conexion{
   
 //Preparamos nuestra conexion a la base de datos
  public function get_conexion(){
        $user="root";
        $pass="root";
        $host="localhost";
        $db="pdo";
        $conexion= new PDO("mysql:host=$host;dbname=$db;",$user,$pass);
        return $conexion;
    }
}
?>