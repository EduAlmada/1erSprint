<?php  session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include("head.php");?>
</head>
<body>
<?php include("nav.php"); ?>
<br>
<br>
<br>
<br>
<div class="alert alert-success" role="alert">
  Bienvenida/o <?php echo $_SESSION["usuario"];  ?>
</div>

<?php include("footer.php") ?>
<?php include("scripts.php")?>    
</body>
</html>