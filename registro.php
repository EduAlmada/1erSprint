<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<link rel="stylesheet" href="css/registro.css">
<body>
<?php include("nav.php"); 

		if ($_FILES["archivo"]["error"] == UPLOAD_ERR_OK) {
		$nombre = $_FILES["archivo"]["name"];
		$archivo2 = $_FILES["archivo"]["tmp_name"];
		$ext = pathinfo($nombre, PATHINFO_EXTENSION);
		$miarchivo = dirname(__FILE__);
		$miarchivo = $miarchivo . "\archivos/" . "Nuevo." . $ext;
		move_uploaded_file($archivo2, $miarchivo);
		}
		
?>	

	<section>
	<h1>CREAR CUENTA</h1>
	<form action="controladores/validacionRegistro.php" method="POST" enctype="multipart/form-data">		
		<br>
		<label>INFORMACIÓN DE USUARIO</label>
		<br>
		<input type="text" name="nombre" required placeholder="Nombre De Usuario">
		<br>
		<label>INFORMACIÓN DE INICIO DE SESIÓN</label>	
		<br>
		<input type="email" name="email" required placeholder="E-mail">		
		<br>
		<br>
		<input type="password" name="password" required placeholder="Contraseña">
		<br>
		<br>
		<input type="password" name="confirmar" required placeholder="Repetir contraseña">
		<div class="">
			<label for="file"></label>
			<input type="file" name="archivo">
		</div>
		<br>
		<br>
		<button type="submit">CREAR</button>	
	</form>
	</section>

	<?php include("footer.php") ?>
<?php include("scripts.php") ?>

	
	

</body>

	
</html>