<?php
require_once("Modelo/class.conexion.php");
require_once("Modelo/class.consultas.php");
require_once("Controlador/cargar.php");
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

<div class="container mt-4"> <!--Inicio container -->

<h1>ABM Productos</h1>

<div class="mb-3">
<form class="form-inline " action="" method="get">

<nav class="navbar navbar-light bg-light">
    <form class="form-inline">
  <input type="text" class="form-control  mr-sm-2" name="buscar" placeholder="Escribí tu búsqueda" > 
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class='fa fa-search'></i></button>
  
  <a class="navbar-brand"><a href="insertar.html" class="btn btn-outline-success"><i class="fa fa-file-text-o"></i></a>
</nav>
</form>
</div>

 
 <?php
 
 if(isset($_GET['buscar'])){
   buscar($_GET['buscar']);
 }else{
  cargar();
 }
 
  ?>


</div> <!--Fin container -->



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</body>
</html>