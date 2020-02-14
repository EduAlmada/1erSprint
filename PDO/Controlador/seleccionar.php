<?php 

function seleccionar(){

    if(isset($_GET["id_producto"])){
        $consultas = new Consultas();
        $id_producto = $_GET["id_producto"];

        $filas=$consultas->cargarProducto($id_producto);

        foreach($filas as $fila) {
            echo '
             <div class="container mt-4">
             <h1>Modificar Producto</h1>

            <form action="" method="post">

                   <div class="form-group row">
                   <label for="Nombre"  class="col-sm-1 col-form-label">Nombre</label>
                   <div class="col-sm-5">
                       <input type="text" name="nombre" class="form-control" value="'.$fila['nombre'].'">
                   </div>
               </div>


               <div class="form-group row">
               <label for="Descripcion"  class="col-sm-1 col-form-label">Descripcion</label>
               <div class="col-sm-5">
                   <textarea class="form-control" name="descripcion" id="" cols="30" rows="10">"'.$fila['descripcion'].'"</textarea>
               </div>
           </div>

              
           <div class="form-group row">
           <label for="Categoria"  class="col-sm-1 col-form-label" >Categoria</label>
           <div class="col-sm-5">
           <input class="form-control" type="text" name="categoria"  value="'.$fila['categoria'].'">
           </div>
       </div>

       <div class="form-group row">
         
       <label for="Precio"  class="col-sm-1 col-form-label">Precio</label>
       <div class="col-sm-5">
           <input class="form-control" type="text" name="precio" value="'.$fila['precio'].'">
       </div>
   </div>

   <br>
   <button  class="btn btn-primary mb-4" type="submit"  value="Registrar" id="">Registrar</button>
        
    </form>
    
    </div>';
    
        }
        
    }

    }
   



?>