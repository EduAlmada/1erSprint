<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php") ?>
    <link rel="stylesheet" href="css/login.css">
    </head>
<body>

        
<?php include("nav.php") ?>

            <div class="navspacer p-4"></div> <!-- Separador para que no tape el fixed-top -->
    <div class="modal-dialog text-center"><!-- para que me aparezca en el cuadradro y todo alineado al medio -->


        <div class="col-sm 8 main-section"> <!-- Para decir que uso 3/4 de pagina -->

            <div class="modal-content"> <!-- El contenido del cuadrado -->

                <div class= "col-12 user-img">
                    <img src="img/AVATAR.png">
        </div>
        <!--Fecha:30/11/2019 Agregado por rodrigo: Se agregó el atributo "action" y "method" a la etiqueta "form"  -->
        <form class="col-12" action="controladores/validacionLogin.php" method="POST"> <!-- Que utilice todo el espacio disponible -->

            <div class="form-group" id="user-group"> <!-- Puse el nombre user group para el css -->

            <!--Fecha:30/11/2019 Agregado por rodrigo: Se agregó el atributo "name" a la etiqueta "input"  -->
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="nombre" >
            
            </div>
            <div class="form-group" id="contraseña-group">
               
           <!--Fecha:30/11/2019 Agregado por rodrigo: Se agregó el atributo "name" a la etiqueta "input"  --> 
                    <input type="password" class="form-control" placeholder="Contraseña" name="password">

            </div>
            <button class="btn btn-primary" type="submit">Ingresar</button> <!-- btn=bootstrap -->

        </form>
        <div class="col-12 forgot">
            <a href="#">Recordar contraseña</a> <!-- # para decirle que nos nos redirija para otro lado -->

        </div>


        </form>
            </div>
</div>
</div>

<?php include("footer.php") ?>
<?php include("scripts.php") ?>
   
</body>




</html>