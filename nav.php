<!-- Navbar, fixed-top-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- la marca del comercio-->
        <a class="navbar-brand" href="" target="_self">
            <strong class="blue-text">"Marca con Logo"</strong>
        </a>
        <!-- botón hamburguesa en collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- collapse -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- links de la izquierda -->
        <ul class="navbar-nav mr-auto"> 
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php" target="_self">Sobre Nosotros</a>
            </li>

           <!-- Se saca perfil.php para que aparezca cuando se haga click en el usuario,
           a su vez USUARIO LOGUEADO  aparecerá en la deracha del NAV -->
           <!-- <li class="nav-item">
                    <a class="nav-link" href="perfil.php" target="_self">Perfil</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="faq.php" target="_self">Preguntas frecuentes</a>
            </li>
            <?php if(!isset($SESSION['email'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="registro.php" target="_self">Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="controladores/verificarIngresoLogin.php" target="_self">Login</a>
            </li>
            <?php endif; ?>
            <?php if(isset($SESSION['email'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" target="_self">LogOut</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="formularioContacto.php" target="_self">Contacto</a>
            </li>
        </ul>
        <!-- links de la derecha -->
        <ul class="navbar-nav nav-flex-icons">
           
            <li class="nav-item">
                <a href="https://www.facebook.com" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.twitter.com" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com" class="nav-link" target="_blank">
                <i class="fab fa-instagram"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="vistaCarritoCompras.php">
                
                <i class="fas fa-shopping-cart" ></i>
               <!-- <span class="clearfix d-none d-sm-inline-block"> Carrito </span> -->
                <span class="badge red z-depth-1 mr-1">1</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="<?php
                if(isset($_SESSION['nombreLogueado'])){
                   echo "perfil.php";
                }
                else {echo "login.php";}

                ?>" target="_self">
                <span class="clearfix d-none d-sm-inline-block">
                <?php  
                
                if(isset($_SESSION['usuario'])){
                    $nombreLogueadoSession=$_SESSION['usuario'];
                    echo  $nombreLogueadoSession;
                }
               else {  echo "Invitado"; }
            
                ?></span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="controladores/logout.php?>" target="_self">
                <span class="clearfix d-none d-sm-inline-block">
                Cerrar sesión</span>
                </a>
            </li>
            
        </ul>
    </div>
    </div>
</nav>
