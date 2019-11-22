<?php
 /* #############################################
Este archivo contiene:
-El menu de navegación: la etiqueta <nav>
################################################*/
?>
<!-- Navbar, fixed-top-->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- la marca del comercio-->
        <a class="navbar-brand" href="" target="_blank">
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
                <a class="nav-link" href="Index.html">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" target="_blank">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="" target="_blank">Locales</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.html" target="_blank">F.A.Q. Preguntas frecuentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" target="_blank">Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Index.html" target="_blank">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formularioContacto.php" target="_blank">Contacto</a>
            </li>
        </ul>
        <!-- links de la derecha -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link">
                <span class="badge red z-depth-1 mr-1"> 1 </span>
                <i class="fas fa-shopping-cart"></i>
                <span class="clearfix d-none d-sm-inline-block"> Carrito </span>
                </a>
            </li>
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
        </ul>
    </div>
    </div>
</nav>