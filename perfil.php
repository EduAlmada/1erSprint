<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>
<link rel="stylesheet" href="css/perfil.css">
    <body>
<?php include("nav.php") ?>

 <div class="navspacer p-4"></div> <!-- Separador para que no tape el fixed-top -->

                   
                       <div class="container">
                           

                          <h1>Perfil de Usuario</h1>
                          <img src="img/perfildeusuario.jpg" alt="Logo" width="70" height="70" ><br><br>

                 <form style="background-color:white">
                        <h3>Informacion de Usuario</h3>
                         <label for="APELLIDO">APELLIDO: </label>
                         <input type="apellido" name="apellido" id="apellido" size="40" maxlength="40" ><br>
                      
                         <label for="NOMBRE">NOMBRE: </label>
                         <input type="nombre" name="nombre" id="nombre" size="40" maxlength="40"><br>
                          <label for="FECHA DE NACIMIENTO">FECHA DE NACIMIENTO: </label>
                          <input type="fecha de nacimiento" name="fecha de nacimiento" id="fecha de nacimiento" size="40" maxlength="40"><br>
                         <label for="SEXO">SEXO: </label>
                         <input type=" sexo" name="sexo" id="sexo" size="30" maxlength="30"><br>
                         <label for="CONTRASEÑA">CONTRASEÑA: </label>
                         <input type="contraseña" name="contraseña" id="contraseña" size="40" maxlength="40"><br>
       
                         <h4>Informacion de Contacto</h4>
                         <label for="CORREO ELECTRONICO">CORREO ELECTRONICO: </label>
                         <input type="correo electronico" name="correo electronico" id="correo electronico" size="40" maxlength="40"><br>
                         <label for="TELEFONO">TELEFONO: </label>
                         <input type="telefono" name="telefono" id="telefono" size="30" maxlength="30"><br><b>
                         
                         <div style="text-align:right;">
                            
                         <button type="button" >Editar</button>
                         <button type=" button ">Guardar</button>
                        </div>
                 </form>
                 
                        </div>    
                     

<?php include("footer.php") ?>
<?php include("scripts.php") ?>

                
    </body>
</html>