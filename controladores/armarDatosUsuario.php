<?php 

/*Pasamos la variables validadas por las funciones que estan en "validacionRegistro.php" */
$nombreValidado=validarNombre();  
$emailValidado=validarEmail();
$passwordValidado=validarPassword();
$avatarValidado=cargarAvatar();

?>
