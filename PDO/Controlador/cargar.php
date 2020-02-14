<?php
function cargar(){
    $consultas = new Consultas();
    $filas = $consultas->cargarProductos();

    echo "<table class='table table-striped'>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Precio</th>
            </tr>";
    foreach ($filas as $fila) {
        echo "<tr>";
        echo "<td>".$fila['id_producto']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['descripcion']."</td>";
        echo "<td>".$fila['categoria']."</td>";
        echo "<td>".$fila['precio']."</td>";
        echo "<td><a href='Controlador/eliminar.php?id_producto=".$fila['id_producto']."' class='btn btn-outline-danger'><i class='fa fa-trash' alt='Eliminar'></i>
        </td>";
        echo "<td><a href='modificar.php?id_producto=".$fila['id_producto']."' class='btn btn-outline-info'><i class='fa fa-pencil' alt='Modificar'></i></td>";
        echo "</tr>";
    }

    echo "</table>";



}

//Creamos nueva function despues de crear el modelo Buscar
function buscar($nombre){
    $consultas = new Consultas();
    $filas = $consultas->buscarProductos($nombre);

    echo "<table class=' table table-striped'>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Precio</th>
            </tr>";
  if(isset($filas)){
    foreach ($filas as $fila) {
        echo "<tr>";
        echo "<td>".$fila['id_producto']."</td>";
        echo "<td>".$fila['nombre']."</td>";
        echo "<td>".$fila['descripcion']."</td>";
        echo "<td>".$fila['categoria']."</td>";
        echo "<td>".$fila['precio']."</td>";
        echo "<td><a href='Controlador/eliminar.php?id_producto=".$fila['id_producto']." class='btn btn-outline-success'><i class='fa fa-trash' alt='Eliminar'></i></td>";
        echo "<td><a href='modificar.php?id_producto=".$fila['id_producto']." class='btn btn-outline-success'><i class='fa fa-pencil' alt='Modificar'></i></td>";
        echo "</tr>";
    }

    echo "</table>";

  }
}

?>