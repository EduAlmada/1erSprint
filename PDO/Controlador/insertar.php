<?php

require_once("../Modelo/class.conexion.php");
require_once("../Modelo/class.consultas.php");

$mensaje=null;

$nombre=$_POST['nombre'];

$descripcion=$_POST['descripcion'];

$categoria=$_POST['categoria'];

$precio=$_POST['precio'];

if(strlen($nombre) > 0  &&  strlen($descripcion) > 0 && strlen($categoria) >0 && strlen($precio) >0){
  $consultas = new Consultas();
$mensaje= $consultas->insertarProducto($nombre,$descripcion,$categoria,$precio);

echo "<div class='container mt-4'>";
echo "<a href='../insertar.html' class='btn btn-outline-success mr-2'>Alta Producto <i class='fa fa-file-text-o'></i><a>";
echo "<a href='../verProductos.php'class='btn btn-outline-info'>Ver Productos <i class='fa fa-eye'></i><a>";


}else{
    echo "Campos vacios";
    echo "<a href='../insertar.html'>Nuevo Producto<a>";
}


echo "<div class='alert alert-success alert-dismissible fade show mt-4' role='alert'>
    ".$mensaje."
   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
   echo "</div>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>ABM Productos</title>
</head>
<body>
   
    
    
</body>
</html>