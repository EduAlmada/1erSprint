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
        <form class="col-12"> <!-- Que utilice todo el espacio disponible -->

            <div class="form-group" id="user-group"> <!-- Puse el nombre user group para el css -->

                <input type="text" class="form-control" placeholder="Nombre de usuario"/>
            
            </div>
            <div class="form-group" id="contraseña-group">
                    <input type="password" class="form-control" placeholder="Contraseña"/>

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