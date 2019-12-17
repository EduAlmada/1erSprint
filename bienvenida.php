<?php

session_start();
$usuarioLogueado=$_GET['usuario'];

$_SESSION['nombreLogueado']=$usuarioLogueado;

?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("head.php") ?>

</head>

<body>
<?php include("nav.php") ?>


<div class="alert alert-success" role="alert">
  Bienvenida/o <?php echo $_SESSION['nombreLogueado']  ?>
</div>


<?php include("footer.php") ?>
<?php include("scripts.php")?>    
</body>
</html>